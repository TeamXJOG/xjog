<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $fillable = ['id', 'name', 'email', 'password', 'role'];

    public function photo()
    {
        return $this->hasMany('App\photo');
    }

    public function comments()
    {
        return $this->hasMany('App\Comments');
    }

    
}
