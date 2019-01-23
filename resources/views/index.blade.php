@if(isset(Auth::user()->id) && Auth::user()->role_id == 1)
    <script>window.location = "/admin/";</script>   
    
 @endif


<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Metronic | Form Stuff - Form Controls</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<meta name="MobileOptimized" content="320">

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href=" {{ asset('/plugins/select2/select2_metro.css') }}"/>
<!-- END PAGE LEVEL STYLES -->

<!-- BEGIN THEME STYLES -->
<link href="{{ asset('css/style-metronic.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('css/plugins.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('css/themes/default.css') }}" rel="stylesheet" type="text/css" id="style_color"/>
<link href="{{ asset('css/pages/login.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->

<link rel="shortcut icon" href="favicon.ico"/>
</head>

<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
  <img src="assets/img/logo-big.png" alt=""/>
</div>
<!-- END LOGO -->

<!-- BEGIN LOGIN -->
<div class="content">
  <!-- BEGIN LOGIN FORM -->

  <form class="login-form" method="post" action="{{ url('/home/checklogin') }}">
    {{ csrf_field() }}
    <h3 class="form-title">Login to your account</h3>

    @if ($message = Session::get('error'))
   <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    {{ $message }}
   </div>
   @endif

    <div class="alert alert-danger display-hide">
      <button class="close" data-close="alert"></button>
      <span>
         Enter any username and password.
      </span>
    </div>
    <div class="form-group">
      <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
      <label class="control-label visible-ie8 visible-ie9">Username</label>
      <div class="input-icon">
        <i class="fa fa-user"></i>
        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
        @if ($errors->has('username'))
          &nbsp;<span class="text-danger">{{ $errors->first('username') }}</span>
        @endif
      </div>
    </div>
    <div class="form-group">
      <label class="control-label visible-ie8 visible-ie9">Password</label>
      <div class="input-icon">
        <i class="fa fa-lock"></i>
        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
        @if ($errors->has('password'))
          &nbsp;<span class="text-danger">{{ $errors->first('password') }}</span>
        @endif
      </div>
    </div>

    <div class="form-actions">
      <label class="checkbox">
      <!--
      <input type="checkbox" name="remember" value="1"/> Remember me </label>
      -->
      <button type="submit" class="btn green pull-right">
      Login <i class="m-icon-swapright m-icon-white"></i>
      </button>
    </div>
    <!--
    <div class="forget-password">
      <h4>Forgot your password ?</h4>
      <p>
         no worries, click <a href="javascript:;" id="forget-password">here</a>
        to reset your password.
      </p>
    </div>

    <div class="create-account">
      <p>
         Don't have an account yet ?&nbsp; <a href="javascript:;" id="register-btn">Create an account</a>
      </p>
    </div>
    -->
  </form>
  <!-- END LOGIN FORM -->
  
  
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
   2018 &copy; CITY GOVERNMENT OF CABUYAO
</div>
<!-- END COPYRIGHT -->




<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>
<script src="assets/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src=" {{ asset('/plugins/jquery-1.10.2.min.js') }}" type="text/javascript"></script>
<script src=" {{ asset('/plugins/jquery-migrate-1.2.1.min.js') }}" type="text/javascript"></script>
<script src=" {{ asset('/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src=" {{ asset('/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
<script src=" {{ asset('/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src=" {{ asset('/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
<script src=" {{ asset('/plugins/jquery.cokie.min.js') }}" type="text/javascript"></script>
<script src=" {{ asset('/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src=" {{asset('/plugins/jquery-validation/dist/jquery.validate.min.js') }}"></script>
<script type="text/javascript" src=" {{asset('/plugins/select2/select2.min.js') }}"></script>
<!-- END PAGE LEVEL PLUGINS -->

<script src=" {{ asset('/scripts/app.js') }}"></script>
<script src=" {{ asset('/scripts/login.js') }}"></script>

<script>

jQuery(document).ready(function() {   
   // initiate layout and plugins
   App.init();
   
});
</script>

  @yield('footer')

 <!-- END JAVASCRIPTS -->
<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script>
</body>
<!-- END BODY -->
</html>