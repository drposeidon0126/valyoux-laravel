<?php
use App\Models\Artist;
use App\Http\Controllers\Admin\RoleController;
?>
<style>
    .vertical-collpsed .fix-sidebar-icon {
        margin-left: 8px;
    }
    @media (min-width: 992px){
        .side-nav-follo {
            display: none !important;
        }
    }
    @media (max-width: 992px){
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
</style>
<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <!-- end row -->
    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <div class="row m-0 side-nav-follo" id="side-nav-follower">
                <div class="col-sm-12 p-0">
                    <div class="card mb-1">
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
                                        <a href="crypto-kyc-application"><span class="mb-0">Verify Account ID</span></a>
                                        <img src="<?php echo e(asset('assets/images/valyoux/verify_valyouxaccount_id_card.svg')); ?>"
                                        alt="" height="15">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="nav-followers">
                                <h6>Followers</h6>
                                <div class="row text-center nav">
                                    <div class="col-4">
                                        <span><b>0</b></span>
                                        <p class="text-muted mb-2">Artist</p>
                                    </div>
                                    <div class="col-4">
                                        <span><b>0</b></span>
                                        <p class="text-muted mb-2">Investor</p>
                                    </div>
                                    <div class="col-4">
                                        <span><b>0</b></span>
                                        <p class="text-muted mb-2">Business</p>
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
                <li class="menu-title">Music Fan Dashboard</li>
                <li>
                    <a href="investor" class="has-arrow waves-effect mr-1">
                        <img class="mr-1" width="25"
                        src="<?php echo e(asset('assets/images/valyoux/musicfan_investor_icon.svg')); ?>">
                        <span>Investor / Music Fan</span>
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
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('business_access')): ?>
                <li class="menu-title">Business Dashboard</li>
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

                <li class="menu-title">General Menu</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <img class="mr-1" width="25" src="<?php echo e(asset('assets/images/valyoux/stockmarket_icon.svg')); ?>">
                        <span>Music Artist Stock Market</span>
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
                <li>
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
                <li>
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
                <li>
                    <a href="listenandearn">
                        <i class="bx bx-news"></i>
                        <span>Listen & Earn</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-store"></i>
                        <span>Store</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="products"><?php echo app('translator')->get('translation.Products'); ?></a></li>
                    </ul>
                </li>
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
                <li>
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
            <li>
                <a href="crypto-ico-landing">
                    <i class="bx bx-home-alt"></i>
                    <span>Home</span>
                </a>
            </li>

            <li>
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
            <li class="menu-title">Admin Menu</li>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_management_access')): ?>
            
            <li>
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
                    <li>
            <a href="artist/artist/create" >
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
        <li>
            <a href="chat" class=" waves-effect">
                <i class="bx bx-chat"></i>
                <span class="badge badge-pill badge-success float-right"><?php echo app('translator')->get('translation.New'); ?></span>
                <span>Chat / Message</span>
            </a>
        </li>
        
        
        
        
        <?php endif; ?>
        <li>
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
<form id="logoutform" action="<?php echo e(route('logout')); ?>" style="display: none" method="POST"><?php echo csrf_field(); ?></form>
<?php /**PATH /var/www/testvps-main/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>