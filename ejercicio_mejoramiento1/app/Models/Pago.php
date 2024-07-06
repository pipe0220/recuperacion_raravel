<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $fillable = ['concepto', 'cantidad', 'fecha_pago', 'colaborador_id', 'tipo_pago_id'];

    // Relación muchos a uno con Colaborador
    public function colaborador()
    {
        return $this->belongsTo(Colaborador::class);
    }

    // Relación muchos a uno con TipoPago
    public function tipoPago()
    {
        return $this->belongsTo(Tipo_Pago::class);
    }
}
