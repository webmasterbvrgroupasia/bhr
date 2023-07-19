<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_user = 
        [
            [
                'name'=>'E-Commerce Manager',
                'email'=>'ecommerce@bvrproperty.com',
                'password'=>Hash::make('Ecommerce.2023!'),
                'role_id'=>'1'
            ],
        ];
        DB::table('users')->insert($data_user);
    }
}
