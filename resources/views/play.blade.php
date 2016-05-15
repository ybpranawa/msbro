@extends('layouts.master')

@section('cssplay')
	<link href="{{asset("css/jplayer.blue.monday.min.css")}}" type="text/css" rel="stylesheet" media="screen,projection"/>
@endsection

@section('content')
  <div class="container">
    <div class="section">
      <br>
      <br>
      <h1 class="header center pink-text text-darken-3">Upload Your Music</h1>
      <div class="row">
      	<div id="jquery_jplayer_1" class="jp-jplayer"></div>
			<div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
				<div class="jp-type-single">
					<div class="jp-gui jp-interface">
						<div class="jp-controls">
							<button class="jp-play" role="button" tabindex="0">play</button>
							<button class="jp-stop" role="button" tabindex="0">stop</button>
						</div>
						<div class="jp-progress">
							<div class="jp-seek-bar">
								<div class="jp-play-bar"></div>
							</div>
						</div>
						<div class="jp-volume-controls">
							<button class="jp-mute" role="button" tabindex="0">mute</button>
							<button class="jp-volume-max" role="button" tabindex="0">max volume</button>
							<div class="jp-volume-bar">
								<div class="jp-volume-bar-value"></div>
							</div>
						</div>
						<div class="jp-time-holder">
							<div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
							<div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
							<div class="jp-toggles">
								<button class="jp-repeat" role="button" tabindex="0">repeat</button>
							</div>
						</div>
					</div>
					<div class="jp-details">
						<div class="jp-title" aria-label="title">&nbsp;</div>
					</div>
					<div class="jp-no-solution">
						<span>Update Required</span>
						To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
					</div>
				</div>
			</div>
      </div>
    </div>
  </div>
@endsection

@section('jsplay')
	<script src="{{asset("js/jquery.jplayer.min.js")}}"></script>
	<script type="text/javascript">
	//<![CDATA[
	$(document).ready(function(){

		$("#jquery_jplayer_1").jPlayer({
			ready: function (event) {
				$(this).jPlayer("setMedia", {
					title: "Bubble",
					mp3: "http://ubuntuserver140412-helloworld-3p6ikn3x.srv.ravcloud.com:8080/07._All_Signs_Point_to_Lauderdale.mp3"
				});
			},
			swfPath: "{{asset("js")}}",
			supplied: "mp3",
			wmode: "window",
			useStateClassSkin: true,
			autoBlur: false,
			smoothPlayBar: true,
			keyEnabled: true,
			remainingDuration: true,
			toggleDuration: true
		});
	});
	//]]>
	</script>
@endsection