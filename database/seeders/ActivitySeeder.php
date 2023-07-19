<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Live Activity',
                'area_id' => '1',
                'slug' => 'live-activity',
                'images' => '-',
                'description' => 'This birdwatching activities is a perfect fit for bird lovers.',
                'price' => '250000',
                'status'=>'1'
            ],
            [
                'name' => 'Not Live Activity',
                'area_id' => '2',
                'slug' => 'not-live-activity',
                'images' => '-',
                'description' => 'This birdwatching activities is a perfect fit for bird lovers.',
                'price' => '250000',
                'status'=>'0'

            ]
        ];
        DB::table('activities')->insert($data);
    }
}
