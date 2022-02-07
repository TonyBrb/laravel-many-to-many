<?php

use App\Post;
use App\Tags;
use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\DocBlock\Tag;

class PostsTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<20; $i++){
            $post = Post::inRandomOrder()->first();
            $tag_id = Tags::inRandomOrder()->first()->id;
            $post->tags()->attach($tag_id);
        }
    }
}
