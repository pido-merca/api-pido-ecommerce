<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Aliado extends JsonResource
{
   
    public function toArray($request)
    {
        return [
            'allyId' => $this->id,
            'allySlug' => $this->slug,
            'allyName' => $this->nombre_aliado,
            'allyImg' => $this->imagen,
            'startTime' => $this->hora_inicio,
            'closeTime' => $this->hora_cierre,
        ];
    }
}
