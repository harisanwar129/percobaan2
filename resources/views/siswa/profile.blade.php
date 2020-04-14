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
										<img width="200px" height="200px"src="{{$siswa->getAvatar()}}" class="img-circle" alt="Avatar">
										<h3 class="name">{{$siswa->nama_depan}}</h3>
										<span class="online-status status-available">Available</span>
									</div>
									<div class="profile-stat">
										<div class="row">
											<div class="col-md-4 stat-item">
												{{$siswa->mapel->count()}} <span>Mata Pelajaran</span>
											</div>
											<div class="col-md-4 stat-item">
												15 <span>Awards</span>
											</div>
											<div class="col-md-4 stat-item">
												2174 <span>Points</span>
											</div>
										</div>
									</div>
								</div>
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
								<div class="profile-detail">
									<div class="profile-info">
										<h4 class="heading">Biodata</h4>
										<ul class="list-unstyled list-justify">
											<li>Nama <span>{{$siswa->nama_depan}}</span></li>
											<li>Agama <span>{{$siswa->agama}}</span></li>
											<li>Jenis_kelamin <span>{{$siswa->jenis_kelamin}}</span></li>
											<li>Alamat <span>{{$siswa->alamat}}</span></li>
										</ul>
									</div>
									
									
									<div class="text-center"><a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning">Edit Profile</a></div>
								</div>
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right">
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
								Tambah Nilai
								</button>
								
								<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Detail Mata Pelajaran</h3>
								</div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Kode Mapel</th>
												<th>Nama</th>
												<th>Semester</th>
												<th>Nilai</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											@foreach($siswa->mapel as $mapel)
											<tr>
												<td>{{$mapel->kode}}</td>
												<td>{{$mapel->nama}}</td>
												<td>{{$mapel->semester}}</td>
												<td><a href="#" class="nilai" data-type="text" data-pk="{{$mapel->id}}" data-url="/api/siswa/{{$siswa->id}}/editnilai" data-title="Masukan Nilai">{{$mapel->pivot->nilai}}</a></td>
												<td><a href="/siswa/{{$siswa->id}}/{{$mapel->id}}/deletenilai" class="btn btn-danger btn-sm" onclick="return confirm ('apakah anda yakin akan menghapusnya?')">Hapus</a></td>
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
				<form action="/siswa/{{$siswa->id}}/addnilai" method="post" enctype="multipart/form-data">
				{{csrf_field()}}

				 <div class="form-group">
							<label for="mapel">Mata Pelajaran</label>
							<select class="form-control" id="mapel" name="mapel">
						@foreach($matapelajaran as $mp)
							<option value="{{$mp->id}}">{{$mp->nama}}</option>
						@endforeach
    		</select>
					<div class="form-group{{$errors->has('nilai') ? 'has-error': ''}}">
											<label for="nilai">Nama depan</label>
									<input name="nilai"type="text" class="form-control" id="nilai" aria-describedby="emailHelp" placeholder="nilai" value="{{old('nilai')}}" required>
									@if($errors->has('nilai'))
									<span class="help-block">{{$errors->first('nilai')}}</span>
									@endif
      				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Simpan</button>
	</form>
      </div>
    </div>
  </div>
</div>		
@stop
@section('footer')
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
		Highcharts.chart('chartNilai', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Laporan Data Nilai'
    },
    
    xAxis: {
		categories: {!!json_encode($categories)!!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Nilai'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Nilai',
		data: {!!json_encode($data)!!}

    }]
});
$(document).ready(function() {
    $('.nilai').editable();
});
</script>
@stop