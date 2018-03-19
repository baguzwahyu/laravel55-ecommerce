@extends('frontend.layout.master')

@section('content')

        <div id="content">

            <div class="container">
                <div class="col-md-12">
                    <div id="main-slider">
                        <div class="item">
                            <img class="img-responsive" src="{{ asset("cc/img/main-slider1.jpg") }}" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="{{ asset("cc/img/main-slider2.jpg") }}" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="{{ asset("cc/img/main-slider3.jpg") }}" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="{{ asset("cc/img/main-slider4.jpg") }}" alt="">
                        </div>
                    </div>
                    <!-- /#main-slider -->
                </div>
            </div>

            <!-- *** ADVANTAGES HOMEPAGE ***
 _________________________________________________________ -->
            <div id="advantages">

                <div class="container">
                    <div class="same-height-row">
                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-heart"></i>
                                </div>

                                <h3><a href="#">We love our customers</a></h3>
                                <p>We are known to provide best possible service ever</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-tags"></i>
                                </div>

                                <h3><a href="#">Best prices</a></h3>
                                <p>You can check that the height of the boxes adjust when longer text like this one is used in one of them.</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-thumbs-up"></i>
                                </div>

                                <h3><a href="#">100% satisfaction guaranteed</a></h3>
                                <p>Free returns on everything for 3 months.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container -->

            </div>
            <!-- /#advantages -->

            <!-- *** ADVANTAGES END *** -->

            <!-- *** HOT PRODUCT SLIDESHOW ***
 _________________________________________________________ -->
            <div id="hot">

                <div class="box">
                    <div class="container">
                        <div class="col-md-12">
                            <h2>Hot this week</h2>
                        </div>
                    </div>
                </div>

                    //disini
                <!-- /.container -->

            </div>
            <!-- /#hot -->

            <!-- *** HOT END *** -->

            <!-- *** GET INSPIRED ***
 _________________________________________________________ -->
            <div class="container" data-animate="fadeInUpBig">
                <div class="col-md-12">
                    <div class="box slideshow">
                        <h3>Get Inspired</h3>
                        <p class="lead">Get the inspiration from our world class designers</p>
                        <div id="get-inspired" class="owl-carousel owl-theme">
                            <div class="item">
                                <a href="#">
                                    <img class="img-responsive" src="{{ asset("cc/img/getinspired1.jpg") }}" alt="Get inspired">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img class="img-responsive" src="{{ asset("cc/img/getinspired2.jpg") }}" alt="Get inspired">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img class="img-responsive" src="{{ asset("cc/img/getinspired3.jpg") }}" alt="Get inspired">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection


