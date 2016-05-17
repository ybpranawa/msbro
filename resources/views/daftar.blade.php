@extends('layouts.master')

@section('content')
  <div class="container">
    <div class="section">
      <br>
      <br>
      <div class="row">
                @if ($errors->has('username'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                @endif
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
                                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                @endif
        <div class="col s6 z-depth-5 card-panel center-align" style="margin: auto; float: none;">
          <form class="login-form" role="form" method="POST" action="{{url('/auth/register')}}">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <div class="row">
              <div class="input-field col s12 center">
                <a id="logo-container" href="{{url("/")}}" class="responsive-img valign profile-image-login" style="font-size: 3pe;"><img src="{{asset("img/msbroo.jpg")}}" class="circle responsive-img" style="width: 112px; vertical-align: middle;"></a>
                <p class="center login-form-text">MS BRO</p>
              </div>
            </div>
            <div class="row margin">
              <div class="input-field col s12">
                <input name="name" id="name" type="text" class="validate">
                <i class="mdi-social-person-outline prefix"></i>
                <label for="name" class="center-align">Username</label>
              </div>
            </div>
            <div class="row margin">
              <div class="input-field col s12">
                <input name="email" id="email" type="email" class="validate">
                <i class="mdi-communication-email prefix"></i>
                <label for="email" class="center-align">Email</label>
              </div>
            </div>
            <div class="row margin">
              <div class="input-field col s12">
                <input name="password" id="password" type="password" class="validate">
                <i class="mdi-action-lock-outline prefix"></i>
                <label for="password">Password</label>
              </div>
            </div>
            <div class="row margin">
              <div class="input-field col s12">
                <input name="password_confirmation" id="password_confirmation" type="password">
                <i class="mdi-action-lock-outline prefix"></i>
                <label for="password_confirmation">Re-type password</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <button type="submit" class="waves-effect waves-light btn col12">Register Now</button>
              </div>
              <div class="input-field col s12">
                <p class="margin center medium-small sign-up">Already have an account? <a href="{{url("/")}}/masuk">Login</a></p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection