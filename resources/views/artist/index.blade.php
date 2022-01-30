@extends('layouts.app')

@section('title', 'Liste des artistes')

@section('content')
    <h3 class="text-center">Liste des {{ $resource }}</h3>
    @foreach ($artists as $artist)
        <div class="column">
            <a href="{{ route('artist.show', $artist->id) }}" title="Afficher">
                <img class="thumbnail" src="https://www.pngfind.com/pngs/m/610-6104451_image-placeholder-png-user-profile-placeholder-image-png.png">
            </a>
            <h5>{{ $artist->firstname }} {{ $artist->lastname }}</h5>
            <p>Infos de l'artiste</p>
            <a href="{{ route('artist.show', $artist->id) }}" class="button expanded">Afficher</a>
        </div>
    @endforeach
    

    {{-- <table>
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
    </table><br><br> --}}
    
    <div><h3><a href="{{ route('artist.create') }}">Ajouter un artiste</a></h3></div>
@endsection
