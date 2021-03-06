<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Producto extends JsonResource
{
   
    public function toArray($request)
    {
        return [
            'categoryId' => $this->id_categoria,
            'categoryName' => $this->nombre_categoria,
            'categorySlug' => $this->slug_categoria,
            'products' => ProductResource::collection($this->productos)
        ];
    }
}
