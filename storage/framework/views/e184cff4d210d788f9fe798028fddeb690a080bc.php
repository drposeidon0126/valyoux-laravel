<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.Login'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>

    <body>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
        <div class="home-btn d-none d-sm-block">
            <a href="<?php echo e(url('index')); ?>" class="text-dark"><i class="fas fa-home h2"></i></a>
        </div>
        <div class="account-pages mt-20">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-soft-primary">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="assets/images/valyou_x_black_logo.svg" alt="" class="img-fluid logo-img">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body ac-card-body pt-0">
                                <div class="text-center mt-20">
                                    <h3 class="cb-new-heading">Choose user option </h3>
                                </div>
                                <div class="p-2">
                                    <form class="form-horizontal" method="POST" action="<?php echo e(route('account.update',[auth()->user()->id])); ?>">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>
                                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="radio-wrap">
                                            <input type="radio" id="artist<?php echo e($id); ?>" name="role_id" required value="<?php echo e($id); ?>">
                                            <label for="artist<?php echo e($id); ?>"><span> <?php echo e($role); ?></span></label>
                                            <div class="check <?php if($id === 2): ?> c-green <?php elseif($id === 3): ?> c-pink <?php elseif($id === 4): ?> c-blue <?php endif; ?>"></div>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        <div class="mt-3">
                                            <button class="btn-block waves-effect waves-light btn-right" type="submit"><img width="120" src="<?php echo e(asset('assets/images/goto-btn.svg')); ?>" class="rotate-btn-270" alt="">
                                            </button>
                                            <p class="next-text">Next</p>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <h5 class="font-size-14 mb-3 color-black">You will still be able to switch between accounts</h5>
                                        </div>

                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-without-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/auth/account.blade.php ENDPATH**/ ?>