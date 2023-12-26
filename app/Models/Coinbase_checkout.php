<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coinbase_checkout extends Model
{
    use HasFactory;
    protected $table = 'coinbase_checkouts';
    protected $fillable = [
        'id',
        'customer_id',
        'checkout_id', 
        'customer_name', 
        'currency', 
        'amount', 
        'desc', 
        'resource', 
        'status', 
        'created_at', 
        'updated_at', 
    ];
}
