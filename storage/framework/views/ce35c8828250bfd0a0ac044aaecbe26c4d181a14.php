<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8"/>
    <title> <?php echo $__env->yieldContent('title'); ?> | Valyou X</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <?php

        $meta_url =  url('/');
        $meta_description = "The World's First Music Artist Stock Market Powered by Blockchain Technology";
        $meta_title = 'Valyouxmusic';
    ?>
	<meta name="description" 		  content="<?= $meta_description;?>" />
    <meta property="og:url"           content="<?= $meta_url;?>" />
    <meta property="og:type"          content="article" />
    <meta property="og:title"         content="<?= $meta_title;?>" />
    <meta property="og:description"   content="<?= $meta_description;?>" />
    <meta property="og:image"         content="<?php echo e(URL::asset('/assets/images/valyou_x_black_logo.svg')); ?>" />
  <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo e(URL::asset('assets/images/valyou_x_emblem.svg')); ?>">
    <?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <style>
        .bg-soft-primary {
            background-color: #fff !important;
        }

        img.logo-img {
            width: 50%;
            margin-top: 30px;
            margin-bottom: 20px;
            margin-left: 30px;
        }

        .text-primary {
            color: #FF0093 !important;
        }

        .text-darkred {
            color: rgb(176, 34, 34)!important;
        }

        .intro-text {
            font-size: 47px;
            font-weight: bold;
        }

        .btn-primary {
            background-color: #FF0093 !important;
            border-color: #FF0093 !important;
        }

        .b-shadow {
            box-shadow: 1px 4px 5px 2px #ddd9d9
        }

        .card-body p {
            color: #FF0093 !important;
            text-align: center;
        }

        .upload-avatar {
            width: 200px;
        }

        .custom-control-label {
            color: #0CCC9E;
        }

        .custom-control-label::before {
            background-color: #fff;
            border-color: #0CCC9E;
        }

        .register::before {
            background-color: #fff;
            border-color: #FF0093 !important;
        }

        .financial_stk {
            background: linear-gradient(129.49deg,#fd4680 28.13%,#fea75c 57.1%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-fill-color: transparent;
        }

        .custom-control-input:checked ~ .custom-control-label::before {
            color: #fff;
            border-color: #0CCC9E !important;
            background-color: #0CCC9E;
        }

        .custom-file-label {
            color: #fff !important;
            background-color: #000 !important;
        }

        .custom-file-label::after {
            color: #fff;
            content: "Upload" !important;
            background-color: #FF0093;
        }

        .mt-20 {
            margin-top: 70px;
        }

        .btn-right {
            border: 0;
            background: none
        }

        .btn-primary {
            color: #fff;
            background-color: #0CCC9E;
            border-color: #0CCC9E;
        }

        @media  only screen and (max-width: 767px) {
            img.logo-img {
                margin-left: 30px;
            }

            .mt-20 {
                margin-top: 15px;
            }
        }

        .form-group {
            margin-bottom: 2rem;
        }

        .form-control {
            color: #363636 !important;
            background-color: #ffffff !important;
            border: 1px solid #ced4da !important;
            font-size: 1rem;
        }

        .form-control:focus {
            color: #363636 !important;
            border-color: #FF0093 !important;
        }

        .form-control:hover {
            border-color: #161616 !important;
        }

        input::placeholder {
            color: #bebebe !important;
        }

        input {
            outline: none;
        }

        .card-body p.p-gray {
            color: #495057 !important;
            text-align: justify;
            text-align-last: center;
            padding: 0 15px;
        }

        .flex {
            display:flex !important;
        }

        .absolute {
            position: absolute !important;
        }

        .w-min80 {
            min-width: 80vw;
        }

        .h-min80 {
            min-height: 80vh;
        }

        .w-full {
            width: 100%;
        }
        .buttons-box.button {
            border-radius: 2.5px;
            box-shadow: 0 1.5px 3px 0 rgba(0, 0, 0, 0.16);
            width: 180px;
            height: 47px;
            color: #ffff;
            font-size: 20px;
            text-transform: none;
        }

        .btn-resend {
            background-image: linear-gradient(77deg, #fa528b 0%, #ffc26f 99%);
            border-radius: 2.5px;
            box-shadow: 0 1.5px 3px 0 rgba(0, 0, 0, 0.16);
            width: 180px;
            height: 47px;
            color: #ffff;
            font-size: 20px;
            text-transform: none;
            border: 0;
            padding: 10px 25px;
        }

        /*new css for account page*/
        .cb-new-heading {
            font-size: 24px;
            font-weight: 300;
            color: #000;
            margin-bottom: 20px;
        }

        .radio-wrap{
          position: relative;
          margin-bottom: 20px;
        }

        .radio-wrap input[type=radio]{
          position: absolute;
          visibility: hidden;
        }

        .radio-wrap label{
            display: block;
            position: relative;
            z-index: 9;
            cursor: pointer;
            padding: 0px 30px 0px 60px;
            margin: 0;
        }
        .radio-wrap label span{
            display: block;
            position: relative;
            font-size: 18px;
            font-weight: 400;
            z-index: 9;
            cursor: pointer;
            background: #000;
            padding: 12px 15px;
            color: #fff;
            border-radius: 5px;
        }

        .radio-wrap .check{
            display: block;
            position: absolute;
            border-radius: 100%;
            height: 35px;
            width: 35px;
            top: 10px;
            left: 10px;
            z-index: 5;
            transition: border .25s linear;
            -webkit-transition: border .25s linear;
        }

        .radio-wrap .check::before {
            display: block;
            position: absolute;
            content: '';
            border-radius: 100%;
            height: 17px;
            width: 17px;
            top: 7px;
            left: 7px;
            margin: auto;
            transition: background 0.25s linear;
            -webkit-transition: background 0.25s linear;
        }

        /*for green*/
        .radio-wrap .c-green{
            border: 2px solid #00C0BB;
        }
        .radio-wrap input[type=radio]:checked ~ .check.c-green {
          border: 2px solid #00C0BB;
        }
        .radio-wrap input[type=radio]:checked ~ .check.c-green::before{
          background: #00C0BB;
        }

        /*for pink*/
        .radio-wrap .c-pink{
            border: 2px solid #FA5889;
        }
        .radio-wrap input[type=radio]:checked ~ .check.c-pink {
          border: 2px solid #FA5889;
        }
        .radio-wrap input[type=radio]:checked ~ .check.c-pink::before{
          background: #FA5889;
        }

        /*for blue*/
        .radio-wrap .c-blue{
            border: 2px solid #0A2944;
        }
        .radio-wrap input[type=radio]:checked ~ .check.c-blue {
          border: 2px solid #0A2944;
        }
        .radio-wrap input[type=radio]:checked ~ .check.c-blue::before{
          background: #0A2944;
        }
        .rotate-btn-270{
            transform: rotate(270deg);
        }
        p.next-text{
            text-align: center;
            font-size: 24px;
            font-weight: 400;
            color: #000 !important;
        }
        .color-black{
            color: #000;
        }
        @media  only screen and (max-width: 525px) {
            .radio-wrap label {
                padding: 0px 0px 0px 60px;
            }
            .ac-card-body {
                padding: 5px;
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

    </style>
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/libs/dropify/css/dropify.min.css')); ?>">
</head>

<?php echo $__env->yieldContent('body'); ?>
<div id="preloader">
    <div id="status">
        <img src="assets/images/valyou_x_black_logo.svg" alt="" class="img-fluid">
        <!--<div class="spinner-chase">-->
        <!--    <div class="chase-dot"></div>-->
        <!--    <div class="chase-dot"></div>-->
        <!--    <div class="chase-dot"></div>-->
        <!--    <div class="chase-dot"></div>-->
        <!--    <div class="chase-dot"></div>-->
        <!--    <div class="chase-dot"></div>-->
        <!--</div>-->
    </div>
</div>
<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('layouts.footer-script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH /var/www/testvps-main/resources/views/layouts/master-without-nav.blade.php ENDPATH**/ ?>