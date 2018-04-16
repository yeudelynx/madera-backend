<?php
namespace App;
use App\Client;
use App\Constituer;
use App\Devis;

class SyncRequest
{
    private $arrayClients = array();
    private $arrayConstituers = array();
    private $arrayDevis = array();

    function __construct($json)
    {
        $datas = json_decode($json, true);
        
        $this->arrayClients = $datas['clients'];
        $this->arrayConstituers = $datas['constituers'];
        $this->arrayDevis = $datas['devis'];
    } 
    
    public function Process() {
        //Save Clients & update Devis->client_id with fresh mysql id
        if()
        foreach ($this->arrayClients as $cli) {
            $oldId = $cli['id'];
            $client = new Client();
            $client->fill($cli);
            $client->save();
            foreach ($this->arrayDevis as $dev) {
                if($dev['client_id'] == $oldId){
                    $dev['client_id'] = $client->id;
                }
            }
        }

        //Save Devis & update Constituers->devis_id with fresh mysql id
        foreach ($this->arrayDevis as $dev) {
            $oldId = $dev['id'];
            $devis = new Devis();
            $devis->fill($dev);
            $devis->save();
            foreach ($this->arrayConstituers as $const) {
                if($const['devis_id'] == $oldId){
                    $dev['devis_id'] = $devis->id;
                }
            }
        }

        foreach ($this->arrayConstituers as $const) {
            $const = new Constituer();
            $const->fill($dev);
            $const->save();
        }

        return true;
    }
}
