<?php

use Illuminate\Support\Facades\Route;

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
    return view('Layout/layout');
});

//Rutas de Plan
$router->get('plan', [
    'as' => 'plan.index', 'uses'=>'Plan\PlanController@index',]);

$router->get('plan/create', [
    'as' => 'plan.create', 'uses'=>'Plan\PlanController@create',]);

$router->post('plan', [
    'as' => 'plan.store', 'uses'=>'Plan\PlanController@store',]);

$router->get('plan/{id}/edit', [
    'as' => 'plan.edit', 'uses'=>'Plan\PlanController@edit',
]);

$router->patch('plan/{id}', [
    'as' => 'plan.update', 'uses'=>'Plan\PlanController@update',
]);
//Fin Rutas de Plan

//Rutas de CategoriaAliado
$router->get('categoria-aliado', [
    'as' => 'categoria-aliado.index', 'uses'=>'CategoriaAliado\CategoriaAliadoController@index',]);

$router->get('categoria-aliado/create', [
    'as' => 'categoria-aliado.create', 'uses'=>'CategoriaAliado\CategoriaAliadoController@create',]);

$router->post('categoria-aliado', [
    'as' => 'categoria-aliado.store', 'uses'=>'CategoriaAliado\CategoriaAliadoController@store',]);

$router->get('categoria-aliado/{id}/edit', [
    'as' => 'categoria-aliado.edit', 'uses'=>'CategoriaAliado\CategoriaAliadoController@edit',
]);

$router->patch('categoria-aliado/{id}', [
    'as' => 'categoria-aliado.update', 'uses'=>'CategoriaAliado\CategoriaAliadoController@update',
]);
//Fin Rutas de CategoriaAliado

//Rutas de Subcategoria
$router->get('subcategoria', [
    'as' => 'subcategoria.index', 'uses'=>'Subcategoria\SubcategoriaController@index',]);

$router->get('subcategoria/create', [
    'as' => 'subcategoria.create', 'uses'=>'Subcategoria\SubcategoriaController@create',]);

$router->post('subcategoria', [
    'as' => 'subcategoria.store', 'uses'=>'Subcategoria\SubcategoriaController@store',]);

$router->get('subcategoria/{id}/edit', [
    'as' => 'subcategoria.edit', 'uses'=>'Subcategoria\SubcategoriaController@edit',
]);

$router->patch('subcategoria/{id}', [
    'as' => 'subcategoria.update', 'uses'=>'Subcategoria\SubcategoriaController@update',
]);
//Fin Rutas de Subcategoria






