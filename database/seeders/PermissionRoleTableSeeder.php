<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $count = DB::table('permission_role')->where('role_id', 1)->where('permission_id', 1)->count();
        if ($count == 0){
            DB::table('permission_role')->insert(array(
                0 =>
                    array (
                        'permission_id' => 1,
                        'role_id' => 1,
                    ),
//
            ));
        }
    }
}
