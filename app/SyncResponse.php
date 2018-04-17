<?php
namespace App;
use App\Categorie;
use App\Client;
use App\Constituer;
use App\Couleur;
use App\Devis;
use App\Gamme;
use App\Magasin;
use App\Matiere;
use App\Module;
use App\Remise;
use App\Sol;
use App\Unite;
use App\User;

class SyncResponse
{
	/*
		TODO : Return only users datas
	*/
	public function Process(){
		$datas = array(
			'date' => Now(),
			'categories' => Categorie::all()->toArray(),
			'clients' => Client::all()->toArray(),
			'constituers' => Constituer::all()->toArray(),
			'couleurs' => Couleur::all()->toArray(),
			'devis' => Devis::all()->toArray(),
			'gammes' => Gamme::all()->toArray(),
			'magasins' => Magasin::all()->toArray(),
			'matieres' => Matiere::all()->toArray(),
			'modules' => Module::all()->toArray(),
			'remises' => Remise::all()->toArray(),
			'sols' => Sol::all()->toArray(),
			'unites' => Unite::all()->toArray(),
			'users' => User::all()->toArray(),
		);
		return json_encode($datas);
	}
}