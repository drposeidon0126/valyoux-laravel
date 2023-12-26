 <!-- start page title -->
 <div class="row">
     <div class="col-12">
         <div class="page-title-box d-flex align-items-center justify-content-between">
             <h4 class="mb-0 font-size-18 font-weight-semibold"><?php echo e($title); ?></h4>

             <div class="page-title-right">
                 <ol class="breadcrumb m-0">
                     <li class="breadcrumb-item active"><?php echo e($li_1); ?></li>
                     <?php if(isset($li_2)): ?>
                     <li class="breadcrumb-item"><?php echo e($li_2); ?></li>
                     <?php endif; ?>
                 </ol>
             </div>

         </div>
     </div>
 </div>
 <!-- end page title -->
<?php /**PATH /var/www/testvps-main/resources/views/common-components/breadcrumb.blade.php ENDPATH**/ ?>