<?php

use App\Sol;
use Illuminate\Database\Seeder;
class SolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Sol::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $faker = \Faker\Factory::create();
		for ($i=0; $i < 3; $i++) {
		    DB::table('sols')->insert([
                'image_sol' => 'jemetsquoilàdedans? Un path ou des datas d\'une image',
                'longueur' => $faker->numberBetween($min = 150, $max = 300),
                'largeur' => $faker->numberBetween($min = 150, $max = 300),
                'list_points_sol' => 'MULTIPOINT('
                .$faker->numberBetween($min = 0, $max = 10).' '.$faker->numberBetween($min = 0, $max = 10).', '
                .$faker->numberBetween($min = 0, $max = 10).' '.$faker->numberBetween($min = 90, $max = 100).', '
                .$faker->numberBetween($min = 90, $max = 100).' '.$faker->numberBetween($min = 90, $max = 100).', '
                .$faker->numberBetween($min = 90, $max = 100).' '.$faker->numberBetween($min = 0, $max = 10).')',
		    ]);
		}
    }
}