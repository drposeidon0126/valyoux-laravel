<?php
use App\Models\Country;
$country=Country::all();
?>
@extends('layouts.master')
@section('title') {{ trans('global.edit') }} {{ $title }} @endsection
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
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                    <form method="POST" action="artist-store" class="custom-validation" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $artist->id}}">
                        <input type="hidden" name="user_id" value="{{ $artist->user_id}}">
                        <p class="card-title-desc">What artist category do you think that are you applying for please note you may not yet currently be eligible</p>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="category" id="artist1" {{ ($artist->category == "0") ? 'checked' : '' }} value="0">
                                <label class="form-check-label" for="artist1">EOI Profile</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="category" id="artist2" {{ ($artist->category == "1") ? 'checked' : '' }} value="1">
                                <label class="form-check-label" for="artist2">Upcoming</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="category" id="artist3" {{ ($artist->category == "2") ? 'checked' : '' }} value="2">
                                <label class="form-check-label" for="artist3">Independent</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="category" id="artist4" {{ ($artist->category == "3") ? 'checked' : '' }} value="3">
                                <label class="form-check-label" for="artist4">Major Artist</label>
                            </div>
                        </div>
                        <div class="form-group">
                        <label>Country </label>
                                            <div class="custom-file">
                                                <select class="form-control" name="country">
                                                    <option value="">Select country</option>
                                                    @foreach($country as $row)
                                                        <option <?php echo ($row->cnt_code == $artist->country)?'selected':''; ?>  value="{{ $row->cnt_code }}">{{ $row->cnt_name }}</option>
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
                            <label>What is your brand, music artist, influencer or stage name. What do fans call you? This will be your company brand business name that is or will be registered.</label>
                            <input type="text" class="form-control" name="brand" value="{{ $artist->brand ?? '' }}" required/>
                        </div>
                      <div class="form-group">
                            <label>Are you a Rapper, Singer or DJ?</label>
                              <select class="form-control" name="about">
                                      <option value="">Select one</option>
                                        <option  <?php echo  (ucfirst($artist->about) == 'DJ')?'selected':'';?> value="DJ">DJ</option>
                                        <option <?php echo  (ucfirst($artist->about) == 'Rapper')?'selected':'';?> value="Rapper">Rapper</option>
                                        <option  <?php echo  (ucfirst($artist->about) == 'Singer')?'selected':'';?> value="Singer">Singer</option>
                                 </select>

                        </div>

                        <p class="card-title-desc">What artist category do you think that are you applying for please note you may not yet currently be eligible</p>
                        <div class="form-group">
                            <label>Profile Bio. Please tell us a little big about your self and music.</label>
                            <textarea class="form-control" name="artist_about" rows="5" data-parsley-maxlength="250">{{ $artist->artist_about ?? '' }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Website link</label>
                            <input type="url" class="form-control" name="website" value="{{ $artist->website ?? '' }}"/>
                        </div>
                        <div class="form-group">
                            <label>Spotify</label>
                            <input type="text" class="form-control" name="spotify" value="{{ $artist->spotify ?? '' }}"/>
                        </div>
                        <div class="form-group">
                            <label>Soundcloud</label>
                            <input type="text" class="form-control" name="soundcloud" value="{{ $artist->soundcloud ?? '' }}"/>
                        </div>
                        <div class="form-group">
                            <label>Apple Music</label>
                            <input type="text" class="form-control" name="applemusic" value="{{ $artist->applemusic ?? '' }}"/>
                        </div>
                        <div class="form-group">
                            <label>Youtube</label>
                            <input type="url" class="form-control" name="youtube" value="{{ $artist->youtube ?? '' }}"/>
                        </div>
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="url" class="form-control" name="facebook" value="{{ $artist->facebook ?? '' }}"/>
                        </div>
                        <div class="form-group">
                            <label>Instagram</label>
                            <input type="url" class="form-control" name="instagram" value="{{ $artist->instagram ?? '' }}" />
                        </div>

                        <p class="card-title-desc">Upload your photo. Please name the file with your name. Make sure there is nothing in the background picture we want the spot light to be on you.</p>
                        <div class="card">
                            <div class="body">
                                <input type="file" id="photo" class="dropify" name="photo">
                            </div>
                        </div>
                        @can('admin_access')
                        <div class="form-group">
                            <label>Stock value ($)</label>
                            <input type="text" class="form-control" step="any" name="stock_value" value="{{ $artist->stock_value ?? '' }}"/>
                        </div>
                        <div class="form-group">
                            <label>Market Value (cap) ($)</label>
                            <input type="text" class="form-control" step="any" name="market_value" value="{{ $artist->market_value ?? '' }}"/>
                        </div>
                        <div class="form-group">
                            <label>Dividend Payments (%)</label>
                            <input type="text" class="form-control" step="any" name="dividend_payments" value="{{ sprintf('%f',$artist->dividend_payments) ?? '0' }}"/>
                        </div>
                        <div class="form-group">
                            <label>Current Price</label>
                            <input type="number" class="form-control" step="any" name="current_price" value="{{ $artist->current_price ?? '0' }}"/>
                        </div>
                        <div class="form-group">
                            <label>Total Supply</label>
                            <input type="number" class="form-control" step="any" name="total_supply" value="{{ $artist->total_supply ?? '0' }}" min="1" required/>
                        </div>
                        <div class="form-group">
                            <label>Circulating Supply</label>
                            <input type="number" class="form-control" step="any" name="circulating_supply" value="{{ $artist->circulating_supply ?? '0' }}"/>
                        </div>
                        <div class="form-group">
                            <label>Artist (%)</label>
                            <input type="number" class="form-control" step="any" name="artist" value="{{ $artist->artist ?? '1' }}"  min="1" required/>
                        </div>
                        <div class="form-group">
                            <label>Music Fans Investors (%)</label>
                            <input type="number" class="form-control" step="any" name="music_fan_investor" value="{{ sprintf('%f',$artist->music_fan_investor) ?? '0' }}"/>
                        </div>
                        <div class="form-group">
                            <label>Sell Restrictions (number of stocks)</label>
                            <input type="number" class="form-control" step="any" name="sell_restrictions" value="{{ $artist->sell_restrictions ?? '0' }}"/>
                        </div>
                        <div class="form-group">
                            <label>Market Maker Price(%)</label>
                            <input type="number" class="form-control" step="any" name="market_maker_price" value="{{ $artist->market_maker_price ?? '0' }}"/>
                        </div>
                        <div class="form-group">
                            <label>Sell Limit(%)</label>
                            <input type="number" class="form-control" step="any" name="sell_limit" value="{{ $artist->sell_limit ?? '0' }}"/>
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
            let imagenUrl = `{{asset($artist->photo ?? 'assets/images/users/avator.png')}}`;
            $('#photo').dropify(
                {
                    defaultFile: imagenUrl
                });
        })
    </script>
@endsection
