<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>MS BRO - Musik Streaming Bro</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{asset("css/materialize.css")}}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{asset("css/style.css")}}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <div class="navbar-fixed">
    <nav class=" pink darken-1" role="navigation">
      <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo" style="font-size: 3pe;"><img src="{{asset("img/msbroo.jpg")}}" class="circle responsive-img" style="width: 44px; vertical-align: middle;">  MS BRO</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="{{url("/")}}/upload">Upload</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
          <li><a href="{{url("/")}}/upload">Upload</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
      </div>
    </nav>
  </div>

  @yield('content')

  <footer class="page-footer pink darken-2">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">MS BRO - Musik Streaming Bro</h5>
          <p class="grey-text text-lighten-4">We are music streaming provider.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{asset("js/materialize.js")}}"></script>
  <script src="{{asset("js/init.js")}}"></script>
  <script>
    $(document).ready(function(){
      $('.slider').slider({full_width: true});
    });  
  </script>

  </body>
</html>
