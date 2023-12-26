<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escrow extends Model
{
    use HasFactory;
    protected $table = 'escrow';

    protected $fillable = [
        'wallet',
        'type',
        'related_id',
    ];
    // public function user(){
    //     return $this->belongsTo(User::class,'user_id','id');
    // }
}
