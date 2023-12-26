<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Artist extends Model
{
    use HasFactory;
    public $table = 'artists';

    protected $fillable = [
        'category',
        'brand',
        'about',
        'artist_about',
        'website',
        'spotify',
        'soundcloud',
        'applemusic',
        'youtube',
        'facebook',
        'instagram',
        'user_id',
        'photo',
        'stock_value',
        'market_value',
        'dividend_payments',
        'country',
        'change_stock',
        'change_market',
        'current_price',
        'total_supply',
        'circulating_supply',
        'artist',
        'music_fan_investor',
        'sell_restrictions',
        'market_maker_price',
        'sell_limit'

    ];
   public function artistByUser($user_id){
    $role= check_role();
    if($role == 1){
        $artist = Artist::where(['user_id'=>auth()->user()->id,'primary_artist'=>1])->first();
       if(empty($artist)){
        $artist = Artist::where('user_id',auth()->user()->id)->latest()->first();
       }
    }else{
        $artist = Artist::where('user_id',$user_id)->first();
    }
       return $artist;
   }
}
