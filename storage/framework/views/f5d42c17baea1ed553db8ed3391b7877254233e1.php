<?php $__env->startSection('title'); ?> <?php echo e(trans('global.edit')); ?> <?php echo e($title); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <!-- Dropify css -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/libs/dropify/css/dropify.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('common-components.breadcrumb'); ?>
        <?php $__env->slot('title'); ?> <?php echo e(request()->segment(3)." ".$title); ?> <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_1'); ?> <?php echo e($title); ?> <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_2'); ?> <?php echo e(trans('global.edit')); ?> <?php echo e($title); ?> <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <!-- end row -->
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                    <form method="POST" action="<?php echo e(route('admin.upload')); ?>" class="custom-validation" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="<?php echo e($video->id); ?>">
                        <div class="form-group">
                            <label><?php echo e(ucwords(str_replace('_',' ','description'))); ?></label>
                            <textarea class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> parsley-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required name="description" id="description" value="<?php echo e($video->description); ?>" placeholder="<?php echo e(ucwords(str_replace('_',' ','description'))); ?>"><?php echo e($video->description); ?></textarea>
                            <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-red"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <?php if($video->type == 2): ?>
                        <video id="video" src="<?php echo e(asset($video->name)); ?>" class="video"  type="video/mp4"   controls  playsinline ></video>
                        <?php else: ?>
                        <audio controls><source src="<?php echo e(asset($video->name)); ?>" type="audio/mpeg"></audio>
                        <?php endif; ?>
                        <div class="card">
                            <div class="body">
                                <input type="file" id="name" class="dropify" name="name">
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-red"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('assets/libs/parsleyjs/parsleyjs.min.js')); ?>"></script>
    <!-- Plugins js -->
    <script src="<?php echo e(URL::asset('assets/js/pages/form-validation.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/dropify/js/dropify.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script-bottom'); ?>
    <script>
        $(function () {
            $('.dropify').dropify();
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/admin/media/edit-video.blade.php ENDPATH**/ ?>