@extends('Layout.layout')
@section('titulo')
  Crear Categoria Del Aliado
@endsection
@section('contenido')
<div class="container mt-5">
  <div class="row mt-5">
    <div class="col-12">
      <form class="form-horizontal" role="form" method="POST" action="{{ route('categoria-aliado.store') }}">
          <div class="box-body">
            <input type="hidden" name="_token" value="{{ csrf_token()}}">

            <div class="form-group">
                <label for="nombre" class="col-md-6 control-label p-0 h5 font-weight-bold">Nombre de la Categoria del Aliado</label>
                <div class="col-sm-10 p-0">
                  <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre de la categoria del Aliado" required>
                </div>
            </div>
          
            <div class="panel-footer">
              <a href="{{ route('categoria-aliado.index') }}" class="btn btn-danger btn-lg btn-addon font-weight-bold"><i class=""></i>Cancelar</a>
              <button type="submit" class="btn btn-lg btn-info pull-right font-weight-bold">Registrar</button>
            </div>
          </div>
      </form>
    </div>
  </div>
</div> 
@endsection