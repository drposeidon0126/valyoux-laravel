<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\User;
use Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
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

    public function updateProfile(Request $request)
    {
        
        $validate = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'dob' => 'required|date|before:today',
            'avatar' => 'sometimes|image|mimes:jpg,jpeg,png|max:1024'
        ]);

        if($validate->fails()){
            return redirect()->back()->withErrors($validate->errors());
        }

        try{
            $user=Auth::user();
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->dob = $request->dob;
            $user->phone_number = $request->phone_number;
            $user->country = $request->country;
            if ($request->hasFile('avatar')) {
                $avataruloaded=request()->file('avatar');
                $avatarname= time().'.'.$avataruloaded->getClientOriginalExtension();
                $avatarpath= public_path('images/');
                $avataruloaded->move($avatarpath,$avatarname);

                if($user->avatar !== NULL){
                    unlink(public_path( $user->avatar));
                }

                $user->avatar= '/images/'.$avatarname;
            }

            $user->save();
            return redirect('/profile');
        } catch(Exception $e){
            $error = "Oops! Something went wrong.";
            return redirect()->back()->with('error', $error);
            // return redirect()->back()->with('error', $e->getMessage());  //-- display exception message
        }
    }
	
}
