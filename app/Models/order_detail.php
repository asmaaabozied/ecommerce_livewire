<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_detail extends Model
{
    protected $table = 'order_details';

    protected $fillable = [
        'product', 'total','subtotal','payment_method', 'shipping','paid', 'batch_id', 'amount','status','created_at', 'updated_at'
    ];
}
