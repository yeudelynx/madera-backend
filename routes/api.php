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

Route::get('hello/{number}', function($number) {
    return "Hello world " . $number ;
    });

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

/*
php artisan make:controller API/CategorieController  --resource --model=Categorie --api
php artisan make:controller API/ClientController  --resource --model=Client --api
php artisan make:controller API/ConstituerController  --resource --model=Constituer --api
php artisan make:controller API/CouleurController  --resource --model=Couleur --api
php artisan make:controller API/DevisController  --resource --model=Devis --api
php artisan make:controller API/GammeController  --resource --model=Gamme --api
php artisan make:controller API/MagasinController  --resource --model=Magasin --api
php artisan make:controller API/MatiereController  --resource --model=Matiere --api
php artisan make:controller API/ModuleController  --resource --model=Module --api
php artisan make:controller API/RemiseController  --resource --model=Remise --api
php artisan make:controller API/SolController  --resource --model=Sol --api
php artisan make:controller API/UniteController  --resource --model=Unite --api
php artisan make:controller api/usercontroller  --resource --model=user --api

Route::apiResource('Categorie', 'CategorieController');
Route::apiResource('Client', 'ClientController');
Route::apiResource('Constituer', 'ConstituerController');
Route::apiResource('Couleur', 'CouleurController');
Route::apiResource('Devis', 'DevisController');
Route::apiResource('Gamme', 'GammeController');
Route::apiResource('Magasin', 'MagasinController');
Route::apiResource('Matiere', 'MatiereController');
Route::apiResource('Module', 'ModuleController');
Route::apiResource('Remise', 'RemiseController');
Route::apiResource('Sol', 'SolController');
Route::apiResource('Unite', 'UniteController');
Route::apiResource('User', 'UserController');

*/

Route::apiResources([
    'categorie' => 'CategorieController',
    'client' => 'ClientController',
    'constituer' => 'ConstituerController',
    'couleur' => 'CouleurController',
    'devis' => 'DevisController',
    'gamme' => 'GammeController',
    'magasin' => 'MagasinController',
    'matiere' => 'MatiereController',
    'module' => 'ModuleController',
    'remise' => 'RemiseController',
    'sol' => 'SolController',
    'unite' => 'UniteController',
    'user' => 'UserController',
]);


//Trigger this route for generate a pdf with specifique id_devis
Route::get('pdf/{id_devis}', 'PdfController@generate');


//retrive data from RealmDB to local DB
//Route::get('/retrive', 'RealmController@retrive');

//propagate data from local DB to RealmDB
//Route::get('/propagate', 'RealmController@propagate');

/*
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

*/