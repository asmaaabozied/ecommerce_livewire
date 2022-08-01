<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $guarded = [];
    protected $table = 'roles';

    public function scopeSearch($query, $term)
    {

        $term = "%$term";
        $query->where(function ($query) use ($term) {
            $query->where('name', 'like', $term)
                ->OrWhere('guard_name', 'like', $term);
        });
    }
}
