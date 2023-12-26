@section('pageCSS')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/select2/select2.min.css') }}">
<!-- <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.css') }}"> -->
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/tagify/tagify.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/pages/social-media.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/intl-tel-input/css/intlTelInput.css') }}">
@endsection

<style>
    .added-feature .card {
        margin-bottom: 0px !important;
        height: unset !important;
        cursor: pointer;
    }
    @media (max-width: 768px){
        .body-p {
            padding: 17px 0px 17px 0px !important;
        }   
        .spycustcomment{
            top:13px;
        }
    }
    .alternative-cover-image {
        width: 100%;
        height: 100%;
        max-height: 500px;
        object-fit: cover;
    }


    @media (max-width: 1024px) {
        .alternative-cover-image {
            max-height: 350px;
            object-fit: cover;
        }
    }

    @media (max-width: 525px) {
        .alternative-cover-image {
            max-height: 200px;
            object-fit: cover;
        }
    }

    .avatar-md-cover {
        object-fit: cover;
    }
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

    /* .simplebar-content-wrapper {
        overflow: hidden !important;
    } */

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
        background-color: #8d8b8b;
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
    .img_vlyouSong{
            width: 13%!important;
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
        .img_vlyouSong{
            width: 40%!important;
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
        .img_vlyouSong{
            width: 40%!important;
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
        .img_vlyouSong{
            width: 25%!important;
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
        .img_vlyouSong{
            width: 40%!important;
        }
    }
</style>
<script src="{{ URL::asset('assets/js/pages/social-media.js') }}"></script>

<?php
use App\Models\VideoUploads;
use App\User;
use App\Models\Artist;
$checkvideo = '';
?>

<input type="hidden" name="user_wallet_amount" value="{{ auth()->user()->wallet }}" id="user_wallet_amount">
<input type="hidden" name="user_role" value="{{ check_role() }}" id="user_role">
@if(!empty($videos))
@foreach ($videos as $item)

<!-- General Play Video??? -->
<?php $artist = Artist::find($item->promotionVideos->artist_id);?>
<br>
<div class="social-post {{$item->song_id}}">
    <div class="card margin-n">
        <div class="post-section card-body">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="row">
                        <div class="col-lg-9 col-9 profile_img_name">
                            <a href="artist/posts/{{ $item->promotionVideos->artist_id }}">
                                <img class="img-change rounded-circle mr-2" src="{{ URL::asset($artist->photo ?? '') }}" alt="">
                            </a>
                            <!--</div>-->
                            <!--<div class="col-lg-7 col-6 post-header-bar">-->
                            <?php
                                if ($item->category == 0) {
                                    $category = 'EOI Profile';
                                } else if ($item->category == 1) {
                                    $category =  'Upcoming';
                                } else if ($item->category == 2) {
                                    $category =  'Professional';
                                } else if ($item->category == 3) {
                                    $category =  'Major Artist';
                                }
                                if ($item->song_id > 0) {
                                    $media = VideoUploads::find($item->song_id);
                                    $c_user = User::find($item->user_id);
                                    

                                    $full_name = $c_user->first_name . ' ' . $c_user->last_name;
                                    $brand = $full_name . ' shared ' .  $artist->brand . ' video';
                                } else {
                                    $brand = $artist->brand;
                                }
                            ?>
                            <div class="inner_img_name">
                                <a href="artist/posts/{{$item->promotionVideos->artist_id }}">
                                    <p class="post-section-artist-p1 only_name mb-2"> {{ $brand }}</p>
                                </a>
                                <p class="post-section-artist-p2 light-gray-color">{{ $artist->about }} <i class="fa fa-globe" aria-hidden="true"></i></p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-3">
                            <p class="float-right mt-2 light-gray-color text-right">{{ $category }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-12 padding-n mt-3">
                @if ($item->promotionVideos->type == 1) 
                    <p class="post-section-para">{{ $item->promotionVideos->description ?? '' }}</p>
                @else
                    <a href="socialmedia/details/{{$item->song_id}}">
                        <p class="post-section-para">{{ $item->promotionVideos->description ?? '' }}</p>
                    </a>
                @endif
            </div>
            <div class="col-lg-12 col-12 padding-n parent-for-video">
                @if ($item->promotionVideos->type == 1)
                    @if (isset($item->promotionVideos->audio_cover_image))
                        <div class="" style="display: flex;align-items:center;">
                            <img class="audio-cover-image" src="{{ asset($item->promotionVideos->audio_cover_image) }}">
                            <p class="post-section-para audio-text">
                                {{ $item->promotionVideos->audio_title ?? '' }} <span>{{ $item->promotionVideos->singer ?? '' }}, {{ $item->promotionVideos->music_by ?? '' }}, {{ $item->promotionVideosstarcast ?? '' }}
                                    <!-- <a href="socialmedia/details/{{$item->song_id}}">View More Details</a></span> -->
                            </p>
                        </div>
                        <br>
                    @endif
                    <audio controlsList="nodownload" class="overlay-for-audio" style="width: 100%;" controls="" data-video="{{ $checkvideo }}" data-brand="{{ $artist->brand }}" data-videoid="{{ $item->song_id }}" data-userid="{{ $item->promotionVideos->artist_id }}" data-promotionid = "">
                        <source src="{{ asset($item->promotionVideos->name) }}" type="audio/mpeg">
                    </audio>
                @else
                    @php 
                        $checkvideo = checkVideo($item->song_id); 
                        // print_r($item->promotionVideos->audio_cover_image?'fox':'mon');
                    @endphp
                    

                @if ($item->promotionVideos->audio_cover_image)
                    <img src="{{ asset($item->promotionVideos->audio_cover_image) }}" class="alternative-cover-image" alt="">
                @else
                    <video controlsList="nodownload" id="video{{ $item->song_id }}" src="{{ asset($item->promotionVideos->name) }}" data-video="{{ $artist->brand }}" class="video" type="video/mp4" controls playsinline></video>
                @endif
                    <div class="overlay-for-video" id="overlay{{ $item->song_id }}" data-video="{{ $checkvideo}}" data-promotion-id="{{$item->id}}" data-videoid="{{ $item->song_id }}" data-brand="{{ $artist->brand }}" data-userid="{{ $item->promotionVideos->artist_id }}" data-promotion-details-id="{{ $item->promotion_details_id }}" data-single-reward="{{$item->single_price}}" data-reward="{{ $item->reward }}">
                        <img src="{{ asset('assets/images/play-button.svg') }}" class="rounded-circle" alt="">
                    </div>
                @endif

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <!--new desc text-->
            <div class="social-media-profile-wrap">
                <div class="sm-left-wrap">
                    <img src="{{ asset($artist->photo) }}" alt="" class="avatar-md avatar-md-cover rounded-circle">
                    <div class="sm-left-desc for_web">
                        <h2>{{ isset($artist->brand) ? $artist->brand : ''; }} </h2>
                        <p class="mb-2"><i class="fa fa-clock-o" aria-hidden="true"></i>{{ isset($artist->about) ? $artist->about : ''; }}</p>
                        <h5>Artist share price: <span class="color-white">${{ numberformat(@$artist->stock_value) }} VXD </span>
                            @if ($artist->change_stock > 0)
                                <img class="uploading-section-artist-icon-img" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}">
                                <span class="text-green">+ {{ numberformat(@$artist->change_stock) }}%</span>
                        </h5>
                            @else
                                <img class="uploading-section-artist-icon-img" src="{{ asset('assets/images/valyoux/pink_arrow_circle_down.svg') }}">
                                <span class="text-danger">{{ signFormat(@$artist->change_stock,0) }}%</span></h5>
                            @endif

                    </div>
                    <div class="sm-left-desc for_mob">
                        <h2>{{ isset($artist->brand) ? $artist->brand : ''; }}</h2>
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i> {{ isset($artist->about) ? $artist->about : ''; }}</p>
                        <h5>Artist share price: <span class="color-white">${{ numberformat(@$artist->stock_value) }} VXD </span>
                            @if ($artist->change_stock > 0)
                                <img class="uploading-section-artist-icon-img" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}">
                                <span class="text-green">+ {{ numberformat(@$artist->change_stock) }}%</span>
                        </h5>

                    @else
                        <img class="uploading-section-artist-icon-img" src="{{ asset('assets/images/valyoux/pink_arrow_circle_down.svg') }}">
                        <span class="text-danger"> {{ signFormat(@$artist->change_stock,0) }}%</span></h5>

                    @endif
                    </div>
                </div>
                <div class="sm-right-wrap">
                    <button type="button" class="btn-invest-pink-grad" onclick="location.href='artist/profile/{{ isset($item->artist_id) ? $item->artist_id : ''; }}'"> Invest in
                        Artist</button>
                </div>
            </div>
        </div>
    </div>
    <div style="display: none;" id="valyou-music-section-{{ $item->song_id }}" class="valyou-media">
       
        <div class="container">
            <div class="btn-margin">
                <div class="row">
                    <div class="col-1 col-md-1">
                    </div>
                    <?php $artist_poits = artistPoints(); ?>
                    @foreach($artist_poits as $row)
                    <div class="col-2 col-md-2">
                        <button type="button" class=" btn btn-light radio dollar-price " data-toggle="tooltip" data-placement="top" data-original-title="This song is nice, might be a hit, Valyou for ${{$row->amount}}." class="btn btn-light radio" value="{{$row->amount}}">${{$row->amount}}</button>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="container col-md-12 text-center mb-5 proceed-valyou-song-div">
                <p class="text-danger error_message">Please choose an option above</p>
                <button type="button" class="btn valyou-g-btn add_value spycust-margin-10" value="{{$item->song_id}}">Proceed to Valyou Song</button>
                <button type="button" class="btn valyou-close-btn spycust-margin-10" value="{{$item->song_id}}">Cancel</button>

            </div>
        </div>
    </div>
    <div class="container mb-3 mt-3 added-feature">
        <div class="row ">
            <div class="col-4 col-md-4 text-center padding-r ">
                <div class="card shadow-none share-valyou-music" data-valyouid="{{ $item->song_id }}">
                    <div class="card-body body-p">
                        <img class="mb-2 share-box-image img_vlyouSong" src="{{ asset('assets/images/valyoux/valyousongiconnew@2x.png') }}">
                        <p class="card-text mobile-v">Valyou Song</p>
                    </div>
                </div>
            </div>

            <div class="col-4 col-md-4 text-center padding-r ">
                <div class="card shadow-none share-comments" data-commentid="{{ $item->song_id }}">
                    <div class="card-body body-p">
                        <img class="mb-2 share-box-image" src="{{ asset('assets/images/comments.svg') }}">
                        <p class="card-text mobile-v">Comments</p>
                    </div>
                </div>
            </div>
            <div class="col-4 col-md-4 text-center padding-r ">
                <div class="card shadow-none share-promote-song" data-promoteid="{{ $item->song_id }}">
                    <div class="card-body body-p">
                        <img class="mb-2 share-box-image" src="{{ asset('assets/images/promote.svg') }}">
                        <p class="card-text mobile-v">Promote</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="display: none" class="mt-3" id="comments-section-{{ $item->song_id }}">
        <div class="w-100 user-chat">
            <div class="card">
                <div class="col-md-12 container">
                    <ul class="list-unstyled mt-3" data-simplebar style="max-height: 470px;">
                        <!-- foreach comment -->
                    </ul>
                </div>
                <div class="p-3 chat-input-section">
                    <div class="row text-center">
                        <div class="col-md-2 col-2">
                            <div class="mr-3">
                                <img src="{{ URL::asset(auth()->user()->avatar) }}" alt="" class="avatar-md avatar-md-cover rounded-circle ">
                            </div>
                        </div>
                        <div class="col-md-8 mt-3 mt-0-mobile col-8 pad-left-0">
                            <div class="position-relative">
                                <input type="text" class="form-control chat-input" name="comment-{{$item->song_id}}" placeholder="Enter Comment...">
                            </div>
                        </div>

                        <div class="col-md-2 col-2">

                            <img style="transform: rotate(90deg);" class="mr-3 comment-btn" data-media="{{$item->song_id}}" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form method="post" action="{{ url('promotevideo/'.$item->song_id) }}" id="promotevideo-form-{{ $item->song_id }}">
        @csrf
        <div style="display: none" id="promote-song-section-{{ $item->song_id }}">
            <div class="container">
                <!-- Set Promotion Budget -->
                <div class="row card">
                    <div class="modal-header">
                        <h5 class="modal-title">Invite your friends, new fans & potential investors to listen to your song</h5>
                        <button type="button" class="btn-close close-btn-promote-song-section" data-bs-dismiss="modal" data-promoteid="{{ $item->song_id }}" aria-label="Close"></button>
                    </div>
                    <div class="card-body price-card mb-5 text-center">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="input-price-div">
                                    <p>How much money would you like to spend to promote?</p>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="quantity">
                            <input type='button' value='-' id="minus" class='minus' field='quantity' />
                            <span class="input-qty pt-3"></span>
                            <input type='text' id="quantity{{$item->song_id}}" name='quantity' value='50' class='qty input-qty dollar' />
                            <input type='button' value='+' id="plus" class='plus ' field='quantity' />
                        </div>
                    </div>

                    <div class="col-md-12 text-center mb-3">
                        
                            <img src="{{ asset('assets/images/PReward per listen .svg') }}" class="img-fluid listen_img">
                            <div class="card-body">
                                <p class="card-text">Reward each listener. Amount you would like to pay each listener. <br> Minimum 1VXD</p>
                                <input type='button' value='-' class='minus' id="minus2" field='quantity2' />
                                <span class="input-qty pt-3"></span>
                                <input type='text' id="quantity2{{$item->song_id}}" name='quantity2' value='2' class='qty input-qty pt-3' />
                                <input type='button' value='+' class='plus ' id="plus2" field='quantity2' />
                                <p class="card-text">In that case you want to spend $50 budget.<br>If you pay each listener $2, you can reach 25 people.<br>
                                    Else you pay one listener $50, you can reach 1 person.<br>To reach more people Increase your budget or reduce the amount you would like to pay each listener</p>
                            </div>
                        
                    </div>

                    <!-- Set investors, invitations emails, Phone numbers -->
                    <div class="mb-3">
                        <div id="valyoux{{$item->song_id}}" class="col-12 valyoux users-list">
                            <h2 class="fw-600">Investors on Valyou X </h2>
                            <input name='investor-list'id="investorlist{{$item->song_id}}" value='abatisse2@nih.gov, Justinian Hattersley'  class='tagify--outside'>
                        </div>
                        <!-- <div id="email{{$item->song_id}}" class="col-12 email">
                            <h2 class="fw-600">Promote via Email</h2>
                            <input id="promoteemail{{$item->song_id}}" type="text" data-role="tagsinput" placeholder="Please enter Multi Emails using  , " class="form-control" />
                        </div> -->
                        <!-- <div id="phone{{$item->song_id}}" class="col-12 phone">
                            <h2 class="fw-600">Promote Via SMS</h2>
                            <input id="promotephone{{$item->song_id}}" class="form-control number-input-music" placeholder="Please enter Multi Phone Numbers using  , " type="number" data-role="tagsinput">
                        </div> -->
                        
                        <div id="email{{$item->song_id}}" class="col-12">
                            <h2 class="fw-600">Promote via Email</h2>
                            <input name='email-promote' id="promoteemail{{$item->song_id}}" class='tagify--outside' placeholder='Please enter Multi Emails'>
                        </div>

                        <div id="email{{$item->song_id}}" class="col-12">
                            <h2 class="fw-600">Promote via SMS</h2>
                            <input id="phone{{$item->song_id}}" type="tel" name="phone-promote" data-id="{{$item->song_id}}" class="form-control" />
                            <div class="mb-2"></div>
                            <input name='sms-promote' id="promotephone{{$item->song_id}}" class='tagify--outside tagify--outside-sms' placeholder='Please enter Multi SMS'>
                        </div>
                    </div>
                    <div class="col-md-12 mb-2">
                        <button type="button" class="btn post-now-btn float-right mb-3 promote-btn-{{ $item->song_id }}" onclick="promoteVideo('{{ $item->song_id }}')"> Promote </button>
                    </div>
                </div>
                
            </div>
        </div>
    </form>
</div>

<div class="{{ isset($display_ad)? 'row mb-5': ''}}"></div>

<!--banner Ad Backuped-->
<!-- <div class="card {{ isset($display_ad)? $display_ad: ''}}">
    <div class="card-body">
        <div id="sponsored-section mt-3" class="row">
            <div class="col-lg-12 col-12 mt-3">
                <p class="sponsored-section-p1">Sponsored In Demand</p>
                <div class="sponsered-inner">
                    <p class="green-one">Current offer $40.00 For 24 hours </p>
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
</div> -->

<!--video Ad Backuped-->
<!-- <div class="card videoAd_card {{ isset($display_ad)? $display_ad: ''}}">
    <div class="card-body">
        <div id="sponsored-section mt-3" class="row">
            <div class="col-lg-12 col-12 mt-3">
                
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
</div> -->

@endforeach
			
@endif

<div id="RoleconfirmModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content v-modal">
            <div class="modal-header">
                <h2 class="modal-title">Confirmation</h2>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h4 align="center" style="margin: 0;">You need to change role as an investor?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" id="ok_change" name="ok_delete" class="btn btn-danger">Change</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
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
                    {{-- <b class="color-pinkk">Congratulations ! </b><br>--}}
                    You now have unlimited plays & access to listen to this song free anytime.
                    It has now been added to your Valyou playlist. You gained <span class="vip_points"></span> Artist VIP points. <br><br>
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
<!-- Modal -->
<div class="modal fade video-modal" id="staticBackdropPlayvideo" data-backdrop="static" data-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><b class="color-pinkk get-earn-title">Earn $0.00 cents and listen</b>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <input type="hidden" id="getRewardPrice" class="sendRewardPrice" value="">
                    <input type="hidden" id="getpromotion_id" class="sendpromotion_id" value="">
                </div>
                <div class="modal-body get-earn-body">
                    <p>You will be charged $0.00 cents if you listen to this song or watch this video. Do you wish to
                        proceed? </p>
                    <p>If you do not wish to be charged again, you have the option to click and Valyou the song for an
                        amount of your choice to receive unlimited plays for this particular song and battle it out for Vip
                        artist-fan rewards.</p>
                    <p>Thank you for supporting </p>
                    <b>Artist Name or Brand.</b>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn valyou-g-btn playvideo" data-dismiss="modal">PROCEED</button>
                </div>
            </div>
        </div>
    </div>
@section('script')
<script src="{{ URL::asset('assets/libs/select2/select2.min.js') }}"></script>
<!-- <script src="{{ URL::asset('assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script> -->

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/multiselect/2.2.9/js/multiselect.js"></script> -->
<script src="{{ URL::asset('assets/libs/axios/axios.min.js') }}"></script>
<!-- <script src="{{ URL::asset('assets/js/plugins/jquery-validation/js/jquery.validate.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/plugins/jquery-validation/js/additional-methods.min.js') }}"></script> -->
<script src="{{ URL::asset('assets/libs/tagify/tagify.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/intl-tel-input/js/intlTelInput.js') }}"></script>
<script class="iti-load-utils" async="" src="{{ URL::asset('assets/libs/intl-tel-input/js/utils.js') }}"></script>
@endsection
@section('script-bottom')
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
        // $('#earn_div').load('{{URL::to("videos")}}');
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
        utilsScript: "{{ URL::asset('assets/libs/intl-tel-input/js/utils.js') }}"
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
        let promotion_id = $(this).data('promotion-id');
        let brand =$(this).data('brand');
        let userId = $(this).data('userid');
        let video = $(this).data('video');
        var reward = $(this).data('single-reward');
        
        $('#getRewardPrice').val(reward);
        $('#getpromotion_id').val(promotion_id);
        $('#brandName').html(brand);
        $('.get-earn-title').html('Earn $'+reward+' cents and listen');
        $('.get-earn-body').html(`<p>You will be Earn `+reward+` cents if you listen to this song or watch this video. Do you wish to
                        proceed? </p>
                    
                    <p>Thank you for supporting </p>
                    <b>`+brand+`.</b>`);
        if(video == 1){
           
            $(`#video`+id).trigger('play');
            $(`#overlay`+id).remove();
            

        }else{
            $('#staticBackdropPlayvideo').modal('show');
            $('button.playvideo').attr('id',`${id}`);
        }
    });

    $(document).on('click', '.playvideo', function() {
        
        var id = $(this).attr('id');
        let userId = $(`#overlay${id}`).data('userid');
        let wallet = "{{ auth()->user()->wallet }}";
        let reward = $('.sendRewardPrice').val();
        let promotion_id = $('.sendpromotion_id').val();
    //    alert(promotion_id)
        // if (Number(wallet) > 0.03) {
            axios({
                method: "post",
                url: "{{ route('admin.EarnvalyouSong') }}",
                data: {
                    id: id,
                    userId:userId,
                    reward:reward,
                    promotion_id:promotion_id
                }
            }).then((response) => {
                // var data = JSON.parse(res);
                console.log(response.data.status);
                if(response.data.status == 1){
                    $(`#video${id}`).trigger('play');
                    $(`#overlay${id}`).remove();
                } else {
                    toastr.error(response.data.message, {timeOut: 3000});
                }
                // js_success("Enjoy this a lot!");
                
            }).catch((err) => {
                throw err;
            });
        // } else {
        //     js_error("You don't have sufficient amount in your wallet to play this Video.");
        // }
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
            utilsScript: "{{ URL::asset('assets/libs/intl-tel-input/js/utils.js') }}"
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
        url: "{{ route('admin.promotereward') }}",
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
    let wallet = "{{ auth()->user()->wallet }}";
    console.log(wallet);
    if (Number(wallet) > 0.03) {
        axios({
            method: "post",
            url: "{{ route('admin.valyousong') }}",
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
        swal("{{ Session::get('error') }}");
    </script>
<?php }
if (Session::has('success')) {
?>
    <script type="text/javascript">
        swal("{{ Session::get('success') }}");
    </script>
<?php } ?>

</script>
@endsection
