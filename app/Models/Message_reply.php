<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use \DateTimeInterface;
use App\User;

class Message_reply extends Model
{
    use HasFactory;
    protected $table = 'message_replies';

    protected $fillable = [
        'message_id',
        'from_user_id',
        'to_user_id',
        'message_text',    
    ];

    final public function to_user(): BelongsTo
    {
        return $this->belongsTo(User::class,'to_user_id','id');
    }
     final public function from_user(): BelongsTo
    {
        return $this->belongsTo(User::class,'from_user_id','id');
    }
    
}
