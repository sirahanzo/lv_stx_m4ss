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
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/css/animate.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/css/icheck.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/css/custom.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/css/app.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/css/colors.min.css">
    <!-- END STACK CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/css/horizontal-menu.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/css/vertical-overlay-menu.min.css">
    {{--<link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/css/palette-gradient.min.css">--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/css/checkboxes-radios.min.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/css/style.css">
    <!-- END Custom CSS-->
    <script>
        window.Laravel = "<?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>";
    </script>
</head>
<body data-open="hover" data-menu="horizontal-menu" data-col="1-column" class="horizontal-layout horizontal-menu 1-column  blank-page blank-page">

<div class="app-content content container-fluid icheck-checkbox skin skin-square">
    <div class="content-wrapper">
        <div class="content-body animated">
            <section class="flexbox-container">
                <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1  box-shadow-2 p-0 animated fadeInUp">
                    <div class="card border-grey border-lighten-3 m-0 ">
                        <div class=" card-header no-border">
                            <div class="card-title text-xs-center">
                                <div class="p-1"><img src="{{ asset('/') }}assets/images/logo_bp3ti_inti2.png" alt="branding logo"></div>
                            </div>
                            <h1 class="card-subtitle line-on-side text-muted text-xs-center font-small-31 pt-2"><span id="stn100ms" style="font-size: 40px">STN100MS</span></h1>
                        </div>
                        <div class="card-body collapse in">

                            <div class="card-block">
                                @if($errors->any())
                                    <div class="alert alert-danger no-border ">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <strong>Error!</strong>
                                        @foreach($errors->all() as $error )
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </div>


                                @endif


                                <form class="form-horizontal form-simple" action="{{ url('/login') }}" method="post" >
                                    {{ csrf_field() }}

                                    <fieldset class="form-group position-relative has-icon-left mb-0 {{ $errors->has('name') ? ' has-danger' : '' }} ">
                                        <input type="text" name="name" class="form-control round" id="iconLeft10" placeholder="Your Username"  value="{{ old('name') }}">
                                        <div class="form-control-position">
                                            <i class="ft-user warning"></i>
                                        </div>
                                        {{--@if ($errors->has('name'))--}}
                                        {{--<p>{{ $errors->first('name') }}</p>--}}
                                        {{--@endif--}}
                                    </fieldset>
                                    <br>

                                    <fieldset class="form-group position-relative has-icon-left mb-0 {{ $errors->has('password') ? ' has-danger' : '' }} ">
                                        <input name="password" type="password" class="form-control round" id="user-password" placeholder="Enter Password" required >
                                        <div class="form-control-position">
                                            <i class="fa fa-key"></i>
                                        </div>
                                        {{--@if ($errors->has('password'))--}}

                                        {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                        {{--</span>--}}
                                        {{--@endif--}}
                                    </fieldset>
                                    <br>
                                    <fieldset class="form-group row">
                                        <div class="col-md-6 col-xs-12 text-xs-center text-md-left">
                                            <fieldset>
                                                <input type="checkbox" id="remember-me" class="chk-remember" name="remember" {{ old('remember') ? 'checked' : ''}}>
                                                <label for="remember-me"> Remember Me</label>
                                            </fieldset>
                                        </div>
                                    </fieldset>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block "><i class="ft-unlock"></i> Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>


<!-- ////////////////////////////////////////////////////////////////////////////-->


<!-- BEGIN VENDOR JS-->
<script src="{{ asset('/') }}assets/js/vendors.min.js" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script type="text/javascript" src="{{ asset('/') }}assets/js/jquery.sticky.js"></script>
{{--<script type="text/javascript" src="{{ asset('/') }}assets/js/jquery.sparkline.min.js"></script>--}}
<script src="{{ asset('/') }}assets/js/icheck.min.js" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN STACK JS-->
<script src="{{ asset('/') }}assets/js/app-menu.min.js" type="text/javascript"></script>
<script src="{{ asset('/') }}assets/js/app.min.js" type="text/javascript"></script>
{{--<script src="{{ asset('/') }}assets/js/customizer.min.js" type="text/javascript"></script>--}}
<!-- END STACK JS-->
<!-- BEGIN PAGE LEVEL JS-->
{{--<script type="text/javascript" src="{{ asset('/') }}assets/js/breadcrumbs-with-stats.min.js"></script>--}}
<script src="{{ asset('/') }}assets/js/checkbox-radio.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->
</body>

<!-- Documented from pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/horizontal-menu-template-nav/form-checkboxes-radios.html by Hanzo, Mon, 12 Jun 2017 03:49:32 GMT -->
</html>