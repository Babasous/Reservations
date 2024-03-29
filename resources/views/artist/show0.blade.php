@extends('layouts.app')

@section('title', 'Fiche d\'un artiste')

@section('content')
    <h1>{{ $artist->firstname }} {{ $artist->lastname }}</h1>

   {{--  <h2>Liste des types</h2>
    <ul>
        @foreach($artist->types as $type)    
            <li>{{ $type->type }}</li>
        @endforeach
    </ul> --}}

    <div><a href="{{ route('artist.edit' ,$artist->id) }}">Modifier</a></div>
    <div>
        <form action="{{ route('artist.destroy' ,$artist->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button>Supprimer</button>
        </form>
    </div>
    <nav><a href="{{ route('artist.index') }}">Retour à l'index</a></nav>
@endsection
