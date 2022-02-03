@extends('layouts.app')

@section('title', 'Liste des artistes')

@section('content')
<div class="row small-up-2 large-up-4">
    <h3 class="text-center">Liste des {{ $resource }}</h3>
    @foreach ($artists as $artist)
        <div class="column">
            <a href="{{ route('artist.show', $artist->id) }}" title="Plus d'info">
                <img class="thumbnail" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzSiIR4dlsyY7W36GFUi3pVAcMp5krhwWgGMIiH6wQqDZyLEXla9LFjStPExinONQISps&usqp=CAU">
            </a>
            <h5>{{ $artist->firstname }} {{ $artist->lastname }}</h5>
            <p>Infos de l'artiste</p>
            <a href="{{ route('artist.show', $artist->id) }}" class="button expanded">Afficher</a>
        </div>
    @endforeach
      
    <div><h3><a href="{{ route('artist.create') }}">Ajouter un artiste</a></h3></div>
        
</div>
@endsection
