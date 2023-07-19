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
                'name'=>'Canggu',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos voluptatibus quidem reprehenderit culpa nostrum.',
                'image'=>'images/areas/canggu.webp'
            ],     
            [
                'name'=>'Bedugul',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos voluptatibus quidem reprehenderit culpa nostrum.',
                'image'=>'images/areas/bedugul.webp'
            ],
            [
                'name'=>'Kintamani',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos voluptatibus quidem reprehenderit culpa nostrum.',
                'image'=>'images/areas/kintamani.webp'
            ],
            [
                'name'=>'Kuta',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos voluptatibus quidem reprehenderit culpa nostrum.',
                'image'=>'images/areas/kuta.webp'
            ],
            [
                'name'=>'Ubud',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos voluptatibus quidem reprehenderit culpa nostrum.',
                'image'=>'images/areas/ubud.webp'
            ],
            [
                'name'=>'Uluwatu',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos voluptatibus quidem reprehenderit culpa nostrum.',
                'image'=>'images/areas/uluwatu.webp'
            ],
            [
                'name'=>'Nusa Dua',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos voluptatibus quidem reprehenderit culpa nostrum.',
                'image'=>'images/areas/nusa-dua.webp'
            ],
            [
                'name'=>'Seminyak',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos voluptatibus quidem reprehenderit culpa nostrum.',
                'image'=>'images/areas/seminyak.webp'
            ],
            [
                'name'=>'Denpasar',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos voluptatibus quidem reprehenderit culpa nostrum.',
                'image'=>'images/areas/denpasar.webp'
            ],
            [
                'name'=>'Jimbaran',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos voluptatibus quidem reprehenderit culpa nostrum.',
                'image'=>'images/areas/jimbaran.webp'
            ],
            [
                'name'=>'Kerobokan',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos voluptatibus quidem reprehenderit culpa nostrum.',
                'image'=>'images/areas/kerobokan.webp'
            ],
        ];
        DB::table('areas')->insert($areas);
    }
}
