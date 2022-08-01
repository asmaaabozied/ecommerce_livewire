<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class more_wanted_perfumes extends Model
{
    protected $table = 'more_wanted_perfumes';

    protected $fillable = [
        'title', 'rate','rateNumbers','image', 'price','limitPeriod','created_at', 'updated_at'
    ];
}
