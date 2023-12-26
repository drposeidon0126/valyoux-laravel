<?php
use App\Models\Country;
$country=Country::all();
?>

<?php $__env->startSection('title'); ?> <?php echo e(trans('global.edit')); ?> <?php echo e($title); ?> <?php $__env->stopSection(); ?>
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
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                    <form method="POST" action="artist-store" class="custom-validation" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="<?php echo e($artist->id); ?>">
                        <input type="hidden" name="user_id" value="<?php echo e($artist->user_id); ?>">
                        <p class="card-title-desc">What artist category do you think that are you applying for please note you may not yet currently be eligible</p>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="category" id="artist1" <?php echo e(($artist->category == "0") ? 'checked' : ''); ?> value="0">
                                <label class="form-check-label" for="artist1">EOI Profile</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="category" id="artist2" <?php echo e(($artist->category == "1") ? 'checked' : ''); ?> value="1">
                                <label class="form-check-label" for="artist2">Upcoming</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="category" id="artist3" <?php echo e(($artist->category == "2") ? 'checked' : ''); ?> value="2">
                                <label class="form-check-label" for="artist3">Independent</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="category" id="artist4" <?php echo e(($artist->category == "3") ? 'checked' : ''); ?> value="3">
                                <label class="form-check-label" for="artist4">Major Artist</label>
                            </div>
                        </div>
                        <div class="form-group">
                        <label>Country </label>
                                            <div class="custom-file">
                                                <select class="form-control" name="country">
                                                    <option value="">Select country</option>
                                                    <?php $__currentLoopData = $country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option <?php echo ($row->cnt_code == $artist->country)?'selected':''; ?>  value="<?php echo e($row->cnt_code); ?>"><?php echo e($row->cnt_name); ?></option>
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
                            <label>What is your brand, music artist, influencer or stage name. What do fans call you? This will be your company brand business name that is or will be registered.</label>
                            <input type="text" class="form-control" name="brand" value="<?php echo e($artist->brand ?? ''); ?>" required/>
                        </div>
                      <div class="form-group">
                            <label>Are you a Rapper, Singer or DJ?</label>
                              <select class="form-control" name="about">
                                      <option value="">Select one</option>
                                        <option  <?php echo  (ucfirst($artist->about) == 'DJ')?'selected':'';?> value="DJ">DJ</option>
                                        <option <?php echo  (ucfirst($artist->about) == 'Rapper')?'selected':'';?> value="Rapper">Rapper</option>
                                        <option  <?php echo  (ucfirst($artist->about) == 'Singer')?'selected':'';?> value="Singer">Singer</option>
                                 </select>

                        </div>

                        <p class="card-title-desc">What artist category do you think that are you applying for please note you may not yet currently be eligible</p>
                        <div class="form-group">
                            <label>Profile Bio. Please tell us a little big about your self and music.</label>
                            <textarea class="form-control" name="artist_about" rows="5" data-parsley-maxlength="250"><?php echo e($artist->artist_about ?? ''); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Website link</label>
                            <input type="url" class="form-control" name="website" value="<?php echo e($artist->website ?? ''); ?>"/>
                        </div>
                        <div class="form-group">
                            <label>Spotify</label>
                            <input type="text" class="form-control" name="spotify" value="<?php echo e($artist->spotify ?? ''); ?>"/>
                        </div>
                        <div class="form-group">
                            <label>Soundcloud</label>
                            <input type="text" class="form-control" name="soundcloud" value="<?php echo e($artist->soundcloud ?? ''); ?>"/>
                        </div>
                        <div class="form-group">
                            <label>Apple Music</label>
                            <input type="text" class="form-control" name="applemusic" value="<?php echo e($artist->applemusic ?? ''); ?>"/>
                        </div>
                        <div class="form-group">
                            <label>Youtube</label>
                            <input type="url" class="form-control" name="youtube" value="<?php echo e($artist->youtube ?? ''); ?>"/>
                        </div>
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="url" class="form-control" name="facebook" value="<?php echo e($artist->facebook ?? ''); ?>"/>
                        </div>
                        <div class="form-group">
                            <label>Instagram</label>
                            <input type="url" class="form-control" name="instagram" value="<?php echo e($artist->instagram ?? ''); ?>" />
                        </div>

                        <p class="card-title-desc">Upload your photo. Please name the file with your name. Make sure there is nothing in the background picture we want the spot light to be on you.</p>
                        <div class="card">
                            <div class="body">
                                <input type="file" id="photo" class="dropify" name="photo">
                            </div>
                        </div>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_access')): ?>
                        <div class="form-group">
                            <label>Stock value ($)</label>
                            <input type="text" class="form-control" step="any" name="stock_value" value="<?php echo e($artist->stock_value ?? ''); ?>"/>
                        </div>
                        <div class="form-group">
                            <label>Market Value (cap) ($)</label>
                            <input type="text" class="form-control" step="any" name="market_value" value="<?php echo e($artist->market_value ?? ''); ?>"/>
                        </div>
                        <div class="form-group">
                            <label>Dividend Payments (%)</label>
                            <input type="text" class="form-control" step="any" name="dividend_payments" value="<?php echo e(sprintf('%f',$artist->dividend_payments) ?? '0'); ?>"/>
                        </div>
                        <div class="form-group">
                            <label>Current Price</label>
                            <input type="number" class="form-control" step="any" name="current_price" value="<?php echo e($artist->current_price ?? '0'); ?>"/>
                        </div>
                        <div class="form-group">
                            <label>Total Supply</label>
                            <input type="number" class="form-control" step="any" name="total_supply" value="<?php echo e($artist->total_supply ?? '0'); ?>" min="1" required/>
                        </div>
                        <div class="form-group">
                            <label>Circulating Supply</label>
                            <input type="number" class="form-control" step="any" name="circulating_supply" value="<?php echo e($artist->circulating_supply ?? '0'); ?>"/>
                        </div>
                        <div class="form-group">
                            <label>Artist (%)</label>
                            <input type="number" class="form-control" step="any" name="artist" value="<?php echo e($artist->artist ?? '1'); ?>"  min="1" required/>
                        </div>
                        <div class="form-group">
                            <label>Music Fans Investors (%)</label>
                            <input type="number" class="form-control" step="any" name="music_fan_investor" value="<?php echo e(sprintf('%f',$artist->music_fan_investor) ?? '0'); ?>"/>
                        </div>
                        <div class="form-group">
                            <label>Sell Restrictions (number of stocks)</label>
                            <input type="number" class="form-control" step="any" name="sell_restrictions" value="<?php echo e($artist->sell_restrictions ?? '0'); ?>"/>
                        </div>
                        <div class="form-group">
                            <label>Market Maker Price(%)</label>
                            <input type="number" class="form-control" step="any" name="market_maker_price" value="<?php echo e($artist->market_maker_price ?? '0'); ?>"/>
                        </div>
                        <div class="form-group">
                            <label>Sell Limit(%)</label>
                            <input type="number" class="form-control" step="any" name="sell_limit" value="<?php echo e($artist->sell_limit ?? '0'); ?>"/>
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
            let imagenUrl = `<?php echo e(asset($artist->photo ?? 'assets/images/users/avator.png')); ?>`;
            $('#photo').dropify(
                {
                    defaultFile: imagenUrl
                });
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/artist/edit.blade.php ENDPATH**/ ?>