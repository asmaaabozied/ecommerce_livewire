<?php

namespace Database\Seeders;
use App\Models\workshop;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class workshopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        workshop::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 20; $i++) {
            workshop::create([
                'work_name' => $faker->streetName,
                'price' => $faker->randomDigitNotNull,
                'category' => $faker->streetName,
                'desc' => $faker->sentence,
                'stock' => $faker->streetName,
                'quantity' => $faker->randomDigitNotNull,
                'date' => $faker->date,
            ]);
        }
    }
}
