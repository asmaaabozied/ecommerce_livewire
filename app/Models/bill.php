<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    protected $guarded = [];
    protected $table = 'bills';


    public function scopeSearch($query, $term)
    {

        $term = "%$term";
        $query->where(function ($query) use ($term) {
            $query->where('username', 'like', $term)
                ->OrWhere('phone', 'like', $term);
        });
    }

}


