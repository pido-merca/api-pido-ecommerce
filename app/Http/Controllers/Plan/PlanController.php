<?php

namespace App\Http\Controllers\Plan;
use App\Http\Requests\PlanRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;

class PlanController extends Controller
{
     public function inicio()
    {
      return view('welcome-modulo-aliado');
    }
    public function index()
    {
      $planes=Plan::paginate(10);
      return view('Aliados.Plan.index',['planes'=>$planes]);
    }

    public function store(Request $request)
    {
      $plan = new Plan;
      $plan->nombre = $request->input('nombre');
      $plan->save();
      return redirect()->route('plan.index')->with('success','Plan creado correctamente');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    { 
      $plan = Plan::find($id);
      return view('Aliados.Plan.editar')->with('plan',$plan);
    }

    public function update(Request $request)
    {
      $plan = Plan::find($request->id);
      $datos = array();
      $datos['nombre']=$request->input('nombre');
      $plan->update($datos);
      return redirect()->route('plan.index')->with('edit','Plan actualizado correctamente');
    }

    public function destroy($id)
    {
        //
    }
}
