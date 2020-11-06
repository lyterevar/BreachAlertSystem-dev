<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/generalstyles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <div class = "logoContainer">
            <a href="{{route('home')}}"><img src="images/logo.png" alt="Logo Placeholder." class="logo" /></a>
        </div>

        <div class="titleBox">
            <h1 class="titleHeader">Breach Alert</h1>
        </div>

        <ul class="nav">
            <li><a href="{{ route('about') }}" class="headLink">About Us</a></li>
            <li><a href="{{ route('contact') }}" class="headLink">Help</a></li>
            @guest
                <li><a href="{{ route('login') }}" class="headLink">Sign In</a></li>
                @if (Route::has('register'))
                    <li><a href="{{ route('register') }}" class="headLink">Register</a></li>
                @endif
            @else
                <li><a class="headLink">You are logged in as {{ Auth::user()->name }}</a></li>
                <li><a class="headLink" href="{{ route('logout') }}" onclick="event.preventDefault(); 
                    document.getElementById('logout-form').submit();">
                    Logout
                </a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @endguest
        </ul>

    </header><br>

        <main class="py-4">
            @yield('content')
        </main>
</body>
</html>
