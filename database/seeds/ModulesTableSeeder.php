<?php

use App\Module;
use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Module::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $faker = \Faker\Factory::create();
		for ($i=0; $i < 10; $i++) {
		    DB::table('modules')->insert([
                'prix' => $faker->numberBetween($min = 100, $max = 1000),
                'longueur' => $faker->numberBetween($min = 1, $max = 3),
                'hauteur' => $faker->numberBetween($min = 1, $max = 3),
                'largeur' => $faker->numberBetween($min = 1, $max = 2),
                'distance_sol' => $faker->numberBetween($min = 2, $max = 4),
                'lib_module' => 'lib module '.$i,
                'gamme_id' => $faker->numberBetween($min = 1, $max = 10),
                'categorie_id' => $faker->numberBetween($min = 1, $max = 10),
                'created_at' => Now(),
                'updated_at' => Now(),
		    ]);
		}
    }
}
