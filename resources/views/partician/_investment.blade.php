@if(!empty($investors_list))
    @if($totalnumber>10)
        @php unset($investors_list[$totalnumber-1]); @endphp
    @endif
        @foreach($investors_list as $row)
                                <tr>
                                    <td>
                                      <div class="team">
                                        <a href="artist/stock-price/{{ $row->artist_id}}" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Bobby K.9.">
                                            <img src="{{ asset($row->photo) }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                        <span>{{ $row->brand }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-muted">
                                    <h5 class="font-size-14 mb-1">{{ $row->quantity}}</h5>
                                       
                                    </div>
                                </td>
                                <td>
                                    <div class="text-muted">$ {{ $row->stock_value }}</div>
                                </td>
                                <td>
                                <div class="text-muted">{{ $row->total_cost }}</div>
                                    
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1 text-muted">0.001%</h5>
                                    <div class="text-muted">$1,000</div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1 text-muted">10,000,000</h5>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1 text-muted">100</h5>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1 text-muted">9,999,900</h5>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1 text-muted">4.256</h5>
                                    <div class="text-muted">$6425.42</div>
                                </td>
                                <td>1</td>
                               
                                <td>
                                    <a href="artist/stock-price/{{ $row->artist_id}}"  class="btn btn-black btn-sm w-xs">View</a>
                                </td>
                            </tr>

            @endforeach
        @else
            <tr class="text-center"><td colspan="8">You haven’t yet Invested or purchased stocks in any music artist brands listed on Valyou X. Please visit the market page to begin.</td></tr>
        @endif

        @if($totalnumber>10)
             <tr class="pagination-loadmore " style="    text-align: center;">
            <td colspan="6"><a href="javascript:void(0);"  data-id="{{$last_id}}" class="text-success loadbtn2">
            Load more </a></td>
            </tr> 

        @endif
                            
                            
                            