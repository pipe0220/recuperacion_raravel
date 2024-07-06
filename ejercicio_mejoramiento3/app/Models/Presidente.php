<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presidente extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'apellidos', 'año', 'fecha_nac'];

    
    public function equipos()
    {
        return $this->hasMany(Equipo::class);
    }
}
