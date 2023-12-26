<?php // p($total_revenue,0); p($notes); ?>
<div class="revenue-main-wrapper mt-5">
    <div class="container">

            <div class="col-12 revenue-col">
              <h2 class="main-head-wrapper">
                <span>TOTAL REVENUE GENERATED</span>
                <span>$ <?php echo e(numberformat($total_amount['total'])); ?></span>
              </h2>
              <h4>SONG WRITING & COMPOSING REVENUE</h4>
              <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php  $total_amount = isset($row['total'])?$row['total']:0; ?>
              <div class="single-row-revenue">
                <h5>
                  <span><?php echo e($row['title']); ?> </span>
                  <span>$<?php echo e(numberformat($total_amount)); ?></span>
                </h5>
                <p><?php echo e($row['desc']); ?></p>
              </div>
              <?php //} ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

    </div>
</div>
<?php /**PATH /var/www/testvps-main/resources/views/artist/trash/artist_part/_revenue-streams.blade.php ENDPATH**/ ?>