@extends('layouts.master')
@section('pageCSS')

@endsection
@section('title') Notifications @endsection

@section('content')
<h3>Notifications</h3>
     <div class="page_section">
     
        <div class="followers-wrapper-main">
            <div class=" mb-3 mt-3">
             <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="" role="tabpanel" aria-labelledby="nav-follower-tab">
                <div class="row notification_list">
                 </div>
              </div>
              
              
        	</div>
        </div>
        </div>
</div>
@endsection
@section('script')
   <script type="text/javascript">
    $(document).ready(function(){
     loadNotificationsData(0);
    });
 
   function loadNotificationsData(page){
       $.ajax({
        url : "getnotificationlist",
        type: "GET",
        cache:false,
        data:{offset:page},
        success:function(data){
          if (data) {
            $(".loadbtn").hide();
              const data1 = JSON.parse(data);
              $(".notification_list").append(data1.html);
             }
        }
      });
    }
    $(document).on('click', '.loadbtn', function(){
        $(".loadbtn").html('<i class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Loading...');
       
        var pId = $(this).data("id");
        loadNotificationsData(pId);
      });
   $(document).on('click', '.notification', function(){
       
        var id = $(this).data("id");
        alert(id);
        $.ajax({
        url : "notification_delete",
        type: "GET",
        cache:false,
        data:{id:id},
        success:function(data){
          if (data) {
             const data1 = JSON.parse(data);
             if(data1.status == 1){
              $(".notification_id"+id).remove();
             }
          }
        }
      });
      });
      $(document).on('click', '.read-message', function(){
        var url = $("meta[name=app-url]").attr("content");
        var id = $(this).data("id");
       
        $.ajax({
        url : "notification_read",
        type: "GET",
        cache:false,
        data:{id:id},
        success:function(data){
          if (data) {
             const data1 = JSON.parse(data);
             if(data1.status == 1){
              $(".message-status"+id).html('<img src="'+url+'/assets/images/valyoux/open.svg"  width="20"/>');
             }
          }
        }
      });
      });
</script>
@endsection
