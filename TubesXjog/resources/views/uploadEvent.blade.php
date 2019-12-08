<!DOCTYPE html>
<html>
<head>
	<title>Upload Event</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
	<div class="row">
		<div class="container">

			<h2 class="text-center my-5">Upload Event</h2>
			
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
						<b>Nama lokasi</b><br/>
						<input type="text" name="nama">
					</div>

					<div class="form-group">
						<b>File Gambar</b><br/>
						<input type="file" name="file">
					</div>

					<div class="form-group">
						<b>Keterangan</b>
						<textarea class="form-control" name="deskripsi"></textarea>
					</div>

					<input type="submit" value="Upload" class="btn btn-primary">
				</form>
				
				<h4 class="my-5">Data</h4>

				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="1%">File</th>
                            <th>Nama</th>
                            <th>deskripsi</th>
							<th width="1%">OPSI</th>
						</tr>
					</thead>
					<tbody>
						@foreach($events as $g)
						<tr>
                            <td><img width="150px" src="{{ url('/data_file/'.$g->file) }}"></td>
                            <td>{{$g->nama}}</td>
							<td>{{$g->deskripsi}}</td>
							<td><a class="btn btn-danger" href="/event/hapus/{{ $g->id }}">HAPUS</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>