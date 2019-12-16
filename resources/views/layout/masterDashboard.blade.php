<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Dashboard
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <!-- CSS Files -->

    <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
    {{--<!-- CSS Files -->--}}
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">

    <link href="{{asset('assets/css/now-ui-dashboard.css?v=1.1.0')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />

    <link href="{{asset('assets/demo/demo.css')}}" rel="stylesheet" />
    @yield('link')
</head>

<body class="" style="padding-top:0 !important; min-height: 600px" >

<div class="wrapper ">
    <div class="sidebar" data-color="none">

        <div class="logo" style="padding: 20px">
            <a href="/" class="simple-text logo-normal">
                MANAGE
            </a>
        </div>
        @yield('sidebar-wrapper')
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        @yield('navbar')
        @yield('chart')
        @yield('content')
        @include('layout.footerDashboard')

    </div>
</div>

<!--   Core JS Files   -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="{{asset('assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('assets/js/core/bootstrap.min.js')}}"> </script>
<script src="{{asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<!-- Chart JS -->
<script src="{{asset('assets/js/plugins/chartjs.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('assets/js/plugins/bootstrap-notify.js')}}"> </script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('assets/js/now-ui-dashboard.min.js?v=1.1.0" type="text/javascript')}}"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('assets/demo/demo.js')}}"></script>

<script src="{{asset('bower_components/ckeditor/ckeditor.js')}}"></script>
<script>
    $(".table-menu").hide();
    $( ".toggle-down" ).click(function() {
        $( ".table-menu" ).slideToggle( "slow" );
    });
</script>
@yield('script')

</body>
</html>