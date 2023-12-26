<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BankControllerRequest;
use Illuminate\Http\Request;
use App\Models\Wallet;
use App\Models\stockTransaction;
use App\User;
use App\VipPoints;
use DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Artist;

class BankController extends Controller
{
    public function index()
    {
        //$users = User::select('id','email,first_name','last_name')->where('id','<>',auth()->user()->id)->get()->pluck('email','id');
        $users = User::select(
            DB::raw("CONCAT(email, '  (' ,first_name,' ',last_name,')') AS name"),
            'id'
        )
            ->where('id', '<>', auth()->user()->id)
            ->pluck('name', 'id');
        $notes = exchangeRateNote();

        $total['personal_total'] =  Wallet::where('user_role', 1)->Where('to_user_id', auth()->user()->id)
            ->sum('amount');
        $artist_amount =  Wallet::where('user_role', 2)->Where('to_user_id', auth()->user()->id)->sum('amount');

        $total['artist_total'] = $artist_amount;
        $total['investor_total'] =  Wallet::where('user_role', 3)->Where('to_user_id', auth()->user()->id)
            ->sum('amount');
        $total['business_total'] =  Wallet::where('user_role', 4)->Where('to_user_id', auth()->user()->id)
            ->sum('amount');

        //$transactions_result = Wallet::with('to_user')->with('from_user')->with('artist')->where('type'=>0)->where('from_user_id',auth()->user()->id)->orWhere('to_user_id',auth()->user()->id)
        $transactions_result = Wallet::with('to_user')->with('from_user')->with('artist')->where('user_role', 1)->where(function ($q) {
                $q->where('from_user_id', auth()->user()->id)
                    ->orWhere('to_user_id', auth()->user()->id);
            })->orderBy('id', 'DESC')->get();

        $transactions = [];
        $fromname = '';
        $toname = '';

        foreach ($transactions_result as $key => $row) {

            $fromname = $row['from_user']['first_name'] . ' ' .  $row['from_user']->last_name;
            $toname = $row['to_user']['first_name'] . ' ' .  $row['to_user']['last_name'];

            if ($row->from_user_id != auth()->user()->id) {
                $from_name = $row['artist']['brand'] ? $row['artist']['brand'] : $fromname;
                $to_name =   $toname;
            } else {
                $to_name =   $row['artist']['brand'] ? $row['artist']['brand'] : $toname;
                $from_name = $fromname;
            }
            if ($row->type == 0) {
                $note = $notes[$row->note]['title'];
            } else {
                $note = $row->note;
            }
            $transactions[$key]['from_name'] = $from_name;
            $transactions[$key]['to_name'] = $to_name;
            $transactions[$key]['token'] = $row->token;
            $transactions[$key]['amount'] = $row->amount;
            $transactions[$key]['note'] = $note;
            $transactions[$key]['created_at'] = dateFormat($row->created_at);
        }

        $transactions_data['personal'] = $transactions;

        $artist_result = Wallet::with('to_user')->with('from_user')->with('artist')->where('user_role', 2)->where(function ($q) {
                $q->where('from_user_id', auth()->user()->id)
                    ->orWhere('to_user_id', auth()->user()->id);
            })->orderBy('id', 'DESC')->get();

        $artist = [];
        foreach ($artist_result as $key => $row) {
            $fromname = $row['from_user']['first_name'] . ' ' .  $row['from_user']->last_name;
            $toname = $row['to_user']['first_name'] . ' ' .  $row['to_user']['last_name'];



            if ($row->from_user_id != auth()->user()->id) {
                $from_name = $row['artist']['brand'] ? $row['artist']['brand'] : $fromname;
                $to_name =   $fromname;
            } else {
                $to_name =   $row['artist']['brand'] ? $row['artist']['brand'] : $toname;
                $from_name = $fromname;
            }
            if ($row->artist_id == '') {
                $from_name = $row['from_user']['first_name'] . ' ' .  $row['from_user']->last_name;
                $to_name = $row['to_user']['first_name'] . ' ' .  $row['to_user']['last_name'];
            }


            if ($row->type == 0) {
                $note = $notes[$row->note]['title'];
            } else {
                $note = $row->note;
            }
            $artist[$key]['from_name'] = $from_name;
            $artist[$key]['to_name'] = $to_name;
            $artist[$key]['token'] = $row->token;
            $artist[$key]['amount'] = $row->amount;
            $artist[$key]['note'] = $note;
            $artist[$key]['created_at'] = dateFormat($row->created_at);
        }

        $transactions_data['artist'] = $artist;

        $investor_result = Wallet::with('to_user')->with('from_user')->with('artist')->where('user_role', 3)->where(function ($q) {
                $q->where('from_user_id', auth()->user()->id)
                    ->orWhere('to_user_id', auth()->user()->id);
            })->orderBy('id', 'DESC')->get();

        $investor = [];
        foreach ($investor_result as $key => $row) {
            $fromname = $row['from_user']['first_name'] . ' ' .  $row['from_user']->last_name;
            $toname = $row['to_user']['first_name'] . ' ' .  $row['to_user']['last_name'];
            if ($row->artist_id == '') {
                $from_name = $row['from_user']['first_name'] . ' ' .  $row['from_user']->last_name;
                $to_name = $row['to_user']['first_name'] . ' ' .  $row['to_user']['last_name'];
            }

            if ($row->from_user_id != auth()->user()->id) {
                $from_name = $row['artist']['brand'] ? $row['artist']['brand'] : $fromname;
                $to_name =   $toname;
            } else {
                $to_name =   $row['artist']['brand'] ? $row['artist']['brand'] : $toname;
                $from_name = $fromname;
            }

            if ($row->type == 0) {
                $note = $notes[$row->note]['title'];
            } else {
                $note = $row->note;
            }
            $investor[$key]['from_name'] = $from_name;
            $investor[$key]['to_name'] = $to_name;
            $investor[$key]['token'] = $row->token;
            $investor[$key]['amount'] = $row->amount;
            $investor[$key]['note'] = $note;
            $investor[$key]['created_at'] = dateFormat($row->created_at);
        }
        $transactions_data['investor'] = $investor;

        $business_result = Wallet::with('to_user')->with('from_user')->with('artist')->where('user_role', 4)->where(function ($q) {
                $q->where('from_user_id', auth()->user()->id)
                    ->orWhere('to_user_id', auth()->user()->id);
            })->orderBy('id', 'DESC')->get();

        $business = [];
        foreach ($business_result as $key => $row) {
            $fromname = $row['from_user']['first_name'] . ' ' .  $row['from_user']->last_name;
            $toname = $row['to_user']['first_name'] . ' ' .  $row['to_user']['last_name'];

            if ($row->from_user_id != auth()->user()->id) {
                $from_name = $row['artist']['brand'] ? $row['artist']['brand'] : $fromname;
                $to_name =   $fromname;
            } else {
                $to_name =   $row['artist']['brand'] ? $row['artist']['brand'] : $toname;
                $from_name = $fromname;
            }
            if ($row->artist_id == '') {
                $from_name = $row['from_user']['first_name'] . ' ' .  $row['from_user']->last_name;
                $to_name = $row['to_user']['first_name'] . ' ' .  $row['to_user']['last_name'];
            }
            if ($row->type == 0) {
                $note = $notes[$row->note]['title'];
            } else {
                $note = $row->note;
            }
            $business[$key]['from_name'] = $from_name;
            $business[$key]['to_name'] = $to_name;
            $business[$key]['token'] = $row->token;
            $business[$key]['amount'] = $row->amount;
            $business[$key]['note'] = $note;
            $business[$key]['created_at'] = dateFormat($row->created_at);
        }
        $transactions_data['business'] = $business;

        return view('bank.crypto-wallet', compact('users', 'notes', 'transactions_data', 'total', 'artist_result'));
    }

