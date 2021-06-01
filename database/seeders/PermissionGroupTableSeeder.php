<?php

namespace Database\Seeders;

use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class PermissionGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        \DB::table('permission_groups')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Special',
                    'created_at' => '2018-10-28 14:54:12',
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Admin',
                    'created_at' => '2019-10-28 14:54:12',
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
        ));

    }
}
