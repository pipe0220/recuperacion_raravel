<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_pago extends Model
{
    use HasFactory;

    protected $fillable = ['descripcion'];

    // Relación uno a muchos con Pago
    public function pagos()
    {
        return $this->hasMany(Pago::class);
    }
}
