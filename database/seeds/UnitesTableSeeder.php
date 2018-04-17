<?php

use App\Unite;
use Illuminate\Database\Seeder;

class UnitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Unite::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
		    DB::table('unites')->insert([
                'symbole' => 'm',
                'lib_unite' => 'metre',
                'created_at' => Now(),
                'updated_at' => Now(),
		    ]);
    }
}