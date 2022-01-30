@extends('layouts.app')

@section('title', 'Liste des localités')

@section('content')
    <h1 class="text-center">Liste des {{ $resource}}</h1>    
    <ul>
        @foreach($localities as $locality)            
            <li><a href="{{route('locality.show', $locality->id)}}">{{$locality->postal_code}} {{ucfirst($locality->locality)}}</a></li>              
        @endforeach
    </ul>
    <div><h3><a href="{{ route('locality.create') }}">Ajouter une localité</a></h3></div>
@endsection