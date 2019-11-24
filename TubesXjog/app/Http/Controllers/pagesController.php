<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    Public function home() {
        return view('beranda');
    }
}
