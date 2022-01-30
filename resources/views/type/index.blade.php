@extends('layouts.app')

@section('title', 'Liste des types d\'artistes')

@section('content')
    <h1 class="text-center">Liste des {{ $resource}}</h1>    
    <ul>
        @foreach($types as $type)            
            <li><a href="{{ route('type.show', $type->id) }}">{{ ucfirst($type->type) }}</a></li>              
        @endforeach
    </ul>

    <div><h3><a href="{{ route('type.create') }}">Ajouter un type</a></h3></div>
@endsection