<?php $__env->startSection('pageCSS'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/select2/select2.min.css')); ?>">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/css/pages/promote-music.css')); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php $__env->stopSection(); ?>





<?php $__env->startSection('title'); ?> Market <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
	<div class="col-lg-12">



		<div class="card">
			<div class="card-body promoteCover">
				<div class="row">
					<div class="col-lg-5">
						<div class="media">
							<div class="mr-3">
								<img src="<?php echo e(URL::asset('assets/images/valyoux/kanyewest.svg')); ?>" alt="" class="avatar-md rounded-circle ">
							</div>
							<div class="media-body align-self-center">
								<div class="text-muted">
									<h2 class="mb-1 ml-4" style="font-family: 'Roboto', sans-serif; color: #050F2F; font-weight:600;  ">Beyonce</h2>
									<p class="mb-2 ml-4" style="font-family: 'Roboto', sans-serif; color: #ffffff; font-weight:300; ">Hip Hop / Rap</p>
									<p class="mb-2 ml-4" style="font-family: 'Roboto', sans-serif; color: #ffffff; font-weight:400; ">Australia</p>

								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-5 align-self-center">
						<div class="text-lg-center mt-4 mt-lg-0">
							<div class="row">
								<div class="col-12 col-sm-12 col-lg-6">
									<p class="text-muted text-truncate mb-2" style="color:#ffffff !important; ">Artist Stock Price</p>
									<h2 class="mb-0" style="color:#ffffff !important; ">$58.60</h2>
									<p class="text-muted text-truncate mb-2" style="color:#ffffff !important; ">Song Valyou</p>
									<h2 class="mb-0" style="color:#ffffff !important; ">$58.60</h2>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-2 d-none d-lg-block">
						<div class="clearfix  mt-4 mt-lg-0">
							<div class="dropdown float-right">
								<button class="btn btn-follow dropdown-toggle " type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Follow
								</button>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end row -->
			</div>
		</div>
	</div>
</div>


<div class="tab-select">
	<a class="unclicked"> Market </a>
	<a class="clicked"> Stock price </a>
	<a class="unclicked"> Songs</a>
	<a id="test" class="unclicked"> Videos </a>
	<a class="unclicked"> Photos </a>
	<div class="search_bar">
		<input placeholder="Search">
	</div>
</div>

<!--            /images/bobby_k9image.png-->

<!--                <img class="card-img-top" src="<?php echo e(asset('assets/videos/bobby-videox.mp4')); ?> " alt="Card image cap">-->



<div class="card p-3 player">
	<video id="video" src="https://myprojectstaging.com/valyouxmusic/public/assets/videos/bobby-videox.mp4" class="video"  autoplay playsinline></video>
	<div class="row">
		<div class="col-lg-10">
			<div class='progress'>
				<div class='progress-filled'></div>
			</div>
		</div>
		<div class="col-lg-2">
			<div class="time"><span class="time-current"></span><span class="time-total"></span></div>
		</div>
	</div>
	<div class="row mt-5">
		<div class="col-lg-1 text-center">
			<div class="team">
				<a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip" data-placement="top" title="" data-original-title="Play">
					<img src="<?php echo e(asset('assets/images/play-button.svg')); ?>" id="play-button" class="rounded-circle avatar-xm m-1 play-btn play-button" alt="">
				</a>
			</div>
		</div>
		<div class="col-lg-2 text-center">
			<h3 class="text-truncate font-size-20"><a href="crypto-exchange" class="text-dark"><b>1.Dark Fantasy</b></a></h3>
		</div>
		<div class="col-lg-3 text-center mt-3">
			<a data-skip="-10" href="javascript: void(0);" class="w-25 player__button">
				<img src="<?php echo e(asset('assets/images/rewind.svg')); ?>" class="rounded-circle avatar-xm m-1 w-25" alt="">
			</a>
			<a href="javascript: void(0);">
				<img src="<?php echo e(asset('assets/images/pause-button.svg')); ?>" id="pause-button" class="rounded-circle avatar-xm m-1 w-75  pause-button" alt="">
			</a>
			<a data-skip="10" href="javascript: void(0);" class="w-25 player__button">
				<img src="<?php echo e(asset('assets/images/fast-forward.svg')); ?>" class="rounded-circle avatar-xm m-1 w-25" alt="">
			</a>
		</div>
		<div class="col-lg-2 text-center">
			<div class="row">

				<div class='controls-left controls-left mt-4 p-2' style="margin: auto;">
					<div class='volume'>
						<div class='volume-btn loud'>
							<i class="fas fa-volume-up"></i>
						</div>
						<div  class='volume-slider'>
							<div class='volume-filled'></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 text-center mt-4">
			<button type="button" class="btn valyou-o-btn">Promote</button>
		</div>	
	</div>
