<?php
$url = Request::segment(2);
if($url == 'posts' || $url == 'videos'){
?>


<?php } ?>
<style>
.main-nav-tabss{
    display: flex;
    flex-wrap: nowrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
    justify-content: flex-start;
    font-family: Roboto;
    border-bottom: none;
    overflow-x: auto;
}
.main-tab-item{
    /* margin-right: 15px; */
    cursor: pointer;
}
.main-tab-link{
    display: inline-block;
    transition: all 0.3s ease-in-out;
    color: #000 !important;
    margin-bottom: 20px;
    font-size: 14px;
    font-weight: 500;
    text-transform: capitalize;
        padding: 0px 20px;
    white-space: nowrap;
}
.main-tab-link.active {
    color: #ff0093 !important;
    position: relative;
}
.main-tab-link.active::before {
    content: '';
    width: 50px;
    height: 2px;
    background: #ff0093;
    display: block;
    position: absolute;
    bottom: -6px;
    left: 50%;
    transform: translateX(-50%);
}
@media  screen and (max-width: 767px){
.main-nav-tabss {
    flex-wrap: nowrap;
    justify-content: flex-start;
    overflow-x: auto;
    margin-bottom: 10px;
    border-bottom: none;
}
.main-tab-link{
    white-space: nowrap;
    margin-bottom: 6px;
    padding: 5px 35px;
    font-size: 13px;
    font-weight: 600 !important;
}


.main-nav-tabss::-webkit-scrollbar {
  /*width: 2px;*/
  /*height: 3px;*/
}
.main-nav-tabss::-webkit-scrollbar-track {
  /*background: transparent;*/
  /*border-radius: 10px;*/
}
.main-nav-tabss::-webkit-scrollbar-thumb {
  /*background: transparent;*/
}
.main-nav-tabss::-webkit-scrollbar-thumb:hover {
  /*background: transparent;*/
}
}

.main-nav-tabss {
    scroll-behavior: smooth;
}
</style>
<div class="row tab-margin-top">
        <div class="col-12">
  
