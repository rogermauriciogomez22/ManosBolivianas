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
        return redirect()->route("persona.index");//esto redireciona a una ruta
    }

    public function edit($id){
        $persona = Persona::find($id);
        return view('personas/edit')->with('persona',$persona);//esto retorna a una vista
    }

    public function update(Request $request, $id){
        $persona = Persona::find($id);
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->ci = $request->ci;
        $persona->complemento = $request->complemento;
        $persona->celular = $request->celular;
        $persona->telefono = $request->telefono;
        $persona->save();
        return redirect()->route("persona.index");
    }

    public function show($id){
        dd("El id para mostrar es = ".$id);
    }

    public function destroy($id){
        $persona = Persona::find($id);
        if($persona->estado == 0){
            $persona->estado = 1;
        }
        elseif($persona->estado == 1){
            $persona->estado = 0;
        }
        $persona->save();
        return redirect()->route('persona.index');
    }

    public function exportar_pdf(){
        dd("Exportar PDF");
    }
}
