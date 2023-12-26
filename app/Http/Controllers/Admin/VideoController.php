<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\PromoteSong;
use App\Mail\ValyouArtist;
use App\Mail\ValyouSong;
use App\Models\Comment;
use App\User;
use App\Models\Follow;
use App\Models\Artist;
use App\Models\Wallet;
use App\Models\Notifications;
use App\Models\Country;
use App\Models\Promotion;
use App\Models\PromotionDetails;
use Illuminate\Http\Request;
use App\Models\VideoUploads;
use App\Models\VipPoints;
use Illuminate\View\View;
use Mail;
use DB;
use App\Models\Settings;
use App\Models\RevenueDetail;
use App\Models\Admin_wallet;


class VideoController extends Controller
{
    final public function myVideo(): View
    {
        $records = VideoUploads::with('user')->where('user_id', auth()->user()->id)->orderBy('id','desc')->get();
        return view('videos', compact('records'));
    }

    public function create()
    {
        $title = 'Videos';
        return view('admin.media.upload-video', compact('title'));
    }
    public function Decline($id)
    {

        $data = VideoUploads::where('id', $id)->first();

        if ($data->status == 1) {
            $replace = VideoUploads::find($id);
            $replace->status = '0';
            $replace->save();

            if ($data->type == 2) {
                $type = 'Music Video';
            } else {
                $type = 'Audio Track';
            }
            $declin = User::select('email')->where('id', '=', $data->user_id)->get()->pluck('email');
            $mailBody = file_get_contents('https://dev.lembits.in/valyouxmusic/resources/views/mail/mail_decline.php');
            $notification_text = 'User has decline your' . $type . ' upload request !';
            $mailSubject = 'ValyouX Confirmation';

            /* START SETTING UP MAIL BODY */
            $mailNotificationText = $notification_text . "for help and support contact us on support@valyouxmusic.io.";
            $mailBody = str_replace('_CONTENT_', $mailNotificationText, $mailBody);
            $mailBody = str_replace('_SUBJECT_', $mailSubject, $mailBody);
            /* END SETTING UP MAIL BODY */

            Mail::html($mailBody, function ($message) use ($mailSubject, $declin) {
                // $message->to($artistOwner[0])
                $message->to($declin)
                    ->subject($mailSubject);
                $message->from('support@valyoux.io', 'ValYou X Music');
            });
        }
        return redirect('socialmedia');
    }
    public function accapt()
    {
        return redirect('socialmedia');
    }

