<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    use HasFactory;

    protected $fillable = ['goles_fuera', 'goles_casa', 'fecha'];

    public function equipos()
    {
        return $this->belongsToMany(Equipo::class, 'equipo_partido');
    }

    public function goles()
    {
        return $this->hasMany(Gol::class);
    }
}
