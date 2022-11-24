@extends('plantilla')
@section('plantilla')

<br><br>
<div class="row">
  <div class="col-md-12">
    <a href="{{route('categoria.create')}}" class="btn btn-primary">
      AGREGAR CATEGORIAS
    </a>
  </div>
</div>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">NOMBRE</th>
        <th scope="col">DESCRIPCION</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($categoria as $productos)
            <tr>
              <td>{{$productos->nombre}}</td>
              <td>{{$productos->descripcion}}</td>
              <td><a href="{{route('categoria.edit', $productos->id)}}" class="btn btn-primary">Editar</a></td>
              <td><a href="" class="btn btn-success">Activo</a></td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection