
@extends('layout.master')
@section('content')
  <div class="main">
      <div class="main-content">
          <div class="container-flud">
              <div class="row">
                  <div class="col-md-12">
                  <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Forum</h3>
                  
                  <div class="navbar-btn navbar-btn-right">
                   <a type="button"class="btn btn-primary" title="Upgrade to Pro" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> <span>Tambah Forum</span></a>
				</div>

								</div>
								<div class="panel-body">
									<ul class="list-unstyled activity-list">
                                    @foreach($forum as $frm)
										<li>
											<img src="{{$frm->user->siswa->getAvatar()}}" alt="Avatar" class="img-circle pull-left avatar">
                                            <p><a href="/forum/{{$frm->id}}/view">{{$frm->user->siswa->nama_lengkap()}} : {{$frm->judul}} <span class="timestamp">{{$frm->created_at->diffForHumans()}}</span></p>
										</li>
									@endforeach	
									</ul>
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
        <h5 class="modal-title" id="exampleModalLabel">Forum</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/forum/create" method="POST" >
      {{csrf_field()}}

          <div class="form-group{{$errors->has('judul') ? 'has-error': ''}}">
            <label for="namaDepan">Nama depan</label>
            <input name="judul"type="text" class="form-control" id="NamaDepan" aria-describedby="emailHelp" placeholder="judul" value="{{old('judul')}}" required>
            @if($errors->has('judul'))
            <span class="help-block">{{$errors->first('judul')}}</span>
            @endif
          </div>

         <div class="form-group">
            <label for="konten"><K></K>onten</label>
            <textarea name="konten" class="form-control" id="konten" rows="3" >{{old('konten')}}</textarea>
        </div>
          
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
      </div>
    </div>
  </div>
</div>              
@endsection