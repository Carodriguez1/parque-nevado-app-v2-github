<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    protected $table = 'clientes';
    protected $primaryKey = 'id';
    protected $fillable = ['id','tipo_doc','numero_doc','nombre','correo','telefono','departamento','ciudad', 'direccion','fecha_nacimiento','edad'];
}
