<style>

   /*  @media only screen (min-width:1024px){ */
    .track:hover{
  -webkit-animation-play-state:paused;
  -moz-animation-play-state:paused;
  -o-animation-play-state:paused;
  animation-play-state:paused;
  cursor: pointer;
  -webkit-overflow-scrolling: touch;
   /*  } */
}

@media only screen (max-width:1024px){
    .track:active{
  -webkit-animation-play-state:paused;
  -moz-animation-play-state:paused;
  -o-animation-play-state:paused;
  animation-play-state:paused;
  cursor: pointer;
  -webkit-overflow-scrolling: touch;
  
    }
}
</style>


<?php if(isset($artist)){ ?>
<ul class="nav nav-tabs main-nav-tabss mt-4">
<div class="col-xl-12">
    <div class="card mb-0 posFixed-sVxd" id="bs-float">
        <div class="card-body">
            <div class="stock-price text-center">Stock Price</div>
            <div class="d-flex d-flexBlock-mob justify-content-center bd-highlight align-items-center">
                <div class="marquee">
                    <div class="track">
                        <div class="vxd d-inline">$58.60 VXD</div>
                        <div class="priceT d-inline pr-5">&nbsp;&nbsp;+ 28.57%</div>
                        <div class="vxd d-inline pl-5">0.000014 BTC</div>
                        <div class="priceT d-inline pr-5">&nbsp;&nbsp;+ 28.57%</div>
                        <div class="vxd d-inline pl-5">
                         $ {{ numberformat($artist['stock_value']) }} USDT</div>
                         <?php $sign = '';
                          if($artist['change_stock'] > 0){
                             $change_stock = '+ '.numberformat($artist['change_stock']) ;
                         }else{
                            $change_stock =  signformat($artist['change_stock'],0) ;
                         } ?>
                        <div class="priceT d-inline pr-5">&nbsp;&nbsp;{{ $change_stock }}%</div>
                        <div class="vxd d-inline pl-5">0.00019 ETH</div>
                        <div class="priceT d-inline">&nbsp;&nbsp;+ 28.57%</div>
                    </div> 
                </div>
            </div>
            <div class="row text-center d-flex justify-content-center mb-3  mt-2">
                <div class="col-xl-2 col-sm-3 col-6">
                    <button class="btn btn-pink btn-sm w-md waves-effect waves-light mr-3" data-toggle="modal" data-target="#sellStockModal">Sell Stock</button>
                </div>
                <div class="col-xl-2 col-sm-3 col-6">
                    <button class="btn btn-green btn-sm w-md waves-effect waves-light" data-toggle="modal" data-target="#buyStockModal">Buy Stock</button>
                </div>
            </div>
        </div>
    </div>

</div>
<?php } ?>