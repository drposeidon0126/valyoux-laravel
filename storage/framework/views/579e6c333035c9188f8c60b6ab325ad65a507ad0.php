<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Toast_UI'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/tui-chart/tui-chart.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('common-components.breadcrumb'); ?>
        <?php $__env->slot('title'); ?> Toast UI Chart <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_1'); ?> Charts <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_2'); ?> Toast UI Chart <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>


    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Bar charts</h4>

                    <div id="bar-charts" dir="ltr"></div>

                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Column charts</h4>

                    <div id="column-charts" dir="ltr"></div>

                </div>
            </div>
        </div> <!-- end col -->

    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Line charts</h4>

                    <div id="line-charts" dir="ltr"></div>
                </div>
            </div>
        </div> <!-- end col -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Area charts</h4>

                    <div id="area-charts" dir="ltr"></div>
                </div>
            </div>
        </div> <!-- end col -->

    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Bubble charts</h4>

                    <div id="bubble-charts" dir="ltr"></div>
                </div>
            </div>
        </div> <!-- end col -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Scatter charts</h4>

                    <div id="scatter-charts" dir="ltr"></div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Pie charts</h4>

                    <div id="pie-charts" dir="ltr"></div>
                </div>
            </div>
        </div> <!-- end col -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Donut pie charts</h4>

                    <div id="donut-charts" dir="ltr"></div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Heatmap charts</h4>

                    <div id="heatmap-charts" dir="ltr"></div>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Treemap charts</h4>

                    <div id="treemap-charts" dir="ltr"></div>
                </div>
            </div>
        </div> <!-- end col -->

    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Map charts</h4>

                    <div id="map-charts" dir="ltr"></div>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Boxplot charts</h4>

                    <div id="boxplot-charts" dir="ltr"></div>
                </div>
            </div>
        </div> <!-- end col -->

    </div>
    <!-- end row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Bullet charts</h4>

                    <div id="bullet-charts" dir="ltr"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Radial charts</h4>

                    <div id="radial-charts" dir="ltr"></div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

    <!-- flot plugins -->
    <script src="<?php echo e(URL::asset('assets/libs/tui-chart/tui-chart.min.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('assets/js/pages/tui-charts.init.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/charts/charts-tui.blade.php ENDPATH**/ ?>