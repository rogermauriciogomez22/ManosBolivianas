<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
    protected $table = "compra";
    protected $fillable = ['id','id_proveedor','descripcion','cantidad','precio_compra','estado','created_at','update_at'];
}
