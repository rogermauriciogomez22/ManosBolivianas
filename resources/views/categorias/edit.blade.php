@extends('plantilla')
@section('plantilla')
    <form action="{{route('categoria.update', $productos->id)}}" method="post">
        @csrf
        @method('PUT')
        <h1>EDITAR CATEGORIAS</h1>
        <div class="row">
            <div class="col-md-6">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" value="{{$productos->nombre}}" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="descripcion">Descripcion</label>
                <input type="text" name="descripcion" id="descripcion" value="{{$productos->descripcion}}" class="form-control" required>
            </div>
            <div class="col-md-4">
                <input type="submit" value="Actualizar" class="btn btn-info btn-block mt-4">
                <a href="{{route('categoria.index')}}" class="btn btn-danger btn-block mt-4">Salir del formulario</a>
            </div>
        </div>
    </form>
@endsection