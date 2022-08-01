<?php

namespace Database\Seeders;
use App\Models\order_detail;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        order_detail::truncate();

        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            order_detail::create([
                'product' => $faker->cityPrefix,
                'total' => $faker->buildingNumber,
                'subtotal' => $faker->buildingNumber,
                'payment_method' => $faker->cityPrefix,
                'shipping' => $faker->cityPrefix,
                'paid' => $faker->buildingNumber,
                'batch_id' => $faker->buildingNumber,
                'amount' => $faker->randomDigitNotNull,
            ]);
        }
    }
}
