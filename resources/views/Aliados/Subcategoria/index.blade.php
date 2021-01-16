@extends('Layout.layout')
@section('titulo','Subcategoría')

@section('sub-menu')
@include('submenus.aliado-submenu')
@endsection

@section('contenido')

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modal-label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title">Datos de la nueva Subcategoría</div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--form-->
      <div class="modal-body">
        <form id="form" action="{{route('subcategoria.store')}}" method="POST">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-12">
              <label>Categoría</label>
                  <select id="cod_categoria" name="cod_categoria" class="form-control ">
                    @foreach($categorias_aliado as $categoria_aliado)
                    <option value="{{ $categoria_aliado->id }}" selected> {{ $categoria_aliado->nombre }} </option>
                    @endforeach
                  </select>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <label>Nombre Subcategoría</label>
              <input type="text" name="nombre_subcategoria" class="form-control" placeholder="Nombre de la Subcategoría" />
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <label>Slug</label>
              <input type="text" name="slug" class="form-control" placeholder="Slug" />
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <label>Estado</label>
                  <select id="estado" name="estado" class="form-control ">
                    <option value="0" selected> Activo </option>
                    <option value="1" selected> Inactivo </option>
                  </select>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary pull-right">Crear Subcategoría</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>


<div id="modalEditSubcategoria" class="modal fade" tabindex="-1" aria-labelledby="modal-label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title">Editar Subcategoría</div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--form-->

      <div class="modal-body">
      
        <form class="form-horizontal" id="formcomida" name="formcomida" action="{{ route('subcategoria.update') }}" method="POST">
          @csrf
          <input type="hidden" name="_method" value="PATCH" />

          <input type="hidden" id="id" name="id" />
          <div class="panel-heading">
            <h3 class="panel-title"><span class="fa  fa-cutlery"></span><b> Editar Subcategoría</b></h3>

          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="col-md-12 control-label"> Categoría:</label>
                  <div class="form-group col-md-12">
                    <select id="cod_categoria" name="cod_categoria" class="form-control ">
                      @foreach($categorias_aliado as $categoria_aliado)
                        <option value="{{ $categoria_aliado->id }}" selected> {{ $categoria_aliado->nombre }} </option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label class="col-md-12 control-label"> Nombre Subcategoría:</label>
                  <div class="col-md-12">
                    <div class="input-group">
                      <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                      <input type="text" required id="nombre_subcategoria" name="nombre_subcategoria" class="form-control" placeholder="Nombre de la Subcategoría" />
                    </div>
                  </div>
                </div>
              </div>  

              <div class="col-md-12">
                <div class="form-group col-md-12">
                  <label>Slug</label>
                  <input type="text" id="slug" name="slug" class="form-control" placeholder="Slug"/>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group col-md-12">
                  <label>Estado</label>
                  <select id="estado" name="estado" class="form-control ">
                    <option value="0" selected> Activo </option>
                    <option value="1" selected> Inactivo </option>
                  </select>
                </div>
              </div>

            </div>
          </div>
          <!--fin panel body-->

          <div class="panel-footer ml-3">
            <a href="{{route('subcategoria.index')}}" class="btn btn-secondary">Cancelar</a>
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
        <th class="text-center">Categoría</th>
        <th class="text-center">Nombre de la Subcategoría</th>
        <th class="text-center">Slug</th>
        <th class="text-center">Estado</th>
        <th><a class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal"> Añadir Nueva Subcategoría </a></th>
      </tr>
    </thead>
    <tbody>
      @foreach($subcategorias as $subcategoria)
      <tr>
        <td>{{$subcategoria->categoriaAliado->nombre}}</td>
        <td>{{$subcategoria->nombre_subcategoria}}</td>
        <td>{{$subcategoria->slug}}</td>
        <td>{{$subcategoria->estado}}</td>
        <td>
          <a 
          href="#modalEditSubcategoria" 
          data-toggle="modal" 
          data-id="{{$subcategoria->id}}" 
          data-cod_categoria="{{$subcategoria->categoriaAliado->id}}" 
          data-nombre_subcategoria="{{$subcategoria->nombre_subcategoria}}" 
          data-slug="{{$subcategoria->slug}}" 
          data-estado="{{$subcategoria->estado}}" 
          class="btn btn-primary btn-sm">
          Editar</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $subcategorias->links() }}
</div>

</div>
@endsection

@section('scripts')
<script src="{{asset('js/subcategoria.js')}}"></script>
@endsection