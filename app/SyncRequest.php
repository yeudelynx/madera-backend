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
    private $date;

    function __construct($request)
    {        
        $this->arrayClients = $request->input('clients');
        $this->arrayConstituers = $request->input('constituers');
        $this->arrayDevis = $request->input('devis');
        $this->date = $request->input('date');
    } 
    
    public function Process() {
        /*
            TODO : check if the resource exist OK
        */

        //Save Clients & update Devis->client_id with fresh mysql id
        if(count($this->arrayClients) > 0 ){            
            foreach ($this->arrayClients as $cli){
                //Check if client exist (created_at != NULL)
                if($cli['created_at'] == NULL){
                    //New resource so store that in server
                    $oldId = $cli['id'];
                    unset($cli['id']);
                    unset($cli['created_at']);
                    unset($cli['updated_at']);
                    unset($cli['deleted_at']);
                    $client = new Client();
                    $client->fill($cli);
                    $client->save();
                    foreach ($this->arrayDevis as $dev){
                        if($dev['client_id'] == $oldId){
                            $dev['client_id'] = $client->id;
                        }                 
                    }
                }else{
                    $client = Client::where('id', '=', $cli['id'])->where('created_at', '=', $cli['created_at'])->first();
                    $client->fill($cli);
                    $client->save();
                }
            }
        }
        //Save Devis & update Constituers->devis_id with fresh mysql id
        if(count($this->arrayDevis) > 0 ){
            foreach ($this->arrayDevis as $dev){
                //Check if devis exist (created_at != NULL)
                if($dev['created_at'] == NULL){
                    //New resource so store that in server
                    $oldId = $dev['id'];
                    unset($dev['id']);
                    unset($dev['created_at']);
                    unset($dev['updated_at']);
                    unset($dev['deleted_at']);
                    $devis = new Devis();
                    $devis->fill($dev);
                    $devis->save();
                    foreach ($this->arrayConstituers as $const){
                        if($const['devis_id'] == $oldId){
                            $dev['devis_id'] = $devis->id;
                        }
                    }
                }else{
                    $devis = Devis::where('id', '=', $dev['id'])->where('created_at', '=', $dev['created_at'])->first();
                    $devis->fill($dev);
                    $devis->save();
                }
            }
            if(count($this->arrayConstituers) > 0 ){
                foreach ($this->arrayConstituers as $const){
                    //Check if client exist (created_at != NULL)
                    if($const['created_at'] == NULL){
                        //New resource so store that in server
                        $constituer = new Constituer();
                        unset($const['created_at']);
                        unset($const['updated_at']);
                        unset($const['deleted_at']);
                        $constituer->fill($const);
                        $constituer->save();
                    }else{
                        $constituer = Constituer::where('id', '=', $const['id'])->where('created_at', '=', $const['created_at']);
                        $constituer->fill($const);
                        $constituer->save();
                    }
                }
            }
        }
        return true;
    }
}
