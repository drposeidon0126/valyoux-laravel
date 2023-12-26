<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntityPromotion extends Model
{
    use HasFactory;


    protected $fillable = ['promotion_id', 'entity', 'reward'];
}
