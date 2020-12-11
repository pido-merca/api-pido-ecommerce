@extends('Layout.layout')
@section('titulo')
  Crear Subcategoria | Aliado
@endsection
@section('contenido')
<div class="container mt-5">
  <div class="row mt-5">
    <div class="col-12">
      <form class="form-horizontal" role="form" method="POST" action="{{ route('subcategoria.store') }}">
          <div class="box-body">
            <input type="hidden" name="_token" value="{{ csrf_token()}}">

            <div class="form-group">
                <label for="cod_categoria" class="col-md-6 control-label p-0 h5 font-weight-bold">Id Categoria</label>
                <div class="col-sm-10 p-0">
                  <input type="text" name="cod_categoria" class="form-control" id="cod_categoria" placeholder="Id Categoria" required>
                </div>

                <label for="nombre_subcategoria" class="col-md-6 control-label p-0 h5 font-weight-bold">Nombre de la Subcategoria del Aliado</label>
                <div class="col-sm-10 p-0">
                  <input type="text" name="nombre_subcategoria" class="form-control" id="nombre_subcategoria" placeholder="Nombre de la Subcategoria del Aliado" required>
                </div>

                <label for="slug" class="col-md-6 control-label p-0 h5 font-weight-bold">Slug</label>
                <div class="col-sm-10 p-0">
                  <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug" required>
                </div>

                <label for="estado" class="col-md-6 control-label p-0 h5 font-weight-bold">Estado</label>
                <!-- <div class="col-sm-10 p-0">
                  <input type="text" name="estado" class="form-control" id="estado" placeholder="Estado" required>
                </div> -->

                <div class="col-sm-10 m-0 p-0">
                  <select id="estado" name="estado" class="form-control ">
                    <option value="0">0</option>
                    <option value="1">1</option>
                  </select>
                </div>

            </div>
          
            <div class="panel-footer">
              <a href="{{ route('subcategoria.index') }}" class="btn btn-danger btn-lg btn-addon font-weight-bold"><i class=""></i>Cancelar</a>
              <button type="submit" class="btn btn-lg btn-info pull-right font-weight-bold">Registrar</button>
            </div>
          </div>
      </form>
    </div>
  </div>
</div> 
@endsection