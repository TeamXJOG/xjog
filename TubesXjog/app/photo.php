<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    protected $table = "photos";
    protected $fillable = ['event_id','user_id','photo', 'title'];

    public function user()
    {
        return $this->belongsTo('App\UserModel');
    }
    public function event()
    {
        return $this->belongsTo('App\event');
    }
    public function comments()
    {
        return $this->hasMany('App\Comments');
    }
}
