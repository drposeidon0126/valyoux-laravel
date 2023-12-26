<?php

use App\Models\Country;
?>
<?php $__env->startSection('pageCSS'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/select2/select2.min.css')); ?>">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/css/pages/promote-music.css')); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/tagify/tagify.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/intl-tel-input/css/intlTelInput.css')); ?>">

<!-- Stylesheet for the Gear Player, keep this one. -->
<link rel="stylesheet" href="<?php echo e(URL::asset('assets/gear_app/css/gear.css')); ?>">
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
        border-radius: 28px;
    }

    .add-shadow-after-selected-425 {
        box-shadow: 0 1.5px 4px 0 rgba(0, 0, 0, 0.3) !important;
        border-radius: 17px;
    }
    /* end tagify */

    .card-body {
        padding: 1rem;
    }

    @media (max-width: 1024px) {
        .tab-select a {
            padding-left: 35px;
            padding-right: 35px;
        }
    }

    @media (max-width: 768px) {
        .tab-select a {
            padding-left: 30px;
            padding-right: 30px;
        }

        .followers-wrapper-main .tab-select a {
            padding-left: 25px;
            padding-right: 25px;
        }
    }

    .main-tab-link.active::before {
        content: '';
        width: 50px;
        height: 2px;
        background: #ff0093;
        display: block;
        position: absolute;
        bottom: -6px;
        left: 50%;
        transform: translateX(-50%);
    }

    tbody tr td .team span {
        padding-left: 0%;
    }

    /* a.active{
            color: #FF0093 !important;
            border-bottom: 2px solid #FF0093;
        } */
    .tab-select .active {
        text-decoration: none !important;
        color: #FF0093 !important;
        position: relative !important;
    }

    .tab-select .active::before {
        content: '';
        width: 100px;
        height: 2px;
        background: #ff0093;
        display: block;
        position: absolute;
        bottom: -6px;
        left: 50%;
        transform: translateX(-50%);
    }

    .tab-select input {
        border-bottom: none;
    }

    .invest-new img.rounded-circle.avatar-xm.m-1 {
        width: 60px !important;
        width: 60px !important;
    }

    .logo img {
        max-width: 101px;
    }

    .tab-input {}

    .tab-input input {
        margin-top: -4px;
    }

    .footer {
        position: fixed;
    }

    .tab-content {
        padding-top: 25px;
    }

    .tab-select {
        padding-bottom: 30px;
    }

    @media (max-width: 575px) {

        .font-12 {
            font-size: 12px;
        }
    }

    @media (max-width: 525px) {
        .promoteCover h4 {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 5px;
            line-height: 1;
            margin-top: 2px;
            margin-left: -5px !important;
            padding-bottom: 8px;
        }

        .text-muted p {
            margin-bottom: 4px !important;
        }

        .promoteCover p {
            font-size: 12px !important;
            line-height: 1;
            margin-left: -5px !important;
        }

        .promoteCover .btn-follow {
            margin-top: 17px;
            float: right;
            padding: 2px 9px !important;
        }

        .promoteCover .investment {
            padding-left: 0;
            padding-right: 0;
            text-align: center;
        }

        .promoteCover .song-valyou {
            text-align: center;
        }
    }




input.form-control::placeholder {
    color: #bbb;
}
.tab-select {
    padding-bottom: 30px;
    overflow-x: scroll;
}



 .searchresultmain, .activesearchr{
	display: block;
    box-shadow: 0 0.5px 1px 0 rgba(0,0,0,.3)!important;
    cursor:pointer;
    float: left;
     padding-bottom: 7px !important;
}
.searimg{
float: left;


}
    
    .mains3{
        display: block;
    border: 1px solid #b4b4b4;
    border-radius: 20px;
    float: left;
     height: 323px;
/*     height: 400px; */
    overflow-x: unset;
    overflow-y: scroll;
    
    
    }

.searimg > img{
width:50px !important;
height:50px !important;
    margin-top: 7px;

}

.searcon{
/* 	margin-top: 10px; */
/*     float: left; */
  
	margin-top: 11px;

}
.searcon p{
margin-bottom: 0px;

}
    
    .main {
   	box-shadow: 0 0.5px 4px 0 rgba(0,0,0,.3)!important;
    display: block;
    float: left;
  
   
}







</style>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('title'); ?> Market <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- investor info -->
<div class="container-fluid" style="
    margin-bottom: 20px;
    padding: 0px;
