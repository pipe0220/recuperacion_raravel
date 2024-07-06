<?php

namespace App\Models;

use App\Models\Proyecto;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'domicilio', 'banco', 'numero_cuenta', 'telefono'];

    // relación muchos a muchos con Proyecto
    public function proyectos()
    {
        return $this->belongsToMany(Proyecto::class, 'colaborador_proyecto');
    }

    // relación uno a muchos con Pago
    public function pagos()
    {
        return $this->hasMany(Pago::class);
    }
}
