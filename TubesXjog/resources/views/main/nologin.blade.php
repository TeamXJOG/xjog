<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
  

<script>
    // Get the container element
  var btnContainer = document.getElementById("myDIV");

  // Get all buttons with class="btn" inside the container
  var btns = btnContainer.getElementsByClassName("nav-item");

  // Loop through the buttons and add the active class to the current/clicked button
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("nav-item active");
      current[0].className = current[0].className.replace("nav-item active", "nav-item");
      this.className += "nav-item active";
    });
  }
</script>

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
            <ul class="nav navbar-nav menu_nav justify-content-end" id="myDIV">
              <li class="nav-item active"><a class="nav-link" href="/">Beranda</a></li> 
              <li class="nav-item"><a class="nav-link" href="/galeri">Galeri</a></li> 
              <li class="nav-item"><a class="nav-link" href="package.html">Tentang Kami</a>
              <!-- <li class="nav-item submenu dropdown">
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
              <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li> -->
            </ul>

            <div class="nav-right text-center text-lg-right py-4 py-lg-0">
                <a class="button" href="/signin">Sign In</a>
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