@extends('Layout.layout')
@section('titulo','Editar Plan')
@section('contenido')
<!-- START RESPONSIVE TABLES -->

      <div class="container col-md-12">
        <form class="form-horizontal" id="formcomida" name="formcomida" action="{{ route('plan.update',['id'=>$plan->id]) }}" method="POST">
          
            @csrf
            <input type="hidden" name="_method" value="PATCH"/>
            <div class="panel-heading"><br/><br/><br/>
              <h3 class="panel-title"><span class="fa  fa-cutlery"></span><b> Editar plan</b></h3>
             
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Nombre:</label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" require id="nombre" name="nombre" class="form-control" placeholder="Nombre de la plan" value="{{$plan->nombre}}"/>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              </div><!--fin panel body-->
          
              <div class="panel-footer">
              <a href="{{route('plan.index')}}" class="btn btn-default">Cancelar</a>
              <button class="btn btn-info pull-right">Editar</button>
            </div>
        
        </form>
      </div>

<!-- END RESPONSIVE TABLES -->
@endsection