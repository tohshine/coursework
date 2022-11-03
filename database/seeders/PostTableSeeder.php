<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post;
        $post->title = "Experience new Life";
        $post->description="welcome to the new life";
        $post->save();

        $post2 = new Post;
        $post2->title = "New Blog";
        $post2->description="Another new blog";
        $post2->save();

        Post::factory()->count(50)->create();
    }
}
