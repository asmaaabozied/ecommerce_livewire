<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class merchantform extends Model
{
    use HasFactory;
    protected $table = 'merchantforms';
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
