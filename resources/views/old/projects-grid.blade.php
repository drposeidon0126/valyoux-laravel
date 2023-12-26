@extends('layouts.master')

@section('title') @lang('translation.Projects_Grid') @endsection

@section('content')

    @component('common-components.breadcrumb')
        @slot('title') Projects Grid @endslot
        @slot('li_1') Projects @endslot
        @slot('li_2') Projects Grid @endslot
    @endcomponent


    <div class="row">
        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="avatar-md mr-4">
                            <span class="avatar-title rounded-circle bg-light text-danger font-size-16">
                                <img src="assets/images/companies/img-1.png" alt="" height="30">
                            </span>
                        </div>

                        <div class="media-body overflow-hidden">
                            <h5 class="text-truncate font-size-15"><a href="#" class="text-dark">New admin Design</a></h5>
                            <p class="text-muted mb-4">It will be as simple as Occidental</p>
                            <div class="team">
                                <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip"
                                    data-placement="top" title="" data-original-title="Daniel Canales">
                                    <img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs m-1" alt="">
                                </a>

                                <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip"
                                    data-placement="top" title="" data-original-title="Jennifer Walker">
                                    <img src="assets/images/users/avatar-1.jpg" class="rounded-circle avatar-xs m-1" alt="">
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 border-top">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mr-3">
                            <span class="badge badge-primary">Completed</span>
                        </li>
                        <li class="list-inline-item mr-3" data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Due Date">
                            <i class="bx bx-calendar mr-1"></i> 15 Oct, 19
                        </li>
                        <li class="list-inline-item mr-3" data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Comments">
                            <i class="bx bx-comment-dots mr-1"></i> 214
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="avatar-md mr-4">
                            <span class="avatar-title rounded-circle bg-light text-danger font-size-16">
                                <img src="assets/images/companies/img-2.png" alt="" height="30">
                            </span>
                        </div>

                        <div class="media-body overflow-hidden">
                            <h5 class="text-truncate font-size-15"><a href="#" class="text-dark">Brand logo design</a></h5>
                            <p class="text-muted mb-4">To achieve it would be necessary</p>
                            <div class="team">
                                <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip"
                                    data-placement="top" title="" data-original-title="Kenneth Johnson">
                                    <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-xs m-1" alt="">
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 border-top">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mr-3">
                            <span class="badge badge-warning">Pending</span>
                        </li>
                        <li class="list-inline-item mr-3" data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Due Date">
                            <i class="bx bx-calendar mr-1"></i> 22 Oct, 19
                        </li>
                        <li class="list-inline-item mr-3" data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Comments">
                            <i class="bx bx-comment-dots mr-1"></i> 183
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="avatar-md mr-4">
                            <span class="avatar-title rounded-circle bg-light text-danger font-size-16">
                                <img src="assets/images/companies/img-3.png" alt="" height="30">
                            </span>
                        </div>

                        <div class="media-body overflow-hidden">
                            <h5 class="text-truncate font-size-15"><a href="#" class="text-dark">New Landing Design</a></h5>
                            <p class="text-muted mb-4"> For science, music, sport, etc</p>
                            <div class="team">
                                <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip"
                                    data-placement="top" title="" data-original-title="Natalie Salerno">
                                    <img src="assets/images/users/avatar-5.jpg" class="rounded-circle avatar-xs m-1" alt="">
                                </a>
                                <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip"
                                    data-placement="top" title="" data-original-title="Andy Miller">
                                    <div class="avatar-xs m-1">
                                        <span class="avatar-title rounded-circle bg-soft-primary text-primary font-size-16">
                                            A
                                        </span>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip"
                                    data-placement="top" title="" data-original-title="Helen Chaffin">
                                    <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs m-1" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 border-top">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mr-3">
                            <span class="badge badge-danger">Delay</span>
                        </li>
                        <li class="list-inline-item mr-3" data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Due Date">
                            <i class="bx bx-calendar mr-1"></i> 13 Oct, 19
                        </li>
                        <li class="list-inline-item mr-3" data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Comments">
                            <i class="bx bx-comment-dots mr-1"></i> 175
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="avatar-md mr-4">
                            <span class="avatar-title rounded-circle bg-light text-danger font-size-16">
                                <img src="assets/images/companies/img-4.png" alt="" height="30">
                            </span>
                        </div>

                        <div class="media-body overflow-hidden">
                            <h5 class="text-truncate font-size-15"><a href="#" class="text-dark">Redesign - Landing page</a>
                            </h5>
                            <p class="text-muted mb-4">If several languages coalesce</p>
                            <div class="team">
                                <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip"
                                    data-placement="top" title="" data-original-title="Paul Miller">
                                    <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-xs m-1" alt="">
                                </a>

                                <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip"
                                    data-placement="top" title="" data-original-title="David Conyers">
                                    <div class="avatar-xs m-1">
                                        <span class="avatar-title rounded-circle bg-soft-success text-success font-size-16">
                                            D
                                        </span>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 border-top">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mr-3">
                            <span class="badge badge-primary">Completed</span>
                        </li>
                        <li class="list-inline-item mr-3" data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Due Date">
                            <i class="bx bx-calendar mr-1"></i> 14 Oct, 19
                        </li>
                        <li class="list-inline-item mr-3" data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Comments">
                            <i class="bx bx-comment-dots mr-1"></i> 202
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="avatar-md mr-4">
                            <span class="avatar-title rounded-circle bg-light text-danger font-size-16">
                                <img src="assets/images/companies/img-5.png" alt="" height="30">
                            </span>
                        </div>

                        <div class="media-body overflow-hidden">
                            <h5 class="text-truncate font-size-15"><a href="#" class="text-dark">Skote Dashboard UI</a></h5>
                            <p class="text-muted mb-4">Separate existence is a myth</p>
                            <div class="team">
                                <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip"
                                    data-placement="top" title="" data-original-title="Steven Jenkins">
                                    <img src="assets/images/users/avatar-7.jpg" class="rounded-circle avatar-xs m-1" alt="">
                                </a>
                                <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip"
                                    data-placement="top" title="" data-original-title="Ruby Clinton">
                                    <img src="assets/images/users/avatar-8.jpg" class="rounded-circle avatar-xs m-1" alt="">
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 border-top">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mr-3">
                            <span class="badge badge-primary">Completed</span>
                        </li>
                        <li class="list-inline-item mr-3" data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Due Date">
                            <i class="bx bx-calendar mr-1"></i> 13 Oct, 19
                        </li>
                        <li class="list-inline-item mr-3" data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Comments">
                            <i class="bx bx-comment-dots mr-1"></i> 194
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="avatar-md mr-4">
                            <span class="avatar-title rounded-circle bg-light text-danger font-size-16">
                                <img src="assets/images/companies/img-6.png" alt="" height="30">
                            </span>
                        </div>

                        <div class="media-body overflow-hidden">
                            <h5 class="text-truncate font-size-15"><a href="#" class="text-dark">Blog Template UI</a></h5>
                            <p class="text-muted mb-4"> For science, music, sport, etc</p>
                            <div class="team">
                                <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip"
                                    data-placement="top" title="" data-original-title="Ken Dorsey">
                                    <div class="avatar-xs m-1">
                                        <span class="avatar-title rounded-circle bg-soft-danger text-danger font-size-16">
                                            K
                                        </span>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 border-top">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mr-3">
                            <span class="badge badge-warning">pending</span>
                        </li>
                        <li class="list-inline-item mr-3" data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Due Date">
                            <i class="bx bx-calendar mr-1"></i> 24 Oct, 19
                        </li>
                        <li class="list-inline-item mr-3" data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Comments">
                            <i class="bx bx-comment-dots mr-1"></i> 122
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="avatar-md mr-4">
                            <span class="avatar-title rounded-circle bg-light text-danger font-size-16">
                                <img src="assets/images/companies/img-3.png" alt="" height="30">
                            </span>
                        </div>

                        <div class="media-body overflow-hidden">
                            <h5 class="text-truncate font-size-15"><a href="#" class="text-dark">Multipurpose Landing</a>
                            </h5>
                            <p class="text-muted mb-4">It will be as simple as Occidental</p>
                            <div class="team">
                                <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip"
                                    data-placement="top" title="" data-original-title="Daniel Canales">
                                    <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-xs m-1" alt="">
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 border-top">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mr-3">
                            <span class="badge badge-danger">Delay</span>
                        </li>
                        <li class="list-inline-item mr-3" data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Due Date">
                            <i class="bx bx-calendar mr-1"></i> 15 Oct, 19
                        </li>
                        <li class="list-inline-item mr-3" data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Comments">
                            <i class="bx bx-comment-dots mr-1"></i> 214
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="avatar-md mr-4">
                            <span class="avatar-title rounded-circle bg-light text-danger font-size-16">
                                <img src="assets/images/companies/img-4.png" alt="" height="30">
                            </span>
                        </div>

                        <div class="media-body overflow-hidden">
                            <h5 class="text-truncate font-size-15"><a href="#" class="text-dark">App Landing UI</a></h5>
                            <p class="text-muted mb-4">To achieve it would be necessary</p>
                            <div class="team">
                                <div class="team">
                                    <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Derek Mathes">
                                        <div class="avatar-xs m-1">
                                            <span
                                                class="avatar-title rounded-circle bg-soft-primary text-primary font-size-16">
                                                D
                                            </span>
                                        </div>
                                    </a>
                                    <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Harold Mendez">
                                        <div class="avatar-xs m-1">
                                            <span
                                                class="avatar-title rounded-circle bg-soft-primary text-primary font-size-16">
                                                H
                                            </span>
                                        </div>
                                    </a>

                                    <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Patricia Harrison">
                                        <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs m-1"
                                            alt="">
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 border-top">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mr-3">
                            <span class="badge badge-primary">Completed</span>
                        </li>
                        <li class="list-inline-item mr-3" data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Due Date">
                            <i class="bx bx-calendar mr-1"></i> 11 Oct, 19
                        </li>
                        <li class="list-inline-item mr-3" data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Comments">
                            <i class="bx bx-comment-dots mr-1"></i> 185
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="avatar-md mr-4">
                            <span class="avatar-title rounded-circle bg-light text-danger font-size-16">
                                <img src="assets/images/companies/img-2.png" alt="" height="30">
                            </span>
                        </div>

                        <div class="media-body overflow-hidden">
                            <h5 class="text-truncate font-size-15"><a href="#" class="text-dark">New admin Design</a></h5>
                            <p class="text-muted mb-4"> Their most common words.</p>
                            <div class="team">
                                <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip"
                                    data-placement="top" title="" data-original-title="Natalie Salerno">
                                    <img src="assets/images/users/avatar-5.jpg" class="rounded-circle avatar-xs m-1" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 border-top">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mr-3">
                            <span class="badge badge-primary">Completed</span>
                        </li>
                        <li class="list-inline-item mr-3" data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Due Date">
                            <i class="bx bx-calendar mr-1"></i> 12 Oct, 19
                        </li>
                        <li class="list-inline-item mr-3" data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Comments">
                            <i class="bx bx-comment-dots mr-1"></i> 106
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-12">
            <ul class="pagination pagination-rounded justify-content-center mt-2 mb-5">
                <li class="page-item disabled">
                    <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">1</a>
                </li>
                <li class="page-item active">
                    <a href="#" class="page-link">2</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">3</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">4</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">5</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- end row -->

@endsection
