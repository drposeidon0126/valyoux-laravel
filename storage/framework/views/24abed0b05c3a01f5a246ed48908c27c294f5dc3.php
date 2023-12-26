<?php
use App\Models\Artist;
use App\Http\Controllers\Admin\RoleController;
?>
<style>
    .vertical-collpsed .fix-sidebar-icon {
        margin-left: 8px;
    }

    @media (min-width: 992px) {
        .side-nav-follo {
            display: none !important;
        }
    }

    @media (max-width: 992px) {
        body.vertical-collpsed .vertical-menu {
            display: none;
        }
    }

    .margin-icon-bf {
        margin-left: 6px;
        margin-right: 8px !important;
    }

    .mr-9 {
        margin-right: 9px !important;
    }

    .ml-10 {
        margin-left: 10px !important;
    }

    .vertical-collpsed .logo span.logo-lg {
        display: block;
        margin-left: 24px !important;
    }

    .vertical-collpsed .logo span.logo-lg img {
        max-width: 110px;
    }

    .side-nav-follo {
        display: none;
    }

    .m-business-icon {
        margin-right: 9px;
        margin-left: 6px;
    }

    .navbar-header .dropdown .dropdown-menu {
        left: auto !important;
        right: 13px !important;
        text-align: center;
        width: 50%;
        top: 17px !important;
    }

    .marquee {
        overflow: hidden !important;
    }

    .css-12qnib {
        position: relative;
        display: inline-block;
        flex: 1 1 auto;
        white-space: nowrap;
        overflow: auto hidden;
        font-family: Roboto, sans-serif;
        font-style: normal;
        -webkit-transform: translateZ(0);
    }
    

    .MuiTabs-scroller {
        overflow: auto !important;
    }

    .css-k008qs {
        display: flex;
    }

    .css-kc8vld.Mui-selected {
        color: rgb(255, 0, 147);
    }

    .css-kc8vld {
        display: inline-flex;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
        box-sizing: border-box;
        -webkit-tap-highlight-color: transparent;
        background-color: transparent;
        outline: 0px;
        border: 0px;
        margin: 0px;
        border-radius: 0px;
        cursor: pointer;
        user-select: none;
        vertical-align: middle;
        appearance: none;
        text-decoration: none;
        font-family: Roboto, Helvetica, Arial, sans-serif;
        font-size: 0.875rem;
        line-height: 1.25;
        letter-spacing: 0.02857em;
        text-transform: uppercase;
        max-width: 360px;
        min-width: 90px;
        position: relative;
        min-height: 48px;
        flex-shrink: 0;
        padding: 12px 16px;
        overflow: hidden;
        white-space: normal;
        text-align: center;
        flex-direction: column;
        font-weight: 700;
        color: white;
    }

    .css-118dy7j {
        position: absolute;
        height: 2px;
        bottom: 0px;
        width: 100%;
        transition: all 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        background-color: rgb(255, 0, 147);
    }

    .follow-num {
        --tw-text-opacity: 1;
        color: rgb(22 163 74) !important;
        font-weight: 800;
        font-family: Roboto, sans-serif;
        font-style: normal;
        -webkit-transform: translateZ(0);
        font-size: 1rem;
    }

    .follower-role {

        font-family: Roboto, sans-serif;
        font-style: normal;
        -webkit-transform: translateZ(0);
        font-size: 1.1rem;
    }

    .menu-title {
        font-size: 14px !important;
    }

    .mm-active .active {
        color: #545a6d !important
    }

    .mm-active,
    .mm-active .active,
    .mm-active .active i,
    .mm-active>i {
        color: #545a6d !important;
    }

    .text-red,
    a:hover {
        color: #545a6d !important;
    }

    .mm-active a {
        font-size: 17px !important;
        font-weight: 500 !important;
        font-family: Roboto, sans-serif;
        font-style: normal;
        -webkit-transform: translateZ(0);
        margin-right: 0 !important
    }

    .sub-menu a {
        font-size: 17px !important;
        margin-bottom: 4%;
        font-weight: 400 !important;
        font-family: Roboto, sans-serif;
        font-style: normal;
        -webkit-transform: translateZ(0);
    }

    #sidebar-menu .has-arrow:after {
        font-size: 2rem !important
    }

    .tab-select-nav a:hover {
        color: black;
    }

    .tab-select-nav .active {
        text-decoration: none !important;
        color: #FF0093 !important;
        position: relative !important;
    }

    .tab-select-nav .active::after {
        top: 65%;
        height: 2px;
        width: 90%;
        left: 5%;
        background-color: red;
    }

    /* .tab-select-nav a {
			padding: 5px 130px;
			white-space: nowrap;
			color: #000!important;
			font-weight: 600!important;
			font-size: 16px;
			/* border: 1px solid #FFFFFF; */
    /* border-radius: 30px; */
    }

    */
    /* .tab-select-nav a:hover{
			border: 1px solid #000000;
			background: #F7F7F7 0% 0% no-repeat padding-box;		
			border-radius: 30px;
		}  */

    .tab-select-nav-side {
        padding: 14px 0 7px 0;
        overflow: auto;
        display: inline-table;
        border-bottom: transparent !important;
        
    }

    .tab-select-nav-side a.active {
        text-decoration: none !important;
        color: #FF0093 !important;
        position: relative !important;
        border-bottom: 2px solid #FF0093;
        padding-left: 0 !important;
        padding-right: 0 !important;
    }

    .tab-select-nav-side a {
        padding: 5px 0px;
        white-space: nowrap;
        color: white;
        font-weight: 500 !important;
        font-family: "Roboto", "Helvetica", "Arial", sans-serif;
        font-size: 0.875rem;
        line-height: 1.25;
        letter-spacing: 0.02857em;
        text-transform: uppercase;
        /* border-bottom: 2px solid #FFFFFF; */
    }

    .nav-tabs {
        border-bottom: 1px solid black;
    }

    #following-side {
        color: white !important;
    }

    /* @media (max-width: 992px) {
   .vertical-menu {
      display: none;
       width: 104%;
   }
} */
</style>
<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <!-- end row -->
    <!-- <div data-simplebar class="h-100 ds-sidebar"  > -->
    <div  class="h-100 scrolling-sponsor-list scroll-style"  style="overflow-y: auto; overflow-x: hidden">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <div class="row m-0 side-nav-follo" id="side-nav-follower">
                <div class="col-sm-12 p-0">
                    <div class="card mb-1 " style="margin-right: 0 !important">
                        <div class="card-body bg-black">
                            <div class="media">
                                <div class="mr-2">
                                    <img src="<?php echo e(isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/avatar-1.jpg')); ?>"
                                        alt="" class="avatar-md rounded-circle img-thumbnail">
                                </div>
                                <div class="media-body align-self-center">
                                    <div class="text-muted ml-3">
                                        <h4><?php echo e(auth()->user()->first_name . ' ' . auth()->user()->last_name); ?></h4>
                                        <p class="mb-2"><?php echo e(auth()->user()->email); ?></p>
                                        <a href="crypto-kyc-application"><span class="mb-0"
                                                style="color: rgb(219 39 119) !important;">Verify Account ID</span></a>
                                        <img src="<?php echo e(asset('assets/images/valyoux/verify_valyouxaccount_id_card.svg')); ?>"
                                            alt="" height="15">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body"
                            style="background-color: black !important; padding: 10px 0 10px 0 !important ">
                            <div class="nav-followers ml-0">
                                <div class="MuiTabs-scroller MuiTabs-hideScrollbar MuiTabs-scrollableX css-12qnib"
                                    style="margin-bottom: 0px; color: rgb(219 39 119) !important; width: 100%;">
                                    <div class="nav nav-tabs tab-select-nav-side pb-2 w-full" style="justify-content:center; color: white; gap:3%;"
                                        id="nav-tab" role="tablist" style="border-color: black!important">

                                        <a class="active " id="nav-home-tab following-side" data-toggle="tab"
                                            href="#nav-home" role="tab" aria-controls="nav-home"
                                            aria-selected="true">Following You</a>
                                        <a class="following-side" id="nav-profile-tab following-side" data-toggle="tab"
                                            href="#nav-profile" role="tab" aria-controls="nav-profile"
                                            aria-selected="false">You Are
                                            Following</a>
                                    </div>
                                    <!-- <span class="MuiTabs-indicator css-118dy7j"
                                        style="left: 0px; width: 145.5px;"></span> -->
                                </div>
                                <!-- <h6>Followers</h6> -->
                                <div class="row text-center nav mt-4">
                                    <div class="col-4">
                                        <span class="follow-num"
                                            style="color: rgb(22 163 74) !important;"><b>0</b></span>
                                        <p class="text-muted mb-2 follower-role" style="color: white !important;">Artist
                                        </p>
                                    </div>
                                    <div class="col-4">
                                        <span class="follow-num"
                                            style="color: rgb(22 163 74) !important;"><b>0</b></span>
                                        <p class="text-muted mb-2 follower-role" style="color: white !important;">
                                            Investor</p>
                                    </div>
                                    <div class="col-4" style="padding-right: 20px !important;">
                                        <span class="follow-num"
                                            style="color: rgb(22 163 74) !important; "><b>0</b></span>
                                        <p class="text-muted mb-2 follower-role" style="color: white !important; ;">
                                            Business</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('artist_access')): ?>
                <li class="menu-title">Artist Dashboard</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect mr-1">
                        <img class="mr-1" width="25" src="<?php echo e(asset('assets/images/valyoux/artist_icon.svg')); ?>">
                        <span>Artist</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        
                        
                        
                        <!-- <li><a href="<?php echo e(route('admin.upload-media')); ?>">Uploads</a></li> -->
                        <?php
                        $user_id =Artist::where('user_id',auth()->user()->id)->first();
                        $artists_id=$user_id->id;
                        $artists['id'] = $artists_id;
                        ?>
                        <li><a href="artist/videos/<?php echo e($artists['id']); ?>">My Videos</a></li>

                        <li><a href="mysongs">My Audio</a></li>

                        <?php if(!Auth::user()->roles->contains(3)): ?>
                        <li><a href="<?php echo e(route('admin.upload-media')); ?>">Upload</a></li>
                        <?php endif; ?>
                        <li><a href="artist/followers">Followers</a></li>
                        

                        <li><a href="revenue-streams">Revenue Streams</a></li>
                        <li><a href="connect">Connect & Collaborate</a></li>
                        <li><a href="<?php echo e(url('chat')); ?>">Messages</a></li>

                        <li><a href="javascript:void(0)">Invite Friends / Fans</a></li>
                        <li><a href="<?php echo e(url('artist/artist/edit/'.$artists['id'])); ?>">Profile Settings</a></li>
                    </ul>
                </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('music_fan_access')): ?>
                <!-- <li class="menu-title">Music Fan Dashboard</li> -->
                <li>
                    <a href="investor" class="has-arrow waves-effect mb-3 mt-2" >
                        <img class="mr-1" width="25"
                            src="<?php echo e(asset('assets/images/valyoux/musicfan_investor_icon.svg')); ?>">
                        <span>Investor</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="investor/followings">Following</a></li>
                        <li><a href="investment-portfolio">Investment Portfolio</a></li>
                        <li><a href="javascript:void(0)">Earnings</a></li>
                        <li><a href="javascript:void(0)">Invite an Artist</a></li>
                        <li><a href="pages-pricing">Sign an Artist</a></li>
                        <li><a href="<?php echo e(url('chat')); ?>">Messages</a></li>
                        <li><a href="investor/listen-to-earn">Listen & Earn</a></li>
                        <li><a href="investor/watch-to-earn">Watch & Earn</a></li>
                        <!-- <li><a href="<?php echo e(url('valyou-playlist')); ?>">Watch & Earn</a></li> -->
                    </ul>
                </li>
                <hr>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('business_access')): ?>
                <!-- <li class="menu-title">Business Dashboard</li> -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <img class="m-business-icon" width="15"
                            src="<?php echo e(asset('assets/images/valyoux/businessicon.svg')); ?>">
                        <span>Business & Freelancer</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="business/followings">Following</a></li>
                        <li><a href="<?php echo e(url('chat')); ?>">Messages</a></li>
                        <li><a href="javascript:void(0)">Services You Provide</a></li>
                        <li><a href="connect">Connect & Collaborate</a></li>
                        <li><a href="javascript:void(0)">Order in Progress</a></li>
                        <li><a href="javascript:void(0)">Reviews</a></li>
                        <li><a href="javascript:void(0)">Earnings</a></li>
                    </ul>
                </li>
                <?php endif; ?>

                <!-- <li class="menu-title">General Menu</li> -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <img class="mr-1" width="25" src="<?php echo e(asset('assets/images/valyoux/stockmarket_icon.svg')); ?>">
                        <span>Stock Market</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(url('market')); ?>">All - Music Artists</a></li>
                        <li><a href="<?php echo e(url('market')); ?>">America (North)</a></li>
                        <li><a href="<?php echo e(url('market')); ?>">Africa</a></li>
                        <li><a href="<?php echo e(url('market')); ?>">South America</a></li>
                        <li><a href="<?php echo e(url('market')); ?>">Asia</a></li>
                        <li><a href="<?php echo e(url('market')); ?>">Australia</a></li>
                        <li><a href="<?php echo e(url('market')); ?>">Europe</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-bitcoin"></i>
                        <span>Bank</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(url('account-balance')); ?>">Account Balance</a></li>
                        <?php if($user->roles->contains(1)): ?>
                        <li><a href="<?php echo e(url('deposit')); ?>">Deposit</a></li>
                        <?php endif; ?>
                        <li><a href="<?php echo e(url('currency-exchange')); ?>">Currency Exchange</a></li>
                        <li><a href="<?php echo e(url('artist/stock-price/26')); ?>">Buy Valyou X (Tokens)</a></li>
                        <li><a href="<?php echo e(url('investment-portfolio')); ?>">Investment Portfolio</a></li>
                        <?php if($user->roles->contains(1)): ?>
                        <li><a href="<?php echo e(url('vxd-orders')); ?>">VXD Orders</a></li>
                        <?php endif; ?>
                        <!--                         <li><a href="<?php echo e(url('crypto-kyc-application')); ?>"><?php echo app('translator')->get('translation.KYC_Application'); ?></a></li> -->
                        <?php if($user->roles->contains(1)): ?>
                        <li><a href="<?php echo e(url('stripe')); ?>">Stripe Payment</a></li>
                        <?php endif; ?>
                    </ul>
                </li>
                <li class="mb-3">
                    <!-- <a href="<?php echo e(route('admin.social-media')); ?>">
                        <img class="mr-9" width="25"
                        src="<?php echo e(asset('assets/images/valyoux/social_media_valyoux_new1.svg')); ?>">
                        <span>Social Media Trading</span>
                    </a> -->
                    <a href="<?php echo e(route('admin.social-media')); ?>">
                        <img class="mr-9 fix-sidebar-icon" width="16"
                            src="<?php echo e(asset('assets/images/valyoux/social_media_valyoux_new.svg')); ?>">
                        <span>Social Media Trading</span>
                    </a>
                </li>
                <li class="mb-3">
                    <!-- <a href="<?php echo e(route('admin.watch')); ?>">
                        <img class="mr-9" width="25"
                        src="<?php echo e(asset('assets/images/valyoux/eye1.svg')); ?>">
                        <span>Watch</span>
                    </a> -->
                    <a href="<?php echo e(route('admin.watch')); ?>">
                        <img class="mr-9 fix-sidebar-icon" width="16"
                            src="<?php echo e(asset('assets/images/valyoux/eye.svg')); ?>">
                        <span>Watch & Earn</span>
                    </a>
                </li>
                <li class="mb-3">
                    <a href="listenandearn">
                        <i class="bx bx-news"></i>
                        <span>Listen & Earn</span>
                    </a>
                </li>
                <hr>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-store"></i>
                        <span>Store</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="products"><?php echo app('translator')->get('translation.Products'); ?></a></li>
                    </ul>
                </li>
                <hr>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-user-circle"></i>
                        <span><?php echo app('translator')->get('translation.Authentication'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="crypto-kyc-application">ID Verification</a></li>
                        <li><a href="auth-login">2 Factor Authentication</a></li>
                    </ul>
                </li>
                <li class="mb-3">
                    <a href="javascript: void(0);">
                        <svg width="16" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="user-headset"
                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                            class="svg-inline--fa fa-user-headset fa-w-14 fa-3x fix-sidebar-icon">
                            <path fill="currentColor"
                                d="M320 352h-4.7c-12.16 0-24 2.9-35.5 6.8a173.76 173.76 0 0 1-111.64 0c-11.48-3.9-23.29-6.78-35.42-6.78H128A128 128 0 0 0 0 480a32 32 0 0 0 32 32h384a32 32 0 0 0 32-32 128 128 0 0 0-128-128zM32 480a96.1 96.1 0 0 1 96-96h4.74c6.92 0 14.92 1.62 25.16 5.09a205.75 205.75 0 0 0 132.16 0c10.31-3.49 18.33-5.11 25.24-5.11h4.7a96.1 96.1 0 0 1 96 96zm16-256a16 16 0 0 0 16-16v-16c0-88.22 71.78-160 160-160s160 71.78 160 160v16a80.09 80.09 0 0 1-80 80h-32a32 32 0 0 0-32-32h-32a32 32 0 0 0 0 64h96a112.14 112.14 0 0 0 112-112v-16C416 86.12 329.88 0 224 0S32 86.12 32 192v16a16 16 0 0 0 16 16zM224 96a95.57 95.57 0 0 1 71.23 159.76c0 .09.13.15.18.24H304a47.89 47.89 0 0 0 40.55-22.58C349 220.36 352 206.58 352 192a128 128 0 0 0-256 0c0 40.42 19.1 76 48.35 99.47-.06-1.17-.35-2.28-.35-3.47a63.25 63.25 0 0 1 8.93-32A95.58 95.58 0 0 1 224 96z"
                                class=""></path>
                        </svg>
                        
                        <span class="ml-10">Support</span>
                    </a>
                </li>
                <li class="mb-2">
                    <a href="crypto-ico-landing">
                        <i class="bx bx-home-alt"></i>
                        <span>Home</span>
                    </a>
                </li>

                <li class="mb-2">
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-user"></i>
                        <span>Accounts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('artist_create')): ?>
                        <li><a href="artist/artist/create"> Create Artist</a></li>
                        <li><a href="my-artists">My Artists</a></li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('business_create')): ?>
                        <li><a href="<?php echo e(route('business.business.create')); ?>">Create Business</a></li>
                        <li><a href="business-profile">My Business</a></li>
                        <?php endif; ?>
                    </ul>
                </li>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_access')): ?>
                <!-- <li class="menu-title">Admin Menu</li> -->
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_management_access')): ?>

                <li >
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-user-lock"></i>
                        <span>User Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission_access')): ?>
                        <li><a href="<?php echo e(route('admin.permission')); ?>">Permissions</a></li>
                        <?php endif; ?>
                        <li><a href="artist-list">All Artists</a></li>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role_access')): ?>
                        <li><a href="<?php echo e(route('admin.role')); ?>">Roles</a></li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_access')): ?>
                        <li><a href="<?php echo e(route('admin.user.index')); ?>">Users</a></li>
                        <?php endif; ?>
                        <li><a href="<?php echo e(route('admin.settings')); ?>">Settings</a></li>
                    </ul>
                </li>
                <?php endif; ?>
                <li >
                    <a href="artist/artist/create">
                        <i class="bx bx-layout"></i>
                        <span>List an Artist / Brand</span>
                    </a>
                    
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-news"></i>
                        <span>Media</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="songs-list">Audio</a></li>
                        <li><a href="videos-list">Videos</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span>All Subscriptions</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="javascript:void(0)">Active</a></li>
                        <li><a href="javascript:void(0)">Inactive</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-store"></i>
                        <span><?php echo app('translator')->get('translation.Ecommerce'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="products"><?php echo app('translator')->get('translation.Products'); ?></a></li>
                        <li><a href="product-detail"><?php echo app('translator')->get('translation.Product_Detail'); ?></a></li>
                        <li><a href="orders"><?php echo app('translator')->get('translation.Orders'); ?></a></li>
                        <li><a href="customers"><?php echo app('translator')->get('translation.Customers'); ?></a></li>
                        <li><a href="cart"><?php echo app('translator')->get('translation.Cart'); ?></a></li>
                        <li><a href="checkout"><?php echo app('translator')->get('translation.Checkout'); ?></a></li>
                        <li><a href="shops"><?php echo app('translator')->get('translation.Shops'); ?></a></li>
                        <li><a href="add-product"><?php echo app('translator')->get('translation.Add_Product'); ?></a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-home-circle"></i><span class="badge badge-pill badge-info float-right">03</span>
                        <span><?php echo app('translator')->get('translation.Dashboard'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="index"><?php echo app('translator')->get('translation.Default'); ?></a></li>
                        <li><a href="dashboard-saas"><?php echo app('translator')->get('translation.Saas'); ?></a></li>
                        <li><a href="dashboard-crypto"><?php echo app('translator')->get('translation.Crypto'); ?></a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-map"></i>
                        <span>Search Radar</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="artists">Artists</a></li>
                        <li><a href="investor-fans">Investors / Music Fans</a></li>
                        <li><a href="business">Businesses</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-file"></i>
                        <span>Pricing Plan</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="starter"><?php echo app('translator')->get('translation.Starter_Page'); ?></a></li>
                        <li><a href="maintenance"><?php echo app('translator')->get('translation.Maintenance'); ?></a></li>
                        <li><a href="timeline"><?php echo app('translator')->get('translation.Timeline'); ?></a></li>
                        <li><a href="faqs"><?php echo app('translator')->get('translation.FAQs'); ?></a></li>
                        <li><a href="pricing"><?php echo app('translator')->get('translation.Pricing'); ?></a></li>
                    </ul>
                </li>
                <li class="mb-3">
                    <a href="chat" class=" waves-effect">
                        <i class="bx bx-chat"></i>
                        <span class="badge badge-pill badge-success float-right"><?php echo app('translator')->get('translation.New'); ?></span>
                        <span>Chat / Message</span>
                    </a>
                </li>
                
                
                
                
                <?php endif; ?>
                <li class="mb-3">
                    <a href="javascript: void(0);"
                        onclick="event.preventDefault(); document.getElementById('logoutform').submit();"
                        class="waves-effect">
                        <i class="bx bx-power-off"></i>
                        <span><?php echo app('translator')->get('translation.Logout'); ?></span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
<form id="logoutform" action="<?php echo e(route('logout')); ?>" style="display: none" method="POST"><?php echo csrf_field(); ?></form><?php /**PATH D:\task\Current\Valyou X\new work(12.6)\valyoux_backend(working now)\valyoux_backend\valyoux_backend\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>