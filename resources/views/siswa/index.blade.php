
@extends('layout.master')
@section('content')
  <div class="main">
      <div class="main-content">
          <div class="container-flud">
              <div class="row">
                  <div class="col-md-12">
                  <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Siswa</h3>
                  
                  <div class="navbar-btn navbar-btn-right">
					<a type="button"class="btn btn-primary" title="Upgrade to Pro" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> <span>Tambah Data</span></a>
				</div>

								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th >Nama Depan</th>
                        <th >Nama Belakang</th>
                        <th >Jenis Kelamin</th>
                        <th >Agama</th>
                        <th >Alamat</th>
                        <th >Opsi</th>
											</tr>
										</thead>
										<tbody>
										@foreach($data_siswa as $siswa)
                      <tr>
                      
                        <td>{{$siswa->nama_depan}}</td>
                        <td>{{$siswa->nama_belakang}}</td>
                        <td>{{$siswa->jenis_kelamin}}</td>
                        <td>{{$siswa->agama}}</td>
                        <td>{{$siswa->alamat}}</td>
                        <td>	
                        
                        <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">edit</a>
                        <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm ('apakah anda yakin akan menghapusnya?')">Hapus</a>
                          
                      </td>

                      </tr>
                      @endforeach
										</tbody>
									</table>
								</div>
							</div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/siswa/create" method="post">
      {{csrf_field()}}
          <div class="form-group">
            <label for="namaDepan">Nama depan</label>
            <input name="nama_depan"type="text" class="form-control" id="NamaDepan" aria-describedby="emailHelp" placeholder="Nama Depan"> 
          </div>
          <div class="form-group">
            <label for="namaBelakang">Nama Belakang</label>
            <input name="nama_belakang" type="text" class="form-control" id="NamaBelakang" aria-describedby="emailHelp" placeholder="Nama Belakang"> 
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
              <option value="Laki-laki">Laki-Laki</option>
              <option value="Perempuan">Perempuan</option>
         
            </select>
         </div>
         <div class="form-group">
            <label for="agama">Agama</label>
            <input name="agama" type="text" class="form-control" id="agama" aria-describedby="emailHelp" placeholder="Agama"> 
          </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat</label>
            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
      </div>
    </div>
  </div>
</div>              
@stop
<!--@section('content1')
  @if(session('sukses'))
  <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
  {{session('sukses')}}
 </div>
@endif
  <div class="row">
    <div class="col-sm-6">
          <h1 >Data Siswa</h1> 
    </div>
  <div class="col-sm-6">
        <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
          Tambah data  
        </button> 
  </div>
  <table class="table table-bordered table-hover text-center">

    <thead>
      <tr>
        <th >Nama Depan</th>
        <th >Nama Belakang</th>
        <th >Jenis Kelamin</th>
        <th >Agama</th>
        <th >Alamat</th>
        <th >Opsi</th>
      </tr>
    </thead>

    <tbody>
    @foreach($data_siswa as $siswa)
      <tr>
      
        <td>{{$siswa->nama_depan}}</td>
        <td>{{$siswa->nama_belakang}}</td>
        <td>{{$siswa->jenis_kelamin}}</td>
        <td>{{$siswa->agama}}</td>
        <td>{{$siswa->alamat}}</td>
        <td>	
        
        <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">edit</a>
        <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm ('apakah anda yakin akan menghapusnya?')">Hapus</a>
           
      </td>

      </tr>
      @endforeach
    </tbody>
  
  </table>
    </div>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    


<!-- Modal -->


<!--@endsection-->