<?php

use App\Gamme;
use Illuminate\Database\Seeder;

class GammesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Gamme::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $faker = \Faker\Factory::create();
		for ($i=0; $i < 10; $i++) {
		    DB::table('gammes')->insert([
                'lib_gamme' => 'lib gamme '.$i,
                'remise_id' => $faker->numberBetween($min = 1, $max = 10),
                'created_at' => Now(),
                'updated_at' => Now(),
		    ]);
		}
    }
}
