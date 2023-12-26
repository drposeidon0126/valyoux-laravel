<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\Artist;
use App\Models\Message_reply;
use App\Models\Message;

class MessageController extends Controller
{
    //
    public function saveMessage(Request $request){
        // print_r($request->all());die;
        $current_user = auth()->user();
        $current_artist = Artist::where('user_id', $current_user->id)->first();
        $artist_id = (!empty($current_artist))? $current_artist->id : null ;
        $list_exist = Message::whereIn('from_user_id',[$current_user->id,$request->user_id])->whereIn('to_user_id',[$current_user->id,$request->user_id])->first();
        if(empty($list_exist)){

            $inputMessage = array(
                'from_user_id'=>$current_user->id,
                'to_user_id'=>$request->user_id,
                'artist_id'=>$artist_id,
            );
            $message = Message::create($inputMessage);
            $inputMessageReply= array(
                'message_id'=>$message->id,
                'from_user_id'=>$current_user->id,
                'to_user_id'=>$request->user_id,
                'message_text'=>$request->text_message
            );
            $last = Message_reply::create($inputMessageReply);
            $msg = Message_reply::with('to_user','from_user')->where('id',$last->id)->get();
            return json_encode(['status'=>'success', 'message'=>'Message Data Save Successfully','msg'=>$msg]);

        } else {

            $inputMessageReply= array(
                'message_id'=>$list_exist->id,
                'from_user_id'=>$current_user->id,
                'to_user_id'=>$request->user_id,
                'message_text'=>$request->text_message
            );
            $last = Message_reply::create($inputMessageReply);
            $msg = Message_reply::with('to_user')->where('id',$last->id)->get();
            return json_encode(['status'=>'success', 'message'=>'This User already exist in chat list','msg'=>$msg]);
        }
        

    }

    public function getMessagesload(){

        $limit = 11;
        $page = isset($_GET['offset'])?$_GET['offset']:0;
        $messages = Message::with('to_user','messageReply')->where('from_user_id',auth()->user()->id)->orwhere('to_user_id',auth()->user()->id)->orderby('id','DESC')->offset($page)->limit($limit)->get();
    
        // dd($messages);die;
        $html=""; 
       

        $last_id = $page + 10;
        $totalnumber = count($messages);
        if(count($messages) > 0){
            if($totalnumber>10){
                unset($messages[$totalnumber-1]);
            }

            foreach($messages as $row){
                
               if($row['to_user']['id'] != auth()->user()->id){
                $html .= '<li class="active chatopen" id="mblOpen" data-avatar="'.$row['to_user']['avatar'].'" data-user-id="'.$row['to_user']['id'].'" data-message-id="'.$row->id.'" data-name="'.$row['to_user']['first_name'].' '.$row['to_user']['last_name'].'">
                <a class="chat-open">
                    <div class="media">
                        <div class="align-self-center mr-3">
                            <i class="mdi mdi-circle font-size-10 contact-name"></i>
                        </div>
                        <div class="align-self-center mr-3">
                            <img src="'.asset($row['to_user']['avatar']).'" class="rounded-circle avatar-xs" alt="">
                        </div>

                        <div class="media-body overflow-hidden">
                            <h5 class="text-truncate font-size-14 mb-1">'.$row['to_user']['first_name'].' '.$row['to_user']['last_name'].'</h5>
                            <p class="text-truncate mb-0">Hey! there I am available</p>
                        </div>
                        <div class="font-size-11">01 min</div>
                    </div>
                </a>
            </li>';
            
               } else {
                $html .= '<li class="active chatopen" id="mblOpen" data-message-id="'.$row->id.'" data-avatar="'.$row['from_user']['avatar'].'" data-user-id="'.$row['from_user']['id'].'" data-name="'.$row['from_user']['first_name'].' '.$row['from_user']['last_name'].'">
                <a class="chat-open">
                    <div class="media">
                        <div class="align-self-center mr-3">
                            <i class="mdi mdi-circle font-size-10 contact-name"></i>
                        </div>
                        <div class="align-self-center mr-3">
                            <img src="'.asset($row['from_user']['avatar']).'" class="rounded-circle avatar-xs" alt="">
                        </div>

                        <div class="media-body overflow-hidden">
                            <h5 class="text-truncate font-size-14 mb-1">'.$row['from_user']['first_name'].' '.$row['from_user']['last_name'].'</h5>
                            <p class="text-truncate mb-0">Hey! there I am available</p>
                        </div>
                        <div class="font-size-11">01 min</div>
                    </div>
                </a>
            </li>';
               }
            
        
        }  
          
        }else{
             $html .='<p style="margin: 35px;">You do not have any messages list.</p>';
        }
        //
        if($totalnumber>10){
            $html .='<a style="margin-left: 10px;font-size: 20px;" href="javascript:void(0);" data-id="'.$last_id.'"  class="text-success loadbtn loadbtn-mobile">
            Load more </a>';
        }
        echo json_encode(['html'=>$html]);
        
    }
    //
    public function getChatmsgs(Request $request){

        $messages = Message_reply::where('message_id',$request->message_id)->orderby('id','ASC')->get();
        //    get chat each user
        $chat = '';
        foreach($messages as $row){
           
                if($row['to_user']['id'] == auth()->user()->id){
                    $chat .= '<ul class="list-unstyled">
                    <li class="conversation-list">
                    <div class="conversation-list">
                        <div class="ctext-wrap">
                        <p>'.$row->message_text.'</p>
                        </div>
                    </div>
                </li></ul>';
                }else{

                $chat .= '<ul class="list-unstyled">
                <li class="right">
                <div class="conversation-list">
                    <div class="ctext-wrap">
                    <p>'.$row->message_text.'</p>
                    </div>
                </div>
            </li></ul>';
                }
        }
        return json_encode(['chat'=>$chat]);
    }
    //
    public function checkChatListing(Request $request){
        
        $current_user = auth()->user();
        $messages = Message::whereIn('from_user_id',[$current_user->id,$request->user_id])->whereIn('to_user_id',[$current_user->id,$request->user_id])->first();
        // dd($messages);
        if(!empty($messages)){
            return json_encode(['message_id'=>$messages->id]);
        } else {
            return json_encode(['message_id'=>'']);
        }
        
        //    get chat each user
    }
}
