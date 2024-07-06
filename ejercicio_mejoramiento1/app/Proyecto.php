<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;
    protected $fillable = ['descripcion', 'fecha_inicio', 'fecha_fin', 'cuantia', 'cliente_id'];

    //relacion uno a muchos inversa con cliente
    public function clientes()
    {
        return $this->belongsTo(Cliente::class) ;
    }

    //relacion muchos a muchos con colaborador
    public function colaboradores()
    {
        return $this->belongsToMany(Colaborador::class, 'colaborador_proyecto');
    }
}
