<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use \DateTimeInterface;
use App\User;

class Notifications extends Model
{
    public $table = 'notifications';
   
     final public function from_user(): BelongsTo
    {
        return $this->belongsTo(User::class,'from_user_id','id');
    }
    final public function artist(): BelongsTo
    {
        return $this->belongsTo(Artist::class,'artist_id','id');
    }
    
}
