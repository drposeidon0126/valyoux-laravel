@extends('layouts.master')

@section('title') @lang('translation.Video') @endsection

@section('content')

    @component('common-components.breadcrumb')
        @slot('title') Video @endslot
        @slot('li_1') UI Elements @endslot
        @slot('li_2') Video @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Responsive embed video 16:9</h4>
                    <p class="card-title-desc">Aspect ratios can be customized with modifier classes.</p>

                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1y_kfWUCFDQ"></iframe>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Responsive embed video 21:9</h4>
                    <p class="card-title-desc">Aspect ratios can be customized with modifier classes.</p>

                    <!-- 21:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1y_kfWUCFDQ"></iframe>
                    </div>

                </div>
            </div>
        </div> <!-- end col -->

    </div> <!-- end row -->

    <div class="row">

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Responsive embed video 4:3</h4>
                    <p class="card-title-desc">Aspect ratios can be customized with modifier classes.</p>

                    <!-- 4:3 aspect ratio -->
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1y_kfWUCFDQ"></iframe>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Responsive embed video 1:1</h4>
                    <p class="card-title-desc">Aspect ratios can be customized with modifier classes.</p>

                    <!-- 1:1 aspect ratio -->
                    <div class="embed-responsive embed-responsive-1by1">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1y_kfWUCFDQ"></iframe>
                    </div>

                </div>
            </div>
        </div> <!-- end col -->

    </div> <!-- end row -->

@endsection
