<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AliadoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'cod_plan' => 'required',
            'cod_municipio' => 'required',
            'nombre' => 'required|min:4|max:255|regex:/^[\pL\s\-]+$/u',
            'slug' => 'required|min:4|max:255|alpha_dash|unique:aliado',
            'camara_comercio' => 'required',
            'rut' => 'required',
            'telefono' => 'required|numeric',
            'correo' => ['required', 'email', 'max:255'],
            'fecha_inscripcion' => 'required|date',
            'avatar' => 'required|image|mimes:jpeg,png,jpg|max:1024|dimensions:max_width=800,max_height=800',
            'hora_inicio' => 'required',
            'hora_cierre' => 'required',
        ];
    }

   
}
