<?php

namespace Database\Seeders;

use App\Models\PaymentSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PaymentSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentSetting::create([

            'tab'=>1,
            'paypal'=>1,
            'tab_secret_key'=>Str::random(10),
            'tab_public_key'=>Str::random(10),
            'paypal_client_id'=>Str::random(10),
            'paypal_secret_key'=>Str::random(10),


        ]);
    }
}