    public function upload(Request $request)
    {
        // dd('test');
        // dd($request->file('video'));
        $videoUpload = new VideoUploads;
        if ($request->id) {
            $videoUpload = VideoUploads::find($request->id);
        }
        // update file info
        if($request->input('type') == 1){
            $media_type = "audios";
        }
        elseif($request->input('type') == 2){
            $media_type = "videos";
        }

        
        if (!empty($request->file('cover_image'))) {
            $videoUpload->audio_cover_image = single_image($request->file('cover_image'), $media_type.'/cover_image');
        }
        if (!empty($request->file('video'))) {
                $videoUpload->name = single_image($request->file('video'), $media_type);
        }
        if (!empty($request->file('audio'))) {
            $videoUpload->name = single_image($request->file('audio'), $media_type);
        }

        // update another details
        $videoUpload->type = $request->input('type');
        $videoUpload->audio_title = $request->input('audio_title');
        $videoUpload->singer = $request->input('singer');
        $videoUpload->music_by = $request->input('music_by');
        $videoUpload->starcast = $request->input('starcast');
        $videoUpload->description = $request->input('description');
        $videoUpload->copyright = $request->input('copyright');
        $videoUpload->copyright_text = $request->input('copyright_text');
        $videoUpload->earning_user = $request->input('earning_user');
        $videoUpload->invite_email = $request->input('invite_email');
        
        $artist_model = new Artist();
        $artist = $artist_model->artistByUser(auth()->user()->id);
        $videoUpload->artist_id = $artist->id;

        //send email section
        $videoUpload->user()->associate(auth()->user());
        $videoUpload->save();
    
        $copyright = $request->input('invite_email');

        if (isset($copyright)) {

            // $mailBody = file_get_contents('https://dev.lembits.in/valyouxmusic/resources/views/mail/mail_upload_confirmation.php');
            $copyright = $request->input('invite_email');
            $auth = auth()->user()->first_name;
            $id = $videoUpload->id;
            if ($request->input('type') == 2) {
                $type = 'Music Video';
            } else {
                $type = 'Audio Track';
            }

            $notification_text = $auth . ' wants to publish your ' . $type . ' on valyou x music, to review then click the below button.';
            $mailSubject = 'ValyouX Confirmation';

            /* START SETTING UP MAIL BODY */
            $mailNotificationText = $notification_text . "Please review them by clicking below button.";
            // $mailBody = str_replace('_CONTENT_',$mailNotificationText,$mailBody);
            // $mailBody = str_replace('_BTN_TEXT_','Accapt',$mailBody);
            // $mailBody = str_replace('_BTN_TEXT2_','Decline',$mailBody);
            // $mailBody = str_replace('_BTN_URL_2','https://dev.lembits.in/valyouxmusic/public/decline/'.$id,$mailBody);
            // $mailBody = str_replace('_BTN_URL_','https://dev.lembits.in/valyouxmusic/public/accapt/'.$id,$mailBody);
            // $mailBody = str_replace('_SUBJECT_',$mailSubject,$mailBody);
            /* END SETTING UP MAIL BODY */


            // Mail::html($mailBody, function ($message) use($mailSubject,$copyright) {
            //     // $message->to($artistOwner[0])
            //     $message->to($copyright)
            //     ->subject($mailSubject);
            //     $message->from('support@valyoux.io', 'ValYou X Music');
            // });

        }

        if ($request->id) {
            if ($videoUpload->type == 1) {
                $url = "admin.songlist";
                session()->flash('success', "Your Audio was uploaded Successfully.");
            } else {
                $url = "admin.videolist";
                session()->flash('success', "Your Video was uploaded Successfully ");
            }

            echo json_encode(['status' => 1, 'msg' => 'success', 'href' => route($url)]);
        } else {
            $url = "admin.social-media";
            if ($videoUpload->type == 1) {
                session()->flash('success', "Your Audio was uploaded Successfully.");
            } else {
                session()->flash('success', "Your Video was uploaded Successfully ");
            }
            echo json_encode(['status' => 1, 'msg' => 'success', 'href' => route($url)]);
        }
    }



    public function promoteSong(Request $request)
    {



        $promotion = new Promotion();
        $promotion->song_id = $request->id;
        $promotion->type = $request->promoteSong;
        $promotion->budget = $request->quantity;
        $promotion->reward = $request->quantity2;
        $promotion->save();

        if ($request->promoteSong == 'valyoux') {
            foreach ($request->promoteuser as $item) {
                $user = User::find($item);
                if ($user) {
                    $entity  = new EntityPromotion(['entity' => $user->email]);
                    $promotion->entities()->save($entity);
                    Mail::to($user->email)->send(new PromoteSong($request->all()));
                }
            }
        }
        if ($request->promoteSong == 'email') {
            $email = explode(',', $request->promoteemail);
            foreach ($email as $item) {
                $entity  = new EntityPromotion(['entity' => $item]);
                $promotion->entities()->save($entity);
                Mail::to($user->email)->send(new PromoteSong($request->all()));
            }
        }


        return 'success';
    }

