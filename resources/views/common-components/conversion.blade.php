<div class="scrolling" id="{{$upperExchange}}">
    Exchange Rates
    <span class="pink">:</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="{{ asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg') }}" width="20" height="20" alt="">
    &nbsp;&nbsp;&nbsp;&nbsp; 1 Ethereum &nbsp;=&nbsp;
    <p id="E1">0.02776 BTC</p>
    &nbsp;=&nbsp; $
    <p id="E2">{{ $ETHUSDT ?? '' }} USD</p>
    &nbsp;&nbsp;
    <p id="B3" class="text-green"> +0.25% </p>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="{{ asset('assets/images/valyoux/bitcoinlogo.svg') }}" width="20" height="20">&nbsp;&nbsp;&nbsp;&nbsp;1
    Bitcoin &nbsp;=&nbsp; $
    <p id="B2">{{ $BTCUSDT ?? '' }} USD</p>
    &nbsp;&nbsp;
    <p id="B3" class="text-red"> -0.15% </p>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="{{ asset('assets/images/valyoux/vuxlogo.svg') }}" width="20" height="20">&nbsp;&nbsp;&nbsp;&nbsp;1
    Valyou X Dollar (VXD) = &nbsp;&nbsp; $
    <p id="B2">{{ $USDCUSDT ?? '' }} USDC</p>
    &nbsp;&nbsp;
    <p id="B3" class="text-red"> -0.1% </p>
</div>