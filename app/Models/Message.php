<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use \DateTimeInterface;
use App\User;

class Message extends Model
{
    use HasFactory;
    protected $table = 'messages';

    protected $fillable = [
        'from_user_id',
        'to_user_id',
        'artist_id',
        'status'    
    ];

    final public function to_user(): BelongsTo
    {
        return $this->belongsTo(User::class,'to_user_id','id');
    }
     final public function from_user(): BelongsTo
    {
        return $this->belongsTo(User::class,'from_user_id','id');
    }
    final public function artist(): BelongsTo
    {
        return $this->belongsTo(Artist::class,'artist_id','id');
    }
    final public function messageReply()
    {
        return $this->hasMany(Message_reply::class,'message_id','id');
    }
}
