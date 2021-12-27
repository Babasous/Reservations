@extends('layouts.app')

@section('title', 'Fiche d\'un type')

@section('content')
    <h1>{{ ucfirst($type->type) }}</h1>

    {{-- <h2>Liste des artistes</h2>
    <ul>
        @foreach($type->artists as $artist)    
            <li>{{ $artist->firstname }} {{ $artist->lastname }}</li>
        @endforeach
    </ul> --}}

    <div><a href="{{ route('type.edit' ,$type->id) }}">Modifier</a></div>
    <div><a href="{{ route('type.delete' ,$type->id) }}">Supprimer</a></div>    

    <nav><a href="{{ route('type.index') }}">Retour à l'index</a></nav>
@endsection