<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aliado;

class AliadoController extends Controller
{
    public function obtenerAliadosPorSubcategoria(){
        return Aliado::getAlliesToSubcategory()->get();
    }
}