</div>



<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body bg-black">
				<div class="row">
					<div class="col-3 col-md-2 col-lg-1 col-sm-12 text-center padding-none">
						
						
						<img src="<?php echo e(URL::asset('assets/images/valyoux/kanyewest.svg')); ?>" alt="" class="rounded-circle" width="80%">
					</div>
					<div class="col-5 col-md-6 col-lg-6 col-sm-12">
						<div class="text-muted promote-page-little-banner">

							<p id="para1"> Artist share price</p>
							<p id="para2">PIA MIA $2.33VXD</p>
							<p id="para3"><i class="fa fa-clock-o" aria-hidden="true"></i> Upcoming</p>
						</div>
					</div>
					<br>
					
					<div class="col-4 col-md-4 col-lg-4 text-center">
						<button type="button" class="btn valyou-o-btn-invest"> Invest in Artist</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container mb-3">

	<div class="row">

		<div class="col-4 col-md-4 text-center padding-r ">
			<div class="card shadow-none" id="share-valyou-music" >
				<div class="card-body body-p">
					<img class="mb-2 share-box-image" src="<?php echo e(asset('assets/images/valyou_button_nh.svg')); ?>">
					<p class="card-text mobile-v" >Valyou Song</p>
				</div>
			</div>
		</div>


		<div class="col-4 col-md-4 text-center padding-r ">
			<div class="card shadow-none" id="share-comments" >
				<div class="card-body body-p">
					<img class="mb-2 share-box-image" src="<?php echo e(asset('assets/images/comments.svg')); ?>">
					<p class="card-text mobile-v">Comments</p>
				</div>
			</div>
		</div>
		<div class="col-4 col-md-4 text-center padding-r ">
			<div class="card shadow-none" id="share-promote-song"  >
				<div class="card-body body-p">
					<img class="mb-2 share-box-image" src="<?php echo e(asset('assets/images/promote.svg')); ?>">
					<p class="card-text mobile-v">Promote Song</p>
				</div>
			</div>
		</div>


	</div>
</div>


