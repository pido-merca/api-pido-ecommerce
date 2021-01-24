<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'marca';
    protected $fillable = [
        'nombre'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function productosAdmon()
    {
        return $this->hasMany('App\Models\ProductoAdmon','cod_marca');
    }

}

