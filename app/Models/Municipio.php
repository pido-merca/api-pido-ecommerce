<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'municipio';
    protected $fillable = [
        'id', 'cod_departamento','nombre',
        'estado',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function aliados()
    {
        return $this->hasMany('App\Models\Aliado','cod_municipio');
    }

    public function departamento()
    {
        return $this->belongsTo('App\Models\Departamento','cod_departamento');
    }
}
