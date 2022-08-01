<?php

namespace Database\Seeders;
use App\Models\review_rating;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ReviewratingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        review_rating::truncate();

        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            review_rating::create([
                'name' => $faker->name('en'),
                'email' => $faker->email,
                'comments' => $faker->sentence,
                'rate' => $faker->randomDigitNotNull,
                'phone' => Str::random(10),
                'star_rating' => $faker->randomDigitNotNull,
            ]);
        }
    }
}
