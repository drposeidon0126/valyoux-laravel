@extends('layouts.master')
@section('pageCSS')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/select2/select2.min.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/pages/social-media.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .valyou-o-btn-invest {
        padding: 8px 20px;
        font-size: 20px;
        margin-top: 0;
    }
    .social-media-profile-wrap{
        background: #000;
        padding: 10px;
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
        margin: 0 10px;
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
    @media (max-width: 575px){
        .social-media-profile-wrap{
        padding: 10px 5px;
        }
        .sm-left-wrap {
            margin-right: 5px;
        }
        .sm-left-wrap img{
            margin: 0 10px 0 2px;
            width: 50px;
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
    }
</style>
@endsection
@section('title') Market @endsection
@section('bottom-navbar')
<div id="uploading-section-artist-mobile" style="display: none">
	<div class="tab-select">
		<div class="carosel-box col-4">
			<div class="row">
				<div class="col-5 carosel-box-img-div">
					<img src="{{ asset('assets/images/valyoux/drake-valyou_x_music@2x.png') }}" width="59" height="59" class="rounded-circle avatar-xm m-1"
						alt="">
				</div>
				<div class="col-7 carosel-box-img-div  ">
					<div class="col-12">
						<p class="uploading-section-artist-mobile-p1">Drake</p>
					</div>
					<div class="col-12">
						<p class="uploading-section-artist-mobile-p2">$112,644,179</p>
					</div>
					<div class="col-12">
						<p class="uploading-section-artist-mobile-p3"><img class="uploading-section-artist-mobile--icon-img" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}"> +$312.3</p>
					</div>
				</div>
			</div>
		</div>
		<div class="carosel-box col-4">
			<div class="row">
				<div class="col-5 carosel-box-img-div">
					<img src="{{ asset('assets/images/valyoux/justin_beiber_valyou_x_music@2x.png') }}" width="59" height="59" class="rounded-circle avatar-xm m-1"
						alt="">
				</div>
				<div class="col-7 carosel-box-img-div  ">
					<div class="col-12">
						<p class="uploading-section-artist-mobile-p1">Justin Beiber</p>
					</div>
					<div class="col-12">
						<p class="uploading-section-artist-mobile-p2">$112,644,179</p>
					</div>
					<div class="col-12">
						<p class="uploading-section-artist-mobile-p3"><img class="uploading-section-artist-mobile--icon-img" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}"> +$312.3</p>
					</div>
				</div>
			</div>
		</div>
		<div class="carosel-box col-4">
			<div class="row">
				<div class="col-5 carosel-box-img-div">
					<img src="{{ asset('assets/images/valyoux/nicky_minaj_valyou_x@2x.png') }}" width="59" height="59" class="rounded-circle avatar-xm m-1"
						alt="">
				</div>
				<div class="col-7 carosel-box-img-div ">
					<div class="col-12">
						<p class="uploading-section-artist-mobile-p1">Nicky Minaj</p>
					</div>
					<div class="col-12">
						<p class="uploading-section-artist-mobile-p2">$112,644,179</p>
					</div>
					<div class="col-12">
						<p class="uploading-section-artist-mobile-p3"><img class="uploading-section-artist-mobile--icon-img" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}"> +$312.3</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="scrolling" id="upper-exchange" >
	Exchange Rates
	<span class="pink">:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<img src="{{ asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg') }}" width="20" height="20" alt=""> &nbsp;&nbsp;&nbsp;&nbsp; 1 Ethereum &nbsp;=&nbsp;
	<p id="E1">0.02776 BTC</p>
	&nbsp;=&nbsp; $
	<p id="E2">462.82 USD</p>
	&nbsp;&nbsp;
	<p id="B3" class="text-green"> +0.25% </p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<img src="{{ asset('assets/images/valyoux/bitcoinlogo.svg') }}" width="20" height="20">&nbsp;&nbsp;&nbsp;&nbsp;1 Bitcoin &nbsp;=&nbsp; $
	<p id="B2">16668.06 USD</p>
	&nbsp;&nbsp;
	<p id="B3" class="text-red"> -0.15% </p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<img src="{{ asset('assets/images/valyoux/vuxlogo.svg') }}" width="20" height="20">&nbsp;&nbsp;&nbsp;&nbsp;1 Valyou X Dollar (VXD) = &nbsp;&nbsp; $
	<p id="B2">1.00 USD</p>
	&nbsp;&nbsp;
	<p id="B3" class="text-red"> -0.1% </p>
</div>
@endsection
@section('content')
<div class="scrolling" id="lower-exchange" >
	Exchange Rates
	<span class="pink">:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<img src="{{ asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg') }}" width="20" height="20" alt=""> &nbsp;&nbsp;&nbsp;&nbsp; 1 Ethereum &nbsp;=&nbsp;
	<p id="E1">0.02776 BTC</p>
	&nbsp;=&nbsp; $
	<p id="E2">462.82 USD</p>
	&nbsp;&nbsp;
	<p id="B3" class="text-green"> +0.25% </p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<img src="{{ asset('assets/images/valyoux/bitcoinlogo.svg') }}" width="20" height="20">&nbsp;&nbsp;&nbsp;&nbsp;1 Bitcoin &nbsp;=&nbsp; $
	<p id="B2">16668.06 USD</p>
	&nbsp;&nbsp;
	<p id="B3" class="text-red"> -0.15% </p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<img src="{{ asset('assets/images/valyoux/vuxlogo.svg') }}" width="20" height="20">&nbsp;&nbsp;&nbsp;&nbsp;1 Valyou X Dollar (VXD) = &nbsp;&nbsp; $
	<p id="B2">1.00 USD</p>
	&nbsp;&nbsp;
	<p id="B3" class="text-red"> -0.1% </p>
