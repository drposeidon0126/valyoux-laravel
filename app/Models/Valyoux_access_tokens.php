<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\User;
use App\Models\Artist;

class Valyoux_access_tokens extends Model
{
    use HasFactory;
    protected $table = 'user_access_tokens';
    
    protected $fillable = [
        'id',
        'from_user_id',
        'to_user_id',
        'access_tokens',
        'access_tokens_current_value', 
        'access_tokens_burnt', 
        'access_token_remaining', 
        'access_tokens_required', 
        'desc', 
        'created_at', 
        'updated_at', 
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
   
}
