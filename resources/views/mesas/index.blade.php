@extends('plantilla')
@section('plantilla')

<br><br>
<div class="row">
  <div class="col-md-12">
    <a href="{{route('mesa.create')}}" class="btn btn-primary">
      AGREGAR MESA
    </a>
  </div>
</div>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">POSICION</th>
        <th scope="col">CAPACIDAD</th>
        <th scope="col" colspan="2" class="text-center">OPCIONES</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($mesa as $mesas)
          <tr>
            <td>{{$mesas->posicion}}</td>
            <td>{{$mesas->capacidad}}</td>
            <td><a href="{{route('mesa.edit', $mesas->id)}}" class="btn btn-primary">Editar</a></td>
            <td><a href="" class="btn btn-success">Activo</a></td>
          </tr>
        @endforeach
    </tbody>
  </table>
@endsection