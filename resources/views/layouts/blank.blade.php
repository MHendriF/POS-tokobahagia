<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- <title>Gentellela Alela! | </title> --}}
        <title>@yield('title')</title>


        <!-- Bootstrap -->
        <link href="{{ asset("vendors/bootstrap/dist/css/bootstrap.min2.css") }}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ asset("vendors/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet">
        {{-- <!-- bootstrap-wysiwyg -->
        <link href="{{ asset("vendors/google-code-prettify/bin/prettify.min.css") }}" rel="stylesheet">
        <!-- Select2 -->
        <link href="{{ asset("vendors/select2/dist/css/select2.min.css") }}" rel="stylesheet">
        <!-- NProgress -->
        <link href="{{ asset("vendors/nprogress/nprogress.css") }}" rel="stylesheet">
        <!-- Animate -->
        <link href="{{ asset("vendors/animate.css/animate.min.css") }}" rel="stylesheet"> --}}
       {{--  <!-- Custom Theme Style -->
        <link href="{{ asset("build/css/custom.min.css") }}" rel="stylesheet">    --}} 
        @stack('stylesheets')
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">

                @include('includes/sidebar')

                @include('includes/topbar')

                @yield('main_container')

            </div>
        </div>

        <!-- jQuery -->
        <script src="{{ asset("js/jquery/jquery.min2.js") }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset("js/bootstrap/bootstrap.min.js") }}"></script>
        <!-- FastClick -->
        <script src="{{ asset("js/fastclick/fastclick.js") }}"></script>
        <!-- NProgress -->
        <script src="{{ asset("js/nprogress/nprogress.js") }}"></script>
        
        
      {{--   <!-- Custom Theme Scripts -->
        <script src="{{ asset("build/js/custom.min.js") }}"></script> --}}
        
        @stack('scripts')

    </body>
</html>