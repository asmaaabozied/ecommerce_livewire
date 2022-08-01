<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Ticket extends Model
{
    protected $guarded = [];
    protected $table = 'tickets';



    public function scopeSearch($query,$term){

        $term="%$term";
        $query->where(function ($query) use($term){
            $query->where('type','like',$term)
                ->OrWhere('subject','like',$term)
                ->OrWhere('content','like',$term);
        });
    }
}
