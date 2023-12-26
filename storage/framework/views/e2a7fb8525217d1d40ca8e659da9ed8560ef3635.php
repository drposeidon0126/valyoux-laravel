<?php $__env->startSection('title'); ?> Upload <?php echo e($title); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <!-- Dropify css -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/libs/dropify/css/dropify.min.css')); ?>">
    <style>
        .song-type {
            min-width: 5rem;
            width: max-content;
            font-size: 0.95rem;
        }

        #song-search {
            border-radius: 30px;
            border: 2px solid lightgray;
        }

        #song-search:focus {
            border-color: #ff0093!important;
        }

        .song-type.active {
            background-color: #ff0093!important;
            color: white!important;
        }

        .main-tab {
            font-size: 1rem;
            padding: 12px 18px;
            width: max-content;
            border-bottom:2px solid #ff009300;
        }

        .main-tab.active {
            border: none;
            border-bottom:2px solid #ff0093!important;
        }

        .nav {
            flex-wrap: unset!important;
        }

        .has-search .form-control {
            padding-left: 2.375rem;
        }

        .has-search .form-control-feedback {
            position: absolute;
            z-index: 2;
            display: block;
            width: 2.375rem;
            height: 2.375rem;
            line-height: 2.375rem;
            text-align: center;
            pointer-events: none;
            color: #aaa;
        }

        .page-link {
            border: none!important;
            margin:5px;
        }

        .page-item.active .page-link {
            background-color: #ff0093!important;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- end row -->
    <div class="">
        <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link main-tab active" data-toggle="tab" href="#home">PAY PER STREAM</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link main-tab" data-toggle="tab" href="#menu1">EARN</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link main-tab" data-toggle="tab" href="#menu2">VALYOU PLAYLIST</a>
            </li>
        </ul>

        <div>
            <?php
                $songTypeArr = array('Top 100', 'Trending', ' Rap ', 'Hip-Hop', 'Afro Beats', 'Amapiano', 'Feel Good', 'Party', 'Workout', ' Chill ', 'Energy Country'); 
            ?>
            <ul class="nav nav-pills py-3 overflow-auto">
                <?php $__currentLoopData = $songTypeArr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="nav-item ">
                    <a class="nav-link px-2 w-full text-center song-type <?php echo e($key==0?'active': ''); ?>" data-toggle="pill" href="#home">&nbsp;&nbsp;<?php echo e($item); ?>&nbsp;&nbsp;</a>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>

        <div class="row my-2">
            <div class="form-group has-search col-md-4 col-sm-12 pl-5">
                <span class="fa fa-search form-control-feedback"></span>
                <input type="text" class="form-control" id="song-search" placeholder="Search">
            </div>
        </div>
          
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane container active" id="home" style="max-width:100%">
                <div id="major_artists" class="tab-pane" role="tabpanel" aria-labelledby="major_artists-tab">
                    <div class="table-responsive table-responsive-web">
                        <table class="table project-list-table table-nowrap table-centered table-borderless">
                            <thead>
                                <tr class="py-2">
                                    <th scope="col"  class="text-center"># Rank</th>
                                    <th class="sorting stock_value" value="stock_value" type="ASC" scope="col">Cover <i class="fa fa-fw fa-sort"></i></th><th class="sorting stock_value" value="stock_value" type="ASC" scope="col">Song Name <i class="fa fa-fw fa-sort"></i></th>
                                    <th class="sorting stock_value" value="stock_value" type="ASC" scope="col">Artist Image <i class="fa fa-fw fa-sort"></i></th>
                                    <th class="sorting market_value" value="market_value" type="ASC" scope="col">Artist Name <i class="fa fa-fw fa-sort"></i></th>
                                    <th  class="sorting dividend_payments" value="dividend_payments" type="ASC" scope="col"> Song Valyou <i class="fa fa-fw fa-sort"></i></th>
                                    <th class=" txt-main" scope="col">Pay per Stream</th>
                                </tr>
                            </thead>
                            <tbody class="tab_3">
                                <?php for($i=0; $i<10; $i++): ?>
                                <tr>
                                    <td><?php echo e($i+1); ?> &nbsp;&nbsp; <img class="k-avatar-sm" src="<?php echo e(asset('assets/images/play-button.svg')); ?>"></td>
                                    <td><img class="k-avatar-md" src="<?php echo e(asset('assets/images/player-bg.png')); ?>"></td>
                                    <td>Started from the bottom</td>
                                    <td><img class="k-avatar-md rounded-circle" src="<?php echo e(asset('assets/uploads/artist/1396741054.jpg')); ?>"></td>
                                    <td>Bobby Oparaocha</td>
                                    <td class="">$100,000,000.00</td>
                                    <td class="txt-main ">$7.002402</td>
                                </tr>
                                <?php endfor; ?>
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center">
                        <nav>
                            <ul class="pagination pg-darkgrey">
                            <li class="page-item">
                                <a class="page-link" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link">1</a></li>
                            <li class="page-item"><a class="page-link">2</a></li>
                            <li class="page-item"><a class="page-link">3</a></li>
                            <li class="page-item"><a class="page-link">4</a></li>
                            <li class="page-item"><a class="page-link">5</a></li>
                            <li class="page-item">
                                <a class="page-link" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                                </a>
                            </li>
                            </ul>
                        </nav>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div> <!-- end row -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('assets/libs/parsleyjs/parsleyjs.min.js')); ?>"></script>
    <!-- Plugins js -->
    <script src="<?php echo e(URL::asset('assets/js/pages/form-validation.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/dropify/js/dropify.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script-bottom'); ?>
    <script>
        $(function () {
            $('.dropify').dropify();
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/admin/media/upload-video.blade.php ENDPATH**/ ?>