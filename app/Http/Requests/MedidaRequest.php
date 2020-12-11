<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedidaRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'id'=>'required|numeric|min:1',
            'nom_medida' => 'required|min:3|max:20'
            
        ];
    }

    public function attributes()
    {
      return [
              'id' => 'ID',
              'nom_medida'=>'Medida'
             ];
          }
  
          public function messages()
    {
      return [
              'id.required'=>'El :attribute es necesaria',
              'id.numeric'=>'El :attribute debe ser sólo números',
              'id.min'=>'El :attribute no puede tener menos de 1 caracteres',
              'nom_medida.required'=>'El :attribute es necesario',
              'nom_medida.min'=>'El :attribute no puede tener menos de 4 caracteres',
              'nom_medida.max'=>'El :attribute tiene más de 20 caracteres',
             
      ];
    }
}
