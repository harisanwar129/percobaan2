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
                        	</div>
								<div class="panel-body">
								<div class="row">       
                                    <div class="col-md-8">
                                         <form action="/siswa/create" method="POST" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                            <div class="form-group{{$errors->has('title') ? 'has-error': ''}}">
                                                <label for="title">Title</label>
                                                <input name="title"type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="title" value="{{old('title')}}" required>
                                                @if($errors->has('title'))
                                                <span class="help-block">{{$errors->first('title')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group{{$errors->has('content') ? 'has-error': ''}}">
                                                <label for="exampleFormControlTextarea1">content</label>
                                                <textarea name="content" class="form-control" id="content" rows="3" required>{{old('content')}}</textarea>
                                                @if($errors->has('content'))
                                                <span class="help-block">{{$errors->first('content')}}</span>
                                                @endif 
                                            </div>
                                        </div>
                                    <div class="col-md-4">

                                    </div>
                                </div>
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
    ClassicEditor
        .create( document.querySelector( '#content' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@stop