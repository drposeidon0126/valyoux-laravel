@extends('layouts.master')

@section('title') @lang('translation.Pricing') @endsection
@section('content')

<style>

    .for-col-margin [class^="col"]{
        margin-bottom: 30px;
    }
    .for-col-margin .plan-box{
        height: 100%;
    }
    .page-title-box{
        display: none !important;
    }
</style>
    @include('layouts.inner-navigation',['artist'=>$artist])
    <div class="row">
         @include('layouts.profile-box',['artist'=>$artist])
     </div>
     <div class="page_section">
         <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="text-center mb-5">
                <h4>Select a deal</h4>
            </div>
        </div>
    </div>

    <div class="row for-col-margin">
        <div class="col-xl-3 col-md-6">
            <div class="card plan-box _1JscEqX4">
                <div class="card-body p-4">
                    <div class="media">
                        <div class="media-body">
                            <h5>Get Signed</h5>
                            <p>Expression of Interest</p>
                        </div>
                        <div class="ml-3">
                            <img width="40" src="{{ asset('assets/images/valyoux/starving_artist_looking_for_a_sponsor_investor.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="py-4">
                        <h2><sup><small>$</small></sup> 250 <span class="font-size-13">Investment Deal Contract (Paid by Sponsor or Investor)</span></h2>
                    </div>
                    <div class="text-center plan-btn">
                        <a href="{{ url('crypto-buy-sell') }}" class="btn btn-black btn-sm waves-effect waves-light">Sign up Now</a>
                    </div>

                    <div class="plan-features mt-5">
                        <p><i class="bx bx-checkbox-square text-black mr-2"></i> $250 USD Setup & Management</p>
                        <p><i class="bx bx-checkbox-square text-black mr-2"></i> Search for a deal Sponsor / Investor</p>
                        <p><i class="bx bx-checkbox-square text-black mr-2"></i> Negotiate up to 30% on offer</p>
                        <p><i class="bx bx-checkbox-square text-black mr-2"></i> Profile Listing in Sign an Artist</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card plan-box _3JskQp2z">
                <div class="card-body p-4">
                    <div class="media">
                        <div class="media-body">
                            <h5>Valyou X</h5>
                            <p>Independent Artist Starter Pack</p>
                        </div>
                        <div class="ml-3">
                            <img width="40" src="{{ asset('assets/images/valyoux/valyouxartiststaterpackicon.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="py-4">
                        <h2><sup><small>$</small></sup> 1,000 <span class="font-size-13">Investment Deal Contract</span></h2>
                    </div>
                    <div class="text-center plan-btn">
                        <a href="{{ url('crypto-buy-sell') }}" class="btn btn-black btn-sm waves-effect waves-light">Sign up Now</a>
                    </div>

                    <div class="plan-features mt-5">
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i>  $300 USD Setup & Management</p>
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> Trading Investment Pool $700 USD</p>
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> Estimated ROI $190 USD</p>
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> Trading Academy</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card plan-box _1JscEqX4">
                <div class="card-body p-4">
                    <div class="media">
                        <div class="media-body">
                            <h5>Upcoming Artist</h5>
                            <p>Artist</p>
                        </div>
                        <div class="ml-3">
                            <img width="40" src="{{ asset('assets/images/valyoux/upcomingartistplanicon.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="py-4">
                        <h2><sup><small>$</small></sup> 10,000 <span class="font-size-13">Investment Deal Contract</span></h2>
                    </div>
                    <div class="text-center plan-btn">
                        <a href="{{ url('crypto-buy-sell') }}" class="btn btn-black btn-sm waves-effect waves-light">Sign up Now</a>
                    </div>

                    <div class="plan-features mt-5">
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> $3,000 USD Setup & Management</p>
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> Trading Investment Pool $7000 USD</p>
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> Estimated ROI $1,900 USD</p>
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> Trading Academy</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card plan-box _3JskQp2z">
                <div class="card-body p-4">
                    <div class="media">
                        <div class="media-body">
                            <h5>Professional</h5>
                            <p>Artist</p>
                        </div>
                        <div class="ml-3">
                            <img width="40" src="{{ asset('assets/images/valyoux/professional_artist_icon.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="py-4">
                        <h2><sup><small>$</small></sup> 50,000 <span class="font-size-13">Investment Deal Contract</span></h2>
                    </div>
                    <div class="text-center plan-btn">
                        <a href="{{ url('crypto-buy-sell') }}" class="btn btn-black btn-sm waves-effect waves-light">Sign up Now</a>
                    </div>

                    <div class="plan-features mt-5">
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> $15,000 USD Setup & Management</p>
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> Trading Investment Pool $35,000 USD</p>
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> Estimated ROI $9,500 USD</p>
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> Trading Academy</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card plan-box _1JscEqX4">
                <div class="card-body p-4">
                    <div class="media">
                        <div class="media-body">
                            <h5>Major</h5>
                            <p>Independent</p>
                        </div>
                        <div class="ml-3">
                            <img width="40" src="{{ asset('assets/images/valyoux/major_independent_artist_valyouxmusic.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="py-4">
                        <h2><sup><small>$</small></sup> 100,000 <span class="font-size-13">Investment Deal Contract</span></h2>
                    </div>
                    <div class="text-center plan-btn">
                        <a href="{{ url('crypto-buy-sell') }}" class="btn btn-black btn-sm waves-effect waves-light">Sign up Now</a>
                    </div>

                    <div class="plan-features mt-5">
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> $30,000 USD Setup & Management</p>
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> Trading Investment Pool $70,000 USD</p>
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> Estimated ROI $19,500 USD</p>
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> Trading Academy</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card plan-box">
                <div class="card-body p-4 _3JskQp2z">
                    <div class="media">
                        <div class="media-body">
                            <h5>Major</h5>
                            <p>Signed Artist</p>
                        </div>
                        <div class="ml-3">
                            <img width="40" src="{{ asset('assets/images/valyoux/major_independent_artist_valyouxmusic.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="py-4">
                        <h2><sup><small>$</small></sup> 100,000 <span class="font-size-13">Investment Deal Contract</span></h2>
                    </div>
                    <div class="text-center plan-btn">
                        <a href="{{ url('crypto-buy-sell') }}" class="btn btn-black btn-sm waves-effect waves-light">Sign up Now</a>
                    </div>

                    <div class="plan-features mt-5">
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> $30,000 USD Setup & Management</p>
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> Trading Investment Pool</p>
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> Estimated ROI $190 USD</p>
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> Trading Academy</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card plan-box black">
                <div class="card-body p-4">
                    <div class="media">
                        <div class="media-body">
                            <h5>Sign an Artist</h5>
                            <p>Expression of Interest</p>
                        </div>
                        <div class="ml-3">
                            <img width="40" src="{{ asset('assets/images/valyoux/get_signed-on_valyou_x.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="py-4">
                        <h2><sup><small>$</small></sup> 1,000 <span class="font-size-13">Investment Deal Contract (Paid by Sponsor or Investor)</span></h2>
                    </div>
                    <div class="text-center plan-btn">
                        <a href="{{ url('crypto-buy-sell') }}" class="btn btn-success btn-sm waves-effect waves-light">Sign up Now</a>
                    </div>

                    <div class="plan-features mt-5">
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> $250 USD Setup & Management</p>
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> Deal Sponsor</p>
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> Estimated ROI 30%</p>
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> Trading Academy</p>
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
