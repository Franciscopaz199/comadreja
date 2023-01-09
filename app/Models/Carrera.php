<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    public function clases()
    {
        return $this->belongsToMany('App\Models\Clase', 'carreras_has_clasess', 'career_id', 'clases_id')->withPivot('requisito_id','requisito2_id', 'id', 'prioridad');
    }
    
}
