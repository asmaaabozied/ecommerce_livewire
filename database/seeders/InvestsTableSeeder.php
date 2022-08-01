<?php

namespace Database\Seeders;
use App\Models\invest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        invest::truncate();

        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            invest::create([
                'name_ar' => $faker->name('ar'),
                'name_en' => $faker->name('en'),
                'email' => $faker->email,
                'city' => $faker->city,
                'age' => $faker->randomDigit,
                'phone' => $faker->tollFreePhoneNumber,
                'capital' => $faker->randomDigit,
                'experience' => $faker->sentence,
            ]);
        }
    }
}
