<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RevenueDetail extends Model
{
    use HasFactory;
    protected $table = 'revenue_details';

    protected $fillable = [
        'type',
        'amount',
        'admin_id', 
    ];

}
