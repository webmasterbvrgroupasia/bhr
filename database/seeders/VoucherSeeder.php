<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i=0; $i < 5 ; $i++) { 
            $dummyData = [
                'code' => $faker->numerify('####-####'),
                'title' => $faker->sentence(2,true),
                'inclusions' => $faker->sentence(1, true) . ',' . $faker->sentence(),
                'valid_date_start' => $faker->date(),
                'valid_date_end' => $faker->date(),
                'created_at' => $faker->dateTime(now()),
            ];
            DB::table('vouchers')->insert($dummyData);
        }
    }
}
