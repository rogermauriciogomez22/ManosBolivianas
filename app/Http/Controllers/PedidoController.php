<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
    public function index(){
        $pedido = Pedido::all();
        dd($pedido);
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
