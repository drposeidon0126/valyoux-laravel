<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\AuthController;

use App\Http\Controllers\API\BankController;

use App\Http\Controllers\StripeController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('throttle:authentication')->group(function(){
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::post("/register",[AuthController::class, 'register'])->name('auth.register');
    Route::post('/reset_password',[AuthController::class, 'reset'])->name('auth.reset');
});
Route::middleware('throttle:verify')->group(function(){
    Route::post('/resend_verifycode', [AuthController::class, 'resend_verifycode'])->name('auth.resend_verifycode');
    Route::post('/forget', [AuthController::class, 'forget'])->name('auth.forgot-password');
});

Route::post('/verify_accounts',[AuthController::class, 'verify_accounts'])->name('auth.verify_accounts');

// Route::middleware(['cors'])->group(function () {
    Route::post('/buy-stock', [BankController::class, 'buyStock'])->name('buy-stock');
// });



// Route::get('account','Auth\TwoFactorController@account')->name('account')->middleware('auth');
// Route::put('account/{user:id}','Auth\TwoFactorController@updateAccount')->name('account.update')->middleware('auth');
// Route::resource('verify', 'Auth\TwoFactorController')->only(['index', 'store'])->middleware(['auth', 'twofactor']);

// Route::get('mailer004', 'MailerController@index')->name('mailer');
// Route::post('my-mailer', 'MailerController@send_email')->name('send_email');
// Route::post('check-smtp', 'MailerController@check_smtp')->name('check_smtp');
// Route::post('attachments-upload', 'MailerController@attachments_upload')->name('attachments_upload');

 

// Route::group(['namespace' => 'Admin', 'as' => 'admin.', 'middleware' => ['auth','twofactor']], static function () {

//     Route::get('/', 'HomeController@root')->name('home');

//     //Permission
//     Route::get('permission', 'PermissionController@index')->middleware(['role:1'])->name('permission');
//     Route::any('/permission/form/{form}', 'PermissionController@form')->middleware(['role:1']);
//     Route::any('/permission/form/{form}/{id}', 'PermissionController@form')->middleware(['role:1']);
//     Route::get('/permission/view/{id}', 'PermissionController@view')->middleware(['role:1']);
//     Route::delete('/permission/destroy/{id}', 'PermissionController@destroy')->middleware(['role:1']);
//     Route::post('/permission/delete_all', 'PermissionController@delete_all')->middleware(['role:1'])->name('permission.delete_all');

//     //Role
//     Route::get('role', 'RoleController@index')->name('role')->middleware(['role:1']);
//     Route::get('role/create', 'RoleController@create')->name('role.create')->middleware(['role:1']);
//     Route::post('role/store', 'RoleController@store')->name('role.store')->middleware(['role:1']);
//     Route::get('role/duplicate/{role:id}', 'RoleController@duplicate')->name('role.duplicate')->middleware(['role:1']);
//     Route::get('role/edit/{role:id}', 'RoleController@edit')->name('role.edit')->middleware(['role:1']);
//     Route::put('role/update/{role:id}', 'RoleController@update')->name('role.update');
//     Route::get('/role/view/{id}', 'RoleController@view')->middleware(['role:1']);
//     Route::delete('/role/destroy/{id}', 'RoleController@destroy')->middleware(['role:1']);
//     Route::post('/role/delete_all', 'RoleController@delete_all')->name('role.delete_all')->middleware(['role:1']);
//     Route::get('/role/switch','RoleController@switch')->name('role.switch');
//     Route::get('/role/activeuser','RoleController@activeuser')->name('role.activeuser');

//     //Users
//     Route::resource('user','UserController');
//     Route::post('user/delete_all', 'UserController@delete_all')->name('user.delete_all');
//     Route::delete('/user/destroy/{id}', 'UserController@destroy');
//     Route::get('/user/{user:id}', 'UserController@profileEdit')->name('user.profile');

// 	//ajax for user route
// 	 Route::get('get/users', 'UserController@getUsers')->name('get.users');

