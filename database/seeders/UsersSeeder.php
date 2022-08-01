<?php

namespace Database\Seeders;

use App\Models\ModelRole;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = \App\Models\User::count();
        if ($users == 0)
            \App\Models\User::create([
                'first_name' => "ADMIN",
                'last_name' => 'AdMIN',
                'email' => env('DEFAULT_EMAIL'),
                'email_verified_at' => date("Y-m-d h:i:s"),
                'password' => bcrypt(env('DEFAULT_PASSWORD'))
            ]);

        ModelRole::create([

            'role_id'=>1,
            'model_type'=>'App\Models\User',
            'model_id'=>1
        ]);
    }
}
