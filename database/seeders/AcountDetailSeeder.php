<?php

namespace Database\Seeders;
use App\Models\account_detail;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class AcountDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        account_detail::truncate();

        $faker = \Faker\Factory::create();
        $password = Hash::make('admin12');

        for ($i = 0; $i < 50; $i++) {
            account_detail::create([
                'account_email' => $faker->sentence,
                'acc_password' => $password,
                'first_name' => $faker->sentence,
                'last_name' => $faker->sentence,
                'address' => $faker->sentence,
            ]);
        }
    }
}
