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
                        <a href="#" data-toggle="modal" data-target="#staticBackdrop" class="btn alime-btn btn-2 mt-30 wow fadeInUp">
                                                Lihat Peta </a>
                        <h3 class="wow fadeInUp" data-wow-delay="100ms">Syarat dan Ketentuan :</h3>
                        <p class="wow fadeInUp" data-wow-delay="300ms">{{$event->syaratKetentuan}}</p>
                        <h3 class="wow fadeInUp" data-wow-delay="100ms">Batas Waktu :</h3>
                        <p class="wow fadeInUp" data-wow-delay="300ms">{{$event->tanggalMulai}} s/d {{$event->tanggalSelesai}} </p>

                        <!-- <p class="wow fadeInUp" data-wow-delay="400ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et do sunt explicabo. Nemo enim ipsam et dolore magnam aliquam quaerat voluptatem.</p> -->
                        <!-- <a class="btn alime-btn btn-2 mt-30 wow fadeInUp" data-wow-delay="500ms" href="/uploadp/{{$event->id}}">Ikut Kontes</a> -->
                        @if(\Session::get('role') == 'user')
                                    <a href="/uploadp/{{$event->id}}" class="btn alime-btn mb-3 mb-sm-0 mr-4" >Ikut Kontes</a>
                                    @else
                                    <!-- Button trigger modal -->
                                    <a href="" data-toggle="modal" data-target="#staticBackdrop" class="btn alime-btn mb-3 mb-sm-0 mr-4">
                                                Ikut Kontes
                                                </a>
                                    @endif   
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
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Lokasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                    @php
                        $lokasi = $event->namaObjekwisata;
                        $temp = trim($lokasi); //menghapus spasi di awal dan akhir kalimat
                        $setLokasi = str_replace(' ','%20', $temp); // kode untuk mengganti spasi ditengah kalimat
                        $codeLokasi = 'src="https://maps.google.com/maps?q='.$setLokasi.'&t=&z=13&ie=UTF8&iwloc=&output=embed"';
                    @endphp
                    <div class="mapouter">
                        <div class="gmap_canvas"><iframe width="1109" height="400" id="gmap_canvas" <?php echo $codeLokasi ?> 
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by 
                            <a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
                        </div>
                    <style>
                        .mapouter{position:relative;align: center;text-align:right;height:400px;width:1109px;}
                        .gmap_canvas {overflow:hidden;background:none!important;height:400px;width:1109px;}
                    </style>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <!-- <form action="/signin">
            @csrf
            <button type="submit" class="btn btn-primary">Login</button>
        </form> -->
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="staticBackdropauth" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Log In Required</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Anda harus login dahulu jika ingin mengikuti event?
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

@endsection