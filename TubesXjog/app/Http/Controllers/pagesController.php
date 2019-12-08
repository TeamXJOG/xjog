<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session; 
use App\event;
use App\UserModel;

class pagesController extends Controller
{
    Public function beranda() {
        // if(Session::get('login')) {
        //     return redirect('/')->with('cek','masuk');
        // }else {
        //     return redirect('/');
        // }

        $event = event::get();

        return view('beranda', ['event' => $event]);
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
        if(Session::get('role') == 'user') {
            return view('user/profile');
        }else {
            return redirect('/');
        }
    }

    public function dashadmin() {
        $user = UserModel::get();
        $event = event::get();


        if(Session::get('role') == 'admin') {
            return view('admin/dashboard', ['users' => $user], ['event' =>$event]);
        }else {
            return redirect('/');
        }

        
    }

    public function upload() {
        return view('admin/upload');
    }
}
    