@extends(\Session::get('login') ? 'layout.main2' : 'layout.main')
@section('title', 'About Xjog')
@section('container')
@if(\Session::has('notifpass'))
            <script>
                alert('{{Session::get("notifpass")}}');
            </script>
        @endif
<style>
 #map {
   width: 100%;
   height: 400px;
   background-color: grey;
 }
</style>

<!-- Breadcrumb Area Start -->
<section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{asset('Landing/alime/img/bg-img/yogya3.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Detail Kontes</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/"><i class="icon_house_alt"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Detail</li>
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
                        <h2 class="wow fadeInUp" data-wow-delay="100ms">Detail Kontes</h2>
                        <div class="line wow fadeInUp" data-wow-delay="200ms"></div>
                        <h1 class="wow fadeInUp" data-wow-delay="100ms">{{$event->namaObjekwisata}}</h3>
                        <p class="wow fadeInUp" data-wow-delay="300ms">{{$event->deskripsiObjekwisata}}</p>
                        <h3 class="wow fadeInUp" data-wow-delay="100ms">Lokasi :</h3>
                        <p class="wow fadeInUp" data-wow-delay="300ms">{{$event->lokasiObjekwisata}}</p>
                        <a href="" data-toggle="modal" data-target="#staticBackdrop" class="btn alime-btn mb-3 mb-sm-0 mr-4">
                                                Lihat Peta </a>
                        <h3 class="wow fadeInUp" data-wow-delay="100ms">Syarat dan Ketentuan :</h3>
                        <p class="wow fadeInUp" data-wow-delay="300ms">{{$event->syaratKetentuan}}</p>
                        <h3 class="wow fadeInUp" data-wow-delay="100ms">Batas Waktu :</h3>
                        <p class="wow fadeInUp" data-wow-delay="300ms">{{$event->tanggalMulai}} s/d {{$event->tanggalSelesai}} </p>

                        <!-- <p class="wow fadeInUp" data-wow-delay="400ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et do sunt explicabo. Nemo enim ipsam et dolore magnam aliquam quaerat voluptatem.</p> -->
                        <a class="btn alime-btn btn-2 mt-30 wow fadeInUp" data-wow-delay="500ms" href="/uploadp/{{$event->id}}">Ikut Kontes</a>
                    </div>
                </div>
                <div class="col-10 col-lg-6">
                    <div class="mfp-image-holder" data-wow-delay="100ms">
                        <img src="{{asset('data_file/'.$event->gambarObjekwisata)}}" alt="">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Area End -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Log In Required</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12" id="map"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak jadi</button>
        <form action="/signin">
            @csrf
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->

<script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: -25.344, lng: 131.036};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>

@endsection