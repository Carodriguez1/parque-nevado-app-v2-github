<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservas extends Model
{
    use HasFactory;

    protected $table = 'reservas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'uuid',
        'fecha_reserva',
        'hora_reserva',
        'numero_personas',
        'mayores_18',
        'menores_18',
        'tipo_plan',
        'servicio_adicional',
        'valor_reserva',
        'estado_pago',
        'cliente_id'];

    public function clientes()
    {
        return $this->belongsTo(Clientes::class, 'cliente_id');
    }
}
