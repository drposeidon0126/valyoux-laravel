
@section('pageCSS')
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/pages/my-videos.css') }}">
@endsection


@extends('layouts.master')

@section('title') Market @endsection

@section('content')
  
    {{--@component('common-components.breadcrumb')
        @slot('title') Market @endslot
        @slot('li_1') Music Artist Stock @endslot
        @slot('li_2') Market @endslot
    @endcomponent--}}
    <div class="scrolling"> Exchange Rates
        <span class="pink">:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg') }}" width="20" height="20" alt=""> &nbsp;&nbsp;&nbsp;&nbsp; 1 Ethereum &nbsp;=&nbsp;
        <p id="E1">0.02776 BTC</p> &nbsp;=&nbsp; $
        <p id="E2">462.82 USD</p> &nbsp;&nbsp;
        <p id="B3" class="text-green"> +0.25% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/bitcoinlogo.svg') }}" width="20" height="20">&nbsp;&nbsp;&nbsp;&nbsp;1 Bitcoin &nbsp;=&nbsp; $
        <p id="B2">16668.06 USD</p> &nbsp;&nbsp;
        <p id="B3" class="text-red"> -0.15% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/vuxlogo.svg') }}" width="20" height="20">&nbsp;&nbsp;&nbsp;&nbsp;1 Valyou X Dollar (VXD) = &nbsp;&nbsp; $
        <p id="B2">1.00 USD</p> &nbsp;&nbsp;
        <p id="B3" class="text-red"> -0.1% </p>
    </div>
    <div class="tab-select">
        <a class="unclicked"> All </a>
        <a class="clicked"> Expression of Interest </a>
        <a class="unclicked"> Upcoming </a>
        <a id="test" class="unclicked"> Independent </a>
        <a class="unclicked"> Major Artists </a>
        <div class="search_bar">
            <input placeholder="Search">
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="">
                <div class="table-responsive">
                    <table class="table project-list-table table-nowrap table-centered table-borderless">

                        <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                <h3 class="text-truncate font-size-20"><a href="crypto-exchange" class="text-dark"><b>1.Dark Fantasy</b></a></h3>
                            </td>
                            <td>
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <video width="320" height="240" controls>
                                                <source src="{{ asset('assets/videos/video.mp4') }}" type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </td>

                            <td>
                                <button type="button" class="btn valyou-o-btn"> Promote</button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                <h3 class="text-truncate font-size-20"><a href="crypto-exchange" class="text-dark"><b>1.Dark Fantasy</b></a></h3>
                            </td>
                            <td>
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <video width="320" height="240" controls>
                                                <source src="{{ asset('assets/videos/video.mp4') }}" type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </td>

                            <td>
                                <button type="button" class="btn valyou-o-btn"> Promote</button>
                            </td>
                        </tr>                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                <h3 class="text-truncate font-size-20"><a href="crypto-exchange" class="text-dark"><b>1.Dark Fantasy</b></a></h3>
                            </td>
                            <td>
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <video width="320" height="240" controls>
                                                <source src="{{ asset('assets/videos/video.mp4') }}" type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </td>

                            <td>
                                <button type="button" class="btn valyou-o-btn"> Promote</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-12">
            <div class="text-center my-3">
                <a href="javascript:void(0);" class="text-success"><i
                        class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Load more </a>
            </div>
        </div> <!-- end col-->
    </div>
    <!-- end row -->

@endsection
