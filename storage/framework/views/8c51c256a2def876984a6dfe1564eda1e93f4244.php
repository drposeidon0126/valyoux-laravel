
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

    .watch-hover:hover {
        cursor: pointer;
    }
</style>
<!-- CURL -->
<?php
$curl = curl_init();

curl_setopt_array($curl, array(
CURLOPT_URL => 'https://api.binance.com/api/v3/ticker/price?symbol=USDCUSDT',
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => '',
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
$USDCUSDT = json_decode($response)->price;

// BTCUSDT
$curl = curl_init();

curl_setopt_array($curl, array(
CURLOPT_URL => 'https://api.binance.com/api/v3/ticker/price?symbol=BTCUSDT',
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => '',
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
$BTCUSDT = json_decode($response)->price;

// ETHUSDT
$curl = curl_init();

curl_setopt_array($curl, array(
CURLOPT_URL => 'https://api.binance.com/api/v3/ticker/price?symbol=ETHUSDT',
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => '',
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
$ETHUSDT = json_decode($response)->price;
?>
<?php $__env->startSection('title'); ?>
<?php echo app('translator')->get('Home'); ?>
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
            <a class="btn btn-token-presale exchange text-hoverevent py-1 logbtns" href="<?php echo e(url('/presell')); ?>">TOKEN
                PRESALE</a>
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
                            <a class="nav-item font-weight-700 txt-xl menu-col cursur-pointer mt-2"
                                href="<?php echo e(url('/presell')); ?>">Token Presale</a>
                            <a class="nav-item font-weight-700 txt-xl menu-col cursur-pointer"
                                href="<?php echo e(url('/login')); ?>">Login / sign up</a>
                            <a class="nav-item font-weight-700 txt-xl menu-col cursur-pointer"
                                href="<?php echo e(url('/')); ?>">Home</a>
                            <a class="nav-item font-weight-700 txt-xl menu-col cursur-pointer"
                                href="<?php echo e(url('/market')); ?>">Market</a>
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
                    BITCOIN
                    (BTC) &nbsp;=&nbsp; $
                    <p><?php echo e($BTCUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
                    <p class="text-red"> - 0.15% </p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1
                    Valyou X Dollar
                    (VXD) = &nbsp;&nbsp; $
                    <p><?php echo e($USDCUSDT ?? ''); ?> USDC</p> &nbsp;&nbsp;
                    <p class="text-red"> - 0.1% </p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1
                    VALYOU X MUSIC
                    (VALYOU X) = &nbsp;&nbsp;
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
                    BITCOIN
                    (BTC) &nbsp;=&nbsp; $
                    <p><?php echo e($BTCUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
                    <p class="text-red"> - 0.15% </p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1
                    Valyou X Dollar
                    (VXD) = &nbsp;&nbsp; $
                    <p><?php echo e($USDCUSDT ?? ''); ?> USDC</p> &nbsp;&nbsp;
                    <p class="text-red"> - 0.1% </p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1
                    VALYOU X MUSIC
                    (VALYOU X) = &nbsp;&nbsp;
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
                    BITCOIN
                    (BTC) &nbsp;=&nbsp; $
                    <p><?php echo e($BTCUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
                    <p class="text-red"> - 0.15% </p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1
                    Valyou X Dollar
                    (VXD) = &nbsp;&nbsp; $
                    <p><?php echo e($USDCUSDT ?? ''); ?> USDC</p> &nbsp;&nbsp;
                    <p class="text-red"> - 0.1% </p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1
                    VALYOU X MUSIC
                    (VALYOU X) = &nbsp;&nbsp;
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
                    BITCOIN
                    (BTC) &nbsp;=&nbsp; $
                    <p><?php echo e($BTCUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
                    <p class="text-red"> - 0.15% </p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1
                    Valyou X Dollar
                    (VXD) = &nbsp;&nbsp; $
                    <p><?php echo e($USDCUSDT ?? ''); ?> USDC</p> &nbsp;&nbsp;
                    <p class="text-red"> - 0.1% </p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1
                    VALYOU X MUSIC
                    (VALYOU X) = &nbsp;&nbsp;
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
                    BITCOIN
                    (BTC) &nbsp;=&nbsp; $
                    <p><?php echo e($BTCUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
                    <p class="text-red"> - 0.15% </p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1
                    Valyou X Dollar
                    (VXD) = &nbsp;&nbsp; $
                    <p><?php echo e($USDCUSDT ?? ''); ?> USDC</p> &nbsp;&nbsp;
                    <p class="text-red"> - 0.1% </p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1
                    VALYOU X MUSIC
                    (VALYOU X) = &nbsp;&nbsp;
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
                    BITCOIN
                    (BTC) &nbsp;=&nbsp; $
                    <p><?php echo e($BTCUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
                    <p class="text-red"> - 0.15% </p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1
                    Valyou X Dollar
                    (VXD) = &nbsp;&nbsp; $
                    <p><?php echo e($USDCUSDT ?? ''); ?> USDC</p> &nbsp;&nbsp;
                    <p class="text-red"> - 0.1% </p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1
                    VALYOU X MUSIC
                    (VALYOU X) = &nbsp;&nbsp;
                    <p>$0.50 USDC</p> &nbsp;&nbsp;
                    <p class="text-green"> +2.5% </p>
                </div>
            </div>
            <div class="row my-5" ">
                <div class=" col-md-6 col-sm-12 col-xs-12 flex ">
                    <div class=" pl-3 m-auto">
                <p class="txt-sky w-full bg-sky text-center txt-bold txt-xl p-05">The World's First Blockchain
                    Powered</p>
                <p class="font-weight-bold intro-text text-dark">Music Artist <span class="financial_stk">Financial
                        Stock</span> Market</p>
                <div class="lead ms_desc">Linked to a new global music industry & economy powered by
                    decentralised finance. Purchase NFT digital asset stocks in any Upcoming, Independent &
                    Major Artist brand & receive a portion of their revenue as dividends for holding their
                    stock.</div>
                <br>
                <div class="row" style="display:flex; flex-direction: row; flex-wrap: nowrap;">
                    <a href="https://forms.gle/JgzGnxYopcPo4f6Q8" target="_blank"
                        class="btn btn-pink w-auto btn-sm w-md waves-effect waves-light mr-2 ml-3 d-flex p-3">
                        <span class="m-auto">GET EARLY ACCESS</span></a>
                    <div class="row mx-3 align-center justify-center txt-xl mt-1">
                        <div class="rounded-circle play-border mr-2 watch-video"><i
                                class="mdi mdi-play accor-plus-icon text-2xl"></i></div>
                        Watch Video
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12 d-flex align-center">
            <div class="p-4">
                <img src="<?php echo e(asset('assets/images/valyoux_img.jpg')); ?>" alt="" class="w-full">
            </div>
        </div>
    </div>
    <div class="shadow-ssm p-3 text-3xl txt-bold txt-title mt-5 mb-3">Valyou X - Is A Multi Award Winning
        Start-Up</div>
    <div class="grid gap-4 grid-cols-2 place-content-between">
        <div
            class="h-130 shadow-ssm p-3 text-xl txt-bold txt-title d-flex gap-3 flex-column w-full  d-flex justify-center align-center">
            <img src="<?php echo e(asset('assets/images/download.png')); ?>" style="height: 70">
            <div class="text-xm text-imgdec">Alibaba Group Award Winner</div>
        </div>
        <div
            class="h-130 shadow-ssm p-3 text-xl txt-bold txt-title d-flex gap-3 flex-column w-full  d-flex justify-center align-center">
            <img src="<?php echo e(asset('assets/images/alibabacloud_icon.svg')); ?>" style="height: 70">
            <div class="text-xm text-imgdec">Alibaba Group Award Winner</div>
        </div>
        <div
            class="h-130 shadow-ssm p-3 text-xl txt-bold txt-title d-flex gap-3 flex-column w-full  d-flex justify-center align-center">
            <img src="<?php echo e(asset('assets/images/download-1.png')); ?>" style="height: 70">
            <div class="text-xm text-imgdec">Alibaba Group Award Winner</div>
        </div>
        <div
            class="h-130 shadow-ssm p-3 text-xl txt-bold txt-title d-flex gap-3 flex-column w-full  d-flex justify-center align-center">
            <img src="<?php echo e(asset('assets/images/download-3.png')); ?>" style="height: 70">
            <div class="text-xm text-imgdec">Alibaba Group Award Winner</div>
        </div>
        <div
            class="h-130 shadow-ssm p-3 text-xl txt-bold txt-title d-flex gap-3 flex-column w-full  d-flex justify-center align-center">
            <img src="<?php echo e(asset('assets/images/download-5.png')); ?>" style="height: 70"">
                    <div class=" text-xm text-imgdec">Alibaba Group Award Winner
        </div>
    </div>
    <div
        class="h-130 shadow-ssm p-3 text-xl txt-bold txt-title d-flex gap-3 flex-column w-full  d-flex justify-center align-center">
        <img src="<?php echo e(asset('assets/images/download-4.jpg')); ?>" style="height: 70">
        <div class="text-xm text-imgdec">Alibaba Group Award Winner</div>
    </div>
    <div
        class="h-130 shadow-ssm p-3 text-xl txt-bold txt-title d-flex gap-3 flex-column w-full  d-flex justify-center align-center">
        <img src="<?php echo e(asset('assets/images/download-6.png')); ?>" style="height: 70"">
                    <div class=" text-xm text-imgdec">Alibaba Group Award Winner
    </div>
    </div>
    <div
        class="h-130 shadow-ssm p-3 text-xl txt-bold txt-title d-flex gap-3 flex-column w-full  d-flex justify-center align-center">
        <img src="<?php echo e(asset('assets/images/download-7.png')); ?>" style="height: 70">
        <div class="text-xm text-imgdec">Alibaba Group Award Winner</div>
    </div>
    <div
        class="h-130 shadow-ssm p-3 text-xl txt-bold txt-title d-flex gap-3 flex-column w-full  d-flex justify-center align-center">
        <img src="<?php echo e(asset('assets/images/download-8.png')); ?>" style="height: 70">
        <div class="text-xm text-imgdec">Alibaba Group Award Winner</div>
    </div>
    <div
        class="h-130 shadow-ssm p-3 text-xl txt-bold txt-title d-flex gap-3 flex-column w-full  d-flex justify-center align-center">
        <img src="<?php echo e(asset('assets/images/fintech_logo.png')); ?>" style="height: 70">
    </div>
    </div>
    <div class="mt-13">
        <div class="shadow-ssm d-flex row-reverse py-4 justify-center align-center">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <p class="font-weight-bold intro-text text-dark text-start">We are <span
                        class="financial_stk">rebuilding</span> the <span class="music_stk">music</span>
                    industry</p>
                <div class="lead ms_desc  text-start">Valyou X is creating the world’s first music artist stock
                    and financial market, where you can invest in music artists’ brands, as listed stocks.
                    Blockchain Technology is at the heart of it. However, first to begin, we must rebuild the
                    entire music industry in order to serve as a globally scalable digital hub for the entire
                    music industry. A platform that enables aspiring artists to use their music to launch a
                    profitable business and then connects to the financial markets trusted by Blockchain.
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <img src="<?php echo e(asset('assets/images/download.jpg')); ?>" alt="" class="w-full rounded">
            </div>
        </div>
    </div>
    <div class="mt-13">
        <p class="font-weight-bold intro-text text-dark text-center">See <span class="music_stk">how it</span>
            works</p>
        <div class="lead ms_desc text-center">All users, Music Artists, Fans as investors and Businessess buy
            Valyou X tokens for access into the app.</div>
        <img src="<?php echo e(asset('assets/images/howitworks.svg')); ?>" alt="" class="w-full rounded mt-3" width="800"
            height="800">
    </div>

    <div class="mt-3">
        <p class="font-weight-bold intro-text text-dark text-center mt-5">Main <span
                class="financial_stk">Problems</span> & Solutions</p>
        <div id="gen-ques-accordion" class="accordion custom-accordion">
            <div class="mb-3">
                <a href="#general-collapseOne" class="accordion-list" data-toggle="collapse" aria-expanded="true"
                    aria-controls="general-collapseOne">

                    <div class="text-dark text-2xl">Music Artist.</div>
                    <i class="mdi mdi-minus accor-plus-icon"></i>

                </a>

                <div id="general-collapseOne" class="collapse show p-3" data-parent="#gen-ques-accordion">
                    <div class="">
                        <p class="mb-0 text-start text-card text-xl">Cost to launch music career Independently
                            is very expensive, estimated around $500K to $2M<br />
                            An exchange where Music artists list as their own startups, music fans can
                            invest.<br /><br />

                            Streaming platforms significantly shortchanges the value of the average music
                            artist.<br />
                            DEFI pay per/view streaming with increased NFT value for unlimited song
                            access.<br /><br />

                            No way to connect with quality assured reputable music industry professionals.<br />
                            Marketplace to connect businesses offering pro services to listed artists
                            brands.<br /><br />

                            Artists lack a business mindset and understanding of music industry contracts.<br />
                            Smart Contract & Fund Management, reduce risk & still maximise profits for
                            investors.<br /><br />

                            Upcoming, Independent & Major Artists. All artists can get listed and raise the
                            capital they need to launch or enhance their music careers or brand. Imagine 20,000
                            of your true fans invested $100 that is $2,000,000 for you to build your brand and
                            stay in control of your business independent or signed inside a new global music
                            Industry and artist focused economy.<br /></p>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <a href="#general-collapseTwo" class="accordion-list collapsed" data-toggle="collapse"
                    aria-expanded="false" aria-controls="general-collapseTwo">
                    <div class="text-dark text-2xl">Investors.</div>
                    <i class="mdi mdi-minus accor-plus-icon"></i>
                </a>
                <div id="general-collapseTwo" class="collapse p-3" data-parent="#gen-ques-accordion">
                    <div class="">
                        <p class="mb-0 text-start text-card text-xl">Imagine at the click of a button you could
                            own a share in Justin Bieber, Beyonce's brand? Most importantly imagine investing in
                            your friend, or favourite upcoming artists that you discovered or follow online and
                            got paid a profit share of the royalties generated from that artist brand directly
                            into your account digital wallet, as a return on investment from their brands growth
                            in revenue generated across the industry.<br />

                            Most people have a friend or family aspiring to become music artists. Record labels
                            simply cannot sign every single artist on the planet.<br />
                            Artist brands, such as Jay Z, Kanye West who are worth billions through successful
                            music careers, the establishment and funding of their own music label, and making
                            smart investments. Assume you had the option to invest into it, into their brand
                            when they were upcoming startup artists and held that stock till now with an
                            opportunity for generating passive income from royalties & being a true fan with
                            skin in the game automatically sharing in their success.<br /></p>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <a href="#general-collapseThree" class="accordion-list collapsed" data-toggle="collapse"
                    aria-expanded="false" aria-controls="general-collapseThree">
                    <div class="text-dark text-2xl">Business.</div>
                    <i class="mdi mdi-minus accor-plus-icon"></i>
                </a>
                <div id="general-collapseThree" class="collapse p-3" data-parent="#gen-ques-accordion">
                    <div class="">
                        <p class="mb-0 text-start text-card text-xl">All businesses, freelancers services can
                            connect and grow with artist brands, such as Producers, Song writers, Beat maker,
                            Advertisers, Radio, Influencers, Artist managers, Record labels, Spotify, YouTube,
                            Soundcloud + more.</p>
                    </div>
                </div>
            </div>

            <div>
                <a href="#general-collapseFour" class="accordion-list collapsed" data-toggle="collapse"
                    aria-expanded="false" aria-controls="general-collapseFour">
                    <div class="text-dark text-2xl">Blockchain.</div>
                    <i class="mdi mdi-minus accor-plus-icon"></i>
                </a>
                <div id="general-collapseFour" class="collapse p-3" data-parent="#gen-ques-accordion">
                    <div class="">
                        <p class="mb-0 text-start text-card text-xl">The Valyou X Token is a cryptocurrency that
                            is required for entry into the new global Global Music Industry.By staking Valyou X
                            tokens against the platform' s stable currency VXD. It may be used for payments,
                            streaming, and investment in tokenised music artist brands as a new type of digital
                            asset, enhancing investor confidence and preventing fraud.</p>
                    </div>
                </div>
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
        <div class="text-start text-white px-5 text-xm"><br />All images with or without permission and its terms of use
            as modified are simply for demo purposes. Valyou X isn’t intending to mislead or misrepresent any artist
            listed. We just want the world to be able to better understand the idea, our vision and to better assist us
            with its execution.</div>
    </div>

    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('script'); ?>
    <script>
        $(function () {
            $('.watch-video').on('click', function () {
                window.open(
                    "https://drive.google.com/file/d/1ul1z217vLUFmPQWKF5X8TYnSULl1TPpW/view",
                    "_blank"
                );
            });
        });

    </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-without-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\task\Current\Valyou X\new work(12.6)\valyoux_backend(working now)\valyoux_backend\valyoux_backend\resources\views/home.blade.php ENDPATH**/ ?>