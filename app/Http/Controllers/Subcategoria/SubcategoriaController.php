<?php

namespace App\Http\Controllers\Subcategoria;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subcategoria;
use App\Models\CategoriaAliado;


class SubcategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategoria = Subcategoria::all();
        return view('Subcategoria.index-subcategoria',['subcategoria'=>$subcategoria]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $subcategoria = Subcategoria::all();

      return view('Subcategoria.create-subcategoria');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Subcategoria::create($request->all());


      return redirect()->route('subcategoria.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria_aliado = CategoriaAliado::All();
        $subcategoria = Subcategoria::find($id);
      return view('Subcategoria.edit-subcategoria')->with('subcategoria',$subcategoria)->with('categoria_aliado',$categoria_aliado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $subcategoria = Subcategoria::find($id);
      $datos = array();
      $datos['id']=$request->input('id');
      $datos['cod_categoria']=$request->input('cod_categoria');
      $datos['nombre_subcategoria']=$request->input('nombre_subcategoria');
      $datos['slug']=$request->input('slug');
      $datos['estado']=$request->input('estado');
      $subcategoria->update($datos);
      return redirect()->route('subcategoria.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
