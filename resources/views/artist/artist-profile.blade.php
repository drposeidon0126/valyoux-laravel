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

    @media (max-width: 525px) {

        .input-qty {
            max-width: 170px !important;
        }

        .for-mob-profile {
            z-index: 100 !important;
        }

    }

    #candlestick-chart .apexcharts-reset-icon,
    #candlestick-chart text {
        display: none;
    }

    .market-overview-wrapper {
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

@include('layouts.inner-navigation',['artist'=>$artist])





<div class="row">
    @include('layouts.profile-box',['artist' => $artist])
</div>

<div class="page_section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body market-overview-wrapper">
                    <div class="mt-4">
                    <h3>Artist Bio <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editUserModal">
  <i class="fas fa-pen"></i>
</button></h3>
                    <p><?= isset($artist['artist_about'])?$artist['artist_about']:'';?></p>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="modal fade proceed_modal" id="editUserModal" aria-labelledby="editUserModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4><b class="color-pinkk">Edit Artist Profile</b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                	<form method="POST" action="{{route('admin.update.user.profile')}}"  enctype="multipart/form-data">
                        @csrf
                    <input type="hidden" name="id" value="{{Auth::user()->id}}">
                    <div class="form-group">
                            <label>Artist About</label>
                            <textarea type="text" class="form-control" rows="4"cols="20"  name="artist_about">{{ isset($artist['artist_about'])?$artist['artist_about']:''}}</textarea>
                    </div>
                    
                    <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">Submit</button>
                    </div>
                       
                    </form>
                    
                </div>
            </div>
        </div>
    </div>








</div>


<!-- end row -->

<!-- end row -->
<div class="row bs-float-parent">
    @include('layouts.stock-price',['artist' => $artist])
</div>



@endsection

@section('script')
<!-- apexcharts -->
<script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- crypto exchange init -->
<script src="{{ URL::asset('assets/js/pages/crypto-exchange.init.js') }}"></script>

@endsection
