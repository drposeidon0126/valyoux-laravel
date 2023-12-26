<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo.svg" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="17">
                    </span>
                </a>

                <a href="index" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-light.svg" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="19">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-toggle="collapse" data-target="#topnav-menu-content">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="<?php echo app('translator')->get('translation.Search'); ?>">
                    <span class="bx bx-search-alt"></span>
                </div>
            </form>

            <div class="dropdown dropdown-mega d-none d-lg-block ml-2">
                <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                    <?php echo app('translator')->get('translation.Mega_Menu'); ?>
                    <i class="mdi mdi-chevron-down"></i>
                </button>
                <div class="dropdown-menu dropdown-megamenu">
                    <div class="row">
                        <div class="col-sm-8">

                            <div class="row">
                                <div class="col-md-4">
                                    <h5 class="font-size-14 mt-0"><?php echo app('translator')->get('translation.UI_Components'); ?></h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);"><?php echo app('translator')->get('translation.Lightbox'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo app('translator')->get('translation.Range_Slider'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo app('translator')->get('translation.Sweet_Alert'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo app('translator')->get('translation.Rating'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo app('translator')->get('translation.Forms'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo app('translator')->get('translation.Tables'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo app('translator')->get('translation.Charts'); ?></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <h5 class="font-size-14 mt-0"><?php echo app('translator')->get('translation.Applications'); ?></h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);"><?php echo app('translator')->get('translation.Ecommerce'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo app('translator')->get('translation.Calendar'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo app('translator')->get('translation.Email'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo app('translator')->get('translation.Projects'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo app('translator')->get('translation.Tasks'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo app('translator')->get('translation.Contacts'); ?></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <h5 class="font-size-14 mt-0"><?php echo app('translator')->get('translation.Extra_Pages'); ?></h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);"><?php echo app('translator')->get('translation.Light_Sidebar'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo app('translator')->get('translation.Compact_Sidebar'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo app('translator')->get('translation.Horizontal_layout'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo app('translator')->get('translation.Maintenance'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo app('translator')->get('translation.Coming_Soon'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo app('translator')->get('translation.Timeline'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo app('translator')->get('translation.FAQs'); ?></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5 class="font-size-14 mt-0"><?php echo app('translator')->get('translation.UI_Components'); ?></h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);"><?php echo app('translator')->get('translation.Lightbox'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo app('translator')->get('translation.Range_Slider'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo app('translator')->get('translation.Sweet_Alert'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo app('translator')->get('translation.Rating'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo app('translator')->get('translation.Forms'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo app('translator')->get('translation.Tables'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><?php echo app('translator')->get('translation.Charts'); ?></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-sm-5">
                                    <div>
                                        <img src="<?php echo e(asset('assets/images/megamenu-img.png')); ?>" alt="" class="img-fluid mx-auto d-block">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ml-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                    aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="<?php echo app('translator')->get('translation.Search'); ?>" aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-none d-sm-inline-block">
                <button type="button" class="btn header-item waves-effect"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php switch(Session::get('lang')):
                        case ('ru'): ?>
                        <img src="<?php echo e(URL::asset('/assets/images/flags/russia.jpg')); ?>" alt="Header Language" height="16"> <span class="align-middle">Russian</span>
                        <?php break; ?>
                        <?php case ('it'): ?>
                        <img src="<?php echo e(URL::asset('/assets/images/flags/italy.jpg')); ?>" alt="Header Language" height="16"> <span class="align-middle">Italian</span>
                        <?php break; ?>
                        <?php case ('de'): ?>
                        <img src="<?php echo e(URL::asset('/assets/images/flags/germany.jpg')); ?>" alt="Header Language" height="16"> <span class="align-middle">German</span>
                        <?php break; ?>
                        <?php case ('es'): ?>
                        <img src="<?php echo e(URL::asset('/assets/images/flags/spain.jpg')); ?>" alt="Header Language" height="16"> <span class="align-middle">Spanish</span>
                        <?php break; ?>
                        <?php default: ?>
                        <img src="<?php echo e(URL::asset('/assets/images/flags/us.jpg')); ?>" alt="Header Language" height="16"> <span class="align-middle">English</span>
                    <?php endswitch; ?>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a href="<?php echo e(url('index/en')); ?>" class="dropdown-item notify-item">
                        <img src="<?php echo e(URL::asset('/assets/images/flags/us.jpg')); ?>" alt="user-image" class="mr-1" height="12"> <span class="align-middle">English</span>
                    </a>

                    <!-- item-->
                    <a href="<?php echo e(url('index/es')); ?>" class="dropdown-item notify-item">
                        <img src="<?php echo e(URL::asset('/assets/images/flags/spain.jpg')); ?>" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Spanish</span>
                    </a>

                    <!-- item-->
                    <a href="<?php echo e(url('index/de')); ?>" class="dropdown-item notify-item">
                        <img src="<?php echo e(URL::asset('/assets/images/flags/germany.jpg')); ?>" alt="user-image" class="mr-1" height="12"> <span class="align-middle">German</span>
                    </a>

                    <!-- item-->
                    <a href="<?php echo e(url('index/it')); ?>" class="dropdown-item notify-item">
                        <img src="<?php echo e(URL::asset('/assets/images/flags/italy.jpg')); ?>" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Italian</span>
                    </a>

                    <!-- item-->
                    <a href="<?php echo e(url('index/ru')); ?>" class="dropdown-item notify-item">
                        <img src="<?php echo e(URL::asset('/assets/images/flags/russia.jpg')); ?>" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Russian</span>
                    </a>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ml-1">
                <button type="button" class="btn header-item noti-icon waves-effect"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-customize"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <div class="px-lg-2">
                        <div class="row no-gutters">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="<?php echo e(asset('assets/images/brands/github.png')); ?>" alt="Github">
                                    <span>GitHub</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="<?php echo e(asset('assets/images/brands/bitbucket.png')); ?>" alt="bitbucket">
                                    <span>Bitbucket</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="<?php echo e(asset('assets/images/brands/dribbble.png')); ?>" alt="dribbble">
                                    <span>Dribbble</span>
                                </a>
                            </div>
                        </div>

                        <div class="row no-gutters">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="<?php echo e(asset('assets/images/brands/dropbox.png')); ?>" alt="dropbox">
                                    <span>Dropbox</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="<?php echo e(asset('assets/images/brands/mail_chimp.png')); ?>" alt="mail_chimp">
                                    <span>Mail Chimp</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="<?php echo e(asset('assets/images/brands/slack.png')); ?>" alt="slack">
                                    <span>Slack</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ml-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="bx bx-fullscreen"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-bell bx-tada"></i>
                    <span class="badge badge-danger badge-pill">3</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0"> <?php echo app('translator')->get('translation.Notifications'); ?> </h6>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small"> <?php echo app('translator')->get('translation.View_All'); ?></a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs mr-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="bx bx-cart"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1"><?php echo app('translator')->get('translation.Your_order_is_placed'); ?></h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1"><?php echo app('translator')->get('translation.If_several_languages_coalesce_the_grammar'); ?></p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <?php echo app('translator')->get('translation.min_ago'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <img src="assets/images/users/avatar-3.jpg"
                                    class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">James Lemire</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1"><?php echo app('translator')->get('translation.It_will_seem_like_simplified_English'); ?></p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <?php echo app('translator')->get('translation.hours_ago'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs mr-3">
                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                        <i class="bx bx-badge-check"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1"><?php echo app('translator')->get('translation.Your_item_is_shipped'); ?></h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1"><?php echo app('translator')->get("translation.If_several_languages_coalesce_the_grammar"); ?></p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <?php echo app('translator')->get('translation.min_ago'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <img src="assets/images/users/avatar-4.jpg"
                                    class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">Salena Layfield</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1"><?php echo app('translator')->get('translation.As_a_skeptical_Cambridge_friend_of_mine_occidental'); ?></p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <?php echo app('translator')->get('translation.hours_ago'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 border-top">
                        <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                            <i class="mdi mdi-arrow-right-circle mr-1"></i> <?php echo app('translator')->get('translation.View_More'); ?>..
                        </a>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="<?php echo e(isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/avatar-1.jpg')); ?>"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ml-1"><?php echo e(ucfirst(Auth::user()->name)); ?></span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a class="dropdown-item" href="contacts-profile"><i class="bx bx-user font-size-16 align-middle mr-1"></i> <?php echo app('translator')->get('translation.Profile'); ?></a>
                    <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle mr-1"></i> <?php echo app('translator')->get('translation.My_Wallet'); ?></a>
                    <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="bx bx-wrench font-size-16 align-middle mr-1"></i> <?php echo app('translator')->get('translation.Settings'); ?></a>
                    <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle mr-1"></i> <?php echo app('translator')->get('translation.Lock_screen'); ?></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="javascript:void();" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> <?php echo app('translator')->get('translation.Logout'); ?> </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="bx bx-cog bx-spin"></i>
                </button>
            </div>

        </div>
    </div>
</header>
<?php /**PATH /var/www/testvps-main/resources/views/layouts/top-hor.blade.php ENDPATH**/ ?>