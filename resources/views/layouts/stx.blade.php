<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="haris hanzo">


    <title>{{ config('app.name', 'Laravel') }}</title>
    {{--<title>STN100MS</title>--}}

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/')}}assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/')}}assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/')}}assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/')}}assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/')}}assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/')}}assets/css/icheck.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/')}}assets/css/custom.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/')}}assets/css/animate.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/')}}assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/')}}assets/css/app.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/')}}assets/css/colors.min.css">
    <!-- END STACK CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/')}}assets/css/horizontal-menu.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/')}}assets/css/vertical-overlay-menu.min.css">
    <!--sweet alert-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}assets/css/sweetalert2.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}assets/css/loading.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/')}}assets/css/style.css">
    <!-- END Custom CSS-->
    <!-- Scripts -->
    @yield('css')
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <!-- Scripts -->
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,300);

        .loading-bro {
            margin: 50px auto;
            width: 150px;
        }
        .loading-bro > h1 {
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 1em;
            font-weight: 300;
            color: #8e8e8e;
        }

        #load {
            /*width: 150px;*/
            display: block;
            position: relative;
            left: 50%;
            top: 50%;
            width: 170px;
            /*height: 170px;*/
            /*margin: -70px 0 0 -70px;*/
            margin: -80px 0 0 -80px;
            animation: loading 3s linear infinite;
        }
        #load #loading-inner {
            stroke-dashoffset: 0;
            stroke-dasharray: 300;
            stroke-width: 10;
            stroke-miterlimit: 10;
            stroke-linecap: round;
            animation: loading-circle 3s linear infinite;
            stroke: #00aeef;
            fill: transparent;
        }

        @keyframes loading {
            0% {
                transform: rotate(0);
            }
            100% {
                transform: rotate(360deg);
            }
        }
        @keyframes loading-circle {
            0% {
                stroke-dashoffset: 0;
            }
            100% {
                stroke-dashoffset: -600;
            }
        }

    </style>

    <!-- Styles -->
    {{--<link href="/css/app.css" rel="stylesheet">--}}


</head>
<body data-open="click" data-menu="horizontal-menu" data-col="2-columns" class="horizontal-layout horizontal-menu 2-columns ">
<div id="app">
    <!-- navbar-fixed-top-->
    <nav class="header-navbar navbar navbar-with-menu navbar-static-top navbar-border navbar-brand-center navbar-light navbar-shadow bg-blue-grey bg-lighten-4"
         data-nav="brand-center">
        <div class="navbar-wrapper">

            <div class="navbar-header">
                <ul class="nav navbar-nav">
                    <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a href="#" class="nav-link nav-menu-main menu-toggle hidden-xs"><i
                                    class="ft-menu font-large-1"></i></a></li>
                    <!--LOGO CENTER-->
                    <li class="nav-item" id="logo_stu_center"><a href="#" class="navbar-brand">
                            <img alt="BP3TI" src="{{ asset('/')}}assets/images/logo_bp3ti_inti3.png" class="brand-logo" style="margin-top: -14px">
                        </a>
                    </li>
                    <!--LOGO CENTER-->

                    <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i
                                    class="fa fa-ellipsis-v"></i></a></li>
                </ul>
            </div>
            <div class=" navbar-container content container-fluid">
                <div id="navbar-mobile" class="collapse navbar-toggleable-sm ">
                    <ul class="nav navbar-nav">
                        <li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="ft-menu"></i></a></li>
                        <li class="dropdown nav-item mega-dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link">{{ config('app.name', 'Laravel') }}</a>
                        </li>

                    </ul>
                    <ul class="nav navbar-nav float-xs-right">


                        <!--DATE/TIME NOTIFICATION-->
                        <li class="dropdown dropdown-notification nav-item" id="clock">
                            <a href="#" data-toggle="dropdown" class="nav-link nav-link-label">
                                <i class="fa fa-calendar"></i><span> {{ date('D d M Y') }}</span> | <span id="clockDisplay"> {{ date('H:i:s') }} &nbsp;</span>
                            </a>
                        </li>

                        <!--DATE/TIME NOTIFICATION-->

                        <!--USER AVATAR-->
                        {{--todo: replace admin to Auth::user()->name --}}
                        <li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span
                                        class="avatar avatar-online"><img src="{{ asset('/')}}assets/images/avatar.png" alt="avatar"><i></i></span><span
                                        class="user-name">admin</span></a>
                            <div class="dropdown-menu dropdown-menu-right">

                                <div class="dropdown-divider"></div>
                                <a href="{{ asset('/')}}logout" class="dropdown-item">
                                    <i class="ft-power"></i> Logout
                                </a>
                            </div>
                        </li>
                        <!--USER AVATAR-->

                    </ul>
                </div>
            </div>

        </div>
    </nav>


    <!-- Horizontal navigation-->
    <div role="navigation" data-menu="menu-wrapper" class="header-navbar navbar navbar-horizontal navbar-fixed navbar-dark navbar-without-dd-arrow navbar-shadow menu-border">
        <!-- Horizontal menu content-->
        <div data-menu="menu-container" class="navbar-container main-menu-content">
            @include('stx._main_menu')
        </div>
        <!-- /horizontal menu content-->
    </div>
    <!-- Horizontal navigation-->

    <!--CONTENT PAGE-->
    <div class="app-content content container-fluid">
        <div class="content-wrapper">

            <div class="content-body"><!-- Description -->

                <div class="row">
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{ Request::segment(1) }} <i class="fa fa-chevron-down"></i></h4>

                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <!--<li><a data-action="close"><i class="ft-x"></i></a></li>-->
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body collapse in">
                                <div class="card-block card-dashboard">
                                    @if(Request::segment(1) == 'monitoring')
                                        {{--show menu monitoring--}}
                                        @include('stx._menu_monitoring')
                                    @elseif(Request::segment(1)=='settings')
                                        {{--show menu setting--}}
                                        @include('stx._menu_settings')
                                    @elseif(Request::segment(1)== 'datalogs')
                                        {{--show menu log--}}
                                        @include('stx._menu_logs')
                                    @else
                                    @endif
                                    <p></p>

                                    @yield('content')

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!--CONTENT PAGE-->
    {{--@yield('content')--}}
