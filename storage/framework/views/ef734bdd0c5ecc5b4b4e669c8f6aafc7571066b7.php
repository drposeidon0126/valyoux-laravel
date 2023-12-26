<?php
use App\Models\Notifications;
$notification = Notifications::with('from_user')->with('artist')->where('to_user_id',auth()->user()->id)->orderby('id','DESC')->offset(0)->limit(5)->get();
use \App\Models\Business;
use App\Models\Artist;
use App\User;
$users_data = User::all();
?>


<style>


    .navbar-brand-box {
        width: 70px;
    }

    .vertical-collpsed .logo span.logo-lg {
        display: block;
        margin-left: 24px !important;
    }

    .vertical-collpsed .logo span.logo-lg img {
        max-width: 110px;
    }

    .notification_image {
        margin-right: 4px;
        max-width: 12px;
        margin-top: 2px;
    }
    .notification_text{
        margin-bottom: 0;
        text-align: left;
    }
    .font-size-12.text-muted{
        display: flex;
        flex-flow: row;
        align-items: end;
        justify-content: space-between;
    }
    .notification-item .media{
        display: flex;
        align-items: center;
    }
    .dropdown-menu.show{
        min-width:17rem !important;
    }
    .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: 7px;
        padding-left: 24px;
        font-weight: 300;
        font-size: 13px;
        color: #050F2F;
        font-family: 'Roboto', sans-serif;
    }
    .topbar-new {
        display: flex;
        align-items: center;
    }

    .topbar-new-desktop {
        display: flex;
    }

    .topbar-new-mob {
        display: none;
    }

    .header-topbar {
        width: 100%;
        justify-content: space-between;
    }

    .topbar-desktop {
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }

    .mdi-chevron-down {
        display: none !important;
    }
    .navbar-header .dropdown .dropdown-menu.dropnewstuff{
        right: 53px !important;
        top: -9px !important;
    }
    .navbar-header .dropdown .dropdown-menu{
        text-align: left!important;
    }

    @media (max-width: 993px){
        .logo span.logo-lg {
            display: block;
        }
        .logo-xs img {
            margin-bottom: -3px !important;
        }
        .logo-lg img {
            margin-bottom: -3px !important;
        }
    }

    @media (max-width: 768px) and (min-width: 426px)  {

    }

    /* tab problem fixed */
    @media (min-width: 576px) and (max-width: 779px){
        .logo-xs img {
            margin-left: 22px !important;
        }
    }

    @media (max-width: 670px) {
        .topbar-desktop {
            display: none;
        }
        .topbar-new-mob {
            display: flex;
        }
        .btnbar.mv {
            display: flex !important;
        }
        .topbar-mobile{
            width: 100%;
            display: flex;
            justify-content: flex-end;
        }
    }

    @media (max-width: 575px) {
        .header-topbar{
            align-items: center;
        }
        .navbar-brand-box.mv {
            padding: 0 0 0 15px;
            margin-right: 10px;
        }

        .navbar-header {
            padding-right: 0;
        }

        .btn-neg-m {
            margin-right: -5px;
        }

        .topbar-new-desktop {
            display: none;
        }

        .topbar-new-mob {
            display: flex;
        }
        .topbar-new-mob button{
            padding: .47rem 6px;
        }
        .navbar-header .dropdown .dropdown-menu.switch-dropdownmenu{
            left: 15%!important;
            top: 25%!important;
        }
        .btnbar.mv{
            padding: 0 !important;
        }
        .inner-flex-end {
            padding-right: 20px;
        }
    }

    button.swal2-confirm.swal2-styled{
        background: #71ea31 !important;
    }
    .nav-right-margin{
        margin-right: 200px;
    }
    /* search bar css */
    .show-action-part{
			display: flex;
			justify-content: space-between;
			align-items: center;
		}

		.show-action-part p{
			font-size: 24px;
			line-height: 2.8;
			color: #050F2F; 	
			font-weight: 700;
		}

		.show-logo-detail-part{
			display: flex;
		}

		.MultiCarousel{ 
			float: left; 
			overflow: hidden; 
			padding: 15px; 
			width: 100%; 
			position:relative; 
		}

		.MultiCarousel .MultiCarousel-inner{ 
			transition: 1s ease all; 
			float: left; 
		}

		.MultiCarousel .MultiCarousel-inner .item{ 
			float: left;
			display: flex;
		}

		.MultiCarousel .MultiCarousel-inner .item > div{ 
			text-align: center; 
			/* padding:10px; 
			margin:10px;  */
			display: block;
			text-align: left; 
			/* background:#f1f1f1;
			border: 1px solid green; */
		}

		.MultiCarousel .leftLst, .MultiCarousel .rightLst{ 
			position:absolute; 
			border-radius:50%;
			top:calc(50% - 30px); 
		}

		.MultiCarousel .leftLst{ 
			left:0; 
		}

		.MultiCarousel .rightLst { 
			right:0; 
		}

		.MultiCarousel .leftLst.over, .MultiCarousel .rightLst.over{ 
			pointer-events: none; 
		}


		.MultiCarousel .MultiCarousel-inner .item > div > .show-logo{ 
			text-align: center; 
			border: 2px solid #707070;
			border-radius: 16px;
			width: 152px;
			height: 80px;
		}

		.item > div > .logo-detail-info{
			display: flex;
			align-items: center;
			line-height: 0.01rem;
			font-size: 0.7rem;
			/* height: max-content; */
			padding-top: 5px;
		}

		.logo-detail-info .log-info{
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-left: 5px!important;
			border: 1px solid red;
		}

		.logo-detail-info .logo-info p{
			margin-top: 10px;
			margin-bottom: 10px;
		}

		.item > div > .logo-detail-info .logo-detail-img{
			display: flex;
			align-items: center;
		}
		.item > div > .logo-detail-info .logo-info{
			margin-left: 5px;
		}

		.circle-bordered{
			width: 12px;
			height: 12px;
			border-radius: 50%;
			border: 1px solid #000000;
		}

		.promote-target{
			display: flex;
			justify-content: flex-start;
			align-items: center;

		}

		.promote-target p{
			margin-right: 5px;
		}

		.show-none {
			display: none;
		}

		.show-target-content{
			margin-top: 20px;
		}

		.select-option {
			width: 100%;
			height: fit-content;
			margin-bottom: 15px;
		}

		.show-target-content-body{
			overflow-y: scroll;
			height: 400px;
			border: 1px solid #d1d1d1;
    		border-radius: 5px;
			padding: 15px;
		}

		.show-select-option-part{
			display: none;
			margin-top: 20px;
		}

		.promote-compaign{
			display: flex;
			justify-content: flex-start;
			align-items: center;
			padding-top: 10px;
		}

		.promote-compaign p{
			margin-right: 5px;
		}

		.promote-compaign img{
			margin-right: 8px;
		}

		.show-target-content-search{
			margin-bottom: 20px;
		}

		.show-target-content-search>input {
			padding: 5px 25px;
		}

		.show-target-content .show-target-content-search input{
			background: #F7F7F7 0% 0% no-repeat padding-box;
			border: 1px solid #000000;
			border-radius: 30px; 
			width: 300px;
		}

		.show-target-content .show-target-content-search input::placeholder{
			padding-left: 20px !important;
		}

		.show-target-content-body-item{
			margin-bottom: 20px;
			display: flex;
			justify-content: space-between;
		}
		
		.disp-target-info-state{
			width: 10px;
			height: 10px;
			border-radius: 50%;
		}

		.target-info-button{
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.target-info-button>img{
			border-radius: 50%;
		}

		.target-info-state{
			display: flex;
			align-items: center;
		}

		.disp-target-info-state{
			border: 1px solid #000000;
			background: #b2b9b8;
			margin-right: 10px;
			display: block;
		}

		.target-info-button-detail{
			margin-left: 10px;
			display: block;
			justify-content: center;
			align-items: center;
		}
		/* end brand sponsors part */
    /* search bar css */
</style>

<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex header-topbar align-items-center">
            <!-- LOGO -->
            <div class="navbar-brand-box dv">
                <a href="<?php echo e(URL::to('/')); ?>" class="logo">
                    <span class="float-left logo-lg ml-4">
                        <img src="<?php echo e(URL::asset('/assets/images/valyou_x_black_logo.svg')); ?>" alt="" height="27">
                    </span>
                </a>
            </div>
            <div class="navbar-brand-box mv">
                <a href="<?php echo e(URL::to('/')); ?>" class="logo">
                    <span class="logo-xs">
                        <img src="<?php echo e(URL::asset('/assets/images/valyou_x_black_logo.svg')); ?>" alt="" height="27">
                    </span>
                </a>
            </div>
            <?php
            if (auth()->user()->wallet !='') {
                $wallet = auth()->user()->wallet;
            } else {
                $wallet = '0.0';
            }

            $notification_count = DB::table('notifications')->where('to_user_id',auth()->user()->id)->where('status',0)->count();
            ?>
            <div class="inner-flex-end topbar-mobile">
                <div class=" mr-2 topbar-new topbar-new-mob">
                    <div class="dropdown">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="dropdown" id="totalbalance">
                            <img src="<?php echo e(asset('assets/images/valyoux/search1.png')); ?>" width="20">
                        </button>
                        <div class="dropdown-menu dropdown-menu-right align-left dropnewstuff">
                            <!-- <p class="m-0 py-2"><a href="deposit" class="nav-link" >Deposit Balance: $ <?php echo e($wallet); ?> VXD</a></p> -->
                            <input type="text" name="investor-list" id="searchinputuser" class="searchData form-control" placeholder="Search for music artist, investors & business profiles on valyou x">
                            <div class="userListing"></div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="dropdown" id="totalbalance">
                            <!--<i class="mdi mdi-wallet"></i>-->
                            <img src="<?php echo e(asset('assets/images/valyoux/wallet-1.svg')); ?>" width="20">
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <p class="m-0 py-1">Total Balance: $ <?php echo e($wallet); ?> VXD</p>
                        </div>
                    </div>
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect">
                            <a class="nav-link msg-link" href="<?php echo e(url('chat')); ?>">
                                <img src="<?php echo e(asset('assets/images/valyoux/message icon.svg')); ?>" width="20">
                                <span class="badge badge-danger badge-pill">3</span>
                            </a>
                        </button>
                    </div>

                    <?php
                	
                    if ($user->roles->contains(2)) {
                	
                    $image = asset('assets/images/valyoux/artist.svg');
                    $url='admin-profile';
                    $title = 'Artist';
                	$artist=Artist::where(['user_id'=>$user->id])->first();
                	$user_image = isset($artist->photo) ? asset($artist->photo) : asset('/assets/images/users/avatar-1.jpg');
                    } elseif ($user->roles->contains(3)) {
                	$user = auth()->user();
                    $image = asset('assets/images/valyoux/investor.svg');
                    $title = 'Investor';
                    $url='investor';
                	$user_image = isset($user->avatar) ? asset($user->avatar) : asset('/assets/images/users/avatar-1.jpg');
                    } elseif ($user->roles->contains(4)) {
                	
                    $image = asset('assets/images/valyoux/business.svg');
                    $title = 'Business';
                    $url='business-profile';
                	$business=Business::where(['user_id'=>$user->id])->first();
                	$user_image = isset($business->photo) ? asset($business->photo) : asset('/assets/images/users/avatar-1.jpg');
                    } else {
                    $admin=1;
                    $image = asset('assets/images/valyoux/accountSwitch.svg');
                    $title = 'Admin';
                    $url='artist/profile/26';
                	$user_image = isset($user->avatar) ? asset($user->avatar) : asset('/assets/images/users/avatar-1.jpg');
                    }
                    ?>
                	
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <img src="<?php echo e(asset($image)); ?>" alt="<?php echo e(asset($image)); ?>" title="<?php echo e($title); ?>" width="25" />
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0 switch-dropdownmenu" aria-labelledby="page-header-notifications-dropdown" style="position: absolute; transform: translate3d(-274px, 70px, 0px); top: 0px; left: 0px; will-change: transform;" x-placement="bottom-end">
                            <div data-simplebar="init" style="max-height: 230px;">
                                <div class="simplebar-wrapper" style="margin: 0px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: -17px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;">
                                                <div class="simplebar-content" style="padding: 0px;">
                                                    <a href="<?php echo e(route('admin.role.switch',['role_id' => 2])); ?>" class="text-reset notification-item">
                                                        <div class="media">
                                                            <div class="avatar-xs mr-3">
                                                                <span class="avatar-title rounded-circle font-size-16">
                                                                    <img src="<?php echo e(asset('assets/images/valyoux/artist.svg')); ?>" alt="<?php echo e(asset('assets/images/valyoux/artist.svg')); ?>" width="16" />
                                                                </span>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5>Artist</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="<?php echo e(route('admin.role.switch',['role_id' => 4])); ?>" class="text-reset notification-item">
                                                        <div class="media">
                                                            <div class="avatar-xs mr-3">
                                                                <span class="avatar-title rounded-circle font-size-16">
                                                                    <img src="<?php echo e(asset('assets/images/valyoux/business.svg')); ?>" alt="<?php echo e(asset('assets/images/valyoux/business.svg')); ?>" width="16" />
                                                                </span>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5>Business</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="<?php echo e(route('admin.role.switch',['role_id' => 3])); ?>" class="text-reset notification-item">
                                                        <div class="media">
                                                            <div class="avatar-xs mr-3">
                                                                <span class="avatar-title rounded-circle font-size-16">
                                                                    <img src="<?php echo e(asset('assets/images/valyoux/investor.svg')); ?>" alt="<?php echo e(asset('assets/images/valyoux/investor.svg')); ?>" width="16" />
                                                                </span>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5>Investor</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <?php if($user->is_admin): ?>
                                                     <a href="<?php echo e(route('admin.role.switch',['role_id' => 1])); ?>" class="text-reset notification-item">
                                                        <div class="media">
                                                            <div class="avatar-xs mr-3">
                                                                <span class="avatar-title rounded-circle font-size-16">
                                                                    <img src="<?php echo e(asset('assets/images/valyoux/accountSwitch.svg')); ?>" alt="<?php echo e(asset('assets/images/valyoux/accountSwitch.svg')); ?>" width="16" />
                                                                </span>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5>Admin</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: auto; height: 386px;"></div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                    <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: block; height: 137px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <a href="<?php echo e($url); ?>" class="btn header-item waves-effect">
                            <img class="rounded-circle header-profile-user user-avatar-obj-fit-cover" src="<?php echo e($user_image); ?>"
                                 alt="Header Avatar">
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </a>
                    </div>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect btnbar mv vertical-menu-btn btn-neg-m">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
            </div>

            <nav class="navbar navbar-expand-lg navbar-light nav-right-margin">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e($url); ?>">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('account-balance')); ?>">Bank</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('market')); ?>">Market</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('admin.social-media')); ?>">Social Media</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.watch')); ?>" class="nav-link">Watch & Earn</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.listenandearn')); ?>" class="nav-link">Listen & Earn</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(url('store')); ?>" class="nav-link">Store</a>
                        </li>
                        
                        <?php if(request()->route()->getName() == 'admin.investor'): ?>
                        <li class="nav-item">
                            

                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </nav>
            <div class="topbar-desktop">
                <div class="mr-2 topbar-new topbar-new-desktop">
                    <div class="dropdown">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="dropdown" id="totalbalance">
                            <img src="<?php echo e(asset('assets/images/valyoux/search1.png')); ?>" width="20">
                        </button>
                        <div class="dropdown-menu dropdown-menu-right align-left dropnewstuff">
                            <!-- <p class="m-0 py-2"><a href="deposit" class="nav-link" >Deposit Balance: $ <?php echo e($wallet); ?> VXD</a></p> -->
                            <input type="text" name="investor-list" id="searchinputuser" class="searchData form-control" placeholder="Search for music artist, investors & business profiles on valyou x">
                            <div class="userListing"></div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="dropdown" id="totalbalance">
                            <img src="<?php echo e(asset('assets/images/valyoux/wallet-1.svg')); ?>" width="20">
                        </button>
                        <div class="dropdown-menu dropdown-menu-right align-left dropnewstuff">
                            <p class="m-0 py-2"><a href="deposit" class="nav-link" >Deposit Balance: $ <?php echo e($wallet); ?> VXD</a></p>

                        </div>
                    </div>
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect">
                            <a class="nav-link msg-link" href="<?php echo e(url('chat')); ?>">
                                <img src="<?php echo e(asset('assets/images/valyoux/message icon.svg')); ?>" width="20">
                                <span class="badge badge-danger badge-pill"><?= $notification_count; ?></span>
                            </a>
                        </button>
                    </div>
                    <!-- notification start -->
                    <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-bell bx-tada"></i>
                        <span class="badge badge-danger badge-pill"></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-notifications-dropdown" style="position: absolute; transform: translate3d(-274px, 70px, 0px); top: 0px; left: 0px; will-change: transform;" x-placement="bottom-end">
                        <div data-simplebar="init" style="max-height: 350px;">
                            <div class="simplebar-wrapper" style="margin: 0px;">
                                <div class="simplebar-height-auto-observer-wrapper">
                                    <div class="simplebar-height-auto-observer"2></div>
                                </div>
                                <div class="simplebar-mask">
                                    <div class="simplebar-offset" style="right: -17px; bottom: 0px;">
                                        <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;">
                                        <!--  <h6 class="mt-0 mb-1">Notifications</h6> -->
                                            <div class="simplebar-content" style="padding: 0px;">

                                            <?php $__currentLoopData = $notification; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                            $html ='';

                                            if($row->status == 0){
                                                $class = 'unread';
                                            }else{
                                                $class = 'read';
                                            }
                                            ?>
                                                <a href="" class="text-reset notification-item  <?php echo e($class); ?>" >
                                                    <div class="media">
                                                            <img class="mr-3 rounded-circle avatar-xs"  src="<?php echo e(asset($row['from_user']['avatar'])); ?>" alt="<?php echo e(asset('assets/images/valyoux/artist.svg')); ?>" width="16" />
                                                        <div class="media-body">
                                                        <div class="font-size-12 text-muted">
                                                            <p class="notification_text"><?php echo e($row->notification_text); ?></p>
                                                            <?php if($row->status == 0){ ?>
                                                            <img class="notification_image" src="<?php echo e(URL::asset('/assets/images/valyoux/message icon.svg')); ?>" width="20">
                                                            <?php  }else{ ?>
                                                            <img class="notification_image" src="<?php echo e(URL::asset('/assets/images/valyoux/open.svg')); ?>" width="20">
                                                            <?php }?>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            <a href="<?php echo e(route('admin.notifications')); ?>"><p>View All</p></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="simplebar-placeholder" style="width: auto; height: 386px;"></div>
                            </div>
                            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                            </div>
                            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: block; height: 137px;"></div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- notification end -->
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <img src="<?php echo e($image); ?>" width="25" title="<?php echo e($title); ?>" alt="" />
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-notifications-dropdown" style="position: absolute; transform: translate3d(-274px, 70px, 0px); top: 0px; left: 0px; will-change: transform;" x-placement="bottom-end">
                            <div data-simplebar="init" style="max-height: 230px;">
                                <div class="simplebar-wrapper" style="margin: 0px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: -17px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;">
                                                <div class="simplebar-content" style="padding: 0px;">
                                                    <a href="<?php echo e(route('admin.role.switch',['role_id' => 2])); ?>" class="text-reset notification-item">
                                                        <div class="media">
                                                            <div class="avatar-xs mr-3">
                                                                <span class="avatar-title rounded-circle font-size-16">
                                                                    <img src="<?php echo e(asset('assets/images/valyoux/artist.svg')); ?>" alt="<?php echo e(asset('assets/images/valyoux/artist.svg')); ?>" width="16" />
                                                                </span>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5>Artist</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="<?php echo e(route('admin.role.switch',['role_id' => 4])); ?>" class="text-reset notification-item">
                                                        <div class="media">
                                                            <div class="avatar-xs mr-3">
                                                                <span class="avatar-title rounded-circle font-size-16">
                                                                    <img src="<?php echo e(asset('assets/images/valyoux/business.svg')); ?>" alt="<?php echo e(asset('assets/images/valyoux/business.svg')); ?>" width="16" />
                                                                </span>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5>Business</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="<?php echo e(route('admin.role.switch',['role_id' => 3])); ?>" class="text-reset notification-item">
                                                        <div class="media">
                                                            <div class="avatar-xs mr-3">
                                                                <span class="avatar-title rounded-circle font-size-16">
                                                                    <img src="<?php echo e(asset('assets/images/valyoux/investor.svg')); ?>" alt="<?php echo e(asset('assets/images/valyoux/investor.svg')); ?>" width="16" />
                                                                </span>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5>Investor</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                   <?php if($user->is_admin): ?>
                                                     <a href="<?php echo e(route('admin.role.switch',['role_id' => 1])); ?>" class="text-reset notification-item">
                                                        <div class="media">
                                                            <div class="avatar-xs mr-3">
                                                                <span class="avatar-title rounded-circle font-size-16">
                                                                    <img src="<?php echo e(asset('assets/images/valyoux/accountSwitch.svg')); ?>" alt="<?php echo e(asset('assets/images/valyoux/accountSwitch.svg')); ?>" width="16" />
                                                                </span>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5>Admin</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: auto; height: 386px;"></div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                    <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: block; height: 137px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown d-inline-block">
                        <a href="<?php echo e($url); ?>" class="btn header-item waves-effect">
                            <img class="rounded-circle header-profile-user user-avatar-obj-fit-cover" src="<?php echo e($user_image); ?>"
                                 alt="Header Avatar">
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </a>
                    </div>
                </div>
                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect btnbar dv vertical-menu-btn mr-3">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
            </div>
        </div>
    </div>
    <script>

    $(document).on('click','.searchData',function(){
        
        var data = `<div class="show-target-content-body" >
            <?php $__currentLoopData = $users_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <?php 
            $artist_chk = Artist::where('user_id',$user->id)->first();
            if(!empty($artist_chk) && $user->is_admin != 1){
               $profile_url = url('artist-profile',$artist_chk->id);
            } 
            if($user->is_admin == 1) {
                $profile_url = url('artist/profile/26');
            } 
            if(empty($artist_chk) && $user->is_admin != 1){
                $profile_url = url('market'); 
            }
            ?>
            
            <a href="<?= $profile_url;?>" style="color:#404040;">
            <div class="show-target-content-body-item" style="font-size: 0.7rem">
                <div class="target-info-button">
                    <img src="<?php echo e(asset($user->avatar)); ?>" alt="" style="width: 32px; height:32px">
                    <div class="target-info-button-detail">
                        <p class="my-auto target-name" style="font-size: 0.8rem"><strong><?php echo e($user->first_name . " " . $user->last_name); ?></strong></p>
                        <p class="my-auto target-type"><?php echo e($user->email); ?></p>
                    </div>																													
                </div>  
            </div>
            </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>													
        </div>`;
        $('.userListing').html(data);
    });

    // new js for search investor
    $(document).on("keydown","#searchinputuser", function() {	
        var value = $(this).val().toLowerCase();
        $(".show-target-content-body-item").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
    
    </script>
    <?php echo $__env->yieldContent('bottom-navbar'); ?>
</header>
<?php /**PATH /var/www/testvps-main/resources/views/layouts/topbar.blade.php ENDPATH**/ ?>