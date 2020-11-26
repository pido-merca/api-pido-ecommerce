<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aliado extends Model
{
    protected $table = 'aliado';
    protected $fillable = [
        'id', 'nombre','camara_comercio','rut','cod_municipio',
        'telefono','correo','fecha_inscripcion',
        'cod_plan','imagen','estado',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function productosAdmon()
    {
        return $this->belongsToMany('App\Models\ProductoAdmon','producto_aliado','id_aliado','cod_producto_admon');
    }

    public function plan()
    {
        return $this->belongsTo('App\Models\Plan','cod_plan');
    }

    public function aliadosSubcategoria()
    {
        return $this->hasMany('App\Models\AliadoSubcategoria','cod_aliado');
    }

    public function municipio()
    {
        return $this->belongsTo('App\Models\Municipio','cod_municipio');
    }
}
