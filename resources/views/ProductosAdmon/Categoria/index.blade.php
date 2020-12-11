@extends('Layout.layout')
@section('titulo','Productos_Admon')
@section('contenido')

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modal-label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <a class="modal-title" id="modal-Label">Datos de la nueva categoría</a>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <!--form-->
          <div class="modal-body">
            <form id="form" action="{{route('categoria.store')}}" method="POST">
            @csrf
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>ID</label>
                  <input type="text" id="id" name="id" class="form-control" placeholder="ID de la Categoría"/>
                </div>
                <div class="form-group col-md-6">
                  <label>Categoría</label>
                  <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre de la categoria"/>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary pull-right">Crear Categoría</button>
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
                <h2 class="panel-title">Categorías </h2>
            </div>
         
                <table class="table text-center">
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
                            <a href="{{route('categoria.editar',['id'=>$categoria->id])}}" class="btn btn-primary btn-sm">Editar</a>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            
        </div>
    </div>

  

</div>
@endsection