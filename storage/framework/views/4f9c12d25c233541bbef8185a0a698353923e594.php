<?php $__env->startSection('pageCSS'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/select2/select2.min.css')); ?>">
<!-- <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.css')); ?>"> -->
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/tagify/tagify.css')); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/css/pages/social-media.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/intl-tel-input/css/intlTelInput.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<style>
  	/* desktop-start */
		.nav-part{
			background: #FFFFFF 0% 0% no-repeat padding-box;
			box-shadow: 0px 3px 6px #00000029;
		}
		.justify-content-spaceeven{
			justify-content: space-evenly;
		}

		.input-round {
			padding: 0.2rem 1rem !important;
    		border-radius: 25px !important;
		}

		.play-icon {
			font-size: 3rem;
			margin: auto;
			color: #ff0093;
		}

		.nav-tabs {
			border-color: #ced4da33!important;
		}

		.tab-select-nav{
			padding: 14px 0 7px 0;
			overflow: auto;
			display: inline-table;
		}

		.tab-select-nav a.active{
			text-decoration: none !important;
			color: #FF0093 !important;
			position: relative !important;
			border-bottom: 2px solid #FF0093;
		}

		.tab-select-nav a {
			padding: 5px 20px;
			white-space: nowrap;
			color: #000!important;
			font-weight: 600!important;
			font-size: 16px;
			border-bottom: 2px solid #FFFFFF;
		}

		/* end nav-tab */

		/* artist information frame start*/
		.mo-userinfo-content {
			overflow-x: auto;
			display: inline-flex;
		}

		.mo-userinfo-content::-webkit-scrollbar {
			display: none;
		}

		.scroll-hide::-webkit-scrollbar {
			display: none;
		}

		.mo-userinfo {
			align-items: center;
			width: 100%;
			border: 1px solid #ffffff;
			display: inline-flex;
			white-space: nowrap;
			border-top-color: #dfe1e3;
			border-bottom-color: #e8e8e9;
			padding: 1rem 0;
		}
		/* artist information frame end*/

		.container-fluid {
			padding: 0!important;
		}

		/* all video list start */
		.video-detail-image {
			position: relative;
			width: 180px;
			height: 110%;
			background: #000000 0% 0% no-repeat padding-box;
			border: 1px solid #707070;
			opacity: 1;
			display: flex;
			justify-content: center;
		}

		.flex.mo-card-info {
			display: inline-flex;
    		justify-content: center;
			align-items: flex-start;
			width: 100%;
		}

		/* all video list end */

	@media  only screen and (max-width: 900px){

		/* #page-topbar {
			position: relative;
		} */

		.show-header {
			display: block !important;
			box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px !important;
		}

		.video-detail-info{
			margin-left: 20px;
			padding-top: 5px;
		}

		.video-detail-info p{
			font-size: 14px;
			font-weight: bold;
			color: #050F2F;
			margin: 0;
		}

		.special-video-part {
			margin-bottom: 5px;
			max-height: fit-content;
			overflow-y: unset;
		}

		.video-detail-info h4{
			font-size: 14px;
			color: #666666;
			font-weight: 300; 
		}

		.video-detail-info h6{
			color: #1CEA2C;
			font-size: 14px;
			font-weight: 500;
		}

		.video-detail-image {
			border-radius: 0 !important;
		}
		#mobile-div {
			display: block;
			margin: 0 -12px;
			height: 100vh;
		}

		.mo-video {
			width: 100%;
		}

		.mo-btn-group {
			justify-content: space-between;
			padding: 0.5rem 1.5rem;
		}

		.mo-border {
			border: 1px solid #f9508a;
			padding: 5px 10px;
			font-weight: 600;
			border-radius: 5px;
		}

		.avatar-md {
			height: 50px !important;
			width: 50px !important;
		}

		.mo-carousel-info-part {
			margin-bottom: 15px;
			margin-top: 15px;
			overflow-x: auto;
		}

		.mo-carousel-info-part::-webkit-scrollbar {
			width: 5px;
		}

		.mo-carousel-info-part::-webkit-scrollbar-track {
			background-color: #c2bfbf;;
			-webkit-border-radius: 10px;
			border-radius: 10px;
			position: absolute;
			display: none;
			width: 5px;
		}

		.mo-carousel-info-part::-webkit-scrollbar-thumb {
			-webkit-border-radius: 10px;
			border-radius: 10px;
			background: #7c7676; 
			width: 5px;
			display: none;
		}
		.mo-verticalNav {
			overflow-x: hidden;
			list-style: none;
			display: inline-flex;
			margin-bottom: 0px;
			padding-left: 0px !important;

		}

		.mo-card-size {
			width: 50vw;
			height: 30vw;
		}
		.flex.card-info{
			display: inline-flex;
			justify-content: center;
			align-items: center;
		}
		.card-info{
			display: inline-flex;
		}
		.share-invest {
			padding: 0.6rem;
			color: white;
			font-weight: 700;
			border-radius: 5px;
		}
		.proceed-valyou-song-div{
			padding: 20px 20px !important;
		}
		.show-info-card>p {
			margin: 0;
			font-size: 11px;
		}
		.mo-content {
			height: 60vh;
    		overflow-y: auto;
		}

		.editmodal-content{
			position: fixed;
			left:0;
			max-height: 70vh;
			/* top:60vh; */
			bottom: 0;
			right:0;
			top: 100vh;
			background-color: white;
			display: flex;
			width: 100%;
			border-radius: 15px 15px 0 0;
		}

		.all-overlay {
			position: fixed;
			left:0;
			top:0;
			right:0;
			bottom: 0;
			background-color: rgba(0, 0, 0, 0.432);
			z-index: 200;
		}

		.comment-edit {
			z-index: 201;
		}

		.comment-input {
			border-top: 1px solid #dbdbdb;
			padding: 10px;
			background: white;
			display: inline-flex;
			width: 100%;
		}

		.chat-input {
			font-size: 16px;
			margin: 0.4rem 0.5rem;
		}

		.comment-scroll {
			max-height: 60vh; 
			overflow-y: auto; 
			margin-top: 15px;
		}

		.comment-btn {
			width: 36px;
			height: 36px;
			max-width: 36px !important;
		}


		.favor-ico {
			position: absolute;
			top: 5px;
			right: 10px;
			color: grey;
			font-size: 17px;
		}

		.favor-ico.favor-active {
			color: #f9508a;
		}

		.hint-img {
			width: 22px !important;
		}

		.input-round {
			padding: 0.2rem 1rem !important;
    		border-radius: 25px !important;
		}

		.promote-edit {
			display: flex;
			justify-content: center;
			z-index: 202;
			position: fixed;
			max-height: 70vh;
			margin: auto;
			background: white;
			border-top-left-radius: 15px;
			border-top-right-radius: 15px;
			display: none;
			bottom: 0;
		}

		.form-group>input {
			width: 100%;
		}

		.valyou-edit {
			display: flex;
			justify-content: center;
			z-index: 202;
			position: fixed;
			max-height: 70vh;
			margin: auto;
			background: white;
			border-top-left-radius: 15px;
			border-top-right-radius: 15px;
			display: none;
			padding: 1rem
		}

		.tooltip {
			z-index: 301 !important;
		}

		.valyou-custom-btn {
			border: 1px solid rgb(177, 177, 177);
			border-radius: 17px;
			padding: 10px 3px;
			background: #f9508a;
    		color: white;
		}

		#set_valyou {
			border-width: 1px;
			border-radius: 16px;
			padding: 5px 15px;
		}

		.custom-valyou-div {
			padding: 20px 20px 0 20px;
			display: none;
		}
		.scrollable{
			overflow-y: auto;
			max-height: 60vh;
			padding: 15px;
		}

		.show-info-card, .comment-info {
			width: 100%;
			position: relative;
		}

		.comment-info>p {
			margin: 0;
		}

		.comment-content {
			font-size: 15px;
			border-top: 1px solid #f1f1f1; 
			/* border-bottom: 1px solid #d5d5d5; */
		}

		.video-watch {
			margin: 0 -10px;
		}

		.video-watch-part-1 {
			
		}
	}
