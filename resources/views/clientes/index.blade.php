@extends('plantilla')
@section('plantilla')

<br><br>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">NOMBRE</th>
        <th scope="col">APELLIDO</th>
        <th scope="col">C.I.</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($cliente as $clientes)
            <tr>
                <td>{{$clientes->nombre}}</td>
                <td>{{$clientes->apellido}}</td>
                <td>{{$clientes->ci}}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection