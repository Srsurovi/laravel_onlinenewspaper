<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="{{ asset('images/backend_images/favicon.png')}}">

  <title>Login Page 2 | Creative - Bootstrap 3 Responsive Admin Template</title>

  <link href="{{ asset('css/backend_css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('css/backend_css/bootstrap-theme.css')}}" rel="stylesheet">
  <link href="{{ asset('css/backend_css/elegant-icons-style.css')}}" rel="stylesheet" />
  <link href="{{ asset('css/backend_css/font-awesome.css')}}" rel="stylesheet" />
  <link href="{{ asset('css/backend_css/style.css')}}" rel="stylesheet">
  <link href="{{ asset('css/backend_css/style-responsive.css')}}" rel="styl
</head>

<body class="login-img3-body">

  <div class="container">
    
    <form class="login-form" method="post" action="{{url('admin')}}">{{csrf_field()}}
      <div class="login-wrap">
          @if(Session::has('flash_message_error'))
           <div class="alert alert_error alert_block">
              <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{!! session('flash_message_error') !!}</strong>
           </div>      
          @endif 

           @if(Session::has('flash_message_success'))
           <div class="alert alert_error alert_block">
              <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{!! session('flash_message_success') !!}</strong>
           </div>      
          @endif  

        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="email" name="email" class="form-control" placeholder="Email" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Submit"/>
        <input class="btn btn-primary btn-lg btn-block" type="submit1" value="Signup"/>
      </div>
    </form>
    <div class="text-right">
      <div class="credits">
   
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
  </div>


    <script src="{{ asset('js/backend_js/jquery.js') }}"></script>
    <script src="{{ asset('js/backend_js/bootstrap.min.js') }}"></script>

</body>

</html>
