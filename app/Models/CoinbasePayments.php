<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoinbasePayments extends Model
{
    use HasFactory;
    protected $table = 'coinbase_payments';
    protected $fillable = [
        'id',
        'charge_id',
        'charge_code', 
        'customer_id', 
        'customer_name', 
        'request_address', 
        'currency_type', 
        'amount', 
        'charge_status', 
        'created_at', 
        'updated_at', 
    ];
}
