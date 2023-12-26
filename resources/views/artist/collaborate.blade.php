@extends('layouts.master')
@section('title') @lang('translation.Profile') @endsection
@section('content')
<?php
use App\Models\country;
?>
    <!-- end page title -->
    
    <style>
     .profile-user-wid{
            position: relative;
        }
        .profile-user-wid img{
            position: absolute;
            top: 10px;
        }
        .flex-new{
            display: flex;
            align-items: center;
        }
        .btn-margin{
            margin-left: 38px;
        }
        .avatar-title{
            border: none
        }
        .bg-pink{
                background-color: #ff0093!important;
        }
        .mini-stats-wid .mini-stat-icon.bg-pink:after, .mini-stats-wid .mini-stat-icon.bg-pink:before{
            display: none !important;
        }
    </style>
  
            @include('layouts.inner-navigation',['artist'=>$artist])
       
    <div class="row">
         @include('layouts.profile-box',['artist'=>$artist])
     </div>
     <div class="page_section">
         <div class="row">
        <div class="col-xl-4">
            <div class="card overflow-hidden">
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="avatar-md profile-user-wid mb-4 mt-2">
                                <img src="{{ isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/avatar-1.jpg') }}"
                                    alt="" class="img-thumbnail rounded-circle">
                            </div>
                            <h5 class="font-size-15 text-truncate">{{ Auth::user()->name }}</h5>
                            <p class="text-muted mb-0 text-truncate">Music Artist</p>
                        </div>

                        <div class="col-sm-8">
                            <div class="pt-4">

                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="font-size-15">125</h5>
                                        <p class="text-muted mb-0">Projects</p>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="font-size-15">$1245</h5>
                                        <p class="text-muted mb-0">Revenue</p>
                                    </div>
                                </div>
                                <div class="mt-4 row">
                                    <div class="col-6">
                                    <a href="{{ url('contacts-profile') }}" class="btn-green waves-effect waves-light btn-sm" style="width: auto;">View Profile <i class="mdi mdi-arrow-right ml-1"></i></a>
                                    </div>
                                    <div class="col-6">
                                    <a href="{{ url('contacts-edit-profile') }}" class="btn-pink waves-effect waves-light btn-sm" style="width: auto;">Edit Profile <i class="mdi mdi-arrow-right ml-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card -->

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Personal Information</h4>

                    <p class="text-muted mb-4">Hi I'm Bobby K.9. rapper who likes to be referred to as a global citizen. Check out all my music and hopefully i impress you enough to pick up some shares in my brand. Let's get it!</p>
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <tbody>
                                <tr>
                                    <th scope="row">Full Name :</th>
                                    <td>{{ Auth::user()->first_name.' '.Auth::user()->last_name }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Mobile :</th>
                                    <td>{{ Auth::user()->phone_number }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">E-mail :</th>
                                    <td>{{ Auth::user()->email }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Location :</th>
                                    <td><?php
                                        /* if(Auth::user()->country){
                                            $country=country::where(['cnt_code'=>Auth::user()->country])->first();
                                            echo $country->cnt_name;
                                        } */
                                    ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Date of Birth :</th>
                                    <td>{{ Auth::user()->dob }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end card -->

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-5">Experience</h4>
                    <div class="">
                        <ul class="verti-timeline list-unstyled">
                            <li class="event-list active">
                                <div class="event-timeline-dot">
                                    <i class="bx bx-right-arrow-circle bx-fade-right"></i>
                                </div>
                                <div class="media">
                                    <div class="mr-3">
                                        <i class="bx bx-server h4 text-primary"></i>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <h5 class="font-size-15"><a href="#" class="text-dark">Songwriter - Started from the bottom</a>
                                            </h5>
                                            <span class="text-primary">2020</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="event-list">
                                <div class="event-timeline-dot">
                                    <i class="bx bx-right-arrow-circle"></i>
                                </div>
                                <div class="media">
                                    <div class="mr-3">
                                        <i class="bx bx-code h4 text-primary"></i>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <h5 class="font-size-15"><a href="#" class="text-dark">Feature - keep me high Glasses Malone</a>
                                            </h5>
                                            <span class="text-primary">2019</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="event-list">
                                <div class="event-timeline-dot">
                                    <i class="bx bx-right-arrow-circle"></i>
                                </div>
                                <div class="media">
                                    <div class="mr-3">
                                        <i class="bx bx-edit h4 text-primary"></i>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <h5 class="font-size-15"><a href="#" class="text-dark">Concert promoter - Hip hop event </a></h5>
                                            <span class="text-primary">2018</span>

                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <!-- end card -->
        </div>

        <div class="col-xl-8">

            <div class="row">
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted font-weight-medium">Completed Projects</p>
                                    <h4 class="mb-0">125</h4>
                                </div>

                                <div class="mini-stat-icon avatar-sm align-self-center rounded-circle bg-pink">
                                    <span class="avatar-title">
                                        <i class="bx bx-check-circle font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted font-weight-medium">Pending Projects</p>
                                    <h4 class="mb-0">12</h4>
                                </div>

                                <div class="avatar-sm align-self-center mini-stat-icon rounded-circle bg-pink">
                                    <span class="avatar-title">
                                        <i class="bx bx-hourglass font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted font-weight-medium">Total Revenue</p>
                                    <h4 class="mb-0">$36,524</h4>
                                </div>

                                <div class="avatar-sm align-self-center mini-stat-icon rounded-circle bg-pink">
                                    <span class="avatar-title">
                                        <i class="bx bx-package font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Revenue</h4>
                    <div id="revenue-chart" class="apex-charts"></div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">My Projects</h4>
                    <div class="table-responsive">
                        <table class="table table-nowrap table-hover mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Projects</th>
                                    <th scope="col">Start Date</th>
                                    <th scope="col">Deadline</th>
                                    <th scope="col">Budget</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Skote admin UI</td>
                                    <td>2 Sep, 2019</td>
                                    <td>20 Oct, 2019</td>
                                    <td>$506</td>
                                </tr>

                                <tr>
                                    <th scope="row">2</th>
                                    <td>Skote admin Logo</td>
                                    <td>1 Sep, 2019</td>
                                    <td>2 Sep, 2019</td>
                                    <td>$94</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Redesign - Landing page</td>
                                    <td>21 Sep, 2019</td>
                                    <td>29 Sep, 2019</td>
                                    <td>$156</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>App Landing UI</td>
                                    <td>29 Sep, 2019</td>
                                    <td>04 Oct, 2019</td>
                                    <td>$122</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Blog Template</td>
                                    <td>05 Oct, 2019</td>
                                    <td>16 Oct, 2019</td>
                                    <td>$164</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Redesign - Multipurpose Landing</td>
                                    <td>17 Oct, 2019</td>
                                    <td>05 Nov, 2019</td>
                                    <td>$192</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Logo Branding</td>
                                    <td>04 Nov, 2019</td>
                                    <td>05 Nov, 2019</td>
                                    <td>$94</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
     </div>
    <!-- end row -->
    <div class="row bs-float-parent">
        @include('layouts.stock-price',['artist'=>$artist])
</div>
@endsection

@section('script')

    <!-- flot plugins -->
    <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/pages/profile.init.js') }}"></script>

@endsection
