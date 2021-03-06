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
    {{--  <div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
                <a href="#" class="btn btn-success btn-sm" data-animate-hover="shake">Offer of the day</a>  <a href="#">Get flat 35% off on orders over $50!</a>
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                    @if (Auth::guest())
                    <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                    </li>
                    <li><a href="{{route('member.register')}}">Register</a>
                    </li>
                    @else                      
                    <li><a href="#"> {{ Auth::user()->name }} </a></li>
                    <li><a href="#">Log Out </a></li>
                    @endif
                </ul>
                
            </div>
        </div>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('member.login.submit')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <input type="text" class="form-control" id="email-modal" placeholder="email" name="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password-modal" placeholder="password" name="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>
                        </form>
                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>  --}}
@include('frontend.partials.header')
    @include('frontend.partials.nav')
    <div id="all">
        @yield('content')
    </div>

    @include('frontend.partials.footer-u')
    @include('frontend.partials.footer-d')
    
    

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