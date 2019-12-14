<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $table = "ratings";
    protected $fillable = ['photo_id','user_id','rating'];

    public function photo()
    {
        return $this->belongsTo('App\photo');
    }

    public function user()
    {
        return $this->belongsTo('App\UserModel');
    }
    
}
