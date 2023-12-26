<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use DB;
use App\Models\Valyoux_access_tokens;
use Auth;
use App\Models\Settings;
use App\Models\Notifications;
use App\Models\RevenueDetail;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request) {
     

        //p(1);
        if (Session::get('lang')) {
            App::setLocale(Session::get('lang'));
        }
        if (view()->exists($request->path())) {
        
       
            if ($request->path() == 'market') { 
                $artists = DB::select("SELECT u.* FROM role_user as r JOIN users u on u.id=r.user_id WHERE r.role_id=2");
                $id = Auth::user()->id;
                $allUsers = DB::select("SELECT * FROM users where id!=$id");
           
                return view($request->path(), ['artists' => $artists, 'allUsers' => $allUsers]);
            } elseif($request->path() == 'chat'){
            	
            	return view($request->path());
            }else {
                return view($request->path());
            }
        }
        return view('pages-404');
    }
    public function adminprofile(){
        $title = 'Admin Profile';
         return view('admin-profile', compact('title'));
    }
    public function loadmore() {
        $limit = 11;
        $page = isset($_GET['offset']) ? $_GET['offset'] : 0;
        $field = isset($_GET['field']) ? $_GET['field'] : '';
        $and = '';
        $order_by = 'market_value DESC';
        $tabId = $_GET['tabId'];
        if ($tabId != 'all') {
            $and = "and category=$tabId";
        }
        if ($_GET['search']) {
            $search = $_GET['search'];
            $and .= " and brand like '%$search%'";
        }
        if (isset($_GET['myartists']) && $_GET['myartists']) {
            $user_id = Auth::user()->id;
            $and .= " and user_id=$user_id";
        }
        if (isset($_GET['field']) && $_GET['field']) {
            $order_by = $_GET['field'] . ' ' . $_GET['type'];
        }
        $artists = DB::select("SELECT a.* FROM artists as a Where 1 $and  order by $order_by LIMIT  $limit OFFSET $page");

        //return response()->json(["artists" => $artists]);

        $html = "";
        $html2 = "";
        $html3 = "";

        $last_id = $page + 10;
        $totalnumber = count($artists);
        if (!empty($artists)) {
            if ($totalnumber > 10) {
                unset($artists[$totalnumber - 1]);
            }
            $d = 1;
            $b = 1;
            $c = 1;
            foreach ($artists as $key => $a) {
                     $i = $page+$d;

                $stock_value = $market_value = $dividend_payments = '';
                if ($a->stock_value > 0) {
                    $stock_value = '$' . number_format($a->stock_value,2);
                }
                if ($a->market_value > 0) {
                    $market_value = $a->market_value;
                }
                if ($a->dividend_payments > 0) {
                    $dividend_payments = number_format($a->dividend_payments,8) . '%';
                }

                $html .= '<tr>';
                $html .= '<td class="text-center" style="width: 1%;"><span class="font-size-14">' . ($i) . '.</span></td>';

                $html .= '<td  style="width: 15%">';
                $html .= '<div class="team">';
                $html .= '<a href="artist/stock-price/' . $a->id . '" class="team-member d-inline-block"
                                                   data-toggle="tooltip" data-placement="top" title=""
                                                   data-original-title="' . $a->brand . '">
                                                    <img src="' . asset($a->photo) . '" width="60" height="60" style="object-fit: cover;" class="rounded-circle avatar-xm m-1"
                                                         alt="">
                                                </a>';
                $html .= '</div>';
                $html .= '<div><h5 class="text-truncate font-size-14"><a href="artist/stock-price/' . $a->id . '" class="text-v-medium text-capitalize">' . $a->brand . '</a></h5>';
                $html .= '<p class="text-muted mb-0 music-title text-capitalize">' . $a->about . '</p></div>';
                $html .= '</td>';
                $html .= '<td  style="width: 10%" class="row-btn-margin" >';
                if ((!empty($a->change_stock)) && $a->change_stock > 0) {
                    $html .= '<a href="artist/stock-price/' . $a->id . '"><img width="20" class="mr-3" src="' . asset('assets/images/valyoux/green_arrow_price_going_up.svg') . '" alt=""></a><span class="status-success" style="width:85px;">+ ' . numberformat($a->change_stock) . '%</span>';
                } else if ((!empty($a->change_stock)) && $a->change_stock < 0) {
                    $html .= '<a href="artist/stock-price/' . $a->id . '"><img width="20" class="mr-3" src="' . asset('assets/images/valyoux/pink_arrow_circle_down.svg') . '" alt=""></a><span class="status-danger" style="width:85px;">' . signFormat($a->change_stock,0) . '%</span>';
                }
                if($market_value == 0 || $market_value == null)
                    $market_value = '';
                else
                    $market_value = '$' . number_format($market_value);


                $html .= '</td>';
                $html .= '<td  style="width: 10%" class="text-color-change">' . $stock_value . '</td>';
                $html .= '<td  style="width: 10%">' . $market_value . '</td>';
                $html .= '<td  style="width: 10%" >' . $dividend_payments . '</td>';

                if (isset($_GET['myartists']) && $_GET['myartists']) {
                    if(check_role() == 1){
                        $checked = '';
                        $class = '';
                         if($a->primary_artist == 1){
                             $class = 'Primary Artist';
                             $checked =  ($a->primary_artist==1)?'checked':'';
                         }
                        $html .='<td><input  style="margin-left: 40px;" '.$checked.' type="checkbox" onclick="setPrimaryArtist('.$a->id.',this)" name="primary_artist" value="1"><br>'.$class.'</td>';

                    }
                        $html .= '<td  style="width: 10%" ><a title="Edit" href="artist/artist/edit/' . $a->id . '" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></a>&nbsp;<button title="Delete" type="button" name="delete" id="' . $a->id . '" class="delete btn btn-v-pink btn-sm"><i class="fa fa-trash"></i></button></td>';
                }

                $html .= '<td  style="width: 10%"><span aria-label="This artist brand is not yet trading on Valyou X stock market. You can sign this artist and be the first to own stock in their brand by investing the initial capital required to list this artist as an upcoming, professional, or major artist brand.The initial capital pays for listing fees and establishing their company!" data-microtip-position="left" role="tooltip" data-microtip-size="large"><i class="mdi mdi-alert-circle-outline me-2 custom-icon-hover"  style="font-size: 18px; margin-right: 10px;"></i></span><a class="trade-market" href="artist/stock-price/' . $a->id . '">Invest in Artist</a></td>';
                $html .= '</tr>';
                $d++;
            }
            foreach ($artists as $key2 => $a) {
                $stock_value = $market_value = $dividend_payments = '';
                if ($a->stock_value > 0) {
                    $stock_value = '$' . number_format($a->stock_value,2);
                }
                if ($a->market_value > 0) {
                    // $market_value = '$' . numberformat($a->market_value);
                }
                if ($a->dividend_payments > 0) {
                    $dividend_payments = number_format($a->dividend_payments,8) . '%';
                }
                $j = $page+$b;
                $html2 .= '<tr>';
                $html2 .= '<td class="text-center"><span class="font-size-14">' . ($j) . '.</span></td>';

                $html2 .= '<td class="paddingleftrightzero" >';
                $html2 .= '<div class="team">';
                $html2 .= '<a href="artist/stock-price/' . $a->id . '" class="team-member d-inline-block" data-toggle="tooltip" data-placement="top" title="" data-original-title="' . $a->brand . '">
                                                    <img src="' . asset($a->photo) . '" width="60" height="60" style="object-fit: cover;" class="rounded-circle avatar-xm m-1" alt="">
                                                </a>';
                $html2 .= '</div>';
                $html2 .= '<div><h5 class="text-truncate font-size-14"><a href="artist/stock-price/' . $a->id . '" class="text-v-medium text-capitalize">' . $a->brand . '</a></h5>';
                $html2 .= '<p class="stock-price mb-0 text-color-change stock_value_" id="'.$a->id.'"><a onclick="changeValue('.$a->id.',1)">'.$stock_value.'</a></p></div>';
            	$html2 .= '<p class="stock-price mb-0 mobile_market market_value_"><a onclick="changeValue('.$a->id.',2)"> $'.number_format($a->market_value, 2).'</a></p>';
            	$html2 .= '<p class="stock-price mb-0 mobile_market dividend_payments_"><a onclick="changeValue('.$a->id.',3)">'.$dividend_payments.'</a></p>';
            	$html2 .= '<p class="text-muted music-title text-capitalize">' . $a->about . '</p>';
                $html2 .= '</td>';
                $html2 .= '<td class="row-btn-margin">';
                if ((!empty($a->change_stock)) && $a->change_stock > 0) {
                    $html2 .= '<a href="artist/stock-price/' . $a->id . '"><img width="20" class="mr-3" src="' . asset('assets/images/valyoux/green_arrow_price_going_up.svg') . '" alt=""></a><span class="status-success" style="width:85px;">+ ' . numberformat($a->change_stock) . '%</span>';
                } else if ((!empty($a->change_stock)) && $a->change_stock < 0) {
                    $html2 .= '<a href="artist/stock-price/' . $a->id . '"><img width="20" class="mr-3" src="' . asset('assets/images/valyoux/pink_arrow_circle_down.svg') . '" alt=""></a><span class="status-danger" style="width:85px;">' . signFormat($a->change_stock,0) . '%</span>';
                }

                $html2 .= '</td>';
                $html2 .= '</tr>';
                $b++;
            }
            foreach ($artists as $key3 => $a) {
                $k = $page+$c;
                $stock_value = $market_value = $dividend_payments = '';
                if ($a->stock_value > 0) {
                    $stock_value = '$' . numberformat($a->stock_value,2);
                }
                if ($a->market_value > 0) {
                    $market_value = '$' . numberformat($a->market_value);
                }
                if ($a->dividend_payments > 0) {
                    $dividend_payments = numberformat($a->dividend_payments) . '%';
                }
                $html3 .= '<tr>';
                $html3 .= '<td class="text-center"><span class="font-size-14">' . ($k) . '.</span></td>';

                $html3 .= '<td  style="width: 10%">';
                $html3 .= '<div class="team">';
                $html3 .= '<a href="artist/stock-price/' . $a->id . '" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="' . $a->brand . '">
                                            <img src="' . asset($a->photo) . '" width="60" height="60" style="object-fit: cover;" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>';
                $html3 .= '</div>';
                $html3 .= '<div><h5 class="text-truncate font-size-14"><a href="artist/stock-price/' . $a->id . '" class="text-v-medium">' . $a->brand . '</a></h5>';
                $html3 .= '<p class="text-muted mb-0 music-title">' . $a->about . '</p></div>';
                $html3 .= '</td>';

                $html3 .= '<td  style="width: 10%" class="row-btn-margin" >';
                if ((!empty($a->change_stock)) && $a->change_stock > 0) {
                    $html3 .= '<a href="artist/stock-price/' . $a->id . '"><img width="20" class="mr-3" src="' . asset('assets/images/valyoux/green_arrow_price_going_up.svg') . '" alt=""></a><span class="status-success" style="width:85px;"> +' . numberformat($a->change_stock) . '%</span>';
                } else if ((!empty($a->change_stock)) && $a->change_stock < 0) {

                    $html3 .= '<a href="artist/stock-price/' . $a->id . '"><img width="20" class="mr-3" src="' . asset('assets/images/valyoux/pink_arrow_circle_down.svg') . '" alt=""></a><span class="status-danger" style="width:85px;">' . signFormat($a->change_stock,0) . '%</span>';
                }
                $html3 .= '</td>';
                $html3 .= '<td  style="width: 10%">' . $stock_value . '</td>';
                $html3 .= '<td  style="width: 10%">' . $market_value . '</td>';
                $html3 .= '<td  style="width: 10%" >' . $dividend_payments . '</td>';
                $html3 .= '</tr>';
                $c++;
            }

        } else {
        		$html .= '<tr class="text-center"><td colspan="8">There are no music artists brands listed yet in this category.</td></tr>';
            	$html2 .= '<tr class="text-center"><td colspan="8">There are no music artists brands listed yet in this category.</td></tr>';
            	$html3 .= '<tr class="text-center"><td colspan="8">There are no music artists brands listed yet in this category.</td></tr>';
            // $html .= '<tr class="text-center"><td colspan="8">You haven’t yet Invested or purchased stocks in any music artist brands listed on Valyou X. Please visit the market page to begin.</td></tr>';
            // $html2 .= '<tr class="text-center"><td colspan="8">You haven’t yet Invested or purchased stocks in any music artist brands listed on Valyou X. Please visit the market page to begin.</td></tr>';
            // $html3 .= '<tr class="text-center"><td colspan="8">You haven’t yet Invested or purchased stocks in any music artist brands listed on Valyou X. Please visit the market page to begin.</td></tr>';
        }

        if ($totalnumber > 10) {
            $html .= '<tr class="pagination-loadmore">
        	   		    <td colspan="7"><a href="javascript:void(0);" data-tab="'.$tabId.'" data-id="'.$last_id.'" class="text-success loadbtn">
                            Load more </a></td>
        	    		</tr>';

            $html2 .= '<tr class="pagination-loadmore">
                        <td colspan="6"><a href="javascript:void(0);" data-tab="'.$tabId.'" data-id="'.$last_id.'" class="text-success loadbtn">
                        Load more </a></td>
                        </tr>';

            $html3 .='<tr class="pagination-loadmore">
                        <td colspan="6"><a href="javascript:void(0);" data-tab="'.$tabId.'" data-id="'.$last_id.'" class="text-success loadbtn">
                        Load more </a></td>
                    </tr>';
        }
        echo json_encode(['web' => $html, 'mobile' => $html2, 'tab' => $html3]);
    }

    public function root() {
        if (Session::get('lang')) {
            App::setLocale(Session::get('lang'));
        }
    	$revenueDetail = RevenueDetail::selectRaw("count(*) as total,(SELECT sum(amount) from revenue_details  where type =1 )as buy_stock,
    											(SELECT sum(amount) from revenue_details  where type =2 ) as sell_stock,
                                                (SELECT sum(amount) from revenue_details  where type =3 ) as crypto_conversion,
                                                (SELECT sum(amount) from revenue_details  where type =4 ) as promote_audio,
                                                (SELECT sum(amount) from revenue_details  where type =5 ) as promote_video,
                                                (SELECT sum(amount) from revenue_details  where type =6 ) as credit_card")
    	->first();
    	$setting = Settings::get();
    	$setting = $setting[0];
    
    	if(Auth::user()->roles->contains(1)){
            // api charge listing data load
            $client = new \GuzzleHttp\Client();
            $header = [
                'accept' => 'application/json',
                'content-type'=>'application/json',
                'X-CC-Api-Key'=>env('CRYPTO_KEY'),
                'X-CC-Version'=> '2018-03-22'
            ];
            $list_charges = $client->request('GET', 'https://api.commerce.coinbase.com/charges', [
                'headers' => $header,
            ]);
            // get access token history
            $notes = exchangeRateNote();
            $AccessTokenHistory = Valyoux_access_tokens::with('to_user')->with('from_user')->orderBy('id', 'DESC')->get();
            $listing_data = json_decode($list_charges->getBody());
            $listing = "";
            foreach($listing_data->data as $list){
                if(isset($list->metadata->customer_id)){
                    $status = array_reverse($list->timeline);
                    // print_r($status[0]);die;
                    $listing .= '<tr>
                                 <td>'.$list->id.'</td>
                                 <td>'.$list->metadata->customer_id.'</td>
                                 <td>'.$list->metadata->customer_name.'</td>
                                 <td>'.$list->addresses->usdc.'</td>
                                 <td>'.$list->code.'</td>
                                 <td>$'.$list->pricing->usdc->amount.' USDC</td>
                                 <td>'.$list->pricing->usdc->currency.'</td>
                                 <td>'.$status[0]->status.'</td>
                                 <td>'.$list->created_at.'</td>
                                 <td>'.$list->expires_at.'</td>
                                 </tr>';
               
            }
        }
        	return view('index',compact('setting','revenueDetail','listing','notes','AccessTokenHistory'));
        
        }
    	elseif(Auth::user()->roles->contains(2)){
        	return redirect('admin-profile');
    	}
    	elseif(Auth::user()->roles->contains(3)){
        	return redirect('investor');
    	}
    	elseif(Auth::user()->roles->contains(4)){
        	return redirect('business-profile');
    	}
    
        
    }
    public function settings() {
        $title = 'Settings';
        $settings = new Settings;
        $data = $settings->get();
        $data = $data[0];
        return view('settings',compact('title','data'));
    }
    public function settings_post(Request $request) {
        $settings = new Settings;
        if($request->id){
            $settings=Settings::find($request->id);
                $msg = 'Admin settings updated!';
            }else{
                $msg = 'Admin Settings updated!';
            }

        $settings->admin_fees = $request->admin_fee;
        $settings->usdc_to_vxd = $request->usdc_to_vxd;
        $settings->promotion_fees = $request->promotion_fee;
        $settings->video_streaming_fee = $request->video_streaming_fee;
        $settings->audio_streaming_fee = $request->audio_streaming_fee;
        $settings->admin_video_streaming_fee = $request->admin_video_streaming_fee;
        $settings->admin_audio_streaming_fee = $request->admin_audio_streaming_fee;
        $settings->advertisement_fee = $request->advertisement_fee;
        $settings->increments = $request->increments;
        $settings->market_maker_price = $request->market_maker_price;
        $settings->sell_limit = $request->sell_limit;
        $settings->stripe_charges = $request->stripe_charges;
        $settings->valyoux_access_token_subscription_fee = $request->valyoux_access_token_subscription_fee;
        $settings->liquidity = $request->liquidity;

        
        $settings->save();
        // dd($request);
        return redirect('settings')->with('success', $msg);
    }

}
