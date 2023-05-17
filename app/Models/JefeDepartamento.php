<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JefeDepartamento extends Model
{
    use HasFactory;

    protected $table = 'jefesDepartamento';

    public function usuario()
    {
        return $this->hasOne('App\Models\User', 'user_id', 'id');
    }

    // jefe departamento pertenece a departamento
    public function departamento()
    {
        return $this->belongsTo('App\Models\Departamento', 'depto_id', 'id');
    }

    // jefe departamento pertenece a uni
    public function universidad()
    {
        return $this->belongsTo('App\Models\Uni', 'uni_id', 'id');
    }
}