</div>

{{--loading--}}

<div class="modal fade modal-m" tabindex="-1" role="dialog" id="progress">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div id="loading-wrapper" class="" style="margin-top: 50%">
                <div id="loading-text" class="text-uppercase">SAVING</div>
                {{--<div id="loading-content"></div>--}}
                <svg id="load" x="0px" y="0px" viewBox="0 0 150 150">
                <circle id="loading-inner" cx="75" cy="75" r="60"/>
                </svg>
            </div>

            {{--<div class="loading-bro">--}}
                {{--<h1>Loading</h1>--}}
                {{--<svg id="load" x="0px" y="0px" viewBox="0 0 150 150">--}}
                    {{--<circle id="loading-inner" cx="75" cy="75" r="60"/>--}}
                {{--</svg>--}}
            {{--</div>--}}
        </div>
    </div>
</div>

{{--loading--}}


{{--<script src="/js/app.js"></script>--}}
<!-- BEGIN VENDOR JS-->
<script src="{{ asset('/')}}assets/js/vendors.min.js" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script type="text/javascript" src="{{ asset('/')}}assets/js/jquery.sticky.js"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN STACK JS-->
<script src="{{ asset('/')}}assets/js/app-menu.min.js" type="text/javascript"></script>
<script src="{{ asset('/')}}assets/js/app.min.js" type="text/javascript"></script>
<script src="{{ asset('/') }}assets/js/sweetalert2.js" type="text/javascript"></script>

@yield('js')

<?php
$today = getdate(); ?>
<script>
    var d = new Date(Date.UTC(<?php date_default_timezone_set('Asia/Jakarta'); echo $today['year'] . "," . $today['mon'] . "," . $today['mday'] . "," . ($today['hours'] - 7) . "," . $today['minutes'] . "," . $today['seconds']; ?>));
    setInterval(function () {
        d.setSeconds(d.getSeconds() + 1);
        var h = d.getHours();
        var i = d.getMinutes();
        var s = d.getSeconds();
        if (h == 0) {
            h = 00;
        }
        if (h < 10) {
            h = "0" + h;
        }
        if (i < 10) {
            i = "0" + i;
        }
        if (s < 10) {
            s = "0" + s;
        }

        //$('#clockDisplay').text((d.getHours() +':' + d.getMinutes() + ':' + d.getSeconds() ));
        $('#clockDisplay').text((h + ':' + i + ':' + s ));
//        console.log(h +':' + i + ':' + s);

    }, 1000);

    // "use strict";
    function reloadPage() {
        console.log('Reload Page');
        window.location.reload();

    }

    function show_loading() {
        $('#progress').modal({
            backdrop: 'static',
            keyboard: false,
            show: true
        });
    }

    function hide_loading() {
        $('#progress').modal('hide');
    }

    function store(route, form, text) {
        //show loading
        show_loading();


        //ajax request
        $.ajax({
            url: route,
            type: 'POST',
            data: $(form).serialize(),
            //if success
            success: function () {
                hide_loading();
                reloadPage();
                swal({
                    type: 'success',
                    title: "Success!",
                    text: text,
                    timer: 1000,
                    showConfirmButton: false,
                }).then(
                    function () {
                    },
                    function (dismiss) {
                        if (dismiss === 'timer') {
                            console.log('I was closed by the timer');

                        }
                    }
                );

            },
            //if error
            error: function (jqXhr) {
                var errorHtml = '';
                hide_loading()

                $.each(jqXhr.responseJSON, function (index, value) {
                    errorHtml += '<div class="text-left col-sm-offset-1 text-capitalize"><li>' + value + '</li></div>';

                });
                swal({
                    title: "Error!",
                    html: errorHtml,
                    type: 'error'
                });
            }

        })
    }

</script>
</body>
</html>
