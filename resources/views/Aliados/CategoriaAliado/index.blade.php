@extends('Layout.layout')
@section('titulo','Categoría | Aliado')

@section('sub-menu')
@include('submenus.aliado-submenu')
@endsection

@section('contenido')

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modal-label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title">Datos de la nueva Categoría | Aliado</div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--form-->
      <div class="modal-body">
        <form id="form" action="{{route('categoriaaliado.store')}}" method="POST">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Categoría</label>
              <input type="text" name="nombre" class="form-control" placeholder="Nombre de la Categoria" />
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary pull-right">Crear Categoría</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>


<div id="modalEditCategoriaAliado" class="modal fade" tabindex="-1" aria-labelledby="modal-label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title">Editar Categoría | Aliado</div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--form-->

      <div class="modal-body">
      
        <form class="form-horizontal" id="formcomida" name="formcomida" action="{{ route('categoriaaliado.update') }}" method="POST">
          @csrf
          <input type="hidden" name="_method" value="PATCH" />

          <input type="hidden" id="id" name="id" />
          <div class="panel-heading">
            <h3 class="panel-title"><span class="fa  fa-cutlery"></span><b> Editar Categoría</b></h3>

          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="col-md-2 control-label"> Nombre:</label>
                  <div class="col-md-9">
                    <div class="input-group">
                      <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                      <input type="text" required id="nombre" name="nombre" class="form-control" placeholder="Nombre del Categoría" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--fin panel body-->

          <div class="panel-footer ml-3">
            <a href="{{route('categoriaaliado.index')}}" class="btn btn-secondary">Cancelar</a>
            <button class="btn btn-info pull-right">Editar</button>
          </div>

        </form>
      </div>

    </div>
  </div>
</div>

@if (session('success'))
<div class="alert alert-success role="alert">
<strong>{{ session('success')}}</strong> 
</div>
@endif

@if (session('edit'))
<div class="alert alert-info role="alert">
<strong>{{ session('edit')}}</strong> 
</div>
@endif

@if(count($errors)>0)
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif

<div class="item-body">
  <table class="table text-center table-striped table-sm">
    <thead>
      <tr>
        <th class="text-center">Nombre de la Categoría</th>
        <th><a class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal"> Añadir Nueva Categoría </a></th>
      </tr>
    </thead>
    <tbody>
      @foreach($categorias_aliado as $categoriaaliado)
      <tr>
        <td>{{$categoriaaliado->nombre}}</td>
        <td>
          <a 
          href="#modalEditCategoriaAliado" 
          data-toggle="modal" 
          data-id="{{$categoriaaliado->id}}" 
          data-nombre="{{$categoriaaliado->nombre}}" 
          class="btn btn-primary btn-sm">
          Editar</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $categorias_aliado->links() }}
</div>

</div>
@endsection

@section('scripts')
<script src="{{asset('js/categoriaaliado.js')}}"></script>
@endsection