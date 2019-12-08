@extends('layout.dashbordmain')
@section('container')
<div class="main-content">
	<div class="row">
		<div class="container">
			<h2 class="text-center my-5">Buat entry event baru</h2>
			
			<div class="col-lg-8 mx-auto my-5">	

				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif

				<form action="/event/proses" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}

					<div class="form-group">
						<b>Nama Objek Wisata</b><br/>
						<input type="text" name="nama">
					</div>

					<div class="form-group">
						<b>File Gambar</b><br/>
						<input type="file" name="file">
					</div>

					<div class="form-group">
						<b>Deskripsi</b>
						<textarea class="form-control" name="deskripsi"></textarea>
					</div>

					<input type="submit" value="Upload" class="btn btn-primary">
				</form>
			</div>
		</div>
	</div>
	</div>
</body>
</html>

@endsection