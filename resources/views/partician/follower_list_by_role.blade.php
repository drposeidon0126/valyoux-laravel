@if(!empty($followers_list))
    @if($totalnumber>10)
        @php unset($followers_list[$totalnumber-1]); @endphp
    @endif
              
    @foreach($followers_list as $key=>$a)

        @php
            $photo = $a->b_photo?$a->b_photo:$a->photo;
            $brand = $a->b_brand?$a->b_brand:$a->brand;
            $about = $a->b_about?$a->b_about:$a->about;

            if($a->user_role == 3 || $a->user_role == 4){
                $url ='artist/profile/'.$a->following_id;
            }else if($a->user_role == 2){
                $url ='artist/profile/'.$a->follower_id;
            }
        @endphp

                            <div class="col-12">
                            <div class="follow-profile">
                                <img src="{{ 'public/'.$photo }}" class="rounded-circle" alt="">
                            <div class="sph-text">

                                    <a href="{{ $url }}">
                                    <h4>{{ $brand }}</h4></a>
                                    <span style="margin-top: 10px;">{{ $about }}</span>
                                    </div>

                                    
                                @if($a->request_status == 1)
                                    <a href="javascript:void(0);" id="{{$a->following_id}}" follower_id="{{ $a->id }}" class="sph-button following">Following</a>
                                @else
                                <a href="" class="sph-button">Following</a>
                                @endif
                            </div>
                        </div>
    @endforeach

@else
    <tr class="text-center"><td colspan="8">You haven’t yet Invested or purchased stocks in any music artist brands listed on Valyou X. Please visit the market page to begin.</td></tr>
@endif
            
@if($totalnumber>10)
    <a style="margin-top: 10%;font-size: 20px;" href="javascript:void(0);" data-id="{{$last_id}}" data-follower="1"  class="text-success loadbtn1 loadbtn-mobile">Load more </a>';
@endif


