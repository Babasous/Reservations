@extends('layouts.app')

@section('title', 'Modifier une localité')

@section('content')
    @if($locality->id)
      <h3>Modification de la localité: {{ $locality->postal_code }} {{ $locality->locality }}</h3>
    @else
    <h3>Ajout d'une localité</h3>
    @endif
    <form action="{{ ($locality->id) ? route('locality.update' , $locality->id) : route('locality.store') }}" method="post">
        @csrf
        @if($locality->id)
           @method('PUT')
        @endif
        
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
        <div>
            <label for="locality">Localité</label>
            <input type="text" id="locality" name="locality" 
	       @if(old('locality'))
                value="{{ old('locality') }}" 
            @else
                value="{{ $locality->locality }}" 
            @endif
	           class="@error('locality') is-invalid @enderror">

            @error('locality')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        @if($locality->id)
            <button>Modifier</button>
        @else
            <button>Ajouter une localité</button>
        @endif
        
   {{-- <a href="{{ route('locality.show',$locality->id) }}">Annuler</a> --}}
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
