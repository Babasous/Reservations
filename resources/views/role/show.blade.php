@extends('layouts.app')

@section('title', 'Fiche d\'un role')

@section('content')
    <h1>{{ ucfirst($role->role) }}</h1>
    
    <div><a href="{{ route('role.edit', $role->id) }}">Modifier</a></div>
    <div>
        <form action="{{ route('role.destroy', $role->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button>Supprimer</button>
        </form>
    </div>
    
    <nav><a href="{{ route('role.index') }}">Retour à l'index</a></nav>
@endsection