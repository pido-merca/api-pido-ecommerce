<?php

namespace App\Http\Controllers\API;

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
  
    public function create(){
        //
   }
  
    public function store(CategoriaRequest $request){
        $categorias = new Categoria;
        $categorias->id = $request->input('id');
        $categorias->nombre = $request->input('nombre');
        $categorias->save();
        return redirect()->route('categoria.index');
    }
  
    public function edit($id){
        $categoria=Categoria::find($id);
        return view('ProductosAdmon/Categoria.editar')->with('categoria',$categoria);
    }
  
    public function update(Request $request){
        $categoria=Categoria::find($request->id);
        $datos=array();
        $datos['nombre']=$request->input('nombre');
        $categoria->update($datos);
        return redirect()->route('categoria.index');
    }
  
    public function delete($id){
        $categoria=Categoria::find($id);
        $categoria->delete();
        return redirect()->route('categoria.index');
    }
}
