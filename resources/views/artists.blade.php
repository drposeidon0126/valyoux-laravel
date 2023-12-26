@extends('layouts.master')

@section('title') @lang('translation.Vector_Maps') @endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/jquery-vectormap/jquery-vectormap.min.css') }}">
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('title') Artist Maps @endslot
        @slot('li_1') Search Radar @endslot
        @slot('li_2') Artist Maps @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Search for Artist</h4>
                    <p class="card-title-dsec">List of Artists.</p>
                    <div id="world-map-markers" style="height: 420px"></div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row-->

    <!-- <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">USA Vector Map</h4>
                    <p class="card-title-dsec">Example of united states of ameria vector maps.</p>
                    <div id="usa-vectormap" style="height: 350px"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">India Vector Map</h4>
                    <p class="card-title-dsec">Example of india vector maps.</p>
                    <div id="india-vectormap" style="height: 350px"></div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- end row-->

    <!--<div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Australia Vector Map</h4>
                    <p class="card-title-dsec">Example of australia vector maps.</p>
                    <div id="australia-vectormap" style="height: 350px"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Chicago Vector Map</h4>
                    <p class="card-title-dsec">Example chicago of vector maps.</p>
                    <div id="chicago-vectormap" style="height: 350px"></div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- end row-->

    <!--<div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">UK Vector Map</h4>
                    <p class="card-title-dsec">Example of united kingdom vector maps.</p>
                    <div id="uk-vectormap" style="height: 350px"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Canada Vector Map</h4>
                    <p class="card-title-dsec">Example canada of vector maps.</p>
                    <div id="canada-vectormap" style="height: 350px"></div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- end row-->

@endsection

@section('script')

    <!-- Plugins js -->
    <script src="{{ URL::asset('assets/libs/jquery-vectormap/jquery-vectormap.min.js') }}"></script>

    <!-- Init js-->
    <script src="{{ URL::asset('assets/js/pages/vector-maps.init.js') }}"></script>

@endsection