</div>
<div class="row">
<div class="col-lg-12">
<!--tri-angle-->
<div class="row mt-4 ">
	<div class="col-lg-8 col-12">
		<p class="uploading-section-artist-sub-heading mb-2"> Create a new post </p>
		<div class="card post-card-mobile-body">
			<div class="uploading-section card-body">
				<div class="row">
					<div class="col-lg-2 col-4 marginnone ">
						<img src="{{ URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png') }}" alt="" class="avatar-md rounded-circle post-img ">
					</div>
					<div class="col-lg-10 col-8 mt-4 marginnone">
						<input type="text" class="form-control uploading-section-title" placeholder="Share your songs and videos">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-3">
					</div>
					<div class="col-lg-8 col-sm-6 col-md-8 padding-n for-btn-post">
						<img class="uploading-section-upload-img width-40" src="{{ asset('assets/images/valyoux/video_player.svg') }}">
						<img class="uploading-section-upload-img " src="{{ asset('assets/images/valyoux/news_feed_post.svg') }}">
						<button type="button" class="btn post-now-btn"> Post Now</button>
					</div>
				</div>
			</div>
		</div>
		<div class="social-post">
			<div class="card margin-n">
				<div class="post-section card-body">
					<div class="row">
						<div class="col-lg-12 col-12">
							<div class="row">
								<div class="col-lg-2 col-3">
									<img class="post-section-artist-img rounded-circle" src="{{ URL::asset('assets/images/valyoux/drake-valyou_x_music@2x.png') }}" alt="">
								</div>
								<div class="col-lg-7 col-6 post-header-bar">
									<p class="post-section-artist-p1">Drake</p>
									<p class="post-section-artist-p2 light-gray-color">Major Artist <i class="fa fa-globe" aria-hidden="true"></i></p>
								</div>
								<div class="col-lg-2 col-3">
									<p class="float-right mt-2 light-gray-color text-right">Music Artist</p>
								</div>
							</div>
						</div>
						<!--                                    <div class="col-lg-4 col-12 ">
							<p class="float-right mt-2 light-gray-color text-right"> 2 Hours a go <i class="fa fa-clock-o" aria-hidden="true"></i></p>
							</div>-->
					</div>
					<div class="col-lg-12 col-12 padding-n">
						<p class="post-section-para">Check out my new video, Started from the bottom. ovoxox sounds  #dope #social music media is for posting only music related brand content</p>
					</div>
					<div class="col-lg-12 col-12 padding-n">
						<video id="video" src="https://myprojectstaging.com/valyouxmusic/public/assets/videos/drake-video.mp4" class="video"  type="video/mp4"   controls  playsinline ></video>
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
				    
					<!--<div class="card bg-black">-->
					<!--	<div class="card-body">-->
					<!--		<div class="row align-items-center">-->
					<!--			<div class="col-lg-6">-->
					<!--				<div class="media">-->
					<!--					<div class="mr-3 ml-3">-->
					<!--						<img src="http://myprojectstaging.com/valyouxmusic/public/assets/images/valyoux/drake-valyou_x_music@2x.png" alt="" class="avatar-md rounded-circle">-->
					<!--					</div>-->
					<!--					<div class="media-body align-self-center">-->
					<!--						<div class="text-muted invest-an-artist">-->
					<!--							<p class="mb-2 share-price">Artist share price</p>-->
					<!--							<h2 class="mb-1">Drake $2.33VXD</h2>-->
					<!--							<p class="mb-0"><i class="fa fa-clock-o" aria-hidden="true"></i>  Major Artist</p>-->
					<!--						</div>-->
					<!--					</div>-->
					<!--				</div>-->
					<!--			</div>-->
					<!--			<div class="col-lg-6 d-lg-block">-->
					<!--				<div class="float-right">-->
					<!--					<button type="button" class="btn valyou-o-btn-invest"> Invest in Artist</button>-->
					<!--				</div>-->
					<!--			</div>-->
					<!--		</div>-->
							<!-- end row -->
					<!--	</div>-->
					<!--</div>-->
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
								<p class="card-text mobile-v">Promote Song</p>
							</div>
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
									<div class="row align-items-baseline">
										<div class="col-md-4 col-12">
											<div class="row artist-comment-image-div align-items-baseline">
												<div class="col-md-4 col-2 ">
													<img src="{{ URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png') }}" alt="" class="avatar-md rounded-circle ">
												</div>
												<div class="col-md-8 col-10 pad-left-0">
													<p class="text-dark font-size-14 artist-comment-name mb-0 color-pinkk">Kanye West</p>
												</div>
											</div>
										</div>
										<div class="col-md-6 artist-comment-desc offset-2 offset-md-none pad-left-0">
											<p class="font-size-12 mb-0" >dope artist i had invest dope artist i had invest dope artist i had invest. dope artist i had invest dope artist i had invest dope artist i had invest dope artist i had invest dope artist i had invest dope artist i had invest dope artist i had invest dope artist i had invest dope artist i had invest dope artist i had invest dope artist i had invest </p>
										</div>
									</div>
									<hr class="mb-2">
								</li>
								<li>
									<div class="row align-items-baseline">
										<div class="col-md-4 col-12">
											<div class="row artist-comment-image-div align-items-baseline">
												<div class="col-md-4 col-2 ">
													<img src="{{ URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png') }}" alt="" class="avatar-md rounded-circle ">
												</div>
												<div class="col-md-8 col-10 pad-left-0">
													<p class="text-dark font-size-14 artist-comment-name mb-0 color-pinkk">Kanye West</p>
												</div>
											</div>
										</div>
										<div class="col-md-6 artist-comment-desc offset-2 offset-md-none pad-left-0">
											<p class="font-size-12 mb-0" >Awesome artist I would like to invest now!</p>
										</div>
									</div>
									<hr class="mb-2">
								</li>
								<li>
								    <div class="row align-items-baseline">
										<div class="col-md-4 col-12">
											<div class="row artist-comment-image-div align-items-baseline">
												<div class="col-md-4 col-2 ">
													<img src="{{ URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png') }}" alt="" class="avatar-md rounded-circle ">
												</div>
												<div class="col-md-8 col-10 pad-left-0">
													<p class="text-dark font-size-14 artist-comment-name mb-0 color-pinkk">Kanye West</p>
												</div>
											</div>
										</div>
										<div class="col-md-6 artist-comment-desc offset-2 offset-md-none pad-left-0">
											<p class="font-size-12 mb-0" >Stocks going up</p>
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
			<div  style="display: none" id="sharing-section-3" >
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
									<img src="{{ asset('assets/images/PReward per listen .svg') }}">
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
			<div class="card ">
				<div class="card-body">
					<div id="sponsored-section mt-3" class="row">
						<div class="col-lg-12 col-12 mt-3">
							<p class="sponsored-section-p1">Sponsored In Demand</p>
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
		<div class="social-post">
			<div class="card margin-n">
				<div class="post-section card-body">
					<div class="row">
						<div class="col-lg-12 col-12">
							<div class="row">
								<div class="col-lg-2 col-3">
									<img class="post-section-artist-img rounded-circle" src="{{ URL::asset('assets/images/valyoux/bobby_k9_valyou_x_music250@2x.png') }}" alt="">
								</div>
								<div class="col-lg-7 col-6 post-header-bar">
									<p class="post-section-artist-p1">Bobby K.9.</p>
									<p class="post-section-artist-p2 light-gray-color">Professional Artist <i class="fa fa-globe" aria-hidden="true"></i></p>
								</div>
								<div class="col-lg-2 col-3">
									<p class="float-right mt-2 light-gray-color text-right">Artist <i class="fa fa-clock-o" aria-hidden="true"></i></p>
								</div>
							</div>
						</div>
						<!--                                    <div class="col-lg-4 col-12 ">
							<p class="float-right mt-2 light-gray-color text-right"> 2 Hours a go <i class="fa fa-clock-o" aria-hidden="true"></i></p>
							</div>-->
					</div>
					<div class="col-lg-12 col-12 padding-n">
						<p class="post-section-para">New music we are just dropped. Taking A Holiday #dope #social media is for posting only music related content
						</p>
					</div>
					<div class="col-lg-12 col-12 padding-n">
						<!--                                    <img class="post-section-img" src="{{ asset('assets/images/music-album.png') }}" alt="">
							-->
						<video id="video" src="https://myprojectstaging.com/valyouxmusic/public/assets/videos/bobby-videox.mp4" class="video"  type="video/mp4"   controls playsinline ></video>
					</div>
					
					<!--<div class="row bg-black mt-3 cover-bg align-items-center" >-->
					<!--	<div class="col-2 col-md-2 col-lg-2 text-center">-->
					<!--		<img src="http://myprojectstaging.com/valyouxmusic/public/assets/images/valyoux/bobby_k9_valyou_x_music250@2x.png" alt="" class="post-bottom-cover-image" width="80%">-->
					<!--	</div>-->
					<!--	<div class="col-7 col-md-4 col-lg-6">-->
					<!--		<div class="text-muted promote-page-little-banner">-->
					<!--			<p id="para1"> Artist share price</p>-->
					<!--			<p id="para2">Bobby K.9. $2.33VXD</p>-->
					<!--			<p id="para3"><i class="fa fa-clock-o" aria-hidden="true"></i> Professional Artist</p>-->
					<!--		</div>-->
					<!--	</div>-->
					<!--	<br>-->
					<!--	<div class="col-3 col-md-4 col-lg-4 text-center padding-n">-->
					<!--		<button type="button" class="btn valyou-o-btn-invest">Invest in Artist</button>-->
					<!--	</div>-->
					<!--</div>-->
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-12">
			<!--new desc text-->
		    <div class="social-media-profile-wrap">
		        <div class="sm-left-wrap">
		            <img src="http://myprojectstaging.com/valyouxmusic/public/assets/images/valyoux/bobby_k9_valyou_x_music250@2x.png" alt="" class="avatar-md rounded-circle">
		            <div class="sm-left-desc">
						<h5>Artist share price</h5>
						<h2>Bobby K.9. $2.33VXD</h2>
						<p><i class="fa fa-clock-o" aria-hidden="true"></i>  Professional Artist</p>
					</div>
		        </div>
		        <div class="sm-right-wrap">
		            <button type="button" class="btn-invest-pink-grad"> Invest in Artist</button>
		        </div>
		    </div>
		    <!--new desc text end-->
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
								<p class="card-text mobile-v">Promote Song</p>
							</div>
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
									<div class="row">
										<div class="col-md-4 col-12">
											<div class="row artist-comment-image-div">
												<div class="col-md-4 col-2 ">
													<img src="{{ URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png') }}" alt="" class="avatar-md rounded-circle ">
												</div>
												<div class="col-md-8 col-10 mt-4">
													<p class="text-dark font-size-12 artist-comment-name">Kanye West</p>
												</div>
											</div>
										</div>
										<div class="col-md-6 mt-5 artist-comment-desc">
											<p class="font-size-10" >dope artist i had invest</p>
										</div>
									</div>
									<hr class="mb-2">
								</li>
								<li>
									<div class="row">
										<div class="col-md-4 col-12">
											<div class="row artist-comment-image-div">
												<div class="col-md-4 col-2 ">
													<img src="{{ URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png') }}" alt="" class="avatar-md rounded-circle ">
												</div>
												<div class="col-md-8 col-10 mt-4">
													<p class="text-dark font-size-12 artist-comment-name">Kanye West</p>
												</div>
											</div>
										</div>
										<div class="col-md-6 mt-5 artist-comment-desc">
											<p class="font-size-10" >Awesome artist I would like to invest now!</p>
										</div>
									</div>
									<hr class="mb-2">
								</li>
								<li>
									<div class="row">
										<div class="col-md-4 col-12">
											<div class="row artist-comment-image-div">
												<div class="col-md-4 col-2 ">
													<img src="{{ URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png') }}" alt="" class="avatar-md rounded-circle ">
												</div>
												<div class="col-md-8 col-10 mt-4">
													<p class="text-dark font-size-12 artist-comment-name">Kanye West</p>
												</div>
											</div>
										</div>
										<div class="col-md-6 mt-5 artist-comment-desc">
											<p class="font-size-10" >Stocks going up </p>
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
										<img src="{{ URL::asset('assets/images/valyoux/bobby_k9_valyou_x_music250@2x.png') }}" alt="" class="avatar-md rounded-circle ">
									</div>
								</div>
								<div class="col-md-8 mt-3 mt-0-mobile col-8 ">
									<div class="position-relative">
										<input type="text" class="form-control chat-input" placeholder="Enter Comment...">
									</div>
								</div>
								<div class="col-md-2 col-2">
									<img style="transform: rotate(270deg);" class="mr-3 comment-btn" style="height:30px; width:30px" src="{{ asset('assets/images/valyoux/pink_arrow_circle_down.svg') }}"> 
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
						<button type="button" class="btn valyou-g-btn"> Proceed to Valyou Song</button>
					</div>
				</div>
			</div>
			<div  style="display: none" id="sharing-section-3" >
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
									<img src="{{ asset('assets/images/PReward per listen .svg') }}">
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
			<div class="card ">
				<div class="card-body">
					<div id="sponsored-section mt-3" class="row">
						<div class="col-lg-12 col-12 mt-3">
							<p class="sponsored-section-p1">Sponsored In Demand</p>
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
		<div class="social-post">
			<div class="card margin-n">
				<div class="post-section card-body">
					<div class="row">
						<div class="col-lg-12 col-12">
							<div class="row">
								<div class="col-lg-2 col-3">
									<img class="post-section-artist-img rounded-circle" src="{{ URL::asset('assets/images/valyoux/moniq.png') }}" alt="">
								</div>
								<div class="col-lg-7 col-6 post-header-bar">
									<p class="post-section-artist-p1">Monique R</p>
									<p class="post-section-artist-p2 light-gray-color">Music Fan <i class="fa fa-globe" aria-hidden="true"></i></p>
								</div>
								<div class="col-lg-2 col-3">
									<p class="float-right mt-2 light-gray-color text-right">Investor <i class="fa fa-clock-o" aria-hidden="true"></i></p>
								</div>
							</div>
						</div>
						<!--                                    <div class="col-lg-4 col-12 ">
							<p class="float-right mt-2 light-gray-color text-right"> 2 Hours a go <i class="fa fa-clock-o" aria-hidden="true"></i></p>
							</div>-->
					</div>
					<div class="col-lg-12 col-12 padding-n">
						<p class="post-section-para">
							I am a fan of justin beiber i just had to invest. I bought some shares #dope #social media is for posting only music related content
						</p>
					</div>
					<div class="col-lg-12 col-12 padding-n">
						<video id="video" src="https://myprojectstaging.com/valyouxmusic/public/assets/videos/justin.mp4" class="video"  type="video/mp4"   controls playsinline ></video>
					</div>
					
					
					<!--<div class="row bg-black mt-3 cover-bg" >-->
					<!--	<div class="col-2 col-md-2 col-lg-2 text-center">-->
					<!--		<img src="http://myprojectstaging.com/valyouxmusic/public/assets/images/valyoux/justin_beiber_valyou_x_music@2x.png" alt="" class="post-bottom-cover-image" width="80%">-->
					<!--	</div>-->
					<!--	<div class="col-7 col-md-6 col-lg-6">-->
					<!--		<div class="text-muted promote-page-little-banner">-->
					<!--			<p id="para1"> Artist share price</p>-->
					<!--			<p id="para2">Justin Bieber $2.33VXD</p>-->
					<!--			<p id="para3">Upcoming</p>-->
					<!--		</div>-->
					<!--	</div>-->
					<!--	<br>-->
					<!--	<div class="col-3 col-md-4 col-lg-4 text-center padding-n">-->
					<!--		<button type="button" class="btn valyou-o-btn-invest">Invest in music Artist</button>-->
					<!--	</div>-->
					<!--</div>-->
				</div>
			</div>
			
			<div class="row">
			    <div class="col-sm-12">
			        <!--new desc text-->
        		    <div class="social-media-profile-wrap">
        		        <div class="sm-left-wrap">
        		            <img src="http://myprojectstaging.com/valyouxmusic/public/assets/images/valyoux/justin_beiber_valyou_x_music@2x.png" alt="" class="avatar-md rounded-circle">
        		            <div class="sm-left-desc">
        						<h5>Artist share price</h5>
        						<h2>Justin Bieber $2.33VXD</h2>
        						<p><i class="fa fa-clock-o" aria-hidden="true"></i>  Upcoming</p>
        					</div>
        		        </div>
        		        <div class="sm-right-wrap">
        		            <button type="button" class="btn-invest-pink-grad"> Invest in Artist</button>
        		        </div>
        		    </div>
        		    <!--new desc text end-->
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
								<p class="card-text mobile-v">Promote Song</p>
							</div>
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
									<div class="row">
										<div class="col-md-4 col-12">
											<div class="row artist-comment-image-div">
												<div class="col-md-4 col-2 ">
													<img src="{{ URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png') }}" alt="" class="avatar-md rounded-circle ">
												</div>
												<div class="col-md-8 col-10 mt-4">
													<p class="text-dark font-size-12 artist-comment-name">Bobby k9</p>
												</div>
											</div>
										</div>
										<div class="col-md-6 mt-5 artist-comment-desc">
											<p class="font-size-10" >Awesome artist I would like to invest now!</p>
										</div>
									</div>
									<hr class="mb-2">
								</li>
								<li>
									<div class="row">
										<div class="col-md-4 col-12">
											<div class="row artist-comment-image-div">
												<div class="col-md-4 col-2 ">
													<img src="{{ URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png') }}" alt="" class="avatar-md rounded-circle ">
												</div>
												<div class="col-md-8 col-10 mt-4">
													<p class="text-dark font-size-12 artist-comment-name">Bobby k9</p>
												</div>
											</div>
										</div>
										<div class="col-md-6 mt-5 artist-comment-desc">
											<p class="font-size-10" >Awesome artist I would like to invest now!</p>
										</div>
									</div>
									<hr class="mb-2">
								</li>
								<li>
									<div class="row">
										<div class="col-md-4 col-12">
											<div class="row artist-comment-image-div">
												<div class="col-md-4 col-2 ">
													<img src="{{ URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png') }}" alt="" class="avatar-md rounded-circle ">
												</div>
												<div class="col-md-8 col-10 mt-4">
													<p class="text-dark font-size-12 artist-comment-name">Bobby k9</p>
												</div>
											</div>
										</div>
										<div class="col-md-6 mt-5 artist-comment-desc">
											<p class="font-size-10" >Awesome artist I would like to invest now!</p>
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
								<div class="col-md-8 mt-3 mt-0-mobile col-8 ">
									<div class="position-relative">
										<input type="text" class="form-control chat-input" placeholder="Enter Comment...">
									</div>
								</div>
								<div class="col-md-2 col-2">
									<img style="transform: rotate(270deg);" class="mr-3 comment-btn" style="height:30px; width:30px" src="{{ asset('assets/images/valyoux/pink_arrow_circle_down.svg') }}"> 
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
						<button type="button" class="btn valyou-g-btn"> Proceed to Valyou Song</button>
					</div>
				</div>
			</div>
			<div  style="display: none" id="sharing-section-3" >
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
									<img src="{{ asset('assets/images/PReward per listen .svg') }}">
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
			<div class="card ">
				<div class="card-body">
					<div id="sponsored-section mt-3" class="row">
						<div class="col-lg-12 col-12 mt-3">
							<p class="sponsored-section-p1">Sponsored In Demand</p>
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
		<div class="social-post">
			<div class="card margin-n">
				<div class="post-section card-body">
					<div class="row">
						<div class="col-lg-12 col-12">
							<div class="row">
								<div class="col-lg-2 col-3">
									<img class="post-section-artist-img rounded-circle" src="{{ URL::asset('assets/images/valyoux/nicky_minaj_valyou_x@2x.png') }}" alt="">
								</div>
								<div class="col-lg-7 col-6 post-header-bar">
									<p class="post-section-artist-p1">Nicky Minaj</p>
									<p class="post-section-artist-p2 light-gray-color">Major Artist <i class="fa fa-globe" aria-hidden="true"></i></p>
								</div>
								<div class="col-lg-2 col-3">
									<p class="float-right mt-2 light-gray-color text-right">Artist</p>
								</div>
							</div>
						</div>
						<!--                                    <div class="col-lg-4 col-12 ">
							<p class="float-right mt-2 light-gray-color text-right"> 2 Hours a go <i class="fa fa-clock-o" aria-hidden="true"></i></p>
							</div>-->
					</div>
					<div class="col-lg-12 col-12 padding-n">
						<p class="post-section-para">
							Only Featuring - Lil Wayne, Drake & Chris Brown #social media is for posting only music related content
						</p>
					</div>
					<div class="col-lg-12 col-12 padding-n">
						<!--                                    <img class="post-section-img" src="{{ asset('assets/images/music-album.png') }}" alt="">
							-->
						<video id="video" src="https://myprojectstaging.com/valyouxmusic/public/assets/videos/nicki.mp4" class="video"  type="video/mp4"   controls playsinline ></video>
					</div>
					<!--<div class="row bg-black mt-3 cover-bg" >-->
					<!--	<div class="col-2 col-md-2 col-lg-2 text-center">-->
					<!--		<img src="http://myprojectstaging.com/valyouxmusic/public/assets/images/valyoux/nicky_minaj_valyou_x@2x.png" alt="" class="post-bottom-cover-image" width="80%">-->
					<!--	</div>-->
					<!--	<div class="col-7 col-md-6 col-lg-6">-->
					<!--		<div class="text-muted promote-page-little-banner">-->
					<!--			<p id="para1"> Artist share price</p>-->
					<!--			<p id="para2">Nicky Minaj $2.33VXD</p>-->
					<!--			<p id="para3"><i class="fa fa-clock-o" aria-hidden="true"></i> Upcoming</p>-->
					<!--		</div>-->
					<!--	</div>-->
					<!--	<br>-->
					<!--	<div class="col-3 col-md-4 col-lg-4 text-center padding-n">-->
					<!--		<button type="button" class="btn valyou-o-btn-invest">Invest in Artist</button>-->
					<!--	</div>-->
					<!--</div>-->
					
					
				</div>
			</div>
			
			<div class="row">
			    <div class="col-sm-12">
			        <!--new desc text-->
        		    <div class="social-media-profile-wrap">
        		        <div class="sm-left-wrap">
        		            <img src="http://myprojectstaging.com/valyouxmusic/public/assets/images/valyoux/nicky_minaj_valyou_x@2x.png" alt="" class="avatar-md rounded-circle">
        		            <div class="sm-left-desc">
        						<h5>Artist share price</h5>
        						<h2>Nicky Minaj $2.33VXD</h2>
        						<p><i class="fa fa-clock-o" aria-hidden="true"></i>  Upcoming</p>
        					</div>
        		        </div>
        		        <div class="sm-right-wrap">
        		            <button type="button" class="btn-invest-pink-grad"> Invest in Artist</button>
        		        </div>
        		    </div>
        		    <!--new desc text end-->
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
								<p class="card-text mobile-v">Promote Song</p>
							</div>
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
									<div class="row">
										<div class="col-md-4 col-12">
											<div class="row artist-comment-image-div">
												<div class="col-md-4 col-2 ">
													<img src="{{ URL::asset('assets/images/valyoux/nicky_minaj_valyou_x@2x.png') }}" alt="" class="avatar-md rounded-circle ">
												</div>
												<div class="col-md-8 col-10 mt-4">
													<p class="text-dark font-size-12 artist-comment-name">Bobby k9</p>
												</div>
											</div>
										</div>
										<div class="col-md-6 mt-5 artist-comment-desc">
											<p class="font-size-10" >Awesome artist I would like to invest now!</p>
										</div>
									</div>
									<hr class="mb-2">
								</li>
								<li>
									<div class="row">
										<div class="col-md-4 col-12">
											<div class="row artist-comment-image-div">
												<div class="col-md-4 col-2 ">
													<img src="{{ URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png') }}" alt="" class="avatar-md rounded-circle ">
												</div>
												<div class="col-md-8 col-10 mt-4">
													<p class="text-dark font-size-12 artist-comment-name">Bobby k9</p>
												</div>
											</div>
										</div>
										<div class="col-md-6 mt-5 artist-comment-desc">
											<p class="font-size-10" >Awesome artist I would like to invest now!</p>
										</div>
									</div>
									<hr class="mb-2">
								</li>
								<li>
									<div class="row">
										<div class="col-md-4 col-12">
											<div class="row artist-comment-image-div">
												<div class="col-md-4 col-2 ">
													<img src="{{ URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png') }}" alt="" class="avatar-md rounded-circle ">
												</div>
												<div class="col-md-8 col-10 mt-4">
													<p class="text-dark font-size-12 artist-comment-name">Bobby k9</p>
												</div>
											</div>
										</div>
										<div class="col-md-6 mt-5 artist-comment-desc">
											<p class="font-size-10" >Awesome artist I would like to invest now!</p>
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
								<div class="col-md-8 mt-3 mt-0-mobile col-8 ">
									<div class="position-relative">
										<input type="text" class="form-control chat-input" placeholder="Enter Comment...">
									</div>
								</div>
								<div class="col-md-2 col-2">
									<img style="transform: rotate(270deg);" class="mr-3 comment-btn" style="height:30px; width:30px" src="{{ asset('assets/images/valyoux/pink_arrow_circle_down.svg') }}"> 
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
						<button type="button" class="btn valyou-g-btn"> Proceed to Valyou Song</button>
					</div>
				</div>
			</div>
			<div  style="display: none" id="sharing-section-3" >
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
									<img src="{{ asset('assets/images/PReward per listen .svg') }}">
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
			<div class="card ">
				<div class="card-body">
					<div id="sponsored-section mt-3" class="row">
						<div class="col-lg-12 col-12 mt-3">
							<p class="sponsored-section-p1">Sponsored In Demand</p>
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
		<div class="social-post">
			<div class="card margin-n">
				<div class="post-section card-body">
					<div class="row">
						<div class="col-lg-12 col-12">
							<div class="row">
								<div class="col-lg-2 col-3">
									<img class="post-section-artist-img rounded-circle" src="{{ URL::asset('assets/images/valyoux/pro_artist@2x.png') }}" alt="">
								</div>
								<div class="col-lg-7 col-6 post-header-bar">
									<p class="post-section-artist-p1">Ariana Grande</p>
									<p class="post-section-artist-p2 light-gray-color">Music Artist <i class="fa fa-globe" aria-hidden="true"></i></p>
								</div>
								<div class="col-lg-2 col-3">
									<p class="float-right mt-2 light-gray-color text-right">Artist <i class="fa fa-clock-o" aria-hidden="true"></i></p>
								</div>
							</div>
						</div>
						<!--                                    <div class="col-lg-4 col-12 ">
							<p class="float-right mt-2 light-gray-color text-right"> 2 Hours a go <i class="fa fa-clock-o" aria-hidden="true"></i></p>
							</div>-->
					</div>
					<div class="col-lg-12 col-12 padding-n">
						<p class="post-section-para">
							Check out oia mias music yal,dope artist i had invest. I bought some shares #dope #social media is for posting only music related content
						</p>
					</div>
					<div class="col-lg-12 col-12 padding-n">
						<!--                                    <img class="post-section-img" src="{{ asset('assets/images/music-album.png') }}" alt="">
							-->
						<video id="video" src="https://myprojectstaging.com/valyouxmusic/public/assets/videos/ariana.mp4" class="video"  type="video/mp4"   controls playsinline ></video>
					</div>
					<!--<div class="row bg-black mt-3 cover-bg" >-->
					<!--	<div class="col-2 col-md-2 col-lg-2 text-center">-->
					<!--		<img src="{{ URL::asset('assets/images/valyoux/pro_artist@2x.png') }}" alt="" class="post-bottom-cover-image" width="80%">-->
					<!--	</div>-->
					<!--	<div class="col-7 col-md-6 col-lg-6">-->
					<!--		<div class="text-muted promote-page-little-banner">-->
					<!--			<p id="para1"> Artist share price</p>-->
					<!--			<p id="para2">Ariana Grande $2.33VXD</p>-->
					<!--			<p id="para3"><i class="fa fa-clock-o" aria-hidden="true"></i> Upcoming</p>-->
					<!--		</div>-->
					<!--	</div>-->
					<!--	<br>-->
					<!--	<div class="col-3 col-md-4 col-lg-4 text-center padding-n">-->
					<!--		<button type="button" class="btn valyou-o-btn-invest">Invest in Artist</button>-->
					<!--	</div>-->
					<!--</div>-->
					
				</div>
			</div>
			
			<div class="row">
			    <div class="col-sm-12">
			        <!--new desc text-->
        		    <div class="social-media-profile-wrap">
        		        <div class="sm-left-wrap">
        		            <img src="{{ URL::asset('assets/images/valyoux/pro_artist@2x.png') }}" alt="" class="avatar-md rounded-circle img-40">
        		            <div class="sm-left-desc">
        						<h5>Artist share price</h5>
        						<h2>Ariana Grande $2.33VXD</h2>
        						<p><i class="fa fa-clock-o" aria-hidden="true"></i>  Upcoming</p>
        					</div>
        		        </div>
        		        <div class="sm-right-wrap">
        		            <button type="button" class="btn-invest-pink-grad"> Invest in Artist</button>
        		        </div>
        		    </div>
        		    <!--new desc text end-->
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
								<p class="card-text mobile-v">Promote Song</p>
							</div>
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
									<div class="row">
										<div class="col-md-4 col-12">
											<div class="row artist-comment-image-div">
												<div class="col-md-4 col-2 ">
													<img src="{{ URL::asset('assets/images/valyoux/pro_artist@2x.png') }}" alt="" class="avatar-md rounded-circle ">
												</div>
												<div class="col-md-8 col-10 mt-4">
													<p class="text-dark font-size-12 artist-comment-name">Bobby k9</p>
												</div>
											</div>
										</div>
										<div class="col-md-6 mt-5 artist-comment-desc">
											<p class="font-size-10" >Awesome artist I would like to invest now!</p>
										</div>
									</div>
									<hr class="mb-2">
								</li>
								<li>
									<div class="row">
										<div class="col-md-4 col-12">
											<div class="row artist-comment-image-div">
												<div class="col-md-4 col-2 ">
													<img src="{{ URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png') }}" alt="" class="avatar-md rounded-circle ">
												</div>
												<div class="col-md-8 col-10 mt-4">
													<p class="text-dark font-size-12 artist-comment-name">Bobby k9</p>
												</div>
											</div>
										</div>
										<div class="col-md-6 mt-5 artist-comment-desc">
											<p class="font-size-10" >Awesome artist I would like to invest now!</p>
										</div>
									</div>
									<hr class="mb-2">
								</li>
								<li>
									<div class="row">
										<div class="col-md-4 col-12">
											<div class="row artist-comment-image-div">
												<div class="col-md-4 col-2 ">
													<img src="{{ URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png') }}" alt="" class="avatar-md rounded-circle ">
												</div>
												<div class="col-md-8 col-10 mt-4">
													<p class="text-dark font-size-12 artist-comment-name">Bobby k9</p>
												</div>
											</div>
										</div>
										<div class="col-md-6 mt-5 artist-comment-desc">
											<p class="font-size-10" >Awesome artist I would like to invest now!</p>
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
								<div class="col-md-8 mt-3 mt-0-mobile col-8 ">
									<div class="position-relative">
										<input type="text" class="form-control chat-input" placeholder="Enter Comment...">
									</div>
								</div>
								<div class="col-md-2 col-2">
									<img style="transform: rotate(270deg);" class="mr-3 comment-btn" style="height:30px; width:30px" src="{{ asset('assets/images/valyoux/pink_arrow_circle_down.svg') }}"> 
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
						<button type="button" class="btn valyou-g-btn"> Proceed to Valyou Song</button>
					</div>
				</div>
			</div>
			<div  style="display: none" id="sharing-section-3" >
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
									<img src="{{ asset('assets/images/PReward per listen .svg') }}">
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
			<div class="card ">
				<div class="card-body">
					<div id="sponsored-section mt-3" class="row">
						<div class="col-lg-12 col-12 mt-3">
							<p class="sponsored-section-p1">Sponsored In Demand</p>
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
		<div class="social-post">
			<div class="card margin-n">
				<div class="post-section card-body">
					<div class="row">
						<div class="col-lg-12 col-12">
							<div class="row">
								<div class="col-lg-2 col-3">
									<img class="post-section-artist-img rounded-circle" src="{{ URL::asset('assets/images/valyoux/dre-450new.png') }}" alt="">
								</div>
								<div class="col-lg-7 col-5 post-header-bar">
									<p class="post-section-artist-p1">Dr Dre</p>
									<p class="post-section-artist-p2 light-gray-color">Producer<i class="fa fa-globe" aria-hidden="true"></i></p>
								</div>
								<div class="col-lg-2 col-4">
									<p class="float-right mt-2 light-gray-color text-right">Business Account</p>
								</div>
							</div>
						</div>
						<!--                                    <div class="col-lg-4 col-12 ">
							<p class="float-right mt-2 light-gray-color text-right"> 2 Hours a go <i class="fa fa-clock-o" aria-hidden="true"></i></p>
							</div>-->
					</div>
					<div class="col-lg-12 col-12 padding-n">
						<p class="post-section-para">Check out my new video, Started from the bottom. I bought some shares #dope #social media is for posting only music related content</p>
					</div>
					<div class="col-lg-12 col-12 padding-n">
						<!--                                    <img class="post-section-img" src="{{ asset('assets/images/music-album.png') }}" alt="">
							-->
						<video id="video" src="https://myprojectstaging.com/valyouxmusic/public/assets/videos/drake-video.mp4" class="video"  type="video/mp4"   controls  playsinline ></video>
					</div>
					<!--<div class="row bg-black mt-3 cover-bg" >-->
					<!--	<div class="col-2 col-md-2 col-lg-2 text-center">-->
					<!--		<img src="http://myprojectstaging.com/valyouxmusic/public/assets/images/valyoux/drake-valyou_x_music@2x.png" alt="" class="post-bottom-cover-image" width="80%">-->
					<!--	</div>-->
					<!--	<div class="col-7 col-md-6 col-lg-6">-->
					<!--		<div class="text-muted promote-page-little-banner">-->
					<!--			<p id="para1"> Artist share price</p>-->
					<!--			<p id="para2">Drake $2.33VXD</p>-->
					<!--			<p id="para3"><i class="fa fa-clock-o" aria-hidden="true"></i>  Major Artist</p>-->
					<!--		</div>-->
					<!--	</div>-->
					<!--	<br>-->
					<!--	<div class="col-3 col-md-4 col-lg-4 text-center padding-n">-->
					<!--		<button type="button" class="btn valyou-o-btn-invest"> Invest in Artist</button>-->
					<!--	</div>-->
					<!--</div>-->
			
				</div>
			</div>
			
			<div class="row">
			    <div class="col-sm-12">
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
        		            <button type="button" class="btn-invest-pink-grad"> Invest in Artist</button>
        		        </div>
        		    </div>
        		    <!--new desc text end-->
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
								<p class="card-text mobile-v">Promote Song</p>
							</div>
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
									<div class="row">
										<div class="col-md-4 col-12">
											<div class="row artist-comment-image-div">
												<div class="col-md-4 col-2 ">
													<img src="{{ URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png') }}" alt="" class="avatar-md rounded-circle ">
												</div>
												<div class="col-md-8 col-10 mt-4">
													<p class="text-dark font-size-12 artist-comment-name">Kanye West</p>
												</div>
											</div>
										</div>
										<div class="col-md-6 mt-5 artist-comment-desc">
											<p class="font-size-10" >dope artist i had invest</p>
										</div>
									</div>
									<hr class="mb-2">
								</li>
								<li>
									<div class="row">
										<div class="col-md-4 col-12">
											<div class="row artist-comment-image-div">
												<div class="col-md-4 col-2 ">
													<img src="{{ URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png') }}" alt="" class="avatar-md rounded-circle ">
												</div>
												<div class="col-md-8 col-10 mt-4">
													<p class="text-dark font-size-12 artist-comment-name">Kanye West</p>
												</div>
											</div>
										</div>
										<div class="col-md-6 mt-5 artist-comment-desc">
											<p class="font-size-10" >Awesome artist I would like to invest now!</p>
										</div>
									</div>
									<hr class="mb-2">
								</li>
								<li>
									<div class="row">
										<div class="col-md-4 col-12">
											<div class="row artist-comment-image-div">
												<div class="col-md-4 col-2 ">
													<img src="{{ URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png') }}" alt="" class="avatar-md rounded-circle ">
												</div>
												<div class="col-md-8 col-10 mt-4">
													<p class="text-dark font-size-12 artist-comment-name">Kanye West</p>
												</div>
											</div>
										</div>
										<div class="col-md-6 mt-5 artist-comment-desc">
											<p class="font-size-10" >Stocks going up </p>
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
								<div class="col-md-8 mt-3 mt-0-mobile col-8 ">
									<div class="position-relative">
										<input type="text" class="form-control chat-input" placeholder="Enter Comment...">
									</div>
								</div>
								<div class="col-md-2 col-2">
									<img style="transform: rotate(270deg);" class="mr-3 comment-btn" style="height:30px; width:30px" src="{{ asset('assets/images/valyoux/pink_arrow_circle_down.svg') }}"> 
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
						<button type="button" class="btn valyou-g-btn"> Proceed to Valyou Song</button>
					</div>
				</div>
			</div>
			<div  style="display: none" id="sharing-section-3" >
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
									<img src="{{ asset('assets/images/PReward per listen .svg') }}">
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
			<div class="card ">
				<div class="card-body">
					<div id="sponsored-section mt-3" class="row">
						<div class="col-lg-12 col-12 mt-3">
							<p class="sponsored-section-p1">Sponsored In Demand</p>
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
	</div>
	<div class="col-lg-4 col-4">
		<div class="uploading-section-artist">
			<p class="uploading-section-artist-main-heading"> Artist Markets </p>
			<p class="uploading-section-artist-sub-heading text-center light-gray-color"> New Artist &nbsp&nbsp&nbsp&nbsp </p>
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-lg-4 col-4">
							<img src="{{ asset('assets/images/valyoux/nicky_minaj_valyou_x@2x.png') }}" width="50" height="50" class="rounded-circle avatar-xm m-1"
								alt="">
						</div>
						<div class="col-lg-6 col-6 ml-1">
							<p class="uploading-section-artist-p1">Nicki Minaj</p>
							<p class="uploading-section-artist-p2">$112,644,179</p>
							<p class="uploading-section-artist-p3"><img class="uploading-section-artist-icon-img" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}"> +$312.3</p>
						</div>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-lg-4 col-4 ">
							<img src="{{ asset('assets/images/valyoux/beyonce.svg') }}" width="50" height="50" class="rounded-circle avatar-xm m-1"
								alt="">
						</div>
						<div class="col-lg-6 col-6 ml-1">
							<p class="uploading-section-artist-p1">Beyonce</p>
							<p class="uploading-section-artist-p2">$112,644,179</p>
							<p class="uploading-section-artist-p3"><img class="uploading-section-artist-icon-img" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}"> +$312.3</p>
						</div>
					</div>
				</div>
			</div>
			<div class="card">
				<div class=" card-body">
					<div class="row">
						<div class="col-lg-4 col-4 ">
							<img src="{{ asset('assets/images/valyoux/justin_beiber_valyou_x_music@2x.png') }}" width="50" height="50" class="rounded-circle avatar-xm m-1"
								alt="">
						</div>
						<div class="col-lg-6 col-6 ml-1">
							<p class="uploading-section-artist-p1">Justin Bieber</p>
							<p class="uploading-section-artist-p2">$112,644,179</p>
							<p class="uploading-section-artist-p3"><img class="uploading-section-artist-icon-img" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}"> +$312.3</p>
						</div>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-lg-4 col-4 ">
							<img src="{{ asset('assets/images/valyoux/drake-valyou_x_music@2x.png') }}" width="50" height="50" class="rounded-circle avatar-xm m-1"
								alt="">
						</div>
						<div class="col-lg-6 col-6 ml-1">
							<p class="uploading-section-artist-p1">Drake</p>
							<p class="uploading-section-artist-p2">$112,644,179</p>
							<p class="uploading-section-artist-p3"><img class="uploading-section-artist-icon-img" src="{{ asset('assets/images/valyoux/green_arrow_price_going_up.svg') }}"> +$312.3</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-12">
		<div class="text-center my-3">
			<a href="javascript:void(0);" class="text-success"><i
				class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Load more </a>
		</div>
	</div>
	<!-- end col-->
</div>
<!-- end row -->

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
<script src="{{ URL::asset('assets/libs/select2/select2.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/form-advanced.init.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/multiselect/2.2.9/js/multiselect.js"></script>
<script src="{{ URL::asset('assets/js/pages/social-media.js') }}"></script>
@endsection