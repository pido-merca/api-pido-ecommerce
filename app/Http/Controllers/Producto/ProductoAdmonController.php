<?php

namespace App\Http\Controllers\Producto;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;


class ProductoAdmonController extends Controller
{
  
    public function getImageProducto($filename)
    {
        $isset = Storage::disk('imgproductos')->exists($filename);

        if ($isset) {
            $file = Storage::disk('imgproductos')->get($filename);
            return new Response($file, 200);
        }

        return response()->json(['status' => 404]);

    }
}
