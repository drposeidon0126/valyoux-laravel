<?php
    use App\Models\StockTransaction;
    $buy_total = StockTransaction::where(['type'=>2,'artist_id'=>$artist['id'],'user_id'=> auth()->user()->id])->sum('quantity');
    $sell_total = StockTransaction::where(['type'=>1,'artist_id'=>$artist['id'],'user_id'=> auth()->user()->id])->sum('quantity');
    $total = $buy_total - $sell_total;
    $market_maker_price = $artist['market_maker_price']? $artist['market_maker_price']/100 : settings() -> market_maker_price/100;
    $stock_of_sell_limit = $artist['sell_limit']? ($artist['total_supply'] + $artist['circulating_supply']) * $artist['sell_limit']/100 : ($artist['total_supply'] + $artist['circulating_supply']) * settings() -> sell_limit/100;

?>
<style>

    .track {
            -webkit-animation: marquee 300s linear infinite ;
            animation: marquee 300s linear infinite;
        }

    /*  @media  only screen (min-width:1024px){ */
    .track:hover{
        -webkit-animation-play-state:paused;
        -moz-animation-play-state:paused;
        -o-animation-play-state:paused;
        animation-play-state:paused;
        /* cursor: pointer; */
        -webkit-overflow-scrolling: touch;
    }


    .track:active{
        -webkit-animation-play-state:paused;
        -moz-animation-play-state:paused;
        -o-animation-play-state:paused;
        animation-play-state:paused;
        /* cursor: pointer; */
        -webkit-overflow-scrolling: touch;
    }


    .marquee {
        overflow-x: scroll !important;
        display: flex;
        align-items: center;
        cursor: grab;
    }

    .marquee.active {
        cursor: grabbing !important;
        cursor: -webkit-grabbing !important;
        transform: scale(1);
    }

    /* Hide scrollbar for Chrome, Safari and Opera */
    .marquee::-webkit-scrollbar {
        display: none;
    }

    /* Hide scrollbar for IE, Edge and Firefox */
    .marquee {
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
    }


</style>


