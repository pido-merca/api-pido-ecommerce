<?php

namespace App\Http\Controllers\AliadoSubcategoria;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AliadoSubcategoria;
use App\Models\Aliado;
use App\Models\Subcategoria;

class AliadoSubcategoriaController extends Controller
{
    public function index()
    {
      $aliados = Aliado::all();
      $subcategorias = Subcategoria::all();
      $aliados_subcategorias=AliadoSubcategoria::paginate(10);
      return view('Aliados.AliadoSubcategoria.index',compact('aliados_subcategorias','aliados','subcategorias'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // $aliados = new Aliado();
        // $aliados->subcategorias()->attach(1,['estado'=>0]);
        
        // return $aliados;
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $subcategorias = Subcategoria::all();
      $aliados_subcategorias = AliadoSubcategoria::find($id);
      return view('Aliados.AliadoSubcategoria.editar')->with('aliados_subcategorias',$aliados_subcategorias)->with('subcategorias',$subcategorias);
    }

    public function update(Request $request)
    {
      $aliados_subcategorias = AliadoSubcategoria::find($request->id);
      $datos = array();
      $datos['id']=$request->input('id');
      $datos['cod_subcategoria']=$request->input('cod_subcategoria');
      $datos['cod_aliado']=$request->input('cod_aliado');
      $datos['estado']=$request->input('estado');
      $aliados_subcategorias->update($datos);
      return redirect()->route('aliadosubcategoria.index')->with('edit','Actualizado correctamente');
    }

    public function destroy($id)
    {
        //
    }
}
