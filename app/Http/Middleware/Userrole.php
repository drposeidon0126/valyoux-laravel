<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use DB;
class Userrole
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next,...$type)
    {

        $user = auth()->user();
        $user_id = auth()->user()->id;
        $user = DB::select("SELECT * FROM role_user as a Where user_id = $user_id");
     //   p($user);
        $role_id=$user[0]->role_id;
        if ( in_array ($role_id, $type)) {
          return $next($request);
        }else
        if ($role_id == 1 && $role_id != $type) {
          return redirect('admin-profile');
        } else if ($role_id == 2 && $role_id != $type) {
          $artist = DB::select("SELECT id FROM artists  Where user_id = $user_id limit 1");
          return redirect('artist-profile/'. $artist[0]->id);
        } else if ($role_id == 3 && $role_id != $type) {
        //   return redirect('valyou-playlist');
          return redirect('investor');
        }else if($role_id == 4 && $role_id != $type){
          return redirect('business-profile');
        }
        //return $next($request);


    }
}
