<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    protected $table = 'addresses';

    protected $fillable = [
        'block', 'street','apartment','city', 'region','governorate','created_at', 'updated_at'
    ];

    public function scopeSearch($query, $term)
    {

        $term = "%$term";
        $query->where(function ($query) use ($term) {
            $query->where('block', 'like', $term)
                ->OrWhere('street', 'like', $term);
        });
    }
}
