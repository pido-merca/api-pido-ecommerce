@extends('Layout.layout')
@section('titulo')
  Plan
@endsection
@section('contenido')
<div class="container mt-5">
  <div class="row">
    <div class="col-12 mt-4">
      <a type="button" class="btn btn-success btn-lg font-weight-bold" href="{{ route('plan.create') }}" >Crear Nuevo Plan <i class="fas fa-save"></i></a>
    </div>
  </div> 

  <div class="row">
    <div class="col-12">
      <table class="table">
        <thead class="thead-dark text-center">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Opciones</th>
          </tr>
        </thead>
        <tbody class="text-center">
        @foreach($plan as $plan)
          <tr>
            <th scope="row">{{ $plan->id }}</th>
            <td>{{ $plan->nombre }}</td>
            <td><a type="submit" class="btn btn-primary font-weight-bold" href="{{ route('plan.edit',['id' =>$plan->id]) }}"><i class="fas fa-edit"></i>Editar</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection