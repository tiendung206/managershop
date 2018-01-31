<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
        @yield('title','Manager Shop')
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="{{asset('fontend/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('fontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('fontend/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('fontend/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('fontend/css/owl.theme.css')}}" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="{{asset('fontend/css/style.default.css')}}" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="{{asset('fontend/css/custom.css')}}" rel="stylesheet">

    <script src="{{asset('fontend/js/respond.min.js')}}"></script>

    <link rel="shortcut icon" href="favicon.png">

</head>

<body>

    <!-- *** TOPBAR ***
 _________________________________________________________ -->
 @include('fontend.teamplate.top')

    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***
 _________________________________________________________ -->

   @include('fontend.teamplate.menu')
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->
    @yield('content')
        <!-- /#content -->

        <!-- *** FOOTER ***
         _________________________________________________________ -->
       @include('fontend.teamplate.footer')
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->

        <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
        <div id="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">© 2015 Your name goes here.</p>

                </div>
                <div class="col-md-6">
                    <p class="pull-right">Template by <a href="https://bootstrapious.com/e-commerce-templates">Bootstrapious</a> & <a href="https://fity.cz">Fity</a>
                         <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
                    </p>
                </div>
            </div>
        </div>
        <!-- *** COPYRIGHT END *** -->
    </div>
    <!-- /#all -->
    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="{{asset('fontend/js/jquery-1.11.0.min.js')}}"></script>
    <script src="{{asset('fontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('fontend/js/jquery.cookie.js')}}"></script>
    <script src="{{asset('fontend/js/waypoints.min.js')}}"></script>
    <script src="{{asset('fontend/js/modernizr.js')}}"></script>
    <script src="{{asset('fontend/js/bootstrap-hover-dropdown.js')}}"></script>
    <script src="{{asset('fontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('fontend/js/front.js')}}"></script>


</body>

</html>