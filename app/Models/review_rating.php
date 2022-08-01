<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review_rating extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'review_ratings';

}