">


           <div class="input-group col-sm-12  input-group-lg" style="
    padding: 0px;
">
                      
              <input type="text" id = "search-investor" class="form-control" style="
    position: relative;
    border-radius: 25px;
    padding: 22px 0px;
    border-color: #707070;                                                         
    /* text-align: center; */
    padding-left: 140px;
    padding-top: 22.5px;
" placeholder=" Search for Investors
    ">
           <div class="mains3 col-sm-12 p-0" style="display:none;">
           </div>
           
				<img src="<?php echo e(asset('assets/images/Valyou-X-Investors-search-3788.svg')); ?>" style="
    position: absolute;
    width: 120px;
    top: 7px;
    left: 8px;
    z-index:3;
">
            </div>
         

      </div>

<div class="row">
    <div class="col-lg-12">
        <div class="card mb-0">
            <div class="card-body promoteCover">
                <div class="row align-items-center">
                    <div class="col-6 col-md-4 col-lg-5">
                        <div class="media">
                            <div class="mr-3 align-self-center">
                                <img src="<?php echo e(isset($investor->avatar) ? asset($investor->avatar) : asset('/assets/images/users/avatar-1.jpg')); ?>" alt="" class="avatar-md rounded-circle ">
                            </div>
                            <div class="media-body align-self-center">
                                <div class="text-muted">
                                    <h4 class="mb-1 ml-4" style="font-family: 'Roboto', sans-serif; color: #050F2F; font-weight:500;  "><?php echo e($investor->first_name.' '.$investor->last_name); ?></h2>
                                        <p class="mb-2 ml-4" style="font-family: 'Roboto', sans-serif; color: #ffffff; font-weight:300; ">Music Fan</p>
                                        <p class="mb-2 ml-4" style="font-family: 'Roboto', sans-serif; color: #ffffff; font-weight:400; ">Investor</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-8 col-lg-7">
                        <div class="row">
                            <div class="col-md-8 col-lg-9">
                                <div class="text-lg-center mt-lg-0">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-lg-12">
                                             <div class="row">
                                                <div class="col-6 col-sm-6 col-lg-6 investment">
                                                    <p class="text-muted text-truncate mb-2 font-12 " style="color:#ffffff !important; font-family: 'Roboto', sans-serif; font-weight:400; ">Artist Investments</p>
                                                    <p class="mb-0 total_investments" style="color:#ffffff !important; font-family: 'Roboto', sans-serif; font-weight:600; font-size: 25px ">0</p>
                                                </div>
                                                 <div class="col-6 col-sm-6 col-lg-6 pad_right-0 song-valyou">
                                                    <p class="text-muted text-truncate mb-2 font-12 " style="color:#ffffff !important; font-family: 'Roboto', sans-serif; font-weight:400; ">Song Valyou's</p>
                                                    <p class="mb-0 buy_total" style="color:#ffffff !important; font-family: 'Roboto', sans-serif; font-weight:600;  font-size: 25px">0</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4 col-lg-3 align-self-center text-center">
                                <button class="btn btn-follow" type="button" aria-haspopup="true">
                                    Follow
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="tab-select">
    <a class="unclicked"> Market </a>
    <a class="clicked"> Stock price </a>
    <a class="unclicked" href="#"> Songs</a>
    <a id="test" class="unclicked activee"> Videos </a>
    <a class="unclicked"> Photos </a>
    <div class="search_bar">
        <input placeholder="Search">
    </div>
</div> -->




<div class="nav nav-tabs tab-select" id="nav-tab" role="tablist">
    <a class="" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Valyou Audio Playlist</a>
    <a class="active" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Valyou Video Playlist</a>
    <a class="" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Investments</a>
<!--     <a class="" id="nav-listen-earn-tab" data-toggle="tab" href="#nav-listen-earn" role="tab" aria-controls="nav-listen-earn" aria-selected="false">Listen & Earn</a> -->
<!--     <a class="" id="nav-watch-earn-tab" data-toggle="tab" href="#nav-watch-earn" role="tab" aria-controls="nav-watch-earn" aria-selected="false">Watch & Earn</a> -->
<!--     <a class="" id="nav-profile-tab1" data-toggle="tab" href="#nav-profile1" role="tab" aria-controls="nav-profile1" aria-selected="false">Profile</a> -->
    <a class="" id="nav-contact-tab" data-toggle="tab" href="#nav-follower" role="tab" aria-controls="nav-follower" aria-selected="false">Followers</a>
    <a class="" id="nav-following-tab" data-toggle="tab" href="#nav-following" role="tab" aria-controls="nav-following" aria-selected="false">Following</a>
    <a class="" id="nav-rewards-tab" data-toggle="tab" href="#nav-rewards" role="tab" aria-controls="nav-rewards" aria-selected="false">Rewards</a>
    <a class="" id="nav-sign-artist-tab" data-toggle="tab" href="#nav-sign-artist" role="tab" aria-controls="nav-sign-artist" aria-selected="false">Sign Artist</a>
