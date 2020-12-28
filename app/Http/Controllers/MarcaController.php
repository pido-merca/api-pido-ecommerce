<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\MarcaRequest;
use App\Models\Marca;

class MarcaController extends Controller
{
    public function index(){

        $marcas=Marca::paginate(10);
        return view('ProductosAdmon/Marca.index' ,['marcas'=>$marcas]);
    }
  
  
    public function store(MarcaRequest $request){
        $marcas = new Marca;
        $marcas->nombre = $request->input('nombre');
        $marcas->save();
        return redirect()->route('marca.index')->with('success', 'Marca creada correctamente');
    }
  
    public function edit($id){
        $marca=Marca::find($id);
        return view('ProductosAdmon/Marca.editar')->with('marca',$marca);
    }
  
    public function update(MarcaRequest $request){
        $marca=Marca::find($request->id);
        $datos=array();
        $datos['nombre']=$request->input('nombre');
        $marca->update($datos);
        return redirect()->route('marca.index')->with('success-edit', 'Marca actualizada correctamente');
    }
  
    public function delete($id){
        $marca=Marca::find($id);
        $marca->delete();
        return redirect()->route('marca.index');
    }
}
