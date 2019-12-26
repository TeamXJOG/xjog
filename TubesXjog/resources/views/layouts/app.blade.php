<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Xjog') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('Landing/alime/style.css')}}">

    <!-- dari luar -->
    <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('Login_v4/images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('Login_v4/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('Login_v4/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('Login_v4/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('Login_v4/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('Login_v4/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('Login_v4/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('Login_v4/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('Login_v4/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('Login_v4/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('Login_v4/css/main.css')}}">
    <!--===============================================================================================-->

</head>
<body>
        <!-- <main class="py-4" > -->
            @yield('content')
        <!-- </main> -->
    <!-- </div> -->
</body>
</html>
