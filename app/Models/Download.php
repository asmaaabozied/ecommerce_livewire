<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Download extends Model
{
    protected $guarded = [];
    protected $table = 'downloads';


    public function scopeSearch($query, $term)
    {

        $term = "%$term";
        $query->where(function ($query) use ($term) {
            $query->where('status', 'like', $term)
                ->OrWhere('total', 'like', $term);
        });
    }
}
