@extends('Layout.layout')
@section('titulo','Productos_Aliados')

@section('sub-menu')


@section('contenido')

<!-- Modal-guardar -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modal-label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <a class="modal-title" id="modal-Label">Datos del nuevo Producto</a>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div> 

          <!--form-->
  <div class="modal-body">
            <form id="form" enctype="multipart/form-data" action="{{route('productoaliado.store')}}" method="POST">
              @csrf

              <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Producto</label>
                        <select id="cod_producto_admon" name="cod_producto_admon" class="form-control">
                          @foreach($productosadmon as $productoadmon)
                          <option value="{{ $productoadmon->id }}" selected> {{ $productoadmon->nombre }} </option>
                          @endforeach
                        </select>
                </div>

                <div class="form-group col-md-6">
                  <label>Aliado</label>
                      <select id="id_aliado" name="id_aliado" class="form-control">
                        @foreach($aliados as $aliado)
                        <option value="{{ $aliado->id }}" selected> {{ $aliado->nombre }} </option>
                        @endforeach
                      </select>
                </div>
              </div>
                
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Existencia</label>
                  <input type="number" name="cantidad" class="form-control" placeholder="Cantidad"/>
                </div>

                <div class="form-group col-md-6">
                  <label>Precio</label>
                  <input type="number" name="preciosubmedida" class="form-control" placeholder="valor" />
                </div>
              </div>

              <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>Stock Mínimo</label>
                    <input type="number" name="stockminimo" class="form-control" placeholder="stock mínimo" />
                  </div>

                  <div class="form-group col-md-6">
                    <label>Estado</label>
                        <select id="estado" name="estado" class="form-control ">
                          <option value="0" selected> Activo </option>
                          <option value="1" selected> Inactivo </option>
                        </select>
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
      
        <form class="form-horizontal" enctype="multipart/form-data" id="formcomida" name="formcomida" action="{{ route('productoaliado.update') }}" method="POST">
          @csrf
          <input type="hidden" name="_method" value="PATCH" />

          <input type="hidden" id="id" name="id" />

          <div class="panel-body">
          <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Producto</label>
                        <select id="cod_producto_admon" name="cod_producto_admon" class="form-control">
                          @foreach($productosadmon as $productoadmon)
                          <option value="{{ $productoadmon->id }}" selected> {{ $productoadmon->nombre }} </option>
                          @endforeach
                        </select>
                </div>

                <div class="form-group col-md-6">
                  <label>Aliado</label>
                      <select id="id_aliado" name="id_aliado" class="form-control">
                        @foreach($aliados as $aliado)
                        <option value="{{ $aliado->id }}" selected> {{ $aliado->nombre }} </option>
                        @endforeach
                      </select>
                </div>
              </div>
                
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Existencia</label>
                  <input type="number" name="cantidad" id="cantidad" class="form-control"/>
                </div>

                <div class="form-group col-md-6">
                  <label>Precio</label>
                  <input type="number" name="preciosubmedida" id="preciosubmedida" class="form-control"/>
                </div>
              </div>

              <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>Stock Mínimo</label>
                    <input type="number" name="stockminimo" id="stockminimo" class="form-control"/>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Estado</label>
                        <select id="estado" name="estado" class="form-control ">
                          <option value="0" selected> Activo </option>
                          <option value="1" selected> Inactivo </option>
                        </select>
                  </div>
              </div>
          </div>

          <div class="panel-footer ml-3">
            <a data-dismiss="modal" class="btn btn-secondary">Cancelar</a>
            <button class="btn btn-info pull-right">Editar</button>
          </div>

        </form>
      </div>

    </div>
  </div>
</div>


@if (session('success'))
<div class="alert alert-success" role="alert">
<strong>{{ session('success')}}</strong> 
</div>
@endif

@if (session('edit'))
<div class="alert alert-info" role="alert">
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

<!-- index-list-->
<div class="item-body">
  <div class="panel-heading">
      <h2 class="panel-title">Productos Aliado</h2>
  </div>
  <table class="table text-center table-striped ">
    <thead>
      <tr>
        <th class="text-center">Producto</th>
        <th class="text-center">Aliado</th>
        <th class="text-center">Existencia</th>
        <th class="text-center">Precio Sub.</th>
        <th class="text-center">Stock Mínimo</th>
        <th class="text-center">Estado</th>
        <th><a class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal"> Añadir Producto </a></th>
      </tr>
      
    </thead>
    
    <tbody>
    
      @foreach($productosaliado as $productoaliado)
      
      <tr>
        <td>{{$productoaliado->productoAdmon->nombre}}</td>
        <td>{{$productoaliado->aliado->nombre}}</td>
        <td>{{$productoaliado->cantidad}}</td>
        <td>{{$productoaliado->preciosubmedida}}</td>
        <td>{{$productoaliado->stockminimo}}</td>
        <td>{{$productoaliado->estado}}</td>
        
  
        <td>
          <a class="btn btn-primary btn-sm"
              href="#modalEditProducto"
              data-toggle="modal"
              data-id="{{$productoaliado->id}}"
              data-cod_producto_admon="{{$productoaliado->productoAdmon->id}}"
              data-id_aliado="{{$productoaliado->aliado->id}}"
              data-cantidad="{{$productoaliado->cantidad}}"
              data-preciosubmedida="{{$productoaliado->preciosubmedida}}"
              data-stockminimo="{{$productoaliado->stockminimo}}"
              data-estado="{{$productoaliado->estado}}">Editar</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>



</div>
@endsection

@section('scripts')
<script src="{{asset('js/productoaliado.js')}}"></script>
@endsection


 