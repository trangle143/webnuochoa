<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/assets/lib/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('theme/assets/lib/font-awesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('theme/assets/lib/select2/css/select2.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('theme/assets/lib/jquery.bxslider/jquery.bxslider.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('theme/assets/lib/owl.carousel/owl.carousel.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('theme/assets/lib/fancyBox/jquery.fancybox.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('theme/assets/lib/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('theme/assets/css/animate.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('theme/assets/css/reset.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('theme/assets/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('theme/assets/css/responsive.css')}}" />
    <link rel="stylesheet" href="{{asset('build.css')}}">
    @yield('style')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Shop Nước Hoa</title>
</head>
<body class="home">
<!-- TOP BANNER -->
<!--<div id="top-banner" class="top-banner">
    <div class="bg-overlay"></div>
    <div class="container">
        <h1>Special Offer!</h1>
        <h2>Additional 40% OFF For Men & Women Clothings</h2>
        <span>This offer is for online only 7PM to middnight ends in 30th July 2015</span>
        <span class="btn-close"></span>
    </div>
</div>-->
<!-- HEADER -->

<!-- end header -->
<!-- Home slideder-->

<!-- END Home slideder-->
<!-- servives -->
@include('messages')
@yield('content')
<!-- Footer -->
@include('frontend.includes.footer')

<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
<!-- Script-->
<script type="text/javascript" src="{{asset('theme/assets/lib/jquery/jquery-1.11.2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('theme/assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('theme/assets/lib/select2/js/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('theme/assets/lib/jquery.bxslider/jquery.bxslider.min.js')}}"></script>
<script type="text/javascript" src="{{asset('theme/assets/lib/owl.carousel/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('theme/assets/lib/jquery.countdown/jquery.countdown.min.js')}}"></script>
<script type="text/javascript" src="{{asset('theme/assets/js/jquery.actual.min.js')}}"></script>
<script type="text/javascript" src="{{asset('theme/assets/lib/fancyBox/jquery.fancybox.js')}}"></script>
<script type="text/javascript" src="{{asset('theme/assets/lib/jquery.elevatezoom.js')}}"></script>
<script type="text/javascript" src="{{asset('theme/assets/js/theme-script.js')}}"></script>
@yield('script')
</body>
</html>