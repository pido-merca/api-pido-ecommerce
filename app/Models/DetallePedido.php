<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{
    protected $table = 'detalle_pedido';
    protected $fillable = [
        'id', 'cod_pedido','cod_producto_aliado',
        'cantidad','precio',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
