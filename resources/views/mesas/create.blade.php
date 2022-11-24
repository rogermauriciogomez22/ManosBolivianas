@extends('plantilla')
@section('plantilla')
    {{-- el form apunta a una ruta con route --}}
    <form action="{{route('mesa.store')}}" method="post">
        @csrf
        <h1>FORMULARIO PARA AGREGAR MESAS</h1>
        <div class="row">
            <div class="col-md-6">
                <label for="posicion">Posición</label>
                <input type="text" name="posicion" id="posicion" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="capacidad">Capacidad</label>
                <input type="text" name="capacidad" id="capacidad" class="form-control" required>
            </div>
            <div class="col-md-4">
                <input type="submit" value="Registrar" class="btn btn-info btn-block mt-4">
                <a href="{{route('mesa.index')}}" class="btn btn-danger btn-block mt-4">Salir del formulario</a>
            </div>
        </div>
    </form>
@endsection