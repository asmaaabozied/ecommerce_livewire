<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            Slider::create([
                'name_ar' => $faker->name('ar'),
                'name_en' => $faker->name('en'),
                'description_ar' => $faker->text('ar'),
                'description_en' => $faker->text('en'),
                'status' => 1,
                'image' => 'default.png',

            ]);
        }
    }
}
