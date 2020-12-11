@extends('Layout.layout')
@section('titulo')
  Subcategoria | Aliado
@endsection
@section('contenido')
<div class="container mt-5">
  <div class="row">
    <div class="col-12 mt-4">
      <a type="button" class="btn btn-success btn-lg font-weight-bold" href="{{ route('subcategoria.create') }}" >Crear Nueva Subcategoria <i class="fas fa-save"></i></a>
    </div>
  </div> 
  <div class="row">
    <div class="col-12">
      <table class="table">
        <thead class="thead-dark text-center">
          <tr>
            <th scope="col">Id Subcategoria</th>
            <th scope="col">Id Categoria</th>
            <th scope="col">Nombre de la Subcategoria</th>
            <th scope="col">Slug</th>
            <th scope="col">Estado</th>
            <th scope="col">Opciones</th>
          </tr>
        </thead>
        <tbody class="text-center">
        @foreach($subcategoria as $subcategoria)
          <tr>
            <th scope="row">{{ $subcategoria->id }}</th>
            <td>{{ $subcategoria->cod_categoria }}</td>
            <td>{{ $subcategoria->nombre_subcategoria }}</td>
            <td>{{ $subcategoria->slug }}</td>
            <td>{{ $subcategoria->estado }}</td>
            <td><a type="submit" class="btn btn-primary font-weight-bold" href="{{ route('subcategoria.edit',['id' =>$subcategoria->id]) }}"><i class="fas fa-edit"></i>Editar</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection