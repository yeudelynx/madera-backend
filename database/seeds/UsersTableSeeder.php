<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $faker = \Faker\Factory::create();
		for ($i=0; $i < 10; $i++) {
            $name = $faker->lastName();
            $firstname = $faker->firstName();
            DB::table('users')->insert([
                'name' => $name,
                'email' => $name.'.'.$lastName.'@gmail.com', 
                'password' => bcrypt($name),
                'nom' => $name,
                'prenom' => $mastName,
                'ville' => $faker->address,
                'login' => $name.'.'.$lastName,
                'magasin_id' => $faker->numberBetween($min = 0, $max = 10),
		    ]);
		}
    }
}