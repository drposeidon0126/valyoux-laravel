@extends('layouts.master')
@section('pageCSS')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/select2/select2.min.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    audio {
        background-color: #c8c8c8;
    }

    audio::-webkit-media-controls-panel {
        background-color: rgba(200, 200, 200, 1);
        width: 350px;

    }

    .audio-text {
        margin-left: 15px;
        margin-bottom: 0px;
        font-size: 24px;
        font-weight: 500;
        margin: 0px;
        color: #000;
        margin-left: 10px;
        line-height: normal;
    }

    .audio-text span {
        font-size: 17px;
        float: left;
        width: 100%;
        display: block;
        color: gray;
        font-weight: 400;
    }

    img.audio-cover-image {
        width: 80px;
        height: 80px;
    }

    #lower-exchange:hover {
        -webkit-animation-play-state: paused;
        -moz-animation-play-state: paused;
        -o-animation-play-state: paused;
        animation-play-state: paused;
        cursor: pointer;
    }

    p.no-videos {
        text-align: center;
        font-size: xx-large;
        margin: 0;

    }

    .videos-div {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .for-padd-row {
        padding-right: 15px;
    }

    .col-lg-7.col-6.post-header-bar {
        margin-top: 10px;
        padding: 0;
        margin-left: -20px;
    }

    #comments-section-1 ul {
        overflow: auto;
        overflow-x: hidden;
    }

    .profile_img_name {
        display: flex;
        align-items: flex-start;
    }

    .profile_img_name .post-section-artist-img {
        margin-right: 15px;
    }

    .profile_img_name .inner_img_name {
        margin-top: 10px;
    }

    .uploading-section-artist-p3 img.uploading-section-artist-icon-img {
        margin-top: -2px;
    }

    .color-white {
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

    .green-percentage {
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

        .green-percentage {
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

        img.avatar-md.post-img {
            height: 100%;
            width: 100%;
            max-width: 59px;
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

        .green-percentage {
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

    .listen_img {
        max-width: 100px;
        margin: 0 auto;
    }

    .send_start {
        font-size: 22px;
        margin-bottom: 10px;
        border: none;
        background: transparent;
    }

    .sponsered-inner {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .sponsered-inner .green-one {
        color: #90eb82;
        font-size: 14px;
    }

    .sponsered-inner .pink-one {
        color: #e62e51;
        text-decoration: underline;
        font-size: 14px;
        cursor: pointer;
    }

    .for_web {
        display: block;
    }

    .for_mob {
        display: none;
    }

    @media (max-width: 575px) {
        .for_web {
            display: none;
        }

        .for_mob {
            display: block;
        }

        .for_mob.sm-left-desc h5 {
            font-size: 12px;
        }
    }

    @media (max-width: 700px) {
        .for_web {
            display: none;
        }

        .for_mob {
            display: block;
        }

        .for_mob.sm-left-desc h5 {
            font-size: 12px;
        }
    }

    /*bid now modal css*/
    .bidnow_modal .modal-body {
        padding-bottom: 1rem;
    }

    .bidnow_modal .price-card {
        background: #000;
    }

    .bidnow_modal .quantity input {
        color: #fff;
    }

    .bidnow_modal .modal-body button {
        background: #000;
    }

    .bidnow_modal .modal-header {
        position: relative;
    }

    .bidnow_modal .btn_close {
        position: absolute;
        right: 15px;
    }

    .bidnow_modal .spot_heading {
        margin-left: 5px;
        font-size: 18px;
    }

    .bidnow_modal .bidnow_upload {
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

    .bidnow_modal .bidnow_upload input {
        position: absolute;
        width: 0;
        height: 0;
    }

    /*video Ad card styling*/
    .videoAd_card {}

    .videoAd_card .image__innerwrapper,
    .image__innerwrapper {
        border: 1px solid #dfdede;
        border-radius: 4px;
        margin-bottom: 5px;
    }

    .image_wrapper .image_ratio {
        margin: 0;
        font-size: 40px;
        color: #0000004a;
        padding-top: 20px;
    }

    .image_wrapper .image_placeholder {
        margin: 0;
        font-size: 45px;
        font-weight: 500;
        margin: 0px;
        color: #5D5D5D;
        padding-bottom: 20px;
    }

    .image_wrapper .image_placeholder span {
        font-size: 29px;
        color: gray;
        font-weight: 100;
        display: block;
    }

    .videoAd_card .video_wrapper {}

    .videoAd_card .video_wrapper iframe {}

    .color-redd {
        color: #F24336;
    }

    a.text-success.loadbtn.loadbtn-mobile {
        align-items: center;
        display: flex;
    }

    .ml-s-5 {
        margin-left: 10px;
    }
</style>
@endsection

@section('title') Artist @endsection
@section('pageCSS')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/pages/my-songs.css') }}">
@endsection
@section('content')

@include('layouts.inner-navigation',['artist'=>$artist])
<div class="row">
    @include('layouts.profile-box',['artist'=>$artist])
</div>
<div class="page_section">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/pages/social-media.css') }}">
<div class="row">
        <div class="col-md-12 col-lg-9 order-md-2 order-lg-1">
             <div class="all_social_videos"></div>
         </div>
    </div>

    <div class="row d-none">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Music Fan Investor</h4>

                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                            <tr class="text-center">
                                <th colspan="3">Best Offer to Buy</th>
                                <th colspan="3">Best Offer to Sell</th>
                            </tr>
                            <tr>
                                <th scope="col">Amount</th>
                                <th scope="col">Total</th>
                                <th scope="col">Price</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Total</th>
                                <th scope="col">Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>0.0412</td>
                                <td>0.0412</td>
                                <td>256.18</td>
                                <td>0.0201</td>
                                <td>0.0201</td>
                                <td>124.98</td>
                            </tr>
                            <tr>
                                <td>0.0301</td>
                                <td>0.0301</td>
                                <td>187.16</td>
                                <td>0.0165</td>
                                <td>0.0165</td>
                                <td>102.60</td>
                            </tr>
                            <tr>
                                <td>0.0523</td>
                                <td>0.0523</td>
                                <td>325.21</td>
                                <td>0.0348</td>
                                <td>0.0348</td>
                                <td>216.39</td>
                            </tr>
                            <tr>
                                <td>0.0432</td>
                                <td>0.0432</td>
                                <td>268.62</td>
                                <td>0.0321</td>
                                <td>0.0321</td>
                                <td>199.60</td>
                            </tr>
                            <tr>
                                <td>0.0246</td>
                                <td>0.0246</td>
                                <td>152.96</td>
                                <td>0.0403</td>
                                <td>0.0403</td>
                                <td>250.59</td>
                            </tr>
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Transactions</h4>

                    <div data-simplebar style="max-height: 310px;">
                        <ul class="verti-timeline list-unstyled">
                            <li class="event-list">
                                <div class="event-timeline-dot">
                                    <i class="bx bx-right-arrow-circle font-size-18"></i>
                                </div>
                                <div class="media">
                                    <div class="mr-3">
                                        <h5 class="font-size-14">15 Mor <i
                                                class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i>
                                        </h5>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            Sold 5 Beyonce Share at $250 per share.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="event-list">
                                <div class="event-timeline-dot">
                                    <i class="bx bx-right-arrow-circle font-size-18"></i>
                                </div>
                                <div class="media">
                                    <div class="mr-3">
                                        <h5 class="font-size-14">14 Mor <i
                                                class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i>
                                        </h5>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            Sold 7 Beyonce Share at $250 per share.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="event-list">
                                <div class="event-timeline-dot">
                                    <i class="bx bx-right-arrow-circle font-size-18"></i>
                                </div>
                                <div class="media">
                                    <div class="mr-3">
                                        <h5 class="font-size-14">13 Mor <i
                                                class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i>
                                        </h5>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            Sold 4 Beyonce Share at $250 per share.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="event-list">
                                <div class="event-timeline-dot">
                                    <i class="bx bx-right-arrow-circle font-size-18"></i>
                                </div>
                                <div class="media">
                                    <div class="mr-3">
                                        <h5 class="font-size-14">13 Mor <i
                                                class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i>
                                        </h5>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            Sold 8 Beyonce Share at $250 per share.
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="event-list">
                                <div class="event-timeline-dot">
                                    <i class="bx bx-right-arrow-circle font-size-18"></i>
                                </div>
                                <div class="media">
                                    <div class="mr-3">
                                        <h5 class="font-size-14">12 Mor <i
                                                class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i>
                                        </h5>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            Sold 6 Beyonce Share at $250 per share.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="event-list">
                                <div class="event-timeline-dot">
                                    <i class="bx bx-right-arrow-circle font-size-18"></i>
                                </div>
                                <div class="media">
                                    <div class="mr-3">
                                        <h5 class="font-size-14">11 Mor <i
                                                class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i>
                                        </h5>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            Sold 5 Beyonce Share at $250 per share.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="event-list">
                                <div class="event-timeline-dot">
                                    <i class="bx bx-right-arrow-circle font-size-18"></i>
                                </div>
                                <div class="media">
                                    <div class="mr-3">
                                        <h5 class="font-size-14">10 Mor <i
                                                class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i>
                                        </h5>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            Sold 9 Beyonce Share at $250 per share.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="event-list">
                                <div class="event-timeline-dot">
                                    <i class="bx bx-right-arrow-circle font-size-18"></i>
                                </div>
                                <div class="media">
                                    <div class="mr-3">
                                        <h5 class="font-size-14">09 Mor <i
                                                class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i>
                                        </h5>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            Sold 2 Beyonce Share at $250 per share.
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
    <div class="row bs-float-parent">
        <div class="col-xl-12">
            <div class="card mb-0 posFixed-sVxd" id="bs-float">
                <div class="card-body">
                    <div class="stock-price text-center">Stock Price</div>
                    <div class="d-flex d-flexBlock-mob justify-content-center bd-highlight align-items-center">
                        <div class="marquee">
                            <div class="track">
                                <div class="vxd d-inline">$58.60 VXD</div>
                                <div class="priceT d-inline pr-5">&nbsp;&nbsp;+28.57%</div>
                                <div class="vxd d-inline pl-5">0.000014 BTC</div>
                                <div class="priceT d-inline pr-5">&nbsp;&nbsp;+28.57%</div>
                                <div class="vxd d-inline pl-5">$59.60 USDT</div>
                                <div class="priceT d-inline pr-5">&nbsp;&nbsp;+28.57%</div>
                                <div class="vxd d-inline pl-5">0.00019 ETH</div>
                                <div class="priceT d-inline">&nbsp;&nbsp;+28.57%</div>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center d-flex justify-content-center mb-3  mt-2">
                        <div class="col-xl-2 col-sm-3 col-6">
                            <button class="btn btn-pink btn-sm w-md waves-effect waves-light mr-3">Sell Stock</button>
                        </div>
                        <div class="col-xl-2 col-sm-3 col-6">
                            <button class="btn btn-green btn-sm w-md waves-effect waves-light">Buy Stock</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
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
            <!--<b class="color-pinkk">Congratulations ! </b><br>-->
            You now have unlimited plays & access to listen to this song. It has now been added to your Valyou Playlist. <br><br>
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
    <script src="{{ URL::asset('assets/libs/select2/select2.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/form-advanced.init.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/multiselect/2.2.9/js/multiselect.js"></script>

    <script src="{{ URL::asset('assets/libs/axios/axios.min.js') }}"></script>
<script>
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
    $(document).ready(function(){
        loadmoreData(0,<?= $artist['id']?>);
      $(document).on('click', '.loadbtnvideos', function(){
        $(".loadbtnvideos").html('<i style="color: #46c899;"  class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Loading...');
        var pId = $(this).data("id");
        loadmoreData(pId,<?= $artist['id']?>);
      });
    });
    function loadmoreData(page,artist_id){

       $.ajax({
         url : "loadmoredata",
         type: "GET",
         cache:false,
         data:{offset:page,artist_id:artist_id},
         success:function(data){
           if (data) {
               const data1 = JSON.parse(data);
               $(".loadbtnvideos").hide();
               $(".all_social_videos").append(data1.html);
           }
         }
       });
     }
    </script>

</div>
<!-- end row -->


<div class="row bs-float-parent">
    @include('layouts.stock-price',['artist'=>$artist])
</div>

@endsection
