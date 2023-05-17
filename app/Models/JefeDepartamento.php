<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JefeDepartamento extends Model
{
    use HasFactory;

    protected $table = 'jefes_departamento';

    public function usuario()
    {
        return $this->hasOne('App\Models\User', 'user_id', 'id');
    }

    // jefe departamento pertenece a departamento
    public function departamento()
    {
        return $this->belongsTo('App\Models\departamento', 'depto_id', 'id');
    }
}
