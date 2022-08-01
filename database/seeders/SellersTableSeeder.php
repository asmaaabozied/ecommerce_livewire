<?php

namespace Database\Seeders;
use App\Models\seller;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SellersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        seller::truncate();

        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            seller::create([
                'name_ar' => $faker->name('ar'),
                'name_en' => $faker->name('en'),
                'address' => $faker->sentence,
                'perfume_name' => $faker->name('en'),
                'rate' => Str::random(10),
                'price' => Str::random(10),
                'review_name' => $faker->name('en'),
                'text' => $faker->sentence,
            ]);
        }
    }
}
