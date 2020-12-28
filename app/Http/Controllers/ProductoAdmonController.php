<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\ProductoAdmonRequest;
use App\Models\ProductoAdmon;
use App\Models\Marca;
use App\Models\Categoria;
use App\Models\Submedida;

class ProductoAdmonController extends Controller
{
    public function index()
    {
      $marcas = Marca::all();
      $categorias = Categoria::all();
      $submedidas = Submedida::all();
      $productos_admon = ProductoAdmon::paginate(10);
      return view('ProductosAdmon.index',compact('productos_admon','marcas','categorias', 'submedidas'));
    }


    public function storageImage($file)
    {
       $name='';
        if($file){
          $name = time().$file->getClientOriginalName();
           \Storage::disk('imgproductos')->put($name, \File::get($file));
           return $name;
        }
        return $name;
        
    }


    public function getImageProducto($filename)
    {
        $isset = \Storage::disk('imgproductos')->exists($filename);

        if ($isset) {
            $file = \Storage::disk('imgproductos')->get($filename);
            return new Response($file, 200);
        }

        return response()->json(['status' => 404]);

    }


    public function store(ProductoAdmonRequest $request)
    {
      $productos_admon = new ProductoAdmon;
    $productos_admon->nombre = $request->input('nombre');
    $productos_admon->descripcion = $request->input('descripcion');
    $productos_admon->cod_marca = $request->input('cod_marca');
    $productos_admon->cod_categoria = $request->input('cod_categoria');
    $productos_admon->cod_submedida = $request->input('cod_submedida');
    $image = $request->file('img');
    $name = $this->storageImage($image);
    $productos_admon->imagen = $name;

      $productos_admon->save();
      return redirect()->route('productoadmon.index')->with('success','Producto creado correctamente');
    }



    public function update(ProductoAdmonRequest $request)
    {
      $productos_admon = ProductoAdmon::find($request->id);
      $datos = array();
      $datos['id']=$request->input('id');
      $datos['nombre']=$request->input('nombre');
      $datos['descripcion']=$request->input('descripcion');
      $datos['cod_marca']=$request->input('cod_marca');
      $datos['cod_categoria']=$request->input('cod_categoria');
      $datos['cod_submedida']=$request->input('cod_submedida');
      if($request->hasFile('img'))
      {
       Storage::disk('imgproductos')->delete($productos_admon->imagen);
       $image = $request->file('img');
       $name = $this->storageImage($image);
       $productos_admon->imagen = $name;
      }
      $productos_admon->update($datos);
      return redirect()->route('productoadmon.index')->with('edit','Producto actualizado correctamente');
    }

}
