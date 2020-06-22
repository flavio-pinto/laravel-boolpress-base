<?php

use Illuminate\Database\Seeder;
use App\InfoUser;
use App\User;
use Faker\Generator as Faker;

class InfoUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = User::all();
        foreach($users as $user) {
            $newInfoUser = new InfoUser();
            $newInfoUser->user_id = $user->id; //per ottenere la forein key che sia uguale all'id di user
            $newInfoUser->phone = $faker->phoneNumber();
            $newInfoUser->address = $faker->streetAddress();
            $newInfoUser->avatar = $faker->imageUrl(640, 480);
            $newInfoUser->save();
        }
    }
}
