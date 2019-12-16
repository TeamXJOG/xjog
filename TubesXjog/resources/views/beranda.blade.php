
@extends(\Session::get('login') ? 'layout.main2' : 'layout.main')
@section('title', 'Home Xjog')
@section('container')
    
        @if(\Session::has('notifpass'))
            <script>
                alert('{{Session::get("notifpass")}}');
            </script>
        @endif
    <!-- Welcome Area Start -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">

            @foreach($event as $e)
            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url({{asset('data_file/'.$e->gambarObjekwisata)}});">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12 col-lg-8 col-xl-6">
                            <div class="welcome-text">
                                <h2 data-animation="bounceInUp" data-delay="100ms">{{ $e->namaObjekwisata }}</h2>
                                <p data-animation="bounceInUp" data-delay="500ms">{{ $e->deskripsiObjekwisata }}</p>
                                <div class="hero-btn-group" data-animation="bounceInUp" data-delay="900ms">
                                    <a href="/uploadp/{{$e->id}}" class="btn alime-btn mb-3 mb-sm-0 mr-4" >Ikut Kontes</a>
                                    <a class="hero-mail-contact" href="/detail/{{ $e->id}}">Detail Kontes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach

    </section>
    <!-- Welcome Area End -->

  



</body>

</html>

@endsection