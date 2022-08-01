<?php

namespace Database\Seeders;
use App\Models\order;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        order::truncate();

        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 20; $i++) {
            order::create([
                'date' => $faker->date,
                'total' => $faker->buildingNumber,
            ]);
        }

        // order::create([

        //     'date'=>Str::random(10),
        //     'total'=>Str::random(10),

        // ]);
    }
}
