<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoAliadoRequest extends FormRequest
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
            'cantidad' => 'required|numeric|int',
            'preciosubmedida' => 'required|numeric|int',
            'stockminimo'=>'required|numeric|int',

        ];
    }

    public function attributes()
    {
      return [
              'cantidad'=>'Cantidad',
              'preciosubmedida'=>'Precio de Submedida',
              'stockminimo'=>'Stock Mínimo'
             ];
          }
  
          public function messages()
    {
      return [
              'cantidad.required'=>'El :attribute es necesario',
              'cantidad.numeric'=>'El :attribute solo puede ser de carácter numérico',
              'cantidad.int'=>'El :attribute debe ser un número entero',

              'preciosubmedida.required'=>'El :attribute es necesario',
              'preciosubmedida.numeric'=>'El :attribute solo puede ser de carácter numérico',
              'preciosubmedida.int'=>'El :attribute debe ser un número entero',
             
              'stockminimo.required'=>'El :attribute es necesario',
              'stockminimo.numeric'=>'El :attribute solo puede ser de carácter numérico',
              'stockminimo.int'=>'El :attribute debe ser un número entero',
      ];
    
    }
}

