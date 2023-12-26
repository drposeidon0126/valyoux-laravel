@extends('layouts.master')

@section('title') @lang('translation.Wallet') @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/pages/microtip.css') }}">
    <style>
        .bank-item-svg {
            width: 31px;
            height: 31px;
        }

        .media-body {
            position: relative;
        }

        .custom-icon-position {
            font-size: 15px;
            position: absolute !important;
            top: -7px;
            right: -7px;
        }
    </style>
@endsection

@section('content')
    @include('layouts.inner-navigation',['artist'=>$artist])
    <div class="row">
         @include('layouts.profile-box',['artist'=>$artist])
     </div>
    <div class="page_section">
        <div class="card mini-stats-wid">
        <div class="card-body">
            <div class="media">
                <div class="mr-3 align-self-center">
                    <i class="mdi mdi-bitcoin h2 text-warning mb-0"></i>
                </div>
                <div class="media-body">
                    <p class="text-muted mb-2">Personal Account (Available Balance)
                        <span class="custom-icon-position" aria-label="This is your available balance you can deposit fund and withdraw anytime. Any personal earnings can be withdrawn or paid into this account will be paid into this account." data-microtip-position="left" role="tooltip" data-microtip-size="artist-bank-info"><i class="mdi mdi-alert-circle-outline me-2 custom-icon-hover" ></i></span>
                    </p>
                    <h5 class="mb-0">1.02356 BTC <span class="font-size-14 text-muted">= $ 9148.00</span>
                    </h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-xl-12">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="media">
                                <div class="mr-3 align-self-center">
                                    <img src="{{ asset('/assets/images/bank/artist_icon.svg') }}" alt="" class="bank-item-svg" >
                                </div>
                                <div class="media-body">
                                    <p class="text-muted mb-2">Artist Fund Account (Locked Expenses Approval Required)
                                        <span class="custom-icon-position" aria-label="This is the current balance of your Artist brand. Maintain your impire's expansion. This sum includes investment from individuals who believe in your music brand, fund management, brand partnerships, and sponsors, among other things. Complete details are available in your revenue list. Your funds are restricted and can be spent only in accordance with your budget allocation." data-microtip-position="left" role="tooltip" data-microtip-size="artist-bank-info"><i class="mdi mdi-alert-circle-outline me-2 custom-icon-hover"></i></span>
                                    </p>
                                    <h5 class="mb-0">1.02356 BTC <span class="font-size-14 text-muted">= $ 9148.00</span>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="media">
                                <div class="mr-3 align-self-center">
                                    <img src="{{ asset('/assets/images/bank/investor_icon.svg') }}" alt="" class="bank-item-svg" >
                                </div>
                                <div class="media-body">
                                    <p class="text-muted mb-2">Investment Portfolio Valyou
                                        <span class="custom-icon-position" aria-label="This is your available balance you can deposit fund and withdraw anytime." data-microtip-position="left" role="tooltip" data-microtip-size="artist-bank-info"><i class="mdi mdi-alert-circle-outline me-2 custom-icon-hover"></i></span>
                                    </p>
                                    <h5 class="mb-0">0.04121 ETH <span class="font-size-14 text-muted">= $ 8235.00</span>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="media">
                                <div class="mr-3 align-self-center">
                                    <img src="{{ asset('/assets/images/bank/business_icon.svg') }}" alt="" class="bank-item-svg" >
                                </div>
                                <div class="media-body">
                                    <p class="text-muted mb-2">Business Account Balance
                                        <span class="custom-icon-position" aria-label="Receive or make payments directly to artist brands for the service you provide." data-microtip-position="left" role="tooltip" data-microtip-size="artist-bank-info"><i class="mdi mdi-alert-circle-outline me-2 custom-icon-hover"></i></span>
                                    </p>
                                    <h5 class="mb-0">0.00356 BTC <span class="font-size-14 text-muted">= $ 4721.00</span>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Activities</h4>

                    <ul class="nav nav-tabs nav-tabs-custom">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Buy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sell</a>
                        </li>
                    </ul>

                    <div class="mt-4">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-hover dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ID No</th>
                                        <th>Date</th>
                                        <th>Type</th>
                                        <th>Currency</th>
                                        <th>Amount</th>
                                        <th>Amount in USD</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK3215</a>
                                        </td>

                                        <td>03 Mar, 2020</td>
                                        <td>Buy</td>
                                        <td>Bitcoin</td>
                                        <td>1.00952 BTC</td>
                                        <td>$ 9067.62</td>
                                    </tr>

                                    <tr>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK3216</a>
                                        </td>

                                        <td>04 Mar, 2020</td>
                                        <td>Sell</td>
                                        <td>Ethereum</td>
                                        <td>0.00413 ETH</td>
                                        <td>$ 2123.01</td>
                                    </tr>

                                    <tr>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK3217</a>
                                        </td>

                                        <td>04 Mar, 2020</td>
                                        <td>Buy</td>
                                        <td>Bitcoin</td>
                                        <td>0.00321 BTC</td>
                                        <td>$ 1802.62</td>
                                    </tr>

                                    <tr>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK3218</a>
                                        </td>

                                        <td>05 Mar, 2020</td>
                                        <td>Buy</td>
                                        <td>Litecoin</td>
                                        <td>0.00224 LTC</td>
                                        <td>$ 1773.01</td>
                                    </tr>

                                    <tr>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK3219</a>
                                        </td>

                                        <td>06 Mar, 2020</td>
                                        <td>Buy</td>
                                        <td>Ethereum</td>
                                        <td>1.04321 ETH</td>
                                        <td>$ 9423.73</td>
                                    </tr>

                                    <tr>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK3220</a>
                                        </td>

                                        <td>07 Mar, 2020</td>
                                        <td>Sell</td>
                                        <td>Bitcoin</td>
                                        <td>0.00413 ETH</td>
                                        <td>$ 2123.01</td>
                                    </tr>

                                    <tr>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK3221</a>
                                        </td>

                                        <td>07 Mar, 2020</td>
                                        <td>Buy</td>
                                        <td>Bitcoin</td>
                                        <td>1.00952 BTC</td>
                                        <td>$ 9067.62</td>
                                    </tr>

                                    <tr>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK3222</a>
                                        </td>

                                        <td>08 Mar, 2020</td>
                                        <td>Sell</td>
                                        <td>Ethereum</td>
                                        <td>0.00413 ETH</td>
                                        <td>$ 2123.01</td>
                                    </tr>

                                    <tr>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK3223</a>
                                        </td>

                                        <td>09 Mar, 2020</td>
                                        <td>Sell</td>
                                        <td>Litecoin</td>
                                        <td>1.00952 LTC</td>
                                        <td>$ 9067.62</td>
                                    </tr>

                                    <tr>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK3224</a>
                                        </td>

                                        <td>10 Mar, 2020</td>
                                        <td>Buy</td>
                                        <td>Ethereum</td>
                                        <td>0.00413 ETH</td>
                                        <td>$ 2123.01</td>
                                    </tr>

                                    <tr>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK3225</a>
                                        </td>

                                        <td>11 Mar, 2020</td>
                                        <td>Buy</td>
                                        <td>Bitcoin</td>
                                        <td>1.00952 BTC</td>
                                        <td>$ 9067.62</td>
                                    </tr>

                                    <tr>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK3226</a>
                                        </td>

                                        <td>12 Mar, 2020</td>
                                        <td>Sell</td>
                                        <td>Ethereum</td>
                                        <td>0.00413 ETH</td>
                                        <td>$ 2123.01</td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- end row -->
    <div class="row bs-float-parent">
        @include('layouts.stock-price',['artist'=>$artist])
    </div>
@endsection

@section('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ URL::asset('assets/libs/datatables/datatables.min.js') }}"></script>

    <!-- crypto-wallet init -->
    <script src="{{ URL::asset('assets/js/pages/crypto-wallet.init.js') }}"></script>

    <script>
        $(document).ready(function(){
            $(".custom-icon-hover").mouseenter(function(){
                $( this ).removeClass("mdi-alert-circle-outline");
                $( this ).addClass("mdi-alert-circle");
            });

            $(".custom-icon-hover").mouseleave(function(){
                $( this ).removeClass("mdi-alert-circle");
                $( this ).addClass("mdi-alert-circle-outline");
            });
        });
    </script>
@endsection


