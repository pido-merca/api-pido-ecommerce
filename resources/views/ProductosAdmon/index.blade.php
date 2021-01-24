@extends('Layout.layout')
@section('titulo','Productos_Admon')

@section('sub-menu')
@include('submenus.productos-admon-submenu')
@endsection

@section('contenido')

<!-- Modal-create -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modal-label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title">Datos del nuevo Producto</div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--form-->
      <div class="modal-body">
        <form id="form" enctype="multipart/form-data" action="{{route('productoadmon.store')}}" method="POST">
          @csrf

          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Producto</label>
              <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre del producto"/>
            </div>

            <div class="form-group col-md-6">
              <label>Descripción</label>
              <input type="text" id="descripcion" name="descripcion" class="form-control" placeholder="Descripción del producto"/>
            </div>

            
          </div>
         

           <div class="form-row text-center">
              <div class="form-group col-md-4">
                  <label>Marca del producto</label>
                  <select id="cod_marca" name="cod_marca" class="form-control mt-4">
                    @foreach($marcas as $marca)
                    <option value="{{ $marca->id }}" selected> {{ $marca->nombre }} </option>
                    @endforeach
                  </select>
              </div>
              
              <div class="form-group col-md-4">
                <label>Categoría del producto</label>
                <select id="cod_categoria" name="cod_categoria" class="form-control ">
                  @foreach($categorias as $categoria)
                  <option value="{{ $categoria->id }}" selected> {{ $categoria->nombre }} </option>
                  @endforeach
                </select>
              </div>

              <div class="form-group col-md-4">
                <label>Submedida del producto</label>
                <select id="cod_submedida" name="cod_submedida" class="form-control ">
                  @foreach($submedidas as $submedida)
                  <option value="{{ $submedida->id }}" selected> {{ $submedida->nom_submedida }} </option>
                  @endforeach
                </select>
              </div>
            </div>
      
        <div class="form-row">
           <div class="form-group col-md-12">
              <div>
                <label for="name" class="form-label">Imagen</label>
                <input class="form-control  form-control-lg" type="file" id="img" name="img" accept="image/*">
              </div>
            </div>
          </div>

         
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary pull-right">Crear Producto</button>
          </div>
        </form>
      </div>
      </div>
    </div>
    </div>
  </div>
</div>

<!-- Modal-edit -->
<div id="modalEditProducto" class="modal fade" tabindex="-1" aria-labelledby="modal-label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title">Editar Producto</div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--form-->

      <div class="modal-body">
      
        <form class="form-horizontal" enctype="multipart/form-data" id="formcomida" name="formcomida" action="{{ route('productoadmon.update') }}" method="POST">
          @csrf
          <input type="hidden" name="_method" value="PATCH" />

          <input type="hidden" id="id" name="id" />
          <div class="panel-heading">
            <h3 class="panel-title"><span class="fa  fa-cutlery"></span><b> Editar Producto</b></h3>

          </div>
          <div class="panel-body">
            <div class="form-row">
            <div class="form-group col-md-6">
              <label>Producto</label>
              <input type="text" id="nombre" name="nombre" class="form-control"/>
            </div>

            <div class="form-group col-md-6">
              <label>Descripción</label>
              <input type="text" id="descripcion" name="descripcion" class="form-control"/>
            </div>

            
          </div>
         

           <div class="form-row text-center">
            <div class="form-group col-md-4">
              <label>Marca del producto</label>
              <select id="cod_marca" name="cod_marca" class="form-control mt-4">
                @foreach($marcas as $marca)
                <option value="{{ $marca->id }}" selected> {{ $marca->nombre }} </option>
                @endforeach
              </select>
            </div>
            
            <div class="form-group col-md-4">
              <label>Categoría del producto</label>
              <select id="cod_categoria" name="cod_categoria" class="form-control ">
                @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}" selected> {{ $categoria->nombre }} </option>
                @endforeach
              </select>
            </div>

            <div class="form-group col-md-4">
              <label>Submedida del producto</label>
              <select id="cod_submedida" name="cod_submedida" class="form-control ">
                @foreach($submedidas as $submedida)
                <option value="{{ $submedida->id }}" selected> {{ $submedida->nom_submedida }} </option>
                @endforeach
              </select>
            </div>
            </div>
            

           <div class="form-row">
           <div class="form-group col-md-12">
              <div>
                <label for="name" class="form-label">Imagen</label>
                <input class="form-control  form-control-lg" type="file" id="img" name="img" accept="image/*">
              </div>
            </div>
          </div>
          </div>
          <!--fin panel body-->

          <div class="panel-footer ml-3">
            <a href="{{route('productoadmon.index')}}" class="btn btn-secondary">Cancelar</a>
            <button class="btn btn-info pull-right">Editar</button>
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

@if(session('edit'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('edit')}}</strong>
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

<!--index list-->
<div class="item-body">
  <table class="table text-center table-striped">
    <thead>
      <tr>
        <th class="text-center">Nombre</th>
        <th class="text-center">Descripción</th>
        <th class="text-center">Marca</th>
        <th class="text-center">Categoría</th>
        <th class="text-center">Submedida</th>
        <th class="text-center">Imagen</th>
        <th><a class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal"> Añadir Aliado </a></th>
      </tr>
      
    </thead>
    
    <tbody>
    
      @foreach($productos_admon as $producto_admon)
      
      <tr>
        <td>{{$producto_admon->nombre}}</td>
        <td>{{$producto_admon->descripcion}}</td>
        <td>{{$producto_admon->marca->nombre}}</td>
        <td>{{$producto_admon->categoria->nombre}}</td>
        <td>{{$producto_admon->submedida->nom_submedida}}</td>
        <td>
          <div class="card w-25 h-25 mx-auto">
            <img class="rounded img-fluid" src="{{url('/productoadmon', $producto_admon->imagen)}}" alt="img1">
          </div>
        </td>        
        <td>
          <a 
          href="#modalEditProducto"
          data-toggle="modal"
          data-id="{{$producto_admon->id}}"
          data-nombre="{{$producto_admon->nombre}}"
          data-descripcion="{{$producto_admon->descripcion}}"
          data-cod_marca="{{$producto_admon->marca->id}}"
          data-cod_categoria="{{$producto_admon->categoria->id}}"
          data-cod_submedida="{{$producto_admon->submedida->id}}"
          class="btn btn-primary btn-sm">
          Editar</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $productos_admon->links() }}
</div>

@endsection

@section('scripts')
<script src="{{asset('js/productoadmon.js')}}"></script>
@endsection





