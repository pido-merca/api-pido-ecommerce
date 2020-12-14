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

            'nombre' => 'required|min:3|max:20'
            
        ];
    }

    public function attributes()
    {
      return [
              'nombre'=>'Nombre'
             ];
          }
  
          public function messages()
    {
      return [
              'nombre.required'=>'El :attribute es necesario',
              'nombre.min'=>'El :attribute no puede tener menos de 4 caracteres',
              'nombre.max'=>'El :attribute tiene más de 20 caracteres',
             
      ];
    }
}
