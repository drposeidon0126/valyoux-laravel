@extends('layouts.master')
@section('pageCSS')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/pages/my-songs.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/pages/my-videos.css') }}">
@endsection
@section('title') Artist @endsection
<style>
    .b-green {
        color: #1edd0e;
    }
    .s-red {
        color: #ff0093;
    }
    @media (max-width: 525px){
        .tab-margin-top{
            margin-top: 105px !important;
        }
        .input-qty {
            max-width: 170px !important;
        }
        .for-mob-profile{
            z-index: 100 !important;
        }
        
    }
    #candlestick-chart .apexcharts-reset-icon,#candlestick-chart text{
        display: none;
    }
    .market-overview-wrapper{
        color: #000;
    }
    .market-overview-wrapper h3 {
        font-size: 24px;
        font-weight: 600;
        margin-bottom: 15px;
        color: #000;
    }
    .mo-single-row h5 {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 5px;
    color: #000;
}
.mo-single-row p {
    font-size: 14px;
    margin-bottom: 0;
    color: #000;
}
.mo-single-row {
    margin-bottom: 20px;
}

</style>
@section('content')

    <div class="row tab-margin-top">
        <div class="col-12">
            
            @include('layouts.inner-navigation')
            
        </div>
    </div>

    <div class="row">
        @include('layouts.profile-box')
    </div>

    <!-- end row -->
    <!--<div class="tab-select">-->
    <!--    <a href="projects-list" class="unclicked"> Market </a>-->
    <!--    <a href="crypto-exchange" class="active"> Stock price </a>-->
    <!--    <a href="songs" class="unclicked"> Songs</a>-->
    <!--    <a href="videos" class="unclicked"> Videos </a>-->
    <!--    <a class="unclicked"> Photos </a>-->
    <!--    <a class="unclicked"> Profile </a>-->
    <!--    <div class="search_bar">-->
    <!--        <input placeholder="Search">-->
    <!--    </div>-->
    <!--</div>-->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="mt-4">
                        <div id="candlestick-chart" class="apex-charts" dir="ltr"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
    
    <div class="row">
        <div class="col-lg-12">
            @can('all_music_artist_music_fan_investor_show')
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Music Fan Investor</h4>

                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                            <tr class="text-center">
                                <th class="b-green" colspan="2">Buyer</th>
                                <th class="s-red" colspan="2">Seller</th>
                            </tr>
                            <tr>
                                <th scope="col">Amount</th>
                                <th scope="col">Price</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Price</th>
                            </tr>
                            </thead>
                            <tbody class="buyer">
                            <tr>
                                <td>0.0412</td>
                                <td>256.18</td>
                                <td>0.0201</td>
                                <td>124.98</td>
                            </tr>
                            <tr>
                                <td>0.0301</td>
                                <td>187.16</td>
                                <td>0.0165</td>
                                <td>102.60</td>
                            </tr>
                            <tr>
                                <td>0.0523</td>
                                <td>325.21</td>
                                <td>0.0348</td>
                                <td>216.39</td>
                            </tr>
                            <tr>
                                <td>0.0432</td>
                                <td>268.62</td>
                                <td>0.0321</td>
                                <td>199.60</td>
                            </tr>
                            <tr>
                                <td>0.0246</td>
                                <td>152.96</td>
                                <td>0.0403</td>
                                <td>250.59</td>
                            </tr>
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
            @endcan
            @can('all_music_artist_transactions')
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Transactions</h4>

                    <div data-simplebar style="max-height: 310px;">
                        <ul class="verti-timeline list-unstyled">
                            <li class="event-list">
                                <div class="event-timeline-dot">
                                    <i class="bx bx-right-arrow-circle font-size-18"></i>
                                </div>
                                <div class="media">
                                    <div class="mr-3">
                                        <h5 class="font-size-14">15 Mor <i
                                                class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i>
                                        </h5>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            Sold 5 Beyonce Share at $250 per share.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="event-list">
                                <div class="event-timeline-dot">
                                    <i class="bx bx-right-arrow-circle font-size-18"></i>
                                </div>
                                <div class="media">
                                    <div class="mr-3">
                                        <h5 class="font-size-14">14 Mor <i
                                                class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i>
                                        </h5>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            Sold 7 Beyonce Share at $250 per share.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="event-list">
                                <div class="event-timeline-dot">
                                    <i class="bx bx-right-arrow-circle font-size-18"></i>
                                </div>
                                <div class="media">
                                    <div class="mr-3">
                                        <h5 class="font-size-14">13 Mor <i
                                                class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i>
                                        </h5>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            Sold 4 Beyonce Share at $250 per share.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="event-list">
                                <div class="event-timeline-dot">
                                    <i class="bx bx-right-arrow-circle font-size-18"></i>
                                </div>
                                <div class="media">
                                    <div class="mr-3">
                                        <h5 class="font-size-14">13 Mor <i
                                                class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i>
                                        </h5>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            Sold 8 Beyonce Share at $250 per share.
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="event-list">
                                <div class="event-timeline-dot">
                                    <i class="bx bx-right-arrow-circle font-size-18"></i>
                                </div>
                                <div class="media">
                                    <div class="mr-3">
                                        <h5 class="font-size-14">12 Mor <i
                                                class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i>
                                        </h5>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            Sold 6 Beyonce Share at $250 per share.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="event-list">
                                <div class="event-timeline-dot">
                                    <i class="bx bx-right-arrow-circle font-size-18"></i>
                                </div>
                                <div class="media">
                                    <div class="mr-3">
                                        <h5 class="font-size-14">11 Mor <i
                                                class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i>
                                        </h5>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            Sold 5 Beyonce Share at $250 per share.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="event-list">
                                <div class="event-timeline-dot">
                                    <i class="bx bx-right-arrow-circle font-size-18"></i>
                                </div>
                                <div class="media">
                                    <div class="mr-3">
                                        <h5 class="font-size-14">10 Mor <i
                                                class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i>
                                        </h5>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            Sold 9 Beyonce Share at $250 per share.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="event-list">
                                <div class="event-timeline-dot">
                                    <i class="bx bx-right-arrow-circle font-size-18"></i>
                                </div>
                                <div class="media">
                                    <div class="mr-3">
                                        <h5 class="font-size-14">09 Mor <i
                                                class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i>
                                        </h5>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            Sold 2 Beyonce Share at $250 per share.
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endcan
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            <div class="market-overview-wrapper">
                <h3>Market Overview</h3>
                <div class="mo-inner">
                    <div class="mo-single-row row">
                        <div class="col-6 col-md-2">
                            <h5>Market Value</h5>
                            <p>$18,898799.0</p>
                        </div>
                        <div class="col-6 col-md-2 text-right">
                            <h5>Available at Current Price</h5>
                            <p>1000</p>
                        </div>
                    </div>
                    <div class="mo-single-row row">
                        <div class="col-6 col-md-2">
                            <h5>Total Supply</h5>
                            <p>10,000,000</p>
                        </div>
                        <div class="col-6 col-md-2 text-right">
                            <h5>Circulating Supply</h5>
                            <!--<p>30%</p>-->
                        </div>
                    </div>
                    <div class="mo-single-row row">
                        <div class="col-6 col-md-2">
                            <h5>Artist</h5>
                            <p>70%</p>
                        </div>
                        <div class="col-6 col-md-2 text-right">
                            <h5>Music Fans Investors</h5>
                            <p>30%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
    <div class="row bs-float-parent">
             @include('layouts.stock-price')
    </div>

    <!--Buy Modal -->
    <div class="modal fade proceed_modal" id="buyStockModal" aria-labelledby="buyStockModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4><b class="color-pinkk">Buy Stock</b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <div class="card-body price-card">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-price-div">
                                        <p>How many stocks of this artist would you like to purchase?</p>
                                    </div>
                                </div>
                            </div>
                            <div class="quantity">
                                <input type='button' value='-' id="minus" class='minus' field='quantity'/>
                                <input type='text' name='quantity' value='25' class='qty input-qty dollar'/>
                                <input type='button' value='+' id="plus" class='plus ' field='quantity'/>
                            </div>
                        </div>
                        <br><br>
                        <h2 style="font-size: 24px; text-align: center; padding: 0 0 0; color: #1EDD0E;    font-weight: 700;">Total Cost: $ 1490 VXD</h2>
                        <br>
                        <h2 style="font-size: 16px; text-align: center; padding: 0 0 20px; color: #000;">Amount of Shares X Current Stock Price + Fees % = Total Cost.</h2>
                        <button class="btn btn-green btn-sm waves-effect waves-light">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Sell Modal -->
    <div class="modal fade proceed_modal" id="sellStockModal" aria-labelledby="buyStockModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4><b class="color-pinkk">Sell Bobby K.9. Stocks</b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <div class="card-body price-card price-card-pink">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-price-div">
                                        <p>How many stocks of this artist would you like to sell?</p>
                                    </div>
                                </div>
                            </div>
                            <div class="quantity">
                                <input type='button' value='-' id="minus2" class='minus' field='quantityy'/>
                                <input type='text' name='quantityy' value='25' class='qty input-qty dollar'/>
                                <input type='button' value='+' id="plus2" class='plus ' field='quantityy'/>
                            </div>
                        </div>
                        <br><br>
                        <h2 style="font-size: 24px; text-align: center; padding: 0 0 0; color: #ce196c;    font-weight: 700;">Total Cost: $ 1490 VXD</h2>
                        <br>
                        <h2 style="font-size: 16px; text-align: center; padding: 0 0 20px; color: #000;">Amount of Shares X Current Stock Price + Fees % = Total Cost.</h2>
                        <button class="btn btn-pink btn-sm waves-effect waves-light">Sell Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- crypto exchange init -->
    <script src="{{ URL::asset('assets/js/pages/crypto-exchange.init.js') }}"></script>
  
@endsection
