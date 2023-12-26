<style>

@media only screen and (max-width:768px){
    .create .card{
        box-shadow:none !important;
    }

    .create .card .card-body{
        padding:0px
    }
}

</style>

<?php
use App\Models\Country;
$country=Country::all();
?>

@extends('layouts.master')

@section('title') {{ trans('global.create') }} {{ $title }} @endsection
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
    <div class="create">
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="artist-store" class="custom-validation" enctype="multipart/form-data">
                        @csrf
                        <p class="card-title-desc">What artist category do you think that are you applying for please note you may not yet currently be eligible <span style="color: red;">*</span></p>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" checked type="radio" name="category" id="artist1" value="0">
                                <label class="form-check-label" for="artist1">EOI Profile (Free Listing)</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="category" id="artist2" value="1">
                                <label class="form-check-label" for="artist2">Upcoming</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="category" id="artist3" value="2">
                                <label class="form-check-label" for="artist3">Professional</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="category" id="artist4" value="3">
                                <label class="form-check-label" for="artist4">Major Artist</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Country </label>
                            <div class="custom-file">
                                <select class="form-control" name="country">
                                    <option value="">Select country</option>
                                    @foreach($country as $row)
                                        <option value="{{ $row->cnt_code }}">{{ $row->cnt_name }}</option>
                                    @endforeach
                                </select>
                                @error('avatar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>What is your brand, music artist, influencer or stage name. What do fans call you? This will be your company brand business name that is or will be registered <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="brand" required/>
                        </div>
                        <div class="form-group">
                            <label>Are you a Rapper, Singer or DJ?</label>
                            <select class="form-control" name="about">
                                                    <option value="">Select one</option>

                                                        <option value="DJ">DJ</option>
                                                        <option value="Rapper">Rapper</option>
                                                        <option value="Singer">Singer</option>

                                                </select>

                        </div>
                        <p class="card-title-desc">What artist category do you think that are you applying for please note you may not yet currently be eligible</p>
                        <div class="form-group">
                            <label>Profile Bio. Please tell us a little big about your self and music.</label>
                            <textarea class="form-control" name="artist_about" rows="5" data-parsley-maxlength="250"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Website link</label>
                            <input type="url" class="form-control" name="website"/>
                        </div>
                        <div class="form-group">
                            <label>Spotify</label>
                            <input type="text" class="form-control" name="spotify"/>
                        </div>
                        <div class="form-group">
                            <label>Soundcloud</label>
                            <input type="text" class="form-control" name="soundcloud"/>
                        </div>
                        <div class="form-group">
                            <label>Apple Music</label>
                            <input type="text" class="form-control" name="applemusic"/>
                        </div>
                        <div class="form-group">
                            <label>Youtube</label>
                            <input type="url" class="form-control" name="youtube"/>
                        </div>
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="url" class="form-control" name="facebook"/>
                        </div>
                        <div class="form-group">
                            <label>Instagram</label>
                            <input type="url" class="form-control" name="instagram"/>
                        </div>

                        <p class="card-title-desc">Upload your photo. Please name the file with your name. Make sure there is nothing in the background picture we want the spot light to be on you <span style="color: red;">*</span></p>
                        <div class="card">
                            <div class="body">
                                <input type="file" id="avatar" class="dropify" name="photo" required>
                            </div>
                        </div>
                        @can('admin_access')
                        <div class="form-group">
                            <label>Stock value ($)</label>
                            <input type="number" class="form-control" step="any" name="stock_value"/>
                        </div>
                        <div class="form-group">
                            <label>Market Value (cap) ($)</label>
                            <input type="number" class="form-control" step="any" name="market_value"/>
                        </div>
                        <div class="form-group">
                            <label>Dividend Payments (%)</label>
                            <input type="number" class="form-control" step="any" name="dividend_payments"/>
                        </div>
                        <div class="form-group">
                            <label>Current Price</label>
                            <input type="number" class="form-control" step="any" name="current_price"/>
                        </div>
                        <div class="form-group">
                            <label>Total Supply</label>
                            <input type="number" class="form-control" step="any" name="total_supply" min="1" required/>
                        </div>
                        <div class="form-group">
                            <label>Circulating Supply</label>
                            <input type="number" class="form-control" step="any" name="circulating_supply"/>
                        </div>
                        <div class="form-group">
                            <label>Artist (%)</label>
                            <input type="number" class="form-control" step="any" name="artist"  min="1" required/>
                        </div>
                        <div class="form-group">
                            <label>Music Fans Investors (%)</label>
                            <input type="number" class="form-control" step="any" name="music_fan_investor"/>
                        </div>
                        <div class="form-group">
                            <label>Sell Restrictions (number of stocks)</label>
                            <input type="number" class="form-control" step="any" name="sell_restrictions"/>
                        </div>
                        <div class="form-group">
                            <label>Market Maker Price(%)</label>
                            <input type="number" class="form-control" step="any" name="market_maker_price"/>
                        </div>
                        <div class="form-group">
                            <label>Sell Limit(%)</label>
                            <input type="number" class="form-control" step="any" name="sell_limit"/>
                        </div>
                        @endcan

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
    </div>

@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/parsleyjs/parsleyjs.min.js') }}"></script>
    <!-- Plugins js -->
    <script src="{{ URL::asset('assets/js/pages/form-validation.init.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/dropify/js/dropify.js') }}"></script>
@endsection
@section('script-bottom')
    <script>
        $(function () {
            $('.dropify').dropify();
        })
    </script>
@endsection
