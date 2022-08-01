<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manufacturingform extends Model
{
    use HasFactory;
    protected $table = 'manufacturingforms';
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
