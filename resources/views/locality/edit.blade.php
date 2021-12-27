@extends('layouts.app')

@section('title', 'Modifier une localité')

@section('content')
    <form action="{{ route('locality.update' ,$locality->id) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="postal_code">Code postal</label>
            <input type="text" id="postal_code" name="postal_code" 
	       @if(old('postal_code'))
                value="{{ old('postal_code') }}" 
            @else
                value="{{ $locality->postal_code }}" 
            @endif
	           class="@error('postal_code') is-invalid @enderror">

	@error('postal_code')
            <div class="alert alert-danger">{{ $message }}</div>
     @enderror
        </div>

        <button>Modifier</button>
   <a href="{{ route('locality.show',$locality->id) }}">Annuler</a>
    </form>

@if ($errors->any())
    <div class="alert alert-danger">
	   <h2>Liste des erreurs de validation</h2>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <nav><a href="{{ route('locality.index') }}">Retour à l'index</a></nav>
@endsection
