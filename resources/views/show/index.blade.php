@extends('layouts.app')

@section('title', 'Liste des spectacles')

@section('content')
<div class="row small-up-2 large-up-4">
    <h3 class="text-center">Liste des {{ $resource }}</h3>
    @foreach ($shows as $show)
        <div class="column">
            <a href="{{ route('show.show', $show->id) }}" title="Plus d'info">
                <img class="thumbnail" src="{{ $show->poster_url }}">
            </a>
            <h5 class="text-center" class="text-center">{{ $show->title }}</h5>
            <p class="text-center">{{$show->price}}</p>
            <a href="{{ route('show.show', $show->id) }}" class="button expanded">Afficher</a>
        </div>
    @endforeach
      
    {{-- <div><h3><a href="{{ route('show.create') }}">Ajouter un artiste</a></h3></div> --}}
        
</div>
@endsection
