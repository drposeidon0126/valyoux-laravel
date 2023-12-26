<?php $__env->startComponent('mail::message'); ?>

Your 0.02VXD has been deducted from your wallet. your remaining balance is <?php echo e((float)auth()->user()->wallet - 0.02); ?>


<?php $__env->startComponent('mail::button', ['url' => '']); ?>
Button Text
<?php echo $__env->renderComponent(); ?>

Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH /var/www/testvps-main/resources/views/emails/valyousong.blade.php ENDPATH**/ ?>