@extends('layouts.app')

@section('title', 'Liste des localités')

@section('content')
    <h1>{{ $locality->postal_code }} {{ ucfirst($locality->locality) }}</h1>
    <ul>
        @foreach ($locality->locations as $location)
           <li>{{$location->designation}}</li> 
        @endforeach
    </ul>

    <div><a href="{{ route('locality.edit', $locality->id) }}">Modifier</a></div>
    <div>
        <form action="{{ route('locality.destroy', $locality->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button>Supprimer</button>
        </form>
    </div>
    

    <nav><a href="{{ route('locality.index') }}">Retour à l'index</a></nav>
@endsection