<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numberOfPosts = 10; // Adjust this as needed
        $numberOfTags = 5;   // Adjust this as needed

        // Create random relationships between posts and tags
        Post::factory($numberOfPosts)->create()->each(function ($post) use ($numberOfTags) {
            $tags = Tag::factory(rand(1, $numberOfTags))->create();
            $post->tags()->attach($tags);
        });

    }
    }

