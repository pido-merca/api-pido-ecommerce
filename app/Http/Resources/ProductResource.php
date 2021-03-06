<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
   
    public function toArray($request)
    {
        return [
            'productId' => $this->id_producto,
            'price' => $this->preciosubmedida,
            'productName' => $this->nombre,
            'productImage' => $this->imagen,
            'brand' => $this->nombre_marca,
            'submeasureName' => $this->nom_submedida,
        ];
    }
}
