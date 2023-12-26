<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Models\Artist;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\Notifications;
use Illuminate\View\View;
use App\Mail\ValyouArtist;
use App\Models\Message;
use Mail;
use DB;
use URL;

class NotificationController extends Controller
{


    public function index()
    {

        $id = auth()->user()->id;

        return view('notification');
    }

    public function getnotificationlist(){

        $limit = 11;
        $page = isset($_GET['offset'])?$_GET['offset']:0;

        $notification = Notifications::with('from_user')->with('artist')->where('to_user_id',auth()->user()->id)->orderby('id','DESC')->offset($page)->limit($limit)->get();
        
        $html=""; 

        $last_id = $page + 10;
        $totalnumber = count($notification);
        if(count($notification) > 0){
            if($totalnumber>10){
                unset($notification[$totalnumber-1]);
            }
            foreach($notification as $row){
                $style = '';
                $url = (!empty($row->artist_id))? url("/artist/videos",$row->artist_id) : '';
                $html .= '<div class="col-12 notification_id'.$row->id.'">

                <div class="follow-profile " style="'.$style.'">
                <a href="'.$url.'" style="color:#36454F;">
                <img src="'.asset($row['from_user']['avatar']).'" class="rounded-circle" alt="">
                </a>
                <div class="sph-text">
                <a href="'.$url.'" style="color:#36454F;">
                <span class="noti-text" style="margin-top: 10px;">'.$row->notification_text.'</span>
                </a>
                <p class="noti-date mb-0"><i class="mdi mdi-clock-outline"></i>'.date_format($row->created_at,'M d').'</p>
                </div>';
                if($row->status == 0){
                   $html .='<div class="nav-link message-status'.$row->id.'"><a class=" msg-link read-message" data-id="'.$row->id.'" href="javascript:void(0);">
                   <i class="fa fa-envelope" style="font-size:20px;color:green;"></i>
                   </a></div>';
               }else{
                  $html .='<div class="nav-link message-status'.$row->id.'">
                  <i class="fa fa-envelope-open" style="font-size:20px;color:red;"></i> </div>';
              }

              $html .='<a href="javascript:void(0);" data-id="'.$row->id.'" class="sph-button notification"><i class="fa fa-trash"></i></a>

              </div>
              </div>';
        }
    }else{
    //    $html .='<p style="margin-left: 10px;">You haven’t yet Invested or purchased stocks in any music artist brands listed on Valyou X. Please visit the market page to begin.</p>';
          $html .='<p style="margin: 35px;">You do not have any notifications.</p>';
   }

   if($totalnumber>10){
       $html .='<a style="margin-left: 10px;font-size: 20px;" href="javascript:void(0);" data-id="'.$last_id.'"  class="text-success loadbtn loadbtn-mobile">
       Load more </a>';
   }


   echo json_encode(['html'=>$html]);    
}
public function destroy()
{
    $id = isset($_GET['id'])?$_GET['id']:'';
    Notifications::findOrFail($id)->delete();
    echo json_encode(['status'=>1,'message'=>"Deleted Successfully."]); 
}
public function notification_read(){
    $id = isset($_GET['id'])?$_GET['id']:'';
    $notification=Notifications::find($id );
    $notification->status = 1;
    $notification->save();
    echo json_encode(['status'=>1,'message'=>"Message read."]); 
}
}
