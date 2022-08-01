<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class account_detail extends Model
{
    // protected $table = 'account_details';

    // protected $fillable = [
    //     'account_email', 'acc_password','first_name','last_name', 'address','created_at', 'updated_at'
    // ];
    use HasFactory; 
    protected $guarded = [];
    protected $table = 'account_details';
}
