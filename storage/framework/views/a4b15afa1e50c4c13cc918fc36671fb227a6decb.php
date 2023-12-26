  <div class="col-xl-4 col-sm-6">
      <div class="card">
          <div class="row">
              <div class="col-xl-5">
                  <div class="text-center p-4 border-right">
                      <div class="avatar-sm mx-auto mb-4">
                          <span class="avatar-title rounded-circle <?php echo e($avatarClass); ?> font-size-16">
                              <?php echo e($avatar); ?>

                          </span>
                      </div>
                      <h5 class="text-truncate"><?php echo e($title); ?></h5>
                  </div>
              </div>

              <div class="col-xl-7">
                  <div class="p-4 text-center text-xl-left">
                      <div class="row">
                          <div class="col-sm-6">
                              <div>
                                  <p class="text-muted mb-2 text-truncate">Products</p>
                                  <h5><?php echo e($products); ?></h5>
                              </div>
                          </div>
                          <div class="col-sm-6">
                              <div>
                                  <p class="text-muted mb-2 text-truncate">Wallet Balance</p>
                                  <h5><?php echo e($wbalance); ?></h5>
                              </div>
                          </div>
                      </div>
                      <div class="mt-4">
                          <a href="#">See profile</a>
                      </div>
                  </div>

              </div>
          </div>
      </div>
  </div><?php /**PATH /var/www/testvps-main/resources/views/common-components/ecommerce-shop.blade.php ENDPATH**/ ?>