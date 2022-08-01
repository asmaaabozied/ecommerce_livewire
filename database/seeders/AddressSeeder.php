<?php

namespace Database\Seeders;
use App\Models\address;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        address::truncate();

        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            address::create([
                'block' => $faker->buildingNumber,
                'street' => $faker->streetName,
                'apartment' => $faker->postcode,
                'city' => $faker->cityPrefix,
                'region' => $faker->city,
                'governorate' => $faker->state,
            ]);
        }
    }
}
