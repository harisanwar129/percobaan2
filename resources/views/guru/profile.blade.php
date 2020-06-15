@extends('layout.master')
@section ('header')
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
@stop
@section('content')
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
				 @if(session('sukses'))
					<div class="alert alert-success" role="alert">
					 <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>				
					{{session('sukses')}}
					</div>
				@endif
				@if(session('hapus'))
					<div class="alert alert-danger" role="alert">
				
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>			
					{{session('hapus')}}
					</div>
				@endif
				 @if(session('error'))
					<div class="alert alert-danger" role="alert">
				
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>			
					{{session('error')}}
					</div>
				@endif
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
										<img width="200px" height="200px"src="" class="img-circle" alt="Avatar">
										<h3 class="name">{{$guru->nama}}</h3>
										<span class="online-status status-available">Available</span>
									</div>
									
								</div>
								
								</div>
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right">
								
								
								<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Detail Mata Pelajaran Yang Diajarkan Oleh {{$guru->nama}}</h3>
								</div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
											
												<th>Mata Pelajaran</th>
												<th>Semester</th>
										
											</tr>
										</thead>
										<tbody>
											@foreach($guru->mapel as $mapel)
											<tr>
											
												<td>{{$mapel->nama}}</td>
												<td>{{$mapel->semester}}</td>
											
											</tr>
												@endforeach
										</tbody>
									</table>
								</div>
							</div>
							<div class="panel">
								<div id="chartNilai">
								
								</div>
							</div>
								</div>
								<!-- END TABBED CONTENT -->
							</div>
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
								
<!-- Modal -->

@stop
@section('footer')

@stop