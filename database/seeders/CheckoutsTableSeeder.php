<?php

namespace Database\Seeders;
use App\Models\checkout;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CheckoutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        checkout::truncate();

        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            checkout::create([
                'product_name_ar' => $faker->name('ar'),
                'product_name_en' => $faker->name('en'),
                'client_email' => $faker->email,
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'company_name' => $faker->company,
                'shipping' => $faker->randomDigit,
                'zip' => $faker->randomDigit,
                'phone' => $faker->tollFreePhoneNumber,
                'notes' => $faker->sentence,
                'payment' => $faker->randomDigit,
                'image' => $faker->imageUrl($width = 640, $height = 480),
                'quantity' => $faker->randomDigit,
                'price' => $faker->randomDigit,
                'total' => $faker->randomDigit,
                'subtotal' => $faker->randomDigit,
                'copoun' => $faker->sentence,
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
