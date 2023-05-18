<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Clase;

class Departamento extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'departamentos';

    protected $fillable = ['name','shortname','status'];
	

    public function clases()
    {
        return $this->hasMany(Clase::class, 'departamento', 'id');
    }
    
    public function carreras()
    {
        $carreras = [];
        foreach ($this->clases as $clase) {
            if (!in_array($clase->carreras, $carreras)) {
                $carreras[] = $clase->carreras;
            }
        }
        return $carreras;
    }


    public function clases_carrera()
    {
        $clases_carrera = auth()->user()->student->carrer->clases;
        $clases = [];
        $uv = 0;

        foreach ($clases_carrera as $clase) 
        {
            if ($clase->departamento == $this->id) 
            {
                array_push($clases, $clase);
                $uv += $clase->UV;
            }
        }
        $clases = [
            'uv' => $uv,
            'clases' => $clases,
            'total' => count($clases)
        ];
        return $clases;
    }

    public function clases_estudiante()
    {
        $clasesestudi = auth()->user()->student->clases;
        $clasesrestantes = [];
        $uv = 0;

        foreach ($clasesestudi as $clase) 
        {
            if ($clase->departamento == $this->id) 
            {
                array_push($clasesrestantes, $clase);
                $uv += $clase->UV;
            }
        }

        $clasesest = [
            'uv' => $uv,
            'total' => count($clasesrestantes),
            'clases' => $clasesrestantes
        ];
        return $clasesest;
    }


}
