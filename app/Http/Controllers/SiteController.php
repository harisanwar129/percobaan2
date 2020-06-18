<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Post;
class SiteController extends Controller
{
    public function home(){
        $posts=Post::all();
        return view ('sites.home',compact(['posts']));
    }
    public function about(){
        return view ('sites.about');
    }
    public function register(){
        return view ('sites.register');
    }
    public function postregister(Request $request){
        //insert ke tabel user
        $user=new \App\User;
        $user->role='siswa';
        $user->name=$request->nama_depan;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->remember_token=str_random(60);
        $user->save();

            //insert ke table siswa
        $request->request->add(['user_id'=>$user->id]);
        $siswa=Siswa::create($request->all());
        return redirect('/')->with('sukses','Data Pendaftaran Berhasil Dikirim');
    }
    public function singlepost($slug){
     $post=Post::where('slug','=',$slug)->first();
     return view ('sites.singlepost',compact(['post']));
    }
}
