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
}
