<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_role = 
        [
            ['role_name'=>'Super Administrator',],
            ['role_name'=>'Administrator'],
        ];
        DB::table('user_roles')->insert($data_role);
    }
}
