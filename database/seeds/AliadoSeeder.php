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

        Aliado::create([
            'id' => '2',
            'nombre' => 'Depositos Gualadajara',
            'slug' => 'depositos-gualadajara',
            'hora_inicio' => '5:00 AM',
            'hora_cierre' => '5:00 PM',
            'camara_comercio' => 'Registrado',
            'rut' => '123456',
            'cod_municipio' => '480',
            'telefono' => '2825345',
            'correo' => 'prueba@gmail.com',
            'fecha_inscripcion' => '2020-11-29 08:13:40',
            'cod_plan' => '2',
            'imagen' => "pexels-daria-shevtsova-709817.jpg",
            'banner' => "banner.jpg",
            'estado' => '1',
        ]);

        Aliado::create([
            'id' => '3',
            'nombre' => 'Depositos Ochoa',
            'slug' => 'depositos-ochoa',
            'hora_inicio' => '5:00 AM',
            'hora_cierre' => '5:00 PM',
            'camara_comercio' => 'Registrado',
            'rut' => '123456',
            'cod_municipio' => '697',
            'telefono' => '2825345',
            'correo' => 'prueba@gmail.com',
            'fecha_inscripcion' => '2020-11-29 08:13:40',
            'cod_plan' => '3',
            'imagen' => "pexels-clem-onojeghuo-375896.jpg",
            'banner' => "banner.jpg",
            'estado' => '1',
        ]);

        Aliado::create([
            'id' => '4',
            'nombre' => 'Depositos Julio',
            'slug' => 'depositos-julio',
            'hora_inicio' => '5:00 AM',
            'hora_cierre' => '5:00 PM',
            'camara_comercio' => 'Registrado',
            'rut' => '123456',
            'cod_municipio' => '886',
            'telefono' => '2825345',
            'correo' => 'prueba@gmail.com',
            'fecha_inscripcion' => '2020-11-29 08:13:40',
            'cod_plan' => '2',
            'imagen' => "pexels-clem-onojeghuo-375897.jpg",
            'banner' => "banner.jpg",
            'estado' => '1',
        ]);

        Aliado::create([
            'id' => '5',
            'nombre' => 'Depositos Videz',
            'slug' => 'depositos-videz',
            'hora_inicio' => '5:00 AM',
            'hora_cierre' => '5:00 PM',
            'camara_comercio' => 'Registrado',
            'rut' => '123456',
            'cod_municipio' => '174',
            'telefono' => '2825345',
            'correo' => 'prueba@gmail.com',
            'fecha_inscripcion' => '2020-11-29 08:13:40',
            'cod_plan' => '1',
            'imagen' => "pexels-mehrad-vosoughi-3687999.jpg",
            'banner' => "banner.jpg",
            'estado' => '1',
        ]);
    }
}
