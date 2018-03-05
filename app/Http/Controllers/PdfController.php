<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generate($id_devis)
    {

        
        return 'pdf generated with id_devis : ' . $id_devis . ' ;)' ;
    }
}
