<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group(['prefix' => 'user'] , function(){
    Route::group(['middleware' => ['cors']], function () {
        Route::post('/register', 'UserController@register');
        Route::post('/login', 'UserController@login');
        Route::put('/update','UserController@update');
    });
});

Route::group(['prefix' => 'sector'],function(){
	Route::group(['middleware' => ['cors']], function () {
    //Rutas a las que se permitirá acceso
		Route::get('/get_sectores', 'SectorController@getSectores');
	});

	// Route::group(['middleware' => 'auth:api'],function(){
		// Route::post('Registrar_venta',[VentasController::class,'store']);

	// });
});

Route::group(['prefix' => 'categorias'],function(){
	//Falta configuracion de permisos segun autentificacion
	Route::group(['middleware' => ['cors']], function () {
    //Rutas a las que se permitirá acceso
		Route::get('/get_categorias', 'CategoriasController@getCategorias');
	});
});
