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

Route::get('/', function () {
    return view('welcome');
});

Route::get('categoria',['as'=>'categoria.index', 'uses'=>'API\CategoriaController@index']);
Route::get('categoria/{id}/delete',['as'=>'categoria.delete', 'uses'=>'API\CategoriaController@delete']);
Route::post('categoria',['as'=>'categoria.store', 'uses'=>'API\CategoriaController@store']);
Route::patch('categoria/{id}',['as'=>'categoria.update', 'uses'=>'API\CategoriaController@update']);
Route::get('categoria/{id}/editar',['as'=>'categoria.editar', 'uses'=>'API\CategoriaController@edit']);

Route::get('marca',['as'=>'marca.index', 'uses'=>'API\MarcaController@index']);
Route::get('marca/{id}/delete',['as'=>'marca.delete', 'uses'=>'API\MarcaController@delete']);
Route::post('marca',['as'=>'marca.store', 'uses'=>'API\MarcaController@store']);
Route::patch('marca/{id}',['as'=>'marca.update', 'uses'=>'API\MarcaController@update']);
Route::get('marca/{id}/editar',['as'=>'marca.editar', 'uses'=>'API\MarcaController@edit']);

Route::get('medida',['as'=>'medida.index', 'uses'=>'API\MedidaController@index']);
Route::get('medida/{id}/delete',['as'=>'medida.delete', 'uses'=>'API\MedidaController@delete']);
Route::post('medida',['as'=>'medida.store', 'uses'=>'API\MedidaController@store']);
Route::patch('medida/{id}',['as'=>'medida.update', 'uses'=>'API\MedidaController@update']);
Route::get('medida/{id}/editar',['as'=>'medida.editar', 'uses'=>'API\MedidaController@edit']);

Route::get('submedida',['as'=>'submedida.index', 'uses'=>'API\SubmedidaController@index']);
Route::get('submedida/create',['as'=>'submedida.create', 'uses'=>'API\SubmedidaController@create',]);
Route::get('submedida/{id}/delete',['as'=>'submedida.delete', 'uses'=>'API\SubmedidaController@delete']);
Route::post('submedida',['as'=>'submedida.store', 'uses'=>'API\SubmedidaController@store']);
Route::patch('submedida/{id}',['as'=>'submedida.update', 'uses'=>'API\SubmedidaController@update']);
Route::get('submedida/{id}/editar',['as'=>'submedida.editar', 'uses'=>'API\SubmedidaController@edit']);

Route::get('plan',['as'=>'plan.index', 'uses'=>'Plan\PlanController@index']);
Route::get('plan/create',['as'=>'plan.create', 'uses'=>'Plan\PlanController@create',]);
Route::get('plan/{id}/delete',['as'=>'plan.delete', 'uses'=>'Plan\PlanController@delete']);
Route::post('plan',['as'=>'plan.store', 'uses'=>'Plan\PlanController@store']);
Route::patch('plan/{id}',['as'=>'plan.update', 'uses'=>'Plan\PlanController@update']);
Route::get('plan/{id}/editar',['as'=>'plan.editar', 'uses'=>'Plan\PlanController@edit']);