@extends('layouts.master')

@section('title') @lang('translation.Progress_Bars') @endsection

@section('content')


    @component('common-components.breadcrumb')
        @slot('title') Progress Bars @endslot
        @slot('li_1') UI Elements @endslot
        @slot('li_2') Progress Bars @endslot
    @endcomponent


    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Default Examples</h4>
                    <p class="card-title-desc">Progress components are built with two
                        HTML elements, some CSS to set the width, and a few attributes.</p>

                    <div class="">
                        <div class="progress mb-4">
                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mb-4">
                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mb-4">
                            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Backgrounds</h4>
                    <p class="card-title-desc">Use background utility classes to
                        change the appearance of individual progress bars.</p>

                    <div class="">
                        <div class="progress mb-4">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Labels Example</h4>
                    <p class="card-title-desc">Add labels to your progress bars by placing text within the <code
                            class="highlighter-rouge">.progress-bar</code>.</p>

                    <div class="">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100">25%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Multiple bars</h4>
                    <p class="card-title-desc">Include multiple progress bars in a progress component if you need.</p>

                    <div class="">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Height</h4>
                    <p class="card-title-desc">We only set a <code class="highlighter-rouge">height</code> value on the
                        <code class="highlighter-rouge">.progress-bar</code>, so if you change
                        that value the outer <code class="highlighter-rouge">.progress</code>
                        will automatically resize accordingly.</p>

                    <div class="">
                        <div class="progress mb-3" style="height: 3px;">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress" style="height: 20px;">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Animated stripes</h4>
                    <p class="card-title-desc">The striped gradient can also be
                        animated. Add <code class="highlighter-rouge">.progress-bar-animated</code> to <code
                            class="highlighter-rouge">.progress-bar</code> to animate the
                        stripes right to left via CSS3 animations.</p>

                    <div class="">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Striped</h4>
                    <p class="card-title-desc">Add <code class="highlighter-rouge">.progress-bar-striped</code>
                        to any <code class="highlighter-rouge">.progress-bar</code> to apply a
                        stripe via CSS gradient over the progress bar’s background color.</p>

                    <div class="">
                        <div class="progress mb-4">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%"
                                aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mb-4">
                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mb-4">
                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%"
                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mb-4">
                            <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%"
                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title mb-5">Custom progress</h4>

                    <div class="">
                        <div class="custom-progess mb-5">
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 84%" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="avatar-xs progress-icon mt-2 mt-sm-0">
                                <span class="avatar-title rounded-circle border border-danger">
                                    <i class="bx bxl-html5 text-danger font-size-18"></i>
                                </span>
                            </div>
                        </div>

                        <div class="custom-progess mb-5">
                            <div class="progress progress-sm">
                                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="avatar-xs progress-icon mt-2 mt-sm-0">
                                <span class="avatar-title rounded-circle border border-primary">
                                    <i class="bx bxl-css3 text-primary font-size-18"></i>
                                </span>
                            </div>
                        </div>
                        <div class="custom-progess mb-4">
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 62%" aria-valuenow="62"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="avatar-xs progress-icon mt-2 mt-sm-0">
                                <span class="avatar-title rounded-circle border border-info">
                                    <i class="bx bxl-jquery text-info font-size-18"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->

@endsection
