<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriaAliado extends Model
{
    protected $table = 'categoria_aliado';
    protected $fillable = [
        'id', 'nombre',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function subcategorias()
    {
        return $this->hasMany('App\Models\Subcategoria','cod_categoria');
    }
}
