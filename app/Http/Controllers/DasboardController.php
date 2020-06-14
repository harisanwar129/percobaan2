<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
class DasboardController extends Controller
{
        public function index(){
           
        return view ('Dashboard.index');
    }
}