    public function valyouSong(Request $request)
    {
    	// print_r($request);die;
        $media = VideoUploads::find($request->id);
    	//video streaming fees
    	$setting = Settings::first();
        //Listener pay $0.039 Video stream
        //\App\User::where('id', auth()->user()->id)->update(['wallet' => (float)auth()->user()->wallet - 0.03 - 0.03 * 30 / 100]);//previous code
        User::where('id', auth()->user()->id)->update(['wallet' => (float)auth()->user()->wallet - ($setting->video_streaming_fee+0.009)]);
    	$artist_from_artist_table = Artist::find($media['artist_id']);
        $artist = User::find($media['user_id']);

        // Artist company account  will get $0.021 cents balance
        //$artist->wallet = $artist->wallet + 0.021;//old code
        $artist->wallet = $artist->wallet + ($setting->video_streaming_fee - 0.009);
    	$artist->save();
        $fullname = auth()->user()->first_name . ' ' . auth()->user()->last_name;

        $wallet = new Wallet;
        $wallet->from_user_id = auth()->user()->id;
        $wallet->to_user_id = $media['user_id'];
        $wallet->artist_id = $media['artist_id'];
        //$wallet->amount = 0.039;
        $wallet->amount = $setting->video_streaming_fee+0.009;
    	$wallet->token = mt_rand(100000, 999999);
        $wallet->type = 1;
        $wallet->user_role = check_role();
        $wallet->video_id = $request->id;
        //$wallet->note = 'You watched the video of "' . $artist_from_artist_table->brand . '" for ' . (0.03 + 0.03 * 30 / 100) . 'cents';
        $wallet->note = 'You watched the video of "' . $artist_from_artist_table->brand . '" for ' . ($setting->video_streaming_fee+0.009) . ' cents';
    	$wallet->save();

        // admin fee
        // Valyou X will get $0.009 cents ( listener fee )
        // Valyou X will get : 0.009 cents ( artist service fee)

        $admin = User::where('is_admin', 1)->get();
        User::whereId($admin[0]->id)->update(['wallet' => (float)$admin[0]->wallet + ($setting->video_streaming_fee * 2 * 30 / 100)]);


        $notification = new Notifications;
        $notification->notification_type = 2;
        $notification->from_user_id = auth()->user()->id;
        $notification->to_user_id = $media['user_id'];
        $notification->artist_id = $media['artist_id'];
        $notification->notification_text = $fullname . ' watched your video for '.$setting->video_streaming_fee.' cents';
        $notification->save();
    	//revenue transcation
    	$amount = $setting->video_streaming_fee * 2 * 30 / 100;
        RevenueDetail::insert(['amount' => $amount,'type'=>7,'admin_id'=>$admin[0]->id,'created_at' => date("Y-m-d H:i:s", strtotime('now')),'updated_at' => date("Y-m-d H:i:s", strtotime('now'))]);

        // Mail::to(auth()->user()->email)->send(new ValyouSong($request->all()));
        echo json_encode(['status' => 1]);
    }

    public function EarnvalyouSong(Request $request)
    {
        $promotion = Promotion::where('id',$request->promotion_id)->first();
        // dd($promotion->reward);die;
        if($promotion->reward > 0) {
            $remaining_reward = $promotion->reward - $request->reward;
            Promotion::where('id',$request->promotion_id)->update(['reward'=>$remaining_reward]);
            //Listener pay $0.039 Video stream
            $media = VideoUploads::find($request->id);
            //video streaming fees
            $setting = Settings::first();
            //\App\User::where('id', auth()->user()->id)->update(['wallet' => (float)auth()->user()->wallet - 0.03 - 0.03 * 30 / 100]);//previous code
            User::where('id', auth()->user()->id)->update(['wallet' => (float)auth()->user()->wallet + $request->reward]);
            $artist_from_artist_table = Artist::find($media['artist_id']);
            $artist = User::find($media['user_id']);
            // Artist company account  will get $0.021 cents balance
            //$artist->wallet = $artist->wallet + 0.021;//old code
           
            $fullname = auth()->user()->first_name . ' ' . auth()->user()->last_name;
            $wallet = new Wallet;
            $wallet->from_user_id = $media['user_id'];
            $wallet->to_user_id = auth()->user()->id;
            $wallet->artist_id = $media['artist_id'];
            $wallet->amount = $request->reward;
            $wallet->token = mt_rand(100000, 999999);
            $wallet->type = 1;
            $wallet->user_role = check_role();
            $wallet->video_id = $request->id;
            $wallet->note = 'You have earned watch the video of "' . $artist_from_artist_table->brand . '" for ' . ($request->reward) . ' cents';
            $wallet->save();
            // admin fee
            // Valyou X will get $0.009 cents ( listener fee )
            // Valyou X will get : 0.009 cents ( artist service fee)

            $admin = User::where('is_admin', 1)->where('id',3)->get();
            $notification = new Notifications;
            $notification->notification_type = 2;
            $notification->from_user_id = auth()->user()->id;
            $notification->to_user_id = $media['user_id'];
            $notification->artist_id = $media['artist_id'];
            $notification->notification_text = 'Congratulations: '.$fullname . ' watched your video ('.$media['audio_title'].') for '.$request->reward.' cents';
            $notification->save();
            $response = array('status' => 1, 'message' => 'Earn successfully');
            echo json_encode($response);
        } else {
            $response = array('status' => 0, 'message' => 'insufficient Promotion Balance for this video');
            echo json_encode($response);
        }
    	//revenue transcation
    	// $amount = $setting->video_streaming_fee * 2 * 30 / 100;
        // RevenueDetail::insert(['amount' => $amount,'type'=>7,'admin_id'=>$admin[0]->id,'created_at' => date("Y-m-d H:i:s", strtotime('now')),'updated_at' => date("Y-m-d H:i:s", strtotime('now'))]);

        // Mail::to(auth()->user()->email)->send(new ValyouSong($request->all()));
        
    }



