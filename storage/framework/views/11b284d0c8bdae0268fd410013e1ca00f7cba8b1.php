<?php $__env->startSection('pageCSS'); ?>
   <?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?> Artist <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('layouts.inner-navigation',['artist' => $artist], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row">
        <?php echo $__env->make('layouts.profile-box',['artist' => $artist], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="page_section" style="margin-bottom: 30px;">
     <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="mt-4">
                        <div id="candlestick-chart" class="apex-charts" dir="ltr"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-12">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('all_music_artist_music_fan_investor_show')): ?>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Music Fan Investor</h4>

                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                            <tr class="text-center">
                                <th class="b-green" colspan="2">Buyer</th>
                                <th class="s-red" colspan="2">Seller</th>
                            </tr>
                            <tr>
                                <th scope="col">Amount</th>
                                <th scope="col">Price</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Price</th>
                            </tr>
                            </thead>
                            <tbody class="buyer">
                            <tr>
                                <td>0.0412</td>
                                <td>256.18</td>
                                <td>0.0201</td>
                                <td>124.98</td>
                            </tr>
                            <tr>
                                <td>0.0301</td>
                                <td>187.16</td>
                                <td>0.0165</td>
                                <td>102.60</td>
                            </tr>
                            <tr>
                                <td>0.0523</td>
                                <td>325.21</td>
                                <td>0.0348</td>
                                <td>216.39</td>
                            </tr>
                            <tr>
                                <td>0.0432</td>
                                <td>268.62</td>
                                <td>0.0321</td>
                                <td>199.60</td>
                            </tr>
                            <tr>
                                <td>0.0246</td>
                                <td>152.96</td>
                                <td>0.0403</td>
                                <td>250.59</td>
                            </tr>
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
            <?php endif; ?>
             <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('all_music_artist_transactions')): ?>
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
            <?php endif; ?>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="market-overview-wrapper">
            <?php if($_SERVER['REQUEST_URI'] == '/artist/stock-price/26'){ ?>
                <h3>Valyou X Tokens Exchange</h3>
            <?php } else {?>
                <h3>Music Artist Brand Overview</h3>
            <?php }?>
                <div class="mo-inner">
                    <div class="mo-single-row row">
                        <div class="col-6 col-md-2">
                            <h5>Market Value</h5>
                            <p>$<?= isset($artist['market_value'])? number_format($artist['market_value']):0;?></p>
                        </div>
                        <div class="col-6 col-md-2 text-right">
                            <h5>Available at Current Price</h5>
                            <p><?= isset($artist['current_price'])?$artist['current_price']:0;?></p>
                        </div>
                    </div>
                    <div class="mo-single-row row">
                        <div class="col-6 col-md-2">
                            <h5>Total Supply</h5>
                            <p><?= isset($artist['total_supply'])?number_format($artist['total_supply']):0;?></p>
                        </div>
                        <div class="col-6 col-md-2 text-right">
                            <h5>Circulating Supply</h5>
                            <p><?= isset($artist['circulating_supply'])?number_format($artist['circulating_supply']):0;?></p>
                        </div>
                    </div>
                    <?php //$artist1 = $artist['artist'] - number_format($artist['music_fan_investor'],4);

                    ?>
                    <div class="mo-single-row row">
                        <div class="col-6 col-md-2">
                            <h5>Artist</h5>
                            <p><?= isset($artist['artist'])?number_format($artist['artist'],6):0;?>%</p>
                        </div>

                        <div class="col-6 col-md-2 text-right">
                            <h5>Music Fans Investors</h5>
                            <p><?= isset($artist['music_fan_investor'])?number_format($artist['music_fan_investor'],6):0;?>%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <script src="<?php echo e(URL::asset('assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>

    <!-- crypto exchange init -->
    <script src="<?php echo e(URL::asset('assets/js/pages/crypto-exchange.init.js')); ?>"></script>




    </div>
    <!-- end row -->
    <div class="row bs-float-parent">
            <?php echo $__env->make('layouts.stock-price',['artist' => $artist], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/artist/stock-price.blade.php ENDPATH**/ ?>