<!--         <input id="search-investor" placeholder="Search for Investor Fans"> -->

</div>

<div class="tab-content" id="myTabContent">

    <div class="tab-pane fade " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table project-list-table table-nowrap table-centered table-borderless">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="team" data-gearPath="<?php echo e(asset('assets/gear_app/json/audiojungle.json')); ?>">
                                        <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bobby">
                                            <img src="<?php echo e(asset('assets/images/play-button.svg')); ?>" class="rounded-circle avatar-xm m-1  play-button" alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="team" data-gearPath="<?php echo e(asset('assets/gear_app/json/audiojungle.json')); ?>">
                                        <h3 class="text-truncate font-size-20"><a href="#" class="text-dark"><b>1.Dark Fantasy</b></a></h3>
                                    </div>
                                </td>
                                <!-- 
                                <td>
                                   <a href="javascript: void(0);" class="w-25">
                                       <img src="<?php echo e(asset('assets/images/rewind.svg')); ?>" class="rounded-circle avatar-xm m-1 w-25"
                                            alt="">
                                   </a>
                                   <a href="javascript: void(0);">
                                       <img src="<?php echo e(asset('assets/images/pause-button.svg')); ?>" class="rounded-circle avatar-xm m-1 w-75"
                                            alt="">
                                   </a>
                                   <a href="javascript: void(0);" class=" w-25">
                                       <img src="<?php echo e(asset('assets/images/fast-forward.svg')); ?>" class="rounded-circle avatar-xm m-1 w-25"
                                            alt="">
                                   </a>
                                </td> -->
                                <td class="w-25">
                                    <div class="row">
                                        <!-- <div class="col-md-8 p-2">
                                           <div class="progress">
                                               <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                                   <span class="sr-only">70% Complete</span>
                                               </div>
                                           </div>
                                        </div> -->
                                        <div class="col-md-4">
                                            <p class="m-0">04:00</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="<?php echo e(route('promote-music')); ?>">
                                        <button type="button" class="btn valyou-o-btn"> Promote</button>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-profile1" role="tabpanel" aria-labelledby="nav-profile-tab1">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Personal Information</h4>

                <div class="table-responsive">
                    <table class="table mb-0">
                        <tbody>
                            <tr>
                                <th scope="row">Full Name :</th>
                                <td><?php echo e(Auth::user()->first_name.' '.Auth::user()->last_name); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Mobile :</th>
                                <td><?php echo e(Auth::user()->phone_number); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">E-mail :</th>
                                <td><?php echo e(Auth::user()->email); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Location :</th>
                                <td><?php
                                    if (Auth::user()->country) {
                                        $country = country::where(['cnt_code' => Auth::user()->country])->first();
                                        echo $country->cnt_name;
                                    }
                                    ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Date of Birth :</th>
                                <td><?php echo e(Auth::user()->dob); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        <div class="card p-3 player">
            <video id="video" src="https://myprojectstaging.com/valyouxmusic/public/assets/videos/bobby-videox.mp4" class="video" autoplay playsinline></video>
            <div class="row">
                <div class="col-lg-10">
                    <div class='progress'>
                        <div class='progress-filled'></div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="time"><span class="time-current"></span><span class="time-total"></span></div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-1 text-center">
                    <div class="team">
                        <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip" data-placement="top" title="" data-original-title="Play">
                            <img src="<?php echo e(asset('assets/images/play-button.svg')); ?>" id="play-button" class="rounded-circle avatar-xm m-1 play-btn play-button" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 text-center">
                    <h3 class="text-truncate font-size-20"><a href="crypto-exchange" class="text-dark"><b>1.Dark Fantasy</b></a></h3>
                </div>
                <div class="col-lg-3 text-center mt-3">
                    <a data-skip="-10" href="javascript: void(0);" class="w-25 player__button">
                        <img src="<?php echo e(asset('assets/images/rewind.svg')); ?>" class="rounded-circle avatar-xm m-1 w-25" alt="">
                    </a>
                    <a href="javascript: void(0);">
                        <img src="<?php echo e(asset('assets/images/pause-button.svg')); ?>" id="pause-button" class="rounded-circle avatar-xm m-1 w-75  pause-button" alt="">
                    </a>
                    <a data-skip="10" href="javascript: void(0);" class="w-25 player__button">
                        <img src="<?php echo e(asset('assets/images/fast-forward.svg')); ?>" class="rounded-circle avatar-xm m-1 w-25" alt="">
                    </a>
                </div>
                <div class="col-lg-2 text-center">
                    <div class="row">

                        <div class='controls-left controls-left mt-4 p-2' style="margin: auto;">
                            <div class='volume'>
                                <div class='volume-btn loud'>
                                    <i class="fas fa-volume-up"></i>
                                </div>
                                <div class='volume-slider'>
                                    <div class='volume-filled'></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center mt-4">
                    <button type="button" class="btn valyou-o-btn"> Promote</button>
                </div>
            </div>
        </div>


    </div>
    <div class="tab-pane fade invest-new" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-nowrap table-centered mb-0">
                        <thead>
                            <tr>
                                <th scope="col">Artist</th>
                                <th scope="col">Holdings</th>
                                <th scope="col">Current Price</th>
                                <th scope="col">Invested</th>
                                <th scope="col">Dividends</th>
                                <th scope="col" colspan="2">Value</th>
                            </tr>
                        </thead>
                        <tbody class="investor_list">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade invest-new" id="nav-follower" role="tabpanel" aria-labelledby="nav-follower-tab">
        <div class="card">
            <div class="card-body">

                <div class="followers-wrapper-main">
                    <div class="container mb-3 mt-3">
                        <div class="nav nav-tabs tab-select" id="nav-tab" role="tablist">
                            <a class="active" id="nav-follower-tab" data-toggle="tab" href="#nav-follower" role="tab" aria-controls="nav-home" aria-selected="true">Followers<span class="total_follower"><span></a>
                            <a class="" id="nav-following-tab" data-toggle="tab" href="#nav-following" role="tab" aria-controls="nav-profile" aria-selected="false">Following<span class="total_following"><span></a>
                            <a class="" id="nav-vip-tab" data-toggle="tab" href="#nav-vip" role="tab" aria-controls="nav-contact" aria-selected="false">VIP</a>
                            </a>
                        </div>
                        <br>

                        <div class="tab-content" id="myTabContent1">
                            <div class="tab-pane fade show active" id="nav-follower" role="tabpanel" aria-labelledby="nav-follower-tab">
                                <div class="row follower_list">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-following" role="tabpanel" aria-labelledby="nav-following-tab">
                                <div class="row following_list">
                                </div>
                            </div>
                            <div class="tab-pane fade " id="nav-vip" role="tabpanel" aria-labelledby="nav-vip-tab">
                                VIP
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-listen-earn" role="tabpanel" aria-labelledby="nav-listen-earn-tab">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Please listen songs and earn VXD</h4>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-watch-earn" role="tabpanel" aria-labelledby="nav-watch-earn-tab">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Please watch videos and earn VXD</h4>
                <div class="all_social_videos"></div>
            </div>
        </div>
    </div>
