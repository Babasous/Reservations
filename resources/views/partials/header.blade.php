<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
    <div class="container">
        <a class="navbar-brand" href="{{route('home_page')}}">bELwag</a>
        {{-- <img src="/public/logo_bELwag.png"> --}}
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home_page')}}">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('artist.index')}}">Artistes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('type.index')}}">Types</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('locality.index')}}">Localités</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('role.index')}}">Roles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('location.index')}}">Lieux</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('show.index')}}">Spéctacles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('representation.index')}}">Représentations</a>
                </li>
            </ul>
        </div>
    </div>
</nav>