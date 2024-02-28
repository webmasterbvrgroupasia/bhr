<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i=0; $i < 400 ; $i++) { 
           
            $dummyData = [
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'email_address' => $faker->freeEmail(),
                'phone_number' => $faker->phoneNumber(),
                'nationality' => $faker->randomElement(['Indonesia','Germany','France','Australia','Netherland','United Kingdom','Russia','China','Other']),
                'unit' => $faker->randomElement(['CC','CH','BTS']),
                'room' => $faker->randomElement(['Nusa Dua','Pecatu','Jimbaran']),
                'first_time' => $faker->randomElement(['yes','no']),
                'reference' => $faker->randomElement(['Friend','Website','Travel Agent','Social Media','Other','Google']),
                'reservation_rating' => $faker->randomElement(['excellent','good','fair','poor']),
                'cleanliness' => $faker->randomElement(['excellent','good','fair','poor']),
                'housekeeping' => $faker->randomElement(['excellent','good','fair','poor']),
                'staff_friendliness' => $faker->randomElement(['excellent','good','fair','poor']),
                'staff_competence' => $faker->randomElement(['excellent','good','fair','poor']),
                'service_quality' => $faker->randomElement(['excellent','good','fair','poor']),
                'ambience' => $faker->randomElement(['excellent','good','fair','poor']),
                'location' => $faker->randomElement(['excellent','good','fair','poor']),
                'general_review' => $faker->randomElement(['excellent','good','fair','poor']),
                'quality_and_price' => $faker->randomElement(['excellent','good','fair','poor']),
                'unit_service' => $faker->randomElement(['excellent','good','fair','poor']),
                'consideration' => $faker->randomElement(['yes','no']),
                'recommendation' => $faker->randomElement(['yes','no']),
                'employee_who_made_stay_more_pleasurable' => $faker->randomElement(['Employee 1','Employee 2']),
                'review_writings' => $faker->sentence(2),
                'subscribe_to_newsletter' => $faker->randomElement(['yes','no']),
                'created_at' => $faker->dateTimeBetween('-1 year','now'),
            ];

            DB::table('feedbacks')->insert($dummyData);

        }
    }
}
