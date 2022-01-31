@extends('layouts.app')

@section('title', 'Fiche d\'un artiste')

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
        <img class="thumbnail" src="https://www.pngfind.com/pngs/m/610-6104451_image-placeholder-png-user-profile-placeholder-image-png.png">        
      </div>
      <div class="medium-6 large-5 columns">
        <h3>{{ $artist->firstname }} {{ $artist->lastname }}</h3>
        <p>Biographie de l'artiste</p> 

           <ul>
            <li>Auteur</li>
            <li>Scénographe</li>
            <li>Comédien</li>
          </ul> 
          
          <span>{{ $artist->id}}</span>
        
        <div class="small secondary expanded button-group">
            <a class="button" href="#">Facebook</a>
            <a class="button" href="#">Instagram</a>
          </div>
        </div>
        <nav><a href="{{ route('artist.index') }}">Retour à la liste des artistes</a></nav>
    </div>

    <div class="column row">
      <hr>
      
      <div class="tabs-content" data-tabs-content="example-tabs">
          <div class="tabs-panel is-active" id="panel1">
            <h4>Spectacles</h4>

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
      </div>
    </div>
@endsection

   



