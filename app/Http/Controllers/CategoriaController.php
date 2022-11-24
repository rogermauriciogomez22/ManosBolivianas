<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index(){
        $categoria = Categoria::all();
        return view("categorias.index", compact("categoria"));
    }

    public function create(){
        return view("categorias/create");
    }

    public function store(Request $request){
        $categoria = new Categoria();
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->save();
        return redirect()->route("categoria.index");
    }

    public function edit($id){
        $categoria = Categoria::find($id);
        return view('categorias/edit')->with('productos',$categoria);
    }

    public function update(Request $request, $id){
        $categoria = Categoria::find($id);
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->save();
        return redirect()->route("categoria.index");
    }

    public function show($id){
        dd("El id para mostrar es = ".$id);
    }

    public function destroy($id){
        dd("El id para eliminar es = ".$id);
    }

    public function exportar_pdf(){
        dd("Exportar PDF");
    }
}