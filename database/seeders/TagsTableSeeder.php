<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            [
                'name' => 'Laravel',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PHP',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Web Development',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more tags as needed
        ];

        // Insert the data into the tags table
        DB::table('tags')->insert($tags);
    }
    
}
