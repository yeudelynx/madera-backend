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

use Illuminate\Support\Facades\Storage;


class PdfController extends Controller
{

        //'module_id', 'devis_id', 'couleur_id', 'matiere_id', 'unite_id'
        //La façon d'afficher le devis
        private static $DEST_INLINE = 'I'; //le navigateur l'affichera
        private static $DEST_DOWNLOAD = 'D'; //un téléchargement débutera.
        private static $DEST_LOCAL = 'F'; //enregistrer un fichier localement
        private static $DEST_STRING = 'S'; //une chaine de caractère
        private static $DEFAULT_PATH_FOR_IMAGES = 'assets/images/';

        //Bordures pour les cellules
        private static $NO_BORDER = 0; 
        private static $BORDER    = 1;

        //Gestions des borudres
        private static $BORDER_LEFT = 'L';
        private static $BORDER_RIGHT = 'R';
        private static $BORDER_TOP = 'T';
        private static $BORDER_BOTTOM = 'B';
        //L'alignement des cellules
        private static $ALIGN_RIGHT = 'R';
        private static $ALIGN_LEFT = 'L';
        private static $ALIGN_CENTER = 'C';

        //Positionnement du curseur.
        private static $CURRENT_POS_RIGHT = 0;
        private static $CURRENT_POS_NEXTLINE = 1; //placement au DEBUT de la ligne suivante
        private static $CURRENT_POS_UNDER = 2;  //se positionne à la ligne suivante juste en dessous.
        private $pdfDocument;

     public function __construct() {
         $this->pdfDocument = new FPDF('P', 'mm', 'A4');
         $this->pdfDocument->AddPage();
         $this->pdfDocument->SetFont('Arial');
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generate($id_devis)
    {
        $image = Storage::disk('public')->url('madera.jpg');

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

        \Log::info($commercial);

        $this->pdfDocument->Image($image, 10,6,30);
        $this->pdfDocument->Ln(25);
        // Infos du client
        $this->pdfDocument->Cell(0, 10, $client->nom.' '.$client->prenom, self::$NO_BORDER, self::$CURRENT_POS_NEXTLINE);
        $this->pdfDocument->Cell(0, 10, $client->adresse, self::$NO_BORDER, self::$CURRENT_POS_NEXTLINE);
        $this->pdfDocument->Cell(0, 10, $client->tel, self::$NO_BORDER, self::$CURRENT_POS_NEXTLINE);
        $this->pdfDocument->Cell(0, 10, $client->mail, self::$NO_BORDER, self::$CURRENT_POS_NEXTLINE);
        $this->pdfDocument->Cell(0, 10, "date d'edition : ".date('d/m/Y'), self::$NO_BORDER, self::$CURRENT_POS_NEXTLINE, self::$ALIGN_RIGHT);

        $this->pdfDocument->Cell(0, 10, 'Id client : '.$devis->client_id, self::$NO_BORDER, self::$CURRENT_POS_NEXTLINE, self::$ALIGN_RIGHT);
         $this->pdfDocument->Cell(0, 10, 'Id commercial : '.$devis->user_id, self::$NO_BORDER, self::$CURRENT_POS_NEXTLINE, self::$ALIGN_RIGHT);


        //infos entreprise
        $this->pdfDocument->Cell(0, 10, 'Madera Construction', self::$NO_BORDER, self::$CURRENT_POS_NEXTLINE, self::$ALIGN_RIGHT);
        $this->pdfDocument->Cell(0, 10, 'Rue Enzo Ferrari', self::$NO_BORDER, self::$CURRENT_POS_NEXTLINE, self::$ALIGN_RIGHT);
        $this->pdfDocument->Cell(0, 10, '85000 La Roche-sur-Yon', self::$NO_BORDER, self::$CURRENT_POS_NEXTLINE, self::$ALIGN_RIGHT);


        //adresse de l'entreprise;
        /*$this->pdfDocument->Cell(0, 7, 'Madera Construction', self::$NO_BORDER, self::$CURRENT_POS_NEXTLINE);
        $this->pdfDocument->Cell(0, 7, ' Rue Enzo Ferrari', self::$NO_BORDER, self::$CURRENT_POS_NEXTLINE);
        $this->pdfDocument->Cell(0, 7, '85000 La Roche-sur-Yon', self::$NO_BORDER, self::$CURRENT_POS_NEXTLINE);*/

        
        foreach ($array_modules_devis as $key => $module) {
            //\Log::info($module);
            
            // nom
            $this->pdfDocument->Cell(40, 7, 'le nom du module', self::$BORDER, self::$CURRENT_POS_RIGHT, self::$ALIGN_LEFT);

            //couleur
            $this->pdfDocument->Cell(40, 7, $module->lib_couleur, self::$BORDER, self::$CURRENT_POS_RIGHT, self::$ALIGN_LEFT);

            //matiere
            $this->pdfDocument->Cell(40, 7, $module->lib_matiere, self::$BORDER, self::$CURRENT_POS_RIGHT, self::$ALIGN_LEFT);

            // gamme
            $this->pdfDocument->Cell(40, 7, $module->lib_gamme, self::$BORDER, self::$CURRENT_POS_RIGHT, self::$ALIGN_LEFT);

            //prix
            $this->pdfDocument->Cell(25, 7, $module->prix_module, self::$BORDER, self::$CURRENT_POS_NEXTLINE, self::$ALIGN_LEFT);
        }

        //$this->pdfDocument->Cell(25, 7, $module->prix_module, self::$BORDER, self::$CURRENT_POS_UNDER, self::$ALIGN_LEFT);



        // Pour chaque module, remonter le nom et toutes autres infos utile qui compose le module
        // Voir pour faire une jointure
        // Trier les modules par ID.
        // Boucler sur chaque module afin de remplir le tableau de modules qui compose le devis.


     
        // Infos du commercial

        
        // Creer notre PDF,

        // Inserer l'entête (info commercial + client + infos de l'entreprise + logo + numero du devis ...)

        // Inserer le tableau des modules(Nom du module, couleur, prix ).

        // creer le pied de page (ajouter prix HT, Prix TTC, Reduction et Prix + reduction.)
        
        // Signature des différentes parties.
    

        /*foreach ($array_modules_devis as $key => $module) {
        }


        foreach ($array_modules_devis as $key => $module) {
            //$
        }*/
        //return 'pdf generated with id_devis : ' . $id_devis . ' ;)' ;
        $this->pdfDocument->Output(self::$DEST_DOWNLOAD, 'result.pdf', False);
    }
}
