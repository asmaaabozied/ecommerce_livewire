<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UsersSeeder::class,
            PermissionSeeder::class,
            RolePermissionSeeder::class,
            BrandSeeder::class,
            CategorySeeder::class,
            ServiceSeeder::class,
            SliderSeeder::class,
            SettingSeeder::class,
            PerfumeSeeder::class,
            PaymentSettingSeeder::class,
            ThemeSettingSeeder::class

        ]);
    }
}

