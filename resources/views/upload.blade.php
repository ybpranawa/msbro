@extends('layouts.master')

@section('content')
  <div class="container">
    <div class="section">
      <br>
      <br>
      <h1 class="header center pink-text text-darken-3">Upload Your Music</h1>
      <div class="row">
        <form class="col s12" role="form" method="POST" action="{{url('/')}}/uploading" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{!! csrf_token() !!}">
          <div class="file-field input-field">
            <div class="btn">
              <span>File</span>
              <input type="file" name="lagu">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text" name="pathlagu">
            </div>
            <button type="submit" class="waves-effect waves-light btn">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection