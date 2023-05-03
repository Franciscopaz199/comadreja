<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class requisitos extends Model
{
    protected $table = 'requisitos';


    public function clase()
    {
        return $this->belongsTo('App\Models\Clase', 'clases_id', 'id');
    }

    public function clasescarreras()
    {
        return $this->hasMany('App\Models\clasescarreras', 'requisito_id', 'id');
    }

  
    use HasFactory;
}
