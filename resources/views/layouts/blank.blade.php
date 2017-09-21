<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="{{ asset("img/favicon2.ico") }}" type="image/x-icon">

        <title>@yield('title')</title>

        <!-- Bootstrap -->
        <link href="{{ asset("assets/bootstrap/dist/css/bootstrap.min.css") }}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ asset("assets/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet">
        <!-- NProgress -->
        <link href="{{ asset("assets/nprogress/nprogress.css") }}" rel="stylesheet">
    
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
        <script src="{{ asset("assets/jquery/dist/jquery.min.js") }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset("assets/bootstrap/dist/js/bootstrap.min.js") }}"></script>
        <!-- FastClick -->
        <script src="{{ asset("assets/fastclick/lib/fastclick.js") }}"></script>
        <!-- NProgress -->
        <script src="{{ asset("assets/nprogress/nprogress.js") }}"></script>
        
        @stack('scripts')

    </body>
</html>