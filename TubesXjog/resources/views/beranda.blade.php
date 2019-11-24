@extends('main/nologin')

@section('title', 'XJOG - Title')
@section('container')
  <!--================Hero Banner Area Start =================-->
  <section class="hero-banner magic-ball">
    <div class="container">

      <div class="row align-items-center text-center text-md-left">
        <div class="col-md-6 col-lg-5 mb-5 mb-md-0">
          <h1>Travel More To Discover Yourself</h1>
          <p>Air seed winged lights saw kind whales in sixth dont seas dron image so fish all tree meat dont there is seed winged lights saw kind whales in sixth dont seas dron image so fish all tree meat dont there </p>
          <a class="button button-hero mt-4" href="#service">Get Started</a>
        </div>
        <div class="col-md-6 col-lg-7 col-xl-6 offset-xl-1">
          <img class="img-fluid" src="{{img/home/hero-img.png}'}" alt="">
        </div>
      </div>
    </div>
  </section>
  <!--================Hero Banner Area End =================-->
   <!--================Service Area Start =================-->
   <a id="service" name="service"></a>
   <section class="section-margin generic-margin">
    <div class="container" >
      <div class="section-intro text-center pb-90px">
        <img class="section-intro-img" src="img/home/section-icon.png" alt="">
        <h2>Our Popular Services</h2>
        <p>Fowl have fruit moveth male they are that place you will lesser</p>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="service-card text-center">
            <div class="service-card-img">
              <img class="img-fluid" src="img/home/service1.png" alt="">
            </div>
            <div class="service-card-body">
              <h3>Hotel Booking</h3>
              <p>Great so dominion two seed give dry rule be fowl him female you will gathered creeping and created air</p>
            </div>
          </div>
        </div>

        <!-- ============ nanti pake foreach biat card nya dinamis ============== -->
        
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
@endsection