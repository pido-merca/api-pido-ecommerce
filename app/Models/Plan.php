<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = 'plan';
    protected $fillable = [
        'id', 'nombre',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function aliados()
    {
        return $this->hasMany('App\Models\Aliado','cod_plan');
    }
}
