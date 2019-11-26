<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    Public function beranda() {
        return view('beranda');
    }

    Public function galeri() {
        return view('galeri');
    }

    Public function signin() {
        return view('signin');
    }

    Public function signup() {
        return view('signup');
    }
}
    