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
        <link href="{{ asset("css/bootstrap/bootstrap.min.css") }}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ asset("css/font-awesome/font-awesome.min.css") }}" rel="stylesheet">
        <!-- bootstrap-wysiwyg -->
        <link href="{{ asset("css/google-code-prettify/prettify.min.css") }}" rel="stylesheet">
        <!-- Select2 -->
        <link href="{{ asset("css/select2/select2.min.css") }}" rel="stylesheet">
        <!-- NProgress -->
        <link href="{{ asset("css/nprogress/nprogress.css") }}" rel="stylesheet">
        <!-- Animate -->
        <link href="{{ asset("css/animate/animate.min.css") }}" rel="stylesheet">
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
        <script src="{{ asset("js/jquery/jquery.min.js") }}"></script>
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