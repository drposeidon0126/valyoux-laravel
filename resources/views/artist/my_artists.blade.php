@section('pageCSS')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/pages/projects-list.css?v0.2') }}">
@endsection

<style>
.trade-market {
    display: inline-block;
    border: none;
    background: linear-gradient(77deg, #FF4182, #FFA85B 100%);
    padding: 8px 25px;
    color: #fff;
    font-weight: 600;
    font-size: 14px;
    letter-spacing: 1px;
    border-radius: 4px;
    transition: all 0.3s ease-in-out;
}
.font-size-14{
    font-size: 14px;
}
.scrolling{
    color: #000 !important;
    font-size: 10px !important;
    margin-top: -25px !important;
}
@media only screen and (orientation: landscape) 
and (min-device-width: 320px) 
and (max-device-width: 820px){
    .table-responsive-m{
        display:block !important;
    }
    .table-responsive-web{
        display:none !important;
    }
    .tab-select.search-bar-web a.active {
        outline: none;
        text-decoration: none solid #ff0093 0px !important;
        color: #e84e89;
        position: relative;
    }
}
@media (max-width: 768px){
    .tab-select.search-bar-web a.active {
        outline: none;
        text-decoration: none solid #ff0093 0px !important;
        color: #e84e89;
        position: relative;
    }
}

.tab-select .active::before {
    content: '';
    width: 80px;
    height: 2px;
    background: #e84e89;
    display: block;
    position: absolute;
    bottom: 0px;
    left: 50%;
    transform: translateX(-50%);
}
.wrapper-for-main-tabs {
    display: flex;
    margin: 20px 0;
}
.select-price-type-wrapper {
    order: 2;
    margin: 0 !important;
    margin-left: 15px !important;
}
.artist-maker-tabs{
    margin: 0 !important;
    padding: 0 10px !important;
}
</style>
 
@extends('layouts.master')

@section('title') Market @endsection

@section('content')
<div class="float-right">
                        @can('artist_create')
                        @if(count($artist) < 1 )
                            <a class="btn btn-v-green" href="artist/artist/create">{{ trans('global.add') }} Artist</a>
                        @endif
                        @endcan
                        @can('admin_access')
                        <a class="btn btn-v-green" href="artist/artist/create">{{ trans('global.add') }} Artist</a>
                        @endcan
                    </div>
                    
    <div class="tab-content" id="v-pills-tabContent">
        <div id="allmain" class="tab-pane fade show active" role="tabpanel" aria-labelledby="allmain-tab">
            <div class="tab-select nav nav-pills search-bar-web" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <div class="search_bar">
                    <input placeholder="Search" name="search_name" id="search_name">
                </div>
                <a href="#all" class="active" id="all-tab" data-toggle="pill" role="tab" aria-controls="all" aria-selected="true"> All </a>
                <a href="#expression_of_interest" class="unclicked" id="expression_of_interest-tab" data-toggle="pill" role="tab" aria-controls="expression_of_interest" aria-selected="false"> Expression of Interest </a>
                <a class="unclicked" href="#upcoming" id="upcoming-tab" data-toggle="pill" role="tab" aria-controls="upcoming" aria-selected="false"> Upcoming </a>
                <a href="#professional" class="unclicked" id="professional-tab" data-toggle="pill" role="tab" aria-controls="professional" aria-selected="false"> Professional </a>
                <a href="#major_artists" class="unclicked" id="major_artists-tab" data-toggle="pill" role="tab" aria-controls="major_artists" aria-selected="false"> Major Artists </a>
            </div>
        
            <div class="row">
                <div class="col-lg-12" style="padding: 0px 0px 0px !important;">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div id="all" class="tab-pane fade show active " role="tabpanel" aria-labelledby="all-tab">
                            <div class="table-responsive table-responsive-web">
                                <table class="table project-list-table table-nowrap table-centered table-borderless">
                                    <thead>
                                    <tr>
                                        <th scope="col" style="width: 1%" class="text-center">#Rank</th>
                                        <th scope="col" style="width: 10%">Artist</th>
                                        <th scope="col" style="width: 10%">Change %</th>
                                        <th class="sorting stock_value" value="stock_value" type="ASC" scope="col" style="width: 10%">Stock Price<i class="fa fa-fw fa-sort"></i></th>
                                        <th class="sorting market_value" value="market_value" type="ASC" scope="col" style="width: 10%">Market Value<i class="fa fa-fw fa-sort"></i></th>
                                        <th class="sorting dividend_payments" value="dividend_payments" type="ASC" scope="col" style="width: 10%"> Dividends<i class="fa fa-fw fa-sort"></i></th>
                                        @can('admin_access')
                                        <th scope="col">Primary Artist</th>
                                        @endcan
                                        <th scope="col" style="width: 10%"> Action</th>
                                        <th scope="col">Trade</th>
                                    </tr>
                                    </thead>
                                    <tbody class="tab_all">
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="table-responsive table-responsive-m">
                                <table class="table project-list-table table-nowrap table-centered table-borderless">
                                    <tbody class="mtab_all">
                                    <!--<tr>
                                        <td class="text-center"><span class="font-size-14">2.</span></td>
                                        <td>
                                            <div class="team">
                                                <a href="crypto-exchange" class="team-member d-inline-block"
                                                   data-toggle="tooltip" data-placement="top" title=""
                                                   data-original-title="Drake">
                                                    <img src="{{ asset('assets/images/valyoux/drake-valyou_x_music@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                         alt="">
                                                </a>
                                            </div>
                                        </td>
                                        <td class="paddingleftrightzero"> 
                                            <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Drake</a></h5>
                                            <p class="text-muted mb-0 music-title">Rapper</p>
                                            <p  class="text-muted mb-0 stock-pricing">$312.24</p>
                                        </td>
                                        <td  class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/pink_arrow_circle_down.svg') }}" alt=""></a><span class="status-danger">$312.24</span></td>
                                    </tr>-->
                                    
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                        
                        <div id="expression_of_interest" class="tab-pane fade" role="tabpanel" aria-labelledby="expression_of_interest-tab">
                            
                            <div class="table-responsive table-responsive-web">
                                <table class="table project-list-table table-nowrap table-centered table-borderless">
                                    <thead>
                                    <tr>
                                        <th scope="col" style="width: 1%" class="text-center">#Rank</th>
                                        <th scope="col" style="width: 10%">Artist</th>
                                        <th scope="col" style="width: 10%">Change %</th>
                                         <th class="sorting stock_value" value="stock_value" type="ASC" scope="col" style="width: 10%">Stock Price<i class="fa fa-fw fa-sort"></i></th>
                                        <th class="sorting market_value" value="market_value" type="ASC" scope="col" style="width: 10%">Market Value<i class="fa fa-fw fa-sort"></i></th>
                                        <th class="sorting dividend_payments" value="dividend_payments" type="ASC" scope="col" style="width: 10%"> Dividends<i class="fa fa-fw fa-sort"></i></th>
                                        <th scope="col" style="width: 10%"> Action</th>
                                        <!--<th scope="col">Trade</th>-->
                                    </tr>
                                    </thead>
                                    <tbody class="tab_0">
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="table-responsive table-responsive-m">
                                <table class="table project-list-table table-nowrap table-centered table-borderless">
                                    <tbody class="mtab_0">
                                    
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                        
                        <div id="upcoming" class="tab-pane fade" role="tabpanel" aria-labelledby="upcoming-tab">
                            
                            <div class="table-responsive table-responsive-web">
                                <table class="table project-list-table table-nowrap table-centered table-borderless">
                                    <thead>
                                    <tr>
                                        <th scope="col" style="width: 1%" class="text-center">#Rank</th>
                                        <th scope="col" style="width: 10%">Artist</th>
                                        <th scope="col" style="width: 10%">Change %</th>
                                         <th class="sorting stock_value" value="stock_value" type="ASC" scope="col" style="width: 10%">Stock Price<i class="fa fa-fw fa-sort"></i></th>
                                        <th class="sorting market_value" value="market_value" type="ASC" scope="col" style="width: 10%">Market Value<i class="fa fa-fw fa-sort"></i></th>
                                        <th class="sorting dividend_payments" value="dividend_payments" type="ASC" scope="col" style="width: 10%"> Dividends<i class="fa fa-fw fa-sort"></i></th>
                                        <th scope="col" style="width: 10%"> Action</th>
                                        <!--<th scope="col">Trade</th>-->
                                    </tr>
                                    </thead>
                                   <tbody class="tab_1">
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="table-responsive table-responsive-m">
                                <table class="table project-list-table table-nowrap table-centered table-borderless">
                                    <tbody class="mtab_1">
                                    
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                        
                        <div id="professional" class="tab-pane fade" role="tabpanel" aria-labelledby="professional-tab">
                            
                            <div class="table-responsive table-responsive-web">
                                <table class="table project-list-table table-nowrap table-centered table-borderless">
                                    <thead>
                                    <tr>
                                        <th scope="col" style="width: 1%" class="text-center">#Rank</th>
                                        <th scope="col" style="width: 10%">Artist</th>
                                        <th scope="col" style="width: 10%">Change %</th>
                                         <th class="sorting stock_value" value="stock_value" type="ASC" scope="col" style="width: 10%">Stock Price<i class="fa fa-fw fa-sort"></i></th>
                                        <th class="sorting market_value" value="market_value" type="ASC" scope="col" style="width: 10%">Market Value<i class="fa fa-fw fa-sort"></i></th>
                                        <th class="sorting dividend_payments" value="dividend_payments" type="ASC" scope="col" style="width: 10%"> Dividends<i class="fa fa-fw fa-sort"></i></th>
                                        <th scope="col" style="width: 10%"> Action</th>
                                        <!--<th scope="col">Trade</th>-->
                                    </tr>
                                    </thead>
                                    <tbody class="tab_2">
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="table-responsive table-responsive-m">
                                <table class="table project-list-table table-nowrap table-centered table-borderless">
                                    <tbody class="mtab_2">
                                   
                                    </tbody>
                                </table>
                            </div>
                        
                        </div>
                        
                        <div id="major_artists" class="tab-pane fade" role="tabpanel" aria-labelledby="major_artists-tab">
        
                            <div class="table-responsive table-responsive-web">
                                <table class="table project-list-table table-nowrap table-centered table-borderless">
                                    <thead>
                                    <tr>
                                        <th scope="col" style="width: 1%" class="text-center">#Rank</th>
                                        <th scope="col" style="width: 10%">Artist</th>
                                        <th scope="col" style="width: 10%">Change %</th>
                                         <th class="sorting stock_value" value="stock_value" type="ASC" scope="col" style="width: 10%">Stock Price<i class="fa fa-fw fa-sort"></i></th>
                                        <th class="sorting market_value" value="market_value" type="ASC" scope="col" style="width: 10%">Market Value<i class="fa fa-fw fa-sort"></i></th>
                                        <th class="sorting dividend_payments" value="dividend_payments" type="ASC" scope="col" style="width: 10%"> Dividends<i class="fa fa-fw fa-sort"></i></th>
                                        <th scope="col" style="width: 10%"> Action</th>
                                        <!--<th scope="col">Trade</th>-->
                                    </tr>
                                    </thead>
                                    <tbody class="tab_3">
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="table-responsive table-responsive-m">
                                <table class="table project-list-table table-nowrap table-centered table-borderless">
                                    <tbody class="mtab_3">
                                   
                                    </tbody>
                                </table>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="tab-select nav nav-pills search-bar-web d-none" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <div class="search_bar">
            <input placeholder="Search">
        </div>
        <a href="#all" class="active" id="all-tab" data-toggle="pill" role="tab" aria-controls="all" aria-selected="true"> All </a>
        <a href="#expression_of_interest" class="unclicked" id="expression_of_interest-tab" data-toggle="pill" role="tab" aria-controls="expression_of_interest" aria-selected="false"> Expression of Interest </a>
        <a class="unclicked" href="#upcoming" id="upcoming-tab" data-toggle="pill" role="tab" aria-controls="upcoming" aria-selected="false"> Upcoming </a>
        <a href="#professional" class="unclicked" id="professional-tab" data-toggle="pill" role="tab" aria-controls="professional" aria-selected="false"> Professional </a>
        <a href="#major_artists" class="unclicked" id="major_artists-tab" data-toggle="pill" role="tab" aria-controls="major_artists" aria-selected="false"> Major Artists </a>
    </div>

    <div class="row d-none">
        <div class="col-lg-12" style="padding: 0px 0px 0px !important;">
            <div class="tab-content" id="v-pills-tabContent">
                <div id="all" class="tab-pane fade show active" role="tabpanel" aria-labelledby="all-tab">
                    <div class="table-responsive table-responsive-web">
                        <table class="table project-list-table table-nowrap table-centered table-borderless">
                            <thead>
                            <tr>
                                <th scope="col" style="width: 1%" class="text-center">#</th>
                                <th scope="col" style="width: 10%">Rank</th>
                                <th scope="col" style="width: 10%">Artist</th>
                                <th scope="col" style="width: 10%">Change %</th>
                                <!--<th scope="col" style="width: 10%">Stock Price</th>-->
                                <!--<th scope="col" style="width: 10%">Market Value</th>-->
                                <th scope="col" style="width: 10%"> Dividends</th>
                                <th scope="col" style="width: 10%"> Action</th>
                                <!--<th scope="col">Trade</th>-->
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center"><span class="font-size-14">1.</span></td>
                                <td  style="width: 10%">
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Bobby K.9.">
                                            <img src="{{ asset('assets/images/valyoux/bobby_k9_valyou_x_music250@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td  style="width: 10%">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Bobby K.9</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$789.25</p>
                                </td>
                                <td  style="width: 10%" class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td  style="width: 10%">$789.25</td>
                                <td  style="width: 10%">$2,076,567</td>
                                <td  style="width: 10%" >$789.25</td>
                                <!--<td  style="width: 10%">-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">2.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Drake">
                                            <img src="{{ asset('assets/images/valyoux/drake-valyou_x_music@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Drake</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$312.24</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/pink_arrow_circle_down.svg') }}" alt=""></a><span class="status-danger">1000%</span></td>
                                <td>$312.24</td>
                                <td>$1,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">3.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Beyonce">
                                            <img src="{{ asset('assets/images/valyoux/beyonce250@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Beyonce</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$23.34</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$23.34</td>
                                <td>$3,076,234</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>

                            <tr>
                                <td class="text-center"><span class="font-size-14">4.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Kanye West">
                                            <img src="{{ asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Kanye West</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$55.11</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$55.11</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">5.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Nicky Minaj">
                                            <img src="{{ asset('assets/images/valyoux/nicky_minaj_valyou_x@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Nicky Minaj</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$57.11</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$57.11</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">6.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Independent artist">
                                            <img src="{{ asset('assets/images/valyoux/pro_artist@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Ariana Grande</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$89.11</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/pink_arrow_circle_down.svg') }}" alt=""></a><span class="status-danger">1000%</span></td>
                                <td>$89.11</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>

                            <tr>
                                 <td class="text-center"><span class="font-size-14">7.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Justin Beiber">
                                            <img src="{{ asset('assets/images/valyoux/justin_beiber_valyou_x_music@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Justin Bieber</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$123.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$123.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">8.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Chris Brown">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Chris Brown</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$23.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$23.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">9.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Taylor Swift">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt=""  width="60" height="60">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Taylor Swift</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$78.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$78.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            
                            <tr>
                                 <td class="text-center"><span class="font-size-14">10.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Ed Sheeran</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$483.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$483.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">11.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Lady Gaga</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$59.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$59.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">12.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Cardi B</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$43.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            
                            <tr>
                                 <td class="text-center"><span class="font-size-14">13.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">O.T. Genasis</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$43.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">14.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">NGblk</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$43.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">15.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Davido</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$43.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            
                            <tr>
                                 <td class="text-center"><span class="font-size-14">16.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Nico</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$43.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">17.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Lizzo</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$3.33</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$3.33</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">18.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">King Ocoro</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$0.66</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$0.66</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="table-responsive table-responsive-m">
                        <table class="table project-list-table table-nowrap table-centered table-borderless">
                            <tbody>
                            <tr >
                                <td class="text-center"><span class="font-size-14">1.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bobby K.9.">
                                            <img src="{{ asset('assets/images/valyoux/bobby_k9_valyou_x_music250@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1" alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero" >
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Bobby K.9</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$789.25</p>
                                </td>
                                <td class="row-btn-margin"><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">$789.25</span></td>
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">2.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Drake">
                                            <img src="{{ asset('assets/images/valyoux/drake-valyou_x_music@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero"> 
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Drake</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p  class="text-muted mb-0 stock-pricing">$312.24</p>
                                </td>
                                <td  class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/pink_arrow_circle_down.svg') }}" alt=""></a><span class="status-danger">$312.24</span></td>
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">3.</span></td>
                                <td >
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Beyonce">
                                            <img src="{{ asset('assets/images/valyoux/beyonce250@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero" >
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Beyonce</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$23.34</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">$23.34</span></td>
                            </tr>

                            <tr>
                                <td class="text-center"><span class="font-size-14">4.</span></td>
                                <td >
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Kanye West">
                                            <img src="{{ asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Kanye West</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$55.11</p>
                                </td>
                                <td class="row-btn-margin"><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                             
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">5.</span></td>
                                <td >
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Nicky Minaj">
                                            <img src="{{ asset('assets/images/valyoux/nicky_minaj_valyou_x@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero" >
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Nicky Minaj</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$57.11</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                             
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">6.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Independent artist">
                                            <img src="{{ asset('assets/images/valyoux/pro_artist@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Ariana Grande</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$89.11</p>
                                </td>
                                <td  class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/pink_arrow_circle_down.svg') }}" alt=""></a><span class="status-danger">1000%</span></td>
                           
                            </tr>

                            <tr>
                                <td class="text-center"><span class="font-size-14">7.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Justin Beiber">
                                            <img src="{{ asset('assets/images/valyoux/justin_beiber_valyou_x_music@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Justin Bieber</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$123.54</p>
                                </td>
                              <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                           
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">8.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Chris Brown">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero" >
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Chris Brown</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$23.54</p>
                                </td>
                                <td  class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                             
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">9.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Taylor Swift">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Taylor Swift</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$78.54</p>
                                </td>
                                <td  class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                           
                            </tr>
                            
                            <tr>
                                <td class="text-center"><span class="font-size-14">10.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero" >
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Ed Sheeran</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$483.54</p>
                                </td>
                              <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                             
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">11.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Lady Gaga</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$59.54</p>
                                </td>
                              <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                              
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">12.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Cardi B</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td  class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                              
                            </tr>
                            
                            <tr>
                                <td class="text-center"><span class="font-size-14">13.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">O.T. Genasis</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                               
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">14.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">NGblk</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                               
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">15.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Davido</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                              
                            </tr>
                            
                            <tr>
                                <td class="text-center"><span class="font-size-14">16.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Nico</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                            
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">17.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Lizzo</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$3.33</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                            
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">18.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">King Ocoro</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$0.66</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                              
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
                
                <div id="expression_of_interest" class="tab-pane fade" role="tabpanel" aria-labelledby="expression_of_interest-tab">
                    
                    <div class="table-responsive table-responsive-web">
                        <table class="table project-list-table table-nowrap table-centered table-borderless">
                            <thead>
                            <tr>
                                <th scope="col" style="width: 1%" class="text-center">#</th>
                                <th scope="col" style="width: 10%">Rank</th>
                                <th scope="col" style="width: 10%">Artist</th>
                                <th scope="col" style="width: 10%">Change %</th>
                                <!--<th scope="col" style="width: 10%">Stock Price</th>-->
                                <!--<th scope="col" style="width: 10%">Market Value</th>-->
                                <th scope="col" style="width: 10%"> Dividends</th>
                                <th scope="col" style="width: 10%"> Action</th>
                                <!--<th scope="col">Trade</th>-->
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center"><span class="font-size-14">2.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Drake">
                                            <img src="{{ asset('assets/images/valyoux/drake-valyou_x_music@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Drake</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$312.24</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/pink_arrow_circle_down.svg') }}" alt=""></a><span class="status-danger">1000%</span></td>
                                <td>$312.24</td>
                                <td>$1,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">1.</span></td>
                                <td  style="width: 10%">
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Bobby K.9.">
                                            <img src="{{ asset('assets/images/valyoux/bobby_k9_valyou_x_music250@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td  style="width: 10%">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Bobby K.9</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$789.25</p>
                                </td>
                                <td  style="width: 10%" class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td  style="width: 10%">$789.25</td>
                                <td  style="width: 10%">$2,076,567</td>
                                <td  style="width: 10%" >$789.25</td>
                                <!--<td  style="width: 10%">-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">3.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Beyonce">
                                            <img src="{{ asset('assets/images/valyoux/beyonce250@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Beyonce</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$23.34</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$23.34</td>
                                <td>$3,076,234</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>

                            <tr>
                                <td class="text-center"><span class="font-size-14">4.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Kanye West">
                                            <img src="{{ asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Kanye West</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$55.11</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$55.11</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">5.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Nicky Minaj">
                                            <img src="{{ asset('assets/images/valyoux/nicky_minaj_valyou_x@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Nicky Minaj</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$57.11</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$57.11</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">6.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Independent artist">
                                            <img src="{{ asset('assets/images/valyoux/pro_artist@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Ariana Grande</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$89.11</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/pink_arrow_circle_down.svg') }}" alt=""></a><span class="status-danger">1000%</span></td>
                                <td>$89.11</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>

                            <tr>
                                 <td class="text-center"><span class="font-size-14">7.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Justin Beiber">
                                            <img src="{{ asset('assets/images/valyoux/justin_beiber_valyou_x_music@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Justin Bieber</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$123.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$123.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">8.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Chris Brown">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Chris Brown</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$23.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$23.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">9.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Taylor Swift">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt=""  width="60" height="60">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Taylor Swift</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$78.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$78.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            
                            <tr>
                                 <td class="text-center"><span class="font-size-14">10.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Ed Sheeran</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$483.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$483.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">11.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Lady Gaga</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$59.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$59.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">12.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Cardi B</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$43.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            
                            <tr>
                                 <td class="text-center"><span class="font-size-14">13.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">O.T. Genasis</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$43.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">14.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">NGblk</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$43.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">15.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Davido</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$43.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            
                            <tr>
                                 <td class="text-center"><span class="font-size-14">16.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Nico</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$43.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">17.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Lizzo</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$3.33</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$3.33</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">18.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">King Ocoro</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$0.66</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$0.66</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="table-responsive table-responsive-m">
                        <table class="table project-list-table table-nowrap table-centered table-borderless">
                            <tbody>
                            <tr >
                                <td class="text-center"><span class="font-size-14">1.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bobby K.9.">
                                            <img src="{{ asset('assets/images/valyoux/bobby_k9_valyou_x_music250@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1" alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero" >
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Bobby K.9</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$789.25</p>
                                </td>
                                <td class="row-btn-margin"><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">$789.25</span></td>
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">2.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Drake">
                                            <img src="{{ asset('assets/images/valyoux/drake-valyou_x_music@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero"> 
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Drake</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p  class="text-muted mb-0 stock-pricing">$312.24</p>
                                </td>
                                <td  class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/pink_arrow_circle_down.svg') }}" alt=""></a><span class="status-danger">$312.24</span></td>
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">3.</span></td>
                                <td >
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Beyonce">
                                            <img src="{{ asset('assets/images/valyoux/beyonce250@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero" >
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Beyonce</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$23.34</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">$23.34</span></td>
                            </tr>

                            <tr>
                                <td class="text-center"><span class="font-size-14">4.</span></td>
                                <td >
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Kanye West">
                                            <img src="{{ asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Kanye West</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$55.11</p>
                                </td>
                                <td class="row-btn-margin"><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                             
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">5.</span></td>
                                <td >
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Nicky Minaj">
                                            <img src="{{ asset('assets/images/valyoux/nicky_minaj_valyou_x@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero" >
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Nicky Minaj</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$57.11</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                             
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">6.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Independent artist">
                                            <img src="{{ asset('assets/images/valyoux/pro_artist@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Ariana Grande</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$89.11</p>
                                </td>
                                <td  class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/pink_arrow_circle_down.svg') }}" alt=""></a><span class="status-danger">1000%</span></td>
                           
                            </tr>

                            <tr>
                                <td class="text-center"><span class="font-size-14">7.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Justin Beiber">
                                            <img src="{{ asset('assets/images/valyoux/justin_beiber_valyou_x_music@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Justin Bieber</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$123.54</p>
                                </td>
                              <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                           
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">8.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Chris Brown">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero" >
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Chris Brown</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$23.54</p>
                                </td>
                                <td  class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                             
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">9.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Taylor Swift">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Taylor Swift</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$78.54</p>
                                </td>
                                <td  class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                           
                            </tr>
                            
                            <tr>
                                <td class="text-center"><span class="font-size-14">10.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero" >
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Ed Sheeran</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$483.54</p>
                                </td>
                              <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                             
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">11.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Lady Gaga</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$59.54</p>
                                </td>
                              <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                              
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">12.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Cardi B</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td  class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                              
                            </tr>
                            
                            <tr>
                                <td class="text-center"><span class="font-size-14">13.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">O.T. Genasis</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                               
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">14.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">NGblk</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                               
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">15.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Davido</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                              
                            </tr>
                            
                            <tr>
                                <td class="text-center"><span class="font-size-14">16.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Nico</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                            
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">17.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Lizzo</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$3.33</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                            
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">18.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">King Ocoro</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$0.66</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                              
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
                
                <div id="upcoming" class="tab-pane fade" role="tabpanel" aria-labelledby="upcoming-tab">
                    
                    <div class="table-responsive table-responsive-web">
                        <table class="table project-list-table table-nowrap table-centered table-borderless">
                            <thead>
                            <tr>
                                <th scope="col" style="width: 1%" class="text-center">#</th>
                                <th scope="col" style="width: 10%">Rank</th>
                                <th scope="col" style="width: 10%">Artist</th>
                                <th scope="col" style="width: 10%">Change %</th>
                                <!--<th scope="col" style="width: 10%">Stock Price</th>-->
                                <!--<th scope="col" style="width: 10%">Market Value</th>-->
                                <th scope="col" style="width: 10%"> Dividends</th>
                                <th scope="col" style="width: 10%"> Action</th>
                                
                                <!--<th scope="col">Trade</th>-->
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center"><span class="font-size-14">1.</span></td>
                                <td  style="width: 10%">
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Bobby K.9.">
                                            <img src="{{ asset('assets/images/valyoux/bobby_k9_valyou_x_music250@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td  style="width: 10%">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Bobby K.9</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$789.25</p>
                                </td>
                                <td  style="width: 10%" class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td  style="width: 10%">$789.25</td>
                                <td  style="width: 10%">$2,076,567</td>
                                <td  style="width: 10%" >$789.25</td>
                                <!--<td  style="width: 10%">-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">2.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Drake">
                                            <img src="{{ asset('assets/images/valyoux/drake-valyou_x_music@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Drake</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$312.24</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/pink_arrow_circle_down.svg') }}" alt=""></a><span class="status-danger">1000%</span></td>
                                <td>$312.24</td>
                                <td>$1,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">3.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Beyonce">
                                            <img src="{{ asset('assets/images/valyoux/beyonce250@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Beyonce</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$23.34</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$23.34</td>
                                <td>$3,076,234</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>

                            <tr>
                                <td class="text-center"><span class="font-size-14">4.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Kanye West">
                                            <img src="{{ asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Kanye West</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$55.11</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$55.11</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">5.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Nicky Minaj">
                                            <img src="{{ asset('assets/images/valyoux/nicky_minaj_valyou_x@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Nicky Minaj</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$57.11</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$57.11</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">6.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Independent artist">
                                            <img src="{{ asset('assets/images/valyoux/pro_artist@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Ariana Grande</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$89.11</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/pink_arrow_circle_down.svg') }}" alt=""></a><span class="status-danger">1000%</span></td>
                                <td>$89.11</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>

                            <tr>
                                 <td class="text-center"><span class="font-size-14">7.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Justin Beiber">
                                            <img src="{{ asset('assets/images/valyoux/justin_beiber_valyou_x_music@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Justin Bieber</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$123.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$123.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">8.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Chris Brown">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Chris Brown</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$23.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$23.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">9.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Taylor Swift">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt=""  width="60" height="60">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Taylor Swift</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$78.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$78.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            
                            <tr>
                                 <td class="text-center"><span class="font-size-14">10.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Ed Sheeran</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$483.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$483.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">11.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Lady Gaga</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$59.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$59.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">12.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Cardi B</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$43.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            
                            <tr>
                                 <td class="text-center"><span class="font-size-14">13.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">O.T. Genasis</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$43.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">14.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">NGblk</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$43.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">15.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Davido</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$43.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            
                            <tr>
                                 <td class="text-center"><span class="font-size-14">16.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Nico</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$43.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">17.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Lizzo</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$3.33</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$3.33</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">18.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">King Ocoro</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$0.66</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$0.66</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="table-responsive table-responsive-m">
                        <table class="table project-list-table table-nowrap table-centered table-borderless">
                            <tbody>
                            <tr >
                                <td class="text-center"><span class="font-size-14">1.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bobby K.9.">
                                            <img src="{{ asset('assets/images/valyoux/bobby_k9_valyou_x_music250@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1" alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero" >
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Bobby K.9</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$789.25</p>
                                </td>
                                <td class="row-btn-margin"><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">$789.25</span></td>
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">2.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Drake">
                                            <img src="{{ asset('assets/images/valyoux/drake-valyou_x_music@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero"> 
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Drake</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p  class="text-muted mb-0 stock-pricing">$312.24</p>
                                </td>
                                <td  class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/pink_arrow_circle_down.svg') }}" alt=""></a><span class="status-danger">$312.24</span></td>
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">3.</span></td>
                                <td >
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Beyonce">
                                            <img src="{{ asset('assets/images/valyoux/beyonce250@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero" >
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Beyonce</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$23.34</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">$23.34</span></td>
                            </tr>

                            <tr>
                                <td class="text-center"><span class="font-size-14">4.</span></td>
                                <td >
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Kanye West">
                                            <img src="{{ asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Kanye West</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$55.11</p>
                                </td>
                                <td class="row-btn-margin"><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                             
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">5.</span></td>
                                <td >
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Nicky Minaj">
                                            <img src="{{ asset('assets/images/valyoux/nicky_minaj_valyou_x@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero" >
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Nicky Minaj</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$57.11</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                             
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">6.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Independent artist">
                                            <img src="{{ asset('assets/images/valyoux/pro_artist@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Ariana Grande</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$89.11</p>
                                </td>
                                <td  class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/pink_arrow_circle_down.svg') }}" alt=""></a><span class="status-danger">1000%</span></td>
                           
                            </tr>

                            <tr>
                                <td class="text-center"><span class="font-size-14">7.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Justin Beiber">
                                            <img src="{{ asset('assets/images/valyoux/justin_beiber_valyou_x_music@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Justin Bieber</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$123.54</p>
                                </td>
                              <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                           
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">8.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Chris Brown">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero" >
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Chris Brown</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$23.54</p>
                                </td>
                                <td  class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                             
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">9.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Taylor Swift">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Taylor Swift</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$78.54</p>
                                </td>
                                <td  class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                           
                            </tr>
                            
                            <tr>
                                <td class="text-center"><span class="font-size-14">10.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero" >
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Ed Sheeran</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$483.54</p>
                                </td>
                              <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                             
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">11.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Lady Gaga</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$59.54</p>
                                </td>
                              <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                              
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">12.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Cardi B</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td  class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                              
                            </tr>
                            
                            <tr>
                                <td class="text-center"><span class="font-size-14">13.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">O.T. Genasis</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                               
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">14.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">NGblk</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                               
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">15.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Davido</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                              
                            </tr>
                            
                            <tr>
                                <td class="text-center"><span class="font-size-14">16.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Nico</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                            
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">17.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Lizzo</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$3.33</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                            
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">18.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">King Ocoro</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$0.66</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                              
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
                
                <div id="professional" class="tab-pane fade" role="tabpanel" aria-labelledby="professional-tab">
                    
                    <div class="table-responsive table-responsive-web">
                        <table class="table project-list-table table-nowrap table-centered table-borderless">
                            <thead>
                            <tr>
                                <th scope="col" style="width: 1%" class="text-center">#</th>
                                <th scope="col" style="width: 10%">Rank</th>
                                <th scope="col" style="width: 10%">Artist</th>
                                <th scope="col" style="width: 10%">Change %</th>
                                <!--<th scope="col" style="width: 10%">Stock Price</th>-->
                                <!--<th scope="col" style="width: 10%">Market Value</th>-->
                                <th scope="col" style="width: 10%"> Dividends</th>
                                <th scope="col" style="width: 10%"> Action</th>
                                <!--<th scope="col">Trade</th>-->
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center"><span class="font-size-14">1.</span></td>
                                <td  style="width: 10%">
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Bobby K.9.">
                                            <img src="{{ asset('assets/images/valyoux/bobby_k9_valyou_x_music250@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td  style="width: 10%">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Bobby K.9</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$789.25</p>
                                </td>
                                <td  style="width: 10%" class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td  style="width: 10%">$789.25</td>
                                <td  style="width: 10%">$2,076,567</td>
                                <td  style="width: 10%" >$789.25</td>
                                <!--<td  style="width: 10%">-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">2.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Drake">
                                            <img src="{{ asset('assets/images/valyoux/drake-valyou_x_music@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Drake</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$312.24</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/pink_arrow_circle_down.svg') }}" alt=""></a><span class="status-danger">1000%</span></td>
                                <td>$312.24</td>
                                <td>$1,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">3.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Beyonce">
                                            <img src="{{ asset('assets/images/valyoux/beyonce250@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Beyonce</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$23.34</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$23.34</td>
                                <td>$3,076,234</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>

                            <tr>
                                <td class="text-center"><span class="font-size-14">4.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Kanye West">
                                            <img src="{{ asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Kanye West</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$55.11</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$55.11</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">5.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Nicky Minaj">
                                            <img src="{{ asset('assets/images/valyoux/nicky_minaj_valyou_x@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Nicky Minaj</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$57.11</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$57.11</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">6.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Independent artist">
                                            <img src="{{ asset('assets/images/valyoux/pro_artist@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Ariana Grande</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$89.11</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/pink_arrow_circle_down.svg') }}" alt=""></a><span class="status-danger">1000%</span></td>
                                <td>$89.11</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>

                            <tr>
                                 <td class="text-center"><span class="font-size-14">7.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Justin Beiber">
                                            <img src="{{ asset('assets/images/valyoux/justin_beiber_valyou_x_music@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Justin Bieber</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$123.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$123.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">8.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Chris Brown">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Chris Brown</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$23.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$23.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">9.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Taylor Swift">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt=""  width="60" height="60">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Taylor Swift</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$78.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$78.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            
                            <tr>
                                 <td class="text-center"><span class="font-size-14">10.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Ed Sheeran</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$483.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$483.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">11.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Lady Gaga</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$59.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$59.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">12.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Cardi B</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$43.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            
                            <tr>
                                 <td class="text-center"><span class="font-size-14">13.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">O.T. Genasis</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$43.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">14.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">NGblk</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$43.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">15.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Davido</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$43.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            
                            <tr>
                                 <td class="text-center"><span class="font-size-14">16.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Nico</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$43.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">17.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Lizzo</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$3.33</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$3.33</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">18.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">King Ocoro</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$0.66</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$0.66</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="table-responsive table-responsive-m">
                        <table class="table project-list-table table-nowrap table-centered table-borderless">
                            <tbody>
                            <tr >
                                <td class="text-center"><span class="font-size-14">1.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bobby K.9.">
                                            <img src="{{ asset('assets/images/valyoux/bobby_k9_valyou_x_music250@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1" alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero" >
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Bobby K.9</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$789.25</p>
                                </td>
                                <td class="row-btn-margin"><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">$789.25</span></td>
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">2.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Drake">
                                            <img src="{{ asset('assets/images/valyoux/drake-valyou_x_music@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero"> 
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Drake</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p  class="text-muted mb-0 stock-pricing">$312.24</p>
                                </td>
                                <td  class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/pink_arrow_circle_down.svg') }}" alt=""></a><span class="status-danger">$312.24</span></td>
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">3.</span></td>
                                <td >
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Beyonce">
                                            <img src="{{ asset('assets/images/valyoux/beyonce250@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero" >
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Beyonce</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$23.34</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">$23.34</span></td>
                            </tr>

                            <tr>
                                <td class="text-center"><span class="font-size-14">4.</span></td>
                                <td >
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Kanye West">
                                            <img src="{{ asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Kanye West</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$55.11</p>
                                </td>
                                <td class="row-btn-margin"><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                             
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">5.</span></td>
                                <td >
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Nicky Minaj">
                                            <img src="{{ asset('assets/images/valyoux/nicky_minaj_valyou_x@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero" >
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Nicky Minaj</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$57.11</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                             
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">6.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Independent artist">
                                            <img src="{{ asset('assets/images/valyoux/pro_artist@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Ariana Grande</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$89.11</p>
                                </td>
                                <td  class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/pink_arrow_circle_down.svg') }}" alt=""></a><span class="status-danger">1000%</span></td>
                           
                            </tr>

                            <tr>
                                <td class="text-center"><span class="font-size-14">7.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Justin Beiber">
                                            <img src="{{ asset('assets/images/valyoux/justin_beiber_valyou_x_music@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Justin Bieber</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$123.54</p>
                                </td>
                              <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                           
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">8.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Chris Brown">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero" >
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Chris Brown</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$23.54</p>
                                </td>
                                <td  class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                             
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">9.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Taylor Swift">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Taylor Swift</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$78.54</p>
                                </td>
                                <td  class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                           
                            </tr>
                            
                            <tr>
                                <td class="text-center"><span class="font-size-14">10.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero" >
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Ed Sheeran</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$483.54</p>
                                </td>
                              <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                             
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">11.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Lady Gaga</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$59.54</p>
                                </td>
                              <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                              
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">12.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Cardi B</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td  class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                              
                            </tr>
                            
                            <tr>
                                <td class="text-center"><span class="font-size-14">13.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">O.T. Genasis</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                               
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">14.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">NGblk</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                               
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">15.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Davido</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                              
                            </tr>
                            
                            <tr>
                                <td class="text-center"><span class="font-size-14">16.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Nico</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                            
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">17.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Lizzo</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$3.33</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                            
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">18.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">King Ocoro</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$0.66</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                              
                            </tr>
                            </tbody>
                        </table>
                    </div>
                
                </div>
                
                <div id="major_artists" class="tab-pane fade" role="tabpanel" aria-labelledby="major_artists-tab">

                    <div class="table-responsive table-responsive-web">
                        <table class="table project-list-table table-nowrap table-centered table-borderless">
                            <thead>
                            <tr>
                                <th scope="col" style="width: 1%" class="text-center">#</th>
                                <th scope="col" style="width: 10%">Rank</th>
                                <th scope="col" style="width: 10%">Artist</th>
                                <th scope="col" style="width: 10%">Change %</th>
                                <!--<th scope="col" style="width: 10%">Stock Price</th>-->
                                <!--<th scope="col" style="width: 10%">Market Value</th>-->
                                <th scope="col" style="width: 10%"> Dividends</th>
                                <th scope="col" style="width: 10%"> Action</th>
                                <!--<th scope="col">Trade</th>-->
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center"><span class="font-size-14">1.</span></td>
                                <td  style="width: 10%">
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Bobby K.9.">
                                            <img src="{{ asset('assets/images/valyoux/bobby_k9_valyou_x_music250@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td  style="width: 10%">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Bobby K.9</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$789.25</p>
                                </td>
                                <td  style="width: 10%" class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td  style="width: 10%">$789.25</td>
                                <td  style="width: 10%">$2,076,567</td>
                                <td  style="width: 10%" >$789.25</td>
                                <!--<td  style="width: 10%">-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">2.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Drake">
                                            <img src="{{ asset('assets/images/valyoux/drake-valyou_x_music@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Drake</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$312.24</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/pink_arrow_circle_down.svg') }}" alt=""></a><span class="status-danger">1000%</span></td>
                                <td>$312.24</td>
                                <td>$1,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">3.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Beyonce">
                                            <img src="{{ asset('assets/images/valyoux/beyonce250@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Beyonce</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$23.34</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$23.34</td>
                                <td>$3,076,234</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>

                            <tr>
                                <td class="text-center"><span class="font-size-14">4.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Kanye West">
                                            <img src="{{ asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Kanye West</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$55.11</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$55.11</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">5.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Nicky Minaj">
                                            <img src="{{ asset('assets/images/valyoux/nicky_minaj_valyou_x@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Nicky Minaj</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$57.11</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$57.11</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">6.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Independent artist">
                                            <img src="{{ asset('assets/images/valyoux/pro_artist@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Ariana Grande</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$89.11</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/pink_arrow_circle_down.svg') }}" alt=""></a><span class="status-danger">1000%</span></td>
                                <td>$89.11</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>

                            <tr>
                                 <td class="text-center"><span class="font-size-14">7.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Justin Beiber">
                                            <img src="{{ asset('assets/images/valyoux/justin_beiber_valyou_x_music@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Justin Bieber</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$123.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$123.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">8.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Chris Brown">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Chris Brown</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$23.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$23.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">9.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Taylor Swift">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt=""  width="60" height="60">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Taylor Swift</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$78.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$78.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            
                            <tr>
                                 <td class="text-center"><span class="font-size-14">10.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Ed Sheeran</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$483.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$483.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">11.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Lady Gaga</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$59.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$59.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">12.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Cardi B</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$43.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            
                            <tr>
                                 <td class="text-center"><span class="font-size-14">13.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">O.T. Genasis</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$43.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">14.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">NGblk</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$43.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">15.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Davido</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$43.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            
                            <tr>
                                 <td class="text-center"><span class="font-size-14">16.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Nico</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$43.54</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">17.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Lizzo</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$3.33</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$3.33</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                 <td class="text-center"><span class="font-size-14">18.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">King Ocoro</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$0.66</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                                <td>$0.66</td>
                                <td>$2,076,567</td>
                                <td>$789.25</td>
                                <!--<td>-->
                                <!--    <div class="dropdown">-->
                                <!--        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"-->
                                <!--           aria-expanded="false">-->
                                <!--            <i class="mdi mdi-dots-horizontal font-size-18"></i>-->
                                <!--        </a>-->
                                <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                <!--            <a class="dropdown-item" href="#">Action</a>-->
                                <!--            <a class="dropdown-item" href="#">Another action</a>-->
                                <!--            <a class="dropdown-item" href="#">Something else here</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</td>-->
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="table-responsive table-responsive-m">
                        <table class="table project-list-table table-nowrap table-centered table-borderless">
                            <tbody>
                            <tr >
                                <td class="text-center"><span class="font-size-14">1.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bobby K.9.">
                                            <img src="{{ asset('assets/images/valyoux/bobby_k9_valyou_x_music250@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1" alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero" >
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Bobby K.9</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$789.25</p>
                                </td>
                                <td class="row-btn-margin"><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">$789.25</span></td>
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">2.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Drake">
                                            <img src="{{ asset('assets/images/valyoux/drake-valyou_x_music@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero"> 
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Drake</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p  class="text-muted mb-0 stock-pricing">$312.24</p>
                                </td>
                                <td  class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/pink_arrow_circle_down.svg') }}" alt=""></a><span class="status-danger">$312.24</span></td>
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">3.</span></td>
                                <td >
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Beyonce">
                                            <img src="{{ asset('assets/images/valyoux/beyonce250@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero" >
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Beyonce</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$23.34</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">$23.34</span></td>
                            </tr>

                            <tr>
                                <td class="text-center"><span class="font-size-14">4.</span></td>
                                <td >
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Kanye West">
                                            <img src="{{ asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Kanye West</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$55.11</p>
                                </td>
                                <td class="row-btn-margin"><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                             
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">5.</span></td>
                                <td >
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Nicky Minaj">
                                            <img src="{{ asset('assets/images/valyoux/nicky_minaj_valyou_x@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero" >
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Nicky Minaj</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$57.11</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                             
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">6.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Independent artist">
                                            <img src="{{ asset('assets/images/valyoux/pro_artist@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Ariana Grande</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$89.11</p>
                                </td>
                                <td  class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/pink_arrow_circle_down.svg') }}" alt=""></a><span class="status-danger">1000%</span></td>
                           
                            </tr>

                            <tr>
                                <td class="text-center"><span class="font-size-14">7.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Justin Beiber">
                                            <img src="{{ asset('assets/images/valyoux/justin_beiber_valyou_x_music@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Justin Bieber</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$123.54</p>
                                </td>
                              <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                           
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">8.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Chris Brown">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero" >
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Chris Brown</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$23.54</p>
                                </td>
                                <td  class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                             
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">9.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Taylor Swift">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Taylor Swift</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$78.54</p>
                                </td>
                                <td  class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                           
                            </tr>
                            
                            <tr>
                                <td class="text-center"><span class="font-size-14">10.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero" >
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Ed Sheeran</a></h5>
                                    <p class="text-muted mb-0 music-title">Rapper</p>
                                    <p class="text-muted mb-0 stock-pricing">$483.54</p>
                                </td>
                              <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                             
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">11.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Lady Gaga</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$59.54</p>
                                </td>
                              <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                              
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">12.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Cardi B</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td  class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                              
                            </tr>
                            
                            <tr>
                                <td class="text-center"><span class="font-size-14">13.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">O.T. Genasis</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                               
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">14.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="paddingleftrightzero">
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">NGblk</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                               
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">15.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Davido</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                              
                            </tr>
                            
                            <tr>
                                <td class="text-center"><span class="font-size-14">16.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Nico</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$43.54</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                            
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">17.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">Lizzo</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$3.33</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                            
                            </tr>
                            <tr>
                                <td class="text-center"><span class="font-size-14">18.</span></td>
                                <td>
                                    <div class="team">
                                        <a href="crypto-exchange" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Daniel Canales">
                                            <img src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" class="rounded-circle avatar-xm m-1" width="60" height="60"
                                                 alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="crypto-exchange" class="text-v-medium">King Ocoro</a></h5>
                                    <p class="text-muted mb-0 music-title">Singer</p>
                                    <p class="text-muted mb-0 stock-pricing">$0.66</p>
                                </td>
                                <td class="row-btn-margin" ><a href="crypto-exchange"><img width="20" class="mr-3" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}" alt=""></a><span class="status-success">1000%</span></td>
                              
                            </tr>
                            </tbody>
                        </table>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <!--<div class="col-12">-->
        <!--    <div class="text-center my-3">-->
        <!--        <a href="javascript:void(0);" class="text-success loadbtn" rel="5"><i class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Load more </a>-->
        <!--    </div>-->
        <!--</div>--> <!-- end col-->
    </div>
    <!-- end row -->
 <div id="confirmModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content v-modal">
                <div class="modal-header">
                    <h2 class="modal-title">Confirmation</h2>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <h4 align="center" style="margin: 0;">Are you sure you want to delete this ?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" id="ok_delete" name="ok_delete" class="btn btn-danger">Delete</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')

    <script src="{{ URL::asset('assets/js/pages/projects-list.js') }}"></script>
    
    <script type="text/javascript">
  $(document).ready(function(){
    $('input.primary_artist').on('change', function() {
     $('input.primary_artist').not(this).prop('checked', false);  
    });
      loadMoreData(0,'all');
      loadMoreData(0,0);
      loadMoreData(0,1);
      loadMoreData(0,2);
      loadMoreData(0,3);
      function loadMoreData(page,tabId,value='',type=''){
        
        $.ajax({
          url : "loadmore",
          type: "GET",
          cache:false,
          data:{offset:page,tabId:tabId,search:$('#search_name').val(),myartists:'myArtists',field:value,type:type},
          success:function(data){
            if (data) {
                const data1 = JSON.parse(data);
              if(page){
                 $(".tab_"+tabId).append(data1.web);
                 $(".mtab_"+tabId).append(data1.mobile);
                  $(".ttab_"+tabId).append(data1.tab);
              }else{
                $(".tab_"+tabId).html(data1.web);
                 $(".mtab_"+tabId).append(data1.mobile);
                 $(".ttab_"+tabId).append(data1.tab);
              }
            }
          }
        });
      }
      var delete_id;
            $(document, this).on('click', '.delete', function () {
                delete_id = $(this).attr('id');
                $('#confirmModal').modal('show');
            });
            $(document).on('click', '#ok_delete', function () {
                $.ajax({
                    type: "delete",
                    url: `artist/destroy/${delete_id}`,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: function () {
                        $('#ok_delete').text('Deleting...');
                        $('#ok_delete').attr("disabled", true);
                    },
                    success: function (data) {
                        window.location.reload();
                        $('#ok_delete').text('Delete');
                        $('#ok_delete').attr("disabled", false);
                        $('#confirmModal').modal('hide');
                        js_success(data);
                    }
                })
            });

      $(document).on('click', '.loadbtn', function(){
        $(".loadbtn").html('Loading...');
        $(".pagination-loadmore").hide();
        var pId = $(this).data("id");
        var tab = $(this).data("tab");
        loadMoreData(pId,tab);
      });
      
      $("#search_name").on("keyup", function() {
        var value = $(this).val().toLowerCase();
          loadMoreData(0,'all');
          loadMoreData(0,0);
          loadMoreData(0,1);
          loadMoreData(0,2);
          loadMoreData(0,3);
     });
      
       $(".sorting").on("click", function() {
        
        var value = $(this).attr('value');
         var type = $(this).attr('type');
          if(type == 'DESC'){
              $('.'+value).attr( "type",'ASC' );
          }else{
               $('.'+value).attr( "type",'DESC' );
          }  
          loadMoreData(0,'all',value,type);
          loadMoreData(0,0,value,type);
          loadMoreData(0,1,value,type);
          loadMoreData(0,2,value,type);
          loadMoreData(0,3,value,type);
     });
  });
  function setPrimaryArtist(artist_id,value1){
        value = '';
       
       if(value1.checked){
            value = 1;
        }
    $.ajax({
          url : "setprimaryartist",
          type: "GET",
          cache:false,
          data:{artist_id:artist_id,value:value},
          success:function(data){
            if (data) {
                window.location.reload();
              
            }
          }
        });
  }
</script>

@endsection
