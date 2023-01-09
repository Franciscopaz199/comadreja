<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
	use HasFactory;
	
    public $timestamps = true;
    protected $table = 'clases';
    public $requisitos = [];

    protected $fillable = ['name','description','departamento','codigo','UV','dificultad'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function departa()
    {
        return $this->hasOne('App\Models\Departamento', 'id', 'departamento');
    }
    
}
