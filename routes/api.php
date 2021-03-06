<?php


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

Route::group(['middleware' => ['api']], function () {
    Route::get('aliado/productos/{ally}', 'API\AliadoController@obtenerProductosPorAliado');
    Route::get('productos/categoria/{ally}/{category}', 'API\AliadoController@obtenerProductosPorCategoria');
    Route::get('/aliados/{category}', 'API\AliadoController@obtenerAliadosPorSubcategoria');
    Route::get('/aliado/{ally}', 'API\AliadoController@obtenerAliadoPorSlug');
    Route::get('/aliado/file/{filename}',['uses'=>'Aliado\AliadoController@getImageAvatar']);
    Route::get('/productos/file/{filename}',['uses'=>'Producto\ProductoAdmonController@getImageProducto']);
});
