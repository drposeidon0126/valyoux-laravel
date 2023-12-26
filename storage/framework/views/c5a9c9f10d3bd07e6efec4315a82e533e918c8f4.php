<?php if(!empty($vip_list)): ?>
    <?php if($totalnumber>10): ?>
        <?php unset($vip_list[$totalnumber-1]); ?>
    <?php endif; ?>
    <?php $__currentLoopData = $vip_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
                        $photo = $a->avatar?$a->avatar:$a->avatar;
                        $brand = $a->first_name .' '. $a->last_name ;
                        $url = '';
    ?>

                        <div class="col-12">
                         <div class="follow-profile">
                            <img src="<?php echo e('public/'.$photo); ?>" class="rounded-circle" alt="">
                        <div class="sph-text">

                                <a href="<?php echo e($url); ?>">
                                <h4><?php echo e($brand); ?></h4></a>

                                <span style="margin-top: 10px;">VIP POINTS : <?php echo e($a->total_points); ?></span>
                                </div>

                               <a href="javscript:void(0);" class="sph-button">VIP</a>

                        </div>
                            </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   
<?php else: ?>
    <tr class="text-center"><td colspan="8">You haven’t yet Invested or purchased stocks in any music artist brands listed on Valyou X. Please visit the market page to begin.</td></tr>
<?php endif; ?>
            
<?php if($totalnumber>10): ?>
    <a style="margin-top: 10%;font-size: 20px;" href="javascript:void(0);" data-id="<?php echo e($last_id); ?>" data-follower="1"  class="text-success loadbtn1 loadbtn-mobile">Load more </a>
<?php endif; ?>


<?php /**PATH /var/www/testvps-main/resources/views/partician/vip_list.blade.php ENDPATH**/ ?>