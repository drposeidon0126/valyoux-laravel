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
    .profile_img_name .inner_img_name {
    margin-top: 10px;
}
.profile_img_name {
    display: flex;
    align-items: flex-start;
}
.profile_img_name .post-section-artist-img {
    width: 100%;
    max-width: 85px;
    margin-right: 15px;
}
p.post-section-artist-p1 {
    font-size: 24px;
    font-weight: 500;
    margin: 0px;
    color: #F24336;
}
     .audio-text{
            margin-left: 15px;
    margin-bottom: 0px;
    font-size: 24px;
    font-weight: 500;
    margin: 0px;
    color: #000;
    margin-left:10px;
    line-height:normal;
        }

        .audio-text span{
            font-size:17px;
            float:left;
            width:100%;
            display:block;
            color:gray;
            font-weight:400;
        }
        img.audio-cover-image {
            width: 80px;
            height: 80px;
        }
.sm-left-wrap .uploading-section-artist-icon-img {
            width: auto;
            height: auto;
            margin: 0;
            margin-top: -4px;
            max-width: 12px;
        }
       
.color-white{
            color: #fff;
        }
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
    
    .tab-select.tab-margin-top a{
        padding: 5px 40px;
    }
    
    @media (max-width: 768px){
        .page-content{
            padding: 80px 10px 80px !important;
        }
        .sm-left-desc p {
    font-size: 12px;
    margin-bottom: 5px;
}
    }
    
</style>
<style>
    .for_web{
            display: block;
    }
        .for_mob{
            display: none;
        }
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
    .client-input img{
        max-width: 80px;
        margin: 0 auto;
    }
    .input-price-div-new{
        background: transparent;
        font-size: 16px;
        margin-top: 25px;
        margin-bottom: 25px;
    }
    .input-qty-new{
        background: #fff !important;
        margin: 0 20px;
        border-radius: 5px;
    }
    @media (max-width: 575px){
        .sm-right-wrap .btn-invest-pink-grad {
    font-size: 11px;
    padding: 5px 5px;
    white-space: nowrap;
}
        .social-media-profile-wrap{
        padding: 10px 5px;
        }
        .sm-left-wrap {
            margin-right: 5px;
        }
        .sm-left-wrap img{
            margin: 3px 10px 0 2px;
            width: 40px;
            height: 40px;
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
            position: absolute;
            right: 12px;
            top:9px;
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
        background-color: #ff0093;
    }
    .artist-markets-content-wrap {
        padding-top: 20px;
    }
	.parent-for-video{
	    position: relative;
	}
	.parent-for-video video{
	    max-height: 450px;
        height:auto;
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
        max-width: 175px !important;
    }
    .valyou-g-btn:hover {
        color: #fff;
        background-image: linear-gradient(77deg , #00FFC2, #00B8BA 100%);
    }
    
    @media (max-width: 525px){
        .for_web{
                display: none;
            }
            .for_mob{
                display: block;
            }
            .for_mob.sm-left-desc h5{
                font-size: 12px;
            }
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
      
        .bs-float-parent{
            height: 30px !important;    
        }
    }
    
    
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
    .sponsered-inner{
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .sponsered-inner .green-one{
        color: #90eb82;
        font-size: 14px;
    }
    .sponsered-inner .pink-one{
        color: #e62e51;
        text-decoration: underline;
        font-size: 14px;
    }
    .parent-for-video{
        padding: 0;
    }
    hr{
        margin-top: 2rem;
        margin-bottom: 2rem;
    }
    .valyou-g-btn {
        max-width: 200px;
    }
.tab-select .search_bar {
    margin-left: auto;
    margin-right: auto;
}
</style>
<!--new caption styles for video -->

@section('content')
   
            @include('layouts.inner-navigation')
       
    <div class="row">
        @include('layouts.profile-box')
    </div>
    <!-- end row -->
   
             {{-- Custom Work Start --}}
             <div class="page_section">
                <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/pages/social-media.css') }}">
<div class="row">
        <div class="col-md-12 col-lg-12 order-md-2 order-lg-1">
           <!--  <div class="tab-select">
             <div class="search_bar"><input placeholder="Search"></div>
            </div> -->
             {{-- Custom Work Start --}}
             <input type="hidden" name="user_id" id="user_id" value="{{ $artist['id'] }}">
             <div class="page_section">
             <div class="all_social_videos"></div>
             </div>
               {{-- Custom Work End --}}

        </div>
        <!--collg8 ends-->

        <div class="col-md-12 col-lg-3 order-md-1 order-lg-2">

        </div>
    </div>



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
     <div class="modal fade video-modal" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><b class="color-pinkk">Pay $0.03 cents and listen</b>
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

<script>
  // images on product page


        loadMoreData(0,$('#user_id').val(),$('#id').val());

        $(document).on('click','.overlay-for-video', function(){


                $(this).css('display','none');

        });
        $(document).on('click', '.playvideo', function() {
            var id = $(this).attr('id');
            let userId = $(`#overlay${id}`).data('userid');
            let wallet = "{{ auth()->user()->wallet }}";
            console.log(wallet);
            if (Number(wallet) > 0.03) {
                axios({
                    method: "post",
                    url: "{{ route('admin.valyousong') }}",
                    data: {
                        id: id,
                        userId
                    }
                }).then((res) => {
                    console.log(res);
                    // js_success("Enjoy this a lot!");
                    $(`#video${id}`).trigger('play');
                    $(`#overlay${id}`).remove();
                }).catch((err) => {
                    throw err;
                });
            } else {
                js_error("You don't have sufficient amount in your wallet to play this Video.");
            }
        })
        // Valyou Song En
    $(document).on('click', '.loadbtnvideos', function(){
        $(".loadbtnvideos").html('<i style="color: #46c899;"  class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Loading...');
       // $(".loadbtn").hide();
        var pId = $(this).data("id");
        var user = $(this).data("user");
        var id = $(this).data("id");
        loadMoreData(pId,user,id);

      });

      function loadMoreData(page,user_id,id){

       $.ajax({
         url : "loadmoredata",
         type: "GET",
         cache:false,
         data:{offset:page,user_id:user_id,id:id,type:2},
         success:function(data){
           if (data) {
               const data1 = JSON.parse(data);
               $(".loadbtnvideos").hide();
               $(".all_social_videos").append(data1.html);
           }
         }
       });
     }

</script>

    <script src="{{ URL::asset('assets/libs/select2/select2.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/form-advanced.init.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/multiselect/2.2.9/js/multiselect.js"></script>
    <script src="{{ URL::asset('assets/libs/axios/axios.min.js') }}"></script>


            </div>
        

</div>
@endsection
