<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivityCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $activityCategoryData = [
            [
                'name'=>'Destination Exploration'
            ],
            [
                'name'=>'Adventure Escapes'
            ],
            [
                'name'=>'Cultural Immersion'
            ],
            [
                'name'=>'Relaxation and Wellness Retreats'
            ],
            [
                'name'=>'Family-Friendly Fun'
            ],
        ];

        DB::table('activity_categories')->insert($activityCategoryData);
    }
}
