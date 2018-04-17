<?php

namespace App\Http\Controllers;


namespace App\Http\Controllers;

use App\SyncRequest;
use App\SyncResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SyncController extends Controller
{
    public function sync(Request $request){
		/*
			TODO : Replace postJson with json from request
		*/
    	$syncRequest = new SyncRequest($request->input('date'), $request->input('clients'), $request->input('devis'), $request->input('constituers'));
    	$syncRequest->Process();

    	$syncResponse = new SyncResponse();

    	return $syncResponse->Process();
    }
}
