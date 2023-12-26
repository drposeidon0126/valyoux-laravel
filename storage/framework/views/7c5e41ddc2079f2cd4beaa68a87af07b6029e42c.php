<?php $__env->startSection('pageCSS'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/dropzone/dropzone.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <!-- Dropify css -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/libs/dropify/css/dropify.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>  <?php echo e($title); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('common-components.breadcrumb'); ?>
        <?php $__env->slot('title'); ?> <?php echo e(request()->segment(3)." ".$title); ?> <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_1'); ?> <?php echo e($title); ?> <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_2'); ?> <?php echo e(trans('global.edit')); ?> <?php echo e($title); ?> <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
<style>
.progress, .progress-bar {
    height: 25px;
    
}
.progress-bar {
background-color: #2ccb5a;
}
    .cover-image, .co-owner{
        display:none;
    }
    .video {
    max-height: 100px;
}
</style>
<?php  if($video->copyright != 'No' && $video->type == '1'){ ?>
   <style>
    .cover-image, .co-owner{
        display:block;
    }
    </style>
<?php } ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
               
            <form id="upload_media" method="POST" onsubmit="event.preventDefault();uploadMedia(this)" action="<?php echo e(route('admin.upload')); ?>" class="custom-validation" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                <input type="hidden" name="id" value="<?php echo e($video->id); ?>">
                <div class="card-body">
                <div class="form-group col-lg-12">
                        <h4 class="card-title">Is this an Audio Track or Music Video?</h4> 
                          <select name="type" id="type" onchange="checkMediaType(this.value)" class="form-control select2" required>
                            <option <?php echo ($video->type == '2')?"selected":''; ?> value="2">Music Video</option>
                            <option <?php echo ($video->type == '1')?"selected":''; ?> value="1">Audio Track</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-12 cover-image">
                        <h4 class="card-title">Song Title</h4>
                         <input type="text" id="audio_title" name="audio_title" class="form-control" value="<?php echo e($video->audio_title); ?>" required>
                    </div>
                    <div class="form-group col-lg-12 cover-image">
                        <h4 class="card-title">Singer</h4>
                         <input type="text" id="singer" name="singer" class="form-control" value="<?php echo e($video->singer); ?>" required>
                    </div> 
                    <div class="form-group col-lg-12 cover-image">
                        <h4 class="card-title">Music By</h4>
                         <input type="text" id="music_by" name="music_by" class="form-control" value="<?php echo e($video->music_by); ?>" required>
                    </div>
                     <div class="form-group col-lg-12 cover-image">
                        <h4 class="card-title">Star Cast</h4>
                         <input type="text" id="starcast" name="starcast" class="form-control" value="<?php echo e($video->starcast); ?>" required>
                    </div>

                    <div class="form-group col-lg-12">
                        <h4 class="card-title">Description</h4>
                         <textarea id="description"  value="<?php echo e($video->description); ?>" name="description" class="form-control" required><?php echo e($video->description); ?></textarea>
                    </div>
                    <div class="form-group col-lg-12">
                        <div class="row">
                    <div class="col-md-6">
                    <h4 class="card-title">Upload File</h4>
                    <?php if($video->type == 2 && !empty($video->name)){ ?>
                        <video controlsList="nodownload" id="video" src="<?php echo e(asset($video->name)); ?>" class="video"  type="video/mp4"   controls  playsinline ></video>
                    <?php } else if($video->type == 1 && !empty($video->name)) { ?>
                        <audio controlsList="nodownload" controls><source src="<?php echo e(asset($video->name)); ?>" type="audio/mpeg"></audio>
                    <?php } ?>
                         <div class="card">
                                <div class="body">
                                    <input type="file" id="name" class="dropify" name="name" accept=".mp4,.mp3" required>
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
                        </div>
                   
                    <div class="col-md-6 cover-image">
                    <h4 class="card-title">Upload Audio Cover Image</h4>
                    <?php if($video->type == 1 && !empty($video->audio_cover_image)): ?>
                    <div>
                    <img style="height: 50px;width: 50px;" src="<?php echo e(asset($video->audio_cover_image)); ?>">
                    </div>
                    <?php endif; ?>
                    <div class="card">
                            <div class="body">
                                <input type="file"  class="dropify" name="audio_cover_image">
                                <?php $__errorArgs = ['audio_cover_image'];
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
                        </div>
                        </div>
                    <br>

                   
                <div>
                
                        <label>We take copyrights seriously. Are you entitled to 100 percent of the royalties and ownership of this song?</label>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input onclick="checkCopyright(this.value)" class="form-check-input" <?php echo ($video->copyright == 'Yes')?"checked":''; ?> type="radio" name="copyright" id="copyright1" value="Yes">
                                <label class="form-check-label" for="copyright1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input onclick="checkCopyright(this.value)" class="form-check-input" <?php echo ($video->copyright == 'No')?"checked":''; ?> type="radio" name="copyright" id="copyright2" value="No">
                                <label class="form-check-label" for="copyright2">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input onclick="checkCopyright(this.value)" class="form-check-input" <?php echo ($video->copyright == 'Co-owner')?"checked":''; ?> type="radio" name="copyright" id="copyright3" value="Co-owner">
                                <label class="form-check-label" for="copyright3">Co-owner</label>
                            </div>
                        </div>
                        <div class="form-group  co-owner">
                            <label>If you are a co owner the song, how many percent of the revenue are you entitled to?</label>
                            <input type="text" value="<?php echo e($video->copyright_text); ?>" name="copyright_text" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Who else is entitled to royalties or earnings from the song ? e.g Songwriter, Producer, Band member</label>
                            <input type="text" value="<?php echo e($video->earning_user); ?>" name="earning_user" class="form-control" placeholder="Please input their name" required/>
                        </div>
                        <div class="form-group">
                            <label>Please input their email address. Please invite them to Valyou X to claim their earnings</label>
                            <input type="text" value="<?php echo e($video->invite_email); ?>" name="invite_email" class="form-control" placeholder="Please input their email address. Please invite them to Valyou X to claim their earnings" required/>
                        </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-12">

                    <button style="background-color: #000000; color: #FF4680" type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                  
                   <!--  <div id="uploadStatus"></div> -->
                </div>
                </div>

                <br>
                    <div class="progress">
                        <div class="progress-bar"></div>
                    </div>
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
        function checkMediaType(value){
            if(value==1){
                $('.cover-image').show();
            }else{
                $('.cover-image').hide();
            }
        }
        function checkCopyright(type){
           
            if(type == 'Co-owner' || type == 'Yes'){
            $('.co-owner').show();
            }else{
                $('.co-owner').hide();
            }
        }
       
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/admin/media/edit-media.blade.php ENDPATH**/ ?>