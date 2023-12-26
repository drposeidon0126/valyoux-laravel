@extends('layouts.master')

@section('title') @lang('translation.Buy_Sell') @endsection

@section('content')


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4 text-center">Send Bitcoin to this Address</h4>
                    <div class="d-flex justify-content-center">
                        <img width="200" src="{{ asset('assets/images/valyoux/qr_codes.png') }}" alt="">
                    </div>
                        <hr>
                    <div class="text-center">
                        <p>Wallet Address</p>
                        <div class="d-inline-flex">
                            <p>37VR64...m7m262</p>
                            <a class="ml-2">Copy</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end row -->

@endsection
