<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Generated By PlantUML Command
class Recinto extends Model
{
    protected $fillable = [
        'capacidad',
        'ubicacion',
    ];

    public function recintoanimal()
    {
        return $this->belongsTo('App\Models\RecintoAnimal');
    }
}
