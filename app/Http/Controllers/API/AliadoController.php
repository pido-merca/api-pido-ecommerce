<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AliadoCollection;
use App\Http\Resources\Aliado as AliadoResource;
use App\Http\Resources\ProductoCollection;
use App\Models\Aliado;

class AliadoController extends Controller
{
    public function obtenerAliadosPorSubcategoria($category){
        return new AliadoCollection(Aliado::getAlliesToSubcategory($category)->get());
    }

    public function obtenerProductosPorAliado() {
        return new ProductoCollection(Aliado::getProductsByAlly(1)->get());
    }

    public function obtenerAliadoPorSlug($ally){
        return new AliadoResource(Aliado::where('slug', $ally)->first());
    }
}
