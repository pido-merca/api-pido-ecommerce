<?php

namespace App\Http\Controllers\CategoriaAliado;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoriaAliado;
class CategoriaAliadoController extends Controller
{
    public function index()
    {
      $categorias_aliado=CategoriaAliado::paginate(10);
      return view('Aliados.CategoriaAliado.index',['categorias_aliado'=>$categorias_aliado]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
      $categorias_aliado = new CategoriaAliado;
      $categorias_aliado->nombre = $request->input('nombre');
      $categorias_aliado->save();
      return redirect()->route('categoriaaliado.index')->with('success','Categoría creada correctamente');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
      $categorias_aliado = CategoriaAliado::find($id);
      return view('Aliados.CategoriaAliado.editar')->with('categorias_aliado',$categorias_aliado);
    }

    public function update(Request $request)
    {
      $categorias_aliado = CategoriaAliado::find($request->id);
      $datos = array();
      $datos['nombre']=$request->input('nombre');
      $categorias_aliado->update($datos);
      return redirect()->route('categoriaaliado.index')->with('edit','Categoría actualizada correctamente');
    }

    public function destroy($id)
    {
        //
    }
}
