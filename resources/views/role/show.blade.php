@extends('layouts.app')

@section('title', 'Fiche d\'un role')

@section('content')
    <h1>{{ ucfirst($role->role) }}</h1>
    
    <div><a href="{{ route('role_edit' ,$role->id) }}">Modifier</a></div>
    <nav><a href="{{ route('role_index') }}">Retour à l'index</a></nav>
@endsection