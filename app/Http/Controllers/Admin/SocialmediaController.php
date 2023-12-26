<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Models\Artist;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\VideoUploads;
use App\Models\Promotion;
use App\Models\Wallet;
use App\Models\Escrow;
use Illuminate\View\View;
use App\Models\Notifications;
use App\Models\PromotionDetails;
use Mail;
use DB;
// use Illuminate\Support\Facades\Mail;
use App\Mail\ValyouArtist;
use Twilio\Rest\Client;
use App\Models\RevenueDetail;

class SocialmediaController extends Controller
{

	final public function socialMedia(): View
	{
		$videos = VideoUploads::with('artist')->orderBy('id', 'DESC')->get();

		$users = \App\User::select('id', 'first_name', 'last_name', 'last_name', 'avatar', 'email')->where('id', '<>', auth()->user()->id)->get();
		$artists = Artist::select('id', 'brand', 'about', 'photo', 'stock_value', 'market_value', 'change_stock')->limit(10)->get();
		$country = DB::select("SELECT DISTINCT(country) from artists WHERE country IS NOT NULL LIMIT 10");
		$id = auth()->user()->id;
		$artist = new Artist;
		$user_profile = $artist->artistByUser($id);

		$artist_by_country = array();
		foreach ($country as $key => $c) {
			$c_artist = Artist::select('id', 'brand', 'about', 'photo', 'stock_value', 'market_value', 'change_stock')->where('country', $c->country)->limit(10)->get();
			$c_name = Country::select('cnt_name')->where('cnt_code', $c->country)->get();
			$artist_by_country[$c->country]['country_name'] = $c_name[0]->cnt_name;
			$artist_by_country[$c->country]['artist'] = $c_artist;
		}
		return view('social-media', compact('videos', 'users', 'artists', 'artist_by_country', 'user_profile'));
	}
	public function promotevideo(Request $request, $id)
	{
		$media_info_to_promote = VideoUploads::where('id', $id)->first();
		$media_owner_id = $media_info_to_promote->user_id;
		$current_user_id = auth()->user()->id;
		$current_user = auth()->user();
		$current_artist = Artist::where('user_id', $current_user_id)->first();

		// dd($media_info_to_promote->type);

		$promotion_fee = settings()->promotion_fees;
		if ($media_info_to_promote->type == 1) {
			$promotion_fee = settings()->audio_streaming_fee;
			$type = 4; //for revenue transcation audio type
			//$promotion_fee = settings()->admin_song_streaming_fee;
		} else {
			$promotion_fee = settings()->video_streaming_fee;
			$type = 5; // for revenue transcation video type
			//$promotion_fee = settings()->admin_video_streaming_fee;
		}

		if ($current_user->wallet - $request->quantity - $request->quantity * number_format($promotion_fee, 4) < 0) {
			return response()->json(array('type' => 'error', 'msg' => "You don't have enough money to promote(current balance:" . $current_user->wallet . ")"), 200);
		}

		if ($media_owner_id != $current_user_id) {
			return response()->json(array('type' => 'error', 'msg' => 'At the moment, creators can only promote their own songs'), 200);
		} else {
			$total_promote_number = intdiv($request->quantity, $request->quantity2);
			$promote_investor_number = 0;
			$promote_email_number = 0;
			$promote_sms_number = 0;

			if ($request->input('investor-list') != "") {
				$promote_investors = json_decode($request->input('investor-list'));
				// promote to investors in our app
				$promote_investor_number = count($promote_investors);

			}
			if ($request->input('email-promote') != "") {
				$promote_via_emails = json_decode($request->input('email-promote'));
				// promote to potential customer via email
				$promote_email_number = count($promote_via_emails);
			}
			if ($request->input('sms-promote') != "") {
				$promote_via_sms = json_decode($request->input('sms-promote'));
				// promote to potential customer via sms
				$promote_sms_number = count($promote_via_sms);
			}

			// validation
			if ($total_promote_number == 0) {
				return response()->json(array('type' => 'error', 'msg' => 'Please input your BUDGET and Individual Reward correctly'), 200);
			} elseif (($promote_investor_number + $promote_email_number + $promote_sms_number) == 0) {
				return response()->json(array('type' => 'error', 'msg' => 'Please select investors, emails, sms to promote'), 200);
			} elseif ($total_promote_number < ($promote_investor_number + $promote_email_number + $promote_sms_number)) {
				return response()->json(array('type' => 'error', 'msg' => 'Total count of current suggestions(' . ($promote_investor_number + $promote_email_number + $promote_sms_number) . ') is big than that you can promote (' . $total_promote_number . ')'), 200);
			} elseif ($total_promote_number > ($promote_investor_number + $promote_email_number + $promote_sms_number)) {
				return response()->json(
					array(
						'type' => 'error',
						'msg' => 'Total count of current suggestions(' . ($promote_investor_number + $promote_email_number + $promote_sms_number) . ') is less than that you can promote (' . $total_promote_number . '). Please add more suggestions(' . ($total_promote_number - ($promote_investor_number + $promote_email_number + $promote_sms_number) . ')')
					),
					200
				);
			}

			//save promotion data, and use this as escrow
			$promotion = new Promotion();
			$promotion->song_id = $request->id;
			$promotion->type = $media_info_to_promote->type;
			$promotion->budget = $request->quantity;
			$promotion->reward = $request->quantity2;
			$promotion->user_id = $current_user_id;
			$promotion->save();



			//send notification, email, sms
			if ($request->input('investor-list') != "") {
				$promote_investors = json_decode($request->input('investor-list'));
				// promote to investors in our app
				foreach ($promote_investors as $item) {
					$notification = new Notifications;
					$notification->notification_type = 6;
					$notification->from_user_id = $current_user_id;
					$notification->to_user_id = $item->value;
					$notification->artist_id = $current_artist->id;
					$notification->notification_text = "Please visit your play list. " . $current_artist->brand . " suggest to watch video, you can earn money for VXD " . $request->quantity2 . "$";
					$notification->save();

					$promotion_details = new PromotionDetails;
					$promotion_details->promotion_id = $promotion->id;
					// already have account in our app
					$promotion_details->entity_type = 'investor';
					$promotion_details->entity = $item->value;
					$promotion_details->rewarded = 0;
					$promotion_details->save();

					// Emil Implementation
					$message = "The artist(" . $current_artist->brand . ") from Valyou X, offers you to listen to his/her song. You can get $" . $promotion->reward . " VXD via playing it.
					<br/>
					Please visit https://testvps.valyoux.io/investor/watch-to-earn and earn money.
					";
					Mail::to($item->email)->send(new ValyouArtist($message));
					// Email finished

				}
			}
			if ($request->input('email-promote') != "") {
				$promote_via_emails = json_decode($request->input('email-promote'));

				// promote to potential customer via email
				foreach ($promote_via_emails as $item) {
					// Emil Implementation
					$message = "The artist(" . $current_artist->brand . ") from Valyou X, offers you to listen to his song. You can get $" . $promotion->reward . " VXD via playing it. Please visit our website (https://testvps.valyoux.io).
					note: when sign up, please use current email invited.
					";
					Mail::to($item->value)->send(new ValyouArtist($message));
					// Email finished

					$promotion_details = new PromotionDetails;
					$promotion_details->promotion_id = $promotion->id;
					// already have account in our app
					$promotion_details->entity_type = 'email';
					$promotion_details->entity = $item->value;
					$promotion_details->rewarded = 0;
					$promotion_details->save();
				}
			}
			if ($request->input('sms-promote') != "") {
				$promote_via_sms = json_decode($request->input('sms-promote'));
				// promote to potential customer via sms
				foreach ($promote_via_sms as $item) {
					// SMS sender
					$receiverNumber = $item->value;
					$message = "The artist (" . $current_artist->brand . ") from Valyou X, offers you to listen to his song. You can get " . $promotion->reward . " VXD via playing it. Please visit our website(https://testvps.valyoux.io/).
					note: when sign up, please use current phone number.
					";

					try {
						$account_sid = getenv("TWILIO_SID");
						$auth_token = getenv("TWILIO_TOKEN");
						$twilio_number = getenv("TWILIO_FROM");

						$client = new Client($account_sid, $auth_token);
						$client->messages->create($receiverNumber, [
							'from' => $twilio_number,
							'body' => $message
						]);
					} catch (Exception $e) {
						return response()->json(array('type' => 'error', 'msg' => $e->getMessage()), 200);
					}
					// SMS finished


					$promotion_details = new PromotionDetails;
					$promotion_details->promotion_id = $promotion->id;
					// already have account in our app
					$promotion_details->entity_type = 'sms';
					$promotion_details->entity = $item->value;
					$promotion_details->rewarded = 0;
					$promotion_details->save();
				}
			}

			//transaction
			//escrow 
			$wallet = new Wallet;
			$wallet->from_user_id = auth()->user()->id;
			$wallet->to_user_id = '';
			$wallet->artist_id = '';
			$wallet->amount = $request->quantity;
			$wallet->token = mt_rand(100000, 999999);
			$wallet->note = 'Promoted your video';
			$wallet->type = 5;
			$wallet->video_id = $id;
			$wallet->user_role = check_role();
			$wallet->save();
			//admin fee
			$admin = User::where('is_admin', 1)->first();
			$wallet = new Wallet;
			$wallet->from_user_id = auth()->user()->id;
			$wallet->to_user_id = $admin->id;
			$wallet->artist_id = '';
			$wallet->amount = $request->quantity * number_format($promotion_fee, 4);
			$wallet->token = mt_rand(100000, 999999);
			$wallet->note = 'Website Fee when Promoting';
			$wallet->type = 5;
			$wallet->video_id = $id;
			$wallet->user_role = check_role();
			$wallet->save();

			//update promoter's balance, //promotion fee
			$current_user->wallet = $current_user->wallet - $request->quantity - $request->quantity * number_format($promotion_fee, 4);
			$current_user->save();
			$admin->wallet = $admin->wallet + $request->quantity * number_format($promotion_fee, 4);
			$admin->save();
			//revenue transcation
			RevenueDetail::insert(['amount' => $request->quantity * number_format($promotion_fee, 4), 'type' => $type, 'admin_id' => $admin[0]->id, 'created_at' => date("Y-m-d H:i:s", strtotime('now')), 'updated_at' => date("Y-m-d H:i:s", strtotime('now'))]);

			return response()->json(array('type' => 'success', 'msg' => 'Your promotion succeeded'), 200);
		}

	}

