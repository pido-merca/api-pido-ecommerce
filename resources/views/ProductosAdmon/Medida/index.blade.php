@extends('Layout.layout')
@section('titulo','Productos_Admon')
@section('contenido')

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modal-label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <a class="modal-title" id="modal-Label">Datos de la nueva Medida</a>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <!--form-->
          <div class="modal-body">
            <form id="form" action="{{route('medida.store')}}" method="POST">
            @csrf
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>ID</label>
                  <input type="text" id="id" name="id" class="form-control" placeholder="ID de la Medida"/>
                </div>
                <div class="form-group col-md-6">
                  <label>Medida</label>
                  <input type="text" id="nom_medida" name="nom_medida" class="form-control" placeholder="Nombre de la medida"/>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary pull-right">Crear Medida</button>
             </div>
             @if(count($errors)>0)
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            </form>
          </div>
         
        </div>
      </div>
    </div>
 
   

<div class="container">


    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">Medidas</h2>
            </div>
         
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Nombre de la medida</th>
                            <th><a class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal"> Agregar Nueva Medida</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($medidas as $medida)
                        <tr>
                        <td>{{$medida->id}}</td>
                        <td>{{$medida->nom_medida}}</td>
                        <td>
                            <a href="{{route('medida.editar',['id'=>$medida->id])}}" class="btn btn-primary btn-sm">Editar</a>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            
        </div>
    </div>

  

</div>
@endsection