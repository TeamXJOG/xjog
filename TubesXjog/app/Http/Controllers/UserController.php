<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\UserModel;

class UserController extends Controller
{
    public function index() {
        if(Session::get('login')) {
            return redirect('/');
        }else {
            return redirect('signin')->with('alert','harus login gan!');
        }
    }

    public function logincheck(Request $request) {
        $email = $request->email;
        $password = $request->password;

        $user = UserModel::where('email',$email)->first();
        if($user) {
            if(Hash::check($password, $user->password)) {
                Session::put('name',$user->name);
                Session::put('email',$user->email);
                Session::put('id',$user->id);
                Session::put('role',$user->role);
                Session::put('login',TRUE);
                return redirect('index_user');
            }
            else {
                return redirect('signin')->with('alert','Password atau Email salah!');
            }
        }else {
            return redirect('signin')->with('alert','Email belum terdaftar!');
        }
    }

    public function logout() {
        Session::flush();
        return redirect('/');
    }

    public function editprof(Request $request) {
        // dd(Session::get('id'));
        $profil = array (
            'name' => $request->name,
            'email' => $request->email  
    );  
        UserModel::findOrfail(Session::get('id'))->update($profil);

        Session::forget(['name','email']);

        Session::put('name',$request->name);
        Session::put('email',$request->email);

        return redirect('/');
    }

    public function hapusakun() {
        UserModel::destroy(Session::get('id'));

        Session::flush();

        return redirect('/');
    }

    public function registercheck(Request $request){
        
        // $this->validate($request, [
        //     'name' => 'required|min:4',
        //     'email' => 'required|min:4|email|unique:users',
        //     'password' => 'required',
        //     'password-confirmation' => 'required|same:password',
        // ]);
        // dd($request->name);
        $us =  new UserModel();
        $us->name = $request->name;
        $us->email = $request->email;
        $us->role = 'user';
        $us->password = bcrypt($request->password);
        $us->save();

        // dd($us->name);
        return redirect('signin')->with('alert-success','Kamu berhasil Register');
    }
}

