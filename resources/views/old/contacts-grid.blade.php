@extends('layouts.master')

@section('title') @lang('translation.User_Grid') @endsection

@section('title')
    <link rel="stylesheet" type="text/css" href="assets/libs/tui-chart/tui-chart.min.css">
@endsection

@section('content')

    @component('common-components.breadcrumb')
        @slot('title') Users @endslot
        @slot('li_1') Contacts @endslot
        @slot('li_2') Users Grid @endslot
    @endcomponent


    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card text-center">
                <div class="card-body">
                    <div class="avatar-sm mx-auto mb-4">
                        <span class="avatar-title rounded-circle bg-soft-primary text-primary font-size-16">
                            D
                        </span>
                    </div>
                    <h5 class="font-size-15"><a href="#" class="text-dark">David McHenry</a></h5>
                    <p class="text-muted">UI/UX Designer</p>

                    <div>
                        <a href="#" class="badge badge-primary font-size-11 m-1">Photoshop</a>
                        <a href="#" class="badge badge-primary font-size-11 m-1">illustrator</a>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-top">
                    <div class="contact-links d-flex font-size-20">
                        <div class="flex-fill">
                            <a href="" data-toggle="tooltip" data-placement="top" title="Message"><i
                                    class="bx bx-message-square-dots"></i></a>
                        </div>
                        <div class="flex-fill">
                            <a href="" data-toggle="tooltip" data-placement="top" title="Projects"><i
                                    class="bx bx-pie-chart-alt"></i></a>
                        </div>
                        <div class="flex-fill">
                            <a href="" data-toggle="tooltip" data-placement="top" title="Profile"><i
                                    class="bx bx-user-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card text-center">
                <div class="card-body">
                    <div class="mb-4">
                        <img class="rounded-circle avatar-sm" src="assets/images/users/avatar-2.jpg" alt="">
                    </div>
                    <h5 class="font-size-15"><a href="#" class="text-dark">Frank Kirk</a></h5>
                    <p class="text-muted">Frontend Developer</p>

                    <div>
                        <a href="#" class="badge badge-primary font-size-11 m-1">Html</a>
                        <a href="#" class="badge badge-primary font-size-11 m-1">Css</a>
                        <a href="#" class="badge badge-primary font-size-11 m-1">2 + more</a>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-top">
                    <div class="d-flex font-size-20 contact-links">
                        <div class="flex-fill">
                            <a href="" data-toggle="tooltip" data-placement="top" title="Message"><i
                                    class="bx bx-message-square-dots"></i></a>
                        </div>
                        <div class="flex-fill">
                            <a href="" data-toggle="tooltip" data-placement="top" title="Projects"><i
                                    class="bx bx-pie-chart-alt"></i></a>
                        </div>
                        <div class="flex-fill">
                            <a href="" data-toggle="tooltip" data-placement="top" title="Profile"><i
                                    class="bx bx-user-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card text-center">
                <div class="card-body">
                    <div class="mb-4">
                        <img class="rounded-circle avatar-sm" src="assets/images/users/avatar-3.jpg" alt="">
                    </div>
                    <h5 class="font-size-15"><a href="#" class="text-dark">Rafael Morales</a></h5>
                    <p class="text-muted">Backend Developer</p>

                    <div>
                        <a href="#" class="badge badge-primary font-size-11 m-1">Php</a>
                        <a href="#" class="badge badge-primary font-size-11 m-1">Java</a>
                        <a href="#" class="badge badge-primary font-size-11 m-1">Python</a>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-top">
                    <div class="d-flex font-size-20 contact-links">
                        <div class="flex-fill">
                            <a href="" data-toggle="tooltip" data-placement="top" title="Message"><i
                                    class="bx bx-message-square-dots"></i></a>
                        </div>
                        <div class="flex-fill">
                            <a href="" data-toggle="tooltip" data-placement="top" title="Projects"><i
                                    class="bx bx-pie-chart-alt"></i></a>
                        </div>
                        <div class="flex-fill">
                            <a href="" data-toggle="tooltip" data-placement="top" title="Profile"><i
                                    class="bx bx-user-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card text-center">
                <div class="card-body">
                    <div class="avatar-sm mx-auto mb-4">
                        <span class="avatar-title rounded-circle bg-soft-success text-success font-size-16">
                            M
                        </span>
                    </div>
                    <h5 class="font-size-15"><a href="#" class="text-dark">Mark Ellison</a></h5>
                    <p class="text-muted">Full Stack Developer</p>

                    <div>
                        <a href="#" class="badge badge-primary font-size-11 m-1">Ruby</a>
                        <a href="#" class="badge badge-primary font-size-11 m-1">Php</a>
                        <a href="#" class="badge badge-primary font-size-11 m-1">2 + more</a>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-top">
                    <div class="d-flex font-size-20 contact-links">
                        <div class="flex-fill">
                            <a href="" data-toggle="tooltip" data-placement="top" title="Message"><i
                                    class="bx bx-message-square-dots"></i></a>
                        </div>
                        <div class="flex-fill">
                            <a href="" data-toggle="tooltip" data-placement="top" title="Projects"><i
                                    class="bx bx-pie-chart-alt"></i></a>
                        </div>
                        <div class="flex-fill">
                            <a href="" data-toggle="tooltip" data-placement="top" title="Profile"><i
                                    class="bx bx-user-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card text-center">
                <div class="card-body">
                    <div class="mb-4">
                        <img class="rounded-circle avatar-sm" src="assets/images/users/avatar-4.jpg" alt="">
                    </div>
                    <h5 class="font-size-15"><a href="#" class="text-dark">Minnie Walter</a></h5>
                    <p class="text-muted">Frontend Developer</p>

                    <div>
                        <a href="#" class="badge badge-primary font-size-11 m-1">Html</a>
                        <a href="#" class="badge badge-primary font-size-11 m-1">Css</a>
                        <a href="#" class="badge badge-primary font-size-11 m-1">2 + more</a>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-top">
                    <div class="contact-links d-flex font-size-20">
                        <div class="flex-fill">
                            <a href="" data-toggle="tooltip" data-placement="top" title="Message"><i
                                    class="bx bx-message-square-dots"></i></a>
                        </div>
                        <div class="flex-fill">
                            <a href="" data-toggle="tooltip" data-placement="top" title="Projects"><i
                                    class="bx bx-pie-chart-alt"></i></a>
                        </div>
                        <div class="flex-fill">
                            <a href="" data-toggle="tooltip" data-placement="top" title="Profile"><i
                                    class="bx bx-user-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card text-center">
                <div class="card-body">
                    <div class="mb-4">
                        <img class="rounded-circle avatar-sm" src="assets/images/users/avatar-5.jpg" alt="">
                    </div>
                    <h5 class="font-size-15"><a href="#" class="text-dark">Shirley Smith</a></h5>
                    <p class="text-muted">UI/UX Designer</p>

                    <div>
                        <a href="#" class="badge badge-primary font-size-11 m-1">Photoshop</a>
                        <a href="#" class="badge badge-primary font-size-11 m-1">illustrator</a>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-top">
                    <div class="d-flex font-size-20 contact-links">
                        <div class="flex-fill">
                            <a href="" data-toggle="tooltip" data-placement="top" title="Message"><i
                                    class="bx bx-message-square-dots"></i></a>
                        </div>
                        <div class="flex-fill">
                            <a href="" data-toggle="tooltip" data-placement="top" title="Projects"><i
                                    class="bx bx-pie-chart-alt"></i></a>
                        </div>
                        <div class="flex-fill">
                            <a href="" data-toggle="tooltip" data-placement="top" title="Profile"><i
                                    class="bx bx-user-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card text-center">
                <div class="card-body">
                    <div class="avatar-sm mx-auto mb-4">
                        <span class="avatar-title rounded-circle bg-soft-info text-info font-size-16">
                            J
                        </span>
                    </div>
                    <h5 class="font-size-15"><a href="#" class="text-dark">John Santiago</a></h5>
                    <p class="text-muted">Full Stack Developer</p>

                    <div>
                        <a href="#" class="badge badge-primary font-size-11 m-1">Ruby</a>
                        <a href="#" class="badge badge-primary font-size-11 m-1">Php</a>
                        <a href="#" class="badge badge-primary font-size-11 m-1">2 + more</a>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-top">
                    <div class="d-flex font-size-20 contact-links">
                        <div class="flex-fill">
                            <a href="" data-toggle="tooltip" data-placement="top" title="Message"><i
                                    class="bx bx-message-square-dots"></i></a>
                        </div>
                        <div class="flex-fill">
                            <a href="" data-toggle="tooltip" data-placement="top" title="Projects"><i
                                    class="bx bx-pie-chart-alt"></i></a>
                        </div>
                        <div class="flex-fill">
                            <a href="" data-toggle="tooltip" data-placement="top" title="Profile"><i
                                    class="bx bx-user-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card text-center">
                <div class="card-body">
                    <div class="mb-4">
                        <img class="rounded-circle avatar-sm" src="assets/images/users/avatar-7.jpg" alt="">
                    </div>
                    <h5 class="font-size-15"><a href="#" class="text-dark">Colin Melton</a></h5>
                    <p class="text-muted">Backend Developer</p>

                    <div>
                        <a href="#" class="badge badge-primary font-size-11 m-1">Php</a>
                        <a href="#" class="badge badge-primary font-size-11 m-1">Java</a>
                        <a href="#" class="badge badge-primary font-size-11 m-1">Python</a>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-top">
                    <div class="d-flex font-size-20 contact-links">
                        <div class="flex-fill">
                            <a href="" data-toggle="tooltip" data-placement="top" title="Message"><i
                                    class="bx bx-message-square-dots"></i></a>
                        </div>
                        <div class="flex-fill">
                            <a href="" data-toggle="tooltip" data-placement="top" title="Projects"><i
                                    class="bx bx-pie-chart-alt"></i></a>
                        </div>
                        <div class="flex-fill">
                            <a href="" data-toggle="tooltip" data-placement="top" title="Profile"><i
                                    class="bx bx-user-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-12">
            <div class="text-center my-3">
                <a href="javascript:void(0);" class="text-success"><i class="bx bx-hourglass bx-spin mr-2"></i> Load more
                </a>
            </div>
        </div> <!-- end col-->
    </div>
    <!-- end row -->

@endsection
