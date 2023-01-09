<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    // relacion uno a muchos con la tabla universidad
    public function universidad()
    {
        return $this->belongsTo('App\Models\Uni');
    }

    /// relacion uno a uno con la tabla carrera
    public function carrer()
    {
        return $this->hasOne('App\Models\carrera', 'id', 'carrera');
    }
    // relacion uno a muchos con la tabla user
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function clases()
    {
        return $this->belongsToMany('App\Models\clase', 'clasesaprobadas', 'student_id', 'clase_id');
    }

   // clases que puede sacar el estudiante
    public function clasesdisponibles()
    {
        return $this->belongsToMany('App\Models\clase', 'clasesquepuedesacar', 'student_id', 'clase_id');
    }
}
