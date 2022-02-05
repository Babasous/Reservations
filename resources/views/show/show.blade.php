@extends('layouts.app')

@section('title', 'Fiche d\'un spectacle')

@section('content')
    <!-- You can now combine a row and column if you just need a 12 column row -->
    <div class="row columns">
      <nav aria-label="You are here:" role="navigation">
        <ul class="breadcrumbs">
          <li><a href="#">Home</a></li>
          <li><a href="#">Features</a></li>
          <li class="disabled">Gene Splicing</li>
          <li>
            <span class="show-for-sr">Current: </span> Cloning
          </li>
        </ul>
      </nav>
    </div>

    <div class="row">
      <div class="medium-6 columns">
        <img class="thumbnail" src="{{ $show->poster_url }}">        
      </div>
      <div class="medium-6 large-5 columns">
        <h3>{{ $show->title }}</h3>
        <p>{{ $show->description }}</p> 

        <ul>
          @foreach($show->artistTypes as $artistType)    
              <li> {{ ucfirst($artistType->type->type) }}: {{ $artistType->artist->firstname }} {{ $artistType->artist->lastname }}</li>
          @endforeach
        </ul> 
      </div>

        {{-- <div><a href="{{ route('show.edit' ,$show->id) }}">Modifier</a></div> --}}
        {{-- <div>
            <form action="{{ route('show.destroy' ,$show->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button>Supprimer</button>
            </form>
        </div> --}}
        <nav><a href="{{ route('show.index') }}">Retour à la liste des spectacles</a></nav>
    </div>    

    <div class="column row">
      <hr>
      
      {{-- <div class="tabs-content" data-tabs-content="example-tabs">
          <div class="tabs-panel is-active" id="panel1">
            <h4 class="text-center">Spectacle(s) joué(s):</h4>

            <div class="media-object stack-for-small">

              <div class="media-object-section">
                <img class="thumbnail" src="https://www.dvdfr.com/images/dvd/covers/200x280/8a47126fa07f2e693fe323aa96e87788/63736/old-ayiti.0.jpg" width="100">
              </div>
              <div class="media-object-section">
                <h5>Titre du spéctacle</h5>
                <p>Description du spéctacle.</p>
         
              </div>
            </div>
            
            <div class="media-object stack-for-small">                     
            </div>          
          
        </div>
      </div> --}}
      
      <hr>

     {{--  <div class="row small-up-2 large-up-4">
        <h2 class="text-center">Autres artistes {{$type->type}}s:</h2>            
        
        <ul>
          @foreach($type->artists as $artist)  
            <div class="column">
              <a href="{{ route('artist.show', $artist->id) }}" title="Afficher">
                  <img class="thumbnail" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzSiIR4dlsyY7W36GFUi3pVAcMp5krhwWgGMIiH6wQqDZyLEXla9LFjStPExinONQISps&usqp=CAU">
              </a>  
              <li>{{ $artist->firstname }} {{ $artist->lastname }}</li>
            </div>
          @endforeach
        </ul>
      </div> --}}  

    </div>
@endsection

  