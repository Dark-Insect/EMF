<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{asset('dash/img/')}}" type="image/png" />


    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}


    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/stylesheet.css')}}">
    <!-- Colors Css -->
    <link id="color-switcher" type="text/css" rel="stylesheet" href="{{asset('assets/css/color-red.css')}}">
</head>
<body>
    <div id="app">
       @include('inc.navbar')

        <main>
            @yield('content')
        </main>
    </div>

    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script> 
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script> 
    <!-- Style Switcher --> 
    <script src="{{asset('assets/js/switcher.min.js')}}"></script>
    <script src="{{asset('assets/js/theme.js')}}"></script>
</body>
</html>