@extends('plantilla')
@section('plantilla')

<br><br>
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
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection