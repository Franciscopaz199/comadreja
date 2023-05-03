<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\puente;

class Clase extends Model
{
	use HasFactory;
	
    public $timestamps = true;
    protected $table = 'clases';
    
    protected $fillable = ['name','description','departamento','codigo','UV','dificultad'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function departa()
    {
        return $this->hasOne('App\Models\Departamento', 'id', 'departamento');
    }
    
    // relacion muchos a muchos con la tabla student
    public function students()
    {
        return $this->belongsToMany('App\Models\student', 'clasesquepuedesacar', 'clase_id', 'student_id');
    }

    // relacion muchos a muchos con la tabla carreras
    public function carreras()
    {
        return $this->belongsToMany('App\Models\Carrera', 'carreras_has_clasess', 'clases_id', 'career_id')->withPivot('prioridad');
    }
    
    public function carrerashasclases()
    {
        return $this->hasMany('App\Models\clasescarreras', 'clases_id', 'id');
    }
    /*
    // relacion uno a muchos con el modelo puente
    public function puente()
    {
        return $this->hasMany('App\Models\puente', 'clases_id', 'id')->where('career_id', auth()->user()->student[0]->carrer->id)->orderBy('prioridad', 'asc');
    }
    */

   // relacion uno a uno con el modelo puente
   
   
    
  
}
