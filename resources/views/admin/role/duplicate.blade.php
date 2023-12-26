@extends('layouts.master')
@section('title') Create {{ $title }} @endsection
@section('css')
    <!-- Select2 css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/select2/select2.min.css') }}">
@endsection
@section('content')
    @component('common-components.breadcrumb')
        @slot('title') Create {{ $title }} @endslot
        @slot('li_1') {{ $title }} @endslot
        @slot('li_2') Create {{ $title }} @endslot
    @endcomponent

    <!-- end row -->
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                    <form method="POST" action="{{ route('admin.'.request()->segment(1).'.store') }}" class="custom-validation" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>{{ ucwords(str_replace('_',' ','title')) }}</label>
                            <input type="text" class="form-control @error('title') parsley-error @enderror" required value="{{ old('title', $role->title) }}" name="title" id="title" placeholder="{{ ucwords(str_replace('_',' ','title')) }}"/>
                            @error('title')
                                <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="required" for="permissions">Select Permissions</label>
                            <div style="padding-bottom: 4px">
                                <span class="btn btn-info btn-xs select-all" style="border-radius: 0">Select All</span>
                                <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">Deselect All</span>
                            </div>
                            <select class="form-control select2 {{ $errors->has('permissions') ? 'parsley-error' : '' }}" name="permissions[]" id="permissions" multiple required>
                                @foreach($permissions as $id => $permissions)
                                    <option value="{{ $id }}" {{ (in_array($id,old('permissions',[])) || $role->permissions->contains($id)) ? 'selected' : '' }}>{{ $permissions }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('permissions'))
                                <span class="text-danger">{{ $errors->first('permissions') }}</span>
                            @endif
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
    <script src="{{ URL::asset('assets/libs/select2/select2.min.js') }}"></script>
@endsection
@section('script-bottom')
    <script>
        $(function () {
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
