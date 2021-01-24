<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoAdmonRequest extends FormRequest
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
            'img' => 'required|image|mimes:jpg,jpeg,png|max:1024|dimensions:max_width=800,max_height=800',
        ];
    }

    public function attributes()
    {
      return [
              'img'=>'Imagen'
             ];
          }
  
          public function messages()
    {
      return [
             
              'img.required'=>'La :attribute es necesaria',
              'img.image'=>'La :attribute debe ser un archivo de imagen',
              'img.mimes'=>'La :attribute solo puede ser jpg, jpeg o png',
              'img.max'=>'La :attribute no debe pesar más de 1 MB',
              'img.dimensions'=>'El tamño de La :attribute debe ser menor a 800 x 800'
             
      ];
    }
}
