@extends('layouts.auth')

@section('title')
    Toko Bahagia | Auth
@endsection

@section('main_content')

<div class="login_wrapper">
    <div class="animate form login_form">
        <section class="login_content">
                <form method="post" action="{{ url('/login') }}">
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
                        <input type="username" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        @if ($errors->has('username'))
                            <span class="help-block">
                                  <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                    </div>
                    
                    <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        @if ($errors->has('password'))
                            <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    
                    </div>
                    <div>
                        <input type="submit" class="btn btn-default submit" value="Log in">
                        <a class="reset_pass" href="{{  url('/forgot-password') }}">Lost your password?</a>
                    </div>
                    
                    <div class="clearfix"></div>
                    
                    <div class="separator">
                        <p class="change_link">New to site?
                            <a href="#signup" class="to_register"> Create Account </a>
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

    <div id="signup" class="animate form registration_form">
        <section class="login_content">
            <form method="post" action="{{ url('/register') }}">
                {!! csrf_field() !!}
                
                <h1>Create Account</h1>
                
                <div class="form-group has-feedback{{ $errors->has('username') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username">
                    <span class="glyphicon glyphicon-leaf form-control-feedback"></span>
                    
                    @if ($errors->has('username'))
                        <span class="help-block">
                  <strong>{{ $errors->first('username') }}</strong>
                </span>
                    @endif
                </div>

                <div class="form-group has-feedback{{ $errors->has('first_name') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" placeholder="First Name">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    
                    @if ($errors->has('first_name'))
                        <span class="help-block">
                  <strong>{{ $errors->first('first_name') }}</strong>
                </span>
                    @endif
                </div>
                
                <div class="form-group has-feedback{{ $errors->has('last_name') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    
                    @if ($errors->has('last_name'))
                        <span class="help-block">
                  <strong>{{ $errors->first('last_name') }}</strong>
                </span>
                    @endif
                </div>

                <div class="form-group has-feedback{{ $errors->has('phone') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="Phone">
                    <span class="glyphicon glyphicon-phone-alt form-control-feedback"></span>
                    
                    @if ($errors->has('phone'))
                        <span class="help-block">
                  <strong>{{ $errors->first('phone') }}</strong>
                </span>
                    @endif
                </div>

                 <div class="form-group has-feedback{{ $errors->has('address') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" name="address" value="{{ old('address') }}" placeholder="Address">
                    <span class="glyphicon glyphicon-road form-control-feedback"></span>
                    
                    @if ($errors->has('address'))
                        <span class="help-block">
                  <strong>{{ $errors->first('address') }}</strong>
                </span>
                    @endif
                </div>
                
                <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    
                    @if ($errors->has('password'))
                        <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                    @endif
                </div>
                
                <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password">
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
                        <a href="#signin" class="to_register"> Log in </a>
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
@endsection