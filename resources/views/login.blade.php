@extends('layouts.master')

@section('content')
  <div class="container">
    <div class="section">
      <br>
      <br>
      <div class="row">
        @if ($errors)
          
        @endif
        <div class="col s6 z-depth-5 card-panel center-align" style="margin: auto; float: none;">
          <form class="login-form" role="form" method="POST" action="{{url('/')}}/ayologin">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <div class="row">
              <div class="input-field col s12 center">
                <a id="logo-container" href="{{url("/")}}" class="responsive-img valign profile-image-login" style="font-size: 3pe;"><img src="{{asset("img/msbroo.jpg")}}" class="circle responsive-img" style="width: 112px; vertical-align: middle;"></a>
                <p class="center login-form-text">MS BRO</p>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="email" type="email" class="validate">
                <i class="mdi-social-person-outline prefix"></i>
                <label for="email" data-error="wrong" data-success="right">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="password" type="password">
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
                <p class="margin medium-small"><a href="{{url("/")}}/register">Register Now!</a></p>
              </div>
              <div class="input-field col s6 m6 l6">
                  <p class="margin right-align medium-small"><a href="{{url("/")}}/resetpassword">Forgot password?</a></p>
              </div>          
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection