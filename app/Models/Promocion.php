<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    use HasFactory;
    protected $table = "promocion";
    protected $fillable = ['id','pedido_id','descripcion','precio_promocion','estado','created_at','update_at'];
}
