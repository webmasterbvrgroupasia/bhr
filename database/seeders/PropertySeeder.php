<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $properties = [
            [
                'name' => 'Goya Boutique & Resort',
                'area_id' => '5',
                'slug' => 'goya-boutique-resort',
                'images' => '-',
                'description' => 'Discover modern simplicity alongside Balinese harmony; where contemporary comforts and traditional aesthetics meet at Goya Boutique Resort. Located in the heart of Ubud, the artisan village of Bali and an idyllic destination embodying a serenely timeless way of life, Goya Boutique Resort is a tropical hideaway that offers the tranquility of private villas set in a lush garden retreat',
                'facilities' => 'Shuttle service, Designated smoking area, Air conditioning, Non-smoking throughout,Wake-up service, Hardwood or parquet floors, Tile/marble floor, Car hire, Lift, Family rooms, Ironing facilities, Airport shuttle (Additional charge), Non-smoking rooms, Room service',
                'amenities' => '',
                'booking_link' => 'https://random-link.com',
                'price' => '2900000',
                'property_status' => '1'
            ],
        ];
        DB::table('properties')->insert($properties);
    }
}
