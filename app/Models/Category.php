<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded = ['id','created_at','updated_at'];
    protected $appends = ['image_path', 'name', 'description'];
    protected $hidden=['deleted_at','updated_at'];
    public function perfumes()
    {
    return $this->hasMany('App\Models\perfume' , 'category_id');
    }

    public function getImagePathAttribute()
    {
        return asset('images/categories/' . $this->image);

    }//end of get image path
      public function getCreatedAtPathAttribute()
    {
        return ($this->created_at) ? $this->created_at->format('d/m/Y') : '';


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
      public function getDescriptionAttribute()
    {
        return (app()->getLocale() === 'ar') ? $this->description_ar : $this->description_en;
    }// end of get description

}
