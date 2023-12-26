@extends('layouts.master-without-nav')

@section('title')
    @lang('translation.Login')
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
                            <div class="card-body ac-card-body pt-0">
                                <div class="text-center mt-20">
                                    <h3 class="cb-new-heading">Choose user option </h3>
                                </div>
                                <div class="p-2">
                                    <form class="form-horizontal" method="POST" action="{{ route('account.update',[auth()->user()->id]) }}">
                                        @csrf
                                        @method('PUT')
                                        @foreach($roles as $id => $role)
                                        <div class="radio-wrap">
                                            <input type="radio" id="artist{{$id}}" name="role_id" required value="{{$id}}">
                                            <label for="artist{{$id}}"><span> {{ $role }}</span></label>
                                            <div class="check @if($id === 2) c-green @elseif($id === 3) c-pink @elseif($id === 4) c-blue @endif"></div>
                                        </div>
                                        @endforeach

                                        <div class="mt-3">
                                            <button class="btn-block waves-effect waves-light btn-right" type="submit"><img width="120" src="{{ asset('assets/images/goto-btn.svg') }}" class="rotate-btn-270" alt="">
                                            </button>
                                            <p class="next-text">Next</p>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <h5 class="font-size-14 mb-3 color-black">You will still be able to switch between accounts</h5>
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
