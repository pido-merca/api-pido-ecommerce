<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AliadoSubcategoria extends Model
{
    protected $table = 'aliado_subcategoria';
    protected $fillable = [
        'id', 'cod_subcategoria','cod_aliado','estado',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function aliado()
    {
        return $this->belongsTo('App\Models\Aliado','cod_aliado');
    }
}
