<style>
/* custom */
.special-video-part {
    max-height: 55vh;
    overflow-y: auto;
}

.brand-list-box {
    overflow-x: auto;
}

.hori-nav {
    overflow-x: hidden;
    list-style: none;
}

.mo-card-size {
    width: 250px;
    height: 170px;
}

.sponsor-info{
    justify-content: center;
    align-items: center;
}

.avatar-sm {
    height: 50px !important;
    width: 50px !important;
}

.show-info-card, .comment-info {
    width: 100%;
    position: relative;
}
</style>
<div class="brand-sponsor-list w-full">
    <div class="row space-content m-0 p-1">
        <div>
            <span class="fs-1-1">Drake's Brand Sponsors in <span class="txt-main hand"  data-toggle="modal" data-target="#brand-view-modal">Melbourne City <i class="fa fa-arrow-down"></i></span></span>
        </div>
        <div><a href="#" class="txt-main m-auto"  data-toggle="modal" data-target="#brand-bid-modal">Bid Now (See All) &nbsp;<i class="fa fa-arrow-right"></i></a></div>
    </div>

    <div class="brand-list-box my-2 w-full scrolling-sponsor-list scroll-style">
        <div class="hori-nav my-0 pl-0 d-inline-flex" id="v-pills-tab" role="tablist" aria-orientation="vertical" >
            <?php $cnt = 0 ?>
            <?php $__currentLoopData = $artists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $cnt++;
                    $bg = ($cnt%2 == 0)?"bg-black": "bg-green-gra";
                 ?>
                <div  class="mr-2 cursor-grab">             
                    <div class="<?php echo e($bg); ?> mo-card-size rounded-lg p-3 text-center d-flex"> 
                        <img src="<?php echo e(URL::asset('assets/uploads/brand_mark/mark.png')); ?>" class="m-auto" height="70%">                
                    </div>   
                    <div class="d-flex mt-2 d-inline-flex sponsor-info">
                        <div>
                            <img src="<?php echo e(URL::asset($row->photo)); ?>" class="avatar-sm rounded-circle">
                        </div>
                        <div class="px-2 show-info-card">
                            <p class="font-weight-bold fs-2 mb-0"><b><?php echo e(isset($row->brand)?$row->brand:'Brand name'); ?></b></p>
                            <p class="mb-0" >Click & Earn $<?php echo e(isset($row->stock_value)?$row->stock_value:'0.0'); ?>VXD</p>
                        </div>
                    </div>                    
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>

