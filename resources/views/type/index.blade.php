@extends('layouts.app')

@section('title', 'Liste des types d\'artistes')

@section('content')
    <h1>Liste des {{ $resource}}</h1>    
    <ul>
        @foreach($types as $type)            
            <li><a href="{{route('type.show', $type->id)}}">{{ucfirst($type->type)}}</a></li>              
        @endforeach
    </ul>

    <div><a href="{{ route('type.index' , $type->id) }}">Ajouter un type</a></div>
@endsection