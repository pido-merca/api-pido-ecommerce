@extends('Layout.layout')
@section('titulo')
  Editar Plan
@endsection
@section('contenido')
<div class="container mt-5">
  <div class="row mt-5">
    <div class="col-12">
      <form class="form-horizontal" role="form" method="POST" action="{{ route('plan.update',['id' =>$plan->id]) }}">
          <div class="box-body">
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="_token" value="{{ csrf_token()}}">
        
            <div class="form-group">
                <label for="id" class="col-sm-2 control-label p-0 h5 font-weight-bold">Id</label>
                <!-- <div class="col-sm-10 p-0">
                  <input type="number" name="id" class="form-control" id="id" placeholder="id" required>
                </div> -->
            <div class="col-sm-10 m-0 p-0">
              <select id="id" name="id" class="form-control ">
                <option value="{{ $plan->id }}" selected> {{ $plan->id }} </option>
              </select>
            </div>
                <label for="nombre" class="col-sm-2 control-label p-0 h5 font-weight-bold mt-3">Nombre del Plan</label>
                <div class="col-sm-10 p-0">

                  <input type="text" name="nombre" class="form-control" id="nombre"  required value="{{ $plan->nombre }}">

                </div>
            </div>
          
            <div class="panel-footer">
              <a href="{{ route('plan.index') }}" class="btn btn-danger btn-lg btn-addon font-weight-bold"><i class=""></i>Cancelar</a>
              <button type="submit" class="btn btn-lg btn-info pull-right font-weight-bold">Actualizar</button>
            </div>
          </div>
      </form>
    </div>
  </div>
</div> 
@endsection