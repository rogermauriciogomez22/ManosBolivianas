@extends('plantilla')
@section('plantilla')

<br><br>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">NOMBRE</th>
        <th scope="col">FECHA INGRESO</th>
        <th scope="col">LOTE</th>
        <th scope="col">MARCA</th>
        <th scope="col">FECHA_VENCIMIENTO</th>
        <th scope="col">MEDIDA</th>
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
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection