<!DOCTYPE html>
<html lang="en">
@include('partials._head')
<body class="nav-md" >
<div class="container body">

    <div class="main_container">

    {{--top nav--}}
    @include('partials._sidenav')
    {{--/topnav--}}

    <!-- top navigation -->
    @include('partials._topnav')
    <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main" >
            <div class="page-title">
                <div class="title_left">
                    <h3>@yield('title')</h3>
                </div>

                {{-- <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="clearfix"></div>
            <div class="data-pjax">
                @yield('content')

            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
    @include('partials._footer')
    <!-- /footer content -->
    </div>
</div>

<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>

@stack('scripts')
@include('partials._notification')

</body>
</html>