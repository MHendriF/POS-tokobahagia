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
            <form method="post" action="{{ url('register') }}" data-parsley-validate>
                {!! csrf_field() !!}
                
                <h1>Create Account</h1>
                
                <div class="form-group has-feedback{{ $errors->has('username') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required/>
                    <span class="glyphicon glyphicon-leaf form-control-feedback"></span>
                    
                    @if ($errors->has('username'))
                        <span class="help-block">
                          <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group has-feedback{{ $errors->has('first_name') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" placeholder="First Name" required/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    
                    @if ($errors->has('first_name'))
                        <span class="help-block">
                          <strong>{{ $errors->first('first_name') }}</strong>
                        </span>
                    @endif
                </div>
                
                <div class="form-group has-feedback{{ $errors->has('last_name') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name" required/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    
                    @if ($errors->has('last_name'))
                        <span class="help-block">
                          <strong>{{ $errors->first('last_name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group has-feedback{{ $errors->has('phone') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" data-parsley-type="number" name="phone" value="{{ old('phone') }}" placeholder="Phone" required/>
                    <span class="glyphicon glyphicon-phone-alt form-control-feedback"></span>
                    
                    @if ($errors->has('phone'))
                        <span class="help-block">
                          <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                    @endif
                </div>

                 <div class="form-group has-feedback{{ $errors->has('address') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" name="address" value="{{ old('address') }}" placeholder="Address" required/>
                    <span class="glyphicon glyphicon-road form-control-feedback"></span>
                    
                    @if ($errors->has('address'))
                        <span class="help-block">
                          <strong>{{ $errors->first('address') }}</strong>
                        </span>
                    @endif
                </div>
                
                <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" data-parsley-minlength="5" class="form-control" name="password" placeholder="Password" required/>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    
                    @if ($errors->has('password'))
                        <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                
                <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <input type="password" data-parsley-equalto="#password" name="password_confirmation" class="form-control" placeholder="Confirm password" required/>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                          <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
                <div>
                    <button class="btn btn-default submit" >Register</button>
                </div>
                
                <div class="clearfix"></div>
                
                <div class="separator">
                    <p class="change_link">Already a member ?
                        <a href="{{ url('login') }}" class="to_register"> Log in </a>
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