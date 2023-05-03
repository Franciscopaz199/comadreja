<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clasescarreras extends Model
{
    protected $table = 'carreras_has_clasess';

    use HasFactory;


    public function carrera()
    {
        return $this->belongsTo('App\Models\Carrera', 'career_id', 'id');
    }

    public function clase()
    {
        return $this->belongsTo('App\Models\Clase', 'clases_id', 'id')->withPivot('prioridad');
    }

    public function requisito()
    {
        return $this->belongsTo('App\Models\requisitos', 'requisito_id', 'id');
    }
}
