<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Goryo">
<title>@yield('title', 'Goryo: Home Page')</title>
 
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
    
@yield('meta')
    
@section('style')
{{ HTML::style('public/assets/css/bootstrap.min.css') }}
{{ HTML::style('public/assets/css/portfolio-item.css') }}
<link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
{{ HTML::style('public/assets/css/main.css') }}
<!--
<link rel="stylesheet" href="{{ URL::asset('assets/css/portfolio-item.css') }}">
<link rel="stylesheet" href="{{ URL::asset('assets/css/main.css') }}">
-->
@show
 
<!-- jQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{ URL::asset("assets/js/jquery.min.js") }}"><\/script>')</script>

@yield('script.header')
 
</head>
<body>
<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#about">About</a>
                    </li>
                    <li><a href="#services">Now Showing in Cinemas</a>
                    </li>
                    <li><a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
       
    </nav>    
    
@yield('content')
    
@section('script.footer')
<!-- Script Footer -->
{{ HTML::script('public/assets/js/bootstrap.min.js') }}
{{ HTML::script('public/assets/js/main.js') }}
<!--
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/main.js') }}"></script>
-->

@show
 
</body>
</html>