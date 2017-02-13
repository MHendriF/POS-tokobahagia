@extends('layouts.auth')

@section('title')
    Gentellela Alela! | Login
@endsection

@section('main_content')
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
                            <a href="{{ url('/register') }}" class="to_register"> Create Account </a>
                        </p>
                        
                        <div class="clearfix"></div>
                        <br />
                        
                        <div>
                            <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                            <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                        </div>
                    </div>
                </form>
@endsection