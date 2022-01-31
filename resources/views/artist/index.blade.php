@extends('layouts.app')

@section('title', 'Liste des artistes')

@section('content')
<div class="row small-up-2 large-up-4">
    <h3 class="text-center">Liste des {{ $resource }}</h3>
    @foreach ($artists as $artist)
        <div class="column">
            <a href="{{ route('artist.show', $artist->id) }}" title="Afficher">
                <img class="thumbnail" src="https://www.pngfind.com/pngs/m/610-6104451_image-placeholder-png-user-profile-placeholder-image-png.png">
            </a>
            <h5>{{ $artist->firstname }} {{ $artist->lastname }}</h5>
            <p>Infos de l'artiste</p>
            <a href="{{ route('artist.show', $artist->id) }}" class="button expanded">Afficher</a>
        </div>
    @endforeach
      
    <div><h3><a href="{{ route('artist.create') }}">Ajouter un artiste</a></h3></div>
        
</div>
@endsection
