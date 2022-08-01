<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $models = ['users', 'sliders', 'services','order', 'packages', 'cities','education','bankaccounts', 'countries','partnerrequests','position' ,'workshop','bill','address','accountdetail','perfumerequest','perfume','merchant','coupons','notes','roles', 'products', 'pages', 'categories', 'settings', 'brands', 'articles'];
        $maps = ['create', 'update', 'read', 'delete'];

        foreach ($models as $model) {


            foreach ($maps as $map) {

                Permission::create([

                    'name' => $map . '_' . $model,
                    'guard_name' => 'web'
                ]);

            }
        }


    }
}
