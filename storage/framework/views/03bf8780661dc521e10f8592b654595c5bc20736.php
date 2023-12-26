<?php
use App\Models\country;
use App\Models\Artist;
$artist = Artist::where('user_id',auth()->user()->id)->latest()->first();
?>

<?php $__env->startSection('pageCSS'); ?>

    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/css/pages/my-songs.css')); ?>">

    <!-- Stylesheet for the Gear Player, keep this one. -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/gear_app/css/gear.css')); ?>">
    <!-- Meta tags for mobile behavior. Recommended to use! -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <style type="text/css">
        footer {
            display: none;
        }
    @media (max-width: 525px){
        .hide-on-mob{
            display: none;
        }
        img.rounded-circle.avatar-xm.m-1.play-button {
            max-width: 60px;
            width: 25px;
        }
        .tab-margin-top{
            margin-top: 105px !important;
        }
        .bs-float-parent{
            height: 30px !important;    
        }
    }
    @media  screen and (max-width: 480px){
        .project-list-table {
            margin-bottom: 100px;
        }
    }
.tab-select .search_bar {
    margin-left: auto;
    margin-right: auto;
}
.project-list-table h3{
    margin: 0;
    font-size: 13px;
}
.valyou-o-btn ,.valyou-g-btn{
    padding: 5px 12px;
}
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?> Artist <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    
    <div class="row tab-margin-top">
        <div class="col-12">
            
            <?php echo $__env->make('layouts.inner-navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
        </div>
    </div>
    <div class="row">
    <?php echo $__env->make('layouts.profile-box', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="row">
        <div class="col-lg-12">
        <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Bio</h4>

                    <div class="table-responsive">
                        <p><?php echo e($artist['artist_about']); ?></p>
                        
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <!-- end row -->

    <div class="row bs-float-parent">
        <?php echo $__env->make('layouts.stock-price', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
    </div>
   

 
<?php $__env->stopSection(); ?>
  
<?php $__env->startSection('script'); ?>
   <script src="<?php echo e(URL::asset('assets/gear_app/js/app.js')); ?>"></script>
    <script type="text/javascript">
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/old/profile.blade.php ENDPATH**/ ?>