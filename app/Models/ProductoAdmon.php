<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductoAdmon extends Model
{
    protected $table = 'producto_admon';
    protected $fillable = [
        'id', 'nombre','cod_marca','cod_categoria',
        'descripcion','imagen','cod_submedida',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function marca()
    {
        return $this->belongsTo('App\Models\Marca','cod_marca');
    }

    public function categoria()
    {
        return $this->belongsTo('App\Models\Categoria','cod_categoria');
    }

    public function submedida()
    {
        return $this->belongsTo('App\Models\Submedida','cod_submedida');
    }

    public function aliados()
    {
        return $this->belongsToMany('App\Models\Aliado','producto_aliado','cod_producto_admon','id_aliado');
    }
}
