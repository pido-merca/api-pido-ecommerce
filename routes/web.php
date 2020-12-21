<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Middleware\AliadoAuthMiddleware;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/moduloaliado',['as'=>'moduloaliado', 'uses'=>'Plan\PlanController@inicio']);
//Rutas de Plan
Route::get('/plan',['as'=>'plan.index', 'uses'=>'Plan\PlanController@index']);
Route::get('/plan/create',['as'=>'plan.create', 'uses'=>'Plan\PlanController@create',]);
Route::get('/plan/{id}/delete',['as'=>'plan.delete', 'uses'=>'Plan\PlanController@delete']);
Route::post('/plan',['as'=>'plan.store', 'uses'=>'Plan\PlanController@store']);
Route::patch('/plan',['as'=>'plan.update', 'uses'=>'Plan\PlanController@update']);
Route::get('/plan/{id}/editar',['as'=>'plan.editar', 'uses'=>'Plan\PlanController@edit']);

//Rutas de Categoria | Aliado
Route::get('categoriaaliado',['as'=>'categoriaaliado.index', 'uses'=>'CategoriaAliado\CategoriaAliadoController@index']);
Route::get('/categoriaaliado/create',['as'=>'categoriaaliado.create', 'uses'=>'CategoriaAliado\CategoriaAliadoController@create',]);
Route::get('/categoriaaliado/{id}/delete',['as'=>'categoriaaliado.delete', 'uses'=>'CategoriaAliado\CategoriaAliadoController@delete']);
Route::post('/categoriaaliado',['as'=>'categoriaaliado.store', 'uses'=>'CategoriaAliado\CategoriaAliadoController@store']);
Route::patch('/categoriaaliado',['as'=>'categoriaaliado.update', 'uses'=>'CategoriaAliado\CategoriaAliadoController@update']);
Route::get('/categoriaaliado/{id}/editar',['as'=>'categoriaaliado.editar', 'uses'=>'CategoriaAliado\CategoriaAliadoController@edit']);

//Rutas de Subcategoria
Route::get('/subcategoria',['as'=>'subcategoria.index', 'uses'=>'Subcategoria\SubcategoriaController@index']);
Route::get('/subcategoria/create',['as'=>'subcategoria.create', 'uses'=>'Subcategoria\SubcategoriaController@create',]);
Route::get('/subcategoria/{id}/delete',['as'=>'subcategoria.delete', 'uses'=>'Subcategoria\SubcategoriaController@delete']);
Route::post('/subcategoria',['as'=>'subcategoria.store', 'uses'=>'Subcategoria\SubcategoriaController@store']);
Route::patch('/subcategoria',['as'=>'subcategoria.update', 'uses'=>'Subcategoria\SubcategoriaController@update']);
Route::get('/subcategoria/{id}/editar',['as'=>'subcategoria.editar', 'uses'=>'Subcategoria\SubcategoriaController@edit']);

//Rutas de Aliados
Route::get('/aliado',['as'=>'aliado.index', 'uses'=>'Aliado\AliadoController@index']);
Route::get('/aliado/create',['as'=>'aliado.create', 'uses'=>'Aliado\AliadoController@create',]);
Route::get('/aliado/{id}/delete',['as'=>'aliado.delete', 'uses'=>'Aliado\AliadoController@delete']);
Route::post('/aliado',['as'=>'aliado.store', 'uses'=>'Aliado\AliadoController@store']);
Route::patch('/aliado',['as'=>'aliado.update', 'uses'=>'Aliado\AliadoController@update']);
Route::get('/aliado/{id}/editar',['as'=>'aliado.editar', 'uses'=>'Aliado\AliadoController@edit']);




