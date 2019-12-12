<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'commentss';
    protected $fillable = ['komen', 'user_id', 'photo_id'];
}
