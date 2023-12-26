<style>
    .row.tab-margin-top{
        margin-top:0px !important;
    }
</style>



<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Products'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/ion-rangeslider/ion-rangeslider.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('common-components.breadcrumb'); ?>
        <?php $__env->slot('title'); ?> Products <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_1'); ?> Ecommerce <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_2'); ?> Products <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    
    <div class="row tab-margin-top">
        <div class="col-12">
            
            <?php echo $__env->make('layouts.inner-navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3 d-none">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Filter</h4>

                    <div>
                        <h5 class="font-size-14 mb-3">Clothes</h5>
                        <ul class="list-unstyled product-list">
                            <li><a href="#"><i class="mdi mdi-chevron-right mr-1"></i> T-shirts</a></li>
                            <li><a href="#"><i class="mdi mdi-chevron-right mr-1"></i> Shirts</a></li>
                            <li><a href="#"><i class="mdi mdi-chevron-right mr-1"></i> Jeans</a></li>
                            <li><a href="#"><i class="mdi mdi-chevron-right mr-1"></i> Jackets</a></li>
                        </ul>
                    </div>
                    <div class="mt-4 pt-3">
                        <h5 class="font-size-14 mb-3">Price</h5>
                        <input type="text" id="pricerange">
                    </div>

                    <div class="mt-4 pt-3">
                        <h5 class="font-size-14 mb-3">Discount</h5>
                        <div class="custom-control custom-checkbox mt-2">
                            <input type="checkbox" class="custom-control-input" id="productdiscountCheck1">
                            <label class="custom-control-label" for="productdiscountCheck1">Less than 10%</label>
                        </div>
                        <div class="custom-control custom-checkbox mt-2">
                            <input type="checkbox" class="custom-control-input" id="productdiscountCheck2">
                            <label class="custom-control-label" for="productdiscountCheck2">10% or more</label>
                        </div>
                        <div class="custom-control custom-checkbox mt-2">
                            <input type="checkbox" class="custom-control-input" id="productdiscountCheck3" checked>
                            <label class="custom-control-label" for="productdiscountCheck3">20% or more</label>
                        </div>
                        <div class="custom-control custom-checkbox mt-2">
                            <input type="checkbox" class="custom-control-input" id="productdiscountCheck4">
                            <label class="custom-control-label" for="productdiscountCheck4">30% or more</label>
                        </div>
                        <div class="custom-control custom-checkbox mt-2">
                            <input type="checkbox" class="custom-control-input" id="productdiscountCheck5">
                            <label class="custom-control-label" for="productdiscountCheck5">40% or more</label>
                        </div>
                        <div class="custom-control custom-checkbox mt-2">
                            <input type="checkbox" class="custom-control-input" id="productdiscountCheck6">
                            <label class="custom-control-label" for="productdiscountCheck6">50% or more</label>
                        </div>
                    </div>

                    <div class="mt-4 pt-3">
                        <h5 class="font-size-14 mb-3">Customer Rating</h5>
                        <div>
                            <div class="custom-control custom-checkbox mt-2">
                                <input type="checkbox" class="custom-control-input" id="productratingCheck1">
                                <label class="custom-control-label" for="productratingCheck1">4 <i
                                        class="bx bx-star text-warning"></i> & Above</label>
                            </div>
                            <div class="custom-control custom-checkbox mt-2">
                                <input type="checkbox" class="custom-control-input" id="productratingCheck2">
                                <label class="custom-control-label" for="productratingCheck2">3 <i
                                        class="bx bx-star text-warning"></i> & Above</label>
                            </div>
                            <div class="custom-control custom-checkbox mt-2">
                                <input type="checkbox" class="custom-control-input" id="productratingCheck3">
                                <label class="custom-control-label" for="productratingCheck3">2 <i
                                        class="bx bx-star text-warning"></i> & Above</label>
                            </div>
                            <div class="custom-control custom-checkbox mt-2">
                                <input type="checkbox" class="custom-control-input" id="productratingCheck4">
                                <label class="custom-control-label" for="productratingCheck4">1 <i
                                        class="bx bx-star text-warning"></i></label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-12">

            <div class="row mb-3">
                <div class="col-xl-4 col-sm-6">
                    <div class="mt-2">
                        <h5>Merchandise</h5>
                    </div>
                </div>

                <div class="col-lg-8 col-sm-6">
                    <form class="mt-4 mt-sm-0 float-sm-right form-inline">
                        <div class="search-box mr-2">
                            <div class="position-relative">
                                <input type="text" class="form-control border-0" placeholder="Search...">
                                <i class="bx bx-search-alt search-icon"></i>
                            </div>
                        </div>
                        <ul class="nav nav-pills product-view-nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="#"><i class="bx bx-grid-alt"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="bx bx-list-ul"></i></a>
                            </li>
                        </ul>


                    </form>
                </div>
            </div>
            <div class="row">

                <?php $__env->startComponent('common-components.ecommerce-product'); ?>
                    <?php $__env->slot('avatarPer'); ?> - 25 % <?php $__env->endSlot(); ?>
                    <?php $__env->slot('img'); ?> img-1 <?php $__env->endSlot(); ?>
                    <?php $__env->slot('title'); ?> Half sleeve T-shirt <?php $__env->endSlot(); ?>
                    <?php $__env->slot('wrongPrice'); ?> $500 <?php $__env->endSlot(); ?>
                    <?php $__env->slot('rightPrice'); ?> $450 <?php $__env->endSlot(); ?>
                <?php echo $__env->renderComponent(); ?>

                <?php $__env->startComponent('common-components.ecommerce-product'); ?>
                    <?php $__env->slot('img'); ?> img-2 <?php $__env->endSlot(); ?>
                    <?php $__env->slot('title'); ?> Light blue T-shirt <?php $__env->endSlot(); ?>
                    <?php $__env->slot('wrongPrice'); ?> $240 <?php $__env->endSlot(); ?>
                    <?php $__env->slot('rightPrice'); ?> $225 <?php $__env->endSlot(); ?>
                <?php echo $__env->renderComponent(); ?>


                <?php $__env->startComponent('common-components.ecommerce-product'); ?>
                    <?php $__env->slot('avatarPer'); ?> - 20 % <?php $__env->endSlot(); ?>
                    <?php $__env->slot('img'); ?> img-3 <?php $__env->endSlot(); ?>
                    <?php $__env->slot('title'); ?> Blsack blue T-shirt <?php $__env->endSlot(); ?>
                    <?php $__env->slot('wrongPrice'); ?> $175 <?php $__env->endSlot(); ?>
                    <?php $__env->slot('rightPrice'); ?> $152 <?php $__env->endSlot(); ?>
                <?php echo $__env->renderComponent(); ?>

                <?php $__env->startComponent('common-components.ecommerce-product'); ?>
                    <?php $__env->slot('img'); ?> img-4 <?php $__env->endSlot(); ?>
                    <?php $__env->slot('title'); ?> Hoodie (Blue) <?php $__env->endSlot(); ?>
                    <?php $__env->slot('wrongPrice'); ?> $150 <?php $__env->endSlot(); ?>
                    <?php $__env->slot('rightPrice'); ?> $145 <?php $__env->endSlot(); ?>
                <?php echo $__env->renderComponent(); ?>
                <?php $__env->startComponent('common-components.ecommerce-product'); ?>
                    <?php $__env->slot('avatarPer'); ?> - 22 % <?php $__env->endSlot(); ?>
                    <?php $__env->slot('img'); ?> img-5 <?php $__env->endSlot(); ?>
                    <?php $__env->slot('title'); ?> Half sleeve T-Shirt <?php $__env->endSlot(); ?>
                    <?php $__env->slot('wrongPrice'); ?> $145 <?php $__env->endSlot(); ?>
                    <?php $__env->slot('rightPrice'); ?> $138 <?php $__env->endSlot(); ?>
                <?php echo $__env->renderComponent(); ?>

                <?php $__env->startComponent('common-components.ecommerce-product'); ?>
                    <?php $__env->slot('avatarPer'); ?> - 28 % <?php $__env->endSlot(); ?>
                    <?php $__env->slot('img'); ?> img-6 <?php $__env->endSlot(); ?>
                    <?php $__env->slot('title'); ?> Green color T-shirt <?php $__env->endSlot(); ?>
                    <?php $__env->slot('wrongPrice'); ?> $138 <?php $__env->endSlot(); ?>
                    <?php $__env->slot('rightPrice'); ?> $135 <?php $__env->endSlot(); ?>
                <?php echo $__env->renderComponent(); ?>

            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-12">
                    <ul class="pagination pagination-rounded justify-content-center mt-4">
                        <li class="page-item disabled">
                            <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">1</a>
                        </li>
                        <li class="page-item active">
                            <a href="#" class="page-link">2</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">3</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">4</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">5</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

    <!-- flot plugins -->
    <script src="<?php echo e(URL::asset('assets/libs/ion-rangeslider/ion-rangeslider.min.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('assets/js/pages/product-filter-range.init.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/products.blade.php ENDPATH**/ ?>