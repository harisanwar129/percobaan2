<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
   public function index(Request $request){
if($request->has('cari')){
    $data_siswa=\App\Siswa::where('nama_depan','LIKE','%'.$request->cari.'%')
                           ->orWhere('nama_belakang','LIKE','%'.$request->cari.'%')
                           ->orWhere('jenis_kelamin','LIKE','%'.$request->cari.'%')
                           ->orWhere('agama','LIKE','%'.$request->cari.'%')
                           ->orWhere('alamat','LIKE','%'.$request->cari.'%')
                           ->get();
}else {
   $data_siswa=\App\Siswa::all();
       
}
       return view('siswa.index',['data_siswa'=>$data_siswa]);
    
   }
   public function create(Request $request){

\App\Siswa::create($request->all());
return redirect('/siswa')->with('sukses','Data berhasil ditambahkan');
   }

   public function edit($id){
$siswa=\App\Siswa::find($id);
return view ('siswa/edit',['siswa'=>$siswa]);
   }
   public function update(Request $request ,$id){
$siswa=\App\Siswa::find($id);
$siswa->update($request->all());
return redirect('/siswa')->with('sukses','Data barhasil di ubah');
   }
   public function delete($id){
       $siswa=\App\Siswa::find($id);
       $siswa->delete($siswa);
       return redirect ('/siswa')->with('sukses','Data Berhasil Dihapus');
   }
}
