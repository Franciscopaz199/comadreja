<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class puente extends Model
{
    use HasFactory;
    protected $fillable = ['clase_id','career_id'];
    protected $table = 'puente';
    
    public function clase()
    {
        return $this->belongsTo('App\Models\Clase', 'clases_id', 'id');
    }

    public function carreras()
    {
        return $this->belongsTo('App\Models\Carrera', 'career_id', 'id');
    }

    public function requisitos()
    {
        return $this->belongsToMany('App\Models\Clase', 'requisitos', 'puente_id', 'clases_id');
    }
}
