<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Create_New'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css"
        href="<?php echo e(URL::asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')); ?>">
    <!-- dropzone css -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/dropzone/dropzone.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('common-components.breadcrumb'); ?>
        <?php $__env->slot('title'); ?> Create New <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_1'); ?> Projects <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_2'); ?> Create New <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Create New Project</h4>
                    <form>
                        <div class="form-group row mb-4">
                            <label for="projectname" class="col-form-label col-lg-2">Project Name</label>
                            <div class="col-lg-10">
                                <input id="projectname" name="projectname" type="text" class="form-control"
                                    placeholder="Enter Project Name...">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="projectdesc" class="col-form-label col-lg-2">Project Description</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" id="projectdesc" rows="3"
                                    placeholder="Enter Project Description..."></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label col-lg-2">Project Date</label>
                            <div class="col-lg-10">
                                <div class="input-daterange input-group" data-provide="datepicker"
                                    data-date-format="dd M, yyyy" data-date-autoclose="true">
                                    <input type="text" class="form-control" placeholder="Start Date" name="start" />
                                    <input type="text" class="form-control" placeholder="End Date" name="end" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="projectbudget" class="col-form-label col-lg-2">Budget</label>
                            <div class="col-lg-10">
                                <input id="projectbudget" name="projectbudget" type="text"
                                    placeholder="Enter Project Budget..." class="form-control">
                            </div>
                        </div>
                    </form>
                    <div class="row mb-4">
                        <label class="col-form-label col-lg-2">Attached Files</label>
                        <div class="col-lg-10">
                            <form action="/" method="post" class="dropzone">
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>

                                <div class="dz-message needsclick">
                                    <div class="mb-3">
                                        <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                    </div>

                                    <h4>Drop files here or click to upload.</h4>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-lg-10">
                            <button type="submit" class="btn btn-primary">Create Project</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

    <!-- bootstrap datepicker -->
    <script src="<?php echo e(URL::asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')); ?>"></script>

    <!-- dropzone plugin -->
    <script src="<?php echo e(URL::asset('assets/libs/dropzone/dropzone.min.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/old/projects-create.blade.php ENDPATH**/ ?>