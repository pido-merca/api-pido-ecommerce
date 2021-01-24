<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\MedidaRequest;
use App\Models\Medida;

class MedidaController extends Controller
{
    public function index(){

        $medidas=Medida::paginate(10);
        return view('ProductosAdmon/Medida.index' ,['medidas'=>$medidas]);
    }
  
  
    public function store(MedidaRequest $request){
        $medidas = new Medida;
        $medidas->nom_medida = $request->input('nom_medida');
        $medidas->save();
        return redirect()->route('medida.index')->with('success', 'Medida creada correctamente');
    }
  
    public function edit($id){
        $medida=Medida::find($id);
        return view('ProductosAdmon/Medida.editar')->with('medida',$medida);
    }
  
    public function update(MedidaRequest $request){
        $medida=Medida::find($request->id);
        $datos=array();
        $datos['nom_medida']=$request->input('nom_medida');
        $medida->update($datos);
        return redirect()->route('medida.index')->with('success-edit', 'Medida actualizada correctamente');
    }
  
    public function delete($id){
        $medida=Medida::find($id);
        $medida->delete();
        return redirect()->route('medida.index');
    }
}
