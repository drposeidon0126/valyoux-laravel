@extends('layouts.master-without-nav')

@section('title')
Reset pw
@endsection

@section('body')
<body>
@endsection

@section('content')
    <div class="home-btn d-none d-sm-block">
        <a href="{{url('index')}}" class="text-dark"><i class="fas fa-home h2"></i></a>
    </div>
    <div class="account-pages mt-20">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-soft-primary">
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{ asset('assets/images/valyou_x_black_logo.svg') }}" alt="" class="img-fluid logo-img">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="text-center mt-20">
                                <h5 class="text-primary">Reset Password</h5>
                            </div>
                            <div class="p-2">
                            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                                @csrf
                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" @if(old('email')) value="{{ old('email') }}" @endif  id="email" placeholder="E-mail" autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-12 text-right">
                                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Reset</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>

                    <div class="mt-5 text-center">
                        <p>Remember It ? <a href="{{url('login')}}" class="font-weight-medium text-primary"> Sign In here</a> </p>
                        <p>© <script>document.write(new Date().getFullYear())</script> Valyou X <i class="mdi mdi-heart text-danger"></i> Powered by Blockchain Technology</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
