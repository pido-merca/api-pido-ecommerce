<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamento';
    protected $fillable = [
        'id', 'nombre',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function municipios()
    {
        return $this->hasMany('App\Models\Municipio','cod_departamento');
    }
}
