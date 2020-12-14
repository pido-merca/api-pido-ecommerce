@extends('Layout.layout')
@section('titulo','Productos Admon')

@section('sub-menu')
@include('submenus.productos-admon-submenu')
@endsection

@section('contenido')

<!-- Modal-guardar -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modal-label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title">Datos de la nueva categoría</div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--form-->
      <div class="modal-body">
        <form id="form" action="{{route('categoria.store')}}" method="POST">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-12">
              <label>Categoría</label>
              <input type="text" name="nombre" class="form-control" placeholder="Nombre de la categoria" />
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

<!--modal-edit-->

<div class="modal fade" id="modalEditCategoria" tabindex="-1" aria-labelledby="modal-label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <a class="modal-title" id="modal-Label">Modificar Categoria</a>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <!--form-->
          <div class="modal-body">
            <form class="form-horizontal" name="formcomida" id="form" action="{{route('categoria.update')}}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="PATCH" />

            <input type="hidden" id="id" name="id" />
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label>Editar Categoria</label>
                  <input type="text" id="nombre" name="nombre" class="form-control"/>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary pull-right">Actualizar Categoria</button>
             </div>
            </form>
          </div>
         
        </div>
      </div>
    </div>

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('success')}}</strong>
</div>
@endif

@if(session('success-edit'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('success-edit')}}</strong>
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

<!--index-list-->

<div class="item-body">
  <div class="panel-heading">
      <h2 class="panel-title">Categorias</h2>
  </div>
  <table class="table text-center table-striped table-sm">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Nombre de la categoría</th>
        <th><a class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal"> Añadir Nueva Categoría </a></th>
      </tr>
    </thead>
    <tbody>
      @foreach($categorias as $categoria)
      <tr>
        <td>{{$categoria->id}}</td>
        <td>{{$categoria->nombre}}</td>
        <td>
          <a 
          href="#modalEditCategoria" 
          data-toggle="modal" 
          data-id="{{$categoria->id}}" 
          data-nombre="{{$categoria->nombre}}" 
          class="btn btn-primary btn-sm">Editar</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $categorias->links() }}
</div>

</div>
@endsection

@section('scripts')
<script src="{{asset('js/categoria.js')}}"></script>
@endsection