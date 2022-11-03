<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;
class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comment = new Comment;
     
        $comment->description="yoo this is a  great blog";
        $comment->post_id= 1;
        $comment->save();
        
        Comment::factory()->count(50)->create();
    }
}
