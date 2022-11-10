<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    protected $table = "proveedor";
    protected $fillable = ['id','persona_id','nro_coorporativo','cargo','empresa','direccion','estado','created_at','update_at'];
}
