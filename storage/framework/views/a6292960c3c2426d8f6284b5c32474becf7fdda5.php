<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Wallet'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<!-- DataTables -->
<link href="<?php echo e(URL::asset('assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.0/css/toastr.css"
    integrity="sha512-IGwkFtlId2R+5O765etYgj+NFf1fTfb1Kf98HiJTzqo5KaHskkErldvO7jW1pFUZZyqQLgKZmnCPNm6CwjY4rQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.0/css/toastr.min.css"
    integrity="sha512-kbfyniEdAn65kDvQuBaFsC6PcEZuqCv3wXD5SrSqMJvZAWy/XZhf2ByMHgHJ2h/2FJl+o/P0LBToducs2oKnTA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .media-body h2{
        font-family: Roboto,sans-serif;
    font-style: normal;
    -webkit-transform: translateZ(0);
    }
    #myInput {
        border-radius: 20px !important;
    }

    input::placeholder {
        font-size: 15px !important;
        color: #A9A9A9 !important;
    }

    .table td,
    .table th {
        padding: 0.75rem !important;
        vertical-align: inherit !important;
        border-top: 1px solid #eff2f7 !important;
    }

    table {
        width: 100%;
        padding: 3px 10px;
        white-space: nowrap;
    }

    thead {
        text-align: center !important;
    }

    tbody {
        text-align: center !important;
    }

    .set_display {
        display: flex !important;


    }

    .set_margin {
        margin: 8px 0px 0px 7px !important;
    }

    .table thead th {
        vertical-align: baseline !important;
        border-bottom: 2px solid #eff2f7 !important;
    }

    @media (max-width: 575px) {
        .wallet div.card-body.mt-5 {
            margin-top: 2rem !important;
        }
        /* #page-topbar{
            display: none !important;
        } */

    }
    @media (max-width: 670px) {
   .page-content {
    padding-top: 0 !important;
   }
   #page-topbar {
    display: none !important;
   }
   .container-fluid {
    margin-top: -10px !important;
   }

   .back-page-btn {
    display: block !important;
    width: 50px;
    height: 50px;
    border-radius: 100% !important;
    margin-left: 1%;
    margin-bottom: 3%;
    margin-top: 8%;
}

}

