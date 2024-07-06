<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'estadio', 'aforo', 'año', 'ciudad', 'presidente_id'];

    public function presidente()
    {
        return $this->belongsTo(Presidente::class);
    }

    public function jugadores()
    {
        return $this->hasMany(Jugador::class);
    }

    public function partidos()
    {
        return $this->belongsToMany(Partido::class, 'equipo_partido');
    }
}
