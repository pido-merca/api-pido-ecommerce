@extends('Layout.layout')
@section('titulo','Productos_Admon')

@section('sub-menu')
@include('submenus.productos-admon-submenu')
@endsection

@section('contenido')

<!-- Modal-guardar -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modal-label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <a class="modal-title" id="modal-Label">Datos de la nueva Marca</a>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <!--form-->
          <div class="modal-body">
            <form id="form" action="{{route('marca.store')}}" method="POST">
            @csrf
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label>Marca</label>
                  <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre de la marca"/>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary pull-right">Crear Marca</button>
             </div>
            </form>
          </div>
         
        </div>
      </div>
    </div>
 
   



<!-- Modal-editar -->

<div class="modal fade" id="modalEditMarca" tabindex="-1" aria-labelledby="modal-label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <a class="modal-title" id="modal-Label">Modificar Marca</a>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <!--form-->
          <div class="modal-body">
            <form class="form-horizontal" name="formcomida" id="form" action="{{route('marca.update')}}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="PATCH" />

            <input type="hidden" id="id" name="id" />
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label>Editar Marca</label>
                  <input type="text" id="nombre" name="nombre" class="form-control"/>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary pull-right">Actualizar Marca</button>
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

<!-- index-list-->

<div class= "item-body">
    <div class="panel-heading">
        <h2 class="panel-title">Marcas</h2>
    </div>
  
        <table class="table text-center table-striped table-sm">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Nombre de la marca</th>
                    <th><a class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal"> Agregar Nueva Marca</a></th>
                </tr>
            </thead>
            <tbody>
                @foreach($marcas as $marca)
                <tr>
                <td>{{$marca->id}}</td>
                <td>{{$marca->nombre}}</td>
                <td>
                    <a  href="#modalEditMarca" 
                        data-toggle="modal" 
                        data-id="{{$marca->id}}" 
                        data-nombre="{{$marca->nombre}}" 
                        class="btn btn-primary btn-sm">Editar</a>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $marcas->links() }}
</div>
@endsection

@section('scripts')
<script src="{{asset('js/marca.js')}}"></script>
@endsection