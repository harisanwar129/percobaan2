
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
                   <a href="{{route('posts.add')}}" class="btn btn-sm btn-primary">Tambahkan Berita</a>
				</div>

								</div>
								<div class="panel-body">
									<ul class="list-unstyled activity-list">
                                    @foreach($forum as $frm)
										<li>
											<img src="{{$frm->user->siswa->getAvatar()}}" alt="Avatar" class="img-circle pull-left avatar">
                                            <p><a href="#">{{$frm->user->siswa->nama_lengkap()}} : {{$frm->judul}} <span class="timestamp">{{$frm->created_at->diffForHumans()}}</span></p>
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
@endsection