<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forum;
class ForumController extends Controller
{
    public function index(){
       $forum=Forum::orderBy('created_at','desc')->paginate();
       return view('forum.index',compact(['forum']));
    }
    
    public function create(Request $request){
      $request->request->add(['user_id'=>auth()->user()->id]);
      $forum=Forum::create($request->all());
      return redirect()->back()->with('sukses','Forum Berhasil Ditambahkan');
    }

    public function view(Forum $forum){
       return view('forum.view',compact(['forum']));
    }
}
