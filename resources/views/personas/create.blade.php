@extends('plantilla')
@section('plantilla')
    <form action="{{route('persona.store')}}" method="post">
        @csrf
        <h1>FORMULARIO PARA AGREGAR PERSONAS</h1>
        <div class="row">
            <div class="col-md-4">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for="ci">C.I.</label>
                <input type="text" name="ci" id="ci" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for="complemento">Complemento</label>
                <input type="text" name="complemento" id="complemento" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for="celular">Celular</label>
                <input type="text" name="celular" id="celular" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for="telefono">Teléfono</label>
                <input type="text" name="telefono" id="telefono" class="form-control" required>
            </div>
            <div class="col-md-4">
                <input type="submit" value="Registrar" class="btn btn-info btn-block mt-4">
            </div>
        </div>
    </form>
@endsection