	public function promotereward(Request $request)
	{
		/* 
		- promotion details table
		rewarded: 0->1
		-Send money from escrow to listener
		promotion table: budget --
		listener wallet: reward ++
		create transaction
		-send notification to owner that his promotion is finished
		-send notification to listener that he received money from watching/listening
		-return success
		*/

		$current_user = auth()->user();
		//get my promotion details info
		$promotion_details_info = PromotionDetails::where('id', $request->promotion_details_id)->first();
		//update rewarded value from 0 to 1
		$promotion_details_info->rewarded = 1;
		$promotion_details_info->save();
		//update promotion budget
		$promotion_info = Promotion::where('id', $promotion_details_info->promotion_id)->first();
		$promotion_info->budget -= $promotion_info->reward;
		$promotion_info->save();
		// listener wallet ++
		$current_user->wallet += $promotion_info->reward;
		$current_user->save();
		// notification: check 
		$notification = new Notifications;
		$notification->notification_type = 7;
		$notification->from_user_id = $current_user->id;
		$notification->to_user_id = $promotion_info->user_id;
		$notification->artist_id = '';
		$notification->notification_text = $current_user->first_name . ' ' . $current_user->last_name . " played your video and got $" . $promotion_info->reward . ' vxd';
		$notification->save();
		// notification
		$notification = new Notifications;
		$notification->notification_type = 7;
		$notification->from_user_id = $promotion_info->user_id;
		$notification->to_user_id = $current_user->id;
		$notification->artist_id = '';
		$notification->notification_text = "Hi, " . $current_user->first_name . ' ' . $current_user->last_name . ". You played " . $request->brand . "'s video and got $" . $promotion_info->reward . ' vxd';
		$notification->save();
		// create transaction
		$wallet = new Wallet;
		$wallet->from_user_id = $promotion_info->user_id;
		$wallet->to_user_id = $current_user->id;
		$wallet->artist_id = '';
		$wallet->amount = $promotion_info->reward;
		$wallet->token = mt_rand(100000, 999999);
		$wallet->note = "You played " . $request->brand . "'s video and get $" . $promotion_info->reward . ' vxd';
		$wallet->type = 5;
		$wallet->video_id = $promotion_info->song_id;
		$wallet->user_role = check_role();
		$wallet->save();
		return true;
	}

