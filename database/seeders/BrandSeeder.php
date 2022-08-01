<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
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
            Brand::create([
                'name_ar' => $faker->name('ar'),
                'name_en' => $faker->name('en'),
                'status' => 1,
                'image' => 'default.png',

            ]);
        }
    }
}
