<?php $__env->startSection('pageCSS'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/css/pages/projects-list.css?v0.2')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/css/pages/microtip.css')); ?>">
<?php $__env->stopSection(); ?>





<?php $__env->startSection('title'); ?> Market <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<style>
    .pagination-loadmore {
        padding: 12px !important;
    }

    .pagination-loadmore td {
        width: 100% !important;
        max-width: unset !important;
    }

    .pagination-loadmore td a {
        color: #050f2f !important;
    }

    .pagination-loadmore td a:hover {
        color: #1cea2c !important;
    }

    .trade-market {
        display: inline-block;
        border: none;
        background: linear-gradient(77deg, #050F2F, #050F2F 100%);
        padding: 8px 25px;
        color: #fff;
        font-weight: 600;
        font-size: 14px;
        letter-spacing: 1px;
        border-radius: 4px;
        transition: all 0.3s ease-in-out;
    }

    .trade-market :hover {
        background: linear-gradient(77deg, #ff0093, #ff0093 100%);
    }


    .pagination-loadmore td {
        text-align: center;
    }

    table#project-list-table-web thead {
        color: 000;
    }

    .font-size-14 {
        font-size: 14px;
    }

    .search-bar-web {
        justify-content: start !important;
    }

    .project-list-table {
        float: left !important;
        border-spacing: 12px !important;
    }

    .background-shadow {
        background: #fff;
        box-shadow: 0 0 9.3578px rgba(0, 0, 0, .1);
        border-radius: 10px;
    }

    .table-responsive-web {
        overflow-x: auto !important;
    }

    /* seacrch and filter bar */
    .css-vubbuv {
        user-select: none;
        width: 1em;
        height: 1em;
        display: inline-block;
        fill: currentcolor;
        flex-shrink: 0;
        transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        font-size: 1.5rem;
    }

    .search-filter-bar {
        background: #fff;
        box-shadow: 0 0 9.3578px rgba(0, 0, 0, .1);
        border-radius: 9999px;
        font-family: Roboto, sans-serif;
        font-style: normal;
        -webkit-transform: translateZ(0);
        color: #050f3f;
        font-size: 16px
    }

    .outline-none-pro {
        outline: 2px solid transparent;
        outline-offset: 2px
    }

    .css-orq8zk {
        overflow: hidden;
        min-height: 48px;
        display: flex;
    }

    .css-1anid1y {
        position: relative;
        display: inline-block;
        flex: 1 1 auto;
        white-space: nowrap;
        overflow-x: hidden;
        width: 100%;
    }

    .MuiTabs-scroller {
        overflow: auto !important;
    }

    .css-k008qs {
        display: flex;
    }

    .css-118dy7j {
        position: absolute;
        height: 2px;
        bottom: 0px;
        width: 100%;
        transition: all 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        background-color: rgb(255, 0, 147);
    }

    .css-1ewhnov.Mui-selected {
        color: rgb(255, 0, 147);
    }

    .css-1ewhnov {
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
        text-transform: none;
        font-weight: 700;
        color: rgb(5, 15, 63);
    }

    .css-k008qs a {
        text-decoration: none;
    }

    .tab-select .active {
        color: #ff0093 !important;
        outline: 0;
        -webkit-text-decoration: underline solid white 2px !important;
        text-decoration: underline solid #ffff 2px !important;
    }

    @media (max-width: 1300px) {
        .table-responsive-web table {
            width: 1200px !important;
        }

        .tab-select {
            overflow-x: scroll;
        }
    }

    @media  only screen and (orientation: landscape) and (min-device-width: 320px) and (max-device-width: 820px) {
        .table-responsive-m {
            display: block !important;
        }

        .table-responsive-web {
            display: none !important;
        }

        .tab-select.search-bar-web a.active {
            outline: none;
            text-decoration: none solid #ff0093 0px !important;
            color: #e84e89;
            position: relative;
        }

        .table-responsive-m tr td:nth-child(1) {
            max-width: 100% !important;
            white-space: initial !important;
            /* background:green; */
            min-width: none
        }
    }

    @media (max-width: 768px) {
        .tab-select.search-bar-web a.active {
            outline: none;
            text-decoration: none solid #ff0093 0px !important;
            color: #e84e89;
            position: relative;
        }


        .table-responsive-m tr td:nth-child(1) {
            max-width: 100% !important;
            white-space: initial !important;
            /* background:green; */
            /* min-width:none */
        }
    }

    .project-list-table tr {
        background: #fff !important;
        box-shadow: 0 0 9.3578px rgba(0, 0, 0, .1) !important;
        border-radius: 10px !important;
        border-radius: 9999px;
        font-family: Roboto, sans-serif;
        font-style: normal;
        -webkit-transform: translateZ(0);
        color: #050f3f;
        font-size: 16px
    }

    @media  screen and (max-width: 650px) {
        .project-list-table {
            border-spacing: 1px !important;
        }

        .project-list-table tr {
            padding: 5px !important;
        }

        .row-btn-margin a {
            margin-right: -13px !important
        }

        .row-btn-margin span {
            width: 70px !important
        }


        .table-responsive-m tr td:nth-child(1) {
            max-width: 100% !important;
            /* white-space: initial !important; */
            /* background:green; */
            min-width: none
        }
    }

    @media  screen and (max-width: 650px) and (min-width: 481px) {
        .stock-price {
            float: left;
            font-size: 12px !important;
        }

        .table-responsive-m tr td:nth-child(1) {
            max-width: 100%;
            white-space: break-spaces !important;
        }
    }

    @media  screen and (max-width: 820px) and (min-width: 649px) {
        * {
            /* background:green */
        }

        .paddingleftrightzero {
            width: 100%
        }

        .search-bar-web {
            margin-top: 0px !important
        }

        .table-responsive-m tr td:nth-child(1) {
            max-width: 100%;
            white-space: break-spaces !important;
        }

        /* .select-price-type{
            display:block
        } */
        .select-price-type-wrapper {
            display: block !important;
        }

        .stock-price {
            text-align: left !important;
            font-weight: bold !important
        }

        .market_value_,
        .dividend_payments_ {
            display: none
        }


    }

    @media (max-width: 480px) {
        td.paddingleftrightzero {
            max-width: 135px;
        }
    }

    .search-bar-web input {
        margin-top: 5px;
    }

    .tab-select .active::before {
        content: '';
        width: 80px;
        height: 2px;
        background: #ff0a97;
        display: block;
        position: absolute;
        bottom: 0px;
        left: 50%;
        transform: translateX(-50%);
    }

    .wrapper-for-main-tabs {
        /*  display: flex; */
        margin: 20px 0;
    }

    .select-price-type-wrapper {
        order: 2;
        margin: 0 !important;
        margin-left: 15px !important;
    }

    .artist-maker-tabs {
        margin: 0 !important;
        padding: 0 10px !important;
    }

    #project-list-table-web tbody tr td .team {
        float: left;
        margin-right: 10px;
    }

    #project-list-table-web tbody tr td .team+div {
        margin-top: 12px;
    }

    th {
        color: #000 !important;
    }

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

