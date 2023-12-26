@extends('layouts.master')
@section('pageCSS')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/pages/social-media.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    img.audio-cover-image {
    width: 80px;
    height: 80px;
}
audio-text {
    margin-left: 15px;
    margin-bottom: 0px;
    font-size: 24px;
    font-weight: 500;
    margin: 0px;
    color: #000;
    margin-left: 10px;
    line-height: normal;
}
audio-text span {
    font-size: 17px;
    float: left;
    width: 100%;
    display: block;
    color: gray;
    font-weight: 400;
}
         .videothumbnail_wrapper {
              padding: 10px;
              border: 1px solid #ccc;
              -webkit-box-shadow: 0px 2px 2px #eee;
                      box-shadow: 0px 2px 2px #eee;
            }
            
            .videothumbnail_wrapper .vw_head {
              margin-bottom: 20px;
            }
            
            .videothumbnail_wrapper .vw_head h4 {
              margin: 0;
              font-size: 18px;
              font-weight: 600;
              margin-bottom: 5px;
              line-height: 1.2;
              color: #000;
            }
            
            .videothumbnail_wrapper .vw_head h6 {
              margin: 0;
              font-size: 13px;
              color: #656565;
              line-height: 1.2;
            }
            
            .vw_single {
              display: -webkit-box;
              display: -ms-flexbox;
              display: flex;
              margin-bottom: 15px;
              cursor: pointer;
            }
            
            .vw_single .vws_video {
              margin-right: 5px;
            }
            
            .vw_single .vws_video video {
              margin: 0;
              width: 100%;
              height: auto;
              max-width: 220px;
            }
            
            .vw_single .vws_caption h5 {
              color: #F24336;
              margin: 0;
              font-size: 14px;
              font-weight: 600;
              line-height: 1.2;
              margin-bottom: 5px;
            }
            
            .vw_single .vws_caption p {
              margin: 0;
              color: #656565;
              font-size: 14px;
            }
            .simplebar-content-wrapper{
                overflow: hidden !important;
            }
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

        .sidebar-enable.vertical-collpsed .sc-img {
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
    </style>
@endsection
@section('title') Market @endsection
@section('bottom-navbar')
  
   @php
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
@endphp

    <div class="scrolling" id="upper-exchange"> Exchange Rates
        <span class="pink">:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg') }}" width="15" height="15" alt="">&nbsp;&nbsp;1 Ethereum &nbsp;=&nbsp;
        <p>0.02776 BTC</p> &nbsp;=&nbsp; $
        <p>{{ $ETHUSDT ?? '' }} USD</p> &nbsp;&nbsp;
        <p class="text-green"> + 0.25% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/bitcoinlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 Bitcoin &nbsp;=&nbsp; $
        <p>{{ $BTCUSDT ?? '' }} USD</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.15% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/vuxlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 Valyou X Dollar (VXD) = &nbsp;&nbsp; $
        <p>{{ $USDCUSDT ?? '' }} USDC</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.1% </p>
        &nbsp;&nbsp;&nbsp;
        
        Exchange Rates
        <span class="pink">:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg') }}" width="15" height="15" alt="">&nbsp;&nbsp;1 Ethereum &nbsp;=&nbsp;
        <p>0.02776 BTC</p> &nbsp;=&nbsp; $
        <p>{{ $ETHUSDT ?? '' }} USD</p> &nbsp;&nbsp;
        <p class="text-green"> + 0.25% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/bitcoinlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 Bitcoin &nbsp;=&nbsp; $
        <p>{{ $BTCUSDT ?? '' }} USD</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.15% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/vuxlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 Valyou X Dollar (VXD) = &nbsp;&nbsp; $
        <p>{{ $USDCUSDT ?? '' }} USDC</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.1% </p>
        &nbsp;&nbsp;&nbsp;
        
        Exchange Rates
        <span class="pink">:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg') }}" width="15" height="15" alt="">&nbsp;&nbsp;1 Ethereum &nbsp;=&nbsp;
        <p>0.02776 BTC</p> &nbsp;=&nbsp; $
        <p>{{ $ETHUSDT ?? '' }} USD</p> &nbsp;&nbsp;
        <p class="text-green"> + 0.25% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/bitcoinlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 Bitcoin &nbsp;=&nbsp; $
        <p>{{ $BTCUSDT ?? '' }} USD</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.15% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/vuxlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 Valyou X Dollar (VXD) = &nbsp;&nbsp; $
        <p>{{ $USDCUSDT ?? '' }} USDC</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.1% </p>
        &nbsp;&nbsp;&nbsp;
        
        Exchange Rates
        <span class="pink">:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg') }}" width="15" height="15" alt="">&nbsp;&nbsp;1 Ethereum &nbsp;=&nbsp;
        <p>0.02776 BTC</p> &nbsp;=&nbsp; $
        <p>{{ $ETHUSDT ?? '' }} USD</p> &nbsp;&nbsp;
        <p class="text-green"> + 0.25% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/bitcoinlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 Bitcoin &nbsp;=&nbsp; $
        <p>{{ $BTCUSDT ?? '' }} USD</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.15% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/vuxlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 Valyou X Dollar (VXD) = &nbsp;&nbsp; $
        <p>{{ $USDCUSDT ?? '' }} USDC</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.1% </p>
        &nbsp;&nbsp;&nbsp;
        
        Exchange Rates
        <span class="pink">:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg') }}" width="15" height="15" alt="">&nbsp;&nbsp;1 Ethereum &nbsp;=&nbsp;
        <p>0.02776 BTC</p> &nbsp;=&nbsp; $
        <p>{{ $ETHUSDT ?? '' }} USD</p> &nbsp;&nbsp;
        <p class="text-green"> + 0.25% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/bitcoinlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 Bitcoin &nbsp;=&nbsp; $
        <p>{{ $BTCUSDT ?? '' }} USD</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.15% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/vuxlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 Valyou X Dollar (VXD) = &nbsp;&nbsp; $
        <p>{{ $USDCUSDT ?? '' }} USDC</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.1% </p>
        &nbsp;&nbsp;&nbsp;
        
        Exchange Rates
        <span class="pink">:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg') }}" width="15" height="15" alt="">&nbsp;&nbsp;1 Ethereum &nbsp;=&nbsp;
        <p>0.02776 BTC</p> &nbsp;=&nbsp; $
        <p>{{ $ETHUSDT ?? '' }} USD</p> &nbsp;&nbsp;
        <p class="text-green"> + 0.25% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/bitcoinlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 Bitcoin &nbsp;=&nbsp; $
        <p>{{ $BTCUSDT ?? '' }} USD</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.15% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/vuxlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 Valyou X Dollar (VXD) = &nbsp;&nbsp; $
        <p>{{ $USDCUSDT ?? '' }} USDC</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.1% </p>
    </div>
@endsection
@section('content')
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
        <img src="{{ asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg') }}" width="20" height="20" alt="">
        &nbsp;&nbsp;&nbsp;&nbsp; 1 Ethereum &nbsp;=&nbsp;
        <p id="E1">0.02776 BTC</p>
        &nbsp;=&nbsp; $
        <p id="E2">462.82 USD</p>
        &nbsp;&nbsp;
        <p id="B3" class="text-green"> + 0.25% </p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/bitcoinlogo.svg') }}" width="20" height="20">&nbsp;&nbsp;&nbsp;&nbsp;1
        Bitcoin &nbsp;=&nbsp; $
        <p id="B2">16668.06 USD</p>
        &nbsp;&nbsp;
        <p id="B3" class="text-red"> - 0.15% </p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/valyousongiconnew@2x.png') }}" width="20" height="20">&nbsp;&nbsp;&nbsp;&nbsp;1
        Valyou X Dollar (VXD) = &nbsp;&nbsp; $
        <p id="B2">1.00 USD</p>
        &nbsp;&nbsp;
        <p id="B3" class="text-red"> - 0.1% </p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/vuxlogo.svg') }}" width="20" height="20">&nbsp;&nbsp;&nbsp;&nbsp;1
        Valyou X Token ( ValyouX) = &nbsp;&nbsp; $
        <p id="B2">0.50 USDC</p>
        &nbsp;&nbsp;
    </div>
    <div class="row">
        <div class="col-lg-12">
            <!--tri-angle-->
           <div class="row mt-4 ">
                <div class="col-lg-8 col-12">
                    {{-- Custom Work Start --}}
                    <input type="hidden" name="user_id" id="user_id" value="{{ $records[0]['user_id'] }}"> 
                    <input type="hidden" name="id" id="id" value="{{ $records[0]['id'] }}"> 
                    @include('partician.all_videos',['videos'=>$records])
                    {{-- Custom Work End --}}
                </div>
                <div class="col-lg-4 col-4">
                <div class="videothumbnail_wrapper">
                <div class="vw_head">
                    <h4>All Videos </h4>
                </div>
                <div class="all_videos"></div>
               
               </div>
                </div>
            </div>
           
            <!-- end row -->

           

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


@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/select2/select2.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/form-advanced.init.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/multiselect/2.2.9/js/multiselect.js"></script>

    <script src="{{ URL::asset('assets/libs/axios/axios.min.js') }}"></script>
@endsection
@section('script-bottom')
    <script>
       
    $(document).ready(function () {
     loadMoreData(0,$('#user_id').val(),$('#id').val());
     })
     $(document).on('click','.playvideo',function () {
            var id = $(this).attr('id');
            let userId = $(`#overlay${id}`).data('userid');
            $(`#video${id}`).trigger('play');
            $(`#overlay${id}`).remove();
            let wallet = "{{ auth()->user()->wallet }}"
            if (Number(wallet) > 0.02) {
                axios({
                    method: "post",
                    url: "{{ route('admin.valyousong') }}",
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
        // Valyou Song En
    $(document).on('click', '.loadbtn', function(){
        $(".loadbtn").html(' <i style="color: #46c899;"  class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Loading...');
       // $(".loadbtn").hide();
        var pId = $(this).data("id");
        var user = $(this).data("user");
        var id = $(this).data("id");
        loadMoreData(pId,user,id);
      });

    function loadMoreData(page,user_id,id){
       
        $.ajax({
          url : "loadmorevideos",
          type: "GET",
          cache:false,
          data:{offset:page,user_id:user_id,id:id},
          success:function(data){
            if (data) {
                const data1 = JSON.parse(data);
                $(".loadbtn").hide();
                 $(".all_videos").append(data1.html);
               
            }
          }
        });
      }
    </script>

@endsection
