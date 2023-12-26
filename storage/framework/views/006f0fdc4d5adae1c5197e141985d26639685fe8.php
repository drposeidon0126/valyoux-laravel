<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Google_Maps'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('common-components.breadcrumb'); ?>
        <?php $__env->slot('title'); ?> Google Maps <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_1'); ?> Maps <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_2'); ?> Google Maps <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Markers</h4>
                    <p class="card-title-dsec">Example of google maps.</p>

                    <div id="gmaps-markers" class="gmaps"></div>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Overlays</h4>
                    <p class="card-title-desc">Example of google maps.</p>

                    <div id="gmaps-overlay" class="gmaps"></div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Street View Panoramas</h4>
                    <p class="card-title-desc">Example of google maps.</p>

                    <div id="panorama" class="gmaps-panaroma"></div>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Map Types</h4>
                    <p class="card-title-desc">Example of google maps.</p>

                    <div id="gmaps-types" class="gmaps"></div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

    <!-- google maps api -->
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>

    <!-- Gmaps file -->
    <script src="<?php echo e(URL::asset('assets/libs/gmaps/gmaps.min.js')); ?>"></script>

    <!-- Init js-->
    <script src="<?php echo e(URL::asset('assets/js/pages/gmaps.init.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/old/maps-google.blade.php ENDPATH**/ ?>