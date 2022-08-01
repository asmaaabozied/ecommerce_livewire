<?php

namespace Database\Seeders;
use App\Models\merchantform;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MerchantformTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        merchantform::truncate();

        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            merchantform::create([
                'email' => $faker->email,
                'address' => $faker->address,
                'name' => $faker->name('en'),
                'required_number' => Str::random(10),
                'share_capital' => Str::random(10),
                'phone' => Str::random(10),
                
            ]);
        }
    }
}
