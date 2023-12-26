<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BankControllerRequest;
use Illuminate\Http\Request;
use App\Models\Wallet;
use App\Models\Admin_wallet;
use App\Models\Valyoux_access_tokens;
use App\Models\StockTransaction;
use App\User;
use App\Models\CoinbasePayments;
use App\Models\Coinbase_checkout;
use App\Models\VipPoints;
use App\Models\VideoUploads;
use DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Artist;
use App\Models\Notifications;
use Illuminate\Support\Facades\Mail;
use App\Mail\ValyouArtist;
use Twilio\Rest\Client;
use App\Models\Settings;
use App\Models\RevenueDetail;
use App\Models\Promotion;
use App\Models\PromotionDetails;

use \DateTime;
use \DateTimeZone;

use Session;

use Stripe;

class BankController extends Controller
{
	public function index()
	{
        
		$users = User::select(
			DB::raw("CONCAT(email, '  (' ,first_name,' ',last_name,')') AS name"),'id')
		->pluck('name', 'id');

		$notes = exchangeRateNote();
        
		$transactions_result = Wallet::with('to_user')->with('from_user')->with('artist')->
		where(function($q) {
			$q->where('from_user_id', auth()->user()->id)
			->orWhere('to_user_id', auth()->user()->id);
		})->orderBy('id', 'DESC')->get();
		

		/* START ARTIST TRANSACTION SECTION */
		$artist = [];
		$artistTotal = '0.0000';
		$artistData = Artist::where('user_id',auth()->user()->id)->latest()->first();
		if(is_object($artistData)){
          //$artistData->id
			$artistTransactions = Wallet::with('to_user')->with('from_user')->with('artist')->
			where('artist_id',$artistData->id)->orderBy('id', 'DESC')->get();
            //p(count($artistTransactions));
        	
			foreach($artistTransactions as $key=>$row){
            	
				$fromname = $row['from_user']['first_name'] . ' ' .  $row['from_user']->last_name;
				$toname = $row['to_user']['first_name'] . ' ' .  $row['to_user']['last_name'];
            
            	$from_profile = $row['from_user']['avatar'];
            	$to_profile = $row['to_user']['avatar'];

				if($row->artist_id == ''){
					$from_name =  $fromname;
					$to_name = $toname ;
				}else if($row['from_user']['id'] == $row['artist']['user_id']){
					$from_name =  $row['artist']['brand'];
					$to_name = $toname ;
				}else if($row['to_user']['id'] == $row['artist']['user_id']){
					$from_name = $fromname ;
					$to_name = $row['artist']['brand'] ;
				}

				if($row->type == 0){
					$note = $notes[$row->note]['title'];
				}else{
					$note = $row->note;
				}
				
				$artistTotal = $artistTotal + $row->amount;
				$artist[$key]['type'] = $row->type;
				$artist[$key]['from_name'] = $from_name;
				$artist[$key]['to_name'] = $to_name;
				$artist[$key]['from_profile'] = $from_profile;
				$artist[$key]['to_profile'] = $to_profile;
				$artist[$key]['token'] = $row->token;
				$artist[$key]['amount'] = $row->amount;
				$artist[$key]['note'] = $note;
				$artist[$key]['created_at'] = dateFormat($row->created_at);
			}

		}
      //p($artist);
		/* END ARTIST TRANSACTION SECTION */

		$transactions= [];   $investor = []; $business = [];
		$fromname = ''; $toname = '';

		$investorTotal = '0.0000';
		$businessTotal = '0.0000';
		
    	// echo "<pre>";
    	// print_r($transactions_result);die;
		foreach($transactions_result as $key=>$row){
            try {
           
                //code...
                $fromname = $row['from_user']['first_name'] . ' ' .  $row['from_user']->last_name;
                if(!isset($row['to_user']['first_name']) &&  $row->type == 5){
                    $toname = "Valyou X Escrow";
                }else {
                    $toname = $row['to_user']['first_name'] . ' ' .  $row['to_user']['last_name'];
                }
                $from_profile = $row['from_user']['avatar'];
                $to_profile = $row['to_user']['avatar'];
    
                if($row->artist_id == ''){
                    $from_name =  $fromname;
                    $to_name = $toname ;
                }else if($row['from_user']['id'] == $row['artist']['user_id']){
                    $from_name =  $row['artist']['brand'];
                    $to_name = $toname ;
                }else if($row['to_user']['id'] == $row['artist']['user_id']){
                    $from_name = $fromname ;
                    $to_name = $row['artist']['brand'] ;
                }
            
    
                if($row->type == 0){
                $note = $notes[$row->note]['title'];
                }else{
                    $note = $row->note;
                }
         
            
    
                if($row->user_role == 1){
               
                    $transactions[$key]['type'] = $row->type;
                
                    $transactions[$key]['from_name'] = $from_name;
                    $transactions[$key]['to_name'] = $to_name;
                    $transactions[$key]['token'] = $row->token;
                    $transactions[$key]['amount'] = $row->amount;
                    $transactions[$key]['note'] = $note;
                    $transactions[$key]['created_at'] = dateFormat($row->created_at);
                
                 
                }else if($row->user_role == 3 && $row->from_user_id == auth()->user()->id){
                    $investorTotal = $investorTotal + $row->amount;
                    $investor[$key]['type'] = $row->type;
                    $investor[$key]['from_name'] = $from_name;
                    $investor[$key]['to_name'] = $to_name;
                    $investor[$key]['token'] = $row->token;
                    $investor[$key]['amount'] = $row->amount;
                    $investor[$key]['note'] = $note;
                    $investor[$key]['created_at'] = dateFormat($row->created_at);
                }else if($row->user_role == 4){
                    $businessTotal = $businessTotal + $row->amount;
                    $business[$key]['type'] = $row->type;
                    $business[$key]['from_name'] = $from_name;
                    $business[$key]['to_name'] = $to_name;
                    $business[$key]['token'] = $row->token;
                    $business[$key]['amount'] = $row->amount;
                    $business[$key]['note'] = $note;
                    $business[$key]['created_at'] = dateFormat($row->created_at);
                }
                $transactions[$key]['type'] = $row->type;
                $transactions[$key]['from_name'] = $from_name;
                $transactions[$key]['to_name'] = $to_name;
                $transactions[$key]['to_profile'] = $to_profile;
                $transactions[$key]['from_profile'] = $from_profile;
                $transactions[$key]['token'] = $row->token;
                $transactions[$key]['amount'] = $row->amount;
                $transactions[$key]['note'] = $note;
                $transactions[$key]['created_at'] = dateFormat($row->created_at);
            } catch (\Throwable $th) {
                //throw $th;
            }



		}

		$total['artist_total'] = $artistTotal;
		$total['business_total'] = $businessTotal;
		$total['investor_total'] = $investorTotal;


		$transactions_data['personal']=$transactions;
		$transactions_data['artist']=$artist;
		$transactions_data['investor']=$investor;
		$transactions_data['business']=$business;

        // access token history
        if(auth()->user()->is_admin == 1) {
        $AccessTokenHistory = Valyoux_access_tokens::with('to_user')->with('from_user')->orderBy('id', 'DESC')->get();
        }else{
        $AccessTokenHistory = Valyoux_access_tokens::with('to_user')->with('from_user')->where('to_user_id',auth()->user()->id)->orwhere('from_user_id',auth()->user()->id)->orderBy('id', 'DESC')->get();

        }
        // echo "<pre>";
        // print_r($AccessTokenHistory);die;
        // api charge listing data load
        $code_status_new = CoinbasePayments::where('customer_id', auth()->user()->id)->where('charge_status','NEW')->value('charge_code');
        $code_status_pending = CoinbasePayments::where('customer_id', auth()->user()->id)->where('charge_status','PENDING')->value('charge_code');
        $client = new \GuzzleHttp\Client(['http_errors' => false]);
        $header = [
            'accept' => 'application/json',
            'content-type'=>'application/json',
            'X-CC-Api-Key'=>env('CRYPTO_KEY'),
            'X-CC-Version'=> '2018-03-22'
        ];
       
        $list_charges = $client->request('GET', 'https://api.commerce.coinbase.com/charges', [
            'headers' => $header,
          ]);
        //show charge API
		if(!empty($code_status_new)){
        
        $show_charges = $client->request('GET', 'https://api.commerce.coinbase.com/charges/'.$code_status_new, [
            'headers' => $header,
          ]);
        $show_charge_data = json_decode($show_charges->getBody())->data;
        $status = array_reverse($show_charge_data->timeline);
        $show_charge_status = $status[0]->status;
        if($show_charge_status == 'PENDING'){
            CoinbasePayments::where('customer_id', auth()->user()->id)->where('charge_status','NEW')->update(['charge_status'=> 'PENDING']);
        }
        }

        if(!empty($code_status_pending)){
        
            $show_charges = $client->request('GET', 'https://api.commerce.coinbase.com/charges/'.$code_status_pending, [
                'headers' => $header,
              ]);
            $show_charge_data = json_decode($show_charges->getBody())->data;
            $status = array_reverse($show_charge_data->timeline);
            $show_charge_status = $status[0]->status;
            
            if($show_charge_status == 'COMPLETED'){
    
                $exchange_fee = settings()->usdc_to_vxd;
                $admin = User::where('is_admin',1)->get();
                $totalValyouAmount = User::where('id',auth()->user()->id)->value('wallet');
                $amount_usdc = $show_charge_data->pricing->usdc->amount/100 * $exchange_fee;
                $purchased_amount = $show_charge_data->pricing->usdc->amount - $amount_usdc;
                $newTotalAmount = $totalValyouAmount + $purchased_amount;
                User::where('id', auth()->user()->id)->update(['wallet'=> $newTotalAmount]);
                CoinbasePayments::where('customer_id', auth()->user()->id)->where('charge_status','PENDING')->update(['charge_status'=> 'COMPLETED']);
                $this->WalletAmountTransactionForAdmin(auth()->user()->id,3,$amount_usdc,null,$this->generateToken(),'USD',3);
                $this->walletTransaction(check_role(), auth()->user()->id, auth()->user()->id, null, $purchased_amount, $this->generateToken(), 'You purchased VXD using USDC Cryptocurrency.', 3);
                $this->walletTransaction(1, auth()->user()->id, 3, null, $amount_usdc, $this->generateToken(), 'Exchange Rates Fees (USDC -VXD )', 3);
            
            }
        }
       
        $listing_data = json_decode($list_charges->getBody());
        $listing = "";
        foreach($listing_data->data as $list){
            if(isset($list->metadata->customer_id)){
                if(auth()->user()->id == $list->metadata->customer_id){
                    $status = array_reverse($list->timeline);
                    
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
            
        }
       
        // start get listing from db
        $listing_data = Coinbase_checkout::orderby('id','desc')->get();
        // end get listing from db
        $listing_checkout = '';
        foreach($listing_data as $list){
                    $listing_checkout .= '<tr>
                            <td>'.$list->checkout_id.'</td>
                            <td>'.$list->customer_name.'</td>
                            <td>'.$list->currency.'</td>
                            <td>'.$list->amount.'</td>
                            <td>'.$list->status.'</td>
                            <td>'.$list->desc.'</td>
                            <td>'.$list->resource.'</td>
                            <td>'.$list->created_at.'</td>
                            <td>
                                <div>
                                <a
                                class="buy-with-crypto"
                                href="https://commerce.coinbase.com/checkout/'.$list->checkout_id.'"
                                >
                                <span>Approve</span>
                                </a>
                                <script src="https://commerce.coinbase.com/v1/checkout.js"></script>
                                <a type="button" style="color:#fff;" class="btn btn-danger mb-3" href="'.route('admin.deleteSellCrypto.delete',[$list->checkout_id]).'"><span>Delete</span></a>
                                </div>
                            </td>
                                </tr>';
                
        }
        // apply check for artist account
        $artist_model = new Artist;
        $checkArtist = $artist_model->artistByUser(auth()->user()->id);
        $admin_wallet = Admin_wallet::get();
        $admin_amount = '0.00';
        if(!empty($admin_wallet)){
           $admin_amount = Admin_wallet::where('admin_id',3)->sum('amount'); 
          
        }
        //get all user amount
        $user_wallet = User::get();
        $users_all_amount = '0.00';
        if(!empty($user_wallet)){
           $users_all_amount = User::sum('wallet'); 
           $users_reserve_amount = 400000000000 - $users_all_amount;
          
        }

        $settings = Settings::get()[0];

        echo view('bank.crypto-wallet',compact('users','settings','notes','transactions_data','total','listing','listing_data','checkArtist','admin_amount','listing_checkout','users_all_amount','users_reserve_amount','AccessTokenHistory'))->render();
	}


	public function deposit(BankControllerRequest $request)
	{
		// $mailBody = file_get_contents('https://dev.lembits.in/valyouxmusic/resources/views/mail/mail_content.php');

		$wallet = auth()->user()->wallet;
		if ((float)$wallet >= (float)$request->wallet) {
			User::whereId(auth()->user()->id)->update(['wallet' => (float)$wallet - (float)$request->wallet]);
			$userWallet = User::whereId($request->user_id)->select('wallet')->first()->wallet;
			User::whereId($request->user_id)->update(['wallet' => (float)$userWallet + (float)$request->wallet]);

            $this->walletTransaction(check_role(), auth()->user()->id, $request->user_id, null, $request->wallet, $this->generateToken(), $request->note, null);

            $this->sendNotificationTo(1, auth()->user()->id, $request->user_id, null, 'Admin sent you money');

			session()->flash('success',"Transfered Successfully.");


			return response()->json(['status' => 'success']);
		} else {
			session()->flash('error',"No request generated yet.");
            return response()->json([
                'status' => 'error',
                'message' => "Another user already purchased for the price({$request->initial_stock_value_sell})."
            ]);
		}

	}
    //
    public function depositAccessToken(BankControllerRequest $request)
	{
		// $mailBody = file_get_contents('https://dev.lembits.in/valyouxmusic/resources/views/mail/mail_content.php');
        $from_user_id = auth()->user()->id;
        $to_user_id = $request->user_id;
		$access_token = auth()->user()->access_token;
		if ((float)$access_token >= (float)$request->wallet) {
			User::whereId(auth()->user()->id)->update(['access_token' => (float)$access_token - (float)$request->wallet]);
			$userWallet = User::whereId($request->user_id)->select('access_token')->first()->access_token;
			User::whereId($request->user_id)->update(['access_token' => (float)$userWallet + (float)$request->wallet]);

            // history save
            if (auth()->user()->access_token !='') {
                $id = auth()->user()->id;
                $access_token = User::where('id',$id)->value('access_token');
            } else {

                $access_token = '0.0';
            }
            $access_token_current_value = $request->wallet * 0.10;
            $this->AccessTokenTransactionHistory($from_user_id, $to_user_id, $request->wallet,$access_token_current_value, null, $access_token, null, $request->note);

            $this->sendNotificationTo(1, auth()->user()->id, $request->user_id, null, 'Admin sent you Valyou X access token');

			session()->flash('success',"Transfered Successfully.");

			return response()->json(['status' => 'success']);
		} else {
			session()->flash('error',"No request generated yet.");
            return response()->json([
                'status' => 'error',
                'message' => "You do not have enough Tokens in your account balance to transact."
            ]);
		}

	}
    //
    public function buyStock(Request $request){

		
		$wallet = auth()->user()->wallet;
		$artist = Artist::find($request->artist_id);
        $artist_info_in_user_table = User::where('id', $artist->user_id)->first();
		$admin = User::where('is_admin',1)->get();

        // get current stock value of database
        $current_stock_value = $artist->stock_value;

		if ((float)$wallet > (float)$request->buyer_cost && ($request->quantity) > 0) {
            //buyer
			User::whereId(auth()->user()->id)->update(['wallet' => (float)$wallet - (float)$request->buyer_cost]);
            //admin
			User::whereId($admin[0]->id)->update(['wallet' => (float)$admin[0]->wallet + (float)$request->admin_cost]);
        	
            //artist
			User::whereId($artist->user_id)->update(['wallet' => ((float)$artist_info_in_user_table->wallet + (float)$request->initial_stock_value * $request->quantity - (float)$request->artist_cost)]);
        
        	//revenue transcation
        	$admin_fees = settings()->admin_fees/100;
        	RevenueDetail::insert(['amount' => $admin_fees,'type'=>'1','admin_id'=>$admin[0]->id,'created_at' => date("Y-m-d H:i:s", strtotime('now')),'updated_at' => date("Y-m-d H:i:s", strtotime('now'))]);




			if($artist->total_supply > 0){
                $initial_supply = $artist->total_supply + $artist->circulating_supply;
                $artist->stock_value = (float)$request->initial_stock_value + (float)$request->quantity * settings()->increments;
                $artist->market_value = $artist->stock_value * $initial_supply;
                $artist->dividend_payments = ($artist->circulating_supply + $request->quantity) / $initial_supply * 100;
                $artist->change_stock = numberformat(($artist->stock_value - $request->initial_stock_value) / $request->initial_stock_value * 100);
                $artist->change_market = numberformat((($artist->total_supply - $request->quantity) * $artist->stock_value - ($artist->total_supply * $request->initial_stock_value))/($artist->total_supply * $request->initial_stock_value) * 100);

                $artist->total_supply = (int)($artist->total_supply - $request->quantity);
                $artist->circulating_supply = (int)($artist->circulating_supply + $request->quantity);

                $artist->music_fan_investor = numberformat_double(($artist->circulating_supply / $initial_supply) * 100);
                $artist->artist = numberformat_double(100 - $artist->music_fan_investor);
                // $artist->artist = 10.000657;

				$artist->save();

			}

			$stock = new stockTransaction;
			$stock->type = 2;
			$stock->user_id = auth()->user()->id;
			$stock->artist_id = $request->artist_id;
			$stock->quantity = $request->quantity;
			$stock->stock_value = $request->initial_stock_value;
			$stock->total_cost = $request->buyer_cost;
			$stock->admin_cost = $request->admin_cost;
			$stock->save();

			$fullname = auth()->user()->first_name . ' ' . auth()->user()->last_name;




            if($artist->category !=  '3'){
                $notification_text = $fullname . ' expressed interest to purchase stock in your brand';
            }else {
                $notification_text = $fullname . ' purchased stock in your brand';
            }

            $this->walletTransaction(check_role(), auth()->user()->id, $artist->user_id, $request->artist_id,$request->initial_stock_value * $request->quantity, $this->generateToken(), $notification_text, 3);

            $this->walletTransaction(1, auth()->user()->id,$admin[0]->id, null, $request->buyer_cost - $request->initial_stock_value * $request->quantity, $this->generateToken(), 'Fees for buying stock from investors', 3);

            $this->walletTransaction(1, auth()->user()->id,$admin[0]->id, null, $request->artist_cost, $this->generateToken(), 'Fees for buying stock from artist', 3);



                //$wallet->note = 'Fees for buying stock from ' .$artist->brand. ' to ' .$fullname;

            $mailSubject = 'Buy your stocks';
            /* START SETTING UP MAIL BODY */
            $mailNotificationText = $notification_text.". Please review them by clicking below button.";
            // $mailBody = str_replace('_CONTENT_',$mailNotificationText,$mailBody);
            // $mailBody = str_replace('_BTN_TEXT_','Review Transaction',$mailBody);
            // $mailBody = str_replace('_BTN_URL_','https://dev.lembits.in/valyouxmusic/public/account-balance',$mailBody);
            // $mailBody = str_replace('_SUBJECT_',$mailSubject,$mailBody);
            /* END SETTING UP MAIL BODY */

            $this->sendNotificationTo(3,auth()->user()->id,$artist->user_id,$request->artist_id,$notification_text);
        
            // send notification to admin
            $this->sendNotificationTo(3,auth()->user()->id,$admin[0]->id,null,'Fees for buying stock from ' .$artist->brand. ' to ' .$fullname);


            $artistOwner = User::select('email')->where('id','=',$artist->user_id)->get()->pluck('email');

            // Mail::html($mailBody, function ($message) use($artistOwner,$mailSubject) {
            //     // $message->to($artistOwner[0])
            // 	$message->to('lb.lembits@gmail.com')
            // 	->subject($mailSubject);
            // 	$message->from('support@valyoux.io', 'ValYou X Music');
            // });
            



            session()->flash('success',"You purchased {$request->quantity} stocks.");

            return response()->json(['status' => 'success']);
        }
        elseif((float)$wallet <= (float)$request->buyer_cost){
            session()->flash('error',"You do not have enough money.");
            return response()->json([
                'status' => 'error',
                'message' => "You do not have enough money."
            ]);
        }
        else {
            session()->flash('error',"Unexpected error occurs.");
            return response()->json([
                'status' => 'error',
                'message' => "Unexpected error occurs."
            ]);
        }
    }
    function sellStock(Request $request){
    

        $wallet = auth()->user()->wallet;
        $artist = Artist::find($request->artist_id);
        $artist_info_in_user_table = User::where('id', $artist->user_id)->first();
        $admin = User::where('is_admin',1)->get();


        $buy_total = StockTransaction::where(['type'=>2,'artist_id'=>$artist->id,'user_id'=> auth()->user()->id])->sum('quantity');
        $sell_total = StockTransaction::where(['type'=>1,'artist_id'=>$artist->id,'user_id'=> auth()->user()->id])->sum('quantity');
        $total_stocks_holding = $buy_total - $sell_total;

        $market_maker_price = $artist->market_maker_price? $artist->market_maker_price/100 : settings() -> market_maker_price/100;


        // get current stock value of database
        $current_stock_value = $artist->stock_value;

        if ((float)$artist_info_in_user_table->wallet > (float)$request->seller_cost && 
            ($request->quantity_sell > 0) && 
            $current_stock_value == $request->initial_stock_value_sell && 
            $request->quantity_sell <= $total_stocks_holding && 
            $request->quantity_sell <= ($artist->circulating_supply - $artist->sell_restrictions)) 
        {
            //seller
            User::whereId(auth()->user()->id)->update(['wallet' => (float)$wallet + (float)$request->seller_cost]);
            //admin
            User::whereId($admin[0]->id)->update(['wallet' => (float)$admin[0]->wallet + (float)$request->admin_cost_sell]);
            //artist
            User::whereId($artist->user_id)->update(['wallet' => ((float)$artist_info_in_user_table->wallet - (float)$request->artist_cost_sell)]);
        
        	
        	//revenue sell stock transcation
        	$admin_fees = settings()->admin_fees/100;
        	RevenueDetail::insert(['amount' => $admin_fees,'type'=>'2','admin_id'=>$admin[0]->id ,'created_at' => date("Y-m-d H:i:s", strtotime('now')),'updated_at' => date("Y-m-d H:i:s", strtotime('now')) ]);





            $initial_supply = $artist->total_supply + $artist->circulating_supply;
            $artist->stock_value = (float)$request->initial_stock_value_sell - (float)$request->quantity_sell * settings()->increments;
            $artist->market_value = $artist->stock_value * $initial_supply;
            $artist->dividend_payments = ($artist->circulating_supply - $request->quantity_sell) / $initial_supply * 100;
            $artist->change_stock = numberformat(($artist->stock_value - $request->initial_stock_value_sell) / $request->initial_stock_value_sell * 100);
            $artist->change_market = numberformat((($artist->total_supply - $request->quantity_sell) * $artist->stock_value - ($artist->total_supply * $request->initial_stock_value_sell))/($artist->total_supply * $request->initial_stock_value_sell) * 100);

            $artist->total_supply = (int)($artist->total_supply + $request->quantity_sell);
            $artist->circulating_supply = (int)($artist->circulating_supply - $request->quantity_sell);

            $artist->music_fan_investor = numberformat_double(($artist->circulating_supply / $initial_supply) * 100);
            $artist->artist = numberformat_double(100 - $artist->music_fan_investor);
            // $artist->artist = 10.000657;

            $artist->save();



            $stock = new stockTransaction;
            $stock->type = 1;
            $stock->user_id = auth()->user()->id;
            $stock->artist_id = $request->artist_id;
            $stock->quantity = $request->quantity_sell;
            $stock->stock_value = $request->initial_stock_value_sell;
            $stock->total_cost = $request->seller_cost;
            $stock->admin_cost = $request->admin_cost_sell;
            $stock->save();

            $fullname = auth()->user()->first_name . ' ' . auth()->user()->last_name;

            /*if($artist->category ==  0){
                $notification_text = $fullname . ' Valyou\'s your song.';
            }elseif($artist->category ==  1){
                $notification_text = $fullname . ' valyou\'d your music with '.$request->total_cost.' dollars.';
            }elseif($artist->category ==  2){
                $notification_text = $fullname . ' valyou\'d your song with '.$request->total_cost.' dollars.';
            }else if($artist->category ==  3){
                $notification_text = $fullname . ' purchased stock in your brand';
            }*/


            if($artist->category !=  '3'){
                $notification_text = $fullname . ' expressed interest to sell stock in your brand';
            }else {
                $notification_text = $fullname . ' sell stock in your brand';
            }

            $this->walletTransaction(check_role(), $artist->user_id, auth()->user()->id, $request->artist_id, $request->artist_cost_sell, $this->generateToken(), $notification_text, 3);

            $this->walletTransaction(1, auth()->user()->id, $admin[0]->id, null, $request->admin_cost_sell, $this->generateToken(), 'Fees for buying stock from investors', 3);

                //$wallet->note = 'Fees for buying stock from ' .$artist->brand. ' to ' .$fullname;

            $mailSubject = 'Buy your stocks';
            /* START SETTING UP MAIL BODY */
            $mailNotificationText = $notification_text.". Please review them by clicking below button.";
            // $mailBody = str_replace('_CONTENT_',$mailNotificationText,$mailBody);
            // $mailBody = str_replace('_BTN_TEXT_','Review Transaction',$mailBody);
            // $mailBody = str_replace('_BTN_URL_','https://dev.lembits.in/valyouxmusic/public/account-balance',$mailBody);
            // $mailBody = str_replace('_SUBJECT_',$mailSubject,$mailBody);
            /* END SETTING UP MAIL BODY */

            // send notification to user
            $this->sendNotificationTo(3,auth()->user()->id,$artist->user_id,$request->artist_id,$notification_text);
            
            // send notification to admin
            $this->sendNotificationTo(3,auth()->user()->id,$admin[0]->id,null,'Fees for buying stock from ' .$artist->brand. ' to ' .$fullname);

            $artistOwner = User::select('email')->where('id','=',$artist->user_id)->get()->pluck('email');

            // Mail::html($mailBody, function ($message) use($artistOwner,$mailSubject) {
            //     // $message->to($artistOwner[0])
            // 	$message->to('lb.lembits@gmail.com')
            // 	->subject($mailSubject);
            // 	$message->from('support@valyoux.io', 'ValYou X Music');
            // });

            session()->flash('success',"You sold {$request->quantity_sell} stocks.");

            return response()->json(['status' => 'success']);
        }
        elseif($current_stock_value > $request->initial_stock_value_sell){
            session()->flash('error',"Another user already purchased for the price({$request->initial_stock_value_sell}).");
            return response()->json([
                'status' => 'error',
                'message' => "Another user already purchased for the price({$request->initial_stock_value_sell})."
            ]);
        }
        elseif($current_stock_value < $request->initial_stock_value_sell){
            session()->flash('error',"Another user already sold for the price({$request->initial_stock_value_sell}).");
            return response()->json([
                'status' => 'error',
                'message' => "Another user already purchased for the price({$request->initial_stock_value_sell})."
            ]);
        }
        elseif((float)$artist_info_in_user_table->wallet < (float)$request->seller_cost){
            session()->flash('error',"The artist does not have enough money.");
            return response()->json([
                'status' => 'error',
                'message' => "The artist does not have enough money."
            ]);
        }
        elseif($request->quantity_sell > $total_stocks_holding){
            session()->flash('error',"You are trying to sell more than you are holding.");
            return response()->json([
                'status' => 'error',
                'message' => "You are trying to sell more than you are holding."
            ]);
        }
        elseif($request->quantity_sell > $total_stocks_holding){
            session()->flash('error',"You are trying to sell more than you are holding.");
            return response()->json([
                'status' => 'error',
                'message' => "You are trying to sell more than you are holding."
            ]);
        }
        elseif($request->quantity_sell >  ($artist->circulating_supply - $artist->sell_restrictions)){
            session()->flash('error',"the number of stocks have to be less than circulating supply - sell restriction");
            return response()->json([
                'status' => 'error',
                'message' => "You are trying to sell more than you are holding."
            ]);
        }
        else {
            session()->flash('error',"Unexpected error occurs.");
            return response()->json([
                'status' => 'error',
                'message' => "Unexpected error occurs."
            ]);
        }
    }

    public function investmentPortfolio(){
        $stock = stockTransaction::with('artist')->where(['type'=>2,'user_id'=> auth()->user()->id])->get();
        $sell_stock = stockTransaction::where(['type'=>1,'user_id'=> auth()->user()->id])->sum('total_cost');
        $buy_stock = stockTransaction::where(['type'=>2,'user_id'=> auth()->user()->id])->sum('total_cost');

        $total_stock = 0.0000;
        if($buy_stock > 0){
            $total_stock = $buy_stock - $sell_stock;
        }
        echo view('bank.investment-portfolio',compact('stock','total_stock'))->render();
    }
    public function loadinvestordata(){
        $limit = 11;
        $page = isset($_GET['offset'])?$_GET['offset']:0;
        $type = isset($_GET['type'])?$_GET['type']:'';
        
    	$user_id = isset($_GET['user_id'])?$_GET['user_id']:user_id();
    	//$user_id = user_id();
    	
        $buy_total = stockTransaction::where(['type'=>$type,'user_id'=> $user_id])->sum('quantity');

        $investors_list= DB::select("select t.artist_id,SUM(quantity) as qty,t.user_id,t.quantity,t.stock_value,SUM(t.total_cost) as total_cost,t.dividend_payments,t.brand,t.photo,t.total_supply,t.circulating_supply from (select s.artist_id,s.user_id,s.quantity,s.total_cost,a.brand,a.photo,a.stock_value,a.dividend_payments,a.total_supply,a.circulating_supply from `stock_transaction` as s left join `artists` as a on s.artist_id=a.id where `type` = $type and s.`user_id` = $user_id) as t  group by t.artist_id LIMIT  $limit OFFSET $page");
    	$total_valyou_songs = VipPoints::where(['user_id' => $user_id])->sum('amount');
        
        // dd($investors_list);
        $html="";
      
        $last_id = $page + 10;
        $totalnumber = count($investors_list);
        
            
        $html= view('partician._investors',compact('last_id','totalnumber', 'buy_total','total_valyou_songs','investors_list'))->render();
        echo json_encode(['investors_list'=>$html, 'total_investments' => $totalnumber,'total_valyou_songs'=>$total_valyou_songs]);
        
    }
    public function loadinvestmentdata(){
        $limit = 11;
        $page = isset($_GET['offset'])?$_GET['offset']:0;
        $type = isset($_GET['type'])?$_GET['type']:'';
        $user_id = user_id();


        $investors_list= DB::select("select s.id,s.stock_value,s.artist_id,s.user_id,s.quantity,s.total_cost,a.brand,a.photo from `stock_transaction` as s left join `artists` as a on s.artist_id=a.id where `type` = $type and s.`user_id` = $user_id order by s.id desc  LIMIT  $limit OFFSET $page");
        $html="";

        $last_id = $page + 10;
        $totalnumber = count($investors_list);
        echo view('partician._investment',compact('investors_list','type', 'totalnumber', 'last_id'))->render();
  

        // echo json_encode(['investors_list'=>$html, 'total_investments' => $totalnumber]);
    }

    private function sendNotificationTo($type, $fromUserId, $toUserId, $artistId, $notificationText){
        $notification = new Notifications;
        $notification->notification_type = $type;
        $notification->from_user_id = $fromUserId;
        $notification->to_user_id = $toUserId;
        if($artistId != null){
            $notification->artist_id = $artistId;
        }
        $notification->notification_text = $notificationText;
        $notification->save();
    }

 

    public function stripePost(Request $request)
    {
    

        $wallet = auth()->user()->wallet;
   
        $stripeCharges = settings()->stripe_charges;
    
        $coins = $request->amount - ($request->amount * ($stripeCharges/100));
        // $array = [

        // ];
        // print_r($wallet);
        // die;
        // DB::table('users')->where('id',auth()->user()->id)->update(['wallet' => (float)$wallet + (float)$coins]);
        User::whereId(auth()->user()->id)->update(['wallet' => (float)$wallet + (float)$coins]);
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => $request->amount * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "This payment is tested purpose"
        ]);

   
        // Session::flash('success', 'Payment successful!');
           
        // return back();
    	$this->walletTransaction(check_role(), auth()->user()->id, auth()->user()->id, null, $coins, $this->generateToken(), '45', null);
    	//$this->walletTransaction(check_role(), auth()->user()->id, auth()->user()->id, null, $coins, $this->generateToken(), 'Credit/Debit Card Transaction', null);
        //revenue transcation
        	//$admin_fees = settings()->stripe_charges/100;
        	RevenueDetail::insert(['amount' => $coins,'type'=>'6','admin_id'=>$admin[0]->id,'created_at' => date("Y-m-d H:i:s", strtotime('now')),'updated_at' => date("Y-m-d H:i:s", strtotime('now'))]);
  
        return redirect('account-balance')->with('success', 'Payment successful!');
        
    }
    public function chargecancelPost(Request $request){
       
       

        $code = $request->code;
        $header = [
            'accept' => 'application/json',
            'content-type'=>'application/json',
            'X-CC-Api-Key'=>env('CRYPTO_KEY'),
            'X-CC-Version'=> '2018-03-22'
        ];
        $client = new \GuzzleHttp\Client(['http_errors' => false]);
        $cencel_charges = $client->request('POST', 'https://api.commerce.coinbase.com/charges/'.$code.'/cancel', [
        'headers' => $header,
        ]);
        if($cencel_charges){
            echo $cencel_charges->getBody();die;
        }
       
    }
	public function cryptoPost(Request $request) {
       
        $auth = auth()->user();
        $user_wallet = User::select()->where('id',auth()->user()->id)->value('wallet');
        $fullname = $auth->first_name . ' ' . $auth->last_name;
        // print_r($auth->id);die;
        $header = [
            'accept' => 'application/json',
            'content-type'=>'application/json',
            'X-CC-Api-Key'=>env('CRYPTO_KEY'),
            'X-CC-Version'=> '2018-03-22'
        ];
        $client = new \GuzzleHttp\Client(['http_errors' => false]);
        $create_charges = $client->request('POST', 'https://api.commerce.coinbase.com/charges', [
        'headers' => $header,
          'body' => '{"name":"'.$fullname.'","description":"<h6>Name: </h6>'.$fullname.'<h6><br>Email: </h6>'.$auth->email.' <h6><br>Phone Number: </h6>'.$auth->phone_number.'<h6><br>Date of Birth: </h6>'.$auth->dob.' <h6><br>Country: </h6>'.$auth->country.'","local_price":{"amount":"'.$request->amountVXD.'","currency":"usdc"},"metadata":{"customer_id":"'.$auth->id.'","customer_name":"'.$fullname.'"},"pricing_type":"fixed_price","redirect_url":"http://127.0.0.1:8000/crypto","cancel_url":"http://127.0.0.1:8000/crypto"}',
        ]);

        $createCharge = json_decode($create_charges->getBody())->data;
        $code = $createCharge->code;
        $status = array_reverse($createCharge->timeline);
        $coinbaseData = array(
                'charge_id'       =>  $createCharge->id,
                'charge_code'     =>  $createCharge->code,
                'customer_id'     =>  $createCharge->metadata->customer_id,
                'customer_name'   =>  $createCharge->metadata->customer_name,
                'request_address' =>  $createCharge->addresses->usdc,
                'currency_type'   =>  $createCharge->pricing->usdc->currency,
                'amount'          =>  $createCharge->pricing->usdc->amount,
                'charge_status'   =>  $status[0]->status
        ); 
        $checkUserExist = CoinbasePayments::where('charge_status','NEW')->where('customer_id',auth()->user()->id)->first();
        if(!$checkUserExist){
            CoinbasePayments::create($coinbaseData);
        } else {
            CoinbasePayments::where('customer_id', auth()->user()->id)->update($coinbaseData);
        }
        
        $list_charges = $client->request('GET', 'https://api.commerce.coinbase.com/charges', [
            'headers' => $header,
          ]);
        // listing api
        $listing_data = json_decode($list_charges->getBody());
        $listing = "";
        
        foreach($listing_data->data as $list){
            if(isset($list->metadata->customer_id)){
            if(auth()->user()->id == $list->metadata->customer_id){
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
        }
        return response()->json(['status' => 'success','create_charges'=>json_decode($create_charges->getBody()),'listing'=>$listing]);
        
    }

    public function sell_vxd_cryptoPost(Request $request){

        $auth = auth()->user();
        $fullname = $auth->first_name . ' ' . $auth->last_name;
        $header = array(
            'Content-Type: application/json',
            'Accept: application/json',
            'X-CC-Version: 2018-03-22',
            'X-CC-Api-Key: e6148557-f1a7-4afc-a599-2d3a7f12cb54'
          );
        //   create checkout API
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.commerce.coinbase.com/checkouts',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>'{"name":"'.$fullname.'","description":"Sold VXD on Valyou X","requested_info":[],"pricing_type":"fixed_price","local_price":{"amount":"'.$request->amountVXDSell.'","currency":"usdc"}}',
        CURLOPT_HTTPHEADER => $header
        ));
        $createdCheckout = curl_exec($curl);
        $create_checkout = json_decode($createdCheckout)->data; 
        // checkout request save in db
        $input = array(
                    'customer_id'=>$auth->id,
                    'checkout_id'=>$create_checkout->id,
                    'customer_name'=>$create_checkout->name,
                    'currency'=>$create_checkout->local_price->currency,
                    'amount'=>$create_checkout->local_price->amount,
                    'desc'=>$create_checkout->description,
                    'resource'=>$create_checkout->resource
                );
        Coinbase_checkout::create($input);
        curl_close($curl);
        
        // start get listing from db
        $coinbase_checkout = Coinbase_checkout::orderby('id','desc')->get();
        // end get listing from db
        $listing = '';
        foreach($coinbase_checkout as $list){
                    $listing .= '<tr>
                                <td>'.$list->checkout_id.'</td>
                                <td>'.$list->customer_name.'</td>
                                <td>'.$list->currency.'</td>
                                <td>'.$list->amount.'</td>
                                <td>'.$list->status.'</td>
                                <td>'.$list->desc.'</td>
                                <td>'.$list->resource.'</td>
                                <td>'.$list->created_at.'</td>
                                <td>
                                    <div>
                                    <a
                                    class="buy-with-crypto"
                                    href="https://commerce.coinbase.com/checkout/'.$list->checkout_id.'"
                                    >
                                    <span>Approve</span>
                                    </a>
                                    <script src="https://commerce.coinbase.com/v1/checkout.js"></script>
                                    <a type="button" style="color:#fff;" class="btn btn-danger mb-3" href="'.route('admin.deleteSellCrypto.delete',[$list->checkout_id]).'"><span>Delete</span></a>
                                    </div>
                                </td>
                                </tr>';
                
        }
          
        return response()->json(['status' => 'success','create_checkout'=>$create_checkout,'listing'=>$listing]);
    }
   public function SellCryptoDelete(Request $request,$checkout_id){

    Coinbase_checkout::where('checkout_id',$checkout_id)->delete();
    $header = array(
        'Content-Type: application/json',
        'Accept: application/json',
        'X-CC-Version: 2018-03-22',
        'X-CC-Api-Key: e6148557-f1a7-4afc-a599-2d3a7f12cb54'
        );
    
    //   delete checkout API
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.commerce.coinbase.com/checkouts/'.$checkout_id.'',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'DELETE',
        CURLOPT_HTTPHEADER => $header,
        ));

    $response = curl_exec($curl);
    curl_close($curl);
    // echo $response;
    session()->flash('success',"Delete created checkout request.");
    return redirect()->back();

   }

   
   //transaction for promotion
   public function savePromotionData(Request $request){
        $id = auth()->user()->id;
        $current_artist = Artist::where('user_id', $id)->first();
       
        $wallet = auth()->user()->wallet;
        if($wallet > 0){
       
        if($request->promote_method == 'invester'){
            $getInvestorsId = $request->entity;
            $investors = explode(",", $getInvestorsId);
            $entity = json_encode($investors);
           
        } elseif($request->promote_method == 'email') {
            $getInvestorsId = $request->entity;
            $investors = explode(",", $getInvestorsId);
            $entity = json_encode($investors);
        } elseif($request->promote_method == 'number') {
            $getInvestorsId = $request->entity;
            $investors = explode(",", $getInvestorsId);
            $entity = json_encode($investors);
        }
        //  print_r(json_decode($entity));die;
        //
        $promotion = array(
            'song_id'=> $request->song_id,
            'type'=>$request->song_type,
            'budget'=>$request->promotion_pay,
            'reward'=>$request->promotion_pay,
            'promotion_type'=>$request->promote_type,
            'single_price'=>str_replace('$','',$request->each_promote_pay),
            'promote_method'=>$request->promote_method,
            'user_id'=>$id
        );
        $promotion = Promotion::create($promotion);
        
        // fees calculating and deduct amount from wallet
            $media = VideoUploads::where('id',$request->song_id)->first();
            $admin_fees = Settings::first();
            $data_promote = Promotion::where('id',$promotion->id)->first();
            $promotion_fees = ($data_promote->budget / 100) * $admin_fees->promotion_fees;
            $promote_amount = $data_promote->budget;
            $inc_fee_promote_total = $data_promote->budget + $promotion_fees;
            $newTotalAmount = $wallet - $inc_fee_promote_total;
            User::where('id', auth()->user()->id)->update(['wallet'=> $newTotalAmount]);
            // add amount of admin fees in admin wallet
            $admin = User::where('is_admin',1)->where('id',3)->first();
            $admin_wallet = User::where('id', $admin->id)->value('wallet');
            User::where('id', $admin->id)->update(['wallet'=> $admin_wallet + $promotion_fees]);
            
            // revenue artist company account
            $amount = $promotion_fees;
            RevenueDetail::insert(['amount' => $amount,'type'=>5,'admin_id'=>$admin->id,'created_at' => date("Y-m-d H:i:s", strtotime('now')),'updated_at' => date("Y-m-d H:i:s", strtotime('now'))]);
            $this->WalletAmountTransactionForAdmin(auth()->user()->id,3,$amount,null,$this->generateToken(),'USD',5);
            $this->walletTransaction(check_role(), auth()->user()->id, auth()->user()->id, null, $promote_amount, $this->generateToken(), 'Reserved VXD for promotion.', 5);
            $this->walletTransaction(check_role(), auth()->user()->id, 3, null, $promotion_fees, $this->generateToken(), 'Admin fees during purchase VXD for promotion.', 5);

            // notifications part send mail
            if($request->promote_method == "email" && $request->entity != ""){
				$promote_via_emails = json_decode($entity);
				
				// promote to potential customer via email
				foreach ($promote_via_emails as $item) {

                    $user_exist = User::where('email',$item)->first();
                    // dd($user_exist);die;
                    if(!empty($user_exist)){
                        $message = "The artist(".$current_artist->brand.") has invited you to listen to his song on Valyou X, you can earn $".$data_promote->single_price." when you stream it on Valyou X. <br> Please Watch (<a href=".url('/watch')." target='_blank'>listen and earn</a>).";
                    } else {
                        $message = "The artist(".$current_artist->brand.") has invited you to listen to his song on Valyou X, you can earn $".$data_promote->single_price." when you stream it on Valyou X. <br> Please Watch (<a href=".url('/register')." target='_blank'>listen and earn</a>) <br>.
                        Log in or Sign up to Valyou X Music app here to earning by listening to music and investing in artists you like."; 
                    }
					// Emil Implementation
                    // $message = "The artist(".$current_artist->brand.") from Valyou X, offers you to listen to his/her song. You can get $".$promotion->reward." VXD via playing it.
					// <br/>
					// Please visit ".url('/')."/investor/watch-to-earn and earn money.
					// ";
					
					Mail::to($item)->send(new ValyouArtist($message));
					// Email finished

					$promotion_details = new PromotionDetails;
					$promotion_details->promotion_id = $promotion->id;
					// already have account in our app
					$promotion_details->entity_type = $request->promote_method;
					$promotion_details->entity = $item;
					$promotion_details->rewarded = 0;
					$promotion_details->people = $request->people_count;
					$promotion_details->save();
				}
			} elseif($request->promote_method == "invester" && $request->entity != ""){
                $promote_investors = json_decode($entity);

				// promote to investors in our app
				foreach ($promote_investors as $item) {
					$notification = new Notifications;
					$notification->notification_type = 6;
					$notification->from_user_id = $id;
					$notification->to_user_id = $item;
					$notification->artist_id = $current_artist->id;
					$notification->notification_text = "Music Artist (".$current_artist->brand."), invited you to watch (".$media->audio_title."). You will earn ($".$promotion->single_price.") when you stream it on Valyou X. Clicking here to (<a href=".url('/artist/videos',$current_artist->id).">listen and earn</a>)";
					// $notification->notification_text = "Please visit your play list. ".$current_artist->brand." suggest to watch video, you can earn money for VXD ".$request->each_promote_pay."$";
					$notification->save();

					$promotion_details = new PromotionDetails;
					$promotion_details->promotion_id = $promotion->id;
					// already have account in our app
					$promotion_details->entity_type = $request->promote_method;
					$promotion_details->entity = $item;
					$promotion_details->rewarded = 0;
                    $promotion_details->people = $request->people_count;
					$promotion_details->save();

				}
            } elseif($request->promote_method == "number" && $request->entity != ""){
               
                    $promote_via_sms = json_decode($entity);
                    // promote to potential customer via sms
                    foreach ($promote_via_sms as $item) {
                         // SMS sender
                         $receiverNumber = $item;
                         $user_exist = User::where('email',$item)->first();
                         // dd($user_exist);die;
                         if(!empty($user_exist)){
                             $message = "The artist(".$current_artist->brand.") has invited you to listen to his song on Valyou X, you can earn $".$data_promote->single_price." when you stream it on Valyou X. <br> Please Watch (<a href=".url('/watch')." target='_blank'>".url('/watch')."</a>).";
                         } else {
                             $message = "The artist(".$current_artist->brand.") has invited you to listen to his song on Valyou X, you can earn $".$data_promote->single_price." when you stream it on Valyou X. <br> Please Watch (<a href=".url('/register')." target='_blank'>".url('/artist/videos/26')."</a>) <br>.
                             Log in or Sign up to Valyou X Music app here to earning by listening to music and investing in artists you like."; 
                         }
                   
                        //  try {
                        //      $account_sid = getenv("TWILIO_SID");
                        //      $auth_token = getenv("TWILIO_TOKEN");
                        //      $twilio_number = getenv("TWILIO_FROM");
                   
                        //      $client = new Client($account_sid, $auth_token);
                        //      $client->messages->create($receiverNumber, [
                        //          'from' => $twilio_number, 
                        //          'body' => $message]);
                        //  } catch (Exception $e) {
                        //      return response()->json(array('type' => 'error', 'msg'=> $e->getMessage()), 200);
                        //  }
                         // SMS finished
    
    
                        $promotion_details = new PromotionDetails;
                        $promotion_details->promotion_id = $promotion->id;
                        // already have account in our app
                        $promotion_details->entity_type = $request->promote_method;
                        $promotion_details->entity = $item;
                        $promotion_details->rewarded = 0;
                        $promotion_details->people = $request->people_count;
                        $promotion_details->save();
                    }
                
            }
            //send notification, email, sms
			return json_encode(['status'=>'success', 'message'=>'Promotion Data Save Successfully']);
        } else {
            
            return json_encode(['status'=>'error', 'message'=>'You have insufficient balance in wallet.']);
        }
       
        
    }
   //

   private function generateToken(){
        return mt_rand(100000,999999);
    }

    private function walletTransaction($role, $fromUserId, $toUserId, $artistId, $amount, $token, $note, $type)
    {
        $wallet = new Wallet;
        $wallet->user_role = $role;
        $wallet->from_user_id = $fromUserId;
        $wallet->to_user_id = $toUserId;
        if($artistId != null){
            $wallet->artist_id = $artistId;
        }
        $wallet->amount = $amount;
        $wallet->token = $token;
        $wallet->note = $note;
        if($type != null){
            $wallet->type = $type;
        }
        $wallet->save();
    }

    private function WalletAmountTransactionForAdmin($customer_id, $admin_id, $amount, $status, $token, $currency_type, $type)
    {
        $wallet = new Admin_wallet;
        $wallet->customer_id = $customer_id;
        $wallet->amount = $amount;
        $wallet->admin_id = $admin_id;
        if($status != null){
            $wallet->status = $status;
        }
        $wallet->type = $type;
        $wallet->token = $token;
        $wallet->currency_type = $currency_type;
        if($type != null){
            $wallet->type = $type;
        }
        $wallet->save();
    }
    //
    private function AccessTokenTransactionHistory($from_user_id, $to_user_id, $access_tokens, $access_tokens_current_value, $access_tokens_burnt, $access_token_remaining, $access_tokens_required, $desc)
    {
        $access_token = new Valyoux_access_tokens;
        $access_token->from_user_id = $from_user_id;
        $access_token->to_user_id = $to_user_id;
        $access_token->access_tokens = $access_tokens;
        $access_token->access_tokens_current_value = $access_tokens_current_value;
        $access_token->access_tokens_burnt = $access_tokens_burnt;
        $access_token->access_token_remaining = $access_token_remaining;
        $access_token->access_tokens_required = $access_tokens_required;
        $access_token->desc = $desc;
        $access_token->save();
    }

}
