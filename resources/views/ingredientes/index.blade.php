@extends('plantilla')
@section('plantilla')

<br><br>
<div class="row">
  <div class="col-md-12">
    <a href="{{route('ingrediente.create')}}" class="btn btn-primary">
      AGREGAR INGREDIENTES
    </a>
  </div>
</div>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">NOMBRE</th>
        <th scope="col">FECHA INGRESO</th>
        <th scope="col">LOTE</th>
        <th scope="col">MARCA</th>
        <th scope="col">FECHA_VENCIMIENTO</th>
        <th scope="col">MEDIDA</th>
        <th scope="col" colspan="2" class="text-center">OPCIONES</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($ingrediente as $ingredientes)
          <tr>
            <td>{{$ingredientes->nombre}}</td>
            <td>{{$ingredientes->fecha_ingreso}}</td>
            <td>{{$ingredientes->lote}}</td>
            <td>{{$ingredientes->marca}}</td>
            <td>{{$ingredientes->fecha_vencimiento}}</td>
            <td>{{$ingredientes->medida}}</td>
            <td><a href="{{route('ingrediente.edit', $ingredientes->id)}}" class="btn btn-primary">Editar</a></td>
            <td><a href="" class="btn btn-success">Activo</a></td>
          </tr>
        @endforeach
    </tbody>
  </table>
@endsection