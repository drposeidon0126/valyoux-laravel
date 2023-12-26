<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use \DateTimeInterface;
use App\User;

class StockTransaction extends Model
{
    public $table = 'stock_transaction';

     final public function artist(): BelongsTo
    {
        return $this->belongsTo(Artist::class,'artist_id','id');
    }
   
}
