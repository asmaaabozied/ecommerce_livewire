<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'date', 'total','status','created_at', 'updated_at'
    ];
}
