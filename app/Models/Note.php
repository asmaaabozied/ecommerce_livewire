<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];
    protected $appends = ['image_path','image_path2', 'name'];


    public function getImagePathAttribute()
    {
        return asset('images/notes/' . $this->image);

    }//end of get image path

    public function getImagePath2Attribute()
    {
        return asset('images/notes/' . $this->image2);

    }//end of get image path


    public function scopeSearch($query,$term){

        $term="%$term";
        $query->where(function ($query) use($term){
            $query->where('name_ar','like',$term)
                ->OrWhere('name_en','like',$term);
        });
    }


    public function getNameAttribute()
    {
        return (app()->getLocale() === 'ar') ? $this->name_ar : $this->name_en;
    }// end of get name
}
