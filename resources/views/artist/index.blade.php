@extends('layouts.app')

@section('title', 'Liste des artistes')

@section('content')
    <h1>Liste des {{ $resource }}</h1>
    <table>
        <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
            </tr>
        </thead>
        <tbody>
        @foreach($artists as $artist)
            <tr>
                <td>
                    <a href="{{ route('artist.show', $artist->id) }}">{{ $artist->firstname}}</a>
                </td>
                <td>
                    <a href="{{ route('artist.show', $artist->id) }}">{{ $artist->lastname }}</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table><br><br>
    
    <div><a href="{{ route('artist.create') }}">Ajouter un artiste</a></div>
@endsection
