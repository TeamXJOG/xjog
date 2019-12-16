<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    protected $table = 'objekwisata';
    protected $fillable = ['namaObjekwisata', 'lokasiObjekwisata', 'deskripsiObjekwisata', 'htmObjekwisata', 'gambarObjekwisata', 'tanggalMulai', 'tanggalSelesai',
'syaratKetentuan'];

    public function photo()
    {
        return $this->hasMany('App\Photo');
    }
}
