@extends('Layout.layout')
@section('titulo')
  Categoria del Aliado
@endsection
@section('contenido')
<div class="container mt-5">
  <div class="row">
    <div class="col-12 mt-4">
      <a type="button" class="btn btn-success btn-lg font-weight-bold" href="{{ route('categoria-aliado.create') }}" >Crear Nueva Categoria Aliado <i class="fas fa-save"></i></a>
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
        @foreach($categoria_aliado as $categoria_aliado)
          <tr>
            <th scope="row">{{ $categoria_aliado->id }}</th>
            <td>{{ $categoria_aliado->nombre }}</td>
            <td><a type="submit" class="btn btn-primary font-weight-bold" href="{{ route('categoria-aliado.edit',['id' =>$categoria_aliado->id]) }}"><i class="fas fa-edit"></i>Editar</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection