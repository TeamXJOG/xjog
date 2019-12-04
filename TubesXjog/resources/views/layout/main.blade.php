<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" href="">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('Landing/alime/style.css')}}">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Top Search Form Area -->
    <div >
        
    </div>

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="alimeNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="/"><img src="{{asset('Landing/alime/img/core-img/xjoglogo.png')}}" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li><a href="{{ url('/')}}">Home</a></li>
                                    <li><a href="{{ url('/galeri')}}">Gallery</a></li>
                                    <li><a href="{{ url('/')}}">About</a></li>
                                    <li><a href="{{ url('/')}}">Settings</a></li>
                                    <li><a href="{{ url('/')}}">Login</a></li>
                                </ul>

                                <!-- Search Icon -->
                                <div></div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->
    @yield('container');

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="{{asset('Landing/alime/js/jquery.min.js')}}"></script>
    <!-- Popper -->
    <script src="{{asset('Landing/alime/js/popper.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('Landing/alime/js/bootstrap.min.js')}}"></script>
    <!-- All Plugins -->
    <script src="{{asset('Landing/alime/js/alime.bundle.js')}}"></script>
    <!-- Active -->
    <script src="{{asset('Landing/alime/js/default-assets/active.js')}}"></script>