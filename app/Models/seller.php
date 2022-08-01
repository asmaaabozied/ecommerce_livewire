<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Perfume;

class seller extends Model
{
    protected $guarded = [];
    protected $table = 'sellers';

    public function perfumeData()
    {
    return $this->hasMany('App\Models\Perfume','seller_id');
    }

}
