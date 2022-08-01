<?php

namespace Database\Seeders;

use App\Models\banktransfer;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class BanktransfersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        banktransfer::truncate();

        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            banktransfer::create([
                'email' => $faker->email,
                'name_en' => $faker->name('en'),
                'name_ar' => $faker->name('ar'),
                'image' => $faker->imageUrl($width = 640, $height = 480),
            ]);
        }
    }
}
