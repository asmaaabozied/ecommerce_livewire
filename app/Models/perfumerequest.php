<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class perfumerequest extends Model
{
    protected $guarded = [];
    protected $table = 'perfumerequests';

    public function scopeSearch($query, $term)
    {

        $term = "%$term";
        $query->where(function ($query) use ($term) {
            $query->where('req_name', 'like', $term)
                ->OrWhere('quantity', 'like', $term)
                ->OrWhere('cost', 'like', $term)
                ->OrWhere('stock', 'like', $term)
                ->OrWhere('date', 'like', $term);
        });
    }
}
