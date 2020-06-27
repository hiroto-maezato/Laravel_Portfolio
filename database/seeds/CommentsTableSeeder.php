<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Comment;
use App\Post;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  DB::table('comments')->truncate();
        
        factory(App\Comment::class, 3)->create();
    }
}
