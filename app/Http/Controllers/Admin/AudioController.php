<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Models\Artist;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\VideoUploads;
use Illuminate\View\View;
use Mail;
use DB;

class AudioController extends Controller
{
   
    
    public function songs()
    {
        $records = VideoUploads::with('user')->where(['user_id'=>auth()->user()->id,'type'=>1])->limit(10)->get();
        $id = auth()->user()->id;
        $artist = Artist::where('user_id',auth()->user()->id)->latest()->first();


       
        return view('artist.songs',compact('records','artist'));
    }
}
