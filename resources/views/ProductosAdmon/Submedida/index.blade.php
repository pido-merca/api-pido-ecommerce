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
            <a class="modal-title" id="modal-Label">Datos de la nueva Submedida</a>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div> 

          <!--form-->
          <div class="modal-body">
            <form id="form" action="{{route('submedida.store')}}" method="POST">
            @csrf
              

                <div class="form-row">
            <div class="form-group col-md-6">
              <label>Medida</label>
                  <select id="cod_medida" name="cod_medida" class="form-control ">
                    @foreach($medidas as $medida)
                    <option value="{{ $medida->id }}" selected> {{ $medida->nom_medida }} </option>
                    @endforeach
                  </select>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                  <label>Submedida</label>
                  <input type="text" id="nom_submedida" name="nom_submedida" class="form-control" placeholder="Nombre de la Submedida"/>
                </div>
          </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary pull-right">Crear Submedida</button>
             </div>
            </form>
          </div>
         
        </div>
      </div>
</div>
 
<!--modal-edit-->
<div class="modal fade" id="modalEditSubmedida" tabindex="-1" aria-labelledby="modal-label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <a class="modal-title" id="modal-Label">Modificar Submedida</a>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div> 

          <!--form-->
           <div class="modal-body">
            <form class="form-horizontal" name="formcomida" id="form" action="{{route('submedida.update')}}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="PATCH" />

            <input type="hidden" id="id" name="id" />
              <div class="form-row">
              <div class="form-group col-md-6">
              <label>Medida</label>
                  <select id="cod_medida" name="cod_medida" class="form-control ">
                    @foreach($medidas as $medida)
                    <option value="{{ $medida->id }}" selected> {{ $medida->nom_medida }} </option>
                    @endforeach
                  </select>
            </div>
                <div class="form-group col-md-6">
                  <label>Editar Submedida</label>
                  <input type="text" id="nom_submedida" name="nom_submedida" class="form-control"/>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary pull-right">Actualizar Submedida</button>
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

<div class="item-body">
            <div class="panel-heading">
                <h2 class="panel-title">Submedidas</h2>
            </div>
         
                <table class="table text-center table-striped table-sm">
                    <thead>
                        <tr>
                            <th class="text-center">Nombre de la Submedida</th>
                            <th class="text-center">Valor de la Medida</th>
                            <th><a class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal"> Agregar Nueva Submedida</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($submedidas as $submedida)
                        <tr>
                        <td>{{$submedida->nom_submedida}}</td>
                        <td>{{$submedida->medida->nom_medida}}</td>
                        <td>
                            <a href="#modalEditSubmedida" 
                               data-toggle="modal" 
                               data-id="{{$submedida->id}}"
                               data-nom_submedida="{{$submedida->nom_submedida}}"
                               data-cod_medida="{{$submedida->medida->id}}" 
                               class="btn btn-primary btn-sm">Editar</a>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $submedidas->links() }}
        </div>
    </div>

  

</div>
@endsection

@section('scripts')
<script src="{{asset('js/submedida.js')}}"></script>
@endsection