<?php

use App\Remise;
use Illuminate\Database\Seeder;

class RemisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Remise::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $faker = \Faker\Factory::create();
		for ($i=0; $i < 10; $i++) {
    		$valRemise = $faker->numberBetween($min = 0, $max = 50)
		    DB::table('remises')->insert([
                'valeur_remise' => $valRemise,
                'lib_remise' => 'Remise exeptionnelle de '.$valRemise,
		    ]);
		}
    }
}