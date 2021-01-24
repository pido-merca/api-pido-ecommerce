<?php

use Illuminate\Database\Seeder;
use App\Models\Aliado;

class AliadoSeeder extends Seeder
{

    public function run()
    {
        Aliado::create([
            'id' => '1',
            'nombre' => 'Campo y Mar',
            'slug' => 'campo-y-mar',
            'hora_inicio' => '5:00 AM',
            'hora_cierre' => '5:00 PM',
            'camara_comercio' => 'Registrado',
            'rut' => '123456',
            'cod_municipio' => '260',
            'telefono' => '2825345',
            'correo' => 'prueba@gmail.com',
            'fecha_inscripcion' => '2020-11-29 08:13:40',
            'cod_plan' => '2',
            'imagen' => "user.jpg",
            'banner' => "banner.jpg",
            'estado' => '1',
        ]);

    }
}
