<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table = "persona";
    protected $fillable = ['id','nombre','apellido','ci','complemento','celular','telefono','estado','created_at','update_at'];
}
