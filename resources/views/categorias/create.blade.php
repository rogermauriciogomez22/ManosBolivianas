@extends('plantilla')
@section('plantilla')
    {{-- el form apunta a una ruta con route --}}
    <form action="{{route('categoria.store')}}" method="post">
        @csrf
        <h1>FORMULARIO PARA AGREGAR CATEGORIAS</h1>
        <div class="row">
            <div class="col-md-6">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="descripcion">Descripciòn</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control" required>
            </div>
            <div class="col-md-4">
                <input type="submit" value="Registrar" class="btn btn-info btn-block mt-4">
                <a href="{{route('categoria.index')}}" class="btn btn-danger btn-block mt-4">Salir del formulario</a>
            </div>
        </div>
    </form>
@endsection