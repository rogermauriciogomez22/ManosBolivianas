<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    use HasFactory;
    protected $table = "mesa";
    protected $fillable = ['id','posicion','capacidad','estado','created_at','update_at'];
}
