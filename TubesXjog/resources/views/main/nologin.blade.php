<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="img/Fevicon.png" type="image/png">

    <link rel="stylesheet" href="{{asset('Landing/vendors/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('Landing/vendors/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('Landing/vendors/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('Landing/vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{asset('Landing/vendors/owl-carousel/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('Landing/vendors/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('Landing/vendors/flat-icon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('Landing/vendors/nice-select/nice-select.css')}}">

    <link rel="stylesheet" href="{{asset('Landing/css/style.css')}}">


    <script src="{{asset('Landing/vendors/jquery/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('Landing/vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('Landing/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('Landing/vendors/nice-select/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('Landing/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('Landing/js/mail-script.js')}}"></script>
    <script src="{{asset('Landing/js/skrollr.min.js')}}"></script>
    <script src="{{asset('Landing/js/main.js')}}"></script>

</head>
<body>
<!--================ Header Menu Area start =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <a class="navbar-brand logo_h" href="/"><img src="img/logo.png" alt="">XJOG</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item active"><a class="nav-link" href="/">Beranda</a></li> 
              <li class="nav-item"><a class="nav-link" href="/galeri">Galeri</a></li> 
              <li class="nav-item"><a class="nav-link" href="package.html">Packages</a>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Pages</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="amentities.html">Amentities</a>                 
                </ul>
							</li>

              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Blog</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="blog.html">Blog Single</a></li>
                  <li class="nav-item"><a class="nav-link" href="blog-details.html">Blog Details</a></li>
                </ul>
							</li>
              <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
            </ul>

            <div class="nav-right text-center text-lg-right py-4 py-lg-0">
                <a class="button getsignup" href="/signin">Sign In</a>
            </div>
          </div> 
        </div>
      </nav>
    </div>
  </header>
  @yield('container')
<!--================Header Menu Area =================-->
</body>


</html>