<?php

namespace Database\Seeders;

use App\Models\ThemeSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ThemeSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ThemeSetting::create([

            'footer_color'=>'#c21973',
            'header_color'=>'#ae1e64',
            'hover'=>Str::random(5),



        ]);
    }
}
