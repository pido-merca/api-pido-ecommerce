@extends('Layout.layout')
@section('titulo','Productos_Admon')
@section('contenido')
<!-- START RESPONSIVE TABLES -->

      <div class="container col-md-12">
        <form class="form-horizontal" id="formcomida" name="formcomida" action="{{route('medida.update',['id'=>$medida->id]) }}" method="POST">
          
            @csrf
            <input type="hidden" name="_method" value="PATCH"/>
            <div class="panel-heading"><br/><br/><br/>
              <h3 class="panel-title"><span class="fa  fa-cutlery"></span><b> Editar Medida</b></h3>
             
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Medida:</label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" require id="nom_medida" name="nom_medida" class="form-control" placeholder="Nombre de la medida" value="{{$medida->nom_medida}}"/>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              </div><!--fin panel body-->
          
              <div class="panel-footer">
              <a href="{{route('medida.index')}}" class="btn btn-default">Cancelar</a>
              <button class="btn btn-info pull-right">Editar</button>
            </div>
        
        </form>
      </div>

<!-- END RESPONSIVE TABLES -->
@endsection