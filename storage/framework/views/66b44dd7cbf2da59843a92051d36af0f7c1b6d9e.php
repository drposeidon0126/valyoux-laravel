<?php $__env->startSection('pageCSS'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/css/pages/projects-list.css?v0.2')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/css/pages/microtip.css')); ?>">
<?php $__env->stopSection(); ?>

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
    .trade-market{
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


    .pagination-loadmore td{
        text-align: center;
    }
    table#project-list-table-web thead {
        color: 000;
    }
    .font-size-14{
        font-size: 14px;
    }

    .search-bar-web {
        justify-content: start !important;
    }

    .project-list-table {
        float: left !important;
    }

    .table-responsive-web {
        overflow-x: auto !important;
    }

    @media (max-width: 1300px){
        .table-responsive-web table {
            width: 1200px !important;
        }

        .tab-select {
            overflow-x: scroll;
        }
    }

    @media  only screen and (orientation: landscape) and (min-device-width: 320px) and (max-device-width: 820px){
        .table-responsive-m{
            display:block !important;
        }
        .table-responsive-web{
            display:none !important;
        }
        .tab-select.search-bar-web a.active {
            outline: none;
            text-decoration: none solid #ff0093 0px !important;
            color: #e84e89;
            position: relative;
        }
        .table-responsive-m tr td:nth-child(1){
            max-width: 100% !important;
            white-space: initial !important;
            /* background:green; */
            min-width:none
        }
    }

    @media (max-width: 768px){
        .tab-select.search-bar-web a.active {
            outline: none;
            text-decoration: none solid #ff0093 0px !important;
            color: #e84e89;
            position: relative;
        }
        .table-responsive-m tr td:nth-child(1){
            max-width: 100% !important;
            white-space: initial !important;
            /* background:green; */
            /* min-width:none */
        }
    }

    @media  screen and (max-width: 650px){
        .project-list-table tr {
            padding: 5px !important;
        }
        .table-responsive-m tr td:nth-child(1){
            max-width: 100% !important;
            /* white-space: initial !important; */
            /* background:green; */
            min-width:none
        }
    }

    @media  screen and (max-width: 650px) and (min-width: 481px) {
        .stock-price {
            float: left;
        }
        .table-responsive-m tr td:nth-child(1){
            max-width: 100%;
            white-space: break-spaces !important;
        }
    }
    @media  screen and (max-width: 820px) and (min-width: 649px) {
        *{
            /* background:green */
        }
        .paddingleftrightzero{
            width:100%
        }
        .search-bar-web{
            margin-top:0px !important
        }
        .table-responsive-m tr td:nth-child(1){
            max-width: 100%;
            white-space: break-spaces !important;
        }
        /* .select-price-type{
            display:block
        } */
        .select-price-type-wrapper {
            display: block !important;
        }

        .stock-price{
            text-align:left !important;
            font-weight:bold !important
        }
        .market_value_,.dividend_payments_{
            display:none
        }


    }

    @media (max-width: 480px){
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

    .artist-maker-tabs{
        margin: 0 !important;
        padding: 0 10px !important;
    }

    #project-list-table-web tbody tr td .team {
        float:left;
        margin-right:10px;
    }

    #project-list-table-web tbody tr td .team + div{
        margin-top:12px;
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
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
    }
    .scrolling-wrapper.active {
        cursor: grabbing !important;
        cursor: -webkit-grabbing !important;
        transform: scale(1);
    }

    .scrolling{
        font-size: 14px !important;
        color: black;
    }
</style>



