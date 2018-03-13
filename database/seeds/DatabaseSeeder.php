<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Magasin seeder
        $this->call(MagasinsTableSeeder::class);
    	//User seeder
    	$this->call(UsersTableSeeder::class);
    	//Client seeder
    	$this->call(ClientsTableSeeder::class);
    	//Sol seeder
    	$this->call(SolsTableSeeder::class);
    	//Devis seeder
    	$this->call(DevisTableSeeder::class);
    	//Remise seeder
    	$this->call(RemisesTableSeeder::class);
    	//Gamme seeder
    	$this->call(GammesTableSeeder::class);
    	//Categorie seeder
    	$this->call(CategoriesTableSeeder::class);
    	//Module seeder
    	$this->call(ModulesTableSeeder::class);
    	//Couleur seeder
    	$this->call(CouleursTableSeeder::class);
    	//Matiere seeder
    	$this->call(MatieresTableSeeder::class);
    	//Unite seeder
    	$this->call(UnitesTableSeeder::class);
        //Constituer seeder
        $this->call(ConstituersTableSeeder::class);
	}
}
