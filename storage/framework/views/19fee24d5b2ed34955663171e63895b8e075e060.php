        <!-- JAVASCRIPT -->
        <script src="<?php echo e(URL::asset('assets/libs/jquery/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/libs/bootstrap/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/libs/metismenu/metismenu.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/libs/simplebar/simplebar.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/libs/node-waves/node-waves.min.js')); ?>"></script>
        <!-- Sweet Alerts js -->
        <script src="<?php echo e(URL::asset('assets/libs/sweetalert2/sweetalert2.min.js')); ?>"></script>

        <?php echo $__env->yieldContent('script'); ?>
        <!-- App js -->

        <script src="<?php echo e(URL::asset('assets/js/app.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/js/app.js')); ?>"></script>


        <?php if(session()->has('success')): ?>
            <script type="text/javascript">js_success("<?php echo e(session('success')); ?>")</script>
        <?php endif; ?>
        <?php if(session()->has('error')): ?>
            <script type="text/javascript">js_error("<?php echo e(session('error')); ?>")</script>
        <?php endif; ?>
        <?php if(session()->has('notify')): ?>
            <script type="text/javascript">js_notify("<?php echo e(session('notify')); ?>","<?php echo e(session('url')); ?>","<?php echo e(session('button')); ?>")</script>
        <?php endif; ?>

        <?php echo $__env->yieldContent('script-bottom'); ?>
<?php /**PATH /var/www/testvps-main/resources/views/layouts/footer-script.blade.php ENDPATH**/ ?>