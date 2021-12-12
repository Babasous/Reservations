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
                    <a href="{{ route('artist_show', $artist->id) }}">{{ $artist->firstname}}</a>
                </td>
                <td>
                    <a href="{{ route('artist_show', $artist->id) }}">{{ $artist->lastname }}</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
 
    {{-- Liste déroulante --}}
    {{-- <select>
        @foreach($artists as $artist)
            <option>
                <a href="{{ route('artist_show', $artist->id) }}">{{ $artist->firstname}} {{ $artist->lastname }}</a>
            </option>
        @endforeach
    </select> --}}

@endsection
