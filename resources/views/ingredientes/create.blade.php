@extends('plantilla')
@section('plantilla')
    {{-- el form apunta a una ruta con route --}}
    <form action="{{route('ingrediente.store')}}" method="post">
        @csrf
        <h1>FORMULARIO PARA AGREGAR INGREDIENTES</h1>
        <div class="row">
            <div class="col-md-4">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for="fecha_ingreso">Fecha ingreso</label>
                <input type="text" name="fecha_ingreso" id="fecha_ingreso" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for="lote">Lote</label>
                <input type="text" name="lote" id="lote" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for="marca">Marca</label>
                <input type="text" name="marca" id="marca" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for="fecha_vencimiento">Fecha vencimiento</label>
                <input type="text" name="fecha_vencimiento" id="fecha_vencimiento" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for="medida">Medida</label>
                <input type="text" name="medida" id="medida" class="form-control" required>
            </div>
            <div class="col-md-4">
                <input type="submit" value="Registrar" class="btn btn-info btn-block mt-4">
                <a href="{{route('ingrediente.index')}}" class="btn btn-danger btn-block mt-4">Salir del formulario</a>
            </div>
        </div>
    </form>
@endsection