<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session; 

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

    public function editprofile() {
        return view('user/profile');
    }

    public function dashadmin() {
        if(Session::get('role') == 'admin') {
            return view('admin/dashboard');
        }else {
            return redirect('/');
        }
        
    }

    public function upload() {
        return view('admin/upload');
    }
}
    