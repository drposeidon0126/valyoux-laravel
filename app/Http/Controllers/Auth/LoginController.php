<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Notifications\TwoFactorCode;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\RoleController;
use DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->redirectTo = url('/');
    }

    protected function authenticated(Request $request, $user)
    {
        if ((int)$user->is_authenticate === 1)
        {
            // print_r($user);die;
            $user_role = DB::table('role_user')->where('user_id',$user->id)->first();
            // $user_active_role = DB::table('user_active_role')->where('user_id',$user->id)->first();
            // if(empty($user_active_role)){
            //     RoleController::create_active_user($user->id,$user_role->role_id);
            // }
            // $user->generateTwofactor();
            // $user->notify(new TwoFactorCode());
            

        }
    }
}
