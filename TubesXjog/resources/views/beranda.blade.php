@extends(\Session::has('cek') ? 'main/wlogin' : 'main/nologin');


@section('title', 'XJOG - Beranda')
@section('container')
  <!--================Hero Banner Area Start =================-->
  <section class="hero-banner magic-ball">
    <div class="container">

      <div class="row align-items-center text-center text-md-left">
        <div class="col-md-6 col-lg-5 mb-5 mb-md-0">
          <h1>Explore Jogja at Its Fittest</h1>
          <p>(here lies kata2 mutiara yo)</p>
          <a class="button button-hero mt-4" href="#service">Get Started</a>
        </div>
        <div class="col-md-6 col-lg-7 col-xl-6 offset-xl-1">
          <img class="img-fluid" src="{{asset('Landing/img/peta.png')}}" alt="">
        </div>
      </div>
    </div>
  </section>
  <!--================Hero Banner Area End =================-->
   <!--================ Service Area Start =================-->
   <section class="section-margin generic-margin">
   <a id="service" name="service"></a>
    <div class="container" >
      <div class="section-intro text-center pb-90px">
        <img class="section-intro-img" src="img/home/section-icon.png" alt="">
        <h2>Rekomendasi Lokasi Wisata Favorit</h2>
        <p>Fowl have fruit moveth male they are that place you will lesser</p>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="service-card text-center">
            <div class="service-card-img">
              <img class="img-fluid" src="{{asset('Landing/img/tugu.png')}}" alt="">
            </div>
            <div class="service-card-body">
              <h3>Tugu Jogja</h3>
              <p>Sebuah monumen yang dikenal sebagai simbol atau lambang kota Yogyakarta</p>
            </div>
          </div>
        </div>

        <!-- nanti pake foreach biat card nya dinamis dan urut berdasarkan -->
        
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="service-card text-center">
            <div class="service-card-img">
              <img class="img-fluid" src="img/home/service2.png" alt="">
            </div>
            <div class="service-card-body">
              <h3>Flight Booking</h3>
              <p>Great so dominion two seed give dry rule be fowl him female you will gathered creeping and created air</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="service-card text-center">
            <div class="service-card-img">
              <img class="img-fluid" src="img/home/service3.png" alt="">
            </div>
            <div class="service-card-body">
              <h3>Destination Booking</h3>
              <p>Great so dominion two seed give dry rule be fowl him female you will gathered creeping and created air</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================Service Area End =================-->
  
    <!--================About Area Start =================-->
    <section class="bg-gray section-padding magic-ball magic-ball-about">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-6 mb-4 mb-md-0">
          <div class="about-img">
            <img class="img-fluid" src="{{asset('Landing/img/tugu.png')}}" alt="">
          </div>
        </div>
        <div class="col-lg-5 col-md-6 align-self-center about-content">
          <h2>Exploration is <br class="d-none d-xl-block"> really the essence <br class="d-none d-xl-block"> of the human spirit</h2>
          <p>Make she'd moved divided air. Whose tree that replenish tone hath own upon them it multiply was blessed is lights make gathering so day dominion so creeping air was made.</p>
          <a class="button" href="#">Learn More</a>
        </div>
      </div>
    </div>
  </section>
  <!--================About Area End =================-->
@endsection