    public function deposit(BankControllerRequest $request)
    {
        $wallet = auth()->user()->wallet;
        if ((float)$wallet > (float)$request->wallet) {
            User::whereId(auth()->user()->id)->update(['wallet' => (float)$wallet - (float)$request->wallet]);
            $userWallet = User::whereId($request->user_id)->select('wallet')->first()->wallet;
            User::whereId($request->user_id)->update(['wallet' => (float)$userWallet + (float)$request->wallet]);

            $wallet = new Wallet;
            $wallet->user_role = check_role();
            $wallet->from_user_id = auth()->user()->id;
            $wallet->to_user_id = $request->user_id;
            $wallet->amount = $request->wallet;
            $wallet->token = mt_rand(100000, 999999);
            $wallet->note = $request->note;
            $wallet->save();

            session()->flash('success', "Transfered Successfully.");


            return response()->json(['status' => 'success']);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => "You do not have enough money to deposit to this account."
            ]);
        }
    }
    public function buyStock(Request $request)
    {
       

        $wallet = auth()->user()->wallet;
        $artist = Artist::where('id', $request->artist_id)->latest()->get();

        if ((float)$wallet > (float)$request->total_cost && ($request->stock_value) > 0) {
            User::whereId(auth()->user()->id)->update(['wallet' => (float)$wallet - (float)$request->total_cost]);

            $stock = new stockTransaction;
            $stock->type = 2;
            $stock->user_id = auth()->user()->id;
            $stock->artist_id = $request->artist_id;
            $stock->quantity = $request->quantity;
            $stock->stock_value = $request->stock_value;
            $stock->total_cost = $request->total_cost;
            $stock->save();

            $wallet = new Wallet;
            $wallet->user_role = check_role();
            $wallet->from_user_id = auth()->user()->id;
            $wallet->to_user_id = $artist[0]->user_id;
            $wallet->artist_id = $request->artist_id;
            $wallet->amount = $request->total_cost;
            $wallet->token = mt_rand(100000, 999999);
            $wallet->note = 'Buy Stock';
            $wallet->type = 3;
            $wallet->save();

            session()->flash('success', "Transfered Successfully.");


            return response()->json(['status' => 'success']);
        } else {
            session()->flash('error', "You do not have enough money.");
            return response()->json([
                'status' => 'error',
                'message' => "You do not have enough money."
            ]);
        }
    }
    function sellStock(Request $request)
    {
        $wallet = auth()->user()->wallet;
        $artist = Artist::where('id', $request->artist_id)->latest()->get();


        if (($request->total_cost2) < $wallet) {
            User::whereId(auth()->user()->id)->update(['wallet' => (float)$wallet + (float)$request->total_cost]);

            $stock = new stockTransaction;
            $stock->type = 1;
            $stock->user_id = auth()->user()->id;
            $stock->artist_id = $request->artist_id;
            $stock->quantity = $request->quantity2;
            $stock->stock_value = $request->stock_value2;
            $stock->total_cost = $request->total_cost2;
            $stock->save();

            $wallet = new Wallet;
            $wallet->from_user_id = $artist[0]->user_id;
            $wallet->to_user_id =  auth()->user()->id;
            $wallet->artist_id = $request->artist_id;
            $wallet->amount = $request->total_cost2;
            $wallet->token = mt_rand(100000, 999999);
            $wallet->note = 'Sell Stock';
            $wallet->type = 2;
            $wallet->user_role = check_role();
            $wallet->save();

            session()->flash('success', "Transfered Successfully.");


            return response()->json(['status' => 'success']);
        } else {
            session()->flash('error', "You do not have enough money.");
            return response()->json([
                'status' => 'error',
                'message' => "You do not have enough money."
            ]);
        }
    }
    public function investmentPortfolio()
    {
        $stock = stockTransaction::with('artist')->where(['type' => 2, 'user_id' => auth()->user()->id])->get();
        return view('bank.investment-portfolio', compact('stock'));
    }
    public function loadinvestordata()
    {
        $limit = 11;
        $page = isset($_GET['offset']) ? $_GET['offset'] : 0;
        $type = isset($_GET['type']) ? $_GET['type'] : '';
        $user_id = user_id();
        $buy_total = stockTransaction::where(['type' => $type, 'user_id' => $user_id])->sum('quantity');
        $total_valyou_songs = VipPoints::where(['user_id' => $user_id])->sum('amount');

        $investors_list = DB::select("select t.artist_id,SUM(quantity) as qty,t.user_id,t.quantity,SUM(t.total_cost) as total_cost,t.brand,t.photo from (select s.artist_id,s.user_id,s.quantity,s.total_cost,a.brand,a.photo from `stock_transaction` as s left join `artists` as a on s.artist_id=a.id where `type` = $type and s.`user_id` = $user_id) as t  group by t.artist_id LIMIT  $limit OFFSET $page");
        $html = "";

        $last_id = $page + 10;
        $totalnumber = count($investors_list);
        if (!empty($investors_list)) {
            if ($totalnumber > 10) {
                unset($investors_list[$totalnumber - 1]);
            }
            $html .= view('partician._investors', compact('investors_list', 'type'))->render();
        } else { 
            $html .= '<tr class="text-center"><td colspan="8">You haven’t yet Invested or purchased stocks in any music artist brands listed on Valyou X. Please visit the market page to begin.</td></tr>';
        }

        if ($totalnumber > 10) {
            $html .= '<tr class="pagination-loadmore " style="text-align: center;">
        	   		    <td colspan="6"><a href="javascript:void(0);"  data-id="' . $last_id . '" class="text-success loadbtn2">
                            Load more </a></td>
        	    		</tr>';
        }

        echo json_encode(['investors_list' => $html, 'total_investments' => $totalnumber, 'total_valyou_songs' => $total_valyou_songs]);
    }
    public function loadinvestmentdata()
    {
        $limit = 11;
        $page = isset($_GET['offset']) ? $_GET['offset'] : 0;
        $type = isset($_GET['type']) ? $_GET['type'] : '';
        $user_id = user_id();

        $investors_list = DB::select("select s.id,s.stock_value,s.artist_id,s.user_id,s.quantity,s.total_cost,a.brand,a.photo from `stock_transaction` as s left join `artists` as a on s.artist_id=a.id where `type` = $type and s.`user_id` = $user_id order by s.id desc  LIMIT  $limit OFFSET $page");
        $total_valyou_songs = VipPoints::where(['user_id' => $user_id])->sum('amount');
        
        $html = "";

        $last_id = $page + 10;
        $totalnumber = count($investors_list);
        if (!empty($investors_list)) {
            if ($totalnumber > 10) {
                unset($investors_list[$totalnumber - 1]);
            }
            $html .= view('partician._investment', compact('investors_list', 'type'))->render();
        } else {
            $html .= '<tr class="text-center"><td colspan="8">You haven’t yet Invested or purchased stocks in any music artist brands listed on Valyou X. Please visit the market page to begin.</td></tr>';
        }

        if ($totalnumber > 10) {
            $html .= '<tr class="pagination-loadmore " style="    text-align: center;">
                      <td colspan="6"><a href="javascript:void(0);"  data-id="' . $last_id . '" class="text-success loadbtn2">
                       Load more </a></td>
                   </tr>';
        }

        echo json_encode(['investors_list' => $html, 'total_investments' => $totalnumber, 'total_valyou_songs' => $total_valyou_songs]);
    }
}
