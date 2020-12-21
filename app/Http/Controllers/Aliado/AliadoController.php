<?php

namespace App\Http\Controllers\Aliado;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Aliado;
use App\Models\Municipio;
use App\Models\Plan;


class AliadoController extends Controller
{
    public function index()
    {
      $municipios = Municipio::all();
      $planes = Plan::all();
      $aliados=Aliado::paginate(10);
      return view('Aliados.Aliado.index',compact('aliados','municipios','planes'));
    }

    public function create()
    {
        //
    }

    public function storageImage($file)
{
       //obtenemos el campo file definido en el formulario
       $name='';
        if($file){
          $name = time().$file->getClientOriginalName();
           \Storage::disk('aliados')->put($name, \File::get($file));
           return $name;
        }
        return $name;
        
}

    public function getImageAvatar($filename){
      $isset = \Storage::disk('aliados')->exists($filename);
      if($isset){
        $file = \Storage::disk('aliados')->get($filename);
            return new Response($file,200);
      }
      return response()->json($data, $data['code']);

    }

    public function store(Request $request)
    {
      $aliados = new Aliado;
      $aliados->nombre = $request->input('nombre');
      $aliados->slug = $request->input('slug');
      $aliados->hora_inicio = $request->input('hora_inicio');
      $aliados->hora_cierre = $request->input('hora_cierre');
      $aliados->camara_comercio = $request->input('camara_comercio');
      $aliados->rut = $request->input('rut');
      $aliados->cod_municipio = $request->input('cod_municipio');
      $aliados->telefono = $request->input('telefono');
      $aliados->correo = $request->input('correo');
      $aliados->fecha_inscripcion = $request->input('fecha_inscripcion');
      $aliados->cod_plan = $request->input('cod_plan');
      $image = $request->file('avatar');
      $name = $this->storageImage($image);
      $aliados->imagen = $name;
      $aliados->estado = $request->input('estado');

      $aliados->save();
      return redirect()->route('aliado.index')->with('success','Aliado creado correctamente');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
      $aliados = Aliado::find($id);
      return view('Aliados.Aliado.editar')->with('aliados', $aliados);
    }

    public function update(Request $request)
    {
      $aliados = Aliado::find($request->id);
      $datos = array();
      $datos['id']=$request->input('id');
      $datos['nombre']=$request->input('nombre');
      $datos['slug']=$request->input('slug');
      $datos['hora_inicio']=$request->input('hora_inicio');
      $datos['hora_cierre']=$request->input('hora_cierre');
      $datos['camara_comercio']=$request->input('camara_comercio');
      $datos['rut']=$request->input('rut');
      $datos['cod_municipio']=$request->input('cod_municipio');
      $datos['telefono']=$request->input('telefono');
      $datos['correo']=$request->input('correo');
      $datos['fecha_inscripcion']=$request->input('fecha_inscripcion');
      $datos['cod_plan']=$request->input('cod_plan');
      $datos['imagen']=$request->input('imagen');
      $datos['estado']=$request->input('estado');

      $aliados->update($datos);
      return redirect()->route('aliado.index')->with('edit','Subcategoría actualizada correctamente');
    }

    public function destroy($id)
    {
        //
    }
}
