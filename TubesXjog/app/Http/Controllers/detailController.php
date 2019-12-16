<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session; 
use App\event;

class detailController extends Controller
{
    //
    public function open($id) {
        $event = event::where('id','=',$id)->first();

        return view('detail', ['event' => $event]);
        
    }
}
