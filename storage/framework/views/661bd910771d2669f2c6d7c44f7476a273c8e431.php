<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.KYC_Application'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/libs/twitter-bootstrap-wizard/twitter-bootstrap-wizard.min.css')); ?>">

    <!-- Plugins css -->
    <link href="<?php echo e(URL::asset('assets/libs/dropzone/dropzone.min.css')); ?>" rel="stylesheet" type="text/css" />
<style>
    .breadcrumb{
        display: none !important
    }
    .page-title-box > h4.font-weight-semibold{
        display: none;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('common-components.breadcrumb'); ?>
        <?php $__env->slot('title'); ?> KYC Application <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_1'); ?> Crypto <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_2'); ?> KYC Application <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

<style>
    .twitter-bs-wizard .twitter-bs-wizard-nav .step-number{
        border: 2px solid #000000;
        color: #000000;
    }
    .twitter-bs-wizard .twitter-bs-wizard-nav .nav-link.active .step-number {
        background-color: #000000;
        color: #ff0093;
    }
    .new-formodalbtns{
        
    }
    .new-formodalbtns a{
        min-width: 82px;
        text-align: center;
    }
    .new-formodalbtns a.btn-green:hover{
        color: #fff !important;
    }
    #verifyBtn{
        display: none;
    }
    .next.disabled > #verifyBtn{
        display: inline-block;
    }
    .next.disabled > #noBtnShow{
        display: none;
    }
</style>
    <div class="row justify-content-center mt-lg-5">
        <div class="col-xl-5 col-sm-8">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <h4 class="mt-4 font-weight-semibold">KYC Verification</h4>
                                <p class="text-muted mt-3">Please ensure all the information entered is consistent with your ID documents. It will not be able to be changed once it has been confirmed.</p>

                                <div class="mt-4">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-black" style="background-color: #000; border-color:#000" data-toggle="modal" data-target="#verificationModal">Click here for Verification</button>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center mt-5 mb-2">
                            <div class="col-sm-6 col-8">
                                <div>
                                    <img src="assets/images/verification-img.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="verificationModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Verify your Account</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div id="kyc-verify-wizard" class="twitter-bs-wizard">
                                        <ul class="twitter-bs-wizard-nav">
                                            <li class="nav-item">
                                                <a href="#personal-info" class="nav-link" data-toggle="tab">
                                                    <span class="step-number mr-2">01</span>
                                                    Personal Info
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#confirm-email" class="nav-link" data-toggle="tab">
                                                    <span class="step-number mr-2">02</span>
                                                    Confirm email
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#doc-verification" class="nav-link" data-toggle="tab">
                                                    <span class="step-number mr-2">03</span>
                                                    Document Verification
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content twitter-bs-wizard-tab-content">
                                            <div class="tab-pane" id="personal-info">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="kycfirstname-input">First name</label>
                                                                <input type="text" class="form-control"
                                                                    id="kycfirstname-input" placeholder="Enter First name">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="kyclastname-input">Last name</label>
                                                                <input type="text" class="form-control"
                                                                    id="kyclastname-input" placeholder="Enter Last name">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="kycphoneno-input">Phone</label>
                                                                <input type="text" class="form-control"
                                                                    id="kycphoneno-input" placeholder="Enter Phone number">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="kycbirthdate-input">Date of birth</label>
                                                                <input type="text" class="form-control"
                                                                    id="kycbirthdate-input"
                                                                    placeholder="Enter Date of birth">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="kycselectcity-input">City</label>
                                                                <select class="custom-select" id="kycselectcity-input">
                                                                    <option value="1" selected>San Francisco</option>
                                                                    <option value="2">Los Angeles</option>
                                                                    <option value="3">San Diego</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane" id="confirm-email">
                                                <div>
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <label for="kycemail-input">Email</label>
                                                                    <input type="email" class="form-control"
                                                                        id="kycemail-input"
                                                                        placeholder="Enter Email Address">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="kycconfirmcode-input">Confirm code</label>
                                                                    <input type="email" class="form-control"
                                                                        id="kycconfirmcode-input"
                                                                        placeholder="Enter Confirm code">
                                                                </div>

                                                                <div class="mb-3">
                                                                    Didn't recieve code ?
                                                                    <button type="button" class="btn btn-link">Resend
                                                                        Code</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="doc-verification">
                                                <h5 class="font-size-14 mb-3">1. Upload a picture of your Identity card / Drivers License or Passport</h5>
                                                <h5 class="font-size-14 mb-3">2. Next upload a picture of yourself holding the ID with todays date written on a piece of paper</h5>
                                                <div class="kyc-doc-verification mb-3">
                                                    <form action="#" class="dropzone">
                                                        <div class="fallback">
                                                            <input name="file" type="file" multiple="multiple">
                                                        </div>
                                                        <div class="dz-message needsclick">
                                                            <div class="mb-3">
                                                                <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                                            </div>

                                                            <h4 class="font-size-14">Upload a picture / Document holding your ID.</h4>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                        <ul class="pager wizard twitter-bs-wizard-pager-link new-formodalbtns">
                                            <li class="previous"><a href="javascript:void(0);" class="btn-pink waves-effect waves-light btn-sm">Previous</a></li>
                                            <li class="next">
                                                <a href="javascript:void(0);" class="btn-green waves-effect waves-light btn-sm" id="noBtnShow">Next</a>
                                                <a href="http://myprojectstaging.com/valyouxmusic/public/form-validation" class="btn-green waves-effect waves-light btn-sm" id="verifyBtn">Verify Account</a>
                                            </li>
                                        </ul>
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
    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

    <!-- wizard js -->
    <script src="<?php echo e(URL::asset('assets/libs/twitter-bootstrap-wizard/twitter-bootstrap-wizard.min.js')); ?>"></script>

    <!-- dropzone js -->
    <script src="<?php echo e(URL::asset('assets/libs/dropzone/dropzone.min.js')); ?>"></script>

    <!-- init js -->
    <script src="<?php echo e(URL::asset('assets/js/pages/crypto-kyc-app.init.js')); ?>"></script>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/crypto-kyc-application.blade.php ENDPATH**/ ?>