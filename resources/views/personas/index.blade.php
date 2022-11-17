@extends('plantilla')
@section('plantilla')

<br><br>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">NOMBRE</th>
        <th scope="col">APELLIDO</th>
        <th scope="col">C.I.</th>
        <th scope="col">COMPLEMENTO</th>
        <th scope="col">CELULAR</th>
        <th scope="col">TELEFONO</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($personas as $datos)
            <tr>
                <td>{{$datos->nombre}}</td>
                <td>{{$datos->apellido}}</td>
                <td>{{$datos->ci}}</td>
                <td>{{$datos->complemento}}</td>
                <td>{{$datos->celular}}</td>
                <td>{{$datos->telefono}}</td>
            </tr>
            
        @endforeach
    </tbody>
  </table>
@endsection