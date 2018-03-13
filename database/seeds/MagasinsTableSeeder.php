<?php

use App\Magasin;
use Illuminate\Database\Seeder;

class MagasinsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Magasin::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $faker = \Faker\Factory::create();
		for ($i=0; $i < 10; $i++) {
            $addr = $faker->address();
		    DB::table('magasins')->insert([
		        'adresse' =>  $addr,
		        'lib_magasin' => 'le magasin de ' . $addr,
		    ]);
		}
    }
}