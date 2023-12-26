<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Buy_Sell'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('common-components.breadcrumb'); ?>
        <?php $__env->slot('title'); ?> Payment Method <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_1'); ?> Crypto <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_2'); ?> Payment Method <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="float-right">
                        <div class="dropdown">
                            <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-wallet mr-1"></i> <span
                                    class="d-none d-sm-inline-block">Wallet Balance <i
                                        class="mdi mdi-chevron-down"></i></span></button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-md">
                                <div class="dropdown-item-text">
                                    <div>
                                        <p class="text-muted mb-2">Available Balance</p>
                                        <h5 class="mb-0">$ 9148.23</h5>
                                    </div>
                                </div>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="#">
                                    BTC : <span class="float-right">1.02356</span>
                                </a>
                                <a class="dropdown-item" href="#">
                                    ETH : <span class="float-right">0.04121</span>
                                </a>
                                <a class="dropdown-item" href="#">
                                    LTC : <span class="float-right">0.00356</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item text-primary text-center" href="#">
                                    Learn more
                                </a>
                            </div>
                        </div>
                    </div>
                    <h4 class="card-title mb-4">Crypto Payment Accepted Only</h4>
                    <div class="crypto-buy-sell-nav">
                        <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#buy" role="tab">
                                    Buy
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#sell" role="tab">
                                    Sell
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content crypto-buy-sell-nav-content p-4">
                            <div class="tab-pane active" id="buy" role="tabpanel">
                                <form>
                                    <div class="mb-2">
                                        <label>Currency :</label>

                                        <div class="row">
                                            <div class="col-xl-2 col-sm-4">
                                                <div class="mb-3">
                                                    <label class="card-radio-label mb-2">
                                                        <input type="radio" name="currency" id="buycurrencyoption1"
                                                            class="card-radio-input" checked>

                                                        <div class="card-radio">
                                                            <div>
                                                                <i
                                                                    class="mdi mdi-bitcoin font-size-24 text-warning align-middle mr-2"></i>
                                                                <span>Bitcoin</span>
                                                            </div>
                                                        </div>
                                                    </label>

                                                    <div>
                                                        <p class="text-muted mb-1">Current price :</p>
                                                        <h5 class="font-size-16">0.00016 BTC</h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-2 col-sm-4">
                                                <div class="mb-3">
                                                    <label class="card-radio-label mb-2">
                                                        <input type="radio" name="currency" id="buycurrencyoption2"
                                                            class="card-radio-input">

                                                        <div class="card-radio">
                                                            <div>
                                                                <i
                                                                    class="mdi mdi-ethereum font-size-24 text-primary align-middle mr-2"></i>
                                                                <span>Ethereum</span>
                                                            </div>
                                                        </div>
                                                    </label>

                                                    <div>
                                                        <p class="text-muted mb-1">Current price :</p>
                                                        <h5 class="font-size-16">0.0073 ETH</h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-2 col-sm-4">
                                                <div class="mb-3">
                                                    <label class="card-radio-label mb-2">
                                                        <input type="radio" name="currency" id="buycurrencyoption3"
                                                            class="card-radio-input">

                                                        <div class="card-radio">
                                                            <div>
                                                                <i
                                                                    class="mdi mdi-litecoin font-size-24 text-info align-middle mr-2"></i>
                                                                <span>USDc</span>
                                                            </div>
                                                        </div>
                                                    </label>

                                                    <div>
                                                        <p class="text-muted mb-1">Current price :</p>
                                                        <h5 class="font-size-16">0.025 LTC</h5>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="mb-2">
                                        <label>Payment method :</label>

                                        <div class="row">
                                            <div class="col-xl-2 col-sm-4">
                                                <label class="card-radio-label mb-3">
                                                    <input type="radio" name="pay-method" id="pay-methodoption1"
                                                        class="card-radio-input">

                                                    <div class="card-radio">
                                                        <i
                                                            class="fab fa-cc-mastercard font-size-24 text-primary align-middle mr-2"></i>

                                                        <span>Credit / Debit Card</span>
                                                    </div>
                                                </label>
                                            </div>


                                            <div class="col-xl-2 col-sm-4">
                                                <label class="card-radio-label mb-3">
                                                    <input type="radio" name="pay-method" id="pay-methodoption3"
                                                        class="card-radio-input" checked>

                                                    <div class="card-radio">
                                                        <i
                                                            class="fab fa-cc-paypal font-size-24 text-primary align-middle mr-2"></i>

                                                        <span>Paypal</span>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Add value :</label>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="input-group mb-2 currency-value">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Bitcoin</span>
                                                    </div>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="input-group mb-2">
                                                    <input type="text" class="form-control text-sm-right">

                                                    <div class="input-group-append">
                                                        <span class="input-group-text">USD Amount</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Wallet Address :</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="text-center mt-4">
                                        <button type="button" class="btn btn-success">Buy Crypto currency</button>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane" id="sell" role="tabpanel">
                                <form>
                                    <div class="mb-2">
                                        <label>Currency :</label>

                                        <div class="row">
                                            <div class="col-xl-2 col-sm-4">
                                                <div class="mb-3">
                                                    <label class="card-radio-label mb-2">
                                                        <input type="radio" name="currency" id="sellcurrencyoption1"
                                                            class="card-radio-input" checked>

                                                        <div class="card-radio">
                                                            <div>
                                                                <i
                                                                    class="mdi mdi-bitcoin font-size-24 text-warning align-middle mr-2"></i>
                                                                <span>Bitcoin</span>
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <div>
                                                        <p class="text-muted mb-1">Current price :</p>
                                                        <h5 class="font-size-16">0.00016 BTC</h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-2 col-sm-4">
                                                <div class="mb-3">
                                                    <label class="card-radio-label mb-2">
                                                        <input type="radio" name="currency" id="sellcurrencyoption2"
                                                            class="card-radio-input">

                                                        <div class="card-radio">
                                                            <div>
                                                                <i
                                                                    class="mdi mdi-ethereum font-size-24 text-primary align-middle mr-2"></i>
                                                                <span>Ethereum</span>
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <div>
                                                        <p class="text-muted mb-1">Current price :</p>
                                                        <h5 class="font-size-16">0.0073 ETH</h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-2 col-sm-4">
                                                <div class="mb-3">
                                                    <label class="card-radio-label mb-2">
                                                        <input type="radio" name="currency" id="sellcurrencyoption3"
                                                            class="card-radio-input">

                                                        <div class="card-radio">
                                                            <div>
                                                                <i
                                                                    class="mdi mdi-litecoin font-size-24 text-info align-middle mr-2"></i>
                                                                <span>litecoin</span>
                                                            </div>

                                                        </div>
                                                    </label>

                                                    <div>
                                                        <p class="text-muted mb-1">Current price :</p>
                                                        <h5 class="font-size-16">0.025 LTC</h5>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label>Email :</label>
                                        <input type="email" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Add value :</label>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="input-group mb-2 currency-value">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Crypto value</span>
                                                    </div>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="input-group mb-2">
                                                    <input type="text" class="form-control text-sm-right">

                                                    <div class="input-group-append">
                                                        <span class="input-group-text">USD Amount</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Wallet Address :</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="text-center mt-4">
                                        <button type="button" class="btn btn-danger">Sell Crypto currency</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- end row -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/crypto-buy-sell.blade.php ENDPATH**/ ?>