    /*value artist*/
    public function valyouArtist(Request $request)
    {

        $amount = $request->amount;
        $media = VideoUploads::find($request->media_id);

        /*deduct user balance*/
        $c_user = User::find(auth()->user()->id);

        if ($c_user->wallet > $amount) {



            $c_user->wallet = $c_user->wallet - $amount;
            $c_user->save();

            /*add balance to artist account*/
            $artist = User::find($media->user_id);
            $artist->wallet = $artist->wallet + $amount;
            $artist->save();

            $fullname = auth()->user()->first_name . ' ' . auth()->user()->last_name;

            $wallet = new Wallet;
            $wallet->from_user_id = auth()->user()->id;
            $wallet->to_user_id =  $media->user_id;
            $wallet->artist_id = $media->artist_id;
            $wallet->amount = $amount;
            $wallet->token = mt_rand(100000, 999999);
            $wallet->type = 1;
            $wallet->user_role = check_role();
            $wallet->vip_status  = 1;
            $wallet->note = $fullname . ' pay for valyou song';
            $wallet->save();

            $artist_points = DB::select("SELECT points FROM artist_points as a Where amount = $amount");
            $points = $artist_points[0]->points;
            $vip_poits = new VipPoints;
            $vip_poits->user_id = auth()->user()->id;
            $vip_poits->artist_id = $media->artist_id;
            $vip_poits->amount = $amount;
            $vip_poits->points = $points;
            $vip_poits->save();

            $notification = new Notifications;
            $notification->notification_type = 5;
            $notification->from_user_id = auth()->user()->id;
            $notification->to_user_id = $media->user_id;
            $notification->artist_id = $media->artist_id;
            $notification->notification_text = $fullname . 'pay for valyou song';
            $notification->save();
            try {

                $mailBody = file_get_contents('https://dev.lembits.in/valyouxmusic/resources/views/mail/mail_content.php');
                // p($mailBody);
                $notification_text = $fullname . ' pay for valyou song';
                $mailSubject = 'pay for valyou song';


                /* START SETTING UP MAIL BODY */
                $mailNotificationText = $notification_text . ". Please review them by clicking below button.";
                $mailBody = str_replace('_CONTENT_', $mailNotificationText, $mailBody);
                $mailBody = str_replace('_BTN_TEXT_', 'Review Transaction', $mailBody);
                $mailBody = str_replace('_BTN_URL_', 'https://dev.lembits.in/valyouxmusic/public/account-balance', $mailBody);
                $mailBody = str_replace('_SUBJECT_', $mailSubject, $mailBody);
                /* END SETTING UP MAIL BODY */

                Mail::html($mailBody, function ($message) use ($mailSubject) {
                    // $message->to($artistOwner[0])
                    $message->to('lb.lembits@gmail.com')
                        ->subject($mailSubject);
                    $message->from('support@valyoux.io', 'ValYou X Music');
                });


                // $message ='Thanks. Your  $'.$amount.' has been deducted from your wallet';
                /*    Mail::send(['text'=>'emails.valyouartist'],[], function($message) {
                $message->to('lb.lembits@gmail.com', '')->subject
                   ('Laravel Basic Testing Mail');
                $message->from('alaxander365@gmail.com','Valyou x music');
             });
              */
                // Mail::to(auth()->user()->email)->send(new ValyouArtist('Thanks. Your  $'.$amount.' has been deducted from your wallet'));

                // Mail::to($artist->email)->send(new ValyouArtist('Congratulations. $'.$amount.' has been added into your wallet'));
            } catch (\Exception $e) {
                // return $e->getMessage();
            }


            echo json_encode(array("status" => 'success', "artist_name" => $artist->first_name . ' ' . $artist->last_name, "points" => "$points"));
        } else {
            echo json_encode(array("status" => 'error', 'message' => "You do not have enough money."));
        }
    }


