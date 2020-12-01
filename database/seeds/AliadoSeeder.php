<?php

use Illuminate\Database\Seeder;
use App\Models\Aliado;

class AliadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Aliado::create([
            'id' => '1',
            'nombre' => 'Depositos Los Dukes',
            'camara_comercio' => 'Registrado',
            'rut' => '123456',
            'cod_municipio' => '260',
            'telefono' => '2825345',
            'correo' => 'prueba@gmail.com',
            'fecha_inscripcion' => ' 2020-11-29 08:13:40',
            'cod_plan' => '2',
            'imagen' => "public/Aliado/user1.jpg",
            'estado' => '0',
        ]);

        Aliado::create([
            'id' => '2',
            'nombre' => 'Depositos Gualadajara',
            'camara_comercio' => 'Registrado',
            'rut' => '123456',
            'cod_municipio' => '480',
            'telefono' => '2825345',
            'correo' => 'prueba@gmail.com',
            'fecha_inscripcion' => ' 2020-11-29 08:13:40',
            'cod_plan' => '2',
            'imagen' => "public/Aliado/user2.jpg",
            'estado' => '0',
        ]);

        Aliado::create([
            'id' => '3',
            'nombre' => 'Depositos Ochoa',
            'camara_comercio' => 'Registrado',
            'rut' => '123456',
            'cod_municipio' => '697',
            'telefono' => '2825345',
            'correo' => 'prueba@gmail.com',
            'fecha_inscripcion' => ' 2020-11-29 08:13:40',
            'cod_plan' => '3',
            'imagen' => "public/Aliado/user3.jpg",
            'estado' => '0',
        ]);

        Aliado::create([
            'id' => '4',
            'nombre' => 'Depositos Julio',
            'camara_comercio' => 'Registrado',
            'rut' => '123456',
            'cod_municipio' => '886',
            'telefono' => '2825345',
            'correo' => 'prueba@gmail.com',
            'fecha_inscripcion' => ' 2020-11-29 08:13:40',
            'cod_plan' => '2',
            'imagen' => "public/Aliado/user2.jpg",
            'estado' => '0',
        ]);

        Aliado::create([
            'id' => '5',
            'nombre' => 'Depositos Videz',
            'camara_comercio' => 'Registrado',
            'rut' => '123456',
            'cod_municipio' => '174',
            'telefono' => '2825345',
            'correo' => 'prueba@gmail.com',
            'fecha_inscripcion' => ' 2020-11-29 08:13:40',
            'cod_plan' => '1',
            'imagen' => "public/Aliado/user1.jpg",
            'estado' => '0',
        ]);

        
    }
}
