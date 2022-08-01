<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    /*protected $appends = [
        'profile_photo_url',
    ];*/

    protected $appends = ['image_path'];


    public function perfumes()
    {
        return $this->belongsToMany(Perfume::class, 'favourites')->withPivot('perfume_id');
    }//end of perfumes

    public function getImagePathAttribute()
    {
        return asset('images/users/' . $this->image);

    }//end of get image path


    public function scopeSearch($query, $term)
    {

        $term = "%$term";
        $query->where(function ($query) use ($term) {
            $query->where('first_name', 'like', $term)
                ->OrWhere('last_name', 'like', $term);
        });
    }

    public function getUserAvatar()
    {
        if ($this->avatar == null)
            return env('DEFAULT_IMAGE_AVATAR');
        else
            return env('STORAGE_URL') . '/uploads/users/' . $this->avatar;
    }

    public function scopeWithoutTimestamps()
    {
        $this->timestamps = false;
        return $this;
    }

    public function traffics()
    {
        return $this->hasMany(\App\Models\RateLimit::class);
    }

    public function report_errors()
    {
        return $this->hasMany(\App\Models\ReportError::class);
    }


}
