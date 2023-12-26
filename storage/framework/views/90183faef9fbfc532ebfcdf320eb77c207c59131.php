<?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="vw_single" >
    <div class="vws_video col-lg-6">



        <?php if(empty($user_id)): ?>
            <a href="watch?vid=<?php echo e(isset($row->id)?$row->id:''); ?>">
        <?php else: ?>
            <a href="socialmedia/details/<?php echo e(isset($row->id)?$row->id:''); ?>">
        <?php endif; ?>
            <?php if($row->audio_cover_image): ?>
                <img class="my-video" src="<?php echo e(asset($row->audio_cover_image)); ?>">
            <?php else: ?>
                <video class = "my-video" controlsList="nodownload" src="<?php echo e(asset($row->name).'#t=0.001'); ?>" type="video/mp4"></video>
            <?php endif; ?>
        </a>

    </div>
    <div class="vws_caption col-lg-6">
        <h5>
        <?php if(empty($user_id)): ?>
            <a href="watch?vid=<?php echo e(isset($row->id)?$row->id:''); ?>">
        <?php else: ?>
            <a href="socialmedia/details/<?php echo e(isset($row->id)?$row->id:''); ?>">
        <?php endif; ?>

        <?php echo e(isset($row->artist->brand)?$row->artist->brand:''); ?></a></h5>
        <p><?php echo e(isset($row->artist->about)?$row->artist->about:''); ?></p>
        <p class="font-size-12">Song Valyou: $<?php echo e(numberformat(@$row->artist->stock_value)); ?></p>
        <p class="font-size-12"><?php echo e(videoCount($row->id)); ?> views <?php echo e(time_format($row->created_at)); ?></p>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /var/www/testvps-main/resources/views/partician/all_videos_right_section.blade.php ENDPATH**/ ?>