<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'commentss';
    protected $fillable = ['komen', 'user_id', 'photo_id'];

    public function photo()
    {
        return $this->belongsTo('App\photo');
    }

    public function user()
    {
        return $this->belongsTo('App\UserModel');
    }
}
