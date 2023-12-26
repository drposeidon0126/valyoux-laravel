<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Shops'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('common-components.breadcrumb'); ?>
        <?php $__env->slot('title'); ?> Shops <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_1'); ?> Ecommerce <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_2'); ?> Shops <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>


    <div class="row">

        <?php $__env->startComponent('common-components.ecommerce-shop'); ?>
            <?php $__env->slot('avatar'); ?> B <?php $__env->endSlot(); ?>
            <?php $__env->slot('title'); ?> Brendle's <?php $__env->endSlot(); ?>
            <?php $__env->slot('avatarClass'); ?> bg-soft-primary text-primary <?php $__env->endSlot(); ?>
            <?php $__env->slot('products'); ?> 112 <?php $__env->endSlot(); ?>
            <?php $__env->slot('wbalance'); ?> $13,575 <?php $__env->endSlot(); ?>
        <?php echo $__env->renderComponent(); ?>

        <?php $__env->startComponent('common-components.ecommerce-shop'); ?>
            <?php $__env->slot('avatar'); ?> T <?php $__env->endSlot(); ?>
            <?php $__env->slot('title'); ?> Tech Hifi <?php $__env->endSlot(); ?>
            <?php $__env->slot('avatarClass'); ?> bg-soft-warning text-warning <?php $__env->endSlot(); ?>
            <?php $__env->slot('products'); ?> 104 <?php $__env->endSlot(); ?>
            <?php $__env->slot('wbalance'); ?> $11,145 <?php $__env->endSlot(); ?>
        <?php echo $__env->renderComponent(); ?>

        <?php $__env->startComponent('common-components.ecommerce-shop'); ?>
            <?php $__env->slot('avatar'); ?> L <?php $__env->endSlot(); ?>
            <?php $__env->slot('title'); ?> Lafayette <?php $__env->endSlot(); ?>
            <?php $__env->slot('avatarClass'); ?> bg-soft-danger text-danger <?php $__env->endSlot(); ?>
            <?php $__env->slot('products'); ?> 126 <?php $__env->endSlot(); ?>
            <?php $__env->slot('wbalance'); ?> $12,356 <?php $__env->endSlot(); ?>
        <?php echo $__env->renderComponent(); ?>

        <?php $__env->startComponent('common-components.ecommerce-shop'); ?>
            <?php $__env->slot('avatar'); ?> P <?php $__env->endSlot(); ?>
            <?php $__env->slot('title'); ?> Packer <?php $__env->endSlot(); ?>
            <?php $__env->slot('avatarClass'); ?> bg-soft-success text-success <?php $__env->endSlot(); ?>
            <?php $__env->slot('products'); ?> 102 <?php $__env->endSlot(); ?>
            <?php $__env->slot('wbalance'); ?> $11,228 <?php $__env->endSlot(); ?>
        <?php echo $__env->renderComponent(); ?>

        <?php $__env->startComponent('common-components.ecommerce-shop'); ?>
            <?php $__env->slot('avatar'); ?> N <?php $__env->endSlot(); ?>
            <?php $__env->slot('title'); ?> Nedick's <?php $__env->endSlot(); ?>
            <?php $__env->slot('avatarClass'); ?> bg-soft-info text-info <?php $__env->endSlot(); ?>
            <?php $__env->slot('products'); ?> 96 <?php $__env->endSlot(); ?>
            <?php $__env->slot('wbalance'); ?> $9,235 <?php $__env->endSlot(); ?>
        <?php echo $__env->renderComponent(); ?>

        <?php $__env->startComponent('common-components.ecommerce-shop'); ?>
            <?php $__env->slot('avatar'); ?> H <?php $__env->endSlot(); ?>
            <?php $__env->slot('title'); ?> Hudson's <?php $__env->endSlot(); ?>
            <?php $__env->slot('avatarClass'); ?> bg-soft-dark text-dark <?php $__env->endSlot(); ?>
            <?php $__env->slot('products'); ?> 120 <?php $__env->endSlot(); ?>
            <?php $__env->slot('wbalance'); ?> $14,794 <?php $__env->endSlot(); ?>
        <?php echo $__env->renderComponent(); ?>

        <?php $__env->startComponent('common-components.ecommerce-shop'); ?>
            <?php $__env->slot('avatar'); ?> T <?php $__env->endSlot(); ?>
            <?php $__env->slot('title'); ?> Tech Hifi <?php $__env->endSlot(); ?>
            <?php $__env->slot('avatarClass'); ?> bg-soft-dark text-dark <?php $__env->endSlot(); ?>
            <?php $__env->slot('products'); ?> 104 <?php $__env->endSlot(); ?>
            <?php $__env->slot('wbalance'); ?> $11,145 <?php $__env->endSlot(); ?>
        <?php echo $__env->renderComponent(); ?>

        <?php $__env->startComponent('common-components.ecommerce-shop'); ?>
            <?php $__env->slot('avatar'); ?> B <?php $__env->endSlot(); ?>
            <?php $__env->slot('title'); ?> Brendle's <?php $__env->endSlot(); ?>
            <?php $__env->slot('avatarClass'); ?> bg-soft-primary text-primary <?php $__env->endSlot(); ?>
            <?php $__env->slot('products'); ?> 112 <?php $__env->endSlot(); ?>
            <?php $__env->slot('wbalance'); ?> $11,145 <?php $__env->endSlot(); ?>
        <?php echo $__env->renderComponent(); ?>

        <?php $__env->startComponent('common-components.ecommerce-shop'); ?>
            <?php $__env->slot('avatar'); ?> L <?php $__env->endSlot(); ?>
            <?php $__env->slot('title'); ?> Lafayette <?php $__env->endSlot(); ?>
            <?php $__env->slot('avatarClass'); ?> bg-soft-success text-success <?php $__env->endSlot(); ?>
            <?php $__env->slot('products'); ?> 112 <?php $__env->endSlot(); ?>
            <?php $__env->slot('wbalance'); ?> $11,145 <?php $__env->endSlot(); ?>
        <?php echo $__env->renderComponent(); ?>
    </div>
    <!--  end row -->


    <div class="row">
        <div class="col-12">
            <div class="text-center my-3">
                <a href="javascript:void(0);" class="text-success"><i
                        class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Load more </a>
            </div>
        </div> <!-- end col-->
    </div>
    <!-- end row -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/shops.blade.php ENDPATH**/ ?>