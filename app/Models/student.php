<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $fillable = [
        'accountnumber',
        'uni',
        'carrera',
        'user',
    ];

    // relacion uno a uno con la tabla universidad
    public function universidad()
    {
        return $this->hasOne('App\Models\Uni', 'id', 'uni');
    }
    /// relacion uno a uno con la tabla carrera
    public function carrer()
    {
        return $this->hasOne('App\Models\Carrera', 'id', 'carrera');
    }
    // relacion uno a uno con la tabla user
    public function usuario()
    {
        return $this->hasOne('App\Models\User', 'id', 'user');
    }  

    public function clases()
    {
        return $this->belongsToMany('App\Models\Clase', 'clasesaprobadas', 'student_id', 'clase_id');
    }

   // clases que puede sacar el estudiante
    public function clasesdisponibles()
    {
        return $this->belongsToMany('App\Models\puente', 'clasesquepuedesacar', 'student_id', 'puente_id');
    }

}
