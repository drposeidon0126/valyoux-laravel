<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Pricing'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('common-components.breadcrumb'); ?>
        <?php $__env->slot('title'); ?> Pricing <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_1'); ?> Utility <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_2'); ?> Pricing <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
<style>
    .for-col-margin [class^="col"]{
        margin-bottom: 30px;
    }
    .for-col-margin .plan-box{
        height: 100%;
    }
    .breadcrumb{
        display: none;
    }
    @media (max-width: 575px){
        .pricing-info-top{
            display: none;
        }
    }
</style>
    <div class="row justify-content-center pricing-info-top">
        <div class="col-lg-6">
            <div class="text-center mb-5">
                <h4>Choose your Artist Categories Pricing plan</h4>
                <p class="text-muted">What artist category are you applying for. Please choose. No approval required for Starter Plan</p>
            </div>
        </div>
    </div>

    <div class="row for-col-margin">
        <div class="col-xl-3 col-md-6">
            <div class="card plan-box _1JscEqX4">
                <div class="card-body p-4">
                    <div class="media">
                        <div class="media-body">
                            <h5>Sign an Artist</h5>
                            <p>In Expression of Interest Category</p>
                        </div>
                        <div class="ml-3">
                            <img width="40" src="<?php echo e(asset('assets/images/valyoux/starving_artist_looking_for_a_sponsor_investor.svg')); ?>" alt="">
                        </div>
                    </div>
                    <div class="py-4">
                        <h2><sup><small>$</small></sup> 250</h2>
                    </div>
                    <div class="text-center plan-btn">
                        <a href="<?php echo e(url('crypto-buy-sell')); ?>" class="btn btn-black btn-sm waves-effect waves-light">Sign Artist</a>
                    </div>

                    <div class="plan-features mt-5">
                        <p><i class="bx bx-checkbox-square text-black mr-2"></i> $250 USD Setup & Management</p>
                        <p><i class="bx bx-checkbox-square text-black mr-2"></i> Search for a deal Sponsor / Investor</p>
                        <!--<p><i class="bx bx-checkbox-square text-black mr-2"></i> Negotiate up to 30% on offer</p>-->
                        <p><i class="bx bx-checkbox-square text-black mr-2"></i> You will own 0.0025% of artist brand</p>
                        <p><i class="bx bx-checkbox-square text-black mr-2"></i> Profile Listing in Sign an Artist</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!--<div class="col-xl-3 col-md-6">-->
        <!--    <div class="card plan-box black">-->
        <!--        <div class="card-body p-4">-->
        <!--            <div class="media">-->
        <!--                <div class="media-body">-->
        <!--                    <h5>Sign an Artist</h5>-->
        <!--                    <p>Expression of Interest</p>-->
        <!--                </div>-->
        <!--                <div class="ml-3">-->
        <!--                    <img width="40" src="<?php echo e(asset('assets/images/valyoux/get_signed-on_valyou_x.svg')); ?>" alt="">-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="py-4">-->
        <!--                <h2><sup><small>$</small></sup> 1,000 <span class="font-size-13">Investment Deal Contract (Paid by Sponsor or Investor)</span></h2>-->
        <!--            </div>-->
        <!--            <div class="text-center plan-btn">-->
        <!--                <a href="<?php echo e(url('crypto-buy-sell')); ?>" class="btn btn-success btn-sm waves-effect waves-light">Sign Artist</a>-->
        <!--            </div>-->

        <!--            <div class="plan-features mt-5">-->
        <!--                <p><i class="bx bx-checkbox-square text-white mr-2"></i> $250 USD Setup & Management</p>-->
        <!--                <p><i class="bx bx-checkbox-square text-white mr-2"></i> Deal Sponsor</p>-->
        <!--                <p><i class="bx bx-checkbox-square text-white mr-2"></i> Estimated ROI 30%</p>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        
        <div class="col-xl-3 col-md-6">
            <div class="card plan-box _3JskQp2z">
                <div class="card-body p-4">
                    <div class="media">
                        <div class="media-body">
                            <h5>Sign Artist</h5>
                            <p>With a Starter Pack</p>
                        </div>
                        <div class="ml-3">
                            <img width="40" src="<?php echo e(asset('assets/images/valyoux/valyouxartiststaterpackicon.svg')); ?>" alt="">
                        </div>
                    </div>
                    <div class="py-4">
                        <h2><sup><small>$</small></sup> 1,000 <span class="font-size-13">Investment Deal Contract</span></h2>
                    </div>
                    <div class="text-center plan-btn">
                        <a href="<?php echo e(url('crypto-buy-sell')); ?>" class="btn btn-black btn-sm waves-effect waves-light">Sign Artist</a>
                    </div>

                    <div class="plan-features mt-5">
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i>  $300 USD Setup & Management</p>
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> Trading Investment Pool $700 USD</p>
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> Estimated ROI $190 USD</p>
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> You will own 0.01% of artist brand</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card plan-box _1JscEqX4">
                <div class="card-body p-4">
                    <div class="media">
                        <div class="media-body">
                            <h5>Sign Upcoming Artist</h5>
                            <!--<p>Artist</p>-->
                        </div>
                        <div class="ml-3">
                            <img width="40" src="<?php echo e(asset('assets/images/valyoux/upcomingartistplanicon.svg')); ?>" alt="">
                        </div>
                    </div>
                    <div class="py-4">
                        <h2><sup><small>$</small></sup> 10,000 <span class="font-size-13">Investment Deal Contract</span></h2>
                    </div>
                    <div class="text-center plan-btn">
                        <a href="<?php echo e(url('crypto-buy-sell')); ?>" class="btn btn-black btn-sm waves-effect waves-light">Sign Artist</a>
                    </div>

                    <div class="plan-features mt-5">
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> $3,000 USD Setup & Management</p>
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> Trading Investment Pool $7000 USD</p>
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> Estimated ROI $1,900 USD</p>
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> You will own 0.1% of artist brand</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card plan-box _3JskQp2z">
                <div class="card-body p-4">
                    <div class="media">
                        <div class="media-body">
                            <h5>Sign Professional Artist</h5>
                            <!--<p>Artist</p>-->
                        </div>
                        <div class="ml-3">
                            <img width="40" src="<?php echo e(asset('assets/images/valyoux/professional_artist_icon.svg')); ?>" alt="">
                        </div>
                    </div>
                    <div class="py-4">
                        <h2><sup><small>$</small></sup> 50,000 <span class="font-size-13">Investment Deal Contract</span></h2>
                    </div>
                    <div class="text-center plan-btn">
                        <a href="<?php echo e(url('crypto-buy-sell')); ?>" class="btn btn-black btn-sm waves-effect waves-light">Sign Artist</a>
                    </div>

                    <div class="plan-features mt-5">
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> $15,000 USD Setup & Management</p>
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> Trading Investment Pool $35,000 USD</p>
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> Estimated ROI $9,500 USD</p>
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> You will own 0.5% of artist brand</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card plan-box _1JscEqX4">
                <div class="card-body p-4">
                    <div class="media">
                        <div class="media-body">
                            <h5>Sign Independent Major</h5>
                            <!--<p>Independent</p>-->
                        </div>
                        <div class="ml-3">
                            <img width="40" src="<?php echo e(asset('assets/images/valyoux/major_independent_artist_valyouxmusic.svg')); ?>" alt="">
                        </div>
                    </div>
                    <div class="py-4">
                        <h2><sup><small>$</small></sup> 100,000 <span class="font-size-13">Investment Deal Contract</span></h2>
                    </div>
                    <div class="text-center plan-btn">
                        <a href="<?php echo e(url('crypto-buy-sell')); ?>" class="btn btn-black btn-sm waves-effect waves-light">Sign Artist</a>
                    </div>

                    <div class="plan-features mt-5">
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> $30,000 USD Setup & Management</p>
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> Trading Investment Pool $70,000 USD</p>
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> Estimated ROI $19,500 USD</p>
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> You will own 1% of artist brand</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card plan-box">
                <div class="card-body p-4 _3JskQp2z">
                    <div class="media">
                        <div class="media-body">
                            <h5>Major</h5>
                            <p>Signed Artist</p>
                        </div>
                        <div class="ml-3">
                            <img width="40" src="<?php echo e(asset('assets/images/valyoux/major_independent_artist_valyouxmusic.svg')); ?>" alt="">
                        </div>
                    </div>
                    <div class="py-4">
                        <h2><sup><small>$</small></sup> 100,000 <span class="font-size-13">Investment Deal Contract</span></h2>
                    </div>
                    <div class="text-center plan-btn">
                        <a href="<?php echo e(url('crypto-buy-sell')); ?>" class="btn btn-black btn-sm waves-effect waves-light">Sign Artist</a>
                    </div>

                    <div class="plan-features mt-5">
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> $30,000 USD Setup & Management</p>
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> Trading Investment Pool</p>
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> Estimated ROI $190 USD</p>
                        <p><i class="bx bx-checkbox-square text-white mr-2"></i> You will own 1% of artist brand</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- end row -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/pricing.blade.php ENDPATH**/ ?>