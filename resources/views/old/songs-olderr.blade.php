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
        .for-web-profile{
        display: block;
    }
    .for-mob-profile{
        display: none;
    }
        @media (max-width: 525px){
            .hide-on-mob{
                display: none;
            }
            img.rounded-circle.avatar-xm.m-1.play-button {
                max-width: 60px;
                width: 30px;
            }
            
        .mkt-newbtn button {
            margin-top: -18px!important;
        }
        .for-web-profile{
            display: none;
        }
        .for-mob-profile{
            display: block;
            font-family: Roboto,sans-serif;
        }
        .ps-right-wrap p {
            margin-right: 0;
            font-size: 11px;
        }
        .pslw-inner .pslw-heading{
            font-size: 20px;
        }
        .pslw-inner .pslw-para{
            font-size: 11px;
        }
        .parent-for-video video {
            max-height: 200px;
        }
        .for-mob-profile{
            position: fixed !important;
            top: 70px;
            left: 0px;
            width: 100%;
            padding: 0 20px;
            z-index: 2222;
        }
        .tab-videos-page{
            margin-top: 105px !important;
        }
        .bs-float-parent{
            height: 30px !important;    
        }
        .bg-black{
            border-radius: 5px !important;
        }
        }
    </style>
@endsection
@section('title') Artist @endsection

