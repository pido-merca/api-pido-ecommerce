<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductoAdmonRequest;
use App\Models\ProductoAdmon;
use App\Models\Marca;
use App\Models\Categoria;
use App\Models\Submedida;

class ProductoAdmonController extends Controller
{
    public function index(){

        $marcas = Marca::all();
        $categorias = Categoria::all();
        $submedidas = Submedida::all();
        $productos_admon = ProductoAdmon::paginate(10);
        return view('ProductosAdmon.index',compact('productos_admon', 'marcas', 'categorias', 'submedidas'));
    }

    public function store(ProductoAdmonRequest $request){
        $productos_admon = new ProductoAdmon;
        $productos_admon->nombre = $request->input('nombre');
        $productos_admon->descripcion = $request->input('descripcion');
        $productos_admon->cod_marca = $request->input('cod_marca');
        $productos_admon->cod_categoria = $request->input('cod_categoria');
        $productos_admon->cod_submedida = $request->input('cod_submedida');
        $imagen = $request->file('imagen');
        $name = $this->StorageImage($imagen);
        $productos_admon->imagen = $name;

        $productos_admon->save();
        return redirect()->route('productoadmon.index')->with('success', 'producto creado correctamente');
    }

    public function StorageImage($file){
        
        $name = '';

        if($file){
            $name = time().$file->getClientOriginalName();
            \Storage::disk('Productos-img')->put($name, \File::get($file));
            
            return $name;
        }

        return $name;

       
    }

    public function update(){
        $productos_admon = ProductoAdmon::find($request->id);
        $datos=array();
        $datos['nombre']=$request->input('nombre');
        $datos['descripcion']=$request->input('descripcion');
        $datos['cod_marca']=$request->input('cod_marca');
        $datos['cod_categoria']=$request->input('cod_categoria');
        $datos['cod_submedida']=$request->input('cod_submedida');

        $datos['imagen'] = $request->file('imagen');
        $name = $this->StorageImage($imagen);
        $productos_admon->imagen = $name;

        $productos_admon->update($datos);
        return redirect()->route('submedida.index')->with('success-edit', 'Submedida actualizada correctamente');
    }
}
