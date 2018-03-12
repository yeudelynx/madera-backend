<?php

use App\Matiere;
use Illuminate\Database\Seeder;

class MatieresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Matiere::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
		DB::table('matieres')->insert([
            'lib_matiere' => 'bois',
		]);
        DB::table('matieres')->insert([
            'lib_matiere' => 'alu',
        ]);
        DB::table('matieres')->insert([
            'lib_matiere' => 'fer',
        ]);
        DB::table('matieres')->insert([
            'lib_matiere' => 'plas-tok',
        ]);
    }
}