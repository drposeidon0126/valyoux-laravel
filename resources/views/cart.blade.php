@extends('layouts.master')

@section('title') @lang('translation.Cart') @endsection

@section('css')
    <link href="{{ 'assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css' }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('common-components.breadcrumb')
        @slot('title') Cart @endslot
        @slot('li_1') Ecommerce @endslot
        @slot('li_2') Cart @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-centered mb-0 table-nowrap">
                            <thead class="thead-light">
                                <tr>
                                    <th>Product</th>
                                    <th>Product Desc</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th colspan="2">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="assets/images/product/img-1.png" alt="product-img" title="product-img"
                                            class="avatar-md" />
                                    </td>
                                    <td>
                                        <h5 class="font-size-14 text-truncate"><a href="ecommerce-product-detail"
                                                class="text-dark">Half sleeve T-shirt</a></h5>
                                        <p class="mb-0">Color : <span class="font-weight-medium">Maroon</span></p>
                                    </td>
                                    <td>
                                        $ 450
                                    </td>
                                    <td>
                                        <div style="width: 120px;">
                                            <input type="text" value="02" name="demo_vertical">
                                        </div>
                                    </td>
                                    <td>
                                        $ 900
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon text-danger"> <i
                                                class="mdi mdi-trash-can font-size-18"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="assets/images/product/img-2.png" alt="product-img" title="product-img"
                                            class="avatar-md" />
                                    </td>
                                    <td>
                                        <h5 class="font-size-14 text-truncate"><a href="ecommerce-product-detail"
                                                class="text-dark">Light blue T-shirt</a></h5>
                                        <p class="mb-0">Color : <span class="font-weight-medium">Light blue</span></p>
                                    </td>
                                    <td>
                                        $ 225
                                    </td>
                                    <td>
                                        <div style="width: 120px;">
                                            <input type="text" value="01" name="demo_vertical">
                                        </div>
                                    </td>
                                    <td>
                                        $ 225
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon text-danger"> <i
                                                class="mdi mdi-trash-can font-size-18"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="assets/images/product/img-3.png" alt="product-img" title="product-img"
                                            class="avatar-md" />
                                    </td>
                                    <td>
                                        <h5 class="font-size-14 text-truncate"><a href="ecommerce-product-detail"
                                                class="text-dark">Black Color T-shirt</a></h5>
                                        <p class="mb-0">Color : <span class="font-weight-medium">Black</span></p>
                                    </td>
                                    <td>
                                        $ 152
                                    </td>
                                    <td>
                                        <div style="width: 120px;">
                                            <input type="text" value="02" name="demo_vertical">
                                        </div>
                                    </td>
                                    <td>
                                        $ 304
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon text-danger"> <i
                                                class="mdi mdi-trash-can font-size-18"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="assets/images/product/img-4.png" alt="product-img" title="product-img"
                                            class="avatar-md" />
                                    </td>
                                    <td>
                                        <h5 class="font-size-14 text-truncate"><a href="ecommerce-product-detail"
                                                class="text-dark">Hoodie (Blue)</a></h5>
                                        <p class="mb-0">Color : <span class="font-weight-medium">Blue</span></p>
                                    </td>
                                    <td>
                                        $ 145
                                    </td>
                                    <td>
                                        <div style="width: 120px;">
                                            <input type="text" value="02" name="demo_vertical">
                                        </div>
                                    </td>
                                    <td>
                                        $ 290
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon text-danger"> <i
                                                class="mdi mdi-trash-can font-size-18"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="assets/images/product/img-5.png" alt="product-img" title="product-img"
                                            class="avatar-md" />
                                    </td>
                                    <td>
                                        <h5 class="font-size-14 text-truncate"><a href="ecommerce-product-detail"
                                                class="text-dark">Half sleeve T-Shirt</a></h5>
                                        <p class="mb-0">Color : <span class="font-weight-medium">Light orange</span></p>
                                    </td>
                                    <td>
                                        $ 138
                                    </td>
                                    <td>
                                        <div style="width: 120px;">
                                            <input type="text" value="01" name="demo_vertical">
                                        </div>
                                    </td>
                                    <td>
                                        $ 138
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon text-danger"> <i
                                                class="mdi mdi-trash-can font-size-18"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="assets/images/product/img-6.png" alt="product-img" title="product-img"
                                            class="avatar-md" />
                                    </td>
                                    <td>
                                        <h5 class="font-size-14 text-truncate"><a href="ecommerce-product-detail"
                                                class="text-dark">Green color T-shirt</a></h5>
                                        <p class="mb-0">Color : <span class="font-weight-medium">Green</span></p>
                                    </td>
                                    <td>
                                        $ 152
                                    </td>
                                    <td>
                                        <div style="width: 120px;">
                                            <input type="text" value="02" name="demo_vertical">
                                        </div>
                                    </td>
                                    <td>
                                        $ 304
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon text-danger"> <i
                                                class="mdi mdi-trash-can font-size-18"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-6"> 
                            <a href="products" class="btn btn-secondary">
                                <i class="mdi mdi-arrow-left mr-1"></i> Continue Shopping </a>
                        </div> <!-- end col -->
                        <div class="col-sm-6">
                            <div class="text-sm-right mt-2 mt-sm-0">
                                <a href="checkout" class="btn btn-success">
                                    <i class="mdi mdi-cart-arrow-right mr-1"></i> Checkout </a>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row-->
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Card Details</h5>

                    <div class="card bg-primary text-white visa-card mb-0">
                        <div class="card-body">
                            <div>
                                <i class="bx bxl-visa visa-pattern"></i>

                                <div class="float-right">
                                    <i class="bx bxl-visa visa-logo display-3"></i>
                                </div>

                                <div>
                                    <i class="bx bx-chip h1 text-warning"></i>
                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col-4">
                                    <p>
                                        <i class="fas fa-star-of-life m-1"></i>
                                        <i class="fas fa-star-of-life m-1"></i>
                                        <i class="fas fa-star-of-life m-1"></i>
                                    </p>
                                </div>
                                <div class="col-4">
                                    <p>
                                        <i class="fas fa-star-of-life m-1"></i>
                                        <i class="fas fa-star-of-life m-1"></i>
                                        <i class="fas fa-star-of-life m-1"></i>
                                    </p>
                                </div>
                                <div class="col-4">
                                    <p>
                                        <i class="fas fa-star-of-life m-1"></i>
                                        <i class="fas fa-star-of-life m-1"></i>
                                        <i class="fas fa-star-of-life m-1"></i>
                                    </p>
                                </div>
                            </div>

                            <div class="mt-5">
                                <h5 class="text-white float-right mb-0">12/22</h5>
                                <h5 class="text-white mb-0">Fredrick Taylor</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">Order Summary</h4>

                    <div class="table-responsive">
                        <table class="table mb-0">
                            <tbody>
                                <tr>
                                    <td>Grand Total :</td>
                                    <td>$ 1,857</td>
                                </tr>
                                <tr>
                                    <td>Discount : </td>
                                    <td>- $ 157</td>
                                </tr>
                                <tr>
                                    <td>Shipping Charge :</td>
                                    <td>$ 25</td>
                                </tr>
                                <tr>
                                    <td>Estimated Tax : </td>
                                    <td>$ 19.22</td>
                                </tr>
                                <tr>
                                    <th>Total :</th>
                                    <th>$ 1744.22</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- end table-responsive -->
                </div>
            </div>
            <!-- end card -->
        </div>
    </div>
    <!-- end row -->

@endsection

@section('script')

    <!-- Bootrstrap touchspin -->
    <script src="{{ URL::asset('assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js') }}"></script>

    <script src="{{ URL::asset('assets/js/pages/ecommerce-cart.init.js') }}"></script>

@endsection
