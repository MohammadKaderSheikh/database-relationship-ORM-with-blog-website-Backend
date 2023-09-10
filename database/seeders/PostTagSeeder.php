<?php

namespace Database\Seeders;

use Carbon\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 10 posts
        $posts = factory(Post::class, 10)->create();

        // Create 20 tags
        $tags = factory(Tag::class, 20)->create();

        // Attach random tags to random posts
        $posts->each(function ($post) use ($tags) {
            $post->tags()->attach(
                $tags->random(rand(1, 5))->pluck('id')->toArray()
            );
        });
    }
}
