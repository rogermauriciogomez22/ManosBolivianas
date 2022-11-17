@extends('plantilla')
@section('plantilla')

<br><br>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">POSICION</th>
        <th scope="col">CAPACIDAD</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($mesa as $mesas)
            <tr>
                <td>{{$mesas->posicion}}</td>
                <td>{{$mesas->capacidad}}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection