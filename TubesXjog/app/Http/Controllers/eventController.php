<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\event;

class eventController extends Controller
{
    //
    public function index() {
        
    }

    public function upload_proses(Request $request){
		$this->validate($request, [
			'file' => 'required',
			'nama' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
		
		

		event::create([
			'namaObjekwisata' => $request->nama,
			'gambarObjekwisata' => $nama_file,
			'deskripsiObjekwisata' => $request->deskripsi
		]);
 
		return redirect('/');
	}
}
