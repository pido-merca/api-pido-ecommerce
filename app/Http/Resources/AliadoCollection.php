<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class AliadoCollection extends ResourceCollection
{
    
    public function toArray($request)
    {
        return [
            'data' => Aliado::collection($this->collection)
        ];
    }
}
