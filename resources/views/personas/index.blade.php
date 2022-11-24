@extends('plantilla')
@section('plantilla')
<br><br>
<div class="row">
  <div class="col-md-12">
    <a href="{{route('persona.create')}}" class="btn btn-primary">
      AGREGAR PERSONA
    </a>
  </div>
</div>
<table class="table table-striped mt-2">
  <thead>
    <tr>
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDO</th>
      <th scope="col">C.I.</th>
      <th scope="col">COMPLEMENTO</th>
      <th scope="col">CELULAR</th>
      <th scope="col">TELEFONO</th>
      <th scope="col" colspan="2" class="text-center">OPCIONES</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($personas as $persona)
      <tr>
        <td>{{$persona->nombre}}</td>
        <td>{{$persona->apellido}}</td>
        <td>{{$persona->ci}}</td>
        <td>{{$persona->complemento}}</td>
        <td>{{$persona->celular}}</td>
        <td>{{$persona->telefono}}</td>
        <td><a href="{{route('persona.edit', $persona->id)}}" class="btn btn-primary">Editar</a></td>
        <td><a href="" class="btn btn-success">Activo</a></td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection