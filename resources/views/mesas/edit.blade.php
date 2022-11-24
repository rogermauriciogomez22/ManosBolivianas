@extends('plantilla')
@section('plantilla')
    <form action="{{route('mesa.update', $mesas->id)}}" method="post">
        @csrf
        @method('PUT')
        <h1>EDITAR MESAS</h1>
        <div class="row">
            <div class="col-md-6">
                <label for="posicion">Posición</label>
                <input type="text" name="posicion" id="posicion" value="{{$mesas->posicion}}" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="capacidad">Capacidad</label>
                <input type="text" name="capacidad" id="capacidad" value="{{$mesas->capacidad}}" class="form-control" required>
            </div>
            <div class="col-md-4">
                <input type="submit" value="Actualizar" class="btn btn-info btn-block mt-4">
                <a href="{{route('mesa.index')}}" class="btn btn-danger btn-block mt-4">Salir del formulario</a>
            </div>
        </div>
    </form>
@endsection