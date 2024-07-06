<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = ['num_social', 'domicilio', 'tfno'];

    // Relación uno a muchos con Proyecto
    public function proyectos()
    {
        return $this->hasMany(Proyecto::class);
    }
}
