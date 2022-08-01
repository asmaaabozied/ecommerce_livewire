<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class merchant extends Model
{
    use HasFactory;

    protected $table = 'merchants';
    protected $guarded = ['id','created_at','updated_at'];
    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        return asset('images/merchants/' . $this->image);

    }//end of get image path

    public function scopeSearch($query,$term){

        $term="%$term";
        $query->where(function ($query) use($term){
            $query->where('merchant_name','like',$term)
                ->OrWhere('packages','like',$term);
        });
    }

}
