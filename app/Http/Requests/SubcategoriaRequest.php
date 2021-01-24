<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubcategoriaRequest extends FormRequest
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
            'cod_categoria' => 'required',
            'nombre_subcategoria' => 'required|min:4|max:255|regex:/^[\pL\s\-]+$/u',
            'slug' => 'required|min:4|max:255|alpha_dash|unique:subcategoria',
            'estado' => 'required',
        ];
    }

   
}