</style>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
	<input type="hidden" name="user_wallet_amount" value="<?php echo e(auth()->user()->wallet); ?>" id="user_wallet_amount">
	<input type="hidden" name="user_role" value="<?php echo e(check_role()); ?>" id="user_role">
	<input type="hidden" name="media_id" id="media_id" value="0">
	<input type="hidden" name="own_user_id" id="own_user_id" value="0" />
	<div class="w-full overflow-auto">
		<div class="nav nav-tabs tab-select-nav mb-1" id="nav-tab" role="tablist">
			<a class="active" id="nav-watch-tab" data-toggle="tab" href="#nav-watch" role="tab" aria-controls="nav-watch" aria-selected="true">
				PAY PER VIEW
				<span></span>
			</a>
			<a class id="nav-earn-tab" data-toggle="tab" href="#nav-earn" role="tab" aria-controls="nav-profile" aria-selected="false">
				WATCH & EARN
			</a>
			<a class id="nav-valyou-tab" data-toggle="tab" href="#nav-valyou" role="tab" aria-controls="nav-contact" aria-selected="false">
				VALYOU PLAYLIST
			</a>
			<a class="" id="nav-watch-tab" data-toggle="tab" href="#nav-watch" role="tab" aria-controls="nav-watch" aria-selected="true">
				PROMOTED VIDEOS
				<span></span>
			</a>
			<a class id="nav-earn-tab" data-toggle="tab" href="#nav-earn" role="tab" aria-controls="nav-profile" aria-selected="false">
				PROMOTED AUDIOS
			</a>
		</div>
	</div>
	<div class="tab-content" id="nav-watch">
		<div id="mobile-div1">
			<div class="mo-video-part row">
				<div class="col-sm-12 col-md-12 col-lg-8 ">
					<div class="video-watch-part-1 w-full" >
						<div class="video-watch d-flex">
							<video class = "my-video" id="see_video" width="100%" controlsList="nodownload" src="" type="video/mp4" controls></video>
							<div class="w-full overlay d-flex overlay-for-video">
								<img src="<?php echo e(URL::asset('assets/images/play-button.svg')); ?>" class="m-auto play-btn" alt="">
							</div>
						</div>
						
						<div class="inner-button-part w-full">
							<div class="watch-btn-group m-2">
								<div class="d-flex ">
									<div class="left-btn-group desktop-mode">
										<div class="main-border-btn py-2 px-2 m-2 h-fit d-flex dt-comment-btn">
											<span><img class="btn-ico" src="<?php echo e(URL::asset('assets/images/comments.svg')); ?>" alt=""></span>
											<p class="text-center m-0 p-0-5 hand font-weight-bold fs-1-1">COMMENTS </p>
										</div>
										<div class="main-border-btn py-2 px-2 m-2 h-fit d-flex dt-promote-btn">
											<span><img class="btn-ico" src="<?php echo e(URL::asset('assets/images/promote.svg')); ?>" alt=""></span>
											<p class="text-center m-0 p-0-5 hand font-weight-bold fs-1-1">PROMOTE</p>
										</div>
									</div>
									<div class="right-btn-group desktop-mode" style="justify-content:end">
										<div class="main-border-btn py-2 px-2 m-2 h-fit dt-valyou-btn">
											<p class="m-0 text-center p-0-5 hand font-weight-bold  fs-1-1">VALYOU SONG</p>
										</div>
										<div class="bg-green-gra watch-invest-btn m-2 h-fit">
											<a href="<?php echo e(URL::to('artist/stock-price',$artists[0]->id)); ?>" class=" py-2 px-3 d-flex" >
												<p class="text-center m-0 p-0-5 hand font-weight-bold text-white fs-1-1">INVEST IN</p>
											</a>
										</div> 	
									</div>
									<div class="mobile-mode d-flex justify-content-between w-full">
										<div class="p-2 h-fit d-flex mo-comment-btn" data-commentid="111">
											<span><img class="btn-ico" src="<?php echo e(URL::asset('assets/images/comments.svg')); ?>" alt=""></span>
											<p class="text-center m-0 ml-1 pt-1  fs-1-1">COMMENTS </p>
										</div>
										<div class="p-2 h-fit d-flex mo-promote-btn" data-promoteid="111">
											<span><img class="btn-ico" src="<?php echo e(URL::asset('assets/images/promote.svg')); ?>" alt=""></span>
											<p class="text-center m-0 ml-1 pt-1  fs-1-1">PROMOTE</p>
										</div>
										<div class="main-border-btn p-2 mt-1 h-fit mo-valyou-btn" data-valyouid="111">
											<p class="m-0  text-center font-weight-bold fs-1-1">VALYOU SONG</p>
										</div>
									</div>
								</div>
							
							</div>
							
						</div>
					</div>
					<?php echo $__env->make('partician.video_feature_modal',[], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4  " style="max-height: 70vh">
					<div style="z-index:3">
						<?php echo $__env->make('partician.video_feature_section',[], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					</div>
					<div class="all-video-list card  p-2 desktop-mode">
						<div class="p-3" ><h2 class="txt-main">All Videos</h2></div>
						<hr class="m-0 mb-2">
						<div class="special-video-part " >
							
							<?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="especailly-part inline-flex w-full" onclick="selVideoDetail(<?php echo e($row->id); ?>, 1)">
								<div class="video-detail-image"  >
									<?php if($row->audio_cover_image): ?>
										<img class="my-video" width="180" height="110" src="<?php echo e(asset($row->audio_cover_image)); ?>">
									<?php else: ?>
										<video class = "my-video" controlsList="nodownload" width="180" height="110" src="<?php echo e(asset($row->name)); ?>" type="video/mp4" ></video>
									<?php endif; ?>
								</div>
								<div class="video-detail-info py-1 pl-2">
									<p class="fs-2 font-weight-bold"><?php echo e(@$row->singer); ?> - <?php echo e(@$row->audio_title); ?></p>
									<p style="font-size: small; font-weight: 200;">Song Valyou: <strong id="valyou-val">$<?php echo e(numberformat(@$row->artist->stock_value)); ?></strong></p>
									<h6 class=<?php echo e($row->artist->change_stock<0?'txt-main': 'text-green'); ?>><small>Stock Price &nbsp;<span><img class="" width="15" height="15" src="<?php echo e($row->artist->change_stock<0?'https://testvps.nwlogics.com/public/assets/images/valyoux/pink_arrow_circle_down.svg': 'https://testvps.nwlogics.com/public/assets/images/valyoux/green_arrow_price_going_up.svg'); ?>"></span>&nbsp;&nbsp;<strong>$<?php echo e($row->artist->stock_value); ?>VXD</strong>&nbsp;<strong><?php echo e($row->artist->change_stock<0?'': '+'); ?><?php echo e($row->artist->change_stock); ?>%</strong></small></h6>
								</div>
							</div>		
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							
						</div>
					</div>
				</div>
			</div>
			<div class="w-full">
				<div class="mo-userinfo">
					<div class="personal-img">			
						<img src="<?php echo e(URL::asset($videos[0]->artist->photo?$videos[0]->artist->photo:'')); ?>" style="width: 48px; height: 48px;" alt="">
					</div>
					<div class="mo-userinfo-content">
						<h4 class="my-auto mx-2"><?php echo e(isset($videos[0]->artist->brand) ? $videos[0]->artist->brand : ''); ?></h4>
						<div class="personel-detail-stock-content">
							<p class="my-auto txt-main" ><b>Stock Price : $<?php echo e(numberformat(@$videos[0]->artist->stock_value)); ?> VXD</b> <img class="" width="15" height="15" src="https://testvps.nwlogics.com/public/assets/images/valyoux/pink_arrow_circle_down.svg"> <b> &nbsp; - &nbsp; 10.77777%</b> </p>
						</div>
						<div class="personal-detail-info-category">
							<p><strong class="song-title">Song Title:</strong> <strong class="song-from"> &nbsp;Started From The Bottom</strong></p>
							&nbsp;&nbsp;&nbsp;
							<p><strong class="song-valyou">Song Valyou:</strong><strong class="song-valyou-value">&nbsp; $1,000,000,24,567</strong></p>
							&nbsp;&nbsp;&nbsp;
							<p><strong class="song-category">Music Artist Brand Listing Category:</strong> <strong class="song-type">&nbsp; Major Artist</strong></p>
						</div>
					</div>
				</div>
			</div>
			<div class="mo-content">
				<div class="text-center">
					<div class="share-invest bg-green-gra my-2 w-full mobile-mode k-shadow" data-promoteid="111">
						<p class="card-text w-full text-invest">INVEST IN ARTIST</p>
					</div>
				</div>
				<div>
					<div class="row w-full mx-0 my-2">
						<?php echo $__env->make('partician.brand_sponsor_list',['list'=>$artists], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					</div>
					<div class="all-video-list card  p-2 mobile-mode">
						<div class="p-3" ><h2 class="txt-main">All Videos</h2></div>
						<hr class="m-0 mb-2">
						<div class="special-video-part " >
							
							<?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="especailly-part inline-flex w-full" onclick="selVideoDetail(<?php echo e($row->id); ?>, 1)">
								<div class="video-detail-image"  >
									<?php if($row->audio_cover_image): ?>
										<img class="my-video" width="100%" src="<?php echo e(asset($row->audio_cover_image)); ?>">
									<?php else: ?>
										<video class = "my-video see_video" controlsList="nodownload" width="100%" src="<?php echo e(asset($row->name)); ?>" type="video/mp4" ></video>
									<?php endif; ?>
								</div>
								<div class="video-detail-info p-3">
									<p><?php echo e(@$row->singer); ?> - <?php echo e(@$row->audio_title); ?></p>
									<p style="font-size: small; font-weight: 200;">Song Valyou: <strong id="valyou-val">$<?php echo e(numberformat(@$row->artist->stock_value)); ?></strong></p>
									<h6 class=<?php echo e($row->artist->change_stock<0?'txt-main': 'text-green'); ?>><small>Stock Price &nbsp;<span><img class="" width="15" height="15" src="<?php echo e($row->artist->change_stock<0?'https://testvps.nwlogics.com/public/assets/images/valyoux/pink_arrow_circle_down.svg': 'https://testvps.nwlogics.com/public/assets/images/valyoux/green_arrow_price_going_up.svg'); ?>"></span>&nbsp;&nbsp;<strong>$<?php echo e($row->artist->stock_value); ?>VXD</strong>&nbsp;<strong><?php echo e($row->artist->change_stock<0?'': '+'); ?><?php echo e($row->artist->change_stock); ?>%</strong></small></h6>
								</div>
							</div>		
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="modal fade video-modal" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="staticBackdropLabel"><b class="color-pinkk">Pay $0.03 cents and Watch</b>
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p>You will be charged $0.03 cents if you watch this video. Do you wish to proceed? </p>
							<p>If you do not wish to be charged again each time you listen to this song, you have the option to click and Valyou this song
								for an amount of your choice in order to receive unlimited plays of this song as well Vip artist-fan reward points the more you Valyou .</p>
							<p>Thank you. We appreciate your support. </p>
							<b id="brandName">Artist Name or Brand.</b>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn valyou-g-btn playvideo" data-dismiss="modal">OK</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="tab-content" id="nav-earn"></div>
	<div class="tab-content" id="nav-valyou"></div>
	
	<script src="<?php echo e(URL::asset('assets/js/mouse.event.js')); ?>"></script>
	<script src="<?php echo e(URL::asset('assets/js/watch.js')); ?>"></script>
	
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
	<script src="<?php echo e(URL::asset('assets/libs/axios/axios.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/watch2.blade.php ENDPATH**/ ?>