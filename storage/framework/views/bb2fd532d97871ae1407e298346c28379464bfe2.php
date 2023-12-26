<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Buy_Sell'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('common-components.breadcrumb'); ?>
        <?php $__env->slot('title'); ?> Payment Method <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_1'); ?> Crypto <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_2'); ?> Payment Method <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

<style>
    .new-select{
        background: transparent;
        border: 1px solid #ced4da;
    }
</style>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Crypto Payment Accepted Only</h4>
                    <div class="crypto-buy-sell-nav">

                        <div class="crypto-buy-sell-nav-content p-4">
                            <form>
                                <div class="mb-2">
                                    <label>Payment method :</label> <br>
                                    <label>Your account will be credited in VXD</label>
                                    <div class="row">
<!--                                         <div class="col-xl-3 col-sm-4"> -->
<!--                                             <label class="card-radio-label mb-3">
                                                <input type="radio" name="pay-method" id="pay-methodoption1"
                                                       class="card-radio-input">

                                                <div class="card-radio">
                                                    <i class="fab fa-cc-mastercard font-size-24 text-pink align-middle mr-2"></i>
                                                    <span>Credit / Debit Card</span>
                                                </div>
                                            </label> -->
<!--                                         </div> -->


                                       
										<div class="col-xl-4 col-sm-4">
                                            <label class="card-radio-label mb-3">
                                                <input type="radio" name="pay-method" id="buycurrencyoption1"
                                                       class="card-radio-input">
                                                <div class="card-radio">
                                                    <img width="25" src="<?php echo e(asset('assets/images/valyoux/usdc_icon.png')); ?>" class="align-middle mr-2">
                                                    <span>USDC</span>
                                                </div>
                                            </label>
                                        </div>

                                        <div class="col-xl-4 col-sm-4">
                                            <label class="card-radio-label mb-3">
                                                <input type="radio" name="pay-method" id="buycurrencyoption1"
                                                       class="card-radio-input">
                                                <div class="card-radio">
                                                    <img width="25" src="<?php echo e(asset('assets/images/valyoux/vxd.png')); ?>" class="align-middle mr-2">
                                                    <span>VXD</span>
                                                </div>
                                            </label>
                                        </div>
                                    	 <div class="col-xl-4 col-sm-4">
                                            <label class="card-radio-label mb-3">
                                                <input type="radio" name="pay-method" id="pay-methodoption3"
                                                       class="card-radio-input" checked>

                                                <div class="card-radio">
                                                	<img width="25" src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" class="align-middle mr-2">
                                                    <span>Valyou X</span>
                                                </div>
                                            </label>
                                        </div>
<!--                                         <div class="col-xl-2 col-sm-4">
                                            <label class="card-radio-label mb-3">
                                                <input type="radio" name="pay-method" id="buycurrencyoption1"
                                                       class="card-radio-input">
                                                <div class="card-radio">
                                                    <i class="fab fa-bitcoin font-size-24 text-pink align-middle mr-2"></i>
                                                    <span>Bitcoin</span>
                                                </div>
                                            </label>
                                        </div> -->

<!--                                         <div class="col-xl-2 col-sm-4">
                                            <label class="card-radio-label mb-3">
                                                <input type="radio" name="pay-method" id="buycurrencyoption2"
                                                       class="card-radio-input">
                                                <div class="card-radio">
                                                    <i class="fab fa-ethereum font-size-24 text-pink align-middle mr-2"></i>
                                                    <span>Ethereum</span>
                                                </div>
                                            </label>
                                        </div> -->

                                      

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Conversion :</label>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="input-group mb-2 currency-value">
                                                <div class="input-group-prepend">
                                                    <select name="" id="" class="new-select">
                                                        <option value="">USDC</option>
                                                        <option value="">VXD</option>
                                                    	<option value="">Valyou X</option>
                                                    </select>
                                                </div>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="input-group mb-2">
                                                <input type="text" class="form-control text-sm-right">

                                                <div class="input-group-append">
                                                    <select name="" id="" class="new-select">
                                                        <option value="">USDC</option>
                                                        <option value="">VXD</option>
                                                    	<option value="">Valyou X</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center mt-4">
                                    <a href="qr-code" class="btn btn-v-green">Proceed</a>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- end row -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/currency-exchange.blade.php ENDPATH**/ ?>