<div class="scrolling-wrapper">
    <div class="scrolling"> EXCHANGE RATES
        <span class="pink">:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg')); ?>" width="15" height="15"
            alt="">&nbsp;&nbsp;1 ETHEREUM (ETH) &nbsp;=&nbsp;
        <p>0.02776 BTC</p> &nbsp;=&nbsp; $
        <p><?php echo e($ETHUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
        <p class="text-green"> + 0.25% </p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/bitcoinlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 BITCOIN
        (BTC) &nbsp;=&nbsp; $
        <p><?php echo e($BTCUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.15% </p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 Valyou X Dollar
        (VXD) = &nbsp;&nbsp; $
        <p><?php echo e($USDCUSDT ?? ''); ?> USDC</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.1% </p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 VALYOU X MUSIC
        (VALYOU X) = &nbsp;&nbsp;
        <p>$0.50 USDC</p> &nbsp;&nbsp;
        <p class="text-green"> +2.5% </p>
        &nbsp;&nbsp;&nbsp;

        EXCHANGE RATES
        <span class="pink">:</span>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg')); ?>" width="15" height="15"
            alt="">&nbsp;&nbsp;1 ETHEREUM (ETH) &nbsp;=&nbsp;
        <p>0.02776 BTC</p> &nbsp;=&nbsp; $
        <p><?php echo e($ETHUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
        <p class="text-green"> + 0.25% </p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/bitcoinlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 BITCOIN
        (BTC) &nbsp;=&nbsp; $
        <p><?php echo e($BTCUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.15% </p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 Valyou X Dollar
        (VXD) = &nbsp;&nbsp; $
        <p><?php echo e($USDCUSDT ?? ''); ?> USDC</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.1% </p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 VALYOU X MUSIC
        (VALYOU X) = &nbsp;&nbsp;
        <p>$0.50 USDC</p> &nbsp;&nbsp;
        <p class="text-green"> +2.5% </p>
        &nbsp;&nbsp;&nbsp;

        EXCHANGE RATES
        <span class="pink">:</span>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg')); ?>" width="15" height="15"
            alt="">&nbsp;&nbsp;1 ETHEREUM (ETH) &nbsp;=&nbsp;
        <p>0.02776 BTC</p> &nbsp;=&nbsp; $
        <p><?php echo e($ETHUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
        <p class="text-green"> + 0.25% </p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/bitcoinlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 BITCOIN
        (BTC) &nbsp;=&nbsp; $
        <p><?php echo e($BTCUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.15% </p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 Valyou X Dollar
        (VXD) = &nbsp;&nbsp; $
        <p><?php echo e($USDCUSDT ?? ''); ?> USDC</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.1% </p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 VALYOU X MUSIC
        (VALYOU X) = &nbsp;&nbsp;
        <p>$0.50 USDC</p> &nbsp;&nbsp;
        <p class="text-green"> +2.5% </p>
        &nbsp;&nbsp;&nbsp;

        EXCHANGE RATES
        <span class="pink">:</span>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg')); ?>" width="15" height="15"
            alt="">&nbsp;&nbsp;1 ETHEREUM (ETH) &nbsp;=&nbsp;
        <p>0.02776 BTC</p> &nbsp;=&nbsp; $
        <p><?php echo e($ETHUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
        <p class="text-green"> + 0.25% </p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/bitcoinlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 BITCOIN
        (BTC) &nbsp;=&nbsp; $
        <p><?php echo e($BTCUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.15% </p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 Valyou X Dollar
        (VXD) = &nbsp;&nbsp; $
        <p><?php echo e($USDCUSDT ?? ''); ?> USDC</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.1% </p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 VALYOU X MUSIC
        (VALYOU X) = &nbsp;&nbsp;
        <p>$0.50 USDC</p> &nbsp;&nbsp;
        <p class="text-green"> +2.5% </p>
        &nbsp;&nbsp;&nbsp;

        EXCHANGE RATES
        <span class="pink">:</span>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg')); ?>" width="15" height="15"
            alt="">&nbsp;&nbsp;1 ETHEREUM (ETH) &nbsp;=&nbsp;
        <p>0.02776 BTC</p> &nbsp;=&nbsp; $
        <p><?php echo e($ETHUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
        <p class="text-green"> + 0.25% </p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/bitcoinlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 BITCOIN
        (BTC) &nbsp;=&nbsp; $
        <p><?php echo e($BTCUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.15% </p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 Valyou X Dollar
        (VXD) = &nbsp;&nbsp; $
        <p><?php echo e($USDCUSDT ?? ''); ?> USDC</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.1% </p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 VALYOU X MUSIC
        (VALYOU X) = &nbsp;&nbsp;
        <p>$0.50 USDC</p> &nbsp;&nbsp;
        <p class="text-green"> +2.5% </p>
        &nbsp;&nbsp;&nbsp;

        EXCHANGE RATES
        <span class="pink">:</span>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg')); ?>" width="15" height="15"
            alt="">&nbsp;&nbsp;1 ETHEREUM (ETH) &nbsp;=&nbsp;
        <p>0.02776 BTC</p> &nbsp;=&nbsp; $
        <p><?php echo e($ETHUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
        <p class="text-green"> + 0.25% </p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/bitcoinlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 BITCOIN
        (BTC) &nbsp;=&nbsp; $
        <p><?php echo e($BTCUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.15% </p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 Valyou X Dollar
        (VXD) = &nbsp;&nbsp; $
        <p><?php echo e($USDCUSDT ?? ''); ?> USDC</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.1% </p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 VALYOU X MUSIC
        (VALYOU X) = &nbsp;&nbsp;
        <p>$0.50 USDC</p> &nbsp;&nbsp;
        <p class="text-green"> +2.5% </p>
    </div>
</div>


<div class="wrapper-for-main-tabs">

    <div class="select-price-type-wrapper">
        <button class="select-price-type" id="price" name="price">Stock Price</button>
    </div>

    <!-- <div class="tab-select nav nav-pills search-bar-web artist-maker-tabs" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a href="#allmain" class="active" id="allmain-tab" data-toggle="pill" role="tab" aria-controls="allmain" aria-selected="true"> All</a>
            <a href="#northamerica" class="unclicked" id="northamerica-tab" data-toggle="pill" role="tab" aria-controls="northamerica" aria-selected="false"> America (North)</a>
            <a href="#africa" class="unclicked" id="africa-tab" data-toggle="pill" role="tab" aria-controls="africa" aria-selected="false"> Africa</a>
            <a href="#southamerica" class="unclicked" id="southamerica-tab" data-toggle="pill" role="tab" aria-controls="southamerica" aria-selected="false"> South America </a>
            <a href="#asia" class="unclicked" id="asia-tab" data-toggle="pill" role="tab" aria-controls="asia" aria-selected="false"> Asia </a>
            <a href="#australia" class="unclicked" id="australia-tab" data-toggle="pill" role="tab" aria-controls="australia" aria-selected="false"> Australia </a>
            <a href="#europe" class="unclicked" id="europe-tab" data-toggle="pill" role="tab" aria-controls="europe" aria-selected="false"> Europe </a>
        </div> -->

</div>

<!--  -->
<div class="d-flex justify-content-between align-items-center px-2 mt-3 search-filter-bar mb-3">

    <div class="d-flex align-items-center justify-content-between w-100 g-2 mr-2 "><svg
            class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true"
            viewBox="0 0 24 24" data-testid="SearchIcon">
            <path
                d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
            </path>
        </svg><input name="search_name" id="search_name"
            class="w-100 rounded m-0 p-2 outline-none border-0 outline-none-pro"
            placeholder="Search for music artist brands to invest" data-listener-added_b5d928d9="true">

    </div>
    <div class="d-none d-lg-flex align-items-center g-2">
        <div
            class="border rounded-pill p-1 d-flex justify-content-center align-items-center border-dark cursor-pointer">
            <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium text-[#444444] css-vubbuv" focusable="false"
                aria-hidden="true" viewBox="0 0 24 24" data-testid="PublicOutlinedIcon"
                style="width: 20px; height: 20px;">
                <path
                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM4 12c0-.61.08-1.21.21-1.78L8.99 15v1c0 1.1.9 2 2 2v1.93C7.06 19.43 4 16.07 4 12zm13.89 5.4c-.26-.81-1-1.4-1.9-1.4h-1v-3c0-.55-.45-1-1-1h-6v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41C17.92 5.77 20 8.65 20 12c0 2.08-.81 3.98-2.11 5.4z">
                </path>
            </svg>
        </div>
        <div class="MuiTabs-root css-orq8zk">
            <div id="allmain" class="MuiTabs-scroller MuiTabs-fixed css-1anid1y tab-pane fade show active"
                style="overflow: hidden; margin-bottom: 0px;" role="tabpanel" aria-labelledby="allmain-tab">
                <div class="MuiTabs-flexContainer css-k008qs tab-select nav nav-pills " style="margin:auto"
                    id="v-pills-tab" role="tablist" aria-orientation="vertical">

                    <a href="#all"
                        class="active MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary Mui-selected css-1ewhnov"
                        id="all-tab" data-toggle="pill" role="tab" aria-controls="all" aria-selected="true"
                        style="text-decoration: none;"> All </a>
                    <a href="#expression_of_interest"
                        class="unclicked MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary Mui-selected css-1ewhnov"
                        id="expression_of_interest-tab" data-toggle="pill" role="tab"
                        aria-controls="expression_of_interest" aria-selected="false">
                        Expression of Interest </a>
                    <a class="unclicked MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary Mui-selected css-1ewhnov"
                        href="#upcoming" id="upcoming-tab " data-toggle="pill" role="tab" aria-controls="upcoming"
                        aria-selected="false"> Upcoming </a>
                    <a href="#professional"
                        class="unclicked MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary Mui-selected css-1ewhnov"
                        id="professional-tab" data-toggle="pill" role="tab" aria-controls="professional"
                        aria-selected="false"> Professional </a>
                    <a href="#major_artists"
                        class="unclicked MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary Mui-selected css-1ewhnov"
                        id="major_artists-tab" data-toggle="pill" role="tab" aria-controls="major_artists"
                        aria-selected="false"> Major Artists </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="d-flex d-lg-none align-items-center g-2 ">
    <div class="border rounded-pill p-1 d-flex justify-content-center align-items-center border-dark cursor-pointer">
        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium text-[#444444] css-vubbuv" focusable="false"
            aria-hidden="true" viewBox="0 0 24 24" data-testid="PublicOutlinedIcon" style="width: 20px; height: 20px;">
            <path
                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM4 12c0-.61.08-1.21.21-1.78L8.99 15v1c0 1.1.9 2 2 2v1.93C7.06 19.43 4 16.07 4 12zm13.89 5.4c-.26-.81-1-1.4-1.9-1.4h-1v-3c0-.55-.45-1-1-1h-6v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41C17.92 5.77 20 8.65 20 12c0 2.08-.81 3.98-2.11 5.4z">
            </path>
        </svg>
    </div>
    <div class="MuiTabs-root css-orq8zk">
        <div id="allmain" class="MuiTabs-scroller MuiTabs-fixed css-1anid1y tab-pane fade show active"
            style="overflow: hidden; margin-bottom: 0px;" role="tabpanel" aria-labelledby="allmain-tab">
            <div class="MuiTabs-flexContainer css-k008qs tab-select nav nav-pills " style="margin:auto" id="v-pills-tab"
                role="tablist" aria-orientation="vertical">

                <a href="#all"
                    class="active MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary Mui-selected css-1ewhnov"
                    id="all-tab" data-toggle="pill" role="tab" aria-controls="all" aria-selected="true"
                    style="text-decoration: none;"> All </a>
                <a href="#expression_of_interest"
                    class="unclicked MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary Mui-selected css-1ewhnov"
                    id="expression_of_interest-tab" data-toggle="pill" role="tab" aria-controls="expression_of_interest"
                    aria-selected="false">
                    Expression of Interest </a>
                <a class="unclicked MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary Mui-selected css-1ewhnov"
                    href="#upcoming" id="upcoming-tab " data-toggle="pill" role="tab" aria-controls="upcoming"
                    aria-selected="false"> Upcoming </a>
                <a href="#professional"
                    class="unclicked MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary Mui-selected css-1ewhnov"
                    id="professional-tab" data-toggle="pill" role="tab" aria-controls="professional"
                    aria-selected="false"> Professional </a>
                <a href="#major_artists"
                    class="unclicked MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary Mui-selected css-1ewhnov"
                    id="major_artists-tab" data-toggle="pill" role="tab" aria-controls="major_artists"
                    aria-selected="false"> Major Artists </a>
            </div>
        </div>
    </div>
</div>
<!--  -->
<div class="tab-content 1" id="v-pills-tabContent">
    <div id="allmain" class="MuiTabs-scroller MuiTabs-fixed css-1anid1y tab-pane fade show active"
        style="overflow: hidden; margin-bottom: 0px;" role="tabpanel" aria-labelledby="allmain-tab">
        <!--  -->

        <!--  -->
        <div class="row" style="margin: 0;">
            <div class="col-lg-12" style="padding: 0px 0px 0px !important;">
                <div class="tab-content" id="v-pills-tabContent">
                    <div id="all" class="tab-pane fade show active " role="tabpanel" aria-labelledby="all-tab">
                        <div class="table-responsive table-responsive-web">
                            <table id="project-list-table-web"
                                class="table project-list-table table-nowrap table-centered table-borderless searchable sortable"
                                style="boder-spacing: 12px !important">
                                <thead>
                                    <tr style="box-shadow: 0 0 9.3578px rgba(0, 0, 0, .1) !important;">
                                        <th scope="col" style="width: 1%; color: #050f3f !important;" class="text-center"># Rank</th>
                                        <!-- <th scope="col" style="width: 10%">Rank</th>-->
                                        <th scope="col" style="width: 15%; color: #050f3f !important;">Artist</th>
                                        <th scope="col" style="width: 10%; color: #050f3f !important;">Change %</th>
                                        <th class="sorting stock_value" value="stock_value" type="ASC" scope="col"
                                            style="width: 10%; color: #050f3f !important;">Stock Price <i class="fa fa-fw fa-sort"></i></th>
                                        <th class="sorting market_value" value="market_value" type="ASC" scope="col"
                                            style="width: 10%; color: #050f3f !important;">Market Value <i class="fa fa-fw fa-sort"></i></th>
                                        <th class="sorting dividend_payments" value="dividend_payments" type="ASC"
                                            scope="col" style="width: 10%; color: #050f3f !important;"> Dividends <i class="fa fa-fw fa-sort"></i>
                                        </th>
                                        <th scope="col">Trade</th>
                                    </tr>
                                </thead>
                                <tbody class="tab_all">
                                </tbody>
                            </table>
                        </div>
                        <!-- Mobile Version -->
                        <div class="table-responsive 2 table-responsive-m">
                            <table class="table project-list-table table-nowrap table-centered table-borderless">
                                <tbody class="mtab_all">

                                </tbody>
                            </table>
                        </div>

                    </div>

                    <div id="expression_of_interest" class="tab-pane fade" role="tabpanel"
                        aria-labelledby="expression_of_interest-tab">

                        <div class="table-responsive table-responsive-web">
                            <table class="table project-list-table table-nowrap table-centered table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 1%" class="text-center"># Rank</th>
                                        <!-- <th scope="col" style="width: 10%">Rank</th>-->
                                        <th scope="col" style="width: 10%">Artist</th>
                                        <th scope="col" style="width: 10%">Change %</th>
                                        <th class="sorting" id="stock_value" type="ASC" scope="col" style="width: 10%">
                                            Stock Price <i class="fa fa-fw fa-sort"></i></th>
                                        <th class="sorting" id="market_value" type="ASC" scope="col" style="width: 10%">
                                            Market Value <i class="fa fa-fw fa-sort"></i></th>
                                        <th class="sorting" id="dividend_payments" type="ASC" scope="col"
                                            style="width: 10%"> Dividends <i class="fa fa-fw fa-sort"></i></th>
                                        <th scope="col">Trade</th>
                                    </tr>
                                </thead>
                                <tbody class="tab_0">
                                </tbody>
                            </table>
                        </div>

                        <div class="table-responsive table-responsive-m">
                            <table class="table project-list-table table-nowrap table-centered table-borderless">
                                <tbody class="mtab_0">

                                </tbody>
                            </table>
                        </div>

                    </div>

                    <div id="upcoming" class="tab-pane fade" role="tabpanel" aria-labelledby="upcoming-tab">

                        <div class="table-responsive table-responsive-web">
                            <table class="table project-list-table table-nowrap table-centered table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 1%" class="text-center"># Rank</th>
                                        <!-- <th scope="col" style="width: 10%">Rank</th>-->
                                        <th scope="col" style="width: 10%">Artist</th>
                                        <th scope="col" style="width: 10%">Change %</th>
                                        <th class="sorting stock_value" value="stock_value" type="ASC" scope="col"
                                            style="width: 10%">Stock Price <i class="fa fa-fw fa-sort"></i></th>
                                        <th class="sorting market_value" value="market_value" type="ASC" scope="col"
                                            style="width: 10%">Market Value <i class="fa fa-fw fa-sort"></i></th>
                                        <th class="sorting dividend_payments" value="dividend_payments" type="ASC"
                                            scope="col" style="width: 10%"> Dividends <i class="fa fa-fw fa-sort"></i>
                                        </th>
                                        <th scope="col">Trade</th>
                                    </tr>
                                </thead>
                                <tbody class="tab_1">
                                </tbody>
                            </table>
                        </div>

                        <div class="table-responsive table-responsive-m">
                            <table class="table project-list-table table-nowrap table-centered table-borderless">
                                <tbody class="mtab_1">

                                </tbody>
                            </table>
                        </div>

                    </div>

                    <div id="professional" class="tab-pane fade" role="tabpanel" aria-labelledby="professional-tab">

                        <div class="table-responsive table-responsive-web">
                            <table class="table project-list-table table-nowrap table-centered table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 1%" class="text-center"># Rank</th>
                                        <!-- <th scope="col" style="width: 10%">Rank</th>-->
                                        <th scope="col" style="width: 10%">Artist</th>
                                        <th scope="col" style="width: 10%">Change %</th>
                                        <th class="sorting stock_value" value="stock_value" type="ASC" scope="col"
                                            style="width: 10%">Stock Price <i class="fa fa-fw fa-sort"></i></th>
                                        <th class="sorting market_value" value="market_value" type="ASC" scope="col"
                                            style="width: 10%">Market Value <i class="fa fa-fw fa-sort"></i></th>
                                        <th class="sorting dividend_payments" value="dividend_payments" type="ASC"
                                            scope="col" style="width: 10%"> Dividends <i class="fa fa-fw fa-sort"></i>
                                        </th>
                                        <th scope="col">Trade</th>
                                    </tr>
                                </thead>
                                <tbody class="tab_2">
                                </tbody>
                            </table>
                        </div>

                        <div class="table-responsive table-responsive-m">
                            <table class="table project-list-table table-nowrap table-centered table-borderless">
                                <tbody class="mtab_2">

                                </tbody>
                            </table>
                        </div>

                    </div>


                    <div id="major_artists" class="tab-pane fade" role="tabpanel" aria-labelledby="major_artists-tab">

                        <div class="table-responsive table-responsive-web">
                            <table class="table project-list-table table-nowrap table-centered table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 1%" class="text-center"># Rank</th>
                                        <!-- <th scope="col" style="width: 10%">Rank</th>-->
                                        <th scope="col" style="width: 10%">Artist</th>
                                        <th scope="col" style="width: 10%">Change %</th>
                                        <th class="sorting stock_value" value="stock_value" type="ASC" scope="col"
                                            style="width: 10%">Stock Price <i class="fa fa-fw fa-sort"></i></th>
                                        <th class="sorting market_value" value="market_value" type="ASC" scope="col"
                                            style="width: 10%">Market Value <i class="fa fa-fw fa-sort"></i></th>
                                        <th class="sorting dividend_payments" value="dividend_payments" type="ASC"
                                            scope="col" style="width: 10%"> Dividends <i class="fa fa-fw fa-sort"></i>
                                        </th>
                                        <th scope="col">Trade</th>
                                    </tr>
                                </thead>
                                <tbody class="tab_3">
                                </tbody>
                            </table>
                        </div>

                        <div class="table-responsive table-responsive-m">
                            <table class="table project-list-table table-nowrap table-centered table-borderless">
                                <tbody class="mtab_3">

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="row">
</div>
<!-- end row -->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
<script type="text/javascript"
    src="https://rawgit.com/padolsey/jQuery-Plugins/master/sortElements/jquery.sortElements.js"></script>
<script src="<?php echo e(URL::asset('assets/js/pages/projects-list.js')); ?>"></script>
<script type="text/javascript">

    $(document).ready(function () {

        loadMoreData(0, 'all');
        loadMoreData(0, 0);
        loadMoreData(0, 1);
        loadMoreData(0, 2);
        loadMoreData(0, 3);

        function loadMoreData(page, tabId, value = '', type = '') {
            // console.log(value);
            $.ajax({
                url: "loadmore",
                type: "GET",
                cache: false,
                data: { offset: page, tabId: tabId, search: $('#search_name').val(), field: value, type: type },
                success: function (data) {

                    $(".custom-icon-hover").mouseenter(function () {
                        $(this).removeClass("mdi-alert-circle-outline");
                        $(this).addClass("mdi-alert-circle");
                    });

                    $(".custom-icon-hover").mouseleave(function () {
                        $(this).removeClass("mdi-alert-circle");
                        $(this).addClass("mdi-alert-circle-outline");
                    });


                    // stock price color change
                    if (tabId == 'all') {
                        var colors = ['#ff0093', 'black', '#1cea2c'];

                        function changeColor() {
                            $('.text-color-change').each(function (index) {
                                var i = Math.floor(Math.random() * 3);
                                $(this).css("color", colors[i]);
                            });
                        }

                        window.setInterval(changeColor, 3000);
                    }



                    if (data) {
                        const data1 = JSON.parse(data);
                        console.log(data1.mobile);

                        if (page) {
                            $(".tab_" + tabId).append(data1.web);
                            $(".mtab_" + tabId).append(data1.mobile);
                            $(".ttab_" + tabId).append(data1.tab);
                        } else {
                            $(".tab_" + tabId).html(data1.web);
                            $(".mtab_" + tabId).html(data1.mobile);
                            $(".ttab_" + tabId).html(data1.tab);
                        }
                    }
                }
            });
        }

        $(document).on('click', '.loadbtn', function () {
            $(".loadbtn").html('Loading...');
            $(".pagination-loadmore").hide();
            var pId = $(this).data("id");
            var tab = $(this).data("tab");
            loadMoreData(pId, tab);
        });

        $("#search_name").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            loadMoreData(0, 'all');
            loadMoreData(0, 0);
            loadMoreData(0, 1);
            loadMoreData(0, 2);
            loadMoreData(0, 3);
        });
        $(".sorting").on("click", function () {

            var value = $(this).attr('value');
            var type = $(this).attr('type');
            if (type == 'DESC') {
                $('.' + value).attr("type", 'ASC');
            } else {
                $('.' + value).attr("type", 'DESC');
            }
            loadMoreData(0, 'all', value, type);
            loadMoreData(0, 0, value, type);
            loadMoreData(0, 1, value, type);
            loadMoreData(0, 2, value, type);
            loadMoreData(0, 3, value, type);
        });

    });

    const slider = document.querySelector('.scrolling-wrapper');
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
        slider.classList.add('active');
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 3; //scroll-fast
        slider.scrollLeft = scrollLeft - walk;
        console.log(walk);
    });

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\task\Current\Valyou X\new work(12.6)\valyoux_backend(12.7)\valyoux_backend\valyoux_backend\resources\views/market.blade.php ENDPATH**/ ?>