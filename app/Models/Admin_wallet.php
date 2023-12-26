<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin_wallet extends Model
{
    use HasFactory;
    protected $table = 'admin_wallets';
    protected $fillable = [
        'id',
        'customer_id',
        'admin_id',
        'amount', 
        'status', 
        'type', 
        'currency_type',  
        'created_at', 
        'updated_at', 
    ];
}
