@extends('layouts.master-without-nav')

@section('title')
    @lang('translation.Login')
@endsection

@section('body')

    <body>
    @endsection

    @section('content')
        <div class="row logo-div">
            <div class="col-md-5 col-lg-3">
                <a href="{{url('/')}}"> <img src="{{asset('assets/images/valyou_x_black_logo.svg')}}" alt="" class="img-fluid logo-img"></a>
            </div>
        </div>
        <div class="flex h-min80">
            <div class="container m-auto w-min80">
                <div class="row mx-auto">
                    <div class="col-md-6 col-sm-12 col-xs-12 flex">
                        <div class="pl-3 m-auto">
                            <p class="font-weight-bold intro-text">Welcome to <span class="financial_stk">Valyou X</span></p>
                            <p class="lead font-weight-bold text-darkred" >Be the first to know when we launch!</p>
                            <div class="lead ms_desc">If you’re interested in participating as an early adopter, you can fill out the survey and apply to get exclusive access. We have over 50,000+ in our email list would you like to skip the queue?</div>
                            <br>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 ">
                        <div class="p-4">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                <p class="lead font-weight-bold">Sign in to continue to Valyou X</p>
                                @csrf
                                <div class="form-group spycust">
                                    <input name="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}" placeholder="E-mail" id="email" autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group spycust">
                                    <input type="password" name="password"
                                            class="form-control  @error('password') is-invalid @enderror"
                                            id="userpassword" placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <p class="text-center font-weight-bold">Forget your password ? <a href="password/reset" class="text-primary">Reset Here</a></p>
                                <button type="submit" width="100%" class="btn btn-primary w-full b-shadow font-weight-bold mt-2 mb-5">LOGIN</button>
                            </form>
                            <p class="lead text-center font-weight-bold">Don't have an account ?<a href="{{ url('register') }}"
                                class="font-weight-bold text-primary"> Signup now </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
@endsection
