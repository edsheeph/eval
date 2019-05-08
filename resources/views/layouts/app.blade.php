<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Playfair+Display+SC|Roboto" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

</head>
<body>
    <div id="app">
        
        @include('inc.navbar')
        <div class="">
            <main class="py-4">
                @include('inc.messages')
                @yield('content')
            </main>
        </div>
    </div>

    {{-- https://devmarketer.io/learn/setup-laravel-project-cloned-github-com/ --}}

    <script src="js/sweetalert.min.js"></script>

    <!-- Include this after the sweet alert js file -->
    @include('sweet::alert')

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
    <script>
        window.sr = ScrollReveal();
        // sr.reveal('.navbar', {
        //     duration: 2000,
        //     origin:'bottom'
        // });
        sr.reveal('.showcase-left', {
            duration: 2000,
            origin:'top',
            distance:'300px'
        });
        sr.reveal('.showcase-right', {
            duration: 2000,
            origin:'right',
            distance:'300px'
        });
        sr.reveal('.showcase-btn', {
            duration: 2000,
            delay: 2000,
            origin:'bottom'
        });
        sr.reveal('#testimonial div', {
            duration: 2000,
            origin:'bottom'
        });
        sr.reveal('.info-left', {
            duration: 2000,
            origin:'left',
            distance:'300px',
            viewFactor: 0.2
        });
        sr.reveal('.info-right', {
            duration: 2000,
            origin:'right',
            distance:'300px',
            viewFactor: 0.2
        });
    </script>

</body>
</html>
