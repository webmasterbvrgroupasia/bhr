<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomTypeSeeder extends Seeder
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
                'name' => 'Deluxe Room with Pool View',

                'room_area' => '142',

                'property_id' => '22',

                'maximum_adult' => '2',

                'maximum_child' => '2',

                'price_per_night' => '4789000'

            ],

            [
                'name' => 'Deluxe Room',

                'room_area' => '150',

                'property_id' => '22',

                'maximum_adult' => '2',

                'maximum_child' => '0',

                'price_per_night' => '3789000'

            ],
        ];

        DB::table('room_type')->insert($data);
    }
}
