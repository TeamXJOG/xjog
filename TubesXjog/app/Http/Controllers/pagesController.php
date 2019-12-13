<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session; 
use App\event;
use App\photo;
use App\UserModel;
use App\Comments;
// use App\event;

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
        // $photo = photo::get();
        // $comment  = Comments::orderBy('id', 'DESC')->get();   
        return view('galeri')->with('event', event::all())->with('photo', photo::all())
        ->with('komen', Comments::all());
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

    public function uploadp($id) {
        $event1 = event::where('id',$id)->first();
        if(Session::get('role') == 'user') {
            return view('user/uploadphoto', ['event1' => $event1]);
        } else {
            return redirect('/');
        }
        
    }
}
    