<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductoAliadoRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Models\ProductoAliado;
use App\Models\Aliado;
use App\Models\ProductoAdmon;

class ProductoAliadoController extends Controller
{
    public function index()
    {
      $aliados = Aliado::all();
      $productosadmon = ProductoAdmon::all();
      $productosaliado = ProductoAliado::all();
      return view('ProductoAliado.index',compact('productosaliado','aliados','productosadmon'));
    }


    public function store(ProductoAliadoRequest $request)
    {
      $productosaliado = new ProductoAliado;
      $productosaliado->cod_producto_admon = $request->input('cod_producto_admon');
      $productosaliado->id_aliado = $request->input('id_aliado');
      $productosaliado->cantidad = $request->input('cantidad');
      $productosaliado->preciosubmedida = $request->input('preciosubmedida');
      $productosaliado->stockminimo = $request->input('stockminimo');
      $productosaliado->estado = $request->input('estado');

      $productosaliado->save();
      return redirect()->route('productoaliado.index')->with('success','Producto creado correctamente');
    }


    public function update(ProductoAliadoRequest $request)
    {
      $productosaliado = ProductoAliado::find($request->id);
      $datos = array();
      $datos['id'] = $request->input('id');
      $datos['cod_producto_admon'] = $request->input('cod_producto_admon');
      $datos['id_aliado'] = $request->input('id_aliado');
      $datos['cantidad'] = $request->input('cantidad');
      $datos['preciosubmedida'] = $request->input('preciosubmedida');
      $datos['stockminimo'] = $request->input('stockminimo');
      $datos['estado']=$request->input('estado');

      $productosaliado->update($datos);
      return redirect()->route('productoaliado.index')->with('edit','Producto actualizado correctamente');
    }
}
