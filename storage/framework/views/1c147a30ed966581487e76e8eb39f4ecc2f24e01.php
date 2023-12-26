
<style>
    .scrolling {
        text-transform: uppercase;
    }

    .scrolling-wrapper {
        overflow-x: scroll;
        cursor: grab;
    }

    .scrolling-wrapper::-webkit-scrollbar {
        display: none;
    }

    /* Hide scrollbar for IE, Edge and Firefox */
    .scrolling-wrapper {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
    }

    .scrolling-wrapper.active {
        cursor: grabbing !important;
        cursor: -webkit-grabbing !important;
        transform: scale(1);
    }

    .scrolling {
        font-size: 14px !important;
        color: black;
    }


    .btn:hover {
        background-color: white;
    }
</style>
<?php $__env->startSection('title'); ?>
<?php echo app('translator')->get('Presell'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>

<body>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>

    <div class="row logo-div justify-between align-center">
        <div class="col-5 col-lg-3">
            <a href="<?php echo e(url('/')); ?>"> <img src="<?php echo e(asset('assets/images/valyou_x_black_logo.svg')); ?>" alt=""
                    class="img-fluid logo-img"></a>
        </div>
        <div class="mr-5 d-flex gap-2">
            <a class="btn btn-outline-success exchange bg-hoverevent py-1 logbtns" href="<?php echo e(url('/login')); ?>">Login</a>
            <a class="btn btn-token-presale exchange text-hoverevent py-1 logbtns" href="<?php echo e(url('/')); ?>">HOME</a>
            <div>
                <button class="menu-hoverevent py-1 border-none" data-toggle="modal" data-target="#exampleModal">
                    <i class="mdi mdi-menu accor-plus-icon menuItem-col"></i></button>
            </div>
        </div>
    </div>
    <div class="container demo">
        <div class="text-center">
        </div>
        <div class="modal left fade" id="exampleModal" tabindex="" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="nav flex-sm-column flex-column">
                            <img src="<?php echo e(asset('assets/images/valyou_x_black_logo.svg')); ?>" alt="" width="200"
                                height="50">
                            <a class="nav-item font-weight-700 txt-xl menu-col cursur-pointer mt-2">Token Presale</a>
                            <a class="nav-item font-weight-700 txt-xl menu-col cursur-pointer"
                                href="<?php echo e(url('/login')); ?>">Login / sign up</a>
                            <a class="nav-item font-weight-700 txt-xl menu-col cursur-pointer">Home</a>
                            <a class="nav-item font-weight-700 txt-xl menu-col cursur-pointer">Market</a>
                            <a class="nav-item font-weight-700 txt-xl menu-col cursur-pointer">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex h-min80">
        <div class="px-5 w-full">
            <div class="scrolling-wrapper">
                <div class="scrolling"> EXCHANGE RATES
                    <span class="pink">:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo e(asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg')); ?>" width="15"
                        height="15" alt="">&nbsp;&nbsp;1 ETHEREUM (ETH) &nbsp;=&nbsp;
                    <p>0.02776 BTC</p> &nbsp;=&nbsp; $
                    <p><?php echo e($ETHUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
                    <p class="text-green"> + 0.25% </p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo e(asset('assets/images/valyoux/bitcoinlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1
                    BITCOIN (BTC) &nbsp;=&nbsp; $
                    <p><?php echo e($BTCUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
                    <p class="text-red"> - 0.15% </p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1
                    Valyou X Dollar (VXD) = &nbsp;&nbsp; $
                    <p><?php echo e($USDCUSDT ?? ''); ?> USDC</p> &nbsp;&nbsp;
                    <p class="text-red"> - 0.1% </p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1
                    VALYOU X MUSIC (VALYOU X) = &nbsp;&nbsp;
                    <p>$0.50 USDC</p> &nbsp;&nbsp;
                    <p class="text-green"> +2.5% </p>
                    &nbsp;&nbsp;&nbsp;

                    EXCHANGE RATES
                    <span class="pink">:</span>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo e(asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg')); ?>" width="15"
                        height="15" alt="">&nbsp;&nbsp;1 ETHEREUM (ETH) &nbsp;=&nbsp;
                    <p>0.02776 BTC</p> &nbsp;=&nbsp; $
                    <p><?php echo e($ETHUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
                    <p class="text-green"> + 0.25% </p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo e(asset('assets/images/valyoux/bitcoinlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1
                    BITCOIN (BTC) &nbsp;=&nbsp; $
                    <p><?php echo e($BTCUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
                    <p class="text-red"> - 0.15% </p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1
                    Valyou X Dollar (VXD) = &nbsp;&nbsp; $
                    <p><?php echo e($USDCUSDT ?? ''); ?> USDC</p> &nbsp;&nbsp;
                    <p class="text-red"> - 0.1% </p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1
                    VALYOU X MUSIC (VALYOU X) = &nbsp;&nbsp;
                    <p>$0.50 USDC</p> &nbsp;&nbsp;
                    <p class="text-green"> +2.5% </p>
                    &nbsp;&nbsp;&nbsp;

                    EXCHANGE RATES
                    <span class="pink">:</span>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo e(asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg')); ?>" width="15"
                        height="15" alt="">&nbsp;&nbsp;1 ETHEREUM (ETH) &nbsp;=&nbsp;
                    <p>0.02776 BTC</p> &nbsp;=&nbsp; $
                    <p><?php echo e($ETHUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
                    <p class="text-green"> + 0.25% </p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo e(asset('assets/images/valyoux/bitcoinlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1
                    BITCOIN (BTC) &nbsp;=&nbsp; $
                    <p><?php echo e($BTCUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
                    <p class="text-red"> - 0.15% </p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1
                    Valyou X Dollar (VXD) = &nbsp;&nbsp; $
                    <p><?php echo e($USDCUSDT ?? ''); ?> USDC</p> &nbsp;&nbsp;
                    <p class="text-red"> - 0.1% </p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1
                    VALYOU X MUSIC (VALYOU X) = &nbsp;&nbsp;
                    <p>$0.50 USDC</p> &nbsp;&nbsp;
                    <p class="text-green"> +2.5% </p>
                    &nbsp;&nbsp;&nbsp;

                    EXCHANGE RATES
                    <span class="pink">:</span>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo e(asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg')); ?>" width="15"
                        height="15" alt="">&nbsp;&nbsp;1 ETHEREUM (ETH) &nbsp;=&nbsp;
                    <p>0.02776 BTC</p> &nbsp;=&nbsp; $
                    <p><?php echo e($ETHUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
                    <p class="text-green"> + 0.25% </p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo e(asset('assets/images/valyoux/bitcoinlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1
                    BITCOIN (BTC) &nbsp;=&nbsp; $
                    <p><?php echo e($BTCUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
                    <p class="text-red"> - 0.15% </p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1
                    Valyou X Dollar (VXD) = &nbsp;&nbsp; $
                    <p><?php echo e($USDCUSDT ?? ''); ?> USDC</p> &nbsp;&nbsp;
                    <p class="text-red"> - 0.1% </p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1
                    VALYOU X MUSIC (VALYOU X) = &nbsp;&nbsp;
                    <p>$0.50 USDC</p> &nbsp;&nbsp;
                    <p class="text-green"> +2.5% </p>
                    &nbsp;&nbsp;&nbsp;

                    EXCHANGE RATES
                    <span class="pink">:</span>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo e(asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg')); ?>" width="15"
                        height="15" alt="">&nbsp;&nbsp;1 ETHEREUM (ETH) &nbsp;=&nbsp;
                    <p>0.02776 BTC</p> &nbsp;=&nbsp; $
                    <p><?php echo e($ETHUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
                    <p class="text-green"> + 0.25% </p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo e(asset('assets/images/valyoux/bitcoinlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1
                    BITCOIN (BTC) &nbsp;=&nbsp; $
                    <p><?php echo e($BTCUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
                    <p class="text-red"> - 0.15% </p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1
                    Valyou X Dollar (VXD) = &nbsp;&nbsp; $
                    <p><?php echo e($USDCUSDT ?? ''); ?> USDC</p> &nbsp;&nbsp;
                    <p class="text-red"> - 0.1% </p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1
                    VALYOU X MUSIC (VALYOU X) = &nbsp;&nbsp;
                    <p>$0.50 USDC</p> &nbsp;&nbsp;
                    <p class="text-green"> +2.5% </p>
                    &nbsp;&nbsp;&nbsp;

                    EXCHANGE RATES
                    <span class="pink">:</span>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo e(asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg')); ?>" width="15"
                        height="15" alt="">&nbsp;&nbsp;1 ETHEREUM (ETH) &nbsp;=&nbsp;
                    <p>0.02776 BTC</p> &nbsp;=&nbsp; $
                    <p><?php echo e($ETHUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
                    <p class="text-green"> + 0.25% </p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo e(asset('assets/images/valyoux/bitcoinlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1
                    BITCOIN (BTC) &nbsp;=&nbsp; $
                    <p><?php echo e($BTCUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
                    <p class="text-red"> - 0.15% </p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1
                    Valyou X Dollar (VXD) = &nbsp;&nbsp; $
                    <p><?php echo e($USDCUSDT ?? ''); ?> USDC</p> &nbsp;&nbsp;
                    <p class="text-red"> - 0.1% </p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1
                    VALYOU X MUSIC (VALYOU X) = &nbsp;&nbsp;
                    <p>$0.50 USDC</p> &nbsp;&nbsp;
                    <p class="text-green"> +2.5% </p>
                </div>
            </div>
            <div class="row my-5 lg:ml-{120px}" >
                <div class="col-md-6 col-sm-12 col-xs-12 flex">
                    <div class="pl-3 m-auto">
                        <p class="txt-sky w-full bg-sky text-center txt-bold txt-xl p-05"
                            style="color: #a998f4; font-family: Roboto; ont-weight: 500; font-size: 14px">Get early
                            access to Valyou X tokens pre-launch!</p>
                        <p class="font-weight-bold intro-text " style="color: #050f3f"> <span
                                class="financial_stk">Valyou X</span> token</p>
                        <div class="lead ms_desc" style=" font-family: 'Roboto',sans-serif">To be a member of the new
                            music industry Valyou X Ecosystem, you must hold ValyouX Token. Purchasing the Valyou X
                            Token gives individuals and businesses the opportunity to join the Valyou X team. A group of
                            early adopter supporters known as Valyou X citizens who help with the platform’s growth,
                            support, and development. Depending on Valyou X’s success. The value of this token may
                            increase or decrease</div>
                        <br>
                        <div class="row">
                            <!-- <a href="/" class="btn btn-pink w-auto btn-sm w-md waves-effect waves-light mr-2 ml-3 d-flex p-3" > <span class="m-auto">GET EARLY ACCESS</span></a> -->
                            <div class="row mx-3 align-center justify-center txt-xl mt-1">
                                <!-- <div class="rounded-circle play-border mr-2"><i class="mdi mdi-play accor-plus-icon text-2xl"></i></div>
                                    Watch Video -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 d-flex align-center">
                    <div class="p-4">
                        <img src="<?php echo e(asset('assets/images/valyoux/valyoux_black_logo.svg')); ?>" alt="" class="w-full">
                    </div>
                </div>
            </div>
            <div class="container py-8">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-4 p-3">
                        <div class="card bg-white border rounded">
                            <div class="card-body px-3">
                                <h2 class="text-center text-uppercase bg-withe rounded px-2 py-3"
                                    style="font-size: 16px; letter-spacing: -.025em; font-family: 'Roboto',sans-serif font-weight: 600; color:#050f3f">
                                    Standard</h2>
                                <h2 class="text-center py-3"
                                    style="font-size: 2.5rem; line-height: 2.5rem; letter-spacing: -.025em; font-weight: 700; font-family: 'Roboto',sans-serif">
                                    $10.00</h2>
                                <ul class="list-unstyled">
                                    <li class="text-muted py-3 text-center"
                                        style="font-size: 16px; color: rgb(107 114 128 1); font-family: 'Roboto',sans-serif;">
                                        5 Valyou X Tokens</li>
                                    <li class="text-muted py-3 text-center"
                                        style="font-size: 16px; color: rgb(107 114 128 1); font-family: 'Roboto',sans-serif;">
                                        Non Active Team Member</li>
                                </ul>
                                <a class="btn px-2 w-100"
                                    style="background-color: #ff4680; color: white; font-weight: 600; font-size: 16px; border-radius: 0.5rem;" href="<?php echo e(url('/account-balance')); ?>">PRESELL</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 p-3">
                        <div class="card bg-white border rounded">
                            <div class="card-body px-3">
                                <h2 class="text-center text-uppercase bg-withe rounded px-2 py-3"
                                    style="font-size: 16px; letter-spacing: -.025em; font-family: 'Roboto',sans-serif font-weight: 600; color:#050f3f">
                                    GOLD</h2>
                                <h2 class="text-center py-3"
                                    style="font-size: 2.5rem; line-height: 2.5rem; letter-spacing: -.025em; font-weight: 600; font-family: 'Roboto',sans-serif color: black;">
                                    $10,000.00</h2>
                                <ul class="list-unstyled">
                                    <li class="text-muted py-3 text-center"
                                        style="font-size: 16px; color: rgb(107 114 128 1); font-family: 'Roboto',sans-serif;">
                                        20,000 Valyou X Tokens</li>
                                    <li class="text-muted py-3 text-center"
                                        style="font-size: 16px; color: rgb(107 114 128 1); font-family: 'Roboto',sans-serif;">
                                        Active Team Member</li>
                                </ul>
                                <a class="btn px-2 w-100"
                                    style="background-color: #ff4680; color: white; font-weight: 600; font-size: 16px; border-radius: 0.5rem;" href="<?php echo e(url('/account-balance')); ?>">PRESELL</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 p-3">
                        <div class="card bg-white border rounded">
                            <div class="card-body px-3">
                                <h2 class="text-center text-uppercase bg-withe rounded px-2 py-3"
                                    style="font-size: 16px; letter-spacing: -.025em; font-family: 'Roboto',sans-serif font-weight: 600; color:#050f3f">
                                    PLATINUM</h2>
                                <h2 class="text-center py-3"
                                    style="font-size: 2.5rem; line-height: 2.5rem; letter-spacing: -.025em; font-weight: 700; font-family: 'Roboto',sans-serif">
                                    $100,000.00</h2>
                                <ul class="list-unstyled">
                                    <li class="text-muted py-3 text-center"
                                        style="font-size: 16px; color: rgb(107 114 128 1); font-family: 'Roboto',sans-serif;">
                                        200,000 Valyou X Tokens</li>
                                    <li class="text-muted py-3 text-center"
                                        style="font-size: 16px; color: rgb(107 114 128 1); font-family: 'Roboto',sans-serif;">
                                        Founding Member Investor</li>
                                </ul>
                                <a class="btn px-2 w-100"
                                    style="background-color: #ff4680; color: white; font-weight: 600; font-size: 16px; border-radius: 0.5rem;" href="<?php echo e(url('/account-balance')); ?>">PRESELL</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container py-8">
                <p class="font-weight-bold intro-text " style="color: #050f3f"> PreSale <span class="financial_stk">Fund
                    </span>& breakdown</p>
                <div class="row justify-content-center" >
                    <div class="col-12 col-lg-4 p-3">
                        <div class="card bg-white border rounded" style="height: 320px">
                            <div class="card-body">
                                <h2 class="font-weight-bold text-center" > <span class="financial_stk">Software
                                        Engineering
                                    </span></h2>
                                <p class=" text-muted text-left" style="color: gray; font-size: 14px" >35% of the cash will be used to continue to
                                    develop the Valyou X platform and undertake system updates, which will include
                                    budgets for team recruitment, training, and development.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 p-3">
                        <div class="card bg-white border rounded" style="height: 320px">
                            <div class="card-body">
                                <h2 class="font-weight-bold text-center"> <span class="financial_stk">Branding &
                                        Marketing
                                    </span></h2>
                                <p class="font-normal text-gray-700 text-left">50% of the funds will be utilised to promote and
                                    educate the public about Valyou X and blockchain advancements through industry
                                    outlets. A significant advertising budget to assist Valyou X in gaining investor
                                    interest and attracting active users to the platform.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 p-3">
                        <div class="card bg-white border rounded" style="height: 320px">
                            <div class="card-body">
                                <h2 class="font-weight-bold text-center"> <span class="financial_stk">Software
                                        Engineering
                                    </span></h2>
                                <p class="font-normal text-gray-700 text-left">15% will be set aside in reserve to deal with any
                                    emergency or unexpected circumstances that may arise.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-black px-15 d-flex flex-column align-center justify-center mt-5">
                <img src="<?php echo e(asset('assets/images/logo_white.svg')); ?>" alt="" class="rounded" width="250" height="80">

                <div class="bg-transparent">
                    <div class="d-flex gap-2 mb-0 team-social-links">
                        <div class="flex-fill text-white">
                            <i class="mdi mdi-instagram text-2xl"></i>
                        </div>
                        <div class="flex-fill text-white">
                            <i class="mdi mdi-facebook text-2xl"></i>
                        </div>
                        <div class="flex-fill text-white">
                            <i class="mdi mdi-twitter text-2xl"></i>
                        </div>
                        <div class="flex-fill text-white">
                            <i class="mdi mdi-github text-2xl"></i>
                        </div>
                    </div>
                </div>
                <div class="text-start text-white px-5 text-xm"><br />All images with or without permission and its
                    terms of use as modified are simply for demo purposes. Valyou X isn’t intending to mislead or
                    misrepresent any artist listed. We just want the world to be able to better understand the idea, our
                    vision and to better assist us with its execution.</div>
            </div>

            <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-without-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\task\Current\Valyou X\git download\valyoux_backend\resources\views/presell.blade.php ENDPATH**/ ?>