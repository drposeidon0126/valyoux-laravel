<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromotionDetails extends Model
{
    use HasFactory;
    protected $table = 'promotion_details';

    protected $fillable = [
        'promotion_id',
        'entity_type', 
        'people',
        'entity', 
        'rewarded', 
        'status' 
    ];
    // public function user(){
    //     return $this->belongsTo(User::class,'user_id','id');
    // }
}
