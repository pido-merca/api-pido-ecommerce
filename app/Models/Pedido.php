<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedido';
    protected $fillable = [
        'id', 'cod_aliado','fecha_hora',
        'cod_cliente','estado',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function productosAliado()
    {
        return $this->belongsToMany('App\Models\ProductoAliado','detalle_pedido','cod_pedido','cod_producto_aliado');
    }
}
