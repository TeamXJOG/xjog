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
        return view('auth/login');
    }

    Public function signup() {
        return view('auth/register');
    }
}
    