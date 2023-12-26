<?php $__env->startComponent('mail::message'); ?>
# Earn Reward

<?php echo e(Auth::user()->first_name); ?> <?php echo e(Auth::user()->last_name); ?> is paying you $<?php echo e($request['quantity2']); ?> to listen to his song. listen and earn money on Valyou X .


<?php $__env->startComponent('mail::button', ['url' => '']); ?>
    Click here to listen song
<?php echo $__env->renderComponent(); ?>


Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH /var/www/testvps-main/resources/views/emails/promotesong.blade.php ENDPATH**/ ?>