<?php if(isset($artist)){ ?>
<ul class="nav nav-tabs main-nav-tabss mt-4">
    <li class="main-tab-item">
        <a class="main-tab-link <?php if($url == 'market'){ echo 'active'; } ?> " href="market">market</a>
    </li>
    <li class="main-tab-item">
        <a class="main-tab-link <?php if($url == 'stock-price'){ echo 'active'; } ?>" data-id="<?php echo e($artist['id']); ?>" data-page="stock-price" href="artist/stock-price/<?php echo e($artist['id']); ?>" >stock price</a>
    </li>
    <li class="main-tab-item">
        <a class="main-tab-link <?php if($url == 'songs'){ echo 'active'; } ?>" data-id="<?php echo e($artist['id']); ?>" data-page="songs" href="artist/songs/<?php echo e($artist['id']); ?>">Audio</a>
    </li>
 
    <li class="main-tab-item">
        <a class="main-tab-link <?php if($url == 'videos'){ echo 'active'; } ?>" href="artist/videos/<?php echo e($artist['id']); ?>" data-id="<?php echo e($artist['id']); ?>" >videos</a>
    </li>
    <li class="main-tab-item">
        <a class="main-tab-link <?php if($url == 'posts'){ echo 'active'; } ?>" href="artist/posts/<?php echo e($artist['id']); ?>" data-id="<?php echo e($artist['id']); ?>" >Posts</a>
    </li>
    <li class="main-tab-item">
        <a class="main-tab-link <?php if($url == 'followers'){ echo 'active'; } ?>" href="artist/followers/<?php echo e($artist['id']); ?>" data-id="<?php echo e($artist['id']); ?>" >followers</a>
    </li>

    <li class="main-tab-item">
        <a class="main-tab-link <?php if($url == 'profile'){ echo 'active'; } ?>" href="artist/profile/<?php echo e($artist['id']); ?>" data-id="<?php echo e($artist['id']); ?>" >Profile</a>
    </li>

    <li class="main-tab-item">
        <a class="main-tab-link <?php if($url == 'photos'){ echo 'active'; } ?>" href="artist/photos/<?php echo e($artist['id']); ?>" data-id="<?php echo e($artist['id']); ?>" >photos</a>
    </li>
    <li class="main-tab-item">
        <a class="main-tab-link <?php if($url == 'revenue-streams'){ echo 'active'; } ?>" href="artist/revenue-streams/<?php echo e($artist['id']); ?>" data-id="<?php echo e($artist['id']); ?>" >revenue</a>
    </li>

    <li class="main-tab-item">
        <a class="main-tab-link <?php if($url == 'bank'){ echo 'active'; } ?>" href="artist/bank/<?php echo e($artist['id']); ?>" data-id="<?php echo e($artist['id']); ?>"  >bank</a>
    </li>
    <li class="main-tab-item">
        <a class="main-tab-link <?php if($url == 'collaborate'){ echo 'active'; } ?>" href="artist/collaborate/<?php echo e($artist['id']); ?>" data-id="<?php echo e($artist['id']); ?>" >collaborate</a>
    </li>

    <li class="main-tab-item">
        <a class="main-tab-link <?php if($url == 'invite'){ echo 'active'; } ?>" href="artist/invite/<?php echo e($artist['id']); ?>" data-id="<?php echo e($artist['id']); ?>" >invite</a>
    </li>
    <li class="main-tab-item">
        <a class="main-tab-link <?php if($url == 'promote'){ echo 'active'; } ?>" href="artist/promote/<?php echo e($artist['id']); ?>" data-id="<?php echo e($artist['id']); ?>" >promote</a>
    </li>

    <li class="main-tab-item">
    <a class="main-tab-link <?php if($url == 'ecommerce-products'){ echo 'active'; } ?>" href="artist/ecommerce-products/<?php echo e($artist['id']); ?>" data-id="<?php echo e($artist['id']); ?>">store</a>
    </li>

    <li class="main-tab-item">
        <a class="main-tab-link <?php if($url == 'subscriptions'){ echo 'active'; } ?>" href="artist/subscriptions/<?php echo e($artist['id']); ?>" data-id="<?php echo e($artist['id']); ?>">subscriptions</a>
    </li>
    <li class="main-tab-item">
        <a class="main-tab-link <?php if($url == 'investment-deal'){ echo 'active'; } ?>" href="artist/investment-deal/<?php echo e($artist['id']); ?>" data-id="<?php echo e($artist['id']); ?>">investment deal</a>
    </li>

    <li class="main-tab-item">
        <a class="main-tab-link <?php if($url == 'academy'){ echo 'active'; } ?>" href="artist/academy/<?php echo e($artist['id']); ?>" data-id="<?php echo e($artist['id']); ?>">academy</a>
    </li>
    <li class="main-tab-item">
        <a class="main-tab-link <?php if($url == 'dashboard'){ echo 'active'; } ?>" href="<?php echo e(url('/')); ?>" >dashboard</a>
    </li>

</ul>
<?php } ?>
</div>
    </div>

    <script>
     $(document).ready(function(){


   $('#plus2').click( function(){
        qty=parseFloat( $("#quantity2").val());
        if($('#total_user_stock').val() == 0){
            $('#sell-btn').attr('disabled','disabled');
        }else
    if($('#total_user_stock').val() > qty){

        qty=parseFloat( $("#quantity2").val())+1;
        if (isNaN(qty)){
    	    qty=1;
    	}
        total_cost  = parseFloat(qty * $('.stock_value').val());
        $('.total_cost2').html(total_cost.toFixed(4));
        $('#total_cost2').val(total_cost.toFixed(4));
        $('#quantity2').val(qty);
        $('#sell-btn').removeAttr('disabled');

       }else{
        alert('Your stock is over');
        $('#sell-btn').attr('disabled','disabled');
        total_cost  = parseFloat(qty * $('.stock_value').val());
        $('.total_cost2').html(total_cost.toFixed(4));
        $('.total_cost2').val(total_cost.toFixed(4));

       }
        });
        $('#minus2').click( function(){

   	    var qty=$("#quantity2").val()-1;
    	if (qty<=0){
    		qty=1;
    	}
    	$('#sell-btn').removeAttr('disabled');

        total_cost  = parseFloat(qty * $('.stock_value').val());
    	$("#quantity2").val( qty );
        $('.total_cost2').html( total_cost.toFixed(4));
        $('.total_cost2').val(total_cost.toFixed(4));
   });


   $("#quantity2").change(function(){
    var qty=$("#quantity2").val();
    var qty_stock = $('#total_user_stock').val();

        if (qty<=0){
                qty=1;
            }
        if(parseFloat(qty) > parseFloat(qty_stock)){
           $('#sell-btn').attr('disabled','disabled');
        }else  {
            $('#sell-btn').removeAttr('disabled');
    	 total_cost  = parseFloat(qty * $('.stock_value').val());
    	$("#quantity2").val( qty );
        $('.total_cost2').html( total_cost.toFixed(4));
        $('.total_cost2').val(total_cost.toFixed(4));

         }
   })
   $("#quantity2").keyup(function(){
    var qty=$("#quantity2").val();
    var qty_stock = $('#total_user_stock').val();
        if (qty<=0){
                qty=1;
            }
        if(parseFloat(qty) > parseFloat(qty_stock)){
           $('#sell-btn').attr('disabled','disabled');
        }else  {
            $('#sell-btn').removeAttr('disabled');
    	 total_cost  = parseFloat(qty * $('.stock_value').val());
    	$("#quantity2").val( qty );
        $('.total_cost2').html( total_cost.toFixed(4));
        $('.total_cost2').val(total_cost.toFixed(4));

         }
   })
    //  var scrollWidth=document.getElementsByClassName('nav-tabs')[0].scrollWidth;
    //     var currentTabIndex=$('.main-tab-link').index($('.main-tab-link.active'));
    //    document.getElementsByClassName('nav-tabs')[0].scroll(((scrollWidth/$('.main-tab-link').length)*currentTabIndex)+(10-currentTabIndex),0);
        let ulEl = $('.main-tab-link.active').closest('ul');
        let liEl = $('.main-tab-link.active').parent();
        ulEl[0].scrollLeft = liEl[0].offsetLeft - ulEl.width() / 2 + liEl.width() / 2 - 15;
     });
     $('.main-tab-link').click(function(){
        var action = $(this).data('href');
        var id = $(this).data('id');
        $('.main-tab-link').removeClass('active')
        $(this).addClass('active');

        $.ajax({
        url : action,
        type: "GET",
        cache:false,
        data:{id:id},
        success:function(data){
          if (data) {
              const data1 = JSON.parse(data);
              console.log(data1);
                window.history.pushState("","", action);
              $(".page_section").html(data1.html);

          }
        }
      });
    })

    $('.main-tab-item').on('click', function(){
        let ulEl = $(this).parent();
        console.log($(this)[0].offsetLeft);
        console.log(ulEl.width());
        console.log($(this).width());
        ulEl[0].scrollLeft = $(this)[0].offsetLeft - ulEl.width() / 2 + $(this).width() / 2 - 15;
    });

    </script>
<?php /**PATH /var/www/testvps-main/resources/views/layouts/inner-navigation.blade.php ENDPATH**/ ?>