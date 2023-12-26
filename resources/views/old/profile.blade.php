<?php
use App\Models\country;
use App\Models\Artist;
$artist = Artist::where('user_id',auth()->user()->id)->latest()->first();
?>
@extends('layouts.master')
@section('pageCSS')

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/pages/my-songs.css') }}">

    <!-- Stylesheet for the Gear Player, keep this one. -->
    <link rel="stylesheet" href="{{ URL::asset('assets/gear_app/css/gear.css') }}">
    <!-- Meta tags for mobile behavior. Recommended to use! -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <style type="text/css">
        footer {
            display: none;
        }
    @media (max-width: 525px){
        .hide-on-mob{
            display: none;
        }
        img.rounded-circle.avatar-xm.m-1.play-button {
            max-width: 60px;
            width: 25px;
        }
        .tab-margin-top{
            margin-top: 105px !important;
        }
        .bs-float-parent{
            height: 30px !important;    
        }
    }
    @media screen and (max-width: 480px){
        .project-list-table {
            margin-bottom: 100px;
        }
    }
.tab-select .search_bar {
    margin-left: auto;
    margin-right: auto;
}
.project-list-table h3{
    margin: 0;
    font-size: 13px;
}
.valyou-o-btn ,.valyou-g-btn{
    padding: 5px 12px;
}
    </style>
@endsection
@section('title') Artist @endsection

@section('content')
    
    <div class="row tab-margin-top">
        <div class="col-12">
            
            @include('layouts.inner-navigation')
            
        </div>
    </div>
    <div class="row">
    @include('layouts.profile-box')
    </div>
    <div class="row">
        <div class="col-lg-12">
        <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Bio</h4>

                    <div class="table-responsive">
                        <p>{{ $artist['artist_about'] }}</p>
                        
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <!-- end row -->

    <div class="row bs-float-parent">
        @include('layouts.stock-price')
        
    </div>
   

 
@endsection
  
@section('script')
   <script src="{{ URL::asset('assets/gear_app/js/app.js') }}"></script>
    <script type="text/javascript">
    </script>
@endsection
