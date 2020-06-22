<?php

use Illuminate\Database\Seeder;
use App\User; //prendo il modello User
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash; 

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $counter = 10;
        
        for ($i = 1; $i <= $counter; $i++) {
            $newUser = new User();
            $newUser->name = $faker->name();
            $newUser->email = $faker->email();;
            $newUser->password = Hash::make('mypassword'); //permette di creare una versione hash del dato in modo tale da non metterlo nel db in "chiaro". Ovviamente bisogna aggiungere Hash in use
            $newUser->save();
        }
    }
}
