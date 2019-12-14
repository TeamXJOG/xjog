@extends(\Session::get('login') ? 'layout.main2' : 'layout.main')
@section('title', 'Home Xjog')

@section('container')

<!-- Breadcrumb Area Start -->
<section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{asset('Landing/alime/img/bg-img/yogya3.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Gallery</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/"><i class="icon_house_alt"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Gallery Area Start -->
    <div class="alime-portfolio-area section-padding-80 clearfix">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Projects Menu -->
                    <div class="alime-projects-menu wow fadeInUp" data-wow-delay="100ms">
                        <div class="portfolio-menu text-center">
                            <button class="btn active" data-filter="*">All</button>
                            @foreach($event as $e)
                            <button class="btn" data-filter=".{{$e->id}}">{{$e->namaObjekwisata}}</button>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="row alime-portfolio">
                <!-- Single Gallery Item -->
                @foreach($photo as $p)
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item {{$p->event_id}} mb-30 wow fadeInUp" data-wow-delay="100ms">
                    <div class="single-portfolio-content">
                        <img src="{{ url('/galeri_file/'.$p->photo) }}" alt="">
                        <div class="hover-content">
                            <p align="center">{{$p->title}}</p>
                            <!-- <a href="{{ url('/galeri_file/'.$p->photo) }}" class="portfolio-img">+</a> -->
                            @if(\Session::has('login'))
                            <input type="checkbox" value="1" name="like" id="like">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-id_photo="{{$p->id}}" data-toggle="modal" data-target="#exampleModalCenter">
                                comment
                            </button>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
            <!-- <div class="row">
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="800ms">
                    <a href="#" class="btn alime-btn btn-2 mt-15">View More</a>
                </div>
            </div> -->
        </div>
    </div>
    <!-- Gallery Area End -->
   
    
    <!-- Footer Area End -->

    

    <!-- ----- AJAX ----- -->

    <!-- <script>
        setInterval(function(){
            $('#comment').load('/datarealtime');
        }, 1000)
    </script>   -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Komentar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="comment_window">
            <!-- @foreach($komen as $com)
                <p>{{$com}}</p>
            @endforeach -->
        </div>
      </div>
      <div class="modal-footer">
      <form id="form-komen" data-route="/pushmsg" method="post">
      @csrf
        <input type="text" id="comment_field" name="comment_field" placeholder="Tulis komentar" value="">
        <input type="hidden" name="id_p" id="id_p">
        <button type="submit" class="btn btn-primary" >Submit</button>
      </form>
        
        <button id="tutupkomen" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!-- ======== modal ======== -->

<!-- <script>
        var username;

        $(document).ready(function()
        {
            username = $('#username').html();

            pullData();

            $(document).keyup(function(e) {
                if (e.keyCode == 13)
                    sendMessage();
                else
                    isTyping();
            });
        });

        function pullData()
        {
            retrieveChatMessages();
            retrieveTypingStatus();
            setTimeout(pullData,3000);
        }

        function sendMessage() {

            var text = $('#comment').val();

            if (text.length > 0)
            {
                $.post('/sendMessage', {text: text}, function()
                {
                    $('#comment_window').append('<br><div style="text-align: right">'+text+'</div><br>');
                    $('#comment').val('');
                    // notTyping();
                });
            }
        }
</script> -->
<!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <!-- <script src="{{asset('Landing/alime/js/jquery.min.js')}}"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper -->
    <script src="{{asset('Landing/alime/js/popper.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('Landing/alime/js/bootstrap.min.js')}}"></script>
    <!-- All Plugins -->
    <script src="{{asset('Landing/alime/js/alime.bundle.js')}}"></script>
    <!-- Active -->
    <script src="{{asset('Landing/alime/js/default-assets/active.js')}}"></script>

<script src="{{asset('komen.js')}}"></script>
<script src="{{asset('like.js')}}"></script>
<script>

$('#exampleModalCenter').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)
    var id_photo = button.data('id_photo')

    var modal = $(this)
    modal.find('.modal-footer #id_p').val(id_photo);
    // console.log(id_photo);
    // var id = document.getElementById('id_p').value;
    // console.log(id);
    var auto_ref = setInterval(
        function() {
            $('#comment_window').load("/datarealtime/"+id_photo).fadeIn("fast");
            console.log(id_photo)
        }, 500);
    var cancel = document.getElementById('tutupkomen');
    cancel.addEventListener( 'click', function() {
        clearInterval(auto_ref);
    });    
})

</script>

<!-- <script>
    

</script> -->

</body>

</html>

@endsection