

@extends('layout.dashbordmain')

@section('container')
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue" onclick="location.href='/signup'">
                                        <i class="zmdi zmdi-plus"></i>add user</button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Tabel User -->
                        <div class="row">
                            <div class="col-lg-9">
                                <h2 class="title-1 m-b-25">List of Users</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th >created at</th>
                                                <th >updated at</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        @foreach($users as $u)
                                        <tbody>
                                        
                                            <tr>
                                                <td>{{$u->id}}</td>
                                                <td>{{$u->name}}</td>
                                                <td>{{$u->email}}</td>
                                                <td>{{$u->role}}</td>
                                                <td>{{$u->created_at}}</td>
                                                <td >{{$u->updated_at}}</td>
                                                <td><a href="/hapusakun2/{{$u->id}}">Delete</a></td>
                                                
                                            </tr>
                                       
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue"  onclick="location.href='/event/'">
                                        <i class="zmdi zmdi-plus"></i>add event</button>
                                </div>
                            </div>
                        </div>
                        <!-- Tabel Event -->
                        <div class="row">
                            <div class="col-lg-9">
                                <h2 class="title-1 m-b-25">List of Events</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                
                                                <th>deskripsi</th>
                                                <th >created at</th>
                                                <th >updated at</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        @foreach($event as $e)
                                        <tbody>
                                        
                                            <tr>
                                                <td>{{$e->id}}</td>
                                                <td>{{$e->namaObjekwisata}}</td>
                                                <td>{{$e->deskripsiObjekwisata}}</td>
                                                
                                                <td>{{$e->created_at}}</td>
                                                <td >{{$e->updated_at}}</td>
                                                <td><a href="/event/hapusevent/{{$e->id}}">Delete</a></td>
                                                
                                            </tr>
                                       
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            
                        </div>


                        
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>footer</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    

</body>


<!-- end document-->

@endsection