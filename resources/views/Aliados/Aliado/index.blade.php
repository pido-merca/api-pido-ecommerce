@extends('Layout.layout')
@section('titulo','Aliados')

@section('sub-menu')
@include('submenus.aliado-submenu')
@endsection

@section('contenido')

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modal-label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title">Datos del nuevo Aliado</div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--form-->
      <div class="modal-body">
        <form id="form" enctype="multipart/form-data" action="{{route('aliado.store')}}" method="POST">
          @csrf

          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Nombre del Aliado</label>
              <input type="text" name="nombre" class="form-control" placeholder="Nombre del aliado" />
            </div>

            <div class="form-group col-md-6">
              <label>Slug</label>
              <input type="text" name="slug" class="form-control" placeholder="slug" />
            </div>

            
          </div>
         

           <div class="form-row text-center">
            <div class="form-group col-md-4">
              <label>Cámara de comercio</label>
              <input type="text" name="camara_comercio" class="form-control" placeholder="Cámara de comercio" />
            </div>
            
            <div class="form-group col-md-4">
              <label>Hora de Inicio</label>
              <input type="time" name="hora_inicio" class="form-control" placeholder="Hora de Inicio" />
            </div>

            <div class="form-group col-md-4">
              <label>Hora de Cierre</label>
              <input type="time" name="hora_cierre" class="form-control" placeholder="Hora de Cierre" />
            </div>
            </div>
            
         

          <div class="form-row">
            <div class="form-group col-md-6">
              <label>RUT</label>
              <input type="text" name="rut" class="form-control" placeholder="Rut" />
            </div>

            <div class="form-group col-md-6">
              <label>Municipio</label>
                  <select id="cod_municipio" name="cod_municipio" class="form-control ">
                    @foreach($municipios as $municipio)
                    <option value="{{ $municipio->id }}" selected> {{ $municipio->nombre }} </option>
                    @endforeach
                  </select>
            </div>
          </div>

          
            
         

          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Teléfono</label>
              <input type="number" name="telefono" class="form-control" placeholder="Teléfono" />
            </div>

            <div class="form-group col-md-6">
              <label>Email</label>
              <input type="email" name="correo" class="form-control" placeholder="Email" />
            </div>
          </div>

         
            
      

          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Fecha Inscripción</label>
              <input type="date" name="fecha_inscripcion" class="form-control"/>
            </div>

            <div class="form-group col-md-6">
              <label>Plan</label>
                  <select id="cod_plan" name="cod_plan" class="form-control ">
                    @foreach($planes as $plan)
                    <option value="{{ $plan->id }}" selected> {{ $plan->nombre }} </option>
                    @endforeach
                  </select>
            </div>
          </div>
        <div class="form-row">
           <div class="form-group col-md-12">
              <div>
                <label for="name" class="form-label">Imagen</label>
                <input class="form-control  form-control-lg" type="file" id="avatar" name="avatar" accept="image/*">
              </div>
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
            <button type="submit" class="btn btn-primary pull-right">Crear Aliado</button>
          </div>
        </form>
      </div>
      </div>
    </div>
    </div>
  </div>
</div>


