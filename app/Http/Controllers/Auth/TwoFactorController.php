<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Notifications\TwoFactorCode;
use App\User;
use Illuminate\Http\Request;

class TwoFactorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.code');
    }

    public function store(Request $request)
    {
        $request->validate([
            'two_factor_code' => 'integer|required'
        ]);
        $user = auth()->user();
        if ($request->input('two_factor_code') == $user->two_factor_code) {
            $user->resetTwoFactorCode();
            return redirect()->route('admin.home');
        }
        return redirect()->back()->withError('The two factor code you have entered does not match');
    }

    public function resend()
    {
        $user = auth()->user();
        $user->generateTwofactor();
        $user->notify(new TwoFactorCode());
        return redirect()->back()->withSuccess('The two factor code has been sent again');
    }

    public function account()
    {
        if (count(auth()->user()->load('roles')->roles) > 0) {
            return redirect()->route('admin.home');
        }
        $roles = \App\Models\Role::where('id','<>',1)->get()->pluck('title', 'id');
        return view('auth.account',compact('roles'));
    }

    final public function updateAccount(Request $request, User $user)
    {
        $user->roles()->attach($request->input('role_id'));
        return redirect()->route('admin.home');
    }
}