	public function loadmore()
	{
		$limit = 11;
		$page = isset($_GET['offset']) ? $_GET['offset'] : 0;
		$field = isset($_GET['field']) ? $_GET['field'] : '';
		$filter = isset($_GET['filter']) ? $_GET['filter'] : 0;

		$and = '';
		$order_by = 'change_stock DESC';
		$tabId = $_GET['tabId'];
		if ($tabId != 'all') {
			$and = "and country= '$tabId'";
		}
		if ($filter == "up") {
			$artists = DB::select("SELECT a.* FROM artists as a Where 1 $and and change_stock > 0  order by change_stock desc, id ASC");
		} elseif ($filter == "down") {
			$artists = DB::select("SELECT a.* FROM artists as a Where 1 $and and change_stock < 0  order by change_stock asc, id ASC");
		} else {
			$artists = DB::select("SELECT a.* FROM artists as a Where 1 $and  order by $order_by, id ASC LIMIT  $limit OFFSET $page");
		}


		$html = "";
		$html2 = "";
		$html3 = "";
		$last_id = $page + 10;
		$totalnumber = count($artists);
		if (!empty($artists)) {
			if ($totalnumber > 10) {
				unset($artists[$totalnumber - 1]);
			}
			$count = 0;
			foreach ($artists as $key => $artist) {
				$stock_value = $market_value = $dividend_payments = '';
				if ($artist->stock_value > 0) {
					$stock_value = '$' . numberformat($artist->stock_value);
				}
				if ($artist->market_value > 0) {
					$market_value = '$' . numberformat($artist->market_value);
				}
				if ($artist->dividend_payments > 0) {
					$dividend_payments = numberformat($artist->dividend_payments) . '%';
				}
				$style = (!empty($artist->change_stock)) && $artist->change_stock > 0 ? 'text-green' : 'text-main';
				$count++;
				$html .= '<div class="stock-card w-full my-1">
							<div class="d-flex">
								<div class="d-flex">
									<a class="my-auto p-2" href="artist/stock-price/' . $artist->id . '">
										<img src="' . asset($artist->photo) . '" width="50"
											height="50" class="rounded-circle avatar-xm m-1 artist-list-photo"
											alt="">
									</a>
								</div>
								<div class="p-3">
									<a class="my-auto text-light-black" href="artist/stock-price/' . $artist->id . '">
										<p class="mb-0 font-weight-bold fs-2">' . $artist->brand . '&nbsp;&nbsp; <span class="fs-1-1 badge badge-pill badge-primary bg-main">' . $artist->about . '</span></p>
										<p class="mb-0 fs-2 ' . $style . '">' . $stock_value . '</p>
									</a>
								</div>
							</div>
							<span class="d-flex mt-2 px-2">';
				if ((!empty($artist->change_stock)) && $artist->change_stock >= 0) {
					$html .= '<span class="m-auto badge badge-pill badge-success fs-1-1"><img class="" width="15" height="15" src="https://testvps.nwlogics.com/public/assets/images/valyoux/green_arrow_price_going_up.svg"> ' . numberformat($artist->change_stock) . ' %</span>';
				} else {
					$html .= '<span class="m-auto badge badge-pill badge-danger fs-1-1"><img class="" width="15" height="15" src="https://testvps.nwlogics.com/public/assets/images/valyoux/pink_arrow_circle_down.svg"> ' . signFormat($artist->change_stock, 0) . ' %</span>';
				}
				$html .= '</span>
						</div>';

			}
			foreach ($artists as $key2 => $artist) {
				$stock_value = $market_value = $dividend_payments = '';
				if ($artist->stock_value > 0) {
					$stock_value = '$' . numberformat($artist->stock_value);
				}
				$html2 .= '<div class="carosel-box mr-2">
							<div class="d-flex">
								<a href="artist/stock-price/' . $artist->id . '" class="p-0 m-auto">
									<img src="' . asset($artist->photo) . '" width="59" height="59" class="rounded-circle avatar-xm m-1 outline-double" alt="">
								</a>
							</div>
							<div class="">
								<div class="">
									<a href="artist/stock-price/' . $artist->id . '" class="p-0">
										<p class="m-0 text-center" style="overflow:hidden">' . $artist->brand . '</p>
									</a>
								</div>
								<div class="d-flex justify-content-center">';
				if ((!empty($artist->change_stock)) && $artist->change_stock > 0) {
					$html2 .= '<p class="m-0 fs-1-1 font-weight-bold txt-green text-center d-inline-flex">
								<span>' . $stock_value . '</span> &nbsp;
								<img class="" width="15" height="15" src="' . asset('assets/images/valyoux/green_arrow_price_going_up.svg') . '"> &nbsp;
								<span >' . numberformat($artist->change_stock) . '% </span>
							</p>';
				} else {
					$html2 .= '<p class="m-0 fs-1-1 font-weight-bold txt-main text-center d-inline-flex">
								<span>' . $stock_value . '</span> &nbsp;
								<img class="" width="15" height="15" src="' . asset('assets/images/valyoux/pink_arrow_circle_down.svg') . '"> &nbsp;
								<span >' . signFormat($artist->change_stock, 0) . '% </span>
							</p>';
				}

				$html2 .= '		</div>
							</div>
						</div>';
			}
		} else {
			$html .= '<p>You haven’t yet Invested or purchased stocks in any music artist brands listed on Valyou X. Please visit the market page to begin.</p>';
			$html2 .= '<p>You haven’t yet Invested or purchased stocks in any music artist brands listed on Valyou X. Please visit the market page to begin.</p>';
		}

		if ($totalnumber > 10) {
			$html .= '
            <div style="text-align: center; font-size: 14px;">
                <a href="javascript:void(0);" data-tab="' . $tabId . '" data-id="' . $last_id . '" class="text-success loadbtn">
                    Load More
                </a>
                <a href="javascript:void(0);"  class="text-success loading-btn">
                </a>
            </div>
			';

			$html2 .= '
            <a href="javascript:void(0);" data-tab="' . $tabId . '" data-id="' . $last_id . '" class="text-success loadbtn loadbtn-mobile">
			<i class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i>Load More
            </a>
            <a href="javascript:void(0);"  class="text-success loading-btn"></a>
            ';


		}
		echo json_encode(['web' => $html, 'mobile' => $html2]);
	}
	public function share($video_id)
	{
		$id = auth()->user()->id;

		$sharevideoUpload = new VideoUploads;
		if ($video_id) {
			$videoUpload = VideoUploads::find($video_id);
			$videoUpload->share = 1;
			$videoUpload->save();

			$sharevideoUpload->user_id = $id;
			$sharevideoUpload->type = 2;
			$sharevideoUpload->artist_id = $videoUpload->artist_id;
			$sharevideoUpload->name = $videoUpload->name;
			$sharevideoUpload->description = $videoUpload->description;
			$sharevideoUpload->video_id = $video_id;
			$sharevideoUpload->save();
			return redirect('socialmedia');
		}

	}
	final public function socialMediaDetails($id): View
	{

		$records = VideoUploads::with('artist')->where(['id' => $id])->get();
		$users = \App\User::select('id', 'first_name', 'last_name')->where('id', '<>', auth()->user()->id)->get();
		return view('social-media-details', compact('records', 'users'));

	}
	//load videos list
	public function loadmorevideos()
	{
		$limit = 11;
		$page = isset($_GET['offset']) ? $_GET['offset'] : 0;
		$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : '';
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		if (empty($user_id)) {
			$videos = VideoUploads::with('artist')->where(['type' => 2])->where('id', '!=', $id)->offset($page)->limit($limit)->get();
		} else {
			$videos = VideoUploads::with('artist')->where(['user_id' => $user_id, 'type' => 2])->where('id', '!=', $id)->offset($page)->limit($limit)->get();
		}


		$last_id = $page + 10;
		$totalnumber = count($videos);

		if ($totalnumber > 0) {
			if ($totalnumber > 10) {
				unset($videos[$totalnumber - 1]);
			}
			$data = view('partician.all_videos_right_section', compact('videos', 'user_id'))->render();
		} else {
			$data = '<p>You haven’t yet Invested or purchased stocks in any music artist brands listed on Valyou X. Please visit the market page to begin.</p>';
		}
		if ($totalnumber > 10) {
			$data .= '<a href="javascript:void(0);" data-user="' . $user_id . '" data-id="' . $last_id . '" class="text-success loadbtn">
			Load more </a>
			';

		}
		echo json_encode(['html' => $data]);
	}
	public function loadmoredata()
	{
		$current_user = auth()->user();
		$limit = 11;
		$page = isset($_GET['offset']) ? $_GET['offset'] : 0;
		$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : 0;
		$artist_id = isset($_GET['artist_id']) ? $_GET['artist_id'] : '';
		// note that this section is used on several pages like social media, watch-to-earn, listen-to-earn
		$page_type = isset($_GET['page_type']) ? $_GET['page_type'] : '';

		if (!empty($artist_id)) {
			$videos = VideoUploads::with('artist')->orderBy('id', 'DESC')->where('status', '1')->where('artist_id', $artist_id)->offset($page)->limit($limit)->get();

		} elseif (!empty($type)) {
			$videos = VideoUploads::with('artist')->orderBy('id', 'DESC')->where('status', '1')->where(['artist_id' => $user_id, 'type' => 2])->offset($page)->limit($limit)->get();
		} else {
			$videos = VideoUploads::with('artist')->orderBy('id', 'DESC')->where('status', '1')->offset($page)->limit($limit)->get();

		}

		if (!empty($page_type)) {

			if ($page_type == "watch-to-earn") {
				$videos = DB::SELECT(
					"SELECT promotions.*, upload_videos.*, artists.*, promotion_details.id as promotion_details_id, promotion_details.promotion_id
					FROM promotions, promotion_details, upload_videos, artists
					WHERE ((promotion_details.entity_type = 'investor' && promotion_details.entity = {$current_user->id}) 
						|| (promotion_details.entity_type = 'email' && promotion_details.entity = '{$current_user->email}') 
						|| (promotion_details.entity_type = 'sms' && promotion_details.entity = '{$current_user->phone_number}'))
						&& promotion_details.promotion_id = promotions.id
						&& promotion_details.rewarded = 0
						&& promotions.song_id = upload_videos.id
						&& upload_videos.artist_id = artists.id && upload_videos.type = 2
					GROUP BY upload_videos.id 
					"
				);
			} elseif ($page_type == "listen-to-earn") {
				$videos = DB::SELECT(
					"SELECT promotions.*, upload_videos.*, artists.*, promotion_details.id as promotion_details_id, promotion_details.promotion_id
					FROM promotions, promotion_details, upload_videos, artists
					WHERE ((promotion_details.entity_type = 'investor' && promotion_details.entity = {$current_user->id}) 
						|| (promotion_details.entity_type = 'email' && promotion_details.entity = '{$current_user->email}') 
						|| (promotion_details.entity_type = 'sms' && promotion_details.entity = '{$current_user->phone_number}'))
						&& promotion_details.promotion_id = promotions.id
						&& promotion_details.rewarded = 0
						&& promotions.song_id = upload_videos.id
						&& upload_videos.artist_id = artists.id && upload_videos.type = 1
					GROUP BY upload_videos.id
					"
				);
			}
		}

		$users = \App\User::select('id', 'first_name', 'last_name')->where('id', '<>', auth()->user()->id)->get();

		$last_id = $page + 10;
		$totalnumber = count($videos);

		if ($totalnumber > 0) {
			if ($totalnumber > 1) {
				// unset($videos[$totalnumber-1]);
			}
			if ($page_type == "watch-to-earn") {
				$display_ad = "d-none";
				$data = view('partician.all_videos', compact('videos', 'users', 'display_ad'))->render();
			} elseif ($page_type == "listen-to-earn") {
				$display_ad = "d-none";
				$data = view('partician.all_videos', compact('videos', 'users', 'display_ad'))->render();
			} else
				$data = view('partician.all_videos', compact('videos', 'users'))->render();
		} else {
			if (!empty($page_type)) {
				if ($page_type == "listen-to-earn")
					$data = '<p class="no-videos">There are no suggested Audios to earn!</p>';
				if ($page_type == "watch-to-earn")
					$data = '<p class="no-videos">There are no suggested Videos to earn!</p>';
			} else
				$data = '<p class="no-videos">This artist has not yet uploaded any videos!</p>';
		}
		if ($totalnumber > 10) {
			$data .= '<a href="javascript:void(0);" data-user="' . $user_id . '" data-id="' . $last_id . '" class="text-success loadbtnvideos"> Load more </a>';
		}
		echo json_encode(['html' => $data]);
	}

}