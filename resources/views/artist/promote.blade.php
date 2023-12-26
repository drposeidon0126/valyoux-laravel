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
    
        @include('layouts.inner-navigation')
    
    <div class="row">
        
        @include('layouts.profile-box')
        
    </div>
    <!-- end row -->
    <div class="tab-select">
        <!--<a href="songs" class="active"> Songs</a>-->
        <!--<a href="projects-list" class="unclicked"> Market </a>-->
        <!--<a href="crypto-exchange" class="unclicked"> Stock price </a>-->
        <!--<a href="videos" class="unclicked"> Videos </a>-->
        <!--<a class="unclicked"> Photos </a>-->
        <!--<a class="unclicked"> Links </a>-->
        <div class="search_bar"><input placeholder="Search"></div>
    </div>
    <div class="page_section">
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
                                <h3 class="text-truncate "><a href="crypto-exchange" class="text-dark"><b>1. Taking a holiday </b></a></h3>
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
                                <h3 class="text-truncate "><a href="crypto-exchange" class="text-dark"><b>2. Sunshine </b></a></h3>
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
                                <h3 class="text-truncate "><a href="crypto-exchange" class="text-dark"><b>3. Afterlife</b></a></h3>
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
                                <h3 class="text-truncate "><a href="crypto-exchange" class="text-dark"><b>4. Keep Me high</b></a></h3>
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
                                <h3 class="text-truncate "><a href="crypto-exchange" class="text-dark"><b>5. Billion dollar girl</b></a></h3>
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
                                <h3 class="text-truncate "><a href="crypto-exchange" class="text-dark"><b>6. Take your girl shopping </b></a></h3>
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
                                <h3 class="text-truncate "><a href="crypto-exchange" class="text-dark"><b>7. They Waiting </b></a></h3>
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
                                <h3 class="text-truncate "><a href="crypto-exchange" class="text-dark"><b>8. Dark Fantasy</b></a></h3>
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

</div>
  
    <!-- end row -->

    <div class="row bs-float-parent">
        @include('layouts.stock-price')
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
