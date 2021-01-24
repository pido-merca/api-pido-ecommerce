<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CategoriaRequest;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    
    public function index(){
        $categorias=Categoria::paginate(10);
        return view('ProductosAdmon/Categoria.index' ,['categorias'=>$categorias]);
    }
  
   
    public function store(CategoriaRequest $request){
        $categorias = new Categoria;
        $categorias->nombre = $request->input('nombre');
        $categorias->save();
        return redirect()->route('categoria.index')->with('success', 'Categoria creada correctamente');
    }
  
    public function edit($id){
        $categoria=Categoria::find($id);
        return view('ProductosAdmon/Categoria.editar')->with('categoria',$categoria);
    }
  
    public function update(CategoriaRequest $request){
        $categoria=Categoria::find($request->id);
        $datos=array();
        $datos['nombre']=$request->input('nombre');
        $categoria->update($datos);
        return redirect()->route('categoria.index')->with('success-edit', 'Categoria actualizada correctamente');
    }
  
    public function delete($id){
        $categoria=Categoria::find($id);
        $categoria->delete();
        return redirect()->route('categoria.index');
    }
}
