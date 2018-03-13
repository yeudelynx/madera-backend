<?php

use App\Couleur;
use Illuminate\Database\Seeder;

class CouleursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Couleur::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $faker = \Faker\Factory::create();
		for ($i=0; $i < 10; $i++) {
		    DB::table('couleurs')->insert([
                'code_couleur' => $faker->numberBetween($min = 0, $max = 100),
                'lib_couleur' => 'lib couleur '.$i,
		    ]);
		}
    }
}