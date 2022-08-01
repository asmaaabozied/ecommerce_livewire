<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class last_offer extends Model
{
    protected $table = 'last_offers';

    protected $fillable = [
        'title', 'rate','rateNumbers','image', 'price','stock','created_at', 'updated_at'
    ];
}
