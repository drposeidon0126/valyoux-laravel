<?php $__env->startSection('pageCSS'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/select2/select2.min.css')); ?>">
<!-- <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.css')); ?>"> -->
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/tagify/tagify.css')); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/css/pages/social-media.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/intl-tel-input/css/intlTelInput.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<style>
    /* btn close section */
    .modal-header .btn-close {
        padding: 0.5rem 0.5rem;
        margin: -0.5rem -0.5rem -0.5rem auto;
    }

    .btn-close:hover {
        color: #000;
        text-decoration: none;
        opacity: .75;
    }

    .btn-close {
        -webkit-box-sizing: content-box;
        box-sizing: content-box;
        width: 1em;
        height: 1em;
        padding: .25em .25em;
        color: #000;
        background: transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e") center/1em auto no-repeat;
        border: 0;
        border-radius: .25rem;
        opacity: .5
    }

    /* user list with avatar */
    /* Suggestions items */
    .tagify__dropdown.users-list .tagify__dropdown__item {
        padding: .5em .7em;
        display: grid;
        grid-template-columns: auto 1fr;
        gap: 0 1em;
        grid-template-areas: "avatar name"
            "avatar email";
    }

    .tagify__dropdown.users-list .tagify__dropdown__item:hover .tagify__dropdown__item__avatar-wrap {
        transform: scale(1.2);
    }

    .tagify__dropdown.users-list .tagify__dropdown__item__avatar-wrap {
        grid-area: avatar;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        overflow: hidden;
        background: #EEE;
        transition: .1s ease-out;
    }

    .tagify__dropdown.users-list img {
        width: 100%;
        vertical-align: top;
    }

    .tagify__dropdown.users-list strong {
        grid-area: name;
        width: 100%;
        align-self: center;
    }

    .tagify__dropdown.users-list span {
        grid-area: email;
        width: 100%;
        font-size: .9em;
        opacity: .6;
    }

    .tagify__dropdown.users-list .addAll {
        border-bottom: 1px solid #DDD;
        gap: 0;
    }

    .users-list .tagify__tag {
        white-space: nowrap;
    }

    .users-list .tagify__tag:hover .tagify__tag__avatar-wrap {
        transform: scale(1.6) translateX(-10%);
    }

    .users-list .tagify__tag .tagify__tag__avatar-wrap {
        width: 16px;
        height: 16px;
        white-space: normal;
        border-radius: 50%;
        background: silver;
        margin-right: 5px;
        transition: .12s ease-out;
    }

    .users-list .tagify__tag img {
        width: 100%;
        vertical-align: top;
        pointer-events: none;
    }

    /* section end */


    .select2-container--default .select2-results__option[aria-selected=true] {
        background-color: #dee2e7 !important;
    }

    .tagify--outside {
        border: 0 !important;
    }

    .tagify--outside .tagify__input {
        order: -1;
        flex: 100%;
        border: 1px solid var(--tags-border-color);
        margin-bottom: 1em;
        transition: .1s;
        padding: 0.65rem 0.75rem;
        border-radius: 3px;
    }

    .tagify__input {
        margin: 0 !important;
        margin-bottom: 0.5rem !important;
    }


    .tagify--outside-sms .tagify__input {
        display: none;
    }

    .tagify--outside .tagify__input:hover {
        border-color: var(--tags-hover-border-color);
    }

    .tagify--outside.tagify--focus .tagify__input {
        transition: 0s;
        border-color: var(--tags-focus-border-color);
    }

    .add-shadow-after-selected {
        box-shadow: 0 1.5px 4px 0 rgba(0, 0, 0, 0.3) !important;
        border-radius: 28px !important;;
    }

    .add-shadow-after-selected-425 {
        box-shadow: 0 1.5px 4px 0 rgba(0, 0, 0, 0.3) !important;
        border-radius: 17px !important;
    }

    .my-video {
        width: 100%;
        height: 100px;
        object-fit: cover;
        z-index: -100;
    }

    .vws_caption p {
        margin: 8px 0 8px 0;
        color: #656565;
        font-size: 14px;
    }

    .vws_caption a {
        color: #050f2f;
        text-transform: capitalize;
    }


    @media (max-width: 1024px) {
        .my-video {
            width: 100%;
            height: 200px;
            object-fit: cover;
            z-index: -100;
        }

        .vws_caption a {
            font-size: 25px;
        }

        .vws_caption p {
            font-size: 18px !important;
            line-height: 150%;
        }

        .vw_single {
            margin-bottom: 25px !important;
        }
    }


    @media (max-width: 425px) {
        .vws_caption a {
            font-size: 16px;
        }

        .my-video {
            width: 100%;
            height: 70px;
            object-fit: cover;
            z-index: -100;
        }

        .vws_caption p {
            margin: 3px 0 3px 0;
            color: #656565;
            font-size: 12px !important;
            line-height: 110%;
        }
    }

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
        /* border: 1px solid #ccc; */
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

    /* .vw_single .vws_video video {
              margin: 0;
              width: 100%;
              height: auto;
              max-width: 220px;
            } */

    .vw_single .vws_caption h5 {
        color: #F24336;
        margin: 0;
        font-size: 14px;
        font-weight: 600;
        line-height: 1.2;
        margin-bottom: 5px;
    }

    .simplebar-content-wrapper {
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

    #comments-section-1 ul {
        overflow: auto;
        overflow-x: hidden;
    }

    .profile_img_name {
        display: flex;
        align-items: flex-start;
    }

    .profile_img_name .post-section-artist-img {

        width: 70px;
        height: 70px;
        object-fit: cover;
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
        border-radius: 17px ;
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
    	 height: 4.5rem!important;
    	 width: 4.5rem!important;
    	 object-fit: cover;
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
	
		.tab-select .active{
            text-decoration: none solid #ff0093 2px!important;
    	}
   		.tab-select .active{
         	border-bottom: 2px solid #ff0a97!important;
    	}
    @media (max-width: 700px) {
   		.tab-select a{
			    padding: 5px 22px!important;
        		
    	}
    	
    
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
    	 height: 4.5rem!important;
    	 width: 4.5rem!important;
    	 object-fit: cover;
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
        background-color: #ff0093;
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


    @media (max-width: 1024px) {
        .image_wrapper .image_ratio {
            margin: 0;
            font-size: 27px;
            color: #0000004a;
            padding-top: 20px;
        }

        .image_wrapper .image_placeholder {
            margin-top: 10px;
            font-size: 30px;
            font-weight: 500;
            margin: 0px;
            color: #5D5D5D;
            padding-bottom: 20px;
        }

        .image_wrapper .image_placeholder span {
            font-size: 20px;
            color: gray;
            font-weight: 100;
            display: block;
            /* padding-top: 8px; */
        }
    }

    @media (max-width: 425px) {
        .image_wrapper .image_ratio {
            margin: 0;
            font-size: 20px;
            color: #0000004a;
            padding-top: 20px;
        }

        .image_wrapper .image_placeholder {

            font-size: 25px;
            font-weight: 500;
            margin: 0px;
            color: #5D5D5D;
            padding-bottom: 20px;
        }

        .image_wrapper .image_placeholder span {
            font-size: 15px;
            color: gray;
            font-weight: 100;
            display: block;
            line-height: 150%;
            margin-top: 7px;
        }
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?> Market <?php $__env->stopSection(); ?>
<?php $__env->startSection('bottom-navbar'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Modal -->
<div class="modal fade video-modal" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"><b class="color-pinkk">Pay $0.03 cents and Watch</b>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>You will be charged $0.03 cents if you watch this video. Do you wish to proceed? </p>
                <p>If you do not wish to be charged again each time you listen to this song, you have the option to click and Valyou this song
                    for an amount of your choice in order to receive unlimited plays of this song as well Vip artist-fan reward points the more you Valyou .</p>
                <p>Thank you. We appreciate your support. </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn valyou-g-btn playvideo" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <!--tri-angle-->
        <div class="row mt-4 ">
        <div class="container mb-3 mt-3 added-feature">
<!--         <div class="row ">
            <div class="col-4 col-md-4 text-center padding-r " >
                <div id="watch_videos" class="card shadow-none share-valyou-music" style="box-shadow: 0 1.5px 4px 0 rgb(0 0 0 / 23%) !important;border-radius: 28px;">
                    <div class="card-body body-p">
                        <img class="mb-2 share-box-image" src="<?php echo e(asset('assets/images/play-button.svg')); ?>">
                        <p class="card-text mobile-v">Watch</p>
                    </div>
                </div>
            </div>

            <div class="col-4 col-md-4 text-center padding-r ">
                <div id="earning_videos" class="card shadow-none share-comments" style="box-shadow: 0 1.5px 4px 0 rgb(0 0 0 / 23%) !important;border-radius: 28px;">
                    <div class="card-body body-p">
                        <img class="mb-2 share-box-image" src="<?php echo e(asset('assets/images/valyoux/bitcoinlogo.svg')); ?>">
                        <p class="card-text mobile-v">Earn</p>
                    </div>
                </div>
            </div>
            <div class="col-4 col-md-4 text-center padding-r ">
                <div id="valyousongs_videos" class="card shadow-none share-promote-song" style="box-shadow: 0 1.5px 4px 0 rgb(0 0 0 / 23%) !important;border-radius: 28px;">
                    <div class="card-body body-p">
                        <img class="mb-2 share-box-image" src="<?php echo e(asset('assets/images/player-bg.png')); ?>">
                        <p class="card-text mobile-v">Valyou Songs</p>
                    </div>
                </div>
            </div>
        </div> -->
         <div class="nav nav-tabs tab-select" id="nav-tab" role="tablist" bis_skin_checked="1">
                    <a href="#watch_videos" class="active watch_underline" id="watch_videos" data-toggle="pill" role="tab"
                        aria-controls="all" aria-selected="true">Watch</a>
                    <a href="#earning_videos" class="unclicked" id="earning_videos" data-toggle="pill" role="tab"
                        aria-controls="expression_of_interest" aria-selected="false">Earn</a>
                    <a class="unclicked" href="#valyousongs_videos" id="valyousongs_videos" data-toggle="pill" role="tab"
                        aria-controls="upcoming" aria-selected="false">Valyou Songs</a>
          </div>
    </div>
            <div id="watch_div" class="col-xl-8 col-md-12 col-12 col-sm-12" style="">
                <?php
                if (count($records) == 0) {
                ?>
                    <div class="card margin-n">
                        <div class="post-section card-body">
                            <h2>There is nothing to show</h2>
                        </div>
                    </div>
                <?php
                } else {
                ?>
                    <input type="hidden" name="user_id" id="user_id" value="<?php echo e($records[0]['user_id']); ?>">
                    <input type="hidden" name="id" id="id" value="<?php echo e($records[0]['id']); ?>">
                    <?php echo $__env->make('partician.all_videos',['videos'=>$records, 'display_ad' => "d-none"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php
                }
                ?>
            </div>

            <div id="watch_div2" class="col-xl-4 col-md-12 col-12 col-sm-12" style="display:none;">
                <div class="videothumbnail_wrapper card">
                    <div class="vw_head mt-3">
                        <h4>All Videos </h4>
                    </div>
                    <div class="all_videos"></div>
                </div>
            </div>

            <div id="earn_div" class="col-xl-12 col-md-12 col-12 col-sm-12" style="display:none;">
            <div class="card margin-n" style="margin-bottom: 20px">
				<div class="post-section card-body">
					<div class="col-lg-12 col-12 padding-n parent-for-video">
						<video id="video" src="https://myprojectstaging.com/valyouxmusic/public/assets/videos/drake-video.mp4" class="video"  type="video/mp4"   controls  playsinline ></video>
					</div>
					<!--new stuff-->

					<div class="song-caption">
						<h5 class="song_name">Started from the bottom</h5>
						<p class="song_valyou">Song Valyou: $10,000</p>
					</div>
					<div class="song_artist_sec">
						<img class="img-fluid rounded-circle" src="<?php echo e(URL::asset('assets/uploads/user/69619967.png')); ?>" alt="">
						<div class="sac_right">
							<h6 class="sc_artist_name">Drake</h6>
							<p class="sc_shareprice">Share Price: $2.33 VXD</p>
						</div>
					</div>


				</div>
			</div>
            <div class="card margin-n">
				<div class="post-section card-body">
	
					<div class="col-lg-12 col-12 padding-n parent-for-video">
						<video id="video" src="https://myprojectstaging.com/valyouxmusic/public/assets/videos/drake-video.mp4" class="video"  type="video/mp4"   controls  playsinline ></video>
						<div class="overlay-for-video" data-toggle="modal" data-target="#staticBackdrop">
							<img src="<?php echo e(asset('assets/images/play-button.svg')); ?>" class="rounded-circle" alt="">
						</div>

					<!-- Modal -->
					<div class="modal fade video-modal" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="staticBackdropLabel"><b class="color-pinkk">Pay $0.02 cents and listen</b></h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
						  <div class="modal-body">
							<p>You will be charged $0.02 cents if you listen to this song or watch this video. Do you wish to proceed? </p>
							<p>If you do not wish to be charged again, you have the option to click and Valyou the song for an amount of your choice to receive unlimited plays for this particular song and battle it out for Vip artist-fan rewards.</p>
							<p>Thank you for supporting </p>
							<b>Artist Name or Brand.</b>
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn valyou-g-btn" data-dismiss="modal">OK</button>
						  </div>
						</div>
					  </div>
					</div>

					</div>
					<!--new stuff-->

					<div class="song-caption">
						<h5 class="song_name">Started from the bottom</h5>
						<p class="song_valyou">Song Valyou: $10,000</p>
					</div>
					<div class="song_artist_sec">
						<img class="img-fluid rounded-circle" src="<?php echo e(URL::asset('assets/uploads/user/69619967.png')); ?>" alt="">
						<div class="sac_right">
							<h6 class="sc_artist_name">Drake</h6>
							<p class="sc_shareprice">Share Price: $2.33 VXD</p>
						</div>
					</div>


				</div>
			</div>

			<div  style="display: none" class="mt-3" id="sharing-section-1">
				<div class="w-100 user-chat">
					<div class="card">
						<div class="col-md-12 container">
							<ul class="list-unstyled mt-3" data-simplebar style="max-height: 470px;">
								<li>
									<!--new working -->
									<div class="row">
										<div class="col-12 single-comment">
											<img src="<?php echo e(URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png')); ?>" alt="" class="avatar-md rounded-circle sc-img img-fluid">
											<div class="sc-inner">
												<p class="sc-name artist-comment-name">Kanye West</p>
												<p class="sc-comment" >dope artist i had invest dope artist i had invest dope artist i had invest. dope artist i had invest dope artist i had invest dope artist i had invest dope artist i had invest dope artist i had invest dope artist i had invest dope artist i had invest dope artist i had invest dope artist i had invest dope artist i had invest dope artist i had invest </p>
											</div>
										</div>
									</div>


									<hr class="mb-2">
								</li>
								<li>
									<div class="row">
										<div class="col-12 single-comment">
											<img src="<?php echo e(URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png')); ?>" alt="" class="avatar-md rounded-circle sc-img img-fluid">
											<div class="sc-inner">
												<p class="sc-name artist-comment-name">Kanye West</p>
												<p class="sc-comment" >Awesome artist I would like to invest now!</p>
											</div>
										</div>
									</div>
									<hr class="mb-2">
								</li>
								<li>
									<div class="row">
										<div class="col-12 single-comment">
											<img src="<?php echo e(URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png')); ?>" alt="" class="avatar-md rounded-circle sc-img img-fluid">
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
										<img src="<?php echo e(URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png')); ?>" alt="" class="avatar-md rounded-circle ">
									</div>
								</div>
								<div class="col-md-8 mt-3 mt-0-mobile col-8 pad-left-0">
									<div class="position-relative">
										<input type="text" class="form-control chat-input" placeholder="Enter Comment...">
									</div>
								</div>
								<div class="col-md-2 col-2">
									<img style="transform: rotate(90deg);" class="mr-3 comment-btn" style="height:30px; width:30px" src="<?php echo e(asset('assets/images/valyoux/green_arrow_price_going_up.svg')); ?>">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div style="display: none;" id="sharing-section-2" >
				<div class="container">
					<div class="btn-margin">
						<div class="row">
							<div class="col-1 col-md-1">
							</div>
							<div class="col-2 col-md-2">
								<button type="button" class=" btn btn-light radio dollar-price " data-toggle="tooltip" data-placement="top" data-original-title="This song is nice, might be a hit, Valyou for $1." class="btn btn-light radio" >$1</button>
							</div>
							<div class="col-2 col-md-2" >
								<button type="button" class=" btn btn-light radio dollar-price " data-toggle="tooltip" data-placement="top" data-original-title="This song is nice, might be a hit, Valyou for $2." class="btn btn-light radio" >$2</button>
							</div>
							<div class="col-2 col-md-2 ">
								<button type="button" class=" btn btn-light radio dollar-price " data-toggle="tooltip" data-placement="top" data-original-title="This song is nice, might be a hit, Valyou for $3." class="btn btn-light radio" >$3</button>
							</div>
							<div class="col-2 col-md-2 ">
								<button type="button" class=" btn btn-light radio dollar-price " data-toggle="tooltip" data-placement="top" data-original-title="This song is nice, might be a hit, Valyou for $4." class="btn btn-light radio" >$4</button>
							</div>
							<div class="col-2 col-md-2 ">
								<button type="button" class=" btn btn-light radio dollar-price " data-toggle="tooltip" data-placement="top" data-original-title="This song is nice, might be a hit, Valyou for $5." class="btn btn-light radio" >$5</button>
							</div>
						</div>
					</div>
					<div style="display: none;" class="container col-md-12 text-center mb-5 proceed-valyou-song-div" >
						<button type="button" class="btn valyou-g-btn" data-toggle="modal" data-target="#proceedModal"> Proceed to Valyou Song</button>
					</div>
				</div>
			</div>

			<div  style="display: none;" id="sharing-section-3" >
				<div class="container">
					<div >
						<div class="card text-center">
							<h2 style="color: #000000;font-size: 13px; margin: 15px auto ; text-align: center;padding: 7px 12px;">Invite a friend, new fans & potential investors to listen to your song</h2>
							<br>
							<div class="card-body price-card" >
								<div class="row">
									<div class="col-md-3"></div>
									<div class="col-md-6">
										<div class="input-price-div">
											<p >How much do you want to spend?</p>
										</div>
									</div>
									<div class="col-md-3"></div>
								</div>
								<div class="quantity">
									<input type='button' value='-' id="minus"  class='minus' field='quantity' />
									<span class="input-qty pt-3"></span><input type='text' name='quantity' value='25' class='qty input-qty dollar' />
									<input type='button' value='+' id="plus"  class='plus ' field='quantity' />
								</div>
							</div>
							<br><br><br>
							<h2 style="font-size: 13px; margin: auto 0 0; text-align: center; padding: 0 20px 20px; color: #000000;">Who would you like to pay to listen to your song so they may invest in you.</h2>
						</div>
						<div class="col-md-4 mb-2">
							<img class="mr-3"style="height:30px; width:30px" src="<?php echo e(asset('assets/images/Headphone investor.svg')); ?>">
						</div>
						<div class="row mb-5">
							<div class="col-md-4">
								<h2 class="fw-600">Investors on Valyou X </h2>
								<select class="select2-ajax select2-multiple"  multiple="multiple"></select>
							</div>
							<!--<div class="col-md-4  ">    -->
							<!--    <h2 class="fw-600">Investors on Valyou X </h2>-->
							<!--</div>-->
							<div class="col-md-4 ">
								<h2 class="fw-600">Email ID</h2>
								<input type="text"  data-role="tagsinput" placeholder="Add Emails" class="form-control" />
							</div>
							<div class="col-md-4 ">
								<h2 class="fw-600">Phone number</h2>
								<input class="form-control number-input-music" placeholder="Enter Number" type="number">
							</div>
						</div>
						<br>
						<div class="row mb-5">
							<div class="col-md-6 text-center mb-3">
								<div class="card client-input shadow-lg">
									<img src="<?php echo e(asset('assets/images/PReward per listen .svg')); ?>" class="">
									<div class="card-body">
										<p class="card-text">Reward each listener. Amount you would like to pay each listener. <br> Min $0.10 VXD - Max $1.00 VXD</p>
										<input type='button' value='-' class='minus' id="minus2" field='quantity2' />
										<span class="input-qty pt-3"></span> <input type='text' name='quantity2' value='25' class='qty input-qty pt-3' />
										<input type='button' value='+' class='plus ' id="plus2" field='quantity2' />
									</div>
								</div>
							</div>
							<div class="col-md-6 text-center mb-3">
								<div class="card client-input">
									<img src="<?php echo e(asset('assets/images/send-_promote_start.svg')); ?>">
									<div class="card-body">
										<p class="card-text">How much of your budget would you like to spend per day ? </p>
										<input type='button' value='-' class='minus' id="minus3" field='quantity3' />
										<span class="input-qty pt-3"></span> <input type='text' name='quantity3' value='25' class='qty input-qty pt-3' />
										<input type='button' value='+' class='plus '  id="plus3" field='quantity3' />
									</div>
								</div>
							</div>
						</div>
						<br>
						<div class="row col-md-12">
						</div>
						<br> <br>
						<div class="col-md-12 text-center ">
							<img class="mr-2 mb-2"  src="<?php echo e(asset('assets/images/send-_promote_start.svg')); ?>">
							<h2>Send / Start</h2>
							<h5 class="font-size-14 mb-3 text-center">Share it on</h5>
							<div class="mt-4 text-center row">
								<div class="col-lg-12">
									<ul class="list-inline">
										<li class="list-inline-item">
											<a href="#" class="social-list-item bg-primary text-white border-primary">
											<i class="mdi mdi-facebook"></i>
											</a>
										</li>
										<li class="list-inline-item">
											<a href="#" class="social-list-item bg-info text-white border-info">
											<i class="mdi mdi-twitter"></i>
											</a>
										</li>
										<li class="list-inline-item">
											<a href="#" class="social-list-item bg-danger text-white border-danger">
											<i class="mdi mdi-google"></i>
											</a>
										</li>
										<li class="list-inline-item">
											<a href="#" class="social-list-item  text-white ">
											<img src="<?php echo e(asset('assets/images/valyou_xemblem.svg')); ?>" alt="" height="30">
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container mb-3 mt-3">
				<div class="row ">
					<div class="col-4 col-md-4 text-center padding-r ">
						<div class="card shadow-none" id="share-valyou-music">
							<div class="card-body body-p">
								<img class="mb-2 share-box-image" src="<?php echo e(asset('assets/images/valyoux/valyousongiconnew@2x.png')); ?>">
								<p class="card-text mobile-v">Valyou Song</p>
							</div>
						</div>
					</div>
					<div class="col-4 col-md-4 text-center padding-r ">
						<div class="card shadow-none" id="share-comments">
							<div class="card-body body-p">
								<img class="mb-2 share-box-image" src="<?php echo e(asset('assets/images/comments.svg')); ?>">
								<p class="card-text mobile-v">Comments</p>
							</div>
						</div>
					</div>
					<div class="col-4 col-md-4 text-center padding-r ">
						<div class="card shadow-none" id="share-promote-song">
							<div class="card-body body-p">
								<img class="mb-2 share-box-image" src="<?php echo e(asset('assets/images/promote.svg')); ?>">
								<p class="card-text mobile-v">Promote</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<!--new desc text-->
					<div class="social-media-profile-wrap">
						<div class="sm-left-wrap">
							<img src="http://myprojectstaging.com/valyouxmusic/public/assets/images/valyoux/drake-valyou_x_music@2x.png" alt="" class="avatar-md rounded-circle">
							<div class="sm-left-desc">
								<h5>Artist share price</h5>
								<h2>Drake $2.33VXD</h2>
								<p><i class="fa fa-clock-o" aria-hidden="true"></i>  Major Artist</p>
							</div>
						</div>
						<div class="sm-right-wrap">
							<button type="button" class="btn-invest-pink-grad" onclick="location.href ='http://myprojectstaging.com/valyouxmusic/public/crypto-exchange'"> Invest in Artist</button>
						</div>
					</div>
					<!--new desc text end-->

				</div>
			</div>
			<div class="card ">
				<div class="card-body">
					<div id="sponsored-section mt-3" class="row">
						<div class="col-lg-12 col-12 mt-3">
							<p class="sponsored-section-p1">Sponsored Ad</p>
							<div class="sponsered-inner">
								<p class="green-one">Current offer $40.00 For  24 hours </p>
								<p class="pink-one">Bid Now</p>
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
									<button type="button" class="btn valyou-o-btn-invest-lg"> Watch & Earn $3</button>
								</div>
								<div class="col-lg-3 col-2">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            </div>

            <div id="valyou_songs_div" style="display:none;"> 
            <div class="row mt-4 ">
            <div class="col-lg-12 col-12">

                
                <div class="all_social_videos"></div>
                

            </div>
            
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
                            <input id="uploadbid" type="file" />
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
                                    <input type='button' value='-' id="minus" class='minus' field='quantity' />
                                    <input type='text' name='quantity' value='25' class='qty input-qty dollar' />
                                    <input type='button' value='+' id="plus" class='plus ' field='quantity' />
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
<!-- <script src="<?php echo e(URL::asset('assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js')); ?>"></script> -->

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/multiselect/2.2.9/js/multiselect.js"></script> -->
<script src="<?php echo e(URL::asset('assets/libs/axios/axios.min.js')); ?>"></script>
<!-- <script src="<?php echo e(URL::asset('assets/js/plugins/jquery-validation/js/jquery.validate.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/js/plugins/jquery-validation/js/additional-methods.min.js')); ?>"></script> -->
<script src="<?php echo e(URL::asset('assets/libs/tagify/tagify.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/intl-tel-input/js/intlTelInput.js')); ?>"></script>
<script class="iti-load-utils" async="" src="<?php echo e(URL::asset('assets/libs/intl-tel-input/js/utils.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script-bottom'); ?>
<script>
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
    $(document).ready(function() {
    	
        loadMoreData(0, $('#id').val());
        // Valyou Song Start
        $('.investors').select2({
            placeholder: 'Choose investors...'
        });
        // $('#earn_div').load('<?php echo e(URL::to("videos")); ?>');
    	
        $('#watch_videos').click(function() {
            $("#watch_div").css("display", "block");
            $("#watch_div2").css("display", "block");
            $("#earn_div").css("display", "none");
            $("#valyou_songs_div").css("display", "none");
        });
        $('#earning_videos').click(function() {
            $("#watch_div").css("display", "none");
            $("#watch_div2").css("display", "none");
            $("#earn_div").css("display", "block");
            $("#valyou_songs_div").css("display", "none");
        });
        $('#valyousongs_videos').click(function() {
            $("#watch_div").css("display", "none");
            $("#watch_div2").css("display", "none");
            $("#earn_div").css("display", "none");
            $("#valyou_songs_div").css("display", "block");
        });
    });
    
    $(document).on('click', '.close-btn-promote-song-section', function() {
        let id = $(this).data('promoteid');
        $(`#promote-song-section-${id}`).css('display', 'none');
        $('.added-feature .card .body-p').removeClass('add-shadow-after-selected-425');
        $('.added-feature .card .body-p').removeClass('add-shadow-after-selected');
    })


    $(document).on('click', '.added-feature .card .body-p', function() {
        if ($(window).width() <= 425) {
            $('.added-feature .card .body-p').removeClass('add-shadow-after-selected-425');
            $('.added-feature .card .body-p').removeClass('add-shadow-after-selected');
            $(this).addClass('add-shadow-after-selected-425');
        } else {
            $('.added-feature .card .body-p').removeClass('add-shadow-after-selected-425');
            $('.added-feature .card .body-p').removeClass('add-shadow-after-selected');
            $(this).addClass('add-shadow-after-selected');
        }
    });

    $(document).on('click', '.loadbtn', function() {
        $(".loadbtn").html(' <i style="color: #46c899;"  class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Loading...');
        // $(".loadbtn").hide();
        var pId = $(this).data("id");
        var id = $(this).data("id");
        loadMoreData(pId, id);
    });

    function loadMoreData(page, id) {
        $.ajax({
            url: "loadmorevideos",
            type: "GET",
            cache: false,
            data: {
                offset: page,
                id: id
            },
            success: function(data) {
                if (data) {
                    const data1 = JSON.parse(data);
                    $(".loadbtn").hide();
                    $(".all_videos").append(data1.html);

                }
            }
        });
    }

    var email_input = document.querySelector('input[name=email-promote]')
    var email_tagify = new Tagify(email_input, {
        dropdown: {
            position: "input",
            enabled: 0 // always opens dropdown when input gets focus
        },
        // pattern: /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@(?:\S{1,63})$/
        transformTag: function(tagData) {
            // example of basic custom validation
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            if (!emailReg.test(tagData.value)) {
                tagData.value = '';
                alert('Please enter a valid email address!');
            }
        }
    });

    var sms_input = document.querySelector('input[name=sms-promote]')
    var sms_tagify = new Tagify(sms_input, {
        dropdown: {
            position: "input",
            enabled: 0 // always opens dropdown when input gets focus
        },
        transformTag: function(tagData) {
            // example of basic custom validation
            //https://www.twilio.com/docs/glossary/what-e164#regex-matching-for-e164
            var emailReg = /^\+[1-9]\d{1,14}$/;
            if (!emailReg.test(tagData.value)) {
                tagData.value = '';
                alert('Please enter a valid phone number(E. 164 formatting)!');
            }
        }
    });

    phone_number = window.intlTelInput(document.querySelector('input[name=phone-promote]'), ({
        autoPlaceholder: "polite",
        formatOnDisplay: true,
        placeholderNumberType: "MOBILE",
        separateDialCode: true,
        hiddenInput: "full",
        utilsScript: "<?php echo e(URL::asset('assets/libs/intl-tel-input/js/utils.js')); ?>"
    }));

    $('input[name=phone-promote]').keypress(function(event) {
        
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if (keycode == '13' || keycode == '44' || event.key == "Escape") {
            event.preventDefault();
            sms_tagify.addTags(phone_number.getNumber());
            $(this).val('');
        }
    });

    $('input[name=phone-promote]').blur(function() {
        sms_tagify.addTags(phone_number.getNumber());
        $(this).val('');
    });

    function promoteVideo(video_id) {
        var formdata = $('#promotevideo-form-' + video_id).serialize();
        $.ajax({
            url: 'promotevideo/' + video_id,
            type: "POST",
            cache: false,
            data: formdata,
            beforeSend: function() {
                $(".promote-btn-" + video_id).attr("disabled", true);
            },
            success: function(data) {
                if (data) {
                    if (data.type == 'error') {
                        js_error(data.msg);
                    } else {
                        js_success(data.msg);
                    }

                    $(".promote-btn-" + video_id).attr("disabled", false);
                }
            }
        });
    }

    // investors list with avatar
    var inputElm = document.querySelector('input[name=investor-list]');

    function tagTemplate(tagData) {
        return `
            <tag title="${tagData.email}"
                    contenteditable='false'
                    spellcheck='false'
                    tabIndex="-1"
                    class="tagify__tag ${tagData.class ? tagData.class : ""}"
                    ${this.getAttributes(tagData)}>
                <x title='' class='tagify__tag__removeBtn' role='button' aria-label='remove tag'></x>
                <div>
                    <div class='tagify__tag__avatar-wrap'>
                        <img onerror="this.style.visibility='hidden'" src="${tagData.avatar}">
                    </div>
                    <span class='tagify__tag-text'>${tagData.name}</span>
                </div>
            </tag>
        `
    }

    function suggestionItemTemplate(tagData) {
        return `
            <div ${this.getAttributes(tagData)}
                class='tagify__dropdown__item ${tagData.class ? tagData.class : ""}'
                tabindex="0"
                role="option">
                ${ tagData.avatar ? `
                <div class='tagify__dropdown__item__avatar-wrap'>
                    <img onerror="this.style.visibility='hidden'" src="${tagData.avatar}">
                </div>` : ''
                }
                <strong>${tagData.name}</strong>
                <span>${tagData.email}</span>
            </div>
        `
    }

    <?php
    $user_list = array();
    foreach ($users as $user) {
        array_push($user_list, array(
            "value" => $user->id,
            "name" => $user->first_name . " " . $user->last_name,
            "avatar" => asset($user->avatar),
            "email" => $user->email
        ));
    }
    ?>
    var $user_json = <?php echo json_encode($user_list); ?>;
    var whitelist = $user_json;
    // initialize Tagify on the above input node reference
    var tagify = new Tagify(inputElm, {
        tagTextProp: 'name', // very important since a custom template is used with this property as text
        enforceWhitelist: true,
        skipInvalid: true, // do not remporarily add invalid tags
        dropdown: {
            position: "input",
            closeOnSelect: false,
            enabled: 0,
            classname: 'users-list',
            searchKeys: ['name', 'email'], // very important to set by which keys to search for suggesttions when typing
        },
        templates: {
            tag: tagTemplate,
            dropdownItem: suggestionItemTemplate
        },
        whitelist: whitelist
    })

    tagify.on('dropdown:show dropdown:updated', onDropdownShow)
    tagify.on('dropdown:select', onSelectSuggestion)

    var addAllSuggestionsElm;

    function onDropdownShow(e) {
        var dropdownContentElm = e.detail.tagify.DOM.dropdown.content;

        if (tagify.suggestedListItems.length > 1) {
            addAllSuggestionsElm = getAddAllSuggestionsElm();

            // insert "addAllSuggestionsElm" as the first element in the suggestions list
            dropdownContentElm.insertBefore(addAllSuggestionsElm, dropdownContentElm.firstChild)
        }
    }

    function onSelectSuggestion(e) {
        if (e.detail.elm == addAllSuggestionsElm)
            tagify.dropdown.selectAll();
    }

    // create a "add all" custom suggestion element every time the dropdown changes
    function getAddAllSuggestionsElm() {
        // suggestions items should be based on "dropdownItem" template
        return tagify.parseTemplate('dropdownItem', [{
            class: "addAll",
            name: "Add all",
            email: tagify.whitelist.reduce(function(remainingSuggestions, item) {
                return tagify.isTagDuplicate(item.value) ? remainingSuggestions : remainingSuggestions + 1
            }, 0) + " Members"
        }])
    }



    $(document).on('click','.overlay-for-video',function () {
        let id = $(this).data('videoid');
        let brand =$(this).data('brand');
        let userId = $(this).data('userid');
        let video = $(this).data('video');
        $('#brandName').html(brand);
        if(video == 1){
            $(`#video`+id).trigger('play');
            $(`#overlay`+id).remove();

        }else{
            $('#staticBackdrop').modal('show');
            $('button.playvideo').attr('id',`${id}`);
        }
    });

    $(document).on('click', '.playvideo', function() {
        var id = $(this).attr('id');
        let userId = $(`#overlay${id}`).data('userid');
        let wallet = "<?php echo e(auth()->user()->wallet); ?>";
        console.log(wallet);
        if (Number(wallet) > 0.03) {
            axios({
                method: "post",
                url: "<?php echo e(route('admin.valyousong')); ?>",
                data: {
                    id: id,
                    userId
                }
            }).then((res) => {
                console.log(res);
                // js_success("Enjoy this a lot!");
                $(`#video${id}`).trigger('play');
                $(`#overlay${id}`).remove();
            }).catch((err) => {
                throw err;
            });
        } else {
            js_error("You don't have sufficient amount in your wallet to play this Video.");
        }
    });

    $(document).ready(function() {

        $(document).on('click', '.vertical-menu-btn', function() {
            if ($(window).width() <= 768) {
                if ($("boddy").hasClass("vertical-collpsed")) {

                } else {
                    if ($("body").hasClass("sidebar-enable")) {
                        $('#uploading-section-artist-mobile').removeClass('uploading-section-artist-mobile');
                        $('.scrolling-wrapper').addClass('scrolling-wrapper-display');
                    } else {
                        $('#uploading-section-artist-mobile').addClass('uploading-section-artist-mobile');
                        $('.scrolling-wrapper').removeClass('scrolling-wrapper-display');
                    }
                }
            }
        });

        loadmoresocialdata(0, 'all');
        <?php if(request()->segment(2) == "watch-to-earn"){
            echo "loadmoreData(0, 'watch-to-earn');";
        }elseif(request()->segment(2) == "listen-to-earn"){
            echo "loadmoreData(0, 'listen-to-earn');";
        }else
            echo "loadmoreData(0);";
        ?>
        

        //web version -> Loading artists
        $(document).on('click', '.loadbtn', function() {
            var pId = $(this).data("id");
            var tab = $(this).data("tab");
            loadmoresocialdata(pId, tab, 1);
        });

        $(".sorting").on("click", function() {
            var type = $(this).attr('type');
            loadmoresocialdata(0, type);
        });

        // up & down button
        $(document).on('click', '.up-change-stock', function() {
            var tab = $(".artist-maker-tabs").find(".active").attr("aria-controls");
            loadmoresocialdata(0, tab, 0, 'up');
        });

        $(document).on('click', '.down-change-stock', function() {
            var tab = $(".artist-maker-tabs").find(".active").attr("aria-controls");
            loadmoresocialdata(0, tab, 0, 'down');
        });

        //mobile version -> Loading artists
        $(document).on('click', '.loadbtnvideos', function() {
            $(".loadbtnvideos").html('<i style="color: #46c899;"  class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Loading...');
            var pId = $(this).data("id");
            loadmoreData(pId);
        });

        // Valyou Song En
        function loadmoresocialdata(page, tabId, loadingMore = 0, filter = '') {
            $.ajax({
                url: "loadmoresocialdata",
                type: "GET",
                cache: false,
                data: {
                    offset: page,
                    tabId: tabId,
                    filter: filter
                },
                beforeSend: function() { // Before we send the request, remove the .hidden class from the spinner and default to inline-block.
                    if (loadingMore == 1) {
                        $(".loadbtn").remove();
                        $(".loading-btn").html(' <i style="color: #46c899;"  class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Loading...');
                    }
                },
                success: function(data) {
                    if (data) {
                        const data1 = JSON.parse(data);

                        if (page) {
                            $(".tab_" + tabId).append(data1.web);
                            $(".mtab_" + tabId).append(data1.mobile);
                        } else {
                            $(".tab_" + tabId).html(data1.web);
                            $(".mtab_" + tabId).html(data1.mobile);
                        }
                    }
                },
                complete: function(data) { // Set our complete callback, adding the .hidden class and hiding the spinner.
                    if (loadingMore == 1)
                        $(".loading-btn").html('');
                },
            });
        }

        function loadmoreData(page, type) {
            $.ajax({
                url: "loadmoredata",
                type: "GET",
                cache: false,
                data: {
                    offset: page,
                    page_type: type
                },
                success: function(data) {
                    if (data) {
                        const data1 = JSON.parse(data);
                        $(".loadbtnvideos").hide();
                        $(".all_social_videos").append(data1.html);
                    }
                }
            });
        }
    });

    const slider = document.querySelector('.scrolling-wrapper-lower');
    let isDown = false;
    let startX;
    let scrollLeft;
    slider.addEventListener('mousedown', (e) => {
        console.log('mousedown');
        isDown = true;
        slider.classList.add('active');
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    });
    slider.addEventListener('mouseleave', () => {
        console.log('mouseleave');
        isDown = false;
        slider.classList.remove('active');
    });
    slider.addEventListener('mouseup', () => {
        isDown = false;
        slider.classList.remove('active');
    });
    slider.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 3; //scroll-fast
        slider.scrollLeft = scrollLeft - walk;
        console.log(walk);
    });


    $(document).on('click', '.added-feature .card .body-p', function() {
        if ($(window).width() <= 425) {
            $('.added-feature .card .body-p').removeClass('add-shadow-after-selected-425');
            $('.added-feature .card .body-p').removeClass('add-shadow-after-selected');
            $(this).addClass('add-shadow-after-selected-425');
        } else {
            $('.added-feature .card .body-p').removeClass('add-shadow-after-selected-425');
            $('.added-feature .card .body-p').removeClass('add-shadow-after-selected');
            $(this).addClass('add-shadow-after-selected');
        }
    });

    $(document).on('click', '.close-btn-promote-song-section', function() {
        let id = $(this).data('promoteid');
        $(`#promote-song-section-${id}`).css('display', 'none');
        $('.added-feature .card .body-p').removeClass('add-shadow-after-selected-425');
        $('.added-feature .card .body-p').removeClass('add-shadow-after-selected');
    });

    $(document).on('click','.share-promote-song',function () {
        let id = $(this).data('promoteid');
        $(`#valyou-music-section-${id}`).css('display','none');
        $(`#comments-section-${id}`).css('display','none');
        $(`#promote-song-section-${id}`).css('display','block');

        // var email_input = document.querySelector('input[name=email-promote]');
        var email_input = document.getElementById('promoteemail'+id);
        var email_tagify = new Tagify(email_input, {
            dropdown: {
                position: "input",
                enabled: 0 // always opens dropdown when input gets focus
            },
            // pattern: /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@(?:\S{1,63})$/
            transformTag: function(tagData) {
                // example of basic custom validation
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                if (!emailReg.test(tagData.value)) {
                    tagData.value = '';
                    alert('Please enter a valid email address!');
                }
            }
        });

        // var sms_input = document.querySelector('input[name=sms-promote]')
        var sms_input = document.getElementById('promotephone'+id);
        var sms_tagify = new Tagify(sms_input, {
            dropdown: {
                position: "input",
                enabled: 0 // always opens dropdown when input gets focus
            },
            transformTag: function(tagData) {
                // example of basic custom validation
                //https://www.twilio.com/docs/glossary/what-e164#regex-matching-for-e164
                var emailReg = /^\+[1-9]\d{1,14}$/;
                if (!emailReg.test(tagData.value)) {
                    tagData.value = '';
                    alert('Please enter a valid phone number(E. 164 formatting)!');
                }
            }
        });

        phone_number = window.intlTelInput(document.getElementById('phone'+id), ({
            autoPlaceholder: "polite",
            formatOnDisplay: true,
            placeholderNumberType: "MOBILE",
            separateDialCode: true,
            hiddenInput: "full",
            utilsScript: "<?php echo e(URL::asset('assets/libs/intl-tel-input/js/utils.js')); ?>"
        }));

        $('#phone'+id).keypress(function(event) {
            var keycode = (event.keyCode ? event.keyCode : event.which);
            if (keycode == '13' || keycode == '44' || event.key == "Escape") {
                event.preventDefault();
                sms_tagify.addTags(phone_number.getNumber());
                $(this).val('');
            }
        });

        $("#phone"+id).blur(function() {
            sms_tagify.addTags(phone_number.getNumber());
            $(this).val('');
        });

        // investors list with avatar
        // var inputElm = document.querySelector('input[name=investor-list]');
        // var inputElm = document.querySelector('input[name=investor-list]');
        var inputElm = document.getElementById('investorlist'+id);

        function tagTemplate(tagData) {
            return `
                <tag title="${tagData.email}"
                        contenteditable='false'
                        spellcheck='false'
                        tabIndex="-1"
                        class="tagify__tag ${tagData.class ? tagData.class : ""}"
                        ${this.getAttributes(tagData)}>
                    <x title='' class='tagify__tag__removeBtn' role='button' aria-label='remove tag'></x>
                    <div>
                        <div class='tagify__tag__avatar-wrap'>
                            <img onerror="this.style.visibility='hidden'" src="${tagData.avatar}">
                        </div>
                        <span class='tagify__tag-text'>${tagData.name}</span>
                    </div>
                </tag>
            `
        }

        function suggestionItemTemplate(tagData) {
            return `
                <div ${this.getAttributes(tagData)}
                    class='tagify__dropdown__item ${tagData.class ? tagData.class : ""}'
                    tabindex="0"
                    role="option">
                    ${ tagData.avatar ? `
                    <div class='tagify__dropdown__item__avatar-wrap'>
                        <img onerror="this.style.visibility='hidden'" src="${tagData.avatar}">
                    </div>` : ''
                    }
                    <strong>${tagData.name}</strong>
                    <span>${tagData.email}</span>
                </div>
            `
        }

        <?php
        $user_list = array();
        foreach ($users as $user) {
            array_push($user_list, array(
                "value" => $user->id,
                "name" => $user->first_name . " " . $user->last_name,
                "avatar" => asset($user->avatar),
                "email" => $user->email
            ));
        }
        ?>
        var $user_json = <?php echo json_encode($user_list); ?>;
        var whitelist = $user_json;
        // initialize Tagify on the above input node reference
        var tagify = new Tagify(inputElm, {
            tagTextProp: 'name', // very important since a custom template is used with this property as text
            enforceWhitelist: true,
            skipInvalid: true, // do not remporarily add invalid tags
            dropdown: {
                position: "input",
                closeOnSelect: false,
                enabled: 0,
                classname: 'users-list',
                searchKeys: ['name', 'email'], // very important to set by which keys to search for suggesttions when typing
            },
            templates: {
                tag: tagTemplate,
                dropdownItem: suggestionItemTemplate
            },
            whitelist: whitelist
        })

        tagify.on('dropdown:show dropdown:updated', onDropdownShow)
        tagify.on('dropdown:select', onSelectSuggestion)

        var addAllSuggestionsElm;

        function onDropdownShow(e) {
            var dropdownContentElm = e.detail.tagify.DOM.dropdown.content;

            if (tagify.suggestedListItems.length > 1) {
                addAllSuggestionsElm = getAddAllSuggestionsElm();

                // insert "addAllSuggestionsElm" as the first element in the suggestions list
                dropdownContentElm.insertBefore(addAllSuggestionsElm, dropdownContentElm.firstChild)
            }
        }

        function onSelectSuggestion(e) {
            if (e.detail.elm == addAllSuggestionsElm)
                tagify.dropdown.selectAll();
        }

        // create a "add all" custom suggestion element every time the dropdown changes
        function getAddAllSuggestionsElm() {
            // suggestions items should be based on "dropdownItem" template
            return tagify.parseTemplate('dropdownItem', [{
                class: "addAll",
                name: "Add all",
                email: tagify.whitelist.reduce(function(remainingSuggestions, item) {
                    return tagify.isTagDuplicate(item.value) ? remainingSuggestions : remainingSuggestions + 1
                }, 0) + " Members"
            }])
        }
    });

    function promoteVideo(video_id) {
        var formdata = $('#promotevideo-form-' + video_id).serialize();
        $.ajax({
            url: 'promotevideo/' + video_id,
            type: "POST",
            cache: false,
            data: formdata,
            beforeSend: function() {
                $(".promote-btn-" + video_id).attr("disabled", true);
            },
            success: function(data) {
                if (data) {
                    if (data.type == 'error') {
                        js_error(data.msg);
                    } else {
                        js_success(data.msg);
                    }

                    $(".promote-btn-" + video_id).attr("disabled", false);
                }
            }
        });
    }

// Play Video in 
<?php if(request()->segment(2) == "watch-to-earn"){
?>
$(document).on('click','.overlay-for-video',function () {
    let id = $(this).data('videoid');
    let brand =$(this).data('brand');
    let userId = $(this).data('userid');
    let video = $(this).data('video');
    
    $('#brandName-watch-to-earn').html(brand);
    $('#reward').html($(this).data('reward'));
    if(video == 1){
        $(`#video`+id).trigger('play');
        $(`#overlay`+id).remove();

    }else{
        $('#watch-to-earn').modal('show');
        $('button.playvideo').attr('id',`${id}`);
    }
});

$(document).on('click', '.playvideo', function() {
    
    // video ID
    var id = $(this).attr('id');
    //artist ID
    let userId = $(`#overlay${id}`).data('userid');
    //promotion ID
    let promotionDetailsID = $(`#overlay${id}`).data('promotion-details-id');
    
    axios({
        method: "post",
        url: "<?php echo e(route('admin.promotereward')); ?>",
        data: {
            id: id,
            userId,
            promotion_details_id: promotionDetailsID,
            brand: $(`#overlay${id}`).data('brand')
        }
    }).then((res) => {
        console.log(res);
        // js_success("Enjoy this a lot!");
        $(`#video${id}`).trigger('play');
        $(`#overlay${id}`).remove();
    }).catch((err) => {
        throw err;
    });
});
<?php
}elseif(request()->segment(2) == "listen-to-earn"){
    
}else{
?>
$(document).on('click','.overlay-for-video',function () {
    let id = $(this).data('videoid');
    let brand =$(this).data('brand');
    let userId = $(this).data('userid');
    let video = $(this).data('video');
    $('#brandName').html(brand);
    if(video == 1){
        $(`#video`+id).trigger('play');
        $(`#overlay`+id).remove();

    }else{
        $('#staticBackdrop').modal('show');
        $('button.playvideo').attr('id',`${id}`);
    }
});

$(document).on('click', '.playvideo', function() {
    var id = $(this).attr('id');
    let userId = $(`#overlay${id}`).data('userid');
    let wallet = "<?php echo e(auth()->user()->wallet); ?>";
    console.log(wallet);
    if (Number(wallet) > 0.03) {
        axios({
            method: "post",
            url: "<?php echo e(route('admin.valyousong')); ?>",
            data: {
                id: id,
                userId
            }
        }).then((res) => {
            console.log(res);
            // js_success("Enjoy this a lot!");
            $(`#video${id}`).trigger('play');
            $(`#overlay${id}`).remove();
        }).catch((err) => {
            throw err;
        });
    } else {
        js_error("You don't have sufficient amount in your wallet to play this Video.");
    }
});
<?php
}
?>

// Play to earn Video
</script>

<?php
if (Session::has('error')) {
?>
    <script type="text/javascript">
        swal("<?php echo e(Session::get('error')); ?>");
    </script>
<?php }
if (Session::has('success')) {
?>
    <script type="text/javascript">
        swal("<?php echo e(Session::get('success')); ?>");
    </script>
<?php } ?>

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/watch.blade.php ENDPATH**/ ?>