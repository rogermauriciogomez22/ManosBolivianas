<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mesa;

class MesaController extends Controller
{
    public function index(){
        $mesa = Mesa::all();
        return view("mesas.index", compact("mesa"));
    }

    public function create(){
        return view("mesas/create");
    }

    public function store(Request $request){
        $mesa = new Mesa();
        $mesa->posicion = $request->posicion;
        $mesa->capacidad = $request->capacidad;
        $mesa->save();
        return redirect()->route("mesa.index");
    }

    public function edit($id){
        $mesa = Mesa::find($id);
        return view("mesas/edit")->with('mesas',$mesa);
    }

    public function update(Request $request, $id){
        $mesa = Mesa::find($id);
        $mesa->posicion = $request->posicion;
        $mesa->capacidad = $request->capacidad;
        $mesa->save();
        return redirect()->route("mesa.index");
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