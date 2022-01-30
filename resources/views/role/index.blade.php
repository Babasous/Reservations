@extends('layouts.app')

@section('title', 'Liste des roles')

@section('content')
    <h1 class="text-center">Liste des {{ $resource}}</h1>    
    <ul>
        @foreach($roles as $role)            
            <li><a href="{{route('role.show', $role->id)}}">{{ucfirst($role->role)}}</a></li>              
        @endforeach
    </ul>
    <div><h3><a href="{{ route('role.create') }}">Ajouter un rôle</a></h3></div>
@endsection