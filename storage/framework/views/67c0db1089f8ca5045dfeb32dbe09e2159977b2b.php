<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Saas'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('common-components.breadcrumb'); ?>
        <?php $__env->slot('title'); ?> Dashboard <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_1'); ?> Welcome to Valyou X Dashboard <?php $__env->endSlot(); ?>
        <?php $__env->slot('li_2'); ?> Saas <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body bg-black">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="media">
                                <div class="mr-3">
                                    <img src="<?php echo e(isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/avatar-1.jpg')); ?>" alt=""
                                        class="avatar-md rounded-circle img-thumbnail">
                                </div>
                                <div class="media-body align-self-center">
                                    <div class="text-muted">
                                        <h2 class="mb-1 ml-4"><?php echo e(auth()->user()->first_name.' '.auth()->user()->last_name); ?></h2>
                                        <p class="mb-2 ml-4"><?php echo e(auth()->user()->email); ?></p>
                                        <img src="<?php echo e(asset('assets/images/valyoux/valyouxaccountverification_tick.svg')); ?>" alt="" height="20">
                                        <span class="mb-0">Artist</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 align-self-center">
                            <div class="text-lg-center mt-4 mt-lg-0">
                                <div class="row">
                                    <div class="col-6">
                                        <div>
                                            <p class="text-muted text-truncate mb-2">Stock Price</p>
                                            <h5 class="mb-0">$58.60</h5>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div>
                                            <p class="text-muted text-truncate mb-2">Market Value</p>
                                            <h5 class="mb-0">$2,455,578.60</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 d-none d-lg-block">
                            <div class="clearfix  mt-4 mt-lg-0">
                                <div class="dropdown float-right">
                                    <button class="btn btn-primary dropdown-toggle btn-pink" type="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-user-plus align-middle mr-1"></i> Follow
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 align-self-center">
                            <div class="text-lg-center mt-4 mt-lg-0">
                                <div class="row">
                                    <div class="col-4">
                                        <div>
                                            <p class="text-muted text-truncate mb-2">Artist</p>
                                            <h5 class="mb-0">0</h5>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div>
                                            <p class="text-muted text-truncate mb-2">Investor</p>
                                            <h5 class="mb-0">0</h5>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div>
                                            <p class="text-muted text-truncate mb-2">Business</p>
                                            <h5 class="mb-0">0</h5>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end row -->
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-12">
            <div class="row">


                <?php $__env->startComponent('common-components.saas-widget'); ?>
                    <?php $__env->slot('icon'); ?> bx bx-copy-alt font-size-24 <?php $__env->endSlot(); ?>
                    <?php $__env->slot('title'); ?> Currency Exchange <?php $__env->endSlot(); ?>
                    <?php $__env->slot('price'); ?> 1,452 <?php $__env->endSlot(); ?>
                    <?php $__env->slot('bClass'); ?> badge badge-soft-success font-size-12 <?php $__env->endSlot(); ?>
                    <?php $__env->slot('bValue'); ?> + 0.2% <?php $__env->endSlot(); ?>
                <?php echo $__env->renderComponent(); ?>

                <?php $__env->startComponent('common-components.saas-widget'); ?>
                    <?php $__env->slot('icon'); ?> bx bx-archive-in <?php $__env->endSlot(); ?>
                    <?php $__env->slot('title'); ?> Revenue <?php $__env->endSlot(); ?>
                    <?php $__env->slot('price'); ?> $35, 723 <?php $__env->endSlot(); ?>
                    <?php $__env->slot('bClass'); ?> badge badge-soft-success font-size-12 <?php $__env->endSlot(); ?>
                    <?php $__env->slot('bValue'); ?> + 0.2% <?php $__env->endSlot(); ?>
                <?php echo $__env->renderComponent(); ?>

                <?php $__env->startComponent('common-components.saas-widget'); ?>
                    <?php $__env->slot('icon'); ?> bx bx-purchase-tag-alt <?php $__env->endSlot(); ?>
                    <?php $__env->slot('title'); ?> VXD Market Cap <?php $__env->endSlot(); ?>
                    <?php $__env->slot('price'); ?> $2,423,456,416.20 <?php $__env->endSlot(); ?>
                    <?php $__env->slot('bClass'); ?> badge badge-soft-warning font-size-12 <?php $__env->endSlot(); ?>
                    <?php $__env->slot('bValue'); ?> + 0% <?php $__env->endSlot(); ?>
                <?php echo $__env->renderComponent(); ?>
                <?php $__env->startComponent('common-components.saas-widget'); ?>
                    <?php $__env->slot('icon'); ?> bx bx-purchase-tag-alt <?php $__env->endSlot(); ?>
                    <?php $__env->slot('title'); ?> Average Price <?php $__env->endSlot(); ?>
                    <?php $__env->slot('price'); ?> $ 16.2 <?php $__env->endSlot(); ?>
                    <?php $__env->slot('bClass'); ?> badge badge-soft-warning font-size-12 <?php $__env->endSlot(); ?>
                    <?php $__env->slot('bValue'); ?> + 0% <?php $__env->endSlot(); ?>
                <?php echo $__env->renderComponent(); ?>

            </div>
            <!-- end row -->
        </div>
    </div>

    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-right">
                            <div class="input-group input-group-sm">
                                <select class="custom-select custom-select-sm">
                                    <option selected>Jan</option>
                                    <option value="1">Dec</option>
                                    <option value="2">Nov</option>
                                    <option value="3">Oct</option>
                                </select>
                                <div class="input-group-append">
                                    <label class="input-group-text">Month</label>
                                </div>
                            </div>
                        </div>
                        <h4 class="card-title mb-4">Earning</h4>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="text-muted">
                                <div class="mb-4">
                                    <p>This month</p>
                                    <h4>$2453.35</h4>
                                    <div><span class="badge badge-soft-success font-size-12 mr-1"> + 0.2% </span> From
                                        previous period</div>
                                </div>

                                <div>
                                    <a href="#" class="btn btn-primary waves-effect waves-light btn-sm">View Details <i
                                            class="mdi mdi-chevron-right ml-1"></i></a>
                                </div>

                                <div class="mt-4">
                                    <p class="mb-2">Last month</p>
                                    <h5>$2281.04</h5>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div id="line-chart" class="apex-charts" dir="ltr"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Sales Analytics</h4>

                    <div>
                        <div id="donut-chart" class="apex-charts"></div>
                    </div>

                    <div class="text-center text-muted">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-4">
                                    <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-primary mr-1"></i> Product A
                                    </p>
                                    <h5>$ 2,132</h5>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-4">
                                    <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-success mr-1"></i> Product B
                                    </p>
                                    <h5>$ 1,763</h5>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-4">
                                    <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-danger mr-1"></i> Product C
                                    </p>
                                    <h5>$ 973</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-right">
                            <div class="input-group input-group-sm">
                                <select class="custom-select custom-select-sm">
                                    <option selected>Jan</option>
                                    <option value="1">Dec</option>
                                    <option value="2">Nov</option>
                                    <option value="3">Oct</option>
                                </select>
                                <div class="input-group-append">
                                    <label class="input-group-text">Month</label>
                                </div>
                            </div>
                        </div>
                        <h4 class="card-title mb-4">Top Selling product</h4>
                    </div>

                    <div class="text-muted text-center">
                        <p class="mb-2">Product A</p>
                        <h4>$ 6385</h4>
                        <p class="mt-4 mb-0"><span class="badge badge-soft-success font-size-11 mr-2"> 0.6% <i
                                    class="mdi mdi-arrow-up"></i> </span> From previous period</p>
                    </div>

                    <div class="table-responsive mt-4">
                        <table class="table table-centered mb-0">
                            <tbody>
                                <tr>
                                    <td>
                                        <h5 class="font-size-14 mb-1">Product A</h5>
                                        <p class="text-muted mb-0">Neque quis est</p>
                                    </td>

                                    <td>
                                        <div id="radialchart-1" class="apex-charts"></div>
                                    </td>
                                    <td>
                                        <p class="text-muted mb-1">Sales</p>
                                        <h5 class="mb-0">37 %</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5 class="font-size-14 mb-1">Product B</h5>
                                        <p class="text-muted mb-0">Quis autem iure</p>
                                    </td>

                                    <td>
                                        <div id="radialchart-2" class="apex-charts"></div>
                                    </td>
                                    <td>
                                        <p class="text-muted mb-1">Sales</p>
                                        <h5 class="mb-0">72 %</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5 class="font-size-14 mb-1">Product C</h5>
                                        <p class="text-muted mb-0">Sed aliquam mauris.</p>
                                    </td>

                                    <td>
                                        <div id="radialchart-3" class="apex-charts"></div>
                                    </td>
                                    <td>
                                        <p class="text-muted mb-1">Sales</p>
                                        <h5 class="mb-0">54 %</h5>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Tasks</h4>

                    <ul class="nav nav-pills bg-light rounded">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">In Process</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Upcoming</a>
                        </li>
                    </ul>

                    <div class="mt-4">
                        <div data-simplebar style="max-height: 250px;">

                            <div class="table-responsive">
                                <table class="table table-nowrap table-centered table-hover mb-0">
                                    <tbody>
                                        <tr>
                                            <td style="width: 50px;">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1"
                                                        checked>
                                                    <label class="custom-control-label" for="customCheck1"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="text-truncate font-size-14 mb-1"><a href="#"
                                                        class="text-dark">Valyou X Dashboard</a></h5>
                                                <p class="text-muted mb-0">Assigned to Mark</p>
                                            </td>
                                            <td style="width: 90px;">
                                                <div>
                                                    <ul class="list-inline mb-0 font-size-16">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="text-success p-1"><i
                                                                    class="bx bxs-edit-alt"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#" class="text-danger p-1"><i
                                                                    class="bx bxs-trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                    <label class="custom-control-label" for="customCheck2"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="text-truncate font-size-14 mb-1"><a href="#"
                                                        class="text-dark">New Landing UI</a></h5>
                                                <p class="text-muted mb-0">Assigned to Team A</p>
                                            </td>
                                            <td>
                                                <div>
                                                    <ul class="list-inline mb-0 font-size-16">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="text-success p-1"><i
                                                                    class="bx bxs-edit-alt"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#" class="text-danger p-1"><i
                                                                    class="bx bxs-trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                    <label class="custom-control-label" for="customCheck3"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="text-truncate font-size-14 mb-1"><a href="#"
                                                        class="text-dark">Brand logo design</a></h5>
                                                <p class="text-muted mb-0">Assigned to Janis</p>
                                            </td>
                                            <td>
                                                <div>
                                                    <ul class="list-inline mb-0 font-size-16">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="text-success p-1"><i
                                                                    class="bx bxs-edit-alt"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#" class="text-danger p-1"><i
                                                                    class="bx bxs-trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                    <label class="custom-control-label" for="customCheck4"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="text-truncate font-size-14 mb-1"><a href="#"
                                                        class="text-dark">Blog Template UI</a></h5>
                                                <p class="text-muted mb-0">Assigned to Dianna</p>
                                            </td>
                                            <td>
                                                <div>
                                                    <ul class="list-inline mb-0 font-size-16">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="text-success p-1"><i
                                                                    class="bx bxs-edit-alt"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#" class="text-danger p-1"><i
                                                                    class="bx bxs-trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                    <label class="custom-control-label" for="customCheck5"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="text-truncate font-size-14 mb-1"><a href="#"
                                                        class="text-dark">Multipurpose Landing</a></h5>
                                                <p class="text-muted mb-0">Assigned to Team B</p>
                                            </td>
                                            <td>
                                                <div>
                                                    <ul class="list-inline mb-0 font-size-16">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="text-success p-1"><i
                                                                    class="bx bxs-edit-alt"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#" class="text-danger p-1"><i
                                                                    class="bx bxs-trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                    <label class="custom-control-label" for="customCheck6"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="text-truncate font-size-14 mb-1"><a href="#"
                                                        class="text-dark">Redesign - Landing page</a></h5>
                                                <p class="text-muted mb-0">Assigned to Jerry</p>
                                            </td>
                                            <td>
                                                <div>
                                                    <ul class="list-inline mb-0 font-size-16">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="text-success p-1"><i
                                                                    class="bx bxs-edit-alt"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#" class="text-danger p-1"><i
                                                                    class="bx bxs-trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck7">
                                                    <label class="custom-control-label" for="customCheck7"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="text-truncate font-size-14 mb-1"><a href="#"
                                                        class="text-dark">Skote Crypto Dashboard</a></h5>
                                                <p class="text-muted mb-0">Assigned to Eric</p>
                                            </td>
                                            <td>
                                                <div>
                                                    <ul class="list-inline mb-0 font-size-16">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="text-success p-1"><i
                                                                    class="bx bxs-edit-alt"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#" class="text-danger p-1"><i
                                                                    class="bx bxs-trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer bg-transparent border-top">
                    <div class="text-center">
                        <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light"> Add new Task</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card">
                <div class="card-body border-bottom">
                    <div class="row">
                        <div class="col-md-4 col-9">
                            <h5 class="font-size-15 mb-1">Steven Franklin</h5>
                            <p class="text-muted mb-0"><i class="mdi mdi-circle text-success align-middle mr-1"></i> Active
                                now</p>
                        </div>
                        <div class="col-md-8 col-3">
                            <ul class="list-inline user-chat-nav text-right mb-0">
                                <li class="list-inline-item d-none d-sm-inline-block">
                                    <div class="dropdown">
                                        <button class="btn nav-btn dropdown-toggle" type="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-search-alt-2"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-md">
                                            <form class="p-3">
                                                <div class="form-group m-0">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Search ..."
                                                            aria-label="Recipient's username">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-primary" type="submit"><i
                                                                    class="mdi mdi-magnify"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-inline-item  d-none d-sm-inline-block">
                                    <div class="dropdown">
                                        <button class="btn nav-btn dropdown-toggle" type="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-cog"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">View Profile</a>
                                            <a class="dropdown-item" href="#">Clear chat</a>
                                            <a class="dropdown-item" href="#">Muted</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="dropdown">
                                        <button class="btn nav-btn dropdown-toggle" type="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else</a>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body pb-0">
                    <div>
                        <div class="chat-conversation">
                            <ul class="list-unstyled" data-simplebar style="max-height: 260px;">
                                <li>
                                    <div class="chat-day-title">
                                        <span class="title">Today</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="conversation-list">
                                        <div class="dropdown">

                                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Copy</a>
                                                <a class="dropdown-item" href="#">Save</a>
                                                <a class="dropdown-item" href="#">Forward</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                        <div class="ctext-wrap">
                                            <div class="conversation-name">Steven Franklin</div>
                                            <p>
                                                Hello!
                                            </p>
                                            <p class="chat-time mb-0"><i class="bx bx-time-five align-middle mr-1"></i>
                                                10:00</p>
                                        </div>

                                    </div>
                                </li>

                                <li class="right">
                                    <div class="conversation-list">
                                        <div class="dropdown">

                                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Copy</a>
                                                <a class="dropdown-item" href="#">Save</a>
                                                <a class="dropdown-item" href="#">Forward</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                        <div class="ctext-wrap">
                                            <div class="conversation-name"><?php echo e(auth()->user()->first_name.' '.auth()->user()->last_name); ?></div>
                                            <p>
                                                Hi, How are you? What about our next meeting?
                                            </p>

                                            <p class="chat-time mb-0"><i class="bx bx-time-five align-middle mr-1"></i>
                                                10:02</p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="conversation-list">
                                        <div class="dropdown">

                                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Copy</a>
                                                <a class="dropdown-item" href="#">Save</a>
                                                <a class="dropdown-item" href="#">Forward</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                        <div class="ctext-wrap">
                                            <div class="conversation-name">Steven Franklin</div>
                                            <p>
                                                Yeah everything is fine
                                            </p>

                                            <p class="chat-time mb-0"><i class="bx bx-time-five align-middle mr-1"></i>
                                                10:06</p>
                                        </div>

                                    </div>
                                </li>

                                <li class="last-chat">
                                    <div class="conversation-list">
                                        <div class="dropdown">

                                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Copy</a>
                                                <a class="dropdown-item" href="#">Save</a>
                                                <a class="dropdown-item" href="#">Forward</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                        <div class="ctext-wrap">
                                            <div class="conversation-name">Steven Franklin</div>
                                            <p>& Next meeting tomorrow 10.00AM</p>
                                            <p class="chat-time mb-0"><i class="bx bx-time-five align-middle mr-1"></i>
                                                10:06</p>
                                        </div>

                                    </div>
                                </li>

                                <li class=" right">
                                    <div class="conversation-list">
                                        <div class="dropdown">

                                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Copy</a>
                                                <a class="dropdown-item" href="#">Save</a>
                                                <a class="dropdown-item" href="#">Forward</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                        <div class="ctext-wrap">
                                            <div class="conversation-name"><?php echo e(auth()->user()->first_name.' '.auth()->user()->last_name); ?></div>
                                            <p>
                                                Wow that's great
                                            </p>

                                            <p class="chat-time mb-0"><i class="bx bx-time-five align-middle mr-1"></i>
                                                10:07</p>
                                        </div>
                                    </div>
                                </li>


                            </ul>
                        </div>

                    </div>
                </div>

                <div class="p-3 chat-input-section">
                    <div class="row">
                        <div class="col">
                            <div class="position-relative">
                                <input type="text" class="form-control rounded chat-input" placeholder="Enter Message...">
                                <div class="chat-input-links">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top"
                                                title="Emoji"><i class="mdi mdi-emoticon-happy-outline"></i></a></li>
                                        <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top"
                                                title="Images"><i class="mdi mdi-file-image-outline"></i></a></li>
                                        <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top"
                                                title="Add Files"><i class="mdi mdi-file-document-outline"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary chat-send w-md waves-effect waves-light"><span
                                    class="d-none d-sm-inline-block mr-2">Send</span> <i class="mdi mdi-send"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- end row -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <!-- apexcharts -->
    <script src="<?php echo e(URL::asset('assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>

    <!-- crypto dash init js -->
    <script src="<?php echo e(URL::asset('assets/js/pages/saas-dashboard.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/dashboard-saas.blade.php ENDPATH**/ ?>