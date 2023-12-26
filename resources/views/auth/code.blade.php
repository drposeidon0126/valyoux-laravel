@extends('layouts.master-without-nav')

@section('title')
    Verification Code
@endsection

@section('body')

    <body>
    @endsection
    @section('content')
        <div class="home-btn d-none d-sm-block">
            <a href="{{ url('index') }}" class="text-dark"><i class="fas fa-home h2"></i></a>
        </div>
        <div class="account-pages mt-20">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-soft-primary">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="assets/images/valyou_x_black_logo.svg" alt="" class="img-fluid logo-img">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="text-left mt-20 text-center">
                                    <h4 class="text-primary">Email Verification Code!</h4>
                                    <p class="p-gray p-justify-center">We have sent a verification code to your registered email address. Please follow the instructions and input that verification code here to confirm & continue.</p>
                                </div>

                                <div class="p-2">
                                    <form method="POST" class="form-horizontal" action="{{ route('verify.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group text-center">
                                            <input type="number" name="two_factor_code" maxlength="6" required autofocus placeholder="Two Factor Code">
                                            @if($errors->has("two_factor_code"))
                                            <div>
                                                <span class="text-danger" role="alert">{{ $errors->first('two_factor_code') }}</span>
                                            </div>
                                            @endif
                                        </div>
                                        <div class="mt-4">
                                            <button class="btn-block waves-effect waves-light btn-right" type="submit"><img width="120" src="{{ asset('assets/images/next-btn.svg') }}" alt="">
                                            </button>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <a href="{{ route('verify.resend') }}" class="button btn-resend"> Resend Code </a>
                                        </div>

                                    </form>

                                </div>
                            </div>

                        </div>

                        <div class="mt-5 text-center">
                            <script>
                                document.write(new Date().getFullYear())

                            </script>
                            Valyou X <i class="mdi mdi-heart text-danger"></i> Powered by Blockchain Technology
                            </p>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    @endsection
    @section('script')
        <script src='https://www.google.com/recaptcha/api.js'></script>
@endsection
