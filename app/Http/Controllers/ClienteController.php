<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index(){
        $cliente = Cliente::all();
        dd($cliente);
    }

    public function create(){
        dd("Crear");
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
