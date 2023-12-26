<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\VideoUploads;
use App\Models\PromotionDetails;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Promotion extends Model
{
    use HasFactory;
    protected $fillable = [
        'song_id',
        'type', 
        'budget', 
        'reward', 
        'promotion_type', 
        'single_price', 
        'user_id' 
    ];

    public function entities(){
        return $this->hasMany(EntityPromotion::class, 'promotion_id', 'id');
    }
    public function promotionVideos(){
        return $this->belongsTo(VideoUploads::class, 'song_id','id');
    }
    final public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    final public function promotion_detail()
    {
        return $this->hasMany(PromotionDetails::class,'promotion_id','id'); 
    }

    
}
