<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="{{ asset("assets/bootstrap/dist/css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset("assets/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset("assets/nprogress/nprogress.css") }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset("assets/animate.css/animate.min.css") }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset("build/css/custom.min.css") }}" rel="stylesheet">    

</head>


<body class="login">
    <div>

      <div class="login_wrapper">
        
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="{{ url('login') }}" data-parsley-validate>
                {!! csrf_field() !!}
                
                <h1>Login Form</h1>
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="form-group has-feedback {{ $errors->has('username') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    @if ($errors->has('username'))
                        <span class="help-block">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                </div>
                
                    
                <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control" data-parsley-minlength="5" placeholder="Password" name="password" required/>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div>
                    <input type="submit" class="btn btn-default submit" value="Log in">
                    <a class="reset_pass" href="#">Lost your password?</a>
                </div>
                    
                <div class="clearfix"></div>
                    
                <div class="separator">
                    <p class="change_link">New to site?
                        <a href="{{ url('register') }}" class="to_register"> Create Account </a>
                    </p>
                        
                    <div class="clearfix"></div>
                    <br />
                        
                    <div>
                        <h1><i class="fa fa-paw"></i> Toko Bahagia</h1>
                        <p>©2017 All Rights Reserved. Toko Bahagia is a Bootstrap 3 template. Privacy and Terms</p>
                    </div>
                </div>
            </form>
          </section>
        </div>

      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset("assets/jquery/dist/jquery.min.js") }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset("assets/bootstrap/dist/js/bootstrap.min.js") }}"></script>
    <!-- FastClick -->
    <script src="{{ asset("assets/fastclick/lib/fastclick.js") }}"></script>
    <!-- NProgress -->
    <script src="{{ asset("assets/nprogress/nprogress.js") }}"></script>
    <!-- Parsley -->
    <script src="{{ asset("assets/parsleyjs/dist/parsley.min.js")}}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset("build/js/custom.min2.js") }}"></script>

  </body>
</html>