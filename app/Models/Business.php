<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;
    protected $table = 'businesses';

    protected $fillable = [
        'business_type',
        'brand',
        'occupation',
        'about',
        'website',
        'instagram',
        'facebook',
        'twitter',
        'youtube',
        'otherlink',
        'user_id',
        'photo'
    ];
}
