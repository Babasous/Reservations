@extends('layouts.app')

@section('title', 'Fiche d\'une localité')

@section('content')
    <h1>{{ $locality->postal_code }} {{ ucfirst($locality->locality) }}</h1>
    <nav><a href="{{ route('locality_index') }}">Retour à l'index</a></nav>
@endsection