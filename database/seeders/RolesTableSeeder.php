<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $role = \App\Models\Auth\Role::query()->firstOrCreate(['id' => '1'],[
            'name' => 'Admin',
            'description' => 'Administrator',
            'isactive' => '1',
            'isadmin' => '1',
        ]);


        /*CUSTOM Finance manager*/
        $role_accountant = \App\Models\Auth\Role::query()->firstOrCreate(['id' => '2'],[
            'name' => 'Academic',
            'description' => 'Manage staffs',
            'isactive' => '1',
            'isadmin' => '0',
        ]);
    }
}
