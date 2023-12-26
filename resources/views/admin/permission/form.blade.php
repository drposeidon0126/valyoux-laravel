@extends('layouts.master')
@section('title') Create {{ $title }} @endsection
@section('content')
    @php
        $action = url(request()->segment(1).'/form/'.request()->segment(3));
        if (request()->segment(3) == 'edit' || request()->segment(3) == 'duplicate') {
            $action .= '/'.request()->segment(4);
        }
    @endphp
    @component('common-components.breadcrumb')
        @slot('title') {{ request()->segment(3)." ".$title }} @endslot
        @slot('li_1') {{ $title }} @endslot
        @slot('li_2') Create {{ $title }} @endslot
    @endcomponent

    <!-- end row -->
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                    <form method="POST" action="{{$action}}" class="custom-validation" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>{{ ucwords(str_replace('_',' ','title')) }}</label>
                            <input type="text" class="form-control @error('title') parsley-error @enderror" required value="{{ $record->title ?? '' }}" name="title" id="title" placeholder="{{ ucwords(str_replace('_',' ','title')) }}"/>
                            @error('title')
                                <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/parsleyjs/parsleyjs.min.js') }}"></script>
    <!-- Plugins js -->
    <script src="{{ URL::asset('assets/js/pages/form-validation.init.js') }}"></script>
@endsection
