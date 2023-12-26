@extends('layouts.master-without-nav')

@section('title')
    @lang('translation.Edit_Details')
@endsection

@section('body')
<?php
use App\Models\Country;
$country=Country::all();
?>
    <body>
    @endsection

    @section('content')
    <style>
        .btn-primary:focus, .btn-primary.focus {
            color: #fff;
            background-color: #0CCC9E;
            border-color: #0CCC9E;
            box-shadow: none;
        }
        .avatar-edit{
            position: relative;
        }
        .avatar-edit input{
            position: absolute;
            height: 0;
            width: 0;
            padding: 0;
            margin: 0;
        }
    </style>

        <div class="home-btn d-none d-sm-block">
            <a href="{{ url('index') }}" class="text-dark"><i class="fas fa-home h2"></i></a>
        </div>
        <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <!--<div class="bg-soft-primary">-->
                            <!--    <div class="row">-->
                            <!--        <div class="col-7">-->
                            <!--            <div class="text-primary p-4">-->
                            <!--                <h5 class="text-primary">Edit Details</h5>-->
                            <!--                <p>Get your free Skote account now.</p>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--        <div class="col-5 align-self-end">-->
                            <!--            <img src="assets/images/profile-img.png" alt="" class="img-fluid">-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <div class="card-body pt-0">
                                <!--<div>-->
                                <!--    <a href="{{ url('index') }}">-->
                                <!--        <div class="avatar-md profile-user-wid mb-4">-->
                                <!--            <span class="avatar-title rounded-circle bg-light">-->
                                <!--                <img src="assets/images/logo.svg" alt="" class="rounded-circle" height="34">-->
                                <!--            </span>-->
                                <!--        </div>-->
                                <!--    </a>-->
                                <!--</div>-->
                                <div class="p-2">
                                    <form method="POST" class="form-horizontal mt-4" action="contacts-profile"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('post')

                                        @if (session('error') !== null)
                                            <div class="alert alert-danger">
                                                <strong>{{ session('error') ?? '' }}</strong>
                                            </div>
                                        @endif
                                        
                                        <div class="form-group avatar-edit text-center">
                                            <label for="avatar">
                                                <img src="{{ asset(Auth::user()->avatar) }}" alt="" class="img-thumbnail rounded-circle" style="width:70px; height=70px"><br>
                                                <span>Change Profile Picture</span>
                                            </label>
                                            <input type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" id="avatar">
                                            @error('avatar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="useremail">Email</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                value="{{ Auth::user()->email }}" id="useremail" name="email" required
                                                placeholder="Enter email" disabled>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="username">First Name</label>
                                            <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                                                value="{{ Auth::user()->first_name }}" required name="first_name" id="first_name"
                                                placeholder="Enter firstname">
                                            @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="last_name">Last Name</label>
                                            <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                                                value="{{ Auth::user()->last_name }}" required name="last_name" id="last_name"
                                                placeholder="Enter last name">
                                            @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="phone_number">Phone Number</label>
                                            <input type="text" class="form-control @error('phone_number') is-invalid @enderror"
                                                value="{{ Auth::user()->phone_number }}" required name="phone_number" id="phone_number"
                                                placeholder="Enter phone number">
                                            @error('phone_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        
                                        {{--<div class="form-group">
                                            <label for="userpassword">Password</label>
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="{{ Auth::user()->password }}" required id="userpassword"
                                                placeholder="Enter password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="userpassword">Confirm Password</label>
                                            <input id="password-confirm" type="password" name="password_confirmation"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required placeholder="Enter password">
                                        </div> --}}

                                        <div class="form-group">
                                            <label for="userdob">Date of Birth</label>
                                            <input type="date" max="17-07-2020"
                                                class="form-control @error('dob') is-invalid @enderror" name="dob"
                                                value="{{ Auth::user()->dob }}" required id="datepicker"
                                                placeholder="Enter Birthdate">
                                            @error('dob')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-file">
                                                <label for="userdob">Country</label>
                                                <select class="form-control" name="country">
                                                    <option value="">Select country</option>
                                                    @foreach($country as $row)
                                                        <option value="{{ $row->cnt_code }}" <?= (Auth::user()->country == $row->cnt_code)?'selected':''?>>{{ $row->cnt_name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('avatar')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-primary btn-block waves-effect waves-light"
                                                type="submit">Update</button>
                                        </div>

                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
