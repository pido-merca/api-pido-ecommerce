<?php

namespace App\Http\Controllers\CategoriaAliado;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoriaAliado;

class CategoriaAliadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria_aliado = CategoriaAliado::all();
        return view('CategoriaAliado.index-categoria-aliado',['categoria_aliado'=>$categoria_aliado]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria_aliado = CategoriaAliado::all();

      return view('CategoriaAliado.create-categoria-aliado');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        CategoriaAliado::create($request->all());


      return redirect()->route('categoria-aliado.index');
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
        $categoria_aliado = CategoriaAliado::find($id);
      return view('CategoriaAliado.edit-categoria-aliado')->with('categoria_aliado',$categoria_aliado);
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
      $categoria_aliado = CategoriaAliado::find($id);
      $datos = array();
      $datos['id']=$request->input('id');
      $datos['nombre']=$request->input('nombre');
      $categoria_aliado->update($datos);
      return redirect()->route('categoria-aliado.index');
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
