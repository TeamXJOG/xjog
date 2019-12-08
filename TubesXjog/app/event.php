<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    protected $table = 'objekwisata';
    protected $fillable = ['id','namaObjekwisata', 'lokasiObjekwisata', 'deskripsiObjekwisata', 'htmObjekwisata', 'gambarObjekwisata'];
}
