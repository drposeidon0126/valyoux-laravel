<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\User;
use App\Models\Artist;
use App\Models\Promotion;

class VideoUploads extends Model
{
    use HasFactory;
    protected $table = 'upload_videos';

    final public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }



    public function comments(){
        return $this->hasMany(Comment::class, 'song_id', 'id');
    }

    final public function artist(): BelongsTo
    {
        return $this->belongsTo(artist::class,'artist_id','id');
    }
    final public function promotion()
    {
        return $this->belongsTo(Promotion::class,'id','song_id');
    }


}
