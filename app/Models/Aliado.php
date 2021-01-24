<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aliado extends Model
{
    protected $table = 'aliado';
    protected $fillable = [
        'id', 'nombre', 'camara_comercio', 'rut', 'cod_municipio',
        'telefono', 'correo', 'fecha_inscripcion', 'slug', 'hora_inicio', 'hora_cierre',
        'cod_plan', 'imagen', 'banner', 'estado',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function productosAdmon()
    {
        return $this->belongsToMany('App\Models\ProductoAdmon', 'producto_aliado', 'id_aliado', 'cod_producto_admon');
    }

    public function plan()
    {
        return $this->belongsTo('App\Models\Plan', 'cod_plan');
    }

    public function municipio()
    {
        return $this->belongsTo('App\Models\Municipio', 'cod_municipio');
    }

    public function subcategorias()
    {
        return $this->belongsToMany('App\Models\Subcategoria', 'aliado_subcategoria', 'cod_aliado', 'cod_subcategoria');
    }

    public function scopeGetAlliesToSubcategory($query)
    {
        return $query->from('aliado as a')
        ->join('municipio as m','m.id','=','a.cod_municipio')
        ->join('aliado_subcategoria as a_s','a_s.cod_aliado','=','a.id')
        ->join('subcategoria as s','s.id','=','a_s.cod_subcategoria')
        ->where([
            ['s.slug','=','carnicos-y-lacteos'],
        ])
        ->select(
             'a.id',
             'a.slug',
             'a.nombre as nombre_aliado',
             'a.imagen',
             'a.hora_inicio',
             'a.hora_cierre',
        );
    }

    public function scopeGetProductsByAlly($query, $ally){
        return $query->from('aliado as a')
            ->join('producto_aliado as pra', 'pra.id_aliado', '=', 'a.id')
            ->join('producto_admon as pa', 'pra.cod_producto_admon', '=', 'pa.id')
            ->join('submedida as sm', 'pa.cod_submedida', '=', 'sm.id')
            ->join('categoria as c', 'pa.cod_categoria', '=', 'c.id')
            ->join('marca as m', 'pa.cod_marca', '=', 'm.id')
            ->where ([
                ['a.id', '=', $ally]
                ])
            ->orderBy('pra.id', 'DESC')
            ->select(
                'pra.id as id_producto',
                'pra.preciosubmedida',
                'pa.nombre',
                'pa.imagen',
                'm.nombre as nombre_marca',
                'c.id as id_categoria',
                'c.nombre as nombre_categoria',
                'c.slug as slug_categoria',
                'sm.nom_submedida'
            );
    }
}

