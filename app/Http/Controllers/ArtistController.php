<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Artist;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use DB;
class ArtistController extends Controller
{
    public function __construct()
    {
        $this->title = 'Artist';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function store(Request $request)
    {
        if($request->id){
            $artist=Artist::find($request->id);
        }else{
            $artist= new Artist();
        }
        $artist->category=$request->input('category');
        $artist->brand=$request->input('brand');
        $artist->about=$request->input('about');
        $artist->website=$request->input('website');
        $artist->spotify=$request->input('spotify');
        $artist->soundcloud=$request->input('soundcloud');
        $artist->applemusic=$request->input('applemusic');
        $artist->youtube=$request->input('youtube');
        $artist->facebook=$request->input('facebook');
        $artist->instagram=$request->input('instagram');
        $artist->user_id=auth()->user()->id;
        if (!empty($request->file('photo'))) {
            $artist->photo = single_image($request->file('photo'), request()->segment(2));
        }
        $artist->save();
        $id=$artist->id;
        return redirect('artist-profile?artist_id='.$id)->with('success', 'Added Successfully');
    }

   

}
