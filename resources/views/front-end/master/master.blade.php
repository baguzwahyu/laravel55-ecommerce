<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('front-end/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('front-end/css/shop-homepage.css')}}" rel="stylesheet">
    <link href="{{asset('front-end/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
</head>
<body>
    @include('front-end.master.header')

    @yield('content')

    @include('front-end.master.footer')
    


    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('front-end/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('front-end/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>