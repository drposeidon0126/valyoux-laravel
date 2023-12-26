<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\User;
use Auth;
use App\Models\Follow;
use App\Models\Artist;
use App\Models\Business;
use App\Models\Promotion;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\VideoUploads;
use DB;
use App\Models\Settings;

class BusinessController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | User Controller
    |--------------------------------------------------------------------------
    |
    | This controller maintains the users details as well as their
    | validation and updation.
    |
    */
    public function valyouplaylist(){
    	$vid = isset($_GET['vid']) ? $_GET['vid'] : '';	
    	
        $id = auth()->user()->id;
        $setting = Settings::first();
        $artists = Artist::select('id', 'brand', 'about', 'photo', 'stock_value', 'market_value', 'change_stock')->limit(10)->get();
    	if($vid){
        	$single_videos = VideoUploads::with('artist')->where('id',$vid)->where('type','2')->orderBy('id', 'DESC')->get();
        	$videos = VideoUploads::with('artist')->where('type','2')->orderBy('id', 'DESC')->get();
        } else {
        	$single_videos = array();
        	$videos = VideoUploads::with('artist')->where('type','2')->orderBy('id', 'DESC')->get();
        }
        $records = Promotion::with('promotionVideos')->where('promotion_type','target')->where('reward','>','0')->orderBy('id','desc')->get();
        
    	// echo "<pre>";
    	// print_r($videos);die;
        $users = User::select('id','first_name','last_name', 'last_name', 'avatar', 'email')->where('id','<>',auth()->user()->id)->get();
        $follow = Follow::where('follower_id',$id)->latest()->get();
        return view('valyou-playlist',compact('follow','setting','records','id','single_videos','videos', 'users','artists'));
    }
	public function getInvestors(Request $request){
    	$result="";
    
    	$investors = User::whereHas('roles', function($q){
   			$q->where('roles.id', '=', 3);
			})->select('id','first_name','last_name', 'last_name', 'avatar', 'email')
        	->where('email','like','%'.$request->user_name.'%')
        	->orWhere('first_name', 'like', '%' . $request->user_name . '%')
        	->orWhere('last_name', 'like', '%' . $request->user_name . '%')->get();
    	$investors = $investors->where('id','!=',auth()->user()->id);
    
    	if($investors->isEmpty()){
            	$result = 'No result found';
        	}
        	else{
            	foreach($investors as $u){
                	$result.= '<div class="container-fluid p-0 searchresultmain"  data-id="'.$u->id.'" data-name=" '.$u->first_name.' ' . $u->last_name.' '.'('.$u->email.')'.'   ">
                            <span  class ="cancel_main" style="display:none;">X</span>

                            <div class="col-sm-2 searimg">  <img class="rounded-circle header-profile-user user-avatar-obj-fit-cover" src="'.asset($u->avatar).'">
                            </div>
                            <div class="col-sm-8 searcon">
                    <p style="font-weight:bold;">'.$u->first_name.' ' . $u->last_name.' </p>
                    <p style="color:grey;"> '.$u->email.' </p>

                </div> </div>';
            	}
        	}
    		return response()->json(['result'=>$result]);
    
    }
	public function getInvestor(Request $request){
    	$investor = User::find($request->user_id);
    	$id = $request->user_id;
        $videos = VideoUploads::with('artist')->orderBy('id', 'DESC')->get();
        $users = User::select('id','first_name','last_name', 'last_name', 'avatar', 'email')->where('id','<>',$investor->id)->get();
        $follow = Follow::where('follower_id',$investor->id)->latest()->get();
        return view('partial-valyou-playlist',compact('follow','id', 'videos', 'users','investor'));
    	
    }

}
