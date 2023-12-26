<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Colors'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <?php $__env->startComponent('common-components.breadcrumb'); ?>
        <?php $__env->slot('title'); ?> Colors <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_1'); ?> UI Elements <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_2'); ?> Colors <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body text-center">
                    <div class="color-box bg-primary p-4 rounded">
                        <h5 class="my-2 text-white">#556ee6</h5>
                    </div>
                    <h5 class="mb-0 mt-3 text-primary">Primary</h5>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body text-center">
                    <div class="color-box bg-success p-4 rounded">
                        <h5 class="my-2 text-white">#34c38f</h5>
                    </div>
                    <h5 class="mb-0 mt-3 text-success">Success</h5>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body text-center">
                    <div class="color-box bg-info p-4 rounded">
                        <h5 class="my-2 text-white">#50a5f1</h5>
                    </div>
                    <h5 class="mb-0 mt-3 text-info">Info</h5>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body text-center">
                    <div class="color-box bg-warning p-4 rounded">
                        <h5 class="my-2 text-white">#f1b44c</h5>
                    </div>
                    <h5 class="mb-0 mt-3 text-warning">Warning</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body text-center">
                    <div class="color-box bg-danger p-4 rounded">
                        <h5 class="my-2 text-white">#f46a6a</h5>
                    </div>
                    <h5 class="mb-0 mt-3 text-danger">Danger</h5>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body text-center">
                    <div class="color-box bg-dark p-4 rounded">
                        <h5 class="my-2 text-light">#343a40</h5>
                    </div>
                    <h5 class="mb-0 mt-3 text-dark">Dark</h5>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body text-center">
                    <div class="color-box bg-secondary p-4 rounded">
                        <h5 class="my-2 text-light">#74788d</h5>
                    </div>
                    <h5 class="mb-0 mt-3 text-muted">Secondary</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/UI/ui-colors.blade.php ENDPATH**/ ?>