    public function valyouComment(Request $request)
    {

        $comment = new Comment();
        $comment->user_id = auth()->user()->id;
        $comment->song_id = $request->media_id;
        $comment->comment = $request->comment;
        $comment->save();

        return view('common-components.comment', compact('comment'));
    }



    public function updateComment(Request $request)
    {
        $comment =  Comment::find($request->id);
        if ($comment) {
            $comment->comment = $request->comment;
            $comment->save();

            return $request->comment;
        }
        return  abort(404);
    }

    public function deleteComment(Request $request)
    {
        $comment =  Comment::find($request->id);
        if ($comment) {
            $comment->delete();
            return 'success';
        }
        return  abort(404);
    }
    public function videoList()
    {
        return view('video-list');
    }
    public function songList()
    {
        return view('song-list');
    }

    public function getvideolist()
    {
        $limit = 11;
        $page = isset($_GET['offset']) ? $_GET['offset'] : 0;
        $type = isset($_GET['type']) ? $_GET['type'] : '';
        $and = '';

        $tabId = $_GET['tabId'];

        $and = "and type=$type";

        if ($_GET['search']) {
            $search = $_GET['search'];
            $and .= " and brand like '%$search%'";
        }


        $videos = DB::select("SELECT u.* FROM upload_videos as u Where 1 $and  order by id DESC LIMIT  $limit OFFSET $page");

        $html = "";
        $html2 = "";
        $html3 = "";
        $last_id = $page + 10;
        $totalnumber = count($videos);
        $x = 1;
        $y = 1;
        if (!empty($videos)) {
            if ($totalnumber > 10) {
                unset($videos[$totalnumber - 1]);
            }
            foreach ($videos as $key => $a) {

                $i = $page + $x;
                if ($a->type == 1) {
                    $html .= '<tr>';
                    $html .= '<td class="text-center" style="width: 4%;"><span class="font-size-14">' . ($i) . '.</span></td>';

                    $html .= '<td  style="width: 10%">';
                    $html .= '<h5 class="text-truncate font-size-14">' . $a->audio_title . '</h5>';
                    $html .= '</td>';

                    $html .= '<td  style="width: 10%">';
                    $html .= '<h5 class="text-truncate font-size-14">' . $a->description . '</h5>';
                    $html .= '</td>';
                    $html .= '<td  style="width: 10%">';
                    $html .= '<h5 class="text-truncate font-size-14">' . $a->singer . '</h5>';
                    $html .= '</td>';
                    $html .= '<td  style="width: 10%" class="row-btn-margin" >';
                    $html .= '<audio controlsList="nodownload" controls><source src="' . asset($a->name) . '" type="audio/mpeg"></audio>';
                    $html .= '</td>';

                    $html .= '<td  style="width: 10%" ><a title="Edit" href="upload-media-edit/' . $a->id . '" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></a>&nbsp;<button title="Delete" type="button" name="delete" id="' . $a->id . '" class="delete btn btn-v-pink btn-sm"><i class="fa fa-trash"></i></button></td>';

                    $html .= '</tr>';
                } else {
                    $html .= '<tr>';
                    $html .= '<td class="text-center" style="width: 4%;"><span class="font-size-14">' . ($i) . '.</span></td>';

                    $html .= '<td  style="width: 10%">';
                    $html .= '<h5 class="text-truncate font-size-14">' . $a->description . '</h5>';
                    $html .= '</td>';

                    $html .= '<td  style="width: 10%" class="row-btn-margin" >';
                    $html .= '<video controlsList="nodownload" id="video" src="' . asset($a->name) . '" class="video"  type="video/mp4"   controls ></video>';
                    $html .= '</td>';

                    $html .= '<td  style="width: 10%" ><a title="Edit" href="upload-media-edit/' . $a->id . '" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></a>&nbsp;<button title="Delete" type="button" name="delete" id="' . $a->id . '" class="delete btn btn-v-pink btn-sm"><i class="fa fa-trash"></i></button></td>';

                    $html .= '</tr>';
                }
                $x++;
            }
            foreach ($videos as $key2 => $a) {
                $j = $page + $y;
                $html2 .= '<tr>';
                $html2 .= '<td class="text-center"><span class="font-size-14">' . ($j) . '.</span></td>';

                $html2 .= '<td class="paddingleftrightzero" >';
                $html2 .= '<h5 class="text-truncate font-size-14">' . $a->description . '</h5>';
                $html2 .= '</td>';
                $html2 .= '<td  style="width: 10%" class="row-btn-margin" >';
                $html2 .= '<video id="video" src="' . asset($a->name) . '" class="video"  type="video/mp4"   controls  playsinline ></video>';
                $html2 .= '</td>';
                $html2 .= '</tr>';
                $y++;
            }
        } else {
            $html .= '<tr class="text-center"><td colspan="7">You haven’t yet Invested or purchased stocks in any music artist brands listed on Valyou X. Please visit the market page to begin.</td></tr>';
            $html2 .= '<tr class="text-center"><td colspan="7">You haven’t yet Invested or purchased stocks in any music artist brands listed on Valyou X. Please visit the market page to begin.</td></tr>';
        }

        if ($totalnumber > 10) {
            $html .= "<tr class='pagination-loadmore'>
   <td colspan='5'><button class='btn btn-success loadbtn' data-tab='$tabId' data-id='{$last_id}' style='margin-left:500px'>Load More</button></td>
   </tr>";

            $html2 .= "<tr class='pagination-loadmore'>
   <td colspan='5'><button class='btn btn-success loadbtn' data-tab='$tabId' data-id='{$last_id}' style=''>Load More</button></td>
   </tr>";
        }
        echo json_encode(['web' => $html, 'mobile' => $html2]);
    }
    public function editVideo(Request $request)
    {
        $video =  VideoUploads::find($request->id);

        if ($video->type == 2) {
            $title = 'Edit Video Song';
        } else {
            $title = 'Edit Audio Song';
        }
        return view('admin.media.edit-media', compact('title', 'video'));
    }
    public function destroy($id)
    {
        VideoUploads::findOrFail($id)->delete();
        echo "Deleted Successfully.";
    }
    public function videos($id)
    {

        $artist = Artist::where('id', $id)->latest()->first();
        $users = \App\User::select('id', 'first_name', 'last_name')->where('id', '<>', auth()->user()->id)->get();
        $records = Promotion::with('promotionVideos')->where('promotion_type','open')->where('reward','>','0')->orderBy('id','desc')->get();
        $videos = VideoUploads::with('artist')->where('type', '2')->orderBy('id', 'DESC')->get();  
        $artists = Artist::select('id', 'brand', 'about', 'photo', 'stock_value', 'market_value', 'change_stock')->limit(10)->get();
          
        if (!empty($_GET['id'])) {
            $user_id = $_GET['id'];
            $limit = 11;
            $page = isset($_GET['offset']) ? $_GET['offset'] : 0;

            // $videos = VideoUploads::where('artist_id', $id)->where('type', 2)->with('artist')->orderBy('id', 'DESC')->offset($page)->limit($limit)->get();
            
            $users = \App\User::select('id', 'first_name', 'last_name')->where('id', '<>', auth()->user()->id)->get();

            echo  json_encode(["html" => view('artist.artist_part._videos', compact('artist', 'users'))->render()]);
        } else {
            return view('artist.videos', compact('artist','artists','records','videos', 'users'));
        }
    }
    public function listenandearn()
    {
        $title = 'Videos';
        return view('admin.media.upload-video', compact('title'));
    }
    public function uploadMedia()
    {
        $title = 'Upload Media';
        return view('admin.media.upload-media', compact('title'));
    }

