<?php if(!empty($followers_list)): ?>
    <?php if($totalnumber>10): ?>
        <?php unset($followers_list[$totalnumber-1]); ?>
    <?php endif; ?>
              
    <?php $__currentLoopData = $followers_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <?php
            $photo = $a->b_photo?$a->b_photo:$a->photo;
            $brand = $a->b_brand?$a->b_brand:$a->brand;
            $about = $a->b_about?$a->b_about:$a->about;

            if($a->user_role == 3 || $a->user_role == 4){
                $url ='artist/profile/'.$a->following_id;
            }else if($a->user_role == 2){
                $url ='artist/profile/'.$a->follower_id;
            }
        ?>

                            <div class="col-12">
                            <div class="follow-profile">
                                <img src="<?php echo e('public/'.$photo); ?>" class="rounded-circle" alt="">
                            <div class="sph-text">

                                    <a href="<?php echo e($url); ?>">
                                    <h4><?php echo e($brand); ?></h4></a>
                                    <span style="margin-top: 10px;"><?php echo e($about); ?></span>
                                    </div>

                                    
                                <?php if($a->request_status == 1): ?>
                                    <a href="javascript:void(0);" id="<?php echo e($a->following_id); ?>" follower_id="<?php echo e($a->id); ?>" class="sph-button following">Following</a>
                                <?php else: ?>
                                <a href="" class="sph-button">Following</a>
                                <?php endif; ?>
                            </div>
                        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php else: ?>
    <tr class="text-center"><td colspan="8">You haven’t yet Invested or purchased stocks in any music artist brands listed on Valyou X. Please visit the market page to begin.</td></tr>
<?php endif; ?>
            
<?php if($totalnumber>10): ?>
    <a style="margin-top: 10%;font-size: 20px;" href="javascript:void(0);" data-id="<?php echo e($last_id); ?>" data-follower="1"  class="text-success loadbtn1 loadbtn-mobile">Load more </a>';
<?php endif; ?>


<?php /**PATH /var/www/testvps-main/resources/views/partician/follower_list_by_role.blade.php ENDPATH**/ ?>