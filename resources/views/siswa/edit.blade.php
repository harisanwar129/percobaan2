
@extends('layout.master')
@section('content')
<div class="main">
      <div class="main-content">
          <div class="container-flud">
              <div class="row">
                  <div class="col-md-12">

                  <form action="/siswa/{{$siswa->id}}/update" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      
          <div class="form-group">
            <label for="namaDepan">Nama depan</label>
            <input name="nama_depan"type="text" class="form-control" id="NamaDepan" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$siswa->nama_depan}}" required> 
           
          </div>

          <div class="form-group">
            <label for="namaBelakang">Nama Belakang</label>
            <input name="nama_belakang" type="text" class="form-control" id="NamaBelakang" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{$siswa->nama_belakang}}" required> 
            
          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
              <option value="Laki-laki"@if($siswa->jenis_kelamin == 'Laki-laki')selected @endif>Laki-Laki</option>
              <option value="Perempuan"@if($siswa->jenis_kelamin == 'Perempuan')selected @endif>Perempuan</option>
         
            </select>
         </div>
         <div class="form-group">
            <label for="agama">Agama</label>
            <input name="agama" type="text" class="form-control" id="agama" aria-describedby="emailHelp" placeholder="Agama" value="{{$siswa->agama}}" required> 
            
          </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat</label>
            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" required>{{$siswa->alamat}}</textarea>
           
          </div>

           <div class="form-group">
            <label for="exampleFormControlTextarea1">Avatar</label>
            <input type="file" name="avatar"class="form-control" required>
             
          </div>
          <button type="submit" class="btn btn-warning">Update</button>
    </form>
               <div>               
           <div>                 
        <div>                 
    <div>                 
<div>                 
          @stop
@section('content1')
    <h2>Edit Data siswa</h2>
  @if(session('sukses'))
  <div class="alert alert-primary alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
  {{session('sukses')}}
 </div>
@endif
  <div class="row">
<div class="col-lg-12">
    <form action="/siswa/{{$siswa->id}}/update" method="post">
      {{csrf_field()}}
          <div class="form-group">
            <label for="namaDepan">Nama depan</label>
            <input name="nama_depan"type="text" class="form-control" id="NamaDepan" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$siswa->nama_depan}}"> 
          </div>
          <div class="form-group">
            <label for="namaBelakang">Nama Belakang</label>
            <input name="nama_belakang" type="text" class="form-control" id="NamaBelakang" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{$siswa->nama_belakang}}"> 
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
              <option value="Laki-laki"@if($siswa->jenis_kelamin == 'Laki-laki')selected @endif>Laki-Laki</option>
              <option value="Perempuan"@if($siswa->jenis_kelamin == 'Perempuan')selected @endif>Perempuan</option>
         
            </select>
         </div>
         <div class="form-group">
            <label for="agama">Agama</label>
            <input name="agama" type="text" class="form-control" id="agama" aria-describedby="emailHelp" placeholder="Agama" value="{{$siswa->agama}}"> 
          </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat</label>
            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" >{{$siswa->alamat}}</textarea>
          </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Avatar</label>
            <input type="file" name="avatar"class="form-control">
          </div>
          <button type="submit" class="btn btn-warning">Update</button>
    </form>
    </div>
    </div>
  
@endsection
    