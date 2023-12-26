@extends('layouts.master')

@section('title') @lang('translation.Validation') @endsection
@section('css')
    <!-- Dropify css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/libs/dropify/css/dropify.min.css') }}">
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('title') Profile Settings - Artist Account Listing & Verification ID @endslot
        @slot('li_1') Forms @endslot
        @slot('li_2') Artist @endslot
    @endcomponent

    <!-- end row -->
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">{{ $title }}</h4>
                    <p class="card-title-desc">Please input exactly as per your official Identification documents.</p>

                    <form action="#" class="custom-validation">

                        <div class="form-group">
                            <label>{{ ucwords(str_replace('_',' ','first_name')) }}</label>
                            <input type="text" class="form-control @error('first_name') parsley-error @enderror" value="{{ old('first_name', !empty($user->first_name) ? $user->first_name : '') }}" required placeholder="{{ ucwords(str_replace('_',' ','first_name')) }}"/>
                            @error('first_name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>{{ ucwords(str_replace('_',' ','last_name')) }}</label>
                            <input type="text" class="form-control" required placeholder="{{ ucwords(str_replace('_',' ','last_name')) }}" value="{{ old('last_name', !empty($user->last_name) ? $user->last_name : '') }}"/>
                            @error('last_name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>{{ ucwords(str_replace('_',' ','date_of_birth')) }}</label>
                            <input type="date" class="form-control" required value="{{ old('dob', !empty($user->dob) ? $user->dob : '') }}"/>
                            @error('dob')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>{{ ucwords(str_replace('_',' ','gender')) }}</label>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
                                        <label class="form-check-label" for="inlineRadio1">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
                                        <label class="form-check-label" for="inlineRadio2">Female</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Other">
                                        <label class="form-check-label" for="inlineRadio3">Other</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>{{ ucwords(str_replace('_',' ','email')) }}</label>
                            <input type="email" class="form-control" required placeholder="{{ ucwords(str_replace('_',' ','email')) }}" value="{{ old('email', !empty($user->email) ? $user->email : '') }}"/>
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Contact Number Country code, e.g. AU is +61 or U.S is +1</label>
                            <input type="number" class="form-control" required placeholder="{{ ucwords(str_replace('_',' ','contact')) }}" value="{{ !empty($user->contact) ? $user->contact : '' }}"/>
                        </div>

                        <h4 class="card-title">Address1</h4>
                        <div class="form-group">
                            <label>City / Suburb</label>
                            <input type="text" class="form-control" required placeholder="City / Suburb" value="{{ $user->city ?? '' }}"/>
                        </div>
                        <div class="form-group">
                            <label>Unit/Level</label>
                            <input type="text" class="form-control" required placeholder="Unit/Level" value="{{ $user->unit ?? '' }}"/>
                        </div>
                        <div class="form-group">
                            <label>Street Number (PO Box not acceptable)</label>
                            <input type="text" class="form-control" required placeholder="Street Number (PO Box not acceptable)" value="{{ $user->street_number ?? '' }}"/>
                        </div>
                        <div class="form-group">
                            <label>Street Name</label>
                            <input type="text" class="form-control" required placeholder="Street Name" value="{{ $user->street_name ?? '' }}"/>
                        </div>
                        <div class="form-group">
                            <label>Country</label>
                            <select name="country" id="country" class="form-control" required></select>
                        </div>
                        <div class="form-group">
                            <label>Country Zip /Post Code</label>
                            <input type="number" class="form-control" required placeholder="Country Zip /Post Code"/>
                        </div>

                        <h4 class="card-title">Address2</h4>
                        <div class="form-group">
                            <label for="">
                                <input type="checkbox" required/>
                                Same as above
                            </label>
                        </div>
                        <p class="card-title-desc">What artist category do you think that are you applying for please note you may not yet currently be eligible</p>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="artist" id="artist1" value="EOI Profile">
                                <label class="form-check-label" for="artist1">EOI Profile</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="artist" id="artist2" value="Upcoming">
                                <label class="form-check-label" for="artist2">Upcoming</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="artist" id="artist3" value="Independent">
                                <label class="form-check-label" for="artist3">Independent</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="artist" id="artist4" value="Major Artist">
                                <label class="form-check-label" for="artist4">Major Artist</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>What is your brand, music artist, influencer or stage name. What do fans call you? This will be your company brand business name that is or will be registered.</label>
                            <input type="text" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label>Artist Bio - Your journey as a music artist in words 250 words.</label>
                            <textarea required="" class="form-control" rows="5" data-parsley-maxlength="250"></textarea>
                        </div>
                        <p class="card-title-desc">What artist category do you think that are you applying for please note you may not yet currently be eligible</p>
                        <div class="form-group">
                            <label>Website link</label>
                            <input type="url" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label>Spotify</label>
                            <input type="text" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label>Soundcloud</label>
                            <input type="text" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label>Apple Music</label>
                            <input type="text" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label>Youtube</label>
                            <input type="url" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="url" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label>Instagram</label>
                            <input type="url" class="form-control" required/>
                        </div>

                        <p class="card-title-desc">Upload your photo. Please name the file with your name. Make sure there is nothing in the background picture we want the spot light to be on you.</p>
                        <div class="card">
                            <div class="body">
                                <input type="file" class="dropify">
                            </div>
                        </div>

                        <p class="card-title-desc">Which one of your songs do you want investors to listen to and Valyou?. You must own full rights or master to the song or it will be taken down.</p>
                        <div class="card">
                            <div class="body">
                                <input type="file" class="dropify">
                            </div>
                        </div>

                        <p class="card-title-desc">We take copyright seriously.</p>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="copyright" id="copyright1" value="Yes">
                                <label class="form-check-label" for="copyright1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="copyright" id="copyright2" value="No">
                                <label class="form-check-label" for="copyright2">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="copyright" id="copyright3" value="Co-owner">
                                <label class="form-check-label" for="copyright3">Co-owner</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>If you are a co owner the song, how many percent of the revenue are you entitled to?</label>
                            <input type="text" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label>Who else is entitled to royalties or earnings from the song ? e.g Songwriter, Producer, Band member</label>
                            <input type="text" class="form-control" placeholder="Please input their name" required/>
                        </div>
                        <div class="form-group">
                            <label>Please input their email address. Please invite them to Valyou X to claim their earnings</label>
                            <input type="text" class="form-control" placeholder="Please input their email address. Please invite them to Valyou X to claim their earnings" required/>
                        </div>
                        <p class="card-title-desc">Do you have management or representation?</p>
                        <div>
                            <div class="custom-control custom-radio custom-radio-primary mb-3">
                                <input type="radio" id="representation1" name="representation" class="custom-control-input">
                                <label class="custom-control-label" for="representation1">Independent or Self - Managed</label>
                            </div>
                            <div class="custom-control custom-radio custom-radio-success mb-3">
                                <input type="radio" id="representation2" name="representation" class="custom-control-input">
                                <label class="custom-control-label" for="representation2">Management</label>
                            </div>
                            <div class="custom-control custom-radio custom-radio-info mb-3">
                                <input type="radio" id="representation3" name="representation" class="custom-control-input">
                                <label class="custom-control-label" for="representation3">Record label</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>If other provide name of organisation membership number</label>
                            <input type="text" class="form-control" placeholder="Management or Record Label name" required/>
                        </div>
                        <div class="form-group">
                            <label>Details of representation, Name, contact details ( email or contact number insert NA if independent or self-managed</label>
                            <input type="text" class="form-control" placeholder="Your answer" required/>
                        </div>
                        <p class="card-title-desc">Do you have management or representation?</p>
                        <div>
                            <div class="custom-control custom-radio custom-radio-primary mb-3">
                                <input type="radio" id="management1" name="management" class="custom-control-input">
                                <label class="custom-control-label" for="management1">APRA AMCOS</label>
                            </div>
                            <div class="custom-control custom-radio custom-radio-success mb-3">
                                <input type="radio" id="management2" name="management" class="custom-control-input">
                                <label class="custom-control-label" for="management2">ASCAP</label>
                            </div>
                            <div class="custom-control custom-radio custom-radio-info mb-3">
                                <input type="radio" id="management3" name="management" class="custom-control-input">
                                <label class="custom-control-label" for="management3">SOCAN</label>
                            </div>
                            <div class="custom-control custom-radio custom-radio-info mb-3">
                                <input type="radio" id="management4" name="management" class="custom-control-input">
                                <label class="custom-control-label" for="management4">Not currently a member</label>
                            </div>
                        </div>

                        <p class="card-title-desc">Do you currently have a registered company setup ? If Yes, please provide ID business number ( e.g if Australia, ACN, ABN Registration Number )</p>
                        <div>
                            <div class="custom-control custom-radio custom-radio-primary mb-3">
                                <input type="radio" id="registered_company1" name="registered_company" class="custom-control-input">
                                <label class="custom-control-label" for="registered_company1">Yes</label>
                            </div>
                            <div class="custom-control custom-radio custom-radio-success mb-3">
                                <input type="radio" id="registered_company2" name="registered_company" class="custom-control-input">
                                <label class="custom-control-label" for="registered_company2">No</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                    Submit
                                </button>
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
    <script src="{{ URL::asset('assets/js/pages/country-state-city.js') }}"></script>
@endsection
@section('script-bottom')
    <script>
        (function () {
            $('.dropify').dropify();
            const selectedCountry = `{{ $user->country ?? '' }}`;
            const country = document.getElementById('country');
            country.innerHTML = csc.getAllCountries()
                .map(country => `<option value="${country.id}" ${(selectedCountry == country.name) ? 'selected' : ''}>${country.name}</option>`)
                .prepend(['<option value="">-- Select Country --</option>']).join('');
        })()
    </script>
@endsection
