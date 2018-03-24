<?php
namespace App\Http\Controllers;
use App\Module;
use App\Devis;
use App\Couleur;
use App\Matiere;
use App\Unite;
use App\Constituer;
use App\User;
use App\Client;

use \FPDF;

use Illuminate\Http\Request;

    	//'module_id', 'devis_id', 'couleur_id', 'matiere_id', 'unite_id'

class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generate($id_devis)
    {
        $devis = Devis::where('id', $id_devis)->first();
        //'client_id', 'user_id'

        $client = Client::where('id', $devis->client_id)->first();

        $commercial = User::
            join('magasins', 'magasins.id', '=', 'users.magasin_id')
            ->where('users.id', $devis->user_id)
            ->first();

        $array_modules_devis = Constituer::
            join('modules', 'modules.id', '=', 'constituers.module_id')
            ->join('matieres', 'matieres.id', '=', 'constituers.matiere_id')
            ->join('couleurs', 'couleurs.id', '=', 'constituers.couleur_id')
            ->join('unites', 'unites.id', '=', 'constituers.devis_id')
            ->join('gammes', 'gammes.id', '=', 'modules.gamme_id')
            ->join('remises', 'remises.id', '=', 'gammes.remise_id')
            ->where('constituers.devis_id', $id_devis)
            ->get();

        foreach ($array_modules_devis as $key => $module) {
            \Log::info($key);
            \Log::info($module);
        }

        \Log::info($commercial);

        $pdf = new FPDF();

        // Pour chaque module, remonter le nom et toutes autres infos utile qui compose le module
        // Voir pour faire une jointure
        // Trier les modules par ID.
        // Boucler sur chaque module afin de remplir le tableau de modules qui compose le devis.


        // Infos du client
        // Infos du commercial

        
        // Creer notre PDF,

        // Inserer l'entête (info commercial + client + infos de l'entreprise + logo + numero du devis ...)

        // Inserer le tableau des modules(Nom du module, couleur, prix ).

        // creer le pied de page (ajouter prix HT, Prix TTC, Reduction et Prix + reduction.)
        
        // Signature des différentes parties.
    

        foreach ($array_modules_devis as $key => $module) {
        }


    	foreach ($array_modules_devis as $key => $module) {
    		//$
    	}
        return 'pdf generated with id_devis : ' . $id_devis . ' ;)' ;
    }
}
