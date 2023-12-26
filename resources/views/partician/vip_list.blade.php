@if(!empty($vip_list))
    @if($totalnumber>10)
        @php unset($vip_list[$totalnumber-1]); @endphp
    @endif
    @foreach($vip_list as $key=>$a)
    @php
                        $photo = $a->avatar?$a->avatar:$a->avatar;
                        $brand = $a->first_name .' '. $a->last_name ;
                        $url = '';
    @endphp

                        <div class="col-12">
                         <div class="follow-profile">
                            <img src="{{ 'public/'.$photo }}" class="rounded-circle" alt="">
                        <div class="sph-text">

                                <a href="{{ $url }}">
                                <h4>{{ $brand }}</h4></a>

                                <span style="margin-top: 10px;">VIP POINTS : {{ $a->total_points }}</span>
                                </div>

                               <a href="javscript:void(0);" class="sph-button">VIP</a>

                        </div>
                            </div>
    @endforeach
                   
@else
    <tr class="text-center"><td colspan="8">You haven’t yet Invested or purchased stocks in any music artist brands listed on Valyou X. Please visit the market page to begin.</td></tr>
@endif
            
@if($totalnumber>10)
    <a style="margin-top: 10%;font-size: 20px;" href="javascript:void(0);" data-id="{{$last_id}}" data-follower="1"  class="text-success loadbtn1 loadbtn-mobile">Load more </a>
@endif


