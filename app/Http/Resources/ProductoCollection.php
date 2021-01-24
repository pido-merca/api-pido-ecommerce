<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductoCollection extends ResourceCollection
{
    
    public function toArray($request)
    {
        return [
            'data' => Producto::collection($this->collection)
        ];
    }
}
