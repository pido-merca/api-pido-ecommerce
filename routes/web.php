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

Route::get('categoria',['as'=>'categoria.index', 'uses'=>'CategoriaController@index']);
Route::get('categoria/{id}/delete',['as'=>'categoria.delete', 'uses'=>'CategoriaController@delete']);
Route::post('categoria',['as'=>'categoria.store', 'uses'=>'CategoriaController@store']);
Route::patch('categoria',['as'=>'categoria.update', 'uses'=>'CategoriaController@update']);
Route::get('categoria/{id}/editar',['as'=>'categoria.editar', 'uses'=>'CategoriaController@edit']);

Route::get('marca',['as'=>'marca.index', 'uses'=>'MarcaController@index']);
Route::get('marca/{id}/delete',['as'=>'marca.delete', 'uses'=>'MarcaController@delete']);
Route::post('marca',['as'=>'marca.store', 'uses'=>'MarcaController@store']);
Route::patch('marca',['as'=>'marca.update', 'uses'=>'MarcaController@update']);
Route::get('marca/{id}/editar',['as'=>'marca.editar', 'uses'=>'MarcaController@edit']);

Route::get('medida',['as'=>'medida.index', 'uses'=>'MedidaController@index']);
Route::get('medida/{id}/delete',['as'=>'medida.delete', 'uses'=>'MedidaController@delete']);
Route::post('medida',['as'=>'medida.store', 'uses'=>'MedidaController@store']);
Route::patch('medida',['as'=>'medida.update', 'uses'=>'MedidaController@update']);
Route::get('medida/{id}/editar',['as'=>'medida.editar', 'uses'=>'MedidaController@edit']);

Route::get('submedida',['as'=>'submedida.index', 'uses'=>'SubmedidaController@index']);
Route::get('submedida/{id}/delete',['as'=>'submedida.delete', 'uses'=>'SubmedidaController@delete']);
Route::post('submedida',['as'=>'submedida.store', 'uses'=>'SubmedidaController@store']);
Route::patch('submedida',['as'=>'submedida.update', 'uses'=>'SubmedidaController@update']);
Route::get('submedida/{id}/editar',['as'=>'submedida.editar', 'uses'=>'SubmedidaController@edit']);

Route::get('productoadmon',['as'=>'productoadmon.index', 'uses'=>'ProductoAdmonController@index']);
Route::get('productoadmon/{id}/delete',['as'=>'productoadmon.delete', 'uses'=>'ProductoAdmonController@delete']);
Route::post('productoadmon',['as'=>'productoadmon.store', 'uses'=>'ProductoAdmonController@store']);
Route::patch('productoadmon',['as'=>'productoadmon.update', 'uses'=>'ProductoAdmonController@update']);
Route::get('productoadmon/{id}/editar',['as'=>'productoadmon.editar', 'uses'=>'ProductoAdmonController@edit']);