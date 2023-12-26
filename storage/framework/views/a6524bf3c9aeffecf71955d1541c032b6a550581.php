<?php $__env->startSection('title'); ?>
404 Error Page
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
<body>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

        <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mb-5">
                            <h1 class="display-2 font-weight-medium">4<i class="bx bx-buoy bx-spin text-primary display-3"></i>4</h1>
                            <h4 class="text-uppercase">Sorry, page not found</h4>
                            <div class="mt-5 text-center">
                                <a class="btn btn-primary waves-effect waves-light" href="index">Back to Dashboard</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8 col-xl-6">
                        <div>
                            <img src="assets/images/error-img.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-without-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\task\Current\Valyou X\new work(12.6)\valyoux_backend(12.7)\valyoux_backend\valyoux_backend\resources\views/errors/404.blade.php ENDPATH**/ ?>