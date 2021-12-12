@extends('layouts.app')

@section('title', 'Liste des types')

@section('content')
    <h1>Type des spectacles</h1>
    <table>
        <thead>
            <tr>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach($types as $type)
            <tr>
                <td>
                    <li>{{ $type->type}}</li>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>