<div  style="display: none" id="sharing-section-1"> 
	<div class="w-100 user-chat">
		<div class="card">
			<div class="col-md-10 container">
				<ul class="list-unstyled" data-simplebar style="max-height: 470px;">
					
					
					<li>
						<div class="row">
							<div class="col-md-4">
								<div class="row">
									<div class="col-md-4  artist-comment-image-div">
										<img src="<?php echo e(URL::asset('assets/images/valyoux/kanyewest.svg')); ?>" alt="" class="avatar-md rounded-circle ">
									</div>
									<div class="col-md-8 mt-4">
										<p class="text-dark font-size-16 artist-comment-name">Bobby k9</p>
									</div>
								</div>    
							</div>
							<div class="col-md-8 mt-5 artist-comment-desc">                                    
								<p>Awesome artist I would like to invest now!</p>  
							</div>
						</div>     
						
						<p style="color: #ccc!important" class="float-right">2 Hours ago </p>
						<hr class="mb-2">                                    
					</li>
					
					<li>
						<div class="row">
							<div class="col-md-4">
								<div class="row">
									<div class="col-md-4 artist-comment-image-div">
										<img src="<?php echo e(URL::asset('assets/images/valyoux/kanyewest.svg')); ?>" alt="" class="avatar-md rounded-circle ">
									</div>
									<div class="col-md-8 mt-4 ">
										<p class="text-dark font-size-16 artist-comment-name">Bobby k9</p>
									</div>
								</div>    
							</div>
							<div class="col-md-8 mt-5 artist-comment-desc">                                    
								<p>Awesome artist I would like to invest now!</p>  
							</div>
						</div>     
						
						<p style="color: #ccc!important" class="float-right">2 Hours ago </p>
						<hr class="mb-2">                                    
					</li>
					
					
					
				</ul>
			</div>
			<div class="p-3 chat-input-section">
				<div class="row text-center">
					<div class="col-md-2">
						<div class="mr-3">
							<img src="<?php echo e(URL::asset('assets/images/valyoux/kanyewest.svg')); ?>" alt="" class="avatar-md rounded-circle ">
						</div>
					</div>
					<div class="col-md-8 mt-3">
						
						<div class="position-relative">
							<input type="text" class="form-control chat-input" placeholder="Enter Comment...">
						</div>
					</div>
					
					<div class="col-md-2">
						<img style="transform: rotate(270deg);" class="mr-3"style="height:30px; width:30px" src="<?php echo e(asset('assets/images/valyoux/pink_arrow_circle_down.svg')); ?>"> 
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>
<div style="display: none" id="sharing-section-2"> 
	<div class="container">
		<div class="btn-margin">
			<div class="row">
				<div class="col-1 col-md-1">
				</div>
				<div class="col-2 col-md-2"> 
					<button type="button" class=" btn btn-light radio dollar-price " data-toggle="tooltip" data-placement="top" data-original-title="This song is nice, might be a hit, Valyou for $1." class="btn btn-light radio" >$1</button>
				</div>
				<div class="col-2 col-md-2" >
					<button type="button" class=" btn btn-light radio dollar-price " data-toggle="tooltip" data-placement="top" data-original-title="This song is nice, might be a hit, Valyou for $2." class="btn btn-light radio" >$2</button>
				</div>
				<div class="col-2 col-md-2 ">
					<button type="button" class=" btn btn-light radio dollar-price " data-toggle="tooltip" data-placement="top" data-original-title="This song is nice, might be a hit, Valyou for $3." class="btn btn-light radio" >$3</button>
				</div>
				<div class="col-2 col-md-2 ">
					<button type="button" class=" btn btn-light radio dollar-price " data-toggle="tooltip" data-placement="top" data-original-title="This song is nice, might be a hit, Valyou for $4." class="btn btn-light radio" >$4</button>
				</div>
				<div class="col-2 col-md-2 ">
					<button type="button" class=" btn btn-light radio dollar-price " data-toggle="tooltip" data-placement="top" data-original-title="This song is nice, might be a hit, Valyou for $5." class="btn btn-light radio" >$5</button>
				</div>
			</div>
		</div>
		<div style="display: none;" class="container col-md-12 text-center mb-5 proceed-valyou-song-div" >
			<button type="button" class="btn valyou-g-btn"> Proceed to Valyou Song</button>
		</div>
	</div>
