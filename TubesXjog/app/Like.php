<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = "like";
    protected $fillable = ['user_id', 'photo_id'];

    public function photo()
    {
        return $this->belongsTo('App\photo');
    }

    public function user()
    {
        return $this->belongsTo('App\UserModel');
    }
}
