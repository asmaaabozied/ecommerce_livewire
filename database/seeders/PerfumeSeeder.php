<?php

namespace Database\Seeders;
use App\Models\perfume;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PerfumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Perfume::create([

            'perfume_name'=>Str::random(10),
            'price'=>Str::random(10),
            'discount'=>Str::random(10),
            'category'=>Str::random(10),
            'stock'=>Str::random(10),
            'rate'=>Str::random(10),
            'desc'=>Str::random(50),
            'description_en'=>Str::random(50),
            'email'=>env('DEFAULT_EMAIL'),

        ]);
    }
}
