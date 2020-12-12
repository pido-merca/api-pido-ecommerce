<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\MedidaRequest;
use App\Models\Medida;

class MedidaController extends Controller
{
    public function index(){

        $medidas=Medida::all();
        return view('ProductosAdmon/Medida.index' ,['medidas'=>$medidas]);
    }
  
    public function create(){
        //
   }
  
    /**
       * Store a newly created resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @return \Illuminate\Http\Response
       */
  
    public function store(MedidaRequest $request){
        $medidas = new Medida;
        $medidas->id = $request->input('id');
        $medidas->nom_medida = $request->input('nom_medida');
        $medidas->save();
        return redirect()->route('medida.index');
    }
  
    public function edit($id){
        $medida=Medida::find($id);
        return view('ProductosAdmon/Medida.editar')->with('medida',$medida);
    }
  
    public function update(Request $request,$id){
        $medida=Medida::find($id);
        $datos=array();
        $datos['nom_medida']=$request->input('nom_medida');
        $medida->update($datos);
        return redirect()->route('medida.index');
    }
  
    public function delete($id){
        $medida=Medida::find($id);
        $medida->delete();
        return redirect()->route('medida.index');
    }
}
