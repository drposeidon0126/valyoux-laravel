<?php $__env->startSection('pageCSS'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?> Artist <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

  <?php echo $__env->make('layouts.inner-navigation',['artist' => $artist], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 
<div class="row">
         <?php echo $__env->make('layouts.profile-box',['artist'=>$artist], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     </div>
<div class="followers-wrapper-main">
    <div class="container mb-3 mt-3">
    <div class="nav nav-tabs tab-select" id="nav-tab" role="tablist">
        <a class="active" id="nav-follower-tab" data-toggle="tab" href="#nav-follower" role="tab" aria-controls="nav-home" aria-selected="true">Followers<span class="total_follower"><span></a>
        <a class="" id="nav-following-tab" data-toggle="tab" href="#nav-following" role="tab" aria-controls="nav-profile" aria-selected="false">Following<span class="total_following"><span></a>
        <a class="" id="nav-vip-tab" data-toggle="tab" href="#nav-vip" role="tab" aria-controls="nav-contact" aria-selected="false">VIP</a>
         </a>
    </div>
      <br>
  
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="nav-follower" role="tabpanel" aria-labelledby="nav-follower-tab">
        <div class="row follower_list">
         </div>
      </div>
       <div class="tab-pane fade" id="nav-following" role="tabpanel" aria-labelledby="nav-following-tab">
        <div class="row following_list">
            </div>
        </div>
      <div class="tab-pane fade " id="nav-vip" role="tabpanel" aria-labelledby="nav-vip-tab">
            VIP  
      </div>
      
	</div>
</div>

<div class="row bs-float-parent">
        <?php echo $__env->make('layouts.stock-price',['artist'=>$artist], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?> 
<script>
    $(document).ready(function(){
      loadMoreData(0,<?= $artist['id'] ?>,1);
      loadFollowersData(0,<?= $artist['id'] ?>,2);
    
    function loadFollowersData(page,artist_id,follow_type){
       $.ajax({
        url : "getfollowerlist",
        type: "GET",
        cache:false,
        data:{offset:page,artist_id:artist_id,follow_type:follow_type},
        success:function(data){
          if (data) {
            $(".loadbtn").hide();
              const data1 = JSON.parse(data);
              console.log(data1.total_follower);
              $(".follower_list").append(data1.follower_list);
              $(".total_follower").html('('+data1.total_follower+')');
             
          }
        }
      });
    }
    $(document).on('click', '.loadbtn', function(){
        $(".loadbtn").html('<i class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Loading...');
       
        var pId = $(this).data("id");
        loadMoreData(pId,<?= $artist['id'] ?>,1);
      });

      function loadMoreData(page,artist_id,follow_type){
        $.ajax({
          url : "getfollowerlist",
          type: "GET",
          cache:false,
          data:{offset:page,artist_id:artist_id,follow_type:follow_type},
          success:function(data){
            if (data) {
              $(".loadbtn").hide();
                const data1 = JSON.parse(data);
                $(".following_list").append(data1.following_list);
                $(".total_following").html('('+data1.total_following+')');
                
            }
          }
        });
      }
    $(document).on('click', '.loadbtn1', function(){
        $(".loadbtn").html('<i class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Loading...');
       
        var pId = $(this).data("id");
        loadFollowersData(pId,<?= $artist['id'] ?>,2);
      });
    
    });
   
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/old/followers.blade.php ENDPATH**/ ?>