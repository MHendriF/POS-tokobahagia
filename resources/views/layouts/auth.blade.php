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
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        @yield('main_content')

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