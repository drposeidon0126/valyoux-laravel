@extends('layouts.master')
@section('title') {{ $title }} @endsection
@section('css')
    <!-- Dropify css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/libs/dropify/css/dropify.min.css') }}">
@endsection
@section('content')
    @component('common-components.breadcrumb')
        @slot('title') {{ request()->segment(3)." ".$title }} @endslot
        @slot('li_1') {{ $title }} @endslot
        @slot('li_2') {{ trans('global.edit') }} {{ $title }} @endslot
    @endcomponent

    <!-- end row -->
    <div class="row">
        <div class="col-xl-6 m-auto">
            <div class="card">
                <div class="card-body">

                    <form method="POST" action="{{ route('admin.settings_post') }}" class="custom-validation" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Admin Fee When Buy/Sell Stocks (%)</label>
                            <input type="number" step="any" class="form-control" name="admin_fee" value="{{ $data->admin_fees ?? ''}}" id="admin_fee" placeholder="Admin Fees" required>
                            <input type="hidden" name="id" value="{{ $data->id ?? ''}}" >
                        </div>
 
                        

                        <div class="form-group">
                            <label>Admin Fee When Promoting Audio or Video (%)</label>
                            <input type="number" step="any" class="form-control" name="promotion_fee" value="{{ $data->promotion_fees ?? ''}}" id="promotion_fee" placeholder="Admin Fees" required>
                        </div>

                        <div class="form-group">
                            <label>Audio Streaming Fee (VXD) $</label>
                            <input type="number" step="any" class="form-control" name="audio_streaming_fee" value="{{ $data->audio_streaming_fee ?? ''}}" id="audio_streaming_fee" placeholder="Admin Fees" required>
                        </div>

                        <div class="form-group">
                            <label>Video Streaming Fee (VXD) $</label>
                            <input type="number" step="any" class="form-control" name="video_streaming_fee" value="{{ $data->video_streaming_fee ?? ''}}" id="video_streaming_fee" placeholder="Admin Fees" required>
                        </div>

                        <div class="form-group">
                            <label>Admin Fee When Audio Streaming Valyou X (%)</label>
                            <input type="number" step="any" class="form-control" name="admin_audio_streaming_fee" value="{{ $data->admin_audio_streaming_fee ?? ''}}" id="admin_audio_streaming_fee" placeholder="Admin Fees" required>
                        </div>

                        <div class="form-group">
                            <label>Admin Fee When Video Streaming Valyou X (%)</label>
                            <input type="number" step="any" class="form-control" name="admin_video_streaming_fee" value="{{ $data->admin_video_streaming_fee ?? ''}}" id="admin_video_streaming_fee" placeholder="Admin Fees" required>
                        </div>

                        <div class="form-group">
                            <label>Advertisement Fee to Valyou X (%)</label>
                            <input type="number" step="any" class="form-control" name="advertisement_fee" value="{{ $data->advertisement_fee ?? ''}}" id="advertisement_fee" placeholder="Admin Fees" required>
                        </div>

                        <div class="form-group">
                            <label>Supply & Demand Stock Price Increments (VXD)</label>
                            <input type="number" step="any" class="form-control" name="increments" value="{{ $data->increments ?? ''}}" id="increments" placeholder="Increments" required>
                        </div>

                        <div class="form-group">
                            <label>Market Maker Price (%)</label>
                            <input type="number" step="any" class="form-control" name="market_maker_price" value="{{ $data->market_maker_price ?? ''}}" id="market_maker_price" placeholder="Market maker price" required>
                        </div>

                        <div class="form-group">
                            <label>Sell Limit (%)</label>
                            <input type="number" step="any" class="form-control" name="sell_limit" value="{{ $data->sell_limit ?? ''}}" id="sell_limit" placeholder="Sell Limit" required>
                        </div>
                    	<div class="form-group">
                            <label>Conversion Fee USDC to VXD (%)</label>
                            <input type="number" step="any" class="form-control" name="usdc_to_vxd" value="{{ $data->usdc_to_vxd ?? ''}}" id="admin_fee" placeholder="USDC to VXD fee" required>
                            <input type="hidden" name="id" value="{{ $data->id ?? ''}}" >
                        </div>

                        <div class="form-group">
                            <label>Credit/Debit Card (Valyou X Fee on top of Stripe Charges %)</label>
                            <input type="number" step="any" class="form-control" name="stripe_charges" value="{{ $data->stripe_charges ?? ''}}" id="stripe_charges" placeholder="Stripe Charges" required>
                        </div>
                        <div class="form-group">
                            <label>Valyou X Access Tokens (Subscription Fee)</label>
                            <input type="number" step="any" class="form-control" name="valyoux_access_token_subscription_fee" value="{{ $data->valyoux_access_token_subscription_fee ?? ''}}" id="access_token_subscription_fee" placeholder="Valyou X Access Tokens" required="">
                        </div>
                        <div class="form-group">
                            <label>Liquidity (%)</label>
                            <input type="number" step="any" class="form-control" name="liquidity" value="{{ $data->liquidity ?? ''}}" id="liquidity" placeholder="Valyou X Access Tokens" required="">
                        </div>

                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection
