<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory; 
    protected $guarded = [];
    protected $appends = ['image_path'];
    protected $table = 'contacts';
    protected $hidden=['deleted_at','updated_at'];

    public function getImagePathAttribute()
    {
        return asset('images/contact/' . $this->image);

    }//end of get image path
}
