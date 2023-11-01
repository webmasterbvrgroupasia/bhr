<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialOfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specialOfferData = [
            [
                'package_name' => 'Package 1',
                'slug' => 'package-1',
                'description' => 'Description for Package 1',
                'image' => 'path/to/image1.jpg',
                'booking_link' => 'https://images.unsplash.com/photo-1698414787185-a8fe594a22ac?auto=format&fit=crop&q=80&w=1935&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'meta_description' => 'Meta description for Package 1',
                'meta_keywords' => 'Keyword1, Keyword2, Keyword3',
                'additional_notes' => 'Additional notes for Package 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'package_name' => 'Package 2',
                'slug' => 'package-2',
                'description' => 'Description for Package 2',
                'image' => 'https://images.unsplash.com/photo-1683009426952-13567b4fa28b?auto=format&fit=crop&q=80&w=1919&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'booking_link' => 'https://example.com/package-2',
                'meta_description' => 'Meta description for Package 2',
                'meta_keywords' => 'Keyword1, Keyword2, Keyword3',
                'additional_notes' => 'Additional notes for Package 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'package_name' => 'Package 3',
                'slug' => 'package-3',
                'description' => 'Description for Package 3',
                'image' => 'https://images.unsplash.com/photo-1695762446083-c1f182562229?auto=format&fit=crop&q=80&w=1887&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'booking_link' => 'https://example.com/package-3',
                'meta_description' => 'Meta description for Package 3',
                'meta_keywords' => 'Keyword1, Keyword2, Keyword3',
                'additional_notes' => 'Additional notes for Package 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'package_name' => 'Package 4',
                'slug' => 'package-4',
                'description' => 'Description for Package 4',
                'image' => 'https://images.unsplash.com/photo-1682685797795-5640f369a70a?auto=format&fit=crop&q=80&w=2071&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'booking_link' => 'https://example.com/package-4',
                'meta_description' => 'Meta description for Package 4',
                'meta_keywords' => 'Keyword1, Keyword2, Keyword3',
                'additional_notes' => 'Additional notes for Package 4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'package_name' => 'Package 5',
                'slug' => 'package-5',
                'description' => 'Description for Package 5',
                'image' => 'https://images.unsplash.com/photo-1696790427681-9c2b5be742db?auto=format&fit=crop&q=80&w=1887&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'booking_link' => 'https://example.com/package-5',
                'meta_description' => 'Meta description for Package 5',
                'meta_keywords' => 'Keyword1, Keyword2, Keyword3',
                'additional_notes' => 'Additional notes for Package 5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('special_offer')->insert($specialOfferData);

    }
}
