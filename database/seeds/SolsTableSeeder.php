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
		for ($i=0; $i < 10; $i++) {
		    DB::table('sols')->insert([
                'image_sol' => 'jemetsquoilàdedans Un path ou des datas d\'une image',
                'longueur' => $faker->numberBetween($min = 150, $max = 300),
                'largeur' => $faker->numberBetween($min = 150, $max = 300),
                'list_points_sol' => 
                '[{"x":"'.$faker->numberBetween($min = 0, $max = 10).'","y":"'.$faker->numberBetween($min = 0, $max = 10).
                '"},{"x":"'.$faker->numberBetween($min = 0, $max = 10).'","y":"'.$faker->numberBetween($min = 90, $max = 100).
                '"},{"x":"'.$faker->numberBetween($min = 90, $max = 100).'","y":"'.$faker->numberBetween($min = 90, $max = 100).
                '"},{"x":"'.$faker->numberBetween($min = 90, $max = 100).'","y":"'.$faker->numberBetween($min = 0, $max = 10).'"}]',
            ]);
            $sol = Sol::where('id', $i+1)->first();
            \Log::info($sol->list_points_sol);
        }
    }
}