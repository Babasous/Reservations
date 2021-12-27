@extends('layouts.app')

@section('title', 'Liste des roles')

@section('content')
    <h1>Liste des {{ $resource}}</h1>    
    <ul>
        @foreach($roles as $role)            
            <li><a href="{{route('role.show', $role->id)}}">{{ucfirst($role->role)}}</a></li>              
        @endforeach
    </ul>
    <div><a href="{{ route('role.index' , $role->id) }}">Ajouter un rôle</a></div>
@endsection