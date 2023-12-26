<?php $__env->startSection('title'); ?> <?php echo e(trans('global.edit')); ?> <?php echo e($title); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <!-- Dropify css -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/libs/dropify/css/dropify.min.css')); ?>">
    <!-- Select2 css -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/select2/select2.min.css')); ?>">
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

                    <form method="POST" action="<?php echo e(route('admin.'.request()->segment(1).'.update', [$user->id])); ?>" class="custom-validation" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="form-group">
                            <label class="required" for="permissions">Select Roles</label>
                            <div style="padding-bottom: 4px">
                                <span class="btn btn-info btn-xs select-all" style="border-radius: 0">Select All</span>
                                <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">Deselect All</span>
                            </div>
                            <select class="form-control select2 <?php echo e($errors->has('roles') ? 'parsley-error' : ''); ?>" name="roles[]" id="roles" multiple required>
                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $roles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($id); ?>" <?php echo e((in_array($id,old('roles',[])) || $user->roles->contains($id)) ? 'selected' : ''); ?>><?php echo e($roles); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php if($errors->has('roles')): ?>
                                <span class="text-danger"><?php echo e($errors->first('roles')); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label><?php echo e(ucwords(str_replace('_',' ','first_name'))); ?></label>
                            <input type="text" class="form-control <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> parsley-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required value="<?php echo e(old('first_name', !empty($user->first_name) ? $user->first_name : '')); ?>" name="first_name" id="first_name" placeholder="<?php echo e(ucwords(str_replace('_',' ','first_name'))); ?>"/>
                            <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label><?php echo e(ucwords(str_replace('_',' ','last_name'))); ?></label>
                            <input type="text" class="form-control <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> parsley-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required value="<?php echo e(old('last_name', !empty($user->last_name) ? $user->last_name : '')); ?>" name="last_name" id="last_name" placeholder="<?php echo e(ucwords(str_replace('_',' ','last_name'))); ?>"/>
                            <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label><?php echo e(ucwords(str_replace('_',' ','email'))); ?></label>
                            <input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> parsley-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required value="<?php echo e(old('email', !empty($user->email) ? $user->email : '')); ?>" name="email" id="email" placeholder="<?php echo e(ucwords(str_replace('_',' ','email'))); ?>"/>
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label><?php echo e(ucwords(str_replace('_',' ','dob'))); ?></label>
                            <input type="date" class="form-control" required value="<?php echo e(old('dob', !empty($user->dob) ? $user->dob : '')); ?>" name="dob" id="dob" placeholder="<?php echo e(ucwords(str_replace('_',' ','dob'))); ?>"/>
                        </div>
                        <label for="">Enable Two Factor Authentication</label>
                        <div class="form-group">
                            <input type="checkbox" id="switch1" switch="none" name="is_authenticate" value="1" <?php echo e(($user->is_authenticate === 1) ? 'checked' : ''); ?> />
                            <label for="switch1" data-on-label="On" data-off-label="Off"></label>
                        </div>
                        <div class="card">
                            <div class="body">
                                <input type="file" id="avatar" class="dropify" name="avatar">
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
    <script src="<?php echo e(URL::asset('assets/libs/select2/select2.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script-bottom'); ?>
    <script>
        $(function () {
            let imagenUrl = `<?php echo e(asset($user->avatar ?? 'assets/images/users/avator.png')); ?>`;
            let drEvent = $('#avatar').dropify(
                {
                    defaultFile: imagenUrl
                });
            $('.select2').select2();
            $(document).on('click','.select-all',function(){
                $(this).parent().siblings('.select2').find('option').prop('selected','selected').trigger('change');
            })
            $(document).on('click','.deselect-all',function(){
                $(this).parent().siblings('.select2').find('option').prop('selected','').trigger('change');
            })
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/admin/user/edit.blade.php ENDPATH**/ ?>