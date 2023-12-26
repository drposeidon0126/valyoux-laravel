<div class="col-sm-4">
    <div class="card">
        <div class="card-body">
            <p class="text-muted mb-4"><i class="<?php echo e($iconClass); ?>"></i> <?php echo e($title); ?> </p>

            <div class="row">
                <div class="col-6">
                    <div>
                        <h5><?php echo e($price); ?></h5>
                        <p class="text-muted text-truncate mb-0"><?php echo e($rate); ?> <i class="mdi mdi-arrow-up ml-1 text-success"></i></p>
                    </div>
                </div>
                <div class="col-6">
                    <div>
                        <div id="<?php echo e($chartId); ?>" class="apex-charts"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH /var/www/testvps-main/resources/views/common-components/crypto-widget.blade.php ENDPATH**/ ?>