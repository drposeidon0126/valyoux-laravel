<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title><?php echo $__env->yieldContent('title'); ?> | Valyou X Music</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo e(URL::asset('assets/images/valyou_x_emblem.svg')); ?>">

    <!-- owl.carousel css -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/libs/owl.carousel/owl.carousel.min.css')); ?>">

    <?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>
<style>
.navigation .navbar-nav .nav-item .nav-link{
    padding: 6px 12px;
}

.button-items {
    margin-left: 0; 
    margin-bottom: 0; 
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.btn-landing a{
    width: 48%!important;
}
.button-items .btn{
    margin-bottom: 0;
    margin-left: 0;
}
.hero_row{
    
}
.hero_col-1{
    order: 1;
}
.hero_col-2{
    order: 2;
}
.first_sec_text p{
    text-align: justify;
}
.for_height{
    display: flex;
    align-items: center;
    justify-content: flex-end;
    flex-grow: 1;
}
.currency-price .card{
    background-color: #000;
    border: 1px solid;
}
.currency-price .card .text-muted {
    color: #f1f2fb!important;
}
.currency-price .card h5 {
    color: #abbbcc;
}
.theme-color{
    color: #ff0093;
}
@media (max-width: 575px){
    .hero_col-1{
        order: 2;
    }
    .hero_col-2{
        order: 1;
    }
    .for_height{
        height: 100vh;
        display: block;
        align-items: unset;
        justify-content: unset;
        flex-grow: unset;
    }
    .auth_wrapper{
        margin-left: 12px;
        margin-top: 10px;
    }
    .hero-section .hero-title {
        font-size: 26px;
        border-bottom: 1px solid #fff;
        display: inline-block;
        margin-bottom: 24px !important;
    }
}
    
</style>
          
<body data-spy="scroll" data-target="#topnav-menu" data-offset="60">

    <nav class="navbar navbar-expand-lg navigation fixed-top sticky for_mob_newww">
        <div class="container">
            <a class="navbar-logo" href="index.html">
                <img src="<?php echo e(URL::asset('/assets/images/valyou_x_black_logo.svg')); ?>" alt="" height="40" class="logo logo-dark">
                <img src="<?php echo e(URL::asset('/assets/images/valyou_x_white_logo.svg')); ?>" alt="" height="40" class="logo logo-light">
            </a>

            <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light"
                data-toggle="collapse" data-target="#topnav-menu-content">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <div class="for_height">
                <ul class="navbar-nav ml-auto" id="topnav-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="token-presale">Buy Valyou X Tokens</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="account-balance">Bank</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('projects-list')); ?>">Market</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('socialmedia')); ?>">Social Media</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('tasks-kanban')); ?>">Connect</a>
                    </li>
                    <!--<li class="nav-item">-->
                    <!--    <a class="nav-link" href="#news">Live</a>-->
                    <!--</li>-->
                    <!--<li class="nav-item">-->
                    <!--    <a class="nav-link" href="#news">News</a>-->
                    <!--</li>-->
                    <!--<li class="nav-item">-->
                    <!--    <a class="nav-link" href="#faqs">Store</a>-->
                    <!--</li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="#faqs">Log in</a>
                    </li>

                </ul>
    
                <?php if(auth()->guard()->check()): ?>
                    <div class="ml-lg-2 auth_wrapper">
                        <a href="javascript:void();" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-outline-success w-xs">Logout</a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>
                <?php else: ?>
                    <div class="ml-lg-2">
                        <a href="<?php echo e(route('login')); ?>" class="btn btn-outline-success w-xs">Sign Up</a>
                    </div>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>

    <!-- hero section start -->
    <section class="section hero-section bg-ico-hero" id="home">
        <div class="bg-overlay bg-primary"></div>
        <div class="container">
            <div class="row align-items-center hero_row">
                <div class="col-lg-6 hero_col-1">
                    <div class="text-white-50 mt-5 mt-lg-0 first_sec_text">
                        <h1 class="text-white font-weight-semibold mb-3 hero-title">Buy Valyou X Tokens. </h1>
                        <p class="font-size-14">The Valyou X token is a utility token that will be used to finance the growth of the Valyou X project by growing team morale, business activity, compliance and efficiency, as well as to provide support for building and creating an amazing product that solves problems for our userbase</p>
                        <p class="font-size-14">We are currently conducting a pre-sale for our Valyou X tokens.It aims to provides value to its holders on the platform through exchanges. You will be classified into two distinct groups based on your contribution when you join our team:</p>
                        <p class="font-size-14">Join as an Active Team Member — $10,000 Minimum Contribution — You will receive Valyou X tokens less transaction fees.</p>
                        <p class="font-size-14">Join as a non-active team member for a minimum of $250 and a maximum of $5,000. Contributions up to the maximum amount - You will collect your Valyou X tokens less any transaction fees.</p>
   
                        <div class="button-items mt-4 btn-landing">
                            <a href="#" class="btn btn-green">Get Whitepaper</a>
                            <a href="#" class="btn btn-pink">How it works</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-8 col-sm-10 ml-lg-auto hero_col-2">
                    <div class="card overflow-hidden mb-0 mt-lg-0">
                        <div class="card-header text-center">
                            <h5 class="mb-0">Discounted Price | Limited Time</h5>
                        </div>
                        <div class="card-body">
                            <div class="text-center">

                                <h5>Time Left Pre Sale Round 1</h5>
                                <div class="mt-4">
                                    <div data-countdown="2020/12/31" class="counter-number ico-countdown"></div>
                                </div>

                                <div class="mt-4">
                                    <button type="button" class="btn btn-success w-md btn-green w-75">Buy Valyou X tokens</button>
                                </div>

                                <div class="mt-5">
                                    <h4 class="font-weight-semibold">1 Valyou X token = $0.50 USD Coin</h4>
                                    <div class="clearfix mt-4">
                                        <h5 class="float-right font-size-14">5234.43</h5>
                                    </div>
                                    <div class="progress p-1 progress-xl softcap-progress">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 15%"
                                            aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-label">15 %</div>
                                        </div>
                                        <div class="progress-bar progress-bar-striped progress-bar-animated"
                                            role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0"
                                            aria-valuemax="100">
                                            <div class="progress-label">30 %</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- hero section end -->

    <!-- currency price section start -->
    <section class="section bg-white p-0">
        <div class="container">
            <div class="currency-price">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="avatar-xs mr-3">
                                        <span
                                            class="avatar-title rounded-circle text-warning font-size-18">
                                            <img src="https://valyouxmusic.appprojectsavvy.com/assets/images/bitcoin_logo-removebg-preview.png" class="img-fluid">
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <p class="text-muted">Bitcoin</p>
                                        <h5>$ 9134.39</h5>
                                        <p class="text-muted text-truncate mb-0">+ 0.0012.23 ( 0.2 % ) <i
                                                class="mdi mdi-arrow-up ml-1 text-success"></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="avatar-xs mr-3">
                                        <span
                                            class="avatar-title rounded-circle bg-soft-primary text-primary font-size-18">
                                            <img src="https://valyouxmusic.appprojectsavvy.com/assets/images/ethereum_icon.png" class="img-fluid">
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <p class="text-muted">Ethereum</p>
                                        <h5>$ 245.44</h5>
                                        <p class="text-muted text-truncate mb-0">- 004.12 ( 0.1 % ) <i
                                                class="mdi mdi-arrow-down ml-1 theme-color"></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="avatar-xs mr-3">
                                        <span class="avatar-title rounded-circle text-info font-size-18">
                                            <img src="https://valyouxmusic.appprojectsavvy.com/assets/images/usd-coin-usdc-logo.png" class="img-fluid">
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <p class="text-muted">USD Coin</p>
                                        <h5>$ 63.61</h5>
                                        <p class="text-muted text-truncate mb-0">+ 0.0001.12 ( 0.1 % ) <i
                                                class="mdi mdi-arrow-up ml-1 text-success"></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="avatar-xs mr-3">
                                        <span class="avatar-title rounded-circle text-info font-size-18">
                                            <img src="https://valyouxmusic.appprojectsavvy.com/assets/images/valyou_x_emblem.svg" class="img-fluid">
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <p class="text-muted">Valyou X</p>
                                        <h5>$ 0.50</h5>
                                        <p class="text-muted text-truncate mb-0">+ 0.0001.12 ( 0.1 % ) <i
                                                class="mdi mdi-arrow-up ml-1 text-success"></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- currency price section end -->


    <!-- Footer start -->
    <footer class="landing-footer">
        <div class="container">

            <hr class="footer-border my-5">

            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-4">
                        <img src="<?php echo e(URL::asset('/assets/images/valyou_x_white_logo.svg')); ?>" alt="" height="40">
                    </div>

                    <p class="mb-2">2021 © Valyou X</p>
                    <p>Disclosure Statement</p>
                    <p class="text-justify">"Trading or investing in anything not limited to stocks, securities, is risky, please only invest or with trade money you can afford to lose. No gains or the success of the company or results can be guaranteed in any type of real activity within the platform. Participation in the Valyou X or partners Rewards Plan is not a guarantee of success. Both hard work and following the structure of the Rewards Plan are essential to be in the position for results."</p>
                </div>

            </div>
        </div>
        <!-- end container -->
    </footer>
    <!-- Footer end -->

    <!-- JAVASCRIPT -->
    <script src="<?php echo e(URL::asset('assets/libs/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/bootstrap/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/metismenu/metismenu.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/simplebar/simplebar.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/node-waves/node-waves.min.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('assets/libs/jquery.easing/jquery.easing.min.js')); ?>"></script>

    <!-- Plugins js-->
    <script src="<?php echo e(URL::asset('assets/libs/jquery-countdown/jquery-countdown.min.js')); ?>"></script>

    <!-- owl.carousel js -->
    <script src="<?php echo e(URL::asset('assets/libs/owl.carousel/owl.carousel.min.js')); ?>"></script>

    <!-- ICO landing init -->
    <script src="<?php echo e(URL::asset('assets/js/pages/ico-landing.init.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('assets/js/app.min.js')); ?>"></script>

</body>

</html>
<?php /**PATH /var/www/testvps-main/resources/views/old/token-presale.blade.php ENDPATH**/ ?>