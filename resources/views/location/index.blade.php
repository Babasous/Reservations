@extends('layouts.app')

@section('title', 'Liste des lieux de spectacle')

@section('content')
    <h1 class="text-center">Liste des {{ $resource }}</h1>
	
    <ul>
        @foreach($locations as $location)
            <li><a href="{{ route('location.show', $location->id) }}">{{ $location->designation }}</a>
                @if($location->website)
                    <a href="{{ $location->website }}">{{ $location->website }}</a>
                @endif
            </li>
        @endforeach
    </ul>
@endsection
