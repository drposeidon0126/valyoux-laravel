@extends('layouts.master')
@section('title') {{ trans('global.edit') }} {{ $title }} @endsection
@section('css')
    <!-- Dropify css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/libs/dropify/css/dropify.min.css') }}">
    <!-- Select2 css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/select2/select2.min.css') }}">
@endsection
@section('content')
    @component('common-components.breadcrumb')
        @slot('title') {{ request()->segment(3)." ".$title }} @endslot
        @slot('li_1') {{ $title }} @endslot
        @slot('li_2') {{ trans('global.edit') }} {{ $title }} @endslot
    @endcomponent

    <!-- end row -->
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                    <form method="POST" action="{{ route('admin.'.request()->segment(1).'.store') }}" class="custom-validation" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="required" for="permissions">Select Role</label>
                            <div style="padding-bottom: 4px">
                                <span class="btn btn-info btn-xs select-all" style="border-radius: 0">Select All</span>
                                <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">Deselect All</span>
                            </div>
                            <select class="form-control select2 {{ $errors->has('roles') ? 'parsley-error' : '' }}" name="roles[]" id="roles" multiple required>
                                @foreach($roles as $id => $roles)
                                    <option value="{{ $id }}" {{ in_array($id, old('roles', [])) ? 'selected' : '' }}>{{ $roles }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('roles'))
                                <span class="text-danger">{{ $errors->first('roles') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>{{ ucwords(str_replace('_',' ','first_name')) }}</label>
                            <input type="text" class="form-control @error('first_name') parsley-error @enderror" required value="{{ old('first_name') }}" name="first_name" id="first_name" placeholder="{{ ucwords(str_replace('_',' ','first_name')) }}"/>
                            @error('first_name')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>{{ ucwords(str_replace('_',' ','last_name')) }}</label>
                            <input type="text" class="form-control @error('last_name') parsley-error @enderror" required value="{{ old('last_name') }}" name="last_name" id="last_name" placeholder="{{ ucwords(str_replace('_',' ','last_name')) }}"/>
                            @error('last_name')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>{{ ucwords(str_replace('_',' ','email')) }}</label>
                            <input type="email" class="form-control @error('email') parsley-error @enderror" required value="{{ old('email') }}" name="email" id="email" placeholder="{{ ucwords(str_replace('_',' ','email')) }}"/>
                            @error('email')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>{{ ucwords(str_replace('_',' ','password')) }}</label>
                            <input type="password" class="form-control @error('password') parsley-error @enderror" required value="{{ old('password') }}" name="password" id="password" placeholder="{{ ucwords(str_replace('_',' ','password')) }}"/>
                            @error('password')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>{{ ucwords(str_replace('_',' ','confirm_password')) }}</label>
                            <input type="password" class="form-control" required data-parsley-equalto="#password" name="confirm_password" id="confirm_password" placeholder="{{ ucwords(str_replace('_',' ','confirm_password')) }}"/>
                        </div>
                        <div class="form-group">
                            <label>{{ ucwords(str_replace('_',' ','dob')) }}</label>
                            <input type="date" class="form-control" required value="{{ old('dob') }}" name="dob" id="dob" placeholder="{{ ucwords(str_replace('_',' ','dob')) }}"/>
                        </div>
                        <div class="card">
                            <div class="body">
                                <input type="file" id="avatar" class="dropify" name="avatar" required>
                                @error('avatar')
                                <span class="text-red">{{ $message }}</span>
                                @enderror
                            </div>
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
    <script src="{{ URL::asset('assets/libs/dropify/js/dropify.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/select2/select2.min.js') }}"></script>
@endsection
@section('script-bottom')
    <script>
        $(function () {
            $('.dropify').dropify();
            $('.select2').select2();
            $('.select-all').click(function () {
                let $select2 = $(this).parent().siblings('.select2')
                $select2.find('option').prop('selected', 'selected')
                $select2.trigger('change')
            })
            $('.deselect-all').click(function () {
                let $select2 = $(this).parent().siblings('.select2')
                $select2.find('option').prop('selected', '')
                $select2.trigger('change')
            })
        })
    </script>
@endsection
