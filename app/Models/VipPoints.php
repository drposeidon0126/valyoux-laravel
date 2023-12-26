<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use \DateTimeInterface;
use App\User;
use DB;

class VipPoints extends Model
{
    public $table = 'vip_points';
    
    public static function checkVipUser($user_id,$artist_id){
        
        $vipuser=DB::select("SELECT sum(points) as total FROM vip_points where user_id = $user_id AND artist_id =$artist_id");
        $total_points = $vipuser[0]->total;
        if($total_points > 0){
            return true;
        }else{
            return false;
        }
        //return $total_points;
    }
}
