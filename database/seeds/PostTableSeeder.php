<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;
use App\User;
use Illuminate\Support\Str;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $counter = 100;
        $users = User::all();

        for($i = 0; $i < $counter; $i++) {
            $title = $faker->text(50);

            $newPost = new Post();
            $newPost->user_id = $users->random()->id; //query al db, prende utenti e ad ogni loop prende la un id random nella collezione di users presenti
            $newPost->title = $title;
            $newPost->body = $faker->text(300);
            $newPost->slug = Str::slug($title, '-');
            $newPost->save();
        }
    }
}