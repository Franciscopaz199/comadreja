<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Uni;

class Carrera extends Model
{
	use HasFactory;
	
    public $timestamps = true;
    protected $table = 'carreras';
    protected $fillable = ['name','shortname','status','logo','description','color1','color2','color3','facultad'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function facultade()
    {
        return $this->hasOne('App\Models\Facultade', 'id', 'facultad');
    }
    
    // relacion de muchos a muchos con la tabla clases

    // relacion de muchos a muchos con la tabla clases
   
    // relacion de uno a muchos con el modelo student
    public function students()
    {
        return $this->hasMany('App\Models\Student','carrera', 'id');
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


    /*
         public function carreras()
    {
        return $this->belongsToMany(Carrera::class, 'unihascarreras', 'university_id', 'career_id');
    }
    */
}
