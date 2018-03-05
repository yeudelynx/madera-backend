<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::get('hello/{number}', function($number) {
	return "Hello world " . $number ;
	});


//Trigger this route for generate a pdf with specifique id_devis
Route::get('pdf/{id_devis}', 'PdfController@generate');


//retrive data from RealmDB to local DB
//Route::get('/retrive', 'RealmController@generate');

//propagate data from local DB to RealmDB
//Route::get('/propagate', 'RealmController@generate');


Route::get('routes', function(){
    $routeCollection = Route::getRoutes()->get();
    $str = "<table id='routes-table' class='table table-bordered table-responsive'>";
        $str .= "<tr>";
            $str .= "<td width='10%'><h4>HTTP Method</h4></td>";
            $str .= "<td width='30%'><h4>Route</h4></td>";
            $str .= "<td width='35%'><h4>Corresponding Action</h4></td>";
            $str .= "<td width='15%'><h4>Middlewares</h4></td>";
        $str .= "</tr>";
        foreach ($routeCollection as $route) {
        	$middlewares = $route->gatherMiddleware();
            $str .= "<tr>";
                $str .= "<td>" . $route->methods()[0] . "</td>";
                $str .= "<td>http://api.buyyourcity.ovh/" . $route->uri . "</td>";
                $str .= "<td>" . $route->getActionName() . "</td>";
                $str .= "<td>";
                foreach ($middlewares as $key => $middleware) {
                	$str .= $middleware . ",";
                }
                $str .= "</td>";

            $str .= "</tr>";
        }
    $str .= "</table>";
    return $str;
});