    // add new funstion 
    public function getVideoDetail(Request $request)
    {
        $video = VideoUploads::find($request->media_id);
        $comments = Comment::where('song_id', $request->media_id)->get();
        $arr_comments = array();
        foreach ($comments as $item) {
            $item['avartar'] = User::find($item->user_id)->avatar;
            $item['f_name'] = User::find($item->user_id)->first_name;
            $item['l_name'] = User::find($item->user_id)->last_name;
            array_push($arr_comments, $item);
        }
        $artist = Artist::where('id', $video->artist_id)->latest()->first();
        $artist_user = \App\User::select('id', 'first_name', 'last_name')->where('id', $artist->user_id)->first();
        return json_encode(['media' => $artist, 'ownuser' => $artist_user, 'comments' => $arr_comments, 'url' => $video->name]);
    }
    // add new funstin end
    // new design 
    public function watch()
    {
        $id = isset($_GET['vid']) ? $_GET['vid'] : '';
        $setting = Settings::first();
        $country = DB::select("SELECT DISTINCT(country) from artists WHERE country IS NOT NULL LIMIT 10"); //added new
        /* added new */
        $artists = Artist::select('id', 'brand', 'about', 'photo', 'stock_value', 'market_value', 'change_stock')->limit(10)->get();
        $artist = new Artist;
        $user_profile = $artist->artistByUser($id);
        $artist_by_country = array();
        foreach ($country as $key => $c) {
            $c_artist = Artist::select('id', 'brand', 'about', 'photo', 'stock_value', 'market_value', 'change_stock')->where('country', $c->country)->limit(10)->get();
            $c_name = Country::select('cnt_name')->where('cnt_code', $c->country)->get();
            $artist_by_country[$c->country]['country_name'] = $c_name[0]->cnt_name;
            $artist_by_country[$c->country]['artist'] = $c_artist;
        }
        /* end new added */
        if ($id) {
            $records = VideoUploads::with('artist')->where(['id' => $id])->get();
            $single_videos = VideoUploads::with('artist')->where('id', $id)->where('type', '2')->orderBy('id', 'DESC')->get(); //added new
            $videos = VideoUploads::with('artist')->where('type', '2')->orderBy('id', 'DESC')->get(); //added new
        } else {
            if (VideoUploads::with('artist')->latest()->first() == null) { //if the app is at an initial state
                $records = array();
                $single_videos = array(); //added new
                $videos = VideoUploads::with('artist')->where('type', '2')->orderBy('id', 'DESC')->get(); //added new
            } else {
                // for promotion
                // $email_data = PromotionDetails::where('entity_type','email')->get();
                // $records = Promotion::with('promotionVideos','promotion_detail')->where('promotion_type','target')->where('reward','>','0')->orderBy('id','desc')->get();
                
                $records = Promotion::with('promotionVideos','promotion_detail')->where('promotion_type','target')->where('reward','>','0')
                ->whereHas('promotion_detail', function ($query) {
                $query->whereIn('entity_type',['email','invester','number'])->whereIn('entity',[auth()->user()->email,auth()->user()->id,'']);
                })->orderBy('id','desc')->get();
                // echo "<pre>";
                // print_r(!$records->isEmpty());die;
                $single_videos = array(); //added new
                $videos = VideoUploads::with('artist')->where('type', '2')->orderBy('id', 'DESC')->get(); //added new
            }

        }
        $users = User::select('id', 'first_name', 'last_name', 'avatar', 'email')->where('id', '<>', auth()->user()->id)->get();
        // return view('watch', compact('records', 'users', 'single_videos', 'videos', 'artist_by_country', 'user_profile', 'artist'));
        return view('watch2', compact('records','setting', 'users', 'single_videos', 'videos', 'artist_by_country', 'user_profile', 'artist', 'artists'));
    }
    //end new design
    public function watch_2()
    {
        $vid = isset($_GET['vid']) ? $_GET['vid'] : '';	
    	
        $id = auth()->user()->id;
    	if($vid){
        	$single_videos = VideoUploads::with('artist')->where('id',$vid)->where('type','2')->orderBy('id', 'DESC')->get();
        	$records = VideoUploads::with('artist')->where('type','2')->orderBy('id', 'DESC')->get();
        } else {
        	$single_videos = array();
        	$records = VideoUploads::with('artist')->where('type','2')->orderBy('id', 'DESC')->get();
        }
        
        $users = User::select('id','first_name','last_name', 'last_name', 'avatar', 'email')->where('id','<>',auth()->user()->id)->get();
        $follow = Follow::where('follower_id',$id)->latest()->get();
        return view('watch', compact('records', 'users','single_videos','follow'));
    }
    //
   
}
