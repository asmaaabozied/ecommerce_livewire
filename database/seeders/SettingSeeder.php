<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([

            'name_ar'=>Str::random(10),
            'name_en'=>Str::random(10),
            'address'=>Str::random(10),
            'facebook'=>'www.facebook.com',
            'description_ar'=>Str::random(50),
            'description_en'=>Str::random(50),
            'email'=>env('DEFAULT_EMAIL'),

        ]);
    }
}
