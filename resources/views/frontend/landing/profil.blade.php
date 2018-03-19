<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">

	<meta name="keywords" content="">

    <!-- styles -->
    <link href="{{asset('cc/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('cc/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('cc/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('cc/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('cc/css/owl.theme.css')}}" rel="stylesheet">


    <!-- theme stylesheet -->
    <link href="{{asset('cc/css/style.default.css')}}" rel="stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="{{asset('cc/css/custom.css')}}" rel="stylesheet">
    <script src="{{asset('cc/js/respond.min.js')}}"></script>
    <link rel="shortcut icon" href="favicon.png">
</head>
<body>

        <div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
                <a href="#" class="btn btn-success btn-sm" data-animate-hover="shake">Offer of the day</a>  <a href="#">Get flat 35% off on orders over $50!</a>
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                    <li><a class="text-primary" href="#">{{auth()->user()->name}}</a>
                    </li>
                    <li><a href="">Contact</a>
                    </li>
                    <li><a href="#">Recently viewed</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <script src="{{asset('cc/js/jquery-1.11.0.min.js')}}"></script>
    <script src="{{asset('cc/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('cc/js/jquery.cookie.js')}}"></script>
    <script src="{{asset('cc/js/waypoints.min.js')}}"></script>
    <script src="{{asset('cc/js/modernizr.js')}}"></script>
    <script src="{{asset('cc/js/bootstrap-hover-dropdown.js')}}"></script>
    <script src="{{asset('cc/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('cc/js/front.js')}}"></script>
</body>
</html>
