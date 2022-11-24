@extends('plantilla')
@section('plantilla')
    <form action="{{route('ingrediente.update', $ingredientes->id)}}" method="post">
        @csrf
        @method('PUT')
        <h1>EDITAR INGREDIENTES</h1>
        <div class="row">
            <div class="col-md-4">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" value="{{$ingredientes->nombre}}" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for="fecha_ingreso">Fecha ingreso</label>
                <input type="text" name="fecha_ingreso" id="fecha_ingreso" value="{{$ingredientes->fecha_ingreso}}" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for="lote">Lote</label>
                <input type="text" name="lote" id="lote" value="{{$ingredientes->lote}}" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for="marca">Marca</label>
                <input type="text" name="marca" id="marca" value="{{$ingredientes->marca}}" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for="fecha_vencimiento">Fecha vencimiento</label>
                <input type="text" name="fecha_vencimiento" id="fecha_vencimiento" value="{{$ingredientes->fecha_vencimiento}}" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for="medida">Medida</label>
                <input type="text" name="medida" id="medida" value="{{$ingredientes->medida}}" class="form-control" required>
            </div>
            <div class="col-md-4">
                <input type="submit" value="Actualizar" class="btn btn-info btn-block mt-4">
                <a href="{{route('ingrediente.index')}}" class="btn btn-danger btn-block mt-4">Salir del formulario</a>
            </div>
        </div>
    </form>
@endsection