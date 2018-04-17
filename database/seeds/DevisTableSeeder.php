<?php

use App\Devis;
use Illuminate\Database\Seeder;

class DevisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Devis::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $faker = \Faker\Factory::create();
		for ($i=0; $i < 10; $i++) {
		    DB::table('devis')->insert([
                'is_sync' => $faker->boolean,
                'orientation' => $faker->numberBetween($min = 0, $max = 359),
                'client_id' => $faker->numberBetween($min = 1, $max = 10),
                'user_id' => $faker->numberBetween($min = 1, $max = 10),
                'sol_id' => $faker->numberBetween($min = 1, $max = 10),
                'created_at' => Now(),
                'updated_at' => Now(),
		    ]);
		}
    }
}
