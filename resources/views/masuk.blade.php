@extends('layouts.master')

@section('content')
  <div class="container">
    <div class="section">
      <br>
      <br>
      <h1 class="header center pink-text text-darken-3">Login</h1>
      <div class="row">
                    @if ($errors->has('email'))
                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
        <div class="col s6 z-depth-5 card-panel center-align" style="margin: auto; float: none;">
          <form class="login-form" role="form" method="POST" action="{{url('/auth/login')}}">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <div class="row">
              <div class="input-field col s12 center">
                <a id="logo-container" href="{{url("/")}}" class="responsive-img valign profile-image-login" style="font-size: 3pe;"><img src="{{asset("img/msbroo.jpg")}}" class="circle responsive-img" style="width: 112px; vertical-align: middle;"></a>
                <p class="center login-form-text">MS BRO</p>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input name="email" id="email" type="email" class="validate" value="{{ old('email') }}">
                <i class="mdi-social-person-outline prefix"></i>
                <label for="email" data-error="wrong" data-success="right">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input name="password" id="password" type="password">
                <i class="mdi-action-lock-outline prefix"></i>
                <label for="password">Password</label>
              </div>
            </div>
            <div class="row">          
              <div class="input-field col s12 m12 l12  login-text">
                  <input type="checkbox" id="remember-me" />
                  <label for="remember-me">Remember me</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <button type="submit" class="waves-effect waves-light btn col12">Login</button>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6 m6 l6">
                <p class="margin medium-small"><a href="{{url("/")}}/daftar">Register Now!</a></p>
              </div>
              <div class="input-field col s6 m6 l6">
                  <p class="margin right-align medium-small"><a href="{{url("/")}}/lupapassword">Forgot password?</a></p>
              </div>          
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection