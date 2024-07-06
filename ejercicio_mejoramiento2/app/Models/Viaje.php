<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    use HasFactory;
    protected $fillable = ['id','num_plazas', 'fecha', 'otros_datos', 'viajero_id', 'origen_id', 'destino_id'];

    //relacion uno a muchos con viajeros
    public function viajero()
    {
        return $this->belongsTo(Viajero::class);
    }

    //relacion uno a muchos inversa con destinos
    public function destino()
    {
        return $this->belongsTo(Destino::class,'destino_id');
    }

    public function origen()
    {
        return $this->belongsTo(Origen::class,'origen_id');
    }
}
