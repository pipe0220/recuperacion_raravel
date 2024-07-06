<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viajero extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','direccion','telefono'];

    //uno a muchos inversa
    public function viajes()
    {
        return $this->hasMany(Viaje::class);
    }


}
