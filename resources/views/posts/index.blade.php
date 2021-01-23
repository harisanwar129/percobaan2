
@extends('layout.master')
@section('content')
  <div class="main">
      <div class="main-content">
          <div class="container-flud">
              <div class="row">
                  <div class="col-md-12">
                  <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Postingan Berita</h3>
                  
                  <div class="navbar-btn navbar-btn-right">
                   <a href="{{route('posts.add')}}" class="btn btn-sm btn-primary">Tambahkan Berita</a>
				</div>

								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th >Id</th>
                                                <th >Judul</th>
                                                <th >User</th>
                                                <th >Aksi</th>
                                                
											</tr>
										</thead>
										<tbody>
										@foreach($posts as $post)
                      <tr>
                      
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->user->name}}</td>
                    
                        <td>	
                        
                        <a target="_blank" href="{{route('site.single.post',$post->slug)}}" class="btn btn-info btn-sm">View</a>
                        <a href="#" class="btn btn-warning btn-sm">edit</a>
                        <a href="#" class="btn btn-danger btn-sm delete">Hapus</a>
                          
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
 
@stop

@section('footer')
 <script>
        $('.delete').click(function(){
            var siswa_id=$(this).attr('siswa-id');
            swal({
          title: "Yakin??",
          text: "Apaakah anda yakin akan menghapus data dengan "+siswa_id+"??",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
           window.location="/siswa/"+siswa_id+"/delete";
          } else {
            swal("Your imaginary file is safe!");
          }
        });
        });
 </script>

 @stop
