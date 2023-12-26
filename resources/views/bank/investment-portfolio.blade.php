@extends('layouts.master')

@section('title') Investment-portfolio @endsection

@section('css')   
@endsection
<style>
    .page-title-box{
        display: none !important;
    }
    .text-muted{
        text-align: center;
    }

</style>
@section('content')
    @component('common-components.breadcrumb')
        @slot('title') Portfolio / Dividends @endslot
        @slot('li_1') Crypto @endslot
        @slot('li_2') Lending @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body border-bottom">
                    <div class="float-right dropdown ml-2">
                        <a class="text-muted dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-dots-horizontal font-size-18"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>

                    <div>
                        <div class="mb-4 mr-3">
                            <img src="{{ isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/avatar-1.jpg') }}" alt=""
                                 class="avatar-md rounded-circle img-thumbnail">
                        </div>

                        <div>
                            <h5 class="">{{ auth()->user()->first_name.' '.auth()->user()->last_name }}</h5>
                            <p class="text-muted mb-1">{{ auth()->user()->email }}</p>
                            <p class="text-muted mb-0">Id no: #SK0234</p>
                        </div>
                    </div>
                </div>
                <div class="card-body border-bottom">
                    <div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div>
                                    <p class="text-muted mb-2">Total Investment Portfolio Value</p>
                                    <h2 class="roboto-bold">${{ numberformat($total_stock)}} VXD</h2>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right mt-4 mt-sm-0">
                                    <p class="text-muted mb-2">Since last month</p>
                                    <h5>+ $ 215.53 <span class="badge badge-green ml-1 align-bottom">+ 1.3 %</span></h5>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">My Artists Investments</h4>
                   <div style="display:block" class="table-responsive">
                        <table class="table table-nowrap table-centered mb-0">
                            <thead>
                            <tr>
                                <th scope="col">Artist</th>
                                <th scope="col">Your Stock Holdings</th>
                                <th scope="col">Current Price P/S</th>
                                <th scope="col">Total Amount Invented</th>
                                <th scope="col">Total Current Stocks Value</th>
                                <th scope="col">Stock holdings/Investment</th>
                                <th scope="col">Total Stocks Available Supply </th>
                                <th scope="col">Total Stocks Sold Circulating </th>
                                <th scope="col">Total Brand Revenue</th>
                                <th scope="col">Total Artist Revenue</th>
                                <th scope="col" colspan="2">Value</th>
                            </tr>
                            </thead>
                            <tbody class="investor_list">
                            
                            </tbody>
                        </table>
                    </div>
                 
                </div>
            </div>


            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Trading & Investment Funds Under Management</h4>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="border p-3 rounded mt-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="avatar-xs mr-3">
                                        <span class="avatar-title rounded-circle bg-soft-warning text-warning font-size-18">
                                            <i class="mdi mdi-bitcoin"></i>
                                        </span>
                                    </div>
                                    <h5 class="font-size-14 mb-0">Crypto</h5>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="text-muted mt-3">
                                            <p>Annual Yield</p>
                                            <h4>4.05 %</h4>
                                            <p class="mb-0">0.00745 VXD</p>

                                        </div>
                                    </div>

                                    <div class="col-lg-6 align-self-end">
                                        <div class="float-right mt-3">
                                            <a href="#" class="btn btn-black">Select</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="border p-3 rounded mt-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="avatar-xs mr-3">
                                        <span class="avatar-title rounded-circle bg-soft-primary text-primary font-size-18">
                                            <i class="mdi mdi-equalizer"></i>
                                        </span>
                                    </div>
                                    <h5 class="font-size-14 mb-0">Forex</h5>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="text-muted mt-3">
                                            <p>Annual Yield</p>
                                            <h4>5.08 %</h4>
                                            <p class="mb-0">0.0056 VXD</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 align-self-end">
                                        <div class="float-right mt-3">
                                            <a href="#" class="btn btn-black">Select</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="border p-3 rounded mt-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="avatar-xs mr-3">
                                        <span class="avatar-title rounded-circle bg-soft-info text-info font-size-18">
                                            <img src="{{ asset('assets/images/valyoux/valyoux_mascot_white.svg') }}" width="20" height="20">
                                        </span>
                                    </div>
                                    <h5 class="font-size-14 mb-0">Property</h5>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="text-muted mt-3">
                                            <p>Annual Yield</p>
                                            <h4>4.12 %</h4>
                                            <p class="mb-0">0.00245 VXD</p>

                                        </div>
                                    </div>

                                    <div class="col-lg-6 align-self-end">
                                        <div class="float-right mt-3">
                                            <a href="#" class="btn btn-black">Select</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection
@section('script')

    <!-- apexcharts -->
    <script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Required datatable js -->

    <!-- crypto-wallet init -->
    <script src="{{ URL::asset('assets/js/pages/crypto-wallet.init.js') }}"></script>

    <script src="{{ URL::asset('assets/libs/axios/axios.min.js') }}"></script>
    <script>
    $(document).ready(function(){ 
    
    loadInvestMentData(0,2);
     
      $(document).on('click', '.loadbtn2', function(){
        $(".loadbtn2").html('<i class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Loading...');
        var pId = $(this).data("id");
        loadInvestMentData(pId,2);
      });
    });
   function loadInvestMentData(page,type){
        $.ajax({
            url:'loadinvestmentdata', 
            type:"GET",
            cache:false,
            data:{offset:page,type:type},
            success:function(data){
                if (data) {
                    // const data1 = JSON.parse(data);
                    // console.log(data1)
                    if(page){
                        $(".pagination-loadmore").hide();
                        $(".investor_list").append(data);
                    }else{
                        $(".investor_list").html(data);
                    }
                }
            }
        });

        
   }
    </script>
@endsection