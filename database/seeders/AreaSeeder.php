<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $areas = [
            [
                'location'=>'Canggu',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos voluptatibus quidem reprehenderit culpa nostrum.',
                'image'=>'images/areas/canggu.webp'
            ],
            [
                'location'=>'Bedugul',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos voluptatibus quidem reprehenderit culpa nostrum.',
                'image'=>'images/areas/bedugul.webp'
            ],
            [
                'location'=>'Kintamani',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos voluptatibus quidem reprehenderit culpa nostrum.',
                'image'=>'images/areas/kintamani.webp'
            ],
            [
                'location'=>'Kuta',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos voluptatibus quidem reprehenderit culpa nostrum.',
                'image'=>'images/areas/kuta.webp'
            ],
            [
                'location'=>'Ubud',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos voluptatibus quidem reprehenderit culpa nostrum.',
                'image'=>'images/areas/ubud.webp'
            ],
            [
                'location'=>'Uluwatu',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos voluptatibus quidem reprehenderit culpa nostrum.',
                'image'=>'images/areas/uluwatu.webp'
            ],
            [
                'location'=>'Nusa Dua',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos voluptatibus quidem reprehenderit culpa nostrum.',
                'image'=>'images/areas/nusa-dua.webp'
            ],
            [
                'location'=>'Seminyak',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos voluptatibus quidem reprehenderit culpa nostrum.',
                'image'=>'images/areas/seminyak.webp'
            ],
            [
                'location'=>'Denpasar',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos voluptatibus quidem reprehenderit culpa nostrum.',
                'image'=>'images/areas/denpasar.webp'
            ],
            [
                'location'=>'Jimbaran',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos voluptatibus quidem reprehenderit culpa nostrum.',
                'image'=>'images/areas/jimbaran.webp'
            ],
            [
                'location'=>'Kerobokan',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos voluptatibus quidem reprehenderit culpa nostrum.',
                'image'=>'images/areas/kerobokan.webp'
            ],
        ];
        DB::table('areas')->insert($areas);
    }
}
