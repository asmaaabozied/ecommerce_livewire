<?php

namespace Database\Seeders;
use App\Models\cart;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        cart::truncate();

        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            cart::create([
                'product_name_ar' => $faker->name('ar'),
                'product_name_en' => $faker->name('en'),
                'image' => $faker->imageUrl($width = 640, $height = 480),
                'quantity' => $faker->randomDigit,
                'price' => $faker->randomDigit,
                'total' => $faker->randomDigit,
                'subtotal' => $faker->randomDigit,
                'copoun' => $faker->sentence,
            ]);
        }
    }
}
