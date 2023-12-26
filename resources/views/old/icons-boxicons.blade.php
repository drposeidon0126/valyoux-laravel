@extends('layouts.master')

@section('title') @lang('translation.Boxicons') @endsection

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
@endsection


@section('content')

    @component('common-components.breadcrumb')
        @slot('title') Boxicons @endslot
        @slot('li_1') Icons @endslot
        @slot('li_2') Boxicons @endslot
    @endcomponent
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">
                    <h4 class="card-title">Examples</h4>
                    <p class="card-subtitle mb-4">Use class <code>&lt;i class="bx bx-**">&lt;/i></code></p>

                    <h5>Regular</h5>
                    <div class="row icon-demo-content" id="regular">

                    </div>
                    <!-- end row -->

                    <h5 class="mt-5">Solid Icons</h5>
                    <div class="row icon-demo-content" id="solid">
                    </div>

                    <!-- end row -->
                    <h4 class="mt-5">Logos</h4>
                    <div class="row icon-demo-content" id="logos">
                    </div>
                    <!-- end row -->
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection

@section('script')

    <script src="{{ URL::asset('assets/js/pages/boxicons.init.js') }}"></script>
@endsection
