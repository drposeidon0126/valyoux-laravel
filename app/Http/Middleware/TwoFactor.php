<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TwoFactor
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();
        $user->load('roles');
        if (count($user->roles) === 0) {
            if (auth()->check() && $user->two_factor_code) {
                if ($user->two_factor_expires_at->lt(now())) {
                    $user->resetTwoFactorCode();
                    auth()->logout();
                    return redirect()->route('login')->withSuccess('The two factor code has expired. Please login again.');
                }
                if (!$request->is('verify*')) {
                    return redirect()->route('verify.index');
                }
            } else {
           //     return redirect()->route('admin.home');
            }
        }
        return $next($request);
    }
}
