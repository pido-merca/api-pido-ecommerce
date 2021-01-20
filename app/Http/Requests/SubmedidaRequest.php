<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubmedidaRequest extends FormRequest
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

            'nom_submedida' => 'required|min:4|max:20'
            
        ];
    }

    public function attributes()
    {
      return [
              'nom_submedida'=>'Submedida'
             ];
          }
  
          public function messages()
    {
      return [
              'nom_submedida.required'=>'El :attribute es necesario',
              'nom_submedida.min'=>'El :attribute no puede tener menos de 4 caracteres',
              'nom_submedida.max'=>'El :attribute tiene más de 20 caracteres',
             
      ];
    
    }
}
