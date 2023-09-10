<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample data for comments
        $comments = [
            [
                'user_id' => 1,
                'post_id' => 1,
                'content' => 'This is the first comment on post 1.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'post_id' => 1,
                'content' => 'Another comment on post 1.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more comments as needed
        ];

        // Insert the data into the comments table
        DB::table('comments')->insert($comments);
    
    }
}
