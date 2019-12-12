<?php

namespace App\Http\Controllers;
use App\photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class photoController extends Controller
{
    public function uploadphoto(Request $request, $events) {
        // dd($events);
        $this->validate($request, [
			'file' => 'required',
			'nama' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'galeri_file';
		$file->move($tujuan_upload,$nama_file);
		
		
        // $id_event = $events->id;
        // dd($events);
        photo::create([
			'event_id' => $events,
            'user_id' => Session::get('id'),
            'title' => $request->nama,
			'photo' => $nama_file
        ]);
		return redirect('/');
    }
}
