@extends('layouts.master')
@section('pageCSS')

@endsection
@section('title') Artist @endsection

@section('content')

<style>

    .revenue-main-wrapper{
        
    }
    .revenue-col{
        
    }
    .main-head-wrapper{
        color: #0A0A0A;
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-weight: 600;
        margin: 0 0 60px 0;
        font-size: 34px;
        flex-wrap: wrap;
    }
    .main-head-wrapper span{
        
    }
    .revenue-col h4{
        color: #0A0A0A;
        font-size: 26px;
        font-weight: 600;
        margin: 100px 0 50px 0;
    }
    .single-row-revenue{
        margin-bottom: 35px;
    }
    .single-row-revenue h5{
        color: #0A0A0A;
        font-size: 26px;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
        flex-wrap: wrap;
    }
    .single-row-revenue h5 span{
        
    }
    .single-row-revenue p{
        color: #707070;
        font-size: 18px;
        margin-bottom: 10px;
    }
    @media (max-width: 575px){
        .main-head-wrapper {
            margin: 0 0 30px 0;
            font-size: 20px;
        }
        .revenue-col h4 {
            font-size: 20px;
            margin: 60px 0 50px 0;
        }
        .single-row-revenue h5{
            font-size: 14px;
        }
        .single-row-revenue p{
            font-size: 14px;
        }
        .revenue-main-wrapper .container{
            padding: 0;
        }
        .revenue-main-wrapper .container .col-12{
            padding: 0;
        }
    }
</style>
    @include('layouts.inner-navigation',['artist'=>$artist])
  
<div class="row">
         @include('layouts.profile-box',['artist'=>$artist])
     </div>
     <div class="page_section">
     <?php // p($total_revenue,0); p($notes); ?>
<div class="revenue-main-wrapper mt-5">
    <div class="container">

            <div class="col-12 revenue-col">
              <h2 class="main-head-wrapper">
                <span>TOTAL REVENUE GENERATED</span>
                <span>$ {{ numberformat($total_amount['total']) }}</span>
              </h2>
              <h4>SONG WRITING & COMPOSING REVENUE</h4>
              @foreach($notes as $key=>$row)
              <?php  
              $total_amount = isset($row['total'])?$row['total']:0;
              $title = isset($row['title'])?$row['title']:'';
              $desc = isset($row['desc'])?$row['desc']:'';
              
              ?>
              <div class="single-row-revenue">
                <h5>
                  <span>{{ $title }} </span>
                  <span>${{numberformat($total_amount) }}</span>
                </h5>
                <p>{{ $desc }}</p>
              </div>
              <?php //} ?>
              @endforeach

            </div>

    </div>
</div>

</div>
<div class="row bs-float-parent">
        @include('layouts.stock-price',['artist'=>$artist])
</div>
@endsection

@section('script') 

@endsection