<div class="modal fade" id="brand-bid-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="bidBrandLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:900px">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bidBrandLabel"><b class="color-pink">Brand Bid Now</b>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-inline-flex">
                    <img src="http://127.0.0.1:8000/assets/uploads/artist/1396741054.jpg" width="70" height="70" class="rounded-circle avatar-xm m-1 artist-list-photo" alt="">
                    <p class="txt-main fs-2 font-weight-bold m-auto"> &nbsp;Bid Now to become one of the 10 Brand sponsors for Drake in any particular city.</p>
                </div>
                <div class="mt-3"><h4>1. Select Your Brand Exposure Location</h4><i class="fa fa-help"></i></div>
                <div class="mb-3">
                    <h5>I. Choose Region</h5>
                    <div class="d-inline-flex overflow-auto w-full scroll-style scroll-maincolor ">
                        <button class="bg-light border border-success py-5 w-150 k-shadow mr-3 rounded-lg"><b>Africa</b></button>
                        <button class="bg-light border border-light py-5 w-150 k-shadow mr-3 rounded-lg"><b>Americas</b></button>
                        <button class="bg-light border border-light py-5 w-150 k-shadow mr-3 rounded-lg"><b>Asia</b></button>
                        <button class="bg-light border border-light py-5 w-150 k-shadow mr-3 rounded-lg"><b>European</b></button>
                        <button class="bg-light border border-light py-5 w-150 k-shadow mr-3 rounded-lg"><b>Oceania</b></button>
                    </div>
                </div>
                <div>
                    <h5>II. Select Country</h5>
                    <div class="mb-3">
                        <select class="form-control w-full" placeholder="Select Country">
                            <option value="any">Select Country</option>
                        </select>
                    </div>
                </div>
                <div>
                    <h5>III. Select State</h5>
                    <div class="mb-3">
                        <select class="form-control w-full" placeholder="Select Country">
                            <option value="any">Select state</option>
                        </select>
                    </div>
                </div>
                <div>
                    <h5>IV. Select City / Town / Suburb</h5>
                    <div class="mb-3">
                        <select class="form-control w-full" placeholder="Select Country">
                            <option value="any">Select City / Town / Suburb</option>
                        </select>
                    </div>
                </div>
                <div>Bidding War: 1 spot remaining before bidding war starts in this selected city.</div>
                <div class="my-4"><h4>2. Upload your company brand business logos in three formats.</h4></div>
                <div><p>Black, White and the original color all in a transparent form with no background.(svg, png)</p></div>
                <div class="d-flex justify-content-center">
                    <div class="d-inline-flex overflow-auto w-full scroll-style scroll-maincolor "">
                        <div  class="mr-4 cursor-grab">             
                            <div class="bg-green-gra mo-card-size rounded-lg p-3 text-center d-flex"> 
                                <img src="<?php echo e(URL::asset('assets/uploads/brand_mark/mark.png')); ?>" class="m-auto" height="70%">                
                            </div>   
                            <div class="d-flex mt-2 d-inline-flex sponsor-info">
                                <p class="text-center">White Logo</p>
                            </div>                    
                        </div>
                        <div  class="mr-4 ">             
                            <div class="bg-black mo-card-size rounded-lg p-3 text-center d-flex"> 
                                <img src="<?php echo e(URL::asset('assets/uploads/brand_mark/mark.png')); ?>" class="m-auto" height="70%">                
                            </div>   
                            <div class="d-flex mt-2 d-inline-flex sponsor-info">
                                <p class="text-center">Black Logo</p>
                            </div>                    
                        </div>
                        <div  class="mr-4 ">             
                            <div class="bg-light mo-card-size rounded-lg p-3 text-center d-flex"> 
                                <img src="<?php echo e(URL::asset('assets/uploads/brand_mark/mark.png')); ?>" class="m-auto" height="70%">                
                            </div>   
                            <div class="d-flex mt-2 d-inline-flex sponsor-info">
                                <p class="text-center">Original Logo</p>
                            </div>                    
                        </div>
                    </div>
                </div>
                <div>
                    <button type="button" class="btn btn-success bg-green-gra w-full">UPLOAD LOGO</button>
                </div>
                <div class="my-4">
                    <h4>3. Place a Bid. Minimum Starting Bid $10.00</h4>
                    <div class="p-8 mt-4 text-xs bg-black rounded">
                        <div class="w-full text-center">
                            <p class="text-white">Top Bid $10.00</p>
                        </div><br>
                        <div class="d-flex p-3 bg-white rounded-lg">
                            <div class="d-flex space-content w-full">
                                <button type="button" class="btn btn-light"> - </button>
                                <input class="form-control bid-input border-0 text-center fs-3" value="45" name="bid-value"  />
                                <button type="button" class="btn btn-light"> + </button>
                            </div>
                        </div><br>
                        <div class="w-full text-center">
                            <p class="text-white">Lowest Bid $10.00</p>
                        </div>
                    </div>
                    <div>
                        <p class="text-center fs-3"> Total Cost + Fees:</p>
                        <p class="txt-main text-center fs-4">$0 VXD</p>
                    </div>
                    <button type="button" class="btn btn-success bg-green-gra w-full">PLACE A BID NOW</button>
                </div>
                <div>
                    <p>Thank you for choosing to collaborate with Artist Drake by becoming a brand sponsor.

                        If your logo is approved, it will appear next to every single video and audio content of that particular music artist brand in the locations you have selected based on the winning top Bid.
                        
                        You could then proceed to add more advertising content such as video commercials or links to you business pages viewers can navigate to.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="brand-view-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="bidBrandLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:900px">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bidBrandLabel"><b class="color-pink">Brand View</b>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="mt-3"><h4>View Brand Sponsor for <b>Drake</b> in <b>Asia</b></h4></div>
                <div class="mb-3">
                    <h5>I. Choose Region</h5>
                    <div class="d-inline-flex overflow-auto w-full scroll-style scroll-maincolor "">
                        <button class="bg-light border border-success w-150 py-5 k-shadow mr-3 rounded-lg"><b>Africa</b></button>
                        <button class="bg-light border border-light w-150 py-5 k-shadow mr-3 rounded-lg"><b>Americas</b></button>
                        <button class="bg-light border border-light w-150 py-5 k-shadow mr-3 rounded-lg"><b>Asia</b></button>
                        <button class="bg-light border border-light w-150 py-5 k-shadow mr-3 rounded-lg"><b>European</b></button>
                        <button class="bg-light border border-light w-150 py-5 k-shadow mr-3 rounded-lg"><b>Oceania</b></button>
                    </div>
                </div>
                <div>
                    <h5>II. Select Country</h5>
                    <div class="mb-3">
                        <select class="form-control w-full" placeholder="Select Country">
                            <option value="any">Select Country</option>
                        </select>
                    </div>
                </div>
                <div>
                    <h5>III. Select State</h5>
                    <div class="mb-3">
                        <select class="form-control w-full" placeholder="Select Country">
                            <option value="any">Select state</option>
                        </select>
                    </div>
                </div>
                <div>
                    <h5>IV. Select City / Town / Suburb</h5>
                    <div class="mb-3">
                        <select class="form-control w-full" placeholder="Select Country">
                            <option value="any">Select City / Town / Suburb</option>
                        </select>
                    </div>
                </div>
                <div>
                    <button type="button" class="btn btn-success bg-green-gra w-full">VIEW BRAND SPONSORS</button>
                </div>
                <div class="d-flex mt-5">
                    <div class="d-inline-flex overflow-auto w-full scroll-style scroll-maincolor "">
                        <div  class="mr-4 cursor-grab">             
                            <div class="bg-green-gra mo-card-size rounded-lg p-3 text-center d-flex"> 
                                <img src="<?php echo e(URL::asset('assets/uploads/brand_mark/mark.png')); ?>" class="m-auto" height="70%">                
                            </div>   
                            <div class=" rounded-lg px-2 py-3 k-shadow-blur mt-2">
                                <p class="txt-main fs-2 font-weight-bold">1. McDonalds</p>
                                <div class="d-flex justify-content-between fs-2"><span class="font-weight-bold ">Top Bid</span><span>$50</span></div>
                                <div class="d-flex justify-content-between fs-2"><span class="font-weight-bold ">Lowest Bid</span><span>$10</span></div>
                                <div class="d-flex justify-content-between fs-2"><span class="font-weight-bold ">Time Remaining</span><span>24 hr: 00 mins</span></div>
                            </div>                    
                        </div>
                        <div  class="mr-4 ">             
                            <div class="bg-black mo-card-size rounded-lg p-3 text-center d-flex"> 
                                <img src="<?php echo e(URL::asset('assets/uploads/brand_mark/mark.png')); ?>" class="m-auto" height="70%">                
                            </div>   
                            <div class=" rounded-lg px-2 py-3 k-shadow-blur mt-2">
                                <p class="txt-main fs-2 font-weight-bold">2. McDonalds</p>
                                <div class="d-flex justify-content-between fs-2"><span class="font-weight-bold ">Top Bid</span><span>$50</span></div>
                                <div class="d-flex justify-content-between fs-2"><span class="font-weight-bold ">Lowest Bid</span><span>$10</span></div>
                                <div class="d-flex justify-content-between fs-2"><span class="font-weight-bold ">Time Remaining</span><span>24 hr: 00 mins</span></div>
                            </div>                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php /**PATH /var/www/testvps-main/resources/views/partician/brand_sponsor_list.blade.php ENDPATH**/ ?>