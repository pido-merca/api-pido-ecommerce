<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Submedida extends Model
{
    protected $table = 'submedida';
    protected $fillable = [
        'cod_medida', 'nom_submedida',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function productosAdmon()
    {
        return $this->hasMany('App\Models\ProductoAdmon','cod_submedida');
    }

    public function medida()
    {
        return $this->belognsTo('App\Models\Medida');
    }
}
