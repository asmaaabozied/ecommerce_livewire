<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workshop extends Model
{
    protected $guarded = [];
    protected $table = 'workshops';

    public function scopeSearch($query, $term)
    {

        $term = "%$term";
        $query->where(function ($query) use ($term) {
            $query->where('work_name', 'like', $term)
                ->OrWhere('price', 'like', $term);
        });
    }
}