<?php if(isset($artist)){ ?>
    <input type="hidden" name="total_supply" id="total_supply" value="<?php echo e(numberformat($artist['total_supply'])); ?>">




            <div class="card mb-0 posFixed-sVxd" id="bs-float" style="margin-left: 0; margin-right: 0;">
                <div class="card-body">
                    <div class="stock-price text-center">Stock Price</div>
                    <div class="d-flex d-flexBlock-mob justify-content-center bd-highlight align-items-center">
                        <div class="marquee">
                            <div class="track">
                                <div class="vxd d-inline pl-5">$ <?php echo e(numberformat($artist['stock_value']) * settings() -> admin_fees/100 + numberformat($artist['stock_value'])); ?> VXD</div>
                                 <?php $sign = '';
                                if($artist['change_stock'] > 0){
                                    $change_stock = '+ '.numberformat($artist['change_stock']) ;
                                }else{
                                    $change_stock =  signformat($artist['change_stock'],0) ;
                                } ?>
                                <div class="priceT d-inline pr-5">&nbsp;&nbsp;<?php echo e($change_stock); ?>%</div>
                                <div class="vxd d-inline pl-5">0.000014 BTC</div>
                                <div class="priceT d-inline pr-5">&nbsp;&nbsp;+ 28.57%</div>
                                <div class="vxd d-inline pl-5">
                                $ <?php echo e(numberformat($artist['stock_value'])); ?> USDC</div>
                                <?php $sign = '';
                                if($artist['change_stock'] > 0){
                                    $change_stock = '+ '.numberformat($artist['change_stock']) ;
                                }else{
                                    $change_stock =  signformat($artist['change_stock'],0) ;
                                } ?>
                                <div class="priceT d-inline pr-5">&nbsp;&nbsp;<?php echo e($change_stock); ?>%</div>
                                <div class="vxd d-inline pl-5">0.00019 ETH</div>
                                <div class="priceT d-inline">&nbsp;&nbsp;+ 28.57%</div>

                                <div class="vxd d-inline pl-5">$ <?php echo e(numberformat($artist['stock_value']) * settings() -> admin_fees/100 + numberformat($artist['stock_value'])); ?> VXD</div>
                                <?php $sign = '';
                                if($artist['change_stock'] > 0){
                                    $change_stock = '+ '.numberformat($artist['change_stock']) ;
                                }else{
                                    $change_stock =  signformat($artist['change_stock'],0) ;
                                } ?>
                                <div class="priceT d-inline pr-5">&nbsp;&nbsp;<?php echo e($change_stock); ?>%</div>
                                <div class="vxd d-inline pl-5">0.000014 BTC</div>
                                <div class="priceT d-inline pr-5">&nbsp;&nbsp;+ 28.57%</div>
                                <div class="vxd d-inline pl-5">
                                $ <?php echo e(numberformat($artist['stock_value'])); ?> USDC</div>
                                <?php $sign = '';
                                if($artist['change_stock'] > 0){
                                    $change_stock = '+ '.numberformat($artist['change_stock']) ;
                                }else{
                                    $change_stock =  signformat($artist['change_stock'],0) ;
                                } ?>
                                <div class="priceT d-inline pr-5">&nbsp;&nbsp;<?php echo e($change_stock); ?>%</div>
                                <div class="vxd d-inline pl-5">0.00019 ETH</div>
                                <div class="priceT d-inline">&nbsp;&nbsp;+ 28.57%</div>

                                <div class="vxd d-inline pl-5">$ <?php echo e(numberformat($artist['stock_value']) * settings() -> admin_fees/100 + numberformat($artist['stock_value'])); ?> VXD</div>
                                 <?php $sign = '';
                                if($artist['change_stock'] > 0){
                                    $change_stock = '+ '.numberformat($artist['change_stock']) ;
                                }else{
                                    $change_stock =  signformat($artist['change_stock'],0) ;
                                } ?>
                                <div class="priceT d-inline pr-5">&nbsp;&nbsp;<?php echo e($change_stock); ?>%</div>
                                <div class="vxd d-inline pl-5">0.000014 BTC</div>
                                <div class="priceT d-inline pr-5">&nbsp;&nbsp;+ 28.57%</div>
                                <div class="vxd d-inline pl-5">
                                $ <?php echo e(numberformat($artist['stock_value'])); ?> USDC</div>
                                <?php $sign = '';
                                if($artist['change_stock'] > 0){
                                    $change_stock = '+ '.numberformat($artist['change_stock']) ;
                                }else{
                                    $change_stock =  signformat($artist['change_stock'],0) ;
                                } ?>
                                <div class="priceT d-inline pr-5">&nbsp;&nbsp;<?php echo e($change_stock); ?>%</div>
                                <div class="vxd d-inline pl-5">0.00019 ETH</div>
                                <div class="priceT d-inline">&nbsp;&nbsp;+ 28.57%</div>

                                <div class="vxd d-inline pl-5">$ <?php echo e(numberformat($artist['stock_value']) * settings() -> admin_fees/100 + numberformat($artist['stock_value'])); ?> VXD</div>
                                 <?php $sign = '';
                                if($artist['change_stock'] > 0){
                                    $change_stock = '+ '.numberformat($artist['change_stock']) ;
                                }else{
                                    $change_stock =  signformat($artist['change_stock'],0) ;
                                } ?>
                                <div class="priceT d-inline pr-5">&nbsp;&nbsp;<?php echo e($change_stock); ?>%</div>
                                <div class="vxd d-inline pl-5">0.000014 BTC</div>
                                <div class="priceT d-inline pr-5">&nbsp;&nbsp;+ 28.57%</div>
                                <div class="vxd d-inline pl-5">
                                $ <?php echo e(numberformat($artist['stock_value'])); ?> USDC</div>
                                <?php $sign = '';
                                if($artist['change_stock'] > 0){
                                    $change_stock = '+ '.numberformat($artist['change_stock']) ;
                                }else{
                                    $change_stock =  signformat($artist['change_stock'],0) ;
                                } ?>
                                <div class="priceT d-inline pr-5">&nbsp;&nbsp;<?php echo e($change_stock); ?>%</div>
                                <div class="vxd d-inline pl-5">0.00019 ETH</div>
                                <div class="priceT d-inline">&nbsp;&nbsp;+ 28.57%</div>

                                <div class="vxd d-inline pl-5">$ <?php echo e(numberformat($artist['stock_value']) * settings() -> admin_fees/100 + numberformat($artist['stock_value'])); ?> VXD</div>
                                 <?php $sign = '';
                                if($artist['change_stock'] > 0){
                                    $change_stock = '+ '.numberformat($artist['change_stock']) ;
                                }else{
                                    $change_stock =  signformat($artist['change_stock'],0) ;
                                } ?>
                                <div class="priceT d-inline pr-5">&nbsp;&nbsp;<?php echo e($change_stock); ?>%</div>
                                <div class="vxd d-inline pl-5">0.000014 BTC</div>
                                <div class="priceT d-inline pr-5">&nbsp;&nbsp;+ 28.57%</div>
                                <div class="vxd d-inline pl-5">
                                $ <?php echo e(numberformat($artist['stock_value'])); ?> USDC</div>
                                <?php $sign = '';
                                if($artist['change_stock'] > 0){
                                    $change_stock = '+ '.numberformat($artist['change_stock']) ;
                                }else{
                                    $change_stock =  signformat($artist['change_stock'],0) ;
                                } ?>
                                <div class="priceT d-inline pr-5">&nbsp;&nbsp;<?php echo e($change_stock); ?>%</div>
                                <div class="vxd d-inline pl-5">0.00019 ETH</div>
                                <div class="priceT d-inline">&nbsp;&nbsp;+ 28.57%</div>

                                <div class="vxd d-inline pl-5">$ <?php echo e(numberformat($artist['stock_value']) * settings() -> admin_fees/100 + numberformat($artist['stock_value'])); ?> VXD</div>
                                 <?php $sign = '';
                                if($artist['change_stock'] > 0){
                                    $change_stock = '+ '.numberformat($artist['change_stock']) ;
                                }else{
                                    $change_stock =  signformat($artist['change_stock'],0) ;
                                } ?>
                                <div class="priceT d-inline pr-5">&nbsp;&nbsp;<?php echo e($change_stock); ?>%</div>
                                <div class="vxd d-inline pl-5">0.000014 BTC</div>
                                <div class="priceT d-inline pr-5">&nbsp;&nbsp;+ 28.57%</div>
                                <div class="vxd d-inline pl-5">
                                $ <?php echo e(numberformat($artist['stock_value'])); ?> USDC</div>
                                <?php $sign = '';
                                if($artist['change_stock'] > 0){
                                    $change_stock = '+ '.numberformat($artist['change_stock']) ;
                                }else{
                                    $change_stock =  signformat($artist['change_stock'],0) ;
                                } ?>
                                <div class="priceT d-inline pr-5">&nbsp;&nbsp;<?php echo e($change_stock); ?>%</div>
                                <div class="vxd d-inline pl-5">0.00019 ETH</div>
                                <div class="priceT d-inline">&nbsp;&nbsp;+ 28.57%</div>

                                <div class="vxd d-inline pl-5">$ <?php echo e(numberformat($artist['stock_value']) * settings() -> admin_fees/100 + numberformat($artist['stock_value'])); ?> VXD</div>
                                 <?php $sign = '';
                                if($artist['change_stock'] > 0){
                                    $change_stock = '+ '.numberformat($artist['change_stock']) ;
                                }else{
                                    $change_stock =  signformat($artist['change_stock'],0) ;
                                } ?>
                                <div class="priceT d-inline pr-5">&nbsp;&nbsp;<?php echo e($change_stock); ?>%</div>
                                <div class="vxd d-inline pl-5">0.000014 BTC</div>
                                <div class="priceT d-inline pr-5">&nbsp;&nbsp;+ 28.57%</div>
                                <div class="vxd d-inline pl-5">
                                $ <?php echo e(numberformat($artist['stock_value'])); ?> USDC</div>
                                <?php $sign = '';
                                if($artist['change_stock'] > 0){
                                    $change_stock = '+ '.numberformat($artist['change_stock']) ;
                                }else{
                                    $change_stock =  signformat($artist['change_stock'],0) ;
                                } ?>
                                <div class="priceT d-inline pr-5">&nbsp;&nbsp;<?php echo e($change_stock); ?>%</div>
                                <div class="vxd d-inline pl-5">0.00019 ETH</div>
                                <div class="priceT d-inline">&nbsp;&nbsp;+ 28.57%</div>

                                <div class="vxd d-inline pl-5">$ <?php echo e(numberformat($artist['stock_value']) * settings() -> admin_fees/100 + numberformat($artist['stock_value'])); ?> VXD</div>
                                <?php $sign = '';
                                if($artist['change_stock'] > 0){
                                    $change_stock = '+ '.numberformat($artist['change_stock']) ;
                                }else{
                                    $change_stock =  signformat($artist['change_stock'],0) ;
                                } ?>
                                <div class="priceT d-inline pr-5">&nbsp;&nbsp;<?php echo e($change_stock); ?>%</div>
                                <div class="vxd d-inline pl-5">0.000014 BTC</div>
                                <div class="priceT d-inline pr-5">&nbsp;&nbsp;+ 28.57%</div>
                                <div class="vxd d-inline pl-5">
                                $ <?php echo e(numberformat($artist['stock_value'])); ?> USDC</div>
                                <?php $sign = '';
                                if($artist['change_stock'] > 0){
                                    $change_stock = '+ '.numberformat($artist['change_stock']) ;
                                }else{
                                    $change_stock =  signformat($artist['change_stock'],0) ;
                                } ?>
                                <div class="priceT d-inline pr-5">&nbsp;&nbsp;<?php echo e($change_stock); ?>%</div>
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

        <!--Buy Modal -->
        <div class="modal fade proceed_modal" id="buyStockModal" aria-labelledby="buyStockModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4><b class="color-pinkk">Buy Stock</b></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="buystock">
                            <?php echo csrf_field(); ?>

                            <div class="text-center">
                                <div class="card-body price-card">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-price-div">
                                                <p>How many stocks of this artist would you like to purchase?</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="quantity">
                                        <input type='button'  value='-' id="minus_buy" class='minus' field='quantity' />
                                        <input type='text' name='quantity' id="quantity" value='1' class='qty input-qty dollar'/>
                                        <input type='button'  value='+' id="plus_buy" class='plus ' field='quantity'/>
                                        <input type="hidden" name="artist_id" value="<?php echo e($artist['id']); ?>" class="artist_id">

                                        <!-- <br/> -->

                                        <!-- stock value -->
                                        <input type="hidden" name="initial_stock_value" value="<?php echo e(numberformat($artist['stock_value'])); ?>" id="initial_stock_value"><!-- <br/><br/> -->

                                        <!-- Website fee -->
                                        <input type="hidden" id="admin_fees" value="<?php echo e(settings() -> admin_fees/100); ?>"><!-- <br/><br/> -->

                                        <!-- Stock increments -->
                                        <input type="hidden" name="increments" value="<?php echo e((float)settings()->increments); ?>" class="increments"><!-- <br/><br/> -->

                                        <!-- total Supply -->
                                        <input type="hidden" name="total_supply" id="total_supply" value="<?php echo e($artist['total_supply']); ?>"><!-- <br/><br/> -->

                                        <!-- circulating supply -->
                                        <input type="hidden" name="circulating_supply" id="circulating_supply" value="<?php echo e($artist['circulating_supply']); ?>"><!-- <br/><br/> -->

                                        <!-- remain_supply = limit_supply - circulating_supply -->
                                        <input type="hidden" name="remain_supply" id="remain_supply" value="<?php echo e($stock_of_sell_limit - $artist['circulating_supply']); ?>"><!-- <br/><br/> -->

                                        <!-- Admin Cost -->
                                        <input type="hidden" name="admin_cost" id="admin_cost" value="<?php echo e(numberformat($artist['stock_value']) * settings() -> admin_fees/100 + (float)settings()->increments); ?>"><!-- <br/><br/> -->

                                        <!-- Buyer Cost -->
                                        <input type="hidden" name="buyer_cost" id="buyer_cost" value="<?php echo e(numberformat($artist['stock_value']) * settings() -> admin_fees/100 + numberformat($artist['stock_value'])); ?>"><!-- <br/><br/> -->

                                        <!-- Artist Cost -->
                                        <input type="hidden" name="artist_cost" id="artist_cost" value="<?php echo e((float)settings()->increments); ?>"><!-- <br/><br/> -->

                                    </div>
                                </div>
                                <br><br>

                                <h2 style="font-size: 24px; text-align: center; padding: 0 0 0; color: #1EDD0E;    font-weight: 700;">Total Cost: $ <span class="total_cost"><?php echo e(numberformat($artist['stock_value']) * settings() -> admin_fees/100 + numberformat($artist['stock_value'])); ?></span> VXD</h2>
                                <br>
                                <h2 style="font-size: 16px; text-align: center; padding: 0 0 20px; color: #000;">Amount of Shares X Current Stock Price + Fees % = Total Cost.</h2>
                                <button type="button" onclick="buyFormSubmit()" class="btn buy_submit btn-green btn-sm waves-effect waves-light">Buy Now</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    <!-- Sell Modal -->
    <div class="modal fade proceed_modal" id="sellStockModal" aria-labelledby="buyStockModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4><b class="color-pinkk">Sell <?php echo e($artist['brand']); ?> Stocks</b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form method="post" id="sellstock">
                <?php echo csrf_field(); ?>
                    <div class="text-center">
                        <div class="card-body price-card price-card-pink">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-price-div">
                                        <p>How many stocks of this artist would you like to sell?</p>
                                    </div>
                                </div>
                            </div>
                            <div class="quantity">
                                <input type='button' value='-' id="minus_sell" class='minus' field='quantity_sell' />
                                <input type='text' name='quantity_sell' id="quantity_sell" value='1' class='qty input-qty dollar'/>
                                <input type='button' value='+' id="plus_sell" class='plus ' field='quantity_sell'/>

                                <input type="hidden" name="artist_id" value="<?php echo e($artist['id']); ?>" class="artist_id">
                                <!-- <br/> -->

                                <input type="hidden" id="total_user_stock" value="<?= $total; ?>"> <br/>
                                <input type="hidden" name="stock_value_sell" value="<?php echo e(numberformat($artist['stock_value'])); ?>" id="stock_value_sell">
                                <input type="hidden" name="artist_id" value="<?php echo e($artist['id']); ?>" class="artist_id">


                                <!-- stock value -->
                                <input type="hidden" name="initial_stock_value_sell" value="<?php echo e(numberformat($artist['stock_value'])); ?>" id="initial_stock_value_sell"><!-- <br/><br/> -->

                                <!-- Website fee -->
                                <input type="hidden" id="admin_fees_sell" value="<?php echo e(settings() -> admin_fees/100); ?>"><!-- <br/><br/> -->

                                <!-- Market Maker Price -->
                                <input type="hidden" id="market_maker_price" name="market_maker_price" value="<?php echo e($market_maker_price); ?>"><!-- <br/><br/> -->

                                <!-- Stock increments -->
                                <input type="hidden" name="increments" value="<?php echo e((float)settings()->increments); ?>" class="increments_sell"><!-- <br/><br/> -->

                                <!-- total Supply -->
                                <input type="hidden" name="total_supply_sell" id="total_supply_sell" value="<?php echo e($artist['total_supply']); ?>"><!-- <br/><br/> -->

                                <!-- circulating supply -->
                                <input type="hidden" name="circulating_supply_sell" id="circulating_supply_sell" value="<?php echo e($artist['circulating_supply']); ?>"><!-- <br/><br/> -->

                                <!-- sell_restrictions -->
                                <input type="hidden" name="sell_restrictions" id="sell_restrictions" value="<?php echo e($artist['sell_restrictions']); ?>"><!-- <br/><br/> -->

                                <!-- Admin Cost -->
                                <input type="hidden" name="admin_cost_sell" id="admin_cost_sell" value="<?php echo e(numberformat($artist['stock_value'] *( 1- $market_maker_price) * settings() -> admin_fees/100)); ?>"><!-- <br/><br/> -->

                                <!-- Seller Cost -->
                                <input type="hidden" name="seller_cost" id="seller_cost" value="<?php echo e(numberformat((float)$artist['stock_value'] *( 1- $market_maker_price))-numberformat($artist['stock_value'] *( 1- $market_maker_price) * settings() -> admin_fees/100)); ?>"><!-- <br/><br/> -->

                                <!-- Artist Cost -->
                                <input type="hidden" name="artist_cost_sell" id="artist_cost_sell" value="<?php echo e(numberformat((float)$artist['stock_value'] *( 1- $market_maker_price))); ?>"><!-- <br/><br/> -->

                            </div>
                        </div>
                        <br><br>
                        <h2 style="font-size: 24px; text-align: center; padding: 0 0 0; color: #ce196c;    font-weight: 700;">
                        Total Amount <br>You will receive: $ <span class="total_cost2"><?php echo e(numberformat($artist['stock_value'] *( 1- $market_maker_price) - $artist['stock_value'] *( 1- $market_maker_price) * settings() -> admin_fees/100)); ?></span> VXD
                        </h2>
                        <br>
                        <h2 style="font-size: 16px; text-align: center; padding: 0 0 20px; color: #000;">Amount of Shares X Current Stock Price - Fees % = Total</h2>
                        <button id="sell-btn" type="button" onclick="sellFormSubmit()" class="btn sell-submit btn-pink btn-sm waves-effect waves-light">Sell Now</button>
                    </div>
                    </from>
                </div>
            </div>
        </div>
    </div>

<?php } ?>

