<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocaleController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Locale Controller
    |--------------------------------------------------------------------------
    |
    | This controller manages multilingual functionality
    | Update the selected lanuage as web locale
    | Redirects to the previous page with updated locale
    |
    */

    public function lang($locale)
    {
        if($locale){
            App::setLocale($locale); 
            Session::put('lang', $locale);
            Session::save(); 
            return redirect()->back()->with('locale', $locale);
        } else {
            return redirect()->back();
        }
    }
}
