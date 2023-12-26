<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.Login'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>

    <body>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
        <div class="row logo-div">
            <div class="col-md-5 col-lg-3">
                <a href="<?php echo e(url('/')); ?>"> <img src="<?php echo e(asset('assets/images/valyou_x_black_logo.svg')); ?>" alt="" class="img-fluid logo-img"></a>
            </div>
        </div>
        <div class="flex h-min80">
            <div class="container m-auto w-min80">
                <div class="row mx-auto">
                    <div class="col-md-6 col-sm-12 col-xs-12 flex">
                        <div class="pl-3 m-auto">
                            <p class="font-weight-bold intro-text">Welcome to <span class="financial_stk">Valyou X</span></p>
                            <p class="lead font-weight-bold text-darkred" >Be the first to know when we launch!</p>
                            <div class="lead ms_desc">If you’re interested in participating as an early adopter, you can fill out the survey and apply to get exclusive access. We have over 50,000+ in our email list would you like to skip the queue?</div>
                            <br>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 ">
                        <div class="p-4">
                            <form class="form-horizontal" method="POST" action="<?php echo e(route('login')); ?>">
                                <p class="lead font-weight-bold">Sign in to continue to Valyou X</p>
                                <?php echo csrf_field(); ?>
                                <div class="form-group spycust">
                                    <input name="email" type="email"
                                            class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  value="<?php echo e(old('email')); ?>" placeholder="E-mail" id="email" autocomplete="email" autofocus>
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="form-group spycust">
                                    <input type="password" name="password"
                                            class="form-control  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            id="userpassword" placeholder="Password">
                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <p class="text-center font-weight-bold">Forget your password ? <a href="password/reset" class="text-primary">Reset Here</a></p>
                                <button type="submit" width="100%" class="btn btn-primary w-full b-shadow font-weight-bold mt-2 mb-5">LOGIN</button>
                            </form>
                            <p class="lead text-center font-weight-bold">Don't have an account ?<a href="<?php echo e(url('register')); ?>"
                                class="font-weight-bold text-primary"> Signup now </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-without-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/auth/login.blade.php ENDPATH**/ ?>