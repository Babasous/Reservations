@extends('layouts.app')

@section('title', 'Liste des localités')

@section('content')
    <h1>{{ $locality->postal_code }} {{ ucfirst($locality->locality) }}</h1>
    <ul>
        @foreach ($locality->locations as $location)
           <li>{{$location->designation}}</li> 
        @endforeach
    </ul>
    <nav><a href="{{ route('locality_index') }}">Retour à l'index</a></nav>
@endsection