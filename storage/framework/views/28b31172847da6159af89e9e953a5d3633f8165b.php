<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Chat'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('common-components.breadcrumb'); ?>
        <?php $__env->slot('title'); ?> 
		<div class="container mb-3 mt-3 added-feature">
        	 <div class="nav nav-tabs tab-select" id="nav-tab" role="tablist" bis_skin_checked="1">
                    <a href="#messages_data" class="active" id="messages_data" data-toggle="pill" role="tab"
                        aria-controls="all" aria-selected="true">Messages</a>
                    <a href="#notifications_data" class="unclicked" id="notifications_data" data-toggle="pill" role="tab"
                        aria-controls="expression_of_interest" aria-selected="false">Notifications</a>
             </div>
   	 	</div>
		<?php $__env->endSlot(); ?>
        <?php $__env->slot('li_1'); ?> Skote1 <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_2'); ?> Chat2 <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
<?php 

use App\User;
$users_data = User::all();

?>
<style>

	   @media (max-width: 700px) {
   			.tab-select a{
			    padding: 5px 22px!important;
       		}
             /*user chat css new*/
    .user-chat-mobile{
       display: none;
     }
    .back-btn-chat{
        display: none;
    }
    .back-btn-chat img{
        max-width: 20px;
        margin-bottom: 20px;
    }
    .chat-conversation .conversation-list .ctext-wrap .conversation-name{
        color: #e62e91;
    }
    .right .conversation-list .ctext-wrap .conversation-name{
        color: #5fc490;
    }
    .chat-send{
        background-image: linear-gradient(257deg, #00ffc2 0%, #00b8ba 100%);
        border-color: #5fc490;
    }
    .chat-input-links li a{
        color: #5fc490;
      /*  background: linear-gradient(257deg, #00ffc2 0%, #00b8ba 100%);*/
      /*-webkit-background-clip: text;*/
      /*-webkit-text-fill-color: transparent;*/
      /*-webkit-mask-image: linear-gradient(257deg, #00ffc2 0%, #00b8ba 100%);*/
    }
		}
	.nav-tabs {
    	border-bottom: 0px solid #ced4da!important;
	}
	.tab-select .active{
            text-decoration: none solid #ff0093 2px!important;
    	}
   		.tab-select .active{
         	border-bottom: 2px solid #ff0a97!important;
    	}
    .breadcrumb{
        display: none !important;
    }
    .nav-pills .nav-link.active, .nav-pills .show > .nav-link {
        color: #fff;
        background-color: #556ee6; 
        background-image: linear-gradient(257deg, #00ffc2 0%, #00b8ba 100%);
    }
    .nav-pills .nav-link.active, .nav-pills .show > .nav-link:hover {
        color: #fff;
    }
    body[data-sidebar=dark].vertical-collpsed{
        min-height: 0px!important;
    }
   
</style>
	<div class="row"  id="messages_seen" style="display:block">
    	<div class="d-lg-flex">
        <div class="back-btn-chat" style="display:none;">
            <img src="<?php echo e(asset('assets/images/left-arrow.svg')); ?>" title="Go Back" style="height: 50px;width:50px;">
        </div>

        <!-- start listing  -->
        <div class=" card chat-leftsidebar pl-3 mr-3">
            <div class="">
                <div class="search-box pr-2 py-4">
                    <div class="position-relative">
                        <input type="text" class="form-control searchRecord" id="searchinputdata" placeholder="Search...">
                        <i class="bx bx-search-alt search-icon"></i>
                        <div class="userListshow"></div>
                    </div>
                </div>

                <div class="chat-leftsidebar-nav" style="overflow: auto;">
                   
                    <div class="tab-content py-4">
                        <div class="tab-pane show active" id="chat">
                            <div>
                                <h5 class="font-size-14 mb-3">Chat Listing</h5>

                                <ul class="list-unstyled chat-list chat_listing" style="max-height: 410px;">
                                    <li class="getchatname "></li>
                                    
                                </ul>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end listing -->
        <div class="w-100 user-chat user-chat-mobile mr-lg-4">
        
            <div class="card">
                <div class="p-4 border-bottom ">
                    <div class="row">
                    <div class="align-self-center mr-3 chat_profile_pic">
                            <img src="<?php echo e(asset(auth()->user()->avatar)); ?>" class="avatar-xs rounded-circle" alt="">
                        </div>
                        <div class="media-body">
                            <h5 class="font-size-15 mt-0 mb-1 getnameuser"><?php echo e(auth()->user()->first_name); ?> <?php echo e(auth()->user()->last_name); ?></h5>
                            
                        </div>
                       
                        <div class="col-md-8 col-3">
                            <ul class="list-inline user-chat-nav text-right mb-0">
                                <li class="list-inline-item d-none d-sm-inline-block">
                                    <div class="dropdown">
                                        <button class="btn nav-btn dropdown-toggle" type="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-search-alt-2"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-md">
                                            <form class="p-3">
                                                <div class="form-group m-0">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Search ..."
                                                            aria-label="Recipient's username">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-primary" type="submit"><i
                                                                    class="mdi mdi-magnify"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-inline-item  d-none d-sm-inline-block">
                                    <div class="dropdown">
                                        <button class="btn nav-btn dropdown-toggle" type="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-cog"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">View Profile</a>
                                            <a class="dropdown-item" href="#">Clear chat</a>
                                            <a class="dropdown-item" href="#">Muted</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="dropdown">
                                        <button class="btn nav-btn dropdown-toggle" type="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else</a>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="getconversation">
                   
                    <form class="myForm">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="user_id" class="getUserId uidget" value="">
                    <div class="chat-conversation text_msg1 chat_messages p-3" id="chatMessage" style="overflow-y: scroll; height: 420px;">
                    
                    </div>
                    <div class="p-3 chat-input-section">
                        <div class="row">
                            <div class="col">
                                <div class="position-relative">
                                    <input type="text" name="text_message" class="form-control chat-input chat_message_clear" placeholder="Enter Message...">
                                   
                                </div>
                            </div>
                            <div class="col-auto" id="myDiv">
                                <input type="submit" value="Send" class="btn btn-primary btn-rounded chat-send w-md waves-effect waves-light">
                            </div>
                        </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
        
    </div>
	</div>
	<div class="row"  id="notifications_seen" style="display:none">
	  <div class="d-lg-flex">
        <div class="back-btn-chat">
            <img src="assets/images/left-arrow.svg" title="Go Back">
        </div>
        <div class="w-100 user-chat mr-lg-4">
            <div class="card">
           		<div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;">
                <!--  <h6 class="mt-0 mb-1">Notifications</h6> -->
                <div class="simplebar-content" style="padding: 0px;">
                    <div class="row notification_list"></div>
                    </div>
                </div>
             </div>                          
        </div>
      	</div>
      </div>
    </div>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('assets/libs/parsleyjs/parsleyjs.min.js')); ?>"></script>
    <!-- Plugins js -->
    <script src="<?php echo e(URL::asset('assets/js/pages/form-validation.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/dropify/js/dropify.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/pages/country-state-city.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script-bottom'); ?>
    
    <script>
      
        //
      $(document).ready(function() {
          if ($(window).width() < 991) {
            
          $('.user-chat-mobile').hide();
        
          $(document).on('click','#mblOpen',function() {
            $(this).closest(".chat-leftsidebar-nav").hide('fast');
            $('.back-btn-chat').show();
            $('.back-btn-chat').css('display','block');
            $('.user-chat-mobile').show('fast');
            $('html, body').animate({
            scrollTop: $("#myDiv").offset().top
            }, 1000);
          });
          
          $('.back-btn-chat').click(function() {
            
            $('.back-btn-chat').hide();
            $('.user-chat-mobile').hide('fast');
            $('.chat-leftsidebar-nav').show('fast');
          });
          }

          //
         
          setInterval(function(){
            var uid = $('.uidget').val();
            checkChatList(uid);
          },5000);

        //   setInterval(function(){
        //     scrollToBottom();
        //   },1000);
          
      });
     //
     const chatContainer = document.getElementById("chatMessage"); 
     function scrollToBottom() {
        chatContainer.scrollTop = chatContainer.scrollHeight;
      }
    //
        $(document).ready(function() {
        
            $('#messages_data').click(function() {
                $("#messages_seen").attr("style", "display:block;");
                $("#notifications_seen").attr("style", "display:none;");
            });
            $('#notifications_data').click(function() {
                $("#notifications_seen").attr("style", "display:block;");
                $("#messages_seen").attr("style", "display:none;");
            });  
       
        });

    // 
    $(document).on('keydown','.searchRecord',function(){
        var data = `<div class="show-target-content-body" >
            <?php $__currentLoopData = $users_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($user->id != auth()->user()->id): ?>
                    <div class="show-target-content-body-item getname" data-avatar="<?= $user->avatar;?>" data-user-id="<?= $user->id;?>" data-name="<?= $user->first_name.' '.$user->last_name;?>" style="font-size: 0.7rem">
                        <div class="target-info-button">
                            <img src="<?php echo e(asset($user->avatar)); ?>" alt="" style="width: 32px; height:32px">
                            <div class="target-info-button-detail">
                                <p class="my-auto target-name" style="font-size: 0.8rem"><strong><?php echo e($user->first_name . " " . $user->last_name); ?></strong></p>
                                <p class="my-auto target-type"><?php echo e($user->email); ?></p>
                            </div>																													
                        </div>  
                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>													
        </div>`;
        $('.userListshow').html(data);
        $('.chat-leftsidebar-nav').css('display','none');
    });
    // new js for search investor
    $(document).on("keydown","#searchinputdata", function() {	
        var value = $(this).val().toLowerCase();
        $(".show-target-content-body-item").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
    $(document).on('click','.getname',function(){
        
        var name = $(this).data('name');
        var profile = $(this).data('avatar');
        var user_id = $(this).data('user-id');
        // 
       $('.searchRecord').val(name);
       $('.getnameuser').html(name);
       $('.chat_profile_pic').html('<img src="<?= asset('/')?>/'+profile+'" class="avatar-xs rounded-circle" alt="">');
       $('.getUserId').val(user_id);
       var data = '';
       $('.userListshow').html(data);
       $('.chat-leftsidebar-nav').css('display','block');
       checkChatList(user_id);
       getSingleUserList(name,profile,user_id);
    });
    //
    function getSingleUserList(name,profile,user_id){
       //
       $.ajax({
         url : "CheckChatListing",
         type: "GET",
         cache:false,
         data:{user_id:user_id},
         success:function(data){
                
               const data1 = JSON.parse(data);
            //    
               if (data1.message_id == '') {
                // alert(data1.message_id)
                var messageList = `<li class="active chatopen" id="mblOpen" data-user-id="`+user_id+`" data-name="`+name+`">
                            <a class="chat-open">
                                <div class="media">
                                    <div class="align-self-center mr-3">
                                        <i class="mdi mdi-circle font-size-10"></i>
                                    </div>
                                    <div class="align-self-center mr-3">
                                        <img src="<?= asset('/')?>/`+profile+`" class="rounded-circle avatar-xs" alt="">
                                    </div>

                                    <div class="media-body overflow-hidden">
                                        <h5 class="text-truncate font-size-14 mb-1">`+name+`</h5>
                                        <p class="text-truncate mb-0">Hey! there I am available</p>
                                    </div>
                                    <div class="font-size-11">01 min</div>
                                </div>
                            </a>
                        </li>`;
                } else {

                    messageList = ``;   
                }
                $('.getchatname').html(messageList);
         }
       });

    }
    //
    $(document).on('click','.chatopen',function(){
       
        var name = $(this).data('name');
        var profile = $(this).data('avatar');
        var user_id = $(this).data('user-id');
        var message_id = $(this).data('message-id');
        $('.getnameuser').html(name);
        $('.chat_profile_pic').html('<img src="<?= asset('/')?>/'+profile+'" class="avatar-xs rounded-circle" alt="">');
        $('.getUserId').val(user_id);
        loadChatData(message_id);
       
           
    });
    // form submit
   $(document).on('submit','.myForm',function(event) {
       
       event.preventDefault();
       validate = true;
       // Serialize the form data
       var formData = $(this).serialize();
       var submitForm = $(".myForm").serializeArray();
        len = submitForm.length,
        dataObj = {};
        for (i=0; i<len; i++) {
            // acceesing data array    
            dataObj[submitForm[i].name] = submitForm[i].value;
            
            value_input = $("input[name='"+submitForm[i].name+"']").val();
            //form data validate  
            if(value_input==''){
                
                validate = false;
                $("input[name='"+submitForm[i].name+"']").focus();
                return;
            }
        }
       
       if(validate == true){
        
       	$.ajax({
       	url: '/saveMessage', 
       	type: 'POST',
       	data: formData, 
       	success: function(response) {
            
       		var data = JSON.parse(response);
            loadChatData(data.msg[0].message_id);
            $('.chat_message_clear').val('');
       		// Handle successful form submission
       		
       	},
       	error: function(xhr, status, error) {
       		// Handle form submission errors
       		console.log(xhr.responseText);
       	}
       	});
       }
      
    });
    // message load listing
    $(document).ready(function(){
        loadmessagelistingData(0); 
       
    });
 
   function loadmessagelistingData(page){
       $.ajax({
        url : "getMessagesload",
        type: "GET",
        cache:false,
        data:{offset:page},
        success:function(data){
          if (data) {
            $(".loadbtn").hide();
              const data1 = JSON.parse(data);
              
              $(".chat_listing").append(data1.html);
              
             }
        }
      });
    }
    
    function loadChatData(message_id){
        
       $.ajax({
        url : "getChatmsgs",
        type: "GET",
        cache:false,
        data:{message_id:message_id},
        success:function(data){
          if (data) {
            $(".loadbtn").hide();
              const data1 = JSON.parse(data);
              $(".chat_messages").html(data1.chat);
              
             }
        }
      });
    }

    function checkChatList(user_id){
       
        $.ajax({
         url : "CheckChatListing",
         type: "GET",
         cache:false,
         data:{user_id:user_id},
         success:function(data){
                
               const data1 = JSON.parse(data);
            //    
               if (data1.message_id != '') {
                // alert(data1.message_id)
                    loadChatData(data1.message_id);
                } else {

                       loadChatData(0);      
                }
         }
       });
     }

    </script>
    <!-- notifications load -->
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
        // alert(id);
        $.ajax({
        url : "notification_delete",
        type: "GET",
        cache:false,
        data:{id:id},
        success:function(data){
          if (data) {
            // alert('sdsdasd')
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
    //    alert(url)
        $.ajax({
        url : "notification_read",
        type: "GET",
        cache:false,
        data:{id:id},
        success:function(data){
          if (data) {
             const data1 = JSON.parse(data);
             if(data1.status == 1){
              $(".message-status"+id).html('<i class="fa fa-envelope-open" style="font-size:20px;color:red;"></i>');
             }
          }
        }
      });
      });
</script>
<?php $__env->stopSection(); ?>
    <!-- end row -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/chat.blade.php ENDPATH**/ ?>