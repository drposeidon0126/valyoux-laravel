<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Session;

use Stripe;
use App\Http\Controllers\Controller;
use App\User;
class StripeController extends Controller
{
    public function stripe()
    {
        return view('stripe');
    }



    public function stripePost(Request $request)
    {

        // Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        // Stripe\Charge::create ([
        //         "amount" => $request->amount * 100,
        //         "currency" => "usd",
        //         "source" => $request->stripeToken,
        //         "description" => "This payment is tested purpose"
        // ]);
   
        // Session::flash('success', 'Payment successful!');
           
        // return back();

        
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
        return redirect('account-balance')->with('success', 'Payment successful!');
        
    }
}