<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\controller;
use Illuminate\Http\Request;
use App\Models\ProductoAliado;


class ProductoAliadoController extends Controller
{
    public function obtenerProductosPorAliado(){
        return ProductoAliado::getProductsByAlly()->get();
    }
}
