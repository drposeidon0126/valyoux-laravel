<?php $__env->startSection('pageCSS'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/select2/select2.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/css/pages/social-media.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .for-padd-row {
            padding-right: 15px;
        }

        .col-lg-7.col-6.post-header-bar {
            margin-top: 10px;
            padding: 0;
            margin-left: -20px;
        }
        #comments-section-1 ul{
            overflow: auto;
            overflow-x: hidden;
        }

        .profile_img_name {
            display: flex;
            align-items: flex-start;
        }
        .profile_img_name .post-section-artist-img {
            width: 100%;
            max-width: 85px;
            margin-right: 15px;
        }
        .profile_img_name .inner_img_name {
            margin-top: 10px;
        }
        .uploading-section-artist-p3 img.uploading-section-artist-icon-img{
            margin-top: -2px;
        }
        .color-white{
            color: #fff;
        }
        .valyou-o-btn-invest {
            padding: 8px 20px;
            font-size: 20px;
            margin-top: 0;
        }

        .social-media-profile-wrap {
            background: #000;
            padding: 10px 22px 10px 20px;
            box-shadow: 0 1.5px 4px 0 rgba(0, 0, 0, 0.3) !important;
            margin-bottom: 10px;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .sm-left-wrap {
            display: flex;
            align-items: flex-start;
        }

        .sm-left-wrap img {
            margin: 3px 10px;
            width: 65px;
            height: 65px;
        }

        .sm-left-desc {}

        .sm-left-desc h5 {
            font-size: 14px;
            color: #FF4182;
            margin-bottom: 8px;
        }

        .sm-left-desc h2 {
            color: #FF4182;
            margin-bottom: 5px;
            font-weight: 600;
            font-size: 24px;
            line-height: 1.2;
        }

        .sm-left-desc p {
            color: #fff;
            font-size: 13px;
            margin: 0
        }

        .sm-left-desc p i {
            margin-right: 2px
        }

        .sm-right-wrap .btn-invest-pink-grad {
            color: #fff;
            background-image: linear-gradient(77deg, #FF4182, #FFA85B 100%);
            border: none;
            width: 100%;
            border-radius: 4px;
            font-size: 20px;
            padding: 7px 20px;
        }

        .color-pinkk {
            color: #F9508A !important;
            font-weight: 600;
        }

        .card.shadow-none {
            border-radius: 17px;
        }

        .artist-comment-desc {
            margin-left: 0;
        }

        .tooltip {
            z-index: 1 !important;
        }

        .proceed_modal {}

        .proceed_modal .modal-body {
            padding: 0 1rem;
        }

        .proceed_modal .modal-header {
            border-bottom: none;
        }

        .popup-text {}

        .width-40 {
            max-width: 40px;
        }

        .for-btn-post {
            align-items: center;
            display: flex;
            justify-content: flex-end;
        }

        /*comment css */
        .single-comment {
            display: flex;
            align-items: flex-start;
        }

        .sc-img {
            margin-right: 15px;
            margin-bottom: 20px;
            height: 60px;
            width: 60px;
        }

        .sc-inner {
            display: flex;
            align-items: baseline;
            width: 100%;
            background: #ededed;
            padding: 15px;
            border-radius: 10px;
            height: 100%;
        }

        .sc-name {
            white-space: nowrap;
            width: 90%;
            /*margin-top: 25px;*/
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 600;
            color: #F9508A;
            max-width: 170px;
            min-width: 170px;
        }

        .sc-comment {
            margin-bottom: 0;
            font-size: 12px;
        }

        .sidebar-enable.vertical-collpsed .single-comment {}

        .sidebar-enable.vetr class="text-center"><td colspan="7"rtical-collpsed .sc-img {
            margin-right: 35px;
        }

        .sidebar-enable.vertical-collpsed .sc-inner {}

        .sidebar-enable.vertical-collpsed .sc-name {
            width: 70%;
        }

        .sm-left-wrap .uploading-section-artist-icon-img {
            width: auto;
            height: auto;
            margin: 0;
            margin-top: -4px;
            max-width: 12px;
        }
        .green-percentage{
            color: #72eb31;
        }

        @media (max-width: 575px) {
            .social-media-profile-wrap {
                padding: 10px 1px 10px 3px;
                align-items: flex-start;
                position: relative;
            }

            .sm-left-wrap {
                margin-right: 5px;
            }

            .sm-left-wrap img {
                margin: 1px 5px 0 2px;
                width: 40px;
                height: 40px;
            }

            .sm-left-wrap .uploading-section-artist-icon-img {
                width: auto;
                height: auto;
                margin: 0;
                margin-top: -4px;
                max-width: 12px;
            }
            .green-percentage{
                color: #72eb31;
            }

            .sm-left-desc h2 {
                font-size: 16px;
            }

            .sm-left-desc p {
                font-size: 12px;
                margin-bottom: 5px;
            }

            .sm-right-wrap .btn-invest-pink-grad {
                font-size: 11px;
                padding: 5px 5px;
                white-space: nowrap;
            }

            .sm-left-wrap img.img-40 {
                width: 40px;
            }

            .avatar-md {
                height: auto;
                width: 25px;
            }

            .pad-left-0 {
                padding-left: 0px;
            }

            .artist-comment-desc {
                margin-top: 0;
                margin-right: 0;
                margin-bottom: 0;
                margin-left: 16.6666666667%;
            }

            .sc-inner {
                flex-wrap: wrap;
                background: #ededed;
                padding: 10px;
                border-radius: 10px;
            }

            .sc-name {
                width: 100%;
                margin-top: 0;
            }

            .sc-comment {
                margin-top: 5px;
                width: 100%;
            }

            .sc-img {
                margin-bottom: 0;
                margin-top: 2px;
            }

            .post-section {
                padding: 10px;
            }

            .sm-right-wrap {
                /*margin-right: 7px;*/
                position: absolute;
                right: 7px;
            }

            .uploading-section-upload-img {
                padding: 5px 0px 9px;
                margin: 5px 2px 0;
                margin-right: 10px;
                max-width: 27px;
            }

            .width-40 {
                max-width: 24px;
                margin-right: 10px;
            }

            .col-lg-7.col-6.post-header-bar {
                margin: 8px 0px 0px;
                padding: 0;
                margin-left: -3px;
            }
        }

        @media (max-width: 700px) {
            .social-media-profile-wrap {
                padding: 10px 1px 10px 3px;
                align-items: flex-start;
                position: relative;
            }

            .sm-left-wrap {
                margin-right: 5px;
            }

            .sm-left-wrap img {
                margin: 1px 5px 0 2px;
                width: 40px;
                height: 40px;
            }

            .sm-left-wrap .uploading-section-artist-icon-img {
                width: auto;
                height: auto;
                margin: 0;
                margin-top: -4px;
                max-width: 12px;
            }
            .green-percentage{
                color: #72eb31;
            }

            .sm-left-desc h2 {
                font-size: 16px;
            }

            .sm-left-desc p {
                font-size: 12px;
                margin-bottom: 5px;
            }

            .sm-right-wrap .btn-invest-pink-grad {
                font-size: 11px;
                padding: 5px 5px;
                white-space: nowrap;
            }

            .sm-left-wrap img.img-40 {
                width: 40px;
            }

            .avatar-md {
                height: auto;
                width: 25px;
            }

            .pad-left-0 {
                padding-left: 0px;
            }

            .artist-comment-desc {
                margin-top: 0;
                margin-right: 0;
                margin-bottom: 0;
                margin-left: 16.6666666667%;
            }

            .sc-inner {
                flex-wrap: wrap;
                background: #ededed;
                padding: 10px;
                border-radius: 10px;
            }

            .sc-name {
                width: 100%;
                margin-top: 0;
            }

            .sc-comment {
                margin-top: 5px;
                width: 100%;
            }

            .sc-img {
                margin-bottom: 0;
                margin-top: 2px;
            }

            .post-section {
                padding: 10px;
            }

            .sm-right-wrap {
                /*margin-right: 7px;*/
                position: absolute;
                right: 7px;
            }

            .uploading-section-upload-img {
                padding: 5px 0px 9px;
                margin: 5px 2px 0;
                margin-right: 10px;
                max-width: 27px;
            }

            .width-40 {
                max-width: 24px;
                margin-right: 10px;
            }
        }

        .artist-maker-tabs {
            overflow-x: scroll;
        }

        .artist-maker-tabs a {
            padding: 5px 25px;
        }

        .artist-maker-tabs::-webkit-scrollbar {
            -webkit-appearance: none;
        }

        .artist-maker-tabs::-webkit-scrollbar:vertical {
            width: 6px;
        }

        .artist-maker-tabs::-webkit-scrollbar:horizontal {
            height: 6px;
        }

        .artist-maker-tabs::-webkit-scrollbar-thumb {
            border-radius: 8px;
            border: 2px solid white;
            /* should match background, can't be transparent */
            background-color: #ededed;
        }

        .artist-markets-content-wrap {
            padding-top: 20px;
        }

        .parent-for-video {
            position: relative;
        }

        .overlay-for-video {
            position: absolute;
            top: 0;
            background: rgb(0 0 0 / 54%);
            bottom: 0;
            right: 0;
            left: 0;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .valyou-g-btn {
            color: #fff;
            padding: 10px 11px;
            background-image: linear-gradient(77deg, #00B8BA, #00FFC2 100%);
            border: none;
            width: 100%;
            max-width: 175px;
        }

        .valyou-g-btn:hover {
            color: #fff;
            background-image: linear-gradient(77deg, #00FFC2, #00B8BA 100%);
        }
        .listen_img{
            max-width: 100px;
            margin: 0 auto;
        }
        .send_start{
            font-size: 22px;
            margin-bottom: 10px;
            border: none;
            background: transparent;
        }

        .sponsered-inner{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .sponsered-inner .green-one{
            color: #90eb82;
            font-size: 14px;
        }
        .sponsered-inner .pink-one{
            color: #e62e51;
            text-decoration: underline;
            font-size: 14px;
            cursor: pointer;
        }

        .for_web{
            display: block;
        }
        .for_mob{
            display: none;
        }
        @media (max-width: 575px){
            .for_web{
                display: none;
            }
            .for_mob{
                display: block;
            }
            .for_mob.sm-left-desc h5{
                font-size: 12px;
            }
        }
        @media (max-width: 700px){
            .for_web{
                display: none;
            }
            .for_mob{
                display: block;
            }
            .for_mob.sm-left-desc h5{
                font-size: 12px;
            }
        }

        /*bid now modal css*/
        .bidnow_modal .modal-body{
            padding-bottom: 1rem;
        }
        .bidnow_modal .price-card{
            background: #000;
        }
        .bidnow_modal .quantity input{
            color: #fff;
        }
        .bidnow_modal .modal-body button{
            background: #000;
        }
        .bidnow_modal .modal-header{
            position: relative;
        }
        .bidnow_modal .btn_close{
            position: absolute;
            right: 15px;
        }
        .bidnow_modal .spot_heading{
            margin-left: 5px;
            font-size: 18px;
        }
        .bidnow_modal .bidnow_upload{
            position: relative;
            display: inline-block;
            margin-right: 25px;
            cursor: pointer;
            border-radius: 2.5px;
            box-shadow: 0 1.5px 3px 0 rgb(0 0 0 / 16%);
            color: #fff;
            font-size: 14px;
            background: #000;
            margin-bottom: 0;
            padding: 2px 10px;
        }
        .bidnow_modal .bidnow_upload input{
            position: absolute;
            width: 0;
            height: 0;
        }
        /*video Ad card styling*/
        .videoAd_card{

        }
        .videoAd_card .image__innerwrapper, .image__innerwrapper{
            border: 1px solid #dfdede;
            border-radius: 4px;
            margin-bottom: 5px;
        }
        .image_wrapper .image_ratio{
            margin: 0;
            font-size: 40px;
            color: #0000004a;
            padding-top: 20px;
        }
        .image_wrapper .image_placeholder{
            margin: 0;
            font-size: 45px;
            font-weight: 500;
            margin: 0px;
            color: #5D5D5D;
            padding-bottom: 20px;
        }
        .image_wrapper .image_placeholder span{
            font-size: 29px;
            color: gray;
            font-weight: 100;
            display: block;
        }
        .videoAd_card .video_wrapper{

        }
        .videoAd_card .video_wrapper iframe{

        }
        .color-redd{
            color: #F24336;
        }
        a.text-success.loadbtn.loadbtn-mobile {
            align-items: center;
            display: flex;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?> Market <?php $__env->stopSection(); ?>
<?php $__env->startSection('bottom-navbar'); ?>
    <div id="uploading-section-artist-mobile" style="display: none">
        <div class="tab-select mtab_all ">

        </div>
    </div>
   <?php
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://api.binance.com/api/v3/ticker/price?symbol=USDCUSDT',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    $USDCUSDT = json_decode($response)->price;

    // BTCUSDT
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://api.binance.com/api/v3/ticker/price?symbol=BTCUSDT',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    $BTCUSDT = json_decode($response)->price;

    // ETHUSDT
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://api.binance.com/api/v3/ticker/price?symbol=ETHUSDT',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    $ETHUSDT = json_decode($response)->price;
?>

    <div class="scrolling" id="upper-exchange"> Exchange Rates
        <span class="pink">:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg')); ?>" width="15" height="15" alt="">&nbsp;&nbsp;1 Ethereum &nbsp;=&nbsp;
        <p>0.02776 BTC</p> &nbsp;=&nbsp; $
        <p><?php echo e($ETHUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
        <p class="text-green"> + 0.25% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/bitcoinlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 Bitcoin &nbsp;=&nbsp; $
        <p><?php echo e($BTCUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.15% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 Valyou X Dollar (VXD) = &nbsp;&nbsp; $
        <p><?php echo e($USDCUSDT ?? ''); ?> USDC</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.1% </p>
        &nbsp;&nbsp;&nbsp;

        Exchange Rates
        <span class="pink">:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg')); ?>" width="15" height="15" alt="">&nbsp;&nbsp;1 Ethereum &nbsp;=&nbsp;
        <p>0.02776 BTC</p> &nbsp;=&nbsp; $
        <p><?php echo e($ETHUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
        <p class="text-green"> + 0.25% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/bitcoinlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 Bitcoin &nbsp;=&nbsp; $
        <p><?php echo e($BTCUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.15% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 Valyou X Dollar (VXD) = &nbsp;&nbsp; $
        <p><?php echo e($USDCUSDT ?? ''); ?> USDC</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.1% </p>
        &nbsp;&nbsp;&nbsp;

        Exchange Rates
        <span class="pink">:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg')); ?>" width="15" height="15" alt="">&nbsp;&nbsp;1 Ethereum &nbsp;=&nbsp;
        <p>0.02776 BTC</p> &nbsp;=&nbsp; $
        <p><?php echo e($ETHUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
        <p class="text-green"> + 0.25% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/bitcoinlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 Bitcoin &nbsp;=&nbsp; $
        <p><?php echo e($BTCUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.15% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 Valyou X Dollar (VXD) = &nbsp;&nbsp; $
        <p><?php echo e($USDCUSDT ?? ''); ?> USDC</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.1% </p>
        &nbsp;&nbsp;&nbsp;

        Exchange Rates
        <span class="pink">:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg')); ?>" width="15" height="15" alt="">&nbsp;&nbsp;1 Ethereum &nbsp;=&nbsp;
        <p>0.02776 BTC</p> &nbsp;=&nbsp; $
        <p><?php echo e($ETHUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
        <p class="text-green"> + 0.25% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/bitcoinlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 Bitcoin &nbsp;=&nbsp; $
        <p><?php echo e($BTCUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.15% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 Valyou X Dollar (VXD) = &nbsp;&nbsp; $
        <p><?php echo e($USDCUSDT ?? ''); ?> USDC</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.1% </p>
        &nbsp;&nbsp;&nbsp;

        Exchange Rates
        <span class="pink">:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg')); ?>" width="15" height="15" alt="">&nbsp;&nbsp;1 Ethereum &nbsp;=&nbsp;
        <p>0.02776 BTC</p> &nbsp;=&nbsp; $
        <p><?php echo e($ETHUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
        <p class="text-green"> + 0.25% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/bitcoinlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 Bitcoin &nbsp;=&nbsp; $
        <p><?php echo e($BTCUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.15% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 Valyou X Dollar (VXD) = &nbsp;&nbsp; $
        <p><?php echo e($USDCUSDT ?? ''); ?> USDC</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.1% </p>
        &nbsp;&nbsp;&nbsp;

        Exchange Rates
        <span class="pink">:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg')); ?>" width="15" height="15" alt="">&nbsp;&nbsp;1 Ethereum &nbsp;=&nbsp;
        <p>0.02776 BTC</p> &nbsp;=&nbsp; $
        <p><?php echo e($ETHUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
        <p class="text-green"> + 0.25% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/bitcoinlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 Bitcoin &nbsp;=&nbsp; $
        <p><?php echo e($BTCUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.15% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 Valyou X Dollar (VXD) = &nbsp;&nbsp; $
        <p><?php echo e($USDCUSDT ?? ''); ?> USDC</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.1% </p>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Modal -->
    <div class="modal fade video-modal" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><b class="color-pinkk">Pay $0.02 cents and listen</b>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>You will be charged $0.02 cents if you listen to this song or watch this video. Do you wish to
                        proceed? </p>
                    <p>If you do not wish to be charged again, you have the option to click and Valyou the song for an
                        amount of your choice to receive unlimited plays for this particular song and battle it out for Vip
                        artist-fan rewards.</p>
                    <p>Thank you for supporting </p>
                    <b>Artist Name or Brand.</b>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn valyou-g-btn playvideo" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    <div class="scrolling" id="lower-exchange">
        Exchange Rates
        <span class="pink">:</span>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg')); ?>" width="20" height="20" alt="">
        &nbsp;&nbsp;&nbsp;&nbsp; 1 Ethereum &nbsp;=&nbsp;
        <p id="E1">0.02776 BTC</p>
        &nbsp;=&nbsp; $
        <p id="E2">462.82 USD</p>
        &nbsp;&nbsp;
        <p id="B3" class="text-green"> + 0.25% </p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/bitcoinlogo.svg')); ?>" width="20" height="20">&nbsp;&nbsp;&nbsp;&nbsp;1
        Bitcoin &nbsp;=&nbsp; $
        <p id="B2">16668.06 USD</p>
        &nbsp;&nbsp;
        <p id="B3" class="text-red"> - 0.15% </p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/valyousongiconnew@2x.png')); ?>" width="20" height="20">&nbsp;&nbsp;&nbsp;&nbsp;1
        Valyou X Dollar (VXD) = &nbsp;&nbsp; $
        <p id="B2">1.00 USD</p>
        &nbsp;&nbsp;
        <p id="B3" class="text-red"> - 0.1% </p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="20" height="20">&nbsp;&nbsp;&nbsp;&nbsp;1
        Valyou X Token ( ValyouX) = &nbsp;&nbsp; $
        <p id="B2">0.50 USDC</p>
        &nbsp;&nbsp;
    </div>
    <div class="row">
        <div class="col-lg-12">
            <!--tri-angle-->
           <div class="row mt-4 ">
                <div class="col-lg-8 col-12">
                <?php if(!Auth::user()->roles->contains(3)): ?>
                    <p class="uploading-section-artist-sub-heading mb-2"> Create a new post </p>
                    <div class="card post-card-mobile-body">
                        <div class="uploading-section card-body">
                            <div class="row">
                                <div class="col-lg-2 col-4 marginnone ">
                                    <img src="<?php echo e(isset($user_profile['photo']) ? $user_profile['photo'] : asset('/assets/images/users/avatar-1.jpg')); ?>"
                                         alt="" class="avatar-md rounded-circle post-img ">
                                </div>
                                <div class="col-lg-10 col-8 mt-4 marginnone">
                                    <input type="text" class="form-control uploading-section-title"
                                           placeholder="Share your songs and videos">
                                </div>
                            </div>
                            <div class="row for-padd-row">
                                <div class="col-lg-4 col-md-3">
                                </div>
                                <div class="col-lg-8 col-sm-6 col-md-8 padding-n for-btn-post">
                                    <a href="<?php echo e(route('admin.upload-video')); ?>" title="Upload Video">
                                        <img class="uploading-section-upload-img width-40"
                                             src="<?php echo e(asset('assets/images/valyoux/video_player.svg')); ?>">
                                        <img class="uploading-section-upload-img "
                                             src="<?php echo e(asset('assets/images/valyoux/news_feed_post.svg')); ?>">
                                    </a>
                                    <a href="<?php echo e(route('upload-artist')); ?>" type="button" class="btn post-now-btn"> Post Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                   <?php endif; ?>

                    
                    <?php $__empty_1 = true; $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                        <div class="social-post">
                            <div class="card margin-n">
                                <div class="post-section card-body">
                                    <div class="row">
                                        <div class="col-lg-12 col-12">
                                            <div class="row">
                                                <div class="col-lg-9 col-9 profile_img_name">
                                                    <img class="post-section-artist-img rounded-circle" src="<?php echo e(URL::asset($item->artist->photo ?? '')); ?>" alt="">
                                                    <!--</div>-->
                                                    <!--<div class="col-lg-7 col-6 post-header-bar">-->
                                                    <?php if($item->artist['category'] == 0){
                                                    $category= 'EOI Profile';
                                                }else if($item->artist['category'] == 1){
                                                    $category=  'Upcoming';
                                                }else if($item->artist['category'] == 2){
                                                    $category=  'Professional';
                                                }else if($item->artist['category'] == 3){
                                                    $category=  'Major Artist';
                                                } ?>
                                                    <div class="inner_img_name">
                                                        <p class="post-section-artist-p1 only_name"> <?php echo e($item->artist['brand']); ?></p>
                                                        <p class="post-section-artist-p2 light-gray-color"><?php echo e($item->artist['about']); ?> <i class="fa fa-globe" aria-hidden="true"></i></p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-3">
                                                    <p class="float-right mt-2 light-gray-color text-right"><?php echo e($category); ?></p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-12 col-12 padding-n mt-3">
                                       <a href="socialmedia/details/<?php echo e($item->id); ?>"> <p class="post-section-para"><?php echo e($item->description ?? ''); ?></a></p>
                                    </div>
                                    <div class="col-lg-12 col-12 padding-n parent-for-video">
                                        <video id="video<?php echo e($item->id); ?>" src="<?php echo e(asset($item->name)); ?>" class="video" type="video/mp4"
                                               controls playsinline></video>
                                        <div class="overlay-for-video" id="overlay<?php echo e($item->id); ?>" data-videoid="<?php echo e($item->id); ?>" data-userid="<?php echo e($item->artist['id']); ?>">
                                            <img src="<?php echo e(asset('assets/images/play-button.svg')); ?>" class="rounded-circle"
                                                 alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-lg-12">
                                <?php
                               /*echo "<pre>";
                               print_r($item->artist->brand);
                               exit;*/
                               ?>
                               <!--new desc text-->
                                    <div class="social-media-profile-wrap">
                                        <div class="sm-left-wrap">
                                            <img src="<?php echo e(URL::asset($item->artist->photo ?? '')); ?>" alt=""
                                                 class="avatar-md rounded-circle">
                                            <div class="sm-left-desc for_web">
                                                <h2><?php echo isset($item->artist->brand)?$item->artist->brand:''; ?> </h2>
                                                <h5>Artist share price: <span class="color-white">$<?php echo e(@$item->artist->stock_value); ?> VXD </span> <img class="uploading-section-artist-icon-img" src="<?php echo e(asset('assets/images/valyoux/green_arrow_price_going_up.svg')); ?>"> <span class="text-green">+ <?php echo e(@$item->artist->change_stock); ?>%</span></h5>
                                                <p><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo isset($item->artist->about)?$item->artist->about:''; ?></p>
                                            </div>
                                            <div class="sm-left-desc for_mob">
                                                <h2><?php echo isset($item->artist->brand)?$item->artist->brand:''; ?></h2>
                                                <p><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo isset($item->artist->about)?$item->artist->about:''; ?></p>
                                                <h5>Artist share price: <span class="color-white">$<?php echo e(@$item->artist->stock_value); ?> VXD </span> <img class="uploading-section-artist-icon-img" src="<?php echo e(asset('assets/images/valyoux/green_arrow_price_going_up.svg')); ?>"> <span class="text-green">+ <?php echo e(@$item->artist->change_stock); ?>%</span></h5>
                                            </div>
                                        </div>
                                        <div class="sm-right-wrap">
                                            <button type="button" class="btn-invest-pink-grad"
                                                    onclick="location.href='artist/profile/<?php echo isset($item->artist->id)?$item->artist->id:''; ?>'"> Invest in
                                                Artist</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="container mb-3 mt-3">
                                <div class="row ">
                                    <div class="col-4 col-md-4 text-center padding-r ">
                                        <div class="card shadow-none share-valyou-music" data-valyouid="<?php echo e($item->id); ?>">
                                            <div class="card-body body-p">
                                                <img class="mb-2 share-box-image"
                                                     src="<?php echo e(asset('assets/images/valyoux/valyousongiconnew@2x.png')); ?>">
                                                <p class="card-text mobile-v">Valyou Song</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 col-md-4 text-center padding-r ">
                                        <div class="card shadow-none share-comments" data-commentid="<?php echo e($item->id); ?>">
                                            <div class="card-body body-p">
                                                <img class="mb-2 share-box-image"
                                                     src="<?php echo e(asset('assets/images/comments.svg')); ?>">
                                                <p class="card-text mobile-v">Comments</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 col-md-4 text-center padding-r ">
                                        <div class="card shadow-none share-promote-song" data-promoteid="<?php echo e($item->id); ?>">
                                            <div class="card-body body-p">
                                                <img class="mb-2 share-box-image"
                                                     src="<?php echo e(asset('assets/images/promote.svg')); ?>">
                                                <p class="card-text mobile-v">Promote</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="display: none;" id="valyou-music-section-<?php echo e($item->id); ?>">
                                <div class="container">
                                    <div class="btn-margin">
                                        <div class="row">
                                            <div class="col-1 col-md-1">
                                            </div>
                                            <div class="col-2 col-md-2">
                                                <button type="button" class=" btn btn-light radio dollar-price "
                                                        data-toggle="tooltip" data-placement="top"
                                                        data-original-title="This song is nice, might be a hit, Valyou for $1."
                                                        class="btn btn-light radio" value="1">$1</button>
                                            </div>
                                            <div class="col-2 col-md-2">
                                                <button type="button" class=" btn btn-light radio dollar-price "
                                                        data-toggle="tooltip" data-placement="top"
                                                        data-original-title="This song is nice, might be a hit, Valyou for $2."
                                                        class="btn btn-light radio" value="2">$2</button>
                                            </div>
                                            <div class="col-2 col-md-2 ">
                                                <button type="button" class=" btn btn-light radio dollar-price "
                                                        data-toggle="tooltip" data-placement="top"
                                                        data-original-title="This song is nice, might be a hit, Valyou for $3."
                                                        class="btn btn-light radio" value="3">$3</button>
                                            </div>
                                            <div class="col-2 col-md-2 ">
                                                <button type="button" class=" btn btn-light radio dollar-price "
                                                        data-toggle="tooltip" data-placement="top"
                                                        data-original-title="This song is nice, might be a hit, Valyou for $4."
                                                        class="btn btn-light radio" value="4">$4</button>
                                            </div>
                                            <div class="col-2 col-md-2 ">
                                                <button type="button" class=" btn btn-light radio dollar-price "
                                                        data-toggle="tooltip" data-placement="top"
                                                        data-original-title="This song is nice, might be a hit, Valyou for $5."
                                                        class="btn btn-light radio" value="5">$5</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container col-md-12 text-center mb-5 proceed-valyou-song-div">
                                        <p class="text-danger error_message">Please choose an option above</p>
                                        <button type="button" class="btn valyou-g-btn add_value" value="<?php echo e($item->id); ?>">Proceed to Valyou Song</button>
                                    </div>
                                </div>
                            </div>
                            <div style="display: none" class="mt-3" id="comments-section-<?php echo e($item->id); ?>">
                                <div class="w-100 user-chat">
                                    <div class="card">
                                        <div class="col-md-12 container">
                                            <ul class="list-unstyled mt-3" data-simplebar style="max-height: 470px;">

                                                <?php $__currentLoopData = $item->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li id="comment_<?php echo e($comment->id); ?>">
                                                        <!--new working -->
                                                        <div class="row">
                                                            <div class="col-12 single-comment">
                                                                <img src="<?php echo e(URL::asset(\App\User::find($comment->user_id)->avatar)); ?>"
                                                                     alt="" class="avatar-md rounded-circle sc-img img-fluid">
                                                                <div class="sc-inner">
                                                                    <p class="sc-name artist-comment-name"><?php echo e(\App\User::find($comment->user_id)->first_name); ?>  <?php echo e(\App\User::find($comment->user_id)->last_name); ?></p>
                                                                    <p class="sc-comment"><?php echo e($comment->comment); ?> </p>
                                                                    <p class="ml-auto">
                                                                        <a href="javascript:;" class="sc-name ml-2 edit_comment" data-id="<?php echo e($comment->id); ?>"> <i class=" fa fa-edit"></i> </a>
                                                                        <a href="javascript:;" class="sc-name ml-2 delete_comment" data-id="<?php echo e($comment->id); ?>"> <i class=" fa fa-trash"></i> </a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <hr class="mb-2">
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                        <div class="p-3 chat-input-section">
                                            <div class="row text-center">
                                                <div class="col-md-2 col-2">
                                                    <div class="mr-3">
                                                        <img src="<?php echo e(URL::asset(auth()->user()->avatar)); ?>"
                                                             alt="" class="avatar-md rounded-circle ">
                                                    </div>
                                                </div>
                                                <div class="col-md-8 mt-3 mt-0-mobile col-8 pad-left-0">
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control chat-input" name="comment-<?php echo e($item->id); ?>" placeholder="Enter Comment...">
                                                    </div>
                                                </div>

                                                <div class="col-md-2 col-2">

                                                    <img style="transform: rotate(90deg);" class="mr-3 comment-btn" data-media="<?php echo e($item->id); ?>" src="<?php echo e(asset('assets/images/valyoux/green_arrow_price_going_up.svg')); ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div style="display: none" id="promote-song-section-<?php echo e($item->id); ?>">
                                <div class="container">
                                    <div>
                                        <div class="card text-center">
                                            <h2
                                                style="color: #000000;font-size: 13px; margin: 15px auto ; text-align: center;padding: 7px 12px;">
                                                Invite a friend, new fans & potential investors to listen to your song</h2>
                                            <br>
                                            <div class="card-body price-card">
                                                <div class="row">
                                                    <div class="col-md-3"></div>
                                                    <div class="col-md-6">
                                                        <div class="input-price-div">
                                                            <p>How much do you want to spend?</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3"></div>
                                                </div>
                                                <div class="quantity">
                                                    <input type='button' value='-' id="minus" class='minus' field='quantity' />
                                                    <span class="input-qty pt-3"></span><input type='text' id="quantity<?php echo e($item->id); ?>" name='quantity'
                                                                                               value='25' class='qty input-qty dollar' />
                                                    <input type='button' value='+' id="plus" class='plus ' field='quantity' />
                                                </div>
                                            </div>
                                            <br><br><br>
                                            <h2
                                                style="font-size: 13px; margin: auto 0 0; text-align: center; padding: 0 20px 20px; color: #000000;">
                                                Who would you like to pay to listen to your song so they may invest in you.</h2>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-md-12 text-center mb-3">
                                                <div class="card client-input shadow-lg">
                                                    <img src="<?php echo e(asset('assets/images/PReward per listen .svg')); ?>" class="img-fluid listen_img">
                                                    <div class="card-body">
                                                        <p class="card-text">Reward each listener. Amount you would like to pay
                                                            each listener. <br> Min $0.10 VXD - Max $1.00 VXD</p>
                                                        <input type='button' value='-' class='minus' id="minus2"
                                                               field='quantity2' />
                                                        <span class="input-qty pt-3"></span>
                                                        <input type='text' id="quantity2<?php echo e($item->id); ?>" name='quantity2' value='25'
                                                               class='qty input-qty pt-3' />
                                                        <input type='button' value='+' class='plus ' id="plus2"
                                                               field='quantity2' />
                                                        <p class="card-text">If promoter wants to spend $50 budget.<br>If you
                                                            pay each listener $2 you can reach 25 people.<br>If you pay one
                                                            listener $50 you can reach 1 person.<br>To reach more people
                                                            Increase your budget or reduce the amount you would like to pay each
                                                            listener . Minimum $1</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-2">
                                            <img class="mr-3" style="height:30px; width:30px"
                                                 src="<?php echo e(asset('assets/images/Headphone investor.svg')); ?>">
                                        </div>
                                        <div class="row mb-5">
                                            <div class="col-md-5">
                                                <h2 class="fw-600">Select How you Promote Song?</h2>
                                                <select id="promoteSong<?php echo e($item->id); ?>" class="form-control promoteSong" data-id="<?php echo e($item->id); ?>">
                                                    <option value="">Select How you Promote Song?</option>
                                                    <option value="valyoux">Investors on Valyou X</option>
                                                    <option value="email">Email ID</option>
                                                    <option value="phone">Phone number</option>
                                                </select>
                                            </div>
                                            <div id="valyoux<?php echo e($item->id); ?>" class="col-md-4 valyoux" style="display: none">
                                                <h2 class="fw-600">Investors on Valyou X </h2>
                                                <select id="promoteuser<?php echo e($item->id); ?>" class="select2 form-control" multiple="multiple">
                                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($user->id); ?>"><?php echo e($user->first_name." ".$user->last_name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            <div id="email<?php echo e($item->id); ?>" class="col-md-4 email" style="display: none">
                                                <h2 class="fw-600">Email ID</h2>
                                                <input id="promoteemail<?php echo e($item->id); ?>" type="text" data-role="tagsinput"
                                                       placeholder="Add Emails or add multiple and seprate with ,"
                                                       class="form-control" />
                                            </div>
                                            <div id="phone<?php echo e($item->id); ?>" class="col-md-4 phone" style="display: none">
                                                <h2 class="fw-600">Phone number</h2>
                                                <input id="promotephone<?php echo e($item->id); ?>" class="form-control number-input-music" placeholder="Enter Number"
                                                       type="number">
                                            </div>
                                            <div id="else<?php echo e($item->id); ?>" class="col-md-4 else" style="display: none">
                                                <p class="text-danger">Please select any 1</p>
                                            </div>
                                        </div>

                                        <div class="row col-md-12">
                                        </div>
                                        <br> <br>
                                        <div class="col-md-12 text-center ">
                                            <img class="mx-auto mb-2 d-block"
                                                 src="<?php echo e(asset('assets/images/send-_promote_start.svg')); ?>" class="img-fluid">
                                            <button type="button" data-id="<?php echo e($item->id); ?>" class="sendStart send_start">Send / Start</button>
                                            <h5 class="font-size-14 mb-3 text-center">Share it on</h5>
                                            <div class="mt-4 text-center row">
                                                <div class="col-lg-12">
                                                    <ul class="list-inline social-container">
                                                        <li class="list-inline-item">
                                                            <a  target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(url()->full()); ?>/details/<?php echo e($item->id); ?>"
                                                               class="social-list-item bg-primary text-white border-primary">
                                                                <i class="mdi mdi-facebook"></i>
                                                            </a>

                                                        </li>
                                                        <li class="list-inline-item">
                                                           <a target="_blank" href="https://twitter.com/intent/tweet?text=<?php echo e($item->description); ?>&url=<?php echo e(url()->full()); ?>/details/<?php echo e($item->id); ?>" class="social-list-item bg-info text-white border-info">
                                                                <i class="mdi mdi-twitter"></i>
                                                            </a>

                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"
                                                               class="social-list-item bg-danger text-white border-danger">
                                                                <i class="mdi mdi-google"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#" class="social-list-item  text-white ">
                                                                <img src="<?php echo e(asset('assets/images/valyou_xemblem.svg')); ?>"
                                                                     alt="" height="30">
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--banner Ad -->
                            <div class="card ">
                                <div class="card-body">
                                    <div id="sponsored-section mt-3" class="row">
                                        <div class="col-lg-12 col-12 mt-3">
                                            <p class="sponsored-section-p1">Sponsored In Demand</p>
                                            <div class="sponsered-inner">
                                                <p class="green-one">Current offer $40.00 For  24 hours </p>
                                                <p class="pink-one" data-toggle="modal" data-target="#bidNowModal">Bid Now</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-12 text-center image_wrapper">
                                            <div class="image__innerwrapper">
                                                <h6 class="image_ratio">16:9</h6>
                                                <p class="image_placeholder">Invest in music artist on Valyou X <span>The World's First Artist Stock Market</span></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-12 mb-3">
                                            <div class="row">
                                                <div class="col-lg-3 col-2 ">
                                                </div>
                                                <div class="col-lg-6 col-8 text-center">
                                                    <button type="button" class="btn valyou-o-btn-invest-lg"> Click and Earn $3</button>
                                                </div>
                                                <div class="col-lg-3 col-2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--video Ad-->

                            <div class="card videoAd_card">
                                <div class="card-body">
                                    <div id="sponsored-section mt-3" class="row">
                                        <div class="col-lg-12 col-12 mt-3">
                                            <!--name inside span should be changed from who is posting the Add-->
                                            <p class="sponsored-section-p1">Sponsored Ad By <span class="color-redd">Hungry Jacks</span></p>
                                            <div class="sponsered-inner">
                                                <p class="green-one">Minimum Bid $40.00 For 24 hours </p>
                                                <p class="pink-one" data-toggle="modal" data-target="#bidNowModal">Bid Now</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-12 text-center image_wrapper">
                                            <div class="image__innerwrapper">
                                                <h6 class="image_ratio d-none">16:9</h6>
                                                <p class="image_placeholder d-none">Invest in music artist on Valyou X <span>The World's First Artist Stock Market</span></p>

                                                <div class="video_wrapper">
                                                    <iframe width="100%" height="400" src="https://www.youtube.com/embed/zD0mCBxY4sE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                <!--<video id="video<?php echo e($item->id); ?>" src="<?php echo e(asset($item->name)); ?>" class="video" type="video/mp4" controls playsinline></video>-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-12 mb-3">
                                            <div class="row">
                                                <div class="col-lg-3 col-2 ">
                                                </div>
                                                <div class="col-lg-6 col-8 text-center">
                                                    <button type="button" class="btn valyou-o-btn-invest-lg"> Watch and Earn $3</button>
                                                </div>
                                                <div class="col-lg-3 col-2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p>No Videos Found</p>
                    <?php endif; ?>
                    



                    <div class="social-post">
                        <div class="card margin-n">
                            <div class="post-section card-body">
                                <div class="row">
                                    <div class="col-lg-12 col-12">
                                        <div class="row">
                                            <div class="col-lg-2 col-3">
                                                <img class="post-section-artist-img rounded-circle"
                                                     src="<?php echo e(URL::asset('assets/images/valyoux/drake-valyou_x_music@2x.png')); ?>"
                                                     alt="">
                                            </div>
                                            <div class="col-lg-7 col-6 post-header-bar">
                                                <p class="post-section-artist-p1">Drake</p>
                                                <p class="post-section-artist-p2 light-gray-color">Major Artist <i
                                                        class="fa fa-globe" aria-hidden="true"></i></p>
                                            </div>
                                            <div class="col-lg-2 col-3">
                                                <p class="float-right mt-2 light-gray-color text-right">Music Artist</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-12 col-12 padding-n">
                                    <p class="post-section-para">Check out my new video, Started from the bottom. ovoxox
                                        sounds #dope #social music media is for posting only music related brand content</p>
                                </div>
                                <div class="col-lg-12 col-12 padding-n parent-for-video">
                                    <video id="video"
                                           src="https://myprojectstaging.com/valyouxmusic/public/assets/videos/drake-video.mp4"
                                           class="video" type="video/mp4" controls playsinline></video>
                                    <div class="overlay-for-video" data-toggle="modal" data-target="#staticBackdrop">
                                        <img src="<?php echo e(asset('assets/images/play-button.svg')); ?>" class="rounded-circle"
                                             alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <!--new desc text-->
                                <div class="social-media-profile-wrap">
                                    <div class="sm-left-wrap">
                                        <img src="http://myprojectstaging.com/valyouxmusic/public/assets/images/valyoux/drake-valyou_x_music@2x.png"
                                             alt="" class="avatar-md rounded-circle">
                                        <div class="sm-left-desc for_web">
                                            <h5>Artist share price</h5>
                                            <h2>Drake $2.33VXD</h2>
                                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> Major Artist</p>
                                        </div>
                                        <div class="sm-left-desc for_mob">
                                            <h2>Drake</h2>
                                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> Major Artist</p>
                                            <h5>Artist share price: $2.33VXD</h5>
                                        </div>
                                    </div>
                                    <div class="sm-right-wrap">
                                        <button type="button" class="btn-invest-pink-grad"
                                                onclick="location.href='<?php echo e(url('crypto-exchange')); ?>'"> Invest in
                                            Artist</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container mb-3 mt-3">
                            <div class="row ">
                                <div class="col-4 col-md-4 text-center padding-r ">
                                    <div class="card shadow-none" id="share-valyou-music">
                                        <div class="card-body body-p">
                                            <img class="mb-2 share-box-image"
                                                 src="<?php echo e(asset('assets/images/valyoux/valyousongiconnew@2x.png')); ?>">
                                            <p class="card-text mobile-v">Valyou Song</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 col-md-4 text-center padding-r ">
                                    <div class="card shadow-none" id="share-comments">
                                        <div class="card-body body-p">
                                            <img class="mb-2 share-box-image"
                                                 src="<?php echo e(asset('assets/images/comments.svg')); ?>">
                                            <p class="card-text mobile-v">Comments</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 col-md-4 text-center padding-r ">
                                    <div class="card shadow-none" id="share-promote-song">
                                        <div class="card-body body-p">
                                            <img class="mb-2 share-box-image"
                                                 src="<?php echo e(asset('assets/images/promote.svg')); ?>">
                                            <p class="card-text mobile-v">Promote</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="display: none" class="mt-3" id="sharing-section-1">
                            <div class="w-100 user-chat">
                                <div class="card">
                                    <div class="col-md-12 container">
                                        <ul class="list-unstyled mt-3" data-simplebar style="max-height: 470px;">
                                            <li>
                                                <!--new working -->
                                                <div class="row">
                                                    <div class="col-12 single-comment">
                                                        <img src="<?php echo e(URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png')); ?>"
                                                             alt="" class="avatar-md rounded-circle sc-img img-fluid">
                                                        <div class="sc-inner">
                                                            <p class="sc-name artist-comment-name">Kanye West</p>
                                                            <p class="sc-comment">dope artist i had invest dope artist i had
                                                                invest dope artist i had invest. dope artist i had invest
                                                                dope artist i had invest dope artist i had invest dope
                                                                artist i had invest dope artist i had invest dope artist i
                                                                had invest dope artist i had invest dope artist i had invest
                                                                dope artist i had invest dope artist i had invest dope
                                                                artist i had invest </p>
                                                        </div>
                                                    </div>
                                                </div>


                                                <hr class="mb-2">
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-12 single-comment">
                                                        <img src="<?php echo e(URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png')); ?>"
                                                             alt="" class="avatar-md rounded-circle sc-img img-fluid">
                                                        <div class="sc-inner">
                                                            <p class="sc-name artist-comment-name">Kanye West</p>
                                                            <p class="sc-comment">Awesome artist I would like to invest now!
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-12 single-comment">
                                                        <img src="<?php echo e(URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png')); ?>"
                                                             alt="" class="avatar-md rounded-circle sc-img img-fluid">
                                                        <div class="sc-inner">
                                                            <p class="sc-name artist-comment-name">Kanye West</p>
                                                            <p class="sc-comment">Stocks going up</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="p-3 chat-input-section">
                                        <div class="row text-center">
                                            <div class="col-md-2 col-2">
                                                <div class="mr-3">
                                                    <img src="<?php echo e(URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png')); ?>"
                                                         alt="" class="avatar-md rounded-circle ">
                                                </div>
                                            </div>
                                            <div class="col-md-8 mt-3 mt-0-mobile col-8 pad-left-0">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control chat-input"
                                                           placeholder="Enter Comment...">
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-2">
                                                <img style="transform: rotate(90deg);" class="mr-3 comment-btn"
                                                     style="height:30px; width:30px"
                                                     src="<?php echo e(asset('assets/images/valyoux/green_arrow_price_going_up.svg')); ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="display: none;" id="sharing-section-2">
                            <div class="container">
                                <div class="btn-margin">
                                    <div class="row">
                                        <div class="col-1 col-md-1">
                                        </div>
                                        <div class="col-2 col-md-2">
                                            <button type="button" class=" btn btn-light radio dollar-price "
                                                    data-toggle="tooltip" data-placement="top"
                                                    data-original-title="This song is nice, might be a hit, Valyou for $1."
                                                    class="btn btn-light radio">$1</button>
                                        </div>
                                        <div class="col-2 col-md-2">
                                            <button type="button" class=" btn btn-light radio dollar-price "
                                                    data-toggle="tooltip" data-placement="top"
                                                    data-original-title="This song is nice, might be a hit, Valyou for $2."
                                                    class="btn btn-light radio">$2</button>
                                        </div>
                                        <div class="col-2 col-md-2 ">
                                            <button type="button" class=" btn btn-light radio dollar-price "
                                                    data-toggle="tooltip" data-placement="top"
                                                    data-original-title="This song is nice, might be a hit, Valyou for $3."
                                                    class="btn btn-light radio">$3</button>
                                        </div>
                                        <div class="col-2 col-md-2 ">
                                            <button type="button" class=" btn btn-light radio dollar-price "
                                                    data-toggle="tooltip" data-placement="top"
                                                    data-original-title="This song is nice, might be a hit, Valyou for $4."
                                                    class="btn btn-light radio">$4</button>
                                        </div>
                                        <div class="col-2 col-md-2 ">
                                            <button type="button" class=" btn btn-light radio dollar-price "
                                                    data-toggle="tooltip" data-placement="top"
                                                    data-original-title="This song is nice, might be a hit, Valyou for $5."
                                                    class="btn btn-light radio">$5</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container col-md-12 text-center mb-5 proceed-valyou-song-div">
                                    <button type="button" class="btn valyou-g-btn" data-toggle="modal"
                                            data-target="#proceedModal"> Proceed to Valyou Song</button>
                                </div>
                            </div>
                        </div>
                        <div style="display: none" id="sharing-section-3">
                            <div class="container">
                                <div>
                                    <div class="card text-center">
                                        <h2
                                            style="color: #000000;font-size: 13px; margin: 15px auto ; text-align: center;padding: 7px 12px;">
                                            Invite a friend, new fans & potential investors to listen to your song</h2>
                                        <br>
                                        <div class="card-body price-card">
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-6">
                                                    <div class="input-price-div">
                                                        <p>How much do you want to spend?</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3"></div>
                                            </div>
                                            <div class="quantity">
                                                <input type='button' value='-' id="minus" class='minus' field='quantity' />
                                                <span class="input-qty pt-3"></span><input type='text' name='quantity'
                                                                                           value='25' class='qty input-qty dollar' />
                                                <input type='button' value='+' id="plus" class='plus ' field='quantity' />
                                            </div>
                                        </div>
                                        <br><br><br>
                                        <h2
                                            style="font-size: 13px; margin: auto 0 0; text-align: center; padding: 0 20px 20px; color: #000000;">
                                            Who would you like to pay to listen to your song so they may invest in you.</h2>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <img class="mr-3" style="height:30px; width:30px"
                                             src="<?php echo e(asset('assets/images/Headphone investor.svg')); ?>">
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col-md-4">
                                            <h2 class="fw-600">Investors on Valyou X </h2>
                                            <select class="select2-ajax select2-multiple" multiple="multiple"></select>
                                        </div>
                                        <!--<div class="col-md-4  ">    -->
                                        <!--    <h2 class="fw-600">Investors on Valyou X </h2>-->
                                        <!--</div>-->
                                        <div class="col-md-4 ">
                                            <h2 class="fw-600">Email ID</h2>
                                            <input type="text" data-role="tagsinput" placeholder="Add Emails"
                                                   class="form-control" />
                                        </div>
                                        <div class="col-md-4 ">
                                            <h2 class="fw-600">Phone number</h2>
                                            <input class="form-control number-input-music" placeholder="Enter Number"
                                                   type="number">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row mb-5">
                                        <div class="col-md-6 text-center mb-3">
                                            <div class="card client-input shadow-lg">
                                                <img src="<?php echo e(asset('assets/images/PReward per listen .svg')); ?>" class="img-fluid listen_img">
                                                <div class="card-body">
                                                    <p class="card-text">Reward each listener. Amount you would like to pay
                                                        each listener. <br> Min $0.10 VXD - Max $1.00 VXD</p>
                                                    <input type='button' value='-' class='minus' id="minus2"
                                                           field='quantity2' />
                                                    <span class="input-qty pt-3"></span> <input type='text' name='quantity2'
                                                                                                value='25' class='qty input-qty pt-3' />
                                                    <input type='button' value='+' class='plus ' id="plus2"
                                                           field='quantity2' />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-center mb-3">
                                            <div class="card client-input">
                                                <img src="<?php echo e(asset('assets/images/send-_promote_start.svg')); ?>" class="img-fluid">
                                                <div class="card-body">
                                                    <p class="card-text">How much of your budget would you like to spend per
                                                        day ? </p>
                                                    <input type='button' value='-' class='minus' id="minus3"
                                                           field='quantity3' />
                                                    <span class="input-qty pt-3"></span> <input type='text' name='quantity3'
                                                                                                value='25' class='qty input-qty pt-3' />
                                                    <input type='button' value='+' class='plus ' id="plus3"
                                                           field='quantity3' />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row col-md-12">
                                    </div>
                                    <br> <br>
                                    <div class="col-md-12 text-center ">
                                        <img class="mx-auto mb-2 d-block"
                                             src="<?php echo e(asset('assets/images/send-_promote_start.svg')); ?>">
                                        <h2>Send / Start</h2>
                                        <h5 class="font-size-14 mb-3 text-center">Share it on</h5>
                                        <div class="mt-4 text-center row">
                                            <div class="col-lg-12">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a href="#"
                                                           class="social-list-item bg-primary text-white border-primary">
                                                            <i class="mdi mdi-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#" class="social-list-item bg-info text-white border-info">
                                                            <i class="mdi mdi-twitter"></i>
                                                        </a>

                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#"
                                                           class="social-list-item bg-danger text-white border-danger">
                                                            <i class="mdi mdi-google"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#" class="social-list-item  text-white ">
                                                            <img src="<?php echo e(asset('assets/images/valyou_xemblem.svg')); ?>"
                                                                 alt="" height="30">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card ">
                            <div class="card-body">
                                <div id="sponsored-section mt-3" class="row">
                                    <div class="col-lg-12 col-12 mt-3">
                                        <p class="sponsored-section-p1">Sponsored In Demand</p>
                                        <div class="sponsered-inner">
                                            <p class="green-one">Current offer $40.00 For  24 hours </p>
                                            <p class="pink-one" data-toggle="modal" data-target="#bidNowModal">Bid Now</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12 text-center">
                                        <p class="sponsored-section-p2">Invest in music artist on Valyou X</p>
                                    </div>
                                    <div class="col-lg-12 col-12 text-center">
                                        <p class="sponsored-section-p3">The World's First Artist Stock Market</p>
                                    </div>
                                    <div class="col-lg-12 col-12 mb-3">
                                        <div class="row">
                                            <div class="col-lg-3 col-2 ">
                                            </div>
                                            <div class="col-lg-6 col-8 text-center">
                                                <button type="button" class="btn valyou-o-btn-invest-lg"> Click and Earn $3</button>
                                            </div>
                                            <div class="col-lg-3 col-2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--video Ad-->

                        <div class="card videoAd_card">
                            <div class="card-body">
                                <div id="sponsored-section mt-3" class="row">
                                    <div class="col-lg-12 col-12 mt-3">
                                        <!--name inside span should be changed from who is posting the Add-->
                                        <p class="sponsored-section-p1">Sponsored Ad By <span class="color-redd">Someone</span></p>
                                        <div class="sponsered-inner">
                                            <p class="green-one">Minimum Bid $40.00 For 24 hours </p>
                                            <p class="pink-one" data-toggle="modal" data-target="#bidNowModal">Bid Now</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12 text-center image_wrapper">
                                        <div class="image__innerwrapper">
                                            <h6 class="image_ratio">16:9</h6>
                                            <p class="image_placeholder">Invest in music artist on Valyou X <span>The World's First Artist Stock Market</span></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12 mb-3">
                                        <div class="row">
                                            <div class="col-lg-3 col-2 ">
                                            </div>
                                            <div class="col-lg-6 col-8 text-center">
                                                <button type="button" class="btn valyou-o-btn-invest-lg"> Watch and Earn $3</button>
                                            </div>
                                            <div class="col-lg-3 col-2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="social-post">
                        <div class="card margin-n">
                            <div class="post-section card-body">
                                <div class="row">
                                    <div class="col-lg-12 col-12">
                                        <div class="row">
                                            <div class="col-lg-2 col-3">
                                                <img class="post-section-artist-img rounded-circle"
                                                     src="<?php echo e(URL::asset('assets/images/valyoux/bobby_k9_valyou_x_music250@2x.png')); ?>"
                                                     alt="">
                                            </div>
                                            <div class="col-lg-7 col-6 post-header-bar">
                                                <p class="post-section-artist-p1">Bobby K.9.</p>
                                                <p class="post-section-artist-p2 light-gray-color">Professional Artist <i
                                                        class="fa fa-globe" aria-hidden="true"></i></p>
                                            </div>
                                            <div class="col-lg-2 col-3">
                                                <p class="float-right mt-2 light-gray-color text-right">Artist <i
                                                        class="fa fa-clock-o" aria-hidden="true"></i></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--                                    <div class="col-lg-4 col-12 ">
                           <p class="float-right mt-2 light-gray-color text-right"> 2 Hours a go <i class="fa fa-clock-o" aria-hidden="true"></i></p>
                           </div>-->
                                </div>
                                <div class="col-lg-12 col-12 padding-n">
                                    <p class="post-section-para">New music we are just dropped. Taking A Holiday #dope
                                        #social media is for posting only music related content
                                    </p>
                                </div>
                                <div class="col-lg-12 col-12 padding-n">
                                <!--                                    <img class="post-section-img" src="<?php echo e(asset('assets/images/music-album.png')); ?>" alt="">
                           -->
                                    <video id="video"
                                           src="https://myprojectstaging.com/valyouxmusic/public/assets/videos/bobby-videox.mp4"
                                           class="video" type="video/mp4" controls playsinline></video>
                                </div>

                                <!--<div class="row bg-black mt-3 cover-bg align-items-center" >-->
                                <!--	<div class="col-2 col-md-2 col-lg-2 text-center">-->
                                <!--		<img src="http://myprojectstaging.com/valyouxmusic/public/assets/images/valyoux/bobby_k9_valyou_x_music250@2x.png" alt="" class="post-bottom-cover-image" width="80%">-->
                                <!--	</div>-->
                                <!--	<div class="col-7 col-md-4 col-lg-6">-->
                                <!--		<div class="text-muted promote-page-little-banner">-->
                                <!--			<p id="para1"> Artist share price</p>-->
                                <!--			<p id="para2">Bobby K.9. $2.33VXD</p>-->
                                <!--			<p id="para3"><i class="fa fa-clock-o" aria-hidden="true"></i> Professional Artist</p>-->
                                <!--		</div>-->
                                <!--	</div>-->
                                <!--	<br>-->
                                <!--	<div class="col-3 col-md-4 col-lg-4 text-center padding-n">-->
                                <!--		<button type="button" class="btn valyou-o-btn-invest">Invest in Artist</button>-->
                                <!--	</div>-->
                                <!--</div>-->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <!--new desc text-->
                                <div class="social-media-profile-wrap">
                                    <div class="sm-left-wrap">
                                        <img src="http://myprojectstaging.com/valyouxmusic/public/assets/images/valyoux/bobby_k9_valyou_x_music250@2x.png"
                                             alt="" class="avatar-md rounded-circle">
                                        <div class="sm-left-desc for_web">
                                            <h5>Artist share price</h5>
                                            <h2>Bobby K.9. $2.33VXD</h2>
                                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> Professional Artist</p>
                                        </div>
                                        <div class="sm-left-desc for_mob">
                                            <h2>Bobby K.9.</h2>
                                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> Professional Artist</p>
                                            <h5>Artist share price: $2.33VXD</h5>
                                        </div>
                                    </div>
                                    <div class="sm-right-wrap">
                                        <button type="button" class="btn-invest-pink-grad"
                                                onclick="location.href='<?php echo e(url('crypto-exchange')); ?>'"> Invest in
                                            Artist</button>
                                    </div>
                                </div>
                                <!--new desc text end-->
                            </div>
                        </div>

                        <div class="container mb-3 mt-3">
                            <div class="row ">
                                <div class="col-4 col-md-4 text-center padding-r ">
                                    <div class="card shadow-none" id="share-valyou-music">
                                        <div class="card-body body-p">
                                            <img class="mb-2 share-box-image"
                                                 src="<?php echo e(asset('assets/images/valyoux/valyousongiconnew@2x.png')); ?>">
                                            <p class="card-text mobile-v">Valyou Song</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 col-md-4 text-center padding-r ">
                                    <div class="card shadow-none" id="share-comments">
                                        <div class="card-body body-p">
                                            <img class="mb-2 share-box-image"
                                                 src="<?php echo e(asset('assets/images/comments.svg')); ?>">
                                            <p class="card-text mobile-v">Comments</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 col-md-4 text-center padding-r ">
                                    <div class="card shadow-none" id="share-promote-song">
                                        <div class="card-body body-p">
                                            <img class="mb-2 share-box-image"
                                                 src="<?php echo e(asset('assets/images/promote.svg')); ?>">
                                            <p class="card-text mobile-v">Promote</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="display: none" class="mt-3" id="sharing-section-1">
                            <div class="w-100 user-chat">
                                <div class="card">
                                    <div class="col-md-12 container">
                                        <ul class="list-unstyled mt-3" data-simplebar style="max-height: 470px;">
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4 col-12">
                                                        <div class="row artist-comment-image-div">
                                                            <div class="col-md-4 col-2 ">
                                                                <img src="<?php echo e(URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png')); ?>"
                                                                     alt="" class="avatar-md rounded-circle ">
                                                            </div>
                                                            <div class="col-md-8 col-10 mt-4">
                                                                <p class="text-dark font-size-12 artist-comment-name">Kanye
                                                                    West</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-5 artist-comment-desc">
                                                        <p class="font-size-10">dope artist i had invest</p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4 col-12">
                                                        <div class="row artist-comment-image-div">
                                                            <div class="col-md-4 col-2 ">
                                                                <img src="<?php echo e(URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png')); ?>"
                                                                     alt="" class="avatar-md rounded-circle ">
                                                            </div>
                                                            <div class="col-md-8 col-10 mt-4">
                                                                <p class="text-dark font-size-12 artist-comment-name">Kanye
                                                                    West</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-5 artist-comment-desc">
                                                        <p class="font-size-10">Awesome artist I would like to invest now!
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4 col-12">
                                                        <div class="row artist-comment-image-div">
                                                            <div class="col-md-4 col-2 ">
                                                                <img src="<?php echo e(URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png')); ?>"
                                                                     alt="" class="avatar-md rounded-circle ">
                                                            </div>
                                                            <div class="col-md-8 col-10 mt-4">
                                                                <p class="text-dark font-size-12 artist-comment-name">Kanye
                                                                    West</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-5 artist-comment-desc">
                                                        <p class="font-size-10">Stocks going up </p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="p-3 chat-input-section">
                                        <div class="row text-center">
                                            <div class="col-md-2 col-2">
                                                <div class="mr-3">
                                                    <img src="<?php echo e(URL::asset('assets/images/valyoux/bobby_k9_valyou_x_music250@2x.png')); ?>"
                                                         alt="" class="avatar-md rounded-circle ">
                                                </div>
                                            </div>
                                            <div class="col-md-8 mt-3 mt-0-mobile col-8 ">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control chat-input"
                                                           placeholder="Enter Comment...">
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-2">
                                                <img style="transform: rotate(270deg);" class="mr-3 comment-btn"
                                                     style="height:30px; width:30px"
                                                     src="<?php echo e(asset('assets/images/valyoux/pink_arrow_circle_down.svg')); ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="display: none;" id="sharing-section-2">
                            <div class="container">
                                <div class="btn-margin">
                                    <div class="row">
                                        <div class="col-1 col-md-1">
                                        </div>
                                        <div class="col-2 col-md-2">
                                            <button type="button" class=" btn btn-light radio dollar-price "
                                                    data-toggle="tooltip" data-placement="top"
                                                    data-original-title="This song is nice, might be a hit, Valyou for $1."
                                                    class="btn btn-light radio">$1</button>
                                        </div>
                                        <div class="col-2 col-md-2">
                                            <button type="button" class=" btn btn-light radio dollar-price "
                                                    data-toggle="tooltip" data-placement="top"
                                                    data-original-title="This song is nice, might be a hit, Valyou for $2."
                                                    class="btn btn-light radio">$2</button>
                                        </div>
                                        <div class="col-2 col-md-2 ">
                                            <button type="button" class=" btn btn-light radio dollar-price "
                                                    data-toggle="tooltip" data-placement="top"
                                                    data-original-title="This song is nice, might be a hit, Valyou for $3."
                                                    class="btn btn-light radio">$3</button>
                                        </div>
                                        <div class="col-2 col-md-2 ">
                                            <button type="button" class=" btn btn-light radio dollar-price "
                                                    data-toggle="tooltip" data-placement="top"
                                                    data-original-title="This song is nice, might be a hit, Valyou for $4."
                                                    class="btn btn-light radio">$4</button>
                                        </div>
                                        <div class="col-2 col-md-2 ">
                                            <button type="button" class=" btn btn-light radio dollar-price "
                                                    data-toggle="tooltip" data-placement="top"
                                                    data-original-title="This song is nice, might be a hit, Valyou for $5."
                                                    class="btn btn-light radio">$5</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container col-md-12 text-center mb-5 proceed-valyou-song-div">
                                    <button type="button" class="btn valyou-g-btn"> Proceed to Valyou Song</button>
                                </div>
                            </div>
                        </div>
                        <div style="display: none" id="sharing-section-3">
                            <div class="container">
                                <div>
                                    <div class="card text-center">
                                        <h2
                                            style="color: #000000;font-size: 13px; margin: 15px auto ; text-align: center;padding: 7px 12px;">
                                            Invite a friend, new fans & potential investors to listen to your song</h2>
                                        <br>
                                        <div class="card-body price-card">
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-6">
                                                    <div class="input-price-div">
                                                        <p>How much do you want to spend?</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3"></div>
                                            </div>
                                            <div class="quantity">
                                                <input type='button' value='-' id="minus" class='minus' field='quantity' />
                                                <span class="input-qty pt-3"></span><input type='text' name='quantity'
                                                                                           value='25' class='qty input-qty dollar' />
                                                <input type='button' value='+' id="plus" class='plus ' field='quantity' />
                                            </div>
                                        </div>
                                        <br><br><br>
                                        <h2
                                            style="font-size: 13px; margin: auto 0 0; text-align: center; padding: 0 20px 20px; color: #000000;">
                                            Who would you like to pay to listen to your song so they may invest in you.</h2>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <img class="mr-3" style="height:30px; width:30px"
                                             src="<?php echo e(asset('assets/images/Headphone investor.svg')); ?>">
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col-md-4">
                                            <h2 class="fw-600">Investors on Valyou X </h2>
                                            <select class="select2-ajax select2-multiple" multiple="multiple"></select>
                                        </div>
                                        <!--<div class="col-md-4  ">    -->
                                        <!--    <h2 class="fw-600">Investors on Valyou X </h2>-->
                                        <!--</div>-->

                                        <div class="col-md-4 ">
                                            <h2 class="fw-600">Phone number</h2>
                                            <input class="form-control number-input-music" placeholder="Enter Number"
                                                   type="number">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row mb-5">
                                        <div class="col-md-6 text-center mb-3">
                                            <div class="card client-input shadow-lg">
                                                <img src="<?php echo e(asset('assets/images/PReward per listen .svg')); ?>" class="img-fluid listen_img">
                                                <div class="card-body">
                                                    <p class="card-text">Reward each listener. Amount you would like to pay
                                                        each listener. <br> Min $0.10 VXD - Max $1.00 VXD</p>
                                                    <input type='button' value='-' class='minus' id="minus2"
                                                           field='quantity2' />
                                                    <span class="input-qty pt-3"></span> <input type='text' name='quantity2'
                                                                                                value='25' class='qty input-qty pt-3' />
                                                    <input type='button' value='+' class='plus ' id="plus2"
                                                           field='quantity2' />
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <br>
                                    <div class="row col-md-12">
                                    </div>
                                    <br> <br>
                                    <div class="col-md-12 text-center ">
                                        <img class="mr-2 mb-2"
                                             src="<?php echo e(asset('assets/images/send-_promote_start.svg')); ?>">
                                        <h2>Send / Start</h2>
                                        <h5 class="font-size-14 mb-3 text-center">Share it on</h5>
                                        <div class="mt-4 text-center row">
                                            <div class="col-lg-12">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a href="#"
                                                           class="social-list-item bg-primary text-white border-primary">
                                                            <i class="mdi mdi-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#" class="social-list-item bg-info text-white border-info">
                                                            <i class="mdi mdi-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#"
                                                           class="social-list-item bg-danger text-white border-danger">
                                                            <i class="mdi mdi-google"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#" class="social-list-item  text-white ">
                                                            <img src="<?php echo e(asset('assets/images/valyou_xemblem.svg')); ?>"
                                                                 alt="" height="30">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card ">
                            <div class="card-body">
                                <div id="sponsored-section mt-3" class="row">
                                    <div class="col-lg-12 col-12 mt-3">
                                        <p class="sponsored-section-p1">Sponsored In Demand</p>
                                        <div class="sponsered-inner">
                                            <p class="green-one">Current offer $40.00 For  24 hours </p>
                                            <p class="pink-one" data-toggle="modal" data-target="#bidNowModal">Bid Now</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12 text-center">
                                        <p class="sponsored-section-p2">Invest in music artist on Valyou X</p>
                                    </div>
                                    <div class="col-lg-12 col-12 text-center">
                                        <p class="sponsored-section-p3">The World's First Artist Stock Market</p>
                                    </div>
                                    <div class="col-lg-12 col-12 mb-3">
                                        <div class="row">
                                            <div class="col-lg-3 col-2 ">
                                            </div>
                                            <div class="col-lg-6 col-8 text-center">
                                                <button type="button" class="btn valyou-o-btn-invest-lg"> Click and Earn $3</button>
                                            </div>
                                            <div class="col-lg-3 col-2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="social-post">
                        <div class="card margin-n">
                            <div class="post-section card-body">
                                <div class="row">
                                    <div class="col-lg-12 col-12">
                                        <div class="row">
                                            <div class="col-lg-2 col-3">
                                                <img class="post-section-artist-img rounded-circle"
                                                     src="<?php echo e(URL::asset('assets/images/valyoux/moniq.png')); ?>" alt="">
                                            </div>
                                            <div class="col-lg-7 col-6 post-header-bar">
                                                <p class="post-section-artist-p1">Monique R</p>
                                                <p class="post-section-artist-p2 light-gray-color">Music Fan <i
                                                        class="fa fa-globe" aria-hidden="true"></i></p>
                                            </div>
                                            <div class="col-lg-2 col-3">
                                                <p class="float-right mt-2 light-gray-color text-right">Investor <i
                                                        class="fa fa-clock-o" aria-hidden="true"></i></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--                                    <div class="col-lg-4 col-12 ">
                           <p class="float-right mt-2 light-gray-color text-right"> 2 Hours a go <i class="fa fa-clock-o" aria-hidden="true"></i></p>
                           </div>-->
                                </div>
                                <div class="col-lg-12 col-12 padding-n">
                                    <p class="post-section-para">
                                        I am a fan of justin beiber i just had to invest. I bought some shares #dope #social
                                        media is for posting only music related content
                                    </p>
                                </div>
                                <div class="col-lg-12 col-12 padding-n">
                                    <video id="video"
                                           src="https://myprojectstaging.com/valyouxmusic/public/assets/videos/justin.mp4"
                                           class="video" type="video/mp4" controls playsinline></video>
                                </div>


                                <!--<div class="row bg-black mt-3 cover-bg" >-->
                                <!--	<div class="col-2 col-md-2 col-lg-2 text-center">-->
                                <!--		<img src="http://myprojectstaging.com/valyouxmusic/public/assets/images/valyoux/justin_beiber_valyou_x_music@2x.png" alt="" class="post-bottom-cover-image" width="80%">-->
                                <!--	</div>-->
                                <!--	<div class="col-7 col-md-6 col-lg-6">-->
                                <!--		<div class="text-muted promote-page-little-banner">-->
                                <!--			<p id="para1"> Artist share price</p>-->
                                <!--			<p id="para2">Justin Bieber $2.33VXD</p>-->
                                <!--			<p id="para3">Upcoming</p>-->
                                <!--		</div>-->
                                <!--	</div>-->
                                <!--	<br>-->
                                <!--	<div class="col-3 col-md-4 col-lg-4 text-center padding-n">-->
                                <!--		<button type="button" class="btn valyou-o-btn-invest">Invest in music Artist</button>-->
                                <!--	</div>-->
                                <!--</div>-->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <!--new desc text-->
                                <div class="social-media-profile-wrap">
                                    <div class="sm-left-wrap">
                                        <img src="http://myprojectstaging.com/valyouxmusic/public/assets/images/valyoux/justin_beiber_valyou_x_music@2x.png"
                                             alt="" class="avatar-md rounded-circle">
                                        <div class="sm-left-desc for_web">
                                            <h5>Artist share price</h5>
                                            <h2>Justin Bieber $2.33VXD</h2>
                                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> Upcoming</p>
                                        </div>
                                        <div class="sm-left-desc for_mob">
                                            <h2>Justin Bieber</h2>
                                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> Upcoming</p>
                                            <h5>Artist share price: $2.33VXD</h5>
                                        </div>
                                    </div>
                                    <div class="sm-right-wrap">
                                        <button type="button" class="btn-invest-pink-grad"
                                                onclick="location.href='<?php echo e(url('crypto-exchange')); ?>'"> Invest in
                                            Artist</button>
                                    </div>
                                </div>
                                <!--new desc text end-->
                            </div>
                        </div>
                        <div class="container mb-3 mt-3">
                            <div class="row ">
                                <div class="col-4 col-md-4 text-center padding-r ">
                                    <div class="card shadow-none" id="share-valyou-music">
                                        <div class="card-body body-p">
                                            <img class="mb-2 share-box-image"
                                                 src="<?php echo e(asset('assets/images/valyoux/valyousongiconnew@2x.png')); ?>">
                                            <p class="card-text mobile-v">Valyou Song</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 col-md-4 text-center padding-r ">
                                    <div class="card shadow-none" id="share-comments">
                                        <div class="card-body body-p">
                                            <img class="mb-2 share-box-image"
                                                 src="<?php echo e(asset('assets/images/comments.svg')); ?>">
                                            <p class="card-text mobile-v">Comments</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 col-md-4 text-center padding-r ">
                                    <div class="card shadow-none" id="share-promote-song">
                                        <div class="card-body body-p">
                                            <img class="mb-2 share-box-image"
                                                 src="<?php echo e(asset('assets/images/promote.svg')); ?>">
                                            <p class="card-text mobile-v">Promote</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="display: none" class="mt-3" id="sharing-section-1">
                            <div class="w-100 user-chat">
                                <div class="card">
                                    <div class="col-md-12 container">
                                        <ul class="list-unstyled mt-3" data-simplebar style="max-height: 470px;">
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4 col-12">
                                                        <div class="row artist-comment-image-div">
                                                            <div class="col-md-4 col-2 ">
                                                                <img src="<?php echo e(URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png')); ?>"
                                                                     alt="" class="avatar-md rounded-circle ">
                                                            </div>
                                                            <div class="col-md-8 col-10 mt-4">
                                                                <p class="text-dark font-size-12 artist-comment-name">Bobby
                                                                    k9</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-5 artist-comment-desc">
                                                        <p class="font-size-10">Awesome artist I would like to invest now!
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4 col-12">
                                                        <div class="row artist-comment-image-div">
                                                            <div class="col-md-4 col-2 ">
                                                                <img src="<?php echo e(URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png')); ?>"
                                                                     alt="" class="avatar-md rounded-circle ">
                                                            </div>
                                                            <div class="col-md-8 col-10 mt-4">
                                                                <p class="text-dark font-size-12 artist-comment-name">Bobby
                                                                    k9</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-5 artist-comment-desc">
                                                        <p class="font-size-10">Awesome artist I would like to invest now!
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4 col-12">
                                                        <div class="row artist-comment-image-div">
                                                            <div class="col-md-4 col-2 ">
                                                                <img src="<?php echo e(URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png')); ?>"
                                                                     alt="" class="avatar-md rounded-circle ">
                                                            </div>
                                                            <div class="col-md-8 col-10 mt-4">
                                                                <p class="text-dark font-size-12 artist-comment-name">Bobby
                                                                    k9</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-5 artist-comment-desc">
                                                        <p class="font-size-10">Awesome artist I would like to invest now!
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="p-3 chat-input-section">
                                        <div class="row text-center">
                                            <div class="col-md-2 col-2">
                                                <div class="mr-3">
                                                    <img src="<?php echo e(URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png')); ?>"
                                                         alt="" class="avatar-md rounded-circle ">
                                                </div>
                                            </div>
                                            <div class="col-md-8 mt-3 mt-0-mobile col-8 ">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control chat-input"
                                                           placeholder="Enter Comment...">
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-2">
                                                <img style="transform: rotate(270deg);" class="mr-3 comment-btn"
                                                     style="height:30px; width:30px"
                                                     src="<?php echo e(asset('assets/images/valyoux/pink_arrow_circle_down.svg')); ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="display: none;" id="sharing-section-2">
                            <div class="container">
                                <div class="btn-margin">
                                    <div class="row">
                                        <div class="col-1 col-md-1">
                                        </div>
                                        <div class="col-2 col-md-2">
                                            <button type="button" class=" btn btn-light radio dollar-price "
                                                    data-toggle="tooltip" data-placement="top"
                                                    data-original-title="This song is nice, might be a hit, Valyou for $1."
                                                    class="btn btn-light radio">$1</button>
                                        </div>
                                        <div class="col-2 col-md-2">
                                            <button type="button" class=" btn btn-light radio dollar-price "
                                                    data-toggle="tooltip" data-placement="top"
                                                    data-original-title="This song is nice, might be a hit, Valyou for $2."
                                                    class="btn btn-light radio">$2</button>
                                        </div>
                                        <div class="col-2 col-md-2 ">
                                            <button type="button" class=" btn btn-light radio dollar-price "
                                                    data-toggle="tooltip" data-placement="top"
                                                    data-original-title="This song is nice, might be a hit, Valyou for $3."
                                                    class="btn btn-light radio">$3</button>
                                        </div>
                                        <div class="col-2 col-md-2 ">
                                            <button type="button" class=" btn btn-light radio dollar-price "
                                                    data-toggle="tooltip" data-placement="top"
                                                    data-original-title="This song is nice, might be a hit, Valyou for $4."
                                                    class="btn btn-light radio">$4</button>
                                        </div>
                                        <div class="col-2 col-md-2 ">
                                            <button type="button" class=" btn btn-light radio dollar-price "
                                                    data-toggle="tooltip" data-placement="top"
                                                    data-original-title="This song is nice, might be a hit, Valyou for $5."
                                                    class="btn btn-light radio">$5</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container col-md-12 text-center mb-5 proceed-valyou-song-div">
                                    <button type="button" class="btn valyou-g-btn"> Proceed to Valyou Song</button>
                                </div>
                            </div>
                        </div>
                        <div style="display: none" id="sharing-section-3">
                            <div class="container">
                                <div>
                                    <div class="card text-center">
                                        <h2
                                            style="color: #000000;font-size: 13px; margin: 15px auto ; text-align: center;padding: 7px 12px;">
                                            Invite a friend, new fans & potential investors to listen to your song</h2>
                                        <br>
                                        <div class="card-body price-card">
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-6">
                                                    <div class="input-price-div">
                                                        <p>How much do you want to spend?</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3"></div>
                                            </div>
                                            <div class="quantity">
                                                <input type='button' value='-' id="minus" class='minus' field='quantity' />
                                                <span class="input-qty pt-3"></span><input type='text' name='quantity'
                                                                                           value='25' class='qty input-qty dollar' />
                                                <input type='button' value='+' id="plus" class='plus ' field='quantity' />
                                            </div>
                                        </div>
                                        <br><br><br>
                                        <h2
                                            style="font-size: 13px; margin: auto 0 0; text-align: center; padding: 0 20px 20px; color: #000000;">
                                            Who would you like to pay to listen to your song so they may invest in you.</h2>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <img class="mr-3" style="height:30px; width:30px"
                                             src="<?php echo e(asset('assets/images/Headphone investor.svg')); ?>">
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col-md-4">
                                            <h2 class="fw-600">Investors on Valyou X </h2>
                                            <select class="select2-ajax select2-multiple" multiple="multiple"></select>
                                        </div>
                                        <!--<div class="col-md-4  ">    -->
                                        <!--    <h2 class="fw-600">Investors on Valyou X </h2>-->
                                        <!--</div>-->
                                        <div class="col-md-4 ">
                                            <h2 class="fw-600">Email ID</h2>
                                            <input type="text" data-role="tagsinput" placeholder="Add Emails"
                                                   class="form-control" />
                                        </div>
                                        <div class="col-md-4 ">
                                            <h2 class="fw-600">Phone number</h2>
                                            <input class="form-control number-input-music" placeholder="Enter Number"
                                                   type="number">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row mb-5">
                                        <div class="col-md-6 text-center mb-3">
                                            <div class="card client-input shadow-lg">
                                                <img src="<?php echo e(asset('assets/images/PReward per listen .svg')); ?>" class="img-fluid listen_img">
                                                <div class="card-body">
                                                    <p class="card-text">Reward each listener. Amount you would like to pay
                                                        each listener. <br> Min $0.10 VXD - Max $1.00 VXD</p>
                                                    <input type='button' value='-' class='minus' id="minus2"
                                                           field='quantity2' />
                                                    <span class="input-qty pt-3"></span> <input type='text' name='quantity2'
                                                                                                value='25' class='qty input-qty pt-3' />
                                                    <input type='button' value='+' class='plus ' id="plus2"
                                                           field='quantity2' />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-center mb-3">
                                            <div class="card client-input">
                                                <img src="<?php echo e(asset('assets/images/send-_promote_start.svg')); ?>" class="img-fluid">
                                                <div class="card-body">
                                                    <p class="card-text">How much of your budget would you like to spend per
                                                        day ? </p>
                                                    <input type='button' value='-' class='minus' id="minus3"
                                                           field='quantity3' />
                                                    <span class="input-qty pt-3"></span> <input type='text' name='quantity3'
                                                                                                value='25' class='qty input-qty pt-3' />
                                                    <input type='button' value='+' class='plus ' id="plus3"
                                                           field='quantity3' />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row col-md-12">
                                    </div>
                                    <br> <br>
                                    <div class="col-md-12 text-center ">
                                        <img class="mr-2 mb-2"
                                             src="<?php echo e(asset('assets/images/send-_promote_start.svg')); ?>">
                                        <h2>Send / Start</h2>
                                        <h5 class="font-size-14 mb-3 text-center">Share it on</h5>
                                        <div class="mt-4 text-center row">
                                            <div class="col-lg-12">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a href="#"
                                                           class="social-list-item bg-primary text-white border-primary">
                                                            <i class="mdi mdi-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#" class="social-list-item bg-info text-white border-info">
                                                            <i class="mdi mdi-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#"
                                                           class="social-list-item bg-danger text-white border-danger">
                                                            <i class="mdi mdi-google"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#" class="social-list-item  text-white ">
                                                            <img src="<?php echo e(asset('assets/images/valyou_xemblem.svg')); ?>"
                                                                 alt="" height="30">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card ">
                            <div class="card-body">
                                <div id="sponsored-section mt-3" class="row">
                                    <div class="col-lg-12 col-12 mt-3">
                                        <p class="sponsored-section-p1">Sponsored In Demand</p>
                                        <div class="sponsered-inner">
                                            <p class="green-one">Current offer $40.00 For  24 hours </p>
                                            <p class="pink-one" data-toggle="modal" data-target="#bidNowModal">Bid Now</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12 text-center">
                                        <p class="sponsored-section-p2">Invest in music artist on Valyou X</p>
                                    </div>
                                    <div class="col-lg-12 col-12 text-center">
                                        <p class="sponsored-section-p3">The World's First Artist Stock Market</p>
                                    </div>
                                    <div class="col-lg-12 col-12 mb-3">
                                        <div class="row">
                                            <div class="col-lg-3 col-2 ">
                                            </div>
                                            <div class="col-lg-6 col-8 text-center">
                                                <button type="button" class="btn valyou-o-btn-invest-lg"> Click and Earn $3</button>
                                            </div>
                                            <div class="col-lg-3 col-2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="social-post">
                        <div class="card margin-n">
                            <div class="post-section card-body">
                                <div class="row">
                                    <div class="col-lg-12 col-12">
                                        <div class="row">
                                            <div class="col-lg-2 col-3">
                                                <img class="post-section-artist-img rounded-circle"
                                                     src="<?php echo e(URL::asset('assets/images/valyoux/nicky_minaj_valyou_x@2x.png')); ?>"
                                                     alt="">
                                            </div>
                                            <div class="col-lg-7 col-6 post-header-bar">
                                                <p class="post-section-artist-p1">Nicky Minaj</p>
                                                <p class="post-section-artist-p2 light-gray-color">Major Artist <i
                                                        class="fa fa-globe" aria-hidden="true"></i></p>
                                            </div>
                                            <div class="col-lg-2 col-3">
                                                <p class="float-right mt-2 light-gray-color text-right">Artist</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--                                    <div class="col-lg-4 col-12 ">
                           <p class="float-right mt-2 light-gray-color text-right"> 2 Hours a go <i class="fa fa-clock-o" aria-hidden="true"></i></p>
                           </div>-->
                                </div>
                                <div class="col-lg-12 col-12 padding-n">
                                    <p class="post-section-para">
                                        Only Featuring - Lil Wayne, Drake & Chris Brown #social media is for posting only
                                        music related content
                                    </p>
                                </div>
                                <div class="col-lg-12 col-12 padding-n">
                                <!--                                    <img class="post-section-img" src="<?php echo e(asset('assets/images/music-album.png')); ?>" alt="">
                           -->
                                    <video id="video"
                                           src="https://myprojectstaging.com/valyouxmusic/public/assets/videos/nicki.mp4"
                                           class="video" type="video/mp4" controls playsinline></video>
                                </div>
                                <!--<div class="row bg-black mt-3 cover-bg" >-->
                                <!--	<div class="col-2 col-md-2 col-lg-2 text-center">-->
                                <!--		<img src="http://myprojectstaging.com/valyouxmusic/public/assets/images/valyoux/nicky_minaj_valyou_x@2x.png" alt="" class="post-bottom-cover-image" width="80%">-->
                                <!--	</div>-->
                                <!--	<div class="col-7 col-md-6 col-lg-6">-->
                                <!--		<div class="text-muted promote-page-little-banner">-->
                                <!--			<p id="para1"> Artist share price</p>-->
                                <!--			<p id="para2">Nicky Minaj $2.33VXD</p>-->
                                <!--			<p id="para3"><i class="fa fa-clock-o" aria-hidden="true"></i> Upcoming</p>-->
                                <!--		</div>-->
                                <!--	</div>-->
                                <!--	<br>-->
                                <!--	<div class="col-3 col-md-4 col-lg-4 text-center padding-n">-->
                                <!--		<button type="button" class="btn valyou-o-btn-invest">Invest in Artist</button>-->
                                <!--	</div>-->
                                <!--</div>-->


                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <!--new desc text-->
                                <div class="social-media-profile-wrap">
                                    <div class="sm-left-wrap">
                                        <img src="http://myprojectstaging.com/valyouxmusic/public/assets/images/valyoux/nicky_minaj_valyou_x@2x.png"
                                             alt="" class="avatar-md rounded-circle">
                                        <div class="sm-left-desc for_web">
                                            <h5>Artist share price</h5>
                                            <h2>Nicky Minaj $2.33VXD</h2>
                                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> Upcoming</p>
                                        </div>
                                        <div class="sm-left-desc for_mob">
                                            <h2>Nicky Minaj</h2>
                                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> Upcoming</p>
                                            <h5>Artist share price: $2.33VXD</h5>
                                        </div>
                                    </div>
                                    <div class="sm-right-wrap">
                                        <button type="button" class="btn-invest-pink-grad"
                                                onclick="location.href='<?php echo e(url('crypto-exchange')); ?>'"> Invest in
                                            Artist</button>
                                    </div>
                                </div>
                                <!--new desc text end-->
                            </div>
                        </div>

                        <div class="container mb-3 mt-3">
                            <div class="row ">
                                <div class="col-4 col-md-4 text-center padding-r ">
                                    <div class="card shadow-none" id="share-valyou-music">
                                        <div class="card-body body-p">
                                            <img class="mb-2 share-box-image"
                                                 src="<?php echo e(asset('assets/images/valyoux/valyousongiconnew@2x.png')); ?>">
                                            <p class="card-text mobile-v">Valyou Song</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 col-md-4 text-center padding-r ">
                                    <div class="card shadow-none" id="share-comments">
                                        <div class="card-body body-p">
                                            <img class="mb-2 share-box-image"
                                                 src="<?php echo e(asset('assets/images/comments.svg')); ?>">
                                            <p class="card-text mobile-v">Comments</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 col-md-4 text-center padding-r ">
                                    <div class="card shadow-none" id="share-promote-song">
                                        <div class="card-body body-p">
                                            <img class="mb-2 share-box-image"
                                                 src="<?php echo e(asset('assets/images/promote.svg')); ?>">
                                            <p class="card-text mobile-v">Promote</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="display: none" class="mt-3" id="sharing-section-1">
                            <div class="w-100 user-chat">
                                <div class="card">
                                    <div class="col-md-12 container">
                                        <ul class="list-unstyled mt-3" data-simplebar style="max-height: 470px;">
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4 col-12">
                                                        <div class="row artist-comment-image-div">
                                                            <div class="col-md-4 col-2 ">
                                                                <img src="<?php echo e(URL::asset('assets/images/valyoux/nicky_minaj_valyou_x@2x.png')); ?>"
                                                                     alt="" class="avatar-md rounded-circle ">
                                                            </div>
                                                            <div class="col-md-8 col-10 mt-4">
                                                                <p class="text-dark font-size-12 artist-comment-name">Bobby
                                                                    k9</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-5 artist-comment-desc">
                                                        <p class="font-size-10">Awesome artist I would like to invest now!
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4 col-12">
                                                        <div class="row artist-comment-image-div">
                                                            <div class="col-md-4 col-2 ">
                                                                <img src="<?php echo e(URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png')); ?>"
                                                                     alt="" class="avatar-md rounded-circle ">
                                                            </div>
                                                            <div class="col-md-8 col-10 mt-4">
                                                                <p class="text-dark font-size-12 artist-comment-name">Bobby
                                                                    k9</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-5 artist-comment-desc">
                                                        <p class="font-size-10">Awesome artist I would like to invest now!
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4 col-12">
                                                        <div class="row artist-comment-image-div">
                                                            <div class="col-md-4 col-2 ">
                                                                <img src="<?php echo e(URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png')); ?>"
                                                                     alt="" class="avatar-md rounded-circle ">
                                                            </div>
                                                            <div class="col-md-8 col-10 mt-4">
                                                                <p class="text-dark font-size-12 artist-comment-name">Bobby
                                                                    k9</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-5 artist-comment-desc">
                                                        <p class="font-size-10">Awesome artist I would like to invest now!
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="p-3 chat-input-section">
                                        <div class="row text-center">
                                            <div class="col-md-2 col-2">
                                                <div class="mr-3">
                                                    <img src="<?php echo e(URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png')); ?>"
                                                         alt="" class="avatar-md rounded-circle ">
                                                </div>
                                            </div>
                                            <div class="col-md-8 mt-3 mt-0-mobile col-8 ">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control chat-input"
                                                           placeholder="Enter Comment...">
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-2">
                                                <img style="transform: rotate(270deg);" class="mr-3 comment-btn"
                                                     style="height:30px; width:30px"
                                                     src="<?php echo e(asset('assets/images/valyoux/pink_arrow_circle_down.svg')); ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="display: none;" id="sharing-section-2">
                            <div class="container">
                                <div class="btn-margin">
                                    <div class="row">
                                        <div class="col-1 col-md-1">
                                        </div>
                                        <div class="col-2 col-md-2">
                                            <button type="button" class=" btn btn-light radio dollar-price "
                                                    data-toggle="tooltip" data-placement="top"
                                                    data-original-title="This song is nice, might be a hit, Valyou for $1."
                                                    class="btn btn-light radio">$1</button>
                                        </div>
                                        <div class="col-2 col-md-2">
                                            <button type="button" class=" btn btn-light radio dollar-price "
                                                    data-toggle="tooltip" data-placement="top"
                                                    data-original-title="This song is nice, might be a hit, Valyou for $2."
                                                    class="btn btn-light radio">$2</button>
                                        </div>
                                        <div class="col-2 col-md-2 ">
                                            <button type="button" class=" btn btn-light radio dollar-price "
                                                    data-toggle="tooltip" data-placement="top"
                                                    data-original-title="This song is nice, might be a hit, Valyou for $3."
                                                    class="btn btn-light radio">$3</button>
                                        </div>
                                        <div class="col-2 col-md-2 ">
                                            <button type="button" class=" btn btn-light radio dollar-price "
                                                    data-toggle="tooltip" data-placement="top"
                                                    data-original-title="This song is nice, might be a hit, Valyou for $4."
                                                    class="btn btn-light radio">$4</button>
                                        </div>
                                        <div class="col-2 col-md-2 ">
                                            <button type="button" class=" btn btn-light radio dollar-price "
                                                    data-toggle="tooltip" data-placement="top"
                                                    data-original-title="This song is nice, might be a hit, Valyou for $5."
                                                    class="btn btn-light radio">$5</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container col-md-12 text-center mb-5 proceed-valyou-song-div">
                                    <button type="button" class="btn valyou-g-btn"> Proceed to Valyou Song</button>
                                </div>
                            </div>
                        </div>
                        <div style="display: none" id="sharing-section-3">
                            <div class="container">
                                <div>
                                    <div class="card text-center">
                                        <h2
                                            style="color: #000000;font-size: 13px; margin: 15px auto ; text-align: center;padding: 7px 12px;">
                                            Invite a friend, new fans & potential investors to listen to your song</h2>
                                        <br>
                                        <div class="card-body price-card">
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-6">
                                                    <div class="input-price-div">
                                                        <p>How much do you want to spend?</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3"></div>
                                            </div>
                                            <div class="quantity">
                                                <input type='button' value='-' id="minus" class='minus' field='quantity' />
                                                <span class="input-qty pt-3"></span><input type='text' name='quantity'
                                                                                           value='25' class='qty input-qty dollar' />
                                                <input type='button' value='+' id="plus" class='plus ' field='quantity' />
                                            </div>
                                        </div>
                                        <br><br><br>
                                        <h2
                                            style="font-size: 13px; margin: auto 0 0; text-align: center; padding: 0 20px 20px; color: #000000;">
                                            Who would you like to pay to listen to your song so they may invest in you.</h2>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <img class="mr-3" style="height:30px; width:30px"
                                             src="<?php echo e(asset('assets/images/Headphone investor.svg')); ?>">
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col-md-4">
                                            <h2 class="fw-600">Investors on Valyou X </h2>
                                            <select class="select2-ajax select2-multiple" multiple="multiple"></select>
                                        </div>
                                        <!--<div class="col-md-4  ">    -->
                                        <!--    <h2 class="fw-600">Investors on Valyou X </h2>-->
                                        <!--</div>-->
                                        <div class="col-md-4 ">
                                            <h2 class="fw-600">Email ID</h2>
                                            <input type="text" data-role="tagsinput" placeholder="Add Emails"
                                                   class="form-control" />
                                        </div>
                                        <div class="col-md-4 ">
                                            <h2 class="fw-600">Phone number</h2>
                                            <input class="form-control number-input-music" placeholder="Enter Number"
                                                   type="number">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row mb-5">
                                        <div class="col-md-6 text-center mb-3">
                                            <div class="card client-input shadow-lg">
                                                <img src="<?php echo e(asset('assets/images/PReward per listen .svg')); ?>" class="img-fluid listen_img">
                                                <div class="card-body">
                                                    <p class="card-text">Reward each listener. Amount you would like to pay
                                                        each listener. <br> Min $0.10 VXD - Max $1.00 VXD</p>
                                                    <input type='button' value='-' class='minus' id="minus2"
                                                           field='quantity2' />
                                                    <span class="input-qty pt-3"></span> <input type='text' name='quantity2'
                                                                                                value='25' class='qty input-qty pt-3' />
                                                    <input type='button' value='+' class='plus ' id="plus2"
                                                           field='quantity2' />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-center mb-3">
                                            <div class="card client-input">
                                                <img src="<?php echo e(asset('assets/images/send-_promote_start.svg')); ?>" class="img-fluid">
                                                <div class="card-body">
                                                    <p class="card-text">How much of your budget would you like to spend per
                                                        day ? </p>
                                                    <input type='button' value='-' class='minus' id="minus3"
                                                           field='quantity3' />
                                                    <span class="input-qty pt-3"></span> <input type='text' name='quantity3'
                                                                                                value='25' class='qty input-qty pt-3' />
                                                    <input type='button' value='+' class='plus ' id="plus3"
                                                           field='quantity3' />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row col-md-12">
                                    </div>
                                    <br> <br>
                                    <div class="col-md-12 text-center ">
                                        <img class="mr-2 mb-2"
                                             src="<?php echo e(asset('assets/images/send-_promote_start.svg')); ?>">
                                        <h2>Send / Start</h2>
                                        <h5 class="font-size-14 mb-3 text-center">Share it on</h5>
                                        <div class="mt-4 text-center row">
                                            <div class="col-lg-12">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a href="#"
                                                           class="social-list-item bg-primary text-white border-primary">
                                                            <i class="mdi mdi-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#" class="social-list-item bg-info text-white border-info">
                                                            <i class="mdi mdi-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#"
                                                           class="social-list-item bg-danger text-white border-danger">
                                                            <i class="mdi mdi-google"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#" class="social-list-item  text-white ">
                                                            <img src="<?php echo e(asset('assets/images/valyou_xemblem.svg')); ?>"
                                                                 alt="" height="30">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card ">
                            <div class="card-body">
                                <div id="sponsored-section mt-3" class="row">
                                    <div class="col-lg-12 col-12 mt-3">
                                        <p class="sponsored-section-p1">Sponsored In Demand</p>
                                        <div class="sponsered-inner">
                                            <p class="green-one">Current offer $40.00 For  24 hours </p>
                                            <p class="pink-one" data-toggle="modal" data-target="#bidNowModal">Bid Now</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12 text-center">
                                        <p class="sponsored-section-p2">Invest in music artist on Valyou X</p>
                                    </div>
                                    <div class="col-lg-12 col-12 text-center">
                                        <p class="sponsored-section-p3">The World's First Artist Stock Market</p>
                                    </div>
                                    <div class="col-lg-12 col-12 mb-3">
                                        <div class="row">
                                            <div class="col-lg-3 col-2 ">
                                            </div>
                                            <div class="col-lg-6 col-8 text-center">
                                                <button type="button" class="btn valyou-o-btn-invest-lg"> Click and Earn $3</button>
                                            </div>
                                            <div class="col-lg-3 col-2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="social-post">
                        <div class="card margin-n">
                            <div class="post-section card-body">
                                <div class="row">
                                    <div class="col-lg-12 col-12">
                                        <div class="row">
                                            <div class="col-lg-2 col-3">
                                                <img class="post-section-artist-img rounded-circle"
                                                     src="<?php echo e(URL::asset('assets/images/valyoux/pro_artist@2x.png')); ?>"
                                                     alt="">
                                            </div>
                                            <div class="col-lg-7 col-6 post-header-bar">
                                                <p class="post-section-artist-p1">Ariana Grande</p>
                                                <p class="post-section-artist-p2 light-gray-color">Music Artist <i
                                                        class="fa fa-globe" aria-hidden="true"></i></p>
                                            </div>
                                            <div class="col-lg-2 col-3">
                                                <p class="float-right mt-2 light-gray-color text-right">Artist <i
                                                        class="fa fa-clock-o" aria-hidden="true"></i></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--                                    <div class="col-lg-4 col-12 ">
                           <p class="float-right mt-2 light-gray-color text-right"> 2 Hours a go <i class="fa fa-clock-o" aria-hidden="true"></i></p>
                           </div>-->
                                </div>
                                <div class="col-lg-12 col-12 padding-n">
                                    <p class="post-section-para">
                                        Check out oia mias music yal,dope artist i had invest. I bought some shares #dope
                                        #social media is for posting only music related content
                                    </p>
                                </div>
                                <div class="col-lg-12 col-12 padding-n">
                                <!--                                    <img class="post-section-img" src="<?php echo e(asset('assets/images/music-album.png')); ?>" alt="">
                           -->
                                    <video id="video"
                                           src="https://myprojectstaging.com/valyouxmusic/public/assets/videos/ariana.mp4"
                                           class="video" type="video/mp4" controls playsinline></video>
                                </div>
                                <!--<div class="row bg-black mt-3 cover-bg" >-->
                                <!--	<div class="col-2 col-md-2 col-lg-2 text-center">-->
                            <!--		<img src="<?php echo e(URL::asset('assets/images/valyoux/pro_artist@2x.png')); ?>" alt="" class="post-bottom-cover-image" width="80%">-->
                                <!--	</div>-->
                                <!--	<div class="col-7 col-md-6 col-lg-6">-->
                                <!--		<div class="text-muted promote-page-little-banner">-->
                                <!--			<p id="para1"> Artist share price</p>-->
                                <!--			<p id="para2">Ariana Grande $2.33VXD</p>-->
                                <!--			<p id="para3"><i class="fa fa-clock-o" aria-hidden="true"></i> Upcoming</p>-->
                                <!--		</div>-->
                                <!--	</div>-->
                                <!--	<br>-->
                                <!--	<div class="col-3 col-md-4 col-lg-4 text-center padding-n">-->
                                <!--		<button type="button" class="btn valyou-o-btn-invest">Invest in Artist</button>-->
                                <!--	</div>-->
                                <!--</div>-->

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <!--new desc text-->
                                <div class="social-media-profile-wrap">
                                    <div class="sm-left-wrap">
                                        <img src="<?php echo e(URL::asset('assets/images/valyoux/pro_artist@2x.png')); ?>" alt=""
                                             class="avatar-md rounded-circle img-40">
                                        <div class="sm-left-desc for_web">
                                            <h5>Artist share price</h5>
                                            <h2>Ariana Grande $2.33VXD</h2>
                                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> Upcoming</p>
                                        </div>
                                        <div class="sm-left-desc for_mob">
                                            <h2>Ariana Grande</h2>
                                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> Upcoming</p>
                                            <h5>Artist share price: $2.33VXD</h5>
                                        </div>
                                    </div>
                                    <div class="sm-right-wrap">
                                        <button type="button" class="btn-invest-pink-grad"
                                                onclick="location.href='<?php echo e(url('crypto-exchange')); ?>'"> Invest in
                                            Artist</button>
                                    </div>
                                </div>
                                <!--new desc text end-->
                            </div>
                        </div>

                        <div class="container mb-3 mt-3">
                            <div class="row ">
                                <div class="col-4 col-md-4 text-center padding-r ">
                                    <div class="card shadow-none" id="share-valyou-music">
                                        <div class="card-body body-p">
                                            <img class="mb-2 share-box-image"
                                                 src="<?php echo e(asset('assets/images/valyoux/valyousongiconnew@2x.png')); ?>">
                                            <p class="card-text mobile-v">Valyou Song</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 col-md-4 text-center padding-r ">
                                    <div class="card shadow-none" id="share-comments">
                                        <div class="card-body body-p">
                                            <img class="mb-2 share-box-image"
                                                 src="<?php echo e(asset('assets/images/comments.svg')); ?>">
                                            <p class="card-text mobile-v">Comments</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 col-md-4 text-center padding-r ">
                                    <div class="card shadow-none" id="share-promote-song">
                                        <div class="card-body body-p">
                                            <img class="mb-2 share-box-image"
                                                 src="<?php echo e(asset('assets/images/promote.svg')); ?>">
                                            <p class="card-text mobile-v">Promote</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="display: none" class="mt-3" id="sharing-section-1">
                            <div class="w-100 user-chat">
                                <div class="card">
                                    <div class="col-md-12 container">
                                        <ul class="list-unstyled mt-3" style="max-height: 470px;">
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4 col-12">
                                                        <div class="row artist-comment-image-div">
                                                            <div class="col-md-4 col-2 ">
                                                                <img src="<?php echo e(URL::asset('assets/images/valyoux/pro_artist@2x.png')); ?>"
                                                                     alt="" class="avatar-md rounded-circle ">
                                                            </div>
                                                            <div class="col-md-8 col-10 mt-4">
                                                                <p class="text-dark font-size-12 artist-comment-name">Bobby
                                                                    k9</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-5 artist-comment-desc">
                                                        <p class="font-size-10">Awesome artist I would like to invest now!
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4 col-12">
                                                        <div class="row artist-comment-image-div">
                                                            <div class="col-md-4 col-2 ">
                                                                <img src="<?php echo e(URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png')); ?>"
                                                                     alt="" class="avatar-md rounded-circle ">
                                                            </div>
                                                            <div class="col-md-8 col-10 mt-4">
                                                                <p class="text-dark font-size-12 artist-comment-name">Bobby
                                                                    k9</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-5 artist-comment-desc">
                                                        <p class="font-size-10">Awesome artist I would like to invest now!
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4 col-12">
                                                        <div class="row artist-comment-image-div">
                                                            <div class="col-md-4 col-2 ">
                                                                <img src="<?php echo e(URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png')); ?>"
                                                                     alt="" class="avatar-md rounded-circle ">
                                                            </div>
                                                            <div class="col-md-8 col-10 mt-4">
                                                                <p class="text-dark font-size-12 artist-comment-name">Bobby
                                                                    k9</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-5 artist-comment-desc">
                                                        <p class="font-size-10">Awesome artist I would like to invest now!
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="p-3 chat-input-section">
                                        <div class="row text-center">
                                            <div class="col-md-2 col-2">
                                                <div class="mr-3">
                                                    <img src="<?php echo e(URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png')); ?>"
                                                         alt="" class="avatar-md rounded-circle ">
                                                </div>
                                            </div>
                                            <div class="col-md-8 mt-3 mt-0-mobile col-8 ">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control chat-input"
                                                           placeholder="Enter Comment...">
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-2">
                                                <img style="transform: rotate(270deg);" class="mr-3 comment-btn"
                                                     style="height:30px; width:30px"
                                                     src="<?php echo e(asset('assets/images/valyoux/pink_arrow_circle_down.svg')); ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="display: none;" id="sharing-section-2">
                            <div class="container">
                                <div class="btn-margin">
                                    <div class="row">
                                        <div class="col-1 col-md-1">
                                        </div>
                                        <div class="col-2 col-md-2">
                                            <button type="button" class=" btn btn-light radio dollar-price "
                                                    data-toggle="tooltip" data-placement="top"
                                                    data-original-title="This song is nice, might be a hit, Valyou for $1."
                                                    class="btn btn-light radio">$1</button>
                                        </div>
                                        <div class="col-2 col-md-2">
                                            <button type="button" class=" btn btn-light radio dollar-price "
                                                    data-toggle="tooltip" data-placement="top"
                                                    data-original-title="This song is nice, might be a hit, Valyou for $2."
                                                    class="btn btn-light radio">$2</button>
                                        </div>
                                        <div class="col-2 col-md-2 ">
                                            <button type="button" class=" btn btn-light radio dollar-price "
                                                    data-toggle="tooltip" data-placement="top"
                                                    data-original-title="This song is nice, might be a hit, Valyou for $3."
                                                    class="btn btn-light radio">$3</button>
                                        </div>
                                        <div class="col-2 col-md-2 ">
                                            <button type="button" class=" btn btn-light radio dollar-price "
                                                    data-toggle="tooltip" data-placement="top"
                                                    data-original-title="This song is nice, might be a hit, Valyou for $4."
                                                    class="btn btn-light radio">$4</button>
                                        </div>
                                        <div class="col-2 col-md-2 ">
                                            <button type="button" class=" btn btn-light radio dollar-price "
                                                    data-toggle="tooltip" data-placement="top"
                                                    data-original-title="This song is nice, might be a hit, Valyou for $5."
                                                    class="btn btn-light radio">$5</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container col-md-12 text-center mb-5 proceed-valyou-song-div">
                                    <button type="button" class="btn valyou-g-btn"> Proceed to Valyou Song</button>
                                </div>
                            </div>
                        </div>
                        <div style="display: none" id="sharing-section-3">
                            <div class="container">
                                <div>
                                    <div class="card text-center">
                                        <h2
                                            style="color: #000000;font-size: 13px; margin: 15px auto ; text-align: center;padding: 7px 12px;">
                                            Invite a friend, new fans & potential investors to listen to your song</h2>
                                        <br>
                                        <div class="card-body price-card">
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-6">
                                                    <div class="input-price-div">
                                                        <p>How much do you want to spend?</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3"></div>
                                            </div>
                                            <div class="quantity">
                                                <input type='button' value='-' id="minus" class='minus' field='quantity' />
                                                <span class="input-qty pt-3"></span><input type='text' name='quantity'
                                                                                           value='25' class='qty input-qty dollar' />
                                                <input type='button' value='+' id="plus" class='plus ' field='quantity' />
                                            </div>
                                        </div>
                                        <br><br><br>
                                        <h2
                                            style="font-size: 13px; margin: auto 0 0; text-align: center; padding: 0 20px 20px; color: #000000;">
                                            Who would you like to pay to listen to your song so they may invest in you.</h2>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <img class="mr-3" style="height:30px; width:30px"
                                             src="<?php echo e(asset('assets/images/Headphone investor.svg')); ?>">
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col-md-4">
                                            <h2 class="fw-600">Investors on Valyou X </h2>
                                            <select class="select2-ajax select2-multiple" multiple="multiple"></select>
                                        </div>
                                        <!--<div class="col-md-4  ">    -->
                                        <!--    <h2 class="fw-600">Investors on Valyou X </h2>-->
                                        <!--</div>-->
                                        <div class="col-md-4 ">
                                            <h2 class="fw-600">Email ID</h2>
                                            <input type="text" data-role="tagsinput" placeholder="Add Emails"
                                                   class="form-control" />
                                        </div>
                                        <div class="col-md-4 ">
                                            <h2 class="fw-600">Phone number</h2>
                                            <input class="form-control number-input-music" placeholder="Enter Number"
                                                   type="number">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row mb-5">
                                        <div class="col-md-6 text-center mb-3">
                                            <div class="card client-input shadow-lg">
                                                <img src="<?php echo e(asset('assets/images/PReward per listen .svg')); ?>" class="img-fluid listen_img">
                                                <div class="card-body">
                                                    <p class="card-text">Reward each listener. Amount you would like to pay
                                                        each listener. <br> Min $0.10 VXD - Max $1.00 VXD</p>
                                                    <input type='button' value='-' class='minus' id="minus2"
                                                           field='quantity2' />
                                                    <span class="input-qty pt-3"></span> <input type='text' name='quantity2'
                                                                                                value='25' class='qty input-qty pt-3' />
                                                    <input type='button' value='+' class='plus ' id="plus2"
                                                           field='quantity2' />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-center mb-3">
                                            <div class="card client-input">
                                                <img src="<?php echo e(asset('assets/images/send-_promote_start.svg')); ?>" class="img-fluid">
                                                <div class="card-body">
                                                    <p class="card-text">How much of your budget would you like to spend per
                                                        day ? </p>
                                                    <input type='button' value='-' class='minus' id="minus3"
                                                           field='quantity3' />
                                                    <span class="input-qty pt-3"></span> <input type='text' name='quantity3'
                                                                                                value='25' class='qty input-qty pt-3' />
                                                    <input type='button' value='+' class='plus ' id="plus3"
                                                           field='quantity3' />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row col-md-12">
                                    </div>
                                    <br> <br>
                                    <div class="col-md-12 text-center ">
                                        <img class="mr-2 mb-2"
                                             src="<?php echo e(asset('assets/images/send-_promote_start.svg')); ?>">
                                        <h2>Send / Start</h2>
                                        <h5 class="font-size-14 mb-3 text-center">Share it on</h5>
                                        <div class="mt-4 text-center row">
                                            <div class="col-lg-12">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a href="#"
                                                           class="social-list-item bg-primary text-white border-primary">
                                                            <i class="mdi mdi-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#" class="social-list-item bg-info text-white border-info">
                                                            <i class="mdi mdi-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#"
                                                           class="social-list-item bg-danger text-white border-danger">
                                                            <i class="mdi mdi-google"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#" class="social-list-item  text-white ">
                                                            <img src="<?php echo e(asset('assets/images/valyou_xemblem.svg')); ?>"
                                                                 alt="" height="30">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card ">
                            <div class="card-body">
                                <div id="sponsored-section mt-3" class="row">
                                    <div class="col-lg-12 col-12 mt-3">
                                        <p class="sponsored-section-p1">Sponsored In Demand</p>
                                        <div class="sponsered-inner">
                                            <p class="green-one">Current offer $40.00 For  24 hours </p>
                                            <p class="pink-one" data-toggle="modal" data-target="#bidNowModal">Bid Now</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12 text-center">
                                        <p class="sponsored-section-p2">Invest in music artist on Valyou X</p>
                                    </div>
                                    <div class="col-lg-12 col-12 text-center">
                                        <p class="sponsored-section-p3">The World's First Artist Stock Market</p>
                                    </div>
                                    <div class="col-lg-12 col-12 mb-3">
                                        <div class="row">
                                            <div class="col-lg-3 col-2 ">
                                            </div>
                                            <div class="col-lg-6 col-8 text-center">
                                                <button type="button" class="btn valyou-o-btn-invest-lg"> Click and Earn $3</button>
                                            </div>
                                            <div class="col-lg-3 col-2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="social-post">
                        <div class="card margin-n">
                            <div class="post-section card-body">
                                <div class="row">
                                    <div class="col-lg-12 col-12">
                                        <div class="row">
                                            <div class="col-lg-2 col-3">
                                                <img class="post-section-artist-img rounded-circle"
                                                     src="<?php echo e(URL::asset('assets/images/valyoux/dre-450new.png')); ?>"
                                                     alt="">
                                            </div>
                                            <div class="col-lg-7 col-5 post-header-bar">
                                                <p class="post-section-artist-p1">Dr Dre</p>
                                                <p class="post-section-artist-p2 light-gray-color">Producer<i
                                                        class="fa fa-globe" aria-hidden="true"></i></p>
                                            </div>
                                            <div class="col-lg-2 col-4">
                                                <p class="float-right mt-2 light-gray-color text-right">Business Account</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--                                    <div class="col-lg-4 col-12 ">
                           <p class="float-right mt-2 light-gray-color text-right"> 2 Hours a go <i class="fa fa-clock-o" aria-hidden="true"></i></p>
                           </div>-->
                                </div>
                                <div class="col-lg-12 col-12 padding-n">
                                    <p class="post-section-para">Check out my new video, Started from the bottom. I bought
                                        some shares #dope #social media is for posting only music related content</p>
                                </div>
                                <div class="col-lg-12 col-12 padding-n">
                                <!--                                    <img class="post-section-img" src="<?php echo e(asset('assets/images/music-album.png')); ?>" alt="">
                           -->
                                    <video id="video"
                                           src="https://myprojectstaging.com/valyouxmusic/public/assets/videos/drake-video.mp4"
                                           class="video" type="video/mp4" controls playsinline></video>
                                </div>
                                <!--<div class="row bg-black mt-3 cover-bg" >-->
                                <!--	<div class="col-2 col-md-2 col-lg-2 text-center">-->
                                <!--		<img src="http://myprojectstaging.com/valyouxmusic/public/assets/images/valyoux/drake-valyou_x_music@2x.png" alt="" class="post-bottom-cover-image" width="80%">-->
                                <!--	</div>-->
                                <!--	<div class="col-7 col-md-6 col-lg-6">-->
                                <!--		<div class="text-muted promote-page-little-banner">-->
                                <!--			<p id="para1"> Artist share price</p>-->
                                <!--			<p id="para2">Drake $2.33VXD</p>-->
                                <!--			<p id="para3"><i class="fa fa-clock-o" aria-hidden="true"></i>  Major Artist</p>-->
                                <!--		</div>-->
                                <!--	</div>-->
                                <!--	<br>-->
                                <!--	<div class="col-3 col-md-4 col-lg-4 text-center padding-n">-->
                                <!--		<button type="button" class="btn valyou-o-btn-invest"> Invest in Artist</button>-->
                                <!--	</div>-->
                                <!--</div>-->

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <!--new desc text-->
                                <div class="social-media-profile-wrap">
                                    <div class="sm-left-wrap">
                                        <img src="http://myprojectstaging.com/valyouxmusic/public/assets/images/valyoux/drake-valyou_x_music@2x.png"
                                             alt="" class="avatar-md rounded-circle">
                                        <div class="sm-left-desc for_web">
                                            <h5>Artist share price</h5>
                                            <h2>Drake $2.33VXD</h2>
                                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> Major Artist</p>
                                        </div>
                                        <div class="sm-left-desc for_mob">
                                            <h2>Drake</h2>
                                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> Major Artist</p>
                                            <h5>Artist share price: $2.33VXD</h5>
                                        </div>
                                    </div>
                                    <div class="sm-right-wrap">
                                        <button type="button" class="btn-invest-pink-grad"
                                                onclick="location.href='<?php echo e(url('crypto-exchange')); ?>'"> Invest in
                                            Artist</button>
                                    </div>
                                </div>
                                <!--new desc text end-->
                            </div>
                        </div>

                        <div class="container mb-3 mt-3">
                            <div class="row ">
                                <div class="col-4 col-md-4 text-center padding-r ">
                                    <div class="card shadow-none" id="share-valyou-music">
                                        <div class="card-body body-p">
                                            <img class="mb-2 share-box-image"
                                                 src="<?php echo e(asset('assets/images/valyoux/valyousongiconnew@2x.png')); ?>">
                                            <p class="card-text mobile-v">Valyou Song</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 col-md-4 text-center padding-r ">
                                    <div class="card shadow-none" id="share-comments">
                                        <div class="card-body body-p">
                                            <img class="mb-2 share-box-image"
                                                 src="<?php echo e(asset('assets/images/comments.svg')); ?>">
                                            <p class="card-text mobile-v">Comments</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 col-md-4 text-center padding-r ">
                                    <div class="card shadow-none" id="share-promote-song">
                                        <div class="card-body body-p">
                                            <img class="mb-2 share-box-image"
                                                 src="<?php echo e(asset('assets/images/promote.svg')); ?>">
                                            <p class="card-text mobile-v">Promote</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="display: none" class="mt-3" id="sharing-section-1">
                            <div class="w-100 user-chat">
                                <div class="card">
                                    <div class="col-md-12 container">
                                        <ul class="list-unstyled mt-3" data-simplebar style="max-height: 470px;">
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4 col-12">
                                                        <div class="row artist-comment-image-div">
                                                            <div class="col-md-4 col-2 ">
                                                                <img src="<?php echo e(URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png')); ?>"
                                                                     alt="" class="avatar-md rounded-circle ">
                                                            </div>
                                                            <div class="col-md-8 col-10 mt-4">
                                                                <p class="text-dark font-size-12 artist-comment-name">Kanye
                                                                    West</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-5 artist-comment-desc">
                                                        <p class="font-size-10">dope artist i had invest</p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4 col-12">
                                                        <div class="row artist-comment-image-div">
                                                            <div class="col-md-4 col-2 ">
                                                                <img src="<?php echo e(URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png')); ?>"
                                                                     alt="" class="avatar-md rounded-circle ">
                                                            </div>
                                                            <div class="col-md-8 col-10 mt-4">
                                                                <p class="text-dark font-size-12 artist-comment-name">Kanye
                                                                    West</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-5 artist-comment-desc">
                                                        <p class="font-size-10">Awesome artist I would like to invest now!
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4 col-12">
                                                        <div class="row artist-comment-image-div">
                                                            <div class="col-md-4 col-2 ">
                                                                <img src="<?php echo e(URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png')); ?>"
                                                                     alt="" class="avatar-md rounded-circle ">
                                                            </div>
                                                            <div class="col-md-8 col-10 mt-4">
                                                                <p class="text-dark font-size-12 artist-comment-name">Kanye
                                                                    West</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-5 artist-comment-desc">
                                                        <p class="font-size-10">Stocks going up </p>
                                                    </div>
                                                </div>
                                                <hr class="mb-2">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="p-3 chat-input-section">
                                        <div class="row text-center">
                                            <div class="col-md-2 col-2">
                                                <div class="mr-3">
                                                    <img src="<?php echo e(URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png')); ?>"
                                                         alt="" class="avatar-md rounded-circle ">
                                                </div>
                                            </div>
                                            <div class="col-md-8 mt-3 mt-0-mobile col-8 ">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control chat-input"
                                                           placeholder="Enter Comment...">
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-2">
                                                <img style="transform: rotate(270deg);" class="mr-3 comment-btn"
                                                     style="height:30px; width:30px"
                                                     src="<?php echo e(asset('assets/images/valyoux/pink_arrow_circle_down.svg')); ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="display: none;" id="sharing-section-2">
                            <div class="container">
                                <div class="btn-margin">
                                    <div class="row">
                                        <div class="col-1 col-md-1">
                                        </div>
                                        <div class="col-2 col-md-2">
                                            <button type="button" class=" btn btn-light radio dollar-price "
                                                    data-toggle="tooltip" data-placement="top"
                                                    data-original-title="This song is nice, might be a hit, Valyou for $1."
                                                    class="btn btn-light radio">$1</button>
                                        </div>
                                        <div class="col-2 col-md-2">
                                            <button type="button" class=" btn btn-light radio dollar-price "
                                                    data-toggle="tooltip" data-placement="top"
                                                    data-original-title="This song is nice, might be a hit, Valyou for $2."
                                                    class="btn btn-light radio">$2</button>
                                        </div>
                                        <div class="col-2 col-md-2 ">
                                            <button type="button" class=" btn btn-light radio dollar-price "
                                                    data-toggle="tooltip" data-placement="top"
                                                    data-original-title="This song is nice, might be a hit, Valyou for $3."
                                                    class="btn btn-light radio">$3</button>
                                        </div>
                                        <div class="col-2 col-md-2 ">
                                            <button type="button" class=" btn btn-light radio dollar-price "
                                                    data-toggle="tooltip" data-placement="top"
                                                    data-original-title="This song is nice, might be a hit, Valyou for $4."
                                                    class="btn btn-light radio">$4</button>
                                        </div>
                                        <div class="col-2 col-md-2 ">
                                            <button type="button" class=" btn btn-light radio dollar-price "
                                                    data-toggle="tooltip" data-placement="top"
                                                    data-original-title="This song is nice, might be a hit, Valyou for $5."
                                                    class="btn btn-light radio">$5</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container col-md-12 text-center mb-5 proceed-valyou-song-div">
                                    <button type="button" class="btn valyou-g-btn"> Proceed to Valyou Song</button>
                                </div>
                            </div>
                        </div>
                        <div style="display: none" id="sharing-section-3">
                            <div class="container">
                                <div>
                                    <div class="card text-center">
                                        <h2
                                            style="color: #000000;font-size: 13px; margin: 15px auto ; text-align: center;padding: 7px 12px;">
                                            Invite a friend, new fans & potential investors to listen to your song</h2>
                                        <br>
                                        <div class="card-body price-card">
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-6">
                                                    <div class="input-price-div">
                                                        <p>How much do you want to spend?</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3"></div>
                                            </div>
                                            <div class="quantity">
                                                <input type='button' value='-' id="minus" class='minus' field='quantity' />
                                                <span class="input-qty pt-3"></span><input type='text' name='quantity'
                                                                                           value='25' class='qty input-qty dollar' />
                                                <input type='button' value='+' id="plus" class='plus ' field='quantity' />
                                            </div>
                                        </div>
                                        <br><br><br>
                                        <h2
                                            style="font-size: 13px; margin: auto 0 0; text-align: center; padding: 0 20px 20px; color: #000000;">
                                            Who would you like to pay to listen to your song so they may invest in you.</h2>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <img class="mr-3" style="height:30px; width:30px"
                                             src="<?php echo e(asset('assets/images/Headphone investor.svg')); ?>">
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col-md-4">
                                            <h2 class="fw-600">Investors on Valyou X </h2>
                                            <select class="select2-ajax select2-multiple" multiple="multiple"></select>
                                        </div>
                                        <!--<div class="col-md-4  ">    -->
                                        <!--    <h2 class="fw-600">Investors on Valyou X </h2>-->
                                        <!--</div>-->
                                        <div class="col-md-4 ">
                                            <h2 class="fw-600">Email ID</h2>
                                            <input type="text" data-role="tagsinput" placeholder="Add Emails"
                                                   class="form-control" />
                                        </div>
                                        <div class="col-md-4 ">
                                            <h2 class="fw-600">Phone number</h2>
                                            <input class="form-control number-input-music" placeholder="Enter Number"
                                                   type="number">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row mb-5">
                                        <div class="col-md-6 text-center mb-3">
                                            <div class="card client-input shadow-lg">
                                                <img src="<?php echo e(asset('assets/images/PReward per listen .svg')); ?>" class="img-fluid listen_img">
                                                <div class="card-body">
                                                    <p class="card-text">Reward each listener. Amount you would like to pay
                                                        each listener. <br> Min $0.10 VXD - Max $1.00 VXD</p>
                                                    <input type='button' value='-' class='minus' id="minus2"
                                                           field='quantity2' />
                                                    <span class="input-qty pt-3"></span> <input type='text' name='quantity2'
                                                                                                value='25' class='qty input-qty pt-3' />
                                                    <input type='button' value='+' class='plus ' id="plus2"
                                                           field='quantity2' />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-center mb-3">
                                            <div class="card client-input">
                                                <img src="<?php echo e(asset('assets/images/send-_promote_start.svg')); ?>" class="img-fluid">
                                                <div class="card-body">
                                                    <p class="card-text">How much of your budget would you like to spend per
                                                        day ? </p>
                                                    <input type='button' value='-' class='minus' id="minus3"
                                                           field='quantity3' />
                                                    <span class="input-qty pt-3"></span> <input type='text' name='quantity3'
                                                                                                value='25' class='qty input-qty pt-3' />
                                                    <input type='button' value='+' class='plus ' id="plus3"
                                                           field='quantity3' />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row col-md-12">
                                    </div>
                                    <br> <br>
                                    <div class="col-md-12 text-center ">
                                        <img class="mr-2 mb-2"
                                             src="<?php echo e(asset('assets/images/send-_promote_start.svg')); ?>">
                                        <h2>Send / Start</h2>
                                        <h5 class="font-size-14 mb-3 text-center">Share it on</h5>
                                        <div class="mt-4 text-center row">
                                            <div class="col-lg-12">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a href="#"
                                                           class="social-list-item bg-primary text-white border-primary">
                                                            <i class="mdi mdi-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#" class="social-list-item bg-info text-white border-info">
                                                            <i class="mdi mdi-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#"
                                                           class="social-list-item bg-danger text-white border-danger">
                                                            <i class="mdi mdi-google"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#" class="social-list-item  text-white ">
                                                            <img src="<?php echo e(asset('assets/images/valyou_xemblem.svg')); ?>"
                                                                 alt="" height="30">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card ">
                            <div class="card-body">
                                <div id="sponsored-section mt-3" class="row">
                                    <div class="col-lg-12 col-12 mt-3">
                                        <p class="sponsored-section-p1">Sponsored In Demand</p>
                                        <div class="sponsered-inner">
                                            <p class="green-one">Current offer $40.00 For  24 hours </p>
                                            <p class="pink-one" data-toggle="modal" data-target="#bidNowModal">Bid Now</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12 text-center">
                                        <p class="sponsored-section-p2">Invest in music artist on Valyou X</p>
                                    </div>
                                    <div class="col-lg-12 col-12 text-center">
                                        <p class="sponsored-section-p3">The World's First Artist Stock Market</p>
                                    </div>
                                    <div class="col-lg-12 col-12 mb-3">
                                        <div class="row">
                                            <div class="col-lg-3 col-2 ">
                                            </div>
                                            <div class="col-lg-6 col-8 text-center">
                                                <button type="button" class="btn valyou-o-btn-invest-lg"> Click and Earn $3</button>
                                            </div>
                                            <div class="col-lg-3 col-2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-4">
                    <div class="uploading-section-artist">
                        <p class="uploading-section-artist-main-heading"> Artist Markets </p>

                        <!--new stuff-->

                        <div class="tab-select nav nav-pills search-bar-web artist-maker-tabs" id="v-pills-tab"
                             role="tablist" aria-orientation="vertical">
                            <a href="#all" class="active" id="all-tab" data-toggle="pill" role="tab" aria-controls="all"
                               aria-selected="true"> All</a>
                               <?php $__currentLoopData = $artist_by_country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <a href="#<?php echo e($key); ?>" class="unclicked sorting" type="<?php echo e($key); ?>"  id="<?php echo e($key); ?>-tab" data-toggle="pill" role="tab"
                               aria-controls="<?php echo e($key); ?>" aria-selected="false"><?php echo e($country['country_name']); ?></a>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>

                        <div class="tab-content" id="v-pills-tabContent">
                            <div id="all" class="tab-pane fade show active" role="tabpanel" aria-labelledby="all-tab">
                                <div class="artist-markets-content-wrap">
                                    <div class="tab_all"></div>
                                  </div>
                            </div>
                              <?php $__currentLoopData = $artist_by_country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key1=>$row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <div id="<?php echo e($key1); ?>" class="tab-pane fade" role="tabpanel" aria-labelledby="<?php echo e($key1); ?>-tab">
                                <div class="artist-markets-content-wrap tab_<?php echo e($key1); ?>">

                                    </div>
                            </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="text-center my-3">
                        <a href="javascript:void(0);" class="text-success"><i
                                class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Load more </a>
                    </div>
                </div>
                <!-- end col-->
            </div>
            <!-- end row -->

            <!-- Modal -->
            <div class="modal fade proceed_modal" id="proceedModal" aria-labelledby="proceedModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4><b class="color-pinkk">Congratulations ! </b></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class="popup-text">
                                
                                You now have unlimited plays & access to listen to this song free anytime. It has now been added to your Valyou playlist. You gained 3 Artist VIP points. <br><br>
                                Kind Regards, <br>
                                <b>Artist Name.</b>
                            </p>
                        </div>
                        <!--<div class="modal-footer">-->
                        <!--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Okay</button>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>


            <!--Bid now Modal -->
            <div class="modal fade proceed_modal bidnow_modal" id="bidNowModal" aria-labelledby="bidNowModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>
                                <b class="color-pinkk">Bid Now</b>
                                <span class="spot_heading">60 spots remaining | Biding war </span>
                            </h4>
                            <label for="uploadbid" class="bidnow_upload">
                                <input id="uploadbid" type="file"/>
                                Upload Ad
                            </label>
                            <button type="button" class="close btn_close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="text-center">
                                <div class="card-body price-card">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-price-div">
                                                <p>Minimum Bid $10.</p>
                                                <!--when the list of all bid is completed we need to show the below text and hide the above one. By default below text would be hidden-->
                                                <p class="d-none">Place a bid higher than $20</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="quantity">
                                        <input type='button' value='-' id="minus" class='minus' field='quantity'/>
                                        <input type='text' name='quantity' value='25' class='qty input-qty dollar'/>
                                        <input type='button' value='+' id="plus" class='plus ' field='quantity'/>
                                    </div>
                                </div>
                                <br><br>
                                <h2 style="font-size: 24px; text-align: center; padding: 0 0 0; color: #1EDD0E;    font-weight: 700;">Total Cost + Fees: $ 1490 VXD</h2>
                                <br>
                                <!--<h2 style="font-size: 16px; text-align: center; padding: 0 0 20px; color: #000;">Amount of Shares X Current Stock Price + Fees % = Total Cost.</h2>-->
                                <button class="btn btn-green btn-sm waves-effect waves-light">Bid Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="modal fade" id="edit_comment" aria-labelledby="bidNowModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4><b class="color-pinkk">Edit Comment ! </b></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="#" method="post" class="update_comment_form">
                            <div class="modal-body">
                                <div class="text-center">
                                    <input type="hidden" class="comment_id">

                                    <input type="text" class="form-control comment" name="comment">
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('assets/libs/select2/select2.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/pages/form-advanced.init.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/multiselect/2.2.9/js/multiselect.js"></script>
    <script src="<?php echo e(URL::asset('assets/js/pages/social-media.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/axios/axios.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script-bottom'); ?>
    <script>
    (function() {
        const promoteSong = document.querySelectorAll('.promoteSong');
        Array.from(promoteSong).forEach(function (element) {
            element.addEventListener('change', function() {
                const id = element.getAttribute('data-id');
                const promoteSong = this.value;
                let item = '';
                if (promoteSong === "valyoux") {
                    document.getElementById(`else${id}`).style.display = "none";
                    document.getElementById(`email${id}`).style.display = "none";
                    document.getElementById(`phone${id}`).style.display = "none";
                    document.getElementById(`valyoux${id}`).style.display = "block";
                } else if (promoteSong === "email") {
                    document.getElementById(`else${id}`).style.display = "none";
                    document.getElementById(`valyoux${id}`).style.display = "none";
                    document.getElementById(`phone${id}`).style.display = "none";
                    document.getElementById(`email${id}`).style.display = "block";
                } else if (promoteSong === "phone") {
                    document.getElementById(`else${id}`).style.display = "none";
                    document.getElementById(`valyoux${id}`).style.display = "none";
                    document.getElementById(`email${id}`).style.display = "none";
                    document.getElementById(`phone${id}`).style.display = "block";
                } else {
                    $(`#promoteuser${id}`).empty();
                    document.getElementById(`valyoux${id}`).style.display = "none";
                    document.getElementById(`email${id}`).style.display = "none";
                    document.getElementById(`phone${id}`).style.display = "none";
                    document.getElementById(`else${id}`).style.display = "block";
                }
            })
        })

        // sendStart
        const sendStart = document.querySelectorAll('.sendStart');
        Array.from(sendStart).forEach(function (e) {
            e.addEventListener('click',function () {
                const id = e.getAttribute('data-id');
                const quantity = document.getElementById(`quantity${id}`).value;
                const quantity2 = document.getElementById(`quantity2${id}`).value;
                const promoteSong = document.getElementById(`promoteSong${id}`).value;
               // const promoteuser = document.getElementById(`promoteuser${id}`).value;

                const selected = document.querySelectorAll(`#promoteuser${id}`+ ' option:checked');
                const promoteuser = Array.from(selected).map(el => el.value);

                const promoteemail = document.getElementById(`promoteemail${id}`).value;

                const promotephone = document.getElementById(`promotephone${id}`).value;
                axios({
                    method: "post",
                    url: "<?php echo e(route('admin.promotesong')); ?>",
                    data: {
                        id:id,
                        quantity:quantity,
                        quantity2:quantity2,
                        promoteSong:promoteSong,
                        promoteuser:promoteuser,
                        promoteemail:promoteemail,
                        promotephone:promotephone,
                    }
                }).then((res) => {
                    js_success("You promoted a song");
                }).catch((err) => {
                    throw err;
                });
            })
        })

    })();

    $(document).ready(function () {
        // Valyou Song Start
        $(document).on('click','.overlay-for-video',function () {
            let id = $(this).data('videoid');
            let userId = $(this).data('userid');
            $('#staticBackdrop').modal('show');
            $('button.playvideo').attr('id',`${id}`);
        })
        $(document).on('click','.playvideo',function () {
            var id = $(this).attr('id');
            let userId = $(`#overlay${id}`).data('userid');
            $(`#video${id}`).trigger('play');
            $(`#overlay${id}`).remove();
            let wallet = "<?php echo e(auth()->user()->wallet); ?>"
            if (Number(wallet) > 0.02) {
                axios({
                    method: "post",
                    url: "<?php echo e(route('admin.valyousong')); ?>",
                    data: {
                        id:id,
                        userId
                    }
                }).then((res) => {
                    console.log(res);
                }).catch((err) => {
                    throw err;
                });
            } else {
                js_error("You don't have sufficient amount in your wallet to play this song.");
            }
        })
        // Valyou Song End

        // SHARING BUTTONS START
        $(document).on('click','.share-valyou-music',function () {
            let id = $(this).data('valyouid');
            $(`#valyou-music-section-${id}`).css('display','block');
            $(`#comments-section-${id}`).css('display','none');
            $(`#promote-song-section-${id}`).css('display','none');
        })

        $(document).on('click','.share-comments',function () {
            let id = $(this).data('commentid');
            $(`#valyou-music-section-${id}`).css('display','none');
            $(`#comments-section-${id}`).css('display','block');
            $(`#promote-song-section-${id}`).css('display','none');
        })

        $(document).on('click','.share-promote-song',function () {
            let id = $(this).data('promoteid');
            $(`#valyou-music-section-${id}`).css('display','none');
            $(`#comments-section-${id}`).css('display','none');
            $(`#promote-song-section-${id}`).css('display','block');
        })
        // SHARING BUTTONS END
    })
    $(document).ready(function(){

      loadMoreData(0,'all');

      function loadMoreData(page,tabId,value='',type=''){
        console.log(value);
        $.ajax({
          url : "loadmoresocialdata",
          type: "GET",
          cache:false,
          data:{offset:page,tabId:tabId},
          success:function(data){
            if (data) {
                const data1 = JSON.parse(data);

              if(page){
                 $(".tab_"+tabId).append(data1.web);
                  $(".mtab_"+tabId).append(data1.mobile);
                }else{
                $(".tab_"+tabId).html(data1.web);
               $(".mtab_"+tabId).append(data1.mobile);
              }
            }
          }
        });
      }

      $(document).on('click', '.loadbtn', function(){
        $(".loadbtn").html('Loading...');
        $(".loadbtn").hide();
        var pId = $(this).data("id");
        var tab = $(this).data("tab");
        loadMoreData(pId,tab);
      });

      $(".sorting").on("click", function() {
           var type = $(this).attr('type');
           loadMoreData(0,type);

     });


  });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/old/social-mdeia-old-25.blade.php ENDPATH**/ ?>