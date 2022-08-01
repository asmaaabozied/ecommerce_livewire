<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $appends = ['favicon_path','image_path', 'name', 'description'];


    public function getImagePathAttribute()
    {
        return asset('images/settings/' . $this->logo);

    }//end of get image path
    //
      public function getFaviconPathAttribute()
    {
        return asset('images/settings/' . $this->favicon);

    }//end of get image path




    public function getNameAttribute()
    {
        return (app()->getLocale() === 'ar') ? $this->name_ar : $this->name_en;
    }// end of get name

    public function getDescriptionAttribute()
    {
        return (app()->getLocale() === 'ar') ? $this->description_ar : $this->description_en;
    }// end of get description
}