</div>
        
       
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('assets/libs/select2/select2.min.js')); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/multiselect/2.2.9/js/multiselect.js"></script>
<!--     <script src="<?php echo e(URL::asset('assets/js/pages/promote-music.js')); ?>"></script> -->
<script src="<?php echo e(URL::asset('assets/js/pages/custom-player.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/tagify/tagify.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/intl-tel-input/js/intlTelInput.js')); ?>"></script>
<script class="iti-load-utils" async="" src="<?php echo e(URL::asset('assets/libs/intl-tel-input/js/utils.js')); ?>"></script>

<!-- <script src="<?php echo e(URL::asset('assets/gear_app/js/jquery.gearplayer.libs.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/gear_app/js/jquery.gearplayer.js')); ?>"></script> -->

<!-- <script src="<?php echo e(URL::asset('assets/gear_app/js/app.js')); ?>"></script> -->
<script>
    $(document).ready(function() {
        // watch to earn
        loadmoreData(0, 'watch-to-earn');
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
    
}
?>
 
    	loadInvestorData(0, 2);
        loadMoreDataUnknown(0, <?= $id ?>, 1);
        loadFollowersData(0, <?= $id ?>, 2);

        function loadMoreDataUnknown(page, artist_id, follow_type) {
            $.ajax({
                url: "getfollowerlist",
                type: "GET",
                cache: false,
                data: {
                    offset: page,
                    artist_id: artist_id,
                    follow_type: follow_type
                },
                success: function(data) {
                    if (data) {
                        const data1 = JSON.parse(data);
                        if (page) {
                            $(".loadbtn").hide();
                            $(".follower_list").append(data1.follower_list);
                            $(".total_follower").html(" &nbsp;&nbsp;&nbsp;" + data1.total_follower);
                            // $(".total_follower").html('('+data1.total_follower+')');
                        } else {
                            $(".follower_list").html(data1.follower_list);
                            $(".total_follower").html(" &nbsp;&nbsp;&nbsp;" + data1.total_follower);
                        }

                    }
                }
            });
        }
        $(document).on('click', '.loadbtn', function() {
            $(".loadbtn").html('<i class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Loading...');
            var pId = $(this).data("id");
            loadMoreDataUnknown(pId, <?= $id ?>, 1);
        });

        function loadFollowersData(page, artist_id, follow_type) {
            $.ajax({
                url: "getfollowerlist",
                type: "GET",
                cache: false,
                data: {
                    offset: page,
                    artist_id: artist_id,
                    follow_type: follow_type
                },
                success: function(data) {
                    if (data) {
                        const data1 = JSON.parse(data);
                        if (page) {
                            $(".loadbtn").hide();
                            $(".following_list").append(data1.following_list);
                            $(".total_following").html(" &nbsp;&nbsp;&nbsp;" + data1.total_following);
                            // $(".total_following").html('('+data1.total_following+')');


                        } else {
                            $(".following_list").html(data1.following_list);
                            $(".total_following").html(" &nbsp;&nbsp;&nbsp;" + data1.total_following);
                        }
                    }
                }
            });
        }
        $(document).on('click', '.loadbtn1', function() {
            $(".loadbtn1").html('<i class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Loading...');

            var pId = $(this).data("id");
            loadFollowersData(pId, <?= $id ?>, 2);
        });

        $(document).on('click', '.loadbtn2', function() {
            $(".loadbtn2").html('<i class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Loading...');
            var pId = $(this).data("id");

            loadInvestorData(pId, 2);
        });
    });

    function loadInvestorData(page, type) {
        $.ajax({
            url: 'loadinvestordata',
            type: "GET",
            cache: false,
            data: {
                offset: page,
                type: type,
            	user_id: "<?php echo e($id); ?>",
            },
            success: function(data) {
                if (data) {
                    const data1 = JSON.parse(data);
                    if (page) {
                        $(".pagination-loadmore").hide();
                        $(".investor_list").append(data1.investors_list);
                    } else {
                        $(".investor_list").html(data1.investors_list);
                    }
                    console.log(data1);
                    $(".total_investments").html(data1.total_investments);
                    $(".buy_total").html(data1.total_valyou_songs);
                }
            }
        });


    }

