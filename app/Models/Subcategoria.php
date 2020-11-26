<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    protected $table = 'subcategoria';
    protected $fillable = [
        'id', 'cod_categoria','nombre',
        'slug','estado',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function categoriaAliado()
    {
        return $this->belongsTo('App\Models\CategoriaAliado','cod_categoria');
    }
}