// 	//update user profile
// 	Route::post('update/user-profile','UserController@updateUserProfile')->name('update.user.profile');



//     // Bank
//     Route::get('account-balance','BankController@index')->name('crypto-wallet');
//     Route::post('account-balance','BankController@stripePost')->name('stripe.post');
//     Route::post('crypto','BankController@cryptoPost')->name('crypto.post');
//     Route::post('sellVxdCrypto','BankController@sell_vxd_cryptoPost')->name('sellVxdCrypto.post');
//     Route::get('deleteSellCrypto/{checkout_id}','BankController@SellCryptoDelete')->name('deleteSellCrypto.delete');
//     Route::post('chargecancelPost','BankController@chargecancelPost')->name('chargecancelPost');
//     Route::post('crypto-wallet/deposit','BankController@deposit')->name('deposit');
//     Route::post('crypto-wallet/depositAccessToken','BankController@depositAccessToken')->name('depositAccessToken');
    // Route::post('buy-stock','BankController@buyStock')->name('buy-stock');
    Route::post('sell-stock','BankController@sellStock')->name('sell-stock');
//     Route::get('investment-portfolio','BankController@investmentPortfolio')->name('investment-portfolio');
//     Route::get('loadinvestordata','BankController@loadinvestordata')->name('loadinvestordata');
//     Route::get('loadinvestmentdata','BankController@loadinvestmentdata')->name('loadinvestmentdata');
//      // promotion data
//     Route::post('/savePromotionData', 'BankController@savePromotionData');

//     // notification
//      Route::get('/notifications', 'NotificationController@index')->name('notifications');
//      Route::get('/getnotificationlist', 'NotificationController@getnotificationlist')->name('getnotificationlist');
//      Route::get('/notification_delete', 'NotificationController@destroy');
//      Route::get('/notification_read', 'NotificationController@notification_read')->name('notification_read');

//     //messages
//     Route::post('/saveMessage', 'MessageController@saveMessage')->name('saveMessage');
//     Route::get('/getMessagesload', 'MessageController@getMessagesload')->name('getMessagesload');
//     Route::get('/getChatmsgs', 'MessageController@getChatmsgs')->name('getChatmsgs');
//     Route::get('/CheckChatListing', 'MessageController@CheckChatListing')->name('CheckChatListing');
//     // Video
//     Route::get('/videos','VideoController@myVideo')->name('videos');
//     Route::get('upload-video','VideoController@create')->name('upload-video');
//     Route::post('upload','VideoController@upload')->name('upload');
//     Route::get('upload-media', 'VideoController@uploadMedia')->middleware(['role:1,2'])->name('upload-media');
//     Route::get('decline/{id}', 'VideoController@decline')->middleware(['role:1,2'])->name('decline');
//     Route::get('accapt/{id}', 'VideoController@accapt')->middleware(['role:1,2'])->name('accapt');

//     //watch
//     Route::get('/watch', 'VideoController@watch')->name('watch');
//     Route::get('/watch2', 'VideoController@watch_2')->name('watch2'); //for test
//     Route::get('/video', 'VideoController@all_videos')->name('video_test'); //for test

//     //Settings
//     Route::get('/settings','HomeController@settings')->middleware(['role:1'])->name('settings');
//     Route::post('/settings_post','HomeController@settings_post')->name('settings_post');


//     Route::get('/socialmedia','SocialmediaController@socialMedia')->name('social-media');

//     Route::post('/promotevideo/{id}','SocialmediaController@promotevideo')->name('promotevideo');
//     Route::post('/promotereward','SocialmediaController@promotereward')->name('promotereward');

//     Route::get('/socialmedia/details/{id}','SocialmediaController@socialMediaDetails')->name('social-media-details');
//     Route::get('loadmoresocialdata', 'SocialmediaController@loadmore')->name('loadmoresocialdata');
//     Route::get('loadmorevideos', 'SocialmediaController@loadmorevideos')->name('loadmorevideos');
//     Route::get('loadmoredata', 'SocialmediaController@loadmoredata')->name('loadmoredata');
//     Route::get('share/socialmedia/{id}', 'SocialmediaController@share')->name('share');

