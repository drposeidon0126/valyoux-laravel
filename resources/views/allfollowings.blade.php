@extends('layouts.master')
@section('pageCSS')

@endsection
@section('title') Artist @endsection

@section('content')

<div class="followers-wrapper-main">
    <div class="container mb-3 mt-3">
    <div class="nav nav-tabs tab-select" id="nav-tab" role="tablist">
<!--         <a class="active" id="nav-follower-tab" data-toggle="tab" href="#nav-follower" role="tab" aria-controls="nav-home" aria-selected="true">Followers<span class="total_follower"><span></a> -->
        <a class="" id="nav-following-tab" data-toggle="tab" href="#nav-following" role="tab" aria-controls="nav-profile" aria-selected="false">Following<span class="total_following"><span></a>
        <!-- <a class="" id="nav-vip-tab" data-toggle="tab" href="#nav-vip" role="tab" aria-controls="nav-contact" aria-selected="false">VIP</a> -->
         </a>
    </div>
      <br>
  
    <div class="tab-content" id="myTabContent">
      <!-- <div class="tab-pane fade show active" id="nav-follower" role="tabpanel" aria-labelledby="nav-follower-tab">
        <div class="row follower_list">
         </div>
      </div> -->
       <div class="tab-pane fade show active" id="nav-following" role="tabpanel" aria-labelledby="nav-following-tab">
        <div class="row following_list">
            </div>
        </div>
      <!-- <div class="tab-pane fade " id="nav-vip" role="tabpanel" aria-labelledby="nav-vip-tab">
            VIP  
      </div> -->
      
	</div>
</div>

@endsection

@section('script') 
<script>
    $(document).ready(function(){
      loadMoreData(0,<?= $artist['id'] ?>,<?= $role ?>);
     
  
    $(document).on('click', '.loadbtn', function(){
        $(".loadbtn").html('<i class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Loading...');
       
        var pId = $(this).data("id");
        loadMoreData(pId,<?= $artist['id'] ?>,<?= $role ?>);
      });

      function loadMoreData(page,artist_id,role_type){
        $.ajax({
          url : "getfollowelistbyrole",
          type: "GET",
          cache:false,
          data:{offset:page,artist_id:artist_id,role_type:role_type},
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
  
    });
   
</script>
@endsection