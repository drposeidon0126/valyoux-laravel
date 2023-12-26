<?php
use App\Models\VipPoints;
?>
<?php if(!empty($following_list)): ?>
    <?php if($totalnumber1>10): ?>
        <?php    unset($following_list[$totalnumber1-1]); ?>
    <?php endif; ?>
    <?php $__currentLoopData = $following_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $vip_user = '';
            $photo = $a->b_photo?$a->b_photo:$a->photo;
            $brand = $a->b_brand?$a->b_brand:$a->brand;
            $about = $a->b_about?$a->b_about:$a->about;
            if($a->user_role == 3){
            $vip_user = VipPoints::checkVipUser($a->follower_id,$artist_id);
            $photo = $a->avatar;
            $brand = $a->first_name .' '. $a->last_name ;
            $about = 'Investor';
            $url ='investor';
            // $url ='valyou-playlist';
            }else if($a->user_role == 4){
                $url='business-profile';
            }else if($a->user_role == 2){
            $url ='artist/profile/'.$a->following_id;
            }else{
            $url ='admin-profile';
            }
        ?>
        <div class="col-12">
                    <div class="follow-profile">
                <a href="<?php echo e($url); ?>"><img src="<?php echo e('public/'.$photo); ?>" class="rounded-circle" alt=""></a>
        <div class="sph-text">
                    <a href="<?php echo e($url); ?>">
                <h4><?php echo e($brand); ?></h4></a>
                <span><?php echo e($about); ?></span>
                </div>
            <?php if($a->request_status == 1): ?>
                <?php if($vip_user == 1): ?>
                    <a href="javascript:void(0);" class="sph-button">VIP</a>&nbsp;
                <?php endif; ?>
                <a href="javascript:void(0);" id="<?php echo e($a->following_id); ?>" follower_id="<?php echo e($a->id); ?>" class="sph-button following">Follower</a>
            <?php else: ?>
                <a href="" class="sph-button">Following</a>
            <?php endif; ?>
        </div>
            </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
    <tr class="text-center"><td colspan="8">You are not following any music artist brands, Investors or Businesses yet. This brand has no music artist brands , investors or businesses following yet.</td></tr>
<?php endif; ?>
<?php if($totalnumber1>10): ?>
    <a  style="margin-top: 10%;font-size: 20px;"href="javascript:void(0);" data-id="<?php echo e($last_id); ?>" data-follower="2" class="text-success loadbtn loadbtn-mobile">Load more </a>
<?php endif; ?><?php /**PATH /var/www/testvps-main/resources/views/partician/following_list.blade.php ENDPATH**/ ?>