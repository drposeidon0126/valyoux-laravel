<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <base href="{{ config('app.url') }}">
    <meta charset="utf-8" />
    <title> @yield('title') | {{ env('APP_NAME') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="app-url" content="{{ url('/') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <!-- Meta tags for mobile behavior. Recommended to use! -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <?php
    $url = Request::segment(3);
    if (isset($url) && $url > 0) {
        $meta_url = url()->full();
        $meta_description = $records[0]->description ?? '';
        $meta_title = 'Valyouxmusic';
    } else {
        $meta_url =  url('/');
        $meta_description = "The World's First Music Artist Stock Market Powered by Blockchain Technology";
        $meta_title = 'Valyouxmusic';
    }
    ?>
    <meta property="og:url" content="<?= $meta_url; ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?= $meta_title; ?>" />
    <meta property="og:description" content="<?= $meta_description; ?>" />
    <meta property="og:image" content="{{ URL::asset('/assets/images/valyou_x_black_logo.svg')}}" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/valyou_x_emblem.svg') }}">
    @include('layouts.head')
    <script src="{{ URL::asset('assets/libs/jquery/jquery.min.js')}}"></script>
</head>

<style>
    .main-content {
        min-height: 100%;
    }

    .page-content {
        min-height: 100%;
    }

    .header-item {
        height: auto;
    }

    .topbar-new {
        align-items: center;
    }

    .topbar-new .dropdown.d-inline-block a {
        margin-top: 0 !important;
    }

    .topbar-new .noti-icon .badge {
        right: 16px;
        top: 7px;
    }

    @media (max-width: 768px) {
        .deposit_box .deposit {
            align-items: center;
        }

        .deposit_box .deposit button,
        .deposit_box .deposit input {
            /*             margin: 0; */
            margin-top: 20px;
        }
    }

    .user-avatar-obj-fit-cover {
        object-fit: cover
    }

    @media (max-width: 1024px) {
        .img-change {
            width: 60px;
            height: 60px;
            object-fit: cover !important;
        }
    }

    @media (min-width: 1025px) {
        .img-change {
            width: 75px;
            height: 75px;
            object-fit: cover !important;
        }
    }

    @media (max-width: 525px) {
        .img-change {
            width: 50px;
            height: 50px;
            object-fit: cover !important;
        }
    }




    @media (min-width: 325px) {
        .searimg {
            flex: 0 0 16.6666666667%;
            max-width: 16.6666666667%;
        }

        .searcon {
            flex: 0 0 66.6666666667%;
            max-width: 66.6666666667%;
            margin-left: 20px;
        }
    }


    @media only screen and (max-width: 1047px) and (min-width: 768px) {
        .searcon {
            font-size: 9px;
        }
    }
       #status {
            width: auto;
            height: auto;
            position: absolute;
            left: 49%;
            top: 50%;
            margin: -20px 0 0 -20px;
            transform: translate(-50%, -50%);
        } 

        .chase-dot:before {
            background-color: #fff !important;
        }
         /* <link rel="stylesheet" href="{{ URL::asset('assets/libs/dropify/css/dropify.min.css') }}">  */

</style>

@section('body')
<div id="preloader" style="background-color: black">
    <div id="status">
        <img src="assets/images/valyou_x_white_logo.svg" alt="" class="img-fluid">
        <div class="spinner-chase">
           <div class="chase-dot" style="color: white !important" ></div>
           <div class="chase-dot" style="color: white !important"></div>
           <div class="chase-dot" style="color: white !important"></div>
           <div class="chase-dot" style="color: white !important"></div>
           <div class="chase-dot" style="color: white !important"></div>
           <div class="chase-dot" style="color: white !important"></div>
        </div>
    </div>
</div>
<!-- <body data-sidebar="dark" class="" id="dashBody"> -->
    <!-- Stage Start -->
    <div class="stage">
        @show
        <!-- Begin page -->
        <div id="layout-wrapper" style="height: 100vh">
            @include('layouts.topbar')
            @include('layouts.sidebar')
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                @yield('top-content')
                <div class="page-content">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
                <!-- End Page-content -->
                @include('layouts.footer')
            </div>
            <!-- end main content-->
        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        @include('layouts.right-sidebar')
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
    </div>

    <!-- Gear Player Start -->
    <div class="gearWrap" style="display:none; height:0" >
        <div id="gearContainer" class="gear" data-gear="{{ asset('assets/gear_app/json/setup.json') }}"></div>
    </div>

    <script>
        if ($(window).width() > 767) {
            // var bbbb = document.getElementById('dashBody');
            var bbbb = document.body;
            console.log(bbbb, "DDdd");
            bbbb.classList.add("sidebar-enable");
            bbbb.classList.add("vertical-collpsed");
        }
    </script>
    @include('layouts.footer-script')
<!-- </body> -->

</html>