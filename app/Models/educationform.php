<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class educationform extends Model
{
    use HasFactory;
    protected $table = 'educationforms';
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
