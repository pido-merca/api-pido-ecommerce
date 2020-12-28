<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductoAliado extends Model
{
    protected $table = 'producto_aliado';
    protected $fillable = [
        'id', 'cod_producto_admon',
        'id_aliado','cantidad','preciosubmedida',
        'stockminimo','estado',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function pedidos()
    {
        return $this->belongsToMany('App\Models\Pedido','detalle_pedido','cod_producto_aliado','cod_pedido');
    }

    public function aliado()
    {
        return $this->belongsTo('App\Models\Aliado','id_aliado');
    }

    public function productoAdmon()
    {
        return $this->belongsTo('App\Models\ProductoAdmon','cod_producto_admon');
    }


    public function scopeGetProductsByAlly($query){
        return $query->from('aliado as a')
            ->join('producto_aliado as pra', 'pra.id_aliado', '=', 'a.id')
            ->join('producto_admon as pa', 'pra.cod_producto_admon', '=', 'pa.id')
            ->join('submedida as sm', 'pa.cod_submedida', '=', 'sm.id')
            ->join('categoria as c', 'pa.cod_categoria', '=', 'c.id')
            ->where ([
                ['a.id', '=', 4]
                ])
            ->orderBy('pra.id', 'DESC')
            ->select(
                'pra.id as id producto',
                'a.id as id aliado',
                'a.nombre as nombre_aliado',
                'pa.nombre as nombre_producto',
                'pa.imagen',
                'sm.nom_submedida',
                'pra.preciosubmedida',
                'c.nombre',
            );
    }
}