.nav-responsive a{
    padding-left: 0 !important;
    padding-right: 0 !important;
    margin-right: 1.5% !important;
}

    .mb-0 {
        display: none;
    }

    /* .active{
            display:block!important;
        } */
    .media-body>.active {
        display: block !important;
    }

    h4.wallet-close {
        float: right;
        cursor: pointer;
        padding-left: 2%
    }

    .row.deposit {
        padding: 50px 20px;
        box-shadow: 0 1.5px 4px 0 rgba(0, 0, 0, .3) !important;
    }

    .container-fluid.p-0.searchresultmain:hover {
        background: #e0e0e0;
    }
    .container-fluid {
        margin:0;
        background-color: #000;
    }
    ::-webkit-scrollbar-track {
  background: transparent;
}


    .close-deposit {
        position: absolute;
        float: right;
        right: 2%;
        margin-left: -20px;
        margin-top: 6px;
        cursor: pointer;
        color: white;
    }

    .searchresultmain,
    .activesearchr {
        display: block;
        box-shadow: 0 0.5px 1px 0 rgba(0, 0, 0, .3) !important;
        cursor: pointer;
        float: left;
        padding-bottom: 7px !important;
    }

    .searimg {
        float: left;


    }

    .mains3 {
        display: block;
        border: 1px solid #b4b4b4;
        float: left;
        height: auto;
        overflow-x: unset;
        overflow-y: scroll;
        background-color: white !important;
    }

    .searimg>img {
        width: 50px !important;
        height: 50px !important;
        margin-top: 7px;

    }

    .searcon {
        /* 	margin-top: 10px; */
        float: left;

        margin-top: 11px;

    }

    .searcon p {
        margin-bottom: 0px;

    }

    .main {
        box-shadow: 0 0.5px 4px 0 rgba(0, 0, 0, .3) !important;
        display: block;
        float: left;


    }

    span.cancel_main {
        display: block;
        float: right;
        margin-top: 10px;
        padding-right: 10px;
        font-weight: bold;

    }

    .tab-select-nav {
        display: flex;
        justify-content: flex-start;
        /* border-bottom: none !important; */
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

    .nav-tabs {
        border-color: #ced4da33 !important;
    }

    .tab-select-nav {
        padding: 14px 0 7px 0;
        overflow: auto;
        display: inline-table;
    }

    .tab-select-nav a.active {
        text-decoration: none !important;
        color: #ffff !important;
        position: relative !important;
        border-bottom: 2px solid #77cb4b;
    }

    .tab-select-nav a {
        padding: 5px 20px;
        white-space: nowrap;
        color: #ffff !important;
        font-weight: 500 !important;
        font-family: "Roboto", "Helvetica", "Arial", sans-serif;
        font-size: 0.875rem;
        line-height: 1.25;
        letter-spacing: 0.02857em;
        text-transform: uppercase;
        /* border-bottom: 2px solid #FFFFFF; */
    }

    .nav-tabs {
        border-bottom: 1px solid white;
    }
    .wallet h2 {
        color: #ffff !important;
        text-align: left;
    }

    .send-label {
        font-size: 1.125rem;
        line-height: 1.75rem;
        color: white;
        padding: 1rem 0;
        font-weight: bolder;
        font-family: Roboto, sans-serif;
        font-style: normal;
        -webkit-transform: translateZ(0);
    }

    /* css */
    .team {
        text-align: left !important;
    }
    .background-shadow {
    background: #fff;
    box-shadow: 0 0 9.3578px rgba(0,0,0,.1);
    border-radius: 10px;
}
@media (max-width: 450px) {
        .paymento {
            font-size: 13px !important
        }

        .credit_card_img {
            width: 130px !important;
        }
        .crypto_img {
            width: 105px !important;
        }

    }
@media (max-width: 930px) {
        .wallet-action {
            justify-content: flex-start !important
        }
}
@media (min-width: 9301px) {
        .wallet-action {
            justify-content: center !important
        }
    }
    .page-content {
        padding-left: 0 !important;
        padding-right: 0 !important;
}

.css-1yxmbwk {
    padding-top: 12px;
    padding-left: 14px;
    display: inline-flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    position: relative;
    box-sizing: border-box;
    -webkit-tap-highlight-color: transparent;
    background-color: transparent;
    outline: 0px;
    border: 0px;
    margin: 0px;
    cursor: pointer;
    user-select: none;
    vertical-align: middle;
    appearance: none;
    text-decoration: none;
    text-align: center;
    flex: 0 0 auto;
    font-size: 1.5rem;
    padding: 8px;
    border-radius: 50%;
    overflow: visible;
    color: rgba(0, 0, 0, 0.54);
    transition: background-color 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
}
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
.back-page-btn {
    display: none;
}
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div  class="back-page-btn !sticky top-2 z-10 float-right bg-white rounded-full "><button class="close-page-btn MuiButtonBase-root MuiIconButton-root MuiIconButton-sizeMedium css-1yxmbwk" tabindex="0" type="button" style="padding-top: 12px; padding-left: 14px"><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="CloseIcon"><path d="M19 6.41 17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path></svg><span class="MuiTouchRipple-root css-w0pj6f"></span></button></div>
<div class="w-full tab-select nav nav-pills crypto-wallet" id="v-pills-tab" role="tablist" aria-orientation="vertical">
   
<div class="col-md-12">

        <div class="row">
            
            
            <!-- <?php echo check_role()=='1'? '':'<div class="col-md-2"></div>';?> -->

            <div <?php echo
                check_role()==1? 'class="col-md-12 scroll-style px-2 nav-responsive" style="cursor: grab; overflow: auto;"'
                :'class="px-2 col-md-12 nav-responsive scrolling-sponsor-list scroll-style"'; ?><?php echo (!empty($checkArtist))? '
                class="col-md-12 px-2 scroll-style nav-responsive" style="cursor: grab; overflow: auto;"':' class="col-md-8 nav-responsive'; ?>>
                <div class=" nav nav-tabs tab-select-nav" id="nav-tab" role="tablist" bis_skin_checked="1" >
                <?php if(check_role()==1){?>
                <a href="#reserve-currency" id="nav-reserve-currency" data-toggle="pill" role="tab" aria-controls="all"
                    class="<?php echo (check_role()==1)? 'active': '';?>" aria-selected="true">Valyou X Dollar (VXD)
                    Reserve Currency</a>
                <a href="#circulating-supply" id="nav-circulating-supply" data-toggle="pill" role="tab"
                    aria-controls="all" aria-selected="true">Valyou X Dollar (VXD) Circulating Supply</a>
                <a href="#security-compliance-account" id="nav-security-compliance-account" data-toggle="pill"
                    role="tab" aria-controls="all" aria-selected="true">Security Compliance Account VXD backed by
                    Asset</a>

                <?php }?>

                <a href="#personal-account" class="<?php echo (check_role()!=1)? 'active': '';?>"
                    id="nav-personal-account" data-toggle="pill" role="tab" aria-controls="all"
                    aria-selected="true">Investor Personal Account</a>
                <a href="#valyoux-access-token" id="nav-valyoux-access-token" data-toggle="pill" role="tab"
                    aria-controls="all" aria-selected="true">VALYOU X SUBSCRIPTION ACCESS TOKEN </a>
                <a class="unclicked investment" href="#investment" id="nav-investment" data-toggle="pill" role="tab"
                    aria-controls="nav-investment" aria-selected="false"> Investments </a>
                <?php if(!empty($checkArtist)){?>
                <a href="#artist-personal-account" class="unclicked" id="nav-artist-personal-account" data-toggle="pill"
                    role="tab" aria-controls="expression_of_interest1" aria-selected="false"> Artist Personal Account
                </a>
                <a href="#artist" class="unclicked" id="nav-artist" data-toggle="pill" role="tab"
                    aria-controls="expression_of_interest" aria-selected="false"> Artist Company Account </a>
                <a href="#business" class="unclicked" id="nav-business" data-toggle="pill" role="tab"
                    aria-controls="professional" aria-selected="false"> Business </a>

                <?php } else {?>
                <a href="<?php echo e(route('admin.role.switch',['role_id' => 2])); ?>" style="color:#A69C9C !important;"> Artist
                    Company Account </a>
                <a href="<?php echo e(route('admin.role.switch',['role_id' => 2])); ?>" style="color:#A69C9C !important;"> Business
                </a>
                <?php }?>

                <?php  if(check_role() == 1) {?>
                <a href="#selling_stock_revenue_amount" id="selling_stock_revenue" data-toggle="pill" role="tab"
                    aria-controls="all" aria-selected="true"> Users Selling Stocks Revenue </a>
                <a href="#buying_stock_revenue_amount" id="buying_stock_revenue" data-toggle="pill" role="tab"
                    aria-controls="all" aria-selected="true"> Users Buying Stocks Revenue </a>
                <a href="#video_streaming_revenue_amount" id="video_streaming_revenue" data-toggle="pill" role="tab"
                    aria-controls="all" aria-selected="true"> Video Streaming Revenue </a>
                <a href="#audio_streaming_revenue_amount" id="audio_streaming_revenue" data-toggle="pill" role="tab"
                    aria-controls="all" aria-selected="true"> Audio Streaming Revenue </a>
                <a href="#product_merchandise_sale_amount" id="product_merchandise_sale" data-toggle="pill" role="tab"
                    aria-controls="all" aria-selected="true"> Product Merchandise Sales Revenue </a>
                <a href="#user_buying_vxd_amount" id="user_buying_vxd" data-toggle="pill" role="tab" aria-controls="all"
                    aria-selected="true"> User Buying VXD (Fiat/Debit Card) Revenue </a>
                <a href="#user_selling_vxd_amount1" id="user_selling_vxd1" data-toggle="pill" role="tab"
                    aria-controls="all" aria-selected="true"> User Selling VXD (Fiat/Debit Card) Revenue </a>
                <a href="#user_buying_vxd_amount" id="user_buying_vxd" data-toggle="pill" role="tab" aria-controls="all"
                    aria-selected="true"> User Buying VXD (Crypto) Revenue </a>
                <a href="#user_selling_vxd_amount" id="user_selling_vxd" data-toggle="pill" role="tab"
                    aria-controls="all" aria-selected="true"> User Selling VXD ( Crypto) Revenue </a>
                <a href="#brand_sponser_advertising_video_amount" id="brand_sponser_advertising_video"
                    data-toggle="pill" role="tab" aria-controls="all" aria-selected="true"> Brand Sponsors Advertising
                    Video Revenue </a>
                <a href="#brand_logo_sponsoring_amount" id="brand_logo_sponsoring" data-toggle="pill" role="tab"
                    aria-controls="all" aria-selected="true"> Brand Logo Sponsoring Artist revenue </a>
                <a href="#artist_romoting_amount" id="artist_romoting" data-toggle="pill" role="tab" aria-controls="all"
                    aria-selected="true"> Artist Promoting their Audio Revenue </a>
                <a href="#artist_promoting_amount" id="artist_promoting" data-toggle="pill" role="tab"
                    aria-controls="all" aria-selected="true"> Artist Promoting their Video Revenue </a>
                <a href="#user_valyou_song_revenue_amount" id="user_valyou_song_revenue" data-toggle="pill" role="tab"
                    aria-controls="all" aria-selected="true"> User Valyou A song Revenue </a>
                <a href="#total_revenue_price" id="nav-total_revenue" data-toggle="pill" role="tab" aria-controls="all"
                    aria-selected="true"> Total Revenue </a>
                <a href="#liquidity_account_price" id="nav-liquidity_account" data-toggle="pill" role="tab"
                    aria-controls="all" aria-selected="true"> Liquidity Account </a>
                <?php }?>
            </div>
            
           
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
</div>

<?php
if (auth()->user()->wallet !='') {

$wallet = auth()->user()->wallet;
} else {

$wallet = '0.0';
}

if (auth()->user()->access_token !='') {
$access_token = auth()->user()->access_token;
} else {

$access_token = '0.0';
}
?>
<?php 
                // echo "<pre>";
                // print_r(auth()->user()->wallet);die;
            ?>
<div class=" mini-stats-wid wallet" style="height: auto; border: none">
    <div class=" mt-5">
        <div class="media-body mb-5 text-center" style= "font-family: 'Roboto',sans-serif; font-style: normal; -webkit-transform: translateZ(0);">
            <h2 id="vxd-price" class="mb-0 <?php echo (check_role()!=1)? 'active': '';?>">$ <?php echo e(numberformat($wallet)); ?>

                VXD</h2>
            <h2 id="artist-price" class="mb-0">$ <?php echo e(numberformat($total['artist_total'])); ?> VXD</h2>
            <h2 id="reserve-price" class="mb-0 <?php echo (check_role()==1)? 'active': '';?>">$
                <?php echo e(number_format($users_reserve_amount,2)); ?> VXD</h2>
            <h2 id="circulating-supply-price" class="mb-0">$ <?php echo e(number_format($users_all_amount,2)); ?> VXD</h2>
            <h2 id="security-compliance-account-price" class="mb-0">$ 0.00 VXD</h2>
            <h2 id="valyoux-access-token-price" class="mb-0"> <?php echo e(number_format($access_token,2)); ?> Tokens</h2>
            <h2 id="investor-price" class="mb-0">$ <?php echo e(numberformat($total['investor_total'])); ?> VXD</h2>
            <h2 id="business-price" class="mb-0">$ <?php echo e(numberformat($total['business_total'])); ?> VXD</h2>
            <!--  -->
            <?php  if(auth()->user()->is_admin == 1) {?>
            <h2 id="selling_stock_revenue_amount" class="mb-0 selling_stock_revenue_amount">$ 52.00 VXD</h2>
            <h2 id="buying_stock_revenue_amount" class="mb-0 buying_stock_revenue_amount">$ 61.00 VXD</h2>
            <h2 id="video_streaming_revenue_amount" class="video_streaming_revenue_amount mb-0">$ 74.00 VXD</h2>
            <h2 id="audio_streaming_revenue_amount" class="audio_streaming_revenue mb-0">$ 86.00 VXD</h2>
            <h2 id="product_merchandise_sale_amount" class="product_merchandise_sale_amount mb-0">$ 8.00 VXD</h2>
            <h2 id="user_buying_vxd_amount" class="user_buying_vxd_amount mb-0">$
                <?= number_format($admin_amount,2);?> VXD
            </h2>
            <h2 id="user_selling_vxd_amount" class="user_selling_vxd_amount mb-0">$ 1.00 VXD</h2>
            <h2 id="user_selling_vxd_amount1" class="user_selling_vxd_amount1 mb-0">$ 5.00 VXD</h2>
            <h2 id="brand_sponser_advertising_video_amount" class="brand_sponser_advertising_video_amount mb-0">$ 12.00
                VXD</h2>
            <h2 id="brand_logo_sponsoring_amount" class="mb-0 brand_logo_sponsoring_amount">$ 13.00 VXD</h2>
            <h2 id="artist_romoting_amount" class="mb-0 artist_romoting_amount">$ 14.00 VXD</h2>
            <h2 id="artist_promoting_amount" class="mb-0 artist_promoting_amount">$ 15.00 VXD</h2>
            <h2 id="user_valyou_song_revenue_amount" class="mb-0 user_valyou_song_revenue_amount">$ 16.00 VXD</h2>
            <h2 id="total_revenue_price" class="mb-0 total_revenue_amount">$ 113.00 VXD</h2>
            <h2 id="liquidity_account_price" class="mb-0 liquidity_account_amount">$ 11.30 VXD</h2>
        </div>
        <?php }?>
        <!--  -->
        <p style="color: #ffff; font-size: 14px" class=" mt-2">Total Balance of Assets You Own</p>
        <p style="color: #77cb4b; padding-bottom: 4%; font-size: 14px" class=" cashout_balance">Your Available Liquidity Cash Out Balance $ 0.10 VXD
        </p>
    </div>
    <div class="d-flex flex-column">
        <div class="wallet-address"></div>

    </div>
</div>
</div>


<div class="card investment-section" style="position: relative; width: 100%; top: -20px;  border-top-left-radius: 1.5rem; border-top-right-radius: 1.5rem; box-shadow: none !important;">

    <div class="card-body tab-content" id="myTabContent" style="">
  


     <div class="tab-pane fade show  <?php echo (check_role()!=1)? 'active': '';?>" id="personal-account"
            role="tabpanel" aria-labelledby="nav-personal-account">

       <div class="wallet-action d-flex indiana-scroll-container scrolling-sponsor-list scroll-style overflow-auto" style="text-align: center; justify-content: center">
        <div class="m-2 mr-4  " style="width: 20rem; height: 10rem;">
            <div class=" p-5 rounded-lg background-shadow font-bold flex items-center justify-center " onclick="stripePayment()" style="justify-content: center">
                <span class="text-2xl" style="color: #050f3f; font-weight: 700; font-size: 1.5rem; line-height: 2rem;">DEPOSIT</span>
            </div>
        </div>
        <div class="m-2 mr-4" style="width: 20rem; height: 10rem;">
            <div class="col-12  p-5 rounded-lg background-shadow font-bold flex items-center justify-center send_money" style="justify-content: center">
                <span class="text-2xl " style="color: #050f3f; font-weight: 700; font-size: 1.5rem; line-height: 2rem;">SEND</span>
            </div>
        </div>
        <div class="m-2 mr-4" style="width: 20rem; height: 10rem;">
            <div class=" req_money p-5 rounded-lg background-shadow font-bold flex items-center justify-center" style="justify-content: center">
                <span class="text-2xl " style="color: #050f3f; font-weight: 700; font-size: 1.5rem; line-height: 2rem;">RECEIVE</span>
            </div>
        </div>
        <div class="m-2 mr-4 " style="width: 20rem; height: 10rem;">
            <div class=" ex-currency-btn p-5 rounded-lg background-shadow font-bold flex items-center justify-center" style="justify-content: center">
                <span class="text-2xl " style="color: #050f3f; font-weight: 700; font-size: 1.5rem; line-height: 2rem;">EXCHANGE</span>
            </div>
        </div>
        
       </div>
            <div class="wallet-button">
            <div class="row exchange-currency-body" style="display: none">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Crypto Payment Accepted Only</h4>
                    <div class="crypto-buy-sell-nav">

                        <div class="crypto-buy-sell-nav-content p-4">
                            <form>
                                <div class="mb-2">
                                    <label>Payment method :</label> <br>
                                    <label>Your account will be credited in VXD</label>
                                    <div class="row">
<!--                                         <div class="col-xl-3 col-sm-4"> -->
<!--                                             <label class="card-radio-label mb-3">
                                                <input type="radio" name="pay-method" id="pay-methodoption1"
                                                       class="card-radio-input">

                                                <div class="card-radio">
                                                    <i class="fab fa-cc-mastercard font-size-24 text-pink align-middle mr-2"></i>
                                                    <span>Credit / Debit Card</span>
                                                </div>
                                            </label> -->
<!--                                         </div> -->


                                       
										<div class="col-xl-4 col-sm-4">
                                            <label class="card-radio-label mb-3">
                                                <input type="radio" name="pay-method" id="buycurrencyoption1"
                                                       class="card-radio-input">
                                                <div class="card-radio">
                                                    <img width="25" src="<?php echo e(asset('assets/images/valyoux/usdc_icon.png')); ?>" class="align-middle mr-2">
                                                    <span>USDC</span>
                                                </div>
                                            </label>
                                        </div>

                                        <div class="col-xl-4 col-sm-4">
                                            <label class="card-radio-label mb-3">
                                                <input type="radio" name="pay-method" id="buycurrencyoption1"
                                                       class="card-radio-input">
                                                <div class="card-radio">
                                                    <img width="25" src="<?php echo e(asset('assets/images/valyoux/vxd.png')); ?>" class="align-middle mr-2">
                                                    <span>VXD</span>
                                                </div>
                                            </label>
                                        </div>
                                    	 <div class="col-xl-4 col-sm-4">
                                            <label class="card-radio-label mb-3">
                                                <input type="radio" name="pay-method" id="pay-methodoption3"
                                                       class="card-radio-input" checked>

                                                <div class="card-radio">
                                                	<img width="25" src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" class="align-middle mr-2">
                                                    <span>Valyou X</span>
                                                </div>
                                            </label>
                                        </div>
<!--                                         <div class="col-xl-2 col-sm-4">
                                            <label class="card-radio-label mb-3">
                                                <input type="radio" name="pay-method" id="buycurrencyoption1"
                                                       class="card-radio-input">
                                                <div class="card-radio">
                                                    <i class="fab fa-bitcoin font-size-24 text-pink align-middle mr-2"></i>
                                                    <span>Bitcoin</span>
                                                </div>
                                            </label>
                                        </div> -->

<!--                                         <div class="col-xl-2 col-sm-4">
                                            <label class="card-radio-label mb-3">
                                                <input type="radio" name="pay-method" id="buycurrencyoption2"
                                                       class="card-radio-input">
                                                <div class="card-radio">
                                                    <i class="fab fa-ethereum font-size-24 text-pink align-middle mr-2"></i>
                                                    <span>Ethereum</span>
                                                </div>
                                            </label>
                                        </div> -->

                                      

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Conversion :</label>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="input-group mb-2 currency-value">
                                                <div class="input-group-prepend">
                                                    <select name="" id="" class="new-select">
                                                        <option value="">USDC</option>
                                                        <option value="">VXD</option>
                                                    	<option value="">Valyou X</option>
                                                    </select>
                                                </div>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="input-group mb-2">
                                                <input type="text" class="form-control text-sm-right">

                                                <div class="input-group-append">
                                                    <select name="" id="" class="new-select">
                                                        <option value="">USDC</option>
                                                        <option value="">VXD</option>
                                                    	<option value="">Valyou X</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center mt-4">
                                    <a href="qr-code" class="btn btn-v-green">Proceed</a>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
                <!-- <button class="btn btn-dark exchange" style="width: 100%" onclick="stripePayment()">Deposit / Buy VXD</button> -->
                <!-- <div class="bank_btns_wrap" style="display: flex; gap: 10%; margin: 4% 1%">
                    <button class="btn btn-pink send_money">SEND MONEY VXD</button>
                    <button class="btn btn-green req_money">WITDRAW / SELL VXD</button>
                    <button class="btn btn-dark-pink exchange" onclick="stripePayment()">DEPOSIT / BUY VXD</button>
                </div> -->
                <!-- <div class="bank_btns_wrap">
            <button class="btn btn-pink send_money">Send Money VXD</button>
            <button class="btn btn-green req_money">Withdraw / Sell VXD</button>
            <button class="btn btn-dark-pink exchange" onclick="stripePayment()">Deposit / Buy VXD</button>
        </div> -->
                <div id="payment_options" class=" mb-2 p-4 card" style="display:none;font-size: 18px;">
                    <h4 class="wallet-close" style="padding-left: 2%">X</h4>
                    <h4 class="px-0 mb-3">Select Payment Type</h4>
                    <div class="paymento">
                        <input class="mx-auto" type="radio" name="payment_type" value="credit_card"
                            style="margin-right: 10px !important;"> Fiat (Creditcard) <img class="col-2 credit_card_img"
                            style="width:150px; max-width:170px; float:right;"
                            src="<?php echo e(asset('assets/images/payment_methods_logos-1.png')); ?>"> </img> <br>
                        <input class="mx-auto mt-3" type="radio" name="payment_type" value="coin_deposit"
                            style="margin-right: 10px !important;"> Crypto <img class="col-2 crypto_img"
                            style="margin-top: 10px;width: 120px;max-width: 150px;margin-right: 15px; float:right;"
                            src="<?php echo e(asset('assets/images/valyuxusdcPayment.png')); ?>"> </img>

                    </div>
                </div>
                <div id="stripe_payment_div" class="mt-2 mb-2 px-3 py-4 card"
                    style="line-height: normal;display:none;border-radius: 10px;">
                    <div class="panel-body">
                        <!--                     <?php if(Session::has('success')): ?>
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p><?php echo e(Session::get('success')); ?></p>
                        </div>
                    <?php endif; ?> -->
                        <form role="form" action="<?php echo e(route('admin.stripe.post')); ?>" method="post"
                            class="require-validation" data-cc-on-file="false"
                            data-stripe-publishable-key="<?php echo e(env('STRIPE_KEY')); ?>" id="payment-form">
                            <?php echo csrf_field(); ?>
                            <div class='form-row row'>
                                <div class='col-sm-12 col-md-12 form-group required'>
                                    <!-- <label class='control-label'>Name on Card</label>  -->
                                    <input style="line-height: 3em;height: fit-content;" class='form-control'
                                        type='text' placeholder="Name on Card">
                                </div>
                                <div class='col-xs-12 col-md-12 form-group required'>
                                    <!-- <label class='control-label'>Card Number</label>  -->
                                    <input style="line-height: 3em;height: fit-content;" autocomplete='off'
                                        class='form-control card-number' size='20' type='text'
                                        placeholder="Card Number">
                                </div>
                            </div>

                            <div class='form-row row'>
                                <div class='col-xs-12 col-md-12 form-group cvc required'>
                                    <!-- <label class='control-label'>CVC</label>  -->
                                    <input style="line-height: 3em;height: fit-content;" autocomplete='off'
                                        class='form-control card-cvc' size='4' type='text' placeholder="3-digits CVC">
                                </div>
                                <div class='col-xs-12 col-md-12 form-group expiration required'>
                                    <!-- <label class='control-label'>Expiration Month</label>  -->
                                    <input style="line-height: 3em;height: fit-content;"
                                        class='form-control card-expiry-month' size='2' type='text'
                                        placeholder="Expiration Month - MM">
                                </div>
                                <div class='col-xs-12 col-md-12 form-group expiration required'>
                                    <!-- <label class='control-label'>Expiration Year</label>  -->
                                    <input style="line-height: 3em;height: fit-content;"
                                        class='form-control card-expiry-year' size='4' type='text'
                                        placeholder="Expiration Year - YYYY">
                                </div>
                            </div>
                            <div id="amount_div" class='form-row row' style="display:none;">
                                <div class='col-xs-12 form-group required'>
                                    <!-- <label class='control-label'>Amount</label>  -->
                                    <input id="amount_field" style="line-height: 3em;height: fit-content;"
                                        autocomplete='off' name='amount' class='form-control amount' size='20'
                                        type='text' placeholder="Amount">
                                </div>
                            </div>

                            <div class="row px-0">
                                <div id="b1" class="col-xs-12 col-md-3">
                                    <button style="line-height: normal;font-size: 15px;"
                                        class="btn btn-dark btn-lg btn-block" type="submit"
                                        onclick="payOneDollar()">Deposit $1</button>
                                </div>
                                <div id="b2" class="col-xs-12 col-md-3">
                                    <button style="line-height: normal;font-size: 15px;"
                                        class="btn btn-dark btn-lg btn-block" type="submit"
                                        onclick="payFiveDollar()">Deposit $5</button>
                                </div>
                                <div id="b3" class="col-xs-12 col-md-3">
                                    <button style="line-height: normal;font-size: 15px;"
                                        class="btn btn-dark btn-lg btn-block" type="submit"
                                        onclick="payTenDollar()">Deposit $10</button>
                                </div>
                                <div id="custombutton" class="col-xs-12 col-md-3">
                                    <button style="line-height: normal;font-size: 15px;"
                                        class="btn btn-dark btn-lg btn-block" type="button"
                                        onclick="customAmount()">Custom Amount</button>
                                </div>
                                <div id="submitbutton" class="col-xs-12 col-md-12" style="display:none;">
                                    <button style="line-height: normal;font-size: 15px;"
                                        class="btn btn-dark btn-lg btn-block" type="submit"
                                        onclick="customAmount()">Pay</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!--select buy crypto-->
                <div id="crypto_payment_div" style="line-height: normal;display:none;border-radius: 10px;">
                    <div class="mt-2 mb-2 px-3 py-4 card">
                        <div class="panel-body">
                            <form action="<?php echo e(route('admin.crypto.post')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class='form-row row'>
                                    <div class='col-sm-12 col-md-12 form-group'>
                                        <label class='control-label'>Custom Amount</label>
                                        <input style="line-height: 3em;height: fit-content;"
                                            class='form-control customAmount' id="customAmountBuyvalidate" type='number'
                                            name="amountVXD" placeholder="How much VXD would you like to purchase?">
                                    </div>

                                </div>
                                <div class="row px-0" style="gap: 2%;">
                                    <div id="paybuttonShow" class="col-xs-12 col-md-3 mt-2">
                                        <a style="line-height: normal;font-size: 15px;"
                                            class="btn btn-dark btn-lg btn-block" type="button"
                                            onclick="buttonpayVXD()">BUY VXD AMOUNT</a>
                                    </div>
                                    <div id="b10" class="col-xs-12 col-md-2 mt-2">
                                        <a style="line-height: normal;font-size: 15px;"
                                            class="btn btn-dark btn-lg btn-block VXDvalue10" type="button"
                                            onclick="payDollarVXD(10)">BUY $10 VXD</a>
                                    </div>
                                    <div id="b20" class="col-xs-12 col-md-2 mt-2">
                                        <a style="line-height: normal;font-size: 15px;"
                                            class="btn btn-dark btn-lg btn-block VXDvalue20" type="button"
                                            onclick="payDollarVXD(20)">BUY $20 VXD</a>
                                    </div>
                                    <div id="b30" class="col-xs-12 col-md-2 mt-2">
                                        <a style="line-height: normal;font-size: 15px;"
                                            class="btn btn-dark btn-lg btn-block VXDvalue30" type="button"
                                            onclick="payDollarVXD(30)">BUY $30 VXD</a>
                                    </div>
                                    <div id="b50" class="col-xs-12 col-md-2 mt-2">
                                        <a style="line-height: normal;font-size: 15px;"
                                            class="btn btn-dark btn-lg btn-block VXDvalue100" type="button"
                                            onclick="payDollarVXD(100)">BUY $100 VXD</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <br>
                    <div class="row " style="margin-left: 0.7%; margin-right: 0.7%;">

                        <button class="btn btn-dark-pink transaction-charge-btn"
                            style="margin-buttom:  backround-color:rgb(255, 0, 147) !important">CHARGE LISTING
                            TRANSATIONS</button>
                    </div>



                    <!-- charges listing start -->
                    <div id="list-charges" style="display: none;">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row mt-5">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title mb-4">Charge Listing Transactions</h4>
                                                <h5>Request Generated USDC</h5>
                                                <div class="row">
                                                    <div class="col-lg-3 col-sm-12 col-md-3 col-xs-12 mt-4">
                                                        <input type="text" id="myInput" class="form-control"
                                                            autocomplete="off" placeholder="Search ..">
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <div class="table-responsive">
                                                        <table id="datatable4"
                                                            class="datatable table table-hover dt-responsive nowrap display"
                                                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                            <thead>
                                                                <tr>
                                                                    <th>Charge Request Id</th>
                                                                    <th>Customer Id</th>
                                                                    <th>Customer Name</th>
                                                                    <th>Payment request Address</th>
                                                                    <th>Code</th>
                                                                    <th>Transaction Amount</th>
                                                                    <th>Currency</th>
                                                                    <th>Status</th>
                                                                    <th>Created At</th>
                                                                    <th>Expire At</th>
                                                                    <!--<th><i class="bx bxs-down-arrow"></i></th> -->
                                                                </tr>
                                                            </thead>

                                                            <tbody class="getChargeListing">

                                                                <?= ($listing)? $listing: "";?>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- charges end listing -->
                </div>
                <!--end select buy crypto-->

                <!--select sell crypto-->
                <div id="crypto__sell_vxd_div" class="mt-2 mb-2 p-4 card" style="display:none;font-size: 18px;">
                    <h4 class="wallet-close">X</h4>
                    <h4 class="px-0 mb-3">Withdraw / Sell your VXD and receive your funds in:</h4>
                    <div class="paymento">
                        <input class="mx-auto" type="radio" name="payment_type" value="sell_vxd_credit_card"
                            style="margin-right: 10px !important;"> Fiat (Creditcard) <img class="col-2 credit_card_img"
                            style="width:150px; max-width:170px; float:right;"
                            src="<?php echo e(asset('assets/images/payment_methods_logos-1.png')); ?>"> </img> <br>
                        <input class="mx-auto mt-3" type="radio" name="payment_type" value="sell_vxd_crypto"
                            style="margin-right: 10px !important;"> Crypto <img class="col-2 crypto_img"
                            style="margin-top: 10px;width: 120px;max-width: 150px;margin-right: 15px; float:right;"
                            src="<?php echo e(asset('assets/images/valyuxusdcPayment.png')); ?>"> </img>
                    </div>
                </div>
                <div id="crypto_payment_sell" style="line-height: normal;display:none;border-radius: 10px;">
                    <div class="mt-2 mb-2 px-3 py-4 card">
                        <div class="panel-body">
                            <form action="<?php echo e(route('admin.sellVxdCrypto.post')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class='form-row row'>
                                    <div class='col-sm-12 col-md-12 form-group'>
                                        <label class='control-label'>Custom VXD Amount</label>
                                        <input style="line-height: 3em;height: fit-content;"
                                            class='form-control customAmountSellVxd' id="customAmountSellvalidate"
                                            type='number' name="amountVXD"
                                            placeholder="How much VXD would you like to Sell?">
                                    </div>

                                </div>
                                <div class="row px-0" style="gap: 2%">
                                    <div id="paybuttonShow" class="col-xs-12 col-md-3 mt-2">
                                        <a style="line-height: normal;font-size: 15px;"
                                            class="btn btn-dark btn-lg btn-block" type="button"
                                            onclick="buttonSellVXD()">SELL VXD</a>
                                    </div>
                                    <div id="b10" class="col-xs-12 col-md-2 mt-2">
                                        <a style="line-height: normal;font-size: 15px;"
                                            class="btn btn-dark btn-lg btn-block VXDvalue10" type="button"
                                            onclick="sellDollarVXD(10)">SELL $10 VXD</a>
                                    </div>
                                    <div id="b20" class="col-xs-12 col-md-2 mt-2">
                                        <a style="line-height: normal;font-size: 15px;"
                                            class="btn btn-dark btn-lg btn-block VXDvalue20" type="button"
                                            onclick="sellDollarVXD(20)">SELL $20 VXD</a>
                                    </div>
                                    <div id="b30" class="col-xs-12 col-md-2 mt-2">
                                        <a style="line-height: normal;font-size: 15px;"
                                            class="btn btn-dark btn-lg btn-block VXDvalue30" type="button"
                                            onclick="sellDollarVXD(30)">SELL $30 VXD</a>
                                    </div>
                                    <div id="b50" class="col-xs-12 col-md-2 mt-2">
                                        <a style="line-height: normal;font-size: 15px;"
                                            class="btn btn-dark btn-lg btn-block VXDvalue100" type="button"
                                            onclick="sellDollarVXD(100)">SELL $100 VXD</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <br>
                    <div class="row ml-0 mr-0">

                        <button class="btn btn-dark-pink transaction-charge-sell-btn"
                            style="margin-buttom:  backround-color:rgb(255, 0, 147) !important">CHARGE LISTING
                            TRANSATIONS</button>
                    </div>
                    <!-- checkout listing start -->
                    <div id="list-charge-widraw" style="display: none;">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row mt-5">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title mb-4">Checkout Listing Transactions</h4>
                                                <h5>Checkout Requests</h5>
                                                <div class="row">
                                                    <div class="col-lg-3 col-sm-12 col-md-3 col-xs-12 mt-4">
                                                        <input type="text" id="myInput" class="form-control"
                                                            autocomplete="off" placeholder="Search ..">
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <div class="table-responsive">
                                                        <table id="datatable4"
                                                            class="datatable table table-hover dt-responsive nowrap display"
                                                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                            <thead>
                                                                <tr>
                                                                    <th>Checkout Id</th>
                                                                    <th>Customer Name</th>
                                                                    <th>Currency</th>
                                                                    <th>Transaction Amount</th>
                                                                    <th>Status</th>
                                                                    <th>Description</th>
                                                                    <th>Resource</th>
                                                                    <th>Created at</th>
                                                                    <th>Action</th>

                                                                    <!--<th><i class="bx bxs-down-arrow"></i></th> -->
                                                                </tr>
                                                            </thead>

                                                            <tbody class="getCheckoutListing">
                                                                <?= ($listing_checkout)? $listing_checkout : "";?>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- checkout end listing -->
                </div>
                <!-- checkout model code -->
                <div id="checkout_generated" class="mt-2 mb-2 px-3 py-4"
                    style="line-height: normal;display:none;border-radius: 10px;">
                    <!-- Modal -->
                    <div class="modal fade" id="checkoutmodal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel1" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel1">Checkout Request Generated</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div>
                                        <a class="buy-with-crypto" data-cache-disabled="true"
                                            id="getCheckoutRequest">Sell VXD to USDC</a>
                                        <script
                                            src="https://commerce.coinbase.com/v1/checkout.js?version=201807"></script>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <div class="appendCancel"></div>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal -->
                </div>
                <!-- end checkout model code -->
                <!--end select sell crypto-->
                <!-- qr code -->
                <div id="qr_code_generated" class="mt-2 mb-2 px-3 py-4 qr_code_generated"
                    style="line-height: normal;display:none;border-radius: 10px;">
                    <!-- Modal -->
                    <div class="modal fade" id="codemodal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Request Generated USDC</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row qr_code">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="appendCancel"></div>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal -->
                </div>
                <!-- qr code -->
            </div>
            <div class="row ml-0 mr-0">
                <div class="col-lg-12 px-0">
                    <div class="deposit_box">
                        <form id="depositForm" style="display:none">
                            <h3 class="close-deposit">X</h3>
                            <div class="row deposit ml-0 mr-0 " style="background-color: black; border-radius: 3px;">
                                <div class="col-md-12 mb-2 px-0 ">
                                    <div class="pb-4 pt-4">
                                        <span class="send-label">Send Money To</span>
                                    </div>

                                    <input id="users" autocomplete="off"
                                        style="height: 50px !important; border-radius: 3px "
                                        placeholder="Who would you like to send money to?">
                                    <input id="user_id" name="user_id" hidden>
                                    <div class="mains3 col-sm-12 p-0" style="display:none;">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2 ">
                                    <div class="pb-4 pt-4">
                                        <span class="send-label">Send Amount</span>
                                    </div>

                                    <input type="number" id="wallet" name="wallet" step="any" min="0.1"
                                        placeholder="Send Amount"
                                        style="height: 50px !important; background-color: black; color: white; border-radius: 3px"
                                        required>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <div class="pb-4 pt-4">
                                        <span class="send-label">Select Reason For Payment</span>
                                    </div>
                                    <select name="note" id="" style="height: 50px !important; border-radius: 3px "
                                        required>
                                        <option value="" style="background-color:white;">Please select note</option>
                                        <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($id); ?>"><?php echo e($value['title']); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="col-md-3 pt-5">

                                    <button type="submit" class="btn btn-pink  deposit_btn"
                                        style="background-image: linear-gradient(77deg,#ffc26f,#fa528b 99%) !important;">SEND</button>

                                </div>
                            </div>
                        </form>
                    </div>
                    <br>
                    <div class="background-shadow transaction-btn p-4"
                        style="text-align: center; font-size: 14px"><span>TRANSACTIONS & EARNING HISTORY<span></div>



                    <div class="row mt-5 transactions" style="display: none;">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">View Transaction & Earning History</h4>
                                    <h5>Income | Expenditure</h5>
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-12 col-md-3 col-xs-12 mt-4">
                                            <input type="text" id="myInput" class="form-control" autocomplete="off"
                                                placeholder="Search ..">
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <div class="table-responsive">
                                            <table id="datatable4"
                                                class="datatable table table-hover dt-responsive nowrap display"
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>From</th>
                                                        <th>To</th>
                                                        <th>Transaction ID</th>
                                                        <th>Amount</th>
                                                        <th>Note</th>
                                                        <th>Transaction Date-Time</th>
                                                        <!--<th><i class="bx bxs-down-arrow"></i></th> -->
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php   $i = 1; ?>
                                                    <?php if(count($transactions_data['personal']) > 0): ?>
                                                    <?php $__currentLoopData = $transactions_data['personal']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                    <tr>
                                                        <td><?php echo e($i++); ?></td>
                                                        <td>
                                                            <div class="set_display">
                                                                <img src="<?php echo e(isset($row['from_profile']) ? asset($row['from_profile']) : asset('/assets/images/users/avatar-1.jpg')); ?>"
                                                                    alt=""
                                                                    class="rounded-circle header-profile-user user-avatar-obj-fit-cover">&nbsp;
                                                                <p class="set_margin"> <?php echo e($row['from_name']); ?></p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="set_display">
                                                                <img src="<?php echo e(isset($row['to_profile']) ? asset($row['to_profile']) : asset('/assets/images/users/avatar-1.jpg')); ?>"
                                                                    alt=""
                                                                    class="rounded-circle header-profile-user user-avatar-obj-fit-cover">&nbsp;
                                                                <p class="set_margin"><?php echo e($row['to_name']); ?></p>
                                                            </div>
                                                        </td>
                                                        <td><?php echo e($row['token']); ?></td>
                                                        <td>$ <?php echo e(numberformat($row['amount'])); ?> VXD</td>
                                                        <td><?php echo e($row['note']); ?></td>
                                                        <td><?php echo e($row['created_at']); ?></td>

                                                    </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <div class="tab-pane fade " id="artist" role="tabpanel" aria-labelledby="nav-artist">
       
                <div class="background-shadow transaction-artist-btn p-4"
                        style="text-align: center; font-size: 14px"><span>TRANSACTIONS & EARNING HISTORY<span></div>

            <div class="row" id="artist-trancsaction" style="display: none">
                <div class="col-lg-12">
                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Artist Transaction & Earning History</h4>
                                    <h5>Income | Expenditure</h5>
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-12 col-md-3 col-xs-12 mt-4">
                                            <input type="text" id="myInput" class="form-control" autocomplete="off"
                                                placeholder="Search ..">
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <div class="table-responsive">
                                            <table id="datatable1"
                                                class="datatable table table-hover dt-responsive nowrap"
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>From</th>
                                                        <th>To</th>
                                                        <th>Transaction ID</th>
                                                        <th>Amount</th>
                                                        <th>Note</th>
                                                        <th>Transaction Date-Time</th>
                                                        <!--<th><i class="bx bxs-down-arrow"></i></th> -->
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php   $i = 1; ?>
                                                    <?php $__currentLoopData = $transactions_data['artist']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                    <tr>
                                                        <td><?php echo e($i++); ?></td>
                                                        <td>
                                                            <div class="set_display">
                                                                <img src="<?php echo e(isset($row['from_profile']) ? asset($row['from_profile']) : asset('/assets/images/users/avatar-1.jpg')); ?>"
                                                                    alt=""
                                                                    class="rounded-circle header-profile-user user-avatar-obj-fit-cover">&nbsp;
                                                                <p class="set_margin"> <?php echo e($row['from_name']); ?></p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="set_display">
                                                                <img src="<?php echo e(isset($row['to_profile']) ? asset($row['to_profile']) : asset('/assets/images/users/avatar-1.jpg')); ?>"
                                                                    alt=""
                                                                    class="rounded-circle header-profile-user user-avatar-obj-fit-cover">&nbsp;
                                                                <p class="set_margin"><?php echo e($row['to_name']); ?></p>
                                                            </div>
                                                        </td>
                                                        <td><?php echo e($row['token']); ?></td>
                                                        <td>$ <?php echo e(numberformat($row['amount'])); ?> VXD</td>
                                                        <td><?php echo e($row['note']); ?></td>
                                                        <td><?php echo e($row['created_at']); ?></td>

                                                    </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="investment" role="tabpanel" aria-labelledby="nav-investment">
            <!-- investment data -->
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-nowrap table-centered">
                            <thead>
                                <tr>
                                    <th scope="col">Artist</th>
                                    <th scope="col">Holdings</th>
                                    <th scope="col">Current Price</th>
                                    <th scope="col">Invested</th>
                                    <th scope="col">Value</th>
                                    <th scope="col">Dividends</th>
                                    <th scope="col">Your Share</th>
                                    <th scope="col" colspan="2">Value</th>
                                </tr>
                            </thead>
                            <tbody class="investor_list">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br>
           
                <div class="background-shadow transaction-investor-btn p-4"
                        style="text-align: center; font-size: 14px"><span>INVESTOR VIEW TRANSATIONS & EARNING
                HISTORY<span></div>

            <!-- investment data end-->
            <div class="row" id="investor-transacsion" style="display: none;">
                <div class="col-lg-12">
                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Investors View Transaction & Earning History</h4>
                                    <h5>Income | Expenditure</h5>
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-12 col-md-3 col-xs-12 mt-4">
                                            <input type="text" id="myInput" class="form-control" autocomplete="off"
                                                placeholder="Search ..">
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <div class="table-responsive">
                                            <table id="datatable2"
                                                class="datatable table table-hover dt-responsive nowrap"
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>From</th>
                                                        <th>To</th>
                                                        <th>Transaction ID</th>
                                                        <th>Amount</th>
                                                        <th>Note</th>
                                                        <th>Transaction Date-Time</th>
                                                        <!--<th><i class="bx bxs-down-arrow"></i></th> -->
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php   $i = 1; ?>

                                                    <?php $__currentLoopData = $transactions_data['investor']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                    <tr>
                                                        <td><?php echo e($i++); ?></td>
                                                        <td>
                                                            <div class="set_display">
                                                                <img src="<?php echo e(isset($row['from_profile']) ? asset($row['from_profile']) : asset('/assets/images/users/avatar-1.jpg')); ?>"
                                                                    alt=""
                                                                    class="rounded-circle header-profile-user user-avatar-obj-fit-cover">&nbsp;
                                                                <p class="set_margin"> <?php echo e($row['from_name']); ?></p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="set_display">
                                                                <img src="<?php echo e(isset($row['to_profile']) ? asset($row['to_profile']) : asset('/assets/images/users/avatar-1.jpg')); ?>"
                                                                    alt=""
                                                                    class="rounded-circle header-profile-user user-avatar-obj-fit-cover">&nbsp;
                                                                <p class="set_margin"><?php echo e($row['to_name']); ?></p>
                                                            </div>
                                                        </td>
                                                        <td><?php echo e($row['token']); ?></td>
                                                        <td>$ <?php echo e(numberformat($row['amount'])); ?> VXD</td>
                                                        <td><?php echo e($row['note']); ?></td>
                                                        <td><?php echo e($row['created_at']); ?></td>
                                                    </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- reserve currency start -->
        <div class="tab-pane fade <?php echo (check_role()==1)? 'active' : ''?>" id="reserve-currency" role="tabpanel"
            aria-labelledby="nav-reserve-currency">

        </div>
        <!-- reserve currency end -->
        <!-- circulating supply start -->
        <div class="tab-pane fade" id="circulating-supply" role="tabpanel" aria-labelledby="nav-circulating-supply">

        </div>
        <!-- circulating supply end -->
        <!-- security-compliance-account start -->
        <div class="tab-pane fade" id="security-compliance-account" role="tabpanel"
            aria-labelledby="nav-security-compliance-account">

        </div>
        <!-- security-compliance-account end -->
        <!-- valyoux-access-token start -->
        <div class="tab-pane fade" id="valyoux-access-token" role="tabpanel" aria-labelledby="nav-valyoux-access-token">
            <div class="row ml-0 mr-0">
                <div class="col-lg-12">
                    <div class="deposit_box">
                        <form id="depositFormToken">
                            <div class="row deposit ml-0 mr-0 " style="background-color: black; border-radius: 3px;">
                                <div class="col-md-12 mb-2 ">
                                    <div class="pb-4 pt-4">
                                        <span class="send-label">Send Token To</span>
                                    </div>

                                    <input id="users" autocomplete="off"
                                        style="height: 50px !important; border-radius: 3px "
                                        placeholder="Who would you like to send money to?">
                                    <input id="user_id" name="user_id" hidden>
                                    <div class="mains3 col-sm-12 p-0" style="display:none;">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2 ">
                                    <div class="pb-4 pt-4">
                                        <span class="send-label">Send Amount</span>
                                    </div>

                                    <input type="number" id="wallet" name="wallet" step="any" min="0.1"
                                        placeholder="Send Amount"
                                        style="height: 50px !important; background-color: black; color: white; border-radius: 3px"
                                        required>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <div class="pb-4 pt-4">
                                        <span class="send-label">Select Reason For Payment</span>
                                    </div>
                                    <select name="note" id="" style="height: 50px !important; border-radius: 3px "
                                        required>
                                        <option value="" style="background-color:white;">Please select note</option>
                                        <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($id); ?>"><?php echo e($value['title']); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="col-md-3 pt-5">

                                    <button type="submit" class="btn btn-pink  deposit_btn"
                                        style="background-image: linear-gradient(77deg,#ffc26f,#fa528b 99%) !important;">SEND</button>

                                </div>
                            </div>
                        </form>
                    </div>
                    <br>

                        <div class="background-shadow transaction-access-token-btn p-4"
                        style="text-align: center; font-size: 14px"><span>ACCESS TOKENS TRANSATIONS &
                        EARNING HISTORY<span></div>

                    <!--access tokens table transaction history  -->
                    <div class="row mt-5" id="access-token-transaction" style="display:none">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">View Access Tokens Transaction & Earning History</h4>
                                    <h5>Income | Expenditure</h5>
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-12 col-md-3 col-xs-12 mt-4">
                                            <input type="text" id="myInputToken" class="form-control" autocomplete="off"
                                                placeholder="Search ..">
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <div class="table-responsive">
                                            <table id="datatable4Token"
                                                class="datatable table table-hover dt-responsive nowrap display"
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>From</th>
                                                        <th>To</th>
                                                        <th>Current Tokens</th>
                                                        <th>Access Tokens Current Value</th>
                                                        <th>Access Tokens Burnt</th>
                                                        <th>Access Token Remaining</th>
                                                        <th>Access Tokens Required</th>
                                                        <th>Note</th>
                                                        <th>Transaction Date-Time</th>

                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php   $i = 1; ?>
                                                    <?php if(count($AccessTokenHistory) > 0): ?>
                                                    <?php $__currentLoopData = $AccessTokenHistory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                     <td><?php echo e($i++); ?></td>
                                                     <td>
                                                      <div class="set_display">
                                                      <img src="<?php echo e(isset($row['from_user']['avatar']) ? asset($row['from_user']['avatar']) : asset('/assets/images/users/avatar-1.jpg')); ?>" alt="" class="rounded-circle header-profile-user user-avatar-obj-fit-cover" >&nbsp;
                                                      <p class="set_margin"> <?php echo e($row['from_user']['first_name'] . ' ' .  $row['from_user']->last_name); ?></p></div>
                                        	         </td>
                                                     <td>
                                                      <div class="set_display">
                                                      <img src="<?php echo e(isset($row['to_user']['avatar']) ? asset($row['to_user']['avatar']) : asset('/assets/images/users/avatar-1.jpg')); ?>" alt="" class="rounded-circle header-profile-user user-avatar-obj-fit-cover" >&nbsp;
                                                      <p class="set_margin"><?php echo e($row['to_user']['first_name'] . ' ' .  $row['to_user']->last_name); ?></p>
                                                      </div>
                                        	          </td>
                                                      <td><?php echo e(numberformat($row['access_tokens'])); ?> Tokens</td>
                                                      <td>$ <?php echo e(numberformat($row['access_tokens_current_value'])); ?> VXD</td>
                                                      <td><?php echo e(numberformat($row['access_tokens_burnt'])); ?> Tokens</td>
                                                      <td><?php echo e(numberformat($row['access_token_remaining'])); ?> Tokens </td>
                                                      <td><?php echo e(numberformat($row['access_tokens_required'])); ?> Tokens</td>
                                                      <td><?php echo e($notes[$row->desc]['title']); ?></td>
                                                      <td><?php echo e($row['created_at']); ?></td>

                                                      </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end access tokens -->
                </div>
            </div>

        </div>
        <!-- valyoux-access-token end -->
        <div class="tab-pane fade" id="business" role="tabpanel" aria-labelledby="nav-business">


                <div class="background-shadow transaction-bussiness-btn p-4"
                        style="text-align: center; font-size: 14px"><span>TRANSACTIONS & EARNING HISTORY<span></div>


            <div class="row" id="bussiness-transaction" style="display: none;">
                <div class="col-lg-12">
                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Business View Transaction & Earning History</h4>
                                    <h5>Income | Expenditure</h5>
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-12 col-md-3 col-xs-12 mt-4">
                                            <input type="text" id="myInput" class="form-control" autocomplete="off"
                                                placeholder="Search ..">
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <div class="table-responsive">
                                            <table id="datatable3"
                                                class="datatable table table-hover dt-responsive nowrap"
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>From</th>
                                                        <th>To</th>
                                                        <th>Transaction ID</th>
                                                        <th>Amount</th>
                                                        <th>Note</th>
                                                        <th>Transaction Date-Time</th>
                                                        <!--<th><i class="bx bxs-down-arrow"></i></th> -->
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php   $i = 1; ?>
                                                    <?php $__currentLoopData = $transactions_data['business']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($i++); ?></td>
                                                        <td>
                                                            <div class="set_display">
                                                                <img src="<?php echo e(isset($row['from_profile']) ? asset($row['from_profile']) : asset('/assets/images/users/avatar-1.jpg')); ?>"
                                                                    alt=""
                                                                    class="rounded-circle header-profile-user user-avatar-obj-fit-cover">&nbsp;
                                                                <p class="set_margin"> <?php echo e($row['from_name']); ?></p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="set_display">
                                                                <img src="<?php echo e(isset($row['to_profile']) ? asset($row['to_profile']) : asset('/assets/images/users/avatar-1.jpg')); ?>"
                                                                    alt=""
                                                                    class="rounded-circle header-profile-user user-avatar-obj-fit-cover">&nbsp;
                                                                <p class="set_margin"><?php echo e($row['to_name']); ?></p>
                                                            </div>
                                                        </td>
                                                        <td><?php echo e($row['token']); ?></td>
                                                        <td>$ <?php echo e(numberformat($row['amount'])); ?> VXD</td>
                                                        <td><?php echo e($row['note']); ?></td>
                                                        <td><?php echo e($row['created_at']); ?></td>
                                                    </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- end row -->
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('script'); ?>

    <!-- apexcharts -->
    <script src="<?php echo e(URL::asset('assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>

    <!-- Required datatable js -->
    <script src="<?php echo e(URL::asset('assets/libs/datatables/datatables.min.js')); ?>"></script>

    <!-- crypto-wallet init -->
    <script src="<?php echo e(URL::asset('assets/js/pages/crypto-wallet.init.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('assets/libs/axios/axios.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/axios/axios.min.js')); ?>"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.0/js/toastr.js"
        integrity="sha512-uB84KL69yTwjmCPpaQQ1Mz1EVEjlJskbITfaRJVi8glR3xF5x9vVLI52rv1Dj7FGDW7L0UFkJ34UrdMMS6zjJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.0/js/toastr.min.js"
        integrity="sha512-CwvahzdRSaKdj5SaWH7PBZmlgkvN2sz3+kDTS9yfjH+XZS/iYFsUAXVTTfeMM7uVtLabq1Hg2IC7V1RMaolcyw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('script-bottom'); ?>
    <?php
      $wallet=number_format($wallet,4);
     ?>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript">

        //user_ids\
        $(document).ready(function () {
            //back page
            $(document).on('click', '.back-page-btn', function() {
                window.history.back();
            })
            //show transaction
            $(document).on('click', '.transaction-btn', function () {
                $('.transactions').toggle();

            });

            $(document).on('click', '.transaction-charge-btn', function () {
                $('#list-charges').toggle();

            });

            $(document).on('click', '.transaction-charge-sell-btn', function () {
                $('#list-charge-widraw').toggle();

            });

            $(document).on('click', '.transaction-access-token-btn', function () {
                $('#access-token-transaction').toggle();

            });

            $(document).on('click', '.transaction-investor-btn', function () {
                $('#investor-transacsion').toggle();

            });

            $(document).on('click', '.transaction-artist-btn', function () {
                $('#artist-trancsaction').toggle();

            });

            $(document).on('click', '.transaction-bussiness-btn', function () {
                $('#bussiness-transaction').toggle();

            });




            //mouse click
            $(document).on('keypress', '#users', function () {
                var user_name = 'click';

                if (user_name != '') {
                    $.ajax({
                        url: "get/users",
                        type: "GET",
                        //cache: false,
                        data: {
                            user_name: user_name,
                        },
                        success: function (data) {
                            if (data) {
                                $('.mains3').show();
                                $('.mains3').html(data.result);
                            }
                            else {
                                $('.mains3').show();
                                $('.searchresultmain').html(data.result);
                            }
                        }
                    });
                }
                else {
                    $('.mains3').hide();

                }


            });



            $(document).on('keypress', '#users', function () {
                var user_name = $(this).val();

                if (user_name != '') {
                    $.ajax({
                        url: "get/users",
                        type: "GET",
                        //cache: false,
                        data: {
                            user_name: user_name,
                        },
                        success: function (data) {
                            if (data) {
                                $('.mains3').show();
                                $('.mains3').html(data.result);
                            }
                            else {
                                $('.mains3').show();
                                $('.searchresultmain').html(data.result);
                            }
                        }
                    });
                }
                else {
                    $('.mains3').hide();

                }


            });

            //onclick search main
            $(document).on('click', '.searchresultmain', function () {
                var user_id = $(this).data('id');
                $('#user_id').val(user_id);
                $('.user_id_get').val(user_id);

                $(this).siblings().hide();
                var div = $(this);

                $('#users').hide();
                $(this).hide();
                // $('.mains3').addClass('main');
                // $('.main').removeClass('mains3');
                // $('.main').prepend(div);
                div.removeClass('searchresultmain');
                div.addClass('activesearchr');
                $('.cancel_main').show();
                div.show();
                return -1;
            });

            $(document).on("click", ".cancel_main", function () {
                //$('.users_div').append('<p>hello</p>');

                $(this).parent().removeClass('activesearchr');
                $(this).parent().addClass('searchresultmain');
                $('.searchresultmain').show();
                $('#users').show();
                $('.main').addClass('mains3');
                $('.mains3').removeClass('main');

                $('.cancel_main').hide();
                //$('#user_ids').removeAttr('style');

            });

        });

        $('#nav-personal-account').click(function () {
            $('#v-pills-tab>div>div>div>a.active').removeClass('active');
            $('.media-body h2.active').removeClass('active');
            $('#vxd-price').addClass('active');
        });
        $('#nav-artist').click(function () {
            $('#v-pills-tab>div>div>div>a.active').removeClass('active');
            $('.media-body h2.active').removeClass('active');
            $('#artist-price').addClass('active');
        });
        $('#nav-investment').click(function () {
            $('#v-pills-tab>div>div>div>a.active').removeClass('active');
            $('.media-body h2.active').removeClass('active');
            $('#investor-price').addClass('active');
        });
        $('#nav-business').click(function () {
            $('#v-pills-tab>div>div>div>a.active').removeClass('active');
            $('.media-body h2.active').removeClass('active');
            $('#business-price').addClass('active');
        });
        $('#nav-reserve-currency').click(function () {
            $('#v-pills-tab>div>div>div>a.active').removeClass('active');
            $('.media-body h2.active').removeClass('active');
            $('#reserve-price').addClass('active');
        });
        $('#nav-circulating-supply').click(function () {
            $('#v-pills-tab>div>div>div>a.active').removeClass('active');
            $('.media-body h2.active').removeClass('active');
            $('#circulating-supply-price').addClass('active');
        });
        $('#nav-security-compliance-account').click(function () {
            $('#v-pills-tab>div>div>div>a.active').removeClass('active');
            $('.media-body h2.active').removeClass('active');
            $('#security-compliance-account-price').addClass('active');
        });
        //
        $('#nav-valyoux-access-token').click(function () {
            $('#v-pills-tab>div>div>div>a.active').removeClass('active');
            $('.media-body h2.active').removeClass('active');
            $('#valyoux-access-token-price').addClass('active');
            var access_tokens_amount = <?php echo e(number_format($access_token * $settings -> valyoux_access_token_subscription_fee, 2, '.', '')); ?>;
        const addZeroes = Number(access_tokens_amount).toFixed(Math.max(String(access_tokens_amount).split('.')[1]?.length, 2) || 2)
        var cash_out_balance = 0.10;

        $('.v-pink').html('Current Value $ ' + addZeroes + ' VXD');
        $('.cashout_balance').html('Your Available Liquidity Cash Out Balance $ ' + cash_out_balance + ' VXD')
        console.log(addZeroes)
    });



        let myForm = document.getElementById('depositForm')
        myForm.addEventListener('submit', (e) => {
            e.preventDefault();
            let formData = new FormData(myForm);
            axios({
                method: 'post',
                url: `<?php echo e(route('admin.deposit')); ?>`,
                data: formData,
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            })
                .then((r) => {
                    if (r.data.status === "success") {
                        window.location.reload();
                    } else {
                        js_error(r.data.message)
                    }
                })
                .catch(e => console.error(e));
        })
        // access token submit form 
        let myFormtoken = document.getElementById('depositFormToken');

        myFormtoken.addEventListener('submit', (e) => {
            e.preventDefault();
            let formData = new FormData(myFormtoken);

            axios({
                method: 'post',
                url: `<?php echo e(route('admin.depositAccessToken')); ?>`,
                data: formData,
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            })
                .then((r) => {
                    if (r.data.status === "success") {
                        window.location.reload();
                    } else {
                        js_error(r.data.message)
                    }
                })
                .catch(e => console.error(e));
        })
        // 
        $(document).ready(function () {
            // buy vdx from usdc
            $('.send_money').click(function () {

                $('#depositForm').css('display', 'block');
                $('#crypto__sell_vxd_div').css('display', 'none');
                $('#stripe_payment_div').css('display', 'none');
                $('#crypto_payment_div').css('display', 'none');
                $('.exchange-currency-body').css('display', 'none');

                document.getElementById("payment_options").style.display = 'none';

            });
            $('.close-deposit').click(function () {

                $('#depositForm').css('display', 'none');


            });

            $('.wallet-close').click(function () {
               $('#crypto__sell_vxd_div').css('display', 'none');
               $('#crypto_payment_sell').css('display', 'none');
            });
            $('.wallet-close').click(function () {

                $('#payment_options').css('display', 'none');
                $('#stripe_payment_div').css('display', 'none');
                $('#crypto_payment_div').css('display', 'none');
                $('input[type="radio"]').prop('checked', false);

            });

            $("#myInput").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#datatable4 tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
            $("#myInputToken").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#datatable4Token tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });

            //sell usdc from vxd
            $('.req_money').click(function () {

                $('#depositForm').css('display', 'none');
                $('#stripe_payment_div').css('display', 'none');
                $('#crypto_payment_div').css('display', 'none');
                $('.exchange-currency-body').css('display', 'none');

                document.getElementById("payment_options").style.display = 'none';
                $('#crypto__sell_vxd_div').css('display', 'block');
            });

            //exchange currency

             $('.ex-currency-btn').click(function () {

                $('#depositForm').css('display', 'none');
                $('#stripe_payment_div').css('display', 'none');
                $('#crypto_payment_div').css('display', 'none');
                document.getElementById("payment_options").style.display = 'none';
                $('.exchange-currency-body').css('display', 'block');
            });


        });

        function stripePayment() {
            document.getElementById("payment_options").style.display = 'block';
            document.getElementById("depositForm").style.display = 'none';
            document.getElementById("crypto__sell_vxd_div").style.display = 'none';
            document.getElementById("crypto_payment_sell").style.display = 'none';

        }
        function customAmount() {
            document.getElementById("amount_div").style.display = 'block';
            document.getElementById("custombutton").style.display = 'none';
            document.getElementById("b1").style.display = 'none';
            document.getElementById("b2").style.display = 'none';
            document.getElementById("b3").style.display = 'none';
            document.getElementById("crypto_payment_sell").style.display = 'none';
            document.getElementById("submitbutton").style.display = 'block';
        }


        function payOneDollar() {
            $('#amount_field').val(1);

        }
        function payFiveDollar() {
            $('#amount_field').val(5);
        }
        function payTenDollar() {
            $('#amount_field').val(10);
        }
        function paytwentyDollar() {
            $('#amount_field').val(20);
        }
        function paythirtyDollar() {
            $('#amount_field').val(30);
        }
        function payhundredDollar() {
            $('#amount_field').val(100);
        }

        $(document).ready(function () {

            $('input[type="radio"]').click(function () {
                var inputValue = $(this).attr("value");
                // for buy vxd
                if (inputValue == "credit_card") {
                    document.getElementById("stripe_payment_div").style.display = 'block';
                    document.getElementById("crypto_payment_div").style.display = 'none';
                    document.getElementById("crypto_payment_sell").style.display = 'none';
                } else if (inputValue == 'coin_deposit') {
                    document.getElementById("crypto_payment_div").style.display = 'block';
                    document.getElementById("stripe_payment_div").style.display = 'none';
                    document.getElementById("crypto_payment_sell").style.display = 'none';
                }
                // for sell vxd
                if (inputValue == "sell_vxd_credit_card") {
                    document.getElementById("stripe_payment_div").style.display = 'none';
                    document.getElementById("crypto_payment_div").style.display = 'none';
                    document.getElementById("crypto_payment_sell").style.display = 'none';
                } else if (inputValue == 'sell_vxd_crypto') {
                    document.getElementById("crypto_payment_div").style.display = 'none';
                    document.getElementById("stripe_payment_div").style.display = 'none';
                    document.getElementById("crypto_payment_sell").style.display = 'block';
                }
            });
            //

        });
        $(function () {
            var $form = $(".require-validation");
            $('form.require-validation').bind('submit', function (e) {
                var $form = $(".require-validation"),
                    inputSelector = ['input[type=email]', 'input[type=password]',
                        'input[type=text]', 'input[type=file]',
                        'textarea'
                    ].join(', '),
                    $inputs = $form.find('.required').find(inputSelector),
                    $errorMessage = $form.find('div.error'),
                    valid = true;
                $errorMessage.addClass('hide');
                $('.has-error').removeClass('has-error');
                $inputs.each(function (i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorMessage.removeClass('hide');
                        e.preventDefault();
                    }
                });
                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, stripeResponseHandler);
                }
            });
            function stripeResponseHandler(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('hide')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    /* token contains id, last4, and card type */
                    var token = response['id'];
                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }
        });
        //
        function showCustomvxd() {
            document.getElementById("customAmount1").style.display = 'block';
            // document.getElementById("b10").style.display = 'none';
            // document.getElementById("b20").style.display = 'none';
            // document.getElementById("b30").style.display = 'none';
            // document.getElementById("b50").style.display = 'none';
            // document.getElementById("paybuttonShow").style.display = 'block';
            // document.getElementById("customVXDButton").style.display = 'none';
        }
        // for buy vxd
        function buttonpayVXD() {

            var validate = true;
            var amount = $('.customAmount').val();
            if (amount == '') {
                // toastr.error('Please fill Amount field', 'Error Alert', {timeOut: 5000});
                $("#customAmountBuyvalidate").css({ 'border-color': '#E2230E', 'box-shadow': '0 0 5px #E2230E' });
                toastr.error("Amount VXD field empty.");
                validate = false;
            }
            if (validate == true) {
                if (amount) {
                    $.ajax({
                        type: 'POST',
                        url: '/crypto',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: { amountVXD: amount },
                        success: function (html) {

                            var create_charges = html.create_charges;
                            var listing_charges = html.listing;
                            var img_qr = `<div class=" col-xs-6 col-md-6">
                                <img style="height:200px;width:200px;margin-left: 15px;" class="qr_code" src="https://qrcode.tec-it.com/API/QRCode?data=`+ create_charges.data.addresses.usdc + `&color=%000&backcolor=%23ffffff" /><br><br><br><div>Address: <input type="text" value="` + create_charges.data.addresses.usdc + `"></div></div>
                                <div class="col-xs-6 col-md-6">
                                    
                                    <h4><b>Customer Name</b></h4> 
                                    <p>`+ create_charges.data.metadata.customer_name + `</p> 
                                    <h4><b>Amount</b></h4> 
                                    <p>`+ create_charges.data.pricing.local.amount + `</p> 
                                    <h4><b>Currency</b></h4> 
                                    <p>`+ create_charges.data.pricing.local.currency + `</p> 
                                    <h4><b>Description</b></h4> 
                                    <p>`+ create_charges.data.description + `</p> 
                                </div>`;
                            var cancelRequest = `<a href="javascript:void(0)" onClick="cancelCharges('` + create_charges.data.code + `')" class="btn btn-secondary">Cancel Request</a>`;
                            //

                            //
                            $("#codemodal").modal('show');
                            $('.appendCancel').html(cancelRequest);
                            $('.qr_code').html(img_qr);
                            $('.getChargeListing').html(listing_charges);
                            toastr.success("Request generated! Please Scan Your Generated Unique Address.", { timeOut: 9000 });
                            document.getElementById("qr_code_generated").style.display = 'block';

                            //   $("#msg").html(data.msg);
                        }
                    });
                } else {
                    toastr.error("Empty Amount.", { timeOut: 9000 });
                }

            }

        }

        function payDollarVXD(amount) {
            $('.customAmount').val(amount);
        }
        // for sell vxd
        function buttonSellVXD() {

            var validate = true;
            var amount = $('.customAmountSellVxd').val();
            if (amount == '') {
                // toastr.error('Please fill Amount field', 'Error Alert', {timeOut: 5000});
                $("#customAmountSellvalidate").css({ 'border-color': '#E2230E', 'box-shadow': '0 0 5px #E2230E' });
                toastr.error("Amount Sell VXD field empty.");
                validate = false;
            }
            if (validate == true) {
                if (amount) {
                    $.ajax({
                        type: 'POST',
                        url: '/sellVxdCrypto',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: { amountVXDSell: amount },
                        success: function (html) {

                            var listing_checkout = html.listing;
                            var checkout_request = html.create_checkout;
                            $("#checkoutmodal").modal('show');
                            var checkout_url = `https://commerce.coinbase.com/checkout/` + checkout_request.id + ``;
                            $('#getCheckoutRequest').attr('href', checkout_url);
                            $('.getCheckoutListing').html(listing_checkout);

                            toastr.success("Checkout Request Created.", { timeOut: 9000 });
                            document.getElementById("checkout_generated").style.display = 'block';
                        }
                    });
                } else {
                    toastr.error("Empty Amount.", { timeOut: 9000 });
                }

            }

        }

        function sellDollarVXD(amount) {
            $('.customAmountSellVxd').val(amount);
        }
        // 

        function cancelCharges(code) {
            if (code != '') {
                $.ajax({
                    type: 'POST',
                    url: '/chargecancelPost',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: { code: code },
                    success: function (html) {
                        console.log(html);
                        toastr.error("Coinbase charge request cancel successful!", { timeOut: 9000 });
                        $("#codemodal").modal('hide');
                        location.reload(true);
                    }
                });
            }
        }
        //loading invesment data on bank page

        $(document).on('click', '.loadbtn2', function () {
            $(".loadbtn2").html('<i class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Loading...');
            var pId = $(this).data("id");

            loadInvestorData(pId, 2);
        });
        loadInvestorData(0, 2);
        function loadInvestorData(page, type) {
            $.ajax({
                url: 'loadinvestordata',
                type: "GET",
                cache: false,
                data: {
                    offset: page,
                    type: type
                },
                success: function (data) {

                    if (data) {
                        const data1 = JSON.parse(data);
                        if (page) {
                            $(".pagination-loadmore").hide();
                            $(".investor_list").append(data1.investors_list);
                        } else {
                            $(".investor_list").html(data1.investors_list);
                        }

                    }
                }
            });


        }

    </script>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\task\Current\Valyou X\new work(12.6)\valyoux_backend(working now)\valyoux_backend\valyoux_backend\resources\views/bank/crypto-wallet.blade.php ENDPATH**/ ?>