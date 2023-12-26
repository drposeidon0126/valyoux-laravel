<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\User;
use Auth;
use App\Models\Follow;
use App\Models\Artist;
use App\Models\Business;
use App\Models\VideoUploads;
use App\Models\VipPoints;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use DB;

class FollowController extends Controller
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
    public function followers($id){
    
        $artist = Artist::where('id',$id)->latest()->first();
        $user_id = auth()->user()->id;
        if(!empty($_GET['id'])){
            $id=$_GET['id'];
            $follow = Follow::where('following_id',$id)->latest()->get();
            echo  json_encode( ["html"=>view('artist.artist_part._followers', compact('follow','artist'))->render()]);
        }else{
            if($id) {
                $follow = Follow::where('following_id',$id)->latest()->get();
            
            }else{
                $follow = Follow::where('following_id',$user_id)->latest()->get();
            }
        
            return view('artist.followers',compact('follow','artist'));
        }
        
    }
    public function follow(Request $request)
    { 
        $id = auth()->user()->id;
       
            if($request->input('follower_id')){
               
                Follow::findOrFail($request->input('follower_id'))->delete();
                $follow = Follow::where('follower_id',$id)->latest()->get();
            
                echo json_encode(['status'=>1,'msg'=>'deleted success','follow_count'=>count($follow)]);
            }else{
                $artist_model = new Artist;
                $artist = $artist_model->artistByUser(auth()->user()->id);
                $artist_id = $artist->id;
                $follow = new Follow;
                $role= check_role();
                
                if($role == 3){
                    $artist_id = auth()->user()->id;
                    $follow->investor_id = $artist_id;
                } else if($role == 4){
                    $business = Business::where('user_id',$id)->first();
                    $artist_id = $business['id'];
                    $follow->business_id = $artist_id;
                }else{
                    $follow->artist_id = $artist_id;
                   } 
                $follow->following_id= $request->input('user_id');
                $follow->follower_id = $artist_id;
                $follow->user_role =  $role;
                $follow->save();
             
                echo json_encode(['status'=>1,'msg'=>'success','id'=>$follow->id]);
            }
           
       
    }
    
  
    public function getfollowerlist(){
        //type 2 follower
        //type 1 following
        $limit = 11;
        $page = isset($_GET['offset'])?$_GET['offset']:0;
        $type = isset($_GET['type'])?$_GET['type']:'';
        $artist_id = isset($_GET['artist_id'])?$_GET['artist_id']:'';
        $follow_type = isset($_GET['follow_type'])?$_GET['follow_type']:'1';


      if($follow_type == 1){
        $and="Where f.following_id = ".$artist_id;
        
        $followers_list=DB::select("SELECT f.*,a.brand,a.about,a.photo,b.brand as b_brand ,b.about as b_about,b.photo as b_photo,u.first_name,u.last_name,u.avatar  FROM follow as f left JOIN artists a on a.id=f.follower_id left join businesses b on b.id=f.follower_id left join users u on u.id=f.follower_id   $and  order by id LIMIT  $limit OFFSET $page");
        $total_followers_list=DB::select("SELECT count(*) as total FROM follow as f $and ");
        $total_followers = $total_followers_list[0]->total;
        $data = [];
             
        $last_id = $page + 10;
        $totalnumber = count($followers_list);

        $html=view('partician.follower_list',compact('total_followers','last_id','totalnumber','followers_list','type','artist_id'))->render();
        echo json_encode(['following_list'=>$html,'total_following'=>$total_followers]);
    }else{
       
            $and1="Where f.follower_id = ".$artist_id;
            
            $following_list=DB::select("SELECT f.*,a.brand,a.about,a.photo,b.brand as b_brand ,b.about as b_about,b.photo as b_photo,u.first_name,u.last_name,u.avatar FROM follow as f left JOIN artists a on a.id=f.following_id left join businesses b on b.id=f.following_id  left join users u on u.id=f.following_id  $and1  order by id LIMIT  $limit OFFSET $page");
           
            $total_following_list=DB::select("SELECT count(*) as total FROM follow as f $and1 ");
            $total_following = $total_following_list[0]->total;
           
            $last_id = $page + 10;
            $totalnumber1 = count($following_list);

            $html2= view('partician.following_list',compact('following_list','last_id','totalnumber1','following_list','type','artist_id'))->render();
      		//echo json_encode(['follower_list'=>$html2,'total_following'=>$total_following]);

            echo json_encode(['following_list'=>$html2,'total_following'=>$total_following]);
        }     
	     
    }
    public function valyouplaylist(){
       
         $id = isset($_GET['vid']) ? $_GET['vid'] : '';
    		
        if ($id) {
            $videos = VideoUploads::with('artist')->where(['id' => $id])->get();
        } else {
            if (VideoUploads::with('artist')->latest()->first() == null) { //if the app is at an initial state
                $videos = array();
            } else {
                $videos = VideoUploads::with('artist')->latest()->first()->limit(1)->orderby('id', 'DESC')->get();
            }
            // if(){}
        }
        $users = User::select('id', 'first_name', 'last_name', 'avatar', 'email' )->where('id', '<>', auth()->user()->id)->get();
        $follow = Follow::where('follower_id',auth()->user()->id)->latest()->get();
         return view('valyou-playlist',compact('follow','users','videos'));
    }
    public function followersAll(){
        $id = auth()->user()->id;
        $role = 2;
        $artist = Artist::where('user_id',$id)->latest()->first();
        return view('allfollowers',compact('artist','role'));
    }
    public function followingsAll(){
        $id = auth()->user()->id;
        $artist = Business::where('user_id',$id)->latest()->first();
        $role = 4;
        return view('allfollowers',compact('artist','role'));
    } 
    public function followingsInvestor(){
        $id = auth()->user()->id;
        $artist['id'] = $id;
        $role = 3;
        return view('allfollowers',compact('artist','role'));
    }
    public function getfollowelistbyrole(){
        //type 2 follower
        //type 1 following
        
        $limit = 11;
        $page = isset($_GET['offset'])?$_GET['offset']:0;
        $type = isset($_GET['role_type'])?$_GET['role_type']:'';
        $artist_id = isset($_GET['artist_id'])?$_GET['artist_id']:'';
      if($type == 2){ //adrtist
        $and="Where  f.following_id = ".$artist_id;
        $followers_list=DB::select("SELECT f.*,a.brand,a.about,a.photo,b.brand as b_brand ,b.about as b_about,b.photo as b_photo,u.first_name,u.last_name,u.avatar  FROM follow as f left JOIN artists a on a.id=f.follower_id left join businesses b on b.id=f.follower_id left join users u on u.id=f.follower_id   $and  order by id LIMIT  $limit OFFSET $page");
      }else if($type == 3){ //investor
        $and="Where f.user_role = 3  AND f.follower_id = ".$artist_id;
        $followers_list=DB::select("SELECT f.*,a.brand,a.about,a.photo,b.brand as b_brand ,b.about as b_about,b.photo as b_photo,u.first_name,u.last_name,u.avatar  FROM follow as f left JOIN artists a on a.id=f.following_id left join businesses b on b.id=f.following_id left join users u on u.id=f.following_id   $and  order by id LIMIT  $limit OFFSET $page");
      }else if($type == 4){ //business
        $and="Where f.user_role = 4 AND f.follower_id = ".$artist_id;
        $followers_list=DB::select("SELECT f.*,a.brand,a.about,a.photo,b.brand as b_brand ,b.about as b_about,b.photo as b_photo,u.first_name,u.last_name,u.avatar  FROM follow as f left JOIN artists a on a.id=f.following_id left join businesses b on b.id=f.following_id left join users u on u.id=f.following_id   $and  order by id LIMIT  $limit OFFSET $page");  
    }
        
        $total_followers_list=DB::select("SELECT count(*) as total FROM follow as f $and ");
        $total_followers = $total_followers_list[0]->total;
  
       
        $last_id = $page + 10;
        $totalnumber = count($followers_list);
    
        echo view('partician.follower_list',compact('last_id','totalnumber','total_follower','last_id', 'totalnumber','followers_list','type','artist_id'))->render();
          
	     
    }
    function getviplist(){
      
       
        $limit = 11;
        $page = isset($_GET['offset'])?$_GET['offset']:0;
        $type = isset($_GET['type'])?$_GET['type']:'';
        $artist_id = isset($_GET['artist_id'])?$_GET['artist_id']:'';
        $follow_type = isset($_GET['follow_type'])?$_GET['follow_type']:'1';
     
        $and="Where vip_status = 1 AND w.artist_id = ".$artist_id;
        $and1="Where  v.artist_id = ".$artist_id;
        
         $vip_list=DB::select("select t.first_name,t.last_name,t.avatar,t.user_id,SUM(points) as total_points from (SELECT u.first_name,u.last_name,u.avatar,v.user_id,v.points FROM `vip_points` as v JOIN users u on u.id=v.user_id $and1) as t GROUP BY t.user_id ORDER by total_points DESC LIMIT  $limit  OFFSET $page");
         $total_vip = count($vip_list);

       
        $last_id = $page + 10;
        $totalnumber = count($vip_list);


        echo view('partician.vip_list',compact('total_vip','last_id','totalnumber','totalnumber','vip_list'))->render();
    
    }
    
}
