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

class SyncRequest
{
	private $categories = Categorie::All();
	private $clients = Client::All();
	private $constituers = Constituer::All();
	private $couleurs = Couleur::All();
	private $devis = Devis::All();
	private $gammes = Gamme::All();
	private $magasins = Magasin::All();
	private $matieres = Matiere::All();
	private $modules = Module::All();
	private $remises = Remise::All();
	private $sols = Sol::All();
	private $unites = Unite::All();
	private $users = User::All();

	public function Process(){
		$datas = array(
			'categories' => $this->categories->toArray(),
			'clients' => $this->clients->toArray(),
			'constituers' => $this->constituers->toArray(),
			'couleurs' => $this->couleurs->toArray(),
			'devis' => $this->devis->toArray(),
			'gammes' => $this->gammes->toArray(),
			'magasins' => $this->magasins->toArray(),
			'matieres' => $this->matieres->toArray(),
			'modules' => $this->modules->toArray(),
			'remises' => $this->remises->toArray(),
			'sols' => $this->sols->toArray(),
			'unites' => $this->unites->toArray(),
			'users' => $this->users->toArray(),
		);

		return json_encode($datas);
	}
}