window.dtx = window.dtx || {};
window.dtx["%1$s"] = function(opts) {
    window.<?php echo e(config('datatables-html.namespace', 'LaravelDataTables')); ?> = window.<?php echo e(config('datatables-html.namespace', 'LaravelDataTables')); ?> || {};
    <?php if(isset($editors)): ?>
    <?php $__currentLoopData = $editors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $editor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        var <?php echo e($editor->instance); ?> = window.<?php echo e(config('datatables-html.namespace', 'LaravelDataTables')); ?>["%1$s-<?php echo e($editor->instance); ?>"] = new $.fn.dataTable.Editor(<?php echo $editor->toJson(); ?>);
        <?php echo $editor->scripts; ?>

        <?php $__currentLoopData = (array) $editor->events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo e($editor->instance); ?>.on('<?php echo $event['event']; ?>', <?php echo $event['script']; ?>);
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    return window.<?php echo e(config('datatables-html.namespace', 'LaravelDataTables')); ?>["%1$s"] = $("#%1$s").DataTable($.extend(%2$s, opts));
}
<?php /**PATH /var/www/testvps-main/vendor/yajra/laravel-datatables-html/src/resources/views/function.blade.php ENDPATH**/ ?>