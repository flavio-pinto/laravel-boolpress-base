<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserTableSeeder::class, //ovviamente va messo per primo quello con la primary key
            InfoUserTableSeeder::class,
            PostTableSeeder::class,
            CommentTableSeeder::class
        ]);
    }
}
