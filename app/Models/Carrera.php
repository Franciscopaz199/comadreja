<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Uni;
use App\Models\Clase;

class Carrera extends Model
{
	use HasFactory;
	
    public $timestamps = true;
    protected $table = 'carreras';
    protected $fillable = ['name','shortname','status','logo','description','color1','color2','color3','facultad','periodos'];

    public function facultade()
    {
        return $this->hasOne('App\Models\Facultade', 'id', 'facultad');
    }
   
    // relacion de uno a muchos con el modelo student
    public function students()
    {
        return $this->hasMany('App\Models\student','carrera', 'id');
    }
    // relacion uno a muchos con el modelo puente
    public function puente()
    {
        return $this->hasMany('App\Models\puente', 'career_id', 'id');
    }

    // hacer la relacion para recuperar las universidades en donde se imparte la carrera
    public function unis()
    {
        return $this->belongsToMany(Uni::class, 'unihascarreras', 'career_id', 'university_id');
    }

    // hacer la relacion con el modelo puente para recuperar las clases que se imparten en la carrera
    public function clases()
    {
        return $this->belongsToMany(Clase::class, 'puente', 'career_id', 'clases_id')->withPivot('prioridad');
    }



    public function departamentos()
    {
        $departamentos = [];
        foreach ($this->clases as $clase) {
            if (!in_array($clase->departa, $departamentos)) {
                $departamentos[] = $clase->departa;
            }
        }
        return $departamentos;
    }

    /*
         public function carreras()
    {
        return $this->belongsToMany(Carrera::class, 'unihascarreras', 'university_id', 'career_id');
    }
    */
}
