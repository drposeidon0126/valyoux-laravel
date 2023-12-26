<?php

// Localization.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /* Set new locale with the use of session */
        if (session()->has('locale')) {            
            App::setLocale(session()->get('locale'));
        }
        
        return $next($request);
    }
}