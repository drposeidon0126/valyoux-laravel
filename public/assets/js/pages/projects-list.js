
var z= 1;
$('#price').click(function(){
    if(z == 0 ){
        $("#price").attr('value', 'Stock Price');
        $("#price").text('Stock Price');
        $('.stock_value_').show();
        $('.market_value_').hide();
        $('.dividend_payments_').hide();
       
        z++;
    }else if(z == 1){
        $("#price").attr('value', 'Market Value');
        $("#price").text('Market Value');
        $('.stock_value_').hide();
        $('.market_value_').show();
        $('.dividend_payments_').hide();
        z++;
    } else if (z == 2){
     
        $("#price").attr('value', 'Dividends');
        $("#price").text('Dividends');
        $('.stock_value_').hide();
        $('.market_value_').hide();
        $('.dividend_payments_').show();
        z = 0;
    }
    
});
function changeValue(id,type){
    if(type== 1){
        $('.stock_value_').hide();
        $('.market_value_').show();
        $('.dividend_payments_').hide();
        $("#price").text('Market Value');
    }else if(type == 2){
        $('.stock_value_').hide();
        $('.market_value_').hide();
        $('.dividend_payments_').show();
        $("#price").text('Dividends');
    }else if(type == 3){
        $('.stock_value_').show();
        $('.market_value_').hide();
        $('.dividend_payments_').hide();
        $("#price").text('Stock Price');
    }
 }
