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
                'mail' => $name.'.'.$firstname.'@gmail.com', 
                'password' => md5($name.'.'.$firstname),
                'nom' => $name,
                'prenom' => $firstname,
                'ville' => $faker->address,
                'login' => $name.'.'.$firstname,
                'magasin_id' => $faker->numberBetween($min = 1, $max = 10),
                'created_at' => Now(),
                'updated_at' => Now(),
		    ]);
		}
    }
}