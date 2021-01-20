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
Route::get('/productoadmon/{filename}',['uses' => 'ProductoAdmonController@getImageProducto']);



Route::get('productoaliado',['as'=>'productoaliado.index', 'uses'=>'ProductoAliadoController@index']);
Route::get('productoaliado/{id}/delete',['as'=>'productoaliado.delete', 'uses'=>'ProductoAliadoController@delete']);
Route::post('productoaliado',['as'=>'productoaliado.store', 'uses'=>'ProductoAliadoController@store']);
Route::patch('productoaliado',['as'=>'productoaliado.update', 'uses'=>'ProductoAliadoController@update']);
Route::get('productoaliado/{id}/editar',['as'=>'productoaliado.editar', 'uses'=>'ProductoAliadoController@edit']);





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
Route::get('/aliado/{filename}',['uses'=>'Aliado\AliadoController@getImageAvatar']);

//Rutas de Aliados | Subcategorias
Route::get('/aliadosubcategoria',['as'=>'aliadosubcategoria.index', 'uses'=>'AliadoSubcategoria\AliadoSubcategoriaController@index']);
Route::get('/aliadosubcategoria/create',['as'=>'aliadosubcategoria.create', 'uses'=>'AliadoSubcategoria\AliadoSubcategoriaController@create',]);
Route::get('/aliadosubcategoria/{id}/delete',['as'=>'aliadosubcategoria.delete', 'uses'=>'AliadoSubcategoria\AliadoSubcategoriaController@delete']);
Route::post('/aliadosubcategoria',['as'=>'aliadosubcategoria.store', 'uses'=>'AliadoSubcategoria\AliadoSubcategoriaController@store']);
Route::patch('/aliadosubcategoria',['as'=>'aliadosubcategoria.update', 'uses'=>'AliadoSubcategoria\AliadoSubcategoriaController@update']);
Route::get('/aliadosubcategoria/{id}/editar',['as'=>'aliadosubcategoria.editar', 'uses'=>'AliadoSubcategoria\AliadoSubcategoriaController@edit']);
Route::get('/prueba',['uses'=>'AliadoSubcategoria\AliadoSubcategoriaController@store']);




