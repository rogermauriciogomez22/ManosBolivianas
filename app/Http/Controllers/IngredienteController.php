<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingrediente;

class IngredienteController extends Controller
{
    public function index(){
        $ingrediente = Ingrediente::all();
        return view("ingredientes.index", compact("ingrediente"));
    }

    public function create(){
        return view("ingredientes/create");
    }

    public function store(Request $request){
        $ingrediente = new Ingrediente();
        $ingrediente->nombre = $request->nombre;
        $ingrediente->fecha_ingreso = $request->fecha_ingreso;
        $ingrediente->lote = $request->lote;
        $ingrediente->marca = $request->marca;
        $ingrediente->fecha_vencimiento = $request->fecha_vencimiento;
        $ingrediente->medida = $request->medida;
        $ingrediente->save();
        return redirect()->route("ingrediente.index");
    }

    public function edit($id){
        $ingrediente = Ingrediente::find($id);
        return view('ingredientes/edit')->with('ingredientes',$ingrediente);
    }

    public function update(Request $request, $id){
        $ingrediente = Ingrediente::find($id);
        $ingrediente->nombre = $request->nombre;
        $ingrediente->fecha_ingreso = $request->fecha_ingreso;
        $ingrediente->lote = $request->lote;
        $ingrediente->marca = $request->marca;
        $ingrediente->fecha_vencimiento = $request->fecha_vencimiento;
        $ingrediente->medida = $request->medida;
        $ingrediente->save();
        return redirect()->route("ingrediente.index");
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
