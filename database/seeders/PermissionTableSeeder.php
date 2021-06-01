<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('permissions')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'permission_group_id' => 1,
                    'name' => 'all_functions',
                    'display_name' => 'All Functions',
                    'description' => 'Administrative rights to access all functions',
                    'ischecker' => 0,
                    'isadmin' => 1
                ),

            1 =>
                array (
                    'id' => 2,
                    'permission_group_id' => 2,
                    'name' => 'manage_roles_permissions',
                    'display_name' => 'Manage Roles and Permissions',
                    'description' => 'Manage Roles and Permissions',
                    'ischecker' => 0,
                    'isadmin' => 0
                ),

            2 =>
                array (
                    'id' => 3,
                    'permission_group_id' => 2,
                    'name' => 'manage_users',
                    'display_name' => 'Manage Users',
                    'description' => 'Users management',
                    'ischecker' => 0,
                    'isadmin' => 0
                ),
        ));
    }
}
