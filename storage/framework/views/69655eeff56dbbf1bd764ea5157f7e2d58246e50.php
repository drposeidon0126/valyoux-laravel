<?php $__env->startSection('pageCSS'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/css/pages/my-songs.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?> Market <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <div class="scrolling"> Exchange Rates
        <span class="pink">:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg')); ?>" width="20" height="20" alt=""> &nbsp;&nbsp;&nbsp;&nbsp; 1 Ethereum &nbsp;=&nbsp;
        <p id="E1">0.02776 BTC</p> &nbsp;=&nbsp; $
        <p id="E2">462.82 USD</p> &nbsp;&nbsp;
        <p id="B3" class="text-green"> +0.25% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/bitcoinlogo.svg')); ?>" width="20" height="20">&nbsp;&nbsp;&nbsp;&nbsp;1 Bitcoin &nbsp;=&nbsp; $
        <p id="B2">16668.06 USD</p> &nbsp;&nbsp;
        <p id="B3" class="text-red"> -0.15% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo e(asset('assets/images/valyoux/vuxlogo.svg')); ?>" width="20" height="20">&nbsp;&nbsp;&nbsp;&nbsp;1 Valyou X Dollar (VXD) = &nbsp;&nbsp; $
        <p id="B2">1.00 USD</p> &nbsp;&nbsp;
        <p id="B3" class="text-red"> -0.1% </p>
    </div>
    <div class="tab-select">
        <a class="unclicked"> All </a>
        <a class="clicked"> Expression of Interest </a>
        <a class="unclicked"> Upcoming </a>
        <a id="test" class="unclicked"> Independent </a>
        <a class="unclicked"> Major Artists </a>
        <div class="search_bar">
            <input placeholder="Search">
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table project-list-table table-nowrap table-centered table-borderless">

                    <tbody>
                    <tr>
                        <td>
                            <div class="team">
                                <a href="javascript: void(0);" class="team-member d-inline-block"
                                   data-toggle="tooltip" data-placement="top" title=""
                                   data-original-title="Bobby">
                                    <img src="<?php echo e(asset('assets/images/play-button.svg')); ?>" class="rounded-circle avatar-xm m-1  play-button"
                                         alt="">
                                </a>
                            </div>
                        </td>
                        <td>
                            <h3 class="text-truncate font-size-20"><a href="crypto-exchange" class="text-dark"><b>1.Dark Fantasy</b></a></h3>
                        </td>
                        <td>
                            <a href="javascript: void(0);" class="w-25">
                                <img src="<?php echo e(asset('assets/images/rewind.svg')); ?>" class="rounded-circle avatar-xm m-1 w-25"
                                     alt="">
                            </a>
                            <a href="javascript: void(0);">
                                <img src="<?php echo e(asset('assets/images/pause-button.svg')); ?>" class="rounded-circle avatar-xm m-1 w-75"
                                     alt="">
                            </a>
                            <a href="javascript: void(0);" class=" w-25">
                                <img src="<?php echo e(asset('assets/images/fast-forward.svg')); ?>" class="rounded-circle avatar-xm m-1 w-25"
                                     alt="">
                            </a>
                        </td>
                        <td class="w-25">
                            <div class="row">
                                <div class="col-md-8 p-2">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                            <span class="sr-only">70% Complete</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <p> 00:34 / 04:00</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="<?php echo e(route('promote-music')); ?>">
                                <button type="button" class="btn valyou-o-btn"> Promote</button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="team">
                                <a href="javascript: void(0);" class="team-member d-inline-block"
                                   data-toggle="tooltip" data-placement="top" title=""
                                   data-original-title="Bobby">
                                    <img src="<?php echo e(asset('assets/images/play-button.svg')); ?>" class="rounded-circle avatar-xm m-1  play-button"
                                         alt="">
                                </a>
                            </div>
                        </td>
                        <td>
                            <h3 class="text-truncate font-size-20"><a href="crypto-exchange" class="text-dark"><b>1.Dark Fantasy</b></a></h3>
                        </td>
                        <td>
                            <a href="javascript: void(0);" class="w-25">
                                <img src="<?php echo e(asset('assets/images/rewind.svg')); ?>" class="rounded-circle avatar-xm m-1 w-25"
                                     alt="">
                            </a>
                            <a href="javascript: void(0);">
                                <img src="<?php echo e(asset('assets/images/pause-button.svg')); ?>" class="rounded-circle avatar-xm m-1 w-75"
                                     alt="">
                            </a>
                            <a href="javascript: void(0);" class=" w-25">
                                <img src="<?php echo e(asset('assets/images/fast-forward.svg')); ?>" class="rounded-circle avatar-xm m-1 w-25"
                                     alt="">
                            </a>
                        </td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                     aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                    <span class="sr-only">70% Complete</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <button type="button" class="btn valyou-g-btn"> Valyou</button>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="team">
                                <a href="javascript: void(0);" class="team-member d-inline-block"
                                   data-toggle="tooltip" data-placement="top" title=""
                                   data-original-title="Bobby">
                                    <img src="<?php echo e(asset('assets/images/play-button.svg')); ?>" class="rounded-circle avatar-xm m-1  play-button"
                                         alt="">
                                </a>
                            </div>
                        </td>
                        <td>
                            <h3 class="text-truncate font-size-20"><a href="crypto-exchange" class="text-dark"><b>1.Dark Fantasy</b></a></h3>
                        </td>
                        <td>
                            <a href="javascript: void(0);" class="w-25">
                                <img src="<?php echo e(asset('assets/images/rewind.svg')); ?>" class="rounded-circle avatar-xm m-1 w-25"
                                     alt="">
                            </a>
                            <a href="javascript: void(0);">
                                <img src="<?php echo e(asset('assets/images/pause-button.svg')); ?>" class="rounded-circle avatar-xm m-1 w-75"
                                     alt="">
                            </a>
                            <a href="javascript: void(0);" class=" w-25">
                                <img src="<?php echo e(asset('assets/images/fast-forward.svg')); ?>" class="rounded-circle avatar-xm m-1 w-25"
                                     alt="">
                            </a>
                        </td>
                        <td class="w-25">
                            <div class="row">
                                <div class="col-md-8 p-2">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                            <span class="sr-only">70% Complete</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <p> 00:34 / 04:00</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <button type="button" class="btn valyou-o-btn"> Promote</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="team">
                                <a href="javascript: void(0);" class="team-member d-inline-block"
                                   data-toggle="tooltip" data-placement="top" title=""
                                   data-original-title="Bobby">
                                    <img src="<?php echo e(asset('assets/images/play-button.svg')); ?>" class="rounded-circle avatar-xm m-1  play-button"
                                         alt="">
                                </a>
                            </div>
                        </td>
                        <td>
                            <h3 class="text-truncate font-size-20"><a href="crypto-exchange" class="text-dark"><b>1.Dark Fantasy</b></a></h3>
                        </td>
                        <td>
                            <a href="javascript: void(0);" class="w-25">
                                <img src="<?php echo e(asset('assets/images/rewind.svg')); ?>" class="rounded-circle avatar-xm m-1 w-25"
                                     alt="">
                            </a>
                            <a href="javascript: void(0);">
                                <img src="<?php echo e(asset('assets/images/pause-button.svg')); ?>" class="rounded-circle avatar-xm m-1 w-75"
                                     alt="">
                            </a>
                            <a href="javascript: void(0);" class=" w-25">
                                <img src="<?php echo e(asset('assets/images/fast-forward.svg')); ?>" class="rounded-circle avatar-xm m-1 w-25"
                                     alt="">
                            </a>
                        </td>
                        <td class="w-25">
                            <div class="row">
                                <div class="col-md-8 p-2">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                            <span class="sr-only">70% Complete</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <p> 00:34 / 04:00</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <button type="button" class="btn valyou-o-btn"> Promote</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="team">
                                <a href="javascript: void(0);" class="team-member d-inline-block"
                                   data-toggle="tooltip" data-placement="top" title=""
                                   data-original-title="Bobby">
                                    <img src="<?php echo e(asset('assets/images/play-button.svg')); ?>" class="rounded-circle avatar-xm m-1  play-button"
                                         alt="">
                                </a>
                            </div>
                        </td>
                        <td>
                            <h3 class="text-truncate font-size-20"><a href="crypto-exchange" class="text-dark"><b>1.Dark Fantasy</b></a></h3>
                        </td>
                        <td>
                            <a href="javascript: void(0);" class="w-25">
                                <img src="<?php echo e(asset('assets/images/rewind.svg')); ?>" class="rounded-circle avatar-xm m-1 w-25"
                                     alt="">
                            </a>
                            <a href="javascript: void(0);">
                                <img src="<?php echo e(asset('assets/images/pause-button.svg')); ?>" class="rounded-circle avatar-xm m-1 w-75"
                                     alt="">
                            </a>
                            <a href="javascript: void(0);" class=" w-25">
                                <img src="<?php echo e(asset('assets/images/fast-forward.svg')); ?>" class="rounded-circle avatar-xm m-1 w-25"
                                     alt="">
                            </a>
                        </td>
                        <td class="w-25">
                            <div class="row">
                                <div class="col-md-8 p-2">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                            <span class="sr-only">70% Complete</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <p> 00:34 / 04:00</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <button type="button" class="btn valyou-o-btn"> Promote</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="team">
                                <a href="javascript: void(0);" class="team-member d-inline-block"
                                   data-toggle="tooltip" data-placement="top" title=""
                                   data-original-title="Bobby">
                                    <img src="<?php echo e(asset('assets/images/play-button.svg')); ?>" class="rounded-circle avatar-xm m-1  play-button"
                                         alt="">
                                </a>
                            </div>
                        </td>
                        <td>
                            <h3 class="text-truncate font-size-20"><a href="crypto-exchange" class="text-dark"><b>1.Dark Fantasy</b></a></h3>
                        </td>
                        <td>
                            <a href="javascript: void(0);" class="w-25">
                                <img src="<?php echo e(asset('assets/images/rewind.svg')); ?>" class="rounded-circle avatar-xm m-1 w-25"
                                     alt="">
                            </a>
                            <a href="javascript: void(0);">
                                <img src="<?php echo e(asset('assets/images/pause-button.svg')); ?>" class="rounded-circle avatar-xm m-1 w-75"
                                     alt="">
                            </a>
                            <a href="javascript: void(0);" class=" w-25">
                                <img src="<?php echo e(asset('assets/images/fast-forward.svg')); ?>" class="rounded-circle avatar-xm m-1 w-25"
                                     alt="">
                            </a>
                        </td>
                        <td class="w-25">
                            <div class="row">
                                <div class="col-md-8 p-2">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                            <span class="sr-only">70% Complete</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <p> 00:34 / 04:00</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <button type="button" class="btn valyou-o-btn"> Promote</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="team">
                                <a href="javascript: void(0);" class="team-member d-inline-block"
                                   data-toggle="tooltip" data-placement="top" title=""
                                   data-original-title="Bobby">
                                    <img src="<?php echo e(asset('assets/images/play-button.svg')); ?>" class="rounded-circle avatar-xm m-1  play-button"
                                         alt="">
                                </a>
                            </div>
                        </td>
                        <td>
                            <h3 class="text-truncate font-size-20"><a href="crypto-exchange" class="text-dark"><b>1.Dark Fantasy</b></a></h3>
                        </td>
                        <td>
                            <a href="javascript: void(0);" class="w-25">
                                <img src="<?php echo e(asset('assets/images/rewind.svg')); ?>" class="rounded-circle avatar-xm m-1 w-25"
                                     alt="">
                            </a>
                            <a href="javascript: void(0);">
                                <img src="<?php echo e(asset('assets/images/pause-button.svg')); ?>" class="rounded-circle avatar-xm m-1 w-75"
                                     alt="">
                            </a>
                            <a href="javascript: void(0);" class=" w-25">
                                <img src="<?php echo e(asset('assets/images/fast-forward.svg')); ?>" class="rounded-circle avatar-xm m-1 w-25"
                                     alt="">
                            </a>
                        </td>
                        <td class="w-25">
                            <div class="row">
                                <div class="col-md-8 p-2">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                            <span class="sr-only">70% Complete</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <p> 00:34 / 04:00</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <button type="button" class="btn valyou-o-btn"> Promote</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="team">
                                <a href="javascript: void(0);" class="team-member d-inline-block"
                                   data-toggle="tooltip" data-placement="top" title=""
                                   data-original-title="Bobby">
                                    <img src="<?php echo e(asset('assets/images/play-button.svg')); ?>" class="rounded-circle avatar-xm m-1  play-button"
                                         alt="">
                                </a>
                            </div>
                        </td>
                        <td>
                            <h3 class="text-truncate font-size-20"><a href="crypto-exchange" class="text-dark"><b>1.Dark Fantasy</b></a></h3>
                        </td>
                        <td>
                            <a href="javascript: void(0);" class="w-25">
                                <img src="<?php echo e(asset('assets/images/rewind.svg')); ?>" class="rounded-circle avatar-xm m-1 w-25"
                                     alt="">
                            </a>
                            <a href="javascript: void(0);">
                                <img src="<?php echo e(asset('assets/images/pause-button.svg')); ?>" class="rounded-circle avatar-xm m-1 w-75"
                                     alt="">
                            </a>
                            <a href="javascript: void(0);" class=" w-25">
                                <img src="<?php echo e(asset('assets/images/fast-forward.svg')); ?>" class="rounded-circle avatar-xm m-1 w-25"
                                     alt="">
                            </a>
                        </td>
                        <td class="w-25">
                            <div class="row">
                                <div class="col-md-8 p-2">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                            <span class="sr-only">70% Complete</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <p> 00:34 / 04:00</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <button type="button" class="btn valyou-o-btn"> Promote</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/my-songs.blade.php ENDPATH**/ ?>