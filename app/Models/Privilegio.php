<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Privilegio extends Model
{
    use HasFactory;
    protected $table = "privilegio";
    protected $fillable = ['id','roles_id','descripcion','estado','created_at','update_at'];
}
