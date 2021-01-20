<?php

namespace App\Http\Controllers\Subcategoria;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SubcategoriaRequest;
use App\Models\Subcategoria;
use App\Models\CategoriaAliado;
use App\Models\Submedida;
use App\Models\Medida;

class SubcategoriaController extends Controller
{
    public function index()
    {
      $categorias_aliado = CategoriaAliado::all();
      $subcategorias=Subcategoria::paginate(10);
      return view('Aliados.Subcategoria.index',compact('subcategorias','categorias_aliado'));
    }

    public function create()
    {
        //
    }

    public function store(SubcategoriaRequest $request)
    {
      $subcategorias = new Subcategoria;
      $subcategorias->cod_categoria = $request->input('cod_categoria');
      $subcategorias->nombre_subcategoria = $request->input('nombre_subcategoria');
      $subcategorias->slug = $request->input('slug');
      $subcategorias->estado = $request->input('estado');
      $subcategorias->save();
      return redirect()->route('subcategoria.index')->with('success','Subcategoria creada correctamente');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
      $subcategorias = Subcategoria::find($id);
      return view('Aliados.Subcategoria.editar')->with('subcategorias',$subcategorias)->with('categorias_aliado',$categorias_aliado);
    }

    public function update(SubcategoriaRequest $request)
    {
      $subcategorias = Subcategoria::find($request->id);
      $datos = array();
      $datos['id']=$request->input('id');
      $datos['cod_categoria']=$request->input('cod_categoria');
      $datos['nombre_subcategoria']=$request->input('nombre_subcategoria');
      $datos['slug']=$request->input('slug');
      $datos['estado']=$request->input('estado');
      $subcategorias->update($datos);
      return redirect()->route('subcategoria.index')->with('edit','Subcategoría actualizada correctamente');
    }

    public function destroy($id)
    {
        //
    }
}
