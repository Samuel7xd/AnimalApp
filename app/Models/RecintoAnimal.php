<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Generated By PlantUML Command
class RecintoAnimal extends Model
{
    protected $fillable = [
        'animal_id',
        'recinto_id',
    ];

    public function recinto()
    {
        return $this->hasOne(\App\Models\Recinto);
    }

    public function animals()
    {
        return $this->hasMany('App\Models\Animal');
    }
}
