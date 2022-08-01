<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelRole extends Model
{
    protected $guarded = [];
    protected $table = 'model_has_roles';
    public $timestamps = false;

}
