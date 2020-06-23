<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Comment;
use App\Post;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $counter = 1000;
        $posts = Post::all();

        for($i = 1; $i <= $counter; $i++) {
            $newComment = new Comment();
            $newComment->post_id = $posts->random()->id;
            $newComment->nickname = $faker->userName();
            $newComment->body = $faker->paragraph(3, true);
            $newComment->save();
        }
    }
}
