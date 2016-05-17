@extends('layouts.master')

@section('content')
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center pink-text text-darken-3">MS BRO</h1>
      <div class="slider">
        <ul class="slides">
          <li>
            <img src="http://the10bestreview.com/wp-content/uploads/2015/03/11-1024x640.jpg"> <!-- random image -->
            <div class="caption center-align">
              <h3>GIRLS' GENERATION</h3>
              <h5 class="light grey-text text-lighten-3">also known as SNSD, is a South Korean girl group formed by S.M. Entertainment in 2007.</h5>
            </div>
          </li>
          <li>
            <img src="http://the10bestreview.com/wp-content/uploads/2015/03/3-1024x576.jpg"> <!-- random image -->
            <div class="caption left-align">
              <h3>SISTAR</h3>
              <h5 class="light grey-text text-lighten-3">is a South Korean girl group formed in 2010 under the management of Starship Entertainment.</h5>
            </div>
          </li>
          <li>
            <img src="http://the10bestreview.com/wp-content/uploads/2015/03/41-1024x722.jpg"> <!-- random image -->
            <div class="caption right-align">
              <h3>F(X)</h3>
              <h5 class="light grey-text text-lighten-3">is a five-member multi-national K-pop girl group formed by S.M. Entertainment in 2009.</h5>
            </div>
          </li>
          <li>
            <img src="http://the10bestreview.com/wp-content/uploads/2015/03/51-1024x683.jpg"> <!-- random image -->
            <div class="caption center-align">
              <h3>MISS A</h3>
              <h5 class="light grey-text text-lighten-3">is a four member Korean-Chinese K-pop girl group based in South Korea. They were formed in 2010 and are managed by JYP Entertainment.</h5>
            </div>
          </li>
          <li>
            <img src="http://the10bestreview.com/wp-content/uploads/2015/03/61-1024x595.jpg"> <!-- random image -->
            <div class="caption center-align">
              <h3>APINK</h3>
              <h5 class="light grey-text text-lighten-3">Apink is a South Korean girl group formed in 2011, produced by A Cube Entertainment.</h5>
            </div>
          </li>
          <li>
            <img src="http://the10bestreview.com/wp-content/uploads/2015/03/81-1024x576.jpg"> <!-- random image -->
            <div class="caption left-align">
              <h3>GIRL'S DAY</h3>
              <h5 class="light grey-text text-lighten-3">Girl’s Day is a four-member South Korean girl group under the management of Dream Tea Entertainment, a subsidiary of KOSDAQ-listed agency Wellmade Star M.</h5>
            </div>
          </li>
        </ul>
      </div>
      <div class="row center">
        <h5 class="header col s12 light">Musik Streaming Bro</h5>
      </div>
      <br><br>
    </div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12">
          <ul class="tabs">
            <li class="tab col s6"><a class="active" href="#tab1">All Music</a></li>
            @if(Auth::check())
            <li class="tab col s6"><a href="#tab2">Private List</a></li>
            @endif
          </ul>
        </div>
        <div id="tab1" class="row">
          @if(isset($lagu))
            @foreach ($lagu as $lisst)
            <div class="col s3">
              <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/msbroo.jpg">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4 truncate"><?php echo $lisst;?></span>
                  <p><a href="{{url("/")}}/{{ Auth::user()->username }}<?php echo $lisst;?>" class="btn waves-effect waves-red" style="color: #000000; background-color: #ffffff">Play</a></p>
                </div>
              </div>
            </div>
            @endforeach
          @endif

        </div>

        @if(Auth::check())
        <div id="tab2" class="col s12">
          @if(isset($list))
            @foreach ($list as $prilist)
            <div class="col s3">
              <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/msbroo.jpg">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4 truncate"><?php echo $prilist;?></span>
                  <p><a href="{{url("/")}}/{{ Auth::user()->username }}/<?php echo $prilist;?>" class="btn waves-effect waves-red" style="color: #000000; background-color: #ffffff">Play</a></p>
                </div>
              </div>
            </div>
            @endforeach
          @endif
        </div>
        @endif
      </div>

    </div>
  </div>
@endsection