<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    use HasFactory;
    protected $table = "ingrediente";
    protected $fillable = ['id','fecha_ingreso','lote','marca','fecha_vencimiento','medida','estado','created_at','updated_at'];
}
