w<?php

use App\Client;
use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Client::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $faker = \Faker\Factory::create();
		for ($i=0; $i < 10; $i++) {
            $name = $faker->lastName();
            $firstname = $faker->firstName();
		    DB::table('clients')->insert([
                'nom' => $name,
                'prenom' => $firstname,
                'adresse' => $faker->address, 
                'tel' => '0606060606',
                'mail' => $name.'.'.$firstname.'@gmail.com',
                'user_id' => $i+1,
                'created_at' => Now(),
                'updated_at' => Now(),
		    ]);
		}
    }
}
