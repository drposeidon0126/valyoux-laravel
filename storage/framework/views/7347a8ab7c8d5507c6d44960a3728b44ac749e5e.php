<?php

use App\Models\Country;
?>
<?php $__env->startSection('pageCSS'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/select2/select2.min.css')); ?>">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/css/pages/promote-music.css')); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/tagify/tagify.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/intl-tel-input/css/intlTelInput.css')); ?>">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.0/css/toastr.css" integrity="sha512-IGwkFtlId2R+5O765etYgj+NFf1fTfb1Kf98HiJTzqo5KaHskkErldvO7jW1pFUZZyqQLgKZmnCPNm6CwjY4rQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.0/css/toastr.min.css" integrity="sha512-kbfyniEdAn65kDvQuBaFsC6PcEZuqCv3wXD5SrSqMJvZAWy/XZhf2ByMHgHJ2h/2FJl+o/P0LBToducs2oKnTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Stylesheet for the Gear Player, keep this one. -->
<link rel="stylesheet" href="<?php echo e(URL::asset('assets/gear_app/css/gear.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<!-- new design css  -->
<style>
	/* media */
	/* Extra small devices (phones, 600px and down) */
	@media  only screen and (max-width: 600px) {
		#mobile-div{display: block!important;}
		#desktop-div{display: none!important;}
	}

	/* Small devices (portrait tablets and large phones, 600px and up) */
	@media  only screen and (min-width: 600px) {
		#mobile-div{display: block!important;}
		#desktop-div{display: none!important;}
	}

	/* Medium devices (landscape tablets, 768px and up) */
	@media  only screen and (min-width: 768px) {
		#mobile-div{display: none!important;}
		#desktop-div{display: block!important;}
	}

	/* Large devices (laptops/desktops, 992px and up) */
	@media  only screen and (min-width: 992px) {
		#mobile-div{display: none!important;}
		#desktop-div{display: block!important;}
	}

	/* Extra large devices (large laptops and desktops, 1200px and up) */
	@media  only screen and (min-width: 1200px) {
		#mobile-div{display: none!important;}
		#desktop-div{display: block!important;}
	}
	/* end media */
  	/* desktop-start */
		.nav-part{
			background: #FFFFFF 0% 0% no-repeat padding-box;
			box-shadow: 0px 3px 6px #00000029;
		}
		.justify-content-spaceeven{
			justify-content: space-evenly;
		}
		.tab-select-nav{
			padding-bottom: 30px;
			margin-top: 15px;
			display: flex;
			flex-direction: row;
			font-family: Roboto;
			flex-wrap: nowrap;
			padding: 10px;
			cursor: pointer;
			letter-spacing: normal;
			background: #FFFFFF 0% 0% no-repeat padding-box;
			box-shadow: 0px 3px 6px #00000029;

		}
		.input-round {
			padding: 0.2rem 1rem !important;
    		border-radius: 25px !important;
		}

		.c-pink {
			color: #ff0093 !important;
		}
		.c-green {
			color: #1CEA2C !important;
		}

		.play-icon {
			font-size: 3rem;
			margin: auto;
			color: #ff0093;
		}

		.tab-select-nav{
			display: flex;
			justify-content: flex-start;
			/* border-bottom: none !important; */
		}

		.tab-select-nav a:hover{
			color: black;
		}

		.tab-select-nav .active{
			text-decoration: none !important;
			color: #FF0093 !important;
			position: relative !important;
		}

		.tab-select-nav .active::after{
			top: 65%;
			height: 2px;
			width: 90%;
			left: 5%;
			background-color: red;
		}

		.tab-select-nav a {
			padding: 5px 130px;
			white-space: nowrap;
			color: #000!important;
			font-weight: 600!important;
			font-size: 16px;
			border: 1px solid #FFFFFF;
			border-radius: 30px;
		}

		.tab-select-nav a:hover{
			border: 1px solid #000000;
			background: #F7F7F7 0% 0% no-repeat padding-box;		
			border-radius: 30px;
		} 

		/* end nav-tab */

		/* show video part */
		.watch-part{
			display: flex;
			margin-top: 20px;
			margin-bottom: 20px;
		}

		.video-watch-part{
			height: 400px;
			background: #000000 0% 0% no-repeat padding-box;
			border: 1px solid #707070;
			border-radius: 16px;

		}

		.video-real-watch{
			height: 400px;
			display: flex;
			justify-content: center;
			background-color: #2a2a2a;
			border: 1px solid #707070;
			border-radius: 3px;
		}

		.show-detail-special-part{
			display: flex;
			padding-left: 70px;
			display: block;
			width: 100%;
		}


		.especailly-part{
			display: flex;
			margin-bottom: 28px;
		}
		.inner-button-part{
			display: block;
		}

		.button-view1{
			margin-top: 30px;
		}

		.special-show-buttons1{
			display: flex;
			justify-content: space-between;
		}

					
		.button-view1 .left-btn1{
			display: flex;
			font-size: 16px;
		}

		.btn-text1{
			background: #F7F7F7 0% 0% no-repeat padding-box;
			border: 1px solid #000000;
			border-radius: 30px;
			color: #666666;
			padding: 5px 15px;
			width: 134px;
			display: flex;
			align-items: center;
			margin-right: 50px;
		}

		.btn-text1 p{
			margin: auto;
		}

		.button-view1 .right-btn1{
			display: flex;
			justify-content: flex-end;
		}					

		.btn-gradient-valyou1{
			font-size: 0.875rem;
			line-height: 1.75;
			color: white;
			font-weight: 700;
			background-image: linear-gradient(77deg,#ffc26f,#fa528b);
			border-radius: 5px;							
			width: 174px;
			display: flex;
			justify-content: center;
			align-items: center; 	
			margin-right: 50px;
		}

		.btn-gradient-valyou1 p{
			margin: auto;
		}

		.btn-gradient-invest1{
			font-size: 0.875rem;
			line-height: 1.75;
			color: white;
			font-weight: 700;
			background: linear-gradient(30deg, #00ffc2, #00bbba);
			border-radius: 5px;
			margin-right: 0;
			display: flex;
			justify-content: center;
			align-items: center;
			width: 174px;
		}

		.btn-gradient-invest1 p{
			margin: auto;
		}

		/* end show video part */

		/* comment show part */
		.special-comment-part{
			background: #FFFFFF 0% 0% no-repeat padding-box;
			box-shadow: 0px 3px 6px #00000029;
			border-radius: 16px;
			opacity: 1;
		}

		.search-comment-part{
			/* display: flex;  */
			/* justify-content: center; */
			align-items: center;
		}

		.comment-logo-part{
			display: flex;
			align-items: center;
		}

		.comment-logo-detail-info{
			margin-left: 20px;
			direction: block;
			white-space: nowrap;
		}

		.comment-logo-detail-info p{
			margin-bottom: 0;
		}	

		.comment-logo-detail-info p:first-child{
			font-size: 16px;
			color: #050F2F;
			padding-bottom: 0;
		}

		.comment-logo-detail-info p:last-child{
			font-size: 10px !important;
			color: #666666;
		}
		.searchbar-part{
			margin-left: 30px;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.searchbar-part input{
			background: #F7F7F7 0% 0% no-repeat padding-box;
			border: 1px solid #000000;
			border-radius: 30px;
			opacity: 1;
			width: 380px;
			height: 34px;
		}

		.searchbar-part input::placeholder{
			font-size: 16px;
			align-items: center;
			padding-left: 15px;
		}

		.show-comment-content-part{
			margin-top: 20px;
			margin-left: 50px;
		}

		.show-and-reply-comment-part{
			margin-bottom: 10px;
		}


		.close_btn{
			width: 32px;
			height: 32px;
			opacity: 0.75;
			margin-left: 20px;
		}

		.reply-btn{
			color: #F42677;
			font-size: 8px;
			border: none;
			background: none;
			margin-left: 33px;
		}

		.media-body h5{
			margin-bottom: 0 !important;
			font-size: 16px;
			font-weight: 600;
			color: #050F2F;
		}

		.media-body h6{
			font-size: 10px;
			color: #666666;
		}
		/* end comment show part */

		/* promote part */
		.special-promote-part{
			background: #FFFFFF 0% 0% no-repeat padding-box;
			box-shadow: 0px 3px 6px #00000029;
			border-radius: 16px;
			height: auto;
		}

		.promote-comment-part{
			display: flex;
			justify-content: space-between;
			margin-bottom: 10px;
		}

		.comment-logo-part > .comment-logo-detail-info > p{
			font-size: 16px;
			color: #050F2F;
		}

		.input-data-field{
			text-align: left;
			font-size: 16px;
			letter-spacing: 0px;
			color: #050F2F;
			min-width: 320px;
			margin: auto;
		}

		

		#see_video {
			min-width: 300px;
		}

		
		.bottom-button p{
			display: flex;
			justify-content: center;
			color: #050F2F;
			font-size: 16px;
			
		}

		.btn-field{
			display: flex;
			justify-content: space-between;
		}

		.bottom-button input{
			/* display: flex;
			justify-content: center; */
			align-items: center;
			background: #FFFFFF 0% 0% no-repeat padding-box;
			border: 1px solid #000000;
			border-radius: 30px;
			padding: 3px 6px;
			width: 134px;

		}

		/* for bordered bottom button */

		.bottom-button-bordered{
			/* background: #FFFFFF 0% 0% no-repeat padding-box;
			box-shadow: 0px 3px 6px #00000029;
			border: 1px solid #707070;
			border-radius: 16px; */
			border-radius: 16px;
			box-shadow: 0px -1px 0px 0px grey;
			height: 142px;
		}

		.bottom-button-bordered p{
			display: flex;
			justify-content: center;
			font-size: 16px;
			color: #050F2F;
			padding-top: 40px;
		}

		.bottom-button-bordered .btn-field{
			font-size: 16px;
			justify-content: center;
			display: flex;
		}

		.bottom-button-bordered button{
			align-items: center;
			background: #FFFFFF 0% 0% no-repeat padding-box;
			border: 1px solid #000000;
			border-radius: 30px;
			padding: 3px 6px;
			width: 134px;
		}

		.bottom-button-bordered button:first-child{
			margin-right: 20px;
		}

		/* end promote part */

		/* personal-detail-info-part */
		.personal-detail-info{
			margin-top: 20px;
			background: #FFFFFF 0% 0% no-repeat padding-box;
			box-shadow: 0px 3px 6px #00000029;
			border-radius: 12px;
			align-items: center;
			width: 100%;
			border: 1px solid #ffffff;
			display: inline-flex;
			white-space: nowrap;
			overflow: hidden;
		}

		.personal-img{
			display: flex;
			align-items: center;
			padding-right: 10px;	
			z-index: 111;
			background: white;
			
		}

		.personal-img>img{
			border-radius: 50% !important;
		}

		.personal-img>h3{
			color: #050F2F !important;
			font-weight: 500;
		}

		.personal-detail-info-content{
			display: flex;
			margin-left: 20px;
			justify-content: center;
			align-items: center;
			font-size: 16px;
			/* overflow: hidden; */
			/* padding-left: 335px; */
		}

		.personal-detail-info-content-inner{
			display: flex;
			margin-left: 20px;
			justify-content: center;
			align-items: center;
			font-size: 16px;
			padding-left: 335px;
		}

		/* animation */
		.personal-info-button-part .personal-detail-info-content:hover{
			animation-play-state:paused;
		}

		.inner-button-part .personal-detail-info-content-inner:hover{
			animation-play-state:paused;
		}

		.personal-detail-info-content-inner{
			display: inline-flex;
			animation:text-scroll 60s linear infinite;
		}

		.personal-detail-info-content{
			display: inline-flex;
			animation:text-scroll 60s linear infinite;
		}

		@keyframes  text-scroll{
		from{
			transform:translateX(20%);
			-moz-transform:translateX(20%);
			-webkit-transform:translateX(20%);
			-o-transform:translateX(20%);
			-ms-transform:translateX(20%);
		}
		to{
			transform:translateX(-100%);
			-moz-transform:translateX(-100%);
			-webkit-transform:translateX(-100%);
			-o-transform:translateX(-100%);
			-ms-transform:translateX(-100%);
		}
		}

		/* end animation */

		.personel-detail-stock-content{
			background: #FAFAFA 0% 0% no-repeat padding-box;
			border: 1px solid #D0D0D0;
			border-radius: 16px;
			padding: 5px;
		}

		.personel-detail-stock-content{
			align-items: center;
		}

		.my-auto .stock-price{
			color: #050F2F;
			font-weight: 500;
			font-size: 16px;
		}

		.my-auto .stock-value{
			color: #050F2F;
			font-weight: 500;
			font-size: 16px;
		}

		.my-auto .stock-percentage{
			color: red;
		}

		.personal-detail-info-category{
			margin-left: 20px;
			display: flex;
			align-items: center;
		}

		.personal-detail-info-category p{
			margin: auto;
		}

		.personal-detail-info-category .song-from, .song-valyou-value, .song-type{
			color: #050F2F;
			font-weight: 500;
			font-size: 16px;
		}

		.personal-detail-info-category .song-title, .song-valyou, .song-category{
			color: #707070;
			font-weight: 500;
			font-size: 16px;
		}
		/* end personal-detail-info-part */

		/* button part */
		.button-view{
			margin-top: 20px;
			display: block;
		}

		.show-buttons{
			display: flex;
			justify-content: space-between;
			font-size: 16px;
			align-items: center;
			padding: 0;
		}

		.show-buttons p{
			margin: auto;
		}

		.btn-text{
			background: #F7F7F7 0% 0% no-repeat padding-box;
			border: 1px solid #000000;
			border-radius: 30px;
			color: #666666;
			padding: 5px 15px;
			width: 134px;
			display: flex;
			align-items: center;
		}

		.btn-text p{
			display: flex;
			align-items: center;
		}

		.btn-gradient-valyou{
			font-size: 0.875rem;
			line-height: 1.75;
			color: white;
			font-weight: 700;
			padding: 5px 15px;
			background-image: linear-gradient(77deg,#ffc26f,#fa528b);
			border-radius: 5px;
			display: flex;
			justify-content: center;
			width: 174px;
		}

		.btn-gradient-invest{
			font-size: 0.875rem;
			line-height: 1.75;
			color: white;
			font-weight: 700;
			padding: 5px 15px;
			background: linear-gradient(30deg, #00ffc2, #00bbba);
			border-radius: 5px;
			margin-right: 0;
			display: flex;
			justify-content: center;
			width: 174px;
		}

		.first-button-part{
			display: flex;
			width: 100%;
			justify-content: space-between;
		}

		.left-btn, .right-btn{
			display: flex;
			justify-content: space-between;
		}

		.left-btn .btn-text{
			margin-right: 50px;
		}

		.right-btn .btn-gradient-invest{
			margin-right: 0;
		}

		.right-btn .btn-gradient-valyou{
			margin-right: 50px;
		}

		.second-button-part{
			display: flex;
			justify-content: space-between;
			width: 100%;
			padding: 3px;
		}

		.circle-left{
			display: flex;
			width: 100%;
		}

		.circle-right{
			display: flex;
			justify-content: flex-end;
		}

		.valyou-circle-num{
			background: #FFFFFF 0% 0% no-repeat padding-box;
				border: 1px solid #707070;
			border-radius: 50%;
			width: 48px;
			height: 48px;
			display: flex;
			justify-content: center;
			align-items: center;
			margin-right: 50px;
		}
			
		.valyou-circle-num>p{
			margin: auto;
			font-size: 12px;
		}

		.custom-button-part{
			display: contents;
		}

		.custom-input{
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.custom-input input{
			width: 352px;
			background: #FAFAFA 0% 0% no-repeat padding-box;
			border: 1px solid #D0D0D0;
			border-radius: 16px;
		}

		.custom-input input::placeholder{
			padding-left: 30px;
		}

		/* end button */

		/* brand sponsors part */
		.brand-sponsors-part{
			display: flex;
			align-items: center;
			margin-top: 60px;
		}

		.brand-sponsors-part p{
			font-size: 24px;
			line-height: 2.8;
			color: #050F2F;
			font-weight: 700;
		}

		.brand-sponsors-content-show{
			/* background: #FFFFFF 0% 0% no-repeat padding-box;
			box-shadow:  0px -2px 6px 0px #00000029;
			border-radius: 16px; */
			margin-top: 80px;
			/* opacity: 70%; */
			padding: 15px;
		}

		.show-action-part{
			display: flex;
			justify-content: space-between;
			align-items: center;
		}

		.show-action-part p{
			font-size: 24px;
			line-height: 2.8;
			color: #050F2F; 	
			font-weight: 700;
		}

		.show-logo-detail-part{
			display: flex;
		}

		.MultiCarousel{ 
			float: left; 
			overflow: hidden; 
			padding: 15px; 
			width: 100%; 
			position:relative; 
		}

		.MultiCarousel .MultiCarousel-inner{ 
			transition: 1s ease all; 
			float: left; 
		}

		.MultiCarousel .MultiCarousel-inner .item{ 
			float: left;
			display: flex;
		}

		.MultiCarousel .MultiCarousel-inner .item > div{ 
			text-align: center; 
			/* padding:10px; 
			margin:10px;  */
			display: block;
			text-align: left; 
			/* background:#f1f1f1;
			border: 1px solid green; */
		}

		.MultiCarousel .leftLst, .MultiCarousel .rightLst{ 
			position:absolute; 
			border-radius:50%;
			top:calc(50% - 30px); 
		}

		.MultiCarousel .leftLst{ 
			left:0; 
		}

		.MultiCarousel .rightLst { 
			right:0; 
		}

		.MultiCarousel .leftLst.over, .MultiCarousel .rightLst.over{ 
			pointer-events: none; 
		}


		.MultiCarousel .MultiCarousel-inner .item > div > .show-logo{ 
			text-align: center; 
			border: 2px solid #707070;
			border-radius: 16px;
			width: 152px;
			height: 80px;
		}

		.item > div > .logo-detail-info{
			display: flex;
			align-items: center;
			line-height: 0.01rem;
			font-size: 0.7rem;
			/* height: max-content; */
			padding-top: 5px;
		}

		.logo-detail-info .log-info{
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-left: 5px!important;
			border: 1px solid red;
		}

		.logo-detail-info .logo-info p{
			margin-top: 10px;
			margin-bottom: 10px;
		}

		.item > div > .logo-detail-info .logo-detail-img{
			display: flex;
			align-items: center;
		}
		.item > div > .logo-detail-info .logo-info{
			margin-left: 5px;
		}

		.circle-bordered{
			width: 12px;
			height: 12px;
			border-radius: 50%;
			border: 1px solid #000000;
		}

		.promote-target{
			display: flex;
			justify-content: flex-start;
			align-items: center;

		}

		.promote-target p{
			margin-right: 5px;
		}

		.show-none {
			display: none;
		}

		.show-target-content{
			margin-top: 20px;
		}

		.select-option {
			width: 100%;
			height: fit-content;
			margin-bottom: 15px;
		}

		.show-target-content-body{
			overflow-y: scroll;
			height: 200px;
			border: 1px solid #d1d1d1;
    		border-radius: 5px;
			padding: 15px;
		}

		.show-select-option-part{
			display: none;
			margin-top: 20px;
		}

		.promote-compaign{
			display: flex;
			justify-content: flex-start;
			align-items: center;
			padding-top: 10px;
		}

		.promote-compaign p{
			margin-right: 5px;
		}

		.promote-compaign img{
			margin-right: 8px;
		}

		.show-target-content-search{
			margin-bottom: 20px;
		}

		.show-target-content-search>input {
			padding: 5px 25px;
		}

		.show-target-content .show-target-content-search input{
			background: #F7F7F7 0% 0% no-repeat padding-box;
			border: 1px solid #000000;
			border-radius: 30px; 
			width: 300px;
		}

		.show-target-content .show-target-content-search input::placeholder{
			padding-left: 20px !important;
		}

		.show-target-content-body-item{
			margin-bottom: 20px;
			display: flex;
			justify-content: space-between;
		}
		
		.disp-target-info-state{
			width: 10px;
			height: 10px;
			border-radius: 50%;
		}

		.target-info-button{
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.target-info-button>img{
			border-radius: 50%;
		}

		.target-info-state{
			display: flex;
			align-items: center;
		}

		.disp-target-info-state{
			border: 1px solid #000000;
			background: #b2b9b8;
			margin-right: 10px;
			display: block;
		}

		.target-info-button-detail{
			margin-left: 10px;
			display: block;
			justify-content: center;
			align-items: center;
		}
		/* end brand sponsors part */

		/* pc responsive */
		/* @media(900px < width){ */

		.video-detail-image{
			position: relative;
			width: 180px;
			height: 120px;
			background: #000000 0% 0% no-repeat padding-box;
			border: 1px solid #707070;
			border-radius: 16px;
			opacity: 1;
			display: flex;
			justify-content: center;
		}

		.especailly-part{
			display: flex;
			margin-bottom: 28px;
		}

		.video-detail-info{
			margin-left: 20px;
			padding-top: 5px;
		}

		.video-detail-info p{
			font-size: 16px;
			font-weight: bold;
			color: #050F2F;
			margin: 0;
		}

		.video-detail-info h4{
			font-size: 16px;
			color: #666666;
			font-weight: 300; 
		}

		.video-detail-info h6{
			color: #1CEA2C;
			font-size: 16px;
			font-weight: 500;
		}

		.special-video-part{
			margin-bottom: 5px;
			max-height: 400px;
			overflow-y: auto;
		}
		.tab-select-nav a {
			padding: 5px 80px;
			white-space: nowrap;
			color: #000!important;
			font-weight: 600!important;
			font-size: 16px;
			border: 1px solid #FFFFFF;
			border-radius: 30px;
		}

		.video-real-watch{
			display: flex;
			justify-content: center;
			background-color: #2a2a2a;
		}

		.brand-sponsors-content-show{
			margin-top: 30px;
		}

		.left-btn .btn-text, .left-btn1 .btn-text1{
			margin-right: 50px;
			padding: 5px;
			width: 102px;
		}

		.right-btn .btn-gradient-valyou, .right-btn1 .btn-gradient-valyou1{
			margin-right: 50px;
			width: 128px;
			padding: 5px 3px;
		}

		.right-btn .btn-gradient-invest, .right-btn1 .btn-gradient-invest1{
			margin-right: 0;
			width: 102px;
			padding: 5px;
		}

		.show-detail-special-part {
			display: flex;
			padding-left: 10px;
			display: block;
			width: 100%;
		}

		.searchbar-part{
			margin-left: 10px;
		}

		.searchbar-part input {
			background: #F7F7F7 0% 0% no-repeat padding-box;
			border: 1px solid #000000;
			border-radius: 30px;
			opacity: 1;
			width: 250px;
			height: 34px;
		}

		.comment-logo-detail-info {
			margin-left: 10px;
			direction: block;
			white-space: nowrap;
		}

		.show-and-reply-comment-part .comment-body .media-body {
			font-size: 15px;
		}
	
		.show-detail-special-part{
			margin-left: 30px;
			padding-left: 10px;
		}
		.show-detail-special-part .searchbar-part input {
			background: #F7F7F7 0% 0% no-repeat padding-box;
			border: 1px solid #000000;
			border-radius: 30px;
			opacity: 1;
			width: 300px;
			height: 34px;
		}
		.my-video{
			border-radius: 3px;
		}
		.video-overlay {
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background-color: #00000070;
			border-radius: 3px;
			display: flex;
			z-index: 2;
		}
	/* desktop-end */
	/* common-start */
		/* .input-bottom-line {
			border: none;
			border-bottom: 2px solid #f9508a;
			text-align: center;
		}

		.input-bottom-line:focus, .input-bottom-line:active {
			border: none;
			border-bottom: 2px solid #f9508a;
			text-align: center;
		} */
	/* mobile responsive */
	@media  only screen and (max-width: 900px){

		#page-topbar {
			display: none;
		}

		.show-header {
			display: block !important;
			box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px !important;
		}

		.page-content {
			padding: 0 10px !important;
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
			max-height: 55vh;
			overflow-y: auto;
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
			margin: 0 -12px
		}

		.mo-video {
			width: 100%;
		}

		.mo-btn-group {
			justify-content: space-between;
			padding: 0.5rem 0.5rem;
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

		.mo-carousel-info-part {
			margin-bottom: 15px;
			margin-top: 15px;
			/* -ms-overflow-style: none; */
			/* scrollbar-width: 2px; */
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
		.green-gradient {
			
			background: linear-gradient(80.48deg,#00ffc2 7.18%,#00b8ba 97.46%);
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
			height: fit-content;
    		/* overflow-y: auto; */
		}

		.flex.mo-card-info {
			display: inline-flex;
    		justify-content: center;
			align-items: flex-start;
			width: 100%;
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
	}
</style>
<!-- end new design css -->
<?php $__env->stopSection(); ?>



<?php $__env->startSection('title'); ?> Market <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div class="row">
    <div class="col-lg-12">
        <div class="card mb-0">
            <div class="card-body promoteCover">
                <div class="row align-items-center">
                    <div class="col-6 col-md-4 col-lg-5">
                        <div class="media">
                            <div class="mr-3 align-self-center">
                                <img src="<?php echo e(isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/avatar-1.jpg')); ?>" alt="" class="avatar-md rounded-circle ">
                            </div>
                            <div class="media-body align-self-center">
                                <div class="text-muted">
                                    <h4 class="mb-1 ml-4" style="font-family: 'Roboto', sans-serif; color: #050F2F; font-weight:500;  "><?php echo e(Auth::user()->first_name.' '.Auth::user()->last_name); ?></h4>
                                        <p class="mb-2 ml-4" style="font-family: 'Roboto', sans-serif; color: #ffffff; font-weight:300; ">Music Fan</p>
                                        <p class="mb-2 ml-4" style="font-family: 'Roboto', sans-serif; color: #ffffff; font-weight:400; ">Investor</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-8 col-lg-7">
                        <div class="row">
                            <div class="col-md-8 col-lg-9">
                                <div class="text-lg-center mt-lg-0">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-lg-12">
                                             <div class="row">
                                                <div class="col-6 col-sm-6 col-lg-6 investment">
                                                    <p class="text-muted text-truncate mb-2 font-12 " style="color:#ffffff !important; font-family: 'Roboto', sans-serif; font-weight:400; ">Artist Investments</p>
                                                    <p class="mb-0 total_investments" style="color:#ffffff !important; font-family: 'Roboto', sans-serif; font-weight:600; font-size: 25px ">0</p>
                                                </div>
                                                 <div class="col-6 col-sm-6 col-lg-6 pad_right-0 song-valyou">
                                                    <p class="text-muted text-truncate mb-2 font-12 " style="color:#ffffff !important; font-family: 'Roboto', sans-serif; font-weight:400; ">Song Valyou's</p>
                                                    <p class="mb-0 buy_total" style="color:#ffffff !important; font-family: 'Roboto', sans-serif; font-weight:600;  font-size: 25px">0</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4 col-lg-3 align-self-center text-center">
                                <button class="btn btn-follow" type="button" aria-haspopup="true">
                                    Follow
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="nav nav-tabs tab-select" id="nav-tab" role="tablist">
    <a class="" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Valyou Audio Playlist</a>
    <a class="active" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Valyou Video Playlist</a>
    <a class="" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Investments</a>
    <a class="" id="nav-listen-earn-tab" data-toggle="tab" href="#nav-listen-earn" role="tab" aria-controls="nav-listen-earn" aria-selected="false">Listen & Earn</a>
    <a class="" id="nav-watch-earn-tab" data-toggle="tab" href="#nav-watch-earn" role="tab" aria-controls="nav-watch-earn" aria-selected="false">Watch & Earn</a>
    <a class="" id="nav-profile-tab1" data-toggle="tab" href="#nav-profile1" role="tab" aria-controls="nav-profile1" aria-selected="false">Profile</a>
    <a class="" id="nav-follower-tab" data-toggle="tab" href="#nav-follower" role="tab" aria-controls="nav-follower" aria-selected="false">Followers</a>
    <a class="" id="nav-following-tab" data-toggle="tab" href="#nav-following" role="tab" aria-controls="nav-following" aria-selected="false">Following</a>
    <a class="" id="nav-rewards-tab" data-toggle="tab" href="#nav-rewards" role="tab" aria-controls="nav-rewards" aria-selected="false">Rewards</a>
    <a class="" id="nav-sign-artist-tab" data-toggle="tab" href="#nav-sign-artist" role="tab" aria-controls="nav-sign-artist" aria-selected="false">Sign Artist</a>
</div>

<div class="tab-content" id="myTabContent">
<div class="tab-pane fade" id="nav-listen-earn" role="tabpanel" aria-labelledby="nav-listen-earn-tab">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Please listen songs and earn VXD</h4>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-watch-earn" role="tabpanel" aria-labelledby="nav-watch-earn-tab">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Please watch videos and earn VXD</h4>
                <div class="all_social_videos"></div>
            </div>
        </div>
    </div>
      <!-- end scroll bar for desktop -->

      <div class="tab-pane fade invest-new" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-nowrap table-centered mb-0">
                        <thead>
                            <tr>
                                <th scope="col">Artist</th>
                                <th scope="col">Holdings</th>
                                <th scope="col">Current Price</th>
                                <th scope="col">Invested</th>
                                <th scope="col">Value</th>
                                <th scope="col">Dividends</th>
                            	<th scope="col">Your Share</th>
                                <th scope="col" colspan="2">Value</th>
                            </tr>
                        </thead>
                        <tbody class="investor_list">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade invest-new" id="nav-follower" role="tabpanel" aria-labelledby="nav-follower-tab">
        <div class="card">
            <div class="card-body">

                <div class="followers-wrapper-main">
                    <div class="container mb-3 mt-3">
                        <div class="nav nav-tabs tab-select" id="nav-tab" role="tablist">
                            <a class="active" id="nav-followers-tab" data-toggle="tab" href="#nav-followers" role="tab" aria-controls="nav-followers" aria-selected="true">
                                Followers
                                <span class="total_follower"></span>
                            </a>
                            <a class="" id="nav-following-tab" data-toggle="tab" href="#nav-following" role="tab" aria-controls="nav-profile" aria-selected="false">
                            Following
                            <span class="total_following"></span>
                            </a>
                            <a class="" id="nav-vip-tab" data-toggle="tab" href="#nav-vip" role="tab" aria-controls="nav-contact" aria-selected="false">VIP</a>
                            </a>
                        </div>
                        <br>

                        <div class="tab-content" id="myTabContent1">
                            <div class="tab-pane fade show active" id="nav-followers" role="tabpanel" aria-labelledby="nav-followers-tab">
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
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table project-list-table table-nowrap table-centered table-borderless">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="team" data-gearPath="<?php echo e(asset('assets/gear_app/json/audiojungle.json')); ?>">
                                        <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bobby">
                                            <img src="<?php echo e(asset('assets/images/play-button.svg')); ?>" class="rounded-circle avatar-xm m-1  play-button" alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="team" data-gearPath="<?php echo e(asset('assets/gear_app/json/audiojungle.json')); ?>">
                                        <h3 class="text-truncate font-size-20"><a href="#" class="text-dark"><b>1.Dark Fantasy</b></a></h3>
                                    </div>
                                </td>
                               
                                <td class="w-25">
                                    <div class="row">
                                      
                                        <div class="col-md-4">
                                            <p class="m-0">04:00</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="<?php echo e(route('promote-music')); ?>">
                                        <button type="button" class="btn valyou-o-btn"> Promote</button>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-profile1" role="tabpanel" aria-labelledby="nav-profile-tab1">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Personal Information    
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editUserModal"><i class="fas fa-pen"></i></button>
                </h4>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <tbody>
                            <tr>
                                <th scope="row">Full Name :</th>
                                <td><?php echo e(Auth::user()->first_name.' '.Auth::user()->last_name); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Mobile :</th>
                                <td><?php echo e(Auth::user()->phone_number); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">E-mail :</th>
                                <td><?php echo e(Auth::user()->email); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Location :</th>
                                <td><?php
                                    if (Auth::user()->country) {
                                        $country = country::where(['cnt_code' => Auth::user()->country])->first();
                                        echo $country->cnt_name;
                                    }
                                    ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Date of Birth :</th>
                                <td><?php echo e(Auth::user()->dob); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        <input type="hidden" name="user_wallet_amount" value="<?php echo e(auth()->user()->wallet); ?>" id="user_wallet_amount">
        <input type="hidden" name="user_role" value="<?php echo e(check_role()); ?>" id="user_role">
        <input type="hidden" name="media_id" id="media_id" value="0">
        <div class="main-board " id="desktop-div">
		<div class="nav-part">
			<div class="nav nav-tabs tab-select-nav" id="nav-tab" role="tablist">
				<a class="active" id="nav-watch-tab" data-toggle="tab" href="#nav-watch" role="tab" aria-controls="nav-watch" aria-selected="true">
					Watch
					<span></span>
				</a>
				<a class id="nav-earn-tab" data-toggle="tab" href="#nav-earn" role="tab" aria-controls="nav-profile" aria-selected="false">
					Earn
				</a>
				<a class id="nav-valyou-tab" data-toggle="tab" href="#nav-valyou" role="tab" aria-controls="nav-contact" aria-selected="false">
					Valyou PlayList
				</a>
			</div>

			<div class="tab-content" id="watchTabContent">
				<div class="tab-pane fade active show p-3" id="nav-watch" role="tabpanel" aria-labelledby="nav-watch-tab" style="display: block">
					
					<div class="watch-part">	
						<div class="video-watch-part-1 col-md-7" style="background-color: white">
							<div class="video-real-watch">
								<video class = "my-video" id="see_video" controlsList="nodownload" src="" type="video/mp4" controls></video>
							</div>
							
							<div class="inner-button-part">
								<div class="personal-detail-info">
									<div class="personal-img">			
										<img src="<?php echo e(URL::asset('assets/uploads/artist/72921766.jpg')); ?>" style="width: 48px; height: 48px;" alt="">
										
									</div>
									<div class="personal-detail-info-content-inner">
										<h3 class="my-auto mx-2"><?php echo e($videos[0]->artist->brand); ?></h3>
										<div class="personel-detail-stock-content">
											<p class="my-auto"><strong class="stock-price">Stock Price:</strong> <strong class="stock-value <?php echo e((@$videos[0]->artist->stock_value < 0) ?'c-pink': 'c-green'); ?>">$<?php echo e($videos[0]->artist->stock_value); ?>VXD<img class="" width="15" height="15" src="<?php echo e((@$videos[0]->artist->stock_value<0) ?'https://testvps.nwlogics.com/public/assets/images/valyoux/pink_arrow_circle_down.svg': 'https://testvps.nwlogics.com/public/assets/images/valyoux/green_arrow_price_going_up.svg'); ?>"></strong> &nbsp; - &nbsp; <strong class="stock-percentage <?php echo e((@$videos[0]->artist->change_stock < 0) ?'c-pink': 'c-green'); ?>"> <?php echo e($videos[0]->artist->change_stock); ?>%<img class="" width="15" height="15" src="<?php echo e(@$videos[0]->artist->change_stock<0?'https://testvps.nwlogics.com/public/assets/images/valyoux/pink_arrow_circle_down.svg': 'https://testvps.nwlogics.com/public/assets/images/valyoux/green_arrow_price_going_up.svg'); ?>"></strong> </p>
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
								<div class="button-view1">
									<div class="special-show-buttons1">
										<div class="left-btn1">
											<div class="btn-text1">
												<p class="comments1">COMMENTS </p>
											</div>
											<div class="btn-text1">
												<p class="promote1">PROMOTE</p>
											</div>
										</div>
										<div class="right-btn1">
											<div class="btn-gradient-valyou1">
												<p class="valyou-song1">VALYOU SONG</p>
											</div>
											<a href="<?php echo e(URL::to('artist/stock-price',$artists[0]->id)); ?>">
												<div class="btn-gradient-invest1">
												<p class="invest1">INVEST</p>
												</div>
											</a>	
										</div>
									</div>
								
								</div>

							</div>
						</div>

						<div class="show-detail-special-part">
							
							<div class="special-video-part">
								<?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="especailly-part">
									<div class="video-detail-image" onclick="selVideoDetail(<?php echo e($row->id); ?>, 0)">
										<div class="video-overlay"><i class="fa fa-play-circle-o play-icon"></i></div>	
										<?php if($row->audio_cover_image): ?>
											<img class="my-video" src="<?php echo e(asset($row->audio_cover_image)); ?>">
										<?php else: ?>
											<video class = "my-video" controlsList="nodownload" src="<?php echo e(asset($row->name)); ?>" type="video/mp4" ></video>
										<?php endif; ?>
									</div>
									<div class="video-detail-info">
										<p><?php echo e(@$row->audio_title); ?></p>
										<h4><?php echo e(@$row->singer); ?></h4>
										<h5>Song Valyou: <strong id="valyou-val">$<?php echo e(numberformat(@$row->artist->stock_value)); ?></strong></h5>
										<h5>Stock Price &nbsp;<span></span>&nbsp;<strong class="<?php echo e((@$row->artist->stock_value < 0) ?'c-pink': 'c-green'); ?>"><img class="" width="15" height="15" src="<?php echo e((@$row->artist->stock_value < 0) ?'https://testvps.nwlogics.com/public/assets/images/valyoux/pink_arrow_circle_down.svg': 'https://testvps.nwlogics.com/public/assets/images/valyoux/green_arrow_price_going_up.svg'); ?>">&nbsp;$<?php echo e(numberformat(@$row->artist->stock_value)); ?></strong>&nbsp; - &nbsp;<strong class="<?php echo e((@$row->artist->change_stock < 0) ?'c-pink': 'c-green'); ?>"><?php echo e($row->artist->change_stock); ?>%</strong></h5>
									</div>
								</div>		
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								
								
							</div>
							
							
							<div class="special-comment-part">
								<div class="comment-main-body p-3">
									<div class="search-comment-part">
										<div class="comment-logo-part"  >
											<img src="<?php echo e(URL::asset('assets/uploads/artist/72921766.jpg')); ?>" style="width: 48px; height: 48px" alt="">
											<div class="comment-logo-detail-info">
												<p class="py-auto"><strong>Comments</strong></p>
												<p class="py-auto">Music Fan Investor</p>
											</div>
										</div>
										<div class="searchbar-part">
											<form action="">
												<input type="text" placeholder="Write your comment">
											</form>
										</div>
										<div class="close-btn">
											<img src="<?php echo e(URL::asset('assets/images/close_btn.png')); ?>" class="close_btn" alt="close">
										</div>						
								
									</div>
									<div class="show-comment-content-part">
										<div class="show-and-reply-comment-part">
											<div class="comment-body">
												<div class="media">
													<img class="mr-2" src="<?php echo e(URL::asset('assets/uploads/artist/72921766.jpg')); ?>" style="width: 32px; height: 32px" alt="logo-img">
													<div class="media-body">
														<h5 class="mt-0">User Account Name</h5>
														<h6>Music fan investor</h6>
														I love Drake, As a rapper, I invested in him because I love his follow.										
													</div>									
												</div>
												<button type="submit" class="reply-btn">Reply</button>
											</div>							
										</div>
										<div class="show-and-reply-comment-part">
											<div class="comment-body">
												<div class="media">
													<img class="mr-2" src="<?php echo e(URL::asset('assets/uploads/artist/72921766.jpg')); ?>" style="width: 32px; height: 32px" alt="logo-img">
													<div class="media-body">
														<h5 class="mt-0">User Account Name</h5>
														<h6>Music fan investor</h6>
														I love Drake, As a rapper, I invested in him because I love his follow.										
													</div>									
												</div>
												<button type="submit" class="reply-btn">Reply</button>
											</div>							
										</div>
										<div class="show-and-reply-comment-part">
											<div class="comment-body">
												<div class="media">
													<img class="mr-2" src="<?php echo e(URL::asset('assets/uploads/artist/72921766.jpg')); ?>" style="width: 32px; height: 32px" alt="logo-img">
													<div class="media-body">
														<h5 class="mt-0">User Account Name</h5>
														<h6>Music fan investor</h6>
														I love Drake, As a rapper, I invested in him because I love his follow.										
													</div>									
												</div>
												<button type="submit" class="reply-btn">Reply</button>
											</div>							
										</div>

									</div>
									
								</div>
												
							</div>
							
							
							
							<div class="special-promote-part" >
								<div class="promote-main-body p-3">
									<div class="promote-comment-part">
										<div class="comment-logo-part"  >
											<img src="<?php echo e(URL::to('public/assets/uploads/artist/72921766.jpg')); ?>" style="width: 48px; height: 48px" alt="">
											<div class="comment-logo-detail-info">
												<p class="py-auto"><strong>Song Name</strong></p>
											</div>
										</div>	
										<div class="close-promote">
											<img src="<?php echo e(URL::to('public/assets/images/close_btn.png')); ?>" class="close_btn" alt="close">
										</div>					
										
									</div>
								
									<div class="input-data-field">
										<form class="myForm">
										<?php echo csrf_field(); ?>
											<input type="hidden" name="song_id" class="get_video_id" value="<?= $videos[0]->id;?>" >
											<input type="hidden" name="song_type" class="get_video_type" value="2" >
										
											<div class="form-group">
												<label for="inputPrice">1. How much would you like to spend on promotion?</label>
												<input type="text" onkeyup="get_each_price('desktop')" class="input-price input-round form-control promotion_price promotion_pay " id="inputPrice" placeholder="$1">
												<input type="hidden" name="promotion_pay" class="input-price input-round form-control promotion_price promotion_pay promotionRemaining" id="inputPrice">
												<input type="hidden" name="promotion_fees" class="getPromotionFees" value="0">
											</div>
											
											<div class="form-group">
												<label for="inputNumPeople">2. How many people would you like to listen to this song</label>
												<input type="text" name="people_count" onkeyup="get_each_price('desktop')" class="input-num-people input-round form-control people_count" id="inputNumPeople" placeholder="How many people?">
											</div>
											<div class="form-group">
												<label for="inputPrice">3. How much would you pay each listener</label>
												<input type="text" name="each_promote_pay" readonly class="input-price input-round form-control each_promote_pay" id="inputPrice" value="0">
											</div>
											<label for="inputTrackType">4.Select Promotion Type</label>
												<select  class="input-track-type promotetype input-round form-control" name="promote_type" onChange="promotion_type('desktop')" id="inputTrackType" placeholder="Please Select">
													<option disabled selected>Select Type</option>
													<option value="target">Targeted promotional campaign</option>
													<option value="open">Open promotional campaign</option>
												
												</select>
												<br>
												<!-- dropdown after select promotion type -->
												<div class="afterSelecttype"></div>
											
											<div class="bottom-button">
												<p><strong class="getCosttopromote">Total Cost to promote: Each listener x people = Total</strong></p>
												<div class="btn-field">
													<input type="button" value="Cancel" class="btn-cancel">
													<input type="submit" value="Promote" class="btn-promote">
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
							

							
							<!-- <div class="special-promote-part-2">
								<div class="promote-main-body">
									<div class="promote-comment-part p-3">
										<div class="comment-logo-part"  >
											<img src="<?php echo e(URL::asset('assets/uploads/artist/72921766.jpg')); ?>" style="width: 48px; height: 48px" alt="">
											<div class="comment-logo-detail-info">
												<p class="py-auto"><strong>Song Name</strong></p>
											</div>
										</div>						
										<img src="<?php echo e(URL::asset('assets/images/close_btn.png')); ?>" class="close_btn" alt="close">
									</div>
								
									<form>
									<div class="input-data-field  p-3">
										
											<div class="form-group">
												<label for="inputNumPeople">1. How many people would you like to listen to this song</label>
												<input type="text" class="input-num-people" id="inputNumPeople" placeholder="5">
											</div>
											<div class="form-group">
												<label for="inputPrice">2. How much would you pay each listener</label>
												<input type="text" class="input-price" id="inputPrice" placeholder="$1">
											</div>
											<div class="form-group">
												<label for="inputNumPeople">3.How would you like to promote this track?</label>
												<select name="select promote" id="promote-select">
													<option value="">Please Select</option>
													<option value="1">1</option>
													<option value="2">2</option>
												</select>
											</div>

									</div>
									<div class="bottom-button-bordered w-100">
										<p><strong>Total Amount to start promoting: $5.00</strong></p>
										<div class="btn-field">								
											<input type="button" value="Cancel" class="btn-cancel">
											<input type="button" value="Promote" class="btn-promote">
										</div>
									</div>
									</form>
								</div>				
							</div>			 -->

							

							
							<div class="special-promote-part-3">
								<div class="promote-main-body p-3">
									<div class="promote-comment-part">
										<div class="comment-logo-part"  >
											<img src="<?php echo e(URL::asset('assets/uploads/artist/72921766.jpg')); ?>" style="width: 48px; height: 48px" alt="">
											<div class="comment-logo-detail-info">
												<p class="py-auto"><strong>Song Name</strong></p>
											</div>
										</div>	
										<div class="close-promote-modal">
											<img src="<?php echo e(URL::asset('assets/images/close_btn.png')); ?>" class="close_btn" alt="close">
										</div>														
									</div>
								
									<!-- <div class="input-data-field">
										<form>
											<div class="form-group">
												<label for="inputNumPeople">1. How much would you like to spend</label>
												<input type="text" class="input-num-people" id="inputNumPeople" placeholder="Budget Amount">
											</div>
											<div class="form-group">
												<label for="inputPrice">2. How much would you pay each listener</label>
												<input type="text" class="input-price" id="inputPrice" placeholder="Each person that listens to this song will receive">
											</div>
											<div class="form-group">
												<label for="inputCompany">3.How would you like to promote this track?</label>
												<input type="text" class="input-company" id="inputCompany" placeholder="Please Select">
											</div>
											<div class="bottom-button">
												<p class="change-font"><strong>Total Amount to start promoting: $20.00</strong></p>
												<div class="btn-field">
													<input type="button" value="Cancel" class="btn-cancel">
													<input type="button" value="Promote" class="btn-promote">
												</div>
											</div>
																	
										</form>
									</div> -->
								</div>
							</div>
							

						</div>			
						
					</div>	
					

					<div class="personal-info-button-part desktop-detail-info">
						
						<div class="personal-detail-info">
							<div class="personal-img">			
								<img src="<?php echo e(asset($artists[0]->photo)); ?>" style="width: 48px; height: 48px;" alt="">	
							</div>
							<div class="personal-detail-info-content">
								<h3 class="my-auto mx-2"><?php echo e($artists[0]->brand); ?></h3>	
								<div class="personel-detail-stock-content">
									<p class="my-auto"><strong class="stock-price">Stock Price:</strong> <strong class="stock-value <?php echo e(($artists[0]->stock_value < 0) ?'c-pink': 'c-green'); ?>">$<?php echo e($artists[0]->stock_value); ?>VXD <img class="" width="15" height="15" src="<?php echo e($row->artist->stock_value<0?'https://testvps.nwlogics.com/public/assets/images/valyoux/pink_arrow_circle_down.svg': 'https://testvps.nwlogics.com/public/assets/images/valyoux/green_arrow_price_going_up.svg'); ?>"></strong> <strong class="stock-percentage <?php echo e(($artists[0]->change_stock < 0) ?'c-pink': 'c-green'); ?>"> &nbsp; - &nbsp; <?php echo e($artists[0]->change_stock); ?>% <img class="" width="15" height="15" src="<?php echo e($row->artist->change_stock<0?'https://testvps.nwlogics.com/public/assets/images/valyoux/pink_arrow_circle_down.svg': 'https://testvps.nwlogics.com/public/assets/images/valyoux/green_arrow_price_going_up.svg'); ?>"></strong> </p>
								</div>
								<div class="personal-detail-info-category">
									<p><strong class="song-title">Song Title:</strong> <strong class="song-from"> &nbsp;Started From The Bottom</strong></p>
									&nbsp;&nbsp;&nbsp;
									<p><strong class="song-valyou">Song Valyou:</strong><strong class="song-valyou-value">&nbsp; $<?php echo e($artists[0]->stock_value); ?></strong></p>
									&nbsp;&nbsp;&nbsp;
									<p><strong class="song-category">Music Artist Brand Listing Category:</strong> <strong class="song-type">&nbsp; Major Artist</strong></p>
								</div>
							</div>
						</div>
						
					
						
						<div class="button-view">
							<div class="col-md-7 show-buttons">
								<div class="first-button-part">
									<div class="left-btn">
										<div class="btn-text">
											<p class="comments">COMMENTS </p>
										</div>
										<div class="btn-text">
											<p class="promote">PROMOTE</p>
										</div>
									</div>
									<div class="right-btn" >
										<div class="btn-gradient-valyou">
											<p class="valyou-song">VALYOU SONG</p>
										</div>
										<a href="<?php echo e(URL::to('artist/stock-price',$artists[0]->id)); ?>">
											<div class="btn-gradient-invest">
											<p class="invest1">INVEST</p>
											</div>
										</a>	
									</div>
								</div>

								<div class="second-button-part">			
									<div class="circle-left">
										<div class="valyou-circle-num">
											$1
										</div>
										<div class="valyou-circle-num">
											$2
										</div>
										<div class="valyou-circle-num">
											$3
										</div>
										<div class="valyou-circle-num">
											$4
										</div>
										<div class="valyou-circle-num">
											$5
										</div>
										<div class="valyou-circle-num ">
											<p class="custom-p-btn">Custom</p>
										</div>
									</div>
									<div class="circle-right">
										<div class="btn-gradient-valyou">
											<p class="valyou-song">VALYOU SONG</p>
										</div>
									</div>						
								</div>

								<div class="custom-button-part">
									<div class="custom-input">
										<input type="text" name="input-custom-value" id="customValue" placeholder="Minimum $1">
									</div>								
									<div class="valyou-circle-num ">
										<p class="valyou-circle-confirm">Confirm</p>
									</div>
									<div class="btn-gradient-valyou">
										<p class="valyou-song">VALYOU SONG</p>
									</div>
								</div>
							</div>
						</div>
						
					</div>				
					
					<div class="row w-full mx-0">
						<?php echo $__env->make('partician.brand_sponsor_list',['list'=>$artists], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					</div>
					
				</div>
				<div class="tab-pane fade displayhideearn" id="nav-earn" role="tabpanel" aria-labelledby="nav-earn-tab">
					
					<div>earn part</div>
					
				</div>
				<div class="tab-pane fade" id="nav-valyou" role="tabpanel" aria-labelledby="nav-valyou-tab">
					
					<div>Valyou song</div>
					<div>Valyou song</div>
				</div>
			</div>
		</div>
		
	</div>	
        <div id="mobile-div">
		<div class="mo-video-part">
			<div class="" style="margin: 0 -10px;">
				<video class="mo-video" id="see_video_mobile" controlsList="nodownload" src="" type="video/mp4" controls></video>
			</div>
				<div>
					<div class="row mo-btn-group"> 
						<div class="text-center">
							<div class="left-card-part share-comments mo-comment-btn" data-commentid="111">
								<p class="card-text text-comments" style="display: inline-flex"> <span class="mt-1"><img class="hint-img" src="<?php echo e(URL::asset('assets/images/comments.svg')); ?>"></span><span class="mt-2 ml-1" style="font-weight: 600;"> COMMENTS</span> </p>
							</div>
						</div>
						<div class="text-center mx-2">
							<div class="left-card-part share-promote-song mo-promote-btn" data-promoteid="111">
								<p class="card-text text-promote" style="display: inline-flex"><span><img class="hint-img" src="<?php echo e(URL::asset('assets/images/promote.svg')); ?>" alt=""></span><span class="mt-2 ml-1" style="font-weight: 600;">PROMOTE</span></p>
							</div>
						</div>
									
						<div class="text-center">
							<div class="p-2 left-card-part share-valyou-music mo-border mo-valyou-btn" data-valyouid="111">
								<p class="card-text text-valyou-song">VALYOU SONG</p>
							</div>
						</div>
						
					</div> 
				</div>
			<div>
				<div class="mo-userinfo">
					<div class="personal-img">			
						<img src="<?php echo e(URL::asset($videos[0]->artist->photo?$videos[0]->artist->photo:'')); ?>" style="width: 48px; height: 48px;" alt="">
					</div>
					<div class="mo-userinfo-content">
						<h4 class="my-auto mx-2"><?php echo e(isset($videos[0]->artist->brand) ? $videos[0]->artist->brand : ''); ?></h4>
						<div class="personel-detail-stock-content">
							<p class="my-auto <?php echo e(@$videos[0]->artist->stock_value<0?'c-pink': 'c-green'); ?>" ><b>Stock Price : $<?php echo e(numberformat(@$videos[0]->artist->stock_value)); ?> VXD</b> <img class="" width="15" height="15" src="<?php echo e(@$videos[0]->artist->stock_value<0?'https://testvps.nwlogics.com/public/assets/images/valyoux/pink_arrow_circle_down.svg': 'https://testvps.nwlogics.com/public/assets/images/valyoux/green_arrow_price_going_up.svg'); ?>"> <b class="<?php echo e(@$videos[0]->artist->change_stock<0?'c-pink': 'c-green'); ?>"> &nbsp; - &nbsp; <?php echo e($videos[0]->artist->change_stock); ?>% <img class="" width="15" height="15" src="<?php echo e(@$videos[0]->artist->change_stock<0?'https://testvps.nwlogics.com/public/assets/images/valyoux/pink_arrow_circle_down.svg': 'https://testvps.nwlogics.com/public/assets/images/valyoux/green_arrow_price_going_up.svg'); ?>"></b> </p>
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
		</div>
		<div class="mo-content">
			<div class="text-center mb-3">
				<a class="change_url" href="<?php echo e(URL::to('artist/stock-price',$artists[0]->id)); ?>">
					<div class="share-invest green-gradient" data-promoteid="111">
						<p class="card-text text-invest">INVEST IN ARTIST</p>
					</div>
				</a>
			</div>
			<div>				
				<div class="special-video-part">
					<div class="row w-full mx-0">
						<?php echo $__env->make('partician.brand_sponsor_list',['list'=>$artists], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					</div>
					
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
								<div class="video-detail-info py-1 pl-2 d-flex">
									<div class="m-auto">
										<p class="fs-2 font-weight-bold py-2"><?php echo e(@$row->singer); ?> - <?php echo e(@$row->audio_title); ?></p>
										<p style="font-size: small; font-weight: 200;">Song Valyou: <strong id="valyou-val">$<?php echo e(numberformat(@$row->artist->stock_value)); ?></strong></p>
										<h6 class=<?php echo e($row->artist->change_stock<0?'txt-main': 'text-green'); ?>><small>Stock Price &nbsp;<span><img class="" width="15" height="15" src="<?php echo e($row->artist->change_stock<0?'https://testvps.nwlogics.com/public/assets/images/valyoux/pink_arrow_circle_down.svg': 'https://testvps.nwlogics.com/public/assets/images/valyoux/green_arrow_price_going_up.svg'); ?>"></span>&nbsp;&nbsp;<strong>$<?php echo e($row->artist->stock_value); ?>VXD</strong>&nbsp;<strong><?php echo e($row->artist->change_stock<0?'': '+'); ?><?php echo e($row->artist->change_stock); ?>%</strong></small></h6>
									</div>
								</div>
							</div>		
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							
						</div>
					
				</div>
			</div>
		</div>
		
		<div class="editmodal">
			<div class="all-overlay" style="display: none"></div>
			<div class="comment-edit editmodal-content" >
				<div class="comment-body" style="width: 100%;">
					<div class="comment-scroll" >
						<ul class="p-3 mo-comments" style="list-style: none;">
							<?php
								$item = $videos[0];
							?>
							
							<?php $__currentLoopData = $item->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li>
								<div class="flex mo-card-info" style="margin-top: 10px">
									<div>
										<img src="<?php echo e(URL::asset(\App\User::find($comment->user_id)->avatar)); ?>" class="avatar-md rounded-circle" style="width: 50px; height: 50px;">
									</div>
									<div class="px-2 comment-info" >
										<span class="favor-ico" onclick="onFavorHandle(this)" data-id="<?php echo e($comment->id); ?>"><i class="fa fa-heart"></i></span>
										<?php if(auth()->user()->id == $comment->user_id): ?>
											
										<?php endif; ?>
										<p class="font-bold"><b><?php echo e(\App\User::find($comment->user_id)->first_name); ?> <?php echo e(\App\User::find($comment->user_id)->last_name); ?></b></p>
										<p class="text-gray-300" style="font-size: 13px">Music Fan Investor</p>
										<p class="text-gray-500 comment-content" ><?php echo e($comment->comment); ?> </p>
									</div>
								</div>   
							</li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</ul>
					</div>
					<div class="comment-input">
						<div>
							<img src="<?php echo e(URL::asset(auth()->user()->avatar)); ?>" class="avatar-md rounded-circle" style="width: 40px; height: 40px;">
						</div>
						<div style="display: inline-flex; width: 100%;">
							<input type="text" class="form-control chat-input mo-comment-input" name="comment-" placeholder="Enter Comment...">
							<img style="transform: rotate(90deg);" class="mo-comment-send-btn" data-media="111" src="<?php echo e(URL::asset('assets/images/valyoux/green_arrow_price_going_up.svg')); ?>">
						</div>
					</div>
				</div>
			</div>
			<div class="promote-edit editmodal-content" >
				<div class="mo-promote-main-body p-3" style="width: 100%; padding: 22px 34px !important">
					<div class="promote-comment-part">
						<div class="comment-logo-part"  >
							<img src="<?php echo e(URL::asset('assets/uploads/artist/72921766.jpg')); ?>" style="width: 48px; height: 48px" alt="">
							<div class="comment-logo-detail-info">
								<p class="py-auto"><strong>Song Name</strong></p>
							</div>
						</div>	
						<div class="close-promote-modal">
							<img src="<?php echo e(URL::asset('assets/images/close_btn.png')); ?>" class="close_btn" alt="close">
						</div>														
					</div>
				
					<div class="input-data-field">
										<form class="myForm_mo">
										<?php echo csrf_field(); ?>
											<input type="hidden" name="song_id" class="get_video_id" value="<?= $videos[0]->id;?>" >
											<input type="hidden" name="song_type" class="get_video_type" value="2" >
										
											<div class="form-group">
												<label for="inputPrice">1. How much would you like to spend on promotion?</label>
												<input type="text" onkeyup="get_each_price('mobile')" class="input-price input-round form-control promotion_pay" id="inputPrice" placeholder="Price in $">
												<input type="hidden" name="promotion_pay" class="input-price input-round form-control promotion_pay promotionRemaining" id="inputPrice" placeholder="Price in $">
												<input type="hidden" name="promotion_fees" class="getPromotionFees" value="0">
											</div>
											
											<div class="form-group">
												<label for="inputNumPeople">2. How many people would you like to listen to this song</label>
												<input type="text" name="people_count" onkeyup="get_each_price('mobile')" class="input-num-people input-round form-control people_count" id="inputNumPeople" placeholder="How many people?">
											</div>
											<div class="form-group">
												<label for="inputPrice">3. How much would you pay each listener</label>
												<input type="text" name="each_promote_pay" readonly class="input-price input-round form-control each_promote_pay" id="inputPrice" value="0">
											</div>
											<label for="inputTrackType">4.Select Promotion Type</label>
												<select  class="input-track-type promotetype input-round form-control" name="promote_type" onChange="promotion_type('desktop')" id="inputTrackType" placeholder="Please Select">
													<option disabled selected>Select Type</option>
													<option value="target">Targeted promotional campaign</option>
													<option value="open">Open promotional campaign</option>
												
												</select>
												<br>
												<!-- dropdown after select promotion type -->
												<div class="afterSelecttype"></div>
											
											<div class="bottom-button">
												<p><strong class="getCosttopromote">Total Cost to promote: Each listener x people = Total</strong></p>
												<div class="btn-field">
													<input type="button" value="Cancel" class="btn-cancel">
													<input type="submit" value="Promote" class="btn-promote">
												</div>
											</div>
										</form>
									</div>
				</div>
			</div>
			<div id="valyou-music-section- " class="valyou-media valyou-edit editmodal-content">
				
					<div class="btn-margin">
						<div class="row" style="padding: 0 20px;">
							<?php $artist_poits = artistPoints(); ?>
							<?php $__currentLoopData = $artist_poits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="col-2 col-md-2">
									<button type="button" class=" btn btn-light radio dollar-price " data-toggle="tooltip" data-placement="top" data-original-title="This song is nice, might be a hit, Valyou for $<?php echo e($row->amount); ?>." onclick="setValyou(<?php echo e($row->amount); ?>)">$<?php echo e($row->amount); ?></button>
								</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<div class="col-2 col-md-2" style="padding: 11px 6px;">
								<span class="valyou-custom-btn">Custom</span>
							</div>
						</div>
						<div class="row custom-valyou-div">
							<div class="col-5" style="font-size: 16px; padding: 5px 20px;">Custom price</div>
							<div class="col-7">
								<input type="text" class="input-price" id="set_valyou" placeholder="min $1">
							</div>
						</div>
					</div>
					<div class="col-md-12 text-center mb-5 proceed-valyou-song-div">
						<p class="text-danger error_message">Please choose an option above</p>
						<div class="row justify-content-spaceeven">
							<button type="button" class="btn valyou-close-btn btn-outline-secondary w-150">Cancel</button>
							<button type="button" class="btn valyou-g-btn add_value spycust-margin-10 m-0" value="">Proceed to Valyou Song</button>
						</div>
							
					</div>
			</div>
		</div>
		
		<!-- Modal -->
		<div class="modal fade in proceed_modal" id="proceedModal" aria-labelledby="proceedModalLabel" aria-hidden="true">
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
							You now have unlimited plays & access to listen to this song free anytime.
							It has now been added to your Valyou playlist. You gained <span class="vip_points"></span> Artist VIP points. <br><br>
							Kind Regards, <br>
							<b>Artist Name.</b>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
    </div>  
       

        
       
        

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('assets/libs/select2/select2.min.js')); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/multiselect/2.2.9/js/multiselect.js"></script>
<!--     <script src="<?php echo e(URL::asset('assets/js/pages/promote-music.js')); ?>"></script> -->
<script src="<?php echo e(URL::asset('assets/js/pages/custom-player.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/tagify/tagify.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/intl-tel-input/js/intlTelInput.js')); ?>"></script>
<script class="iti-load-utils" async="" src="<?php echo e(URL::asset('assets/libs/intl-tel-input/js/utils.js')); ?>"></script>

<!-- <script src="<?php echo e(URL::asset('assets/gear_app/js/jquery.gearplayer.libs.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/gear_app/js/jquery.gearplayer.js')); ?>"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.0/js/toastr.js" integrity="sha512-uB84KL69yTwjmCPpaQQ1Mz1EVEjlJskbITfaRJVi8glR3xF5x9vVLI52rv1Dj7FGDW7L0UFkJ34UrdMMS6zjJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.0/js/toastr.min.js" integrity="sha512-CwvahzdRSaKdj5SaWH7PBZmlgkvN2sz3+kDTS9yfjH+XZS/iYFsUAXVTTfeMM7uVtLabq1Hg2IC7V1RMaolcyw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
<!-- <script src="<?php echo e(URL::asset('assets/gear_app/js/app.js')); ?>"></script> -->
<script src="<?php echo e(URL::asset('assets/js/watch.js')); ?>"></script>
<script>
    avatar.onchange = evt => {
  const [file] = avatar.files
  if (file) {
    blah.src = URL.createObjectURL(file)
  }
}
</script>
<script>
    $(document).ready(function() {
        // watch to earn
        // loadmoreData(0, 'watch-to-earn');
        // function loadmoreData(page, type) {
        //     $.ajax({
        //         url: "loadmoredata",
        //         type: "GET",
        //         cache: false,
        //         data: {
        //             offset: page,
        //             page_type: type
        //         },
        //         success: function(data) {
        //             if (data) {
        //                 const data1 = JSON.parse(data);
        //                 $(".loadbtnvideos").hide();
        //                 $(".all_social_videos").append(data1.html);
        //             }
        //         }
        //     });
        // }
        $(document).on('click', '.added-feature .card .body-p', function() {
        if ($(window).width() <= 425) {
            $('.added-feature .card .body-p').removeClass('add-shadow-after-selected-425');
            $('.added-feature .card .body-p').removeClass('add-shadow-after-selected');
            $(this).addClass('add-shadow-after-selected-425');
        } else {
            $('.added-feature .card .body-p').removeClass('add-shadow-after-selected-425');
            $('.added-feature .card .body-p').removeClass('add-shadow-after-selected');
            $(this).addClass('add-shadow-after-selected');
        }
    });

    $(document).on('click', '.close-btn-promote-song-section', function() {
        let id = $(this).data('promoteid');
        $(`#promote-song-section-${id}`).css('display', 'none');
        $('.added-feature .card .body-p').removeClass('add-shadow-after-selected-425');
        $('.added-feature .card .body-p').removeClass('add-shadow-after-selected');
    });
	
    $(document).on('click','.valyou-close-btn', function(){
    	
    	let id = $(this).data('promoteid');
    	$('.valyou-music-hide').css('display','none');
    });
    
    $(document).on('click','.share-promote-song',function () {
        let id = $(this).data('promoteid');
        $(`#valyou-music-section-${id}`).css('display','none');
        $(`#comments-section-${id}`).css('display','none');
        $(`#promote-song-section-${id}`).css('display','block');

        // var email_input = document.querySelector('input[name=email-promote]');
        var email_input = document.getElementById('promoteemail'+id);
        var email_tagify = new Tagify(email_input, {
            dropdown: {
                position: "input",
                enabled: 0 // always opens dropdown when input gets focus
            },
            // pattern: /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@(?:\S{1,63})$/
            transformTag: function(tagData) {
                // example of basic custom validation
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                if (!emailReg.test(tagData.value)) {
                    tagData.value = '';
                    alert('Please enter a valid email address!');
                }
            }
        });

        // var sms_input = document.querySelector('input[name=sms-promote]')
        var sms_input = document.getElementById('promotephone'+id);
        var sms_tagify = new Tagify(sms_input, {
            dropdown: {
                position: "input",
                enabled: 0 // always opens dropdown when input gets focus
            },
            transformTag: function(tagData) {
                // example of basic custom validation
                //https://www.twilio.com/docs/glossary/what-e164#regex-matching-for-e164
                var emailReg = /^\+[1-9]\d{1,14}$/;
                if (!emailReg.test(tagData.value)) {
                    tagData.value = '';
                    alert('Please enter a valid phone number(E. 164 formatting)!');
                }
            }
        });

        phone_number = window.intlTelInput(document.getElementById('phone'+id), ({
            autoPlaceholder: "polite",
            formatOnDisplay: true,
            placeholderNumberType: "MOBILE",
            separateDialCode: true,
            hiddenInput: "full",
            utilsScript: "<?php echo e(URL::asset('assets/libs/intl-tel-input/js/utils.js')); ?>"
        }));

        $('#phone'+id).keypress(function(event) {
            var keycode = (event.keyCode ? event.keyCode : event.which);
            if (keycode == '13' || keycode == '44' || event.key == "Escape") {
                event.preventDefault();
                sms_tagify.addTags(phone_number.getNumber());
                $(this).val('');
            }
        });

        $("#phone"+id).blur(function() {
            sms_tagify.addTags(phone_number.getNumber());
            $(this).val('');
        });

        // investors list with avatar
        // var inputElm = document.querySelector('input[name=investor-list]');
        // var inputElm = document.querySelector('input[name=investor-list]');
        var inputElm = document.getElementById('investorlist'+id);

        function tagTemplate(tagData) {
            return `
                <tag title="${tagData.email}"
                        contenteditable='false'
                        spellcheck='false'
                        tabIndex="-1"
                        class="tagify__tag ${tagData.class ? tagData.class : ""}"
                        ${this.getAttributes(tagData)}>
                    <x title='' class='tagify__tag__removeBtn' role='button' aria-label='remove tag'></x>
                    <div>
                        <div class='tagify__tag__avatar-wrap'>
                            <img onerror="this.style.visibility='hidden'" src="${tagData.avatar}">
                        </div>
                        <span class='tagify__tag-text'>${tagData.name}</span>
                    </div>
                </tag>
            `
        }

        function suggestionItemTemplate(tagData) {
            return `
                <div ${this.getAttributes(tagData)}
                    class='tagify__dropdown__item ${tagData.class ? tagData.class : ""}'
                    tabindex="0"
                    role="option">
                    ${ tagData.avatar ? `
                    <div class='tagify__dropdown__item__avatar-wrap'>
                        <img onerror="this.style.visibility='hidden'" src="${tagData.avatar}">
                    </div>` : ''
                    }
                    <strong>${tagData.name}</strong>
                    <span>${tagData.email}</span>
                </div>
            `
        }

        <?php
        $user_list = array();
        foreach ($users as $user) {
            array_push($user_list, array(
                "value" => $user->id,
                "name" => $user->first_name . " " . $user->last_name,
                "avatar" => asset($user->avatar),
                "email" => $user->email
            ));
        }
        ?>
        var $user_json = <?php echo json_encode($user_list); ?>;
        var whitelist = $user_json;
        // initialize Tagify on the above input node reference
        var tagify = new Tagify(inputElm, {
            tagTextProp: 'name', // very important since a custom template is used with this property as text
            enforceWhitelist: true,
            skipInvalid: true, // do not remporarily add invalid tags
            dropdown: {
                position: "input",
                closeOnSelect: false,
                enabled: 0,
                classname: 'users-list',
                searchKeys: ['name', 'email'], // very important to set by which keys to search for suggesttions when typing
            },
            templates: {
                tag: tagTemplate,
                dropdownItem: suggestionItemTemplate
            },
            whitelist: whitelist
        })

        tagify.on('dropdown:show dropdown:updated', onDropdownShow)
        tagify.on('dropdown:select', onSelectSuggestion)

        var addAllSuggestionsElm;

        function onDropdownShow(e) {
            var dropdownContentElm = e.detail.tagify.DOM.dropdown.content;

            if (tagify.suggestedListItems.length > 1) {
                addAllSuggestionsElm = getAddAllSuggestionsElm();

                // insert "addAllSuggestionsElm" as the first element in the suggestions list
                dropdownContentElm.insertBefore(addAllSuggestionsElm, dropdownContentElm.firstChild)
            }
        }

        function onSelectSuggestion(e) {
            if (e.detail.elm == addAllSuggestionsElm)
                tagify.dropdown.selectAll();
        }

        // create a "add all" custom suggestion element every time the dropdown changes
        function getAddAllSuggestionsElm() {
            // suggestions items should be based on "dropdownItem" template
            return tagify.parseTemplate('dropdownItem', [{
                class: "addAll",
                name: "Add all",
                email: tagify.whitelist.reduce(function(remainingSuggestions, item) {
                    return tagify.isTagDuplicate(item.value) ? remainingSuggestions : remainingSuggestions + 1
                }, 0) + " Members"
            }])
        }
    });

    function promoteVideo(video_id) {
        var formdata = $('#promotevideo-form-' + video_id).serialize();
        $.ajax({
            url: 'promotevideo/' + video_id,
            type: "POST",
            cache: false,
            data: formdata,
            beforeSend: function() {
                $(".promote-btn-" + video_id).attr("disabled", true);
            },
            success: function(data) {
                if (data) {
                    if (data.type == 'error') {
                        js_error(data.msg);
                    } else {
                        js_success(data.msg);
                    }

                    $(".promote-btn-" + video_id).attr("disabled", false);
                }
            }
        });
    }

// Play Video in 
<?php if(request()->segment(2) == "watch-to-earn"){
?>
$(document).on('click','.overlay-for-video',function () {
    let id = $(this).data('videoid');
    let brand =$(this).data('brand');
    let userId = $(this).data('userid');
    let video = $(this).data('video');
    
    $('#brandName-watch-to-earn').html(brand);
    $('#reward').html($(this).data('reward'));
    if(video == 1){
        $(`#video`+id).trigger('play');
        $(`#overlay`+id).remove();

    }else{
        $('#watch-to-earn').modal('show');
        $('button.playvideo').attr('id',`${id}`);
    	
    }
});

$(document).on('click', '.playvideo', function() {
    
    // video ID
    var id = $(this).attr('id');
    //artist ID
    let userId = $(`#overlay${id}`).data('userid');
    //promotion ID
    let promotionDetailsID = $(`#overlay${id}`).data('promotion-details-id');
    
    axios({
        method: "post",
        url: "<?php echo e(route('admin.promotereward')); ?>",
        data: {
            id: id,
            userId,
            promotion_details_id: promotionDetailsID,
            brand: $(`#overlay${id}`).data('brand')
        }
    }).then((res) => {
        console.log(res);
        // js_success("Enjoy this a lot!");
        $(`#video${id}`).trigger('play');
        $(`#overlay${id}`).remove();
    }).catch((err) => {
        throw err;
    });
});
<?php
}elseif(request()->segment(2) == "listen-to-earn"){
    
}
?>
        loadInvestorData(0, 2);
        loadMoreDataUnknown(0, <?= $id ?>, 1);
        loadFollowersData(0, <?= $id ?>, 2);

        function loadMoreDataUnknown(page, artist_id, follow_type) {
            $.ajax({
                url: "getfollowerlist",
                type: "GET",
                cache: false,
                data: {
                    offset: page,
                    artist_id: artist_id,
                    follow_type: follow_type
                },
                success: function(data) {
                    if (data) {
                        const data1 = JSON.parse(data);
                        if (page) {
                            $(".loadbtn").hide();
                            $(".follower_list").append(data1.following_list);
                            $(".total_follower").html(" &nbsp;&nbsp;&nbsp;" + data1.total_following);
                            // $(".total_follower").html('('+data1.total_follower+')');
                        } else {
                            $(".follower_list").html(data1.following_list);
                            $(".total_follower").html(" &nbsp;&nbsp;&nbsp;" + data1.total_following);
                        }

                    }
                }
            });
        }
        $(document).on('click', '.loadbtn', function() {
            $(".loadbtn").html('<i class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Loading...');
            var pId = $(this).data("id");
            loadMoreDataUnknown(pId, <?= $id ?>, 1);
        });

        function loadFollowersData(page, artist_id, follow_type) {
        	
            $.ajax({
                url: "getfollowerlist",
                type: "GET",
                cache: false,
                data: {
                    offset: page,
                    artist_id: artist_id,
                    follow_type: follow_type
                },
                success: function(data) {
                    if (data) {
                        const data1 = JSON.parse(data);
                        if (page) {
                            $(".loadbtn").hide();
                            $(".following_list").append(data1.following_list);
                            $(".total_following").html(" &nbsp;&nbsp;&nbsp;" + data1.total_following);
                            // $(".total_following").html('('+data1.total_following+')');
                        	


                        } else {
                            $(".following_list").html(data1.following_list);
                            $(".total_following").html(" &nbsp;&nbsp;&nbsp;" + data1.total_following);
                        	
                        }
                    }
                }
            });
        }
        $(document).on('click', '.loadbtn1', function() {
            $(".loadbtn1").html('<i class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Loading...');

            var pId = $(this).data("id");
            loadFollowersData(pId, <?= $id ?>, 2);
        });

        $(document).on('click', '.loadbtn2', function() {
            $(".loadbtn2").html('<i class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Loading...');
            var pId = $(this).data("id");

            loadInvestorData(pId, 2);
        });
    });

    function loadInvestorData(page, type) {
        $.ajax({
            url: 'loadinvestordata',
            type: "GET",
            cache: false,
            data: {
                offset: page,
                type: type
            },
            success: function(data) {
                if (data) {
                    const data1 = JSON.parse(data);
                    if (page) {
                        $(".pagination-loadmore").hide();
                        $(".investor_list").append(data1.investors_list);
                    } else {
                        $(".investor_list").html(data1.investors_list);
                    }
                    console.log(data1);
                    $(".total_investments").html(data1.total_investments);
                    $(".buy_total").html(data1.total_valyou_songs);
                }
            }
        });


    }

//     $("#search-investor").on("input", function(e) {
//         console.log(123);

//     });



$('body').delegate('#search-investor','keyup input',function() {
	
	var user_name = $(this).val();
	
	if(user_name!=''){
    	$.ajax({
            url: "investors",
            type: "GET",
            //cache: false,
            data: {
                user_name: user_name,
            },
            success: function(data) {
                if (data) {
                	
                	$('.mains3').show();
                	$('.mains3').html(data.result);
                }
            	else{
                	$('.mains3').show();
                	$('.searchresultmain').html(data.result);
                }
            }
        });
    }
	else{
    	$('.mains3').hide();
    
    	}
	
    });

$(document).on('click','.searchresultmain',function(){
	var user_id = $(this).data('id');
	var investor_name = $(this).data('name');
	var investor_url = "<?php echo e(url('get/investor')); ?>"+'?user_id='+user_id;
	$('#search-investor').val(investor_name);
	if(user_id){
    	$.ajax({
            url: "get/investor",
            type: "GET",
            //cache: false,
            data: {
                user_id: user_id,
            },
            success: function(data) {
                if (data) {
                	$('.mains3').hide();
                	window.location.replace(investor_url);
                }
            	
            }
        });
    }
	else{
    	alert('please select investor first');
    }
});


    var inputElm = document.getElementById('investorlist'+id);


    function suggestionItemTemplate(tagData) {
        return `
            <div ${this.getAttributes(tagData)}
                class='tagify__dropdown__item ${tagData.class ? tagData.class : ""}'
                tabindex="0"
                role="option">
                ${ tagData.avatar ? `
                <div class='tagify__dropdown__item__avatar-wrap'>
                    <img onerror="this.style.visibility='hidden'" src="${tagData.avatar}">
                </div>` : ''
                }
                <strong>${tagData.name}</strong>
                <span>${tagData.email}</span>
            </div>
        `
    }

    <?php
        $user_list = array();
        foreach ($users as $user) {
            array_push($user_list, array(
                "value" => $user->id,
                "name" => $user->first_name . " " . $user->last_name,
                "avatar" => asset($user->avatar),
                "email" => $user->email
            ));
        }
        ?>
        var $user_json = <?php echo json_encode($user_list); ?>;
        var whitelist = $user_json;
        // initialize Tagify on the above input node reference
        var tagify = new Tagify(inputElm, {
            tagTextProp: 'name', // very important since a custom template is used with this property as text
            enforceWhitelist: true,
            skipInvalid: true, // do not remporarily add invalid tags
            dropdown: {
                position: "input",
                closeOnSelect: false,
                enabled: 0,
                classname: 'users-list',
                searchKeys: ['name', 'email'], // very important to set by which keys to search for suggesttions when typing
            },
            templates: {
                tag: tagTemplate,
                dropdownItem: suggestionItemTemplate
            },
            whitelist: whitelist
        })

        tagify.on('dropdown:show dropdown:updated', onDropdownShow)
        tagify.on('dropdown:select', onSelectSuggestion)




</script>
<!-- new page valyoux design -->
<script>
		var num_count = 0;
		var app_url = $("meta[name=app-url]").attr("content");
		var token = $("meta[name=csrf-token]").attr("content");
		//hide or show
		function comment_show(){
			$('.special-comment-part').show();
			$('.special-video-part').hide();
			$('.special-promote-part').hide();
		}
		function promot_show(){
			$('.special-promote-part').show();
			$('.special-video-part').hide();
			$('.special-comment-part').hide();
		}
		function valyoux_song_show(){
			$('.first-button-part').hide();
			$('.second-button-part').show();
		}
		$(document).ready(function(){
			$('.special-comment-part').hide();
			$('.special-promote-part').hide();
			$('.special-promote-part-2').hide();
			$('.special-promote-part-3').hide();
			$('.inner-button-part').hide();
			$('.brand-sponsors-content-show .show-action-part .bid-part').hide();
			$('.brand-sponsors-content-show .MultiCarousel').hide();
			$('.personal-info-button-part').show();
			$('.show-buttons .second-button-part').hide();
			$('.show-buttons .custom-button-part').hide();
			
			//click toggle action button
			var clickTimes = 0;
			$('.brand-sponsors-content-show .show-action-part .open-close-part').click(function(){
				clickTimes += 1;
				if(clickTimes%2 == 1) {
					$('.brand-sponsors-content-show .show-action-part .bid-part').show();
					$('.brand-sponsors-content-show .MultiCarousel').show();
				}else{
					$('.brand-sponsors-content-show .show-action-part .bid-part').hide();
					$('.brand-sponsors-content-show .MultiCarousel').hide();
				}			
			});
			
			//click comments	
			$('.show-buttons .btn-text .comments').click(function(){					

				var prevStatusElementName = $('.show-detail-special-part').children();
				$.each(prevStatusElementName, function(index, value){
					if((this.style.display) != "none"){
						var activeClass = this.className;
						console.log(activeClass);
						$('.' + activeClass).hide();
					}
					// return();
				});
				$('.special-comment-part').show();
			});

			$('.special-comment-part .comment-main-body .search-comment-part .close-btn').click(function(){
				console.log('close button click');
				$('.special-video-part').show();
				$('.special-comment-part').hide();
			});	

			// $('.page-content').scroll(function(){
			// 	if($('.page-content').scrollTop() > 200){
			// 		console.log("show");
			// 		$('#page-topbar').show();
			// 	}
			// 	else {
			// 		$('#page-topbar').hide();
			// 		console.log("hide");
			// 	}
			// });

			//inner comment button click
			$('.special-show-buttons1 .left-btn1 .comments1').click(function(){

				// check what part show actively
				if(!$('.inner-button-part').is(':hidden')){
					console.log('inner button-part is activated');
					$('.inner-button-part').hide();
				}
				// 
				var prevStatusElementName = $('.show-detail-special-part').children();
				$.each(prevStatusElementName, function(index, value){
					if((this.style.display) != "none"){
						var activeClass = this.className;
						console.log(activeClass);
						$('.' + activeClass).hide();
					}
					// return();
				});
				$('.special-comment-part').show();
				$('.personal-info-button-part').show();
			});

			//click promote
			$('.show-buttons .btn-text .promote').click(function(){
				// check what part show activel
				var prevStatusElementName = $('.show-detail-special-part').children();
				$.each(prevStatusElementName, function(index, value){
					if((this.style.display) != "none"){
						var activeClass = this.className;
						console.log(activeClass);
						$('.' + activeClass).hide();
					}
					// return();
				});
				$('.special-promote-part').show();	
				$('.personal-info-button-part').hide();	
				$('.inner-button-part').show();
			});

			//click inner promote button
			$('.special-show-buttons1 .left-btn1 .promote1').click(function(){
				var prevStatusElementName = $('.show-detail-special-part').children();
				$.each(prevStatusElementName, function(index, value){
					if((this.style.display) != "none"){
						var activeClass = this.className;
						console.log(activeClass);
						$('.' + activeClass).hide();
					}
					// return();
				});
				$('.special-promote-part').show();		
			});

			//click close button
			$('.special-promote-part .promote-comment-part .close-promote').click(function(){
				console.log('close promote button clicked');
				$('.special-promote-part').hide();
				$('.special-video-part').show();
				
				//check the inner button state
				if($('.inner-button-part').css('display') != 'none'){
					// console.log($('.inner-button-part').css('display'));
					$('.inner-button-part').hide();
					$('.personal-info-button-part').show();
				}
				
			});

			//click cancel button
			$('.special-promote-part .input-data-field .bottom-button .btn-field .btn-cancel').click(function(){
				$('.special-promote-part').hide();
				$('.special-video-part').show();	
				
				//check the inner button state
				if($('.inner-button-part').css('display') != 'none'){
					// console.log($('.inner-button-part').css('display'));
					$('.inner-button-part').hide();
					$('.personal-info-button-part').show();
				}

			});

			//click valyou song button
				//check the inner-button, change state
			$('.personal-info-button-part .button-view .show-buttons .first-button-part .right-btn .btn-gradient-valyou').click(function(){
				console.log('valyou song button clicked');
				$('.first-button-part').hide();
				$('.second-button-part').show();
			});
			
			$('.personal-info-button-part .button-view .show-buttons .second-button-part .circle-left .custom-p-btn').click(function(){
				console.log('circle clicked');
				$('.second-button-part').hide();
				$('.custom-button-part').show();
			});

			$('.personal-info-button-part .button-view .show-buttons .custom-button-part .valyou-circle-confirm').click(function(){
				$('.custom-button-part').hide();
				$('.first-button-part').show();
			});	
		})	
		//end show

		function selVideoItem(url, type=0) {
			if(url !== '') {
				if(type)
					var ele = $("#see_video_mobile")[0];
				else
					var ele = $("#see_video")[0];
				
				ele.setAttribute('src', url);
				ele.load();
			}
		}
		$('.input-data-field .form-group .input-track-type').click(function(){
			
		});

		// $('.promote-target').click(function(){
		// 	num_count += 1;
			
		// 	if(num_count%2 == 0){
		// 		$('.promote-compaign').hide();
		// 		$('.show-target-content').show();
		// 	} else{
		// 		$('.promote-compaign').show();
		// 		$('.show-target-content').hide();
		// 	}
		// });
		$('.input-company').click(function(){
			if($('.show-select-option-part').is(":visible")) $('.show-select-option-part').hide();
			else $('.show-select-option-part').show();
		});
				
		
			
	// start carousel
		$(document).ready(function () {
			var itemsMainDiv = ('.MultiCarousel');
			var itemsDiv = ('.MultiCarousel-inner');
			var itemWidth = "";

			$('.leftLst, .rightLst').click(function () {
				var condition = $(this).hasClass("leftLst");
				if (condition)
					click(0, this)				
				else
					click(1, this)
			});

			ResCarouselSize();

			$(window).resize(function () {
				ResCarouselSize();
			});
			// this function define the size of the items
			function ResCarouselSize() {
				var incno = 0;
				var dataItems = ("data-items");
				var itemClass = ('.item');
				var id = 0;
				var btnParentSb = '';
				var itemsSplit = '';
				var sampwidth = $(itemsMainDiv).width();
				var bodyWidth = $('body').width();

				console.log(sampwidth);
				// console.log(bodyWidth);
		
				$(itemsDiv).each(function () {
					id = id + 1;
					btnParentSb = $(this).parent().attr(dataItems);
					itemsSplit = btnParentSb.split(',');
					$(this).parent().attr("id", "MultiCarousel" + id);
					var itemNumbers = $(this).find(itemClass).length;
					
					if(bodyWidth >=1440){
						incno = itemsSplit[4];
						itemWidth = sampwidth / incno;
					}
					else if (bodyWidth >= 1200) {
						incno = itemsSplit[3];
						itemWidth = sampwidth / incno;
					}
					else if (bodyWidth >= 992) {
						incno = itemsSplit[2];
						itemWidth = sampwidth / incno;
			
					}
					else if (bodyWidth >= 768) {
						incno = itemsSplit[1];
						itemWidth = sampwidth / incno;

					}
					else {
						incno = itemsSplit[0];
						itemWidth = sampwidth / incno;
					}

					$(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers});
					
					$(this).find(itemClass).each(function () {
						$(this).outerWidth(itemWidth);
					});

					$(".leftLst").addClass("over");
					$(".rightLst").removeClass("over");

				});
			}
			//this function used to move the items
			function ResCarousel(e, el, s) {
				var leftBtn = ('.leftLst');
				var rightBtn = ('.rightLst');
				var translateXval = '';
				var divStyle = $(el + ' ' + itemsDiv).css('transform');			
				var values = divStyle.match(/-?[\d\.]+/g);
				var xds = Math.abs(values[4]);
				
				if (e == 0) {
					translateXval = parseInt(xds) - parseInt(itemWidth * s);
					$(el + ' ' + rightBtn).removeClass("over");

					if (translateXval <= itemWidth / 2) {
						translateXval = 0;
						$(el + ' ' + leftBtn).addClass("over");
					}
				}

				else if (e == 1) {
					var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
					translateXval = parseInt(xds) + parseInt(itemWidth * s);
					$(el + ' ' + leftBtn).removeClass("over");

					if (translateXval >= itemsCondition - itemWidth / 2) {
						translateXval = itemsCondition;
						$(el + ' ' + rightBtn).addClass("over");
					}
				}
				$(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
			}
			// It is used to get some elements from btn
			function click(ell, ee) {
				var Parent = "#" + $(ee).parent().attr("id");
				var slide = $(Parent).attr("data-slide");
				ResCarousel(ell, Parent, slide);
			}
		});
	// end carousel

	//mobile mode functions--start
		$(document).ready(function () {
			$('.all-overlay').click(function(event){
				event.preventDefault();
				closeModal(0)
				closeModal(1)
				closeModal(2)
			});
			$('.mo-comment-btn').click(function(event){
				event.preventDefault();
				$('.all-overlay').show();
				autoFitModal('comment-edit');
			});
			$('.mo-promote-btn').click(function(event){
				event.preventDefault();
				$('.all-overlay').show();
				$('.promote-edit').show();
				autoFitModal('promote-edit');
				
			});
			$('.mo-valyou-btn').click(function(event){
				event.preventDefault();
				$('.all-overlay').show();
				$('.valyou-edit').show();
				var len = $('.valyou-media')[0].scrollHeight;
				$('.valyou-edit').animate({top: window.innerHeight-len});
			});

			$('.valyou-custom-btn').click(function(event){
				event.preventDefault();
				$('.custom-valyou-div').css('display','flex');
				var len = $('.valyou-media')[0].scrollHeight;
				$('.valyou-edit').animate({top: window.innerHeight-len});
			});

			// close promote-edit-modal
			$('.promote-edit .close_btn, .promote-edit .btn-cancel').click(function(){
				closeModal(1);
			});	

			$('.valyou-edit .valyou-close-btn').click(function(){
				closeModal(2);
			});	

			// start common function
			// send comment
			$('.mo-comment-send-btn').click( function () {
				sendComment('mo-comment-input');
				
			});

			//valyou set function
			$('.add_value').on('click', function () {
				var media_id = $('#media_id').val();
				user_role = $('#user_role').val();
				if(user_role != 3){
					$('#RoleconfirmModal').modal('show');
					return false;
				}else{
					var amount = $('#set_valyou').val();
					if (typeof amount === "undefined"){
						$('.error_message').show();
					}else{
						$('.error_message').hide();

						
						$.ajax({
							method: 'post',
							context: this,
							url: app_url+'/valyouartist',
							data: {
								amount: amount,
								media_id: media_id,
								_token: token
							},
							success: function (response) {
								console.log(response);
								var data =  JSON.parse(response);
								if(data.status == 'success'){
									$('#proceedModal .popup-text b').html(data.artist_name);
									$('#proceedModal .popup-text .vip_points').html(data.points);
									$('#proceedModal').modal('toggle');
								}else{
									$(this).html('Proceed to Valyou Song');
									$(this).prop("disabled", false);
									js_error(data.message);
								}
							},
							error: function (response) {
								$(this).html('Proceed to Valyou Song');
								$(this).prop("disabled", false);
								alert('Something went wrong. Please try agian later');
							}
						})
					}
				}
			})

			//promote modal fit heigjt
			$('.promote-seletor').click(function(){
				autoFitModal('promote-edit');
			});
			window.onscroll = function() {onScrollHandle()};
			
		// end common function
		});

		var header = document.getElementById("page-topbar");
		function onScrollHandle() {
			if (window.pageYOffset > 200) {
				header.classList.add("show-header");
			} else {
				header.classList.remove("show-header");
			}
		}
		
		function onFavorHandle(ele){
			console.log(ele.className);
			if(ele.className == "favor-ico favor-active") {
				ele.className = "favor-ico";
			}else {
				ele.className = "favor-ico favor-active";
			}
		};	
		// set valyou price
		function setValyou(price) {
			$('#set_valyou').val(price);
		}

		/* close all modal
			params: 0 - comment modal
					1 - promote modal
					2 - valyou modal
		*/
		function closeModal(type) {
			if(type == 0) {
				$('.editmodal-content').animate({top: "100vh"});
			}else if(type == 1) {
				$('.promote-edit').animate({top: "100vh"});
			}else if(type == 2) {
				$('.valyou-edit').animate({top: "100vh"});
			}
			$('.all-overlay').hide();
		}

		// get detail information of selected video.
		function selVideoDetail(media_id, type = 0) {
			
			if(media_id > 0){
				$('#media_id').val(media_id);
				$.ajax({
					method: 'post',
					context: this,
					url: app_url+'/getVideoDetail',
					data: {
						media_id: media_id,
						_token: token
					},
					success: function (response) {
						
						var data = JSON.parse(response);
						var artist = data.media;
						var comments = data.comments;
						selVideoItem(app_url + '/public/' + data.url, type);
						var str = viewUserinfo(artist);
						var str_desktop = viewUserinfodesktop(artist);
						$('.mo-userinfo').html(str);
						$('.desktop-detail-info').html(str_desktop);
						var comments_html = '';
						for (let i = 0; i < comments.length; i++) {
							comments_html += viewComments(comments[i]);
						}

						var title = `<i class="fa fa-arrow-left"></i>&nbsp;`+ artist.brand +``;
						$(".brand-title").html(title);

						if(comments_html == '')
							comments_html = '<div class="row" style="justify-content:center;"><p>No comment</p></div>';
						$('.mo-comments').html(comments_html);
					},
					error: function () {
						alert('Something went wrong. Please try agian later');
					}
				})
			}else{
				alert('Please select media');
			}
		}

		// get information of selected media owner into HTML view
		function viewUserinfo(data) {
			var f_color = 'c-green';
			var icon = 'up';
			var f_color_stock = 'c-green';
			var icon_stock = 'up';

			var categories = ['EOI Profile' , 'Upcoming', 'professional', 'Major Artist'];
			
			if(data.change_stock<0){
				f_color = 'c-pink';
				icon = 'down';
			}
			if(data.stock_value<0){
				f_color_stock = 'c-pink';
				icon_stock = 'down';
			}

			$('.change_url').attr('href',app_url+'/artist/stock-price/'+data.id)
				
			var str = `<div class="personal-img">			
						<img src="${app_url + '/public/' + data.photo}" style="width: 48px; height: 48px;" alt="">
					</div>
					<div class="mo-userinfo-content">
						<h4 class="my-auto mx-2">${data.brand}</h4>
						<div class="personel-detail-stock-content">
							<p class="my-auto" >Stock Price : <b class="${f_color_stock}">$${Number(data.stock_value)} VXD <i class="fa fa-arrow-circle-${icon_stock}" style="font-size: 16px;"></i></b> &nbsp;-&nbsp;<b class="${f_color}">  ${data.change_stock}% <i class="fa fa-arrow-circle-${icon}" style="font-size: 16px;"></i></b> </p>
						</div>
						<div class="personal-detail-info-category">
							<p><strong class="song-title">Song Title:</strong> <strong class="song-from"> &nbsp;${data.about}</strong></p>
							&nbsp;&nbsp;&nbsp;
							<p><strong class="song-valyou">Song Valyou:</strong><strong class="song-valyou-value">&nbsp; $${data.stock_value}</strong></p>
							&nbsp;&nbsp;&nbsp;
							<p><strong class="song-category">Music Artist Brand Listing Category:</strong> <strong class="song-type">&nbsp; ${categories[data.category]}</strong></p>
						</div>
					</div>`;
			return str;
		}
		// get information of selected media owner into HTML view
		function viewUserinfodesktop(data) {
			var f_color = 'c-green';
			var icon = 'up';
			var f_color_stock = 'c-green';
			var icon_stock = 'up';
			var categories = ['EOI Profile' , 'Upcoming', 'professional', 'Major Artist'];
			
			if(data.change_stock<0){
				f_color = 'c-pink';
				icon = 'down';
			}
			if(data.stock_value<0){
				f_color_stock = 'c-pink';
				icon_stock = 'down';
			}
			//click valyou song button
				//check the inner-button, change state
				$('.personal-info-button-part .button-view .show-buttons .first-button-part .right-btn .btn-gradient-valyou').click(function(){
				console.log('valyou song button clicked');
				$('.first-button-part').hide();
				$('.second-button-part').show();
			});
			
			$('.personal-info-button-part .button-view .show-buttons .second-button-part .circle-left .custom-p-btn').click(function(){
				console.log('circle clicked');
				$('.second-button-part').hide();
				$('.custom-button-part').show();
			});

			$('.personal-info-button-part .button-view .show-buttons .custom-button-part .valyou-circle-confirm').click(function(){
				$('.custom-button-part').hide();
				$('.first-button-part').show();
			});
				
			var str = `<div class="personal-detail-info">
							<div class="personal-img">			
								<img src="${app_url + '/public/' + data.photo}" style="width: 48px; height: 48px;" alt="">	
							</div>
							<div class="personal-detail-info-content">
								<h3 class="my-auto mx-2">${data.brand}</h3>	
								<div class="personel-detail-stock-content">
									<p class="my-auto">Stock Price:</strong> <strong class="stock-value ${f_color_stock}">$${Number(data.stock_value)} VXD <i class="fa fa-arrow-circle-${icon_stock}" style="font-size: 16px;"></i></strong> <strong class="stock-percentage ${f_color}"> &nbsp; - &nbsp; ${data.change_stock}% <i class="fa fa-arrow-circle-${icon}" style="font-size: 16px;"></i></strong> </p>
								</div>
								<div class="personal-detail-info-category">
									<p><strong class="song-title">Song Title:</strong> <strong class="song-from"> &nbsp;Started From The Bottom</strong></p>
									&nbsp;&nbsp;&nbsp;
									<p><strong class="song-valyou">Song Valyou:</strong><strong class="song-valyou-value">&nbsp; $1,000,000,24,567</strong></p>
									&nbsp;&nbsp;&nbsp;
									<p><strong class="song-category">Music Artist Brand Listing Category:</strong> <strong class="song-type">&nbsp; Major Artist1</strong></p>
								</div>
							</div>
						</div>
						
					
						
						<div class="button-view">
							<div class="col-md-7 show-buttons">
								<div class="first-button-part">
									<div class="left-btn">
										<div class="btn-text" onclick="comment_show()">
											<p class="comments">COMMENTS </p>
										</div>
										<div class="btn-text" onclick="promot_show()">
											<p class="promote">PROMOTE</p>
										</div>
									</div>
									<div class="right-btn" >
										<div class="btn-gradient-valyou" onclick="valyoux_song_show()">
											<p class="valyou-song">VALYOU SONG</p>
										</div>
										<a href="`+app_url+`/artist/stock-price/`+data.id+`">
											<div class="btn-gradient-invest">
											<p class="invest1">INVEST</p>
											</div>
										</a>	
									</div>
								</div>
							</div>
						</div>
						`;
			return str;
		}

		// get comments of selected media into HTML view
		function viewComments(item) {
			console.log(item)
			var str = `<li>
							<div class="flex mo-card-info" style="margin-top: 10px">
								<div>
									<img src="${app_url + '/public/' + item.avartar}" class="avatar-md rounded-circle" style="width: 50px; height: 50px;">
								</div>
								<div class="px-2 show-info-card">
									<span class="favor-ico" onclick="onFavorHandle(this)" data-id="${item.id}"><i class="fa fa-heart"></i></span>
									
										<!--<p class="ml-auto">
											<a href="javascript:;" class="sc-name ml-2 edit_comment" data-id="${item.id}"> <i class=" fa fa-edit"></i> </a>
											<a href="javascript:;" class="sc-name ml-2 delete_comment" data-id="${item.id}"> <i class=" fa fa-trash"></i> </a>
										</p> -->
									
									<p class="font-bold"><b>${item.f_name + ' ' + item.l_name}</b></p>
									<p class="text-gray-300" style="font-size: 13px">Music Fan Investor</p>
									<p class="text-gray-500 comment-content" >${item.comment} </p>
								</div>
							</div>   
						</li>`;
			return str;
		}

		// send comment
		function sendComment(input_class) {
			var media_id = $('#media_id').val();
			var comment = $("."+input_class).val();

			console.log(input_class)
			
			if(comment.length > 0){
				$.ajax({
					method: 'post',
					context: this,
					url: app_url+'/valyoucomment',
					data: {
						comment: comment,
						media_id: media_id,
						_token: token
					},
					success: function (response) {
						
						$('.mo-comments').append(response);
						autoFitModal('comment-edit');
						// if(tata){
						// 	tata.success('status', 'sent comment successful',{
						// 			animate: 'slide'
						// 		});
						// }
						$("."+input_class).val('');
					/* $('#proceedModal .popup-text b').html(response);
						$('#proceedModal').modal('toggle');*/
					},
					error: function () {
						alert('Something went wrong. Please try agian later');
					}
				})
			}else{
				alert('Please enter your comment');
			}
		}

		// auto-fit modal size in mobile mode
		function autoFitModal(classname, delay=0) {
			setTimeout(() => {
				var len = $(`.${classname}`)[0].scrollHeight;
				if (classname == 'promote-edit') {
					len = $('.mo-promote-main-body')[0].scrollHeight;
					console.log($('.mo-promote-main-body'))
				}
				if(len <= 0.7 * window.innerHeight )
					$(`.${classname}`).animate({top: window.innerHeight-len});
				else $(`.${classname}`).animate({top: 0.3*window.innerHeight}); 
			}, delay);
		}
	
	//mobile mode functions--end
	$(document).ready(function() {
  // Attach a submit handler to the form
  $('.myForm').submit(function(event) {
    // Prevent the form from submitting via the browser
    event.preventDefault();
	validate = true;
	var price = $('.promotion_pay').val();
	if(price <= 0){
		validate = false;
		toastr.error('Amount Input must be greater than zero.', {timeOut: 3000});
	}
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
						toastr.error('Please fill Inputs before submit.', {timeOut: 3000});
                        $("input[name='"+submitForm[i].name+"']").focus();
                        return;
                    }
                }
	// alert(formData);
    // Submit the form data via AJAX
	if(validate == true){
		$.ajax({
		url: '/savePromotionData', // URL to the server-side script that handles the form submission
		type: 'POST', // HTTP method used for the request
		data: formData, // Serialized form data
		success: function(response) {
			var data = JSON.parse(response);
			// Handle successful form submission
			if(data.status == 'error'){
				toastr.error(data.message, {timeOut: 3000});
			} else {
				toastr.success(data.message, {timeOut: 3000});
				$('.input-price').val('');
				$('.input-num-people').val('');
				$('.input-track-type').val('');
				$('.afterSelecttype').html(``);
			}
			
			// alert(data.message);
		},
		error: function(xhr, status, error) {
			// Handle form submission errors
			console.log(xhr.responseText);
		}
    	});
	}
   
  });
	//mobile
   // Attach a submit handler to the form
   $('.myForm_mo').submit(function(event) {
    // Prevent the form from submitting via the browser
    event.preventDefault();
	validate = true;
    // Serialize the form data
	var price = $('.promotion_pay').val();
	if(price <= 0){
		validate = false;
		toastr.error('Amount Input must be greater than zero.', {timeOut: 3000});
	}
	var people_count = $('.people_count').val();
	var promote_type = $('.promote_type').val();
	
	if(price == '' && people_count == '' && promote_type == ''){
		toastr.error('Please fill Inputs before submit.', {timeOut: 3000});
		validate = false;
	}
	
    var formData1 = $(this).serialize();
	
	
    // Submit the form data via AJAX
	if(validate == true){
		$.ajax({
		url: '/savePromotionData', // URL to the server-side script that handles the form submission
		type: 'POST', // HTTP method used for the request
		data: formData1, // Serialized form data
		success: function(response) {
			var data = JSON.parse(response);
			// Handle successful form submission
			toastr.success(data.message, {timeOut: 3000});
			$('.input-price').val('');
			$('.input-num-people').val('');
			$('.input-track-type').val('');
			$('.afterSelecttype').html(``);
			// alert(data.message);
		},
		error: function(xhr, status, error) {
			// Handle form submission errors
			console.log(xhr.responseText);
		}
    	});
	}
   
  });

});
//
function promotion_type(type){
		
		
		if(type == 'mobile'){
			var value = $('.promotetype-mo').val();
		} else {
			var value = $('.promotetype').val();
		}

		// alert(type)
		if(value == 'target'){
			if(type == 'mobile'){
				
				var data = `<label for="inputTrackType" >5.Select Promotion Method</label>
							<select name="promote_method"  class="input-track-type input-round form-control promotemethod_mo" id="inputTrackType" onChange="promotion_method_mo(this)" placeholder="Please Select">
								<option disabled selected>Select Method</option>
								<option value="invester">Investors On Valyou X</option>
								<option value="email">Input Email</option>
								<option value="number">Input Number</option>
							</select>
							<br>
							<div class="afterSelectMethod">
							</div>
							<div class="showEmailinput">
							</div>
							<div class="showNumberinput">
							</div>`;

			} else {
				var data = `<label for="inputTrackType" >5.Select Promotion Method</label>
												<select name="promote_method"  class="input-track-type input-round form-control promotemethod" id="inputTrackType" onChange="promotion_method_desk(this)" placeholder="Please Select">
													<option disabled selected>Select Method</option>
													<option value="invester">Investors On Valyou X</option>
													<option value="email">Input Email</option>
													<option value="number">Input Number</option>
												</select>
												<br>
												<div class="afterSelectMethod">
												</div>
												<div class="showEmailinput">
												</div>
												<div class="showNumberinput">
												</div>`;
			}
			
			$('.afterSelecttype').html(data);
			
		} 
		else {
			var data = ``;
			$('.afterSelecttype').html(data);
			
		}
		
	}
	function  promotion_method_desk(sel){
		
		var value = sel.value;
		if(value == 'invester'){
			var data = `<div class="show-target-content-search">
									<input type="text" id="searchinputdata" placeholder="Search for Investors">
									</div>
									<div class="show-target-content-body" >
										<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<div class="show-target-content-body-item" style="font-size: 0.7rem">
											<div class="target-info-button">
												<img src="<?php echo e(asset($user->avatar)); ?>" alt="" style="width: 32px; height:32px">
												<div class="target-info-button-detail">
													<p class="my-auto target-name" style="font-size: 0.8rem"><strong><?php echo e($user->first_name . " " . $user->last_name); ?></strong></p>
													<p class="my-auto target-type"><?php echo e($user->email); ?></p>
												</div>																													
											</div>
											<div class="custom-control custom-checkbox target-info-state">
												<input type="checkbox" class="custom-control-input checkboxClass" value="<?php echo e($user->id); ?>" id="investor_<?php echo e($user->id); ?>">
												<label class="custom-control-label" style="padding-top:2px" for="investor_<?php echo e($user->id); ?>">music fan</label>
											</div>
										</div>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>													
									</div><input type="hidden" name="entity" class="getIdInvestors" value="">`;
			$('.afterSelectMethod').html(data);
		} else {
			var data = ``;
			$('.afterSelectMethod').html(data);
		}
		if(value == 'email') {
			var data = `<label for="inputTrackType">6.Promote via Email</label><input type="email" name="entity" class="form-control">`;
			$('.showEmailinput').html(data);
		}else{
			var data = ``;
			$('.showEmailinput').html(data);
		}
		if(value == 'number'){
			var data = `<label for="inputTrackType">6.Promote via Number</label><input type="number" name="entity" class="form-control">`
			$('.showNumberinput').html(data);
		}else{
			var data = ``;
			$('.showNumberinput').html(data);
		}
	}
	// new js for search investor
	$(document).on("keypress","#searchinputdata", function() {	
		var value = $(this).val().toLowerCase();
		$(".show-target-content-body-item").filter(function() {
		$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	});
	$(document).on('click','.checkboxClass',function(){
		
        var selectedCountry = new Array();
        var n = jQuery(".checkboxClass:checked").length;
		
        if (n > 0){
            jQuery(".checkboxClass:checked").each(function(){
                selectedCountry.push($(this).val());
            });
        }
		$('.getIdInvestors').val(selectedCountry)
        // alert(selectedCountry);
    });
	function  promotion_method_mo(sel){
		
		var value = sel.value;
		if(value == 'invester'){
			var data = `<div class="show-target-content-search">
									<input type="text" id="searchinputdata" placeholder="Search for Investors">
									</div>
									<div class="show-target-content-body" >
										<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<div class="show-target-content-body-item" style="font-size: 0.7rem">
											<div class="target-info-button">
												<img src="<?php echo e(asset($user->avatar)); ?>" alt="" style="width: 32px; height:32px">
												<div class="target-info-button-detail">
													<p class="my-auto target-name" style="font-size: 0.8rem"><strong><?php echo e($user->first_name . " " . $user->last_name); ?></strong></p>
													<p class="my-auto target-type"><?php echo e($user->email); ?></p>
												</div>																													
											</div>
											<div class="custom-control custom-checkbox target-info-state">
												<input type="checkbox" class="custom-control-input checkboxClass" value="<?php echo e($user->id); ?>" id="investor_<?php echo e($user->id); ?>">
												<label class="custom-control-label" style="padding-top:2px" for="investor_<?php echo e($user->id); ?>">music fan</label>
											</div>
										</div>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>													
									</div>`;
			$('.afterSelectMethod').html(data);
		} else {
			var data = ``;
			$('.afterSelectMethod').html(data);
		}
		if(value == 'email') {
			var data = `<label for="inputTrackType">6.Promote via Email</label><input type="email" name="entity" class="form-control">`;
			$('.showEmailinput').html(data);
		}else{
			var data = ``;
			$('.showEmailinput').html(data);
		}
		if(value == 'number'){
			var data = `<label for="inputTrackType">6.Promote via Number</label><input type="number" name="entity" class="form-control">`
			$('.showNumberinput').html(data);
		}else{
			var data = ``;
			$('.showNumberinput').html(data);
		}
	}
	// tabs hide
	$(document).on('click','.hide-watch',function(){
			$('.displayhidewatchtab').css('display','none');
			$('.displayhideearn').css('display','block');
		});
		$(document).on('click','.hide-earn',function(){
			$('.displayhidewatchtab').css('display','block');
			$('.displayhideearn').css('display','none');
		});
		// hide and show dropdown promotion type and method
	function get_each_price(type){
		// alert(type)
		if(type=='mobile'){
			var users = $('.people_count_mo').val();
			var amount = $('.promotion_price_mo').val();
			var admin_fees = (amount / 100) * <?= $setting->promotion_fees;?> ;
			remaining_amount = amount - admin_fees;
			var single_person = remaining_amount/users;
			// alert(single_person);
			$('.promotionRemaining').val(remaining_amount);
			$('.each_promote_pay').val(single_person);
			$('.getPromotionFees').val(admin_fees);
			$('.getCosttopromote').html('Total Cost to promote: $'+single_person+' x '+users+' = $'+remaining_amount);
		} else {
			var users = $('.people_count').val();
			var amount = $('.promotion_pay').val();
			var admin_fees = (amount / 100) * <?= $setting->promotion_fees;?> ;
			remaining_amount = amount - admin_fees;
			var single_person = remaining_amount/users;
			// alert(single_person);
			$('.promotionRemaining').val(remaining_amount);
			$('.getPromotionFees').val(admin_fees);
			$('.each_promote_pay').val(single_person);
			$('.getCosttopromote').html('Total Cost to promote: $'+single_person+' x '+users+' = $'+remaining_amount);
		}
		//calculating each person price
		
	}
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/valyou-playlist.blade.php ENDPATH**/ ?>