@section('content')
    <div class="row">
        
        <!--for web-->
        <div class="col-lg-12 for-web-profile">
            <div class="card">
                <div class="card-body bg-black">
                    <div class="row">
                        <div class="col-3 col-md-1 col-lg-1 col-sm-1">
                            <img src="{{ isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/avatar-1.jpg') }}" alt="" class="rounded-circle" width="100%">
                        </div>
                        <div class="col-5 col-md-3 col-lg-3 col-sm-3">
                            <div class="text-muted">
                                <h4>{{ auth()->user()->first_name.' '.auth()->user()->last_name }}</h4>
                                <p class="mb-1">Singer</p>
                                <p class="mb-0">Major Artist Signed</p>
                            </div>
                        </div>
                        <br>
                        <!--<div class="col-3 col-md-3 ">-->
                        <!--    <p>Stock Price</p>-->
                        <!--    <h2>$58.60</h2>-->
                        <!--</div>-->
                        <div class="col-7 col-md-5">
                            <p>Market Value</p>
                            <h2>$2,455,578.60</h2>
                        </div>
                        <div class="col-5 col-md-2">
                            <button class="btn btn-light waves-effect bottom mt-4">Follow</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--for mob-->
        <div class="col-lg-12 for-mob-profile">
            <div class="card name-card-margin">
                <div class="card-body bg-black new-card-ce">
                    <div class="row">
                        <div class="col-3 col-md-1 col-lg-1 col-sm-1 pr-0 ">
                            <img src="{{ isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/avatar-1.jpg') }}" alt="" class="rounded-circle" width="100%">
                        </div>
                        <div class="col-5 col-md-3 col-lg-3 col-sm-3 pl-0-new">
                            <div class="text-muted">
                                <h4>{{ auth()->user()->first_name.' '.auth()->user()->last_name }}</h4>
                                <p class="mb-1">Singer</p>
                                <p class="mb-0">Major Artist Signed</p>
                            </div>
                        </div>
                        <br>
                        <div class="col-4 col-md-4 pl-0 mkt-new">
                            <p class="mb-6">Market Value</p>
                            <h2>$20,300,567.76</h2>
                        </div>
                        <style>
                            @media (max-width: 525px){
                                .mkt-newbtn button {
                                    margin-top: -18px!important;
                                }
                            }
                        </style>
                        <div class="col-12 col-md-2 mkt-newbtn">
                            <button class="btn btn-light waves-effect bottom mt-4">Follow</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- end row -->
    <div class="tab-select tab-videos-page">
        <a href="projects-list" class="unclicked"> Market </a>
        <a href="crypto-exchange" class="unclicked"> Stock price </a>
        <a href="songs" class="active"> Songs</a>
        <a href="videos" class="unclicked"> Videos </a>
        <a class="unclicked"> Photos </a>
        <a class="unclicked"> Links </a>
        <div class="search_bar">
            <input placeholder="Search">
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table project-list-table table-nowrap table-centered table-borderless">
                    <tbody>
                        <tr>
                            <td>
                                <div class="team" data-gearPath="{{ asset('assets/gear_app/json/audiojungle.json') }}">
                                    <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bobby">
                                        <img src="{{ asset('assets/images/play-button.svg') }}" class="rounded-circle avatar-xm m-1  play-button" alt="">
                                    </a>
                                </div>
                            </td>
                            <td>
                                <h3 class="text-truncate font-size-20"><a href="crypto-exchange" class="text-dark"><b>1.Dark Fantasy</b></a></h3>
                            </td>
                            <td class="hide-on-mob">
                                <a href="javascript: void(0);" class="w-25">
                                    <img src="{{ asset('assets/images/rewind.svg') }}" class="rounded-circle avatar-xm m-1 w-25"
                                         alt="">
                                </a>
                                <a href="javascript: void(0);">
                                    <img src="{{ asset('assets/images/pause-button.svg') }}" class="rounded-circle avatar-xm m-1 w-75"
                                         alt="">
                                </a>
                                <a href="javascript: void(0);" class=" w-25">
                                    <img src="{{ asset('assets/images/fast-forward.svg') }}" class="rounded-circle avatar-xm m-1 w-25"
                                         alt="">
                                </a>
                            </td>
                            <td class="w-25 hide-on-mob">
                                <div class="row">
                                    <div class="col-md-8 p-2">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <p> 00:34 / 04:00</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="{{route('promote-music')}}">
                                    <button type="button" class="btn valyou-o-btn"> Promote</button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="team" data-gearPath="{{ asset('assets/gear_app/json/audiojungle.json') }}">
                                    <a href="javascript: void(0);" class="team-member d-inline-block"
                                       data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Bobby">
                                        <img src="{{ asset('assets/images/play-button.svg') }}" class="rounded-circle avatar-xm m-1  play-button"
                                             alt="">
                                    </a>
                                </div>
                            </td>
                            <td>
                                <h3 class="text-truncate font-size-20"><a href="crypto-exchange" class="text-dark"><b>1.Dark Fantasy</b></a></h3>
                            </td>
                            <td class="hide-on-mob">
                                <a href="javascript: void(0);" class="w-25">
                                    <img src="{{ asset('assets/images/rewind.svg') }}" class="rounded-circle avatar-xm m-1 w-25"
                                         alt="">
                                </a>
                                <a href="javascript: void(0);">
                                    <img src="{{ asset('assets/images/pause-button.svg') }}" class="rounded-circle avatar-xm m-1 w-75"
                                         alt="">
                                </a>
                                <a href="javascript: void(0);" class=" w-25">
                                    <img src="{{ asset('assets/images/fast-forward.svg') }}" class="rounded-circle avatar-xm m-1 w-25"
                                         alt="">
                                </a>
                            </td>
                            <td class="w-25 hide-on-mob">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                         aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                        <span class="sr-only">70% Complete</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <button type="button" class="btn valyou-g-btn"> Valyou</button>
                            </td>
                        </tr>
                        
                        
                        <tr>
                            <td>
                                <div class="team" data-gearPath="{{ asset('assets/gear_app/json/audiojungle.json') }}">
                                    <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bobby">
                                        <img src="{{ asset('assets/images/play-button.svg') }}" class="rounded-circle avatar-xm m-1  play-button" alt="">
                                    </a>
                                </div>
                            </td>
                            <td>
                                <h3 class="text-truncate font-size-20"><a href="crypto-exchange" class="text-dark"><b>1.Dark Fantasy</b></a></h3>
                            </td>
                            <td class="hide-on-mob">
                                <a href="javascript: void(0);" class="w-25">
                                    <img src="{{ asset('assets/images/rewind.svg') }}" class="rounded-circle avatar-xm m-1 w-25"
                                         alt="">
                                </a>
                                <a href="javascript: void(0);">
                                    <img src="{{ asset('assets/images/pause-button.svg') }}" class="rounded-circle avatar-xm m-1 w-75"
                                         alt="">
                                </a>
                                <a href="javascript: void(0);" class=" w-25">
                                    <img src="{{ asset('assets/images/fast-forward.svg') }}" class="rounded-circle avatar-xm m-1 w-25"
                                         alt="">
                                </a>
                            </td>
                            <td class="w-25 hide-on-mob">
                                <div class="row">
                                    <div class="col-md-8 p-2">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <p> 00:34 / 04:00</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="{{route('promote-music')}}">
                                    <button type="button" class="btn valyou-o-btn"> Promote</button>
                                </a>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <div class="team" data-gearPath="{{ asset('assets/gear_app/json/audiojungle.json') }}">
                                    <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bobby">
                                        <img src="{{ asset('assets/images/play-button.svg') }}" class="rounded-circle avatar-xm m-1  play-button" alt="">
                                    </a>
                                </div>
                            </td>
                            <td>
                                <h3 class="text-truncate font-size-20"><a href="crypto-exchange" class="text-dark"><b>1.Dark Fantasy</b></a></h3>
                            </td>
                            <td class="hide-on-mob">
                                <a href="javascript: void(0);" class="w-25">
                                    <img src="{{ asset('assets/images/rewind.svg') }}" class="rounded-circle avatar-xm m-1 w-25"
                                         alt="">
                                </a>
                                <a href="javascript: void(0);">
                                    <img src="{{ asset('assets/images/pause-button.svg') }}" class="rounded-circle avatar-xm m-1 w-75"
                                         alt="">
                                </a>
                                <a href="javascript: void(0);" class=" w-25">
                                    <img src="{{ asset('assets/images/fast-forward.svg') }}" class="rounded-circle avatar-xm m-1 w-25"
                                         alt="">
                                </a>
                            </td>
                            <td class="w-25 hide-on-mob">
                                <div class="row">
                                    <div class="col-md-8 p-2">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <p> 00:34 / 04:00</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="{{route('promote-music')}}">
                                    <button type="button" class="btn valyou-o-btn"> Promote</button>
                                </a>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <div class="team" data-gearPath="{{ asset('assets/gear_app/json/audiojungle.json') }}">
                                    <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bobby">
                                        <img src="{{ asset('assets/images/play-button.svg') }}" class="rounded-circle avatar-xm m-1  play-button" alt="">
                                    </a>
                                </div>
                            </td>
                            <td>
                                <h3 class="text-truncate font-size-20"><a href="crypto-exchange" class="text-dark"><b>1.Dark Fantasy</b></a></h3>
                            </td>
                            <td class="hide-on-mob">
                                <a href="javascript: void(0);" class="w-25">
                                    <img src="{{ asset('assets/images/rewind.svg') }}" class="rounded-circle avatar-xm m-1 w-25"
                                         alt="">
                                </a>
                                <a href="javascript: void(0);">
                                    <img src="{{ asset('assets/images/pause-button.svg') }}" class="rounded-circle avatar-xm m-1 w-75"
                                         alt="">
                                </a>
                                <a href="javascript: void(0);" class=" w-25">
                                    <img src="{{ asset('assets/images/fast-forward.svg') }}" class="rounded-circle avatar-xm m-1 w-25"
                                         alt="">
                                </a>
                            </td>
                            <td class="w-25 hide-on-mob">
                                <div class="row">
                                    <div class="col-md-8 p-2">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <p> 00:34 / 04:00</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="{{route('promote-music')}}">
                                    <button type="button" class="btn valyou-o-btn"> Promote</button>
                                </a>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <div class="team" data-gearPath="{{ asset('assets/gear_app/json/audiojungle.json') }}">
                                    <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bobby">
                                        <img src="{{ asset('assets/images/play-button.svg') }}" class="rounded-circle avatar-xm m-1  play-button" alt="">
                                    </a>
                                </div>
                            </td>
                            <td>
                                <h3 class="text-truncate font-size-20"><a href="crypto-exchange" class="text-dark"><b>1.Dark Fantasy</b></a></h3>
                            </td>
                            <td class="hide-on-mob">
                                <a href="javascript: void(0);" class="w-25">
                                    <img src="{{ asset('assets/images/rewind.svg') }}" class="rounded-circle avatar-xm m-1 w-25"
                                         alt="">
                                </a>
                                <a href="javascript: void(0);">
                                    <img src="{{ asset('assets/images/pause-button.svg') }}" class="rounded-circle avatar-xm m-1 w-75"
                                         alt="">
                                </a>
                                <a href="javascript: void(0);" class=" w-25">
                                    <img src="{{ asset('assets/images/fast-forward.svg') }}" class="rounded-circle avatar-xm m-1 w-25"
                                         alt="">
                                </a>
                            </td>
                            <td class="w-25 hide-on-mob">
                                <div class="row">
                                    <div class="col-md-8 p-2">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <p> 00:34 / 04:00</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="{{route('promote-music')}}">
                                    <button type="button" class="btn valyou-o-btn"> Promote</button>
                                </a>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <div class="team" data-gearPath="{{ asset('assets/gear_app/json/audiojungle.json') }}">
                                    <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bobby">
                                        <img src="{{ asset('assets/images/play-button.svg') }}" class="rounded-circle avatar-xm m-1  play-button" alt="">
                                    </a>
                                </div>
                            </td>
                            <td>
                                <h3 class="text-truncate font-size-20"><a href="crypto-exchange" class="text-dark"><b>1.Dark Fantasy</b></a></h3>
                            </td>
                            <td class="hide-on-mob">
                                <a href="javascript: void(0);" class="w-25">
                                    <img src="{{ asset('assets/images/rewind.svg') }}" class="rounded-circle avatar-xm m-1 w-25"
                                         alt="">
                                </a>
                                <a href="javascript: void(0);">
                                    <img src="{{ asset('assets/images/pause-button.svg') }}" class="rounded-circle avatar-xm m-1 w-75"
                                         alt="">
                                </a>
                                <a href="javascript: void(0);" class=" w-25">
                                    <img src="{{ asset('assets/images/fast-forward.svg') }}" class="rounded-circle avatar-xm m-1 w-25"
                                         alt="">
                                </a>
                            </td>
                            <td class="w-25 hide-on-mob">
                                <div class="row">
                                    <div class="col-md-8 p-2">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <p> 00:34 / 04:00</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="{{route('promote-music')}}">
                                    <button type="button" class="btn valyou-o-btn"> Promote</button>
                                </a>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <div class="team" data-gearPath="{{ asset('assets/gear_app/json/audiojungle.json') }}">
                                    <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bobby">
                                        <img src="{{ asset('assets/images/play-button.svg') }}" class="rounded-circle avatar-xm m-1  play-button" alt="">
                                    </a>
                                </div>
                            </td>
                            <td>
                                <h3 class="text-truncate font-size-20"><a href="crypto-exchange" class="text-dark"><b>1.Dark Fantasy</b></a></h3>
                            </td>
                            <td class="hide-on-mob">
                                <a href="javascript: void(0);" class="w-25">
                                    <img src="{{ asset('assets/images/rewind.svg') }}" class="rounded-circle avatar-xm m-1 w-25"
                                         alt="">
                                </a>
                                <a href="javascript: void(0);">
                                    <img src="{{ asset('assets/images/pause-button.svg') }}" class="rounded-circle avatar-xm m-1 w-75"
                                         alt="">
                                </a>
                                <a href="javascript: void(0);" class=" w-25">
                                    <img src="{{ asset('assets/images/fast-forward.svg') }}" class="rounded-circle avatar-xm m-1 w-25"
                                         alt="">
                                </a>
                            </td>
                            <td class="w-25 hide-on-mob">
                                <div class="row">
                                    <div class="col-md-8 p-2">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <p> 00:34 / 04:00</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="{{route('promote-music')}}">
                                    <button type="button" class="btn valyou-o-btn"> Promote</button>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row bs-float-parent">
        <div class="col-xl-12">
            <div class="card mb-0 posFixed-sVxd" id="bs-float">
                <div class="card-body">
                    <div class="stock-price text-center">Stock Price</div>
                    <div class="d-flex d-flexBlock-mob justify-content-center bd-highlight align-items-center">
                        <div class="marquee">
                            <div class="track">
                                <div class="vxd d-inline">$58.60 VXD</div>
                                <div class="priceT d-inline pr-5">&nbsp;&nbsp;+28.57%</div>
                                <div class="vxd d-inline pl-5">0.000014 BTC</div>
                                <div class="priceT d-inline pr-5">&nbsp;&nbsp;+28.57%</div>
                                <div class="vxd d-inline pl-5">$59.60 USDT</div>
                                <div class="priceT d-inline pr-5">&nbsp;&nbsp;+28.57%</div>
                                <div class="vxd d-inline pl-5">0.00019 ETH</div>
                                <div class="priceT d-inline">&nbsp;&nbsp;+28.57%</div>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center d-flex justify-content-center mb-3  mt-2">
                        <div class="col-xl-2 col-sm-3 col-6">
                            <button class="btn btn-pink btn-sm w-md waves-effect waves-light mr-3">Sell Stock</button>
                        </div>
                        <div class="col-xl-2 col-sm-3 col-6">
                            <button class="btn btn-green btn-sm w-md waves-effect waves-light">Buy Stock</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

 
@endsection
  
@section('script')
    <!-- All dependencies concatenated and packed for you! -->
    <script src="{{ URL::asset('assets/gear_app/js/jquery.gearplayer.libs.min.js') }}"></script>
    <!-- The main app script for Gear Player. -->
    <script src="{{ URL::asset('assets/gear_app/js/jquery.gearplayer.js') }}"></script>
    <script src="{{ URL::asset('assets/gear_app/js/app.js') }}"></script>
    <script type="text/javascript">
    </script>
@endsection
