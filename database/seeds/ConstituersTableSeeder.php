<?php

use App\Constituer;
use App\Module;
use Illuminate\Database\Seeder;

class ConstituersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Constituer::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $faker = \Faker\Factory::create();
		for ($i=0; $i < 100; $i++) {
            $module = Module::where('id', $faker->numberBetween($min = 1, $max = 10))->first();
		    DB::table('constituers')->insert([
                'x_pos' => $faker->numberBetween($min = 0, $max = 100),
                'y_pos' => $faker->numberBetween($min = 0, $max = 100),
                'z_pos' => $faker->numberBetween($min = 0, $max = 1),
                'etage_plan' => 0,
                'prix_module' => $module->prix,
                'module_id' => $module->id,
                'devis_id' => $faker->numberBetween($min = 1, $max = 10),
                'couleur_id' => $faker->numberBetween($min = 1, $max = 10),
                'matiere_id' => $faker->numberBetween($min = 1, $max = 4),
                'unite_id' => 1,
            ]);
		}
    }
}