@extends('layouts.master')

@section('title') @lang('translation.Invoice_Detail') @endsection

@section('content')

    @component('common-components.breadcrumb')
        @slot('title') Invoice Detail @endslot
        @slot('li_1') Invoices @endslot
        @slot('li_2') Detail @endslot
    @endcomponent


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="invoice-title">
                        <h4 class="float-right font-size-16">Order # 12345</h4>
                        <div class="mb-4">
                            <img src="assets/images/logo-dark.png" alt="logo" height="20" />
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <address>
                                <strong>Billed To:</strong><br>
                                John Smith<br>
                                1234 Main<br>
                                Apt. 4B<br>
                                Springfield, ST 54321
                            </address>
                        </div>
                        <div class="col-sm-6 text-sm-right">
                            <address class="mt-2 mt-sm-0">
                                <strong>Shipped To:</strong><br>
                                Kenny Rigdon<br>
                                1234 Main<br>
                                Apt. 4B<br>
                                Springfield, ST 54321
                            </address>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mt-3">
                            <address>
                                <strong>Payment Method:</strong><br>
                                Visa ending **** 4242<br>
                                jsmith@email.com
                            </address>
                        </div>
                        <div class="col-sm-6 mt-3 text-sm-right">
                            <address>
                                <strong>Order Date:</strong><br>
                                October 16, 2019<br><br>
                            </address>
                        </div>
                    </div>
                    <div class="py-2 mt-3">
                        <h3 class="font-size-15 font-weight-bold">Order summary</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-nowrap">
                            <thead>
                                <tr>
                                    <th style="width: 70px;">No.</th>
                                    <th>Item</th>
                                    <th class="text-right">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>Skote - Bootstrap 4 Admin Dashboard</td>
                                    <td class="text-right">$499.00</td>
                                </tr>

                                <tr>
                                    <td>02</td>
                                    <td>Skote - Bootstrap 4 Landing Template</td>
                                    <td class="text-right">$399.00</td>
                                </tr>

                                <tr>
                                    <td>03</td>
                                    <td>Veltrix - Bootstrap 4 Admin Template</td>
                                    <td class="text-right">$499.00</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-right">Sub Total</td>
                                    <td class="text-right">$1397.00</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="border-0 text-right">
                                        <strong>Shipping</strong>
                                    </td>
                                    <td class="border-0 text-right">$13.00</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="border-0 text-right">
                                        <strong>Total</strong>
                                    </td>
                                    <td class="border-0 text-right">
                                        <h4 class="m-0">$1410.00</h4>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-print-none">
                        <div class="float-right">
                            <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light mr-1"><i
                                    class="fa fa-print"></i></a>
                            <a href="#" class="btn btn-primary w-md waves-effect waves-light">Send</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

@endsection
