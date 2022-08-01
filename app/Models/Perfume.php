<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\seller;

class Perfume extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $table = 'perfumes';
    protected $appends = ['image_path' ];

    public function ReviewData()
    {
    return $this->hasMany('App\Models\review_rating','perfume_id');
    }

    public function sellerData()
    {
    return $this->belongsTo(seller::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'favourites')->withPivot('user_id');
    }//end of users

    public function getImagePathAttribute()
    {
        return asset('images/perfumes/' . $this->image);

    }//end of get image path

    public function scopeSearch($query,$term){

        $term="%$term";
        $query->where(function ($query) use($term){
            $query->where('perfume_name','like',$term)
                ->OrWhere('price','like',$term);
        });
    }
    // public function getNameAttribute()
    // {
    //     return (app()->getLocale() === 'ar') ? $this->name_ar : $this->name_en;
    // }// end of get name
    //   public function getDescriptionAttribute()
    // {
    //     return (app()->getLocale() === 'ar') ? $this->description_ar : $this->description_en;
    // }// end of get description


}