//     $("#search-investor").on("input", function(e) {
//         console.log(123);

//     });



$('body').delegate('#search-investor','keyup input',function() {
	var user_name = $(this).val();
	
	if(user_name!=''){
    	$.ajax({
            url: "investors",
            type: "GET",
            //cache: false,
            data: {
                user_name: user_name,
            },
            success: function(data) {
                if (data) {
                	$('.mains3').show();
                	$('.mains3').html(data.result);
                }
            	else{
                	$('.mains3').show();
                	$('.searchresultmain').html(data.result);
                }
            }
        });
    }
	else{
    	$('.mains3').hide();
    
    	}
	
    });

$(document).on('click','.searchresultmain',function(){
	var user_id = $(this).data('id');
	var investor_name = $(this).data('name');
	var investor_url = "<?php echo e(url('get/investor')); ?>"+'?user_id='+user_id;
	$('#search-investor').val(investor_name);
	if(user_id){
    	$.ajax({
            url: "get/investor",
            type: "GET",
            //cache: false,
            data: {
                user_id: user_id,
            },
            success: function(data) {
                if (data) {
                	$('.mains3').hide();
                	window.location.replace(investor_url);
                }
            	
            }
        });
    }
	else{
    	alert('please select investor first');
    }
});


    var inputElm = document.getElementById('investorlist'+id);


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




</script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/partial-valyou-playlist.blade.php ENDPATH**/ ?>