<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caja extends Model
{
    use HasFactory;
    protected $table = "caja";
    protected $fillable = ['id','pedido_id','monto_apertura','estado','created_at','update_at'];
}
