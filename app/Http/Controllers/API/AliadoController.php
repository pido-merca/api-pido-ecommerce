<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AliadoCollection;
use App\Http\Resources\ProductoCollection;
use App\Models\Aliado;

class AliadoController extends Controller
{
    public function obtenerAliadosPorSubcategoria(){
        return new AliadoCollection(Aliado::getAlliesToSubcategory()->get());
    }

    public function obtenerProductosPorAliado() {
        return new ProductoCollection(Aliado::getProductsByAlly(1)->get());
    }
}
