<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Editors'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <!-- Summernote css -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/summernote/summernote.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('common-components.breadcrumb'); ?>
        <?php $__env->slot('title'); ?> Form Editors <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_1'); ?> Forms <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_2'); ?> Form Editors <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Tinymce wysihtml5</h4>
                    <p class="card-title-desc">Bootstrap-wysihtml5 is a javascript
                        plugin that makes it easy to create simple, beautiful wysiwyg editors
                        with the help of wysihtml5 and Twitter Bootstrap.</p>

                    <form method="post">
                        <textarea id="elm1" name="area"></textarea>
                    </form>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Summernote</h4>
                    <p class="card-title-desc">Super simple wysiwyg editor on bootstrap</p>

                    <div class="summernote">Hello Summernote</div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

    <!--tinymce js-->
    <script src="<?php echo e(URL::asset('assets/libs/tinymce/tinymce.min.js')); ?>"></script>

    <!-- Summernote js -->
    <script src="<?php echo e(URL::asset('assets/libs/summernote/summernote.min.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('assets/js/pages/form-editor.init.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/form/form-editors.blade.php ENDPATH**/ ?>