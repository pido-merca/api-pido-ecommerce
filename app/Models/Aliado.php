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

    public function municipio()
    {
        return $this->belongsTo('App\Models\Municipio','cod_municipio');
    }

    public function subcategorias()
    {
        return $this->belongsToMany('App\Models\Subcategoria','aliado_subcategoria','cod_aliado','cod_subcategoria');
    }

    
    public function scopeGetAlliesToSubcategory($query)
    {
        return $query->from('aliado as a')
        ->join('aliado_subcategoria as a_s','a.id','=','a_s.cod_aliado')
        ->join('subcategoria as s','a_s.cod_subcategoria','=','s.id')
        ->where([
            ['s.id','=','1'],
        ])
        ->select(
            'a.id,
             a.nombre,
             a.camara_comercio,
             a.telefono,
             s.slug,
             s.estado'
        );
    }
}

