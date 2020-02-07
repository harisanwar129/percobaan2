<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
     public function index(){
        return view ('Auths.login');
    }
    public function postlogin(Request $request){
dd($request);
    }
}
