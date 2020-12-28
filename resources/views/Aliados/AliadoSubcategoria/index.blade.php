@extends('Layout.layout')
@section('titulo','Aliado | Subcategoria')

@section('sub-menu')
@include('submenus.aliado-submenu')
@endsection

@section('contenido')

<!-- Modal -->

<div id="modalEditAliadoSubcategoria" class="modal fade" tabindex="-1" aria-labelledby="modal-label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title">Editar Aliado | Subcategoria</div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--form-->

      <div class="modal-body">
      
        <form class="form-horizontal" id="formcomida" name="formcomida" action="{{ route('aliadosubcategoria.update') }}" method="POST">
          @csrf
          <input type="hidden" name="_method" value="PATCH" />

          <input type="hidden" id="id" name="id" />
          <div class="panel-heading">
            <h3 class="panel-title"><span class="fa  fa-cutlery"></span><b> Editar Aliado | Subcategoria</b></h3>

          </div>
          <div class="panel-body">
           <div class="form-row">
            <div class="form-group col-md-9">
            <label for="cod_aliado">Aliado</label>
                    <select id="cod_aliado" name="cod_aliado" class="form-control ">
                      @foreach($aliados_subcategorias as $aliado_subcategoria)
                        <option value="{{ $aliado_subcategoria->cod_aliado }}" selected> {{ $aliado_subcategoria->aliado->nombre }} </option>
                      @endforeach
                    </select>
            </div>
           </div>

            <div class="form-row">
              <div class="form-group col-md-9">
              <label for="cod_subcategoria">Subcategoria</label>
                      <select id="cod_subcategoria" name="cod_subcategoria" class="form-control ">
                        @foreach($subcategorias as $subcategoria)
                          <option value="{{ $subcategoria->id }}" selected> {{ $subcategoria->nombre_subcategoria }} </option>
                        @endforeach
                      </select>
              </div>
            </div>
            <div class="form-row">
                    <div class="form-group col-md-6">
                      <label>Estado</label>
                      <select id="estado" name="estado" class="form-control ">
                        <option value="0" selected> Activo </option>
                        <option value="1" selected> Inactivo </option>
                      </select>
                    </div>
            </div>
          </div>
          <!--fin panel body-->

          <div class="panel-footer ml-3">
            <a href="{{route('aliadosubcategoria.index')}}" class="btn btn-secondary">Cancelar</a>
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
        <th class="text-center">Nombre Aliado</th>
        <th class="text-center">Nombre Subcategoria</th>
        <th class="text-center">Estado</th>
        <th class="text-center"></th>
      </tr>
    </thead>
    <tbody>
      @foreach($aliados_subcategorias as $aliado_subcategoria)
      <tr>
        <td>{{$aliado_subcategoria->aliado->nombre}}</td>
        <td>{{$aliado_subcategoria->subcategoria->nombre_subcategoria}}</td>
        <td>{{$aliado_subcategoria->estado}}</td>
        <td>
          <a 
          href="#modalEditAliadoSubcategoria" 
          data-toggle="modal" 
          data-id="{{$aliado_subcategoria->id}}" 
          data-cod_subcategoria="{{$aliado_subcategoria->subcategoria->nombre_subcategoria}}" 
          data-cod_aliado="{{$aliado_subcategoria->aliado->nombre}}" 
          data-estado="{{$aliado_subcategoria->estado}}"
          class="btn btn-primary btn-sm">
          Editar</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $aliados_subcategorias->links() }}
</div>

</div>
@endsection

@section('scripts')
<script src="{{asset('js/aliadosubcategoria.js')}}"></script>
@endsection