<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';
    Protected $fillable = ['username', 'firstname', 'lastname', 'email', 'password'];
    Protected $primaryKey = 'admin_id';
    Protected $keyType = 'integer'; 
}
