<?php $__env->startSection('title'); ?> Connect <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/dragula/dragula.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('common-components.breadcrumb'); ?>
        <?php $__env->slot('title'); ?> Connect <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_1'); ?> Tasks <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_2'); ?> Connect and collaborate <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <style>
        .connect-nav{
            align-items: center;
            justify-content: center;
            border: none;
            flex-wrap: nowrap;
            overflow-x: auto;
        }
        .connect-nav .cn-item{
            margin-right: 30px;
        }
        .connect-nav .cn-link{
            display: inline-block;
            transition: all 0.3s ease-in-out;
            color: #000;
            margin-bottom: 20px;
            font-size: 14px;
            font-weight: 500;
            opacity: 0.5;
        }
        .cn-link.active{
            color: #e84e89;
            position: relative;
        }
        .cn-link.active::before{
            content: '';
            width: 80px;
            height: 2px;
            background: #e84e89;
            display: block;
            position: absolute;
            bottom: -2px;
            left: 50%;
            transform: translateX(-50%);
        }
        .breadcrumb{
            display: none;
        }
        .search-wrapper-connect{
            display: flex;
            align-items: center;
            justify-content: flex-start;
            background: #fff;
            margin-bottom: 15px;
            border: 1px solid #d4d4d4;
            border-radius: 7px;
        }
        .search-wrapper-connect input{
            width: 100%;
            height: 35px;
            border: none;
            background: transparent;
            padding: 10px;
            outline: none;
            border-radius: 10px;
        }
        .search-wrapper-connect button{
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            width: 50px;
            font-size: 16px;
            padding: 0;
            background: transparent;
            color: #000;
        }
        .search-wrapper-connect i{

        }
        .ctc-single-profile {
          border: 1px solid #d4d4d4;
          padding: 20px 20px;
          display: flex;
          align-items: center;
          border-radius: 5px;
          margin-bottom: 15px;
        }

        .ctc-single-profile img {
          width: 72px;
          height: 72px;
          object-fit: cover;
        }

        .ctc-single-profile .sph-text {
          flex: 1;
        }


        .ctc-single-profile .sph-text h4 {
          margin: 0;
          font-size: 16px;
          font-weight: 600;
          color: #000;
          margin-bottom: 4px;
        }

        .ctc-single-profile .sph-text h6 {
          margin: 0;
          font-size: 14px;
          margin-bottom: 5px;
        }
        .ctc-single-profile .rating-wrap {
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }
        .ctc-single-profile .sph-text .rating-wrap i {
          color: #ffb600;
          font-size: 14px;
          margin-right: 2px;
        }

        .ctc-single-profile .sph-text .rating-wrap span {
          margin: 0;
          font-size: 14px;
          margin-left: 10px;
        }

        .ctc-single-profile .sph-button {
            display: inline-block;
            border: none;
            background: linear-gradient(257deg, #00b8ba 0%, #00ffc2 100%);
            padding: 8px 25px;
            color: #fff;
            font-weight: 600;
            font-size: 14px;
            letter-spacing: 1px;
            border-radius: 4px;
            transition: all 0.3s ease-in-out;
        }
        .ctc-single-profile .sph-button:hover{
            background: linear-gradient(257deg, #00ffc2 0%, #00b8ba 100%);
            color: #fff !important;
        }
        .for-mobb{
            display: none;
        }
        .for-webb{
            display: flex;
        }
        @media (max-width: 1440px) {
            .connect-nav {
                justify-content: flex-start;
            }
        }

        @media (min-width: 576px){
            .ctc-single-profile .sph-text {
                padding-left: 15px;
            }
        }
        @media (max-width: 575px){
            .connect-tab-content{
                padding: 0;
            }
            .page-title-box {
                padding-bottom: 15px;
            }
            .connect-nav{
                justify-content: flex-start;
                /*flex-wrap: wrap;*/
                overflow-x: auto;
            }
            .connect-nav .cn-item {
                width: 50%;
                margin-right: 0;
            }
            .connect-nav .cn-link{
                width: auto;
                min-width: 170px;
                text-align: center;
            }
            /*.ctc-single-profile{*/
            /*    display: none*/
            /*}*/
            .for-mobb{
                display: flex;
            }
            .for-webb{
                display: none;
            }
            .ctc-single-profile {
                padding: 10px;
                margin-bottom: 15px;
            }

            .ctc-single-profile img {
                width: 60px;
                height: 60px;
                object-fit: cover;
                margin-right: 10px;
            }
            .ctc-single-profile .sph-button{
                margin-left: 0;
                margin-top: 5px;
                padding: 4px 10px;
                font-weight: 500;
                letter-spacing: 0;
                font-size: 12px;
            }
            .ctc-single-profile .sph-text h4 {
                font-size: 14px;
                margin-bottom: 3px;
            }
            .ctc-single-profile .sph-text h6 {
                font-size: 12px;
                margin-bottom: 1px;
            }
            .ctc-single-profile .sph-text .rating-wrap i {
                font-size: 10px;
            }
            .ctc-single-profile .sph-text .rating-wrap span {
                font-size: 12px;
                margin-left: 6px;
            }
        }
    </style>


    <div class="connect-wrapper">
        <div class="row for-webb">
            <div class="col-12">
                <div class="search-wrapper-connect">
                    <input type"text" placeholder="Search Business here">
                    <button><i class="bx bx-search"></i></button>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">

                <ul class="nav nav-tabs connect-nav" id="myTab" role="tablist">
                  <li class="cn-item" role="presentation">
                    <a class="cn-link active" id="producer-tab" data-toggle="tab" href="#producer" role="tab" aria-controls="producer" aria-selected="true">Producer</a>
                  </li>
                  <li class="cn-item" role="presentation">
                    <a class="cn-link" id="photographer-tab" data-toggle="tab" href="#photographer" role="tab" aria-controls="photographer" aria-selected="false">Photographer</a>
                  </li>
                  <li class="cn-item" role="presentation">
                    <a class="cn-link" id="music-video-production-tab" data-toggle="tab" href="#music-video-production" role="tab" aria-controls="music-video-production" aria-selected="false">Music Video Production</a>
                  </li>
                  <li class="cn-item" role="presentation">
                    <a class="cn-link" id="ads-promotion-tab" data-toggle="tab" href="#ads-promotion" role="tab" aria-controls="ads-promotion" aria-selected="false">Ads & Promotion</a>
                  </li>
                  <li class="cn-item" role="presentation">
                    <a class="cn-link" id="web-design-tab" data-toggle="tab" href="#web-design" role="tab" aria-controls="web-design" aria-selected="false">Web Design</a>
                  </li>
                  <li class="cn-item" role="presentation">
                    <a class="cn-link" id="artist-collaboration-tab" data-toggle="tab" href="#artist-collaboration" role="tab" aria-controls="artist-collaboration" aria-selected="false">Artist Collaboration</a>
                  </li>
                  <li class="cn-item" role="presentation">
                    <a class="cn-link" id="publicist-tab" data-toggle="tab" href="#publicist" role="tab" aria-controls="publicist" aria-selected="false">Publicist</a>
                  </li>
                  <li class="cn-item" role="presentation">
                    <a class="cn-link" id="venue-tab" data-toggle="tab" href="#venue" role="tab" aria-controls="venue" aria-selected="false">Venue/GIGS</a>
                  </li>
                  <li class="cn-item" role="presentation">
                    <a class="cn-link" id="manager-tab" data-toggle="tab" href="#manager" role="tab" aria-controls="manager" aria-selected="false">Manager</a>
                  </li>
                  <li class="cn-item" role="presentation">
                    <a class="cn-link" id="songwriter-tab" data-toggle="tab" href="#songwriter" role="tab" aria-controls="songwriter" aria-selected="false">Songwriter</a>
                  </li>
                </ul>

                <!--search for mobile-->
                <div class="row for-mobb">
                    <div class="col-12">
                        <div class="search-wrapper-connect">
                            <input type"text" placeholder="Search Business here">
                            <button><i class="bx bx-search"></i></button>
                        </div>
                    </div>
                </div>

                <div class="tab-content connect-tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="producer" role="tabpanel" aria-labelledby="producer-tab">
                    <div class="ctc-inner-wrapper ">
                        <div class="row">
                            <div class="col-12">
                                <div class="ctc-single-profile">
                                    <img src="https://valyouxmusic.appprojectsavvy.com/assets/uploads/user/69619967.png" alt="">
                                    <div class="sph-text">
                                      <h4>Bobby k.9</h4>
                                      <h6>Singer - Major Artist</h6>
                                      <div class="rating-wrap">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span>30 Reviews</span>
                                      </div>
                                    </div>
                                    <a href="artist-profile" class="sph-button">Follow</a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="ctc-single-profile">
                                    <img src="https://valyouxmusic.appprojectsavvy.com/assets/uploads/user/69619967.png" alt="">
                                    <div class="sph-text">
                                      <h4>Bobby k.9</h4>
                                      <h6>Singer - Major Artist</h6>
                                      <div class="rating-wrap">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span>30 Reviews</span>
                                      </div>
                                    </div>
                                    <a href="artist-profile" class="sph-button">Follow</a>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="photographer" role="tabpanel" aria-labelledby="photographer-tab">
                      <div class="ctc-inner-wrapper">
                        <div class="row">
                            <div class="col-12">
                                <div class="ctc-single-profile">
                                    <img src="https://valyouxmusic.appprojectsavvy.com/assets/uploads/user/69619967.png" alt="">
                                    <div class="sph-text">
                                      <h4>Bobby k.9</h4>
                                      <h6>Singer - Major Artist</h6>
                                      <div class="rating-wrap">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span>30 Reviews</span>
                                      </div>
                                    </div>
                                    <a href="artist-profile" class="sph-button">Follow</a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="ctc-single-profile">
                                    <img src="https://valyouxmusic.appprojectsavvy.com/assets/uploads/user/69619967.png" alt="">
                                    <div class="sph-text">
                                      <h4>Bobby k.9</h4>
                                      <h6>Singer - Major Artist</h6>
                                      <div class="rating-wrap">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span>30 Reviews</span>
                                      </div>
                                    </div>
                                    <a href="artist-profile" class="sph-button">Follow</a>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="music-video-production" role="tabpanel" aria-labelledby="music-video-production-tab">
                      <div class="ctc-inner-wrapper">
                        <div class="row">
                            <div class="col-12">
                                <div class="ctc-single-profile">
                                    <img src="https://valyouxmusic.appprojectsavvy.com/assets/uploads/user/69619967.png" alt="">
                                    <div class="sph-text">
                                      <h4>Bobby k.9</h4>
                                      <h6>Singer - Major Artist</h6>
                                      <div class="rating-wrap">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span>30 Reviews</span>
                                      </div>
                                    </div>
                                    <a href="artist-profile" class="sph-button">Follow</a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="ctc-single-profile">
                                    <img src="https://valyouxmusic.appprojectsavvy.com/assets/uploads/user/69619967.png" alt="">
                                    <div class="sph-text">
                                      <h4>Bobby k.9</h4>
                                      <h6>Singer - Major Artist</h6>
                                      <div class="rating-wrap">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span>30 Reviews</span>
                                      </div>
                                    </div>
                                    <a href="artist-profile" class="sph-button">Follow</a>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="ads-promotion" role="tabpanel" aria-labelledby="ads-promotion-tab">
                      <div class="ctc-inner-wrapper">
                        <div class="row">
                            <div class="col-12">
                                <div class="ctc-single-profile">
                                    <img src="https://valyouxmusic.appprojectsavvy.com/assets/uploads/user/69619967.png" alt="">
                                    <div class="sph-text">
                                      <h4>Bobby k.9</h4>
                                      <h6>Singer - Major Artist</h6>
                                      <div class="rating-wrap">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span>30 Reviews</span>
                                      </div>
                                    </div>
                                    <a href="artist-profile" class="sph-button">Follow</a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="ctc-single-profile">
                                    <img src="https://valyouxmusic.appprojectsavvy.com/assets/uploads/user/69619967.png" alt="">
                                    <div class="sph-text">
                                      <h4>Bobby k.9</h4>
                                      <h6>Singer - Major Artist</h6>
                                      <div class="rating-wrap">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span>30 Reviews</span>
                                      </div>
                                    </div>
                                    <a href="artist-profile" class="sph-button">Follow</a>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="web-design" role="tabpanel" aria-labelledby="web-design-tab">
                      <div class="ctc-inner-wrapper">
                        <div class="row">
                            <div class="col-12">
                                <div class="ctc-single-profile">
                                    <img src="https://valyouxmusic.appprojectsavvy.com/assets/uploads/user/69619967.png" alt="">
                                    <div class="sph-text">
                                      <h4>Bobby k.9</h4>
                                      <h6>Singer - Major Artist</h6>
                                      <div class="rating-wrap">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span>30 Reviews</span>
                                      </div>
                                    </div>
                                    <a href="artist-profile" class="sph-button">Follow</a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="ctc-single-profile">
                                    <img src="https://valyouxmusic.appprojectsavvy.com/assets/uploads/user/69619967.png" alt="">
                                    <div class="sph-text">
                                      <h4>Bobby k.9</h4>
                                      <h6>Singer - Major Artist</h6>
                                      <div class="rating-wrap">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span>30 Reviews</span>
                                      </div>
                                    </div>
                                    <a href="artist-profile" class="sph-button">Follow</a>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="artist-collaboration" role="tabpanel" aria-labelledby="artist-collaboration-tab">
                      <div class="ctc-inner-wrapper">
                        <div class="row">
                            <div class="col-12">
                                <div class="ctc-single-profile">
                                    <img src="https://valyouxmusic.appprojectsavvy.com/assets/uploads/user/69619967.png" alt="">
                                    <div class="sph-text">
                                      <h4>Bobby k.9</h4>
                                      <h6>Singer - Major Artist</h6>
                                      <div class="rating-wrap">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span>30 Reviews</span>
                                      </div>
                                    </div>
                                    <a href="artist-profile" class="sph-button">Follow</a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="ctc-single-profile">
                                    <img src="https://valyouxmusic.appprojectsavvy.com/assets/uploads/user/69619967.png" alt="">
                                    <div class="sph-text">
                                      <h4>Bobby k.9</h4>
                                      <h6>Singer - Major Artist</h6>
                                      <div class="rating-wrap">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span>30 Reviews</span>
                                      </div>
                                    </div>
                                    <a href="artist-profile" class="sph-button">Follow</a>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="publicist" role="tabpanel" aria-labelledby="publicist-tab">...7</div>
                  <div class="tab-pane fade" id="venue" role="tabpanel" aria-labelledby="venue-tab">..8.</div>
                  <div class="tab-pane fade" id="manager" role="tabpanel" aria-labelledby="manager-tab">.9..</div>
                  <div class="tab-pane fade" id="songwriter" role="tabpanel" aria-labelledby="songwriter-tab">.10..</div>
                </div>

            </div>
        </div>
    </div>

    <div class="row d-none" style="display: none !important">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical m-0 text-muted h5"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                    </div> <!-- end dropdown -->

                    <h4 class="card-title mb-4">Upcoming</h4>
                    <div id="task-1">
                        <div id="upcoming-task" class="pb-1 task-list">
                            <div class="card task-box" id="upcard-1">
                                <div class="card-body">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none" data-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical m-0 text-muted h5"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" id="cardedit" data-toggle="modal"
                                                data-target=".bs-example-modal-center"
                                                onclick="editcarddeatil('#upcard-1')">Edit</a>
                                            <a class="dropdown-item" href="#" onclick="detelecard('#upcard-1')">Delete</a>
                                        </div>
                                    </div> <!-- end dropdown -->
                                    <div class="float-right ml-2">
                                        <span class="badge badge-pill badge-soft-secondary font-size-12"
                                            id="cd-status">Waiting</span>
                                    </div>
                                    <div>

                                        <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark"
                                                id="cd-name">Topnav layout design</a></h5>
                                        <p class="text-muted mb-4">14 Oct, 2019</p>
                                    </div>

                                    <div class="team float-left cd-assigne">
                                        <a href="javascript: void(0);" class="team-member d-inline-block" value="member-4">
                                            <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs m-1"
                                                alt="">
                                        </a>

                                        <a href="javascript: void(0);" class="team-member d-inline-block" value="member-5">
                                            <img src="assets/images/users/avatar-5.jpg" class="rounded-circle avatar-xs m-1"
                                                alt="">
                                        </a>

                                    </div>

                                    <div class="text-right">
                                        <h5 class="font-size-15 mb-1" id="cd-budget">$ 145</h5>
                                        <p class="mb-0 text-muted">Budget</p>
                                    </div>
                                </div>

                            </div>
                            <!-- end task card -->

                            <div class="card task-box" id="upcard-2">
                                <div class="card-body">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none" data-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical m-0 text-muted h5"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" id="cardedit" data-toggle="modal"
                                                data-target=".bs-example-modal-center"
                                                onclick="editcarddeatil('#upcard-2')">Edit</a>
                                            <a class="dropdown-item" href="#" onclick="detelecard('#upcard-2')">Delete</a>
                                        </div>
                                    </div> <!-- end dropdown -->
                                    <div class="float-right ml-2">
                                        <span class="badge badge-pill badge-soft-primary font-size-12"
                                            id="cd-status">Approved</span>
                                    </div>
                                    <div>
                                        <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark"
                                                id="cd-name">Create a New Landing UI</a></h5>
                                        <p class="text-muted" id="cd-date">15 Oct, 2019</p>
                                    </div>

                                    <ul class="pl-3 mb-4 text-muted" id="cd-desc">
                                        <li class="py-1">Separate existence is a myth.</li>
                                        <li class="py-1">For music, sport, etc</li>
                                    </ul>

                                    <div class="team float-left cd-assigne">
                                        <a href="javascript: void(0);" class="team-member d-inline-block" value="member-6">
                                            <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-xs m-1"
                                                alt="" id="team-member-1">
                                        </a>

                                        <a href="javascript: void(0);" class="team-member d-inline-block" value="member-7">
                                            <img src="assets/images/users/avatar-7.jpg" class="rounded-circle avatar-xs m-1"
                                                alt="">
                                        </a>

                                    </div>

                                    <div class="text-right">
                                        <h5 class="font-size-15 mb-1" id="cd-budget">112</h5>
                                        <p class="mb-0 text-muted">Budget</p>
                                    </div>
                                </div>

                            </div>
                            <!-- end task card -->

                            <div class="card task-box" id="upcard-3">
                                <div class="card-body">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none" data-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical m-0 text-muted h5"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" id="cardedit" data-toggle="modal"
                                                data-target=".bs-example-modal-center"
                                                onclick="editcarddeatil('#upcard-3')">Edit</a>
                                            <a class="dropdown-item" href="#" onclick="detelecard('#upcard-3')">Delete</a>
                                        </div>
                                    </div> <!-- end dropdown -->
                                    <div class="float-right ml-2">
                                        <span class="badge badge-pill badge-soft-secondary font-size-12"
                                            id="cd-status">Waiting</span>
                                    </div>
                                    <div>
                                        <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark"
                                                id="cd-name">Create a Skote Logo</a></h5>
                                        <p class="text-muted mb-4">15 Oct, 2019</p>
                                    </div>

                                    <div class="team float-left cd-assigne">
                                        <a href="javascript: void(0);" class="team-member d-inline-block" value="member-5">
                                            <img src="assets/images/users/avatar-5.jpg" class="rounded-circle avatar-xs m-1"
                                                alt="">
                                        </a>
                                    </div>

                                    <div class="text-right">
                                        <h5 class="font-size-15 mb-1" id="cd-budget">$ 86</h5>
                                        <p class="mb-0 text-muted">Budget</p>
                                    </div>
                                </div>

                            </div>
                            <!-- end task card -->

                        </div>

                        <div class="text-center" id="addbutton">
                            <a href="javascript: void(0);" class="btn btn-primary btn-block waves-effect waves-light"
                                data-toggle="modal" data-target=".bs-example-modal-center"
                                onclick="Addnewcard('#upcoming-task')"><i class="mdi mdi-plus mr-1"></i> Add New</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical m-0 text-muted h5"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                    </div> <!-- end dropdown -->

                    <h4 class="card-title mb-4">In Progress</h4>
                    <div id="task-2">
                        <div id="inprogress-task" class="pb-1 task-list">

                            <div class="card task-box" id="incard-1">
                                <div class="card-body">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none" data-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical m-0 text-muted h5"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" id="cardedit" data-toggle="modal"
                                                data-target=".bs-example-modal-center"
                                                onclick="editcarddeatil('#incard-1')">Edit</a>
                                            <a class="dropdown-item" href="#" onclick="detelecard('#incard-1')">Delete</a>
                                        </div>
                                    </div> <!-- end dropdown -->
                                    <div class="float-right ml-2">
                                        <span class="badge badge-pill badge-soft-success font-size-12"
                                            id="cd-status">Complete</span>
                                    </div>
                                    <div>
                                        <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark"
                                                id="cd-name">Brand logo design</a></h5>
                                        <p class="text-muted">12 Oct, 2019</p>
                                    </div>

                                    <ul class="list-inine pl-0 mb-4">
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <div class="border rounded avatar-sm">
                                                    <span class="avatar-title bg-transparent">
                                                        <img src="assets/images/companies/img-1.png" alt=""
                                                            class="avatar-xs">
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <div class="border rounded avatar-sm">
                                                    <span class="avatar-title bg-transparent">
                                                        <img src="assets/images/companies/img-2.png" alt=""
                                                            class="avatar-xs">
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <div class="border rounded avatar-sm">
                                                    <span class="avatar-title bg-transparent">
                                                        <img src="assets/images/companies/img-3.png" alt=""
                                                            class="avatar-xs">
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="team float-left cd-assigne">
                                        <a href="javascript: void(0);" class="team-member d-inline-block" value="member-5">
                                            <img src="assets/images/users/avatar-5.jpg" class="rounded-circle avatar-xs m-1"
                                                alt="">
                                        </a>
                                        <a href="javascript: void(0);" class="team-member d-inline-block" value="member-3">
                                            <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-xs m-1"
                                                alt="">
                                        </a>
                                    </div>

                                    <div class="text-right">
                                        <h5 class="font-size-15 mb-1" id="cd-budget">$ 132</h5>
                                        <p class="mb-0 text-muted">Budget</p>
                                    </div>
                                </div>

                            </div>
                            <!-- end task card -->

                            <div class="card task-box" id="incard-2">
                                <div class="card-body">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none" data-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical m-0 text-muted h5"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" id="cardedit" data-toggle="modal"
                                                data-target=".bs-example-modal-center"
                                                onclick="editcarddeatil('#incard-2')">Edit</a>
                                            <a class="dropdown-item" href="#" onclick="detelecard('#incard-2')">Delete</a>
                                        </div>
                                    </div> <!-- end dropdown -->
                                    <div class="float-right ml-2">
                                        <span class="badge badge-pill badge-soft-warning font-size-12"
                                            id="cd-status">Pending</span>
                                    </div>
                                    <div>
                                        <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark"
                                                id="cd-name">Create a Blog Template UI</a></h5>
                                        <p class="text-muted mb-4">13 Oct, 2019</p>
                                    </div>

                                    <div class="team float-left cd-assigne">
                                        <a href="javascript: void(0);" class="team-member d-inline-block" value="member-8">
                                            <img src="assets/images/users/avatar-8.jpg" class="rounded-circle avatar-xs m-1"
                                                alt="">
                                        </a>
                                        <a href="javascript: void(0);" class="team-member d-inline-block" value="member-5">
                                            <img src="assets/images/users/avatar-5.jpg" class="rounded-circle avatar-xs m-1"
                                                alt="">
                                        </a>
                                        <a href="javascript: void(0);" class="team-member d-inline-block" value="member-1">
                                            <img src="assets/images/users/avatar-1.jpg" class="rounded-circle avatar-xs m-1"
                                                alt="">
                                        </a>

                                    </div>

                                    <div class="text-right">
                                        <h5 class="font-size-15 mb-1" id="cd-budget">$ 103</h5>
                                        <p class="mb-0 text-muted">Budget</p>
                                    </div>
                                </div>

                            </div>
                            <!-- end task card -->

                            <div class="card task-box" id="incard-3">
                                <div class="card-body">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none" data-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical m-0 text-muted h5"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" id="cardedit" data-toggle="modal"
                                                data-target=".bs-example-modal-center"
                                                onclick="editcarddeatil('#incard-3')">Edit</a>
                                            <a class="dropdown-item" href="#" onclick="detelecard('#incard-3')">Delete</a>
                                        </div>
                                    </div> <!-- end dropdown -->
                                    <div class="float-right ml-2">
                                        <span class="badge badge-pill badge-soft-success font-size-12"
                                            id="cd-status">Complete</span>
                                    </div>
                                    <div>
                                        <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark"
                                                id="cd-name">Skote Dashboard UI</a></h5>
                                        <p class="text-muted mb-4">13 Oct, 2019</p>
                                    </div>

                                    <div class="team float-left cd-assigne">
                                        <a href="javascript: void(0);" class="team-member d-inline-block" value="member-2">
                                            <img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs m-1"
                                                alt="">
                                        </a>

                                    </div>

                                    <div class="text-right">
                                        <h5 class="font-size-15 mb-1" id="cd-budget">$ 94</h5>
                                        <p class="mb-0 text-muted">Budget</p>
                                    </div>
                                </div>

                            </div>
                            <!-- end task card -->
                        </div>

                        <div class="text-center">
                            <a href="javascript: void(0);" class="btn btn-primary btn-block waves-effect waves-light"
                                data-toggle="modal" data-target=".bs-example-modal-center"
                                onclick="Addnewcard('#inprogress-task')"><i class="mdi mdi-plus mr-1"></i> Add New</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical m-0 text-muted h5"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                    </div> <!-- end dropdown -->

                    <h4 class="card-title mb-4">Completed</h4>
                    <div id="task-3">
                        <div id="complete-task" class="pb-1 task-list">

                            <div class="card task-box" id="cmpcard-1">
                                <div class="card-body">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none" data-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical m-0 text-muted h5"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" id="cardedit" data-toggle="modal"
                                                data-target=".bs-example-modal-center"
                                                onclick="editcarddeatil('#cmpcard-1')">Edit</a>
                                            <a class="dropdown-item" href="#" onclick="detelecard('#cmpcard-1')">Delete</a>
                                        </div>
                                    </div> <!-- end dropdown -->
                                    <div class="float-right ml-2">
                                        <span class="badge badge-pill badge-soft-success font-size-12"
                                            id="cd-status">Complete</span>
                                    </div>
                                    <div>
                                        <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark"
                                                id="cd-name">Redesign - Landing page</a></h5>
                                        <p class="text-muted mb-4">10 Oct, 2019</p>
                                    </div>

                                    <div class="team float-left cd-assigne">
                                        <a href="javascript: void(0);" class="team-member d-inline-block" value="member-4">
                                            <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs m-1"
                                                alt="">
                                        </a>

                                        <a href="javascript: void(0);" class="team-member d-inline-block" value="member-6">
                                            <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-xs m-1"
                                                alt="">
                                        </a>
                                    </div>

                                    <div class="text-right">
                                        <h5 class="font-size-15 mb-1" id="cd-budget">$ 145</h5>
                                        <p class="mb-0 text-muted">Budget</p>
                                    </div>
                                </div>

                            </div>
                            <!-- end task card -->

                            <div class="card task-box" id="cmpcard-2">
                                <div class="card-body">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none" data-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical m-0 text-muted h5"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" id="cardedit" data-toggle="modal"
                                                data-target=".bs-example-modal-center"
                                                onclick="editcarddeatil('#cmpcard-2')">Edit</a>
                                            <a class="dropdown-item" href="#" onclick="detelecard('#cmpcard-2')">Delete</a>
                                        </div>
                                    </div> <!-- end dropdown -->
                                    <div class="float-right ml-2">
                                        <span class="badge badge-pill badge-soft-success font-size-12"
                                            id="cd-status">Complete</span>
                                    </div>
                                    <div>
                                        <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark"
                                                id="cd-name">Multipurpose Landing</a></h5>
                                        <p class="text-muted">09 Oct, 2019</p>
                                    </div>

                                    <ul class="list-inline mb-4">
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <div>
                                                    <img src="assets/images/small/img-1.jpg" class="rounded" alt=""
                                                        height="48">
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <div>
                                                    <img src="assets/images/small/img-2.jpg" class="rounded" alt=""
                                                        height="48">
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <div>
                                                    <img src="assets/images/small/img-3.jpg" class="rounded" alt=""
                                                        height="48">
                                                </div>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="team float-left cd-assigne">
                                        <a href="javascript: void(0);" class="team-member d-inline-block" value="member-6">
                                            <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-xs m-1"
                                                alt="">
                                        </a>

                                        <a href="javascript: void(0);" class="team-member d-inline-block" value="member-7">
                                            <img src="assets/images/users/avatar-7.jpg" class="rounded-circle avatar-xs m-1"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="text-right">
                                        <h5 class="font-size-15 mb-1" id="cd-budget">$ 92</h5>
                                        <p class="mb-0 text-muted">Budget</p>
                                    </div>
                                </div>

                            </div>
                            <!-- end task card -->

                            <div class="card task-box" id="cmpcard-3">
                                <div class="card-body">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none" data-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical m-0 text-muted h5"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" id="cardedit" data-toggle="modal"
                                                data-target=".bs-example-modal-center"
                                                onclick="editcarddeatil('#cmpcard-3')">Edit</a>
                                            <a class="dropdown-item" href="#" onclick="detelecard('#cmpcard-3')">Delete</a>
                                        </div>
                                    </div> <!-- end dropdown -->
                                    <div class="float-right ml-2">
                                        <span class="badge badge-pill badge-soft-secondary font-size-12"
                                            id="cd-status">Waiting</span>
                                    </div>
                                    <div>
                                        <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark"
                                                id="cd-name">Skote landing Psd</a></h5>
                                        <p class="text-muted mb-4">15 Oct, 2019</p>
                                    </div>

                                    <div class="team float-left cd-assigne">
                                        <a href="javascript: void(0);" class="team-member d-inline-block" value="member-5">
                                            <img src="assets/images/users/avatar-5.jpg" class="rounded-circle avatar-xs m-1"
                                                alt="">
                                        </a>
                                    </div>

                                    <div class="text-right">
                                        <h5 class="font-size-15 mb-1" id="cd-budget">$ 86</h5>
                                        <p class="mb-0 text-muted">Budget</p>
                                    </div>
                                </div>

                            </div>
                            <!-- end task card -->
                        </div>

                        <div class="text-center">
                            <a href="javascript: void(0);" class="btn btn-primary btn-block waves-effect waves-light"
                                data-toggle="modal" data-target=".bs-example-modal-center"
                                onclick="Addnewcard('#complete-task')"><i class="mdi mdi-plus mr-1"></i> Add New</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
    <div id="modalForm" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog"
        aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0 add-card-title">Add Card</h5>
                    <h5 class="modal-title mt-0 update-card-title" style="display: none;">Update Card</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form role="form" id="NewcardForm">
                    <div class="modal-body">
                        <div class="md-form mb-3">
                            <label data-error="wrong" data-success="right" for="cd-cardname">Card Name<span
                                    class="text-danger">*</span></label>
                            <input type="text" id="cd-cardname" class="form-control validate" required>
                        </div>

                        <div class="md-form mb-3">
                            <label data-error="wrong" data-success="right" for="cd-carddesc">Description</label>
                            <textarea id="cd-carddesc" class="form-control"></textarea>
                        </div>

                        <div class="md-form mb-3">
                            <label data-error="wrong" data-success="right" for="cd-cardassignee">Assignee<span
                                    class="text-danger">*</span></label>
                            <ul class="list-unstyled user-list" id="cd-cardassignee">
                                <li class="mb-1">
                                    <div class="custom-control custom-checkbox d-flex align-items-center">
                                        <input type="checkbox" class="custom-control-input member-check" id="member-1">
                                        <label class="custom-control-label" for="member-1">Albert Rodarte</label>
                                        <img src="assets/images/users/avatar-1.jpg" class="rounded-circle avatar-xs m-1"
                                            alt="">
                                    </div>
                                </li>
                                <li class="mb-1">
                                    <div class="custom-control custom-checkbox d-flex align-items-center">
                                        <input type="checkbox" class="custom-control-input member-check" id="member-2">
                                        <label class="custom-control-label" for="member-2">Albert Rodarte</label>
                                        <img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs m-1"
                                            alt="">
                                    </div>
                                </li>
                                <li class="mb-1">
                                    <div class="custom-control custom-checkbox d-flex align-items-center">
                                        <input type="checkbox" class="custom-control-input member-check" id="member-3">
                                        <label class="custom-control-label" for="member-3">Albert Rodarte</label>
                                        <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-xs m-1"
                                            alt="">
                                    </div>
                                </li>
                                <li class="mb-1">
                                    <div class="custom-control custom-checkbox d-flex align-items-center">
                                        <input type="checkbox" class="custom-control-input member-check" id="member-4">
                                        <label class="custom-control-label" for="member-4">Albert Rodarte</label>
                                        <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs m-1"
                                            alt="">
                                    </div>
                                </li>
                                <li class="mb-1">
                                    <div class="custom-control custom-checkbox d-flex align-items-center">
                                        <input type="checkbox" class="custom-control-input member-check" id="member-5">
                                        <label class="custom-control-label" for="member-5">Albert Rodarte</label>
                                        <img src="assets/images/users/avatar-5.jpg" class="rounded-circle avatar-xs m-1"
                                            alt="">
                                    </div>
                                </li>
                                <li class="mb-1">
                                    <div class="custom-control custom-checkbox d-flex align-items-center">
                                        <input type="checkbox" class="custom-control-input member-check" id="member-6">
                                        <label class="custom-control-label" for="member-6">Albert Rodarte</label>
                                        <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-xs m-1"
                                            alt="">
                                    </div>
                                </li>
                                <li class="mb-1">
                                    <div class="custom-control custom-checkbox d-flex align-items-center">
                                        <input type="checkbox" class="custom-control-input member-check" id="member-7">
                                        <label class="custom-control-label" for="member-7">Albert Rodarte</label>
                                        <img src="assets/images/users/avatar-7.jpg" class="rounded-circle avatar-xs m-1"
                                            alt="">
                                    </div>
                                </li>
                                <li class="mb-1">
                                    <div class="custom-control custom-checkbox d-flex align-items-center">
                                        <input type="checkbox" class="custom-control-input member-check" id="member-8">
                                        <label class="custom-control-label" for="member-8">Albert Rodarte</label>
                                        <img src="assets/images/users/avatar-8.jpg" class="rounded-circle avatar-xs m-1"
                                            alt="">
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="md-form mb-3">
                            <label data-error="wrong" data-success="right" for="StatusSelect">Status<span
                                    class="text-danger">*</span></label>
                            <select class="custom-select validate" id="StatusSelect" required>

                                <option value="Waiting">Waiting</option>
                                <option value="Approved">Approved</option>
                                <option value="Complete">Complete</option>
                                <option value="Pending" selected>Pending</option>
                            </select>
                        </div>

                        <div class="md-form mb-3">
                            <label data-error="wrong" data-success="right" for="cd-cardbudget">Budget<span
                                    class="text-danger">*</span></label>
                            <input type="number" id="cd-cardbudget" class="form-control validate" required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="addcard">Save</button>
                        <button type="button" class="btn btn-primary" id="updatecarddetail" data-dismiss="modal"
                            style="display: none;">Update</button>
                        <button type="button" class="btn btn-secondary" id="btnCloseIt" data-dismiss="modal">Close</button>
                    </div>
                </form>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

    <!-- Plugins js -->
    <script src="<?php echo e(URL::asset('assets/libs/dragula/dragula.min.js')); ?>"></script>

    <!-- Init js-->
    <script src="<?php echo e(URL::asset('assets/js/pages/task-kanban.init.js')); ?>"></script>

    <!-- Custom js-->
    <script src="<?php echo e(URL::asset('assets/js/custom.min.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/old/connect.blade.php ENDPATH**/ ?>