<?php

namespace App\Http\Controllers\Aliado;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AliadoRequest;

use Illuminate\Http\Response;
use App\Models\Aliado;
use App\Models\Municipio;
use App\Models\Plan;
use App\Models\Subcategoria;


class AliadoController extends Controller
{
    public function index()
    {
      $subcategorias = Subcategoria::all();
      $municipios = Municipio::all();
      $planes = Plan::all();
      $aliados=Aliado::paginate(10);
      return view('Aliados.Aliado.index',compact('aliados','municipios','planes','subcategorias'));
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

     public function getImageAvatar($filename)
    {
        $isset = \Storage::disk('aliados')->exists($filename);

        if ($isset) {
            $file = \Storage::disk('aliados')->get($filename);
            return new Response($file, 200);
        }

        return response()->json(['status' => 404]);

    }

    public function store(AliadoRequest $request)
    {
      $subcategorias = Subcategoria::all();
      $subcategorias->id = $request->input('id');
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
      $aliados->subcategorias()->attach($request->id, ['estado' => true]);
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

    public function update(AliadoRequest $request)
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
      if($request->hasFile('avatar'))
      {
       Storage::disk('aliados')->delete($aliados->imagen);
       $image = $request->file('avatar');
       $name = $this->storageImage($image);
       $aliados->imagen = $name;
      }
      $datos['estado']=$request->input('estado');
      $aliados->update($datos);
      return redirect()->route('aliado.index')->with('edit','Subcategoría actualizada correctamente');
    }

    public function destroy($id)
    {
        //
    }
}
