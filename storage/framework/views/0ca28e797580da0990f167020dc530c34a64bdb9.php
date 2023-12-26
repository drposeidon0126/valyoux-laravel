<style>

@media  only screen and (max-width:768px){
    .create .card{
        box-shadow:none !important;
    }

    .create .card .card-body{
        padding:0px
    }
}

</style>

<?php
use App\Models\Country;
$country=Country::all();
?>



<?php $__env->startSection('title'); ?> <?php echo e(trans('global.create')); ?> <?php echo e($title); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <!-- Dropify css -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/libs/dropify/css/dropify.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('common-components.breadcrumb'); ?>
        <?php $__env->slot('title'); ?> <?php echo e(request()->segment(3)." ".$title); ?> <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_1'); ?> <?php echo e($title); ?> <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_2'); ?> <?php echo e(trans('global.edit')); ?> <?php echo e($title); ?> <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <!-- end row -->
    <div class="create">
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="artist-store" class="custom-validation" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <p class="card-title-desc">What artist category do you think that are you applying for please note you may not yet currently be eligible <span style="color: red;">*</span></p>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" checked type="radio" name="category" id="artist1" value="0">
                                <label class="form-check-label" for="artist1">EOI Profile (Free Listing)</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="category" id="artist2" value="1">
                                <label class="form-check-label" for="artist2">Upcoming</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="category" id="artist3" value="2">
                                <label class="form-check-label" for="artist3">Professional</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="category" id="artist4" value="3">
                                <label class="form-check-label" for="artist4">Major Artist</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Country </label>
                            <div class="custom-file">
                                <select class="form-control" name="country">
                                    <option value="">Select country</option>
                                    <?php $__currentLoopData = $country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($row->cnt_code); ?>"><?php echo e($row->cnt_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php $__errorArgs = ['avatar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>What is your brand, music artist, influencer or stage name. What do fans call you? This will be your company brand business name that is or will be registered <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="brand" required/>
                        </div>
                        <div class="form-group">
                            <label>Are you a Rapper, Singer or DJ?</label>
                            <select class="form-control" name="about">
                                                    <option value="">Select one</option>

                                                        <option value="DJ">DJ</option>
                                                        <option value="Rapper">Rapper</option>
                                                        <option value="Singer">Singer</option>

                                                </select>

                        </div>
                        <p class="card-title-desc">What artist category do you think that are you applying for please note you may not yet currently be eligible</p>
                        <div class="form-group">
                            <label>Profile Bio. Please tell us a little big about your self and music.</label>
                            <textarea class="form-control" name="artist_about" rows="5" data-parsley-maxlength="250"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Website link</label>
                            <input type="url" class="form-control" name="website"/>
                        </div>
                        <div class="form-group">
                            <label>Spotify</label>
                            <input type="text" class="form-control" name="spotify"/>
                        </div>
                        <div class="form-group">
                            <label>Soundcloud</label>
                            <input type="text" class="form-control" name="soundcloud"/>
                        </div>
                        <div class="form-group">
                            <label>Apple Music</label>
                            <input type="text" class="form-control" name="applemusic"/>
                        </div>
                        <div class="form-group">
                            <label>Youtube</label>
                            <input type="url" class="form-control" name="youtube"/>
                        </div>
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="url" class="form-control" name="facebook"/>
                        </div>
                        <div class="form-group">
                            <label>Instagram</label>
                            <input type="url" class="form-control" name="instagram"/>
                        </div>

                        <p class="card-title-desc">Upload your photo. Please name the file with your name. Make sure there is nothing in the background picture we want the spot light to be on you <span style="color: red;">*</span></p>
                        <div class="card">
                            <div class="body">
                                <input type="file" id="avatar" class="dropify" name="photo" required>
                            </div>
                        </div>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_access')): ?>
                        <div class="form-group">
                            <label>Stock value ($)</label>
                            <input type="number" class="form-control" step="any" name="stock_value"/>
                        </div>
                        <div class="form-group">
                            <label>Market Value (cap) ($)</label>
                            <input type="number" class="form-control" step="any" name="market_value"/>
                        </div>
                        <div class="form-group">
                            <label>Dividend Payments (%)</label>
                            <input type="number" class="form-control" step="any" name="dividend_payments"/>
                        </div>
                        <div class="form-group">
                            <label>Current Price</label>
                            <input type="number" class="form-control" step="any" name="current_price"/>
                        </div>
                        <div class="form-group">
                            <label>Total Supply</label>
                            <input type="number" class="form-control" step="any" name="total_supply" min="1" required/>
                        </div>
                        <div class="form-group">
                            <label>Circulating Supply</label>
                            <input type="number" class="form-control" step="any" name="circulating_supply"/>
                        </div>
                        <div class="form-group">
                            <label>Artist (%)</label>
                            <input type="number" class="form-control" step="any" name="artist"  min="1" required/>
                        </div>
                        <div class="form-group">
                            <label>Music Fans Investors (%)</label>
                            <input type="number" class="form-control" step="any" name="music_fan_investor"/>
                        </div>
                        <div class="form-group">
                            <label>Sell Restrictions (number of stocks)</label>
                            <input type="number" class="form-control" step="any" name="sell_restrictions"/>
                        </div>
                        <div class="form-group">
                            <label>Market Maker Price(%)</label>
                            <input type="number" class="form-control" step="any" name="market_maker_price"/>
                        </div>
                        <div class="form-group">
                            <label>Sell Limit(%)</label>
                            <input type="number" class="form-control" step="any" name="sell_limit"/>
                        </div>
                        <?php endif; ?>

                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    </div>

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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/artist/create.blade.php ENDPATH**/ ?>