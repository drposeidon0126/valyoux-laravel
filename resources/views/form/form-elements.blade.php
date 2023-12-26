@extends('layouts.master')

@section('title') @lang('translation.Elements') @endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('title') Form Elements @endslot
        @slot('li_1') Forms @endslot
        @slot('li_2') Form Elements @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Textual inputs</h4>
                    <p class="card-title-desc">Here are examples of <code>.form-control</code> applied to each
                        textual HTML5 <code>&lt;input&gt;</code> <code>type</code>.</p>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Text</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-search-input" class="col-md-2 col-form-label">Search</label>
                        <div class="col-md-10">
                            <input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                        <div class="col-md-10">
                            <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-url-input" class="col-md-2 col-form-label">URL</label>
                        <div class="col-md-10">
                            <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-tel-input" class="col-md-2 col-form-label">Telephone</label>
                        <div class="col-md-10">
                            <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-password-input" class="col-md-2 col-form-label">Password</label>
                        <div class="col-md-10">
                            <input class="form-control" type="password" value="hunter2" id="example-password-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-number-input" class="col-md-2 col-form-label">Number</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="42" id="example-number-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-datetime-local-input" class="col-md-2 col-form-label">Date and time</label>
                        <div class="col-md-10">
                            <input class="form-control" type="datetime-local" value="2019-08-19T13:45:00"
                                id="example-datetime-local-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-date-input" class="col-md-2 col-form-label">Date</label>
                        <div class="col-md-10">
                            <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-month-input" class="col-md-2 col-form-label">Month</label>
                        <div class="col-md-10">
                            <input class="form-control" type="month" value="2019-08" id="example-month-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-week-input" class="col-md-2 col-form-label">Week</label>
                        <div class="col-md-10">
                            <input class="form-control" type="week" value="2019-W33" id="example-week-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-time-input" class="col-md-2 col-form-label">Time</label>
                        <div class="col-md-10">
                            <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-color-input" class="col-md-2 col-form-label">Color</label>
                        <div class="col-md-10">
                            <input class="form-control" type="color" value="#556ee6" id="example-color-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Select</label>
                        <div class="col-md-10">
                            <select class="form-control">
                                <option>Select</option>
                                <option>Large select</option>
                                <option>Small select</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <label class="col-md-2 col-form-label">Custom Select</label>
                        <div class="col-md-10">
                            <select class="custom-select">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Sizing</h4>
                    <p class="card-title-desc">Set heights using classes like <code>.form-control-lg</code> and
                        <code>.form-control-sm</code>.</p>
                    <div>
                        <div class="mb-4">
                            <input class="form-control" type="text" placeholder="Default input">
                        </div>
                        <div class="mb-4">
                            <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
                        </div>
                        <div>
                            <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Range Inputs</h4>
                    <p class="card-title-desc">Set horizontally scrollable range inputs using
                        <code>.form-control-range</code>.</p>

                    <div>
                        <h5 class="font-size-14">Example</h5>
                        <input type="range" class="form-control-range" id="formControlRange">
                    </div>
                    <div class="mt-4">
                        <h5 class="font-size-14">Custom Range</h5>
                        <input type="range" class="custom-range" id="customRange1">

                        <input type="range" class="custom-range mt-4" min="0" max="5" id="customRange2">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Checkboxes</h4>

                    <div class="row">
                        <div class="col-xl-3 col-sm-6">
                            <div class="mt-4">
                                <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary mr-1"></i> Default
                                    Checkboxes</h5>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Default checkbox
                                    </label>
                                </div>
                                <div class="form-check form-check-right">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" checked>
                                    <label class="form-check-label" for="defaultCheck2">
                                        Default checkbox Right
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="mt-4">
                                <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary mr-1"></i> Custom
                                    Checkboxes</h5>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                    <label class="custom-control-label" for="customCheck1">Custom checkbox</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-right">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                    <label class="custom-control-label" for="customCheck2">Custom checkbox Right</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="mt-4">
                                <h5 class="font-size-14"><i class="mdi mdi-arrow-right text-primary mr-1"></i> Custom
                                    Checkboxes colors</h5>
                                <p class="sub-header mb-4">Add class <code>.custom-checkbox-* </code> for a color Checkboxes
                                </p>

                                <div>
                                    <div class="custom-control custom-checkbox custom-checkbox-primary mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheckcolor1" checked>
                                        <label class="custom-control-label" for="customCheckcolor1">Checkbox Primary</label>
                                    </div>
                                    <div class="custom-control custom-checkbox  custom-checkbox-success mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheckcolor2" checked>
                                        <label class="custom-control-label" for="customCheckcolor2">Checkbox Success</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-checkbox-info mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheckcolor3" checked>
                                        <label class="custom-control-label" for="customCheckcolor3">Checkbox Info</label>
                                    </div>
                                    <div class="custom-control custom-checkbox  custom-checkbox-warning mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheckcolor4" checked>
                                        <label class="custom-control-label" for="customCheckcolor4">Checkbox Warning</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-checkbox-danger">
                                        <input type="checkbox" class="custom-control-input" id="customCheckcolor5" checked>
                                        <label class="custom-control-label" for="customCheckcolor5">Checkbox Danger</label>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="mt-4">
                                <h5 class="font-size-14"><i class="mdi mdi-arrow-right text-primary mr-1"></i> Custom
                                    Checkboxes Outline</h5>
                                <p class="sub-header mb-4">Add class <code>custom-checkbox-outline</code> &
                                    <code>.custom-checkbox-* </code> for a color Checkboxes</p>

                                <div>
                                    <div
                                        class="custom-control custom-checkbox custom-checkbox-outline custom-checkbox-primary mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheck-outlinecolor1"
                                            checked>
                                        <label class="custom-control-label" for="customCheck-outlinecolor1">Checkbox Outline
                                            Primary</label>
                                    </div>
                                    <div
                                        class="custom-control custom-checkbox custom-checkbox-outline custom-checkbox-success mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheck-outlinecolor2">
                                        <label class="custom-control-label" for="customCheck-outlinecolor2">Checkbox Outline
                                            Success</label>
                                    </div>
                                    <div
                                        class="custom-control custom-checkbox custom-checkbox-outline custom-checkbox-info mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheck-outlinecolor3"
                                            checked>
                                        <label class="custom-control-label" for="customCheck-outlinecolor3">Checkbox Outline
                                            Info</label>
                                    </div>
                                    <div
                                        class="custom-control custom-checkbox custom-checkbox-outline  custom-checkbox-warning mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheck-outlinecolor4"
                                            checked>
                                        <label class="custom-control-label" for="customCheck-outlinecolor4">Checkbox Outline
                                            Warning</label>
                                    </div>
                                    <div
                                        class="custom-control custom-checkbox custom-checkbox-outline custom-checkbox-danger">
                                        <input type="checkbox" class="custom-control-input" id="customCheck-outlinecolor5"
                                            checked>
                                        <label class="custom-control-label" for="customCheck-outlinecolor5">Checkbox Outline
                                            Danger</label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Radios</h4>

                    <div class="row">
                        <div class="col-xl-3 col-sm-6">
                            <div class="mt-4">
                                <h5 class="font-size-14 mb-4">Default Radios</h5>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                        value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Default radio
                                    </label>
                                </div>
                                <div class="form-check form-check-right">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                                        value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Default radio Right
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6">
                            <div class="mt-4">
                                <h5 class="font-size-14 mb-4">Custom Radios</h5>
                                <div class="custom-control custom-radio mb-3">
                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-right">
                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input"
                                        checked>
                                    <label class="custom-control-label" for="customRadio2">Or toggle this Right custom
                                        radio</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6">
                            <div class="mt-4">
                                <h5 class="font-size-14"><i class="mdi mdi-arrow-right text-primary mr-1"></i> Custom Radio
                                    colors</h5>
                                <p class="sub-header mb-4">Add class <code>.custom-radio-* </code> for a color Radios</p>


                                <div>
                                    <div class="custom-control custom-radio custom-radio-primary mb-3">
                                        <input type="radio" id="customRadiocolor1" name="customRadiocolor1"
                                            class="custom-control-input" checked>
                                        <label class="custom-control-label" for="customRadiocolor1">Custom Radio
                                            Primary</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-radio-success mb-3">
                                        <input type="radio" id="customRadiocolor2" name="customRadiocolor2"
                                            class="custom-control-input" checked>
                                        <label class="custom-control-label" for="customRadiocolor2">Custom Radio
                                            Success</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-radio-info mb-3">
                                        <input type="radio" id="customRadiocolor3" name="customRadiocolor3"
                                            class="custom-control-input" checked>
                                        <label class="custom-control-label" for="customRadiocolor3">Custom Radio
                                            Info</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-radio-warning mb-3">
                                        <input type="radio" id="customRadiocolor4" name="customRadiocolor4"
                                            class="custom-control-input" checked>
                                        <label class="custom-control-label" for="customRadiocolor4">Custom Radio
                                            Warning</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-radio-danger">
                                        <input type="radio" id="customRadiocolor5" name="customRadiocolor5"
                                            class="custom-control-input" checked>
                                        <label class="custom-control-label" for="customRadiocolor5">Custom Radio
                                            Danger</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6">
                            <div class="mt-4">
                                <h5 class="font-size-14"><i class="mdi mdi-arrow-right text-primary mr-1"></i> Custom Radio
                                    Outline</h5>
                                <p class="sub-header mb-4">Add class <code>custom-radio-outline</code> &
                                    <code>.custom-radio-* </code> for a color Checkboxes</p>

                                <div>
                                    <div class="custom-control custom-radio custom-radio-outline custom-radio-primary mb-3">
                                        <input type="radio" id="customRadiooutlinecolor1" name="customRadiooutlinecolor1"
                                            class="custom-control-input" checked>
                                        <label class="custom-control-label" for="customRadiooutlinecolor1">Radio Outline
                                            Primary</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-radio-outline custom-radio-success mb-3">
                                        <input type="radio" id="customRadiooutlinecolor2" name="customRadiooutlinecolor2"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="customRadiooutlinecolor2">Radio Outline
                                            Success</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-radio-outline custom-radio-info mb-3">
                                        <input type="radio" id="customRadiooutlinecolor3" name="customRadiooutlinecolor3"
                                            class="custom-control-input" checked>
                                        <label class="custom-control-label" for="customRadiooutlinecolor3">Radio Outline
                                            Info</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-radio-outline custom-radio-warning mb-3">
                                        <input type="radio" id="customRadiooutlinecolor4" name="customRadiooutlinecolor4"
                                            class="custom-control-input" checked>
                                        <label class="custom-control-label" for="customRadiooutlinecolor4">Radio Outline
                                            Warning</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-radio-outline custom-radio-danger">
                                        <input type="radio" id="customRadiooutlinecolor5" name="customRadiooutlinecolor5"
                                            class="custom-control-input" checked>
                                        <label class="custom-control-label" for="customRadiooutlinecolor5">Radio Outline
                                            Danger</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Switches</h4>
                    <p class="card-title-desc">A switch has the markup of a custom checkbox but uses the
                        <code>.custom-switch</code> class to render a toggle switch. Switches also support the
                        <code>disabled</code> attribute.</p>

                    <div class="row">

                        <div class="col-lg-6">
                            <div>
                                <h5 class="font-size-14 mb-3">Switch examples</h5>
                                <div class="custom-control custom-switch mb-3" dir="ltr">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                                    <label class="custom-control-label" for="customSwitch1">Toggle this switch
                                        element</label>
                                </div>
                                <div class="custom-control custom-switch" dir="ltr">
                                    <input type="checkbox" class="custom-control-input" disabled id="customSwitch2">
                                    <label class="custom-control-label" for="customSwitch2">Disabled switch element</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mt-4 mt-lg-0">
                                <h5 class="font-size-14 mb-3">Switch sizes</h5>

                                <div class="custom-control custom-switch mb-3" dir="ltr">
                                    <input type="checkbox" class="custom-control-input" id="customSwitchsizesm" checked>
                                    <label class="custom-control-label" for="customSwitchsizesm">Small Size Switch</label>
                                </div>

                                <div class="custom-control custom-switch custom-switch-md mb-3" dir="ltr">
                                    <input type="checkbox" class="custom-control-input" id="customSwitchsizemd">
                                    <label class="custom-control-label" for="customSwitchsizemd">Medium Size Switch</label>
                                </div>

                                <div class="custom-control custom-switch custom-switch-lg mb-3" dir="ltr">
                                    <input type="checkbox" class="custom-control-input" id="customSwitchsizelg" checked>
                                    <label class="custom-control-label" for="customSwitchsizelg">Large Size Switch</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">File browser</h4>
                    <p class="card-title-desc">The file input is the most gnarly of the bunch and requires additional
                        JavaScript if you’d like to hook them up with functional <em>Choose file…</em> and selected file
                        name text.</p>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end row -->
@endsection
