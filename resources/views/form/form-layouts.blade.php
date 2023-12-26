@extends('layouts.master')

@section('title') @lang('translation.Forms_Layouts') @endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('title') Form Layouts @endslot
        @slot('li_1') Forms @endslot
        @slot('li_2') Form Layouts @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Form grid layout</h4>

                    <form>
                        <div class="form-group">
                            <label for="formrow-firstname-input">First name</label>
                            <input type="text" class="form-control" id="formrow-firstname-input">
                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="formrow-email-input">Email</label>
                                    <input type="email" class="form-control" id="formrow-email-input">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="formrow-password-input">Password</label>
                                    <input type="password" class="form-control" id="formrow-password-input">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="formrow-inputCity">City</label>
                                    <input type="text" class="form-control" id="formrow-inputCity">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="formrow-inputState">State</label>
                                    <select id="formrow-inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="formrow-inputZip">Zip</label>
                                    <input type="text" class="form-control" id="formrow-inputZip">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="formrow-customCheck">
                                <label class="custom-control-label" for="formrow-customCheck">Check me out</label>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary w-md">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Horizontal form layout</h4>

                    <form>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">First name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="horizontal-email-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="horizontal-password-input">
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div class="custom-control custom-checkbox mb-4">
                                    <input type="checkbox" class="custom-control-input" id="horizontal-customCheck">
                                    <label class="custom-control-label" for="horizontal-customCheck">Remember me</label>
                                </div>

                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Inline forms layout</h5>

                    <form class="form-inline">
                        <label class="sr-only" for="inlineFormInputName2">Name</label>
                        <input type="text" class="form-control mb-2 mr-sm-3" id="inlineFormInputName2"
                            placeholder="Enter Name">

                        <label class="sr-only" for="inlineFormemail2">Email</label>
                        <div class="input-group mb-2 mr-sm-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                            </div>
                            <input type="email" class="form-control" id="inlineFormemail2" placeholder="Enter Email">
                        </div>


                        <div class="custom-control custom-checkbox mb-2 mr-sm-3">
                            <input type="checkbox" class="custom-control-input" id="inlineForm-customCheck">
                            <label class="custom-control-label" for="inlineForm-customCheck">Remember me</label>
                        </div>

                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection
