@extends('layouts.master')
@section('pageCSS')
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/pages/my-songs.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/select2/select2.min.css') }}">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/pages/social-media.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/pages/my-videos.css') }}">

@endsection
@section('title') Artist @endsection

<style>
	.b-green {
		color: #1edd0e;
	}
	.s-red {
		color: #ff0093;
	}
	/*code for post header section*/
	.ps-parent{
		display: flex;
		align-items: center;
		justify-content: space-between;
	}
	.ps-left-wrap{
		display: flex;
		align-items: center;
	}
	.ps-left-wrap img{
		margin-right: 25px;
	}
	.pslw-inner{

	}
	.pslw-inner .pslw-heading{
		font-size: 24px;
		font-weight: 800;
		margin: 0px;
		color: #F24336;
	}
	.pslw-inner .pslw-para{

	}
	.ps-right-wrap{

	}
	.ps-right-wrap p{
		margin-right: 120px;
	}



	@media (max-width: 768px){
		.page-content{
			padding: 80px 10px 80px !important;
		}
	}

</style>
<style>
	.for-padd-row{
			padding-right: 15px;
	}
	.valyou-o-btn-invest {
		padding: 8px 20px;
		font-size: 20px;
		margin-top: 0;
	}
	.social-media-profile-wrap{
		background: #000;
		padding: 10px 22px 10px 20px;
		box-shadow: 0 1.5px 4px 0 rgba(0, 0, 0, 0.3) !important;
		margin-bottom: 10px;
		border-radius: 4px;
		display: flex;
		align-items: center;
		justify-content: space-between;
	}
	.sm-left-wrap {
		display: flex;
		align-items: flex-start;
	}
	.sm-left-wrap img{
		margin: 3px 10px;
		width: 65px;
		height: 65px;
	}
	.sm-left-desc{

	}
	.sm-left-desc h5{
		font-size: 13px;
		color: #FF4182;
		margin-bottom: 8px;
	}
	.sm-left-desc h2{
		color: #FF4182;
		margin-bottom: 5px;
		font-weight: 600;
		font-size: 24px;
		line-height: 1.2;
	}
	.sm-left-desc p{
		color: #fff;
		font-size: 13px;
		margin: 0
	}
	.sm-left-desc p i{
		margin-right: 2px
	}
	.sm-right-wrap .btn-invest-pink-grad{
		color: #fff;
		background-image: linear-gradient(77deg, #FF4182, #FFA85B 100%);
		border: none;
		width: 100%;
		border-radius: 4px;
		font-size: 20px;
		padding: 7px 20px;
	}
	.color-pinkk{
		color: #F9508A !important;
		font-weight: 600;
	}
	.card.shadow-none {
		border-radius: 17px;
	}
	.artist-comment-desc{
		margin-left: 0;
	}
	.tooltip{
		z-index: 1 !important;
	}
	.proceed_modal{

	}
	.proceed_modal .modal-body {
		padding: 0 1rem;
	}
	.proceed_modal .modal-header {
		border-bottom: none;
	}
	.popup-text{

	}
	.width-40{
		max-width: 40px;
	}
	.for-btn-post{
		align-items: center;
		display: flex;
		justify-content: flex-end;
	}

	/*comment css */
	.single-comment{
		display: flex;
		align-items: flex-start;
	}
	.sc-img{
		margin-right: 15px;
		margin-bottom: 20px;
		height: 60px;
		width: 60px;
	}
	.sc-inner{
		display: flex;
		align-items: baseline;
		width: 100%;
		background: #ededed;
		padding: 15px;
		border-radius: 10px;
		height: 100%;
	}
	.sc-name{
		white-space: nowrap;
		width: 90%;
		/*margin-top: 25px;*/
		margin-bottom: 0;
		font-size: 14px;
		font-weight: 600;
		color: #F9508A;
		max-width: 170px;
		min-width: 170px;
	}
	.sc-comment{
		margin-bottom: 0;
		font-size: 12px;
	}
	.sidebar-enable.vertical-collpsed .single-comment{

	}
	.sidebar-enable.vertical-collpsed .sc-img{
		margin-right: 35px;
	}
	.sidebar-enable.vertical-collpsed .sc-inner{

	}
	.sidebar-enable.vertical-collpsed .sc-name{
		width: 70%;
	}
	.sidebar-enable.vertical-collpsed .sc-comment{

	}

	@media (max-width: 575px){
		.social-media-profile-wrap{
		padding: 10px 5px;
		}
		.sm-left-wrap {
			margin-right: 5px;
		}
		.sm-left-wrap img{
			margin: 3px 10px 0 2px;
			width: 55px;
			height: 55px;
		}
		.sm-left-desc h2{
			font-size: 16px;
		}
		.sm-left-desc p{
			font-size: 12px;
		}
		.sm-right-wrap .btn-invest-pink-grad{
			font-size: 11px;
			padding: 5px 5px;
		}
		.sm-left-wrap img.img-40 {
			width: 40px;
		}
		.avatar-md {
			height: auto;
			width: 25px;
		}
		.pad-left-0{
			padding-left: 0px;
		}
		.artist-comment-desc {
			margin-top: 0;
			margin-right: 0;
			margin-bottom: 0;
			margin-left: 16.6666666667%;
		}

		.sc-inner {
			flex-wrap: wrap;
			background: #ededed;
			padding: 10px;
			border-radius: 10px;
		}
		.sc-name {
			width: 100%;
			margin-top: 0;
		}
		.sc-comment {
			margin-top: 5px;
			width: 100%;
		}
		.sc-img {
			margin-bottom: 0;
			margin-top: 2px;
		}
		.post-section{
			padding: 10px !important;
		}
		.sm-right-wrap{
			margin-right: 7px;
		}
		.uploading-section-upload-img{
			padding: 5px 0px 9px;
			margin: 5px 2px 0;
			margin-right: 10px;
			max-width: 27px;
		}
		.width-40{
			max-width: 24px;
			margin-right: 10px;
		}
	}
	.artist-maker-tabs {
		overflow-x: scroll;
	}
	.artist-maker-tabs a{
		padding: 5px 25px;
	}
	.artist-maker-tabs::-webkit-scrollbar {
		-webkit-appearance: none;
	}
	.artist-maker-tabs::-webkit-scrollbar:vertical {
		width: 6px;
	}
	.artist-maker-tabs::-webkit-scrollbar:horizontal {
		height: 6px;
	}
	.artist-maker-tabs::-webkit-scrollbar-thumb {
		border-radius: 8px;
		border: 2px solid white; /* should match background, can't be transparent */
		background-color: #ededed;
	}
	.artist-markets-content-wrap {
		padding-top: 20px;
	}
	.parent-for-video{
		position: relative;
	}
	.parent-for-video video{
		max-height: 450px;
	}
	.overlay-for-video{
		position: absolute;
		top: 0;
		background: rgb(0 0 0 / 54%);
		bottom: 0;
		right: 0;
		left: 0;
		cursor: pointer;
		display: flex;
		align-items: center;
		justify-content: center;
	}
	.overlay-for-video img{

	}
	.video-modal{

	}
	.video-modal .modal-body{

	}
	.video-modal .modal-body p{

	}
	.valyou-g-btn {
		color: #fff;
		padding: 10px 15px;
		background-image: linear-gradient(77deg, #00B8BA, #00FFC2 100%);
		border: none;
		width: 100%;
		max-width: 175px;
	}
	.valyou-g-btn:hover {
		color: #fff;
		background-image: linear-gradient(77deg , #00FFC2, #00B8BA 100%);
	}
</style>
<style>
	@media (max-width: 525px){
		.ps-right-wrap p {
			margin-right: 0;
			font-size: 11px;
		}
		.pslw-inner .pslw-heading{
			font-size: 20px;
		}
		.pslw-inner .pslw-para{
			font-size: 11px;
		}
		.parent-for-video video {
			max-height: 200px;
		}
		.tab-margin-top{
			margin-top: 105px !important;
		}
		.bs-float-parent{
			height: 30px !important;
		}
	}
</style>
<!--new caption styles for video -->
<style>

.song-caption {
  margin-top: 15px;
}

.song-caption .song_name {
  font-weight: 800;
  margin: 0px;
  color: #F24336;
  font-size: 14px;
}

.song-caption .song_valyou {
  margin: 10px 0;
  border-bottom: 1px solid #e5e5e5;
  padding-bottom: 10px;
  font-size: 12px;
}

.song_artist_sec {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
	  -ms-flex-align: start;
		  align-items: flex-start;
}

.song_artist_sec img {
  max-width: 50px;
  margin: 0;
  margin-right: 10px;
  border-radius: 50%;
  width: 50px;
  height: 50px;
  border: none;
}

.song_artist_sec .sac_right .sc_artist_name {
  font-size: 14px;
  margin: 5px 0;
}

.song_artist_sec .sac_right .sc_shareprice {
  font-size: 12px;
  margin: 0;
}
</style>
@section('content')
	<div class="row">
		@include('layouts.profile-box')
	</div>
	<!-- end row -->
	<div class="tab-select tab-margin-top">
		<a href="projects-list" class="unclicked"> Market </a>
		<a href="crypto-exchange" class="unclicked"> Stock price </a>
		<a href="songs" class="unclicked"> Songs</a>
		<a href="videos" class="active"> Videos </a>
		<a class="unclicked"> Photos </a>
		<a class="unclicked"> Links </a>
		<div class="search_bar">
			<input placeholder="Search">
		</div>
	</div>
	<!--<div class="row">-->
	<!--    <div class="col-lg-12">-->
			<!--<div class="table-responsive">-->
			<!--        <table class="table project-list-table table-nowrap table-centered table-borderless">-->

			<!--            <tbody>-->
			<!--            <tr>-->
			<!--                <td>-->
			<!--                    1-->
			<!--                </td>-->
			<!--                <td>-->
			<!--                    <h3 class="text-truncate font-size-20"><a href="crypto-exchange" class="text-dark"><b>1.Dark Fantasy</b></a></h3>-->
			<!--                </td>-->
			<!--                <td>-->
			<!--                    <div class="col-lg-6">-->
			<!--                        <div class="card">-->
			<!--                            <div class="card-body">-->
			<!--                                <video width="320" height="240" controls>-->
			<!--                                    <source src="{{ asset('assets/videos/video.mp4') }}" type="video/mp4">-->
			<!--                                </video>-->
			<!--                            </div>-->
			<!--                        </div>-->
			<!--                    </div> <!-- end col -->
			<!-- </td>-->

			<!--                <td>-->
			<!--                    <button type="button" class="btn valyou-o-btn"> Promote</button>-->
			<!--                </td>-->
			<!--            </tr>-->

			<!--            <tr>-->
			<!--                <td>-->
			<!--                    1-->
			<!--                </td>-->
			<!--                <td>-->
			<!--                    <h3 class="text-truncate font-size-20"><a href="crypto-exchange" class="text-dark"><b>1.Dark Fantasy</b></a></h3>-->
			<!--                </td>-->
			<!--                <td>-->
			<!--                    <div class="col-lg-6">-->
			<!--                        <div class="card">-->
			<!--                            <div class="card-body">-->
			<!--                                <video width="320" height="240" controls>-->
			<!--                                    <source src="{{ asset('assets/videos/video.mp4') }}" type="video/mp4">-->
			<!--                                </video>-->
			<!--                            </div>-->
			<!--                        </div>-->
			<!--                    </div> <!-- end col -->
			<!--                </td>-->

			<!--                <td>-->
			<!--                    <button type="button" class="btn valyou-o-btn"> Promote</button>-->
			<!--                </td>-->
			<!--            </tr>-->
			<!--            <tr>-->
			<!--                <td>-->
			<!--                    1-->
			<!--                </td>-->
			<!--                <td>-->
			<!--                    <h3 class="text-truncate font-size-20"><a href="crypto-exchange" class="text-dark"><b>1.Dark Fantasy</b></a></h3>-->
			<!--                </td>-->
			<!--                <td>-->
			<!--                    <div class="col-lg-6">-->
			<!--                        <div class="card">-->
			<!--                            <div class="card-body">-->
			<!--                                <video width="320" height="240" controls>-->
			<!--                                    <source src="{{ asset('assets/videos/video.mp4') }}" type="video/mp4">-->
			<!--                                </video>-->
			<!--                            </div>-->
			<!--                        </div>-->
			<!--                    </div> <!-- end col -->
			<!--                </td>-->

			<!--                <td>-->
			<!--                    <button type="button" class="btn valyou-o-btn"> Promote</button>-->
			<!--                </td>-->
			<!--            </tr>-->
			<!--            </tbody>-->
			<!--        </table>-->
			<!--    </div>-->


			<!--<div class="col-lg-12 col-12 padding-n">-->
				<!--<video id="video" src="https://myprojectstaging.com/valyouxmusic/public/assets/videos/drake-video.mp4" class="video"  type="video/mp4"   controls  playsinline ></video>-->
			<!--</div>-->
	<!--    </div>-->
	<!--</div>-->
	<!-- end row -->

	<!--new code starts -->

	<div class="social-post">
			<!--with video-->

			<div class="card margin-n" style="margin-bottom: 20px">
				<div class="post-section card-body">
					<div class="col-lg-12 col-12 padding-n parent-for-video">
						<video id="video" src="https://myprojectstaging.com/valyouxmusic/public/assets/videos/drake-video.mp4" class="video"  type="video/mp4"   controls  playsinline ></video>
					</div>
					<!--new stuff-->

					<div class="song-caption">
						<h5 class="song_name">Started from the bottom</h5>
						<p class="song_valyou">Song Valyou: $10,000</p>
					</div>
					<div class="song_artist_sec">
						<img class="img-fluid rounded-circle" src="{{ URL::asset('assets/uploads/user/69619967.png') }}" alt="">
						<div class="sac_right">
							<h6 class="sc_artist_name">Drake</h6>
							<p class="sc_shareprice">Share Price: $2.33 VXD</p>
						</div>
					</div>


				</div>
			</div>

			<!--with popup-->
			<div class="card margin-n">
				<div class="post-section card-body">
					<!--<div class="row">-->
					<!--	<div class="col-lg-12 col-12">-->
							<!--new code -->
					<!--	    <div class="ps-parent">-->
		<!--					    <div class="ps-left-wrap">-->
		<!--					        <img class="post-section-artist-img rounded-circle" src="{{ URL::asset('assets/uploads/user/69619967.png') }}" alt="">-->
		<!--					        <div class="pslw-inner">-->
		<!--					            <p class="pslw-heading">Bobby K9</p>-->
		<!--								<p class="pslw-para light-gray-color">Major Artist <i class="fa fa-globe" aria-hidden="true"></i></p>-->
		<!--					        </div>-->
		<!--					    </div>-->
		<!--					    <div class="ps-right-wrap">-->
		<!--					        <p class="">Music Artist</p>-->
		<!--					    </div>-->
					<!--	    </div>-->

					<!--	</div>-->
					<!--</div>-->
					<!--<div class="col-lg-12 col-12 padding-n">-->
					<!--	<p class="post-section-para">Check out my new video, Started from the bottom. ovoxox sounds  #dope #social music media is for posting only music related brand content</p>-->
					<!--</div>-->


					<div class="col-lg-12 col-12 padding-n parent-for-video">
						<video id="video" src="https://myprojectstaging.com/valyouxmusic/public/assets/videos/drake-video.mp4" class="video"  type="video/mp4"   controls  playsinline ></video>
						<div class="overlay-for-video" data-toggle="modal" data-target="#staticBackdrop">
							<img src="{{ asset('assets/images/play-button.svg') }}" class="rounded-circle" alt="">
						</div>

					<!-- Modal -->
					<div class="modal fade video-modal" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="staticBackdropLabel"><b class="color-pinkk">Pay $0.02 cents and listen</b></h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
						  <div class="modal-body">
							<p>You will be charged $0.02 cents if you listen to this song or watch this video. Do you wish to proceed? </p>
							<p>If you do not wish to be charged again, you have the option to click and Valyou the song for an amount of your choice to receive unlimited plays for this particular song and battle it out for Vip artist-fan rewards.</p>
							<p>Thank you for supporting </p>
							<b>Artist Name or Brand.</b>
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn valyou-g-btn" data-dismiss="modal">OK</button>
						  </div>
						</div>
					  </div>
					</div>

					</div>
					<!--new stuff-->

					<div class="song-caption">
						<h5 class="song_name">Started from the bottom</h5>
						<p class="song_valyou">Song Valyou: $10,000</p>
					</div>
					<div class="song_artist_sec">
						<img class="img-fluid rounded-circle" src="{{ URL::asset('assets/uploads/user/69619967.png') }}" alt="">
						<div class="sac_right">
							<h6 class="sc_artist_name">Drake</h6>
							<p class="sc_shareprice">Share Price: $2.33 VXD</p>
						</div>
					</div>


				</div>
			</div>

			<div  style="display: none" class="mt-3" id="sharing-section-1">
				<div class="w-100 user-chat">
					<div class="card">
						<div class="col-md-12 container">
							<ul class="list-unstyled mt-3" data-simplebar style="max-height: 470px;">
								<li>
									<!--new working -->
									<div class="row">
										<div class="col-12 single-comment">
											<img src="{{ URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png') }}" alt="" class="avatar-md rounded-circle sc-img img-fluid">
											<div class="sc-inner">
												<p class="sc-name artist-comment-name">Kanye West</p>
												<p class="sc-comment" >dope artist i had invest dope artist i had invest dope artist i had invest. dope artist i had invest dope artist i had invest dope artist i had invest dope artist i had invest dope artist i had invest dope artist i had invest dope artist i had invest dope artist i had invest dope artist i had invest dope artist i had invest dope artist i had invest </p>
											</div>
										</div>
									</div>


									<hr class="mb-2">
								</li>
								<li>
									<div class="row">
										<div class="col-12 single-comment">
											<img src="{{ URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png') }}" alt="" class="avatar-md rounded-circle sc-img img-fluid">
											<div class="sc-inner">
												<p class="sc-name artist-comment-name">Kanye West</p>
												<p class="sc-comment" >Awesome artist I would like to invest now!</p>
											</div>
										</div>
									</div>
									<hr class="mb-2">
								</li>
								<li>
									<div class="row">
										<div class="col-12 single-comment">
											<img src="{{ URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png') }}" alt="" class="avatar-md rounded-circle sc-img img-fluid">
											<div class="sc-inner">
												<p class="sc-name artist-comment-name">Kanye West</p>
												<p class="sc-comment">Stocks going up</p>
											</div>
										</div>
									</div>
									<hr class="mb-2">
								</li>
							</ul>
						</div>
						<div class="p-3 chat-input-section">
							<div class="row text-center">
								<div class="col-md-2 col-2">
									<div class="mr-3">
										<img src="{{ URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png') }}" alt="" class="avatar-md rounded-circle ">
									</div>
								</div>
								<div class="col-md-8 mt-3 mt-0-mobile col-8 pad-left-0">
									<div class="position-relative">
										<input type="text" class="form-control chat-input" placeholder="Enter Comment...">
									</div>
								</div>
								<div class="col-md-2 col-2">
									<img style="transform: rotate(90deg);" class="mr-3 comment-btn" style="height:30px; width:30px" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div style="display: none;" id="sharing-section-2" >
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
						<button type="button" class="btn valyou-g-btn" data-toggle="modal" data-target="#proceedModal"> Proceed to Valyou Song</button>
					</div>
				</div>
			</div>

			<div  style="display: none;" id="sharing-section-3" >
				<div class="container">
					<div >
						<div class="card text-center">
							<h2 style="color: #000000;font-size: 13px; margin: 15px auto ; text-align: center;padding: 7px 12px;">Invite a friend, new fans & potential investors to listen to your song</h2>
							<br>
							<div class="card-body price-card" >
								<div class="row">
									<div class="col-md-3"></div>
									<div class="col-md-6">
										<div class="input-price-div">
											<p >How much do you want to spend?</p>
										</div>
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
							<img class="mr-3"style="height:30px; width:30px" src="{{ asset('assets/images/Headphone investor.svg') }}">
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
									<img src="{{ asset('assets/images/PReward per listen .svg') }}" class="">
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
									<img src="{{ asset('assets/images/send-_promote_start.svg') }}">
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
							<img class="mr-2 mb-2"  src="{{ asset('assets/images/send-_promote_start.svg') }}">
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
											<img src="{{ asset('assets/images/valyou_xemblem.svg') }}" alt="" height="30">
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container mb-3 mt-3">
				<div class="row ">
					<div class="col-4 col-md-4 text-center padding-r ">
						<div class="card shadow-none" id="share-valyou-music">
							<div class="card-body body-p">
								<img class="mb-2 share-box-image" src="{{ asset('assets/images/valyoux/valyousongiconnew@2x.png') }}">
								<p class="card-text mobile-v">Valyou Song</p>
							</div>
						</div>
					</div>
					<div class="col-4 col-md-4 text-center padding-r ">
						<div class="card shadow-none" id="share-comments">
							<div class="card-body body-p">
								<img class="mb-2 share-box-image" src="{{ asset('assets/images/comments.svg') }}">
								<p class="card-text mobile-v">Comments</p>
							</div>
						</div>
					</div>
					<div class="col-4 col-md-4 text-center padding-r ">
						<div class="card shadow-none" id="share-promote-song">
							<div class="card-body body-p">
								<img class="mb-2 share-box-image" src="{{ asset('assets/images/promote.svg') }}">
								<p class="card-text mobile-v">Promote</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<!--new desc text-->
					<div class="social-media-profile-wrap">
						<div class="sm-left-wrap">
							<img src="http://myprojectstaging.com/valyouxmusic/public/assets/images/valyoux/drake-valyou_x_music@2x.png" alt="" class="avatar-md rounded-circle">
							<div class="sm-left-desc">
								<h5>Artist share price</h5>
								<h2>Drake $2.33VXD</h2>
								<p><i class="fa fa-clock-o" aria-hidden="true"></i>  Major Artist</p>
							</div>
						</div>
						<div class="sm-right-wrap">
							<button type="button" class="btn-invest-pink-grad" onclick="location.href ='http://myprojectstaging.com/valyouxmusic/public/crypto-exchange'"> Invest in Artist</button>
						</div>
					</div>
					<!--new desc text end-->

				</div>
			</div>
			<div class="card ">
				<div class="card-body">
					<div id="sponsored-section mt-3" class="row">
						<div class="col-lg-12 col-12 mt-3">
							<p class="sponsored-section-p1">Sponsored Ad</p>
							<div class="sponsered-inner">
								<p class="green-one">Current offer $40.00 For  24 hours </p>
								<p class="pink-one">Bid Now</p>
							</div>
						</div>
						<div class="col-lg-12 col-12 text-center">
							<p class="sponsored-section-p2">Invest in music artist on Valyou X</p>
						</div>
						<div class="col-lg-12 col-12 text-center">
							<p class="sponsored-section-p3">The World's First Artist Stock Market</p>
						</div>
						<div class="col-lg-12 col-12 mb-3">
							<div class="row">
								<div class="col-lg-3 col-2 ">
								</div>
								<div class="col-lg-6 col-8 text-center">
									<button type="button" class="btn valyou-o-btn-invest-lg"> Watch & Earn $3</button>
								</div>
								<div class="col-lg-3 col-2">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	<!--new code ends -->









	<div class="row d-none">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title mb-4">Music Fan Investor</h4>

					<div class="table-responsive">
						<table class="table table-bordered mb-0">
							<thead>
							<tr class="text-center">
								<th colspan="3">Best Offer to Buy</th>
								<th colspan="3">Best Offer to Sell</th>
							</tr>
							<tr>
								<th scope="col">Amount</th>
								<th scope="col">Total</th>
								<th scope="col">Price</th>
								<th scope="col">Amount</th>
								<th scope="col">Total</th>
								<th scope="col">Price</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>0.0412</td>
								<td>0.0412</td>
								<td>256.18</td>
								<td>0.0201</td>
								<td>0.0201</td>
								<td>124.98</td>
							</tr>
							<tr>
								<td>0.0301</td>
								<td>0.0301</td>
								<td>187.16</td>
								<td>0.0165</td>
								<td>0.0165</td>
								<td>102.60</td>
							</tr>
							<tr>
								<td>0.0523</td>
								<td>0.0523</td>
								<td>325.21</td>
								<td>0.0348</td>
								<td>0.0348</td>
								<td>216.39</td>
							</tr>
							<tr>
								<td>0.0432</td>
								<td>0.0432</td>
								<td>268.62</td>
								<td>0.0321</td>
								<td>0.0321</td>
								<td>199.60</td>
							</tr>
							<tr>
								<td>0.0246</td>
								<td>0.0246</td>
								<td>152.96</td>
								<td>0.0403</td>
								<td>0.0403</td>
								<td>250.59</td>
							</tr>
							</tbody>
						</table>


					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					<h4 class="card-title mb-4">Transactions</h4>

					<div data-simplebar style="max-height: 310px;">
						<ul class="verti-timeline list-unstyled">
							<li class="event-list">
								<div class="event-timeline-dot">
									<i class="bx bx-right-arrow-circle font-size-18"></i>
								</div>
								<div class="media">
									<div class="mr-3">
										<h5 class="font-size-14">15 Mor <i
												class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i>
										</h5>
									</div>
									<div class="media-body">
										<div>
											Sold 5 Beyonce Share at $250 per share.
										</div>
									</div>
								</div>
							</li>
							<li class="event-list">
								<div class="event-timeline-dot">
									<i class="bx bx-right-arrow-circle font-size-18"></i>
								</div>
								<div class="media">
									<div class="mr-3">
										<h5 class="font-size-14">14 Mor <i
												class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i>
										</h5>
									</div>
									<div class="media-body">
										<div>
											Sold 7 Beyonce Share at $250 per share.
										</div>
									</div>
								</div>
							</li>
							<li class="event-list">
								<div class="event-timeline-dot">
									<i class="bx bx-right-arrow-circle font-size-18"></i>
								</div>
								<div class="media">
									<div class="mr-3">
										<h5 class="font-size-14">13 Mor <i
												class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i>
										</h5>
									</div>
									<div class="media-body">
										<div>
											Sold 4 Beyonce Share at $250 per share.
										</div>
									</div>
								</div>
							</li>
							<li class="event-list">
								<div class="event-timeline-dot">
									<i class="bx bx-right-arrow-circle font-size-18"></i>
								</div>
								<div class="media">
									<div class="mr-3">
										<h5 class="font-size-14">13 Mor <i
												class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i>
										</h5>
									</div>
									<div class="media-body">
										<div>
											Sold 8 Beyonce Share at $250 per share.
										</div>
									</div>
								</div>
							</li>

							<li class="event-list">
								<div class="event-timeline-dot">
									<i class="bx bx-right-arrow-circle font-size-18"></i>
								</div>
								<div class="media">
									<div class="mr-3">
										<h5 class="font-size-14">12 Mor <i
												class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i>
										</h5>
									</div>
									<div class="media-body">
										<div>
											Sold 6 Beyonce Share at $250 per share.
										</div>
									</div>
								</div>
							</li>
							<li class="event-list">
								<div class="event-timeline-dot">
									<i class="bx bx-right-arrow-circle font-size-18"></i>
								</div>
								<div class="media">
									<div class="mr-3">
										<h5 class="font-size-14">11 Mor <i
												class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i>
										</h5>
									</div>
									<div class="media-body">
										<div>
											Sold 5 Beyonce Share at $250 per share.
										</div>
									</div>
								</div>
							</li>
							<li class="event-list">
								<div class="event-timeline-dot">
									<i class="bx bx-right-arrow-circle font-size-18"></i>
								</div>
								<div class="media">
									<div class="mr-3">
										<h5 class="font-size-14">10 Mor <i
												class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i>
										</h5>
									</div>
									<div class="media-body">
										<div>
											Sold 9 Beyonce Share at $250 per share.
										</div>
									</div>
								</div>
							</li>
							<li class="event-list">
								<div class="event-timeline-dot">
									<i class="bx bx-right-arrow-circle font-size-18"></i>
								</div>
								<div class="media">
									<div class="mr-3">
										<h5 class="font-size-14">09 Mor <i
												class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i>
										</h5>
									</div>
									<div class="media-body">
										<div>
											Sold 2 Beyonce Share at $250 per share.
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end row -->
	<div class="row bs-float-parent">
		<div class="col-xl-12">
			<div class="card mb-0 posFixed-sVxd" id="bs-float">
				<div class="card-body">
					<div class="stock-price text-center">Stock Price</div>
					<div class="d-flex d-flexBlock-mob justify-content-center bd-highlight align-items-center">
						<div class="marquee">
							<div class="track">
								<div class="vxd d-inline">$58.60 VXD</div>
								<div class="priceT d-inline pr-5">&nbsp;&nbsp;+28.57%</div>
								<div class="vxd d-inline pl-5">0.000014 BTC</div>
								<div class="priceT d-inline pr-5">&nbsp;&nbsp;+28.57%</div>
								<div class="vxd d-inline pl-5">$59.60 USDT</div>
								<div class="priceT d-inline pr-5">&nbsp;&nbsp;+28.57%</div>
								<div class="vxd d-inline pl-5">0.00019 ETH</div>
								<div class="priceT d-inline">&nbsp;&nbsp;+28.57%</div>
							</div>
						</div>
					</div>
					<div class="row text-center d-flex justify-content-center mb-3  mt-2">
						<div class="col-xl-2 col-sm-3 col-6">
							<button class="btn btn-pink btn-sm w-md waves-effect waves-light mr-3">Sell Stock</button>
						</div>
						<div class="col-xl-2 col-sm-3 col-6">
							<button class="btn btn-green btn-sm w-md waves-effect waves-light">Buy Stock</button>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- Modal -->
<div class="modal fade proceed_modal" id="proceedModal" aria-labelledby="proceedModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
	<div class="modal-content">
	  <div class="modal-header">
		  <h4><b class="color-pinkk">Congratulations ! </b></h4>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body">
		<p class="popup-text">
			<!--<b class="color-pinkk">Congratulations ! </b><br>-->
			You now have unlimited plays & access to listen to this song. It has now been added to your Valyou Playlist. <br><br>
			Kind Regards, <br>
			<b>Artist Name.</b>
		</p>
	  </div>
	  <!--<div class="modal-footer">-->
	  <!--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Okay</button>-->
	  <!--</div>-->
	</div>
  </div>
</div>
@endsection

@section('script')
	<!-- apexcharts -->
<script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<!-- crypto exchange init -->
<script src="{{ URL::asset('assets/js/pages/crypto-exchange.init.js') }}"></script>
<script src="{{ URL::asset('assets/libs/select2/select2.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/form-advanced.init.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/multiselect/2.2.9/js/multiselect.js"></script>

@endsection
<script type="text/javascript">

	$(document).on('click','.share-valyou-music',function () {
		let id = $(this).data('valyouid');
		$(`#valyou-music-section-${id}`).css('display','block');
		$(`#comments-section-${id}`).css('display','none');
		$(`#promote-song-section-${id}`).css('display','none');
	})

	$(document).on('click','.share-comments',function () {
		let id = $(this).data('commentid');
		$(`#valyou-music-section-${id}`).css('display','none');
		$(`#comments-section-${id}`).css('display','block');
		$(`#promote-song-section-${id}`).css('display','none');
	})

	$(document).on('click','.share-promote-song',function () {
		let id = $(this).data('promoteid');
		$(`#valyou-music-section-${id}`).css('display','none');
		$(`#comments-section-${id}`).css('display','none');
		$(`#promote-song-section-${id}`).css('display','block');
	})

</script>