<script>

function buyFormSubmit(){
    var total_supply = $('#total_supply').val();
    var circulating_supply = $('#circulating_supply').val();
    if(total_supply > 0){
        var formdata = $('#buystock').serialize();
        $.ajax({
        url : 'buy-stock',
        type: "POST",
        cache:false,
        data:formdata,
        success:function(data){
            if (data) {
                window.location.reload();
            }
        }
        });
    }else{
        js_error('you are not buying stock');
    }
}
function sellFormSubmit(){
    var formdata = $('#sellstock').serialize();
        $.ajax({
        url : 'sell-stock',
        type: "POST",
        cache:false,
        data:formdata,
        success:function(data){
            if (data) {
                window.location.reload();
            }
        }
      });
}

$(document).ready(function(){
    var stock_number = parseInt($("#quantity").val());

    var initial_stock_value = parseFloat($('#initial_stock_value').val());

    var stock_value = parseFloat($('#initial_stock_value').val());

    var admin_fees = parseFloat($('#admin_fees').val());

    var increments = parseFloat($('.increments').val());

    var sum_of_stock_value = initial_stock_value;

    var sum_of_increments = increments;
	
    var total_supply = parseInt($('#total_supply').val());

    var circulating_supply = parseInt($('#circulating_supply').val());

    var initial_circulating_supply = parseInt($('#circulating_supply').val());

    var remain_supply = parseInt($('#remain_supply').val());

    var initial_remain_supply = parseInt($('#remain_supply').val());


	function stock_increment(no_of_stock){
    	if(no_of_stock==1){
        	return (initial_stock_value) * no_of_stock;
        }
    	else{
        	return (initial_stock_value + increments) * no_of_stock;
        }
    	
    
    
    }
	

    $('#plus_buy').click( function(){
        if(stock_number >= initial_remain_supply){
            // js_error('The max value you can buy is '+initial_remain_supply);
            js_error("you can’t currently sell your stocks");
        }else{
        
        	
        	
        	
            stock_number += 1;

            stock_value += increments;

            sum_of_stock_value += stock_value;

            sum_of_increments += increments * stock_number;
        
        	var increment_stock_sum =increments * stock_number;
        	
        	
            admin_cost = parseFloat(sum_of_stock_value * admin_fees + sum_of_increments);
        	buyer_cost = (admin_fees==0)? stock_increment(stock_number):  parseFloat(initial_stock_value * stock_number + sum_of_stock_value * admin_fees) ;

            // buyer_cost = (admin_fees==0)? parseFloat(initial_stock_value * stock_number + increment_stock_sum):  parseFloat(initial_stock_value * stock_number + sum_of_stock_value * admin_fees) ;

            artist_cost = parseFloat(sum_of_increments);

            circulating_supply++;

            remain_supply--;

            console.log(stock_number);
            console.log(sum_of_stock_value);
            console.log(sum_of_increments);
        }


        $('#quantity').val(stock_number);
        $('.total_cost').html(buyer_cost.toFixed(4));
        $('#buyer_cost').val(buyer_cost.toFixed(4));
        $('#admin_cost').val(admin_cost.toFixed(4));
        $('#artist_cost').val(artist_cost.toFixed(4));
        $('#circulating_supply').val(circulating_supply);
        $('#remain_supply').val(remain_supply);
    });

    $('#minus_buy').click( function() {

        if(stock_number < 1)
        {

        }else if (stock_number > 1) {
        	
        	
			// alert(sum_of_stock_value);
            sum_of_stock_value -= stock_value;
        	
            sum_of_increments -= increments * stock_number;
        	var increment_stock_sum =increments * stock_number;
        	
            stock_value -= increments;

            stock_number -= 1;
        // alert(stock_number);

            admin_cost = parseFloat(sum_of_stock_value * admin_fees + sum_of_increments);
        
        	buyer_cost = (admin_fees==0)? stock_increment(stock_number):  parseFloat(initial_stock_value * stock_number + sum_of_stock_value * admin_fees) ;

            //buyer_cost = parseFloat(initial_stock_value * stock_number + sum_of_stock_value * admin_fees);
			//buyer_cost = (admin_fees==0)? parseFloat((sum_of_stock_value  + sum_of_increments) - increment_stock_sum ):  parseFloat(initial_stock_value * stock_number + sum_of_stock_value * admin_fees); ;
            artist_cost = parseFloat(sum_of_increments);

            circulating_supply--;

            remain_supply++;

            console.log(stock_number);
            console.log(sum_of_stock_value);
            console.log(sum_of_increments);

            $('#quantity').val(stock_number);
            $('.total_cost').html(buyer_cost.toFixed(4));
            $('#buyer_cost').val(buyer_cost.toFixed(4));
            $('#admin_cost').val(admin_cost.toFixed(4));
            $('#artist_cost').val(artist_cost.toFixed(4));
            $('#circulating_supply').val(circulating_supply);
            $('#remain_supply').val(remain_supply);
        }
    });

    $("#quantity").on("input", function(e){
        stock_number = parseInt($('#quantity').val());
         buyer_cost = 0;
         admin_cost = 0;
         artist_cost = 0;

        circulating_supply = initial_circulating_supply;
        remain_supply = initial_remain_supply;
        sum_of_increments = 0;
        sum_of_stock_value = 0;


        if (isNaN(stock_number)){
    	    stock_number = 0;
    	}else if(stock_number < 0){
            stock_number = 0;
        }else if(stock_number > initial_remain_supply){
            // js_error('The max value you can buy is '+initial_remain_supply);
            js_error("you can’t currently sell your stocks");
            stock_number = initial_remain_supply;
        }

        if(stock_number >= 1){
            for(i = 0; i < stock_number; i++){
                console.log(stock_number);
                stock_value = initial_stock_value + increments * i;
                sum_of_stock_value += stock_value;
                sum_of_increments += increments * (i+1);

            }

            admin_cost = parseFloat(sum_of_stock_value * admin_fees + sum_of_increments);

            buyer_cost = parseFloat(initial_stock_value * stock_number + sum_of_stock_value * admin_fees);

            artist_cost = parseFloat(sum_of_increments);
        }



        circulating_supply += stock_number;
        remain_supply -= stock_number;

        if(stock_number <= 0){
            $('.buy_submit').prop('disabled', true);
        }else{
            $('.buy_submit').prop('disabled', false);
        }

        $('#quantity').val(stock_number);
        $('.total_cost').html(buyer_cost.toFixed(4));
        $('#buyer_cost').val(buyer_cost.toFixed(4));
        $('#admin_cost').val(admin_cost.toFixed(4));
        $('#artist_cost').val(artist_cost.toFixed(4));
        $('#circulating_supply').val(circulating_supply);
        $('#remain_supply').val(remain_supply);
    })






    var total_user_stock = parseInt($("#total_user_stock").val());

    var stock_number_sell = parseInt($("#quantity_sell").val());

    var initial_stock_value_sell = parseFloat($('#initial_stock_value_sell').val());

    var stock_value_sell = parseFloat($('#initial_stock_value_sell').val());

    var admin_fees_sell = parseFloat($('#admin_fees_sell').val());

    var increments_sell = parseFloat($('.increments_sell').val());

    var sum_of_stock_value_sell = initial_stock_value_sell;

    var sum_of_increments_sell = increments_sell;

    var total_supply_sell = parseInt($('#total_supply_sell').val());

    var circulating_supply_sell = parseInt($('#circulating_supply_sell').val());

    var initial_circulating_supply_sell = parseInt($('#circulating_supply_sell').val());

    var sell_restrictions = parseInt($('#sell_restrictions').val());

    var market_maker_price = parseFloat($('#market_maker_price').val());

    $('#plus_sell').click( function(){
        $('.sell-submit').prop('disabled', false);
        if(stock_number_sell >= (initial_circulating_supply_sell - sell_restrictions)){
            if(initial_circulating_supply_sell <= sell_restrictions){
                $('.sell-submit').prop('disabled', true);
                admin_cost = 0;
                artist_cost = 0;
                seller_cost = 0;
                js_error("you can’t currently sell your stocks");
            }
            else
                // js_error( "You can only sell less than " + (initial_circulating_supply_sell - sell_restrictions) + " stocks (current circulating supply - sell restrictions = " + initial_circulating_supply_sell + "-" + sell_restrictions + ")");
                js_error("you can’t currently sell your stocks");

        }
        else if(stock_number_sell >= total_user_stock){
            // js_error('The max value you can sell is '+ total_user_stock + ' you are holding');
            js_error("you can’t currently sell your stocks");
        }else{
            stock_number_sell += 1;
            console.log(stock_number_sell);
            stock_value_sell -= increments_sell;
            console.log(stock_value_sell);
            sum_of_stock_value += stock_value_sell
            console.log(sum_of_stock_value);

            artist_cost = parseFloat(sum_of_stock_value * (1 - market_maker_price)).toFixed(4);

            admin_cost = parseFloat(sum_of_stock_value * (1 - market_maker_price) * admin_fees).toFixed(4);

            seller_cost = (artist_cost - admin_cost).toFixed(4);

            circulating_supply_sell--;
        }


        $('#quantity_sell').val(stock_number_sell);
        $('.total_cost2').html(seller_cost);
        $('#seller_cost').val(seller_cost);
        $('#admin_cost_sell').val(admin_cost);
        $('#artist_cost_sell').val(artist_cost);
        $('#circulating_supply_sell').val(circulating_supply_sell);
    });

    $('#minus_sell').click( function() {


        if(stock_number_sell < 1)
        {

        }else if (stock_number_sell > 1) {


            sum_of_stock_value -= stock_value_sell;

            sum_of_increments += increments * stock_number;

            stock_value_sell += increments;

            stock_number_sell -= 1;

            artist_cost = parseFloat(sum_of_stock_value * (1 - market_maker_price)).toFixed(4);

            admin_cost = parseFloat(sum_of_stock_value * (1 - market_maker_price) * admin_fees).toFixed(4);

            seller_cost = (artist_cost - admin_cost).toFixed(4);


            circulating_supply_sell++;


            $('#quantity_sell').val(stock_number_sell);
            $('.total_cost2').html(seller_cost);
            $('#seller_cost').val(seller_cost);
            $('#admin_cost_sell').val(admin_cost);
            $('#artist_cost_sell').val(artist_cost);
            $('#circulating_supply_sell').val(circulating_supply_sell);
        }
    });

    $("#quantity_sell").on("input", function(e){
        $('.sell-submit').prop('disabled', false);

        stock_number_sell = parseInt($('#quantity_sell').val());
        seller_cost = 0;
        admin_cost = 0;
        artist_cost = 0;

        circulating_supply_sell = initial_circulating_supply_sell;
        remain_supply = initial_remain_supply;
        sum_of_increments = 0;
        sum_of_stock_value = 0;


        if (isNaN(stock_number_sell)){
            stock_number_sell = 0;
        }else if(stock_number_sell < 0){
            stock_number_sell = 0;
        }else if(initial_circulating_supply_sell <= sell_restrictions){
                // js_error("A user can only sell their stocks if the artist raising money to build their brand has sold up to their required minimum amount of stocks. ");
                js_error("you can’t currently sell your stocks");
                $('.sell-submit').prop('disabled', true);
        }
        else if(stock_number_sell >= total_user_stock){
            // js_error('The max value you can sell is '+total_user_stock);
            js_error("you can’t currently sell your stocks");
            stock_number_sell = total_user_stock;
        }else {
            if( stock_number_sell > (initial_circulating_supply_sell - sell_restrictions)){
                // js_error( "You can only sell less than " + (initial_circulating_supply_sell - sell_restrictions) + " stocks (current circulating supply - sell restrictions = " + initial_circulating_supply_sell + "-" + sell_restrictions + ")");
                js_error("you can’t currently sell your stocks");
                stock_number_sell = initial_circulating_supply_sell - sell_restrictions;
            }
            if(stock_number_sell >= 1){
                for(i = 0; i < stock_number_sell; i++){
                    // console.log(stock_number_sell);
                    stock_value_sell = initial_stock_value - increments * i;
                    sum_of_stock_value += stock_value_sell;
                    console.log(sum_of_stock_value);
                }

                artist_cost = parseFloat(sum_of_stock_value * (1 - market_maker_price)).toFixed(4);

                admin_cost = parseFloat(sum_of_stock_value * (1 - market_maker_price) * admin_fees).toFixed(4);

                seller_cost = (artist_cost - admin_cost).toFixed(4);
            }



            circulating_supply_sell -= stock_number_sell;
            remain_supply += stock_number_sell;

            if(stock_number_sell <= 0){
                $('.sell-submit').prop('disabled', true);
            }else{
                $('.sell-submit').prop('disabled', false);
            }
        }

        $('#quantity_sell').val(stock_number_sell);
        $('.total_cost2').html(seller_cost);
        $('#seller_cost').val(seller_cost);
        $('#admin_cost_sell').val(admin_cost);
        $('#artist_cost_sell').val(artist_cost);
        $('#circulating_supply_sell').val(circulating_supply_sell);
    })



});


const slider = document.querySelector('.marquee');
    let isDown = false;
    let startX;
    let scrollLeft;
    slider.addEventListener('mousedown', (e) => {
        console.log('mousedown');
        isDown = true;
        slider.classList.add('active');
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    });
    slider.addEventListener('mouseleave', () => {
        console.log('mouseleave');
        isDown = false;
        slider.classList.remove('active');
    });
    slider.addEventListener('mouseup', () => {
        isDown = false;
        slider.classList.remove('active');
    });
    slider.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 3; //scroll-fast
        slider.scrollLeft = scrollLeft - walk;
        console.log(walk);
    });

</script>
<?php /**PATH /var/www/testvps-main/resources/views/layouts/stock-price.blade.php ENDPATH**/ ?>