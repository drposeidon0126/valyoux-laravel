<?php

use App\Models\VideoUploads;
use App\User;
?>


<?php if(request()->segment(2) == "watch-to-earn"): ?>
<?php $__env->startSection('title'); ?> Watch to earn <?php $__env->stopSection(); ?>
<?php elseif(request()->segment(2) == "listen-to-earn"): ?>
<?php $__env->startSection('title'); ?> Listen to earn <?php $__env->stopSection(); ?>
<?php else: ?>
<?php $__env->startSection('title'); ?> Social Media <?php $__env->stopSection(); ?>
<?php endif; ?>
<?php $__env->startSection('pageCSS'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/select2/select2.min.css')); ?>">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/css/pages/social-media.css')); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/tagify/tagify.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/intl-tel-input/css/intlTelInput.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?> Market <?php $__env->stopSection(); ?>
<?php $__env->startSection('bottom-navbar'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<input type="hidden" name="user_wallet_amount" value="<?php echo e(auth()->user()->wallet); ?>" id="user_wallet_amount">
<input type="hidden" name="user_role" value="<?php echo e(check_role()); ?>" id="user_role">
<input type="hidden" name="media_id" id="media_id" value="0">
<input type="hidden" name="own_user_id" id="own_user_id" value="0" />
 

<div class="row">
    <div class="col-lg-12 p-0">
        <div id="uploading-section-artist-mobile" class="mobile-mode" >
            <div class="tab-select mtab_all m_artist_list m-0">
                
            </div>
        </div>
        <div class="row mt-2 ">
            <div class="col-md-12 col-lg-7 px-0" >
                
                <!-- <p class="uploading-section-artist-sub-heading mb-2"> Create a new post </p> -->
                <div class="card post-card-mobile-body d-flex mb-1">
                    <div class="uploading-section card-body row align-items-center">
                        <div class="d-flex w-full p-2">
                            <img src="<?php echo e(isset($user_profile['photo']) ? asset($user_profile['photo']) : asset('assets/images/users/avatar-1.jpg')); ?>" alt="" class="avatar-md rounded-circle post-img ">
                            <textarea rows="2" class="form-control uploading-section-title ml-3" placeholder="Share your Audio and Video Tracks" ></textarea>
                        </div>
                        <div class="d-flex uploading-section-action w-full">
                            <a href="<?php echo e(route('admin.upload-media')); ?>" title="Upload Video" class="pt-2 pl-2 inline-flex">
                                <p class=" mr-2 mb-0" style="font-size: 0.75rem"><i class="fa fa-video fs-2 pr-1"></i> Upload Video</p>
                                <p class=" mb-0" style="font-size: 0.75rem"><i class="fa fa-music fs-2 pr-1"></i> Upload Audio</p>
                            </a>
                            <a href="<?php echo e(route('admin.upload-media')); ?>" class="btn btn-pink w-auto btn-sm w-md waves-effect waves-light mr-2  d-flex" > <span class="m-auto">Post Now</span></a>
                        </div>
                    </div>
                </div>
                

                
                
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
										<p class="text-center m-0 p-0-5 hand font-weight-bold ml-1  fs-1-1">COMMENTS </p>
									</div>
									<div class="main-border-btn py-2 px-2 m-2 h-fit d-flex dt-promote-btn">
										<span><img class="btn-ico" src="<?php echo e(URL::asset('assets/images/promote.svg')); ?>" alt=""></span>
										<p class="text-center m-0 p-0-5 hand font-weight-bold ml-1  fs-1-1">PROMOTE</p>
									</div>
								</div>
								<div class="right-btn-group desktop-mode" style="justify-content:end">
									<div class="main-border-btn py-2 px-2 m-2 h-fit dt-valyou-btn">
										<p class="m-0 p-0-5 hand font-weight-bold text-center  fs-1-1">VALYOU SONG</p>
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
            <div class="col-md-12 col-lg-5 desktop-mode relative">
                <?php echo $__env->make('partician.video_feature_section',[], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="uploading-section-artist card p-4 " style="width: fit-content">
                    <div class="d-inline-flex">
                        <span class="uploading-section-artist-main-heading"> Trending Artists In Stock Market </span>
                        <div class="align-self-end ml-auto">
                            <span class="up-change-stock text-green fs-2 hand">up &nbsp<img class="" width="15" height="15" src="https://testvps.nwlogics.com/public/assets/images/valyoux/green_arrow_price_going_up.svg"></span>
                            <span class="down-change-stock txt-main fs-2 hand">down &nbsp<img class="" width="15" height="15" src="https://testvps.nwlogics.com/public/assets/images/valyoux/pink_arrow_circle_down.svg"></span>
                        </div>
                    </div>

                    <?php echo $__env->make('partician.artist_markets',['artist_by_country'=>$artist_by_country], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
        
        <!-- end row -->  
        <div class="row w-full mx-0">
            <div class="personal-detail-info">
                <div class="personal-img">			
                    <img src="<?php echo e(URL::asset('assets/uploads/artist/72921766.jpg')); ?>" style="width: 48px; height: 48px;" alt="">
                </div>
                <div class="scroll-style cursor-grab scrolling-wrapper-lower1" style="overflow:auto">
                    <div class="w-full personal-detail-info-content-inner">
                        <h3 class="my-auto mx-2"><?php echo e($videos[0]->artist->brand); ?></h3>
                        <div class="personel-detail-stock-content">
                            <p class="my-auto"><strong class="stock-price">Stock Price:</strong> <strong class="stock-value <?php echo e((@$videos[0]->artist->stock_value < 0) ?'txt-main': 'text-green'); ?>"><img class="" width="15" height="15" src="<?php echo e(@$videos[0]->artist->stock_value<0?'https://testvps.nwlogics.com/public/assets/images/valyoux/pink_arrow_circle_down.svg': 'https://testvps.nwlogics.com/public/assets/images/valyoux/green_arrow_price_going_up.svg'); ?>">&nbsp;$<?php echo e($videos[0]->artist->stock_value); ?>VXD</strong> &nbsp; - &nbsp; <strong class="stock-percentage <?php echo e((@$videos[0]->artist->change_stock < 0) ?'txt-main': 'text-green'); ?>"> <?php echo e($videos[0]->artist->change_stock); ?>%</strong> </p>
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
            <div class="bg-green-gra watch-invest-btn my-2 w-full mobile-mode k-shadow">
                <a href="<?php echo e(URL::to('artist/stock-price',$artists[0]->id)); ?>" class=" py-2 px-3 h-fit w-full" >
                    <p class="text-center m-0 font-weight-bold text-white fs-2">INVEST IN ARTIST</p>
                </a>
            </div> 
        </div>

        <div class="row w-full mx-0">
            <?php echo $__env->make('partician.brand_sponsor_list',['list'=>$artists], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <!--Bid now Modal -->
        <div class="modal fade proceed_modal bidnow_modal" id="bidNowModal" aria-labelledby="bidNowModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>
                            <b class="color-pinkk">Bid Now</b>
                            <span class="spot_heading">60 spots remaining | Biding war </span>
                        </h4>
                        <label for="uploadbid" class="bidnow_upload">
                            <input id="uploadbid" type="file" />
                            Upload Ad
                        </label>
                        <button type="button" class="close btn_close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <div class="card-body price-card">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-price-div">
                                            <p>Minimum Bid $10.</p>
                                            <!--when the list of all bid is completed we need to show the below text and hide the above one. By default below text would be hidden-->
                                            <p class="d-none">Place a bid higher than $20</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="quantity">
                                    <input type='button' value='-' id="minus" class='minus' field='quantity' />
                                    <input type='text' name='quantity' value='25' class='qty input-qty dollar' />
                                    <input type='button' value='+' id="plus" class='plus ' field='quantity' />
                                </div>
                            </div>
                            <br><br>
                            <h2 style="font-size: 24px; text-align: center; padding: 0 0 0; color: #1EDD0E;    font-weight: 700;">Total Cost + Fees: $ 1490 VXD</h2>
                            <br>
                            <!--<h2 style="font-size: 16px; text-align: center; padding: 0 0 20px; color: #000;">Amount of Shares X Current Stock Price + Fees % = Total Cost.</h2>-->
                            <button class="btn btn-green btn-sm waves-effect waves-light">Bid Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="edit_comment" aria-labelledby="bidNowModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4><b class="color-pinkk">Edit Comment ! </b></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="#" method="post" class="update_comment_form">
                        <div class="modal-body">
                            <div class="text-center">
                                <input type="hidden" class="comment_id">
                                <input type="text" class="form-control comment" name="comment">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
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

        <div class="modal fade video-modal" id="staticBackdropSong" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropSongLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropSongLabel"><b class="color-pinkk">Pay $0.02 cents and listen</b>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>You will be charged $0.01 cents if you listen to this song. Do you wish to proceed? </p>
                        <p>If you do not wish to be charged again each time you listen to this song, you have the option to click and Valyou this song for an
                            amount of your choice to receive unlimited plays for this particular song as well Vip artist-fan reward point the more you .</p>
                        <p>Thank you for supporting </p>
                        <b>Artist Name or Brand.</b>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn valyou-g-btn playsong" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- When play to earn -->
        <div class="modal fade video-modal" id="watch-to-earn" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">
                            <b class="color-pinkk">Watch and Earn</b>
                            <p></p>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>You will get $<span id="reward"></span> VXD if you watch this video. Do you wish to proceed? </p>
                        <b id="brandName-watch-to-earn">Artist Name or Brand.</b>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn valyou-g-btn playvideo" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade video-modal" id="listen-to-earn" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel"><b class="color-pinkk">Listen and Earn</b>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>You will get $<span id="reward"></span>VXD if you watch this video. Do you wish to proceed? </p>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('assets/libs/axios/axios.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/tagify/tagify.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/intl-tel-input/js/intlTelInput.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/js/mouse.event.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/js/pages/social-media.js')); ?>"></script>
<script class="iti-load-utils" async="" src="<?php echo e(URL::asset('assets/libs/intl-tel-input/js/utils.js')); ?>"></script>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('script-bottom'); ?>
<script>
    var app_url = $("meta[name=app-url]").attr("content");
	var token = $("meta[name=csrf-token]").attr("content");
    const slider = document.querySelector('.scrolling-wrapper-lower');
    const slider1 = document.querySelector('.scrolling-wrapper-lower1');
    const slider2 = document.querySelector('.scrolling-sponsor-list');
    new MouseEvent(slider);
    new MouseEvent(slider1);
    new MouseEvent(slider2);
    
    $(document).ready(function() {

        // $(document).on('click', '.vertical-menu-btn', function() {
        //     if ($(window).width() <= 768) {
        //         if ($("boddy").hasClass("vertical-collpsed")) {

        //         } else {
        //             if ($("body").hasClass("sidebar-enable")) {
        //                 $('#uploading-section-artist-mobile').removeClass('uploading-section-artist-mobile');
        //                 $('.scrolling-wrapper').addClass('scrolling-wrapper-display');
        //             } else {
        //                 $('#uploading-section-artist-mobile').addClass('uploading-section-artist-mobile');
        //                 $('.scrolling-wrapper').removeClass('scrolling-wrapper-display');
        //             }
        //         }
        //     }
        // });

        loadmoresocialdata(0, 'all');
        <?php if(request()->segment(2) == "watch-to-earn"){
            echo "loadmoreData(0, 'watch-to-earn');";
        }elseif(request()->segment(2) == "listen-to-earn"){
            echo "loadmoreData(0, 'listen-to-earn');";
        }else
            echo "loadmoreData(0);";
        ?>
        

        //web version -> Loading artists
        $(document).on('click', '.loadbtn', function() {
            var pId = $(this).data("id");
            var tab = $(this).data("tab");
            loadmoresocialdata(pId, tab, 1);
        });

        $(".sorting").on("click", function() {
            var type = $(this).attr('type');
            loadmoresocialdata(0, type);
        });

        // up & down button
        $(document).on('click', '.up-change-stock', function() {
            var tab = $(".artist-maker-tabs").find(".active").attr("aria-controls");
            loadmoresocialdata(0, tab, 0, 'up');
        });

        $(document).on('click', '.down-change-stock', function() {
            var tab = $(".artist-maker-tabs").find(".active").attr("aria-controls");
            loadmoresocialdata(0, tab, 0, 'down');
        });

        //mobile version -> Loading artists
        $(document).on('click', '.loadbtnvideos', function() {
            $(".loadbtnvideos").html('<i style="color: #46c899;"  class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Loading...');
            var pId = $(this).data("id");
            loadmoreData(pId);
        });

        // Valyou Song En
        function loadmoresocialdata(page, tabId, loadingMore = 0, filter = '') {
            $.ajax({
                url: "loadmoresocialdata",
                type: "GET",
                cache: false,
                data: {
                    offset: page,
                    tabId: tabId,
                    filter: filter
                },
                beforeSend: function() { // Before we send the request, remove the .hidden class from the spinner and default to inline-block.
                    if (loadingMore == 1) {
                        $(".loadbtn").remove();
                        $(".loading-btn").html(' <i style="color: #46c899;"  class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Loading...');
                    }
                },
                success: function(data) {
                    if (data) {
                        const data1 = JSON.parse(data);

                        if (page) {
                            $(".tab_" + tabId).append(data1.web);
                            $(".mtab_" + tabId).append(data1.mobile);
                        } else {
                            $(".tab_" + tabId).html(data1.web);
                            $(".mtab_" + tabId).html(data1.mobile);
                        }
                    }
                },
                complete: function(data) { // Set our complete callback, adding the .hidden class and hiding the spinner.
                    if (loadingMore == 1)
                        $(".loading-btn").html('');
                },
            });
        }

        function loadmoreData(page, type) {
            $.ajax({
                url: "loadmoredata",
                type: "GET",
                cache: false,
                data: {
                    offset: page,
                    page_type: type
                },
                success: function(data) {
                    if (data) {
                        const data1 = JSON.parse(data);
                        $(".loadbtnvideos").hide();
                        $(".all_social_videos").append(data1.html);
                    }
                }
            });
        }
    });

    // $(document).on('click', '.added-feature .card .body-p', function() {
    //     if ($(window).width() <= 425) {
    //         $('.added-feature .card .body-p').removeClass('add-shadow-after-selected-425');
    //         $('.added-feature .card .body-p').removeClass('add-shadow-after-selected');
    //         $(this).addClass('add-shadow-after-selected-425');
    //     } else {
    //         $('.added-feature .card .body-p').removeClass('add-shadow-after-selected-425');
    //         $('.added-feature .card .body-p').removeClass('add-shadow-after-selected');
    //         $(this).addClass('add-shadow-after-selected');
    //     }
    // });

    // $(document).on('click', '.close-btn-promote-song-section', function() {
    //     let id = $(this).data('promoteid');
    //     $(`#promote-song-section-${id}`).css('display', 'none');
    //     $('.added-feature .card .body-p').removeClass('add-shadow-after-selected-425');
    //     $('.added-feature .card .body-p').removeClass('add-shadow-after-selected');
    // });

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
    
}else{
?>
$(document).on('click','.overlay-for-video',function () {
    let id = $(this).data('videoid');
    let brand =$(this).data('brand');
    let userId = $(this).data('userid');
    let video = $(this).data('video');
    $('#brandName').html(brand);
    if(video == 1){
        $(`#video`+id).trigger('play');
        $(`#overlay`+id).remove();

    }else{
        $('#staticBackdrop').modal('show');
        $('button.playvideo').attr('id',`${id}`);
    }
});

$(document).on('click', '.playvideo', function() {
    var id = $(this).attr('id');
    let userId = $(`#overlay${id}`).data('userid');
    let wallet = "<?php echo e(auth()->user()->wallet); ?>";
    console.log(wallet);
    if (Number(wallet) > 0.03) {
        axios({
            method: "post",
            url: "<?php echo e(route('admin.valyousong')); ?>",
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
});
<?php
}
?>

// Play to earn Video
</script>


<?php
if (Session::has('error')) {
?>
    <script type="text/javascript">
        swal("<?php echo e(Session::get('error')); ?>");
    </script>
<?php }
if (Session::has('success')) {
?>
    <script type="text/javascript">
        swal("<?php echo e(Session::get('success')); ?>");
    </script>
<?php } ?>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/social-media.blade.php ENDPATH**/ ?>