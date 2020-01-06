<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

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
                                    <!-- @if(\Session::get('role') == 'admin')
                                    <li><a href="{{ url('/galeri')}}">Submission</a></li>
                                    @endif -->
                                    <li><a href="{{ url('/about')}}">About</a></li>
                                    @if(\Session::get('role') == 'admin')
                                    <li><a href="{{ url('/dashboard')}}">Admin Dashboard</a></li>
                                    @endif
                                    <li><a >Hallo, {{Session::get('name')}}</a>
                                    <ul class="dropdown">
                                            @if(\Session::get('role') == 'user')
                                            <li><a href="{{ url('/editprofile') }}">Profile</a></li>
                                            @endif
                                            <li>
                                                <!-- Button trigger modal -->
                                                <a href="" data-toggle="modal" data-target="#staticBackdropMain">
                                                Log Out
                                                </a>
                                            </li>
                                            <!-- <li><a href="./gallery.html">- Gallery</a></li>
                                            <li><a href="./blog.html">- Blog</a></li>
                                            <li><a href="./single-blog.html">- Blog Details</a></li>
                                            <li><a href="./contact.html">- Contact</a></li> -->
                                        </ul>
                                    </li>    
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



<!-- Modal -->
<div class="modal fade" id="staticBackdropMain" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Log Out</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin Log Out?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak jadi</button>
        <form action="/logout">
            @csrf
            <button type="submit" class="btn btn-primary">Ashiiap</button>
        </form>
      </div>
    </div>
  </div>
</div>