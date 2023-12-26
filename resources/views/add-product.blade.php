@extends('layouts.master')

@section('title') @lang('translation.Add_Product') @endsection

@section('css')
    <!-- select2 css -->
    <link href="{{ 'assets/libs/select2/select2.min.css' }}" rel="stylesheet" type="text/css" />

    <!-- dropzone css -->
    <link href="{{ 'assets/libs/dropzone/dropzone.min.css' }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('common-components.breadcrumb')
        @slot('title') Add Product @endslot
        @slot('li_1') Ecommerce @endslot
        @slot('li_2') Add Product @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Basic Information</h4>
                    <p class="card-title-desc">Fill all information below</p>

                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="productname">Product Name</label>
                                    <input id="productname" name="productname" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="manufacturername">Manufacturer Name</label>
                                    <input id="manufacturername" name="manufacturername" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="manufacturerbrand">Manufacturer Brand</label>
                                    <input id="manufacturerbrand" name="manufacturerbrand" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input id="price" name="price" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Category</label>
                                    <select class="form-control select2">
                                        <option>Select</option>
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Features</label>

                                    <select class="select2 form-control select2-multiple" multiple="multiple"
                                        data-placeholder="Choose ...">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="productdesc">Product Description</label>
                                    <textarea class="form-control" id="productdesc" rows="5"></textarea>
                                </div>

                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light">Save Changes</button>
                        <button type="submit" class="btn btn-secondary waves-effect">Cancel</button>
                    </form>

                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">Product Images</h4>

                    <form action="/" method="post" class="dropzone">
                        <div class="fallback">
                            <input name="file" type="file" multiple />
                        </div>

                        <div class="dz-message needsclick">
                            <div class="mb-3">
                                <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                            </div>

                            <h4>Drop files here or click to upload.</h4>
                        </div>
                    </form>
                </div>

            </div> <!-- end card-->

            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Meta Data</h4>
                    <p class="card-title-desc">Fill all information below</p>

                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="metatitle">Meta title</label>
                                    <input id="metatitle" name="productname" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="metakeywords">Meta Keywords</label>
                                    <input id="metakeywords" name="manufacturername" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="metadescription">Meta Description</label>
                                    <textarea class="form-control" id="metadescription" rows="5"></textarea>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light">Save Changes</button>
                        <button type="submit" class="btn btn-secondary waves-effect">Cancel</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection

@section('script')

    <!-- select 2 plugin -->
    <script src="{{ URL::asset('assets/libs/select2/select2.min.js') }}"></script>

    <!-- flot plugins -->
    <script src="{{ URL::asset('assets/libs/dropzone/dropzone.min.js') }}"></script>

    <script src="{{ URL::asset('assets/js/pages/ecommerce-select2.init.js') }}"></script>

@endsection
