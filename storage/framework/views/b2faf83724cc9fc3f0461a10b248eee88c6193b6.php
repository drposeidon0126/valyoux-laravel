<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Validation'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <!-- Dropify css -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/libs/dropify/css/dropify.min.css')); ?>">
    <style>
    @media(max-width: 525px){
        .page-title-box h4{
            display: none !important;
        }
        .page-title-box .page-title-right{
            display: none !important;
        }
    }
    .custom-radio-pink{
        
    }
    
    .custom-checkbox-pink .custom-control-input:checked ~ .custom-control-label:before, .custom-radio-pink .custom-control-input:checked ~ .custom-control-label:before {
        background-color: #F9508A;
        border-color: #F9508A;
    }
    .btn-darkkk{
        background-color: #000 !important;
        border-color: #000 !important;
    }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('common-components.breadcrumb'); ?>
        <?php $__env->slot('title'); ?> Profile Settings - Artist Account Listing & Verification ID <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_1'); ?> Forms <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_2'); ?> Artist <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <!-- end row -->
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Profile Information</h4>
                    <p class="card-title-desc">Please input exactly as per your official Identification documents.</p>

                    <form action="#" class="custom-validation">

                        <div class="form-group">
                            <label><?php echo e(ucwords(str_replace('_',' ','first_name'))); ?></label>
                            <input type="text" class="form-control" required placeholder="<?php echo e(ucwords(str_replace('_',' ','first_name'))); ?>"/>
                        </div>
                        <div class="form-group">
                            <label><?php echo e(ucwords(str_replace('_',' ','last_name'))); ?></label>
                            <input type="text" class="form-control" required placeholder="<?php echo e(ucwords(str_replace('_',' ','last_name'))); ?>"/>
                        </div>
                        <div class="form-group">
                            <label><?php echo e(ucwords(str_replace('_',' ','date_of_birth'))); ?></label>
                            <input type="date" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label><?php echo e(ucwords(str_replace('_',' ','gender'))); ?></label>
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
                            <label><?php echo e(ucwords(str_replace('_',' ','email'))); ?></label>
                            <input type="email" class="form-control" required placeholder="<?php echo e(ucwords(str_replace('_',' ','email'))); ?>"/>
                        </div>

                        <div class="form-group">
                            <label>Contact Number Country code, e.g. AU is +61 or U.S is +1</label>
                            <input type="number" class="form-control" required placeholder="<?php echo e(ucwords(str_replace('_',' ','contact'))); ?>"/>
                        </div>

                        <h4 class="card-title">Address</h4>
                        <div class="form-group">
                            <label>City / Suburb</label>
                            <input type="text" class="form-control" required placeholder="City / Suburb"/>
                        </div>
                        <div class="form-group">
                            <label>Unit/Level</label>
                            <input type="text" class="form-control" required placeholder="Unit/Level"/>
                        </div>
                        <div class="form-group">
                            <label>Street Number (PO Box not acceptable)</label>
                            <input type="text" class="form-control" required placeholder="Street Number (PO Box not acceptable)"/>
                        </div>
                        <div class="form-group">
                            <label>Street Name</label>
                            <input type="text" class="form-control" required placeholder="Street Name"/>
                        </div>
                        <div class="form-group">
                            <label>Country</label>
                            <select name="" id="" class="form-control" required>
                                <option value="">Select Country</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Country Zip /Post Code</label>
                            <input type="number" class="form-control" required placeholder="Country Zip /Post Code"/>
                        </div>

                        <!--<h4 class="card-title">Address2</h4>-->
                        <!--<div class="form-group">-->
                        <!--    <label for="">-->
                        <!--        <input type="checkbox" required/>-->
                        <!--        Same as above-->
                        <!--    </label>-->
                        <!--</div>-->
                        <p class="card-title-desc">What artist category you are applying for? Please note you may not yet currently be eligible.</p>
                        <div class="form-group">
                            <div class="custom-control custom-radio custom-radio-success mb-3">
                                <input class="custom-control-input" type="radio" name="artist" id="artist1" value="EOI Profile">
                                <label class="custom-control-label" for="artist1">Expression Of Interest</label>
                            </div>
                            <div class="custom-control custom-radio custom-radio-success mb-3">
                                <input class="custom-control-input" type="radio" name="artist" id="artist5" value="get signed">
                                <label class="custom-control-label" for="artist5">Get Signed </label>
                            </div>
                            <div class="custom-control custom-radio custom-radio-success mb-3">
                                <input class="custom-control-input" type="radio" name="artist" id="artist2" value="Upcoming">
                                <label class="custom-control-label" for="artist2">Upcoming Artist</label>
                            </div>
                            <div class="custom-control custom-radio custom-radio-success mb-3">
                                <input class="custom-control-input" type="radio" name="artist" id="artist6" value="Professional">
                                <label class="custom-control-label" for="artist6">Professional Artist</label>
                            </div>
                            <div class="custom-control custom-radio custom-radio-success mb-3">
                                <input class="custom-control-input" type="radio" name="artist" id="artist3" value="Independent Major Artist">
                                <label class="custom-control-label" for="artist3">Independent Major Artist</label>
                            </div>
                            <div class="custom-control custom-radio custom-radio-success mb-3">
                                <input class="custom-control-input" type="radio" name="artist" id="artist4" value="Major Major Artist">
                                <label class="custom-control-label" for="artist4">Signed to a Label / Major Artist </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>What is your brand, music artist, influencer or stage name. What do fans call you? This will be your company, brand business name as it will be listed and registered on Valyou X </label>
                            <input type="text" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label>Artist Bio - Your journey as a music artist in 250 words or less.</label>
                            <textarea required="" class="form-control" rows="5" data-parsley-maxlength="250"></textarea>
                        </div>
                        <p class="card-title-desc">Where can we find you online and check out your music</p>
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
                        <div class="form-group">
                            <label>Other Links</label>
                            <input type="url" class="form-control"/>
                        </div>

                        <p class="card-title-desc">Upload your photo. Please name the file with your name. Make sure there is nothing in the background picture we want the spot light to be on you.</p>
                        <div class="card">
                            <div class="body">
                                <input type="file" class="dropify">
                            </div>
                        </div>

                        <!--<p class="card-title-desc">Which one of your songs do you want investors to listen to and Valyou?. You must own full rights or master to the song or it will be taken down.</p>-->
                        <!--<div class="card">-->
                        <!--    <div class="body">-->
                        <!--        <input type="file" class="dropify">-->
                        <!--    </div>-->
                        <!--</div>-->

                        <!--<p class="card-title-desc">We take copyright seriously.</p>-->
                        <!--<div class="form-group">-->
                        <!--    <div class="form-check form-check-inline">-->
                        <!--        <input class="form-check-input" type="radio" name="copyright" id="copyright1" value="Yes">-->
                        <!--        <label class="form-check-label" for="copyright1">Yes</label>-->
                        <!--    </div>-->
                        <!--    <div class="form-check form-check-inline">-->
                        <!--        <input class="form-check-input" type="radio" name="copyright" id="copyright2" value="No">-->
                        <!--        <label class="form-check-label" for="copyright2">No</label>-->
                        <!--    </div>-->
                        <!--    <div class="form-check form-check-inline">-->
                        <!--        <input class="form-check-input" type="radio" name="copyright" id="copyright3" value="Co-owner">-->
                        <!--        <label class="form-check-label" for="copyright3">Co-owner</label>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="form-group">-->
                        <!--    <label>If you are a co owner the song, how many percent of the revenue are you entitled to?</label>-->
                        <!--    <input type="text" class="form-control" required/>-->
                        <!--</div>-->
                        <!--<div class="form-group">-->
                        <!--    <label>Who else is entitled to royalties or earnings from the song ? e.g Songwriter, Producer, Band member</label>-->
                        <!--    <input type="text" class="form-control" placeholder="Please input their name" required/>-->
                        <!--</div>-->
                        <!--<div class="form-group">-->
                        <!--    <label>Please input their email address. Please invite them to Valyou X to claim their earnings</label>-->
                        <!--    <input type="text" class="form-control" placeholder="Please input their email address. Please invite them to Valyou X to claim their earnings" required/>-->
                        <!--</div>-->
                        <p class="card-title-desc">Do you have management or representation?</p>
                        <div>
                            <div class="custom-control custom-radio custom-radio-primary custom-radio-pink mb-3">
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
                            <label>If not independent please provide name of management company or label</label>
                            <input type="text" class="form-control" placeholder="Management or Record Label name" required/>
                        </div>
                        <div class="form-group">
                            <label>Contact person</label>
                            <input type="text" class="form-control mb-2" placeholder="Name of contact person at label or Manager" required/>
                            <input type="text" class="form-control mb-2" placeholder="Email" required/>
                            <input type="text" class="form-control" placeholder="Phone Number" required/>
                        </div>
                        <p class="card-title-desc">Are you a member of one or more of these organisations?</p>
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

                        <p class="card-title-desc">Do you agree to Valyou X  setting up a new onshore or offshore company in the appropriate jurisdiction governed by their several legislations in order to legally enable you use the Valyou X platform to list as an artist, brand, music fan investor, company or business at which you will be issued with ( e.g if set up in Australia, an ACN ABN Registration number if Brand or Business set up is UAE, Dubai the appropriate business registration with the regulator will be issued.<br><br>View Agreement here.</p>
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
                                <button type="submit" class="btn btn-primary btn-darkkk waves-effect waves-light mr-1">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('assets/libs/parsleyjs/parsleyjs.min.js')); ?>"></script>
    <!-- Plugins js -->
    <script src="<?php echo e(URL::asset('assets/js/pages/form-validation.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/dropify/js/dropify.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/dropify/dropify.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/form/form-validation.blade.php ENDPATH**/ ?>