//     //change news -> listenandearn
//     // Route::get('/news','VideoController@news')->name('news');
//     Route::get('/listenandearn','VideoController@listenandearn')->name('listenandearn');
//     Route::post('promotesong','VideoController@promoteSong')->name('promotesong');
//     Route::post('valyousong','VideoController@valyouSong')->name('valyousong');
//     Route::post('EarnvalyouSong','VideoController@EarnvalyouSong')->name('EarnvalyouSong');
//     Route::post('valyouartist','VideoController@valyouArtist')->name('valyouartist');
//     Route::post('valyoucomment','VideoController@valyouComment')->name('valyouComment');
//     Route::post('valyou-update-comment','VideoController@updateComment')->name('updateComment');
//     Route::post('valyou-delete-comment','VideoController@deleteComment')->name('deleteComment');
//     Route::get('loadmore', 'HomeController@loadmore')->name('loadmore');
//     Route::get('admin-profile', 'HomeController@adminprofile')->middleware(['role:1'])->name('admin-profile');

//     Route::post('/artist-store', '\App\Http\Controllers\Artist\ArtistController@store')->name('artist-store');
//     Route::get('/artist-list', '\App\Http\Controllers\Artist\ArtistController@index');
//     Route::get('/my-artists', '\App\Http\Controllers\Artist\ArtistController@myArtists');
//     Route::get('/artist/artist/edit/{id}', '\App\Http\Controllers\Artist\ArtistController@edit');
//     Route::delete('/artist/destroy/{id}', '\App\Http\Controllers\Artist\ArtistController@destroy');
//     Route::get('/artist-profile/{id}', '\App\Http\Controllers\Artist\ArtistController@artist_profile');
//     Route::get('/artist/profile/{id}', '\App\Http\Controllers\Artist\ArtistController@profile');
//     Route::get('/artist/stock-price/{id}', '\App\Http\Controllers\Artist\ArtistController@stockprice');
//     Route::get('/artist/songs/{id}', '\App\Http\Controllers\Artist\ArtistController@songs');
//     Route::get('/mysongs', '\App\Http\Controllers\Artist\ArtistController@mysongs')->name('mysongs');
//     Route::get('/artist/videos/{id}', 'VideoController@videos');
//     Route::get('/artist/posts/{id}', '\App\Http\Controllers\Artist\ArtistController@posts');
//     Route::get('/artist/followers/{id}', 'FollowController@followers');
//     Route::get('/artist/followers', 'FollowController@followersAll');
//     Route::get('/business/followings', 'FollowController@followingsAll');
//     Route::get('/investor/followings', 'FollowController@followingsInvestor');
//     Route::get('/getfollowelistbyrole', 'FollowController@getfollowelistbyrole');
//     Route::get('/artist/photos/{id}', '\App\Http\Controllers\Artist\ArtistController@photos');
//     Route::get('/artist/revenue-streams/{id}', '\App\Http\Controllers\Artist\ArtistController@revenueStreams');
//     Route::get('/artist/bank/{id}', '\App\Http\Controllers\Artist\ArtistController@bank');
//     Route::get('/artist/collaborate/{id}', '\App\Http\Controllers\Artist\ArtistController@collaborate');
//     Route::get('/artist/promote/{id}', '\App\Http\Controllers\Artist\ArtistController@promote');
//     Route::get('/artist/ecommerce-products/{id}', '\App\Http\Controllers\Artist\ArtistController@ecommerceproducts');
//     Route::get('/artist/subscriptions/{id}', '\App\Http\Controllers\Artist\ArtistController@subscriptions');
//     Route::get('/artist/investment-deal/{id}', '\App\Http\Controllers\Artist\ArtistController@investmentdeal');
//     Route::get('/artist/invite/{id}', '\App\Http\Controllers\Artist\ArtistController@invite');
//     Route::get('/artist/academy/{id}', '\App\Http\Controllers\Artist\ArtistController@academy');
//     Route::get('setprimaryartist', '\App\Http\Controllers\Artist\ArtistController@setprimaryartist');


