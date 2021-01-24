<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Producto extends JsonResource
{
   
    public function toArray($request)
    {
        return [
            'productId' => $this->id_producto,
            'price' => $this->preciosubmedida,
            'productName' => $this->nombre,
            'productImg' => $this->imagen,
            'brand' => $this->nombre_marca,
            'categoryId' => $this->id_categoria,
            'categoryName' => $this->nombre_categoria,
            'categorySlug' => $this->slug_categoria,
            'submeasureName' => $this->nom_submedida,
        ];
    }
}
