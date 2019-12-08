<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    protected $table = "photos";
    protected $fillable = ['event_id','user_id','photo', 'title'];
}