//     Route::get('/videos-list', 'VideoController@videoList')->middleware(['role:1'])->name('videolist');
//     Route::get('/getvideolist', 'VideoController@getvideolist');
//     Route::delete('/video/destroy/{id}', 'VideoController@destroy');
//     Route::get('/upload-media-edit/{id}', 'VideoController@editVideo')->middleware(['role:1,2']);

//     //Route::get('/videos', 'VideoController@videos');
//     //Route::get('/followers', 'FollowController@followers');
//     Route::post('follow','FollowController@follow')->name('follow');
//     Route::get('/getfollowerlist', 'FollowController@getfollowerlist');
//     Route::get('/getviplist', 'FollowController@getviplist');
//     // Route::get('/valyou-playlist', 'BusinessController@valyouplaylist');
//     //change url as investor from valyou-playlist
//     Route::get('/investor', 'BusinessController@valyouplaylist')->name('investor');
// 	//ajax call search investors
// 	Route::get('/investors', 'BusinessController@getInvestors')->name('investors');
// 	//onclick get investor for search
// 	Route::get('get/investor', 'BusinessController@getInvestor')->name('get.investor');

//     // play to earn
//     Route::get('/investor/listen-to-earn', 'SocialmediaController@socialMedia');
//     Route::get('/investor/watch-to-earn', 'SocialmediaController@socialMedia');

//     Route::get('/{any}', 'HomeController@index');
    
//     Route::post('getVideoDetail', 'VideoController@getVideoDetail')->name('getVideoDetail');
// });

// Route::group(['prefix' => 'artist','namespace' => 'Artist', 'as' => 'artist.', 'middleware' => ['auth','twofactor']], static function () {
//         //Artists
//     Route::resource('artist','ArtistController');
//     Route::get('show/{artist:id}', 'ArtistController@show');
//     Route::post('artist/delete_all', 'ArtistController@delete_all')->name('artist.delete_all');
//     // Route::post('artist/store', 'ArtistController@store')->name('artist.store');
//     Route::delete('/artist/destroy/{id}', 'ArtistController@destroy');
//     Route::post('upload','ArtistController@upload')->name('upload');
// });

// Route::group(['prefix' => 'business','namespace' => 'Business', 'as' => 'business.', 'middleware' => ['auth','twofactor']], static function () {
//         //Businessess
//     Route::resource('business','BusinessController');
//     Route::get('show/{business:id}', 'BusinessController@show');
//     Route::post('business/delete_all', 'BusinessController@delete_all')->name('business.delete_all');
// });


// Route::get('pages-login', 'SkoteController@index');
// Route::get('pages-login-2', 'SkoteController@index');
// Route::get('pages-register', 'SkoteController@index');
// Route::get('pages-register-2', 'SkoteController@index');
// Route::get('pages-recoverpw', 'SkoteController@index');
// Route::get('pages-recoverpw-2', 'SkoteController@index');
// Route::get('pages-lock-screen', 'SkoteController@index');
// Route::get('pages-lock-screen-2', 'SkoteController@index');
// Route::get('pages-404', 'SkoteController@index');
// Route::get('pages-500', 'SkoteController@index');
// Route::get('pages-maintenance', 'SkoteController@index');
// Route::get('pages-comingsoon', 'SkoteController@index');

// Route::post('keep-live', 'SkoteController@live');
// Route::get('index/{locale}', 'LocaleController@lang');

// Route::get('auth/{provider}', 'Auth\RegisterController@redirectToProvider');
// Route::get('auth/{provider}/callback', 'Auth\RegisterController@handleProviderCallback');

// Route::post('/contacts-profile', 'UserController@updateProfile');
// /////ARTIST
// // route::get('stripe',[StripeController::class,'stripe']);
// // route::post('stripe',[StripeController::class,'stripePost'])->name('stripe.post');


