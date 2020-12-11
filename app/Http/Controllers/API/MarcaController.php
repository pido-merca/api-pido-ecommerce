<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\MarcaRequest;
use App\Models\Marca;

class MarcaController extends Controller
{
    public function index(){

        $marcas=Marca::all();
        return view('ProductosAdmon/Marca.index' ,['marcas'=>$marcas]);
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
  
    public function store(MarcaRequest $request){
        $marcas = new Marca;
        $marcas->id = $request->input('id');
        $marcas->nombre = $request->input('nombre');
        $marcas->save();
        return redirect()->route('marca.index');
    }
  
    public function edit($id){
        $marca=Marca::find($id);
        return view('ProductosAdmon/Marca.editar')->with('marca',$marca);
    }
  
    public function update(Request $request,$id){
        $marca=Marca::find($id);
        $datos=array();
        $datos['nombre']=$request->input('nombre');
        $marca->update($datos);
        return redirect()->route('marca.index');
    }
  
    public function delete($id){
        $marca=Marca::find($id);
        $marca->delete();
        return redirect()->route('marca.index');
    }
}
