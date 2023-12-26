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
            width: 30px;
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
    .main-nav-tabss{
        
    }
    .main-tab-item{
        
    }
    .main-tab-link{
        font-size: 13px;
        text-transform: capitalize;
        padding: 20px 10px;
        display: inline-block;
        color: #000 !important;
        font-weight: 600 !important;
    }
    .main-nav-tab-content{
        
    }
    </style>
@endsection
@section('title') Artist @endsection

@section('content')
    
    <div class="row d-none">
        <div class="col-12">
            <ul class="nav nav-tabs main-nav-tabss" id="myTab" role="tablist">
              <li class="main-tab-item" role="presentation">
                <a class="main-tab-link active" id="market-tab" data-toggle="tab" href="#market" role="tab" aria-controls="market" aria-selected="true">market</a>
              </li>
              <li class="main-tab-item" role="presentation">
                <a class="main-tab-link" id="stock-price-tab" data-toggle="tab" href="#stock-price" role="tab" aria-controls="stock-price" aria-selected="false">stock-price</a>
              </li>
              <li class="main-tab-item" role="presentation">
                <a class="main-tab-link" id="songs-tab" data-toggle="tab" href="#songs" role="tab" aria-controls="songs" aria-selected="false">songs</a>
              </li>
              
              <li class="main-tab-item" role="presentation">
                <a class="main-tab-link" id="videos-tab" data-toggle="tab" href="#videos" role="tab" aria-controls="videos" aria-selected="false">videos</a>
              </li>
              <li class="main-tab-item" role="presentation">
                <a class="main-tab-link" id="followers-tab" data-toggle="tab" href="#followers" role="tab" aria-controls="followers" aria-selected="false">followers</a>
              </li>
              
              <li class="main-tab-item" role="presentation">
                <a class="main-tab-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
              </li>
              
              <li class="main-tab-item" role="presentation">
                <a class="main-tab-link" id="photos-tab" data-toggle="tab" href="#photos" role="tab" aria-controls="photos" aria-selected="false">photos</a>
              </li>
              <li class="main-tab-item" role="presentation">
                <a class="main-tab-link" id="revenue-tab" data-toggle="tab" href="#revenue" role="tab" aria-controls="revenue" aria-selected="false">revenue</a>
              </li>
              
              <li class="main-tab-item" role="presentation">
                <a class="main-tab-link" id="bank-tab" data-toggle="tab" href="#bank" role="tab" aria-controls="bank" aria-selected="false">bank</a>
              </li>
              <li class="main-tab-item" role="presentation">
                <a class="main-tab-link" id="collaborate-tab" data-toggle="tab" href="#collaborate" role="tab" aria-controls="collaborate" aria-selected="false">collaborate</a>
              </li>
              
              <li class="main-tab-item" role="presentation">
                <a class="main-tab-link" id="invite-tab" data-toggle="tab" href="#invite" role="tab" aria-controls="invite" aria-selected="false">invite</a>
              </li>
              <li class="main-tab-item" role="presentation">
                <a class="main-tab-link" id="promote-tab" data-toggle="tab" href="#promote" role="tab" aria-controls="promote" aria-selected="false">promote</a>
              </li>
              
              <li class="main-tab-item" role="presentation">
                <a class="main-tab-link" id="radar-tab" data-toggle="tab" href="#radar" role="tab" aria-controls="radar" aria-selected="false">radar</a>
              </li>
              <li class="main-tab-item" role="presentation">
                <a class="main-tab-link" id="store-tab" data-toggle="tab" href="#store" role="tab" aria-controls="store" aria-selected="false">store</a>
              </li>
              
              <li class="main-tab-item" role="presentation">
                <a class="main-tab-link" id="subscriptions-tab" data-toggle="tab" href="#subscriptions" role="tab" aria-controls="subscriptions" aria-selected="false">subscriptions</a>
              </li>
              <li class="main-tab-item" role="presentation">
                <a class="main-tab-link" id="investment-deal-tab" data-toggle="tab" href="#investment-deal" role="tab" aria-controls="investment-deal" aria-selected="false">investment-deal</a>
              </li>
              
              <li class="main-tab-item" role="presentation">
                <a class="main-tab-link" id="academy-tab" data-toggle="tab" href="#academy" role="tab" aria-controls="academy" aria-selected="false">academy</a>
              </li>
              <li class="main-tab-item" role="presentation">
                <a class="main-tab-link" id="dashboard-tab" data-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="false">dashboard</a>
              </li>

            </ul>
            
            <div class="tab-content main-nav-tab-content mb-4" id="myTabContent">
              <div class="tab-pane fade show active" id="market" role="tabpanel" aria-labelledby="home-tab">...</div>
              <div class="tab-pane fade" id="stock-price" role="tabpanel" aria-labelledby="stock-price-tab">...</div>
              <div class="tab-pane fade" id="songs" role="tabpanel" aria-labelledby="songs-tab">...</div>
              
              <div class="tab-pane fade" id="videos" role="tabpanel" aria-labelledby="videos-tab">...</div>
              <div class="tab-pane fade" id="followers" role="tabpanel" aria-labelledby="followers-tab">...</div>
              
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
              
              <div class="tab-pane fade" id="photos" role="tabpanel" aria-labelledby="photos-tab">...</div>
              <div class="tab-pane fade" id="revenue" role="tabpanel" aria-labelledby="revenue-tab">...</div>
              
              <div class="tab-pane fade" id="bank" role="tabpanel" aria-labelledby="bank-tab">...</div>
              <div class="tab-pane fade" id="collaborate" role="tabpanel" aria-labelledby="collaborate-tab">...</div>
              
              <div class="tab-pane fade" id="invite" role="tabpanel" aria-labelledby="invite-tab">...</div>
              <div class="tab-pane fade" id="promote" role="tabpanel" aria-labelledby="promote-tab">...</div>
              
              <div class="tab-pane fade" id="radar" role="tabpanel" aria-labelledby="radar-tab">...</div>
              <div class="tab-pane fade" id="store" role="tabpanel" aria-labelledby="store-tab">...</div>
              
              <div class="tab-pane fade" id="subscriptions" role="tabpanel" aria-labelledby="subscriptions-tab">...</div>
              <div class="tab-pane fade" id="investment-deal" role="tabpanel" aria-labelledby="investment-deal-tab">...</div>
              
              <div class="tab-pane fade" id="academy" role="tabpanel" aria-labelledby="academy-tab">...</div>
              <div class="tab-pane fade" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">...</div>
      
            </div>
        </div>
    </div>
    <div class="row">
        
        @include('layouts.profile-box')
        
    </div>
    <!-- end row -->
    <div class="tab-select tab-margin-top">
        <a href="songs" class="active"> Songs</a>
        <a href="projects-list" class="unclicked"> Market </a>
        <a href="crypto-exchange" class="unclicked"> Stock price </a>
        <a href="videos" class="unclicked"> Videos </a>
        <a class="unclicked"> Photos </a>
        <a class="unclicked"> Links </a>
        <div class="search_bar"><input placeholder="Search"></div>
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
