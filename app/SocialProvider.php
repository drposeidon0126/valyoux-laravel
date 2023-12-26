<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialProvider extends Model
{
    protected $fillable = ['provider', 'provider_id'];

    function user()
    {
        return $this->belongsTo(User::class);
    }
}
