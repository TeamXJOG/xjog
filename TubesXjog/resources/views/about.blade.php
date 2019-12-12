@extends(\Session::get('login') ? 'layout.main2' : 'layout.main')
@section('title', 'About Xjog')
@section('container')
@if(\Session::has('notifpass'))
            <script>
                alert('{{Session::get("notifpass")}}');
            </script>
        @endif

<!-- Breadcrumb Area Start -->
<section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{asset('Landing/alime/img/bg-img/yogya3.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">About Us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/"><i class="icon_house_alt"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- About Us Area Start -->
    <div class="about-us-area section-padding-80-0 clearfix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="about-us-content mb-80">
                        <h3 class="wow fadeInUp" data-wow-delay="100ms">About Us</h3>
                        <div class="line wow fadeInUp" data-wow-delay="200ms"></div>
                        <p class="wow fadeInUp" data-wow-delay="300ms">XJog (Explore Jogja) adalah sebuah aplikasi web yang berusaha menyediakan wadah untuk menyelenggarakan dan mengorganisir event kontes fotografi </p>
                        <!-- <p class="wow fadeInUp" data-wow-delay="400ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et do sunt explicabo. Nemo enim ipsam et dolore magnam aliquam quaerat voluptatem.</p> -->
                        <a class="btn alime-btn btn-2 mt-30 wow fadeInUp" data-wow-delay="500ms" href="#">Contact Us</a>
                    </div>
                </div>
                <div class="col-10 col-lg-6">
                    <div class="mfp-image-holder" data-wow-delay="100ms">
                        <img src="{{asset('Landing/xjoglogo.png')}}" alt="">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Area End -->

    
@endsection