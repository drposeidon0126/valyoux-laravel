@extends('layouts.master')

@section('title') @lang('translation.Range_Slider') @endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/ion-rangeslider/ion-rangeslider.min.css') }}">
@endsection

@section('content')

    @component('common-components.breadcrumb')
        @slot('title') Range Slider @endslot
        @slot('li_1') UI Elements @endslot
        @slot('li_2') Range Slider @endslot
    @endcomponent


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">ION Range slider</h4>
                    <p class="card-title-desc">Cool, comfortable, responsive and easily customizable range slider</p>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="p-3">
                                <h5 class="font-size-14 mb-3 mt-0">Default</h5>
                                <input type="text" id="range_01">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="p-3">
                                <h5 class="font-size-14 mb-3 mt-0">Min-Max</h5>
                                <input type="text" id="range_02">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="p-3">
                                <h5 class="font-size-14 mb-3 mt-0">Prefix</h5>
                                <input type="text" id="range_03">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="p-3">
                                <h5 class="font-size-14 mb-3 mt-0">Range</h5>
                                <input type="text" id="range_04">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="p-3">
                                <h5 class="font-size-14 mb-3 mt-0">Step</h5>
                                <input type="text" id="range_05">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="p-3">
                                <h5 class="font-size-14 mb-3 mt-0">Custom Values</h5>
                                <input type="text" id="range_06">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="p-3">
                                <h5 class="font-size-14 mb-3 mt-0">Prettify Numbers</h5>
                                <input type="text" id="range_07">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="p-3">
                                <h5 class="font-size-14 mb-3 mt-0">Disabled</h5>
                                <input type="text" id="range_08">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="p-3">
                                <h5 class="font-size-14 mb-3 mt-0">Extra Example</h5>
                                <input type="text" id="range_09">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="p-3">
                                <h5 class="font-size-14 mb-3 mt-0">Use decorate_both option</h5>
                                <input type="text" id="range_10">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="p-3">
                                <h5 class="font-size-14 mb-3 mt-0">Postfixes</h5>
                                <input type="text" id="range_11">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="p-3">
                                <h5 class="font-size-14 mb-3 mt-0">Hide</h5>
                                <input type="text" id="range_12">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection

@section('script')

    <!-- Ion Range Slider -->
    <script src="{{ URL::asset('assets/libs/ion-rangeslider/ion-rangeslider.min.js') }}"></script>

    <!-- Range slider init js -->
    <script src="{{ URL::asset('assets/js/pages/range-sliders.init.js') }}"></script>

@endsection
