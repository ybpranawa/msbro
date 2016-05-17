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
  @yield('cssplay')
</head>
<body>
  <div class="navbar-fixed">
    <nav class=" pink darken-1" role="navigation">
      <div class="nav-wrapper container"><a id="logo-container" href="{{url("/")}}" class="brand-logo" style="font-size: 3pe;"><img src="{{asset("img/msbroo.jpg")}}" class="circle responsive-img" style="width: 44px; vertical-align: middle;">  MS BRO</a>
        <ul class="right hide-on-med-and-down">
          <!-- Dropdown Trigger -->
          <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Login<i class="material-icons left">perm_identity</i></a></li>
          <li><a href="{{url("/")}}/upload">Upload</a></li>
          <!-- Dropdown Structure -->
          <ul id="dropdown1" class="dropdown-content">
            <li class="divider"></li>
            <li><span><p>Already have an account?</p><a class="btn" href="{{url("/")}}/login">Login</a></span></li>
            <li class="divider"></li>
            <li><span><p>Register Now!</p><a class="btn" href="{{url("/")}}/register">Register</a></span></li>
            </ul>
        </ul>

        <ul id="nav-mobile" class="side-nav">
          <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
              <li><a href="{{url("/")}}/upload">Upload</a></li>
              <li>
                <a class="collapsible-header">Login<i class="material-icons left">perm_identity</i></i></a>
                <div class="collapsible-body">
                  <ul>
                    <li class="divider"></li>
                    <li><a href="{{url("/")}}/login">Login</a></li>
                    <li class="divider"></li>
                    <li><a href="{{url("/")}}/register">Register</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </li>
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
  @yield('jsplay')
  <script src="{{asset("js/materialize.js")}}"></script>
  <script src="{{asset("js/init.js")}}"></script>
  <script>
    $(document).ready(function(){
      $('.slider').slider({full_width: true});

      $('.dropdown-button').dropdown({
          inDuration: 300,
          outDuration: 225,
          constrain_width: false, // Does not change width of dropdown to that of the activator
          hover: false, // Activate on hover
          gutter: 0, // Spacing from edge
          belowOrigin: true, // Displays dropdown below the button
          alignment: 'right' // Displays dropdown with edge aligned to the right of button
        }
      );
    });
  </script>

  </body>
</html>
