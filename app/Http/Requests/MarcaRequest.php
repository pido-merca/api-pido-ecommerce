<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MarcaRequest extends FormRequest
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
            'nombre' => 'required|min:3|max:20'
            
        ];
    }

    public function attributes()
    {
      return [
              'id' => 'ID',
              'nombre'=>'Nombre'
             ];
          }
  
          public function messages()
    {
      return [
              'id.required'=>'El :attribute es necesaria',
              'id.numeric'=>'El :attribute debe ser sólo números',
              'id.min'=>'El :attribute no puede tener menos de 1 caracteres',
              'nombre.required'=>'El :attribute es necesario',
              'nombre.min'=>'El :attribute no puede tener menos de 4 caracteres',
              'nombre.max'=>'El :attribute tiene más de 20 caracteres',
             
      ];
    }
}
