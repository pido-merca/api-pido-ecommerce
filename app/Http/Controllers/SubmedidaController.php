<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SubmedidaRequest;
use App\Models\Submedida;
use App\Models\Medida;

class SubmedidaController extends Controller
{
    public function index(){

        $medidas = Medida::all();
        $submedidas = Submedida::paginate(10);
        return view('ProductosAdmon/Submedida.index',compact('submedidas', 'medidas'));
    }
  
  
    public function store(SubmedidaRequest $request){
        $submedidas = new Submedida;
        $submedidas->cod_medida = $request->input('cod_medida');
        $submedidas->nom_submedida = $request->input('nom_submedida');
        $submedidas->save();
        return redirect()->route('submedida.index')->with('success', 'submedida creada correctamente');
    }
  
    public function edit($id){
        $submedida=Submedida::find($id);
        return view('ProductosAdmon/Submedida.editar')->with('submedida',$submedida);
    }
  
    public function update(SubmedidaRequest $request){
        $submedida=Submedida::find($request->id);
        $datos=array();
        $datos['cod_medida']=$request->input('cod_medida');
        $datos['nom_submedida']=$request->input('nom_submedida');
        $submedida->update($datos);
        return redirect()->route('submedida.index')->with('success-edit', 'Submedida actualizada correctamente');
    }
  
    public function delete($id){
        $submedida=Submedida::find($id);
        $submedida->delete();
        return redirect()->route('submedida.index');
    }
}
