<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $table = "pedido";
    protected $fillable = ['id','cliente_id','monto_consumo','estado','created_at','update_at'];
}
