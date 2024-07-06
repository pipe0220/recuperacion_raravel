<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Origen extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','otros_datos'];

    //uno a muchos
    public function viajes()
    {
        return $this->hasMany(Viaje::class,'origen_id');
    }
}
