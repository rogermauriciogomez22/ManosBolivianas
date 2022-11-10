<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
    use HasFactory;
    protected $table = "plato";
    protected $fillable = ['id','categoria_id','nombre_plato','precio','estado','created_at','update_at'];
}
