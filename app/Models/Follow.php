<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    use HasFactory;
    protected $table = 'follow';

    protected $fillable = [
        'user_role',
        'follower_id',
        'following_id',
        'request_status',
       
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }


}
