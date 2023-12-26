
 <?php  $count = artist_counter($artist->id); ?>


     <div class="col-lg-12  text-center" style="border-radius: 5px;border: 1px solid #d4d4d4; padding: 10px 20px;margin-bottom: 10px;">
    <div class="row">
        <div class="col-4">
        <p class="artist-follower">Artists
            <span style="float:left; width:100%; display:block; text-align:center;"><?php echo e($count->artist); ?></span></p>
        </div>

        <div class="col-4">
            <p class="artist-follower">Investors<span style="float:left; width:100%; display:block; text-align:center;"><?php echo e($count->investor); ?></span></p>
        </div>

        <div class="col-4">
            <p class="artist-follower">Business<span style="float:left; width:100%; display:block; text-align:center;"><?php echo e($count->business); ?></span></p>
        </div>
        </div>
        </div>

<div class="followers-wrapper-main">
    <div class=" mb-3 mt-3">
    <div class="nav nav-tabs tab-select" id="nav-tab" role="tablist">
        <a class="active" id="nav-follower-tab" data-toggle="tab" href="#nav-follower" role="tab" aria-controls="nav-home" aria-selected="true">Followers<span class="total_follower"><span></a>
        <a class="" id="nav-following-tab" data-toggle="tab" href="#nav-following" role="tab" aria-controls="nav-profile" aria-selected="false">Following<span class="total_following"><span></a>
        <a class="" id="nav-vip-tab" data-toggle="tab" href="#nav-vip" role="tab" aria-controls="nav-contact" aria-selected="false">VIP<span class="total_vip"><span></a>
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
          <div class="row vip_list">
        </div>
      </div>

	</div>
</div>


<script>
  setTimeout(function(){ loadMoreData(0,<?= $artist['id'] ?>,2);}, 50);
  setTimeout(function(){  loadFollowersData(0,<?= $artist['id'] ?>,1);}, 50);
  setTimeout(function(){  loadVipData(0,<?= $artist['id'] ?>,1);}, 50);


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
              $(".follower_list").append(data1.follower_list);
              $(".total_follower").html('('+data1.total_follower+')');



          }
        }
      });
    }
    $(document).on('click', '.loadbtn1', function(){
        $(".loadbtn").html('<i class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Loading...');

        var pId = $(this).data("id");
        loadFollowersData(pId,<?= $artist['id'] ?>,1);
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

      $(document).on('click', '.loadbtn', function(){
        $(".loadbtn").html('<i class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Loading...');

        var pId = $(this).data("id");
        loadMoreData(pId,<?= $artist['id'] ?>,2);
      });

      function loadVipData(page,artist_id,follow_type){
        $.ajax({
          url : "getviplist",
          type: "GET",
          cache:false,
          data:{offset:page,artist_id:artist_id,follow_type:follow_type},
          success:function(data){
            if (data) {
              $(".loadbtn").hide();
                const data1 = JSON.parse(data);
                $(".vip_list").append(data1.vip_list);
                $(".total_vip").html('('+data1.total_vip+')');

            }
          }
        });
      }

      $(document).on('click', '.loadbtn', function(){
        $(".loadbtn").html('<i class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Loading...');

        var pId = $(this).data("id");
        loadVipData(pId,<?= $artist['id'] ?>,2);
      });

</script>
<?php /**PATH /var/www/testvps-main/resources/views/artist/trash/artist_part/_followers.blade.php ENDPATH**/ ?>