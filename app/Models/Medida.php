<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medida extends Model
{
    protected $table = 'medida';
    protected $fillable = [
        'nom_medida'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function submedidas()
    {
        return $this->hasMany('App\Models\Submedida', 'cod_medida');
    }
}
