<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function index(){
        $personas = Persona::all();
        return view("personas.index", compact("personas"));
    }

    public function create(){
        return view("personas/create");
    }

    public function store(Request $request){
        $persona = new Persona();
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->ci = $request->ci;
        $persona->complemento = $request->complemento;
        $persona->celular = $request->celular;
        $persona->telefono = $request->telefono;
        $persona->save();
        return redirect()->route("persona.index");
    }

    public function edit($id){
        dd("El id recibido es = ".$id);
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
