<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Projet réservations - @yield('title')</title>
        {{-- <link rel="stylesheet" href="css/app.css" class="css"> --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        @include('partials.header')

        <div class="container">
            @yield('content')
        </div>

        @include('partials.footer')

        <script src="js/app.js"></script>
    </body>
</html>
