@extends('layouts.app')

@section('title', 'Modifier un role')

@section('content')
    @if($role->id)
        <h3>Modification du rôle: {{ $role->role }}</h3>
    @else
       <h3>Ajout d'un rôle</h3> 
    @endif

    <form action="{{ ($role->id) ? route('role.update', $role->id) : route('role.store') }}" method="post">
        @csrf
        @if($role->id)
            @method('PUT')
        @endif
        
        <div>
            <label for="role">Role</label>
            <input type="text" id="role" name="role" 
	       @if(old('role'))
                value="{{ old('role') }}" 
            @else
                value="{{ $role->role ?? '' }}" 
            @endif
	           class="@error('role') is-invalid @enderror">

            @error('role')
                    <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        @if($role->id)
            <button>Modifier</button>
         @else
            <button>Ajouter un rôle</button>
        @endif
        
   {{-- <a href="{{ route('role.show',$role->id) }}">Annuler</a> --}}
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

    <nav><a href="{{ route('artist.index') }}">Retour à l'index</a></nav>
@endsection
