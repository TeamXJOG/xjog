<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;
use Illuminate\Support\Facades\Session;
use DataTables;

class AjaxController extends Controller
{
    public function index(Request $request) {
        if( $request->ajax()) {
            $data = Comments::latest()->get();
            return DataTables::of($data)->addIndexColumn()->addColumn('action', function($row) {
                $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editBook">Edit</a>';
   
                $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteBook">Delete</a>';
    
                return $btn;
                
            })->rawColumns(['action'])->make(true);
        }
        return view('galeri',compact('comments'));
     }

     public function store(Request $request) {
         Comments::updateOrCreate(['id' => $request->book_id],
                 ['title' => $request->title, 'author' => $request->author]);        
    
         return response()->json(['success'=>'Book saved successfully.']);
     }

    public function realtime() {
        $comment  = Comments::orderBy('id', 'DESC')->get();
        return view('galeri',['komen' =>$comment]);   
    }
    
    public function push(Request $request) {
        $comm = array (
            'komen' => $request->comment,
            'user_id' => 1,
            'photo_id' => 1
        );
        Comments::create($comm);
        $comment  = Comments::all();
        // dd($comment);
        return response()->json(array('komen'=> $comment->komen), 200);
    }

    public function sendMessage()
    {
        $username = Input::get('username');
        $text = Input::get('text');

        $komens = new Comments();
        $komens->komen = $text;
        $chatMessage->message = $text;
        $chatMessage->save();
    }
}
