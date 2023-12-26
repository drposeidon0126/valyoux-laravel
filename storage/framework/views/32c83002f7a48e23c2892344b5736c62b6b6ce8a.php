<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Boxicons'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('common-components.breadcrumb'); ?>
        <?php $__env->slot('title'); ?> Boxicons <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_1'); ?> Icons <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_2'); ?> Boxicons <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">
                    <h4 class="card-title">Examples</h4>
                    <p class="card-subtitle mb-4">Use class <code>&lt;i class="bx bx-**">&lt;/i></code></p>

                    <h5>Regular</h5>
                    <div class="row icon-demo-content" id="regular">

                    </div>
                    <!-- end row -->

                    <h5 class="mt-5">Solid Icons</h5>
                    <div class="row icon-demo-content" id="solid">
                    </div>

                    <!-- end row -->
                    <h4 class="mt-5">Logos</h4>
                    <div class="row icon-demo-content" id="logos">
                    </div>
                    <!-- end row -->
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

    <script src="<?php echo e(URL::asset('assets/js/pages/boxicons.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/old/icons-boxicons.blade.php ENDPATH**/ ?>