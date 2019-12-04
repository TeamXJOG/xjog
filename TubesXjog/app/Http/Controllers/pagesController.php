<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pagesController extends Controller
{
    Public function beranda() {
        // if(Session::get('login')) {
        //     return redirect('/')->with('cek','masuk');
        // }else {
        //     return redirect('/');
        // }

        

        return view('beranda');
    }

    Public function galeri() {
        return view('galeri');
    }

    Public function signin() {
        return view('auth/login');
    }

    Public function signup() {
        return view('auth/register');
    }
}
    