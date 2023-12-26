<div class="tab-select nav nav-pills search-bar-web scrolling-wrapper-lower artist-maker-tabs" id="v-pills-tab"
    role="tablist" aria-orientation="vertical">
    <a href="#all" class="active sorting" id="all-tab" type="all" data-toggle="pill" role="tab"
        aria-controls="all" aria-selected="true"> All</a>
    <?php $__currentLoopData = $artist_by_country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="#<?php echo e($key); ?>" class="unclicked sorting" type="<?php echo e($key); ?>" id="<?php echo e($key); ?>-tab"
            data-toggle="pill" role="tab" aria-controls="<?php echo e($key); ?>"
            aria-selected="false"><?php echo e($country['country_name']); ?></a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<div class="tab-content scroll-style scroll-maincolor" id="v-pills-tabContent">
    <div id="all" class="tab-pane fade show active" role="tabpanel" aria-labelledby="all-tab">
        <div class="artist-markets-content-wrap">
            <div class="tab_all">
            </div>
        </div>
    </div>
    <?php $__currentLoopData = $artist_by_country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key1 => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div id="<?php echo e($key1); ?>" class="tab-pane fade" role="tabpanel" aria-labelledby="<?php echo e($key1); ?>-tab">
            <div class="artist-markets-content-wrap tab_<?php echo e($key1); ?>">
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
<?php /**PATH /var/www/testvps-main/resources/views/partician/artist_markets.blade.php ENDPATH**/ ?>