</div>
<div  style="display: none" id="sharing-section-3" > 
	<div class="card text-center">
		<h2 style="color: #000000;font-size: 13px; margin: 15px auto ; text-align: center;padding: 7px 12px;">Invite a friend, new fans & potential investors to listen to your song</h2>
		<br>
		<div class="card-body price-card" >
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="input-price-div"> <p >How much do you want to spend?</p></div>
				</div>
				<div class="col-md-3"></div>
			</div>
			
			<div class="quantity">
				<input type='button' value='-' id="minus"  class='minus' field='quantity' />
				<span class="input-qty pt-3"></span><input type='text' name='quantity' value='25' class='qty input-qty dollar' />
				<input type='button' value='+' id="plus"  class='plus ' field='quantity' />
			</div>
			
		</div>
		<br><br><br>
		<h2 style="font-size: 13px; margin: auto 0 0; text-align: center; padding: 0 20px 20px; color: #000000;">Who would you like to pay to listen to your song so they may invest in you.</h2>
	</div>
	
	
	
	<div class="col-md-4 mb-2">
		<img class="mr-3"style="height:30px; width:30px" src="<?php echo e(asset('assets/images/Headphone investor.svg')); ?>">
	</div>
	<div class="row mb-5">
		<div class="col-md-4">
			<h2 class="fw-600">Investors on Valyou X </h2>
			<select class="select2-ajax select2-multiple"  multiple="multiple"></select>
		</div>
		<!--<div class="col-md-4  ">    -->
			<!--    <h2 class="fw-600">Investors on Valyou X </h2>-->
			
			<!--</div>-->
			
			<div class="col-md-4 ">
				<h2 class="fw-600">Email ID</h2>
				<input type="text"  data-role="tagsinput" placeholder="Add Emails" class="form-control" />
			</div>
			
			<div class="col-md-4 ">
				<h2 class="fw-600">Phone number</h2>
				<input class="form-control number-input-music" placeholder="Enter Number" type="number">
			</div>
			
		</div>
		<br>
		<div class="row mb-5">
			<div class="col-md-6 text-center mb-3">
				<div class="card client-input shadow-lg">
					<img src="<?php echo e(asset('assets/images/PReward per listen .svg')); ?>">
					<div class="card-body">
						<p class="card-text">Reward each listener. Amount you would like to pay each listener. <br> Min $0.10 VXD - Max $1.00 VXD</p>
						<input type='button' value='-' class='minus' id="minus2" field='quantity2' />
						<span class="input-qty pt-3"></span> <input type='text' name='quantity2' value='25' class='qty input-qty pt-3' />
						<input type='button' value='+' class='plus ' id="plus2" field='quantity2' />
					</div>
				</div>
			</div>
			
			<div class="col-md-6 text-center mb-3">
				<div class="card client-input">
					<img src="<?php echo e(asset('assets/images/send-_promote_start.svg')); ?>">
					<div class="card-body">
						<p class="card-text">How much of your budget would you like to spend per day ? </p>
						<input type='button' value='-' class='minus' id="minus3" field='quantity3' />
						<span class="input-qty pt-3"></span> <input type='text' name='quantity3' value='25' class='qty input-qty pt-3' />
						<input type='button' value='+' class='plus '  id="plus3" field='quantity3' />
					</div>
				</div>
			</div>
		</div>
		<br>
		
		
		
		<div class="row col-md-12">
		</div>
		<br> <br>
		<div class="col-md-12 text-center ">
			<img class="mr-2 mb-2"  src="<?php echo e(asset('assets/images/send-_promote_start.svg')); ?>">
			<h2>Send / Start</h2>
			
			<h5 class="font-size-14 mb-3 text-center">Share it on</h5>
			<div class="mt-4 text-center row">
				<div class="col-lg-12">
					<ul class="list-inline">
						<li class="list-inline-item">
							<a href="#" class="social-list-item bg-primary text-white border-primary">
								<i class="mdi mdi-facebook"></i>
							</a>
						</li>
						<li class="list-inline-item">
							<a href="#" class="social-list-item bg-info text-white border-info">
								<i class="mdi mdi-twitter"></i>
							</a>
						</li>
						<li class="list-inline-item">
							<a href="#" class="social-list-item bg-danger text-white border-danger">
								<i class="mdi mdi-google"></i>
							</a>
						</li>
						
						<li class="list-inline-item">
							<a href="#" class="social-list-item  text-white ">
								<img src="<?php echo e(asset('assets/images/valyou_xemblem.svg')); ?>" alt="" height="30">
							</a>
						</li>
					</ul>
				</div>
			</div>
			
		</div>
	</div>

</div>

</div>
<!-- end row -->

<div class="row">
	<div class="col-12">
		<div class="text-center my-3">
			<a href="javascript:void(0);" class="text-success"><i
				class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Load more </a>
			</div>
		</div> <!-- end col-->
	</div>
	<!-- end row -->

	<?php $__env->stopSection(); ?>



	<?php $__env->startSection('script'); ?>


	<script src="<?php echo e(URL::asset('assets/libs/select2/select2.min.js')); ?>"></script>
	<script src="<?php echo e(URL::asset('assets/js/pages/form-advanced.init.js')); ?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/multiselect/2.2.9/js/multiselect.js"></script>
	<script src="<?php echo e(URL::asset('assets/js/pages/promote-music.js')); ?>"></script>
	<script src="<?php echo e(URL::asset('assets/js/pages/custom-player.js')); ?>"></script>

	<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/promote-music.blade.php ENDPATH**/ ?>