<?php $__env->startSection('title'); ?> Market <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

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
            <img src="<?php echo e(asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg')); ?>" width="15" height="15" alt="">&nbsp;&nbsp;1 ETHEREUM (ETH) &nbsp;=&nbsp;
            <p>0.02776 BTC</p> &nbsp;=&nbsp; $
            <p><?php echo e($ETHUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
            <p class="text-green"> + 0.25% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="<?php echo e(asset('assets/images/valyoux/bitcoinlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 BITCOIN (BTC) &nbsp;=&nbsp; $
            <p><?php echo e($BTCUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
            <p class="text-red"> - 0.15% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 Valyou X Dollar (VXD) = &nbsp;&nbsp; $
            <p><?php echo e($USDCUSDT ?? ''); ?> USDC</p> &nbsp;&nbsp;
            <p class="text-red"> - 0.1% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 VALYOU X MUSIC (VALYOU X)  = &nbsp;&nbsp;
            <p>$0.50 USDC</p> &nbsp;&nbsp;
            <p class="text-green"> +2.5% </p>
            &nbsp;&nbsp;&nbsp;

            EXCHANGE RATES
            <span class="pink">:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="<?php echo e(asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg')); ?>" width="15" height="15" alt="">&nbsp;&nbsp;1 ETHEREUM (ETH) &nbsp;=&nbsp;
            <p>0.02776 BTC</p> &nbsp;=&nbsp; $
            <p><?php echo e($ETHUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
            <p class="text-green"> + 0.25% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="<?php echo e(asset('assets/images/valyoux/bitcoinlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 BITCOIN (BTC) &nbsp;=&nbsp; $
            <p><?php echo e($BTCUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
            <p class="text-red"> - 0.15% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 Valyou X Dollar (VXD) = &nbsp;&nbsp; $
            <p><?php echo e($USDCUSDT ?? ''); ?> USDC</p> &nbsp;&nbsp;
            <p class="text-red"> - 0.1% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 VALYOU X MUSIC (VALYOU X)  = &nbsp;&nbsp;
            <p>$0.50 USDC</p> &nbsp;&nbsp;
            <p class="text-green"> +2.5% </p>
            &nbsp;&nbsp;&nbsp;

            EXCHANGE RATES
            <span class="pink">:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="<?php echo e(asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg')); ?>" width="15" height="15" alt="">&nbsp;&nbsp;1 ETHEREUM (ETH) &nbsp;=&nbsp;
            <p>0.02776 BTC</p> &nbsp;=&nbsp; $
            <p><?php echo e($ETHUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
            <p class="text-green"> + 0.25% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="<?php echo e(asset('assets/images/valyoux/bitcoinlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 BITCOIN (BTC) &nbsp;=&nbsp; $
            <p><?php echo e($BTCUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
            <p class="text-red"> - 0.15% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 Valyou X Dollar (VXD) = &nbsp;&nbsp; $
            <p><?php echo e($USDCUSDT ?? ''); ?> USDC</p> &nbsp;&nbsp;
            <p class="text-red"> - 0.1% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 VALYOU X MUSIC (VALYOU X)  = &nbsp;&nbsp;
            <p>$0.50 USDC</p> &nbsp;&nbsp;
            <p class="text-green"> +2.5% </p>
            &nbsp;&nbsp;&nbsp;

            EXCHANGE RATES
            <span class="pink">:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="<?php echo e(asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg')); ?>" width="15" height="15" alt="">&nbsp;&nbsp;1 ETHEREUM (ETH) &nbsp;=&nbsp;
            <p>0.02776 BTC</p> &nbsp;=&nbsp; $
            <p><?php echo e($ETHUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
            <p class="text-green"> + 0.25% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="<?php echo e(asset('assets/images/valyoux/bitcoinlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 BITCOIN (BTC) &nbsp;=&nbsp; $
            <p><?php echo e($BTCUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
            <p class="text-red"> - 0.15% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 Valyou X Dollar (VXD) = &nbsp;&nbsp; $
            <p><?php echo e($USDCUSDT ?? ''); ?> USDC</p> &nbsp;&nbsp;
            <p class="text-red"> - 0.1% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 VALYOU X MUSIC (VALYOU X)  = &nbsp;&nbsp;
            <p>$0.50 USDC</p> &nbsp;&nbsp;
            <p class="text-green"> +2.5% </p>
            &nbsp;&nbsp;&nbsp;

            EXCHANGE RATES
            <span class="pink">:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="<?php echo e(asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg')); ?>" width="15" height="15" alt="">&nbsp;&nbsp;1 ETHEREUM (ETH) &nbsp;=&nbsp;
            <p>0.02776 BTC</p> &nbsp;=&nbsp; $
            <p><?php echo e($ETHUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
            <p class="text-green"> + 0.25% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="<?php echo e(asset('assets/images/valyoux/bitcoinlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 BITCOIN (BTC) &nbsp;=&nbsp; $
            <p><?php echo e($BTCUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
            <p class="text-red"> - 0.15% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 Valyou X Dollar (VXD) = &nbsp;&nbsp; $
            <p><?php echo e($USDCUSDT ?? ''); ?> USDC</p> &nbsp;&nbsp;
            <p class="text-red"> - 0.1% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 VALYOU X MUSIC (VALYOU X)  = &nbsp;&nbsp;
            <p>$0.50 USDC</p> &nbsp;&nbsp;
            <p class="text-green"> +2.5% </p>
            &nbsp;&nbsp;&nbsp;

            EXCHANGE RATES
            <span class="pink">:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="<?php echo e(asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg')); ?>" width="15" height="15" alt="">&nbsp;&nbsp;1 ETHEREUM (ETH) &nbsp;=&nbsp;
            <p>0.02776 BTC</p> &nbsp;=&nbsp; $
            <p><?php echo e($ETHUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
            <p class="text-green"> + 0.25% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="<?php echo e(asset('assets/images/valyoux/bitcoinlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 BITCOIN (BTC) &nbsp;=&nbsp; $
            <p><?php echo e($BTCUSDT ?? ''); ?> USD</p> &nbsp;&nbsp;
            <p class="text-red"> - 0.15% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 Valyou X Dollar (VXD) = &nbsp;&nbsp; $
            <p><?php echo e($USDCUSDT ?? ''); ?> USDC</p> &nbsp;&nbsp;
            <p class="text-red"> - 0.1% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="15" height="15">&nbsp;&nbsp;1 VALYOU X MUSIC (VALYOU X)  = &nbsp;&nbsp;
            <p>$0.50 USDC</p> &nbsp;&nbsp;
            <p class="text-green"> +2.5% </p>
        </div>
    </div>


    <div class="wrapper-for-main-tabs">

        <div class="select-price-type-wrapper">
            <button class="select-price-type" id="price" name="price" >Stock Price</button>
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


    <div class="tab-content 1" id="v-pills-tabContent">
        <div id="allmain" class="tab-pane fade show active" role="tabpanel" aria-labelledby="allmain-tab">
            <div class="tab-select nav nav-pills search-bar-web" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <div class="search_bar">
                    <input placeholder="Search" name="search_name" id="search_name">
                </div>
                <a href="#all" class="active" id="all-tab" data-toggle="pill" role="tab" aria-controls="all" aria-selected="true"> All </a>
                <a href="#expression_of_interest" class="unclicked" id="expression_of_interest-tab" data-toggle="pill" role="tab" aria-controls="expression_of_interest" aria-selected="false"> Expression of Interest </a>
                <a class="unclicked" href="#upcoming" id="upcoming-tab" data-toggle="pill" role="tab" aria-controls="upcoming" aria-selected="false"> Upcoming </a>
                <a href="#professional" class="unclicked" id="professional-tab" data-toggle="pill" role="tab" aria-controls="professional" aria-selected="false"> Professional </a>
                <a href="#major_artists" class="unclicked" id="major_artists-tab" data-toggle="pill" role="tab" aria-controls="major_artists" aria-selected="false"> Major Artists </a>
            </div>

            <div class="row">
                <div class="col-lg-12" style="padding: 0px 0px 0px !important;">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div id="all" class="tab-pane fade show active " role="tabpanel" aria-labelledby="all-tab">
                            <div class="table-responsive table-responsive-web">
                                <table id="project-list-table-web" class="table project-list-table table-nowrap table-centered table-borderless searchable sortable">
                                    <thead>
                                    <tr>
                                        <th scope="col" style="width: 1%" class="text-center"># Rank</th>
                                        <!-- <th scope="col" style="width: 10%">Rank</th>-->
                                        <th scope="col" style="width: 15%">Artist</th>
                                        <th scope="col" style="width: 10%">Change %</th>
                                        <th class="sorting stock_value" value="stock_value" type="ASC" scope="col" style="width: 10%">Stock Price <i class="fa fa-fw fa-sort"></i></th>
                                        <th class="sorting market_value" value="market_value" type="ASC" scope="col" style="width: 10%">Market Value <i class="fa fa-fw fa-sort"></i></th>
                                        <th  class="sorting dividend_payments" value="dividend_payments" type="ASC" scope="col" style="width: 10%"> Dividends <i class="fa fa-fw fa-sort"></i></th>
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

                        <div id="expression_of_interest" class="tab-pane fade" role="tabpanel" aria-labelledby="expression_of_interest-tab">

                            <div class="table-responsive table-responsive-web">
                                <table class="table project-list-table table-nowrap table-centered table-borderless">
                                    <thead>
                                    <tr>
                                        <th scope="col" style="width: 1%" class="text-center"># Rank</th>
                                        <!-- <th scope="col" style="width: 10%">Rank</th>-->
                                        <th scope="col" style="width: 10%">Artist</th>
                                        <th scope="col" style="width: 10%">Change %</th>
                                        <th class="sorting" id="stock_value" type="ASC" scope="col" style="width: 10%">Stock Price <i class="fa fa-fw fa-sort"></i></th>
                                        <th class="sorting" id="market_value" type="ASC" scope="col" style="width: 10%">Market Value <i class="fa fa-fw fa-sort"></i></th>
                                        <th  class="sorting" id="dividend_payments" type="ASC" scope="col" style="width: 10%"> Dividends <i class="fa fa-fw fa-sort"></i></th>
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
                                        <th class="sorting stock_value" value="stock_value" type="ASC" scope="col" style="width: 10%">Stock Price <i class="fa fa-fw fa-sort"></i></th>
                                        <th class="sorting market_value" value="market_value" type="ASC" scope="col" style="width: 10%">Market Value <i class="fa fa-fw fa-sort"></i></th>
                                        <th  class="sorting dividend_payments" value="dividend_payments" type="ASC" scope="col" style="width: 10%"> Dividends <i class="fa fa-fw fa-sort"></i></th>
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
                                        <th class="sorting stock_value" value="stock_value" type="ASC" scope="col" style="width: 10%">Stock Price <i class="fa fa-fw fa-sort"></i></th>
                                        <th class="sorting market_value" value="market_value" type="ASC" scope="col" style="width: 10%">Market Value <i class="fa fa-fw fa-sort"></i></th>
                                        <th  class="sorting dividend_payments" value="dividend_payments" type="ASC" scope="col" style="width: 10%"> Dividends <i class="fa fa-fw fa-sort"></i></th>
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
                                        <th class="sorting stock_value" value="stock_value" type="ASC" scope="col" style="width: 10%">Stock Price <i class="fa fa-fw fa-sort"></i></th>
                                        <th class="sorting market_value" value="market_value" type="ASC" scope="col" style="width: 10%">Market Value <i class="fa fa-fw fa-sort"></i></th>
                                        <th  class="sorting dividend_payments" value="dividend_payments" type="ASC" scope="col" style="width: 10%"> Dividends <i class="fa fa-fw fa-sort"></i></th>
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
    <script type="text/javascript" src="https://rawgit.com/padolsey/jQuery-Plugins/master/sortElements/jquery.sortElements.js"></script>
    <script src="<?php echo e(URL::asset('assets/js/pages/projects-list.js')); ?>"></script>
    <script type="text/javascript">

        $(document).ready(function(){

            loadMoreData(0,'all');
            loadMoreData(0,0);
            loadMoreData(0,1);
            loadMoreData(0,2);
            loadMoreData(0,3);

            function loadMoreData(page,tabId,value='',type=''){
                // console.log(value);
                $.ajax({
                    url : "loadmore",
                    type: "GET",
                    cache:false,
                    data:{offset:page,tabId:tabId,search:$('#search_name').val(),field:value,type:type},
                    success:function(data){

                        $(".custom-icon-hover").mouseenter(function(){
                            $( this ).removeClass("mdi-alert-circle-outline");
                            $( this ).addClass("mdi-alert-circle");
                        });

                        $(".custom-icon-hover").mouseleave(function(){
                            $( this ).removeClass("mdi-alert-circle");
                            $( this ).addClass("mdi-alert-circle-outline");
                        });


                        // stock price color change
                        if(tabId == 'all'){
                            var colors = ['#ff0093','black','#1cea2c'];

                            function changeColor(){
                                $('.text-color-change').each(function( index ) {
                                    var i= Math.floor(Math.random() * 3);
                                    $(this).css("color", colors[i]);
                                });
                            }

                            window.setInterval(changeColor,3000 );
                        }



                        if (data) {
                            const data1 = JSON.parse(data);
                            console.log(data1.mobile);

                            if(page){
                                $(".tab_"+tabId).append(data1.web);
                                $(".mtab_"+tabId).append(data1.mobile);
                                $(".ttab_"+tabId).append(data1.tab);
                            }else{
                                $(".tab_"+tabId).html(data1.web);
                                $(".mtab_"+tabId).html(data1.mobile);
                                $(".ttab_"+tabId).html(data1.tab);
                            }
                        }
                    }
                });
            }

            $(document).on('click', '.loadbtn', function(){
                $(".loadbtn").html('Loading...');
                $(".pagination-loadmore").hide();
                var pId = $(this).data("id");
                var tab = $(this).data("tab");
                loadMoreData(pId,tab);
            });

            $("#search_name").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                loadMoreData(0,'all');
                loadMoreData(0,0);
                loadMoreData(0,1);
                loadMoreData(0,2);
                loadMoreData(0,3);
            });
            $(".sorting").on("click", function() {

                var value = $(this).attr('value');
                var type = $(this).attr('type');
                if(type == 'DESC'){
                    $('.'+value).attr( "type",'ASC' );
                }else{
                    $('.'+value).attr( "type",'DESC' );
                }
                loadMoreData(0,'all',value,type);
                loadMoreData(0,0,value,type);
                loadMoreData(0,1,value,type);
                loadMoreData(0,2,value,type);
                loadMoreData(0,3,value,type);
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
            if(!isDown) return;
            e.preventDefault();
            const x = e.pageX - slider.offsetLeft;
            const walk = (x - startX) * 3; //scroll-fast
            slider.scrollLeft = scrollLeft - walk;
            console.log(walk);
        });

    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/market.blade.php ENDPATH**/ ?>