<div id="modalEditAliado" class="modal fade" tabindex="-1" aria-labelledby="modal-label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title">Editar Aliado</div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--form-->

      <div class="modal-body">
      
        <form class="form-horizontal" enctype="multipart/form-data" id="formcomida" name="formcomida" action="{{ route('aliado.update') }}" method="POST">
          @csrf
          <input type="hidden" name="_method" value="PATCH" />

          <input type="hidden" id="id" name="id" />
          <div class="panel-heading">
            <h3 class="panel-title"><span class="fa  fa-cutlery"></span><b> Editar Aliado</b></h3>

          </div>
          <div class="panel-body">
            <div class="form-row">
            <div class="form-group col-md-6">
              <label>Nombre del Aliado</label>
              <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre del aliado" />
            </div>

            <div class="form-group col-md-6">
              <label>Slug</label>
              <input type="text" id="slug" name="slug" class="form-control" placeholder="slug" />
            </div>

            
          </div>
         

           <div class="form-row text-center">
            <div class="form-group col-md-4">
              <label>Cámara de comercio</label>
              <input type="text" id="camara_comercio" name="camara_comercio" class="form-control" placeholder="Cámara de comercio" />
            </div>
            
            <div class="form-group col-md-4">
              <label>Hora de Inicio</label>
              <input type="time" id="hora_inicio" name="hora_inicio" class="form-control" placeholder="Hora de Inicio" />
            </div>

            <div class="form-group col-md-4">
              <label>Hora de Cierre</label>
              <input type="time" id="hora_cierre" name="hora_cierre" class="form-control" placeholder="Hora de Cierre" />
            </div>
            </div>
            
         

          <div class="form-row">
            <div class="form-group col-md-6">
              <label>RUT</label>
              <input type="text" id="rut" name="rut" class="form-control" placeholder="Rut" />
            </div>

            <div class="form-group col-md-6">
              <label>Municipio</label>
                  <select id="cod_municipio" name="cod_municipio" class="form-control ">
                    @foreach($municipios as $municipio)
                    <option value="{{ $municipio->id }}" selected> {{ $municipio->nombre }} </option>
                    @endforeach
                  </select>
            </div>
          </div>

          
            
         

          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Teléfono</label>
              <input type="number" id="telefono" name="telefono" class="form-control" placeholder="Teléfono" />
            </div>

            <div class="form-group col-md-6">
              <label>Email</label>
              <input type="email" id="correo" name="correo" class="form-control" placeholder="Email" />
            </div>
          </div>

         
            
      

          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Fecha Inscripción</label>
              <input type="date" id="fecha_inscripcion" name="fecha_inscripcion" class="form-control"/>
            </div>

            <div class="form-group col-md-6">
              <label>Plan</label>
                  <select id="cod_plan" name="cod_plan" class="form-control ">
                    @foreach($planes as $plan)
                    <option value="{{ $plan->id }}" selected> {{ $plan->nombre }} </option>
                    @endforeach
                  </select>
            </div>
          </div>

           
            
    

           <div class="form-row">
           <div class="form-group col-md-12">
              <div>
                <label for="name" class="form-label">Imagen</label>
                <input class="form-control  form-control-lg" type="file" id="avatar" name="avatar" accept="image/*">
              </div>
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
          <!--fin panel body-->

          <div class="panel-footer ml-3">
            <a href="{{route('aliado.index')}}" class="btn btn-secondary">Cancelar</a>
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
  <table class="table text-center table-striped ">
    <thead>
      <tr>
        <th class="text-center">Nombre</th>
        <th class="text-center">Plan</th>
        <th class="text-center">Cámara de comercio</th>
        <th class="text-center">RUT</th>
        <th class="text-center">Municipio</th>
        <th class="text-center">Teléfono</th>
        <th class="text-center">Email</th>
        <th class="text-center">Imagen</th>
        <th class="text-center">Fecha de inscripción</th>
        <th><a class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal"> Añadir Aliado </a></th>
      </tr>
      
    </thead>
    
    <tbody>
    
      @foreach($aliados as $aliado)
      
      <tr>
        <td>{{$aliado->nombre}}</td>
        <td>{{$aliado->plan->nombre}}</td>
        <td>{{$aliado->camara_comercio}}</td>
        <td>{{$aliado->rut}}</td>
        <td>{{$aliado->municipio->nombre}}</td>
        <td>{{$aliado->telefono}}</td>
        <td>{{$aliado->correo}}</td>
        <td>
          <div class="card w-100 h-100">
            <img class="rounded mx-auto d-block img-fluid" src="{{url('/aliado', $aliado->imagen)}}" alt="img1">
          </div>
        </td>
        <td>{{$aliado->fecha_inscripcion}}</td>
        
  
        <td>
          <a 
          href="#modalEditAliado" 
          data-toggle="modal" 
          data-id="{{$aliado->id}}" 
          data-nombre="{{$aliado->nombre}}"
          data-slug="{{$aliado->slug}}" 
          data-hora_inicio="{{$aliado->hora_inicio}}"  
          data-hora_fin="{{$aliado->hora_cierre}}" 
          data-camara_comercio="{{$aliado->camara_comercio}}" 
          data-rut="{{$aliado->rut}}" 
          data-cod_municipio="{{$aliado->municipio->id}}" 
          data-telefono="{{$aliado->telefono}}" 
          data-correo="{{$aliado->correo}}" 
          data-fecha_inscripcion="{{$aliado->fecha_inscripcion}}" 
          data-cod_plan="{{$aliado->plan->id}}" 
          data-imagen="{{$aliado->imagen}}" 
          data-estado="{{$aliado->estado}}" 
          class="btn btn-primary btn-sm">
          Editar</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $aliados->links() }}



</div>
@endsection

@section('scripts')
<script src="{{asset('js/aliado.js')}}"></script>
@endsection