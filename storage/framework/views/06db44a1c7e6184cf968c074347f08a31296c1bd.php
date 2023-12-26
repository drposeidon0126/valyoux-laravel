<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <base href="<?php echo e(config('app.url')); ?>">
    <meta charset="utf-8" />
    <title> <?php echo $__env->yieldContent('title'); ?> | <?php echo e(env('APP_NAME')); ?></title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="app-url" content="<?php echo e(url('/')); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <!-- Meta tags for mobile behavior. Recommended to use! -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

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
    <meta property="og:image" content="<?php echo e(URL::asset('/assets/images/valyou_x_black_logo.svg')); ?>" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo e(URL::asset('assets/images/valyou_x_emblem.svg')); ?>">
    <?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="<?php echo e(URL::asset('assets/libs/jquery/jquery.min.js')); ?>"></script>
</head>

<style>
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
		.searcon{
			flex: 0 0 66.6666666667%;
    		max-width: 66.6666666667%;
        	margin-left:20px;
		}
    }


@media  only screen and (max-width: 1047px) and (min-width: 768px)  {
.searcon{
			font-size:9px;
		}
}

</style>

<?php $__env->startSection('body'); ?>

<body data-sidebar="dark" class="" id="dashBody">
    <!-- Stage Start -->
    <div class="stage">
        <?php echo $__env->yieldSection(); ?>
        <!-- Begin page -->
        <div id="layout-wrapper">
            <?php echo $__env->make('layouts.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <?php echo $__env->yieldContent('top-content'); ?>
                <div class="page-content">
                    <div class="container-fluid">
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>
                <!-- End Page-content -->
                <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <!-- end main content-->
        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <?php echo $__env->make('layouts.right-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
    </div>

    <!-- Gear Player Start -->
    <div class="gearWrap">
        <div id="gearContainer" class="gear" data-gear="<?php echo e(asset('assets/gear_app/json/setup.json')); ?>"></div>
    </div>

    <script>
        if ($(window).width() > 767) {
            var bbbb = document.getElementById('dashBody');
            bbbb.classList.add("sidebar-enable");
            bbbb.classList.add("vertical-collpsed");
        }
    </script>
    <?php echo $__env->make('layouts.footer-script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH /var/www/testvps-main/resources/views/layouts/master.blade.php ENDPATH**/ ?>