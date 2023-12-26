@extends('layouts.master')

@section('title') @lang('translation.Lightbox') @endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/magnific-popup/magnific-popup.min.css') }}">
@endsection

@section('content')

    @component('common-components.breadcrumb')
        @slot('title') Lightbox @endslot
        @slot('li_1') UI Elements @endslot
        @slot('li_2') Lightbox @endslot
    @endcomponent


    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Single image lightbox</h4>
                    <p class="card-title-desc">Three simple popups with different scaling settings.</p>

                    <div class="row">
                        <div class="col-6">
                            <div>
                                <h5 class="mt-0 font-size-14">Fits (Horz/Vert)</h5>
                                <a class="image-popup-vertical-fit" href="assets/images/small/img-2.jpg"
                                    title="Caption. Can be aligned it to any side and contain any HTML.">
                                    <img class="img-fluid" alt="" src="assets/images/small/img-2.jpg" width="145">
                                </a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div>
                                <h5 class="mt-0 font-size-14">Effects</h5>
                                <a class="image-popup-no-margins" href="assets/images/small/img-3.jpg">
                                    <img class="img-fluid" alt="" src="assets/images/small/img-3.jpg" width="75">
                                </a>
                                <p class="mt-2 mb-0 text-muted">No gaps, zoom animation, close icon in top-right corner.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Lightbox gallery</h4>
                    <p class="card-title-desc">In this example lazy-loading of images is enabled for the next image based on
                        move direction. </p>

                    <div class="popup-gallery">
                        <a class="float-left" href="assets/images/small/img-1.jpg" title="Project 1">
                            <div class="img-fluid">
                                <img src="assets/images/small/img-1.jpg" alt="" width="120">
                            </div>
                        </a>
                        <a class="float-left" href="assets/images/small/img-2.jpg" title="Project 2">
                            <div class="img-fluid">
                                <img src="assets/images/small/img-2.jpg" alt="" width="120">
                            </div>
                        </a>
                        <a class="float-left" href="assets/images/small/img-3.jpg" title="Project 3">
                            <div class="img-fluid">
                                <img src="assets/images/small/img-3.jpg" alt="" width="120">
                            </div>
                        </a>
                        <a class="float-left" href="assets/images/small/img-4.jpg" title="Project 4">
                            <div class="img-fluid">
                                <img src="assets/images/small/img-4.jpg" alt="" width="120">
                            </div>
                        </a>
                        <a class="float-left" href="assets/images/small/img-5.jpg" title="Project 5">
                            <div class="img-fluid">
                                <img src="assets/images/small/img-5.jpg" alt="" width="120">
                            </div>
                        </a>
                        <a class="float-left" href="assets/images/small/img-6.jpg" title="Project 6">
                            <div class="img-fluid">
                                <img src="assets/images/small/img-6.jpg" alt="" width="120">
                            </div>
                        </a>

                    </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Zoom Gallery</h4>
                    <p class="card-title-desc">Zoom effect works only with images.</p>

                    <div class="zoom-gallery">
                        <a class="float-left" href="assets/images/small/img-3.jpg" title="Project 1"><img
                                src="assets/images/small/img-3.jpg" alt="" width="275"></a>
                        <a class="float-left" href="assets/images/small/img-7.jpg" title="Project 2"><img
                                src="assets/images/small/img-7.jpg" alt="" width="275"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Popup with video or map</h4>
                    <p class="card-title-desc">In this example lazy-loading of images is enabled for the next image based on
                        move direction. </p>

                    <div class="row">
                        <div class="col-12">
                            <div class="button-items">
                                <a class="popup-youtube btn btn-secondary mo-mb-2"
                                    href="https://www.youtube.com/watch?v=0O2aH4XLbto">Open YouTube Video</a>
                                <a class="popup-vimeo btn btn-secondary mo-mb-2" href="https://vimeo.com/45830194">Open
                                    Vimeo Video</a>
                                <a class="popup-gmaps btn btn-secondary mo-mb-2"
                                    href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom">Open
                                    Google Map</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Popup with form</h4>
                    <div>
                        <a class="popup-form btn btn-primary" href="#test-form">Popup form</a>
                    </div>

                    <div class="card mfp-hide mfp-popup-form mx-auto" id="test-form">
                        <div class="card-body">
                            <h4 class="mt-0 mb-4">Form</h4>
                            <form>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" placeholder="Enter Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="text" class="form-control" id="password"
                                                placeholder="Enter Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <textarea class="form-control" id="subject" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection

@section('script')

    <!-- Magnific Popup -->
    <script src="{{ URL::asset('assets/libs/magnific-popup/magnific-popup.min.js') }}"></script>

    <!-- Lightbox init js -->
    <script src="{{ URL::asset('assets/js/pages/lightbox.init.js') }}"></script>

@endsection
