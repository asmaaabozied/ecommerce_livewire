<?php

namespace Database\Seeders;
use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::truncate();

        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            Contact::create([
                'name' => $faker->name('en'),
                'image' => $faker->imageUrl($width = 640, $height = 480),
                'email' => $faker->email,
                'link' => $faker->url,
            ]);
        }
    }
}
