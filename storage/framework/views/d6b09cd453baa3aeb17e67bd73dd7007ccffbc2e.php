<?php $__env->startSection('pageCSS'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?> Artist <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<style>

    .revenue-main-wrapper{
        
    }
    .revenue-col{
        
    }
    .main-head-wrapper{
        color: #0A0A0A;
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-weight: 600;
        margin: 0 0 60px 0;
        font-size: 34px;
        flex-wrap: wrap;
    }
    .main-head-wrapper span{
        
    }
    .revenue-col h4{
        color: #0A0A0A;
        font-size: 26px;
        font-weight: 600;
        margin: 100px 0 50px 0;
    }
    .single-row-revenue{
        margin-bottom: 35px;
    }
    .single-row-revenue h5{
        color: #0A0A0A;
        font-size: 26px;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
        flex-wrap: wrap;
    }
    .single-row-revenue h5 span{
        
    }
    .single-row-revenue p{
        color: #707070;
        font-size: 18px;
        margin-bottom: 10px;
    }
    @media (max-width: 575px){
        .main-head-wrapper {
            margin: 0 0 30px 0;
            font-size: 20px;
        }
        .revenue-col h4 {
            font-size: 20px;
            margin: 60px 0 50px 0;
        }
        .single-row-revenue h5{
            font-size: 14px;
        }
        .single-row-revenue p{
            font-size: 14px;
        }
        .revenue-main-wrapper .container{
            padding: 0;
        }
        .revenue-main-wrapper .container .col-12{
            padding: 0;
        }
    }
</style>
    <?php echo $__env->make('layouts.inner-navigation',['artist'=>$artist], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
<div class="row">
         <?php echo $__env->make('layouts.profile-box',['artist'=>$artist], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     </div>
     <div class="page_section">
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
              <?php  
              $total_amount = isset($row['total'])?$row['total']:0;
              $title = isset($row['title'])?$row['title']:'';
              $desc = isset($row['desc'])?$row['desc']:'';
              
              ?>
              <div class="single-row-revenue">
                <h5>
                  <span><?php echo e($title); ?> </span>
                  <span>$<?php echo e(numberformat($total_amount)); ?></span>
                </h5>
                <p><?php echo e($desc); ?></p>
              </div>
              <?php //} ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

    </div>
</div>

</div>
<div class="row bs-float-parent">
        <?php echo $__env->make('layouts.stock-price',['artist'=>$artist], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?> 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/artist/revenue-streams.blade.php ENDPATH**/ ?>